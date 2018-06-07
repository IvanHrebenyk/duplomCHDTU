<?
if($_FILES['image_uppload']['name']){ 
	require_once 'model/uppload_image.php';
	$img = $_FILES['image_uppload'];
	if(!($src_image = uppload_image($img)))
		redirect($_SERVER['HTTP_REFERER']);
}
// result $src_image;

$q = 'insert into cpu values(null, "'.$_POST['firm'].'", "'.$_POST['model'].'", '.$_POST['ghz'].',
									'.$_POST['type_ram'].', '.$_POST['socket'].', '.$_POST['power'].', 
									'.$_POST['command_set'].', '.$_POST['cache'].', '.$_POST['level_cache'].', 
									'.$_POST['core'].')';
if($q = mysql_query($q, $db)){
	if($src_image || $_POST['title_graphic'])
	$search = 'select id from cpu where 
				firm="'.$_POST['firm'].'" 
				and model="'.$_POST['model'].'" 
				and socket='.$_POST['socket'];
}
if($search){
	$q = mysql_query($search, $db);
	$r = mysql_fetch_array($q);
	if($r['id'] && $src_image){  
		$q = 'insert into image_cpu values('.$r['id'].', "'.$src_image.'")';
		mysql_query($q, $db);
	}
	if($r['id'] && $_POST['title_graphic']){
		$q = 'insert into cpu_graphic values('.$r['id'].', "'.$_POST['title_graphic'].'")';
		mysql_query($q, $db);
	}
}

redirect($_SERVER['HTTP_REFERER']);
?>