<?php
session_start();
if(!isset($_SESSION["roll"])){
	header("Location: login.php");
exit(); }
?>