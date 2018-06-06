<?
function isset_cpuID($db, $id){
	$q = 'select count(cpu.id) as count from cpu where cpu.id = '.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'])
		return true;
	else
		return false;
}

function info_cpu($db, $id){
	$q = 'select cpu.*, cpu_graphic.title_graphic as title_graphic, image_cpu.path as image, concat(type_memory_ram.title, " ", type_memory_ram.generation) as ram, socket.title as socket_cpu
	from cpu 
	left join image_cpu on image_cpu.id_cpu = cpu.id
    left join cpu_graphic on cpu.id = cpu_graphic.id_cpu
    left join type_memory_ram on cpu.type_ram = type_memory_ram.id
    inner join socket on socket.id = cpu.socket
	where cpu.id = '.$id;

	return mysql_query($q, $db);
}
?>