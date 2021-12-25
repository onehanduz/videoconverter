<?php
// API_TOKEN
define('API_KEY','1225097122:AAH7XcANckwY13atkeVfXBDtcHijQ_nvzus');
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
Manzil : @onehanduz