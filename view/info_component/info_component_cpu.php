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
	</div>

	<div class="row">
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Частота(ГГц):</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['ghz']; ?></span>
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
						<span class="option-component-label"><? echo $row['ram']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Роз'єм(Socket):</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['socket_cpu']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Вживана потужність(Вт):</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['power']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Набір команд:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo 'x'.$row['command_set']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Кількість ядер:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['core']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Рівень кеш-пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['level_cache']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		
		
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Об'єм кеш-пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['cache']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
	</div>