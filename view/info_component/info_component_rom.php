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
					<div class="col-6" ><h6>Об'єм пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['memory'].'Гб'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Технологія:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['technology']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Формфактор:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['formfactor'].'"'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Вживана потужність:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['power'].' Вт'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Вага:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['weight'].' грам'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Довжина:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['long'].' мм'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Ширина:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['width'].' мм'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Товщина:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['thickness'].' мм'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Інтерфейс:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['title_interface'].' '.$row['generation_interface']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>

		<? if($row['read']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Швидкість зчитування:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['read'].' Мб/с'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['write']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Швидкість запису:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['write'].' Мб/с'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['dead_time']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Час життя:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['dead_time'].' годин'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['type']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Тип:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['type']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['title_memory']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Тип флеш-пам'яті:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['title_memory']; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['rpm']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Швидкість обертання шпинделя:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['rpm'].' об/хв'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['buffer']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Об'єм буферу:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['buffer'].' Мб'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['noise']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Максимальний рівень шуму:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['noise'].' дБА'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>

		<? if($row['speed_transfer']) {?>
		<div class="col-6">
			<div class="container-fluid">
				<div class="row">
					<div class="col-6" ><h6>Швидкість передавання даних:</h6></div>
					<div class="col-6" >
						<span class="option-component-label"><? echo $row['speed_transfer'].' Мб/с'; ?></span>
					</div>
				</div>
				<hr>
			</div>
		</div>
		<? } ?>





	</div>