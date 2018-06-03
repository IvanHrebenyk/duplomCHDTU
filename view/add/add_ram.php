<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form enctype="multipart/form-data" action="/save/ram" method="post">
			
				<h3><small class="text-muted">Оперативний запам'ятовуючий пристрій:</small></h3>
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
					  <label for="mhz" class="text-secondary label-input">Частота пам'яті(МГц):</label>
					  <input type="number" class="form-control" id="mhz" name="mhz" placeholder="Mhz" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="type_memory" class="text-secondary label-input">Тип пам'яті:</label>
					    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="type_memory" name="type_memory" required>
							<!-- <option selected value="1<? //ДДР4 - тип і покоління пам'яті ?>">Comments</option> -->
							<?
							if($list_ram_ddr = list_ram_ddr($db)){
								while($row = mysql_fetch_array($list_ram_ddr))
									echo '<option value="'.$row['id'].'">'.$row['title'].' '.$row['generation'].'</option>';
							}
							?>
						</select>
					</div>
					
					<div class="form-group element-component">
					  <label for="memory" class="text-secondary label-input">Об'єм пам'яті(Мб):</label>
					    <input type="number" class="form-control" id="memory" name="memory" placeholder="Mb" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="destiny" class="text-secondary label-input">Призначення пам'яті:</label>
					    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="destiny" name="destiny" required>
							<option selected value="pc">ПК</option>
							<option value="laptop">Ноутбук</option>
						</select>
					</div>
					
					<div class="border border-info border-left-0 rounded element-component" id="add_image_component" style="visibility: hidden; padding: 10px; margin-top: 0px; height: 0px;">
						<div class="form-group element-component">
							<label for="image_uppload" class="text-secondary label-input">Завантаження зображення:</label>
							<input type="file"  accept="image/*,image/jpeg" class="form-control-file" id="image_uppload" name="image_uppload" aria-describedby="fileHelp">
						</div>
					</div>
					
					<div id="new_set_1" >
						<input type="button" style="margin-top: -20px;" id="uppload_image_control" class="text-muted btn btn-default button-add-component add-hide-button" value="Завантажити картинку" onclick="uppload_image_form('add_image_component', 'uppload_image_control')">
					</div>
					<div class="float-right">
						<input type="submit" class="btn btn-primary" value="Занести в базу">
					</div>
					
					
				</div>
			</form>
		</div>
	</div>	
</div>
