<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form enctype="multipart/form-data" action="#go_videocard" method="post">
			
				<h3><small class="text-muted">HDD:</small></h3>
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
					
					<input type="hidden" name="technology" value="HDD">
					
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
					  <input type="number" class="form-control" id="weight" name="weight" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="long" class="text-secondary label-input">Довжина(Мм):</label>
					  <input type="number" class="form-control" id="long" name="long" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="width" class="text-secondary label-input">Ширина(Мм):</label>
					  <input type="number" class="form-control" id="width" name="width" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="thickness" class="text-secondary label-input">Товщина(Мм):</label>
					  <input type="number" class="form-control" id="thickness" name="thickness" placeholder="" required>
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
					  <label for="rpm" class="text-secondary label-input">Швидкість обертання шпинделя(RPM):</label>
					  <input type="number" class="form-control" id="rpm" name="rpm" placeholder="RPM" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="buffer" class="text-secondary label-input">Об'єм буферу(Мегабайт):</label>
					  <input type="number" class="form-control" id="buffer" name="buffer" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="speed_transfer" class="text-secondary label-input">Швидкість передавання даних(МБ/с):</label>
					  <input type="number" class="form-control" id="speed_transfer" name="speed_transfer" placeholder="МБ/с" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="noise" class="text-secondary label-input">Максимальний рівень шуму(дБА):</label>
					  <input type="number" class="form-control" id="noise" name="noise" placeholder="дБА" required>
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
