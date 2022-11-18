<?php
session_start();
session_regenerate_id();

if (!isset($_SESSION['token']) || $_SESSION['token'] !== $_POST['token']) {
	$_SESSION['err_msg'] = "不正な処理が⾏われました。";
	header('Location: ./');
	exit;
} 
unset($_SESSION['err_msg']);

if (empty($_SESSION['user']))
{
	header('Location:./login.php');
	exit;
}

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');

try
{
	$db = new TodoItems();

	$db->add($_POST['expiration_date'], $_POST['todo_item']);
	
	header('Location:./');
	exit;
}
catch (Exception $e)
{
	var_dump($e);
	exit;
}

?>