<?php
// ������� HTML-���������:
echo '<html>';
echo '<head>';
echo '<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">';
echo '<title>Test Form  </title>';
echo '</head>';
echo '<body>';
echo '<h3>�������� �����</h3>';
echo "<p>���������� �������� ���������� ����: <b>".$_POST['textfield']."</b></p>";
echo "<p>���������� �������� ���� ������: <b>".$_POST['pswfield']."</b></p>";
echo "<p>���������� �������� �������� ���� hidden: <b>".$_POST['hidden']."</b></p>";
echo '<hr size="1">';
echo '<p>���� �������� ��������� ����������� �������������: </p>';
if (isset($_POST['checkbox1'])) echo "<p><b>������</b></p>";
if (isset($_POST['checkbox2'])) echo "<p><b>������</b></p>";
if (isset($_POST['checkbox3'])) echo "<p><b>������</b></p>";
echo '<hr size="1">';

if (isset($_POST['radiobutton']))
{
echo '<p>��� ������ ����������� ������������� �� ��������� ���������: ';
if ($_POST['radiobutton']==="yes") echo "<b>Yes</b>";
if ($_POST['radiobutton']==="no") echo "<b>No</b>";
echo '</p>';
}
else echo '<p>�� ���� �� ����������� �������������� �� ��� ������</p>';
echo '<hr size="1">';
echo '<p>�������� �������������� ���������� ���� :</p>';
echo "<p><b>".$_POST['textarea']."</b></p>";
echo '<hr size="1">';
echo "<p>�������� ������ � ������������ �������: <b>".$_POST['day_s']."</b></p>";
echo '<hr size="1">';
echo '<p>�������� ������ � ������������� �������: </p>';
foreach ($_POST['day_m'] as $keys=>$values) echo "<b>$values</b><br>";
echo '<hr size="1">';
echo '</body>';
echo '</html>';
?>
