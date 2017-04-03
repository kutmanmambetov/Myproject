<html>
<head>
  <title>Результат загрузки файла</title>
</head>
<body>
<?php
   if($_FILES['filename']['size'] > upload_max_filesize)
   {
     echo "Размер файла превышает три мегабайта";
     exit;
   }
   // Проверяем загружен ли файл
   if(is_uploaded_file($_FILES['filename']['tmp_name']))
   {
     // Если файл загружен успешно, перемещаем его
     // из временной директории в конечную
     move_uploaded_file($_FILES['filename']['tmp_name'], 'unload/'.$_FILES['filename']['name']);
   } else {
      echo"Ошибка загрузки файла";
   }
?>
<p><a href="upload.php">Вернуться назад</a></p>
</body>
</html>