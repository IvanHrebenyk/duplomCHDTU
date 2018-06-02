<?
function list_video_ddr($db){
	$q = 'select count(*) as "count" from type_memory_videocard';
	if($q = mysql_query($q, $db))
		$c = mysql_fetch_array($q);
	if($c['count'] > 0){
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
	if($c['count'] > 0){
		$q = 'select * from type_memory_ram';
		return mysql_query($q, $db);
	}
	else
		return false;
}

function list_socket($db){
	$q = 'select count(*) as "count" from socket';
	if($q = mysql_query($q, $db))
		$c = mysql_fetch_array($q);
	if($c['count'] > 0){
		$q = 'select * from socket';
		return mysql_query($q, $db);
	}
	else
		return false;
}

function list_flash_memory_type($db){
	$q = 'select count(*) as "count" from type_flash_memory';
	if($q = mysql_query($q, $db))
		$c = mysql_fetch_array($q);
	if($c['count'] > 0){
		$q = 'select * from type_flash_memory';
		return mysql_query($q, $db);
	}
	else
		return false;
}

function list_moderator($db){
	$q = 'select user.* from user where user.id not in (select admin.id_user from admin)';
	if($q = mysql_query($q, $db))
		return $q;
	else false;
}
?>