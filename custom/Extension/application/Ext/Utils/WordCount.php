<?php


	function wordCount($text){

		$text = trim($text);

		if(!is_string($text) || empty($text))
		{
 			return 0;
		}

	 $text = preg_replace('/\s+/', ' ', $text);

 	 $text  = explode(" " , $text);
 	 return (int) (count($text));
}


 ?>
