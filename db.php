<?
	$shost = "localhost";
	$slogin = "root";
	$spass = "";
	$sdb_name = "pc_component";
	$sconnect = mysql_connect($shost,$slogin,$spass);
	mysql_select_db($sdb_name,$sconnect);
	mysql_query("SET NAMES 'utf8'");
	mysql_set_charset("utf8");
?>