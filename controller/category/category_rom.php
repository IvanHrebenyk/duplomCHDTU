<?
include 'model/category/'.$controller_name.'.php';

if($_POST['motherboard_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані ПЗП до материнської плати <b>
	<a href="/motherboard/info/'.$_POST['motherboard_number'].'/'.$_POST['motherboard_name'].'.html">'.$_POST['motherboard_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'select rom.*, image_rom.path as image
					from 
						sata_motherboard inner JOIN motherboard on motherboard.id = sata_motherboard.id_motherboard
						inner join interface_memory on interface_memory.generation = sata_motherboard.generation
						INNER JOIN rom on rom.id = interface_memory.id_rom
						left join image_rom on image_rom.id_rom = rom.id
					 
					WHERE
						interface_memory.title like "%SATA%" and motherboard.id = 15

					GROUP BY rom.id';
}


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

			$have_filter = false;

			if($_GET['firm'] || $_GET['memory'] || $_GET['technology'] || $_GET['interface'])
				$have_filter = true;

			if(isset_rom_filter_category($db, $select.$query, $page, $limit) && $have_filter){
				$select = 'SELECT *, image_rom.path as image ';
				$view_list = list_rom_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				if($_SESSION['q'])
					$view_list = list_complette($db, $_SESSION['q'], $page, $limit);
				else
					$view_list = list_rom_view_category($db, $page, $limit);
			}
		if($_SESSION['m']) 
			$message_user_list = $_SESSION['m'];
		else
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