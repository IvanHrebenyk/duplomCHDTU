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
					<div class="col-6" ><h6>Потужність:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['watt'].' Вт'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		<? if($row['count_sata'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість SATA:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_sata']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['count_molex'] > 0) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість Molex:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['count_molex']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>


<?
$pin_mb = array();
$pin_cpu = array();
$loop_cpu = array();
$pin_gpu = array();
$loop_gpu = array();

if($row['count_pin_atx'])
	$pin_mb[] = $row['count_pin_atx'];
if($row['pin_cpu'])
	$pin_cpu[] = $row['pin_cpu'];
if($row['loop_cpu'])
	$loop_cpu[] = $row['loop_cpu'];
if($row['pin_gpu'])
	$pin_gpu[] = $row['pin_gpu'];
if($row['loop_gpu'])
	$loop_gpu[] = $row['loop_gpu'];

while($row = mysql_fetch_array($info)){
	if($row['count_pin_atx'])
		$pin_mb[] = $row['count_pin_atx'];
	if($row['pin_cpu'])
		$pin_cpu[] = $row['pin_cpu'];
	if($row['loop_cpu'])
		$loop_cpu[] = $row['loop_cpu'];
	if($row['pin_gpu'])
		$pin_gpu[] = $row['pin_gpu'];
	if($row['loop_gpu'])
		$loop_gpu[] = $row['loop_gpu'];
}
$pin_mb = array_unique($pin_mb);
$pin_cpu = array_unique($pin_cpu);
$loop_cpu = array_unique($loop_cpu);
$pin_gpu = array_unique($pin_gpu);
$loop_gpu = array_unique($loop_gpu);
?>

<? if($pin_mb[0] != '') {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Живлення материнської плати:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? 
						$pin_mb_view = $pin_mb[0];
						while($pin_mb_view){
							echo $pin_mb_view.'pin<br>';
							$pin_mb_view = next($pin_mb);
						}
						?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($pin_cpu[0] != '') {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Живлення процесору:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? 
						$pin_cpu_view = $pin_cpu[0];
						$loop_cpu_view = $loop_cpu[0];

						if(!$loop_cpu[1])
							$loop_cpu[1] = $loop_cpu[0];
						if(!$loop_cpu[2])
							$loop_cpu[2] = $loop_cpu[0];
						if(!$loop_cpu[3])
							$loop_cpu[3] = $loop_cpu[0];
						if(!$loop_cpu[4])
							$loop_cpu[4] = $loop_cpu[0];

						while($pin_cpu_view){
							echo $loop_cpu_view.' x '.$pin_cpu_view.'pin<br>';
							$loop_cpu_view = next($loop_cpu);
							$pin_cpu_view = next($pin_cpu);
						}
						?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?>

<? if($pin_gpu[0] != '') {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Живлення відеокарти:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? 
						$pin_gpu_view = $pin_gpu[0];
						$loop_gpu_view = $loop_gpu[0];
						if(!$loop_gpu[1]) 
							$loop_gpu[1] = $loop_gpu[0];
						if(!$loop_gpu[2]) 
							$loop_gpu[2] = $loop_gpu[0];
						if(!$loop_gpu[3]) 
							$loop_gpu[3] = $loop_gpu[0];
						if(!$loop_gpu[4]) 
							$loop_gpu[4] = $loop_gpu[0];
						if(!$loop_gpu[5]) 
							$loop_gpu[5] = $loop_gpu[0];
						while($pin_gpu_view){
							echo $loop_gpu_view.' x '.$pin_gpu_view.'pin<br>';
							$loop_gpu_view = next($loop_gpu);
							$pin_gpu_view = next($pin_gpu);
						}
						?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
<? } ?> 



	</div>