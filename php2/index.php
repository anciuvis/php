<?php
	include 'helper.php';
	$language1 = null;
	// $language2 = null;
	$word1 = null;

	if(array_key_exists('language1',$_GET)) {
		$language1 = $_GET['language1'];
		if(array_key_exists('word1',$_GET)){
			$word1 = $_GET['word1'];
			$word1 = mb_convert_case($word1, MB_CASE_LOWER, "UTF-8");
			$wordEnd = translation($language1, $word1);
		}
	}
	include 'index.view.php';

	// if(array_key_exists('language2',$_GET)){
	// 	$language2 = $_GET['language2'];
	//
	// }

?>
