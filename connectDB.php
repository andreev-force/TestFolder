<?php
function connect_DB(){
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'chat';
    //����� ������;
    //����� ������;

	function doSmth($a, $b){
			//do somethink;
	}
	/*
	��� ���� ������� ������
	*/
    //�������� ���������
    setlocale(LC_ALL, 'ru_RU.CP1251');

    //����������� � ��
    mysql_connect($server, $username, $password) or die ('No connect to Data Base');
    //����� ������ ��������� �� �������!!!
    mysql_query('SET NAMES cp1251');
    mysql_select_db($dbname) or die ('No data base');

    //�������� ������
    session_start();

}
?>