<?
if($_FILES['image_uppload']['name']){  //echo '<script>alert("qwedrfty");</script>';
	require_once 'model/uppload_image.php';
	$img = $_FILES['image_uppload'];
	if(!($src_image = uppload_image($img)))
		redirect($_SERVER['HTTP_REFERER']);

}
// result $src_image;

$q = 'insert into videocard values(null, "'.$_POST['firm'].'", "'.$_POST['model'].'", '.$_POST['memory_mhz'].',
									'.$_POST['core_mhz'].', '.$_POST['count_cooler'].', '.$_POST['memory'].', 
									'.$_POST['count_hdmi'].', '.$_POST['count_vga'].', '.$_POST['count_display_port'].', 
									'.$_POST['memory_bit'].', '.$_POST['type_memory'].', '.$_POST['generation_pci'].', '.$_POST['slot'].')';
if($q = mysql_query($q, $db)){
	if($src_image || $_POST['count_contact_loop'])
	$search = 'select id from videocard where 
				firm="'.$_POST['firm'].'" 
				and model="'.$_POST['model'].'" 
				and memory_mhz='.$_POST['memory_mhz'].' 
				and core_mhz='.$_POST['core_mhz'].' 
				and count_cooler='.$_POST['count_cooler'].' 
				and memory='.$_POST['memory'].' 
				and count_hdmi='.$_POST['count_hdmi'].' 
				and count_vga='.$_POST['count_vga'].' 
				and count_display_port='.$_POST['count_display_port'].' 
				and memory_bit='.$_POST['memory_bit'].' 
				and type_memory='.$_POST['type_memory'].' 
				and generation_pci='.$_POST['generation_pci'].' 
				and slot='.$_POST['slot'];
}
if($search){
	$q = mysql_query($search, $db);
	$r = mysql_fetch_array($q);
	if($r['id'] && $src_image){ 
		$q = 'insert into image_gpu values('.$r['id'].', "'.$src_image.'")';
		mysql_query($q, $db);
	}
	if($r['id'] && $_POST['count_contact_loop']){
		$q = 'insert into additional_power_videocard values('.$r['id'].', '.$_POST['count_need_loop'].', 
															'.$_POST['count_contact_loop'].')';
		mysql_query($q, $db);
	}
}

redirect($_SERVER['HTTP_REFERER']);

?>