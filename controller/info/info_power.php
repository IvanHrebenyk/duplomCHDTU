<?
include 'model/'.$action_name.'/'.$controller_name.'.php';
$id = $addition_action_name;
?>
<?

if(isset_powerID($db, $id)){
	$info = info_power($db, $id);
}
?>

<?include 'view/template_content_one_component.php';?>
