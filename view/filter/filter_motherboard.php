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
			<h3><small class="text-muted">Роз'єм(Socket)</small></h3>
			<?
			while($row = mysql_fetch_array($list_socket_motherboard)){
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
			<h3><small class="text-muted">Живлення процесору</small></h3>
			<?
			while($row = mysql_fetch_array($list_contact_power_cpu_motherboard)){
				$checked = '';
				if($row['count_contact_power_cpu'] == $_GET['contact_cpu'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="contact_cpu" value="<? echo $row['count_contact_power_cpu']; ?>" onChange="this.form.submit()">
					<? echo $row['count_contact_power_cpu']; ?>
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
			<?
			while($row = mysql_fetch_array($list_contact_power_motherboard)){
				$checked = '';
				if($row['count_contact_power_mb'] == $_GET['contact_mb'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="contact_mb" value="<? echo $row['count_contact_power_mb']; ?>" onChange="this.form.submit()">
					<? echo $row['count_contact_power_mb']; ?>
				  </label>
				</div>
				<?
			}
			?>
				
		</div>
	</div>

	<div class="row row-filter">
		<div class="col-12">
			<h3><small class="text-muted">Покоління пам'яті</small></h3>
			<?
			for ($i=1; $i<5; $i++){
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
			<h3><small class="text-muted">PCI-Express</small></h3>
			<?
			while($row = mysql_fetch_array($list_pci_motherboard)){
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
			<h3><small class="text-muted">SATA</small></h3>
			<?
			while($row = mysql_fetch_array($list_sata_motherboard)){
				$checked = '';
				if($row['generation'] == $_GET['sata'])
					$checked = 'checked';
				?>
				<div class="form-check">
				  <label class="form-check-label">
					<input type="radio" <? echo $checked; ?>
					class="form-check-input" name="sata" value="<? echo $row['generation']; ?>" onChange="this.form.submit()">
					<? echo $row['generation']; ?>
				  </label>
				</div>
				<?
			}
			?>	
		</div>
	</div>
</form>