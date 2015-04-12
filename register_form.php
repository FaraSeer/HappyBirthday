<html>
	<head>
		<title>Регистрация</title>
	</head>
	<body>
		<h1>Давай аккаунт создадим:</h1>
		<form method="post" action="register_new_user.php">
			<p>Логин:   <br /><input type="text"      name="user_login"          /></p>
			<p>Пароль:  <br /><input type="password"  name="user_password"       /></p>
			<p>Имя:     <br /><input type="text"      name="user_first_name"     /></p>
			<p>Фамилия: <br /><input type="text"      name="user_last_name"      /></p>
			<p>Отчество:<br /><input type="text"      name="user_last_last_name" /></p>
			<p>E-mail:  <br /><input type="email"     name="user_e_mail"         /></p>
			<p>Дата рождения:</p>
			<table>
				<tr>
					<td>День</td>
					<td>Месяц</td>
					<td>Год</td>
				</tr>
				<tr>
					<td>
						<select name="user_birth_day">
						<?php
							for($i = 1; $i <= 31; $i++) echo '<option>' . $i . '</option>';
						?>
						</select>
					</td>
					<td>
						<select name="user_birth_month">
						<?php
							$month = array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
							foreach($month as $i) echo '<option>' . $i . '</option>';
						?>
						</select>
					</td>
					<td>
						<select name="user_birth_year">
						<?php
							for($i = 1920; $i <= 2015; $i++) echo '<option>' . $i . '</option>';
						?>
						</select>
					</td>
				</tr>
			</table>
			<p><input type="submit" value="Да отправляй уже"></p>
		</form>
		<form method="post" action="check_mysql.php">
			<p><input type="submit" value="Да проверяй MySQL уже"></p>
		</form>
	</body>
</html>