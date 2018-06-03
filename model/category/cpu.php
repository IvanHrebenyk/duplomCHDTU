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
function list_cpu_view_category($db, $page, $limit){
	if($page != 0)
		$start = $page * $limit - $limit;
	else 
		$start = 0;
	$q = 'SELECT id, firm, model, image_cpu.path as image FROM cpu left join image_cpu on cpu.id=image_cpu.id_cpu limit '.$start.', '.$limit;
	return mysql_query($q, $db);
}
?>