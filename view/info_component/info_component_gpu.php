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
					<div class="col-6" ><h6>Частота пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['memory_mhz'].' МГц'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Частота ядра:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['core_mhz'].' МГц'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість кулерів:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? if($row['count_cooler'] == 0)
						echo 'Немає жодного';
						else echo $row['count_cooler']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Об'єм пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['memory'].' Мб'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Розрядність пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['memory_bit'].'bit'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
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
		
		<? if($row['count_display_port'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість Display Port:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_display_port']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Інтерфейс:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo 'PCI-Express '.$row['generation_pci'].' x'.$row['slot']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Тип пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['title_memory'].$row['generation_memory']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

<?
$loop = array();
$contact_pin = array();

if($row['count_need_loop'])
	$loop[] = $row['count_need_loop'];
if($row['count_contact_loop'])
	$contact_pin[] = $row['count_contact_loop'];

while($row = mysql_fetch_array($info)){
if($row['count_need_loop'])
	$loop[] = $row['count_need_loop'];
if($row['count_contact_loop'])
	$contact_pin[] = $row['count_contact_loop'];
}
$loop = array_unique($loop);
$contact_pin = array_unique($contact_pin);
?>


<? if($loop[0] != '') {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Додаткове живлення:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><?
						 $loop_view = $loop[0];
						 $contact_pin_view = $contact_pin[0];
						while($loop_view){
							echo $loop_view.' x '.$contact_pin_view.'pin<br>';
							$loop_view = next($loop);
							$contact_pin_view = next($contact_pin);
						}
						?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>


	</div>