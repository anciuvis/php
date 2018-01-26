<?php
	$language1 = null;
	$language2 = null;
	$word1 = null;
	include 'helper.php';

	if(array_key_exists('language1', $_GET)) {
		$language1 = $_GET['language1'];
		$language1 = mb_convert_case($language1, MB_CASE_LOWER, "UTF-8");
		$language1 = preg_replace('/\s+/', '', $language1);

		if(array_key_exists('language2', $_GET)) {
			$language2 = $_GET['language2'];
			$language2 = mb_convert_case($language2, MB_CASE_LOWER, "UTF-8");
			$language2 = preg_replace('/\s+/', '', $language2);

			if(array_key_exists('word1', $_GET)) {
				// foreach ($_GET as $key=>$value) {
				// 	echo $key.": ".$value.'<br />';
				// }
				$word = $_GET['word1'];
				$word1 = mb_convert_case($word, MB_CASE_LOWER, "UTF-8");
				$word1 = preg_replace('/\s+/', '', $word1);
				$word1 = explode(",", $word1);
				foreach ($word1 as $value) {
					$wordEnd[] = translation($language1, $language2, $value);
				}

				if ($language1 == 'en') {
					$language = 'is anglu kalbos';
				} elseif ($language1 == 'lt') {
					$language = 'is lietuviu kalbos';
				} elseif ($language1 == 'ru') {
					$language = 'is rusu kalbos';
				} else {
					$language = 'nera tokios kalbos';
				}

				if ($language2 == 'en') {
					$languageStart = 'i anglu kalba';
				} elseif ($language2 == 'lt') {
					$languageStart = 'i lietuviu kalba';
				} elseif ($language2 == 'ru') {
					$languageStart = 'i rusu kalba';
				} else {
					$languageStart = 'nera tokios kalbos';
				}
			}
		}
	}
	include 'index.view.php';

?>
