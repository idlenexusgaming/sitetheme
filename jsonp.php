<?php header('content-type: application/javascript; charset=utf-8'); ?>
<?php     defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php

require_once dirname(__FILE__).'/functions.jsconnect.php';

$user = array();

global $u;
if ($u->isLoggedIn()) {
	$u = new User();
	$uid = $u->getUserID();
	$ui = UserInfo::getByID($uid);
	$av = Loader::helper('concrete/avatar');

	$user['uniqueid'] = $uid;
	$user['name'] = $u->getUserName();
	$user['displayname'] = $ui->getUserDisplayname();
	$user['email'] = $ui->getUserEmail();
	if ($ui->hasAvatar()) {
		$user['photourl'] = $av->outputUserAvatar($ui);
        } elseif (strpos($av->outputUserAvatar($ui), 'gravatar') !== FALSE) {
		$gravatar = str_replace("\\", "",  $av->outputUserAvatar($ui));
		$re = '/\\/(?:\\/[\\w\\.\\-]+)+.s=\\d+&d=\\d+&r=g/';
		preg_match($re, $gravatar, $matches);
		$user['photourl'] = "http:" . $matches[0];
	} else {
		$user['photourl'] = '';
        }

}

$clientID = "1268093700";
$secret = "aaa41897d6e0d04f6d2aa8e2eb7d09b8";

// This should be true unless you are testing. 
// You can also use a hash name like md5, sha1 etc which must be the name as the connection settings in Vanilla.
$secure = 'sha1';
//$secure = false;
//ob_start();
//var_dump($user, $_GET, $clientID, $secret, $secure);
//file_put_contents('log.txt', ob_get_contents());
//ob_end_flush(); 
if(is_valid_callback($_GET['callback'])) {
        WriteJsConnect($user, $_GET, $clientID, $secret, $secure);
} else {
	header('status: 400 Bad Request', true, 400);
}
?>
