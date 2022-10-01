<?php
$repeat = $_POST['repeat'];

echo $repeat.'回ループします。';
$i = 1;
echo '<table border="1">';
while(true){

	echo '<tr><td>'.$i.'回目</td></tr>';

	if ($i == $repeat){
		break;
	}
	$i++;
}
echo '</table>';
?>