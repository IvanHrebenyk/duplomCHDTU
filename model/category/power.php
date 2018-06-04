<?
function isset_power($db){
	$q = 'select count(*) as count from power';
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function search_count_power($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;

	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT count(*) as count from power left join image_power on power.id=image_power.id_power where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
	$q=mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else
		return false;
}

function search_power($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT id, firm, model, image_power.path as image from power left join image_power on power.id=image_power.id_power where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
		//echo $q;
		return mysql_query($q, $db);
}

function list_power_view_category($db, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = 'SELECT id, firm, model, image_power.path as image from power left join image_power on power.id=image_power.id_power limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function isset_power_filter_category($db, $q, $page, $limit){
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function list_power_view_filter_category($db, $q, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = $q . ' limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function list_firm_power($db){
	$q = 'SELECT firm from power group by firm order by firm asc';
	return mysql_query($q, $db);
}

function list_connect_mb_power($db){
	$q = 'SELECT count_pin_atx FROM connect_motherboard group by count_pin_atx order by count_pin_atx asc';
	return mysql_query($q, $db);
}

function list_connect_cpu_power($db){
	$q = 'SELECT (count_contact*count_loop) as pin_cpu FROM connect_cpu group by (count_contact*count_loop) order by (count_contact*count_loop) asc';
	return mysql_query($q, $db);
}

function list_connect_gpu_power($db){
	$q = 'SELECT (count_contact_loop*count_need_loop) as pin_gpu FROM additional_power_videocard group by (count_contact_loop*count_need_loop) order by (count_contact_loop*count_need_loop) asc
';
	return mysql_query($q, $db);
}
?>