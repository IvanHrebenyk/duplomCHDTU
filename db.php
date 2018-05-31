<?
	$shost = "localhost";
	$slogin = "root";
	$spass = "";
	$sdb_name = "pc_component";
	$db = mysql_connect($shost,$slogin,$spass);
	mysql_select_db($sdb_name,$db);
	mysql_query("SET NAMES 'utf8'");
	mysql_set_charset("utf8");
?>