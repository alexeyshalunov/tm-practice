<?php


if(!isset($_SERVER['PHP_AUTH_USER'])) {
  header('WWW-Authenticate:�Basic�realm="My�Realm"');
  header('HTTP/1.0�401�Unauthorized');
  echo '�����,�����������������������, ����������������������������Cancel';
  //exit;
}
else {
  echo "<p>Hello�{$_SERVER['PHP_AUTH_USER']} . </p>";
  echo "<p>���������������{$_SERVER['PHP_AUTH_PW']} . </p>";
}

echo "<p><a href='./script-http-auth-in-order.php'>Proceed to HTTP Auth test In Order</a></p>";

?>