#!/usr/pkg/bin/php
<?php
$time = getdate();
var_dump($time);
echo "";
echo date('Y-M-D',$time[0])."\n";
print 'now hours = '.$time['hours'];
echo "\n";
?>
