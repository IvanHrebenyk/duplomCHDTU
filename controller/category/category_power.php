<?
include 'model/category/'.$controller_name.'.php';
$view_pagination = true;
	$isset = isset_power($db);
	if($isset){ 
		if(!($page = $_GET['page']))
			$page = 0;
			$limit = 6;

		if($_GET['q']){
			if(!search_count_power($db, $_GET['q'], $page, $limit))
				$message_filter = 'Нічого не знайдено. ';
				$view_pagination = false;
			$view_list = search_power($db, $_GET['q'], $page, $limit);
		}
		else if($_GET){

			$firm = '!=""';
			if($_GET['firm']){
				$firm = '="'.$_GET['firm'].'"';
			}
			
			$join_pin_mb = '';
			$where_pin_mb = '';
			$pin_mb = '!=0';
			if($_GET['pin_mb']){
				$pin_mb = '='.$_GET['pin_mb'];
				$join_pin_mb = ' inner JOIN connect_motherboard on power.id=connect_motherboard.id_power ';
				$where_pin_mb = ' and connect_motherboard.count_pin_atx >= '.$_GET['pin_mb'];
			}

			$join_pin_cpu = '';
			$where_pin_cpu = '';
			$pin_cpu = '!=0';
			if($_GET['pin_cpu']){
				$pin_cpu = '='.$_GET['pin_cpu'];
				$join_pin_cpu = ' inner join connect_cpu on power.id = connect_cpu.id_power ';
				$where_pin_cpu = ' and (connect_cpu.count_contact * connect_cpu.count_loop) >= '.$_GET['pin_cpu'];
			}

			$join_pin_gpu = '';
			$where_pin_gpu = '';
			$pin_gpu = '!=0';
			if($_GET['pin_gpu']){
				$pin_cpu = '='.$_GET['pin_cpu'];
				$join_pin_gpu = ' inner join power_videocard on power.id = power_videocard.id_power ';
				$where_pin_gpu = ' and (power_videocard.count_contact * power_videocard.count_loop) >= '.$_GET['pin_gpu'];
			}

			$count_sata = '>(-1)';
			if($_GET['sata']){
				$count_sata = '>0';
			}

			$count_molex = '>(-1)';
			if($_GET['molex']){
				$count_molex = '>0';
			}
			
			
			$table = 'power';
			$join = 'left join image_power on power.id=image_power.id_power '.$join_pin_mb.$join_pin_cpu.$join_pin_gpu;
			
			$from = $table.' '.$join;

			$select = 'select count(*) as count ';

			$query = 'from '.$from.'
			WHERE
			firm  '.$firm.' AND
		    power.count_sata '.$count_sata.' AND
		    power.count_molex '.$count_molex.$where_pin_cpu.$where_pin_gpu.$where_pin_mb.' GROUP by power.id';

			// echo $select.$query;

			if(isset_power_filter_category($db, $select.$query, $page, $limit)){ 
				$select = 'SELECT *, image_power.path as image ';
				$view_list = list_power_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				$view_list = list_power_view_category($db, $page, $limit);
			}
		$message_user_list = 'Блоки живлення. '.$message_filter;
		// filter
		$list_firm = list_firm_power($db);
		$list_connect_mb_power = list_connect_mb_power($db);
		$list_connect_cpu_power = list_connect_cpu_power($db);
		$list_connect_gpu_power = list_connect_gpu_power($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>