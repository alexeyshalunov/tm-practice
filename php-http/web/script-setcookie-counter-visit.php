<?php
//����������,�������������������Cookie�'Mortal',
//�������,��������������������,

//�Ƞ���������������������������������������������:
if(isset($_COOKIE['Mortal']))
  $cnt=$_COOKIE['Mortal']+1;
else $cnt=0;

//��������������Cookie�'Mortal'��������������������,
//�Ѡ��������"�����"���18/07/29,
//���������������������������:
setcookie("Mortal",$cnt,0x6FFFFFFF);
//����������������������(��������)�������������:
echo "<p>����������������������<b>" . @$_COOKIE['Mortal'] . "</b>����</p>";
echo "<a href='./script-setcookie-delete.php'>Remove cookie</a>";

?>