<?
include 'model/'.$action_name.'/'.$controller_name.'.php';
$id = $addition_action_name;
?>
<?

if(isset_ssd($db, $id)){
	$info = info_ssd($db, $id);
}
else if(isset_hdd($db, $id)){
	$info = info_hdd($db, $id);
}

?>

<?include 'view/template_content_one_component.php';?>
