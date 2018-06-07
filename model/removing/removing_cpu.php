<?

function image_cpu($db, $id){
	$q = 'select * from image_cpu where id_cpu='.$id;
	if($q = mysql_query($q, $db)){
		$r = mysql_fetch_array($q);
		return $r['path'];
	}
	return false;
}

function image_cpu_remove($db, $id, $path){
	if(file_exists($path))
		if(unlink($path)){
			$q = 'delete from image_cpu where id_cpu='.$id;
			return mysql_query($q, $db);
	}
}

function delete_cpu($db, $id){
	$q = 'delete from cpu where id='.$id;
	mysql_query($q, $db);
	return true;
}

function delete_cpu_graphic($db, $id){
	$q = 'select count(*) as count from cpu_graphic where id_cpu='.$id;
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0){
		$q = 'delete from cpu_graphic where id_cpu='.$id;
		mysql_query($q,$db);
	}
	return true;
}

?>