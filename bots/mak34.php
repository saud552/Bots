<?php#*wataw*

if($start=="non"){
$start="
أهلاً بك - [$name]
📥  يمكنك التحميل من تيك توك.
- تحميل الفيديوهات بدون علامه مائية.
- يتم تحميل الفيديوهات بسرعه عاليه.
- كل ما عليك هوَ أرسال رابط التحميل.
";}

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$user_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username;
$name   = $message->from->first_name;
$from_id = $message->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$TokenInfo = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe"));
$UserBot = $TokenInfo->result->username;

if($text == '/start'){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
'disable_web_page_preview'=>true,]);}

if($text != "/start" and $text != null){
if(strstr($text,"tiktok.com")){
$api = json_decode(file_get_contents("https://amer.cf/api/tk.php?url=".$text));
$desc = $api->desc;
$author = $api->author;
$author_name = $api->author_name;
bot('sendvideo',['chat_id'=>$chat_id,
'video'=>$api->links[0]->a,
'caption'=>"▫️*NaMe :* $author_name\n▫️*UseR :* $author\n▫️*Description :*\n*$desc*\n\n▫️*User Bot :* @".$UserBot." ✅.\n—————",
'parse_mode'=>"markdown",
'reply_to_message_id'=>$message->message_id,]);}}

