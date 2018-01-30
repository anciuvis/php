<?php
	session_start();
	include 'function.php';
	$id = $_GET['id'];





	$_SESSION['msg']=[
		'message'=>'Done successfully!',
		'class'=>'success'
	];
	header('Location:index.php');
	exit;
 ?>
