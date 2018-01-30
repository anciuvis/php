<?php
	session_start();
	include 'function.php';


	$_SESSION['msg']= [
		'message'=>'Edited successfully',
		'class'=>'warning'
	];
	header('Location:index.php');
 ?>
