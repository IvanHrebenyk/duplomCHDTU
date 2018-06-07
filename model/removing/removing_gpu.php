<?
// echo $addition_action_name;
function image_videocard($db, $id){
	$q = 'select * from image_gpu where id_gpu='.$id;
	if($q = mysql_query($q, $db)){
		$r = mysql_fetch_array($q);
		return $r['path'];
	}
	return false;
}

function image_videocard_remove($db, $id, $path){
	if(file_exists($path))
		if(unlink($path)){
			$q = 'delete from image_gpu where id_gpu='.$id;
			return mysql_query($q, $db);
	}
}

function delete_videocard($db, $id){
	$q = 'delete from videocard where id='.$id;
	mysql_query($q, $db);
	return true;
}

function delete_additional_power_videocard($db, $id){
	$q = 'select count(id_videocard) as count from additional_power_videocard where id_videocard='.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from additional_power_videocard where id_videocard='.$id;
		if(mysql_query($q,$db))
			return true;
	}
}

?>