<?php
	include 'function.php';
	$id = $_GET['id'];

	$toDo = getCsvFile();

	unset($toDo[$id]);
	addArrayToCsv($toDo);
	header('Location:index.php');
	exit;

 ?>
