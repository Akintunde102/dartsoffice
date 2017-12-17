<?php
ob_start();
@session_start();

$site_address = 'dtechssl.com';


//set timezone
date_default_timezone_set('Europe/London');

//load classes as needed
function __autoload($class) {
   
   $class = strtolower($class);

	//if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 	
	
	//if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	}
	
	//if call from within admin adjust the path
   $classpath = '../../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
	} 		
	 
}

//To reduce the number of words in a string
			 function shorten_words($string, $wordsreturned)
			{
				$retval = $string;  //  Just in case of a problem
				$array = explode(" ", $string);
				if (count($array)<=$wordsreturned)
				{
					$retval = $string;
				}
				else
				{
					array_splice($array, $wordsreturned);
					$retval = implode(" ", $array);
				}
				return $retval;
			}
			
		 Function code($in,$mth)
		 {
			if ($mth == 'up')
			{
				$in = preg_replace('/[^a-z0-9_]/i','-',$in);
				
				while (preg_match('/--/',$in) == 1)
				{
				$in = str_replace('--','-',$in);
				}				
				
				
				$in = preg_replace('/-$/','',$in);
				
				$in = preg_replace('/^-/','',$in);
			}
			 if ($mth == 'down'){ $in = str_replace('-',' ',$in);}
			 return $in;
		 }
?>