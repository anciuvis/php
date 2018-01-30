<?php
	session_start();
	include 'function.php';
	$id = $_GET['id'];




	$_SESSION['msg']= [
		'message'=>'Edited successfully',
		'class'=>'warning'
	];
	header('Location:index.php');
 ?>
