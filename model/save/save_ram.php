<?
if($_FILES['image_uppload']['name']){ 
	require_once 'modal/uppload_image.php';
	$img = $_FILES['image_uppload'];
	if(!($src_image = uppload_image($img)))
		redirect($_SERVER['HTTP_REFERER']);
}
// result $src_image;

$q = 'insert into ram values(null, "'.$_POST['firm'].'", "'.$_POST['model'].'", '.$_POST['mhz'].', 
										'.$_POST['type_memory'].', "'.$_POST['destiny'].'", '.$_POST['memory'].')';
if($q = mysql_query($q, $db)){
	if($src_image)
	$search = 'select id from ram where 
				firm="'.$_POST['firm'].'" 
				and model="'.$_POST['model'].'" 
				and mhz='.$_POST['mhz'].' 
				and type_memory='.$_POST['type_memory'].' 
				and destiny="'.$_POST['destiny'].'" 
				and memory='.$_POST['memory'];
}
if($search){
	$q = mysql_query($search, $db);
	$r = mysql_fetch_array($q);
	if($r['id'] && $src_image){
		$q = 'insert into image_ram values('.$r['id'].', "'.$src_image.'")';
		mysql_query($q, $db);
	}
}

redirect($_SERVER['HTTP_REFERER']);
?>