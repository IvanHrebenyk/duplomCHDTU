<?
function isset_videocardID($db, $id){
	$q = 'select count(videocard.id) as count from videocard where videocard.id = '.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'])
		return true;
	else
		return false;
}

function info_videocard($db, $id){
	$q = 'select videocard.*, image_gpu.path as image, additional_power_videocard.*, type_memory_videocard.title as title_memory, type_memory_videocard.generation as generation_memory from videocard left join image_gpu on image_gpu.id_gpu=videocard.id left join additional_power_videocard on additional_power_videocard.id_videocard=videocard.id left join type_memory_videocard on type_memory_videocard.id=videocard.type_memory
	where videocard.id='.$id;

	return mysql_query($q, $db);
}
?>