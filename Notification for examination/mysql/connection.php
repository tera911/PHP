<?php

class MySQLConnection{

private $dsn = 'mysql:dname=examination;host=127.0.0.1';
private $mysql_user = 'tera';
private $mysql_passwd = '';

private $connection;//DPO instance;

function __construct(){
	try{
	$this->connection = new PDO($this->dsn,$this->mysql_user,$this->mysql_passwd);
	}catch(PDOException $e){
		echo '接続失敗'.$e->getMessage();
	}
}

	function registerUserAuth($userid,$screenName,$oauth_token,$oauth_token_secret){
		$query =  'INSERT INTO `user` VALUES (id,screen_name,oauth_token,oauth_token_secret) VALUES ( ?, ?, ?, ?)';
		$stmt = $this->dsn->prepare($query);
		$flag->execute(array($userid,$screen_name,$oauth_token,$oauth_token_secret));

		if($flag){
			echo '登録成功';
		}else{
			echo '登録失敗';
		}
	}

	function updateUserAuth($userid,$screenName,$oauth_token,$oauth_token_secret){
		$query = 'UPDATE `user` SET oauth_token = ? ,oauth_token_secret = ? WHERE userid = ?,screen_name = ?';
		$stmt = $this->dsn->prepare($query);
		$flag->execute(array($oauth_token,$oauth_token_secret,$userid,$screenName));

		if($flag){
			echo '更新成功';
		}else{
			echo '更新失敗';
		}
	}

	function getUserOAuth_token($userid,$screenName){
		$query = 'SELECT oauth_token FROM user WHERE userid = ?,screen_name = ?;'
		$oauth_token;
		foreach ($this->query($query) as $row) {
			$oauth_token = $row['oauth_token'];
		}
		return $oauth_token;
	}
}

