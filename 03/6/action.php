<?php
$repeat = $_POST['repeat'];

echo "$repeat 回ループします。";
echo "<ul>";
for ($i = 1; $i <= $repeat; $i++)
{
	if ($i % 2 == 0){
		echo "<li> $i 回目</li>";
	}
	else{
		continue;
	}
}
echo "</ul>";
?>