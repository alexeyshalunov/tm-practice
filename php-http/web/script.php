<html><head><meta http-equiv="Content-Type" content="text/html;">
<title>Test Form </title>
</head>
<body>
<h3>Тестовая форма</h3>
<form name="form1" method="post" action="script.php">
<p><span>Текстовое поле: </span>
<input type="text" name="textfield"></p>
<p>Поле ввода пароля: 
<input type="password" name="pswfield"></p>

<?php 
echo '<hr size="1">';
echo '<p>Были включены следующие независимые переключатели: </p>';
if (isset($_POST['checkbox1'])) 
echo "<p><b>Первый</b></p>";

if (isset($_POST['checkbox2'])) 
echo "<p><b>Второй</b></p>";
if (isset($_POST['checkbox3'])) 
echo "<p><b>Третий</b></p>";
echo '<hr size="1">';if (isset($_POST['radiobutton'])){echo '
<p>Был выбран независимый переключатель со следующим значением: ';
if ($_POST['radiobutton']==="yes") echo "<b>Yes</b>";if ($_POST['radiobutton']==="no") 
echo "<b>No</b>";

echo '</p>';}
else 
echo '<p>Ни один из независимых переключателей не был выбран</p>';

echo '<hr size="1">';
echo '<p>Значение многострочного текстового поля :</p>';
echo "<p><b>".$_POST['textarea']."</b></p>";echo '<hr size="1">';
echo "<p>Значение списка с единственным выбором: <b>".$_POST['day_s']."</b></p>";
echo '<hr size="1">';echo '<p>Значения списка с множественным выбором: </p>';
foreach ($_POST['day_m'] as $keys=>$values) echo "<b>$values</b><br>";echo '<hr size="1">';
echo '<p>&copy;&nbsp;2005 <a href="http://php.su">PHP.SU</a></p>';echo '</body>';

echo '</html>';

?>

