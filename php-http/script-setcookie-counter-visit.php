<?php
// Проверяем, был ли уже установлен Cookie 'Mortal',
// Если да, то читаем его значение,

// И увеличиваем значение счетчика обращений к странице:
if(isset($_COOKIE['Mortal']))
  $cnt=$_COOKIE['Mortal']+1;
else $cnt=0;

// Устанавливаем Cookie 'Mortal' зо значением счетчика,
// С временем "жизни" до 18/07/29,
// То есть на очень долгое время:
setcookie("Mortal",$cnt,0x6FFFFFFF);
// Выводит число посещений (загрузок) этой страницы:
echo "<p>Вы посещали эту страницу <b>" . @$_COOKIE['Mortal'] . "</b> раз</p>";
echo "<a href='./script-setcookie-delete.php'>Remove cookie</a>";

?>