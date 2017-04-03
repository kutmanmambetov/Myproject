<?php include('db.php');?>
<?php
//Вычисление количества заметок
$a = mysql_query("SELECT COUNT(1) FROM notes");
$b = mysql_fetch_array( $a );
echo "Сделано записей - $b[0]";
?>
<br/>
<?php
$lmnotes = mysql_query("SELECT COUNT(1) FROM notes WHERE created  >= DATE_SUB(CURRENT_DATE, INTERVAL 30 DAY)");
$w = mysql_fetch_array( $lmnotes );
echo "За последний месяц я создал записей- $w[0]";
?>
<br/>
<?php
$lastnote = mysql_query("SELECT * FROM notes ORDER BY id DESC LIMIT 1;");
$q = mysql_fetch_array( $lastnote );
echo "Последняя добавленная запись - ";
	echo " <br/>";
	echo $q['id'];
	echo " <br/>";
	echo $q['created'];
    echo "<br/> ";
    echo $q['title'];
    echo "<br/> ";
    echo $q['article'];
    echo "<br/ >";

  ?>
  <br/>
  <?php
$query_mcnote = mysql_query("SELECT * FROM comments, notes
WHERE comments.art_id=notes.id
GROUP BY notes.id
ORDER BY COUNT(comments.id) DESC LIMIT 0,1");
$e = mysql_fetch_array( $query_mcnote );
echo "Самая обсуждаемая запись - ";
	echo " <br/>";
	echo $q['id'];
	echo " <br/>";
	echo $q['created'];
    echo "<br/> ";
    echo $q['title'];
    echo "<br/> ";
    echo $q['article'];
    echo "<br/ >";

  ?>

