<div class="container" style="bacground-color: #fafafa;">
	<div class="row">
		<div class="col-2">
			<button class="btn btn-default btn-xs go-back" style="padding: 0px; float: left;"><a href="<?echo $_SERVER['HTTP_REFERER'];?>" class="btn btn-default"  >Назад до списку</a></button>
		</div>
		<div class="col-8" align="center">
			<button class="btn btn-default btn-xs go-back" style="margin-bottom: 20px; padding: 0px;"><a href="/<?echo $controller_name;?>" class="btn btn-default" >Категорія</a></button>
		
		</div>
		<div class="col-2">
			<button class="btn btn-default btn-xs delete-component" style="padding: 0px; float: right;"><a href="#okayDelete" class="btn btn-default" onclick="if(!confirm('Підтвердіть видалення')) return false;" >Видалити</a></button>
		</div>
	</div>
</div>
<?
$row = mysql_fetch_array($info);
$img_path = '../../../../noimage.png';
if($row['image'])
	$img_path = '../../../../'.$row['image'];
?>
<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4" align="center">
			<a href="<?echo $img_path; ?>">
				<img src="<?echo $img_path; ?>" class="img-thumbnail rounded " title="<? echo $row['firm'].' '.$row['model']; ?>" width="330px">
			</a>
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

<div class="container-fluid" style="margin-top: 40px;margin-bottom: 40px;">
<!-- <div class="row">
	<div class="col-6">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6" ><h6>Характеристика 1:</h6></div>
				<div class="col-6" >
					<span class="option-component-label">Показник 1;</span>
				</div>
			</div>
			<hr>
		</div>
	</div>
	
	
	<div class="col-6">
		<div class="container-fluid">
			<div class="row">
				<div class="col-6" ><h6>Характеристика 2:</h6></div>
				<div class="col-6" >
					<span class="option-component-label">Показник 2;</span>
				</div>
			</div>
			<hr>
		</div>
	</div>
</div> -->

	
<? include 'view/info_component/info_component_'.$controller_name.'.php'; ?>
	
	
	
</div>

