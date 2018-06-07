<?
function isset_videocard_complette($db, $id){
	$q = '				SELECT count(videocard.id) as count
				FROM motherboard 
					inner join pci_motherboard on motherboard.id = pci_motherboard.id_motherboard 
					inner join videocard on videocard.generation_pci = pci_motherboard.generation
					inner join cpu on cpu.socket = motherboard.socket
				where cpu.id = '.$id.'
				group by videocard.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

function isset_motherboard_complette($db, $id){
	$q = 'select count(motherboard.id) as count
				from motherboard inner JOIN cpu on cpu.socket = motherboard.socket
				where cpu.id = '.$id.'
				GROUP by motherboard.id';
	$q = mysql_query($q,$db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else 
		return false;
}

?>