<?
//session_unset();
session_start();
// unset($_SESSION['user']);
include "controller/router.php";
include 'model/redirect.php';
include 'model/function_db.php'; //redirect($_SERVER['HTTP_REFERER']);
include 'model/db.php';
?>
<html>
<?
include "view/head.php";
?>
<body>
<?
echo '<header>'; 
if($_SESSION['user'] == 'admin' && ($controller_name == 'add' || $controller_name == 'remove'))
	include "view/header/header_admin.php"; 
else if($_SESSION['user'] == 'moderator' && ($controller_name == 'add' || $controller_name == 'remove'))
	include "view/header/header_moderator.php"; 
else 
	include "view/header/header_user.php"; 
echo '</header>';
////////////// body content ////////
?>
<script src="../../../../script.js" ></script>

<?
echo '<div class="content-info">';

$category_list_name = 'cpu motherboard gpu ram rom power';
$have_category = strripos(' '.$category_list_name, $controller_name);

if($controller_name==''){
	include "view/main_view.php";
}
else if($controller_name == 'add')
	include 'view/add/add_info.php';
else if($controller_name == 'save')
	include 'model/save/save.php';
else if($controller_name == 'remove')
	include 'view/remove/remove.php';
else if($controller_name == 'removing')
	include 'model/removing/removing.php';
else if($controller_name == 'authorize' || $controller_name == 'out')
	include 'model/user/'.$controller_name.'.php';

else if($have_category && $action_name && $addition_action_name)
	include 'controller/'.$action_name.'/'.$action_name.'_'.$controller_name.'.php';

else if($have_category)
	include 'controller/category/category_'.$controller_name.'.php';
	


echo '</div>';
////////////// body content ////////
echo '<footer class="fluid">';
//echo '<div class="navbar-fixed-bottom row-fluid"><div class="navbar-inner"><div class="container" >';
	include "view/footer.php";
 //echo '</div></div></div>';
 echo '</footer>';
?>
</body>
</html>

<?
	if(!$title_component){
		if(!$controller_name) $title_component = 'Дипломна робота';
		else if($controller_name == 'cpu') $title_component = 'Процесори';
		else if($controller_name == 'gpu') $title_component = 'Відеокарти';
		else if($controller_name == 'motherboard') $title_component = 'Материнські плати';
		else if($controller_name == 'power') $title_component = 'Блоки живлення';
		else if($controller_name == 'ram') $title_component = 'ОЗП';
		else if($controller_name == 'rom') $title_component = 'Накопичувачі';
		else if($controller_name == 'add') $title_component = 'Внесення даних';
		else if($controller_name == 'remove') $title_component = 'Видалення даних';
	}
?>
<script type="text/javascript">
	document.title = "<?
echo $title_component ;
	?>"
</script>