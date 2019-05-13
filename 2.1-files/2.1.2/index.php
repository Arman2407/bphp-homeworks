<form enctype="multipart/form-data" action="" method="POST">
<p>Изображения:
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="file" name="pictures[]" />
<input type="submit" value="Отправить" />
</p>
</form>

<?php

$uploadsDir = 'uploads';
foreach ($_FILES["pictures"]["error"] as $key => $error) {
	if ($error == UPLOAD_ERR_OK) {
		$tmpName = $_FILES["pictures"]["tmp_name"][$key];
		if (is_uploaded_file($tmpName)) {
			$pathParts = pathinfo($_FILES["pictures"]["name"][$key]);
			if ($pathParts["extension"] != "php") {
				move_uploaded_file($tmpName, $uploadsDir."/".$pathParts["basename"]);
			}
		}
	}
}
$files1 = scandir($uploadsDir);
print_r($files1);

?>