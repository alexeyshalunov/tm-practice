<?php 



//$file = fopen("http://www.example.com/","r");
$file = fopen("./test-work-remote-files.txt","r");

if(!$file) {
  echo "<p>Unabletoopenremotefile.\n";
  //exit;
}
while (!feof($file)) {
  $line = fgets($file,1024);
  /*���������,������ ���� ���������� i ������������� ���� ����������� � ����� ������*/
  if(preg_match("/\<title\>(.*)\<\/title\>/i",$line,$out)) {
  
    var_dump($out);
    $title=$out[1];
    break;
  }
}
fclose($file);


?>