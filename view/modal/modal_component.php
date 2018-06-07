<div id="open-category-component" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">

			<div class="modal-body" style="text-align: center;"><h5 id="checkCategory">Виберіть категорію компонентів для підбору</h5></div>
			<div>
				 <div class="container">
					 <div class="row">
						 <div class="col-md-12 col-md-offset-3 well">
							<? include  'controller/complette/complette_'.$controller_name.'.php'; ?>

<!-- 							<div class="col-xs-12">
								 <div class="form-group">
								 	<form action="#" method="post">
										<button class="btn btn-default" style="width: 100%;">
											<a href="#" style="text-align: center;">Материнські плати</a>
										</button>
									</form>
								 </div>
							</div> -->

							<div class="text-center col-xs-12">
								<HR>
								<button class="btn btn-default" style="position: relative;margin-bottom: 10px;" type="button" data-dismiss="modal">Відміна</button>
							</div>
						 </div>
					 </div>
				</div>
			</div>
		</div>
	</div>
</div>