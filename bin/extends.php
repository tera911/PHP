<html>
<head>
	<meta http-equiv="Content-Type" Content="text/html;charset=UTF-8">
	<title>クラスの継承</title>
</head>
<body>
<?php
	//親クラス
	class SuperClass{
		function getSuperData(){
			return '親クラス';
		}
	}

	//子クラス
	class SubClass extends SuperClass{
		function getSubData(){
			return '子クラス';
		}
	}

	function h($string){
		return htmlspecialchars($string,ENT_QUOTES);
	}

	$obj = new SubClass();

	echo h($obj->getSuperData()).'<br />';
	echo h($obj->getSubData()).'<br />';
?>
</body>
</html>