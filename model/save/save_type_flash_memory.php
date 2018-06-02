<?
$q = 'select count(*) as "count" from type_flash_memory where title="'.$_POST['title'].'"';
if($q = mysql_query($q, $db)){
	$c = mysql_fetch_array($q);
}
if($c['count'] == 0){
	$q = 'insert into type_flash_memory(id, title) values(null, "'.$_POST['title'].'")';
	if($q = mysql_query($q, $db))
		redirect($_SERVER['HTTP_REFERER']);
}
else 
	redirect($_SERVER['HTTP_REFERER']);
?>