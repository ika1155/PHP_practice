<?php

$num = $_POST['num'];

if ($num >= 100)
{
	$str = '100以上です！';
}
else
{
	$str = '100未満です！';
}
echo $str;
?>