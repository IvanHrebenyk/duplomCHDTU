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
			<h3><small class="text-muted">Живлення плати</small></h3>
			<h5><small class="text-muted">(Кількість контактів)</small></h5>
			<?
			while($row = mysql_fetch_array($list_connect_mb_power)){
				$checked = '';
				if($row['count_pin_atx'] == $_GET['pin_mb'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="pin_mb" value="<? echo $row['count_pin_atx']; ?>" onChange="this.form.submit()">
					<? echo $row['count_pin_atx']; ?>
				  </label>
				</div>
				<?
			}
			?>		
		</div>
	</div>
	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Живлення процесору</small></h3>
			<h5><small class="text-muted">(Кількість контактів)</small></h5>
			<?
			while($row = mysql_fetch_array($list_connect_cpu_power)){
				$checked = '';
				if($row['pin_cpu'] == $_GET['pin_cpu'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="pin_cpu" value="<? echo $row['pin_cpu']; ?>" onChange="this.form.submit()">
					<? echo $row['pin_cpu']; ?>
				  </label>
				</div>
				<?
			}
			?>	
		</div>
	</div>

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Живлення відеокарти</small></h3>
			<h5><small class="text-muted">(Кількість контактів)</small></h5>
			<?
			while($row = mysql_fetch_array($list_connect_gpu_power)){
				$checked = '';
				if($row['pin_gpu'] == $_GET['pin_gpu'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="pin_gpu" value="<? echo $row['pin_gpu']; ?>" onChange="this.form.submit()">
					<? echo $row['pin_gpu']; ?>
				  </label>
				</div>
				<?
			}
			?>				
		</div>
	</div>

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Шлейфи накопичувачів</small></h3>
				<?
				$checked = '';
				if($_GET['sata'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="checkbox" <? echo $checked; ?>
					class="form-check-input" name="sata" value="true" onChange="this.form.submit()">SATA
				  </label>
				</div>
				<?
				$checked = '';
				if($_GET['molex'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="checkbox" <? echo $checked; ?>
					class="form-check-input" name="molex" value="true" onChange="this.form.submit()">Molex
				  </label>
				</div>
		</div>
	</div>

</form>