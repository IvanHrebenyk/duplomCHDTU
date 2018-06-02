<script src="../script.js"></script>


<div class="container-fluid" style="background-color: #fff;">
	<div class="row">
	  <div class="col-2" align="left"><a href="../"><div id="title-element"><img src="../icon.png" width="45%" height="13%"><span id="title-site">Tcomp</span></div></a></div>
	  <div class="col-8" align="center">
			<nav class="navbar navbar-expand-lg" id="search-panel">
				<ul class="navbar-nav navbar-center">
					  <li class="active">
							<a class="nav-link" href="#" style="position: relative; top: 30px;">Головна </a>
					  </li>
				</ul>
			</nav>﻿
	  </div>
	  <div class="col-2">
		<div id="head-right">
			<a href="/add"><button class="btn btn-default button-system" type="button">Панель</button></a>
			<button class="btn btn-default button-system" type="button" data-toggle="modal" data-target="#open_model_out" id="button-in-system">Вийти</button><?include "modal_out_system.php";?>
		</div>
	  </div>
	</div>
</div>
<nav class="navbar navbar-expand-lg" style="z-index: 9999">
	<ul class="navbar-nav navbar-center">
		  <li>
				<a class="nav-link dropdown dropdown-toggle" data-toggle="dropdown" href="#">Внесення даних</a>
				<ul class="dropdown-menu">
				
				  <li class="dropdown-submenu">
					<a class="menudown dropdown-item dropdown-toggle" tabindex="-1" href="#">Відеокарти</a>
					<ul class="dropdown-menu" id="m1">
					  <li><a tabindex="-1" class="dropdown-item" href="/add/videocard">Новий запис</a></li>
					  <li><a tabindex="-1" class="dropdown-item" href="/add/video_ddr">Тип пам'яті</a></li>
					</ul>
				  </li>
				
				  <li class="dropdown-submenu">
					<a class="menudown dropdown-item dropdown-toggle" tabindex="-1" href="#">Процесори</a>
					<ul class="dropdown-menu" id="m2">
					  <li><a tabindex="-1" class="dropdown-item" href="/add/cpu">Новий запис</a></li>
					  <li><a tabindex="-1" class="dropdown-item" href="/add/socket">Сокет</a></li>
					</ul>
				  </li>
				
				  <li class="dropdown-submenu">
					<a class="menudown dropdown-item dropdown-toggle" tabindex="-1" href="#">ОЗУ</a>
					<ul class="dropdown-menu"  id="m3">
					  <li><a tabindex="-1" class="dropdown-item" href="/add/ram">Новий запис</a></li>
					  <li><a tabindex="-1" class="dropdown-item" href="/add/ram_ddr">Тип пам'яті</a></li>
					</ul>
				  </li>
				
				  <li class="dropdown-submenu">
					<a class="menudown dropdown-item dropdown-toggle" tabindex="-1" href="#">ПЗП</a>
					<ul class="dropdown-menu" id="m4">
					  <li><a tabindex="-1" class="dropdown-item" href="/add/rom_hdd">HDD</a></li>
					  <li><a tabindex="-1" class="dropdown-item" href="/add/rom_ssd">SSD</a></li>
					  <li><a tabindex="-1" class="dropdown-item" href="/add/rom_ssd_m2">SSD M.2</a></li>
					  <li><a tabindex="-1" class="dropdown-item" href="/add/type_flash_memory">Типи флеш пам'яті</a></li>
					</ul>
				  </li>
				
				  <li class="dropdown-submenu">
					<a class="menudown dropdown-item dropdown-toggle" tabindex="-1" href="#">Материнські плати</a>
					<ul class="dropdown-menu" id="m5">
					  <li><a tabindex="-1" class="dropdown-item" href="/add/motherboard">Новий запис</a></li>
					</ul>
				  </li>
				
				  <li class="dropdown-submenu">
					<a class="menudown dropdown-item dropdown-toggle" tabindex="-1" href="#">Блоки живлення</a>
					<ul class="dropdown-menu" id="m6">
					  <li><a tabindex="-1" class="dropdown-item" href="/add/power">Новий запис</a></li>
					  <!-- <li><a tabindex="-1" class="dropdown-item" href="/add/videocard">Підключення до материнської плати</a></li> -->
					</ul>
				  </li>
				</ul>
		  </li>
		  <li>
				<a class="nav-link" href="#" onclick="messege_delete_info_system()" id="button-modal-delete-info-system">Видалити дані</a>	
		 </li>
	</ul>
</nav>﻿







<script src="../script_after.js"></script>

</body>
</html>




 
