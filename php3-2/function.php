<?php
function getCsvFile() {
	$read = fopen('todolist.csv', 'r');
	$toDo = [];
	$i = 0;
	while (($a= fgetcsv($read))!== false) {
		$toDo[]=[
			'title'=> $a[0],
			'desc'=> $a[1],
			'deadline'=> $a[2],
			'priority'=> $a[3],
			'done'=> $a[4]
		];
		$i++;
	}
	fclose($read);
	return $toDo;
}
function addToList ($title, $desc, $deadline, $priority, $done) {
	$mas = [
		'title'=> $title,
		'desc'=> $desc,
		'deadline'=> $deadline,
		'priority'=> $priority,
		'done'=> $done
	];
	$write = fopen ('todolist.csv', 'a');
	fputcsv($write,[
		$mas['title'],
		$mas['description'],
		$mas['deadline'],
		$mas['priority'],
		$mas['done']
	]);
	fclose($write);
	$msg = 'Prideta';
	return $msg;
}
 ?>
