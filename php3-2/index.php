<?php
session_start();
include 'function.php';

$toDo = getCsvFile();
$count = count($toDo);
$perPage = 4;
$pageCount = ceil($count/$perPage);
// echo $pageCount;

if (array_key_exists("psl", $_GET)) {
	$psl = $_GET['psl'];
} else {
	$psl = 1;
}

$from = $perPage*($psl-1);
$till = $perPage*$psl-1;
if ($till > ($count-1)) {
	$till = $count-1;
}

include 'view/index.view.php';
?>
