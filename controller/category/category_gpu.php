<?
include 'model/category/'.$controller_name.'.php';


if($_POST['cpu_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані відеокарти до процесору <b>
	<a href="/cpu/info/'.$_POST['cpu_number'].'/'.$_POST['cpu_name'].'.html">'.$_POST['cpu_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'SELECT videocard.*, image_gpu.path as image 

			FROM motherboard 
				inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
				inner join videocard on videocard.generation_pci = pci_motherboard.generation
				inner join cpu on cpu.socket = motherboard.socket
				left join image_gpu on image_gpu.id_gpu=videocard.id
				
			where cpu.id = '.$_POST['cpu_number'].'

			group by videocard.id';
}
else if($_POST['motherboard_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані відеокарти до материнської плати <b>
	<a href="/motherboard/info/'.$_POST['motherboard_number'].'/'.$_POST['motherboard_name'].'.html">'.$_POST['motherboard_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'SELECT videocard.*, image_gpu.path as image

			FROM motherboard 
				inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
				inner join videocard on videocard.generation_pci = pci_motherboard.generation
				left join image_gpu on image_gpu.id_gpu=videocard.id
				
			where motherboard.id = '.$_POST['motherboard_number'].'

			GROUP by videocard.id';
}
else if($_POST['power_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані відеокарти до блоку живлення <b>
	<a href="/power/info/'.$_POST['power_number'].'/'.$_POST['power_name'].'.html">'.$_POST['power_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'select videocard.*, image_gpu.path as image
	from 
		additional_power_videocard
		inner join videocard on videocard.id=additional_power_videocard.id_videocard
         left join image_gpu on image_gpu.id_gpu=videocard.id,
		power 
		inner join power_videocard on power_videocard.id_power = power.id
       
	   
	WHERE 
		(additional_power_videocard.count_need_loop*additional_power_videocard.count_contact_loop) <= 
			(power_videocard.count_contact*power_videocard.count_loop) 
		 AND power.id = '.$_POST['power_number'].'
		 
	GROUP BY videocard.id';

}

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
				if($_SESSION['q'])
					$view_list = list_complette($db, $_SESSION['q'], $page, $limit);
				else
					$view_list = list_videocard_view_category($db, $page, $limit);
			}
		if($_SESSION['m']) 
			$message_user_list = $_SESSION['m'];
		else
			$message_user_list = 'Відеокарти. '.$message_filter;
		// filter
		$list_firm = list_firm_videocard($db);
		$list_pci_videocard = list_pci_videocard($db);
		$list_additional_power_videocard = list_additional_power_videocard($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>