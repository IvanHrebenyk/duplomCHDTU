<?
// echo $addition_action_name;
function image_ram($db, $id){
	$q = 'select * from image_ram where id_ram='.$id;
	if($q = mysql_query($q, $db)){
		$r = mysql_fetch_array($q);
		return $r['path'];
	}
	return false;
}

function image_ram_remove($db, $id, $path){
	if(file_exists($path))
		if(unlink($path)){
			$q = 'delete from image_ram where id_ram='.$id;
			return mysql_query($q, $db);
	}
}

function delete_ram($db, $id){
	$q = 'delete from ram where id='.$id;
	mysql_query($q, $db);
	return true;
}
?>