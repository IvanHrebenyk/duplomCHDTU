<?
function isset_videocard_complette($db, $id){
	$q = 'select count(videocard.id) as count
	from 
		additional_power_videocard
		inner join videocard on videocard.id=additional_power_videocard.id_videocard,
		power 
		inner join power_videocard on power_videocard.id_power = power.id
	   
	WHERE 
		(additional_power_videocard.count_need_loop*additional_power_videocard.count_contact_loop) <= 
			(power_videocard.count_contact*power_videocard.count_loop) 
		 AND power.id = '.$id.'
		 
	GROUP BY videocard.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

function isset_motherboard_complette($db, $id){
	$q = 'select count(motherboard.id) as count

			from 
				connect_motherboard inner join connect_cpu on connect_motherboard.id_power = connect_cpu.id_power
				 INNER join motherboard on (connect_cpu.count_contact*connect_cpu.count_loop) >= motherboard.count_contact_power_cpu
				 INNER join power on connect_motherboard.id_power = power.id

			WHERE power.id = '.$id.' 
			group by motherboard.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

?>