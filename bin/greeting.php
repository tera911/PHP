<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<link href="./scripts/css/style.css" rel="stylesheet" type="text/css" />
<title>変数と文字列の出力</title>
</head>
<body>
<div id="wrap">
	<div id="title">
		<h1>TEST Content</h1>
	</div>
	<div id="main">
<p>
<?php
$time = getdate();
$now = $time[hours].':'.$time[minutes];

if($now >= date('07:00') && $now <= date('12:00')){
	echo "おはよう";
}else if($now > date('12:00') && $now <= date('19:00')){
	echo "こんにちわ";
}else if($now > date('19:00') && $now < date('21:00')){
	echo "こんばんわ";
}else{
	echo "おやすみ";
}

?>
</p>
	</div>
</div>
</body>
</html>