<div class="container-fluid" style="margin-bottom: 100px;">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-6">
			<h5 class="text-muted" style="margin-bottom: 20px;"><? echo $message_user_list; ?></h5>
			<!-- <h5 class="text-muted" style="margin-bottom: 20px;">Повідомлення користувачу про пошук або категрію</h5> -->
		</div>
	</div>
	<div class="row">
		<div class="col-3" style="">
			<?
			if($isset)
				include "template_filter.php";
		?>
		</div>
		<div class="col-9" style="">
			<?
			if($isset) 
				include "template_list_component.php";
			?>
		</div>
	</div>
</div>