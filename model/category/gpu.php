<?
function isset_videocard($db){
	$q = 'select count(*) as count from videocard';
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function search_count_videocard($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;

	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT count(*) as count FROM videocard left join image_gpu on videocard.id=image_gpu.id_gpu where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
	$q=mysql_query($q, $db);
	$r = mysql_fetch_array($q);
	if($r['count'] > 0)
		return true;
	else
		return false;
}

function search_videocard($db, $search, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$search = str_ireplace(" ", "", $search);
	$q = 'SELECT id, firm, model, image_gpu.path as image FROM videocard left join image_gpu on videocard.id=image_gpu.id_gpu where concat(firm,model) like "%'.$search.'%"
		limit '.$start.', '.$limit;
		//echo $q;
		return mysql_query($q, $db);
}

function list_videocard_view_category($db, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = 'SELECT id, firm, model, image_gpu.path as image FROM videocard left join image_gpu on videocard.id=image_gpu.id_gpu limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function isset_videocard_filter_category($db, $q, $page, $limit){
	$q = mysql_query($q, $db);
	$count = mysql_fetch_array($q);
	if($count['count'] != 0)
		return $count['count'];
	else 
		return false;
}

function list_videocard_view_filter_category($db, $q, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = $q . ' limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}

function list_firm_videocard($db){
	$q = 'SELECT firm FROM videocard group by firm order by firm asc';
	return mysql_query($q, $db);
}

function list_pci_videocard($db){
	$q = 'SELECT slot,generation_pci as generation FROM `videocard`  group by concat(generation_pci, slot) order by concat(generation_pci, slot) asc';
	return mysql_query($q, $db);
}

function list_additional_power_videocard($db){
	$q = 'SELECT (count_need_loop*count_contact_loop) as contact FROM additional_power_videocard group by (count_need_loop*count_contact_loop) order by (count_need_loop*count_contact_loop) asc';
	return mysql_query($q, $db);
}

?>