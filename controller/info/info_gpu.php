<?
// echo $addition_action_name;
//include 'model/category/'.$controller_name.'.php';
include 'model/'.$action_name.'/'.$controller_name.'.php';
$id = $addition_action_name;
?>
<?

if(isset_videocardID($db, $id)){
	$info = info_videocard($db, $id);
}
?>

<?include 'view/template_content_one_component.php';?>
