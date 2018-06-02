<?
/*echo '<br>'.$_POST['firm'];
echo '<br>'.$_POST['model'];
echo '<br>'.$_POST['memory'];
echo '<br>'.$_POST['technology'];
echo '<br>'.$_POST['formfactor']; //float
echo '<br>'.$_POST['power']; //float
echo '<br>'.$_POST['weight'];
echo '<br>'.$_POST['long'];
echo '<br>'.$_POST['width'];
echo '<br>'.$_POST['thickness'];
echo '<br>'.$_POST['title'];
echo '<br>'.$_POST['generation'];
echo '<br>'.$_POST['rpm'];
echo '<br>'.$_POST['buffer'];
echo '<br>'.$_POST['speed_transfer'];
echo '<br>'.$_POST['noise'];
echo '<br>'.$_FILES['image_uppload']['name'];*/

if($_FILES['image_uppload']['name']){ 
	require_once 'uppload_image.php';
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
	if($src_image || $_POST['noise'] || $_POST['speed_transfer'] || $_POST['rpm'])
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
	if($r['id'] && $_POST['noise']){
		$q = 'insert into hdd values('.$r['id'].', "'.$_POST['rpm'].'", '.$_POST['buffer'].', '.$_POST['noise'].', 
		"'.$_POST['speed_transfer'].'" )';
		mysql_query($q, $db);
	}
}

 redirect($_SERVER['HTTP_REFERER']);
?>