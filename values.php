<?php

$update = json_decode(file_get_contents('php://input'));
//massage
$mess = $update->message;
$txt = $mess->text;
$cid = $mess->chat->id;
$video = $mess->video;
$video_type = $mess->video->mime_type;
$video_size = $mess->video->file_size;
$video_name = $mess->video->file_name;
$last_name = $mess->chat->last_name;
$first_name = $mess->chat->first_name;
$TC = $mess->chat->type;

//calback
$call = $update->callback_query;
$data = $call->data;


//other
$pic = "picture";
$path_video = "./data/userfile/$cid";

?>