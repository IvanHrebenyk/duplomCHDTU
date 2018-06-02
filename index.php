<?
session_start();
include 'redirect.php';
include 'function_db.php'; //redirect($_SERVER['HTTP_REFERER']);
$_SESSION['user'] = 'moderator';
include 'db.php';
?>
<html>
<?
include "head.php";
?>
<body>
<?
echo '<header>'; 
if($_SESSION['user'] == 'admin')
	include "view/header/header_admin.php"; 
else if($_SESSION['user'] == 'moderator')
	include "view/header/header_moderator.php"; 
else 
	include "view/header/header_user.php"; 
echo '</header>';
////////////// body content ////////
?>
<script src="../script.js" ></script>

<?
echo '<div class="content-info">';
///////////////////////////////
	$controller_name = '';
	$action_name = '';
	$addition_action_name = '';
	
	$routes = explode('/', $_SERVER['REQUEST_URI']);

	// получаем имя контроллера
	if ( !empty($routes[1]) )
	{	
		$controller_name = $routes[1];
	}
	
	// получаем имя экшена
	if ( !empty($routes[2]) )
	{
		$action_name = $routes[2];
	}
	if ( !empty($routes[3]) )
	{
		$addition_action_name = $routes[3];
	}
///////////////////////////////
if($controller_name==''){
	include "view/main_view.php";
}
else if($controller_name == 'add')
	include 'view/add/add_info.php';
else if($controller_name == 'save')
	include 'save/save.php';

	/*
if(!($_GET)){
	include "main_view.php";
}
else if($_GET['add'])
	include 'add_info.php';*/

//include "content_one_component.php";
//include "list_component.php";
//if()
//include "add_info.php";
//include "list_moderator.php";

echo '</div>';
////////////// body content ////////
echo '<footer class="fluid">';
//echo '<div class="navbar-fixed-bottom row-fluid"><div class="navbar-inner"><div class="container" >';
	include "footer.php";
 //echo '</div></div></div>';
 echo '</footer>';
?>
</body>
</html>

