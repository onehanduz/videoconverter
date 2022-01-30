<?php
    $k_remove = json_encode([
        'remove_keyboard' => true,
        ]);

    $k_video = json_encode([
        'inline_keyboard' => [
            [['text'=>'HD 480p', 'callback_data'=>'640k']],
            [['text'=>'360p', 'callback_data'=>'512k']],
            [['text'=>'240p', 'callback_data'=>'256k']],
            [['text'=>'144p', 'callback_data'=>'128k']],
        ],
        ]);
?>
