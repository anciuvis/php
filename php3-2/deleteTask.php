<?php
	session_start();
	include 'function.php';
	$id = $_GET['id'];

	$toDo = getCsvFile();

	unset($toDo[$id]);
	addArrayToCsv($toDo);
	header('Location:index.php');
	exit;
	$_SESSION['msg']='Deleted successfully';
	header('Location:index.php');
 ?>
