<html>
<head>
	<title></title>
</head>

<?php
include('db.php');
include('desc.php');


?>
<br/>
<br/>
<p><a href="upload.php">Отправить файл на сервер</a></p>
<p><a href="static.php">Посмотреть статистику</a></p>

<form name="search" method="post" action="search.php">
    <input type="search" name="query" placeholder="Поиск">
    <button type="submit">Найти</button> 
</form>
<br/>
  </style>

 <body>
 <h2>ФОРМА ДЛЯ ДОБАВЛЕНИЯ ЗАПИСИ</h2>
<form method="post" action="insert.php">
Дата создания:<br/><input type="text" name="created1"/><br/>
Заголовок:<br/><input type="text" name="title1"/><br/>
Артикль:<br/><textarea name="article" cols=30 rows=7></textarea><br/>
<input type="submit" name="ok" value="Добавить">
</form>
<br/>
<br/>
 <h2>ФОРМА ДЛЯ ОБНОВЛЕНИЯ ЗАПИСИ</h2>
<form method="post" action="update.php">
id:<br/><input type="text" name="id1"/><br/>
Дата создания:<br/><input type="text" name="created1"/><br/>
Заголовок:<br/><input type="text" name="title1"/><br/>
Артикль:<br/><textarea name="article" cols=30 rows=7></textarea><br/>
<input type="submit" name="ok" value="Обновить">
</form>
<br/>
<br/>
 <h2>ФОРМА ДЛЯ УДАЛЕНИЯ ЗАПИСИ</h2>
<form method="post" action="delete.php">
id:<br/><input type="text" name="id1"/><br/>
<input type="submit" name="ok" value="Удалить">
</form>

</body>
</html>
