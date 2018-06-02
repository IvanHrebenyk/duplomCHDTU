<?
if($_POST['login'] && $_POST['password']){
	$q = 'select * from user where login="'.$_POST['login'].'" and password="'.md5($_POST['password']).'"';
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['id']){
		$_SESSION['user'] = "moderator";
		$q = 'select count(*) as count from admin where id_user='.$r['id'];
		$q = mysql_query($q,$db);
		$admin = mysql_fetch_array($q);
		if($admin['count'] > 0)
			$_SESSION['user'] = "admin";
	}
}
redirect($_SERVER['HTTP_REFERER']);
?>