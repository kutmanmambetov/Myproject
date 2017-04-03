<?php

include('db.php');
$id=$_POST['id1'];
$created=$_POST['created1'];
$title=$_POST['title1'];
$article=$_POST['article'];

$query = mysql_query("UPDATE notes SET created='$created', title='$title', article='$article' WHERE id='$id'");
echo "Запись успешно обновлена!";

?>
<p><a href=index.php>Вернуться назад</a><p>