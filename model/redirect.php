<?

function redirect($url){
	echo '<script type="text/javascript">'; 
	echo 'window.location.href="'.$url.'";'; 
	echo '</script>'; 
}

function redirectNewLink($url){
	echo '<script type="text/javascript">'; 
	echo 'window.location.href="http://'.$url.'";'; 
	echo '</script>'; 
}

?>