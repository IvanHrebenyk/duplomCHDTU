<div id="open_modal_search" class="modal fade modal-dialog modal-lg">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body" style="text-align: center;"><h5>Виберіть категорію, по якій виконати пошук</h5></div>
			<div>
				 <div class="container">
					 <div class="row">
						 <div class="col-md-12 col-md-offset-3 well">
								 <div class="col-xs-12">
									 <div class="form-group">
										<input type="submit" class="form-control btn btn-primary" value="Процесори" onclick="searchForm('cpu/');"/>
									 </div>
								 </div>
								 <div class="col-xs-12">
									 <div class="form-group">
										<input type="submit" class="form-control btn btn-primary" value="Материнські плати" onclick="searchForm('motherboard/');"/>
									 </div>
								 </div>
								 <div class="col-xs-12">
									 <div class="form-group">
										<input type="submit" class="form-control btn btn-primary" value="Відеоадаптери"/>
									 </div>
								 </div>
								 <div class="col-xs-12">
									 <div class="form-group">
										<input type="submit" class="form-control btn btn-primary" value="Оперативні запам'ятовуючі пристрої" onclick="searchForm('ram/');"/>
									 </div>
								 </div>
								 <div class="col-xs-12">
									 <div class="form-group">
										<input type="submit" class="form-control btn btn-primary" value="Постійні запам'ятовуючі пристрої" onclick="searchForm('rom/');"/>
									 </div>
								 </div>
								 <div class="col-xs-12">
									 <div class="form-group">
										<input type="submit" class="form-control btn btn-primary" value="Блоки живлення" onclick="searchForm('power/');"/>
									 </div>
								 </div>
								 <div class="text-center col-xs-12">
									<button class="btn btn-default" style="margin-bottom: 10px;" id="close-search" type="button" data-dismiss="modal">Відміна</button>
								 </div>
						 </div>
					 </div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	<?
	echo 'function searchForm(category){
		document.getElementById("searchInfo").action = "http://'.$_SERVER['SERVER_NAME'].'/" + category;
		return true;

	}';
	?>
</script>