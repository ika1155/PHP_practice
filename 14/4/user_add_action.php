<?php

require_once('./class/db/Base.php');
require_once('./class/db/Users.php');

session_start();
session_regenerate_id();
//e-mail、パスワード、名前をセッションに保存
$_SESSION['login'] = $_POST;

if (!isset($_SESSION['token']) || $_SESSION['token'] !== $_POST['token']) {
	$_SESSION['err_msg'] = "不正な処理が⾏われました。";
	header('Location: ./user_add.php');
	exit;
} 
unset($_SESSION['err_msg']);

try
{	
	$db = new Users();
	$not_exist = $db->addUser($_POST['email'], $_POST['pass'], $_POST['name']);

	//同じメールアドレスが既に登録されていた場合の処理
	if (!$not_exist)
	{
		$_SESSION['err_msg'] = '既に同じメールアドレスが登録されています。';
		header('Location:./user_add.php');
		exit;
	}

	unset($_SESSION['login']);
	unset($_SESSION['err_msg']);
	header('Location:./login.php');
	exit;
}
catch(Exception $e)
{
	$_SESSION['err_msg'] = '申し訳ございません。エラーが発生しました。';
	header('Location:./user_add.php');
	exit;
}

?>
