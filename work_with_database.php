<?php
//Подключаемся к mysql-серверу
	$mc = mysql_connect("localhost", "root", "123456") or die (mysql_error());
//Если базы данных не существовало, то создаем ее
	mysql_query("CREATE DATABASE IF NOT EXISTS lab212") or die (mysql_error());
//Выбираем нужную базу данных
	$db_selected = mysql_select_db('lab212', $mc) or die (mysql_error());
//Если таблицы не существовало, то создаем ее
	mysql_query("CREATE TABLE IF NOT EXISTS users
        (
          id                INT NOT NULL AUTO_INCREMENT,
          login             TINYTEXT,
          password          TINYTEXT,
          first_name        TINYTEXT,
          last_name         TINYTEXT,
          last_last_name    TINYTEXT,
          email             TINYTEXT,
          birth_date        DATE,
          PRIMARY KEY (id)
        )"
    ) or die (mysql_error());