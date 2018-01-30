<?php
session_start();
include 'function.php';

$toDo = getCsvFile();
$count = count($toDo);
$perPage = 4;
$pageCount = ceil($count/$perPage);
// echo $pageCount;
$psl = 1;

$from = $perPage*($psl-1);
$till = $perPage*$psl-1;
if ($till > $count) {
	$till = $count;
}
include 'view/index.view.php';
?>
