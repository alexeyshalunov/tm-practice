<?php
error_reporting(0);

function getParam($key)
{
	return (isset($_REQUEST[$key]) ? $_REQUEST[$key] : '');
}

function getSelected($key, $value)
{
    	return (in_array($value, getParam($key)) ? 'selected="selected"' : '');
}

function getChecked($key, $value)
{
	return (isset($_REQUEST[$key]) && $_REQUEST[$key] == $value ? 'checked="checked"' : '');
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

	<pre>
<?php var_export($_REQUEST); ?>
	</pre>
	<hr/>

	<p>
		<a href="l01.php?k1=v1&k2[kk1]=vv1&k2[kk2]=vv2&k2[kk3]=vv3&k3=on&action=submit&k4=v5">Передача GET параметров по ссылке</a>
	</p>
	<hr/>

	<p>Передача GET или POST параметров из формы</p>
	<form action="l01.php" method="get">
		<p><input type="hidden" name="action" value="submit"/>
		<p><input type="text" name="k1" value="<?php echo getParam('k1'); ?>"/></p>
		<p>
			<select multiple="multiple" size="3" name="k2[]">
				<?php foreach (array('vv1', 'vv2', 'vv3') as $value) { ?>
					<option value="<?php echo $value; ?>" <?php echo getSelected('k2', $value); ?>><?php echo $value; ?></option>
				<?php } ?>
			</select>
		</p>
		<p><input <?php echo ('' == (getParam('k3')) ? '' : 'checked="checked"'); ?> type="checkbox" name="k3"/></p>
		<p>
			<?php foreach (array('v4', 'v5', 'v6') as $value) { ?>
				<input type="radio" <?php echo getChecked('k4', $value); ?> name="k4" value="<?php echo $value; ?>"/>
			<?php } ?>
		</p>
		<p><button>Submit</button></p>
	</form>
	<hr/>

</body>
</html>