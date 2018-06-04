<form action="" class="text-secondary option-filter">

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Виробник</small></h3>
			<?
			while($row = mysql_fetch_array($list_firm)){
				$checked = '';
				if($row['firm'] == $_GET['firm'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="firm" value="<? echo $row['firm']; ?>" onChange="this.form.submit()">
					<? echo $row['firm']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>


	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Тип пам'яті</small></h3>
			<?
			while($row = mysql_fetch_array($list_ram)){
				$checked = '';
				if($row['id'] == $_GET['type_ram'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="type_ram" value="<? echo $row['id']; ?>" onChange="this.form.submit()">
					<? echo $row['title'].' '.$row['generation']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>
	
	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Частота(ГГц):</small></h3>
			<div class="form-check" style="padding-bottom: 10px;">
				<input type="number" class="form-control" value="<?echo $_GET['ghz'];?>" id="ghz" step="0.01" required name="ghz" placeholder="Ghz" onChange="this.form.submit()">
			</div>
		</div>
	</div>


	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Роз'єм(Socket)</small></h3>
			<?
			while($row = mysql_fetch_array($list_socket_cpu)){
				$checked = '';
				if($row['id'] == $_GET['socket'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="socket" value="<? echo $row['id']; ?>" onChange="this.form.submit()">
					<? echo $row['title']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Кількість ядер</small></h3>
			<?
			while($row = mysql_fetch_array($list_core_cpu)){
				$checked = '';
				if($row['core'] == $_GET['core'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="core" value="<? echo $row['core']; ?>" onChange="this.form.submit()">
					<? echo $row['core']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>	


	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Графіка</small></h3>
			<?
				$checked = '';
				if($_GET['graphic'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="checkbox" <? echo $checked; ?>
					class="form-check-input" name="graphic" value="true" onChange="this.form.submit()">Інтегрована графіка
				  </label>
				</div>
				
		</div>
	</div>

</form>