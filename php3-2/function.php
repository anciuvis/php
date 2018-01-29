<?php

function getCsvFile() {
	$read = fopen('todolist.csv', 'r');
	$toDo = [];
	$i = 0;
	while (($a= fgetcsv($read))!== false) {
		$toDo[]=[
			'title'=> $a[0],
			'description'=> $a[1],
			'deadline'=> $a[2],
			'priority'=> $a[3],
			'done'=> $a[4],
		];
		$i++;
	}
	fclose($read);
	return $zodynas;
}

 ?>
