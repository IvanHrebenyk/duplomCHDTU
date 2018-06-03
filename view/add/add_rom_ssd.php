<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form enctype="multipart/form-data" action="/save/rom_ssd" method="post">
			
				<h3><small class="text-muted">SSD:</small></h3>
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
					  <label for="memory" class="text-secondary label-input">Об'єм пам'яті(Гігабайт):</label>
					  <input type="number" class="form-control" id="memory" name="memory" placeholder="Gigabyte" required>
					</div>
					
					<input type="hidden" name="technology" value="SSD">
					
					<div class="form-group element-component">
						<label for="formfactor" class="text-secondary label-input">Форм-фактор:</label>
						<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="formfactor" name="formfactor" required>
							<option selected value="2.5">2.5"</option>
							<option selected value="3.5">3.5"</option>
						</select>
					</div>
					
					<div class="form-group element-component">
					  <label for="power" class="text-secondary label-input">Вживана потужність(W, Ват):</label>
					  <input type="number" class="form-control" id="power" name="power" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="weight" class="text-secondary label-input">Вага(Грами):</label>
					  <input type="number" class="form-control" id="weight" step='0.01' name="weight" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="long" class="text-secondary label-input">Довжина(Мм):</label>
					  <input type="number" class="form-control" id="long" step='0.01' name="long" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="width" class="text-secondary label-input">Ширина(Мм):</label>
					  <input type="number" class="form-control" id="width" step='0.01' name="width" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="thickness" class="text-secondary label-input">Товщина(Мм):</label>
					  <input type="number" class="form-control" id="thickness"step='0.01'  name="thickness" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="title" class="text-secondary label-input">Інтерфейс:</label>
					  <input type="text" class="form-control" id="title" name="title" placeholder="SATA, IDE, PCI, PCI-Express" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="generation" class="text-secondary label-input">Покоління інтерфейсу:</label>
					  <input type="number" class="form-control" id="generation" name="generation" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="read" class="text-secondary label-input">Швидкість зчитування даних(МБ/с):</label>
					  <input type="number" class="form-control" id="read" name="read" placeholder="МБ/с" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="write" class="text-secondary label-input">Швидкість запису даних(МБ/с):</label>
					  <input type="number" class="form-control" id="write" name="write" placeholder="МБ/с" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="dead_time" class="text-secondary label-input">Час напрацювання на відмову(Години):</label>
					  <input type="number" class="form-control" id="dead_time" name="dead_time" placeholder="Години" required>
					</div>
					
					<input type="hidden" name="type" required value="SSD">
					
					<div class="form-group element-component">
						<label for="type_flash_memory" class="text-secondary label-input">Тип flash-пам'яті:</label>
						<select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="type_flash_memory" name="type_flash_memory" required>
							<!-- <option selected value="1<? //ДДР4 - тип і покоління пам'яті ?>">Comments</option> -->
							<?
							if($list_flash_memory_type = list_flash_memory_type($db)){
								while($row = mysql_fetch_array($list_flash_memory_type))
									echo '<option value="'.$row['id'].'">'.$row['title'].'</option>';
							}
							?>
						</select>
					</div>
					
					
					<div class="border border-info border-left-0 rounded element-component" id="add_image_component" style="visibility: hidden; padding: 10px; margin-top: 10px; height: 0px;">
						<div class="form-group element-component">
							<label for="image_uppload" class="text-secondary label-input">Завантаження зображення:</label>
							<input type="file"  accept="image/*,image/jpeg" class="form-control-file" id="image_uppload" name="image_uppload" aria-describedby="fileHelp">
						</div>
					</div>
					<div id="new_set_2" style="margin-bottom: 20px;">
						<input type="button" id="uppload_image_control" class="text-muted btn btn-default button-add-component add-hide-button" style="margin-top: -20px;" value="Завантажити картинку" onclick="uppload_image_form('add_image_component', 'uppload_image_control')">
					</div>
					
					
					<div class="float-right">
						<input type="submit" class="btn btn-primary" value="Занести в базу">
					</div>
				</div>
				
			</form>
		</div>
	</div>	
</div>
