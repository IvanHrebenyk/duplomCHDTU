							
							<div class="col-xs-12">
								 <div class="form-group">

								 	<form action="/motherboard/?type_ram=<? echo $row['generation_memory']; ?>" method="post">
								 		<input type="hidden" name="ram_number" value="<?echo $id?>">
								 		<input type="hidden" name="ram_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Материнські плати
										</button>
									</form>
									
								 </div>
							</div>
							
