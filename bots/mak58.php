<?php#*wataw*

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message= $update->message;
$text = $message->text;
$chat_id= $message->chat->id;
$message_id = $message->message_id;
$message_id2 = $message->message_id +1;
$id = $message->from->id;
$iddata = $update->callback_query->id;
$fwd= $update->message->forward_from_chat;
$photo = $message->photo;
$fwdid= $update->message->forward_from_chat->id;
$mid = $message->message_id;
$name = $message->from->first_name;
$story = json_decode(file_get_contents('Setting/story.json'),true);
if($update){mkdir("Setting");}
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$exdata = explode("#",$data);$ex = $exdata[0];$ex1 = $exdata[1];$ex2 = $exdata[2];}

function s($array){
file_put_contents('Setting/story.json',json_encode($array));}
function send($chat_id, $text, $mode, $reply, $keyboard = null){
bot('SendMessage',['chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>$mode,
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$reply,
'reply_markup'=>$keyboard]);}

function edit($chat_id,$text, $mode, $message_id, $keyboard = null){
bot('editMessageText',['chat_id'=>$chat_id,
'text'=>$text,
'message_id'=>$message_id,
'parse_mode'=>$mode,
'disable_web_page_preview'=>true,
'reply_markup'=>$keyboard]);}

$idc = $update->callback_query->id;
function note($idc,$text){
bot("answerCallbackQuery",[
"callback_query_id"=>$idc,
"text"=>$text,]);}

function noteok($iddata,$text){
bot('answercallbackquery',[
'callback_query_id'=>$iddata,
'text'=>$text,
'show_alert' =>true]);}

$mid = $message->message_id;
function deletefor($mid,$chat_id){
for($i = $mid - 1; $i < $mid; $i++){
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$i]);}}

function delete($chat_id,$message_id){
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);}

# Start Code #

$startstoryn = json_encode(['inline_keyboard'=>[
[['text'=>"الاستوريات ♥️.",'callback_data'=>"viewstoryn"]],
[['text'=>"اضغط هنا لصنع بوت♥️.",'url'=>"t.me/GHG2Bot"]],
],]);

$startstorytextn = "اهلا بك في بوت الاستوريات ♥️.\nاخترما تريد لعرضه لك عزيزي .\n-";

if($text == "/start" and $chat_id != $admin and $text and !$data){
send($chat_id,$startstorytextn,"markdown",$message_id,$startstoryn);}

if($text != "/start" and $chat_id != $admin and $text and !$data){
send($chat_id,$startstorytextn,"markdown",$message_id,$startstoryn);}

if($data == "viewstoryn"){
if($story["SendStory"] == true){
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);

$Join = $story["SendStory"];
$n = array_rand($Join,1);
$text = $Join[$n];
if($story["Codes"][$text]["type"] == "two"){
bot("sendMediaGroup",["chat_id"=>$chat_id,
"media"=>json_encode([
["type"=>"photo","media" =>$story["Codes"][$text]["1"],'caption'=>$story["Codes"][$text]["3"],],
["type"=>"photo","media" =>$story["Codes"][$text]["2"],],]),]);}

elseif($story["Codes"][$text]["type"] == "one"){
bot('sendphoto',['chat_id'=>$chat_id,
'photo'=>$story["Codes"][$text]["1"],
'caption'=>$story["Codes"][$text]["2"],]);}

bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"♥️ اليك الستوري عزيزي .",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ستوري جديد 💛'",'callback_data'=>"viewdelete"]],
[['text'=>"اضغط هنا لصنع بوت♥️.",'url'=>"t.me/GHG2Bot"]],
]])]);}

else{noteok($iddata,"♥️ القائمة في وضع التحديث .");}}

if($data == "viewdelete"){
if($story["SendStory"] == true){
$Join = $story["SendStory"];
$n = array_rand($Join,1);
$text = $Join[$n];
if($story["Codes"][$text]["type"] == "two"){
bot("sendMediaGroup",["chat_id"=>$chat_id,
"media"=>json_encode([
["type"=>"photo","media" =>$story["Codes"][$text]["1"],'caption'=>$story["Codes"][$text]["3"],],
["type"=>"photo","media" =>$story["Codes"][$text]["2"],],]),]);

bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);
}elseif($story["Codes"][$text]["type"] == "one"){
bot('sendphoto',['chat_id'=>$chat_id,
'photo'=>$story["Codes"][$text]["1"],
'caption'=>$story["Codes"][$text]["2"],]);}

bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"♥️ اليك الستوري عزيزي .",
'parse_mode'=>"Markdown",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ستوري جديد 💛'",'callback_data'=>"viewdelete"]],
[['text'=>"اضغط هنا لصنع بوت♥️.",'url'=>"t.me/GHG2Bot"]],
]])]);

bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);
}else{noteok($iddata,"♥️ القائمة في وضع التحديث .");}}

if($chat_id == $admin or $chat_id == $sudo){
$startstory = json_encode(['inline_keyboard'=>[
[['text'=>"الصور المضافة 👁.",'callback_data'=>"viewstory"]],
[['text'=>"حذف 🖤.",'callback_data'=>"rems"],['text'=>"اضافة ♥️.",'callback_data'=>"addstory"]],
[['text'=>"قناتي 📣.",'callback_data'=>"chstory"]],],]);

$backstartstory = json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"startstory"]],],]);

$startstorytext = "♥️ يمكنك اضافة الصور وحذفها من هنا .";
if($text == "/start"){
send($chat_id,$startstorytext,"markdown",$message_id,$startstory);
unset($story["Set"]);
unset($story["Mod"]);
s($story);}

if($data == "chstory"){
if($story["Ch"] == false){
$backstartstory = json_encode(['inline_keyboard'=>[
[['text'=>"📣 تفعيل قناتي .",'callback_data'=>"addchstory"]],
[['text'=>"رجوع",'callback_data'=>"startstory"]],],]);
edit($chat_id,"❎ لم تقم بأضافة قناتك بعد .\n-","markdown",$message_id,$backstartstory);
}else{
$id = $story["Ch"]["id"];
$ss = $story["Ch"]["countlast"];
$name = $story["Ch"]["Name"];
$countpost = $story["Ch"]["countpost"];
$backstartstory = json_encode(['inline_keyboard'=>[
[['text'=>$story["Ch"]["Name"],'callback_data'=>"deletechstory"]],
[['text'=>"رجوع",'callback_data'=>"startstory"]],],]);

edit($chat_id,"📥 عزيزي احصائيات قناتك :\n\n📣 قناتك هي : $name\n📋 عدد المنشورات البوت : `$countpost`\n♥️ عدد اعضائها قبل الاضافة : `$ss`\n\n⚠️ ملاحضة : لـحذف القناة اضغط على اسم القناة .\n-","markdown",$message_id,$backstartstory);}
unset($story["Set"]);
unset($story["Mod"]);
s($story);}

if($data == "deletechstory"){
if($story["Ch"] == false){
noteok($iddata,"♥️ هذه القناة محذوفة مؤخراً .");
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);
}else{
$name = $story["Ch"]["Name"];
$backadminbc = json_encode(['inline_keyboard'=>[
[['text'=>"✖️",'callback_data'=>"startstory"],['text'=>"✔️",'callback_data'=>"deletest#yes"]],],]);

edit($chat_id,"📣 هل انت متاكد من حذف قناة : $name","markdown",$message_id,$backadminbc); }
unset($story["Set"]);
unset($story["Mod"]);
s($story); }

if($ex == "deletest"){
unset($story["Ch"]);
unset($story["Set"]);
unset($story["Mod"]);
s($story); 
$back = json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"startstory"]],
],
 ]);

$rand1 = rand(5,21);$rand2 = rand(45,59);$rand3 = rand(66,76);$rand4 = rand(80,93);
$m_id = bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$message_id,'text'=>"🗑 جاري حذف القناة .",])->result->message_id;
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$m_id,'text'=>"🗑 جاري حذف القناة ..",]); 
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$m_id,'text'=>"🗑 جاري حذف القناة ...",]); 
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$m_id,'text'=>"🗑 جاري حذف القناة ..",]); 
sleep(1);
bot('editMessageText',['chat_id'=>$chat_id,'message_id'=>$m_id,'text'=>"🗑 جاري حذف القناة ...",]);
sleep(1);
edit($chat_id,"☑️ تم حذف قناتك .","markdown",$message_id,$back);}

if($data == "addchstory"){
edit($chat_id,"📣 ارسل توجيه من قناتك الى هنا .\n\n⚠️ ملاحضة : \n1- ارفع البوت ادمن في قناتك .\n2- فعل له خاصية ( نشر في القناة ) \n3- ارسل توجيه من قناتك الى هنا .\n-","markdown",$message_id,$backstartstory);
unset($story["Set"]);
$story["Mod"] = "addchs";
s($story); }

if($fwd and $story["Mod"] == "addchs"){
$fwdid = $update->message->forward_from_chat->id;
$url = file_get_contents("https://api.telegram.org/bot$API_KEY/getChat?chat_id=$fwdid");
$getchat = json_decode($url,true);
$name = $getchat["result"]["title"];
$countch = 'https://api.telegram.org/bot'.$API_KEY.'/getChatMembersCount?chat_id='.$fwdid;
$countch = file_get_contents($countch);
$countch = json_decode($countch);
$countch = $countch->result;
$story["Ch"]["id"] = $fwdid;
$story["Ch"]["Name"] = $name;
$story["Ch"]["countlast"] = $countch;
$story["Ch"]["countpost"] = 0;
unset($story["Set"]);
unset($story["Mod"]);
s($story);
send($chat_id,"☑️ تم تفعيل القناة .\n\n📣 قناتك هي : $name\n-","markdown",$message_id,$backstartstory);
exit;}

if($data == "startstory"){
edit($chat_id,$startstorytext,"markdown",$message_id,$startstory);
unset($story["Set"]);
unset($story["Mod"]);
s($story);}

if($data == "rems"){
edit($chat_id,"🗑 حسنا لحذف ستوري ارسل كود الحذف الان ..\n-","markdown",$message_id,$backstartstory);
unset($story["Set"]);
$story["Mod"] = "rems";
s($story);}

if($data == "viewstory"){
if($story["SendStory"] == true){
$Join = $story["SendStory"];
foreach($Join as $text){
if(in_array($text,$story["Ch"]["codes"])){
$ye = "منشور من قبل ✔️";
}else{
$ye = "غير منشور من قبل ✖️";}

if($story["Codes"][$text]["type"] == "two"){
$C = $story["Codes"][$text]["3"];
bot("sendMediaGroup",["chat_id"=>$chat_id,
"media"=>json_encode([
["type"=>"photo","media" =>$story["Codes"][$text]["1"],'caption'=>"$C\n\n🗂 هذا الكود : $ye\n📣 للنشر في قناتك : /post$text\n🗑 الحذف المباشر : /delete$text\n-",],
["type"=>"photo","media" =>$story["Codes"][$text]["2"],],]),]);

}elseif($story["Codes"][$text]["type"] == "one"){
$C = $story["Codes"][$text]["2"];
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$story["Codes"][$text]["1"],
'caption'=>"$C\n\n🗂 هذا الكود : $ye\n📣 للنشر في قناتك : /post$text\n🗑 الحذف المباشر : /delete$text\n-",]);}}
$count = count($Join);
send($chat_id,"♥️ عدد الاستوريات : `$count`\n📋 ويمكنك حذف اي ستوري .\n-","markdown",$message_id,$backstartstory); 
}else{noteok($iddata,"♥️ انت لم تضف اي صورة.");}}

if($ex == "deletecode"){
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);
$text = $ex1;
if(in_array($text,$story["SendStory"])){
noteok($iddata,"✅ تم الحذف بنجاح .");
$how = array_search($text,$story["SendStory"]);
unset($story["SendStory"][$how]);
$story["SendStory"]=array_values($story["SendStory"]); 
unset($story["Codes"][$text]);
unset($story["Set"]);
unset($story["Mod"]);
s($story);
}else{
noteok($iddata,"⛔️ هذا الكود غير موجود او محذوف مؤخراً . ");}}

if(preg_match("/(post)/",$text)){
$exploed = explode("/post",$text);
$text = str_replace("/post", "", $exploed[1]); 
if(in_array($text,$story["SendStory"])){
$back = json_encode(['inline_keyboard'=>[
[['text'=>"✖️",'callback_data'=>"startstory"],['text'=>"✔️",'callback_data'=>"post#$text"]],],]);

if($story["Codes"][$text]["type"] == "two"){
bot("sendMediaGroup",["chat_id"=>$chat_id,
"media"=>json_encode([
["type"=>"photo","media" =>$story["Codes"][$text]["1"],'caption'=>$story["Codes"][$text]["3"],],
["type"=>"photo","media" =>$story["Codes"][$text]["2"],],]),]);
send($chat_id,"هل تريد نشر هذا المنشور ☝🏻؟","markdown",$message_id,$back); 
}elseif($story["Codes"][$text]["type"] == "one"){
bot('sendphoto',['chat_id'=>$chat_id,
'photo'=>$story["Codes"][$text]["1"],
'caption'=>$story["Codes"][$text]["2"],]);
send($chat_id,"هل تريد نشر هذا المنشور ☝🏻؟","markdown",$message_id,$back);}
}else{send($chat_id,"⛔️ هذا الكود غير موجود او محذوف مؤخراً .","markdown",$message_id,$backstartstory);}}

if($ex == "post"){
$text = $ex1;
if(in_array($text,$story["SendStory"])){
$story["Ch"]["countpost"] = $story["Ch"]["countpost"] +1;
$story["Ch"]["codes"][] = $text;
$ch = $story["Ch"]["id"];
s($story);
$countpost = $story["Ch"]["countpost"];
if($story["Codes"][$text]["type"] == "two"){
bot("sendMediaGroup",["chat_id"=>$ch,
"media"=>json_encode([
["type"=>"photo","media" =>$story["Codes"][$text]["1"],'caption'=>$story["Codes"][$text]["3"],],
["type"=>"photo","media" =>$story["Codes"][$text]["2"],],]),]);
send($chat_id,"تم نشر الكود في القناة ☑️.\n\n📋 رقم الكود : `$text`\n♥️ عدد منشورات البوت : `$countpost`\n🌁 نوع المنشور : صورتين و وصف\n-","markdown",$message_id,$backstartstory);
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);
}elseif($story["Codes"][$text]["type"] == "one"){
bot('sendphoto',['chat_id'=>$ch,
'photo'=>$story["Codes"][$text]["1"],
'caption'=>$story["Codes"][$text]["2"],]);
send($chat_id,"تم نشر الكود في القناة ☑️.\n\n📋 رقم الكود : `$text`\n♥️ عدد منشورات البوت : `$countpost`\n🌁 نوع المنشور : صورة و وصف\n-","markdown",$message_id,$backstartstory);}
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);
}else{
bot('deleteMessage',['chat_id'=>$chat_id,
'message_id'=>$message_id]);
noteok($iddata,"⛔️ هذا الكود غير موجود او محذوف مؤخراً .");}}

if($story["Mod"] == "rems" and !$data and $text or preg_match("/(delete)/",$text)){
if(preg_match("/(delete)/",$text) == false){
$text = $text;
}else{
$exploed = explode("/delete",$text);
$text = str_replace("/delete", "", $exploed[1]);}

if(in_array($text,$story["SendStory"])){
if($story["Codes"][$text]["type"] == "two"){
bot("sendMediaGroup",["chat_id"=>$chat_id,
"media"=>json_encode([
["type"=>"photo","media" =>$story["Codes"][$text]["1"],'caption'=>$story["Codes"][$text]["3"],],
["type"=>"photo","media" =>$story["Codes"][$text]["2"],],]),]);
}elseif($story["Codes"][$text]["type"] == "one"){
bot('sendphoto',['chat_id'=>$chat_id,
'photo'=>$story["Codes"][$text]["1"],
'caption'=>$story["Codes"][$text]["2"],]);}

$how = array_search($text,$story["SendStory"]);
unset($story["SendStory"][$how]);
$story["SendStory"]=array_values($story["SendStory"]); 
unset($story["Codes"][$text]);
unset($story["Set"]);
unset($story["Mod"]);
s($story);
send($chat_id,"✅ تم الحذف بنجاح ..","markdown",$message_id,$backstartstory); 
}else{
send($chat_id,"⛔️ هذا الكود غير موجود او محذوف مؤخراً .","markdown",$message_id,$backstartstory);}}

if($data == "addstory"){
$backstartstory = json_encode(['inline_keyboard'=>[
[['text'=>"صورة و وصف 🌁.",'callback_data'=>"ads"]],
[['text'=>"صورتين و وصف 🌄.",'callback_data'=>"adds"]],
[['text'=>"رجوع",'callback_data'=>"startstory"]],],]);
unset($story["Set"]);
unset($story["Mod"]);
edit($chat_id,"♥️ عزيزي بوت الاستوريات والصور .\n📣 اختر ما تريد لـ اضافته الى البوت .\n-","html",$message_id,$backstartstory);
s($story);}

if($data == "ads"){
$backstartstory = json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"addstory"]],],]);
unset($story["Set"]);
unset($story["Mod"]);
edit($chat_id,"♥️ وصف و صورة .\n📣 الخطوة [ 1/2 ] = ارسل الصورة .\n-","html",$message_id,$backstartstory);
$story["Mod"] = "yes";
s($story);}

if($story["Mod"] == "yes" and !$data){
if($photo){
send($chat_id,"♥️ وصف و صورة .\n📣 الخطوة [ 2/2 ] = ارسل النص الان .\n-","html",$message_id,$backstartstory);
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','video','photo','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types)){
$file_id = $val['file_id'];
if($key == 'photo') $file_id = $val[1]['file_id'];
$story["Mod"] = "yes2";
$story["Set"]["1"] = "$file_id";
s($story);
exit;
} else {
continue;}}}
}else{ 
send($chat_id,"🌁 عليك ارسال صورة فقط .","markdown",$message_id,$backstartstory);}}

if($story["Mod"] == "yes2"){
if($text and !$data){
unset($story["Mod"]);
$story["Set"]["2"] = "$text";
$code = file_get_contents("Setting/CodeStory.txt");
$code = $code +1;
file_put_contents("Setting/CodeStory.txt",$code);
$story["SendStory"][] = $code;
$story["Codes"][$code]["type"] = "one";
$story["Codes"][$code]["1"] = $story["Set"]["1"];
$story["Codes"][$code]["2"] = $story["Set"]["2"];
unset($story["Set"]);
s($story);
bot('sendphoto',['chat_id'=>$chat_id,
'photo'=>$story["Codes"][$code]["1"],
'caption'=>$story["Codes"][$code]["2"],]);
$deletecode = json_encode(['inline_keyboard'=>[
[['text'=>"حذف مباشر 🗑.",'callback_data'=>"deletecode#$code"]],],]);
send($chat_id,"✅ تم الحفظ بنجاح .\n🗑 كود الحذف : `$code`\n📥 الحذف المباشر : /delete$code\n-","markdown",$message_id,$deletecode); 
}else{ 
send($chat_id,"🌁 عليك ارسال نص فقط .","markdown",$message_id,$backstartstory);}}

if($data == "adds"){
$backstartstory = json_encode(['inline_keyboard'=>[
[['text'=>"رجوع",'callback_data'=>"addstory"]],],]);
unset($story["Set"]);
unset($story["Mod"]);
edit($chat_id,"♥️ عزيزي بوت الاستوريات والصور .\n📣 الخطوة [ 1/3 ] = ارسل الصورة الاولى .\n-","html",$message_id,$backstartstory);
$story["Mod"] = "open";
s($story);}

if($story["Mod"] == "open" and !$data){
if($photo){
send($chat_id,"♥️ وصف و صورتين .\n📣 الخطوة [ 2/3 ] = ارسل الصورة الثانية .\n-","html",$message_id,$backstartstory);
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','video','photo','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types)){
$file_id = $val['file_id'];
if($key == 'photo') $file_id = $val[1]['file_id'];
$story["Mod"] = "open2";
$story["Set"]["1"] = "$file_id";
s($story);
exit;
} else {
continue;}}}
}else{ 
send($chat_id,"🌁 عليك ارسال صورة فقط .","markdown",$message_id,$backstartstory);}}

if($story["Mod"] == "open2" and !$data){
if($photo){
send($chat_id,"♥️ وصف و صورتين .\n📣 الخطوة [ 3/3 ] = ارسل النص الان .\n-","html",$message_id,$backstartstory);
$up = json_decode(file_get_contents('php://input'),true);
if(!isset($message->text)){
$types = ['voice','video','photo','document','sticker'];
foreach($up['message'] as $key => $val){
if(in_array($key,$types)){
$file_id = $val['file_id'];
if($key == 'photo') $file_id = $val[1]['file_id'];
$story["Mod"] = "open3";
$story["Set"]["2"] = "$file_id";
s($story);
exit;
} else {
continue;}}}
}else{ 
send($chat_id,"🌁 عليك ارسال صورة فقط .","markdown",$message_id,$backstartstory);}}

if($story["Mod"] == "open3"){
if($text and !$data){
unset($story["Mod"]);
$story["Set"]["3"] = "$text";
$code = file_get_contents("Setting/CodeStory.txt");
$code = $code +1;
file_put_contents("Setting/CodeStory.txt",$code);
$story["SendStory"][] = $code;
$story["Codes"][$code]["type"] = "two";
$story["Codes"][$code]["1"] = $story["Set"]["1"];
$story["Codes"][$code]["2"] = $story["Set"]["2"];
$story["Codes"][$code]["3"] = $story["Set"]["3"];
unset($story["Set"]);
s($story);
bot("sendMediaGroup",["chat_id"=>$chat_id,
"media"=>json_encode([
["type"=>"photo","media" =>$story["Codes"][$code]["1"],'caption'=>$story["Codes"][$code]["3"],],
["type"=>"photo","media" =>$story["Codes"][$code]["2"],],]),]);
$deletecode = json_encode(['inline_keyboard'=>[
[['text'=>"حذف مباشر 🗑.",'callback_data'=>"deletecode#$code"]],],]);
send($chat_id,"✅ تم الحفظ بنجاح .\n🗑 كود الحذف : `$code`\n📥 الحذف المباشر : /delete$code\n-","markdown",$message_id,$deletecode); 
}else{ 
send($chat_id,"🌁 عليك ارسال نص فقط .","markdown",$message_id,$backstartstory); }}}
