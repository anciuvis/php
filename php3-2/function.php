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
function addToList ($title, $desc, $deadline, $priority) {
	$write = fopen ('todolist.csv', 'a');
	fputcsv($write,[
		$title,
		$desc,
		$deadline,
		$priority,
		'no'
	]);
	fclose($write);
}
function addArrayToCsv($toDo) {
	$write = fopen ('todolist.csv', 'w');
	foreach ($toDo as $fields) {
		fputcsv ($write, $fields);
	}
	fclose ($write);
}
function updToList ($id, $title, $desc, $deadline, $priority) {
	$arr = getCsvFile();
	$arr[$id]['title']=$title;
	$arr[$id]['desc']=$desc;
	$arr[$id]['deadline']=$deadline;
	$arr[$id]['priority']=$priority;
	addArrayToCsv($arr);
}

 ?>
