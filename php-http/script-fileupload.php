<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>File Upload Form</title>
</head>
<body>
  <h3>File Upload Form</h3>

  <form action='script-fileupload.php' method='post' enctype='multipart/form-data' >
    <input type=file name=uploadfile>
    <input type=submit value=Загрузить>

  </form>


  <h3>Multiple File Upload Form</h3>
  <form action='script-fileupload.php' method='post' enctype='multipart/form-data'>
    <input type='file' name="userfile[]"><br>
    <input type='file' name="userfile[]"><br>
    <input type='submit' value='Загрузить'>
  </form>




<?php // Каталог, в который мы будем принимать файл:
$uploaddir= './files/';

echo '$_FILES[uploadfile]:';
$out = print_r($_FILES['uploadfile'], $return = false);
echo '<pre>' . $out . '</pre>';


$uploadfile = $uploaddir . basename($_FILES['uploadfile']['name']);

if(isset($_FILES['uploadfile'])) {

  // Копируем файл из каталога для временного хранения файлов:
  if (copy($_FILES['uploadfile']['tmp_name'], $uploadfile)) {
    echo"<h3>Файл успешно загружен на сервер</h3>";
  }
  else {
    echo"<h3>Ошибка! Не удалось загрузить файл на сервер!</h3>";
    exit;
  }
  

  // Выводим информацию о загруженном файле:
  echo"<h3>Информация о загруженном на сервер файле:</h3>";
  echo"<p><b>Оригинальное имя загруженного файла: ".$_FILES['uploadfile']['name']
    ."</b></p>";
  echo"<p><b>Mime-тип загруженного файла: ".$_FILES['uploadfile']['type']
    ."</b></p>";
  echo"<p><b>Размер загруженного файла в байтах: ".$_FILES['uploadfile']['size']
    ."</b></p>";
  echo"<p><b>Временное имя файла: ".$_FILES['uploadfile']['tmp_name']."</b></p>";
  
}



?>

  
  <p>Proceed to <a href="./script-fileupload.php">script-fileupload.php</a></p>

</body>
</html> 
