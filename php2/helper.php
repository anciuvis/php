<?php
	function translation($language1, $language2, $wordCurrent) {

		$zodynas = readCsv();

		switch ($language1) {
			case 'en':
				foreach ($zodynas as $row) {
					if($row['en'] == $wordCurrent) {
            $word2 = $row[$language2];
          }
				}
				break;

			case 'lt':
				foreach ($zodynas as $row) {
					if($row['lt'] == $wordCurrent) {
						$word2 = $row[$language2];
					}
				}
				break;

			case 'ru':
				foreach ($zodynas as $row) {
				if($row['lt'] == $wordCurrent) {
					$word2 = $row[$language2];
				}
			}
				break;

			default:
				$word2 = 'klaida';
				break;
		}
		return $word2;
	}

	function readCsv() {
		$read = fopen('translate.csv', 'r');
		$zodynas = [];
		$i = 0;
		while (($a= fgetcsv($read))!== false) {
			$zodynas[]=[
				'lt'=> $a[0],
				'en'=> $a[1],
				'ru'=> $a[2]
			];
			$i++;
		}
		fclose($read);
		// die();
		return $zodynas;
	}


		// $dictionaryLt = [
		// 	'labas' => ['en' => 'hello', 'ru' => 'privet'],
		// 	'masina' => ['en' => 'car', 'ru' => 'mashina'],
		// 	'du' => ['en' => 'two', 'ru' => 'dva'],
		// 	'vertimas' => ['en' => 'translation', 'ru' => 'perevod'],
		// 	'obuolys' => ['en' => 'apple', 'ru' => 'jabloko']
		// ];
		// $dictionaryEn = [
		// 	'hello' => ['lt' => 'labas', 'ru' => 'privet'],
		// 	'car' => ['lt' => 'masina', 'ru' => 'mashina'],
		// 	'two' => ['lt' => 'du', 'ru' => 'dva'],
		// 	'translation' => ['lt' => 'vertimas', 'ru' => 'perevod'],
		// 	'apple' => ['lt' => 'obuolys', 'ru' => 'jabloko']
		// ];
		// $dictionaryRu = [
		// 	'privet' => ['lt' => 'labas', 'en' => 'hello'],
		// 	'mashina' => ['lt' => 'masina', 'en' => 'car'],
		// 	'dva' => ['lt' => 'du', 'en' => 'two'],
		// 	'perevod' => ['lt' => 'vertimas', 'en' => 'translation'],
		// 	'jabloko' => ['lt' => 'obuolys', 'en' => 'apple']
		// ];
    //

	// 	switch ($language1) {
	// 		case 'en':
	// 			if(array_key_exists($wordCurrent, $dictionaryEn)) {
	// 				$word2 = chooseDict ($wordCurrent, $language2, $dictionaryEn);
	// 			} else {
	// 				$word2 = 'anglu kalboje tokio zodzio nera :(';
	// 			}
	// 			break;
  //
	// 		case 'lt':
	// 			if(array_key_exists($wordCurrent, $dictionaryLt)) {
	// 				$word2 = chooseDict ($wordCurrent, $language2, $dictionaryLt);
	// 			} else {
	// 				$word2 = 'lt kalboje tokio zodzio nera :(';
	// 			}
	// 			break;
  //
	// 		case 'ru':
	// 			if(array_key_exists($wordCurrent, $dictionaryRu)) {
	// 				$word2 = chooseDict ($wordCurrent, $language2, $dictionaryRu);
	// 			} else {
	// 				$word2 = 'ru kalboje tokio zodzio nera :(';
	// 			}
	// 			break;
  //
	// 		default:
	// 			$word2 = 'is tokios kalbos isversti negali :(';
	// 			break;
  //
	// 	}
// function chooseDict ($wordCurrent, $language2, $dictionary) {
// 	switch ($language2) {
// 		case 'lt':
// 			$word2 = $dictionary[$wordCurrent]['lt'];
// 			break;
// 		case 'ru':
// 			$word2 = $dictionary[$wordCurrent]['ru'];
// 			break;
// 		case 'en':
// 			$word2 = $dictionary[$wordCurrent]['en'];
// 			break;
// 		default:
// 			$word2 = 'i tokia kalba versti negalima :(';
// 			break;
// 	}
// 	return $word2;
// }
?>
