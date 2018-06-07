<?
include 'model/category/'.$controller_name.'.php';

if($_POST['cpu_number']){
		include 'view/button_dead_complette.php';

		$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані материнські плати до процесору <b>
		<a href="/cpu/info/'.$_POST['cpu_number'].'/'.$_POST['cpu_name'].'.html">'.$_POST['cpu_name'].'</a>
		</b>'.$button.'</form>';
		
		$_SESSION['q'] = 'select motherboard.*, image_motherboard.path as image 
		from motherboard 
		inner JOIN cpu on cpu.socket = motherboard.socket 
	    left join image_motherboard on image_motherboard.id_mb = motherboard.id
	    where cpu.id = '.$_POST['cpu_number'].'
	     GROUP by motherboard.id';
}
else if($_POST['power_number']){
		include 'view/button_dead_complette.php';

		$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані материнські плати до блоку живлення <b>
		<a href="/power/info/'.$_POST['power_number'].'/'.$_POST['power_name'].'.html">'.$_POST['power_name'].'</a>
		</b>'.$button.'</form>';
		
		$_SESSION['q'] = 'select motherboard.*, image_motherboard.path as image

			from 
				connect_motherboard inner join connect_cpu on connect_motherboard.id_power = connect_cpu.id_power
				 INNER join motherboard on (connect_cpu.count_contact*connect_cpu.count_loop) >= motherboard.count_contact_power_cpu
				 INNER join power on connect_motherboard.id_power = power.id
			    left join image_motherboard on image_motherboard.id_mb = motherboard.id

			WHERE power.id = '.$_POST['power_number'].' 
			group by motherboard.id';
}
else if($_POST['gpu_number']){
	include 'view/button_dead_complette.php';

	$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані материнські плати до відеокарти <b>
	<a href="/gpu/info/'.$_POST['gpu_number'].'/'.$_POST['gpu_name'].'.html">'.$_POST['gpu_name'].'</a>
	</b>'.$button.'</form>';
	
	$_SESSION['q'] = 'SELECT motherboard.*, image_motherboard.path as image

			FROM motherboard 
				inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
				inner join videocard on videocard.generation_pci = pci_motherboard.generation
			    left join image_motherboard on image_motherboard.id_mb = motherboard.id
				
			where videocard.id = '.$_POST['gpu_number'].'

			GROUP by motherboard.id';
}
else if($_POST['ram_number']){
		include 'view/button_dead_complette.php';

		$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані материнські плати до ОЗП <b>
		<a href="/ram/info/'.$_POST['ram_number'].'/'.$_POST['ram_name'].'.html">'.$_POST['ram_name'].'</a>
		</b>'.$button.'</form>';
}
else if($_POST['rom_number']){
		include 'view/button_dead_complette.php';

		$_SESSION['m'] = '<form action="/'.$controller_name.'" method="post">Підібрані материнські плати до ПЗП <b>
		<a href="/rom/info/'.$_POST['rom_number'].'/'.$_POST['rom_number'].'.html">'.$_POST['rom_name'].'</a>
		</b>'.$button.'</form>';
}

$view_pagination = true;
	$isset = isset_motherboard($db);
	if($isset){ 
		if(!($page = $_GET['page']))
			$page = 0;
			$limit = 6;
		if($_GET['q']){
			if(!search_count_motherboard($db, $_GET['q'], $page, $limit))
				$message_filter = 'Нічого не знайдено. ';
				$view_pagination = false;
			$view_list = search_motherboard($db, $_GET['q'], $page, $limit);
		}
		else if($_GET){

			$firm = '!=""';
			if($_GET['firm'])
				$firm = '="'.$_GET['firm'].'"';
			
			$socket = '!=0';
			if($_GET['socket'])
				$socket = '='.$_GET['socket'];
			
			$contact_cpu = '!=0';
			if($_GET['contact_cpu'])
				$contact_cpu = '='.$_GET['contact_cpu'];
			
			$contact_mb = '!=0';
			if($_GET['contact_mb'])
				$contact_mb = '='.$_GET['contact_mb'];
			
			$type_ram = '!=0';
			if($_GET['type_ram'])
				$type_ram = '>0';
			
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
			
			$sata = '!=0';
			if($_GET['sata'])
				$sata = '='.$_GET['sata'];

			$table = 'motherboard';
			$join = 'left join image_motherboard on motherboard.id=image_motherboard.id_mb 
				    	inner join ram_motherboard on motherboard.id=ram_motherboard.id_motherboard
				        inner join pci_motherboard on motherboard.id=pci_motherboard.id_motherboard
				        inner join sata_motherboard on motherboard.id= sata_motherboard.id_motherboard';
			$from = $table.' '.$join;
			$count_type_ddr = '';
			if($_GET['type_ram']){
				$count_type_ddr = 'ram_motherboard.count_ddr'.$_GET['type_ram'].$type_ram.' and';
			}
			$select = 'select count(*) as count ';
			$query = 'FROM '.$from.' WHERE 
										firm'.$firm.' and
										socket'.$socket.' and
										count_contact_power_cpu'.$contact_cpu.'
										and count_contact_power_mb'.$contact_mb.' and
										'.$count_type_ddr.' 
										pci_motherboard.generation'.$pci_generation.' and 
										pci_motherboard.slot'.$pci_slot.' and 
										sata_motherboard.generation'.$sata.' group by '.$table.'.id';
			// echo $select.$query;

			$have_filter = false;

			if($_GET['firm'] || $_GET['socket'] || $_GET['contact_cpu'] || $_GET['contact_mb'] || $_GET['type_ram'] || $_GET['pci_ex'] || $_GET['sata'])
				$have_filter = true;

			if((isset_motherboard_filter_category($db, $select.$query, $page, $limit)) && $have_filter){
				$select = 'SELECT *, image_motherboard.path as image ';
				$view_list = list_motherboard_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list){
				if($_SESSION['q'])
					$view_list = list_complette($db, $_SESSION['q'], $page, $limit);
				else 
					$view_list = list_motherboard_view_category($db, $page, $limit);
			}
		if($_SESSION['m']) 
			$message_user_list = $_SESSION['m'];
		else
			$message_user_list = 'Материнські плати. '.$message_filter;
		// filter
		$list_firm = list_firm_motherboard($db);
	//	$list_ram = list_ram_cpu($db);
		$list_socket_motherboard = list_socket_motherboard($db);
		$list_contact_power_cpu_motherboard = list_contact_power_cpu_motherboard($db);
		$list_contact_power_motherboard = list_contact_power_motherboard($db);
		$list_pci_motherboard = list_pci_motherboard($db);
		$list_sata_motherboard = list_sata_motherboard($db);
	//	$list_core_cpu = list_core_cpu($db);

	}
	else $message_user_list = 'Помилка, даних не отримано.';

include 'view/template_listcomponent_view.php';

?>