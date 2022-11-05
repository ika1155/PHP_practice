<?php

try
{
	$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';
	$dbh = new PDO($dsn, 'root', '');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'SELECT * FROM todo_items ORDER BY expiration_date';

	$stmt = $dbh->prepare($sql);
	$stmt->execute();

	$lists = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
catch (Exception $e)
{
	var_dump($e);
	exit;
}

header('Content-Type:text/csv');
header('Content-Disposition:attachment; filename="work.csv"');

foreach ($lists as $list)
{
	foreach ($list as $key => $value)
	{
		if ($key == 'todo_item')
		{
			$list[$key] = mb_convert_encoding($value, 'SJIS-win', 'UTF-8');
		}
	}
	echo implode(',', $list)."\n";
}
?>