<div class="container" style=" margin-left: 20px;">
<? 
$i = 0;
while($row = mysql_fetch_array($view_list)){ 
	if(($i % 3) == 0)
		echo '<div class="row row-list-component" >';
	$i++;
	if(!($img = $row['image']))
		 $img = 'noimage.png';
?>
<div class="col-3 border border-bottom-0 border-primary rounded-top hover-list-component">
	<a href="<? echo '/'.$controller_name.'/info/'.$row['id'].'/'.$row['firm'].'-'.$row['model'].'.html'; ?>"><img src="../<? echo $img; ?>" class="border border-secondary rounded border-top-0 img-list-component">
	<h6 class="title-component-list"><? echo $row['firm'].' '.$row['model']; ?></h6></a>
	<hr class="hr-component-list">
</div>	
<div class="col-1"></div>
<? 
	if(($i % 3) == 0) echo '</div>';
}
if(($i % 3) != 0) echo '</div>';
?>
<!-- add block finish -->	
<?
if($isset > $limit && $view_pagination){
	?>
	<div class="row" style="font-family: Consolas; text-align: center; margin-bottom: 10px; margin-top: -40px;">
		<div class="col-7"></div>
		<div class="col-3" style="margin-left: -235px; margin-top: 30px;">
			<ul class="pagination">
				<?
					$query_string = '&'.str_ireplace('page='.$_GET['page'], "", $_SERVER['QUERY_STRING']);
					 $query_string = str_ireplace('&&', "&", $query_string);
				if($page == 0 || $page == 1){
					$page = 1;
					$prev_page = 'disabled';
				}
				else
					$prev_link = '/'.$controller_name.'/?page='.($page-1).$query_string;
				if($page * $limit > $isset)
					$next_page = 'disabled';
				else
					$next_link = '/'.$controller_name.'/?page='.($page+1).$query_string;
				?>
			  <li class="page-item <?echo $prev_page;?>"><a class="page-link" href="<?echo $prev_link;?>">Попередня</a></li>
			  <li class="page-item <?echo $next_page;?>"><a class="page-link" href="<?echo $next_link;?>">Наступна</a></li>
			</ul>
		</div>
	</div>
	<?
}
?>
</div>