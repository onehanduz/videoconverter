<?php
// API_TOKEN
include './api.php';//metodlar
define('API_KEY',$TOKEN);
// INCLUDES
include './functions.php';//metodlar
include './values.php';//o'zgaruvchilar
include './keyboards.php';//keyboardlar
include './texts.php';//textlari
include './mysql.inc.php';//mysql
//BASIC CMD
if($txt=="/start"){
    sendmessage($cid,$t_start,$k_remove);
}

if($video){
    if($video_size<8192000){
        sendmessage($cid,$t_video,$k_video);
        $getfile = "https://api.telegram.org/bot$TOKEN/getFile?file_id=$video_id";
        move_uploaded_file($getfile,"./data/userfile/$cid-$video_name");
    }
}
           
?>
<h1s>Manzil : @onehanduz</h1>

