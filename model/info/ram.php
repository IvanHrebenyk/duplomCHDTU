<?
function isset_ramID($db, $id){
	$q = 'select count(ram.id) as count from ram where ram.id = '.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'])
		return true;
	else
		return false;
}

function info_ram($db, $id){
	$q = 'select ram.*, type_memory_ram.title as title_memory, type_memory_ram.generation as generation_memory, image_ram.path as image from ram left join image_ram on image_ram.id_ram=ram.id inner join type_memory_ram on type_memory_ram.id=ram.type_memory
	where ram.id='.$id;

	return mysql_query($q, $db);
}
?>