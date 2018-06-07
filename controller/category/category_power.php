<?
include 'model/category/'.$controller_name.'.php';

if($_POST['motherboard_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані блоки живлення до материнської плати <b>
	<a href="/motherboard/info/'.$_POST['motherboard_number'].'/'.$_POST['motherboard_name'].'.html">'.$_POST['motherboard_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'select power.*, image_power.path as image

			from 
				connect_motherboard inner join connect_cpu on connect_motherboard.id_power = connect_cpu.id_power
				 INNER join motherboard on (connect_cpu.count_contact*connect_cpu.count_loop) >= motherboard.count_contact_power_cpu
				 INNER join power on connect_motherboard.id_power = power.id
				 left join image_power on image_power.id_power = power.id

			WHERE motherboard.id = '.$_POST['motherboard_number'].' 
			group by power.id';
}
else if($_POST['gpu_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані блоки живлення до відеокарти <b>
	<a href="/gpu/info/'.$_POST['gpu_number'].'/'.$_POST['gpu_name'].'.html">'.$_POST['gpu_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'select power.*, image_power.path as image
	from 
		additional_power_videocard
		inner join videocard on videocard.id=additional_power_videocard.id_videocard,
		power 
		inner join power_videocard on power_videocard.id_power = power.id
				 left join image_power on image_power.id_power = power.id
	   
	WHERE 
		(additional_power_videocard.count_need_loop*additional_power_videocard.count_contact_loop) <= 
			(power_videocard.count_contact*power_videocard.count_loop) 
		 AND videocard.id = '.$_POST['gpu_number'].'
		 
	GROUP BY power.id';
}

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
			$have_filter = false;

			if($_GET['firm'] || $_GET['pin_mb'] || $_GET['pin_cpu'] || $_GET['pin_gpu'] || $_GET['sata'] || $_GET['molex'])
				$have_filter = true;

			if((isset_power_filter_category($db, $select.$query, $page, $limit)) && $have_filter){ 
				$select = 'SELECT *, image_power.path as image ';
				$view_list = list_power_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				if($_SESSION['q'])
					$view_list = list_complette($db, $_SESSION['q'], $page, $limit);
				else
				$view_list = list_power_view_category($db, $page, $limit);
			}
		if($_SESSION['m']) 
			$message_user_list = $_SESSION['m'];
		else
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