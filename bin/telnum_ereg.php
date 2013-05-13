#!/usr/pkg/bin/php
<?php
$text = $argv[1];
echo '電話番号かどうか'. PHP_EOL;
$text = str_replace("(","",$text);
$text = str_replace(")","",$text);
$text = str_replace("-","",$text);
echo $text.PHP_EOL;
if(preg_match('/^0\d{9}$/',$text)){
	echo '電話番号です'.PHP_EOL;
}else{
	echo '電話番号じゃないです。'.PHP_EOL;
}

?>