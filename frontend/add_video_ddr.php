<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form action="#go_video_ddr">
				<h3><small class="text-muted">Назва та покоління відеопам'яті:</small></h3>
				<div class="form-add-component">
					<div class="form-group element-component">
					  <label for="title" class="text-secondary label-input">Назва:</label>
					  <input type="text" class="form-control" id="title" name="title" placeholder="DDR, SDDR, ..." required>
					</div>
					<div class="form-group element-component">
					  <label for="generation" class="text-secondary label-input">Покоління:</label>
					  <input type="number" class="form-control" id="generation" name="generation" placeholder="1, 2, 3, ..." required>
					</div>
					<div class="float-right">
						<input type="submit" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
	<div class="row">
		<div class="col-12">
			<form action="#go_video_ddr">
				<h3><small class="text-muted">Назва та покоління відеопам'яті:</small></h3>
				<div class="form-add-component">
					<div class="form-group element-component">
					  <label for="title" class="text-secondary label-input">Назва:</label>
					  <input type="text" class="form-control" id="title" name="title" placeholder="DDR, SDDR, ..." required>
					</div>
					<div class="form-group element-component">
					  <label for="generation" class="text-secondary label-input">Покоління:</label>
					  <input type="number" class="form-control" id="generation" name="generation" placeholder="1, 2, 3, ..." required>
					</div>
					<div id="new_set_1">
						<input type="button" class="text-muted btn btn-default button-add-component" value="+" onclick="new_field(2, new_set_1)">
					</div>
					<div class="float-right">
						<input type="submit" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
	
	
	
</div>