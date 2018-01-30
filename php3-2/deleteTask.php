<?php
	session_start();
	include 'function.php';
	$id = $_GET['id'];

	$toDo = getCsvFile();

	unset($toDo[$id]);
	addArrayToCsv($toDo);
	$_SESSION['msg'] = [
		'message'=>'Deleted successfully',
		'class'=>'danger'
	];
	header('Location:index.php');
	exit;
 ?>
