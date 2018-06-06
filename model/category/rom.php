<?
function isset_rom($db){
	$q = 'select count(*) as count from rom';
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function search_count_rom($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;

	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT count(*) as count FROM rom left join image_rom on rom.id=image_rom.id_rom where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
	$q=mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else
		return false;
}

function search_rom($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT id, firm, model, image_rom.path as image FROM rom left join image_rom on rom.id=image_rom.id_rom where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
		//echo $q;
		return mysql_query($q, $db);
}

function list_rom_view_category($db, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = 'SELECT id, firm, model, image_rom.path as image FROM rom left join image_rom on rom.id=image_rom.id_rom limit '.$start.', '.$limit;
	// echo $q;
	return mysql_query($q, $db);
}

function isset_rom_filter_category($db, $q, $page, $limit){
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function list_rom_view_filter_category($db, $q, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = $q . ' limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function list_firm_rom($db){
	$q = 'SELECT firm FROM rom group by firm order by firm asc';
	return mysql_query($q, $db);
}

function list_memory_rom($db){
	$q = 'select * from rom group by memory order by memory asc';
	return mysql_query($q, $db);
}

function list_technology_rom($db){
	$q = 'SELECT * FROM `rom`group by technology order by technology asc';
	return mysql_query($q, $db);
}

function list_interface_rom($db){
	$q = 'select  title, generation from interface_memory GROUP by concat(title, generation) order by concat(title, generation) asc';
	return mysql_query($q, $db);
}

?>