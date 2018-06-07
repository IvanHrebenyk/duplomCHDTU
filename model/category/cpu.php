<?
function isset_cpu($db){
	$q = 'select count(*) as count from cpu';
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function search_count_cpu($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;

	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT count(*) as count FROM cpu left join image_cpu on cpu.id=image_cpu.id_cpu where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
	$q=mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else
		return false;
}

function search_cpu($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT id, firm, model, image_cpu.path as image FROM cpu left join image_cpu on cpu.id=image_cpu.id_cpu where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
		//echo $q;
		return mysql_query($q, $db);
}

function list_cpu_view_category($db, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = 'SELECT id, firm, model, image_cpu.path as image FROM cpu left join image_cpu on cpu.id=image_cpu.id_cpu limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function isset_cpu_filter_category($db, $q, $page, $limit){
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}
function list_cpu_view_filter_category($db, $q, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = $q . ' limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function list_firm_cpu($db){
	$q = 'SELECT firm FROM cpu group by firm order by firm asc';
	return mysql_query($q, $db);
}

function list_ram_cpu($db){
	$q = 'SELECT type_memory_ram.* FROM cpu inner join type_memory_ram on cpu.type_ram=type_memory_ram.id group by type_memory_ram.title, type_memory_ram.generation';
	return mysql_query($q, $db);
}

function list_socket_cpu($db){
	$q = 'SELECT socket.* FROM cpu inner join socket on cpu.socket=socket.id group by socket.title order by socket.title';
	return mysql_query($q, $db);
}

function list_core_cpu($db){
	$q = 'SELECT * FROM cpu group by core order by core asc';
	return mysql_query($q, $db);
}

function list_complette($db, $q, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = $q.' limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

?>