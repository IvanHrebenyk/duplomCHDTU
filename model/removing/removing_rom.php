<?
// echo $addition_action_name;
function image_rom($db, $id){
	$q = 'select * from image_rom where id_rom='.$id;
	if($q = mysql_query($q, $db)){
		$r = mysql_fetch_array($q);
		return $r['path'];
	}
	return false;
}

function image_rom_remove($db, $id, $path){
	if(file_exists($path))
		if(unlink($path)){
			$q = 'delete from image_rom where id_rom='.$id;
			return mysql_query($q, $db);
	}
}

function delete_rom($db, $id){
	$q = 'delete from rom where id='.$id;
	mysql_query($q, $db);
	return true;
}

function delete_interface_memory($db, $id){
	$q = 'select count(id_rom) as count from interface_memory where id_rom='.$id;
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from interface_memory where id_rom='.$id;
		if(mysql_query($q,$db))
			return true;
	}
}

function delete_ssd($db, $id){
	$q = 'select count(id_rom) as count from ssd where id_rom='.$id;
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from ssd where id_rom='.$id;
		if(mysql_query($q,$db))
			return true;
	}
}

function delete_hdd($db, $id){
	$q = 'select count(id_rom) as count from hdd where id_rom='.$id;
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from hdd where id_rom='.$id;
		if(mysql_query($q,$db))
			return true;
	}
}
?>