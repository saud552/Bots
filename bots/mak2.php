<?php#*wataw*

$sudo = "$admin";
$sudo1 = array("$sudo");
// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$username = $message->from->username;
$cap = $message->caption;
$message_id = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$banusers = file_get_contents('banuser.txt');$ebu = explode("\n",$banusers);
if(in_array($from_id,$ebu)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- انته محظور لا يمكنك ارسال رسائل ❎؛"]);}
if($text == "/start" ){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'parse_mode'=>'MarkDown',
'parse_mode'=>HTML,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"اصنع بوتك", 'url'=>"t.me/bxxbot"]],]])]);}
$nus = file_get_contents("nus.txt");
if($text == "/start" && $from_id == $sudo){
 bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- اهلا بك عزيزي 🔱؛ $name
- يمكنك استقبال الرسائل من الاعضاء ؛",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"", 'callback_data'=>"mem"],['text'=>"", 'callback_data'=>"senda"]],[['text'=>"", 'callback_data'=>"chst"]],[['text'=>"- الاوامر 📃؛", 'callback_data'=>"awmr"]],]])]);}
if($text == '/onu' && in_array($from_id,$sudo1) and $nus !== 'on' ){
file_put_contents('nus.txt','on');
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- تم تفعيل معرفه المرسل ✅؛",'reply_to_message_id'=>$messid,]);}
if($text == '/onu' && in_array($from_id,$sudo1) and $nus == 'on'){
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- معرفه المرسل مفعله ✅؛",'reply_to_message_id'=>$messid,]);}
if($text == '/cnu'&& in_array($from_id,$sudo1) and $nus == 'on'){
file_put_contents("nus.txt",'off');
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- تم تعطيل معرفه المرسل ❎؛",'reply_to_message_id'=>$messid,]);}
if($text == '/cnu' && in_array($from_id,$sudo1) and $nus == 'off'){
bot('sendMEssage',['chat_id'=>$chat_id,'text'=>"- معرفه المرسل معطله ❎؛",'reply_to_message_id'=>$messid,]);}
if($text && $text !== "/start" && !in_array($from_id,$sudo1) && (in_array($from_id,$ebu))==false){
if($nus == "on"){
bot('sendMessage',[ 'chat_id'=>$sudo, 'text'=>"- اسم المرسل ؛ $name
- معرف المرسل ؛ @$username
- ايدي المرسل ؛ $from_id"]);}
 bot('sendMessage',[
'chat_id'=>$sudo,
'text'=>"- الرساله ؛ $text",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لحظر الشخص ❇️ ؛", 'callback_data'=>"$from_id ba"]],[['text'=>"- لارسال رساله اليه 📮؛", 'callback_data'=>"$from_id se"]],]])]);
bot('sendMessage',[
 'chat_id'=>$chat_id,
'text'=>"- تم ارسال رسالتك ، بسريه دون معرفة هويتك ✅ ؛"]);}
elseif($message->photo && !in_array($from_id,$sudo1) && (in_array($from_id,$ebu))==false){
if($nus == "on"){
bot('sendMessage',[ 'chat_id'=>$sudo, 'text'=>"- اسم المرسل ؛ $name
- معرف المرسل ؛ @$username
- ايدي المرسل ؛ $from_id"]);}
 bot('sendPhoto',[
'chat_id'=>$sudo,
'photo'=>$message->photo[0]->file_id,
'caption'=>$cap,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لحظر الشخص ❇️ ؛", 'callback_data'=>"$from_id ba"]],[['text'=>"- لارسال رساله اليه 📮؛", 'callback_data'=>"$from_id se"]],]])]);
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"- تم ارسال رسالتك ، بسريه دون معرفة هويتك ✅ ؛"]);}
if($message->video && !in_array($from_id,$sudo1) && (in_array($from_id,$ebu))==false){
if($nus == "on"){
bot('sendMessage',[ 'chat_id'=>$sudo, 'text'=>"- اسم المرسل ؛ $name
- معرف المرسل ؛ @$username
- ايدي المرسل ؛ $from_id"]);}
 bot('sendVideo',[
'chat_id'=>$sudo,
'video'=>$message->video->file_id,
'caption'=>$cap,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لحظر الشخص ❇️ ؛", 'callback_data'=>"$from_id ba"]],[['text'=>"- لارسال رساله اليه 📮؛", 'callback_data'=>"$from_id se"]],]])]);
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"- تم ارسال رسالتك ، بسريه دون معرفة هويتك ✅ ؛"]);}
if($message->document && !in_array($from_id,$sudo1) && (in_array($from_id,$ebu))==false){
if($nus == "on"){
bot('sendMessage',[ 'chat_id'=>$sudo, 'text'=>"- اسم المرسل ؛ $name
- معرف المرسل ؛ @$username
- ايدي المرسل ؛ $from_id"]);}
 bot('senddocument',[
'chat_id'=>$sudo,'document'=>$message->document->file_id,'caption'=>$cap,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لحظر الشخص ❇️ ؛", 'callback_data'=>"$from_id ba"]],[['text'=>"- لارسال رساله اليه 📮؛", 'callback_data'=>"$from_id se"]],]])]);
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"- تم ارسال رسالتك ، بسريه دون معرفة هويتك ✅ ؛"]);}
if($message->voice && !in_array($from_id,$sudo1) && (in_array($from_id,$ebu))==false){
if($nus == "on"){
bot('sendMessage',[ 'chat_id'=>$sudo, 'text'=>"- اسم المرسل ؛ $name
- معرف المرسل ؛ @$username
- ايدي المرسل ؛ $from_id"]);}
 bot('sendvoice',[
'chat_id'=>$sudo,
'voice'=>$message->voice->file_id,
'caption'=>$cap,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لحظر الشخص ❇️ ؛", 'callback_data'=>"$from_id ba"]],[['text'=>"- لارسال رساله اليه 📮؛", 'callback_data'=>"$from_id se"]],]])]);
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"- تم ارسال رسالتك ، بسريه دون معرفة هويتك ✅ ؛"]);}
if($message->audio &&!in_array($from_id,$sudo) && (in_array($from_id,$ebu))==false){
if($nus == "on"){
bot('sendMessage',[ 'chat_id'=>$sudo, 'text'=>"- اسم المرسل ؛ $name
- معرف المرسل ؛ @$username
- ايدي المرسل ؛ $from_id"]);}
 bot('sendaudio',[
'chat_id'=>$sudo,
'audio'=>$message->audio->file_id,
'caption'=>$cap,
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لحظر الشخص ❇️ ؛", 'callback_data'=>"$from_id ba"]],[['text'=>"- لارسال رساله اليه 📮؛", 'callback_data'=>"$from_id se"]],]])]);
bot('sendMessage',[
'chat_id'=>$chat_id,
 'text'=>"- تم ارسال رسالتك ، بسريه دون معرفة هويتك ✅ ؛"]);}
if($message->sticker && !in_array($from_id,$sudo1) && (in_array($from_id,$ebu))==false){
if($nus == "on"){
bot('sendMessage',[ 'chat_id'=>$sudo, 'text'=>"- اسم المرسل ؛ $name
- معرف المرسل ؛ @$username
- ايدي المرسل ؛ $from_id"]);}
 bot('sendsticker',[
'chat_id'=>$sudo,'sticker'=>$message->sticker->file_id,'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لحظر الشخص ❇️ ؛", 'callback_data'=>"$from_id ba"]],[['text'=>"- لارسال رساله اليه 📮؛", 'callback_data'=>"$from_id se"]],]])]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"- تم ارسال رسالتك ، بسريه دون معرفة هويتك ✅ ؛"]);}
$user = file_get_contents('users.txt');$meid = explode("\n",$user);$mc = count($meid) -1;
$data = $update->callback_query->data;
$panusg = file_get_contents('banuser.txt'); $panus = explode("\n",$panusg);
if($data){
if(preg_match('/( se)/',$data)){
$ex = explode(" se", $data);
file_put_contents("sendto.txt","$ex[0]");
file_put_contents("step.txt","on");
bot('sendMessage', [
'chat_id'=>$chat_id2,
'text'=>"- ارسل الرساله التي تريد ارسالها 📮؛"
]);}
if(preg_match('/( ba)/',$data)){
$ex = explode(" ba", $data);
if(!in_array($data,$panus)){
file_put_contents("banuser.txt","
$ex[0]
",FILE_APPEND);}
bot('sendmessage', [
'chat_id'=>$chat_id2,
'text'=>"- تم حظر الشخص ✅؛",'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- لالغاء حظره 🔰؛", 'callback_data'=>"$ex[0] ub"]],]])]);
bot('sendMessage',[
'chat_id'=>$data,
'text'=>'- تم حضرك من البوت ❎؛']);}

if(preg_match('/( ub)/',$data)){
$ex = explode(" ub", $data);
$open = file_get_contents("banuser.txt");
$ste = str_replace($ex[0], '', $open);
file_put_contents("banuser.txt", $ste);
bot('editMessageText', [
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- تم الغاء حظر الشخص ✅؛",
]);
bot('sendMessage',[
'chat_id'=>$ex[0],
'text'=>'- تم ازاله الحظر عنك ✅ ؛']);
}
if(preg_match('/(mem)/',$data)){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- عدد الاعضاء هوه ؛ $mc",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- رجوع ◀️؛", 'callback_data'=>"back"]],]])]);} 
if(preg_match('/(senda)/',$data)){
file_put_contents("bc.txt",'sendall');
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- يمكنك ارسال الكليشه 📮؛",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- رجوع ◀️؛", 'callback_data'=>"back"]],]])]);}
if(preg_match('/(chst)/',$data)){
file_put_contents("steps.txt",'on');
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- يمكنك ارسال الكليشه 📮؛",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- رجوع ◀️؛", 'callback_data'=>"back"]],]])]);}
if(preg_match('/(awmr)/',$data)){
bot('editMessagetext',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- يمكنك تفعيل وتعطيل معرفه المرسل 🔽؛
- /cnu ; لتعطيل ،
- /onu ; لتفعيل ،",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"- رجوع ◀️؛", 'callback_data'=>"back"]],]])]);}
if(preg_match('/(back)/',$data)){
file_put_contents("steps.txt",'off');
file_put_contents("bc.txt",'off');
bot('editMessagetext',['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"- اهلا بك عزيزي 🔱؛ $name
- يمكنك استقبال الرسائل من الاعضاء ؛",
'reply_markup'=>json_encode(['inline_keyboard'=>[[['text'=>"", 'callback_data'=>"mem"],['text'=>"", 'callback_data'=>"senda"]],[['text'=>"", 'callback_data'=>"chst"]],[['text'=>"- الاوامر 📃؛", 'callback_data'=>"awmr"]],]])]);}}
$stst = file_get_contents("steps.txt");
if($stst == "on" && in_array($from_id, $sudo1)){
file_put_contents("start.txt",$text);
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"- تم حفظ كليشه الـ/start ✅؛"]);
file_put_contents("steps.txt",'off');}

$bcpv = file_get_contents("bc.txt");
if($bcpv == "sendall" && in_array($from_id, $sudo1)){
for($i=0;$i<count($meid); $i++){
bot('sendMessage', [
'chat_id'=>$meid[$i],
'text'=>$text]);}
 bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"- تم ارسال الرساله للاعضاء ✅؛"]); file_put_contents("bc.txt",'off');}
$step = file_get_contents("step.txt");
$stsend = file_get_contents("sendto.txt");
if($step == 'on' && $sudo){
if($text && $sudo){
bot('sendMessage',['chat_id'=>$stsend,
'text'=>$text]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>" تم ارسال الرساله الى الشخص ✅؛"]);
file_put_contents("step.txt","of");}
if($message->photo && $sudo){
bot('sendPhoto',['chat_id'=>$stsend,
'photo'=>$message->photo[0]->file_id,
'caption'=>$cap,]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>" تم ارسال الرساله الى الشخص ✅؛"]);
file_put_contents("step.txt","of");}
if($message->video && $sudo){
bot('sendVideo',['chat_id'=>$stsend,'video'=>$message->video->file_id,'caption'=>$cap,]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>" تم ارسال الرساله الى الشخص ✅؛"]);
file_put_contents("step.txt","of");}
if($message->document && $sudo){
bot('senddocument',[
'chat_id'=>$stsend,'document'=>$message->document->file_id,'caption'=>$cap]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>" تم ارسال الرساله الى الشخص ✅؛"]);
file_put_contents("step.txt","of");}
if($message->voice && $sudo){
bot('sendvoice',['chat_id'=>$stsend,'voice'=>$message->voice->file_id,'caption'=>$cap,]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>" تم ارسال الرساله الى الشخص ✅؛"]);
file_put_contents("step.txt","of");}
if($message->audio && $sudo){
bot('sendaudio',['chat_id'=>$stsend,'audio'=>$message->audio->file_id,'caption'=>$cap,]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>" تم ارسال الرساله الى الشخص ✅؛"]);
file_put_contents("step.txt","of");}
if($message->sticker && $sudo){
bot('sendsticker',[
'chat_id'=>$stsend,'sticker'=>$message->sticker->file_id,]);
bot('sendMessage',['chat_id'=>$chat_id,'text'=>" تم ارسال الرساله الى الشخص ✅؛"]);
file_put_contents("step.txt","of");}}

