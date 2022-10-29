<?php 
session_start();
session_regenerate_id();

if(isset($_SESSION['error']))
{
	unset($_SESSION['error']);
}

if ($_FILES['image_file']['error'] != 0)
{
	$_SESSION['error']['msg'] = '画像のアップロードに失敗しました。';
	header('Location:./');
	exit;
}

$path = './images/'.$_FILES['image_file']['name'];
//move_uploaded_file(移動前のパス, 移動先のパス)
move_uploaded_file($_FILES['image_file']['tmp_name'], $path);

header('Location:./show.php');
exit;
?>