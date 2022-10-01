<?php
$menu = $_POST['menu'];

echo 'お客様が選ばれたのは';
switch($menu){
	case '1':
		echo 'ラーメン';
		break;
	case '2':
		echo 'チャーシュー麺';
		break;
	case '3':
		echo 'こってりラーメン';
		break;
	case '4':
		echo '味玉ラーメン';
		break;
	case '5':
		echo '味噌ラーメン';
		break;
	case '6':
		echo '特製ラーメン';
		break;
}
echo 'です。';
?>