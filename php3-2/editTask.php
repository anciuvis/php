<?php
	session_start();
	include 'function.php';
	$id = $_GET['id'];
	$toDo = getCsvFile();

	// edit($id);



	include 'view/edit.view.php';
 ?>
