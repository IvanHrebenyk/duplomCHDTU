<html>
<?
include "head.php";
?>
<body>
<?
echo '<header>'; 
include "header_user.php"; 
//include "header_moderator.php"; 
//include "header_admin.php"; 
echo '</header>';
////////////// body content ////////
?>
<script src="script.js" ></script>

<?
echo '<div class="content-info">';


//include "content_one_component.php";
//include "list_component.php";
include "add_info.php";
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

