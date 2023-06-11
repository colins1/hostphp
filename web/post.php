<?php
session_start();
if (!isset($_POST['name'])) {
	header("Location: ./index.php");
	exit;
} else {
	$_SESSION['name'] = $_POST['name'];
	header("Location: ./index.php");
}
?>