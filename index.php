<?
//session_unset();
session_start();
// unset($_SESSION['user']);
include "router.php";
include 'redirect.php';
include 'function_db.php'; //redirect($_SERVER['HTTP_REFERER']);
//$_SESSION['user'] = '';
include 'db.php';
?>
<html>
<?
include "head.php";
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
<script src="../script.js" ></script>

<?
echo '<div class="content-info">';
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

