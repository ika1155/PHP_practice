<?php

session_start();
session_regenerate_id();

unset($_SESSION['cart'][$_POST['id']]);

header('location: ./');
exit;
?>