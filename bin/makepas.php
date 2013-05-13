#!/usr/pkg/bin/php
<?php

class generatePass{

	private $chars = array(
	'a','b','c','d','e','f','g','h','i','j','k',
	'l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
	'A','B','C','D','E','F','G','H','I','J','K',
	'L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
	'!','#','$','%','-','_');
	private $length;
	function __construct($length = 6){
		if($length < 6 || $length > 256){
			die('長さがおかしいです。');
		}
		mt_srand((double)microtime() * 10000000);
		$this->length = $length;
	}

	function generatePass(){
		
		$not_pass = '/^[a-z]{6,256}$/';

		$maxindex = count($this->chars) - 1;
	do{
$pass = '';
	for($i = 0;$i < $this->length;$i++){
		$pass .= $this->chars[mt_rand(0,$maxindex)];
	}
}while(preg_match($not_pass,$pass));
		return $pass;

	}
}
if(!isset($argv[1])){
	$len = 6;
}else{
	$len = (int)$argv[1];
}

$genPass = new generatePass($len);

echo $genPass->generatePass().PHP_EOL;


?>