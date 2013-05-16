<?php
/**
 * @file
 * Take the user when they return from Twitter. Get access tokens.
 * Verify credentials and redirect to based on response from Twitter.
 */

/* Start session and load lib */
session_start();
require_once('./twitteroauth/twitteroauth.php');
require_once('./config.php');

/* If the oauth_token is old redirect to the connect page. */
if (isset($_REQUEST['oauth_token']) && $_SESSION['oauth_token'] !== $_REQUEST['oauth_token']) {
  $_SESSION['oauth_status'] = 'oldtoken';
  header('Location: ./clearsessions.php');
}

/* Create TwitteroAuth object with app key/secret and token key/secret from default phase */
$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $_SESSION['oauth_token'], $_SESSION['oauth_token_secret']);

/* Request access tokens from twitter */
$access_token = $connection->getAccessoken($_REQUEST['oauth_verifier']);

/* Save the access tokens. Normally these would be saved in a database for future use. */
//$_SESSION['access_token'] = $access_token;

require_once('./mysql/connection.php');

$dbconn = new MySQLConnection();
//新規ユーザーはDBに保存
if(empty($_SESSION['id'])){
	$dbconn->registerUserAuth($access_token['user_id'],$access_token['screen_name'],
		$access_token['oauth_token'],$access_token['oauth_token_secret']);
}else{
	//既存ユーザーでoauth_tokenが違う場合は更新
	if($dbconn->getOAuth_token != $_SESSION['oauth_token']){
		$dbconn->updateUserAuth($access_token['user_id'],$access_token['screen_name'],
		$access_token['oauth_token'],$access_token['oauth_token_secret']);
	}
}

//既存ユーザーはそのまま



//Sessionにログイン確認値を入れる

$_SESSION['id'] = $access_token['screen_name'];
$_SESSION['auth'] = 1;

//Sessionに格納されたOAuth token,secret tokenを削除
unset($_SESSION['oauth_token']);
unset($_SESSION['oauth_token_secret']);

header('Location : ./');
/*
echo "{$access_token['oauth_token']}<br>";
echo "{$access_token['oauth_token_secret']}<br>";
var_dump($access_token);
*/
/* Remove no longer needed request tokens */

//unset($_SESSION['oauth_token']);
//unset($_SESSION['oauth_token_secret']);

/* If HTTP response is 200 continue otherwise send to connect page to retry */
//if (200 == $connection->http_code) {
  /* The user has been verified and the access tokens can be saved for future use */
//  $_SESSION['status'] = 'verified';
//  header('Location: ./index.php');
//} else {
  /* Save HTTP status for error dialog on connnect page.*/
//  header('Location: ./clearsessions.php');
//}
