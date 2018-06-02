<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form enctype="multipart/form-data" action="/model/save/motherboard" method="post">
			
				<h3><small class="text-muted">Материнська плата:</small></h3>
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
						<label for="socket" class="text-secondary label-input">Роз'єм(Socket):</label>
						<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="socket" name="socket" required>
							<!-- <option selected value="1<? //ДДР4 - тип і покоління пам'яті ?>">Comments</option> -->
						<?
						if($list_socket = list_socket($db)){
							while($row = mysql_fetch_array($list_socket))
								echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
						}
						?>
						</select>
					</div>
					
					<div class="form-group element-component">
						<label for="count_ide" class="text-secondary label-input">Кількість IDE роз'ємів:</label>
						<input type="number" class="form-control" id="count_ide" name="count_ide" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_vga" class="text-secondary label-input">Кількість VGA роз'ємів:</label>
						<input type="number" class="form-control" id="count_vga" name="count_vga" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_hdmi" class="text-secondary label-input">Кількість HDMI роз'ємів:</label>
						<input type="number" class="form-control" id="count_hdmi" name="count_hdmi" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_audio" class="text-secondary label-input">Кількість аудіо роз'ємів:</label>
						<input type="number" class="form-control" id="count_audio" name="count_audio" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="speed_lan" class="text-secondary label-input">Максимальна швидкість LAN(М-біт):</label>
						<input type="number" class="form-control" id="speed_lan" name="speed_lan" placeholder="Megabit" required>
					</div>
					
					<div class="form-group element-component">
						<label for="title_audio" class="text-secondary label-input">Назва аудіо:</label>
						<input type="text" class="form-control" id="title_audio" name="title_audio" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_dvi" class="text-secondary label-input">Кількість DVI роз'ємів:</label>
						<input type="number" class="form-control" id="count_dvi" name="count_dvi" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_contact_power_cpu" class="text-secondary label-input">Кількість контактів живлення CPU:</label>
						<input type="number" class="form-control" id="count_contact_power_cpu" name="count_contact_power_cpu" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_contact_power_mb" class="text-secondary label-input">Кількість контактів живлення материнської плати:</label>
						<input type="number" class="form-control" id="count_contact_power_mb" name="count_contact_power_mb" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="max_ram_mhz" class="text-secondary label-input">Максимальна частота оперативної пам'яті(МГц):</label>
						<input type="number" class="form-control" id="max_ram_mhz" name="max_ram_mhz" placeholder="Mhz" required>
					</div>
					
					<div class="form-group element-component">
						<label for="formfactor" class="text-secondary label-input">Форм-фактор:</label>
						<input type="text" class="form-control" id="formfactor" name="formfactor" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_ps2_mouse" class="text-secondary label-input">Кількість PS/2 mouse роз'ємів:</label>
						<input type="number" class="form-control" id="count_ps2_mouse" name="count_ps2_mouse" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_ps2_keyboard" class="text-secondary label-input">Кількість PS/2 keyboard роз'ємів:</label>
						<input type="number" class="form-control" id="count_ps2_keyboard" name="count_ps2_keyboard" placeholder="" required>
					</div>
					
					
					
					<div class="border border-info border-left-0 rounded element-component" id="additional_ram_motherboard" style="visibility: hidden; padding: 10px; height: 0px;">
						<div class="form-group element-component">
						  <label for="count_ddr1" class="text-secondary label-input">Кількість DDR1:</label>
						  <input type="number" class="form-control" id="count_ddr1" name="count_ddr1" placeholder="" >
						</div>
						<div class="form-group element-component">
						  <label for="count_ddr2" class="text-secondary label-input">Кількість DDR2:</label>
						  <input type="number" class="form-control" id="count_ddr2" name="count_ddr2" placeholder="" >
						</div>
						<div class="form-group element-component">
						  <label for="count_ddr3" class="text-secondary label-input">Кількість DDR3:</label>
						  <input type="number" class="form-control" id="count_ddr3" name="count_ddr3" placeholder="" >
						</div>
						<div class="form-group element-component">
						  <label for="count_ddr4" class="text-secondary label-input">Кількість DDR4:</label>
						  <input type="number" class="form-control" id="count_ddr4" name="count_ddr4" placeholder="" >
						</div>
					</div>
					
					<div id="new_set_1">
						<input type="button" id="field_control_1" class="text-muted btn btn-default button-add-component add-hide-button" value="Ввести дані про слоти RAM" onclick="additional_count_ram_motherboard('additional_ram_motherboard', 'field_control_1')">
					</div>
					
					<div class="border border-info border-left-0 rounded element-component" id="add_image_component" style="visibility: hidden; padding: 10px; margin-top: 10px; height: 0px;">
						<div class="form-group element-component">
							<label for="image_uppload" class="text-secondary label-input">Завантаження зображення:</label>
							<input type="file"  accept="image/*,image/jpeg" class="form-control-file" id="image_uppload" name="image_uppload" aria-describedby="fileHelp">
						</div>
					</div>
					<div id="new_set_2" style="margin-bottom: 20px;">
						<input type="button" id="uppload_image_control" class="text-muted btn btn-default button-add-component add-hide-button" value="Завантажити картинку" onclick="uppload_image_form('add_image_component', 'uppload_image_control')">
					</div>
					<div id="dynamic_field_pci_1" class="border border-info border-left-0 rounded element-component" style=" padding: 10px;">
						<input type="button" class="text-muted btn btn-default button-add-component" value="+ PCI" onclick="new_dynamic_field_pci(2, dynamic_field_pci_1)">
					</div>
					
					
					<div class="border border-info border-left-0 rounded element-component" id="additional_wifi_motherboard" style="visibility: hidden; padding: 10px; height: 0px;">
						<div class="form-group element-component">
						  <label for="title_wifi" class="text-secondary label-input">Назва WiFi:</label>
						  <input type="text" class="form-control" id="title_wifi" name="title_wifi" placeholder="" >
						</div>
					</div>
					
					<div id="new_set_3">
						<input type="button" id="field_control_2" class="text-muted btn btn-default button-add-component add-hide-button" value="Ввести дані про WiFi" onclick="additional_wifi_on_motherboard('additional_wifi_motherboard', 'field_control_2')">
					</div>
					
					<div id="dynamic_field_usb_1" class="border border-info border-left-0 rounded element-component" style=" padding: 10px; margin-top: 20px;">
						<input type="button" class="text-muted btn btn-default button-add-component" value="+ USB" onclick="new_dynamic_field_usb(2, dynamic_field_usb_1)">
					</div>
					
					<div id="dynamic_field_sata_1" class="border border-info border-left-0 rounded element-component" style=" padding: 10px; margin-top: 20px;">
						<input type="button" class="text-muted btn btn-default button-add-component" value="+ SATA" onclick="new_dynamic_field_sata(2, dynamic_field_sata_1)">
					</div>
					
					
					<div class="float-right">
						<input type="submit" class="btn btn-primary" value="Занести в базу">
					</div>
				</div>
				
			</form>
		</div>
	</div>	
</div>
