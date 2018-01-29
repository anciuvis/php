<?php
	$date = mktime(0,0,0,1,29,2000);
	echo $date.'<br />';
	$newDate = date('y/m/D', $date);
	echo $newDate.'<br /><br />';
	// pradinis masyvas kuri reik isrusiuot
	$mas = [
		['name'=> 'Petras', 'age'=> 26],
		// ['name'=> 'Petras', 'age'=> 25],
		['name'=> 'Alius', 'age'=> 35],
		['name'=> 'Zana', 'age'=> 21]
	];
	// foreach ($mas as $value){
	// 	echo $value['name'].'<br />';
	// }
	// susikuriam raktu masyvus, akd juos paduoti, kad pagal juos eitu rusiavimas
	$name = [];
	foreach ($mas as $value) {
		$name[]=$value['name'];
	}
	$age = [];
	foreach ($mas as $value) {
		$age[]=$value['age'];
	}
	// foreach ($name as $value) {
	// 	echo $value.'<br>';
	// }
	echo 'rusiuojam pagal amziu:<br>';
	array_multisort($age, SORT_ASC, $mas); // jeigu keisti pirma argumenta - pagal ji rusiuoja (amzius arba vardas siuo atveju)
	foreach ($mas as $value) {
		echo $value['name'].'-'.$value['age'].'<br>';
	}
	echo '<br />';
	echo 'rusiuojam pagal varda:<br>';
	array_multisort($name, SORT_ASC, $mas);
	foreach ($mas as $value) {
		echo $value['name'].'-'.$value['age'].'<br>';
	}
 ?>
