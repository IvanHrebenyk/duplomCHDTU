<?
include 'model/category/'.$controller_name.'.php';
$view_pagination = true;
	$isset = isset_ram($db);
	if($isset){ 
		if(!($page = $_GET['page']))
			$page = 0;
			$limit = 6;
		if($_GET['q']){
			if(!search_count_ram($db, $_GET['q'], $page, $limit))
				$message_filter = 'Нічого не знайдено. ';
				$view_pagination = false;
			$view_list = search_ram($db, $_GET['q'], $page, $limit);
		}
		else if($_GET){

			$firm = '!=""';
			if($_GET['firm'])
				$firm = '="'.$_GET['firm'].'"';
			
			$memory = '!=0';
			if($_GET['memory'])
				$memory = '='.$_GET['memory'];
			
			
			$type_ram = '!=0';
			if($_GET['type_ram'])
				$type_ram = '='.$_GET['type_ram'];
			

			$table = 'ram';
			$join = 'left join image_ram on ram.id=image_ram.id_ram';
			
			$from = $table.' '.$join;

			$select = 'select count(*) as count ';
			$query = 'FROM '.$from.' WHERE 
										firm'.$firm.' and
										memory'.$memory.' and
										type_memory'.$type_ram.' group by '.$table.'.id';
			 //echo $select.$query;

			$have_filter = false;

			if($_GET['firm'] || $_GET['memory'] || $_GET['technology'] || $_GET['interface'])
				$have_filter = true;

			if((isset_ram_filter_category($db, $select.$query, $page, $limit)) && $have_filter){
				$select = 'SELECT *, image_ram.path as image ';
				$view_list = list_ram_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				$view_list = list_ram_view_category($db, $page, $limit);
			}
		$message_user_list = 'Оперативна пам\'ять. '.$message_filter;
		// filter
		$list_firm = list_firm_ram($db);
		$list_memory_ram = list_memory_ram($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>