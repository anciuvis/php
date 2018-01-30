<?php
	session_start();





	$_SESSION['msg']=[
		'message'=>'Done successfully!',
		'class'=>'success'
	];
	header('Location:index.php');
 ?>
