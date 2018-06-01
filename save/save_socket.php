<?

$q = 'select count(*) as "count" from socket where title="'.$_POST['socket'].'"';
if($q = mysql_query($q, $db)){
	$c = mysql_fetch_array($q);
}
if($c['count'] == 0){
	$q = 'insert into socket(id, title) values(null, "'.$_POST['socket'].'")';
	if($q = mysql_query($q, $db))
		redirect($_SERVER['HTTP_REFERER']);
}

?>