#!/usr/pkg/bin/php
<?php
$studentId = $argv[1];

if(preg_match('/^[a-b]\d{4}$/i',$studentId)){
echo '学籍番号です。'.PHP_EOL;
}else{
echo '学籍番号ではありません。'.PHP_EOL;
}
?>