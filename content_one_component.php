<div class="container" style="bacground-color: #fafafa;">
	<div class="row">
		<div class="col-2">
			<button class="btn btn-default btn-xs go-back" style="padding: 0px; float: left;"><a href="#" class="btn btn-default"  >Назад до списку</a></button>
		</div>
		<div class="col-8" align="center">
			<button class="btn btn-default btn-xs go-back" style="margin-bottom: 20px; padding: 0px;"><a href="#іфі" class="btn btn-default" >Категорія</a></button>
		
		</div>
		<div class="col-2">
			<button class="btn btn-default btn-xs delete-component" style="padding: 0px; float: right;"><a href="#okayDelete" class="btn btn-default" onclick="if(!confirm('Підтвердіть видалення')) return false;" >Видалити</a></button>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-4"></div>
		<div class="col-4" align="center">
			<a href="test.jpg">
				<img src="test.jpg" class="img-thumbnail rounded " title="Компонент" width="330px">
			</a>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6" style="text-align: center; font-family: Consolas;">
			<h5>Nvidia GTX-1070 power solution</h5>
			<button class="btn btn-default btn-xs get-component" type="button" data-toggle="modal" data-target="#open-category-component" id="button-component">Підібрати компоненти</button>
			<?include "modal_component.php";?>
		</div>
		<div class="col-3"></div>
	</div>
</div>

<div class="container-fluid" style="margin-top: 40px;margin-bottom: 40px;">
	<div class="row">
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
	</div>
	
	
	
	
	
</div>

