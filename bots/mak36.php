<?php#*wataw*

if($start=="non"){
$start="
مرحبًا بك: $name
📑 البوت مخصص لأنشاء واداره عمل الفقرات والاسئله في القنوات.
📣 لعمل فقره خاصة بك قم بالضغط علئ انشاء فقره.
📋 التعليمات داخل البوت لتسهيل عليك عمل البوت.
";}

function DeleteFolder($path){if($handle=opendir($path)){
while (false!==($file=readdir($handle))){
if($file<>"." AND $file<>".."){
if(is_file($path.'/'.$file)){ @unlink($path.'/'.$file);} 
if(is_dir($path.'/'.$file)) { deletefolder($path.'/'.$file); @rmdir($path.'/'.$file); }}}}}

// $update = json_decode(file_get_contents("php://input")); (Already handled in mak.php)
$message = $update->message;
$txt = $message->caption;
$text = $message->text;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$new = $message->new_chat_members;
$message_id = $message->message_id;
$type = $message->chat->type;
$name = $message->from->first_name;
if(isset($update->callback_query)){
$up = $update->callback_query;
$chat_id = $up->message->chat->id;
$from_id = $up->from->id;
$user = $up->from->username;
$name = $up->from->first_name;
$message_id = $up->message->message_id;
$data = $up->data;}
$id = $update->inline_query->from->id; 
$sud = file_get_contents("info.txt");

$sudo = array("299938224","$admin");
$botuser="$usernamebot";

$amr = file_get_contents("sudo/amr.txt");
$ch1 = file_get_contents("sudo/ch1.txt");
$ch2= file_get_contents("sudo/ch2.txt");
$taf3il = file_get_contents("sudo/tanbih.txt");
$estgbal = file_get_contents("sudo/estgbal.txt");
$reply = $message->reply_to_message->message_id;
$rep = $message->reply_to_message->forward_from; 
$idiline= $update->inline_query->id;

$ainfo= file_get_contents("data/ainfo.txt");
$chan= file_get_contents("data/chan.txt");
$law= file_get_contents("data/law.txt");
$infobot= file_get_contents("data/infobot.txt");
$msrd= file_get_contents("data/msrd.txt");
$naame= file_get_contents("data/name.txt");
$nmbaer= file_get_contents("data/Nmbaer.txt");
$amru=file_get_contents("data1/$from_id/amr.txt");
$llink=file_get_contents("code/$from_id/code.txt");
$textfg=file_get_contents("data1/$from_id/text.txt");
$tilitet = "♻️ مشاركه مع اصدقائك";


if($text == '/start' and !in_array($from_id,$ban) and !file_exists("data1/$from_id/text.txt") and $message->chat->type == 'private'){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📝 انشاء فقرة','callback_data'=>'onfgrah']],
]])]);}

if($text == '/start' and file_exists("data1/$from_id/text.txt") and $message->chat->type == 'private'){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"اهلا بك عزيزي [$name](tg://user?id=$from_id) مجدداً 
هذة هي فقرتك الحالية : *$textfg*

كود الفقرة: `$llink`
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$tilitet",'switch_inline_query'=>"$llink"]],
[['text'=>'رسالة الترحيب 📩.','callback_data'=>'welcome']],
[['text'=>'رسالة الرد على المشاركة ✉','callback_data'=>'rd']],
[['text'=>'نشر المشاركات تلقائيا📮','callback_data'=>'nskihr']],
[['text'=>'🚮 انهاء الفقرة','callback_data'=>'deletfgrah']]]])]);}

if($data == 'home' and !in_array($from_id,$ban) and !file_exists("data1/$from_id/text.txt") ){
file_put_contents("data1/$from_id/amr.txt","");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"$start

$txtfree",
'parse_mode'=>'html',
'reply_to_message_id'=>$message->message_id,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📝 انشاء فقرة','callback_data'=>'onfgrah']],
]])]);}

if($data == 'homee' and !in_array($from_id,$ban) and !file_exists("data1/$from_id/text.txt") ){
file_put_contents("data1/$from_id/amr.txt","");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"$start

$txtfree",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📝 انشاء فقرة','callback_data'=>'onfgrah']],
]])]);}

$llink=file_get_contents("code/$from_id/code.txt");
if($data == 'homee' and file_exists("data1/$from_id/text.txt") ){
file_put_contents("data1/$from_id/amr.txt"," ");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"هذة هي فقرتك الحالية : *$textfg*

كود الفقرة : `$llink`",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$tilitet",'switch_inline_query'=>"$llink"]],
[['text'=>'رسالة الترحيب 📩.','callback_data'=>'welcome']],
[['text'=>'رسالة الرد على المشاركة ✉','callback_data'=>'rd']],
[['text'=>'نشر المشاركات تلقائيا📮','callback_data'=>'nskihr']],
[['text'=>'🚮 انهاء الفقرة','callback_data'=>'deletfgrah']]]])]);}

if($data == 'onfgrah' and !in_array($from_id,$ban) ){
mkdir("data1");
mkdir("data1");
mkdir("data1/$from_id");
file_put_contents("data1/$from_id/amr.txt","fgrh");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
عزيزي [$name](tg://user?id=$from_id) :
تستطيع انشاء فقرة من هذا البوت وارسالها للقناه والتحكم بالمشاركات
- الان قم بارسال نص منشور الفقرة :
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🚸 رجوع.','callback_data'=>'home']],]])]);}

$tilitet = "مشاركه مع اصدقائك ♻️.";
if($text and $amru == "fgrh"){
file_put_contents("data1/$from_id/amr.txt","");
file_put_contents("data1/$from_id/txt.txt","$text");
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"
عزيزي [$name](tg://user?id=$from_id) :
- هذه هي الفقرة التي قمت بإنشائها:
*$text*",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'☑ حفظ الفقرة','callback_data'=>'seve']],
[['text'=>'🚸 رجوع.','callback_data'=>'home']]]])]);}

$teext=file_get_contents("data1/$from_id/txt.txt");
if($data == 'seve' and !in_array($from_id,$ban) ){
$rand = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -14);
mkdir("code");
mkdir("fgrat");
mkdir("code/$from_id");
mkdir("fgrat/$rand");
mkdir("message_id");
file_put_contents("code/$from_id/code.txt","$rand");
file_put_contents("fgrat/$rand/admin.txt","$from_id");
file_put_contents("fgrat/$rand/text.txt","$teext");
file_put_contents("data1/$from_id/amr.txt","");
file_put_contents("fgrat/$rand/count.txt","1");
file_put_contents("fgrat/$rand/on.txt","yes");
file_put_contents("data1/$from_id/text.txt","$teext");
file_put_contents("fgrat/$rand/name.txt","✅");
file_put_contents("fgrat/$rand/t3.txt","❌");
file_put_contents("fgrat/$rand/id.txt","❌");
$textt=file_get_contents("data1/$from_id/text.txt");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ تم حفظ منشور الفقرة بنجاح : *$textt*
كود الفقرة: `$rand`
قم بإختيار تعيين الاعدادات",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"$tilitet",'switch_inline_query'=>"$rand"]],
[['text'=>'رسالة الترحيب 📩.','callback_data'=>'welcome']],
[['text'=>'رسالة الرد على المشاركة ✉','callback_data'=>'rd']],
[['text'=>'نشر المشاركات تلقائيا📮','callback_data'=>'nskihr']],
[['text'=>'🚮 انهاء الفقرة','callback_data'=>'deletfgrah']],
[['text'=>'🚸 رجوع.','callback_data'=>'homee']]]])]);}

if($data == 'welcome' and !in_array($from_id,$ban) ){
file_put_contents("data1/$from_id/amr.txt","welcome");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ قم بارسال رسالة الترحيب بالمشاركين",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🚸 رجوع.','callback_data'=>'homee']]
]])]);}

if($text and $amru == "welcome"){
file_put_contents("data1/$from_id/amr.txt","");
file_put_contents("data1/$from_id/welcome.txt","$text");
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"✅ تم وضع رسالة الترحيب: *$text*",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🚸 رجوع.','callback_data'=>'homee']]]])]);}

if($data == 'rd' and !in_array($from_id,$ban) ){
file_put_contents("data1/$from_id/amr.txt","rd");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ قم بارسال رسالة الرد التي سيقوم البوت بارسالها للمشاركين بعد ارسال مشاركاتهم
📑 ارسل الرد حالا:...",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🚸 رجوع.','callback_data'=>'homee']]]])]);}

if($text and $amru == "rd"){
file_put_contents("data1/$from_id/amr.txt","");
file_put_contents("data1/$from_id/rd.txt","$text");
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"تم وضع رسالة الرد: *$text*",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🚸 رجوع.','callback_data'=>'homee']]
]])]);}

$code= file_get_contents("code/$from_id/code.txt");
$name_msh = file_get_contents("fgrat/$code/name.txt");
$id_msh = file_get_contents("fgrat/$code/id.txt");
$t3_msh = file_get_contents("fgrat/$code/t3.txt");
if($data == 'nskihr' and !in_array($from_id,$ban)){
file_put_contents("data1/$from_id/amr.txt","");
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تشغيل هذة المميزة تتيح للبوت نشر المشاركات تلقائيا في القنوات قم بتعيين القنوات لتشغيل هذه الميزه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📡 تعيين القنوات.','callback_data'=>'channelyry']], 
[['text'=>'📌 التثبيت في القنوات','callback_data'=>'تثبيت']], 
[['text'=>'🔍 خصوصية المشاركين','callback_data'=>'تاللللبب']], 
[['text'=>'❕اسم المشارك'.$name_msh,'callback_data'=>'تاللللبب']], 
[['text'=>'مفعل ✅','callback_data'=>'onname'], ['text'=>'معطل ❌','callback_data'=>'offname']],
[['text'=>'🎙️ رابط مخفي للمشارك'.$id_msh,'callback_data'=>'تاللللبب']], 
[['text'=>'مفعل ✅','callback_data'=>'onid'], ['text'=>'معطل ❌','callback_data'=>'offid']],
[['text'=>'💠 السماح بالتعليقات'.$t3_msh,'callback_data'=>'تاللللبب']], 
[['text'=>'مفعل ✅','callback_data'=>'ont3'], ['text'=>'معطل ❌','callback_data'=>'offt3']],
[['text'=>'🚸 رجوع.','callback_data'=>'homee']],   
]])]);}

function wataw($chat_id,$message_id,$name){
$code= file_get_contents("code/$chat_id/code.txt");
$name_msh = file_get_contents("fgrat/$code/name.txt");
$id_msh = file_get_contents("fgrat/$code/id.txt");
$t3_msh = file_get_contents("fgrat/$code/t3.txt");
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تشغيل هذة المميزة تتيح للبوت نشر المشاركات تلقائيا في القنوات قم بتعيين القنوات لتشغيل هذه الميزه",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📡 تعيين القنوات.','callback_data'=>'channelyry']], 
[['text'=>'📌 التثبيت في القنوات','callback_data'=>'تثبيت']], 
[['text'=>'🔍 خصوصية المشاركين','callback_data'=>'تاللللبب']], 
[['text'=>'❕اسم المشارك'.$name_msh,'callback_data'=>'تاللللبب']], 
[['text'=>'مفعل ✅','callback_data'=>'onname'], ['text'=>'معطل ❌','callback_data'=>'offname']],
[['text'=>'🎙️ رابط مخفي للمشارك'.$id_msh,'callback_data'=>'تاللللبب']], 
[['text'=>'مفعل ✅','callback_data'=>'onid'], ['text'=>'معطل ❌','callback_data'=>'offid']],
[['text'=>'💠 السماح بالتعليقات'.$t3_msh,'callback_data'=>'تاللللبب']], 
[['text'=>'مفعل ✅','callback_data'=>'ont3'], ['text'=>'معطل ❌','callback_data'=>'offt3']],
[['text'=>'🚸 رجوع.','callback_data'=>'homee']],   
]])]);}

if ( $data == "onname" ){
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/name.txt","✅");
wataw($chat_id,$message_id,$name);}

if ( $data == "offname" ) {
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/name.txt","❌");
wataw($chat_id,$message_id,$name);}

if ( $data == "onid" ) {
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/id.txt","✅");
wataw($chat_id,$message_id,$name);}

if ( $data == "offid" ) {
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/id.txt","❌");
wataw($chat_id,$message_id,$name);}

if ( $data == "ont3" ) {
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/t3.txt","✅");
wataw($chat_id,$message_id,$name);}

if ( $data == "offt3" ) {
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/t3.txt","❌");
wataw($chat_id,$message_id,$name);}

if($data == 'channelyry' and !in_array($from_id,$ban) ){
file_put_contents("data1/$from_id/amr.txt","channelyry");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
✅ قم بارسال يوزرات القنوات لتفعيل النشر التلقائي للمشاركات تستطيع ارسال اكثر من قناة.
*ملاحظة*: يجب ان تقوم برفع البوت ادمن في القناة اولاً.
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🚸 رجوع.','callback_data'=>'nskihr']],]])]);}

if($text and $amru == "channelyry"){
file_put_contents("data1/$from_id/amr.txt"," ");
$code= file_get_contents("code/$from_id/code.txt");
mkdir("channel");
$str=0;
$textt = str_replace("\n"," ",$text);
$textt = str_replace(" ","-",$textt);
$channel = explode("-",$textt);
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)@(.*)|@(.*)|(.*)@/',$textt)){
for($l=0;$l<count($channel);$l++){
if($channel[$l]!=""){
$chan=$channel[$l];
$admins = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChatAdministrators?chat_id=$chan"))->ok;
$chyes=explode("\n",file_get_contents("data1/$from_id/channel.txt"));
$adminss = file_get_contents("http://api.telegram.org/bot$token/getChatAdministrators?chat_id=$chan");
//file_put_contents("wathq.txt","-$adminss \n ",FILE_APPEND);
if($admins==1){
if(strpos($adminss,"$from_id") !== false){
$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$chan"))->result->id; 

if(!in_array($ch_id,$chyes)){
file_put_contents("data1/$from_id/channel.txt","$ch_id\n",FILE_APPEND);
file_put_contents("data1/$from_id/channelyes.txt","yes");
file_put_contents("channel/$ch_id.txt","$code");
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"✅ تم قبول القناة $chan بنجاح",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,]);
$str=1;}
}else{
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"❌ المعذره انت لست ادمن في هذة القناة $chan",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,]);}
}else{
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"🚫 المعذره يجب رفع البوت ادمن في هذه القناة: $chan",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
]);}}}
}else{
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"عزيزي $name :
🚫 المعذره قم بارسال معرف القنوات ولا شي اخر",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,]);}

if($str==1){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"عزيزي $name :
✅ تم الانتهاء من اضافة القنوات
🚩 هل تريد القيام بنشر الفقرة
",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'♻ نشر الفقرة','callback_data'=>"postfg"]],]])]);}}

if($data == 'postfg' and !in_array($from_id,$ban)){
$code=file_get_contents("code/$from_id/code.txt");
mkdir("fgrat/$code/reply");
bot('editmessagetext',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"جارٍ نشر الفقرة في القنوات المضافة انتظر قليلاً ...⏳",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,]);

$chyes=explode("\n",file_get_contents("data1/$from_id/channel.txt"));
$texxt=file_get_contents("fgrat/$code/text.txt");
for($i=0;$i<count($chyes);$i++){
$get1=bot('sendMessage',[
'chat_id'=>$chyes[$i],
'text'=> "$texxt

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"إرسال مشاركة 📝",'url'=>"https://telegram.me/$botuser?start=$code"]],
]])]);

$msg_id1 = $get1->result->message_id;
file_put_contents("fgrat/$code/reply/$chyes[$i].txt","$msg_id1");
file_get_contents("https://api.telegram.org/bot$token/pinchatMessage?chat_id=$chyes[$i]&message_id=$msg_id1");}
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم نشر الفقرة في جميع القنوات المضافة وتم تثبيتها كمنشور مثبت ..✅ ",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,]);}

//التثبيت 
if($data == 'تثبيت' and !in_array($from_id,$ban)){
file_put_contents("data1/$from_id/amr.txt","");
bot('sendmessage',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تشغيل هذة المميزة تتيح للبوت حذف اي منشور يقوم بنشره الادمنية في القنوات المضبوطة للنشر التلقائي الى بعد انهاء الفقرة..",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'📌 قم بالتثبيت','callback_data'=>'تثبيتت']],   
]])]);}

if($data == 'تثبيتت' and !in_array($from_id,$ban)){
file_put_contents("data1/$from_id/amr.txt","");
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/tthbit.txt","yes");
bot('Editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تم تشغيل هذة الميزة بنجاح",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء التثبيت','callback_data'=>'الغاالتثبيت']],   
]])]);}

if($data == 'الغاالتثبيت' and !in_array($from_id,$ban)){
file_put_contents("data1/$from_id/amr.txt","");
$code= file_get_contents("code/$from_id/code.txt");
file_put_contents("fgrat/$code/tthbit.txt","no");
bot('Editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اهلا بك [$name](tg://user?id=$from_id) :
✅ تم تعطيل ميزة التثبيت
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,]);}
//انهاء الفقرة  
if($data == 'deletfgrah' and !in_array($from_id,$ban) ){
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌛ جارٍ انهاء الفقرة انتظر قليلاً ...",]);

if(file_exists("data1/$from_id/amr.txt")){
$chyes=explode("\n",file_get_contents("data1/$from_id/channel.txt"));
$code=file_get_contents("code/$from_id/code.txt");
for($i=0;$i<count($chyes);$i++){
$ch_id=$chyes[$i];
$rep=file_get_contents("fgrat/$code/reply/$ch_id.txt");
$count_m=file_get_contents("fgrat/$code/count.txt")-1;

if($count_m ==1 or $count_m >10){
$msh= "مشاركة";}
if($count_m >1 and $count_m <= 10){
$msh= "مشاركات";}
$get1=bot('sendMessage',['chat_id'=>$ch_id,
'text'=>"
📄 لقد تم انهاء الفقره 🤍:
📋 عدد المشاركين: $count_m $msh ❤️‍🔥.
⏳ أنتظرونا في فقره جديده ومميزه 💛.
💡 بوت الفقرات: @$botuser .

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$rep,
'reply_markup'=>json_encode(['inline_keyboard'=>[
]])]);}

if(is_dir("data1/$from_id")){
DeleteFolder("data1/$from_id");}}
$code=file_get_contents("code/$from_id/code.txt");
if(file_exists("fgrat/$code/text.txt")){
if(is_dir("fgrat/$code")){
DeleteFolder("fgrat/$code");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تم انهاء الفقرة بنجاح 
- لحذف المشاركات التي قام البوت بنشرها في القنوات قم بإختيار زر حذف المنشورات.
",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'⚠ حذف المشاركات','callback_data'=>"deletall ".$code]],
]])]);}}}
//حذف المشاركات 
if (preg_match('/^(deletall) (.*)/s',$data) ) {
$data1 = explode(" ",$data);
$code= $data1['1'];
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"⌛ جارٍ الحذف انتظر قليلاً ... ",]);
$chyes=explode("\n",file_get_contents("message_id/$code.txt"));
for($i=0;$i<count($chyes);$i++){
$ex = explode("=", $chyes[$i]);
$mes_id=$ex['1'];
$ch_id=$ex['0'];
file_get_contents("https://api.telegram.org/bot$API_KEY/deleteMessage?chat_id=$ch_id&message_id=$mes_id");}
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تم انهاء الفقرة بنجاح 
✅ وتم حذف جميع المشاركات من جميع القنوات التي تم النشر فيها ..
",]);}

///// الاعضاء 
if(preg_match('/^\/([Ss]tart) (.*)/',$text)){
preg_match('/^\/([Ss]tart) (.*)/',$text,$match);
mkdir("memb");
mkdir("memb/code");
mkdir("memb/memb");
$code=$match[2];
$yas=file_get_contents("fgrat/$code/on.txt");
$mem_fg=explode("\n",file_get_contents("fgrat/$code/members.txt"));
if($yas=="yes" or $yas != null){
if(!in_array($from_id,$mem_fg)){
$ad_fg=file_get_contents("fgrat/$code/admin.txt");
file_put_contents("memb/code/$from_id.txt","$code");
file_put_contents("memb/memb/$from_id.txt","mlgi");
file_put_contents("memb/code/$from_id.txt","$code");
$text_fg=file_get_contents("fgrat/$code/text.txt");
$welcome2=file_get_contents("data1/$ad_fg/welcome.txt");
if($from_id != $ad_fg){
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"
اهلا بك عزيزي $name :
🔥 الفقرة : $text_fg

$txtfree",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,]);
if($welcome2!=null){
$wel=$welcome2;
}else{
$wel="* هل تريد المشاركة \n";}
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"$wel
قم بالضغط على زر مشاركة لإرسال مشاركتك 🌸

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'- مشاركة','callback_data'=>'msharkh']],
]])]);
}else{
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"لا تستطيع المشاركة في الفقرة لانك انت من أنشائتها 🚫",
'parse_mode'=>'html',
'disable_web_page_preview'=>true,]);}
}else{
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"❌ لا تستطيع المشاركة اكثر من مرة واحدة فقط نظرا لسياسة خصوصية البوت",
]);}
}else{
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"المعذره عزيزي تم انهاء الفقرة من قبل المنشئ 🚫",
]);}return false;}
$getamr=file_get_contents("memb/memb/$from_id.txt");

//ارسال المشاركةة 
if($data == 'msharkh' and !in_array($from_id,$ban) ){
$codee=file_get_contents("memb/code/$from_id.txt");
$mem_fg=explode("\n",file_get_contents("fgrat/$codee/members.txt"));
$yas=file_get_contents("fgrat/$codee/on.txt");
$mem_fg=explode("\n",file_get_contents("fgrat/$codee/members.txt"));
if($yas=="yes" or $yas != null){
if(!in_array($from_id,$mem_fg)){
file_put_contents("memb/memb/$from_id.txt","msharkh");
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id,]);
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"
اهلا بك عزيزي [$name](tg://user?id=$from_id) :
🌸 قم بإرسال مشاركتك الان
🚫 ملاحظة : لا تستطيع المشاركة اكثر من مره واحدة في الفقرة
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'❌ الغاء','callback_data'=>'الغاء']],
]])]);
}else{
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❌ لا تستطيع المشاركة اكثر من مرة واحدة فقط نظرا لسياسة خصوصية البوت",]);}
}else{
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🚫 المعذره عزيزي تم انهاء الفقرة من قبل منشئ الفقرة",
'reply_markup'=>json_encode(['inline_keyboard'=>[
]])]);}}

if($data == 'الغاء'){
file_put_contents("memb/memb/$from_id.txt"," ");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم الغاء مشاركتك 📄",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'👋🏻 مشاركة.','callback_data'=>'msharkh']],
]])]);}

$photo=$message->photo;
$video=$message->video;
$document=$message->document;
$sticker=$message->sticker;
$voice=$message->voice;
$audio=$message->audio;
//غير مشارك 
if(!$data and $text != "/start" and $getamr=="mlgi"){
file_put_contents("memb/memb/$from_id.txt"," ");
bot('sendmessage',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"🚫 عذرا عزيزي لا تستطيع المشاركة مالم تقوم بالضغط على زر المشاركة بالاسفل",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'👋🏻 مشاركة.','callback_data'=>'msharkh']],
]])]);}

if($message and $getamr=="msharkh"){
file_put_contents("memb/memb/$from_id.txt"," ");
$codee=file_get_contents("memb/code/$from_id.txt");
$str=0;
$na_me=$name;
mkdir("fgrat/$codee/info");
mkdir("fgrat/$codee/info/$from_id");
$name_msh = file_get_contents("fgrat/$codee/name.txt");
$id_msh = file_get_contents("fgrat/$codee/id.txt");
$name=str_replace(['_','*','`','>','<','/'],' ',$name);
$text=str_replace(['_','*','`','>','<','/'],' ',$text);
$mods="html";
if($name_msh=="✅"){
$name=$name;
if($id_msh=="✅"){
$name="[$name](tg://user?id=$from_id)";
$mods="MarkDown";}
}else{
$name="*اسم مخفي*";}

$admin=file_get_contents("fgrat/$codee/admin.txt");
$channelyes=file_get_contents("data1/$admin/channelyes.txt");
$chyes=explode("\n",file_get_contents("data1/$admin/channel.txt"));
$count_m=file_get_contents("fgrat/$codee/count.txt");

$rd=file_get_contents("data1/$admin/rd.txt");
file_put_contents("fgrat/$codee/members.txt","$from_id\n",FILE_APPEND);
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id-1,]);
if($rd!=null){
$rdd=$rd;
}else{
$rdd="شكرا على المشاركة تم إرسال مشاركتك بنجاح ✅";}
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"$rdd",]);
$info= "$codee=$from_id";
if($text){
$str=1;
$get=bot('sendMessage',['chat_id'=>$admin,
'text'=>"المشآركة رقم ( $count_m )
من : $name
$text",
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'اعجاب','callback_data'=>"like ".$from_id],['text'=>'تعليق','callback_data'=>"t3lig ".$info]],]])]);
$msg_id = $get->result->message_id;
$strtext="
المشآركة رقم ( $count_m )
من : $name
$text\n";
file_put_contents("fgrat/$codee/info/$from_id/text.txt","$strtext",FILE_APPEND);
file_put_contents("fgrat/$codee/info/$from_id/info.txt","$info=$na_me");

if($channelyes=="yes"){
for($i=0;$i<count($chyes);$i++){
$ch_id=$chyes[$i];
$rep=file_get_contents("fgrat/$codee/reply/$ch_id.txt");
$get1=bot('sendMessage',[
'chat_id'=>$ch_id,
'text'=>"
المشآركة رقم ( $count_m )
من : $name
$text",    
'reply_to_message_id'=>$rep,
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,]);
$msg_id1 = $get1->result->message_id;
file_put_contents("fgrat/$codee/info/$from_id/message_id.txt","$ch_id=$msg_id1\n",FILE_APPEND);
file_put_contents("message_id/$codee.txt","$ch_id=$msg_id1\n",FILE_APPEND);}}
}else{

if($photo){
$sens="sendphoto";
$file_id = $update->message->photo[1]->file_id;
$str=1;}

if($document){
$sens="senddocument";
$file_id = $update->message->document->file_id;
$str=1;}

if($video){
$sens="sendvideo";
$file_id = $update->message->video->file_id;
$str=1;}

if($audio){
$sens="sendaudio";
$file_id = $update->message->audio->file_id;
$str=1;}

if($voice){
$sens="sendvoice";
$file_id = $update->message->voice->file_id;
$str=1;}

if($sticker){
$sens="sendsticker";
$file_id = $update->message->sticker->file_id;
$str=1;}
$ss=str_replace("send","",$sens);
$get1=bot($sens,["chat_id"=>$admin,
"$ss"=>"$file_id",
'caption'=>"
المشآركة رقم ( $count_m )
من : $name
",
'parse_mode'=>$mods,
#'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'اعجاب','callback_data'=>"like ".$from_id],['text'=>'تعليق','callback_data'=>"t3lig ".$info]],]])]);

$strtext = "
المشآركة رقم ( $count_m )
من : $name
$text\n";
file_put_contents("fgrat/$codee/info/$from_id/text.txt","$strtext",FILE_APPEND);
file_put_contents("fgrat/$codee/info/$from_id/info.txt","$info=$na_me");
if($channelyes=="yes"){
for($o=0;$o<count($chyes);$o++){
$ss=str_replace("send","",$sens);
$ch_id=$chyes[$o];
$rep=file_get_contents("fgrat/$codee/reply/$ch_id.txt");
$get1=bot($sens,["chat_id"=>$ch_id,
"$ss"=>"$file_id",
'caption'=>"",
'reply_to_message_id'=>$rep,
'parse_mode'=>'MarkDown',]);
$msg_id1 = $get1->result->message_id;
$get2=bot('sendMessage',['chat_id'=>$ch_id,
'text'=>"
المشآركة رقم ( $count_m )
من : $name
$text",    
'reply_to_message_id'=>$msg_id1,
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,]);
$msg_id2 = $get2->result->message_id;
file_put_contents("fgrat/$codee/info/$from_id/message_id.txt","$ch_id=$msg_id2\n",FILE_APPEND);
file_put_contents("message_id/$codee.txt","$ch_id=$msg_id1\n",FILE_APPEND);
file_put_contents("message_id/$codee.txt","$ch_id=$msg_id2\n",FILE_APPEND);}}}

if($str==1){
$cou= $count_m+1;
file_put_contents("fgrat/$codee/count.txt",$cou);}}

if (preg_match('/^(t3lig) (.*)/s',$data) ) {
$data1 = explode(" ",$data);
$info= $data1['1'];
$infoo=explode("=",$info);
$code= $infoo['0'];
$from= $infoo['1'];
file_put_contents("data1/$from_id/amr.txt","تعليق");
$editch=file_get_contents("fgrat/$code/info/$from/message_id.txt");
$textinfo=file_get_contents("fgrat/$code/info/$from/text.txt");
$info1=file_get_contents("fgrat/$code/info/$from/info.txt");
file_put_contents("data1/$from_id/t3lig.txt","$info1");
$infooo=explode("=",$info1);
$codee= $infooo['0'];
$fromid= $infooo['1'];
$nameid= $infooo['2'];
$textinfo=str_replace("$name","$nameid",$textinfo);
$textinfo=str_replace("watawadmin","$name",$textinfo);
$nameee="[$nameid](tg://user?id=$fromid)";
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"
قم بإرسال تعليقك ليتم تعديل الرسالة في الخاص وكل القنوات
📣 كود الفقرة :*$codee*
بيانات العضو 🙋
💡 الاسم: `$nameee`
📒 الايدي: `$fromid`
📑 نص المشاركة: `$textinfo`
",
'parse_mode'=>'MarkDown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء ⚠','callback_data'=>"الغاااء"]],
]])]);}

if($data == 'الغاااء'){
file_put_contents("data1/$from_id/amr.txt","");
file_put_contents("data1/$from_id/t3lig.txt","");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم الغاء تعليقك",]);}

if($text and $amru == "تعليق"){
file_put_contents("data1/$from_id/amr.txt","");
$info=file_get_contents("data1/$from_id/t3lig.txt");
$infoo=explode("=",$info);
$code= $infoo['0'];
$from= $infoo['1'];
$nameid= $infoo['2'];
//ايدي القنوات 
$editch=file_get_contents("fgrat/$code/info/$from/message_id.txt");
//رسالة العضو
$name_msh = file_get_contents("fgrat/$code/name.txt");
$id_msh = file_get_contents("fgrat/$code/id.txt");
$t3_msh = file_get_contents("fgrat/$code/t3.txt");
$name=str_replace(['_','*','`','>','<'],' ',$name);
$text=str_replace(['_','*','`','>','<'],' ',$text);
$mods="html";
if($name_msh=="✅"){
$mshark= $nameid;
$name=$name;
if($id_msh=="✅"){
$mshark= "[$nameid](tg://user?id=$from)";
$name="[$name](tg://user?id=$from_id)";
$mods="MarkDown";}}
$telig="\n تعليق الادمن - watawadmin :\n$text";
file_put_contents("fgrat/$code/info/$from/text.txt","$telig\n",FILE_APPEND);
$textinfo=file_get_contents("fgrat/$code/info/$from/text.txt");
$iin = "$code";
$textinfo=str_replace(['_','*','`','>','<'],' ',$textinfo);
$textinfo=str_replace("$name","$mshark",$textinfo);
$textinfo=str_replace("watawadmin","$name",$textinfo);
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"
✅ لقد قمت بالتعليق على المشاركة
اصبحت المشاركة كالتالي : $textinfo
",
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,]);
$t3_msh = file_get_contents("fgrat/$code/t3.txt");
if($t3_msh=="✅"){
$azrar = json_encode(['inline_keyboard'=>[
[['text'=>'اعجاب','callback_data'=>"likee ".$iin],['text'=>'تعليق','callback_data'=>"t3ligg ".$iin]],]]);
}else{
$azrar = json_encode(['inline_keyboard'=>[
[['text'=>"إعجاب",'callback_data'=>"likee ".$iin]],]]);}
bot('sendmessage',['chat_id'=>$from,
'text'=>"
✅ تم التعليق على مشاركتك
اصبحت مشاركتك كالتالي : $textinfo
",
'parse_mode'=>"$mods",
'disable_web_page_preview'=>true,
'reply_markup'=>$azrar]);
file_put_contents("data1/$from_id/t3lig.txt","");
$channelyes=file_get_contents("data1/$from_id/channelyes.txt");
$chyes=explode("\n",file_get_contents("fgrat/$code/info/$from/message_id.txt"));
if($channelyes=="yes"){
for($i=0;$i<count($chyes);$i++){
$ex = explode("=", $chyes[$i]);
$mes_id=$ex['1'];
$ch_id=$ex['0'];
bot('editMessageText',['chat_id'=>$ch_id,
'message_id'=>$mes_id,
'text'=>"$textinfo",
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,]);}}}
//تعليق الاعضاء
$getamr=file_get_contents("memb/memb/$from_id.txt");
if (preg_match('/^(t3ligg) (.*)/s',$data) ) {
$data1 = explode(" ",$data);
$code= $data1['1'];
file_put_contents("memb/memb/$from_id.txt","تعليق");
$textinfo=file_get_contents("fgrat/$code/info/$from_id/text.txt");
$textinfo=str_replace(['_','*','`','>','<'],' ',$textinfo);
$textinfo=str_replace("$name","$name",$textinfo);
$textinfo=str_replace("watawadmin","ادمن الفقرة",$textinfo);
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"- مرحبا بك : $name
ℹ هذة هي مشاركتك : $textinfo
🔴 تنويه: لاتستطيع التعليق اكثر من مرة واحدة فقط.
- حسنا عزيزي قم بإرسال تعليقك.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"الغااااء"]],
]])]);}

if($data == 'الغااااء'){
file_put_contents("memb/memb/$from_id.txt"," ");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"تم الغاء تعليقك",]);}

if($text and $getamr == "تعليق"){
file_put_contents("memb/memb/$from_id.txt"," ");
$code=file_get_contents("memb/code/$from_id.txt");
$admin=file_get_contents("fgrat/$code/admin.txt");
//ايدي القنوات 
$name_msh = file_get_contents("fgrat/$code/name.txt");
$id_msh = file_get_contents("fgrat/$code/id.txt");
$name=str_replace(['_','*','`','>','<','/'],' ',$name);
$text=str_replace(['_','*','`','>','<'],' ',$text);
$mods="html";
if($name_msh=="✅"){
$name=$name;
if($id_msh=="✅"){
$name="[$name](tg://user?id=$from_id)";
$mods="MarkDown";}
}else{
$name="*اسم مخفي*";}

//رسالة العضو
$telig="\n تعليق المشارك - $name :\n$text";
file_put_contents("fgrat/$code/info/$from_id/text.txt","$telig\n",FILE_APPEND);
$textinfo=file_get_contents("fgrat/$code/info/$from_id/text.txt");
$textinfo=str_replace(['_','*','`','>','<'],' ',$textinfo);
$textinfo=str_replace("$name","$name",$textinfo);
$textinfo=str_replace("watawadmin","ادمن الفقرة",$textinfo);
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id-1,]);
bot('sendmessage',['chat_id'=>$chat_id,
'text'=>"
✅ لقد قمت بالتعليق على مشاركتك
اصبحت المشاركة كالتالي : $textinfo
",
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,]);
$from="$code=$from_id";
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"
✅ تم التعليق على تعليقك من قبل: $name
اصبحت مشاركتة كالتالي : $textinfo
",
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'نشر التعليق.','callback_data'=>"nshrt3 ".$from]],
[['text'=>'اعجاب','callback_data'=>"like ".$from_id],['text'=>'تعليق','callback_data'=>"t3lig ".$from]],
[['text'=>'حذف المشاركة','callback_data'=>"deletpost ".$from]]
]])]);}

if (preg_match('/^(nshrt3) (.*)/s',$data) ) {
$data1 = explode(" ",$data);
$info= $data1['1'];
$infoo = explode("=",$info);
$code= $infoo['0'];
$from= $infoo['1'];
$info1=file_get_contents("fgrat/$code/info/$from/info.txt");
$infooo=explode("=",$info1);
$nameid= $infooo['2'];
$codee= file_get_contents("code/$from_id/code.txt");
$name_msh = file_get_contents("fgrat/$codee/name.txt");
$id_msh = file_get_contents("fgrat/$codee/id.txt");
$name=str_replace(['_','*','`','>','<'],' ',$name);
$text=str_replace(['_','*','`','>','<'],' ',$text);
$mods="html";
if($name_msh=="✅"){
$mshark=$nameid;
$name=$name;
if($id_msh=="✅"){
$mshark="[$nameid](tg://user?id=$from)";
$name="[$name](tg://user?id=$from_id)";
$mods="MarkDown";}
}else{
$mshark="*اسم مخفي*";}

$textinfo=file_get_contents("fgrat/$code/info/$from/text.txt");
$textinfo=str_replace("$name","$mshark",$textinfo);
$textinfo=str_replace("watawadmin","$name",$textinfo);
$channelyes=file_get_contents("data1/$from_id/channelyes.txt");
$chyes=explode("\n",file_get_contents("fgrat/$code/info/$from/message_id.txt"));
if($channelyes=="yes"){
bot('sendmessage',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"جارٍ تعديل المشاركة في جميع القنوات ⏳.. ",]);
for($i=0;$i<count($chyes);$i++){
$ex = explode("=", $chyes[$i]);
$mes_id=$ex['1'];
$ch_id=$ex['0'];
bot('editMessageText',['chat_id'=>$ch_id,
'message_id'=>$mes_id,
'text'=>"$textinfo",
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,]);}
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id+1,
'text'=>"✅ تعديل المشاركة في جميع القنوات بنجاح..",]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❌ المعذره عزيزي لم تقوم بتفعيل خيار النشر التلقائي",]);}}
// حذف المشاركة
if (preg_match('/^(deletpost) (.*)/s',$data) ) {
$data1 = explode(" ",$data);
$info= $data1['1'];
$infoo = explode("=",$info);
$code= $infoo['0'];
$from= $infoo['1'];
$info1=file_get_contents("fgrat/$code/info/$from/info.txt");
$codee= file_get_contents("code/$from_id/code.txt");
$name_msh = file_get_contents("fgrat/$codee/name.txt");
$id_msh = file_get_contents("fgrat/$codee/id.txt");
$mods="html";
if($name_msh=="✅"){
if($id_msh=="✅"){
$mods="MarkDown";}}
$textinfo=file_get_contents("fgrat/$code/info/$from/text.txt");
$infooo=explode("\n",$textinfo);
$text= $infooo['0'];
$text1= $infooo['1'];
$text2= $infooo['2'];
$tixt= "$text \n $text1 \n $text2 \n 🚫 قام ادمن هذة الفقرة بحذف هذة المشاركة";
$textinfo=$tixt;
$channelyes=file_get_contents("data1/$from_id/channelyes.txt");
$chyes=explode("\n",file_get_contents("fgrat/$code/info/$from/message_id.txt"));
if($channelyes=="yes"){
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"جارٍ حذف المشاركة من جميع القنوات ⏳.. $text",]);
for($i=0;$i<count($chyes);$i++){
$ex = explode("=", $chyes[$i]);
$mes_id=$ex['1'];
$ch_id=$ex['0'];
bot('editMessageText',['chat_id'=>$ch_id,
'message_id'=>$mes_id,
'text'=>"$textinfo",
'parse_mode'=>$mods,
'disable_web_page_preview'=>true,]);}
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تم حذف المشاركة من جميع القنوات بنجاح..",]);
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❌ المعذره عزيزي لم تقوم بتفعيل خيار النشر التلقائي",]);}}

if (preg_match('/^(like) (.*)/s',$data) ) {
$data1 = explode(" ",$data);
$from= $data1['1'];
bot('sendmessage',['chat_id'=>$from,
'text'=>"لقد قام صاحب الفقرة بالاعجاب بمشاركتك💜",]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لقد قمت بالاعجاب بصاحب المشاركة 💜.",]);}
// اعجاب الاعضاء 
if (preg_match('/^(likee) (.*)/s',$data) ) {
$data1 = explode(" ",$data);
$code= $data1['1'];
$admin=file_get_contents("fgrat/$code/admin.txt");
bot('sendmessage',[
'chat_id'=>$admin,
'text'=>"لقد قام صاحب المشاركة بالاعجاب بتعليقك 💜.",]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"لقد قمت بالاعجاب بتعليق صاحب الفقرة 💜.",]);}

if(isset($update->inline_query)){
$id = $update->inline_query->from->id; 
$idchat = $update->inline_query->chat->id; 
$idms = $update->inline_query->message_id; 
$text_inline = $update->inline_query->query;
$textinline=file_get_contents("data1/$id/text.txt");
$link=file_get_contents("code/$id/code.txt");}

$tilitet = "مشاركه مع اصدقائك ♻️.";
if($update->inline_query){
$text_inline = $update->inline_query->query;
$iid=$update->inline_query->id;
$idchat = $update->inline_query->chat->id; 
$idms = $update->inline_query->message_id; 
if(file_exists("fgrat/$text_inline/text.txt")and $text_inline!=" " and is_dir("fgrat/$text_inline")){
$textinline= file_get_contents("fgrat/$text_inline/text.txt");
 bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
"results"=>json_encode([['type'=>'article',
'id'=>base64_encode(rand(5,555)),
'title'=>'حسناً عزيزي قم بالضغط لكي يتم نشر الفقرة 🔰',
'description' =>"$textinline",
'input_message_content'=>['parse_mode'=>'HTML',
'message_text'=>"$textinline"],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>"إرسال مشاركة 📝",'url'=>"https://telegram.me/$botuser?start=$text_inline"]],

]]]])]);
}else{
bot('answerInlineQuery',[
'inline_query_id'=>$update->inline_query->id,    
"results" => json_encode([['type'=>'article','id'=>base64_encode(rand(5,555)),
'title'=>'أنشاء فقرة 📝.',
'description'=>"قم بأنشاء فقرتك",
'input_message_content'=>['parse_mode'=>'HTML',
'message_text'=>"$start"],
'reply_markup'=>['inline_keyboard'=>[
[['text'=>"أنشاء فقرة 📝.",'url'=>"https://telegram.me/$botuser?start"]],
]]]])]);}}

//======بداية تحكم القنوات========//
// $update 	= json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message 	= $update->message;
$text = $message->text;
$chat_id = $message->chat->id;
$name = $message->from->first_name;
$user = $message->from->username;
$message_id = $update->message->message_id;

if (isset($update->channel_post)) {
$chat_id = $update->channel_post->chat->id;
$from_id = $update->channel_post->from->id;
$message_id = $update->channel_post->message_id;
$message = $update->channel_post;
$text = $update->channel_post->text;
if ($update->channel_post->message->caption) {
$text = $update->channel_post->message->caption;}}
$code=file_get_contents("channel/$chat_id.txt");
$tthbit=file_get_contents("fgrat/$code/tthbit.txt");
$admin=file_get_contents("fgrat/$code/admin.txt");

if($tthbit == "yes"){
if($message and $tthbit=="yes" and $from_id !=$admin and $from_id !="299938224"){
$message_id = $update->channel_post->message_id;
bot('deleteMessage',['chat_id'=> $update->channel_post->chat->id,
'message_id'=>$update->channel_post->message_id,]);}}

