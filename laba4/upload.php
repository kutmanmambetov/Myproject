<html>
<head>
  <title>Работа с файлами</title>
</head>
<body>
      <h2><p><b> Форма для работы с файлами </b></p></h2>
      <form action="get_file.php" method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" value="Загрузить"><br>
      </form> 
      <form action="deletes.php" method="post" enctype="multipart/form-data">

      <input type="submit" value="Удалить все файлы"><br>
      </form><br/><br/>
<?php
$dir  = 'unload/';
$files = scandir($dir);
echo "Файлы на сервере:".'<br>';
foreach ($files as $file):
    echo $file ,'<br>';
endforeach;

?>
</body>
</html>