<?php

//calback
$update = json_decode(file_get_contents('php://input'));
$mess = $update->message;
$txt = $mess->text;
$cid = $mess->chat->id;
$name = $mess->chat->last_name;
$first = $mess->chat->first_name;
$pic = "picture";
$TC = $mess->chat->type;



?>