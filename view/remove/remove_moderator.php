<div class="container-fluid" style="margin-bottom: 120px;">
	<div class="row">
		<div class="col-3"></div>
			<div class="col-6">
				<h3><small class="text-muted">Для видалення модератора, натисніть на нього</small></h3>
				<?
				if($list_moderator = list_moderator($db))
					while($r = mysql_fetch_array($list_moderator)){
						?> <form action="/removing/moderator" method="post" style="position: relative;"> <?
						?> <input type="hidden" name="moderator" value="<? echo $r['id']; ?>"> <?
						?> <button class="btn btn-danger button-delete-moderator"> <?
						?> <input class="btn btn-danger input-delete-moderator" type="submit" value="<? echo $r['login']; ?>">X</button> <?
					}
				?>
			</div>
		<div class="col-3"></div>
	</div>
</div>