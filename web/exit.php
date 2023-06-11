<?php
session_start();
if (isset($_GET['out'])) {
    unset($_SESSION['name']);
	header("Location: ./index.php");
	exit;
}
?>