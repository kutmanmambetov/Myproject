<?php
if (file_exists('./unload'))
foreach (glob('./unload/*') as $file)
unlink($file); 
  echo "Все файлы удалены!"
?>
<p><a href="upload.php">Вернуться назад</a></p>