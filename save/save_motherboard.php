<?

if($_FILES['image_uppload']['name']){ 
	require_once 'uppload_image.php';
	$img = $_FILES['image_uppload'];
	if(!($src_image = uppload_image($img)))
		redirect($_SERVER['HTTP_REFERER']);
}
// result $src_image;

$q = 'insert into motherboard values(null, "'.$_POST['firm'].'", "'.$_POST['model'].'", '.$_POST['socket'].',
									'.$_POST['count_ide'].', '.$_POST['count_vga'].', '.$_POST['count_hdmi'].', 
								'.$_POST['count_audio'].', '.$_POST['speed_lan'].', "'.$_POST['title_audio'].'", 
							'.$_POST['count_dvi'].', '.$_POST['count_contact_power_cpu'].', '.$_POST['count_contact_power_mb'].', 
						'.$_POST['max_ram_mhz'].', "'.$_POST['formfactor'].'", '.$_POST['count_ps2_mouse'].', 
						'.$_POST['count_ps2_keyboard'].' )';
if($q = mysql_query($q, $db)){
	if($src_image || $_POST['count_ddr1'] || $_POST['generation_pci_1'] || $_POST['title_wifi'] || $_POST['generation_usb_1'] || $_POST['generation_sata_1'])
		$search = 'select id from motherboard where 
					firm="'.$_POST['firm'].'" 
					and model="'.$_POST['model'].'" 
					and socket='.$_POST['socket'].' 
					and count_contact_power_cpu='.$_POST['count_contact_power_cpu'].' 
					and count_contact_power_mb='.$_POST['count_contact_power_mb'];
}
if($search){
	$q = mysql_query($search, $db);
	$r = mysql_fetch_array($q);
	if($r['id'] && $src_image){
		$q = 'insert into image_motherboard values('.$r['id'].', "'.$src_image.'")';
		mysql_query($q, $db);
	}
	if($r['id'] && $_POST['generation_pci_1']){ 
		for($i=1;$_POST['generation_pci_'.$i];$i++){
			$q = 'insert into pci_motherboard values('.$r['id'].', '.$_POST['generation_pci_'.$i].', 
			'.$_POST['slot_'.$i].', '.$_POST['count_pci_'.$i].' )';
			mysql_query($q, $db);
		}
	}
	if($r['id'] && $_POST['title_wifi']){
		$q = 'insert into wifi_motherboard values('.$r['id'].', "'.$_POST['title_wifi'].'" )';
		mysql_query($q, $db);
	}
	if($r['id'] && isset($_POST['count_ddr1'])){ 
		$q = 'insert into ram_motherboard values('.$r['id'].', '.$_POST['count_ddr1'].', 
		'.$_POST['count_ddr2'].', '.$_POST['count_ddr3'].', '.$_POST['count_ddr4'].' )';
		mysql_query($q, $db);
	}
	if($r['id'] && $_POST['generation_usb_1']){
		for($i=1;$_POST['generation_usb_'.$i];$i++){
			$q = 'insert into usb_motherboard values('.$r['id'].', '.$_POST['generation_usb_'.$i].', 
			'.$_POST['count_usb_'.$i].' )';
			mysql_query($q, $db);
		}
	}
	if($r['id'] && $_POST['generation_sata_1']){
		for($i=1;$_POST['generation_sata_'.$i];$i++){
			$q = 'insert into sata_motherboard values('.$r['id'].', '.$_POST['generation_sata_'.$i].', 
			'.$_POST['count_sata_'.$i].' )';
			mysql_query($q, $db);
		}
	}
}

redirect($_SERVER['HTTP_REFERER']);

?>