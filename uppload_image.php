<?
function resize($file, $type = 1, $rotate = null, $quality = null)
{
	global $tmp_path;

	// Ограничение по ширине в пикселях
	$max_thumb_size = 200;
	$max_size = 600;

	// Качество изображения по умолчанию
	if ($quality == null)
		$quality = 75;

	// Cоздаём исходное изображение на основе исходного файла
	$type_file = '.jpg';
	if ($file['type'] == 'image/jpeg'){
		$type_file = '.jpg';
		$source = imagecreatefromjpeg($file['tmp_name']);
	}
	elseif ($file['type'] == 'image/png'){
		$type_file = '.png';
		$source = imagecreatefrompng($file['tmp_name']);
	}
	elseif ($file['type'] == 'image/gif'){
		$type_file = '.gif';
		$source = imagecreatefromgif($file['tmp_name']);
	}
	else
		return false;
		
	// Поворачиваем изображение
	if ($rotate != null)
		$src = imagerotate($source, $rotate, 0);
	else
		$src = $source;

	// Определяем ширину и высоту изображения
	$w_src = imagesx($src); 
	$h_src = imagesy($src);

	// В зависимости от типа (эскиз или большое изображение) устанавливаем ограничение по ширине.
	if ($type == 1)
		$w = $max_thumb_size;
	elseif ($type == 2)
		$w = $max_size;

	// Если ширина больше заданной
	if ($w_src > $w)
	{
		// Вычисление пропорций
		$ratio = $w_src/$w;
		$w_dest = round($w_src/$ratio);
		$h_dest = round($h_src/$ratio);

		// Создаём пустую картинку
		$dest = imagecreatetruecolor($w_dest, $h_dest);
		
		// Копируем старое изображение в новое с изменением параметров
		imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);

		$file['name'] = rand(1000, 9999).time().rand(1000, 9999).$type_file;
		// Вывод картинки и очистка памяти
		imagejpeg($dest, $tmp_path . $file['name'], $quality);
		imagedestroy($dest);
		imagedestroy($src);

		//return rand(1000, 9999).time().$file['name'];
		return $file['name'];
	}
	else
	{
		// Вывод картинки и очистка памяти
		imagejpeg($src, $tmp_path . $file['name'], $quality);
		imagedestroy($src);

		return $file['name'];
	}
}

function uppload_image($get_image){
	$_FILES['image_uppload'] = $get_image;
	if(!is_dir("img"))
		mkdir("img");
	$path = 'img/';
	$tmp_path = '';
	$types = array('image/gif', 'image/png', 'image/jpeg', 'image/jpg');
	$size = 1024000;
	if (!in_array($_FILES['image_uppload']['type'], $types))
			return false;
	if ($_FILES['image_uppload']['size'] > $size)
		return false;
	$name = resize($_FILES['image_uppload'], 1, 0); 
	if (!@copy($tmp_path . $name, $path . $name)){
		return false;
	}
	else {
			unlink($tmp_path . $name);
			return $path . $name;
	}
	unlink($tmp_path . $name);
}
?>