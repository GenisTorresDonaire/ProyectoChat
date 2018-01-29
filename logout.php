<?php 
	include 'inicio.php';
	$username="";
	$password="";
	session_destroy();
	$_SESSION["session_username"]="";
	header("Location: inicio.php");
?>