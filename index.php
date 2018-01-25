	<!-- echo 'Labas<br>';
	// php -S localhost:8000 - paleisti serveri per terminala (tame folderyje kur php).
	// interneto narsykleje ieiti i localhost:8000 ir matysis Labas
	$a = 3;
	$a = 'Labas';

	echo $a."<br />";

	$a .= ', Anna<br>';

	echo $a;
	$b = 2;
	$c = 3;

	echo $b.'+'.$c.'='.($b+$c)."<br />";

	echo ++$b."<br />";

	if($b == $c) {
		echo 'kintamieji lygus<br>';
	} else {
		echo 'nelygus<br>';
	}

	switch ($c) {
		case 1:
			echo 'kintamasis yra vienetas<br />';
			break;
		case 2:
			echo 'lygus 2<br />';
			break;
		case 3:
			echo 'lygus 3<br />';
			break;
		default:
			echo 'kintamasis nelygus nei 1 nei 2 nei 3<br />';
	}

	for ($i=0; $i < 5; $i++) {
		echo $i.'<br />';
	}

	$mas = ['Audi', 'BMW', 'Mazda', 'Honda'];
	$taspats = [
		0=>'Audi',
		1=>'BMW',
		2=>'Mazda',
		3=>'Honda'
	];

	for ($i=0; $i < count($mas); $i++) {
		echo $mas[$i].'<br />';
	}

	foreach ($mas as $reiksmes) {
		echo $reiksmes.'<br />';
	}

	$mas = [
		'marius'=>'23',
		'darius'=>'18',
		'inga'=>'25'
	];

	$mas[]= 24;
	$mas['saulius']=30;
	array_shift($mas);

	foreach ($mas as $key=>$age) {
		echo $key.": ".$age.'<br />';
	} -->

<?php
	include 'helper.php';
	$name = null;
	$surname = null;
	if(array_key_exists('name',$_GET)) {
		$name = $_GET['name'];
		$newName = changeName($name);
	}
	if(array_key_exists('surname',$_GET)){
		$surname = $_GET['surname'];
	}
	include 'index.view.php';
?>
