<?php
	$mc = mysql_connect("localhost", "root", "123456") or die (mysql_error());
	//Выбираем нужную базу данных
	$db_selected = mysql_select_db('lab212', $mc) or die (mysql_error());

	mysql_query("CREATE TABLE IF NOT EXISTS `{$_SESSION['login']}`
        (
          interest TINYTEXT
        )"
	) or die (mysql_error());

	foreach ($_POST as $key => $value)
		$user_insert = mysql_query("INSERT INTO `{$_SESSION['login']}` VALUES
			(
				'{$value['text']}'
			)"
		);
	//header('Location: choose_interests.html');
	exit();