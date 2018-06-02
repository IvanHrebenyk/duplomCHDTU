<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form enctype="multipart/form-data" action="/model/save/videocard" method="post">
			
				<h3><small class="text-muted">Відеоадаптер:</small></h3>
				<div class="form-add-component">
				
					<div class="form-group element-component">
					  <label for="firm" class="text-secondary label-input">Фірма:</label>
					  <input type="text" class="form-control" id="firm" name="firm" placeholder="" required>
					</div>
				
					<div class="form-group element-component">
					  <label for="model" class="text-secondary label-input">Модель:</label>
					  <input type="text" class="form-control" id="model" name="model" placeholder="" required>
					</div>

					<div class="form-group element-component">
					  <label for="memory_mhz" class="text-secondary label-input">Частота пам'яті(МГц):</label>
					  <input type="number" class="form-control" id="memory_mhz" name="memory_mhz" placeholder="Mhz" required>
					</div>

					<div class="form-group element-component">
					  <label for="core_mhz" class="text-secondary label-input">Частота ядра(МГц):</label>
					  <input type="number" class="form-control" id="core_mhz" name="core_mhz" placeholder="Mhz" required>
					</div>

					<div class="form-group element-component">
					  <label for="count_cooler" class="text-secondary label-input">Кількість кулерів:</label>
					  <input type="number" class="form-control" id="count_cooler" name="count_cooler" placeholder="" required>
					</div>

					<div class="form-group element-component">
					  <label for="memory" class="text-secondary label-input">Об'єм пам'яті(Мб):</label>
					  <input type="number" class="form-control" id="memory" name="memory" placeholder="Mb" required>
					</div>

					<div class="form-group element-component">
					  <label for="type_memory" class="text-secondary label-input">Тип пам'яті:</label>
					    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="type_memory" name="type_memory" required>
							<!-- <option selected value="1<? //ДДР4 - тип і покоління пам'яті ?>">Comments</option> -->
							<?
								if($list_video_ddr = list_video_ddr($db)){
									while($row = mysql_fetch_array($list_video_ddr))
										echo '<option value="'.$row['id'].'">'.$row['title'].' '.$row['generation'].'</option>';
								}

							?>
						</select>
					</div>

					<div class="form-group element-component">
					  <label for="count_hdmi" class="text-secondary label-input">Кількість HDMI:</label>
					  <input type="number" class="form-control" id="count_hdmi" name="count_hdmi" placeholder="" required>
					</div>

					<div class="form-group element-component">
					  <label for="count_vga" class="text-secondary label-input">Кількість VGA:</label>
					  <input type="number" class="form-control" id="count_vga" name="count_vga" placeholder="" required>
					</div>

					<div class="form-group element-component">
					  <label for="count_display_port" class="text-secondary label-input">Кількість Display Port:</label>
					  <input type="number" class="form-control" id="count_display_port" name="count_display_port" placeholder="" required>
					</div>

					<div class="form-group element-component">
					  <label for="memory_bit" class="text-secondary label-input">Розрядність пам'яті:</label>
					  <input type="number" step="2" class="form-control" id="memory_bit" name="memory_bit" placeholder="x32, x64, ..." required>
					</div>

					<div class="form-group element-component">
					  <label for="generation_pci" class="text-secondary label-input">Покоління PCI-express:</label>
					  <input type="number" step="0.1" class="form-control" id="generation_pci" name="generation_pci" placeholder="" required>
					</div>

					<div class="form-group element-component">
					  <label for="slot" class="text-secondary label-input">Розрядність PCI-express:</label>
					  <input type="number" class="form-control" id="slot" name="slot" placeholder="" required>
					</div>
					
					<div class="border border-info border-left-0 rounded element-component" id="additional_power_videocard" style="visibility: hidden; padding: 10px; height: 0px;">
						<div class="form-group element-component">
						  <label for="count_contact_loop" class="text-secondary label-input">Кількість потрібних контактів на шлейфі живлення:</label>
						  <input type="number" class="form-control" id="count_contact_loop" name="count_contact_loop" placeholder="" >
						</div>
						<div class="form-group element-component">
						  <label for="count_need_loop" class="text-secondary label-input">Кількість потрібних додаткових шлейфів живлення:</label>
						  <input type="number" class="form-control" id="count_need_loop" name="count_need_loop" placeholder="" >
						</div>
					</div>
					
					<div id="new_set_1">
						<input type="button" id="field_control" class="text-muted btn btn-default button-add-component add-hide-button" value="Ввести додаткове живлення" onclick="additional_power_video('additional_power_videocard', 'field_control')">
					</div>
					
					<div class="border border-info border-left-0 rounded element-component" id="add_image_component" style="visibility: hidden; padding: 10px; margin-top: 10px; ">
						<div class="form-group element-component">
							<label for="image_uppload" class="text-secondary label-input">Завантаження зображення:</label>
							<input type="file"  accept="image/*,image/jpeg" class="form-control-file" id="image_uppload" name="image_uppload" aria-describedby="fileHelp">
						</div>
					</div>
					
					<div id="new_set_2">
						<input type="button" id="uppload_image_control" class="text-muted btn btn-default button-add-component add-hide-button" value="Завантажити картинку" onclick="uppload_image_form('add_image_component', 'uppload_image_control')">
					</div>
					<div class="float-right">
						<input type="submit" class="btn btn-primary" value="Занести в базу">
					</div>
				</div>
				
			</form>
		</div>
	</div>	
</div>
