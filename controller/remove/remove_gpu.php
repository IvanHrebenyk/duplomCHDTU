<?
if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'moderator'){
	$id = $addition_action_name;
	include 'model/removing/removing_'.$controller_name.'.php';

	$path_image = image_videocard($db, $id);
	image_videocard_remove($db, $id, $path_image);
	delete_additional_power_videocard($db, $id);
	
	delete_videocard($db, $id);

	redirectNewLink($_SERVER['SERVER_NAME']);
}
else
	redirect($_SERVER['HTTP_REFERER']);
?>