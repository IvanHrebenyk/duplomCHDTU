<?
include 'model/'.$action_name.'/'.$controller_name.'.php';
$id = $addition_action_name;
?>
<?

if(isset_ramID($db, $id)){
	$info = info_ram($db, $id);
}
?>

<?include 'view/template_content_one_component.php';?>
