<?php
	$login          = $_POST["user_login"   ];
	$password       = $_POST["user_password"];

//Подключаем все, связанное с нашей БД
	require_once "work_with_database.php";

	$request_login = mysql_query("SELECT * FROM users WHERE login = '{$login}' AND password = '{$password}'");
	$user_exists = mysql_num_rows($request_login);

	if($user_exists > 0){
		session_start();
		echo session_id() . "\n";
		$current_user = mysql_fetch_array($request_login, MYSQL_ASSOC);
		foreach($current_user as $key => $value)
		{
			$_SESSION[$key] = $value;
				echo $key . " " . $_SESSION[$key] . "\n";
		}
		header('Location: choose_interests.php');
		exit();
	}
	else{
		echo
<<<RET
<html>
	<head>
		<title>Проверка аккаунта</title>
	</head>
	<body>
	<h3>Похоже, вы ввели неправильные данные или еще не зарегистрировались</h3>
    <form method="post" action="register_form.html">
	    <p><input type="submit" value="Зарегистрироваться"/></p>
	    <p><input type="button" value="Вернуться к странице входа"
	    onclick="location.href='hello.html'"/></p>
    </form>
	</body>
</html>
RET
;
	}
