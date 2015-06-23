<?php
function connect_DB(){
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'chat';
    //Новый комент;
    //Новый комент;

	function doSmth($a, $b){
			//do somethink;
	}
	/*
	Еще один большой комент
	*/
    //Языковая настройка
    setlocale(LC_ALL, 'ru_RU.CP1251');

    //Подключение к БД
    mysql_connect($server, $username, $password) or die ('No connect to Data Base');
    //Опять ставим кодировку на таблицу!!!
    mysql_query('SET NAMES cp1251');
    mysql_select_db($dbname) or die ('No data base');

    //Открытие сессии
    session_start();

}
?>