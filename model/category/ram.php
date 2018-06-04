<?
function isset_ram($db){
	$q = 'select count(*) as count from ram';
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function search_count_ram($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;

	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT count(*) as count FROM ram left join image_ram on ram.id=image_ram.id_ram where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
	$q=mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else
		return false;
}

function search_ram($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT id, firm, model, image_ram.path as image FROM ram left join image_ram on ram.id=image_ram.id_ram where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
		//echo $q;
		return mysql_query($q, $db);
}

function list_ram_view_category($db, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = 'SELECT id, firm, model, image_ram.path as image FROM ram left join image_ram on ram.id=image_ram.id_ram limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function isset_ram_filter_category($db, $q, $page, $limit){
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function list_ram_view_filter_category($db, $q, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = $q . ' limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function list_firm_ram($db){
	$q = 'SELECT firm FROM ram group by firm order by firm asc';
	return mysql_query($q, $db);
}

function list_memory_ram($db){
	$q = 'select * from ram group by memory order by memory asc';
	return mysql_query($q, $db);
}

?>