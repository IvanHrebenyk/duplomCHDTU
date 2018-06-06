	<div class="row">
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Фірма:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['firm']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Модель:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['model']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Роз'єм(Socket):</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['title_socket']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
<? if($row['count_ide'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість IDE:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_ide']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_vga'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість VGA:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_vga']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_hdmi'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість HDMI:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_hdmi']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_audio'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість аудіороз'ємів:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_audio']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['title_audio']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Вбудоване аудіо:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['title_audio']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['speed_lan'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Пропускна швидкість мережі:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['speed_lan'].' Mб'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_dvi'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість DVI:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_dvi']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_contact_power_mb'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Живлення плати(Кількість контактів):</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_contact_power_mb']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_contact_power_cpu'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Живлення процесору(Кількість контактів):</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_contact_power_cpu']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_ddr1'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість роз'ємів DDR1:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_ddr1']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_ddr2'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість роз'ємів DDR2:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_ddr2']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_ddr3'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість роз'ємів DDR3:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_ddr3']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_ddr4'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість роз'ємів DDR4:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_ddr4']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['max_ram_mhz'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Максимальна частота ОЗП:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['max_ram_mhz'].' МГц'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['formfactor']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Формфактор:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['formfactor']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_ps2_mouse'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість роз'ємів PS/2 для миші:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_ps2_mouse']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['count_ps2_keyboard'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість роз'ємів PS/2 для клавіатури:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_ps2_keyboard']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($row['title_wifi']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Безпровідні можливості:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['title_wifi']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<?
$pci = array();
$usb = array();
$sata = array();

if($row['pci'])
	$pci[] = $row['pci'];
if($row['usb'])
	$usb[] = $row['usb'];
if($row['sata'])
	$sata[] = $row['sata'];

while($row = mysql_fetch_array($info)){
if($row['pci'])
	$pci[] = $row['pci'];
if($row['usb'])
	$usb[] = $row['usb'];
if($row['sata'])
	$sata[] = $row['sata'];
}
$pci = array_unique($pci);
$usb = array_unique($usb);
$sata = array_unique($sata);
?>

<? if($pci[0] != '') {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Роз'єми PCI:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? $pci_view = $pci[0];
						while($pci_view){
							echo $pci_view.'<br>';
							$pci_view = next($pci);
						}
						?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($sata[0] != '') {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Роз'єми SATA:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? $sata_view = $sata[0];
						while($sata_view){
							echo $sata_view.' SATA<br>';
							$sata_view = next($sata);
						}
						?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($usb[0] != '') {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Роз'єми USB:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? $usb_view = $usb[0];
						while($usb_view){
							echo $usb_view.' USB<br>';
							$usb_view = next($usb);
						}
						?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>



	</div>
