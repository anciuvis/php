<?php
session_start();
include 'function.php';

$toDo = getCsvFile();

include 'view/index.view.php';
?>
