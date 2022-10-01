<?php

$kokugo = $_POST['kokugo'];
$math = $_POST['math'];

if ($kokugo > 79 && $math > 79)
{
	$str = '素晴らしいです！';
}
else if($kokugo > 79 || $math > 79)
{
	$str = '良しとしましょう！';
}
else
{
	$str = '残念でした。次回は頑張りましょう！';
}
echo $str;
?>