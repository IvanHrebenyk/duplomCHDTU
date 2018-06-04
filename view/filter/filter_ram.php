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
			for($i=1;$i<5;$i++){
				$checked = '';
				if($i == $_GET['type_ram'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="type_ram" value="<? echo $i; ?>" onChange="this.form.submit()">DDR 
					<? echo $i; ?>
				  </label>
				</div>
				<?
			}
			?>
		</div>
	</div>

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Об'єм пам'яті(Mb)</small></h3>
			<?
			while($row = mysql_fetch_array($list_memory_ram)){
				$checked = '';
				if($row['memory'] == $_GET['memory'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="memory" value="<? echo $row['memory']; ?>" onChange="this.form.submit()">
					<? echo $row['memory']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>



</form>