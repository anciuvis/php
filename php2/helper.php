<?php
	function translation($language1, $word1) {
		$dictionary = [
			'labas' => 'hello',
			'masina' => 'car',
			'du' => 'two'
		];
		switch ($language1) {
			case 'en':
				if(in_array($word1, $dictionary)) {
					$word2 = array_search($word1,$dictionary);
				} else {
					$word2 = 'anglu kalboje tokio zodzio nera :(';
				}
				break;
			case 'lt':
				if(array_key_exists($word1, $dictionary)) {
					$word2 = $dictionary[$word1];
				} else {
					$word2 = 'lietuviu kalboje tokio zodzio nera :(';
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
