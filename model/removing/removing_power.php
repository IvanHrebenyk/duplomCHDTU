<?
// echo $addition_action_name;
function image_power($db, $id){
	$q = 'select * from image_power where id_power='.$id;
	if($q = mysql_query($q, $db)){
		$r = mysql_fetch_array($q);
		return $r['path'];
	}
	return false;
}

function image_power_remove($db, $id, $path){
	if(file_exists($path))
		if(unlink($path)){
			$q = 'delete from image_power where id_power='.$id;
			return mysql_query($q, $db);
	}
}

function delete_power($db, $id){
	$q = 'delete from power where id='.$id;
	mysql_query($q, $db);
	return true;
}

function delete_connect_motherboard_power($db, $id){
	$q = 'select count(*) as count from connect_motherboard where id_power='.$id;
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from connect_motherboard where id_power='.$id;
		if(mysql_query($q,$db))
			return true;
	}
}

function delete_connect_cpu_power($db, $id){
	$q = 'select count(*) as count from connect_cpu where id_power='.$id;
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from connect_cpu where id_power='.$id;
		if(mysql_query($q,$db))
			return true;
	}
}

function delete_videocard_power($db, $id){
	$q = 'select count(*) as count from power_videocard where id_power='.$id;
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from power_videocard where id_power='.$id;
		if(mysql_query($q,$db))
			return true;
	}
}

?>