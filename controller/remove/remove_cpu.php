<?
if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'moderator'){
	$id = $addition_action_name;
	include 'model/removing/removing_'.$controller_name.'.php';

	$path_image = image_cpu($db, $id);
	image_cpu_remove($db, $id, $path_image);
	delete_cpu_graphic($db, $id);
	delete_cpu($db, $id);
	redirectNewLink($_SERVER['SERVER_NAME']);
}
else
	redirect($_SERVER['HTTP_REFERER']);
?>