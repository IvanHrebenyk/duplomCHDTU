<?
//echo $_POST['title']. $_POST['generation'];

$q = 'select count(*) as "count" from type_memory_ram where title="'.$_POST['title'].'" AND generation='.$_POST['generation'];
if($q = mysql_query($q, $db)){
	$c = mysql_fetch_array($q);
}
if($c['count'] == 0){
	$q = 'insert into type_memory_ram(id, title, generation) values(null, "'.$_POST['title'].'", '.$_POST['generation'].')';
	if($q = mysql_query($q, $db))
		redirect($_SERVER['HTTP_REFERER']);
}
else 
	redirect($_SERVER['HTTP_REFERER']);
?>