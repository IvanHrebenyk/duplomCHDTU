<?
include 'model/category/'.$controller_name.'.php';
$view_pagination = true;
	$isset = isset_rom($db);
	if($isset){ 
		if(!($page = $_GET['page']))
			$page = 0;
			$limit = 6;
		if($_GET['q']){
			if(!search_count_rom($db, $_GET['q'], $page, $limit))
				$message_filter = 'Нічого не знайдено. ';
				$view_pagination = false;
			$view_list = search_rom($db, $_GET['q'], $page, $limit);
		}
		else if($_GET){

			$firm = '!=""';
			if($_GET['firm'])
				$firm = '="'.$_GET['firm'].'"';
			
			$memory = '!=0';
			if($_GET['memory'])
				$memory = '='.$_GET['memory'];
			

			$technology = '!=""';
			if($_GET['technology']) 
				$technology = '="'.$_GET['technology'].'"';

			$interface_generation = '!=0';
			$interface_title = '!=""';;
			if($_GET['interface']){
				$interface = explode('_', $_GET['interface']);
				if ( !empty($interface[1]) )
				{	
					$interface_title = '="'.str_ireplace('_'.$interface[1], "", $_GET['interface']).'"';
					$interface_generation = '='.$interface[1];
				}

			}
			
			$table = 'rom';
			$join = 'left join image_rom on rom.id=image_rom.id_rom
					inner JOIN interface_memory on rom.id=interface_memory.id_rom ';
			
			$from = $table.' '.$join;

			$select = 'select count(*) as count ';
			$query = 'FROM '.$from.' WHERE 
										firm'.$firm.' and
										memory'.$memory.' and
										technology'.$technology.' and
										interface_memory.title'.$interface_title.' and 
										interface_memory.generation'.$interface_generation.' group by '.$table.'.id';
			 //echo $select.$query;

			if(isset_rom_filter_category($db, $select.$query, $page, $limit)){
				$select = 'SELECT *, image_rom.path as image ';
				$view_list = list_rom_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				$view_list = list_rom_view_category($db, $page, $limit);
			}
		$message_user_list = 'Постійні накопичувачі. '.$message_filter;
		// filter
		$list_firm = list_firm_rom($db);
		$list_memory_rom = list_memory_rom($db);
		$list_technology_rom = list_technology_rom($db);
		$list_interface_rom = list_interface_rom($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>