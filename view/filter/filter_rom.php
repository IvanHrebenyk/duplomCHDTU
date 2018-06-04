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
			<h3><small class="text-muted">Об'єм пам'яті(Gb)</small></h3>
			<?
			while($row = mysql_fetch_array($list_memory_rom)){
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

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Технологія</small></h3>
			<?
			while($row = mysql_fetch_array($list_technology_rom)){
				$checked = '';
				if($row['technology'] == $_GET['technology'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="technology" value="<? echo $row['technology']; ?>" onChange="this.form.submit()">
					<? echo $row['technology']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Інтерфейс</small></h3>
			<?
			while($row = mysql_fetch_array($list_interface_rom)){
				$checked = '';
				if($row['title'].'_'.$row['generation'] == $_GET['interface'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="interface" value="<? echo $row['title'].'_'.$row['generation']; ?>" onChange="this.form.submit()">
					<? echo $row['title'].' '.$row['generation']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>



</form>