<?
if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'moderator'){
	$id = $addition_action_name;
	include 'model/removing/removing_'.$controller_name.'.php';

	$path_image = image_ram($db, $id);
	image_ram_remove($db, $id, $path_image);
	delete_ram($db, $id);
	redirectNewLink($_SERVER['SERVER_NAME']);
}
else
	redirect($_SERVER['HTTP_REFERER']);
?>