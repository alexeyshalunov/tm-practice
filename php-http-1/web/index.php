<?php 
header("Content-Type: text/html; charset=utf-8");
echo '<!DOCTYPE html>';
?>
<html>
<head>
</head>
<body>
<?php

echo "It work's!";

echo '<h5>$_ENV</h5><pre>';
print_r($_ENV);

echo '<h5>$_SERVER</h5>';
print_r($_SERVER);

echo '</pre>';

?>
</body>