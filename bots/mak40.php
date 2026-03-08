<?php#*wataw*

if($start=="non"){
$start="
- اهلا بك عزيزي ، ( [$name] ) في بوت الملصقات 👋🏻
يمكنك صنع حزمة والتعديل عليها بكل سهولة 🗣
-
";}

$userbot="A88Bot";
// $update = json_decode(file_get_contents("php://input")); (Already handled in mak.php)
file_put_contents("ae.txt",json_encode($update));
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
if(isset($update->inline_query)){
$chat_id = $update->inline_query->chat->id;
$from_id = $update->inline_query->from->id;
$name = $update->inline_query->from->first_name.' '.$update->inline_query->from->last_name;
$text_inline = $update->inline_query->query;
$mes_id = $update->inline_query->inline_message_id; 
$user = strtolower($update->inline_query->from->username);}
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$amrjson=$fromjson["info"][$from_id]["amr"];

if($text=="/start"){
bot('sendmessage',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"$start

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'صنع حزمة جديدة.','callback_data'=>"newsticker"],['text'=>'📑 حزماتي','callback_data'=>"mystickers"]],
]])]);}

if($data=="hooome"){
$fromjson["info"][$from_id]["amr"]="non";
unset($fromjson["info"][$from_id]["انشاء"]["file_id"]);
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"$start

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'صنع حزمة جديدة.','callback_data'=>"newsticker"],['text'=>'📑 حزماتي','callback_data'=>"mystickers"]],
]])]);}

if($data=="newsticker"){
$fromjson["info"][$from_id]["amr"]="namesticker";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$from_id)
- قم بإرسال اسم حزمة الملصقات.
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"hooome"]],]])]);}

if($text and !$date and $amrjson=="namesticker"){
$fromjson["info"][$from_id]["amr"]="linksticker";
$fromjson["info"][$from_id]["انشاء"]["name"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ اسم حزمة الملصقات 
- اسم الحزمة : $text
- الان قم بإرسال معرف لحزمة الملصقات .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"hooome"]],]])]);}

if($text and !$date and $amrjson=="linksticker"){
if(preg_match('/([a-z])|([A-Z])/i',$text)){ 
$text = str_replace('@',"",$text);
$link=$text."_by_$userbot";
#$status = getStickerSet($link,$token,$chat_id);
$get= bot('getStickerSet',['name'=>$link,]);
$ok = $get->ok;
  $r=json_encode($get);
bot('sendmessagee',['chat_id'=>$chat_id,
'text'=>"$r",]);

if($ok != true){
$fromjson["info"][$from_id]["amr"]="photosticker";
$fromjson["info"][$from_id]["انشاء"]["link"]="$link";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ معرف حزمة الملصقات 
- معرف الحزمة : $text
- الان قم بإرسال ملصق او صورة لإضافتها الى الحزمة .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],

]])]);}else{
bot('sendmessage',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"🚫 عذراً تم إختيار هذا المعرف $text من قبل 
-  قم بإرسال معرف آخر لحزمة الملصقات .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],]])]);}}}

if($update->message->photo and !$date and $amrjson=="photosticker"){
$file_id = $update->message->photo[1]->file_id;
$width = $update->message->photo[1]->width;
$height = $update->message->photo[1]->height;
if($width=="512" and $height=="512"){
$fromjson["info"][$from_id]["amr"]="f";
$fromjson["info"][$from_id]["انشاء"]["file_idd"]="$file_id";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ الصورة بنجاح 
- قم بارسال رمز الايموجي الخاص بالملصق .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],
]])]);}else{
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 لم يتم حفظ الصورة يجيب ان تكون قياسات الصورة ( الطول والعرض ) يساوي 512 × 512
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],]])]);}}

if ($message->sticker and $amrjson=="photosticker") {
$file_id = $update->message->sticker->file_id;
$fromjson["info"][$from_id]["amr"]="f";
$fromjson["info"][$from_id]["انشاء"]["file_idd"]="$file_id";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ الملصق بنجاح 
- قم بارسال رمز الايموجي الخاص بالملصق .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],
]])]);}

if($text and !$date and $amrjson=="f"){
$fromjson["info"][$from_id]["amr"]="none";
$fromjson["info"][$from_id]["انشاء"]["f"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ ايموجي الملصق 
- ايموجي الملصق : $text
- قم بالضغط على حفظ لكي يتم حفظ الحزمة الجديدة .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'حفظ  ','callback_data'=>"save"]],
]])]);}

if($data=="save"){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$namesticker=$fromjson["info"][$from_id]["انشاء"]["name"];
$linksticker=$fromjson["info"][$from_id]["انشاء"]["link"];
$filesticker=$fromjson["info"][$from_id]["انشاء"]["file_idd"];
$f=$fromjson["info"][$from_id]["انشاء"]["f"];
$fromjson["info"][$from_id]["amr"]="addphotosticker";
$fromjson["info"][$from_id]["stlink"]="$linksticker";
$fromjson["info"][$from_id]["stname"]="$namesticker";
file_put_contents("from_id.json", json_encode($fromjson));
$code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -10);
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"⏳ جارٍ الحفظ انتظر قليلا..",
'disable_web_page_preview'=>true,
'parse_mode'=>'MarkDown',]);

$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$filesticker])->result->file_path;
file_put_contents("$code.png",file_get_contents($file));
$get= bot('createNewStickerSet',[
'user_id'=>$from_id,
'name'=>"$linksticker",
'title'=>"$namesticker",
'png_sticker'=>new CURLFile("$code.png"),
'emojis'=>"$f",]);
unlink("$code.png");
$r=json_encode($get);
bot('sendmessagee',['chat_id'=>$chat_id,
'text'=>"✅ تم $r",]);
$stickers = json_decode(file_get_contents("stickers.json"),true);
$stickers['info'][$from_id][]="$linksticker";
file_put_contents("stickers.json", json_encode($stickers));
$link="t.me/addstickers/$linksticker";
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تم انشاء حزمة جديدة 
بيانات حزمة الملصقات :
- اسم الحزمة : $namesticker
- رابط اضافة الحزمة : $link
",]);
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"لإضافة ملصق اخر الى نفس الحزمة 
- قم بإرسال صورة او ملصق
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],
]
])
]);
}

if($update->message->photo and !$date and $amrjson=="addphotosticker"){
$file_id = $update->message->photo[1]->file_id;
$width = $update->message->photo[1]->width;
$height = $update->message->photo[1]->height;
if($width=="512" and $height=="512"){
$code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -10);

$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$file_id])->result->file_path;
	 file_put_contents("$code.png",file_get_contents($file));
$get= bot('uploadStickerFile',[
	 	'user_id'=>$from_id,
 	'png_sticker'=>new CURLFile("$code.png"),
	 ]);
	 unlink("$code.png");
	  $file =$get->result->file_id;
$r=json_encode($get);
bot('sendmessagee',[
'chat_id'=>$chat_id,
'text'=>"✅ تم 
$file_id
$file
$r",]);


#$fromjson["info"][$from_id]["amr"]="ff";
$fromjson["info"][$from_id]["انشاء"]["file_id"][]="$file";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ الملصق بنجاح 
- تسطيع اضافة اكثر من ملصق بإيموجي واحد قم بارسال صورة او ملصق لاضافتة او قم بالضغط على اضافة الايموجي لانهاء اضافة الملصقات ووضع ايموجي لها  .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>' وضع ايموجي','callback_data'=>"fff"]],
[['text'=>'الغاء  ','callback_data'=>"hooome"]],

]])]);}else{
bot('sendmessage',[
'chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 لم يتم حفظ الصورة يجيب ان تكون قياسات الصورة ( الطول والعرض ) يساوي 512 × 512
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],

] 
])
]);



}}
if ($message->sticker and $amrjson=="addphotosticker") {
$file_id = $update->message->sticker->file_id;
$code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), -10);

$file = "https://api.telegram.org/file/bot".API_KEY."/".bot('getfile',['file_id'=>$file_id])->result->file_path;
	 file_put_contents("$code.png",file_get_contents($file));
$get= bot('uploadStickerFile',[
	 	'user_id'=>$from_id,
 	'png_sticker'=>new CURLFile("$code.png"),
	 ]);
unlink("$code.png");
$file =$get->result->file_id;
$r=json_encode($get);
bot('sendmessagee',[
'chat_id'=>$chat_id,
'text'=>"✅ تم 
$file_id
$file
$r",]);

#$fromjson["info"][$from_id]["amr"]="ff";
$fromjson["info"][$from_id]["انشاء"]["file_id"][]="$file";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ الملصق بنجاح 
- تسطيع اضافة اكثر من ملصق بإيموجي واحد قم بارسال صورة او ملصق لاضافتة او قم بالضغط على اضافة الايموجي لانهاء اضافة الملصقات ووضع ايموجي لها  .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>' وضع ايموجي','callback_data'=>"fff"]],
[['text'=>'الغاء  ','callback_data'=>"hooome"]],
]])]);}

if($data=="fff"){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$fromjson["info"][$from_id]["amr"]="ff";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"- قم بارسال رمز الايموجي الخاص بالملصقات المضافة",
'disable_web_page_preview'=>true,
'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],
]])]);}

if($text and !$date and $amrjson=="ff"){
$fromjson["info"][$from_id]["amr"]="none";
$fromjson["info"][$from_id]["انشاء"]["f"]="$text";
file_put_contents("from_id.json", json_encode($fromjson));
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حفظ ايموجي الملصقات 
- ايموجي الملصقات : $text
- قم بالضغط على حفظ لكي يتم اضافة الملصق الجديد الى الحزمة .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'حفظ  ','callback_data'=>"savee"]],
]])]);}

if($data=="savee" ){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$namesticker=$fromjson["info"][$from_id]["stname"];
$linksticker=$fromjson["info"][$from_id]["stlink"];
$filesticker=$fromjson["info"][$from_id]["انشاء"]["file_id"];
$f=$fromjson["info"][$from_id]["انشاء"]["f"];
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>"⏳ جارٍ الحفظ انتظر قليلا..",
'disable_web_page_preview'=>true,
'parse_mode'=>'MarkDown',]);

foreach($filesticker as $co ){
$get= bot('addStickerToSet',[
'user_id'=>$from_id,
'name'=>"$linksticker",
'png_sticker'=>$co,
'emojis'=>"$f",]);
$r=json_encode($get);
bot('sendmessagee',['chat_id'=>$chat_id,
'text'=>"✅ تم $r",]);}

$link="t.me/addstickers/$linksticker";
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✅ تم اضافة ملصق جديد لحزمة الملصقات 
- اسم الحزمة : $namesticker
- رابط اضافة الحزمة : $link
",]);
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"لإضافة ملصق اخر الى نفس الحزمة 
- قم بإرسال صورة او ملصق اوقم بالضغط على زر الغاء لإنهاء الاضافة .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"hooome"]],
]])]);
$fromjson["info"][$from_id]["amr"]="addphotosticker";
unset($fromjson["info"][$from_id]["انشاء"]["file_id"]);
file_put_contents("from_id.json", json_encode($fromjson));}

if($data=="mystickers"){
$stickers = json_decode(file_get_contents("stickers.json"),true);
$orothe=$stickers['info'][$from_id];
$keyboard["inline_keyboard"]=[];
foreach($orothe as $co ){
$get= bot('getStickerSet',['name'=>$co,]);
$namesti =$get->result->title;
$link= $co;
if($namesti != null){
$keyboard["inline_keyboard"][] = [['text'=>$namesti,'callback_data'=>"sticker $link"]];}}
$keyboard["inline_keyboard"][] = [['text'=>"رجوع.",'callback_data'=>"hooome"]];	$reply_markup=json_encode($keyboard);
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$from_id)

- هذة هي حزم الملصقات الخاصة بك.
- قم بالضغط على اسم الحزمة لتتحكم بها 
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>$reply_markup]);}

if(preg_match('/^(sticker) (.*)/s', $data)){
$link = str_replace('sticker ',"",$data);
$get= bot('getStickerSet',['name'=>$link,]);
$namesti =$get->result->title;
$linkk="t.me/addstickers/$link";
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا $name

🔘 بيانات الحزمة :
- اسم الحزمة :$namesti
- معرف الحزمة : $link
- رابط اضافة الحزمة : $linkk
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🔎 عرض الحزمة','url'=>$linkk]],
[['text'=>'🚫 حذف ملصق  ','callback_data'=>"delsti ".$link],
['text'=>'➕ اضافة ملصق  ','callback_data'=>"addsti ".$link]],
[['text'=>'❌ حذف الحزمة  ','callback_data'=>"deletesti ".$link]],
[['text'=>'رجوع.','callback_data'=>"mystickers"]],
]])]);}

if(preg_match('/^(delsti) (.*)/s', $data)){
$link = str_replace('delsti ',"",$data);
$get= bot('getStickerSet',['name'=>$link,]);
$namesti =$get->result->title;
$usersti = str_replace("_by_$userbot","",$link);
$linkk="t.me/addstickers/$link";
$fromjson["info"][$from_id]["dellink"]="$link";
$fromjson["info"][$from_id]["amr"]="delsticker";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا $name

🔘 بيانات الحزمة :
- اسم الحزمة :$namesti
- معرف الحزمة : $link
- رابط اضافة الحزمة : $linkk

- قم بارسال الملصق الذي تريد حذفه من الحزمة
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'🔎 عرض الحزمة','url'=>$linkk]],
[['text'=>'رجوع.','callback_data'=>"sticker ".$link]],
]])]);}

if ($message->sticker  and $amrjson=="delsticker" ) {
$file_id = $update->message->sticker->file_id;
$st_name = $update->message->sticker->set_name;
$stickers = json_decode(file_get_contents("stickers.json"),true);
$array=$stickers['info'][$from_id];
if(in_array($st_name,$array)){
$fromjson = json_decode(file_get_contents("from_id.json"),true);
$dellink=$fromjson["info"][$from_id]["dellink"];

if($dellink==$st_name){
$get= bot('deleteStickerFromSet',[
'sticker'=>$file_id,]);
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"✅ تم حذف الملصق من الحزمة بنجاح .
- قم بارسال ملصق اخر لكي يتم حذفة او قم بالضغط على الغاء للعودة للخلف.
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"sticker ".$link]],
]])]);}else{
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 تعذر الحذف 
- الملصق ليس من الحزمة المحددة .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء  ','callback_data'=>"sticker ".$link]],
]])]);}
}else{
bot('sendmessage',['chat_id'=>$from_id,
'message_id'=>$message_id,
"text"=>"🚫 تعذر الحذف 
- هذا الملصق ليس متواجدا في حزم الملصقات الخاصة بك .
",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء','callback_data'=>"sticker ".$link]],]])]);}}


if(preg_match('/^(addsti) (.*)/s', $data)){
$link = str_replace('addsti ',"",$data);
$fromjson["info"][$from_id]["stlink"]="$link";
$fromjson["info"][$from_id]["amr"]="addphotosticker";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$from_id)

- قم بارسال صورة او ملصق لإضافتة الى حزمة الملصقات .
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'رجوع.','callback_data'=>"sticker ".$link]],
]])]);}

if(preg_match('/^(deletesti) (.*)/s', $data)){
$link = str_replace('deletesti ',"",$data);
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$from_id)

- هل انت متاكد من حذف الحزمة ؟!
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'نعم.','callback_data'=>"deletestiyes ".$link]],
[['text'=>'رجوع.','callback_data'=>"sticker ".$link]],]])]);}

if(preg_match('/^(deletestiyes) (.*)/s', $data)){
$link = str_replace('deletestiyes ',"",$data);
$get= bot('getStickerSet',['name'=>$link,]);
$orothe =$get->result->stickers;
$r=json_encode($orothe);

foreach($orothe as $co=>$info ){
$file_id=$info->file_id;
$get= bot('deleteStickerFromSet',[
'sticker'=>$file_id,]);}

$stickers = json_decode(file_get_contents("stickers.json"),true);
$array=$stickers['info'][$from_id];
$index = array_search($link, $array);
unset($stickers['info'][$from_id][$index]);
$stickers['info'][$from_id]=array_values($stickers['info'][$from_id]);
file_put_contents("stickers.json", json_encode($stickers));
$fromjson["info"][$from_id]["dellink"]="non";
$fromjson["info"][$from_id]["amr"]="non";
file_put_contents("from_id.json", json_encode($fromjson));
bot('editmessagetext',['chat_id'=>$chat_id,
'message_id'=>$message_id,
"text"=>" مرحبا [$name](tg://user?id=$from_id)
⚠ تم حذف الحزمة بنجاح.
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'رجوع.','callback_data'=>"mystickers"]],
]])]);}

