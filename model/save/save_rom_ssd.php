<?
if($_FILES['image_uppload']['name']){ 
	require_once 'model/uppload_image.php';
	$img = $_FILES['image_uppload'];
	if(!($src_image = uppload_image($img)))
		redirect($_SERVER['HTTP_REFERER']);
}
// result $src_image;
$q = 'insert into rom values(null, "'.$_POST['firm'].'", "'.$_POST['model'].'", '.$_POST['memory'].',
									"'.$_POST['technology'].'", "'.$_POST['formfactor'].'", '.$_POST['power'].', 
									'.$_POST['weight'].', '.$_POST['long'].', '.$_POST['width'].', 
									'.$_POST['thickness'].')';
if($q = mysql_query($q, $db)){
	if($src_image || $_POST['generation'] || $_POST['read'] || $_POST['write'])
	$search = 'select id from rom where 
				firm="'.$_POST['firm'].'" 
				and model="'.$_POST['model'].'"';
}
if($search){
	$q = mysql_query($search, $db);
	$r = mysql_fetch_array($q);
	if($r['id'] && $src_image){  
		$q = 'insert into image_rom values('.$r['id'].', "'.$src_image.'")';
		mysql_query($q, $db);
	}
	if($r['id'] && $_POST['generation']){
		$q = 'insert into interface_memory values(null, '.$r['id'].', "'.$_POST['title'].'", '.$_POST['generation'].')';
		mysql_query($q, $db);
	}
	if($r['id'] && $_POST['read']){
		$q = 'insert into ssd values('.$r['id'].', "'.$_POST['read'].'", '.$_POST['write'].', "'.$_POST['dead_time'].'", 
		"'.$_POST['type'].'", '.$_POST['type_flash_memory'].' )';
		mysql_query($q, $db);
	}
}

 redirect($_SERVER['HTTP_REFERER']);
?>