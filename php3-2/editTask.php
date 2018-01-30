<?php
	session_start();
	include 'function.php';
	$id = $_GET['id'];

	// edit($id);


	$_SESSION['msg']= [
		'message'=>'Edited successfully',
		'class'=>'warning'
	];
	// header('Location:index.php');
	exit;
 ?>
