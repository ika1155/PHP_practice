<?php 

session_start();
session_regenerate_id();

require_once('./class/db/Base.php');
require_once('./class/db/Users.php');

$_SESSION['login'] = $_POST;

if ($_SESSION['count'] > 3)
{
	$_SESSION['err_msg'] = '上限回数に達しました。<br>しばらくしてからもう一度お試しください。';
	header('Location:./error.php');
	exit;
}

try
{
	$db = new Users();

	$user = $db->getUser($_POST['email'], $_POST['pass']);

	if (!isset($_SESSION['token']) || $_SESSION['token'] !== $_POST['token']) {
		$_SESSION['err_msg'] = "不正な処理が⾏われました。";
		header('Location: ./login.php');
		exit;
	} 
	
	if (empty($user))
	{
		$_SESSION['err_msg'] = 'メールアドレス、またはパスワードに誤りがあります。';
		$_SESSION['count'] += 1;
		header('Location:./login.php');
		exit;
	}

	$_SESSION['user'] = $user;

	unset($_SESSION['err_msg']);
	unset($_SESSION['count']);
	header('Location:./');
	exit;
}
catch (Exception $e)
{
	$_SESSION['err_msg'] = '申し訳ございません。エラーが発生しました。';
	header('Location:./login.php');
	exit;
}

?>