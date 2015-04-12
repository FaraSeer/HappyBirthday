<html>
	<head>
		<title>Проверка аккаунта</title>
	</head>
	<body>
		<?php
			$login          = $_POST["user_login"         ];
			$password       = $_POST["user_password"      ];

//Подключаем все, связанное с нашей БД
			require_once "work_with_database.php";

			$request_login = mysql_query("SELECT * FROM users WHERE login = '{$login}' AND password = '{$password}'");
			$user_exists = mysql_num_rows($request_login);

			if($user_exists > 0){
					echo "<h3>Добро пожаловать!</h3>";
					echo "<h4>Переходим на другую страницу...</h4>";
					header('Location: choose_interests.php');
					exit();
			}
			else{
					echo "<h3>Ты кто вообще такой?</h3>";
			}
		?>
	</body>
</html>