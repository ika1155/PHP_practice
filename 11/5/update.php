<?php

session_start();
session_regenerate_id();

$msg = 'アップロードに失敗しました';

if (!isset($_FILES['csv_file']) || ($_FILES['csv_file']['error'] != 0))
{
	$_SESSION['error']['msg'] = $msg;
	header('Location:./upload.php');
	exit;
}

$fp = fopen($_FILES['csv_file']['tmp_name'], 'r');

try
{
	$dsn = 'mysql:dbname=php_work;host=localhost;charset=utf8';

	$dbh = new PDO($dsn, 'root', '');

	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = 'UPDATE todo_items 
			SET expiration_date=:expiration_date, todo_item=:todo_item,is_completed=:is_completed 
			WHERE id=:id';
	
	$stmt = $dbh->prepare($sql);

	while (($buf = fgetcsv($fp)) !== false)
	{
		$stmt->bindValue(':id', $buf[0], PDO::PARAM_INT);
		$stmt->bindValue(':expiration_date', $buf[1], PDO::PARAM_STR);
		//mb_convert_encoding(文字列, 変換する文字コード,　元の文字コード)
		$stmt->bindValue(':todo_item', mb_convert_encoding($buf[2], 'UTF-8', 'SJIS-win'), PDO::PARAM_STR);
		$stmt->bindValue(':is_completed', $buf[3], pdo::PARAM_STR);

		$stmt->execute();
	}

	header('Location:./');
	exit;
}
catch (Exception $e)
{
	$_SESSION['error']['msg'] = $msg;
	header('Location:./upload.php');
	exit;
}


?>