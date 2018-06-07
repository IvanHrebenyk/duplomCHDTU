<?
function isset_videocard_complette($db, $id){
	$q = 'SELECT count(videocard.id) as count 
			FROM motherboard 
				inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
				inner join videocard on videocard.generation_pci = pci_motherboard.generation
			where motherboard.id = '.$id.'
			GROUP by videocard.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

function isset_cpu_complette($db, $id){
	$q = 'select count(cpu.id) as count
			from motherboard inner JOIN cpu on cpu.socket = motherboard.socket
			where motherboard.id = '.$id.'
			GROUP by cpu.id';
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
				connect_motherboard inner join connect_cpu on connect_motherboard.id_power = connect_cpu.id_power
				 INNER join motherboard on (connect_cpu.count_contact*connect_cpu.count_loop) >= motherboard.count_contact_power_cpu
				 INNER join power on connect_motherboard.id_power = power.id
			WHERE motherboard.id = '.$id.' 
			group by power.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

function isset_ram_complette($db, $id){
	$q = 'select count(ram.id) as count

			from motherboard INNER JOIN ram_motherboard on ram_motherboard.id_motherboard = motherboard.id, ram

			where 
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr1 > 0 and type_memory_ram.generation = 1 and ram_motherboard.id_motherboard='.$id.' group by type_memory_ram.generation) OR 
				
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr2 > 0 and type_memory_ram.generation = 2 and ram_motherboard.id_motherboard='.$id.' group by type_memory_ram.generation) OR
				
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr3 > 0 and type_memory_ram.generation = 3 and ram_motherboard.id_motherboard='.$id.' group by type_memory_ram.generation) OR
				
				ram.type_memory = (select type_memory_ram.generation as type_ram from type_memory_ram, ram_motherboard where ram_motherboard.count_ddr4 > 0 and type_memory_ram.generation = 4 and ram_motherboard.id_motherboard='.$id.' group by type_memory_ram.generation)
				
				GROUP by ram.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

function isset_rom_complette($db, $id){
	$q = 'select count(rom.id) as count
					from 
						sata_motherboard inner JOIN motherboard on motherboard.id = sata_motherboard.id_motherboard
						inner join interface_memory on interface_memory.generation = sata_motherboard.generation
						INNER JOIN rom on rom.id = interface_memory.id_rom
					 
					WHERE
						interface_memory.title like "%SATA%" and motherboard.id = '.$id.'
					GROUP BY rom.id';
					
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}
?>