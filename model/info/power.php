<?
function isset_powerID($db, $id){
	$q = 'select count(power.id) as count from power where power.id = '.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'])
		return true;
	else
		return false;
}

function info_power($db, $id){
	$q = 'select power.*, 
		image_power.path as image,
	    connect_motherboard.count_pin_atx,
	    connect_cpu.count_contact as pin_cpu, connect_cpu.count_loop as loop_cpu, 
	    power_videocard.count_contact as pin_gpu, power_videocard.count_loop as loop_gpu
	from power
		left join image_power on image_power.id_power=power.id
	    left join connect_motherboard on connect_motherboard.id_power=power.id
	    left join connect_cpu on connect_cpu.id_power=power.id
	    left join power_videocard on power_videocard.id_power=power.id
	where power.id='.$id;

	return mysql_query($q, $db);
}
?>