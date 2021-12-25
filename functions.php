<?php
function put($fayl,$nima){
    file_put_contents("$fayl","$nima");
}
function get($fayl){
    $get = file_get_contents("$fayl");
    return $get;
}
function editmessage($cid,$mid,$text){
       return bot('editMessageText', [
            'chat_id' => $cid,
            'message_id' => $mid,
            'text' => $text,
           'parse_mode'=>"markdown",
            'disable_web_page_preview' => false,
        ]);
    }
function answer($cid, $text){
     return bot('answerCallbackQuery', [
        'callback_query_id' => $cid,
        'text' => $text,
        'show_alert'=>false,
    ]);
}
function sendmessage($cid,$text,$key){
    return bot('sendMessage',[
        'chat_id'=>$cid,
        'text'=>$text,
        'parse_mode'=>"markdown",
        'reply_markup'=>$key,
        ]); 
}
function sendphoto($cid,$photo,$cap,$key){
    return bot('sendPhoto',[  
        'chat_id'=>$cid,  
        'photo'=>$photo,  
        'caption'=>$cap, 
        'parse_mode'=>"html",
        'reply_markup'=>$key,  
        ]);  
}

function sendlocation($cid, $latitude, $longitude){
    return bot('sendLocation',[  
        'chat_id'=>$cid,  
        'latitude'=>$latitude,  
        'longitude'=>$longitude,
        ]);
    }

function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $rock = curl_init();
    curl_setopt($rock,CURLOPT_URL,$url);
    curl_setopt($rock,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($rock,CURLOPT_POSTFIELDS,$datas);
    $coder = curl_exec($rock);
    if(curl_error($rock)){
        var_dump(curl_error($rock));
    }else{
        return json_decode($coder);
    }
}
?>