<?php
// API_TOKEN
include 'api.php';//metodlar
define('API_KEY',$TOKEN);
// INCLUDES
include 'functions.php';//metodlar
include 'values.php';//o'zgaruvchilar
include 'keyboards.php';//keyboardlar
include 'texts.php';//textlari
include 'mysql.inc.php';//mysql

//BASIC CMD
if($txt=="/start"){
    sendmessage($cid,$t_start,$k_remove);
}
           
?>
<h1s>Manzil : @onehanduz</h1>