<?
include 'model/category/'.$controller_name.'.php';

if($_POST['motherboard_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані процесори до материнської плати <b>
	<a href="/motherboard/info/'.$_POST['motherboard_number'].'/'.$_POST['motherboard_name'].'.html">'.$_POST['motherboard_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'select cpu.*, image_cpu.path as image
			from motherboard inner JOIN cpu on cpu.socket = motherboard.socket
				left join image_cpu on image_cpu.id_cpu=cpu.id
			where motherboard.id = '.$_POST['motherboard_number'].'
			GROUP by cpu.id';
}
else if($_POST['gpu_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані процесори до відеокарти <b>
	<a href="/gpu/info/'.$_POST['gpu_number'].'/'.$_POST['gpu_name'].'.html">'.$_POST['gpu_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'SELECT cpu.* , image_cpu.path as image

				FROM motherboard 
					inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
					inner join videocard on videocard.generation_pci = pci_motherboard.generation
					inner join cpu on cpu.socket = motherboard.socket
					left join image_cpu on image_cpu.id_cpu=cpu.id
					
				where videocard.id = '.$_POST['gpu_number'].'

				group by cpu.id';
}


$view_pagination = true;
	$isset = isset_cpu($db);
	if($isset){ 
		if(!($page = $_GET['page']))
			$page = 0;
			$limit = 6;
		if($_GET['q']){
			if(!search_count_cpu($db, $_GET['q'], $page, $limit))
				$message_filter = 'Нічого не знайдено. ';
				$view_pagination = false;
			$view_list = search_cpu($db, $_GET['q'], $page, $limit);
		}
		else if($_GET){

			$firm = '!=""';
			if($_GET['firm'])
				$firm = '="'.$_GET['firm'].'"';
			
			$type_ram = '!=0';
			if($_GET['type_ram'])
				$type_ram = '='.$_GET['type_ram'];
			
			$ghz = '!=0.0';
			if($_GET['ghz'])
				$ghz = '='.$_GET['ghz'];
			
			$socket = '!=0';
			if($_GET['socket'])
				$socket = '='.$_GET['socket'];
			
			$core = '!=0';
			if($_GET['core'])
				$core = '='.$_GET['core'];

			$from = 'cpu left join image_cpu on cpu.id=image_cpu.id_cpu';
			if($_GET['graphic'])
				$from = 'cpu inner join cpu_graphic on cpu.id = cpu_graphic.id_cpu left join image_cpu on cpu.id=image_cpu.id_cpu';

			$select = 'select count(*) as count ';
			$query = 'FROM '.$from.' WHERE firm'.$firm.' and type_ram'.$type_ram.' and ghz'.$ghz.' and socket'.$socket.' and core'.$core;

			$have_filter = false;

			if($_GET['firm'] || $_GET['type_ram'] || $_GET['ghz'] || $_GET['socket'] || $_GET['core'] || $_GET['graphic'])
				$have_filter = true;

			if((isset_cpu_filter_category($db, $select.$query, $page, $limit)) && $have_filter){
				$select = 'SELECT *, image_cpu.path as image ';
				$view_list = list_cpu_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				if($_SESSION['q'])
					$view_list = list_complette($db, $_SESSION['q'], $page, $limit);
				else
					$view_list = list_cpu_view_category($db, $page, $limit);
			}
		if($_SESSION['m']) 
			$message_user_list = $_SESSION['m'];
		else
			$message_user_list = 'Процесори. '.$message_filter;
		// filter
		$list_firm = list_firm_cpu($db);
		$list_ram = list_ram_cpu($db);
		$list_socket_cpu = list_socket_cpu($db);
		$list_core_cpu = list_core_cpu($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>