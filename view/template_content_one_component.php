<div class="container" style="bacground-color: #fafafa;">
	<div class="row">
		<div class="col-2">
			<button class="btn btn-default btn-xs go-back" style="padding: 0px; float: left;"><a href="<?echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-default"  >Назад до списку</a></button>
		</div>
<?
$row = mysql_fetch_array($info);
$img_path_have = false;
$img_path = '../../../../noimage.png';
if($row['image']){
	$img_path = '../../../../'.$row['image'];
	$img_path_have = true;
}
?>
		<? if($_SESSION['user'] != 'admin' && $_SESSION['user'] != 'moderator') { ?>
		<div class="col-8" align="center"></div><div class="col-2" style="margin-left: -100px;">
		<? } 
		else { ?>
			<div class="col-8" align="center">
		<? } ?>
			<button class="btn btn-default btn-xs go-back" style="margin-bottom: 20px; padding: 0px;"><a href="/<?echo $controller_name;?>" class="btn btn-default" >
				<?
				$title_component = $row['firm']." ".$row['model'];
				if($controller_name == 'ram') echo "Оперативно запам'ятовуючі пристрої" ;
				else if($controller_name == 'cpu') echo "Процесори" ;
				else if($controller_name == 'gpu') echo "Відеокарти" ;
				else if($controller_name == 'power') echo "Блоки живлення" ;
				else if($controller_name == 'motherboard') echo "Материнські плати" ;
				else if($controller_name == 'rom') echo "Накопичувачі" ;
				?>
					
				</a></button>
		</div>
		<? if($_SESSION['user'] == 'admin' || $_SESSION['user'] == 'moderator') {?>
		<div class="col-2">
			<button class="btn btn-default btn-xs delete-component" style="padding: 0px; float: right;"><a href="/<?echo $controller_name;?>/remove/<?echo $row['id'].'/'.$row['firm'].'-'.$row['model'];?>" class="btn btn-default" onclick="if(!confirm('Підтвердіть видалення')) return false;" >Видалити</a></button>
		</div>
		<? } ?>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4" align="center">
			<? if($img_path_have)  {?><a href="<?echo $img_path; ?>"><? } ?>
				<img src="<?echo $img_path; ?>" class="img-thumbnail rounded " title="<? echo $row['firm'].' '.$row['model']; ?>" width="330px">
			<? if($img_path_have)  {?></a><? } ?>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6" style="text-align: center; font-family: Consolas;">
			<h5><? echo $row['firm'].' '.$row['model']; ?></h5>
			<button class="btn btn-default btn-xs get-component" type="button" data-toggle="modal" data-target="#open-category-component" id="button-component">Підібрати компоненти</button>
			<?include "view/modal/modal_component.php";?>
		</div>
		<div class="col-3"></div>
	</div>
</div>

<div class="container" style="margin-top: 40px;margin-bottom: 40px;">

<? include 'view/info_component/info_component_'.$controller_name.'.php'; ?>
	
	
	
</div>

