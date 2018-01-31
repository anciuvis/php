<?php
	session_start();
	include 'function.php';
	// var_dump ($_POST);

		$title = $_POST['title'];
	
	$desc = $_POST['desc'];
	$deadline = mktime(0,0,0,$_POST['deadline1'],$_POST['deadline2'],$_POST['deadline3']);
	// $deadline=date('d-m-Y', $deadline);
	$priority = $_POST['priority'];
	addToList($title, $desc, $deadline, $priority);
	$_SESSION['msg']=[
		'message'=>'added ok',
		'class'=>'info'
	];
	header('Location:index.php');
 ?>
