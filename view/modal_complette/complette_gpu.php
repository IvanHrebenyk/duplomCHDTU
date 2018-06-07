							
							<div class="col-xs-12">
								 <div class="form-group">

								 	<? if($isset_motherboard_complette) { ?>
								 	<form action="/motherboard/" method="post">
								 		<input type="hidden" name="gpu_number" value="<?echo $id?>">
								 		<input type="hidden" name="gpu_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Материнські плати
										</button>
										<? } ?>	
									</form>

								 	<? if($isset_cpu_complette) { ?>
								 	<form action="/cpu/" method="post">
								 		<input type="hidden" name="gpu_number" value="<?echo $id?>">
								 		<input type="hidden" name="gpu_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Процесори
										</button>
										<? } ?>	
									</form>

								 	<? if($isset_power_complette) { ?>
								 	<form action="/power/" method="post">
								 		<input type="hidden" name="gpu_number" value="<?echo $id?>">
								 		<input type="hidden" name="gpu_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Блоки живлення
										</button>
										<? } ?>	
									</form>

								
								<? include 'view/modal_complette/error_complette.php'; ?>
								 </div>
							</div>
							
