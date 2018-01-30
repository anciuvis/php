<?php
session_start();
include 'function.php';

$toDo = getCsvFile();
// include 'add.php';

include 'view/index.view.php';
header('Location:index.php');
?>
