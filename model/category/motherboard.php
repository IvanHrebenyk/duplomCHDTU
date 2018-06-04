<?
function isset_motherboard($db){
	$q = 'select count(*) as count from motherboard';
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function search_count_motherboard($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;

	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT count(*) as count FROM motherboard left join image_motherboard on motherboard.id=image_motherboard.id_mb where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
	$q=mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else
		return false;
}

function search_motherboard($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT id, firm, model, image_motherboard.path as image FROM motherboard left join image_motherboard on motherboard.id=image_motherboard.id_mb where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
		//echo $q;
		return mysql_query($q, $db);
}

function list_motherboard_view_category($db, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = 'SELECT id, firm, model, image_motherboard.path as image FROM motherboard left join image_motherboard on motherboard.id=image_motherboard.id_mb limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function isset_motherboard_filter_category($db, $q, $page, $limit){
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}
function list_motherboard_view_filter_category($db, $q, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = $q . ' limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function list_firm_motherboard($db){
	$q = 'SELECT firm FROM motherboard group by firm order by firm asc';
	return mysql_query($q, $db);
}

function list_socket_motherboard($db){
	$q = 'SELECT socket.* FROM motherboard inner join socket on motherboard.socket=socket.id group by socket.title order by socket.title';
	return mysql_query($q, $db);
}

function list_contact_power_cpu_motherboard($db){
	$q = 'SELECT count_contact_power_cpu FROM motherboard group by count_contact_power_cpu order by count_contact_power_cpu asc';
	return mysql_query($q, $db);
}

function list_contact_power_motherboard($db){
	$q = 'SELECT count_contact_power_mb FROM motherboard group by count_contact_power_mb order by count_contact_power_mb asc';
	return mysql_query($q, $db);
}

function list_pci_motherboard($db){
	$q = 'SELECT generation, slot FROM pci_motherboard group by concat(generation, slot) order by concat(generation, slot) asc';
	return mysql_query($q, $db);
}

function list_sata_motherboard($db){
	$q = 'SELECT * FROM sata_motherboard group by generation order by generation asc';
	return mysql_query($q, $db);
}

?>