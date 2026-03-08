<?php#*wataw*

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$name = $update->message->from->first_name;
$username = $update->message->from->username;
$from_id = $update->message->from->id;
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$from_id = $message->from->id;
$first_name = $message->from->first_name;
$chatid = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;

if($text == '/start'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
👋🏻 اهلا بك عزيزي @$user
◽ في بوت الخاص بالانستكرام ♥️🙈!
◾ يوجد في البوت كل ماتحتاجه للانستكرام..
◽ اختر القسم امامك وسوف اظهر لك ماتريده

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري 📄.",'callback_data'=>"sa1"]],
[['text'=>'- افتارات 💕.','callback_data'=>"HH1"],['text'=>'- هايلات 💗.','callback_data'=>"q1"]],
[['text'=>"- بايوات 🖤.",'callback_data'=>"f1"]],
]])]);}

if($data == "sa1"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- من صرتلڪ غنوۿ حلوۿ استحرمتنـي . .", "type"=>"photo", "media" => "https://0i.is/dyQG"],
[ "type"=>"photo", "media" => "https://0i.is/Mxc3"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa2"]],
]])]);}

if($data == "sa2"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"سلاماً لـ آنعدام رغبتي بالتقرب من أحد 💛💛!", "type"=>"photo", "media" => "https://0i.is/gmFR"],
[ "type"=>"photo", "media" => "https://0i.is/5nGQ"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa3"]],
]])]);}

if($data == "sa3"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"والرسالة الما تجي بموعدها ما تسوه💛💛!", "type"=>"photo", "media" => "https://0i.is/y7Xm"],
[ "type"=>"photo", "media" => "https://0i.is/n0Xm"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa4"]],
]])]);}

if($data == "sa4"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- عَليهم مَ يحِن #گلبي بـ؏ـد ﻼ 🤎.", "type"=>"photo", "media" => "https://0i.is/1NNF"],
[ "type"=>"photo", "media" => "https://0i.is/ZKu3"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa5"]],
]])]);}

if($data == "sa5"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- ﻼ تنسَحب ، #تَجاوز 🤎.", "type"=>"photo", "media" => "https://0i.is/e92s"],
[ "type"=>"photo", "media" => "https://0i.is/V7ie"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa6"]],
]])]);}

if($data == "sa6"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- ﭑللهُم ﭑلـراحهُۃ ‏ﻡـن ضيقهُۃ ﭑلـنفس 🌿.", "type"=>"photo", "media" => "https://0i.is/Wf8u"],
[ "type"=>"photo", "media" => "https://0i.is/Ethf"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa7"]],
]])]);}

if($data == "sa7"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- محدً يِعوّض مكاني 🌿.", "type"=>"photo", "media" => "https://0i.is/4DYz"],
[ "type"=>"photo", "media" => "https://0i.is/oG90"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa8"]],
]])]);}

if($data == "sa8"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- ﭑنتَ أجمل تفاصيليہٰ العيد ♥️.", "type"=>"photo", "media" => "https://0i.is/fQIh"],
[ "type"=>"photo", "media" => "https://0i.is/YaJV"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa9"]],
]])]);}

if($data == "sa9"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"كُل عام و حُبي الك يزَيـد اضعـاف م ينَقص ♥️.", "type"=>"photo", "media" => "https://0i.is/foIi"],
[ "type"=>"photo", "media" => "https://0i.is/gYs1"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa10"]],
]])]);}

if($data == "sa10"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"‏مبسمك ضيّع كُل الحكيّ والأمُنياتَ 🤍.", "type"=>"photo", "media" => "https://e.top4top.io/p_1656im1ph1.jpg"],
[ "type"=>"photo", "media" => "https://d.top4top.io/p_16568cetn1.jpg"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa11"]],
]])]);}

if($data == "sa11"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"‏وَيـاحلو قلبّـي وانتَ فِيه 🤍.", "type"=>"photo", "media" => "https://0i.is/VSYd"],
[ "type"=>"photo", "media" => "https://0i.is/U4Wq"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa12"]],
]])]);}

if($data == "sa12"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"تـمتلڪينَ وجـهًـا خلق ليـبـتسمَ 💕⌜ .", "type"=>"photo", "media" => "https://0i.is/iVLF"],
[ "type"=>"photo", "media" => "https://0i.is/GxIr"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa13"]],
]])]);}

if($data == "sa13"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"• سيذۿبون ڪمٱ ٱتـــۉا 🤍.", "type"=>"photo", "media" => "https://e.top4top.io/p_1656k7v4f1.jpg"],
[ "type"=>"photo", "media" => "https://d.top4top.io/p_1656z9ld11.jpg"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa14"]],
]])]);}

if($data == "sa14"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"‏لــمُ تـ؏ــد ﭑالاماڪن ڪافيهۃ للبقاء ✉️.", "type"=>"photo", "media" => "https://0i.is/pPbf"],
[ "type"=>"photo", "media" => "https://0i.is/XVYE"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa15"]],
]])]);}

if($data == "sa15"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"و ـلاا شـჂ̤ءُ ؏ٰـلى ﭑالاطلاق ✉️ .", "type"=>"photo", "media" => "https://0i.is/VPTF"],
[ "type"=>"photo", "media" => "https://0i.is/EyP9"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa16"]],
]])]);}

if($data == "sa16"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- وجُـدت اڪُتماليہَ بـك 🤍.", "type"=>"photo", "media" => "https://0i.is/JRoX"],
[ "type"=>"photo", "media" => "https://0i.is/GT8j"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa17"]],
]])]);}

if($data == "sa17"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"ﻼ تـؤجل بڪاؤك، سَتغرق ﻼحقـاً 🤎.", "type"=>"photo", "media" => "https://0i.is/A419"],
[ "type"=>"photo", "media" => "https://0i.is/cjXa"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa18"]],
]])]);}

if($data == "sa18"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"الخطـر في حُزني انۿ بدون سبب🤎.", "type"=>"photo", "media" => "https://0i.is/XQUb"],
[ "type"=>"photo", "media" => "https://0i.is/OTbL"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa19"]],
]])]);}

if($data == "sa19"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"هـدوء بضجۃ داخَليۃ 📌.", "type"=>"photo", "media" => "https://k.top4top.io/p_1656kr2qy1.jpg"],
[ "type"=>"photo", "media" => "https://j.top4top.io/p_1656z5vps1.jpg"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa20"]],
]])]);}

if($data == "sa20"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"ﺂبحَث احيانـاً ؏ـن نفسـʊ̤ 📌.", "type"=>"photo", "media" => "https://0i.is/edLZ"],
[ "type"=>"photo", "media" => "https://0i.is/D218"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa21"]],
]])]);}

if($data == "sa21"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"الوحدة اهون من الكذب 🤍.", "type"=>"photo", "media" => "https://0i.is/EzUG"],
[ "type"=>"photo", "media" => "https://0i.is/LL3o"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa22"]],
]])]);}

if($data == "sa22"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"ايدك لإيدي وكلبك الـي 🤍.", "type"=>"photo", "media" => "https://0i.is/9DKf"],
[ "type"=>"photo", "media" => "https://0i.is/TdQJ"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa23"]],
]])]);}

if($data == "sa23"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- ڪأني ﭑانتظر رسالهُۃ ‏ﻡـن ‏ﻡـيتُ ❗️ .", "type"=>"photo", "media" => "https://0i.is/mlRR"],
[ "type"=>"photo", "media" => "https://0i.is/2h1U"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa24"]],
]])]);}

if($data == "sa24"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"ـلا هدوء في هـدوُء ڪما تظن ❗️ .", "type"=>"photo", "media" => "https://0i.is/NL1A"],
[ "type"=>"photo", "media" => "https://0i.is/QLg5"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa25"]],
]])]);}

if($data == "sa25"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- حسنها يشبۿ الورد ونور الشمس ☁️.", "type"=>"photo", "media" => "https://0i.is/2KfY"],
[ "type"=>"photo", "media" => "https://0i.is/4SCm"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa26"]],
]])]);}

if($data == "sa26"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"- ڪانت جمَيلة فــوق اللغـهَ ☁️.", "type"=>"photo", "media" => "https://0i.is/QyhG"],
[ "type"=>"photo", "media" => "https://0i.is/RlCs"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa27"]],
]])]);}

if($data == "sa27"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"ـلأجلَ نفسكَ ڪُن ჺـزيز نفس 🌵.", "type"=>"photo", "media" => "https://0i.is/dwhv"],
[ "type"=>"photo", "media" => "https://0i.is/UNER"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa28"]],
]])]);}

if($data == "sa28"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"ﭑنا ـلا ﭑهجُر ﭑפـداً ﭑلا وقد قاتلتُ البقاء 🌵.", "type"=>"photo", "media" => "https://0i.is/anzM"],
[ "type"=>"photo", "media" => "https://0i.is/Ilu3"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa29"]],
]])]);}

if($data == "sa29"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"حديثُك ورد ، يشعرني بالسلام 🤍.", "type"=>"photo", "media" => "https://0i.is/wmBN"],
[ "type"=>"photo", "media" => "https://0i.is/o4Tq"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa30"]],
]])]);}

if($data == "sa30"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"‏الله يَـديمّك ليَ سنيـن مَـآ تَـنعد 🤍.", "type"=>"photo", "media" => "https://0i.is/6H8F"],
[ "type"=>"photo", "media" => "https://0i.is/swj6"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك ستوري عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ستوري جديدة",'callback_data'=>"sa1"]],
]])]);}

if($data == "HH1"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/wXh4"],
[ "type"=>"photo", "media" => "https://0i.is/3CpR"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH2"]],
]])]);}

if($data == "HH2"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/r7d1"],
[ "type"=>"photo", "media" => "https://0i.is/EYse"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH3"]],
]])]);}

if($data == "HH3"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/eUq3"],
[ "type"=>"photo", "media" => "https://0i.is/PeiU"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH4"]],
]])]);}

if($data == "HH4"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/7lSB"],
[ "type"=>"photo", "media" => "https://0i.is/6MGw"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH5"]],
]])]);}

if($data == "HH5"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/kZ0U"],
[ "type"=>"photo", "media" => "https://0i.is/l7gp"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH6"]],
]])]);}

if($data == "HH6"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/EwUJ"],
[ "type"=>"photo", "media" => "https://0i.is/eg0G"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH7"]],
]])]);}

if($data == "HH7"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/eQtM"],
[ "type"=>"photo", "media" => "https://0i.is/hPhE"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH8"]],
]])]);}

if($data == "HH8"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/is9g"],
[ "type"=>"photo", "media" => "https://0i.is/Vakw"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH9"]],
]])]);}

if($data == "HH9"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/sZbi"],
[ "type"=>"photo", "media" => "https://0i.is/WU14"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH10"]],
]])]);}

if($data == "HH10"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/dbZU"],
[ "type"=>"photo", "media" => "https://0i.is/vEHN"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH11"]],
]])]);}

if($data == "HH11"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/L8j7"],
[ "type"=>"photo", "media" => "https://0i.is/6da4"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH12"]],
]])]);}

if($data == "HH12"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/uaVc"],
[ "type"=>"photo", "media" => "https://0i.is/mMVD"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH13"]],
]])]);}

if($data == "HH13"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/9oq5"],
[ "type"=>"photo", "media" => "https://0i.is/fNwa"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH14"]],
]])]);}

if($data == "HH14"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/dLJh"],
[ "type"=>"photo", "media" => "https://0i.is/8BdG"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH15"]],
]])]);}

if($data == "HH15"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/hXy3"],
[ "type"=>"photo", "media" => "https://0i.is/VZUR"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH16"]],
]])]);}

if($data == "HH16"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/RvgF"],
[ "type"=>"photo", "media" => "https://0i.is/gUAv"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH17"]],
]])]);}

if($data == "HH17"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/7Qwt"],
[ "type"=>"photo", "media" => "https://0i.is/8xvl"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH18"]],
]])]);}

if($data == "HH18"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/g0jL"],
[ "type"=>"photo", "media" => "https://0i.is/ytSu"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH19"]],
]])]);}

if($data == "HH19"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/avga"],
[ "type"=>"photo", "media" => "https://0i.is/6R3O"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH20"]],
]])]);}

if($data == "HH20"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/94Fg"],
[ "type"=>"photo", "media" => "https://0i.is/Upfa"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH21"]],
]])]);}

if($data == "HH21"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/HRkt"],
[ "type"=>"photo", "media" => "https://0i.is/V54V"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH22"]],
]])]);}

if($data == "HH22"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/NITT"],
[ "type"=>"photo", "media" => "https://0i.is/koHU"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH23"]],
]])]);}

if($data == "HH23"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/13RS"],
[ "type"=>"photo", "media" => "https://0i.is/lH6p"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH24"]],
]])]);}

if($data == "HH24"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/C5MU"],
[ "type"=>"photo", "media" => "https://0i.is/B06c"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH25"]],
]])]);}

if($data == "HH25"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/pP3V"],
[ "type"=>"photo", "media" => "https://0i.is/dFsD"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH26"]],
]])]);}

if($data == "HH26"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/CPT8"],
[ "type"=>"photo", "media" => "https://0i.is/HUUG"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH27"]],
]])]);}

if($data == "HH27"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/tw9J"],
[ "type"=>"photo", "media" => "https://0i.is/0Nhp"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH28"]],
]])]);}

if($data == "HH28"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/7DeX"],
[ "type"=>"photo", "media" => "https://0i.is/BWAY"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH29"]],
]])]);}

if($data == "HH29"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://0i.is/u1Go"],
[ "type"=>"photo", "media" => "https://l.top4top.io/p_1657vfq551.jpg"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH30"]],
]])]);}

if($data == "HH30"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
[ "type"=>"photo", "media" => "https://e.top4top.io/p_16575ar6f1.jpg"],
[ "type"=>"photo", "media" => "https://c.top4top.io/p_1657vlksy1.jpg"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك افتار عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- افتارات جديدة..",'callback_data'=>"HH1"]],
]])]);}

if($data == "q1"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/t3H8"],
[ "type"=>"photo", "media" => "https://0i.is/tDUR"],
[ "type"=>"photo", "media" => "https://0i.is/90hi"],
[ "type"=>"photo", "media" => "https://0i.is/Gdy5"],
[ "type"=>"photo", "media" => "https://0i.is/dOlb"],
[ "type"=>"photo", "media" => "https://0i.is/fdhM"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q2"]],
]])]);}

if($data == "q2"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/KwDc"],
[ "type"=>"photo", "media" => "https://0i.is/e4Xe"],
[ "type"=>"photo", "media" => "https://0i.is/hjPq"],
[ "type"=>"photo", "media" => "https://0i.is/TNGM"],
[ "type"=>"photo", "media" => "https://0i.is/lPQD"],
[ "type"=>"photo", "media" => "https://0i.is/Y9eQ"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q3"]],
]])]);}

if($data == "q3"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/1W41"],
[ "type"=>"photo", "media" => "https://0i.is/VW1Y"],
[ "type"=>"photo", "media" => "https://0i.is/2KUZ"],
[ "type"=>"photo", "media" => "https://0i.is/LoSD"],
[ "type"=>"photo", "media" => "https://0i.is/rYdC"],
[ "type"=>"photo", "media" => "https://0i.is/XTuy"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q4"]],
]])]);}

if($data == "q4"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/64AQ"],
[ "type"=>"photo", "media" => "https://0i.is/l7nq"],
[ "type"=>"photo", "media" => "https://0i.is/rFR6"],
[ "type"=>"photo", "media" => "https://0i.is/9ifY"],
[ "type"=>"photo", "media" => "https://0i.is/fw0j"],
[ "type"=>"photo", "media" => "https://0i.is/4fvO"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q5"]],
]])]);}

if($data == "q5"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/ay8t"],
[ "type"=>"photo", "media" => "https://0i.is/OGwk"],
[ "type"=>"photo", "media" => "https://0i.is/3ioj"],
[ "type"=>"photo", "media" => "https://0i.is/kNzb"],
[ "type"=>"photo", "media" => "https://0i.is/IXxI"],
[ "type"=>"photo", "media" => "https://0i.is/vz8S"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q6"]],
]])]);}

if($data == "q6"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/56Et"],
[ "type"=>"photo", "media" => "https://0i.is/r0rD"],
[ "type"=>"photo", "media" => "https://0i.is/ArC0"],
[ "type"=>"photo", "media" => "https://0i.is/SXk9"],
[ "type"=>"photo", "media" => "https://0i.is/ob0C"],
[ "type"=>"photo", "media" => "https://0i.is/nDzh"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q7"]],
]])]);}

if($data == "q7"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/NpD9"],
[ "type"=>"photo", "media" => "https://0i.is/ZNDG"],
[ "type"=>"photo", "media" => "https://0i.is/oAZl"],
[ "type"=>"photo", "media" => "https://0i.is/I5TR"],
[ "type"=>"photo", "media" => "https://0i.is/hFJD"],
[ "type"=>"photo", "media" => "https://0i.is/Rz7G"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q8"]],
]])]);}

if($data == "q8"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/NTVH"],
[ "type"=>"photo", "media" => "https://0i.is/Uyey"],
[ "type"=>"photo", "media" => "https://0i.is/TsE8"],
[ "type"=>"photo", "media" => "https://0i.is/O5J5"],
[ "type"=>"photo", "media" => "https://0i.is/K7Kl"],
[ "type"=>"photo", "media" => "https://0i.is/Lehq"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q9"]],
]])]);}

if($data == "q9"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/lWW2"],
[ "type"=>"photo", "media" => "https://0i.is/aq0I"],
[ "type"=>"photo", "media" => "https://0i.is/hIO6"],
[ "type"=>"photo", "media" => "https://0i.is/j9xK"],
[ "type"=>"photo", "media" => "https://0i.is/JuR3"],
[ "type"=>"photo", "media" => "https://0i.is/Pz2j"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q10"]],
]])]);}

if($data == "q10"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/Z1Lv"],
[ "type"=>"photo", "media" => "https://0i.is/r6e2"],
[ "type"=>"photo", "media" => "https://0i.is/xpS5"],
[ "type"=>"photo", "media" => "https://0i.is/HvUf"],
[ "type"=>"photo", "media" => "https://0i.is/GWsh"],
[ "type"=>"photo", "media" => "https://0i.is/ESxB"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q11"]],
]])]);}

if($data == "q11"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/WPkd"],
[ "type"=>"photo", "media" => "https://0i.is/Wqj4"],
[ "type"=>"photo", "media" => "https://0i.is/75ov"],
[ "type"=>"photo", "media" => "https://0i.is/LKai"],
[ "type"=>"photo", "media" => "https://0i.is/hatW"],
[ "type"=>"photo", "media" => "https://0i.is/KOrI"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q12"]],
]])]);}

if($data == "q12"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/tsA3"],
[ "type"=>"photo", "media" => "https://0i.is/lbnS"],
[ "type"=>"photo", "media" => "https://0i.is/IMnr"],
[ "type"=>"photo", "media" => "https://0i.is/vsUL"],
[ "type"=>"photo", "media" => "https://0i.is/gKdO"],
[ "type"=>"photo", "media" => "https://0i.is/p0NR"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q13"]],
]])]);}

if($data == "q13"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/ik0Q"],
[ "type"=>"photo", "media" => "https://0i.is/rTE0"],
[ "type"=>"photo", "media" => "https://0i.is/QwtD"],
[ "type"=>"photo", "media" => "https://0i.is/WBBY"],
[ "type"=>"photo", "media" => "https://0i.is/4jGr"],
[ "type"=>"photo", "media" => "https://0i.is/gKf0"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q14"]],
]])]);}

if($data == "q14"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/Bh5V"],
[ "type"=>"photo", "media" => "https://0i.is/ZWjk"],
[ "type"=>"photo", "media" => "https://0i.is/GeMA"],
[ "type"=>"photo", "media" => "https://0i.is/xSMA"],
[ "type"=>"photo", "media" => "https://0i.is/OipS"],
[ "type"=>"photo", "media" => "https://0i.is/Iiwq"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q15"]],
]])]);}

if($data == "q15"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/7MIi"],
[ "type"=>"photo", "media" => "https://0i.is/zqM0"],
[ "type"=>"photo", "media" => "https://0i.is/QA30"],
[ "type"=>"photo", "media" => "https://0i.is/Dgvu"],
[ "type"=>"photo", "media" => "https://0i.is/C0FU"],
[ "type"=>"photo", "media" => "https://0i.is/X1Nd"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q16"]],
]])]);}

if($data == "q16"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/MnrK"],
[ "type"=>"photo", "media" => "https://0i.is/ePwQ"],
[ "type"=>"photo", "media" => "https://0i.is/x6Qj"],
[ "type"=>"photo", "media" => "https://0i.is/uXKi"],
[ "type"=>"photo", "media" => "https://0i.is/BlPh"],
[ "type"=>"photo", "media" => "https://0i.is/XHXh"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q17"]],
]])]);}

if($data == "q17"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/XM2I"],
[ "type"=>"photo", "media" => "https://0i.is/xB3o"],
[ "type"=>"photo", "media" => "https://0i.is/hdGD"],
[ "type"=>"photo", "media" => "https://0i.is/MPN4"],
[ "type"=>"photo", "media" => "https://0i.is/8zYu"],
[ "type"=>"photo", "media" => "https://0i.is/UCEO"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q18"]],
]])]);}

if($data == "q18"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/bYZI"],
[ "type"=>"photo", "media" => "https://0i.is/lOHE"],
[ "type"=>"photo", "media" => "https://0i.is/fUZF"],
[ "type"=>"photo", "media" => "https://0i.is/zrDg"],
[ "type"=>"photo", "media" => "https://0i.is/r6oA"],
[ "type"=>"photo", "media" => "https://0i.is/89or"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q19"]],
]])]);}

if($data == "q19"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/jCMn"],
[ "type"=>"photo", "media" => "https://0i.is/i0Rl"],
[ "type"=>"photo", "media" => "https://0i.is/LnCe"],
[ "type"=>"photo", "media" => "https://0i.is/nWyt"],
[ "type"=>"photo", "media" => "https://0i.is/RJk7"],
[ "type"=>"photo", "media" => "https://0i.is/HQri"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q20"]],
]])]);}

if($data == "q20"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/Kg7q"],
[ "type"=>"photo", "media" => "https://0i.is/Tq0l"],
[ "type"=>"photo", "media" => "https://0i.is/FlPr"],
[ "type"=>"photo", "media" => "https://0i.is/3mE7"],
[ "type"=>"photo", "media" => "https://0i.is/KWw2"],
[ "type"=>"photo", "media" => "https://0i.is/qpMD"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q21"]],
]])]);}

if($data == "q21"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/3Cza"],
[ "type"=>"photo", "media" => "https://0i.is/EfQm"],
[ "type"=>"photo", "media" => "https://0i.is/eCLo"],
[ "type"=>"photo", "media" => "https://0i.is/oi9o"],
[ "type"=>"photo", "media" => "https://0i.is/3Qz8"],
[ "type"=>"photo", "media" => "https://0i.is/GZ2c"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q22"]],
]])]);}

if($data == "q22"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/XbwD"],
[ "type"=>"photo", "media" => "https://0i.is/rnim"],
[ "type"=>"photo", "media" => "https://0i.is/tX0K"],
[ "type"=>"photo", "media" => "https://0i.is/FA8i"],
[ "type"=>"photo", "media" => "https://0i.is/Q1Ox"],
[ "type"=>"photo", "media" => "https://0i.is/ojND"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q23"]],
]])]);}

if($data == "q23"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/W5gZ"],
[ "type"=>"photo", "media" => "https://0i.is/KfDo"],
[ "type"=>"photo", "media" => "https://0i.is/RefS"],
[ "type"=>"photo", "media" => "https://0i.is/JKoQ"],
[ "type"=>"photo", "media" => "https://0i.is/RqEO"],
[ "type"=>"photo", "media" => "https://0i.is/Ppns"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q24"]],
]])]);}

if($data == "q24"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/Vvf5"],
[ "type"=>"photo", "media" => "https://0i.is/2ZJk"],
[ "type"=>"photo", "media" => "https://0i.is/eycf"],
[ "type"=>"photo", "media" => "https://0i.is/L8Lp"],
[ "type"=>"photo", "media" => "https://0i.is/8bK9"],
[ "type"=>"photo", "media" => "https://0i.is/UQSg"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q25"]],
]])]);}

if($data == "q25"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/AZ1H"],
[ "type"=>"photo", "media" => "https://0i.is/I8QJ"],
[ "type"=>"photo", "media" => "https://0i.is/xSKp"],
[ "type"=>"photo", "media" => "https://0i.is/hoHw"],
[ "type"=>"photo", "media" => "https://0i.is/qfaG"],
[ "type"=>"photo", "media" => "https://0i.is/qgPU"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q26"]],
]])]);}

if($data == "q26"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/hwf6"],
[ "type"=>"photo", "media" => "https://0i.is/axHW"],
[ "type"=>"photo", "media" => "https://0i.is/PaWX"],
[ "type"=>"photo", "media" => "https://0i.is/6YS5"],
[ "type"=>"photo", "media" => "https://0i.is/cbSi"],
[ "type"=>"photo", "media" => "https://0i.is/Wtxo"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q27"]],
]])]);}

if($data == "q27"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/oYBH"],
[ "type"=>"photo", "media" => "https://0i.is/Jlq3"],
[ "type"=>"photo", "media" => "https://0i.is/vSQv"],
[ "type"=>"photo", "media" => "https://0i.is/wJVo"],
[ "type"=>"photo", "media" => "https://0i.is/xHPk"],
[ "type"=>"photo", "media" => "https://0i.is/J12A"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q28"]],
]])]);}

if($data == "q28"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/Rud0"],
[ "type"=>"photo", "media" => "https://0i.is/GWj1"],
[ "type"=>"photo", "media" => "https://0i.is/dmKb"],
[ "type"=>"photo", "media" => "https://0i.is/ozpz"],
[ "type"=>"photo", "media" => "https://0i.is/bGXB"],
[ "type"=>"photo", "media" => "https://0i.is/l878"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q29"]],
]])]);}

if($data == "q29"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/KQ8J"],
[ "type"=>"photo", "media" => "https://0i.is/TA63"],
[ "type"=>"photo", "media" => "https://0i.is/S2R2"],
[ "type"=>"photo", "media" => "https://0i.is/qjok"],
[ "type"=>"photo", "media" => "https://0i.is/zk1U"],
[ "type"=>"photo", "media" => "https://0i.is/eDVc"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q30"]],
]])]);}

if($data == "q30"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/dzGK"],
[ "type"=>"photo", "media" => "https://0i.is/qZxX"],
[ "type"=>"photo", "media" => "https://0i.is/FN0m"],
[ "type"=>"photo", "media" => "https://0i.is/9hHS"],
[ "type"=>"photo", "media" => "https://0i.is/fOA0"],
[ "type"=>"photo", "media" => "https://0i.is/dTsm"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q31"]],
]])]);}

if($data == "q31"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/xzMR"],
[ "type"=>"photo", "media" => "https://0i.is/fyjO"],
[ "type"=>"photo", "media" => "https://0i.is/6mXj"],
[ "type"=>"photo", "media" => "https://0i.is/qpkb"],
[ "type"=>"photo", "media" => "https://0i.is/t9XG"],
[ "type"=>"photo", "media" => "https://0i.is/iwyV"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q32"]],
]])]);}

if($data == "q32"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/GW19"],
[ "type"=>"photo", "media" => "https://0i.is/eHKm"],
[ "type"=>"photo", "media" => "https://0i.is/ChDY"],
[ "type"=>"photo", "media" => "https://0i.is/bh9t"],
[ "type"=>"photo", "media" => "https://0i.is/VxUu"],
[ "type"=>"photo", "media" => "https://0i.is/s6Dv"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q33"]],
]])]);}

if($data == "q33"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/CBXV"],
[ "type"=>"photo", "media" => "https://0i.is/xV1R"],
[ "type"=>"photo", "media" => "https://0i.is/9IcA"],
[ "type"=>"photo", "media" => "https://0i.is/RTAX"],
[ "type"=>"photo", "media" => "https://0i.is/IQk2"],
[ "type"=>"photo", "media" => "https://0i.is/rYm1"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q34"]],
]])]);}

if($data == "q34"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/55b4"],
[ "type"=>"photo", "media" => "https://0i.is/7IIl"],
[ "type"=>"photo", "media" => "https://0i.is/FhMg"],
[ "type"=>"photo", "media" => "https://0i.is/9EXq"],
[ "type"=>"photo", "media" => "https://0i.is/hDBA"],
[ "type"=>"photo", "media" => "https://0i.is/Qdey"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q35"]],
]])]);}

if($data == "q35"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/f3xd"],
[ "type"=>"photo", "media" => "https://0i.is/ioo4"],
[ "type"=>"photo", "media" => "https://0i.is/j6ev"],
[ "type"=>"photo", "media" => "https://0i.is/kr82"],
[ "type"=>"photo", "media" => "https://0i.is/9k0I"],
[ "type"=>"photo", "media" => "https://0i.is/AMoM"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q36"]],
]])]);}

if($data == "q36"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/LLIL"],
[ "type"=>"photo", "media" => "https://0i.is/l8it"],
[ "type"=>"photo", "media" => "https://0i.is/0WSc"],
[ "type"=>"photo", "media" => "https://0i.is/5rhi"],
[ "type"=>"photo", "media" => "https://0i.is/rheu"],
[ "type"=>"photo", "media" => "https://0i.is/tTxj"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q37"]],
]])]);}

if($data == "q37"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/QiR2"],
[ "type"=>"photo", "media" => "https://0i.is/mllJ"],
[ "type"=>"photo", "media" => "https://0i.is/aYHS"],
[ "type"=>"photo", "media" => "https://0i.is/XMy2"],
[ "type"=>"photo", "media" => "https://0i.is/Hpg7"],
[ "type"=>"photo", "media" => "https://0i.is/0K4U"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q38"]],
]])]);}

if($data == "q38"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/P2ut"],
[ "type"=>"photo", "media" => "https://0i.is/vA6D"],
[ "type"=>"photo", "media" => "https://0i.is/WqOZ"],
[ "type"=>"photo", "media" => "https://0i.is/MYpZ"],
[ "type"=>"photo", "media" => "https://0i.is/cgxs"],
[ "type"=>"photo", "media" => "https://0i.is/ZCZu"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q39"]],
]])]);}

if($data == "q39"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/9FO8"],
[ "type"=>"photo", "media" => "https://0i.is/lshe"],
[ "type"=>"photo", "media" => "https://0i.is/nWYa"],
[ "type"=>"photo", "media" => "https://0i.is/VesQ"],
[ "type"=>"photo", "media" => "https://0i.is/kXLj"],
[ "type"=>"photo", "media" => "https://0i.is/DlCp"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q40"]],
]])]);}

if($data == "q40"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/HhYQ"],
[ "type"=>"photo", "media" => "https://0i.is/J7ro"],
[ "type"=>"photo", "media" => "https://0i.is/5JWb"],
[ "type"=>"photo", "media" => "https://0i.is/jP33"],
[ "type"=>"photo", "media" => "https://0i.is/TE0J"],
[ "type"=>"photo", "media" => "https://0i.is/ctYM"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q41"]],
]])]);}

if($data == "q41"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/QjNn"],
[ "type"=>"photo", "media" => "https://0i.is/oCot"],
[ "type"=>"photo", "media" => "https://0i.is/Od43"],
[ "type"=>"photo", "media" => "https://0i.is/jUPm"],
[ "type"=>"photo", "media" => "https://0i.is/IJBR"],
[ "type"=>"photo", "media" => "https://0i.is/YUb6"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q42"]],
]])]);}

if($data == "q42"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/wHOg"],
[ "type"=>"photo", "media" => "https://0i.is/w8fP"],
[ "type"=>"photo", "media" => "https://0i.is/E3eU"],
[ "type"=>"photo", "media" => "https://0i.is/lXDN"],
[ "type"=>"photo", "media" => "https://0i.is/SgKy"],
[ "type"=>"photo", "media" => "https://0i.is/Lwbr"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q43"]],
]])]);}

if($data == "q43"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/FC4S"],
[ "type"=>"photo", "media" => "https://0i.is/an0J"],
[ "type"=>"photo", "media" => "https://0i.is/gB4r"],
[ "type"=>"photo", "media" => "https://0i.is/h2U7"],
[ "type"=>"photo", "media" => "https://0i.is/WOLr"],
[ "type"=>"photo", "media" => "https://0i.is/JEIH"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q44"]],
]])]);}

if($data == "q44"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/F8JZ"],
[ "type"=>"photo", "media" => "https://0i.is/X21D"],
[ "type"=>"photo", "media" => "https://0i.is/XL4G"],
[ "type"=>"photo", "media" => "https://0i.is/30x7"],
[ "type"=>"photo", "media" => "https://0i.is/unQp"],
[ "type"=>"photo", "media" => "https://0i.is/VZ4E"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q45"]],
]])]);}

if($data == "q45"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/Iekf"],
[ "type"=>"photo", "media" => "https://0i.is/5Zqg"],
[ "type"=>"photo", "media" => "https://0i.is/ycjk"],
[ "type"=>"photo", "media" => "https://0i.is/gOqN"],
[ "type"=>"photo", "media" => "https://0i.is/sAKL"],
[ "type"=>"photo", "media" => "https://0i.is/y0Ug"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q46"]],
]])]);}

if($data == "q46"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/sZ9w"],
[ "type"=>"photo", "media" => "https://0i.is/RJ3J"],
[ "type"=>"photo", "media" => "https://0i.is/hnMV"],
[ "type"=>"photo", "media" => "https://0i.is/c5P2"],
[ "type"=>"photo", "media" => "https://0i.is/rOBV"],
[ "type"=>"photo", "media" => "https://0i.is/rviy"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q47"]],
]])]);}

if($data == "q27"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/3zH4"],
[ "type"=>"photo", "media" => "https://0i.is/Ymk1"],
[ "type"=>"photo", "media" => "https://0i.is/PWKR"],
[ "type"=>"photo", "media" => "https://0i.is/sKiG"],
[ "type"=>"photo", "media" => "https://0i.is/cusl"],
[ "type"=>"photo", "media" => "https://0i.is/gETk"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q48"]],
]])]);}

if($data == "q48"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/qrpj"],
[ "type"=>"photo", "media" => "https://0i.is/x0az"],
[ "type"=>"photo", "media" => "https://0i.is/uMD0"],
[ "type"=>"photo", "media" => "https://0i.is/018b"],
[ "type"=>"photo", "media" => "https://0i.is/v64G"],
[ "type"=>"photo", "media" => "https://0i.is/b1kF"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q49"]],
]])]);}

if($data == "q49"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/iWpB"],
[ "type"=>"photo", "media" => "https://0i.is/tgE5"],
[ "type"=>"photo", "media" => "https://0i.is/s5di"],
[ "type"=>"photo", "media" => "https://0i.is/GYoc"],
[ "type"=>"photo", "media" => "https://0i.is/iLAR"],
[ "type"=>"photo", "media" => "https://0i.is/pmKf"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q50"]],
]])]);}

if($data == "q50"){
bot('editMessage',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,]);
bot("sendMediaGroup",['chat_id'=>$update->callback_query->message->chat->id,
'media'=>json_encode([
['caption'=>"📣 عزيزي تم تحميل لك الهايلات ♥️.", "type"=>"photo", "media" => "https://0i.is/xifk"],
[ "type"=>"photo", "media" => "https://0i.is/FqQO"],
[ "type"=>"photo", "media" => "https://0i.is/shxR"],
[ "type"=>"photo", "media" => "https://0i.is/WJJj"],
[ "type"=>"photo", "media" => "https://0i.is/ENfJ"],
[ "type"=>"photo", "media" => "https://0i.is/LPAM"],
]),]);
bot('SendMessage',['chat_id'=>$update->callback_query->message->chat->id,
'text'=>"📢 إليك الهايلات عزيزي..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- هايلات جديدة",'callback_data'=>"q1"]],
]])]);}

if ($data == 'f1'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'𓂅| 17 Ꭹ .Ꮻ
𓂅| 9 / 1
𓂅| Baghdad
𓂅| ‏اللهُم خذ بقلبي إلى حيث الرضا والهُدوء 💗',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f2"]],]])]);}

if ($data == 'f2'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'▪️IR‏ΔQ.‏🇮🇶
▪️Unfollow Block 
▪️Lover of the Horror 
▪️2/27 Bad day',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f3"]],]])]);}

if ($data == 'f3'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'𓄼 ⁶²² 𓄹 
𓁞 - 𝙔𝙤𝙪 𝙤𝙣𝙡𝙮 𝙡𝙞𝙫𝙚 𝙤𝙣𝙘𝙚
𓁞 - from Baghdad
𓁞 - 🍕🍟🍔🍿🥃',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f4"]],]])]);}

if ($data == 'f4'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'⠀
𓇼: １７𝚈.𝚘 .

. ☽ ﭑنا مجرۿ مـטּ الحُب :𓇼
𓇼: 𝙽𝙴𝚅𝙴𝚁 𝙵𝙴𝙻𝚃 𝙶𝙾𝙾𝙳 𝙴𝙽𝙾𝚄𝙶𝙷 𖤐.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f5"]],]])]);}

if ($data == 'f5'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️⠀
- 𝐌𝐚𝐫𝐜𝐡 , ١٩ .

.⚛︎ ﭑنا قصيدۿ عظيمـۃمالها شا؏ــر -
- 𝐈 𝐡𝐚𝐭𝐞 𝐭𝐡𝐢𝐬 𝐟𝐮𝐜𝐤𝐢𝐧𝐠 𝐥𝐢𝐟𝐞 ☆.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f6"]],]])]);}

if ($data == 'f6'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
. وحيد- 

. ڪُن دائما سمْاء عاليۿ-
- 𝐼 𝑑𝑜𝑛 𝑡 𝑚𝑖𝑛𝑑, 𝑐𝑎𝑢𝑠𝑒 𝑢 𝑑𝑜𝑛 𝑡 𝑚𝑎𝑡𝑡𝑒𝑟 𖤐.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f7"]],]])]);}

if ($data == 'f7'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'⠀ 
. ☥ انعزاليُة -
 . جميلۿ مّـارس - 
- 𝐈𝐧𝐜𝐚𝐩𝐚𝐛𝐥𝐞 𝐨𝐟 𝐜𝐨𝐧𝐭𝐢𝐧𝐮𝐢𝐭𝐲 .
⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f8"]],]])]);}

if ($data == 'f8'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'𖠪 ❃: 17 : YO 𖠪
𖠪 ❃: I R A Q
𖠪❃: 11 : 11 𖠪
𖠪 ❃: ﮼الحياة،مؤقته،عش كما ،تريد𖠪',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f9"]],]])]);}

if ($data == 'f9'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️⠀
⠀

🌻↶ .. 𝟏𝟏:𝟏𝟏 .💕.
🌻↶ᎥᎡᗩQ .💕.
🌻↶ - 𝑪𝒂𝒏 𝒚𝒐𝒖 𝒇𝒆𝒆𝒍 𝒎𝒚 𝒉𝒆𝒂𝒓𝒕 💕.

⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f10"]],]])]);}

if ($data == 'f10'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖠇||17YO.♡.
𖠇||11:11♡.
𖠇||BASRA♡.
𖠇||كونـي فتـاة ﻻ تهـزم وﻻتميـل وﻻ تنحني',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f11"]],]])]);}

if ($data == 'f11'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖣔||19سنهہ
𖣔||11:11
𖣔||IRAQ
𖣔||.مُنفرّدة حتّى في حزنها',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f12"]],]])]);}

if ($data == 'f12'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖤓||12:12
𖤓||IQ:BAGHDAD
𖤓||student(سادسے)
𖤓||﮼ﭑسـفي،فقـط،؏ـلى،وعـودك،الكاذبۃ',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f13"]],]])]);}

if ($data == 'f13'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'⠀
٤, نوفمبـر -
. وفي حسني الملفت قصّيدة - 
- ᴡɪʟʟ ʏᴏᴜ ᴀʟᴡᴀʏs ʟᴏᴠᴇ ᴍᴇ ..
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f14"]],]])]);}

if ($data == 'f14'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'⠀ 
١٩ , سـَہ-
 . ⚛︎ بعَيده كـ حَلم-
بغداد ، بكل معانيّها تشبهچ -
⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f15"]],]])]);}

if ($data == 'f15'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
 𓄼┊iRΔQ 𖤍
 𓄼┊17 : Y.O 𓆦
 𓄼┊11.11 𓄂
‌‏𓆪‏أذهب الى الله بضعفك ، يأتيك بقوته🙇🏻‍♀️💛؛‏𓆩',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f16"]],]])]);}

if ($data == 'f16'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'𓆩17 Y.O
𓆩Kirkuk
𓆩﮼لا،تثق،بي،ساحذفك،يوما',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f17"]],]])]);}

if ($data == 'f17'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'. هادِئۿ وبداخلهـا ضجيـج 𓍼.
. ذات السابعۿ ؏ـشر ؏ــاماً ☽. 
. 𝑰𝒏 𝒎𝒚 𝒆𝒚𝒆𝒔 𝒚𝒐𝒖 𝒂𝒓𝒆 𝒆𝒗𝒆𝒓𝒚𝒕𝒉𝒊𝒏𝒈 .',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f18"]],]])]);}

if ($data == 'f18'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'- مُبهرۿ 𓍼. 
- جميلۿ ڪ القمـر ☽.
-يَا جنۿ أ‏උــلام الغرَام وربّيعۿ . 
. 𝚃𝙰𝙺𝙴 𝙲𝙰𝚁𝙴 𝙾𝙵 𝚈𝙾𝚄𝚁 𝙷𝙴𝙰𝚁𝚃 -',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f19"]],]])]);}

if ($data == 'f19'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>' | BAGHDAD ঌ. 
  | 10 , SEPtemBer ༯
  | Welcome to my profile 💕.﮼كن،قويا،فهناك،من،يفرح،حين،يراك،مكسورا | ',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f20"]],]])]);}

if ($data == 'f20'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'‏
𖤍 ┊𓆩 سيـئة𓆪 ‏
𖤍 ┊17 Y.O ‏
𖤍 ┊Student سادس
𖤍 ┊𓆩 IRAQ 𓆪
𖤍 ┊‏بداخلي مدن هدمْت، وحُروباً تقام ‏',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f21"]],]])]);}

if ($data == 'f21'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
𖣥| رآعيـة چالنجـر
𖣥| 𝐼‏𝑅‏𝐴‏𝑄 .
𖣥| student(ثالـثے)
𖣥| ﮼لا،تثق،بي،ساحذفك،يوما
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f22"]],]])]);}

if ($data == 'f22'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
𓂇| 𝓐𝓨𝓗𝓔𝓜
𓂇| 17 Y.O
𓂇| 𝐼‏𝑅‏𝐴‏𝑄 .
𓂇| لا تبحث عن ﺎلسعآدة بل ٱصنعها ﺎنت
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f23"]],]])]);}

if ($data == 'f23'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖦲| ميتـۿ .
𖦲| 𝐼‏𝑅‏𝐴‏𝑄 ؛)
𖦲| 1999 ◟̽◞̽
𖦲|• ﮼جميلۿ،ۿي،لأنۿا،بـ،روح،طفلۿ',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f24"]],]])]);}

if ($data == 'f24'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖡹| مسيحيـهِـۂ
𖡹| 17 Y.O
𖡹|2002 ◟̽◞̽
𖡹| • ﮼خيبات،الأصدقاء،لا،تُنسى',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f25"]],]])]);}

if ($data == 'f25'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
𖣥| رآعيـة كمـارو 
𖣥| 𝐼‏𝑅‏𝐴‏𝑄 .
𖣥| 2002 ◟̽◞̽
𖣥| • ﮼ڪتاباتها،بائسۃ،ووجهُها،ضاحك ⠀
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f26"]],]])]);}

if ($data == 'f26'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️⠀ 
١٨ , سـَہ-
 . ⚛︎‏ ‏﮼لستُ،حزينا،هذا،فقط،وجهي -
 ‏ ‏﮼غيمته،نجمته،طفلته،ملاكة -',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f27"]],]])]);}

if ($data == 'f27'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
𓇻: بيبانيـهِـۂ
𓇻: 16 Y.O
𓇻: ‏ ‏﮼چا،شنهي،الترافة،البيج،يغفى،بشعرج،عصفور⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f28"]],]])]);}

if ($data == 'f28'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
𓃚 | ALONE
𓃚 | 20 Y.O ☥
𓃚 | DIYALA .
𓃚 |‏﮼اساند،نفسي،دائما،لذلك،لا،ادين،لاحد،بشيء',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f29"]],]])]);}

if ($data == 'f29'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𓋇: 𝟷𝟾 𝚈.𝙾
𓋇:  𝙽𝙾𝚅𝙴𝙼𝙱𝙴𝚁 
𓋇:  𝚃𝙴𝙻𝙴  𝙹𝙻𝟷𝟶𝟷𝟷 
𓋇:  لا راحۃ الا بٓهها',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f30"]],]])]);}

if ($data == 'f30'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️٭     .       .        .       ٭    .         ٭ .      .       .      ٭        
   .     .        .      .          ٭     . .     .         ٭.     .         . 
.       .•    •      •    •  
عندما؛ تححبهههاآ لاتفــلـت يـــدهآآ، ولو  لـــ ثانيـةة، (:🧸💕:)ء
.        .      .          ٭     .      .          .         .            .      .
   .         ٭     .       .               ٭    .         ٭ .      .       .  ٭    ',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f31"]],]])]);}

if ($data == 'f31'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
⠀ 𓄼┊iRΔQ 𖤍
⠀ 𓄼┊١٦ : Y.O 𓆦
⠀ 𓄼┊١٢.١٢ 𓄂
‌‏𓆪‏لبيڪ أنا متعبون اجبر قلوبنا ياالله🙇🏻‍♀️💔؛‏𓆩',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f32"]],]])]);}

if ($data == 'f32'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
☾: 𝚖𝚎𝚖𝚎..
☾: 16.𝚢.𝚘.
☾: 𝚒𝚛𝚊𝚚.
 
- مآنسِيتك أنآ كّــل يوُم أحن💙..
𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄𓐄
- 𝒎𝒚 𝒄𝒉𝒂𝒏??𝒍💙🗝.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f33"]],]])]);}

if ($data == 'f33'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
☪︎ :⠀٨ ، أُغسـطس. 
☪︎ :⠀ ـلآ شيء يُعجبنيہ
☪︎ :⠀ 𝚈𝚘𝚞 𝚕𝚘𝚘𝚔 𝚙𝚛𝚎𝚝𝚝𝚢 𝚎𝚟𝚎𝚗 𝚠𝚑𝚎𝚗 𝚢𝚘𝚞 𝚌𝚛𝚢🖤🤝! .
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f34"]],]])]);}

if ($data == 'f34'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𓅟 : ﮼١٨،سنهه ♡، 
𓅟 : ﮼البصرة ♡، 
𓅟 : ﮼متى،تشعر،بقلبي ♡،',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f35"]],]])]);}

if ($data == 'f35'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️⠀ 
. ☥ انعزاليُة -
 . جميلۿ اكتوبَـر - 
- 𝖥𝖺𝗅𝗌𝖾 𝗌𝗄𝗂𝗅𝗅𝖾𝖽 , 𝗀𝗈𝗈𝖽 𝖺𝖼𝗍𝗋𝖾𝗌𝗌 ◡̈ .
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f36"]],]])]);}

if ($data == 'f36'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️᪥|𝔹𝔸𝔾ℍ𝔻𝔸𝔻
᪥|17 𝕐𝔼𝔸ℝ
᪥|💕آفّٓعل مآيسعدك ، فآلاياِّم لا تعود',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f37"]],]])]);}

if ($data == 'f37'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𓏶 : 19 Y.O .
𓏶 : IQ: BASRA .
𓏶 : Cursed life .*
𓏶 : Be a ruthless person .*',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f38"]],]])]);}

if ($data == 'f38'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖣘|ᗷᗩᘜᕼᗪᗩᗪ
𖣘|18 Yᗴᗩᖇ
𖣘|• لــسـت 🌻💞 .
𖣘|• مـجبـراً ﭑن تــبهر ﭑحــد 🌻💞 .',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f39"]],]])]);}

if ($data == 'f39'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️⠀ ☤ ┊ 𝓐𝓥𝓐𝓣𝓐𝓡 ♕
⠀ ☤ ┊21 : Y.O 𓆦
⠀ ☤ ┊iRΔQ𓄂
⠀
‎‌‏𓆩†🖤 اللعنه ع قلبي الذي يتمناك لهذا الحد𓆪',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f40"]],]])]);}

if ($data == 'f40'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️⠀
𓂅| 16 Ꭹ .Ꮻ
𓂅| 22 / 12
𓂅| CUTE GIRL
𓂅|﮼مظهر كالجليد،وعمق كالجحيم⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f41"]],]])]);}

if ($data == 'f41'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖣔|| 19سنهہ
𖣔|| 11:11
𖣔|| IRAQ
𖣔|| مُنفرّدة حتّى في حزنها',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f42"]],]])]);}

if ($data == 'f42'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖢺 : 18 YO
𖢺 : k A R B A L A 
𖢺 : لن يراك احد كما تراك عيناي 🔗.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f43"]],]])]);}

if ($data == 'f43'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️☾↶ جميݪۿ ديسمبر .
☾↶ ڪل وحيدةه قويۿ 💙.
☾↶ عظيمۿ !

 - 𝑏𝑒𝑎𝑢𝑡𝑖𝑓𝑢𝑙 𝑎𝑠𝑐𝑙𝑜𝑢𝑑𝑠 ☁️💙..',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f44"]],]])]);}

if ($data == 'f44'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖧾 : جميݪۿ سبتمبر .
𖧾 : لطيفۿ وناعمۿ ڪ الورد 💗.
𖧾 : نازڪة ! 

𝑎𝑠 𝑠𝑜𝑓𝑡 𝑎𝑠 𝑠𝑖𝑙𝑘 🌻💗.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f45"]],]])]);}

if ($data == 'f45'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️♪ : جميݪۿ مايـﯟ !
♪ : لامعۿ ڪَ النجوم 🖤.
♪ : متمردةه !

 𝑚𝑦 𝑏𝑒𝑎𝑢𝑡𝑦 𝑠𝑢𝑟𝑝𝑎𝑠𝑠𝑒𝑠 𝑒𝑣𝑟𝑦𝑡ℎ𝑖𝑛𝑔 🖤.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f46"]],]])]);}

if ($data == 'f46'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️𖤐 : امير نوفمبر .
𖤐 : عالم مليىء بالغباءء 🖤.
𖤐 : نادر !
ڪ الموت ע اتكرر مرتين 🖤.
𝑖 𝑑𝑜𝑛 𝑡 𝑟𝑒𝑝𝑒𝑎𝑡 𝑡𝑤𝑖𝑐𝑒 .',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f47"]],]])]);}

if ($data == 'f47'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
❦ : ᖇOᖇO 💕.
❦ : YO • 17 💕. 
❦ : ᗷᗩᑎᗪᗩ 💕. 
❦ : 𝚆𝙸𝙻𝙻 𝚈𝙾𝚄 𝚂𝚃𝙰𝚈 𝚆𝙸𝚃𝙷 𝙼𝙴?⠀
⠀⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f48"]],]])]);}

if ($data == 'f48'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️‏
🌻↶ 𓆩 ‏GᕼEEᑎ 𓆪 ‏
🌻↶ 𓆩 Iᖇᗩᑫ 𓆪‏
🌻↶ 𓆩 11:11 𓆪
🌻↶ 𓆩 12 ԲEᗷᖇᑌᗩᖇY 𓆪
🌻↶ 𓆩 وقل لِلشامتـين صبرآ 𓆪',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f49"]],]])]);}

if ($data == 'f49'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
⠀ ⠀❋ ＢΔ S R Α ┆17 ᗩGE 
⠀⠀’سـآگونٓ سـندَّ لنـفسيٍَ و أمـضيٓ’ ⠀
⠀⠀⠀ᵂᴱᴸᶜᴼᴹᴱ ᵀᴼ ᴹʸ ᴾᴿᴼᶠᴵᴸᴱ⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f50"]],]])]);}

if ($data == 'f50'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓍯| الهـي استودعك العَراق ...
𓍯| و يـبقى الـ؏ـرآق …
𓍯|18 y.o
𓍯|BΔSRΔ 
',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f51"]],]])]);}

if ($data == 'f51'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
🦄 • ᗩᒪOᑎᗴ
🦄 • 17 Y.O
🦄 • ᘜ • ﮼سأبقى،قويه،وكل،مر،سيمر',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f52"]],]])]);}

if ($data == 'f52'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️‏‏
☘︎︎| ᗴᔕO ༒
☘︎︎| 16 Y.O
☘︎︎| ᗷᗩᘜᕼᗪᗩᗪ
☘︎︎| ᙭﮼كلامي،يمثلني،وفهمك،يمثلك 🖤!',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f53"]],]])]);}

if ($data == 'f53'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓅓 | ᖇOᖇO ༒
𓅓 | 𝟷𝟾 Y.O , Iᖇᗩᑫ
𓅓 | ‏• ﮼الحياة،افضل،عندما،لاتهتم',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f54"]],]])]);}

if ($data == 'f54'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️‏‏
☁️༽ ᖴOᖴᗩ シ
☁️༽ 17 Y.O , Iᖇᗩᑫ
☁️༽ ᙭ ﮼إنها،زائلهہ،كن،لطيفاً᙭',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f55"]],]])]);}

if ($data == 'f55'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'⚣• نازڪـٌه ༒
⚣• ‏حَتى ﯢأنتي باهتۿ تَلمعين ☾
⚣•ـلا اتوَقع شيئاً シ‏
‌‏
- 𝓥𝖾𝗋𝗒 𝗊𝗎𝗂𝖾𝗍 𝖿𝗂𝗅𝗅𝗌 𝖺𝗇𝖽 💭༒‏',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f56"]],]])]);}

if ($data == 'f56'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️⌘: مَختلفـــــــههۃ ❥
⌘:ڪَتلۃ مَن الرقــهۃ シ
⌘: ؏َـيناكِ فيہ الحُسـنِ آيـۃ.‏‏
- 𝓨𝗈𝗎 𝗋𝖾 𝖺𝗅𝗅 𝗇𝖾𝖾𝖽 ☁️ .‏',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f57"]],]])]);}

if ($data == 'f57'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
☁️ : 𝙵𝚊𝚝𝚘𝚜𝚑
☁️ : 𝚒𝚛𝚊𝚚 , 𝟷𝟿 𝚢.𝚘
☁️ : 𝚘﮼انـا،متحـف،مليہء،بالفـن 🌧💘',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f58"]],]])]);}

if ($data == 'f58'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️
𓏗 مُقتبسة مِن الوَرد
عُراقيـة ❆
ذاتَ السبعةَ عَشر شِتـاءً ❉',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f59"]],]])]);}

if ($data == 'f59'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'️️‏‏
𖤍 ┊رآعيـة كمارو‏
𖤍 ┊𓆩 Iᖇᗩᑫ ؛ KIᖇKᑌK 𓆪
𖤍 ┊الآهم من الكل ؟ الفلوس 🤤💘 ‏
 ‏',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f60"]],]])]);}

if ($data == 'f60'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓍼 | ꪗ𝘴ꪮ ༒
𓍼 | 𝟷𝟾 ꪗ.ꪮ ,𝓲𝘲
𓍼 | 𝑏𝑎𝑔ℎ𝑑𝑎𝑑 ✈︎
𓍼 | •ᘜ• المامعروف يدور زلة عالمعروف',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f61"]],]])]);}

if ($data == 'f61'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'𓆀|| ᒍOᒍO 𐂂
𓆀|| 19 Y.O
𓆀|| • ﻼ تخـف ان اللۿ مَعك 🧺💞.‏
- 𝙶𝚒𝚛𝚕 𝚖𝚊𝚍𝚎 𝚒𝚗 𝚙𝚊𝚛𝚊𝚍𝚒𝚜𝚎 ༒',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f62"]],]])]);}

if ($data == 'f62'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
♕:ɪʀᴀǫ
♕:18,𝑦.𝑜
♕:11:11
اللهم فرحة ردت فعلها سجدة 🥺💕"ء',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f63"]],]])]);}

if ($data == 'f63'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
🌻 : 𝙰𝚢𝚊 ༒
🌻 : 𝚒𝚛𝚊𝚚 , 𝟷𝟾 𝚢.𝚘
🌻 : 𝚘‏طبعي سبحه وما ألوگ بچف جهال',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f64"]],]])]);}

if ($data == 'f64'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
⌾ | 𝙑𝙀𝙍𝘼 ༒
⌾ | 18 𝙔.𝙊
⌾ | 𝘽𝘼𝙂𝙃𝘿𝘼𝘿
⌾ | ᥇ قتلوا براءتها ثم قالوا انها سيئة',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f65"]],]])]);}

if ($data == 'f65'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓇻|⠀ جميلـۃ كألقمر☆.
𓇻|⠀ أنني تاج لنفسيہ𓋜.
𓇻|⠀ لا أغفر لـ نفسيہ فأني وُلدت
𓇻| 𝙽𝙴𝚅𝙴𝚁 𝙵𝙴𝙻𝚃 𝙶𝙾𝙾𝙳 𝙴𝙽𝙾𝚄𝙶𝙷.⠀ 
⠀',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f66"]],]])]);}

if ($data == 'f66'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'⠀⠀ ⠀ ⠀ ⠀⠀ ⠀ ⠀ ⠀
𓆫┊𝙱𝙰𝚂𝚁𝙰 𓅯 .
𓆫┊ 𝟶𝟿:𝟹𝟿 ‏𝙼 💙🕊 .
𓆫┊‏ ‏𝚄𝙽𝙸𝚅𝙴𝚁𝚂𝙸𝚃𝚈 𝙾𝙵 𝙱𝙰𝚂𝚁?? ☤.
𓆫┊ ‏يُشعرني دائماً أنهُ أباً آخر خُلقَ لي',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f67"]],]])]);}

if ($data == 'f67'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'✗↬ 𝐅𝐫𝗼𝗺, 𝐈𝐫𝐚𝐪.
✗↬ 𝐃𝗼𝐜𝐭𝗼𝐫, 👩🏻‍⚕️.
✗↬𝐁𝐞𝐭𝐫𝗼𝐭𝐡𝐞𝐝 ,💍.
✗↬ 𝟙𝟙:𝟙𝟙,💙.
✗↬𝐈 𝐚𝗺 𝐡𝐢𝐬 𝐚𝐧𝐝 𝐡𝐞 𝐢𝐬 𝗺𝐢𝐧𝐞,💞.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f68"]],]])]);}

if ($data == 'f68'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
۞:𝘔𝘢𝘳𝘺𝘢𝘮
۞:20 𝘠.𝘖
۞: 11:11🌙
۞: 𝘐 𝘴𝘵𝘪𝘭𝘭 𝘮𝘪𝘴𝘴 𝘺𝘰𝘶 ☹︎',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f69"]],]])]);}

if ($data == 'f69'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𖣥| 𝘴ꪮ𝘴ꪮ ༒
𖣥| 16 ꪗ.ꪮ 
𖣥| ꪀꪖ𝘴𝓲𝘳ꪗꪖ
𖣥| ᥇ ‏﮼ستأتي،ايام،جميلة،فلا،تحزن 💘',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f70"]],]])]);}

if ($data == 'f70'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𖠺 : 18 Y.O .
𖠺 : IQ: karbala .
𖠺 : God provides you .
𖠺 : Don t ask for help .💘',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f71"]],]])]);}

if ($data == 'f71'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
❤︎- 𝚎𝚜𝚛𝚊𝚊
❤︎- 𓆩 جمـيلة اكتـوبر𓆪 
أطويك كطيّ الأوراق، لا تتعالى فتُعدم -❤︎',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f72"]],]])]);}

if ($data == 'f72'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓇣: انعزاليـہَ هُ ◡̈ 
𓇣: 17 ꪗ.ꪮ
𓇣: • ﮼جميلۿ،ۿي،لأنۿا،بـ،روح،طفلۿ',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f73"]],]])]);}

if ($data == 'f73'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𖤍 ┊Air Force ✈︎ ‏
𖤍 ┊𓆩 Iᖇᗩᑫ ؛ KIᖇKᑌK 𓆪
𖤍 ┊الچلب يوفي ورَبعي ما وافونـي ༒‏
 ‏',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f74"]],]])]);}

if ($data == 'f74'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
 : 𝙽𝙰𝙽𝙾 ༒
 : 𝚒𝚛𝚊𝚚 , 𝚋𝚊𝚐𝚑𝚍𝚊𝚍
 : 𝟷𝟼 𝚢.𝚘
: 𝚘‏﮼على،قيد،الغيوم',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f75"]],]])]);}

if ($data == 'f75'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
✗↬ ᖴᖇOᗰ ، IRΔQ🇮🇶 
✗ ↬ ᗩGE ، 18 y.o .
✗ ↬ Love 🍯،🍫،🍰 .
✗ ↬ 12:12.
✗ ↬w e l c o м ,тo мy, p r ғ ι.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f76"]],]])]);}

if ($data == 'f76'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'𓋜|| قليَلۃ ڪُــلامَہ .°
𓋜|| • رقيـقۿ ڪُطـفلۿ بريئۿ 🧺💞.
𓋜|| - آنـا لستُ لۿذا العَالم..‏- 𝔻𝕖𝕞𝕠𝕟𝕤 𝕟𝕖𝕧𝕖𝕣 𝕔𝕣𝕪 ༒',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f77"]],]])]);}

if ($data == 'f77'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'-🖤𓂇|نـاَدرة تمَـامـاَ ༒
-🖤𓂇| عَديمۿ ﭑلاختلاط 🧺💞..
-🖤𓂇| أنـﭑ خارج أي مُقارنات 🧺💞..‏- 𝚊𝚗𝚐𝚎𝚕𝚜 𝚗𝚎𝚟𝚎𝚛 𝚌𝚛𝚢 ༒',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f78"]],]])]);}

if ($data == 'f78'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓂀| 𓆩𝑹𝒆𝒕𝒂𓆪
𓂀|18 𝒀.𝑶
𓂀|𝟷𝟷:𝟷𝟷
𓂀| Alone .. We re alone.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f79"]],]])]);}

if ($data == 'f79'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'۞: جُـميلـــهۃ ☾
۞: جميلۃ هيۃ ڪَغيوم‏ ورديۿ 💞.
۞: ؏ُــــالمَ ڪئيبَ !‏- 𝚐𝚒𝚛𝚕 𝚖𝚊𝚍𝚎 𝚒𝚗 𝚛𝚘𝚜𝚎𝚜 ⚤',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f80"]],]])]);}

if ($data == 'f80'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓌬: TOTᗩ ༒
𓌬: 𝟷𝟽 Y.O
𓌬: ᗷᗩᔕᖇᗩ
𓌬: •ᘜ• - ﭑرقُ من الماءِ ، خدۿ',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f81"]],]])]);}

if ($data == 'f81'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'-ஐ|| 𝚁𝚊𝚗𝚘 ✔︎
-ஐ|| 𝟷𝟽 𝚈.𝙾
-ஐ|| 𝙱𝙰𝙶𝙷𝙳𝙰𝙳 , 𝙸𝚀‏
‌‏تجلس كشيطان صغير، وتمشي كقديسه 𖤐.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f82"]],]])]);}

if ($data == 'f82'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'💍- غَـيمۿ .°
💍- مختصـٌر الحُـب انــت 🌻📋💞.
💍- نقيۿ كَـغيوَم السـمَاء 🌻.‏- 𝙻𝚘𝚟𝚎 𝚖𝚢 𝙾𝚇𝚈𝙶𝙴𝙽 💕༒',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f83"]],]])]);}

if ($data == 'f83'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'᪥: 𝘲ꪊꫀꫀꪀ ♕༒
᪥: 𝟷𝟾 ꪗ.ꪮ ☾
᪥: 𝘬𝓲𝘳𝘬ꪊ𝘬 ❥༒‏• تألمت ، فتعلمت ، فتغيرت ツ .

• 𝙸 𝚂𝚄𝙵𝙵𝙴𝚁𝙴𝙳 , 𝙻𝙴𝙰𝚁𝙽𝙴𝙳 , 𝙲𝙷𝙰𝙽𝙶𝙴𝙳 .',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f84"]],]])]);}

if ($data == 'f84'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𖥟: ᗪ乇ᐯ|ㄥ༒
𖥟: 𝟷𝟼ㄚ.Ҩ
𖥟: 𝓲𝘳ꪖ𝘲 , ᥇ꪖ𝘴𝘳ꪖ
𖥟: ﮼كلامي،يمثلني،وفهمك،يمثلك',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f85"]],]])]);}

if ($data == 'f85'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'‏
𓍪| 𝘳ꪖꪀꪗꪖ ✔︎
𓍪| 𝓲𝘳ꪖ𝘲 , ᥇ꪖ𝘴𝘳ꪖ ☦︎︎
𓍪| 17 ꪗ.ꪮ 
𓍪| ꪑ‏ڪتاباتها بائسۃ ووجهُها ضاحك',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f86"]],]])]);}

if ($data == 'f86'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
❏: ꪀꪮꪮ𝘳 ༒ 
❏: 𝓲𝘳ꪖ𝘲 , ᥇ꪖ𝘴𝘳ꪖ
❏: 20 ꪗ.ꪮ
❏:•ᘜ•‏حـُب عظيم لـ قوتـي',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f87"]],]])]);}

if ($data == 'f87'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'ᒪOᒪᗩ- ⚠︎︎
 18 Y.O-⚠︎︎
 ᗷᗩᔕᖇᗩ ᑕITY ␈-⚠︎︎‏ثُم لم نعد نُبالي بما كُنا لا نُبالي إلا به 💛.',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f88"]],]])]);}

if ($data == 'f88'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𓂇| 𝘳ꪮ𝘳ꪮ ༒
𓂇| 𝙸𝚀 シ
𓂇| سيـدۿ ٱلمـزاج ٱلاولـى 💞.
𓂇| أنـﭑ خارج أي مُقارنات 🧺💞..',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f89"]],]])]);}

if ($data == 'f89'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
𖣔: قويـْـْـْـه ༒
𖣔: كمَيـۿ مَن ﭑلصلابۿ 🧺💞..
𖣔: • بـ؏َـيـده ڪحــلمَ .',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f90"]],]])]);}

if ($data == 'f90'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'
??: 𝑠𝑜𝑠𝑜 ꨄ
𓆸: 𝟷𝟽 𝚢.𝚘
𓆸: 𝚘• ﮼ۿيَ،تشبۿ،لقمــر،تـماماً 💛',
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f91"]],]])]);}

if ($data == 'f91'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
⠀ ⠀ ⠀⠀⠀. ғʀᴏᴍ ɪʀᴀǫ ↻🇮🇶. 
ﭑنا عَڪاز نفسـჂ̤ ، ﭑقيمہَ و ﭑستقيم 🏹❕. .
⠀ ⠀⠀ - basra , 19 y.o 📍.",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f92"]],]])]);}

if ($data == 'f92'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𖤍 ┊𓆩 ‏ᗰIᗰᗩ 𓆪 ‏
𖤍 ┊𓆩 ᗷᗩᔕᖇᗩ 𓆪‏
𖤍 ┊𓆩 16 YO 𓆪
𖤍 ┊𓆩 29 ᗩᑭᖇIᒪ 𓆪
𖤍 ┊ كِلنا نكابر وعيوننا تبكي حنين‏",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f93"]],]])]);}

if ($data == 'f93'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𓋇: 𝟷𝟾 𝚈.𝙾
𓋇:  𝙽𝙾𝚅𝙴𝙼𝙱𝙴𝚁 
𓋇:  𝚃𝙴𝙻𝙴  𝙹𝙻𝟷𝟶𝟷𝟷 
𓋇:  لا راحۃ الا بٓهها
",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f94"]],]])]);}

if ($data == 'f94'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𓆀|| ᔕ&ᒪ💍
𓆀||『 عراقيـة 』
𓆀|| ᗷᗩᘜᕼᗪᗩᗪ ♡︎
-اليمشـي وياية يشكُـر ربـة 🖤",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f95"]],]])]);}

if ($data == 'f95'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𖦲| ميتـۿ .
𖦲| 𝐼‏𝑅‏𝐴‏𝑄 ؛)
𖦲| 1999 ◟̽◞̽
𖦲|• ﮼جميلۿ،ۿي،لأنۿا،بـ،روح،طفلۿ",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f96"]],]])]);}

if ($data == 'f96'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
🐥|| 𝚗𝚊𝚖𝚎: 𝚕𝚊𝚢𝚊𝚗
🐥|| 𝚊𝚐𝚎 : 𝟷𝟺
🐥|| 𝙸𝚛𝚊𝚚,🇮🇶
🐥|| 𝙱. 𝙵𝙵(.....)
.𝙳𝚒𝚏𝚏𝚒𝚌𝚞𝚕𝚝 𝚛𝚘𝚍𝚜 𝙾𝚏𝚝𝚎𝚗 𝚕𝚎𝚊𝚍 𝚃𝚘.
 𝚋𝚎𝚊𝚞𝚝𝚒𝚏𝚞𝚕 𝙳𝚎𝚜𝚝𝚒𝚗𝚊𝚝𝚒𝚘𝚗 ♧︎",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f97"]],]])]);}

if ($data == 'f97'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
🇮🇶𓄼┊ᗩᒪI
🇮🇶𓄼┊17 / Yᑌ
🇮🇶𓄼┊Iᖇᗩᑫ.ᗷᗩᘜᕼᗪᗩᗪ
🇮🇶𓄼┊29 /ᗩᑭᖇIᒪ
🇮🇶𓄼┊اوكع وما انحني هيج اني اشبه موطني",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f98"]],]])]);}

if ($data == 'f98'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𖤓||12:12
𖤓||IQ:BAGHDAD
𖤓||student(سادس)
𖤓||﮼ﭑسـفي،فقـط،؏ـلى،وعـودك،الكاذبۃ",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f99"]],]])]);}

if ($data == 'f99'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
࿈ : 𝚃𝙾𝚃𝙰 ☾
࿈ : 𝟷𝟾 𝚈.𝙾
࿈ : 𝙱𝚊𝚐𝚑𝚍𝚊𝚍 , 𝙸𝚀
࿈ : ꪮ سيئۃ بطريقۃ جيدهَ 🌻🧺..",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f100"]],]])]);}

if ($data == 'f100'){
bot('editMessagetext',[ 'chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"
𖠇||17YO.♡.
𖠇||11:11♡.
𖠇||BASRA♡.
𖠇||كونـي فتـاة ﻻ تهـزم وﻻتميـل وﻻ تنحني",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'جلب بايو اخر..','callback_data'=>"f1"]],]])]);}

