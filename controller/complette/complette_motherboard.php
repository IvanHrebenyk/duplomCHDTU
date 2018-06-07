<? include  'model/modal_complette/complette_'.$controller_name.'.php'; ?>
<?
//addition_action_name
$id = $addition_action_name;
$isset_videocard_complette = isset_videocard_complette($db,$id);
$isset_cpu_complette = isset_cpu_complette($db,$id);
$isset_power_complette = isset_power_complette($db,$id);
$isset_ram_complette = isset_ram_complette($db,$id);
$isset_rom_complette = isset_rom_complette($db,$id);

if(!$isset_videocard_complette && !$isset_cpu_complette && !$isset_power_complette && !$isset_ram_complette && !$isset_rom_complette)
	$error_message_complette = 'Нажаль в системі відсутні ті компоненти, які підходять до вибраного вами компоненту';
?>
<? include  'view/modal_complette/complette_'.$controller_name.'.php'; ?>