<?php

include('db.php');

$created=$_POST['created1'];
$title=$_POST['title1'];
$article=$_POST['article'];

$query = mysql_query("INSERT INTO notes (created, title, article) VALUES ('$created', 
'$title', '$article')");
echo "Запись успешно добавлена!";

?>
<p><a href=index.php>Вернуться назад</a><p>