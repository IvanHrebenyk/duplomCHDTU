<?
include 'model/category/'.$controller_name.'.php';
include 'view/category/'.$controller_name.'.php';
	$isset = isset_cpu($db);
	if($isset){
		if(!($page = $_GET['page']))
			$page = 0;
			$limit = 6;
		$view_list = list_cpu_view_category($db, $page, $limit);
		$message_user_list = 'Процесори';
	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>