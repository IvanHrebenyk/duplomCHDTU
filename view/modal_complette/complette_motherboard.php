							
							<div class="col-xs-12">
								 <div class="form-group">

								 	<? if($isset_videocard_complette) { ?>
								 	<form action="/gpu/" method="post">
								 		<input type="hidden" name="motherboard_number" value="<?echo $id?>">
								 		<input type="hidden" name="motherboard_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Відеокарти
										</button>
									</form>
										<? } ?>	
									

								 	<? if($isset_cpu_complette) { ?>
								 	<form action="/cpu/" method="post">
								 		<input type="hidden" name="motherboard_number" value="<?echo $id?>">
								 		<input type="hidden" name="motherboard_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Процесори
										</button>
									</form>
										<? } ?>	
									

								 	<? if($isset_power_complette) { ?>
								 	<form action="/power/" method="post">
								 		<input type="hidden" name="motherboard_number" value="<?echo $id?>">
								 		<input type="hidden" name="motherboard_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Блоки живлення
										</button>
									</form>
										<? } ?>	
									

								 	<? if($isset_ram_complette) { ?>
								 	<form action="/ram/" method="post">
								 		<input type="hidden" name="motherboard_number" value="<?echo $id?>">
								 		<input type="hidden" name="motherboard_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Оперативно запам'ятовуючі пристрої
										</button>
									</form>
										<? } ?>	
									

								 	<? if($isset_rom_complette) { ?>
								 	<form action="/rom/" method="post">
								 		<input type="hidden" name="motherboard_number" value="<?echo $id?>">
								 		<input type="hidden" name="motherboard_name" value="<?echo $row['firm'].' '.$row['model'];?>">
										<button type="submit" class="btn btn-default btn-complette">
											Постійно запам'ятовуючі пристрої
										</button>
									</form>
										<? } ?>	
									

								
								<? include 'view/modal_complette/error_complette.php'; ?>
								 </div>
							</div>
							
