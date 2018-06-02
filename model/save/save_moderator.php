<?
$q = 'select count(*) as "count" from user where login="'.$_POST['login'].'"';
if($q = mysql_query($q, $db)){
	$c = mysql_fetch_array($q);
}
if($c['count'] == 0){
	$q = 'insert into user values(null, "'.$_POST['login'].'", "'.md5($_POST['password']).'")';
	if($q = mysql_query($q, $db))
		redirect($_SERVER['HTTP_REFERER']);
}
else 
	redirect($_SERVER['HTTP_REFERER']);
?>