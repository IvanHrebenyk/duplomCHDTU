<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form action="/model/save/ram_ddr" method="post">
				<h3><small class="text-muted">Назва та покоління оперативної пам'яті:</small></h3>
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
						<input type="submit" class="btn btn-primary" value="Занести в базу">
					</div>
				</div>
			</form>
		</div>
	</div>	
</div>