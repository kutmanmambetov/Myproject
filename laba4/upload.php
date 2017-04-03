<html>
<head>
  <title>Загрузка файлов на сервер</title>
</head>
<body>
      <h2><p><b> Форма для загрузки файлов </b></p></h2>
      <form action="get_file.php" method="post" enctype="multipart/form-data">
      <input type="file" name="filename"><br> 
      <input type="submit" value="Загрузить"><br>
      </form>
<?php
$dir  = 'unload/';
$files = scandir($dir);
foreach ($files as $file):
    echo $file .'<br>';
endforeach;



?>
<!-- Форма для удаления файла с сервера -->
<form name="file_delete" action="photo.php" method="post" enctype="application/x-www-form-urlencoded">
Файл <select name = "file_delete" size="1">
<?php for ($i=0; $i<$array_files_count; $i++) { ?>
<option><?php echo $array_files[$i]; ?></option>
<?php } ?></select>
<input type="submit" name="submit" value="Удалить" />
</form>

</body>
</html>