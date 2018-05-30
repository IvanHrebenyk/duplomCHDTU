<?
switch($_GET['add']){
	
	case 'gpu_ram': 
		include 'add_video_ddr.php';
	break; 
	
	case 'gpu': 
		include 'add_videocard.php';
	break; 
	
	case 'cpu': 
		include 'add_cpu.php';
	break; 
	
	case 'socket': 
		include 'add_socket.php';
	break; 
	
	case 'ram': 
		include 'add_ram.php';
	break; 
	
	case 'type_ram': 
		include 'add_ram_ddr.php';
	break; 
	
	case 'hdd': 
		include 'add_rom_hdd.php';
	break; 

	case 'ssd': 
		include 'add_rom_ssd.php';
	break; 

	case 'ssd2': 
		include 'add_rom_ssd_m2.php';
	break; 

	case 'ssd_flash': 
		include 'add_type_flash_memory.php';
	break; 

	case 'motherboard': 
		include 'add_motherboard.php';
	break; 


	case 'power': 
		include 'add_power.php';
	break; 


	case 'pin': 
		echo '<h3>Delete this step</h3>';
	break; 

}
?>
