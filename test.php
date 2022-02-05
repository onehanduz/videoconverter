<?php
ob_start();
define('API_KEY','5236312739:AAGJWh3Q_w5ixEoTU4GuJa83ieeQAgNwC3w');
//tokenni yozing
$admin = "141"; 
function del($nomi){
   array_map('unlink', glob("$nomi"));
   }
 
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}   
$update = json_decode(file_get_contents('php://input'));

$message = $update->message;
$mid = $message->message_id;
$chat_id = $message->chat->id;
$text1 = $message->text;
$fadmin = $message->from->id;
//bu yerni o'zgartirishingiz mumkin.
$sreply = $message->reply_to_message->text;  $sreplyd = $message->reply_to_message->document;
    $ent = $message->entities[0]->type;
    $reply_menu = json_encode([
           'resize_keyboard'=>false,
                'force_reply' => true,
                'selective' => true
            ]);
if($text1=="/start"){  
  $text = "👋 Salom botimizga xush kelibsiz‚
📡 Kamalimizga a'zo bo'ling: @PHP_OWN";
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>$text,
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        
        [
          ['text'=>'Kanal','url'=>'https://telegram.me/PHP_OWN']
        ],
        
      ]
    ])
  ]);
    bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>"https://t.me/UzxGroup/135",
'caption'=>"Fileni edit qilish uchun rasmni koring", 'reply_markup'=>json_encode([
      'inline_keyboard'=>[

       
[
          ['text'=>'Admin','url'=>'https://telegram.me/[**ADMINUSER**]']
        ]
      ]
    ])
]);
    
} 
$tx = $message->text;
$catid = $message->chat->id;
$cturi = $message->chat->type;
if($tx and ($cturi == "private")) {
bot('sendmessage',[
    'chat_id'=>$catid,
    'text'=>"💡 Bot Yaratishni Hohlaysizmi?
🤖 @GoPHPbot ga tashrif buyuring,
📡 Kanalimiz: @PHP_OWN",
    ]);
}
$doc=$message->document;
 $doc=$message->document;
$doc_id=$sreplyd->file_id;       
 if(isset($sreplyd)){
$url = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY.'/getFile?file_id='.$doc_id),true);
$path=$url['result']['file_path'];
$file = 'https://api.telegram.org/file/bot'.API_KEY.'/'.$path;
$type = strtolower(strrchr($file,'.')); 
$type=str_replace('.','',$type);
$okey = file_put_contents("$text1.$type",file_get_contents($file));
if($okey){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>" *✅ tayyor*  ",
'parse_mode'=>"markdown",
]);  bot('sendDocument',[
          'chat_id'=>$chat_id,          'document'=>new CURLFile("$text1.$type"),
          'thumb'=>$fileid,
      'caption'=>"By [*BOTNAME*]"
          ]);
del("$text1.$type");
}
}