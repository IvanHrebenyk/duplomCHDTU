<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form enctype="multipart/form-data" action="#go_videocard" method="post">
			
				<h3><small class="text-muted">Блок живлення:</small></h3>
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
						<label for="watt" class="text-secondary label-input">Потужність(Вт):</label>
						<input type="number" class="form-control" id="watt" name="watt" placeholder="Вт" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_sata" class="text-secondary label-input">Кількість SATA:</label>
						<input type="number" class="form-control" id="count_sata" name="count_sata" placeholder="" required>
					</div>
					
					<div class="form-group element-component">
						<label for="count_molex" class="text-secondary label-input">Кількість Molex:</label>
						<input type="number" class="form-control" id="count_molex" name="count_molex" placeholder="" required>
					</div>
					
					
					
					
					

					<div id="dynamic_field_connect_mb_1" class="border border-info border-left-0 rounded element-component" style=" padding: 10px;">
						<input type="button" class="text-muted btn btn-default button-add-component" value="+ З'єднання з материнською платою" onclick="new_dynamic_field_connect_mb_1(2, dynamic_field_connect_mb_1)">
					</div>
					
					<div id="dynamic_field_connect_cpu_1" class="border border-info border-left-0 rounded element-component" style=" padding: 10px; margin-top: 20px;">
						<input type="button" class="text-muted btn btn-default button-add-component" value="+ З'єднання з процесором" onclick="new_dynamic_field_connect_cpu(2, dynamic_field_connect_cpu_1)">
					</div>
					
					<div id="dynamic_field_connect_gpu_1" class="border border-info border-left-0 rounded element-component" style=" padding: 10px; margin-top: 20px;">
						<input type="button" class="text-muted btn btn-default button-add-component" value="+ Додаткове живлення відеокарти" onclick="new_dynamic_field_connect_gpu(2, dynamic_field_connect_gpu_1)">
					</div>
					
					<div class="border border-info border-left-0 rounded element-component" id="add_image_component" style="visibility: hidden; padding: 10px; height: 0px;">
						<div class="form-group element-component">
							<label for="image_uppload" class="text-secondary label-input">Завантаження зображення:</label>
							<input type="file"  accept="image/*,image/jpeg" class="form-control-file" id="image_uppload" name="image_uppload" aria-describedby="fileHelp">
						</div>
					</div>
					<div id="new_set_2" style="margin-bottom: 20px;">
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
