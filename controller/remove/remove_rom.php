<?
if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'moderator'){
	$id = $addition_action_name;
	include 'model/removing/removing_'.$controller_name.'.php';

	$path_image = image_rom($db, $id);
	image_rom_remove($db, $id, $path_image);
	
	delete_interface_memory($db, $id);
	delete_ssd($db, $id);
	delete_hdd($db, $id);

	delete_rom($db, $id);
	redirectNewLink($_SERVER['SERVER_NAME']);
}
else
	redirect($_SERVER['HTTP_REFERER']);
?>