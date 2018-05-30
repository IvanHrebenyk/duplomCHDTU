<html>
<?
include "head.php";
?>
<body>
<?
echo '<header>'; 
/*include "headeruser_view.php"; 
include "headermoderator_view.php"; 
*/
include 'application/views/'.$header_view;
//include "headeradmin_view.php"; 
/////////////////include 'application/views/'.$header_view;
echo '</header>';
////////////// body content ////////
?>

<script src="script.js" ></script>

<?
echo '<div class="content-info">';
	include 'application/views/'.$content_view;
echo '</div>';
////////////// body content ////////
echo '<footer class="fluid">';
	include "footer.php";
 echo '</footer>';
?>
</body>
</html>

