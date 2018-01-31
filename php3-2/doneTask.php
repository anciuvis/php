<?php
	session_start();
	include 'function.php';
	$id = $_GET['id'];
	$toDo = getCsvFile();
	$toDo[$id]['done'] = 'yes';
	addArrayToCsv($toDo);



	$_SESSION['msg']=[
		'message'=>'Done successfully!',
		'class'=>'success'
	];
	header('Location:index.php');
	exit;
 ?>
