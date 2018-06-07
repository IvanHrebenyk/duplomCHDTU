<?
// echo $addition_action_name;
function image_motherboard($db, $id){
	$q = 'select * from image_motherboard where id_mb='.$id;
	if($q = mysql_query($q, $db)){
		$r = mysql_fetch_array($q);
		return $r['path'];
	}
	return false;
}

function image_motherboard_remove($db, $id, $path){
	if(file_exists($path))
		if(unlink($path)){
			$q = 'delete from image_motherboard where id_mb='.$id;
			return mysql_query($q, $db);
	}
}

function delete_motherboard($db, $id){
	$q = 'delete from motherboard where id='.$id;
	mysql_query($q, $db);
	return true;
}

function delete_motherboard_ram($db, $id){
	$q = 'delete from ram_motherboard where id_motherboard='.$id;
	if(mysql_query($q,$db))
		return true;
}

function delete_motherboard_pci($db, $id){
	$q = 'delete from pci_motherboard where id_motherboard='.$id;
	if(mysql_query($q,$db))
		return true;
}

function delete_motherboard_wifi($db, $id){
	$q = 'delete from wifi_motherboard where id_motherboard='.$id;
	if(mysql_query($q,$db))
		return true;
}

function delete_motherboard_usb($db, $id){
	$q = 'delete from usb_motherboard where id_motherboard='.$id;
	if(mysql_query($q,$db))
		return true;
}

function delete_motherboard_sata($db, $id){
	$q = 'delete from sata_motherboard where id_motherboard='.$id;
	if(mysql_query($q,$db))
		return true;
}
?>