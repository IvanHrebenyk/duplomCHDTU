<?
if(!($value = $_GET['q']))
	$value = '';
?>
<form class="form-search" action="#" id="searchInfo" method="get">
  <input type="text" class="input-medium search-query" size="70%" name="q" value="<?echo $value;?>" id="q" placeholder="Пошук..." required><button class="btn" type="button" data-toggle="modal" data-target="#open_modal_search" id="search-button">Знайти</button><?include "view/modal/modal_search.php";?> 
</form>
