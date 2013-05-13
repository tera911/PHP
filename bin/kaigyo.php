<html>
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>FileInfoクラスを利用する</title>
</head>
<body>
<?php
	require './FileInfo.class.php';

	$fileInfo = new FileInfo();
	$fileInfo->readFile('./FileInfo.class.php');

	echo '改行コードは「'.h($fileInfo->getRetCode()).'」です。';

	function h($string){
		return htmlspecialchars($string,ENT_QUOTES);
	}
?>
</body>
</html>
