<html>
	<head>
		<title>Результат регистрации</title>
	</head>
	<body>
		<?php
			$login          = $_POST["user_login"         ];
			$password       = $_POST["user_password"      ];
			$first_name     = $_POST["user_first_name"    ];
			$last_name      = $_POST["user_last_name"     ];
			$last_last_name = $_POST["user_last_last_name"];
			$email          = $_POST["user_e_mail"        ];
			$birth_day      = $_POST["user_birth_day"     ];
			$birth_month    = $_POST["user_birth_month"   ];
			$birth_year     = $_POST["user_birth_year"    ];

			$month = array("Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь");
			for($i = 0; $i < 12; $i++) if($month[$i] == $birth_month) $birth_month_number = $i+1;
			$birth_date = $birth_year. "-" . $birth_month_number . "-" . $birth_day;

//Подключаем все, связанное с нашей БД
			require_once "work_with_database.php";

			$request_login = mysql_query("SELECT * FROM users WHERE login = '{$login}'");
			$request_email = mysql_query("SELECT * FROM users WHERE email = '{$email}'");
			$user_exists = mysql_num_rows($request_login) + mysql_num_rows($request_email);
//Если таких записей нет, то заносим данные нового пользователя в таблицу
			if($user_exists == 0){
				$user_insert = mysql_query("INSERT INTO users VALUES
						(
							NULL,
							'$login',
							'$password',
							'$first_name',
							'$last_name',
							'$last_last_name',
							'$email',
							'$birth_date'
						)"
						);
				if(!$user_insert){
					echo "<h3>Почему-то регистрация не удалась!</h3>";
					echo "<h3>Обратитесь к администратору сайта.</h3>";
				}
				else{
					echo "<h3>Вы зарегистрированы!</h3>";
					echo "<h3>На ваш e-mail направлено письмо с подтверждением регистрации.</h3>";
				}
			}
			else{
				if(mysql_num_rows($request_login)) echo "<h3>Пользователь с таким логином уже существует!</h3>";
				if(mysql_num_rows($request_email)) echo "<h3>Пользователь с таким email уже существует!</h3>";
			}

			$full_name = $first_name . ' ' . $last_last_name;
			$message = "";

//			if(mail($email, $full_name, $message, "From: test@test.ru" ) == TRUE) echo "Mail sent";
//			else echo "Mail NOT sent";

		?>
	</body>
</html>


