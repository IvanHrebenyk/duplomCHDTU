<?
function list_video_ddr($db){
	$q = 'select count(*) as "count" from type_memory_videocard';
	if($q = mysql_query($q, $db))
		$c = mysql_fetch_array($q);
	if($c > 0){
		$q = 'select * from type_memory_videocard';
		return mysql_query($q, $db);
	}
	else
		return false;
}

function list_ram_ddr($db){
	$q = 'select count(*) as "count" from type_memory_ram';
	if($q = mysql_query($q, $db))
		$c = mysql_fetch_array($q);
	if($c > 0){
		$q = 'select * from type_memory_ram';
		return mysql_query($q, $db);
	}
	else
		return false;
}
?>