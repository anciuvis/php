<?php
	function translation($language1, $wordCurrent) {
		$dictionary = [
			'labas' => ['en' => 'hello', 'ru' => 'privet'],
			'masina' => ['en' => 'car', 'ru' => 'mashina'],
			'du' => ['en' => 'two', 'ru' => 'dva'],
			'vertimas' => ['en' => 'translation', 'ru' => 'perevod'],
			'transakcija' => ['en' => 'transaction', 'ru' => 'tranzakcija']
		];
		switch ($language1) {
			case 'en':
				if(in_array($wordCurrent, $dictionary[$wordCurrent]['en'])) {
					$word2 = array_search($wordCurrent,$dictionary[$wordCurrent]['en']);
				} else {
					$word2 = 'anglu kalboje tokio zodzio nera :(';
				}
				break;
			case 'lt':
				if(array_key_exists($wordCurrent, $dictionary)) {
					$word2 = $dictionary[$wordCurrent];
				} else {
					$word2 = 'lietuviu kalboje tokio zodzio nera :(';
				}
				break;
			case 'ru':
				if(array_key_exists($wordCurrent, $dictionary)) {
					$word2 = $dictionary[$wordCurrent];
				} else {
					$word2 = 'rusu kalboje tokio zodzio nera :(';
				}
				break;
			default:
				$word2 = 'tokios kalbos isversti negali :(';
				break;
		}
		return $word2;

		// "hello, kjhjhgjhg {$name}"
	}
?>
