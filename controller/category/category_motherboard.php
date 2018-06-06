<?
include 'model/category/'.$controller_name.'.php';
$view_pagination = trua;
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

			if(isset_motherboard_filter_category($db, $select.$query, $page, $limit)){
				$select = 'SELECT *, image_motherboard.path as image ';
				$view_list = list_motherboard_view_filter_category($db, $select.$query, $page, $limit);
			}
			else $message_filter = 'По заданим фільтрам нічого не знайдено.';
		}
			if(!$view_list)
				$view_list = list_motherboard_view_category($db, $page, $limit);
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