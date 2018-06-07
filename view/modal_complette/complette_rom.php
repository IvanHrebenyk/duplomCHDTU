							
							<div class="col-xs-12">
								 <div class="form-group">

								 	<form action="/motherboard/?sata=<? echo $row['generation_interface']; ?>" method="post">
								 		<input type="hidden" name="rom_number" value="<?echo $id?>">
								 		<input type="hidden" name="rom_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Материнські плати
										</button>
									</form>
									
								 </div>
							</div>
							
