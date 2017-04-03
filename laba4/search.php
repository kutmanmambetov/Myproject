<?php include('db.php');

$query1=$_POST['query'];
$query1 = trim($query1);                     // Обрезаем пробелы и спецсиволы

if (!empty($_POST['query'])) { 

$s = mysql_query("SELECT * FROM notes WHERE title LIKE '$query1' OR article LIKE '$query1'");
$q = mysql_fetch_array( $s );
echo "Результат поиска:";
    echo " <br/>";
    echo $q['id'];
    echo " <br/>";
    echo $q['created'];
    echo "<br/> ";
    echo $q['title'];
    echo "<br/> ";
    echo $q['article'];
    echo "<br/ >";
}
else
{
    echo "Введите ключевое слово для поиска!";
}

  ?>
  <p><a href="index.php">Вернуться назад</a></p>