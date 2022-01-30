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
        $file_path = bot('getFile', [
            'file_id' => $video_id
        ])->file_path;
        sendmessage($cid,"$t_video $file_path",$k_video);
        move_uploaded_file("https://api.telegram.org/file/bot$TOKEN/$file_path", $video_name);
    }
}
           
?>
<h1s>Manzil : @onehanduz</h1>

