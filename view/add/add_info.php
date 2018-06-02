<div class="container-fluid" style="margin-bottom: 120px;">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<?

			if($action_name)
				include 'view/'.$controller_name.'/'.$controller_name.'_'.$action_name.'.php';
			else
				echo '<h5 class="text-secondary text-center">Виберіть пункт меню</h5>';
			?>
		</div>
		<div class="col-3"></div>
	</div>
</div>