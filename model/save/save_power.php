<?

if($_FILES['image_uppload']['name']){ 
	require_once 'modal/uppload_image.php';
	$img = $_FILES['image_uppload'];
	if(!($src_image = uppload_image($img)))
		redirect($_SERVER['HTTP_REFERER']);
}
// result $src_image;

$q = 'insert into power values(null, "'.$_POST['firm'].'", "'.$_POST['model'].'", '.$_POST['watt'].',
									'.$_POST['count_sata'].', '.$_POST['count_molex'].')';
if($q = mysql_query($q, $db)){
	if($src_image || $_POST['count_contact_mb_1'] || $_POST['count_contact_cpu_1'] || $_POST['count_contact_gpu_1'])
	$search = 'select id from power where 
				firm="'.$_POST['firm'].'" 
				and model="'.$_POST['model'].'" 
				and watt='.$_POST['watt'].' 
				and count_sata='.$_POST['count_sata'].' 
				and count_molex='.$_POST['count_molex'];
}
if($search){
	$q = mysql_query($search, $db);
	$r = mysql_fetch_array($q);
	if($r['id'] && $src_image){
		$q = 'insert into image_power values('.$r['id'].', "'.$src_image.'")';
		mysql_query($q, $db);
	}
	if($r['id'] && $_POST['count_contact_mb_1']){
		for($i=1;$_POST['count_contact_mb_'.$i];$i++){
			$q = 'insert into connect_motherboard values('.$r['id'].', '.$_POST['count_contact_mb_'.$i].')';
			mysql_query($q, $db);
		}
	}
	if($r['id'] && $_POST['count_contact_cpu_1']){
		for($i=1;$_POST['count_contact_cpu_'.$i];$i++){
			$q = 'insert into connect_cpu values('.$r['id'].', '.$_POST['count_contact_cpu_'.$i].', 
			'.$_POST['count_loop_cpu_'.$i].' )';
			mysql_query($q, $db);
		}
	}
	if($r['id'] && $_POST['count_contact_gpu_1']){
		for($i=1;$_POST['count_contact_gpu_'.$i];$i++){
			$q = 'insert into power_videocard values('.$r['id'].', '.$_POST['count_contact_gpu_'.$i].', 
			'.$_POST['count_loop_gpu_'.$i].' )';
			mysql_query($q, $db);
		}
	}
}

redirect($_SERVER['HTTP_REFERER']);

?>