<?php
session_start();
// var_dump ($_GET);
// die();

$id = $_GET['id'];

include 'function.php';

if( isset($_POST['title']) && $_POST['title']!= ''){
	$title = $_POST['title'];
}else{
	$_SESSION['false']='uzpildik title';
	header("Location:editTask.php?id=$id");
	exit();
}
$desc = $_POST['desc'];
$deadline = mktime(0,0,0,$_POST['deadline1'],$_POST['deadline2'],$_POST['deadline3']);
$priority = $_POST['priority'];
// var_dump ($deadline);
// die();

updToList($id, $title, $desc, $deadline, $priority);
$_SESSION['msg']= [
	'message'=>'Edited successfully',
	'class'=>'warning'
];
header('Location:index.php');

 ?>
