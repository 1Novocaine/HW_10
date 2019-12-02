<?php
session_start();
if (isset($_GET['itemId'])){
	$productId = $_GET['itemId'];
		}if  (!isset($_SESSION['cart'][$productId])) {
			$_SESSION['cart'][$productId] = $_GET['itemCount'];
		 } else {
			$_SESSION['cart'][$productId] += $_GET['itemCount'];
			};
header('Location: ../index.php');
?>