<?
function isset_motherboard_complette($db, $id){
	$q = 'SELECT count(motherboard.id) as count
			FROM motherboard 
				inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
				inner join videocard on videocard.generation_pci = pci_motherboard.generation
			where videocard.id = '.$id.'
			GROUP by motherboard.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

function isset_cpu_complette($db, $id){
	$q = 'SELECT count(cpu.id) as count
				FROM motherboard 
					inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
					inner join videocard on videocard.generation_pci = pci_motherboard.generation
					inner join cpu on cpu.socket = motherboard.socket
				where videocard.id = '.$id.'
				group by cpu.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

function isset_power_complette($db, $id){
	$q = 'select count(power.id) as count
	from 
		additional_power_videocard
		inner join videocard on videocard.id=additional_power_videocard.id_videocard,
		power 
		inner join power_videocard on power_videocard.id_power = power.id
	   
	WHERE 
		(additional_power_videocard.count_need_loop*additional_power_videocard.count_contact_loop) <= 
			(power_videocard.count_contact*power_videocard.count_loop) 
		 AND videocard.id = '.$id.'
	GROUP BY power.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

?>