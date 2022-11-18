<?php
//<script>while(1){alert('test')}</script>と入力したものが
//&lt;script&gt;while(1){alert('test')}&lt;/script&gt; で保存される
$date = htmlspecialchars($_POST['expiration_date']);
$item = htmlspecialchars($_POST['todo_item']);

$dsn = 'mysql:dbname=php_work; host=localhost; charset=utf8';

$dbh = new PDO($dsn, 'root', '');

$sql = 'INSERT INTO todo_items(expiration_date, todo_item)
		VALUES (:expiration_date,:todo_item)';

$stmt = $dbh->prepare($sql);

$stmt->bindValue(':expiration_date', $date, PDO::PARAM_STR);
$stmt->bindValue(':todo_item', $item, PDO::PARAM_STR);

$stmt->execute();

header('Location:./');
exit;

?>