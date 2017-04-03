<?php>
$query=mysql_query("SELECT * FROM notes ORDER BY id DESC");
$row=mysql_fetch_array($query);

do{
	echo $row['id'];
	echo "<br/ >";
	echo $row['created'];
    echo "<br/ >";
    echo $row['title'];
    echo "<br/ >";
    echo $row['article'];
    echo "<br/ >";
}while($row=mysql_fetch_array($query));

?>