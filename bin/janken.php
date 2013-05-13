#!/usr/pkg/bin/php
<?php
class janken{

function __construct(){
	mt_srand((double) microtime() * 1000000);
}

function showHand(){
//コンピューターの手を乱数で出す(1-3)
$hand = mt_rand(1,3);


switch($hand){
case 1:
	echo 'グー'.PHP_EOL; 	
			break;
case 2:
	echo 'チョキ'.PHP_EOL; 	
			break;
case 3:
	echo 'パー'.PHP_EOL; 	
			break;

}
}
}

$jan = new janken();
$jan->showHand();
$jan->showHand();
$jan->showHand();
$jan->showHand();
$jan->showHand();
$jan->showHand();
$jan->showHand();
$jan->showHand();
?>