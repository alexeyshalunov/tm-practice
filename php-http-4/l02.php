<?php

$msg = '';
if (!empty($_FILES))
{
	$uploadfile = 'c:/temp/openserver/userdata/temp/' . basename($_FILES['fileinfo']['name']);
	if (move_uploaded_file($_FILES['fileinfo']['tmp_name'], $uploadfile))
	{
		$msg = 'Файл корректен и был успешно загружен.';
	}
	else
	{
		echo 'Ошибка файловой загрузки!';
	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Test</title>
	<meta http-equiv="content-language" content="en"/>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
</head>
<body>

	<p><?php echo $msg; ?></p>
	<pre>
<?php var_export($_FILES); ?>
	</pre>

	<form enctype="multipart/form-data" action="l02.php" method="POST">
		<input type="hidden" name="MAX_FILE_SIZE" value="30000" />
		Отправить этот файл: <input name="fileinfo" type="file" />
		<input type="submit" value="Send File" />
	</form>

</body>
</html>