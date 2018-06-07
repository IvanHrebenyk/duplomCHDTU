<?
if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'moderator'){
	$id = $addition_action_name;
	include 'model/removing/removing_'.$controller_name.'.php';

	$path_image = image_power($db, $id);
	image_power_remove($db, $id, $path_image);
	
	delete_connect_motherboard_power($db, $id);
	delete_connect_cpu_power($db, $id);
	delete_videocard_power($db, $id);
	
	delete_power($db, $id);

	redirectNewLink($_SERVER['SERVER_NAME']);
}
else
	redirect($_SERVER['HTTP_REFERER']);
?>