<?php 
 //WARNING: The contents of this file are auto-generated



	function wordCount($text){

		if(!is_string($text))
		{
			return 0;
		}

   	$text  = explode(" " , $text);
   	return (int) (count($text));
	}

 

?>