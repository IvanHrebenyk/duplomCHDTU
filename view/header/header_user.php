<div class="container-fluid" style="background-color: #fff;">
	<div class="row">
	  <div class="col-2" align="left"><a href="../../../../../../"><div id="title-element"><img src="../../../../../icon.png" width="45%" height="13%"><span id="title-site">Tcomp</span></div></a></div>
	  <div class="col-8" align="center"><div id="search-panel"><? include "view/search.php"; ?></div></div>
	  <div class="col-2">
		<div id="head-right">
			<?
			if(!$_SESSION['user']){
				?>
				<button class="btn" type="button" data-toggle="modal" data-target="#open_model_in" id="button-in-system">Увійти в систему</button><?include "view/modal/modal_in_system.php";?>
				<?
			}
			else if($_SESSION['user'] == 'moderator' || $_SESSION['user'] == 'admin'){
				?>
				<a href="/add"><button class="btn btn-default button-system" type="button">Панель</button></a>
				<button class="btn btn-default button-system" type="button" data-toggle="modal" data-target="#open_model_out" id="button-in-system">Вийти</button><?include "view/modal/modal_out_system.php";?>
				<?
			}
			?>
		</div>
	  </div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-default" >
			<ul class="navbar-nav navbar-center">
				  <li class="active">
						<a class="nav-link" href="../../../../../../">Головна </a>
				  </li>
				  <li>
						<a class="nav-link" href="/cpu/">Процесори</a>
				  </li>
				  <li>
						<a class="nav-link" href="/motherboard/">Материнські плати</a>
				  </li>
				  <li>
						<a class="nav-link" href="/gpu/">Відеоадаптери</a>
				  </li>
				  <li>
						<a class="nav-link" href="/ram/">ОЗП</a>
				  </li>
				  <li>
						<a class="nav-link" href="/rom/">ПЗП</a>
				  </li>
				  <li>
						<a class="nav-link" href="/power/">БЖ</a>
				  </li>
			</ul>
</nav>﻿





 
