<?
include "head.php";
echo '<header>'; 
include "header_user.php"; 
//include "header_moderator.php"; 
//include "header_admin.php"; 
echo '</header>';
////////////// body content ////////
echo '<div class="content-info">';
include "content_one_component.php";
echo '</div>';
////////////// body content ////////
echo '<footer >';
echo '<div class="navbar-fixed-bottom row-fluid"><div class="navbar-inner"><div class="container" >';
	include "footer.php";
 echo '</div></div></div>';
 echo '</footer>';
?>

