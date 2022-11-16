<?php
session_start();
session_regenerate_id();

if (empty($_SESSION['user']))
{
	header('Location:./login.php');
	exit;
}

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

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
	$db = new TodoItems();

	while (($buf = fgetcsv($fp)) !== false)
	{
		var_dump($buf);
		$db->update($buf[0], $buf[1], mb_convert_encoding($buf[2], 'UTF-8', 'SJIS-win'), $buf[3]);
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