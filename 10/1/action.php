<?php 

$path = './images/'.$_FILES['image_file']['name'];
//move_uploaded_file(移動前のパス, 移動先のパス)
move_uploaded_file($_FILES['image_file']['tmp_name'], $path);
header('Location:./');
exit;
?>