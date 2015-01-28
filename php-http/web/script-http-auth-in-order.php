<?php
function authenticate() {
  header('WWW-Authenticate: Basic realm="Test Authentication System"');
  header('HTTP/1.0 401 Unauthorized');
  echo "Вы должны ввести корректный логин и пароль для получения доступа к ресурсу \n";
  //exit;
}

if (!isset($_SERVER['PHP_AUTH_USER']) || ($_POST['SeenBefore']==1
  && $_POST['OldAuth']==$_SERVER['PHP_AUTH_USER'])){
  authenticate();
} else {
  echo "<p>Добро пожаловать: {$_SERVER['PHP_AUTH_USER']}<br />";
  echo "Предыдущий логин: {$_REQUEST['OldAuth']}";

  echo "<form action='{$_SERVER['PHP_SELF']}' METHOD='post'>\n";
  echo "<input type='hidden' name='SeenBefore' value='1' />\n";
  echo "<input type='hidden' name='OldAuth' value='{$_SERVER['PHP_AUTH_USER']}' />\n";
  echo "<input type='submit' value='Авторизоваться повторно' />\n";
  echo "</form></p>\n";


}

echo "<p><a href='./script-work-remote-files.php'>Proceed to Work Remote Files</a></p>";