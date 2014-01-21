<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title;?></title>
	<style>label { display:block;}</style>
</head>
<body>
	<h1><?php echo $headline;?></h1>
<?php $this->load->view($include);?>
</body>
</html>
