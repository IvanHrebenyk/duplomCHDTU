<?
function isset_ssd($db, $id){
	$q = 'select count(ssd.id_rom) as count from ssd where ssd.id_rom = '.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'])
		return true;
	else
		return false;
}

function isset_hdd($db, $id){
	$q = 'select count(hdd.id_rom) as count from hdd where hdd.id_rom = '.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'])
		return true;
	else
		return false;
}

function info_ssd($db, $id){
	$q = 'select rom.*, ssd.*, image_rom.path as image, type_flash_memory.title as title_memory, interface_memory.title as title_interface, interface_memory.generation as generation_interface
from rom 
	left join image_rom on image_rom.id_rom=rom.id
    inner join ssd on ssd.id_rom=rom.id
    inner join type_flash_memory on type_flash_memory.id=ssd.type_flash_memory
    inner join interface_memory on interface_memory.id_rom=rom.id
    where rom.id='.$id;

    return mysql_query($q, $db);
}

function info_hdd($db, $id){
	$q = 'select rom.*, image_rom.path as image, hdd.*, interface_memory.title as title_interface, interface_memory.generation as generation_interface
from rom
	left join image_rom on image_rom.id_rom=rom.id
    inner join hdd on hdd.id_rom=rom.id
    inner join interface_memory on interface_memory.id_rom=rom.id
    where rom.id='.$id;

    return mysql_query($q, $db);
}

?>