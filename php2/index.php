<?php
	$language1 = null;
	// $language2 = null;
	$word1 = null;
	include 'helper.php';

	if(array_key_exists('language1', $_GET)) {
		$language = $_GET['language1'];
		$language1 = mb_convert_case($language, MB_CASE_LOWER, "UTF-8");
		$language1 = preg_replace('/\s+/', '', $language1);

		if(array_key_exists('word1', $_GET)) {
			// foreach ($_GET as $key=>$value) {
			// 	echo $key.": ".$value.'<br />';
			// }
			$word = $_GET['word1'];
			$word1 = mb_convert_case($word, MB_CASE_LOWER, "UTF-8");
			$word1 = preg_replace('/\s+/', '', $word1);
			$word1 = explode(",", $word1);
			foreach ($word1 as $value) {
				$wordEnd[] = translation($language1, $value);
			}
		}
		if ($language1 == 'en') {
			$language = 'is anglu kalbos';
			$languageStart = 'i lietuviu kalba';
		} else {
			$language = 'is lietuviu kalbos';
			$languageStart = 'i anglu kalba';
		}
	}

	include 'index.view.php';
	// if(array_key_exists('language2',$_GET)){
	// 	$language2 = $_GET['language2'];
	//
	// }

?>
