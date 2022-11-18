<?php

session_start();
session_regenerate_id();

require_once('./class/db/Base.php');
require_once('./class/db/TodoItems.php');


if (empty($_SESSION['user']))
{
	header('Location:./login.php');
	exit;
}

if (!isset($_SESSION['token']) || $_SESSION['token'] !== $_POST['token']) {
	$_SESSION['err_msg'] = "不正な処理が⾏われました。";
	header('Location: ./');
	exit;
} 
unset($_SESSION['err_msg']);


try{
	$db = new TodoItems();
	
	if(isset($_POST['delete']) && ($_POST['delete'] == 1))
	{
		$db->delete($_POST['id']);
	}
	else
	{
		$db->updateIsCompleted($_POST['id'], $_POST['is_completed']);
	}
	
	header('Location:./');
	exit;
}
catch (Exception $e)
{
	header('Location:./error.php');
	exit;
}


?>