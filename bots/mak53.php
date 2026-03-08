<?php#*wataw*

if($start=="non"){
$start="
♥️ أهلاً عَزيزي $name.
- مرحبا بك في بوت الأبراج .
- قم بالضغط على زر برجك لعرض المعلومات .
- ويمكنك معرفة برجك عن طريق ميلادك ايضاً .
";}


// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$messageid = $update->callback_query->message->message_id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$data = $update->callback_query->data;

if($text == '/start'){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"برج الجوزاء ♊",'callback_data'=>"hm1|Gemini"],['text'=>"برج الثور ♉",'callback_data'=>"hm1|Taurus"],['text'=>"برج الحمل ♈",'callback_data'=>"hm1|Aries"]],
[['text'=>"برج العذراء ♍",'callback_data'=>"hm1|Virgo"],['text'=>"برج الأسد ♌",'callback_data'=>"hm1|Lion"],['text'=>"برج السرطان ♋",'callback_data'=>"hm1|Cancer"]],
[['text'=>"برج القوس ♐",'callback_data'=>"hm1|Sagittarius"],['text'=>"برج العقرب ♏",'callback_data'=>"hm1|Scorpio"],['text'=>"برج الميزان ♎",'callback_data'=>"hm1|Libra"]],
[['text'=>"برج الحوت ♓",'callback_data'=>"hm1|Pisces"],['text'=>"برج الدلو ♒",'callback_data'=>"hm1|Aquarius"],['text'=>"برج الجدي ♑",'callback_data'=>"hm1|Capricorn"]],
[['text'=>"معرفة برجك حسب ميلادك.",'callback_data'=>"brg"]],
]])]);}

if($data == "BBACK"){
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
 'text'=>"$start

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"برج الجوزاء ♊",'callback_data'=>"hm1|Gemini"],['text'=>"برج الثور ♉",'callback_data'=>"hm1|Taurus"],['text'=>"برج الحمل ♈",'callback_data'=>"hm1|Aries"]],
[['text'=>"برج العذراء ♍",'callback_data'=>"hm1|Virgo"],['text'=>"برج الأسد ♌",'callback_data'=>"hm1|Lion"],['text'=>"برج السرطان ♋",'callback_data'=>"hm1|Cancer"]],
[['text'=>"برج القوس ♐",'callback_data'=>"hm1|Sagittarius"],['text'=>"برج العقرب ♏",'callback_data'=>"hm1|Scorpio"],['text'=>"برج الميزان ♎",'callback_data'=>"hm1|Libra"]],
[['text'=>"برج الحوت ♓",'callback_data'=>"hm1|Pisces"],['text'=>"برج الدلو ♒",'callback_data'=>"hm1|Aquarius"],['text'=>"برج الجدي ♑",'callback_data'=>"hm1|Capricorn"]],
[['text'=>"معرفة برجك حسب ميلادك.",'callback_data'=>"brg"]],
]])]);}

$n = explode("|",$data);
if($data == "hm1|$n[1]"){
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=day&brj=$n[1]"));
$n1 = $export->result->n1;
$n2 = $export->result->n2;
$n3 = $export->result->n3;
$n4 = $export->result->n4;
$n5 = $export->result->n5;
$n6 = $export->result->n6;
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"مهنياً ودراسياً: $n1

عاطفياً واجتماعياً: $n2

صحياً: $n3

الأبراج المتوافقة معك: $n4

مؤشرات يومية عامة: $n5

أرقام الحظ اليوم: $n6

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"توقعات الشهر",'callback_data'=>"y2|$n[1]|month"],['text'=>"توقعات الأسبوع",'callback_data'=>"y2|$n[1]|weekly"],['text'=>"توقعات الأمس",'callback_data'=>"y1|$n[1]|yesterday"]],
[['text'=>"توقعات ماغي فرح للمرأة",'callback_data'=>"mage1|$n[1]"],['text'=>"توقعات ماغي فرح للرجل",'callback_data'=>"mage2|$n[1]"]],
[['text'=>"رجوع",'callback_data'=>"BBACK"]]
]])]);}

$n = explode("|",$data);
if($data == "mage1|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=day&brj=$n[1]"));
$n8 = $export->result->n8;
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"$n8",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"hm1|$n[1]"]]
]])]);}

if($data == "mage2|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=day&brj=$n[1]"));
$n7 = $export->result->n7;
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"$n7",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"hm1|$n[1]"]]
]])]);}

$n = explode("|",$data);
if($data == "mage3|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=yesterday&brj=$n[1]"));
$n8 = $export->result->n8;
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"$n8",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"hm1|$n[1]"]]
]])]);}

if($data == "mage4|$n[1]") {
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=yesterday&brj=$n[1]"));
$n7 = $export->result->n7;
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"$n7",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"hm1|$n[1]"]]
]])]);}

$n = explode("|",$data);
if($data == "y1|$n[1]|$n[2]"){
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=$n[2]&brj=$n[1]"));
$n1 = $export->result->n1;
$n2 = $export->result->n2;
$n3 = $export->result->n3;
$n4 = $export->result->n4;
$n5 = $export->result->n5;
$n6 = $export->result->n6;
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"مهنياً ودراسياً: $n1

عاطفياً واجتماعياً: $n2

صحياً: $n3

الأبراج المتوافقة معك: $n4

مؤشرات يومية عامة: $n5

أرقام الحظ اليوم: $n6

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"توقعات الشهر",'callback_data'=>"y2|$n[1]|month"],['text'=>"توقعات الأسبوع",'callback_data'=>"y2|$n[1]|weekly"],['text'=>"توقعات اليوم",'callback_data'=>"hm1|$n[1]"]],
[['text'=>"توقعات ماغي فرح للمرأة",'callback_data'=>"mage3|$n[1]"],['text'=>"توقعات ماغي فرح للرجل",'callback_data'=>"mage4|$n[1]"]],
[['text'=>"رجوع",'callback_data'=>"BBACK"]]
]])]);}

$n = explode("|",$data);
if($data == "y2|$n[1]|$n[2]"){
$export = json_decode(file_get_contents("https://botk5.com/brg.php?d=$n[2]&brj=$n[1]"));
$n1 = $export->result->n1;
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"$n1",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"توقعات الشهر",'callback_data'=>"y2|$n[1]|month"],['text'=>"توقعات الأسبوع",'callback_data'=>"y2|$n[1]|weekly"],['text'=>"توقعات اليوم",'callback_data'=>"hm1|$n[1]"]],
[['text'=>"رجوع",'callback_data'=>"BBACK"]]
]])]);}

if( $data == "brg"){
bot('editMessageText',['chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"
- لمعرفة برجك ارسل فقط مواليدك !.
- مثال : 2002/12/28
- - - - -",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"BBACK"]],
]])]);}

if($text != "/start"){
if(preg_match('/(.*)\/(.*)/',$text)){
$A = json_decode(file_get_contents("https://sssass.ml/api/jj.php/?Brj=$text"));
$a = $A->Brje->BR;
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"
🗼 عزيزي برجك هوه : $a

$txtfree",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
]);}}

