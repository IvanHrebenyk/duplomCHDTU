<?
include 'model/category/'.$controller_name.'.php';


if($_POST['motherboard_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані ОЗП до материнської плати <b>
	<a href="/motherboard/info/'.$_POST['motherboard_number'].'/'.$_POST['motherboard_name'].'.html">'.$_POST['motherboard_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'select ram.*, image_ram.path as image

			from motherboard 
				INNER JOIN ram_motherboard on ram_motherboard.id_motherboard = motherboard.id, ram
				left join image_ram on image_ram.id_ram = ram.id

			where 
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr1 > 0 and type_memory_ram.generation = 1 and ram_motherboard.id_motherboard='.$_POST['motherboard_number'].' group by type_memory_ram.generation) OR 
				
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr2 > 0 and type_memory_ram.generation = 2 and ram_motherboard.id_motherboard='.$_POST['motherboard_number'].' group by type_memory_ram.generation) OR
				
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr3 > 0 and type_memory_ram.generation = 3 and ram_motherboard.id_motherboard='.$_POST['motherboard_number'].' group by type_memory_ram.generation) OR
				
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr4 > 0 and type_memory_ram.generation = 4 and ram_motherboard.id_motherboard='.$_POST['motherboard_number'].' group by type_memory_ram.generation)
				
				GROUP by ram.id';
}


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

			if($_GET['firm'] || $_GET['type_ram'] || $_GET['memory']){
				$have_filter = true;
			}

			if((isset_ram_filter_category($db, $select.$query, $page, $limit)) && $have_filter){
				$select = 'SELECT *, image_ram.path as image ';
				$view_list = list_ram_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				if($_SESSION['q'])
					$view_list = list_complette($db, $_SESSION['q'], $page, $limit);
				else
					$view_list = list_ram_view_category($db, $page, $limit);
			}
		if($_SESSION['m']) 
			$message_user_list = $_SESSION['m'];
		else
			$message_user_list = 'Оперативна пам\'ять. '.$message_filter;
		// filter
		$list_firm = list_firm_ram($db);
		$list_memory_ram = list_memory_ram($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>