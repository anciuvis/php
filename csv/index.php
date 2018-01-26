<?php
  //
	// $masyvas =[
	// 	'name' => 'Alius',
	// 	'age'=> 25
	// ];
  //
	// $write = fopen('file.csv', 'a'); // su a - kiekviena refresa, su w - tik viena karta
	// fputcsv($write,[
	// 		$masyvas['name'],
	// 		$masyvas['age']
	// ]);
	// fclose($write);
	$mas=[];
	$read=fopen('file.csv','r');

	$i = 0;
	while (($a=fgetcsv($read)) !== false) {
		$mas[] = [
			'name' => $a[0],
			'age' => $a[1]
		];
		$i++;
	}
	fclose($read);

	var_dump($mas);
	die();

	echo 'done';
?>
