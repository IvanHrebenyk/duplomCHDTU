<?
if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'moderator'){
	$id = $addition_action_name;
	include 'model/removing/removing_'.$controller_name.'.php';

	$path_image = image_motherboard($db, $id);
	image_motherboard_remove($db, $id, $path_image);
	delete_motherboard_ram($db, $id);
	delete_motherboard_pci($db, $id);
	delete_motherboard_wifi($db, $id);
	delete_motherboard_usb($db, $id);
	delete_motherboard_sata($db, $id);
	
	delete_motherboard($db, $id);

	redirectNewLink($_SERVER['SERVER_NAME']);
}
else
	redirect($_SERVER['HTTP_REFERER']);
?>