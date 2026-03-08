<?php#*wataw*

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$text = $message->text;
$chat_id =$message->chat->id;
$time = time() + (979 * 11 + 1 + 30);
$ex = explode('كول',$text); 
$sudo = $admin; 
$id_sudo = $admin;
$id = $message->from->id; 
$getid = file_get_contents('ied.txt');
$exid = explode("\n", $getid);
$count = count($exid);
$bc = explode("/bc", $text);
$user = $update->message->from->username;
$name = $update->message->from->first_name;
$last_name = $update->message->from->last_name;
$from_id = $update->message->from->id;
$message_id = $update->message->message_id;
$user_id = $update->message->from->user_id;
$user_id = $message->from->id;
$name = $message->from->first_name;
$username = $message->from->username;
$get = explode("\n", file_get_contents('memberbot.txt'));

if($text == "رفع مطي" and $id == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"العضو تم رفعه مطي بنجاح 😹",
'reply_to_message_id'=>$message_id
]);
}
if($text == "رفع مطي" and $id != $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"انت ليس مطور
اسمك:- $name
ايديك:- $from_id",
'reply_to_message_id'=>$message_id
]);
}

if($text == '/start' and !in_array($chat_id, $get)){
file_put_contents('memberbot.txt',"\n" . $chat_id, FILE_APPEND);
}
if($text == '/users' and $id == $sudo){
 $count = count($get);
  bot('sendmessage',[
    'chat_id'=>$chat_id,
    'parse_mode'=>'markdown',
    'text'=>"هاذ عدد المشتركين حبق: $count",
  ]);
  }
$bc = explode("/bc", $text);
if($bc and $id == $sudo){
for($y=0;$y<count($get); $y++){
bot('sendMessage', [
'chat_id'=>$get[$y],
'text'=>"$bc[1]",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
]);
}
}

if($text == 'بووتي' and $id == $sudo){
bot('sendmessage',[
chat_id=>$chat_id,
'text'=>"هَــْـِْـْْـِلاّ مــْـِْـْْـِطــْـِْـْْـِوري"
]);
}

if($text == 'تفعيل' and $id == $sudo){
bot('sendmessage',[
chat_id=>$chat_id,
'text'=>"
المجموعه😻تم تفعيلهاا بنجاح
اسمك:- $name
معرفك:- $user
ايديك:- $from_id"
]);
}


if($text == 'بووتي' and !$id == $sudo){
bot('sendmessage',[
chat_id=>$chat_id,
'text'=>"مو مطوري حسبالك ما عرفك"
]);
}

if($text == "الاوامر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌯ ﺄهلا بك عـزيزي $name في قائمه الاوامر  📮 .

 —ـ—ـ—ـ—ـ—ـ—ـ—ـ—ـ— 

⎋ ┆لعرض اوامر العامه ارسل م1

⎋ ┆لعرض اوامر التسليه ارسل م2

[ #ملاحضه يتم تفعيل ردود البوت تلقائيا اثناء تفعيل البوت في المجموعه ]

 —ـ—ـ—ـ—ـ—ـ—ـ—ـ—ـ—
",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($rep && $text == "ايدي"){
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "id = $re_id
name = $re_name
user = $re_user",
]);
}

include 'rd.php';
if (preg_match('/^(اضف)(.*)/', $text) ) {
  $rd = str_replace('اضف ', $rd, $text);
  $ex = explode("\n", $rd);

    $put = "\n".'
    if ($text == "'.$ex[0].'") {
      bot(\'sendMessage\',[
        \'chat_id\'=>$chat_id,
        \'text\'=>"'.$ex[1].'"
      ]);
    }';
    
    file_put_contents('rd.php', $put,FILE_APPEND);
    bot('sendMessage',[
                'chat_id'=>$chat_id,
                'text'=>"تــم اضــافــة الـرد بـنـجـاح✅
بـواسـطـه $name",
'reply_to_message_id'=> $message_id,
                ]);
  
} 
if($text=="/start"){
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"⌯ ﺄهلا بك عـزيزي  📮 .
⌯ في بوت ردود المتطور  .
⌯ يقوم آلبوت بعمل تفاعل داخل قروبك [ ڪْروب ] .
⌯ طريقه تفعيل البوت  . 📍
⌯ ارفع البوت مشرف فقط وارسل [ تفعيل ]  .
اسمـك  ⌯ $name

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$mid,
    'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [['text'=>"⌯ اضفــني لـڪْروبك  . ",'url'=>"t.me/$usernamebot?startgroup=new"]],
        [['text'=>"", 'url'=>"t.me/http://t.me/$usernamebot?startgroup=new"]]
    ]

  ])
  ]);
} 
if($text== 'هلو'){
bot('sendMessage',[
"chat_id"=>$chat_id,
'text'=>'ههـلا بيك ورده',
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text=="اسمي"){
bot('sendmessage',[
'chat_id' => $chat_id,
'text'=>$name
]);
}
if($text == "ليش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"احسن",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text =="الوقت"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"🇮🇶 البلد : 🔥العراق \n" . "✨🔥  السنه  : " . date("Y") . "\n" . "🌟  الشهر🔥 : " . date("n") . "\n" . "💫  اليوم🔥 :" . date("j") . "\n" . "💏 الساعه🔥 :" . date('g', $time) . "\n" . "💋 الدقيقه🔥 :" . date('i', $time) . "\n" . " 😍",
'reply_to_message_id'=>$message->message_id
]);
}

if($text == "غني"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/nnnnbn/101",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ماموجود حبي من يجي اكله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هيلاو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دولي خمطتهه م̷ـــِْن شهد",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "كول والله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "1$"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غـِْاليّے كلش",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اريد بوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضيفني وصعدني ادمن انه اتفاعل",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text== "ايدي لكروب"){
bot('sendMessage',[
"chat_id"=>$chat_id,
'text'=> 'هاذ ايدي لكروب ' .$chat_id,
]);
}
if($text == "فريخ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دنچب لك بربوك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text== "ايديي"){
bot('sendMessage',[
"chat_id"=>$chat_id,
'text'=>'الايدي الخاص بك : ' .$chat_id,
]);
}
if($text == "شسمج"or $text== "شسمك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⁽ لـٰٖـٖيـٰٖش ⁉️ تريد تزحف 🔷",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "لا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ووجعا 😂",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "قائمه الاغاني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌯︙ﺄهلا بك عـزيزي في قائمه الاغاني 🎙 .

⌯︙الاغاني المتوفره من [ 1 ] - [ 12 ]  . 

⌯︙طريقه الاستخـدام ⇩  . 💞

⌯︙اڪْتب غ + رقم اغنيه  . 💞

⌯︙مثال  -  غ1 ، غ2 ، غ3.. 💞

⌯︙وبعـده‍ـا يتم ارسال اغنيه لـك . 
          
  ~ MuSiC  -  @BxxBot ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "غ1"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/5",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ2"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/6",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ3"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/7",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ4"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/8",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ5"){
bot( sendaudio ,[
 chat_id =>$chat_id,
 audio =>"https://t.me/HHa4aHH/9",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ6"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/10",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "ساقط"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ههـستوك دريت  ؟ 😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "غ7"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/11",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ8"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/mmss190/2638",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ9"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/12",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ10"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/13",
 reply_to_message_id =>$message->message_id, 
]);
}

if($text == "غ11"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
 audio =>"https://t.me/HHa4aHH/14",
 reply_to_message_id =>$message->message_id, 
]);
}
if($text == "غ12"){
bot( sendaudio ,[
 chat_id =>$chat_id, 
audio =>"https://t.me/HHa4aHH/15",
reply_to_message_id=>$message->message_id, 
]);
}

if($text == "😂"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"فطير ماصيرلك جارة",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😍"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كبر يل غرم",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "استحي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اكو حيوان يستحي م̷ـــِْن نفسه ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "😐"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عليمن ماد حلكلك جنه بسطال",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "وين الربط"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بعزك الربط غير",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "كول 1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ما اكول لْـۆ تنطيني شسمه",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "🙂"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عود ثكيل",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "🙄"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نزل عـــ⌣̴͡͡د̲⌣̴͡͡ ــيونگ يول",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "منو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شتدحس",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تحبني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ماحب زبايل",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تكرهني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "نعال"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بحلكك وبعزك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "رفع مطي مميز"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"العضو تم رفعه مطي مميز😂😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "رفع عضو مميز"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مارفعه لْـۆ تموت 😍😂",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "هه" or $text =="ههه" or $text == "هههه" or $text =="ههههه" or $text=="هههههه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌣{دِْۈۈۈۈ/يّارٌبْ_مـْو_يـّوّمٌ/ۈۈۈۈمْ}⌣",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "هلوو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بيك حب",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اريد يوزر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اصيرلك يوزر",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "السلام عليكم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>" وعليكم السلام",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "امير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هوه المطور مالتي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "المطور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مطوري هو @BxxBot",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"؟هلوات حمب",
'reply_to_message_id'=>$message->message_id, 
]);
}
$MATHEO = explode('كول',$text);
if($MATHEO){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$MATHEO[1],
]);
}

if($text == "المشتركين" and $id == $sudo){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>$count
]);
}
if($text == 'معلوماتي'){
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>"يوزرك◀️:- @$user
ايديك◀️:- $from_id
اسمك◀️:- $name",
'reply_markup'=>json_encode([
      'inline_keyboard'=>[
        [
          ['text'=>'المطور💚', 'url'=>"https://t.me/bxxbot"]
        ],
        ]
        ])
]);
}
if($text == "بوتي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاا لك والله كاعد منايم كلي تريد شي ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "انت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيه ماعاجبك ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "هاا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ووجعاا",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "حبك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دي لتزحف",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "زاحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وينه خل يجي يزحف علي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "حبق"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شدتحس",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "صدك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والله شبيك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "والله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتحلف",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "بوس لكروب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اممممموووحححه خدهم مالح وحلو",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اتفل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حححوك تففففف",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اتفل عل هاذ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ووين سويله رد وكلي اتفل علي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اتفل علي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تففففف علي وعل كصته ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "طرد"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش لان بعصك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حظر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش تحظر ابن المطي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "."){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"......",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تفليش"or $text=="فلش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ماا افلش وبكيفي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "نلعب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دنجب انجب",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "مطي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مطي ابن المطي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اكلك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كول موو صطرتنه",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "يب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يبات",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "شدتحس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"زوجني اختك وجاوبك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "حفشر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب منا النسوان",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "عير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بعزك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "وعير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بحلكك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "منيوج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اطيك النعال",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "قفل الصور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لا صير مطي مو حمايه اني",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فتح الصور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اي خوش",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مقتدى"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"خرا بروحه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تخليني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ي عادي خليك جلب باب اهلي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"صارت قديمه هسه الجديد كله حبق ",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "الف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مصرفك هاذ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "الصوت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شسمك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ني بوت يجحش",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكلك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاا شتريد",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "اضحك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هههههه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ابجي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ما ابجي حبق",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ابجي مدري اضحك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شويه اضحك وشويه ابجي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "لاا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والرب",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "5"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"احطه بيك واطمسه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حطه الك عبد الواحد",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تدرس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شيدرس هوه هاذ فاهي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صدوك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عدل حجيك تره بل شسمه",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "تروح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اي ليش لا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "من وين"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"من العراق",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حياك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كملهه كول حياك الله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اخوي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والنعم",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فرخ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انت الفرخ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "التلي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شي كلش خوش برنامج اني استعمله",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بي فروخ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نتحمل جاا شنسوي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نتعرف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ي ليش لا بس كون نته صاك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "انطلق"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انطلقت",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "مقابل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلشي صاار بمقابل",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"صحات",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "خطا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شلونج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضايجه ولعبانه نفسي",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "محمد"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلش خوش ولد",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تمبلر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاشني نايم كاعد",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "كانسر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وينه خلي بوسهه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكد كانسر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وردات والله احبهم",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "البنات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيهن",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زاحفه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حل فضحوهه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "منو حبيبك"or $text=="منو حبيبج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"محد قابل مثلك/ج",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "جاو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هااا شبيك ضجت",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "يله جاوو"or $text== "جاوو"or $text=="يله جااوو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيك ضجت لوو وين رايح",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "عود"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مال شخاط",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "بوسه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب يول",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فاشل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مثلك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تهي بهي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاا شبيك",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "رايح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الله ويااك",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "مغادر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هسه وذا غادرت",
'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "شعليك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انجب",
'reply_to_message_id'=>$message->message_id, 
]);
}


if($text == "نعال"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تريد اطكك بي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "الله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وياك الله تفضل ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حلو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انت الاحلا",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شبيك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انتَ شبيك ؟",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "يمعود"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتصيح ولك .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وجعيي",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكل خره"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتضل تغلط هيو .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكلك"or $text=="اكلج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كول عمري .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "الووو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها شرايد",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شسمه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شتكول انتَ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "خاني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبها مرض .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اغاني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مو حرام عليك؟",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوبجي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مبين عليك بوت",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مليت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"كلنه ملينه",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اهوو"or $text=="اهووو"or $text=="اهو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيك تصيح",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زمال"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"انتَ زمال",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبني"or $text=="مصه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاعيب .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شلونك"or $text=="شلونكم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ههلا يڪلبي شحوالك 💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هلاو"or $text=="ههلاو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ه‍ـلوات يحيلـي 💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صباح الخير"or $text=="صباح خير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"صباح النور يقلبي صحنوم 💘 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سلام عليكم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ـليڪم السلام؏ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مساء الخير"or $text=="مساء خير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مسالنور حبيبي 💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مسالخير"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مساء نور",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نزوج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يلهه بس مهر عليك ولعرس عليه 😂😔",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بيست"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تع ني وياك نتراهم وبدربك اهديلي اغنيه 😂💞",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بيستي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حبي راعي ضروفنه هنا حدايقق 😔💘",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبيبي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب لتحتك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شخبارك"or $text=="شخباركم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ع الله ونته حبي شخبارك ؟ .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شحوالك"or $text=="احوالك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تمام چبدي 💞.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مس"or $text=="مسمس"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مور بعدروحي 😔💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مور"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وفشحبك 😢💘",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مسيو"or $text=="مس لك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مور حبيبي مشتاق شني 😢 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حمار"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مايعرف الحمار اله لحمار ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "سلامتك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الله يسلمك. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نزوج"or $text=="نزوجج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يلا بسع تعال 😂😔 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نزوج؟ "){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ي ليش لا 😢💞",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نزوج  ؟ "){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاعيب ولي . ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حيوان"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عساس انته لفاهم. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حيوانه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتجاوز ععيب. 😢",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "جحش"or $text=="ياجحش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اڪول نطم بس لتجاوز  .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صايم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاني رمزي. 💞",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صايمه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ڪولي والله مرتينن. 😢",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "جوعان"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ڪوم اكل شمتاني  . ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "جوعانه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"دڪومي اڪلي لو مسويه دايت  . ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "كطع"or $text=="اكطع"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاشنو منو شصاير جنت نايم.👳🏻‍♀️ .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكد تحبني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ههواي. 💞😔",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "كرهك"or $text=="اكرهك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش ههـيج ليش شنو سببها  .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موتبيك"or $text=="اموت بيك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"واخيرا لڪيت واحد يحبني  .😂🤤 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "موت بيك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وفف عشقي . 💘",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زعلت"or $text=="ضجت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"طبك مرض حبي.😒 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زعلان"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"منو مزعلك زربه بكصه الزعلك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "طبك مرض"or $text=="طبكمرض"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب لتجاوز .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هيو"or $text=="هيوو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لصيح لك لارجع لحركاتي لقديمه  . .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ولي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هوا صوج لجابني موصوجك",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نكلع"or $text=="انكلع"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها متاڪد  .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "دروح"or $text=="روح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وينن اروح دنيه حاره .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ازحفلي"or $text=="ازحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاعيب ستحيي شوي 😢 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "زحف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"متستحي لك. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "لتلطش"or $text=="لطش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شدخلك نته الزك بڪيفي .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "الطش"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"نجب اخيي. 😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "لطشت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شحشرك بالنص. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "وينه"or $text=="وينها"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ههوا شنيهه خلفتهم .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "غبي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"علساس نته انشتاينن دڪعد ابو لوصخ 😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ممكن"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاموممڪنن  . 😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكرا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حبيبي تدلل  . ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ع راسي"or $text=="على راسي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"https://t.me/HHa4aHH/3",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "على راسيي"or $text=="ع راسيي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"https://t.me/HHa4aHH/3",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تجنن"or $text=="تخبل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يعمري شني خجلتنيي 😹😔 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شغل"or $text=="بل شغل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الله يعينك يقلبيي 💞.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ثلاجه"or $text=="ثلاجة"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيههه عطلانهه  ؟ .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ديي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"امشيك بيه حبي ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "منور"or $text=="منورر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"من بعدك 💞.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نورك"or $text=="نورج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اربط فيشه حبي لاتڪضيه منور ومنوره 😂😔.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بوسني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب شني استحي ني ☹️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مح"or $text=="محح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وف موش بوسه ضيم ☹️💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مححح"or $text=="محححح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شني ههل عسلل يربيي ☹️💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مححححح"or $text=="محححححح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"موش بوسه قمبلهه ربيي دختت 😔💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "محه"or $text=="مححه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بوسه لوضيم سترك ربي ☹️💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "محححه"or $text=="مححححه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بوسهه براسه ستينن حض قسم  ☹️💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تمام"or $text=="تمامونت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عسا ععمري 💞💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تمام ونت"or $text=="تمام ونته"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يحيلي عسا ياربب ☹️💘 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شخباركم"or $text=="اخباركم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تمام حبيبي ونت.؟ .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حلوين"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مو اححلا من خالتيي ☹️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ربي يحفضك"or $text=="ربي يحفضكم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حبيبيوالله 🌚 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "الله يسلمك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حلك اسلامي ممڪنن ☹️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هاي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هايات حبيصي 💘",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "هايات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هها ههلو. 😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "باي"or $text=="بايي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ها وينن شنيي بععد وڪتت  .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بايات"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بلا زحمهه كله يسذ باب وراه ☹️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تعال خاص"or $text=="تع خ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"https://t.me/HHa4aHH/4 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "خ"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاعيبب استوحيي نيي ☹️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "افشر"or $text=="فشر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاعيب بناتت هناا اخيي 😒 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حفشر"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب شنو ماتستححي 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اسبك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لاخطيهه هلمرهه احسبهه عليهه 😂😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تزوجني"or $text=="تزوجيني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"خجلتونيي ههواي 😔😹 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حصرك"or $text=="احصرك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غغير يستچنن ابو وصخ الحاصورجيي 😒😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ححصرك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ابراه‍يم ارححمنيي 😂💔",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حيلي"or $text=="يحيلي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ي بعد اههلي بوسهه ☹️💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}if($text == "ي حيلي "){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ههـاا يقلبيي تفضضل  ؟ ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "عمري"or $text=="يعمري"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وفف ڪافي غغزلل تعبتني يومم  ☹️😹 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ي حيلي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"احبكك. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "غالي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"واذا غالي اخذه وني بضههرك🌚💞",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "رخيص"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"هاشنيي نزل السوكك. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "وين"or $text=="وينن"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اخذ فره‍ ورجع 😹☹️ .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضجتي"or $text=="ضجت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"من شوڪت صاير عدههم احساس ذولل ويحسونن ☹️😹 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضوجتك"or $text=="ضوجتني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ريلاڪس احبائي متستاههل ☹️💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صيح"or $text=="اصيح"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"عيب العالمم نايمههه . .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مشتاقلك"or $text=="مشتاقلج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اني الاشوقق يععمري ☹️💞 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شتاقيتلكم"or $text=="شتاقيتلج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ڪول والله مرتينن  ☹️😹 .",
'reply_to_message_id'=>$message->message_id, 
]);
}if($text == "شتاقيتلك"or $text=="شتاقيت"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وفف بويههه اطلقق من يشتاقق 💞💞.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "انته تحبني"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"والله مادري بس افڪر. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "خاص"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجي وياڪم ع واههس. ☹️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "منوين"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ليش تريد تخطبنيي. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فدوا"or $text=="فدوه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لخشمك يروحيي 😹 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "عسل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"مثلك. ☹️💞",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فديتك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"فدوا الك قلبيي. 💘",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "استغفرالله"or $text=="استغفر الله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غغير يستججن ابو ه‍ريره.😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "امداك"or $text=="مداك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجاوزك بسرعه اخلاقيي  .😔😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نعل"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حسنن اخلاقك ححب. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "صاكه"or $text=="حاته"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وينهه خلي زحفف 😔😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مرتي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ضل ڪاعد ع ڪلبي وصيح مرتي ونتهه افرغ منك ماڪو. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "مختفي"or $text=="شو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وينن موجود اصلا ني 24 ساعهه هنا.😔😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكد عمرج"or $text=="شكد عمرك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اسفف مرتبط 😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "خره"or $text=="خرا"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بحلڪك ححبيي  .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"الله خلق خشمك للتنفس مو حته تحشره بسوالف متخصك. 😔😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "اكللكم"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"غغير يحجي ويفضهه. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شونك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ماڪل خرا وخرر. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ضوجه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وني شعليهه مثلا شسويلك . 😒",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شكو ماكو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"سلامتك. 💞",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "جذاب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"وداعتك صح",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "نجب"or $text=="انجب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتجاوز لارجع لحرڪاتي القديمهه.😒 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فرخ"or $text=="كواد"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ععيب اخيي.😒.",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "احبج"or $text=="احبك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"لتزححف لك.😔😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ممكن طلب"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"تفضل بس لا تطلب حسابات ولاتصويتت ولاشتراك بقناه. ☹️😂",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فهمت"or $text=="فهمتك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"يي حبي فههمتت  .",
'reply_to_message_id'=>$message->message_id, 
]);
}if($text == "تعالي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ههاا وينن اججي وياڪم. ",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شعدك"or $text=="شعندك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ڪلشي معدي افرغ من فارغ.😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شعدج"or $text=="شعندج"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ڪكلشي ععدي.😢 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "يالله"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"من شوڪت صرتت مسلم. ☹️😹",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "حبيبتي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"شبيهه حبيبتك ههم رجعت زعلتهه. ☹️",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "شعدي غيرك"or $text=="شعندي غيرك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بطلل لواڪهه اخي عدي تحسس منهه. .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "بكيفي"or $text=="بكيفك"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اولمرا اسمع مطي وعده كيفف ويفڪر .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == 'الوقت' ){
$time = date('h:i:s');
file_put_contents('brok.jpg',file_get_contents("https://vgcvcbn.ml/API/Time.php?time=$time"));
bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>new CURLFile('brok.jpg'),
'caption'=>$time, 
]);
unlink('brok.jpg');
}
if($text == "صورتي"){
$username = $message->from->username;
$photo = "http://telegram.me/$username";
bot('SendPhoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>"عزيزي هاذه صورتك",
]);
} 
$json = json_decode(file_get_contents("kit.json"),true);
$kitok = $json["kitok"];
$kitdel = $json["kitdel"];
$kit = $json["kit"];
if($text == "اضف كت" and $from_id == $sudo){
$json["kitok"] = "$from_id";
file_put_contents("kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙ارسل السؤال الان*",'reply_to_message_id'=>$message->message_id, 
]);
}
if($text != "اضف كت" and $kitok == $from_id){
$json["kit"][] = "$text";
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙تم حفظ السؤال في قائمه ( كت تويت )
⌔︙السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitok"]);
file_put_contents("kit.json",json_encode($json)); 
}

if($text == "حذف كت" and $from_id == $sudo){
$json["kitdel"] = "$from_id";
file_put_contents("kit.json",json_encode($json));
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙ارسل السؤال الان لحذفه*",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text != "حذف كت" and $kitdel == $from_id and in_array($text,$kit)){
$setwit = array_search("$text", $json["kit"]);
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙تم حذف السؤال من قائمه ( كت تويت )
⌔︙السؤال : $text *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
unset($json["kit"][$setwit]);
file_put_contents("kit.json",json_encode($json)); 
}

if($text != "حذف كت" and $kitdel == $from_id and !in_array($text,$kit)){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙هذا السؤال لا يوجد في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kitdel"]);
file_put_contents("kit.json",json_encode($json)); 
}



$twit = array_rand($kit, 1);
$kit = $kit[$twit] ;
if($kit != null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙$kit *",'reply_to_message_id'=>$message->message_id, 
]);
}} 
$kit = $json["kit"];
if($kit == null){
if($text == "كت" or $text == "تويت" or $text == "كت تويت"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙لم تتم اضافة اسئلة في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}}
$ctwit = count($json["kit"]);
if($text == "عدد الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙تم اضافة $ctwit سؤال في قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
}

if($text == "مسح الاسئله"){
bot('sendMessage', [
'chat_id' =>$chat_id,
'parse_mode' =>"markdown", 
'text' =>"*⌔︙تم مسح الاسئله من قائمة ( كت تويت ) *",'reply_to_message_id'=>$message->message_id, 
]);
unset($json["kit"]);
file_put_contents("kit.json",json_encode($json));
}
$Armof  = $message->text;
if($Armof == "رابط حذف" or $Armof == "رابط الحذف" or $text == "اريد احذف الحساب" or $Armof == "ححذف"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
⚠️ ︙اليك رابط الحذف فكر جيدا قبل اتخاذ الاجراء 
➡️  https://telegram.org/deactivate

",
'reply_to_message_id'=>$message->message_id, 
]);
}
$name = $message->from->first_name;
$id = $message->from->id;
$user = $message->from->username;
$chq = "https://t.me/nnnnBn";
if($text == "ايدي"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
  'message_id'=>$message_id,
 'text'=>"⌯︙ معلـوماتك ︙⌯",
 'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
                'inline_keyboard' => [
 [
            ['text' => "⌯︙اسـمك ︙⌯", 'url' => "$chq"], ['text' => "$name ",'url' => "$chq"]],
            [['text' => "⌯︙ايـديك︙⌯ ", 'url'=>"$chq"],['text'=>"$id ",'url'=>"$chq"]
            ],
                 [
            ['text' => "⌯︙معـرفك︙⌯ ", 'url' => "$chq"], ['text'=>"@$user 💞", 'url' => "$chq"]
],
]
])
 ]);     
}
$USAIED = json_decode(file_get_contents('php://input'));
$SAIEDM = $USAIED->message;
$SAIEDT = $SAIEDM->text;
$SAIEDC = $SAIEDM->chat->id;
$DSAIED= $USAIED->callback_query;
$DSAIEDD = $DSAIED->data;
$SAIEDNEW = $SAIEDM->new_chat_member;
$SAIEDN = $SAIEDNEW->first_name;
$SAIEDI = $SAIEDNEW->id;
$DSAIEDN = $DSAIED->from->first_name;
$DSAIEDI = $DSAIED->from->id;
$DSAIEDC = $DSAIED->message->chat->id;
mkdir("SAIED");
$SAIEDRO = file_get_contents("SAIED/RO$SAIEDC.txt");
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من البوتات 👨‍✈️.
⌯︙سيتم تقييد اي شخص ينضم الى المجموعة ولن يستطيع ارسال الرسائل حتى يضغط على زر انا لست روبوت 💞.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
file_put_contents("SAIED/RO$SAIEDC.txt","ON");
}
if($SAIEDT == "تفعيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تفعيل التحقق من البوتات بالتأكيد 👨‍✈️.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO == "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من البوتات  💞.
⌯︙ الان يستطيع اي شخص ينضم الى المجموعة ارسال الرسائل فيها 📝.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
unlink("SAIED/RO$SAIEDC.txt");
}
if($SAIEDT == "تعطيل التحقق"  and $SAIEDRO != "ON"){
bot('sendmessage',[
'chat_id'=>$SAIEDC,
'text'=>"• تم تعطيل التحقق من البوتات بالتأكيد 💞.",
'reply_to_message_id'=>$SAIEDM->message_id,
]);
}
if($SAIEDNEW and $SAIEDRO == "ON"){
bot('restrictChatMember',[
'chat_id'=>$SAIEDC,
'user_id'=>$SAIEDI,
]);
 bot('sendMessage',[
'chat_id'=>$SAIEDC,
'text'=>"• اهلا بك يا [$SAIEDN](tg://user?id=$SAIEDI) .
⌯︙المعذرة تم تقييدك من ارسال الرسائل في المجموعه ⚠️.
⌯︙يرجى الضغط على أنا لست بوت الموجودة في الأسفل حتى يتم فك التقييد عنك 💞.",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode([ 
'inline_keyboard'=>[
[["text"=>"⌯  ⁞  انا لست بوت ︙ ⌯ ","callback_data"=>"RoBot-$SAIEDI"]],
]])
]);
}
$ROSAIED = explode('-', $DSAIEDD);
if($DSAIEDD == "RoBot-$ROSAIED[1]" and $DSAIEDI == $ROSAIED[1]){
bot('promoteChatMember',[
'chat_id'=>$DSAIEDC,
'user_id'=>$DSAIEDI,
]);
bot('EditMessageText',[
'chat_id'=>$DSAIEDC,
'message_id'=>$DSAIED->message->message_id,
'text'=>"• أهلا بك يا [$DSAIEDN](tg://user?id=$DSAIEDI) .
 ⌯⁞ تم الغاء تقيدك بنجاح انت لست روبوت بالفعل يمكنك ارسال الرسائل الآن 💞.",
'parse_mode'=>"MarkDown",
]);
}else{
bot('answerCallbackQuery',[
'callback_query_id'=>$DSAIED->id,
'text'=>"•  الأمر ليس لك يادوده ☹️💞 ", 
]);
}
if(strpos($text,"شنو رئيك بهذه")!== false){
$armof = array("🤬لك هذا فيطي😂","لك كمر 🙃🙃هذا","احبه 😍😋","اكرهه","يكبسل هذا😂😃",);
$b = array_rand($armof,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"$armof[$b]",
]);
}
if ($text =="تفعيل تفال" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {	
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⌔︙تم تفعيل امر تفال بنجاح
⌔︙بواسطة ↫ [$from_name](tg://user?id=$from_id)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
 ]);
$settings["lock"]["kiiio"]="مقفول";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⌔︙عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
elseif($text =="تعطيل تفال" ){
if($status == "creator" ||  $status == "administrator" ||  in_array($from_id,$Dev) || in_array($from_id,$developer)) {$add = $settings["information"]["added"];
if ($add == true) {
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"
⌔︙تم تعطيل امر تفال بنجاح
⌔︙بواسطة ↫ [$from_name](tg://user?id=$from_id)

",'parse_mode'=>"markdown",'disable_web_page_preview'=>true,
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
$settings["lock"]["kiiio"]="مفتوح";
$settings = json_encode($settings,true);
file_put_contents("data/$chat_id.json",$settings);
}
else
{
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"⌔︙عذرا عزيزي المجموعة ليس مفعلة",
  'reply_to_message_id'=>$message_id,
'reply_markup'=>$inlinebutton,
 ]);
	}
}
}
$carlos = array("خشوف وجهه يستاهل تفله","دي لك يخره شوف وجهك حرامت اذب تفلتي عليه😈👋🏿","دمشي لاتفل بخشمك🥱👏🏿","لك ياحيوان حترم لا اهينك اتفل بعينك😟🤘🏿","انته شايف وجهكك ب امرايه☹️🤘🏿");
$tiger = array_rand($carlos, 1);
if($reply and !in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"حاضر ستادي هسه شبعه تفال😻🤘🏿", 'reply_to_message_id'=>$message->message_id, ]);
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"$carlos[$tiger]",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

##كود ل ءبوايهاب لتخمط حبي##
##@PTPTPI##

if($reply and in_array($re_id,$Dev)){
if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مقفول"){
bot('sendMessage',[ 'chat_id'=>$chat_id, 'text'=>"دي لك تريد اتفل عله تاج راسك وراسي🥱🤫",'parse_mode'=>"MARKDOWN", 'reply_to_message_id'=>$message->reply_to_message->message_id ]); } }}

##كود ل ءبوايهاب لتخمط حبي##
##@PTPTPI##

if($text == "اتفل عليه" or $text == "شيله تفله" or $text == "تفله" or $text == "خخ تف" or $text == "بعد تفله" or $text == "ضل تفله" or $text == "تفف" or $text == "تتف"){
if($settings["lock"]["kiiio"] == "مفتوح"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
⌔︙عذرأ عزيزي ↫ [$from_name](tg://user?id=$from_id)
⌔︙ امر تفال معطل من قبل الادارة
",
'parse_mode'=>"Markdown",
'reply_to_message_id'=>$message->message_id,
]);
}
}
$re_msgid = $update->message->reply_to_message->message_id;
$plan = $message->from->first_name;
$opw = $message->from->id;
if($rt and $text == "هينه"){
$a = array("نجب ولتندك باسيادك فهمت🤚 ","😂انت بشر لو زربه الا بشر بشر ولا زربه زربه","🙃انت واحد فارغ وما بيك حظ😹","💢انت قندره وطايح حظ","هوه انت زربه");
$b = array_rand($a,1);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"صار استادي راح اهينه",
'reply_to_message_id'=>$message_id,
]);
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"
🗣┇$a[$b] 
💢┇[$plan](tg://user?id=$opw)",
'parse_mode'=>"MarkDown",
'reply_to_message_id'=>$re_msgid,
]);
}
$ary =array ("هذا جذاب لتصدكوا 😔😹", "احسه جذاب 😉😹", "لا رب الصح يحجي 🤤💕", "مدري صح مدري جذب شو محير امره ☹️😹", "صح ورب الصح يحجي 🙂😹😹") ;
$arry = array_rand ($ary, 1);
$array = $ary[$arry]; 
$ah = $message->reply_to_message; 
$ahm = $ah->message_id;
$message_idd = $update->message->message_id;
$hhmhhh = str_replace("كشف ","$hhmhhh",$text); 
$baron = explode (' ', $text) ;
$baronx = $baron[1]; 
$reply_name = $message->reply_to_message->from->first_name;
$reply_id = $message->reply_to_message->from->id;
if($text == "كشف $hhmhhh" or $text == "كشف" ){
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'جاري الكشف لحظه من فضلك 🤔🍃',
'reply_to_message_id'=>$ahm, 



 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'1⃣ ¦ جاري الكشف. ',
 'reply_to_message_id'=>$ahm, 
 ]);
 sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'2⃣ ¦ جاري الكشف.. ',
 'reply_to_message_id'=>$ahm, 

 ]);
sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'3⃣ ¦ جاري الكشف... ',
 'reply_to_message_id'=>$ahm, 

 ]); 
sleep(1);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>'4⃣ ¦ جاري الكشف.... ',
 'reply_to_message_id'=>$ahm, 

 ]);

 sleep(3);
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_idd + 1,
 'text'=>"$array
 ",
 'reply_to_message_id'=>$ahm, 

  'parse_mode'=>"MARKDOWN",
 ]);
sleep(10);
bot('deleteMessage',[
'chat_id'=>$chat_id,
    'message_id'=>$message_idd + 1,
    ]);

 }
 if($text == "اطردني"){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"تفضل اتسرسح منا",
]);
bot('kickChatMember',[
'chat_id'=>$chat_id,
'user_id'=>$from_id
]);
}
$wifid =  $update->message->reply_to_message->from->id;
$wifname =  $update->message->reply_to_message->from->first_name;
$wife = $update->message->reply_to_message;
$rd = $message->reply_to_message->message_id; 
$wi = file_get_contents("$from_id.txt");

if($re && $text == "طلب" && !in_array($re_id, $wi)){
file_put_contents("$re_id.txt",$re_id);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ طلب  [$name](tg://user?id=$from_id)
الزواج منكِ قولي نعم ان كُنتي موافقة 🙊😹💕",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$rd, 
]);
}
if($re && $text == "نعم" && $from_id == $wi){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ اصبح الان 
[$name](tg://user?id=$from_id) و [$wifname](tg://user?id=$wifid)
زوجا وزوجه 🙂😹💕", 
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
]);
unlink("$from_id.txt");
}
if(!$re && $text == "نعم" && $from_id == $wife){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ قومي بالرد على الشخص 💕", 
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
]);
} 

if($re && $text == "لا" &&  $from_id == $wi){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ للاسف رفضت 
[$name](tg://user?id=$from_id)
الزواج منك 😔💔", 'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
]);
unlink("$from_id.txt");
}
if(!$re && $text == "نعم" && $from_id == $wife){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"⌯ قومي بالرد على الشخص 💕", 
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
]);
}
if($text == "م1"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌯︙ﺄهلا بك عـزيزي    $name 
💞
⌯ ︙اوامر العامه ڪْالتالي ↓

—ـ—ـ—ـ—ـ—ـ— SnaB —ـ—ـ— —ـ—ـ—

⌯ معلوماتي ← لعرض معلوماتك  .
⌯ قائمه الاغاني←لضهور قائمه الاغاني  .
⌯ اسمي ←  لعرض اسمك  .
⌯ صورتي ← لجلب صوره بروفايلك  .
⌯ ايدي ← لعرض ايديك  .
⌯ ايديي ← لعرض ايدي فقط  .
⌯ تفعيل - تعطيل ← التحقق  .
⌯ كت تويت ← لعرض اسئله كت  . 

 —ـ—ـ—ـ—ـ—ـ— SnaB —ـ— —ـ—ـ—ـ—ـ

 #_قـسم ڪْت تويت اوامر المطور  .
 
⌯ اضف كت ← لاضافه اسئله كت  .
⌯ حذف كت ← لحذف سؤال  . 
⌯ عدد الاسئله ← لعرض عدد الاسئله المضافه  .
—ـ—ـ—ـ—ـ—ـ— SnaB —ـ— —ـ—ـ—ـ—ـ
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "م2"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"⌯︙ﺄهلا بك عـزيزي $name💞
⌯ ︙اوامر التسليه ڪْالتالي ↓

—ـ—ـ—ـ—ـ—ـ— SnaB —ـ—ـ— —ـ—ـ—

⌯ كشف الكذب 
⌯ رفع مطي
⌯ شنو رئيك بهذه 
⌯ مهنتي 
⌯ غني
",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ساقط"or $text=="سرسري"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجاوزك بسرعه اخلاقيي  .😂😂😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "فريخ"or $text=="لوكي"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"بله هسه عود من كلته شحسيتت بربك 😒 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "ملطلط"or $text=="ملطلطه"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"اجاوزك بسرعه اخلاقيي  .😔😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تف"or $text=="تفو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"راح مشيهه هلمرا الك مرا لخ حصرك وراها   .😔😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
if($text == "تفي"or $text=="تفوو"){
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"حعبرك هلمرا لتخاف .😔😂 .",
'reply_to_message_id'=>$message->message_id, 
]);
}
