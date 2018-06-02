<?
$q = 'delete from user where id='.$_POST['moderator'];
mysql_query($q, $db);
redirect($_SERVER['HTTP_REFERER']);
?>