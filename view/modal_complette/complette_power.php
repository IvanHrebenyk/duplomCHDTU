							
							<div class="col-xs-12">
								 <div class="form-group">

								 	<? if($isset_videocard_complette) { ?>
								 	<form action="/gpu/" method="post">
								 		<input type="hidden" name="power_number" value="<?echo $id?>">
								 		<input type="hidden" name="power_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Відеокарти
										</button>
									</form>
										<? } ?>	

								 	<? if($isset_motherboard_complette) { ?>
								 	<form action="/motherboard/" method="post">
								 		<input type="hidden" name="power_number" value="<?echo $id?>">
								 		<input type="hidden" name="power_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Материнські плати
										</button>
									</form>
										<? } ?>	
								
								<? include 'view/modal_complette/error_complette.php'; ?>
								 </div>
							</div>
							
