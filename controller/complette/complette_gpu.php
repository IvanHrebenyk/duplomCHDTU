<? include  'model/modal_complette/complette_'.$controller_name.'.php'; ?>
<?
//addition_action_name
$id = $addition_action_name;
$isset_motherboard_complette = isset_motherboard_complette($db,$id);
$isset_cpu_complette = isset_cpu_complette($db,$id);
$isset_power_complette = isset_power_complette($db,$id);

if(!$isset_motherboard_complette && !$isset_cpu_complette && !$isset_power_complette)
	$error_message_complette = 'Нажаль в системі відсутні ті компоненти, які підходять до вибраного вами компоненту';
?>
<? include  'view/modal_complette/complette_'.$controller_name.'.php'; ?>