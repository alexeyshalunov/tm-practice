<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Test Form </title>
</head>
<body>
  <h3>Тестовая форма</h3>
<form name="form1"  action="script.php">
  <p><span>Текстовое поле: </span>
    <input type="text" name="textfield" value="default value">
  </p>
  <p>Поле ввода пароля: 
    <input type="password" name="pswfield" value="def pw">
  </p>


  <p>Скрытое поле hidden 
    <input name="hidden" type="hidden" id="hidden" value="Скрытое_значение (nonce)">
  </p>
  <hr size="1">
  <p>Независимые переключатели (checkbox):</p>
  <p>
    <input type="checkbox" name="checkbox1" value="1">Вариант первый
    <input type="checkbox" name="checkbox2" value="1">Вариант второй
    <input type="checkbox" name="checkbox3" value="1" checked>Вариант третий (по умолчанию)
  </p>
  <hr size="1">
  <p>Зависимые переключатели (radio):</p>
  <p>
    <input name="radiobutton" type="radio" value="yes" checked> Yes 
    <input name="radiobutton" type="radio" value="no"> No
  </p>
  <hr size="1">
  <p>Многострочное текстовое поле (textarea):</p>
  <p>
    <textarea name="textarea" cols="40" rows="4">Текст по умолчанию</textarea> 
  </p>
  <hr size="1">
  <p>Список с единственным выбором:</p>
  <p>
  <select name='day_s' size=1>
  <option value=1>Понедельник</option>
  <option value=2>Вторник</option>
  <option value=3 selected>Среда</option>
  <option value=4>Четверг</option>
  <option value=5>Пятница</option>
  <option value=6>Суббота</option>
  <option value=7>Воскресенье</option>
  </select>
  </p>
  <p>Список с множественным выбором (multiple):</p>
  <p>
  <select name='day_m[]' size=7 multiple>
  <option value=1 selected>Понедельник</option>
  <option value=2>Вторник</option>
  <option value=3>Среда</option>
  <option value=4>Четверг</option>
  <option value=5>Пятница</option>
  <option value=6>Суббота</option>
  <option value=7>Воскресенье</option>
  </select> 
  </p>
  <hr size="1">
  <p>
    <input type="submit" value="Отослать форму">&nbsp;
    <input type="reset" value="Очистить форму">
  </p>
  <p>&copy;2005 <a href="http://php.su">PHP.SU</a></p>
  </form>
  
  <p>Proceed to <a href="./script-fileupload.php">script-fileupload.php</a></p>

</body>
</html> 

<?php 
// Выводим HTML-заголовки:
echo'<html>';
echo'<head>';
echo'<meta http-equiv="Content-Type" content="text/html; 
  charset=windows-1251">';
echo'<title>Test Form PHP.SU</title>';
echo'</head>';
echo'<body>';
echo'<h3>Тестовая форма</h3>';
echo"<p>Переданное значение текстового поля: <b>"
  .$_POST['textfield']."</b></p>";
echo"<p>Переданное значение поля пароля: <b>" 
  .$_POST['pswfield']."</b></p>";
echo"<p>Переданное значение скрытого поля hidden: <b>"
  .$_POST['hidden']."</b></p>";

echo '<hr size="1">';
echo '<p>Были включены следующие независимые переключатели: </p>';
if(isset($_POST['checkbox1']))
  echo"<p><b>Первый</b></p>";
if(isset($_POST['checkbox2']))
  echo"<p><b>Второй</b></p>";
if(isset($_POST['checkbox3']))
  echo"<p><b>Третий</b></p>";

echo'<hr size="1">';
if(isset($_POST['radiobutton'])){
  echo'<p>Был выбран radio переключатель со следующим значением: ';
  if($_POST['radiobutton']==="yes")
    echo"<b>Yes</b>";
  if($_POST['radiobutton']==="no")
    echo"<b>No</b>";
  echo'</p>';
}
else {
  echo'<p>Ни один из независимых переключателей не был выбран</p>';
}

echo'<hr size="1">';
echo'<p>Значение многострочного текстового поля :</p>';
echo"<p><b>".$_POST['textarea']."</b></p>";
echo'<hr size="1">';
echo"<p>Значение списка с единственным выбором: <b>" 
  .$_POST['day_s']."</b></p>";
echo'<hr size="1">';
echo'<p>Значения списка с множественным выбором: </p>';
if(isset($_POST['day_m'])) {
  foreach($_POST['day_m'] as $keys=>$values) {
    echo"<b>$values</b><br>";
  }
}

  
echo'<hr size="1">';
echo'<p>&copy;&nbsp;2005 <a href="http://php.su">PHP.SU</a></p>';
echo'</body>';
echo'</html>';

?>