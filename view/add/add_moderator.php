<div class="container-fluid">
	<div class="row">
		<div class="col-12">
			<form action="/model/save/moderator" method="post">
				<h3><small class="text-muted">Реєстрація нового модератора:</small></h3>
				<div class="form-add-component">
					<div class="form-group element-component">
					  <label for="login" class="text-secondary label-input">Логін:</label>
					  <input type="text" class="form-control" id="login" name="login" placeholder="" required>
					</div>
					<div class="form-group element-component">
					  <label for="password" class="text-secondary label-input">Пароль:</label>
					  <input type="password" class="form-control" id="password" name="password" placeholder="" required>
					</div>
					<div class="form-group element-component">
					  <label for="yet_password" class="text-secondary label-input">Повторіть пароль:</label>
					  <input type="password" class="form-control" id="yet_password" size="30" name="yet_password" placeholder="" required>
					</div>
					<div class="float-right">
						<input type="submit" class="btn btn-primary" onclick="if(!buttonAddNewUser()) return false;"  value="Занести в базу">
					</div>
				</div>
			</form>
		</div>
	</div>	
</div>