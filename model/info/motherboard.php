<?
function isset_motherboardID($db, $id){
	$q = 'select count(motherboard.id) as count from motherboard where motherboard.id = '.$id;
	$q = mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'])
		return true;
	else
		return false;
}

function info_motherboard($db, $id){
	$q = 'select motherboard.*, socket.title as title_socket, ram_motherboard.*, wifi_motherboard.title_wifi, concat(pci_motherboard.count, " x PCI-E ", pci_motherboard.generation, " x", pci_motherboard.slot) as pci, concat(usb_motherboard.count, " x ", usb_motherboard.generation) as usb, concat(sata_motherboard.count, " x ", sata_motherboard.generation) as sata, image_motherboard.path as image
from motherboard 
	inner join socket on socket.id=motherboard.socket
    left join ram_motherboard on ram_motherboard.id_motherboard=motherboard.id
    left JOIN wifi_motherboard on wifi_motherboard.id_motherboard=motherboard.id
    left join pci_motherboard on pci_motherboard.id_motherboard=motherboard.id
    left join usb_motherboard on usb_motherboard.id_motherboard=motherboard.id
    left join sata_motherboard on sata_motherboard.id_motherboard=motherboard.id
    left join image_motherboard on image_motherboard.id_mb=motherboard.id
	where motherboard.id = '.$id;

	return mysql_query($q, $db);
}
?>