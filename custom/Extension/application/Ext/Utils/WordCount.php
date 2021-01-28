<?php

	function wordCount($text){

		if(!is_string($text))
		{
			return 0;
		}

   	$text  = explode(" " , $text);
   	return (int) (count($text));
	}

 ?>
