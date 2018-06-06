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
						<span class="option-component-label"><? echo $row['mhz'].' МГц'; ?></span>
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

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Призначення:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? if($row['destiny']=='pc') 
							echo 'Настільний комп\'ютер';
							else if($row['destiny']=='laptop') echo 'Ноутбук';?></span>
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
						<span class="option-component-label"><? echo ($row['memory']/1024).' Гб';?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>


	</div>