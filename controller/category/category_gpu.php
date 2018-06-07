<?
include 'model/category/'.$controller_name.'.php';
$view_pagination = true;
	$isset = isset_videocard($db);
	if($isset){ 
		if(!($page = $_GET['page']))
			$page = 0;
			$limit = 6;
		if($_GET['q']){
			if(!search_count_videocard($db, $_GET['q'], $page, $limit))
				$message_filter = 'Нічого не знайдено. ';
				$view_pagination = false;
			$view_list = search_videocard($db, $_GET['q'], $page, $limit);
		}
		else if($_GET){

			$firm = '!=""';
			if($_GET['firm'])
				$firm = '="'.$_GET['firm'].'"';
			
			$contact = '!=0';
			if($_GET['contact'])
				$contact = '='.$_GET['contact'];
			
			$pci_generation = '!=0';
			$pci_slot = '!=0';
			if($_GET['pci_ex']){
				$pci_ex = explode('_', $_GET['pci_ex']);
				if ( !empty($pci_ex[1]) )
				{	
					$pci_generation = '='.str_ireplace('_'.$pci_ex[1], "", $_GET['pci_ex']);
					$pci_slot = '='.$pci_ex[1];
				}

			}

			$table = 'videocard';
			$join = 'left join image_gpu on videocard.id=image_gpu.id_gpu';
			$contact_SQL = '';
			if($_GET['contact']){
				$join = $join . ' inner join additional_power_videocard on videocard.id = additional_power_videocard.id_videocard';
				$contact_SQL = '(additional_power_videocard.count_need_loop * additional_power_videocard.count_contact_loop)'.$contact.' and';
			}
			$from = $table.' '.$join;

			$select = 'select count(*) as count ';
			$query = 'FROM '.$from.' WHERE 
										firm'.$firm.' and
										'.$contact_SQL.' 
										videocard.slot'.$pci_slot.' and 
										videocard.generation_pci'.$pci_generation.' group by '.$table.'.id';
			// echo $select.$query;
			$have_filter = false;

			if($_GET['firm'] || $_GET['pci_ex'] || $_GET['contact'])
				$have_filter = true;

			if((isset_videocard_filter_category($db, $select.$query, $page, $limit)) && $have_filter){
				$select = 'SELECT *, image_gpu.path as image ';
				$view_list = list_videocard_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				$view_list = list_videocard_view_category($db, $page, $limit);
			}
		$message_user_list = 'Відеокарти. '.$message_filter;
		// filter
		$list_firm = list_firm_videocard($db);
		$list_pci_videocard = list_pci_videocard($db);
		$list_additional_power_videocard = list_additional_power_videocard($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>