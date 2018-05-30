<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form enctype="multipart/form-data" action="#go_videocard" method="post">
			
				<h3><small class="text-muted">Процесор:</small></h3>
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
					  <label for="ghz" class="text-secondary label-input">Частота(ГГц):</label>
					  <input type="number" class="form-control" id="ghz" name="ghz" placeholder="Ghz" required>
					</div>
					
					<div class="form-group element-component">
					  <label for="type_ram" class="text-secondary label-input">Тип підтримуваонї оперативної пам'яті:</label>
					    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="type_ram" name="type_ram" required>
							<option selected value="1<? //ДДР4 - тип і покоління пам'яті ?>">Comments</option>
						</select>
					</div>
					
					<div class="form-group element-component">
					  <label for="socket" class="text-secondary label-input">Роз'єм(Socket):</label>
					    <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="socket" name="socket" required>
							<option selected value="1<? //ДДР4 - тип і покоління пам'яті ?>">Comments</option>
						</select>
					</div>
					
					<div class="form-group element-component">
						<label for="power" class="text-secondary label-input">Вживана потужність електроенергії(W - ват):</label>
						<input type="number" class="form-control" id="power" name="power" placeholder="W, Вт, Ват" required>
					</div>
					
					<div class="form-group element-component">
						<label for="command_set" class="text-secondary label-input">Набір команд:</label>
						<input type="number" class="form-control" step="16" id="command_set" name="command_set" placeholder="x32, x64" required>
					</div>
					
					<div class="form-group element-component">
						<label for="cache" class="text-secondary label-input">Об'єм кеш-пам'яті(Мб):</label>
						<input type="number" class="form-control" id="cache" name="cache" placeholder="Mb" required>
					</div>
					
					<div class="form-group element-component">
						<label for="level_cache" class="text-secondary label-input">Рівень кеш-пам'яті:</label>
						<input type="number" class="form-control" id="level_cache" name="level_cache" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="core" class="text-secondary label-input">Кількість ядер:</label>
						<input type="number" class="form-control" id="core" name="core" placeholder="" required>
					</div>
					
					
					
					
					
					<div class="border border-info border-left-0 rounded element-component" id="additional_cpu_graphic" style="visibility: hidden; padding: 10px; height: 0px;">
						<div class="form-group element-component">
						  <label for="title_graphic" class="text-secondary label-input">Назва інтегрованої графіки:</label>
						  <input type="text" class="form-control" id="title_graphic" name="title_graphic" placeholder="" >
						</div>
					</div>
					
					<div id="new_set_1">
						<input type="button" id="field_control" class="text-muted btn btn-default button-add-component add-hide-button" value="Ввести інтегровану графіку" onclick="additional_cpu_int_graphic('additional_cpu_graphic', 'field_control')">
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
