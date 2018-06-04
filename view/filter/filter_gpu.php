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
			<h3><small class="text-muted">PCI-Express</small></h3>
			<?
			while($row = mysql_fetch_array($list_pci_videocard)){
				$checked = '';
				if($row['generation'].'_'.$row['slot'] == $_GET['pci_ex'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="pci_ex" value="<? echo $row['generation'].'_'.$row['slot']; ?>" onChange="this.form.submit()">
					<? echo $row['generation'].' x'.$row['slot']; ?>
				  </label>
				</div>
				<?
			}
			?>
		</div>
	</div>

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Додаткове живлення</small></h3>
			<h5><small class="text-muted">(Кількість контактів)</small></h5>
			<?
			while($row = mysql_fetch_array($list_additional_power_videocard)){
				$checked = '';
				if($row['contact'] == $_GET['contact'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="contact" value="<? echo $row['contact']; ?>" onChange="this.form.submit()">
					<? echo $row['contact'];?>
				  </label>
				</div>
				<?
			}
			?>
		</div>
	</div>


</form>