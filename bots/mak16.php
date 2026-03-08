<?php#*wataw*

if($start=="non"){
$start="
- أھــلاً بك $fn  👋🏾.
- في بوت ڪشف الڪذب قم بـارسال جملة او توجيه من شخص ل اقوم بفضحها اذا كانت صحيحه ام كاذبه 📝.
";}

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$fn = $message->from->first_name;

if ($text == '/start') {
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,]);}
else{
$gg = ['جذب','صح','','فعلآ صحيحه 🙂😹','صحيحة','كذالك هم جذب 😹'];
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"الجمـلة ..💛 ($text) \n {$gg[array_rand($gg,1)]}

$txtfree",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);}
