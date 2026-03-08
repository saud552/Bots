<?php#*wataw*

$ID_BOT=$infobot['4'];
if(isset($update->inline_query))
{ 
if($text_inline =="مشاركة البوت"){
$link = "t.me/$usernamebot";
$listp = [[["text"=>" الدخول الى البوت", "url"=>"$link"]]];
bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "results"=>json_encode([[ "type"=>"article", "id"=>base64_encode(rand(5,555)), "title"=>" مشاركة بوت الكودات الجاهزة", "input_message_content"=>[ "message_text"=>"[ بوت صنع كود جاهز بابسط صورة ..](t.me/$usernamebot)

اصنع كودك الجاهز وشاركه انلاين بابسط واسهل صورة ممكنة ..", "parse_mode"=>"MarkDown", "disable_web_page_preview"=>true], "reply_markup"=>[
"inline_keyboard"=>$listp ]]])]);
} else {
include "data/stor/tg1/$text_inline.php";}
}

$unll = file_get_contents("unll.txt");
$message = $update->message;
$re         = $message->reply_to_message;
$re_msgid   = $re->message_id;
$re_f      =$re->from;
$re_id      = $re_f->id;
$re_user    = $re_f->username;
$re_name    = $re_f->first_name;
$dev=is_dev($from_id);
//=============

//****
mkdir("data/stor");
mkdir("data/stor/start");
mkdir("data/stor/from");
mkdir("data/stor/ch");
mkdir("data/stor/idch");
mkdir("data/stor/code");
mkdir("data/stor/tg");
mkdir("data/stor/tg1");

$startmod = file_get_contents("data/stor/start/l$from_id.txt");
$caption =  $update->message->caption;
$namer = $update->callback_query->from->first_name;
//=========lfunction=========


function is_dev($val){
  $get = json_decode(file_get_contents("data.json"), true);
 if (isset($get['dev'][$val]['status'])) {
 $dev=$get['dev'][$val]['status'];
   return $dev;
 } else {
  return false;
 }
}
function updev($id,$name){
  $get = json_decode(file_get_contents("data.json"), true);
$get['dev'][$id]['first_name']=$name;
$get['dev'][$id]['status']="Developer";
  file_put_contents("data.json", json_encode($get));
}
function undev($id){
  $get = json_decode(file_get_contents("data.json"), true);
  unset($get['dev'][$id]);
  file_put_contents("data.json", json_encode($get));
}
function dev_list(){
    $get = json_decode(file_get_contents("data.json"), true);
  $result = $get['dev'];
$admins = "";
  foreach($result as $key=>$value){
$first_name=$result[$key]['first_name'];
$admins=$admins."\nτ[$first_name](tg://user?id=$key)";
  }
return $admins;
}
function add_1($from_id,$f,$k){
  $get = json_decode(file_get_contents("data/stor/start/$from_id.json"), true);
$get['gp'][$f] =$k;
  file_put_contents("data/stor/start/$from_id.json", json_encode($get));
}
//*****
function add_cc($idbot,$f,$k){
  $get = json_decode(file_get_contents("data/stor/start/seve$idbot.json"), true);
$get['gp'][$f] =$k;
  file_put_contents("data/stor/start/seve$idbot.json", json_encode($get));
}
function re_ncc($idbot,$f){
  $get = json_decode(file_get_contents("data/stor/start/seve$idbot.json"), true);
if($get['gp'][$f]){
$re=$get['gp'][$f] ;
  return $re;
}
else
{return false;}}
//******
function add_mm($from_id,$idbot){
 $m_555 = file_get_contents("data/stor/start/m".$idbot.".txt");
$m555 = explode("\n", $m_555); 
  if (!in_array($from_id, $m555)) {
    file_put_contents("data/stor/start/m".$idbot.".txt", $from_id."\n",FILE_APPEND);
}
}

function add_3($ch,$f,$k){
  $get = json_decode(file_get_contents("data/stor/tg/$ch.json"), true);
$get['tg'][$f] =$k;
  file_put_contents("data/stor/tg/$ch.json", json_encode($get));
}

//========
function add_rd($ch,$caption,$file_id,$typ){
$gs = json_decode(file_get_contents("data/stor/tg/$ch.json"), true);
  $gs['tg']['typ'] = $typ;
  $gs['tg']['file_id'] = $file_id;
  $gs['tg']['caption'] = $caption;
  file_put_contents("data/stor/tg/$ch.json", json_encode($gs));
}
function re_n3($ch,$f){
  $get = json_decode(file_get_contents("data/stor/tg/$ch.json"), true);

if($get['tg'][$f]){
$re=$get['tg'][$f] ;
  return $re;
}
else
{
return false;
}
}
function re_nn($ch,$f){
  $get = json_decode(file_get_contents("data/stor/code/$ch.json"), true);

if($get['tg'][$f]){
$re=$get['tg'][$f] ;
  return $re;
}
else
{
return false;
}
}
function re_n1($from_id,$f){
  $get = json_decode(file_get_contents("data/stor/start/$from_id.json"), true);
if($get['gp'][$f]){
$re=$get['gp'][$f] ;
  return $re;
}
else
{
return false;
}
}



$mkchat = re_ncc($ID_BOT,"الكودات");
$mkchat2 =re_ncc($ID_BOT,"الاشتراك");
$mkchat1=str_replace("@","",$mkchat);
$mkchat3=str_replace("@","",$mkchat2);
$joinloke = re_ncc($ID_BOT,"الاجباري");
$linkjo =re_ncc($ID_BOT,"linkjo");
$titlejo =re_ncc($ID_BOT,"titlejo");
$idjo =re_ncc($ID_BOT,"idjo");

date_default_timezone_set("Asia/Bagdad");


//------------
$startmod = file_get_contents("data/stor/start/l$from_id.txt");
if($from_id==$admin)
{
if($text=="/start")
{
bot('sendMessage',[ 
'chat_id'=>$chat_id, 
'text'=>"
'🎖¦ آهہ‌‏لآ عزيزي آلمـطـور 🍃
🚸¦ تسـتطـيع‌‏ آلتحگم بگل آلآوآمـر آلمـمـوجودهہ‌‏ بآلگيبورد
⚖️¦ فقط آضـغط ع آلآمـر آلذي تريد تنفيذهہ‌‏
",
'reply_markup'=>json_encode([ 
'keyboard'=>[ 
[['text'=>'تغيير قناة الكودات'], ['text'=>'قناة الكودات']],
[['text'=>'➕ إنشاء إعلان']],
  ]]) 
]);
}

if($text=="قناة الكودات")
{
$count_us = re_ncc($ID_BOT,"الكودات");
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>" : قناة الكودات الجاهزة  ".$count_us
    ]);
}
//***
if($text=="تغيير ايدي التواصل")
{
file_put_contents("data/stor/start/l$from_id.txt", 'تغيير ايدي التواصل');
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>" قم بأرسال معرف ايدي التواصل "
    ]);
}
if($text and $startmod == "تغيير ايدي التواصل" ){
file_put_contents("data/stor/start/l$from_id.txt", 'null');
add_cc($ID_BOT,"التواصل",$text);
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>" : تم تحديث ايدي التواصل  
".$text
    ]);
}
//***
if($text=="تغيير قناة الكودات")
{
file_put_contents("data/stor/start/l$from_id.txt", 'تغيير الكودات');
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>" قم بأرسال معرف قناة الكودات الجاهزه 
مثال @yyyyi "
    ]);
}
if($text and $startmod == "تغيير الكودات" ){
file_put_contents("data/stor/start/l$from_id.txt", 'null');
add_cc($ID_BOT,"الكودات",$text);
bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>" : تم تحديث قناة الكودات الجاهزة  
".$text
    ]);
}

//*******


//******


}
//-----

 

//****
if($text == "🗑 حذف الإعلان" && file_exists("data/stor/start/l$from_id.txt")){
$ch = re_n1($from_id,"code");
unlink("data/stor/tg/$ch.json");
unlink("data/stor/tg/$ch.php");
unlink("data/stor/tg/l$ch.json");
unlink("data/stor/tg/p$ch.php");
unlink("data/stor/start/l$from_id.txt");
unlink("data/stor/start/$from_id.json");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم حذف إعلان قيد الإنشاء",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true
,'reply_markup'=>json_encode([
             'remove_keyboard'=>true
         ])
]);
}
if($text == "⤴️ رجوع" && file_exists("data/stor/start/l$from_id.txt")){
if( $startmod == "link"){
$data = "mkstart";
}
elseif( $startmod == "code"){
$startmod = "username";
 $text = re_n1($from_id,"us");
}
elseif( $startmod == "gooo1"){
$startmod = "link";
 $text = re_n1($from_id,"link");
}
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"تم الرجوع",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true
,'reply_markup'=>json_encode([
             'remove_keyboard'=>true
         ])
]);
}
if($data == "seve"){
$ch = re_n1($from_id,"code");
$gs = json_decode(file_get_contents("data/stor/tg/$ch.json"), true);
file_put_contents("data/stor/code/$ch.json", json_encode($gs));

$gs1 = file_get_contents("data/stor/tg/$ch.php");
file_put_contents("data/stor/tg1/$ch.php",$gs1);

$gs2 = file_get_contents("data/stor/tg/l$ch.php");
file_put_contents("data/stor/tg1/l$ch.php",$gs2);

$gs2 = file_get_contents("data/stor/tg/p$ch.php");
file_put_contents("data/stor/code/$ch.php",$gs2);

$u00=$ch."_".$ch;
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"💾 ✅ تمّ حفظ الكود \n مفتاح الكود :
 `@$usernamebot $u00`",
"message_id"=>$message_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"💾 ✅ تمّ حفظ الإعلان",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true
,'reply_markup'=>json_encode([
             'remove_keyboard'=>true
         ])
]);
$u = re_n1($from_id,"code");
 $link = re_n1($from_id,"link");
$getfile_id = re_nn($u,"file_id");
$getfull = re_nn($u,"caption");
$sens = re_nn($u,"typ");
$list = re_nn($u,"list");
$ss=str_replace("send","",$sens);
file_put_contents("data/stor/from/$u.php",'<?php $getfile_id ="'.$getfile_id.'" ; ');
include "data/stor/from/$u.php";

if($sens == "sendMessage"){

$gs2 = file_get_contents("data/stor/code/$u.php");
$u=$u."_".$u;
file_put_contents("data/stor/tg1/$u.php",'<?php'."\n".'$link = "'.$link.'";'.$gs2.''."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "results"=>json_encode([[ "type"=>"article", "id"=>base64_encode(rand(5,555)), "title"=>"ارسال الكود 💌", "input_message_content"=>[ "message_text"=>"'.$getfile_id.'", "parse_mode"=>"MarkDown", "disable_web_page_preview"=>true], "reply_markup"=>[
"inline_keyboard"=>$listp ]]])]);'."\n");
if(in_array($from_id,$sudo))
{

if(isset($list)){
bot("sendMessage",[
"chat_id"=>$mkchat,
"text"=>"$getfile_id",
"parse_mode"=>'markdown',
"disable_web_page_preview"=>true,
"reply_markup"=>$list
]);}
else {
 $get=bot("sendMessage",[
"chat_id"=>$mkchat,
"text"=>"$getfile_id",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true
]);
}
}
}
else{

$gs2 = file_get_contents("data/stor/code/$ch.php");
$u=$u."_".$u;
file_put_contents("data/stor/tg1/$u.php", '<?php'."\n".'$link = "'.$link.'";'.$gs2.''."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"'.$ss.'", "id"=>base64_encode(rand(5,555)), "'.$ss.'_file_id"=>"'.$getfile_id.'", "thumb_url"=>"'.$getfile_id.'","parse_mode"=>'markdown', "caption"=>"'.$getfull.'", "reply_markup"=>[ "inline_keyboard"=>$listp ]]])]);'."\n");
if(in_array($from_id,$sudo))
{

if(isset($list)){
 $get=bot($sens,[
"chat_id"=>$mkchat,
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
'parse_mode'=>'html',
"reply_markup"=>$list
]);
}
else {
$get=bot($sens,[
"chat_id"=>$mkchat,
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
'parse_mode'=>'html'
]);
}}}

unlink("data/stor/tg/$ch.json");
unlink("data/stor/tg/$ch.php");
unlink("data/stor/tg/l$ch.json");
unlink("data/stor/tg/p$ch.php");
unlink("data/stor/start/l$from_id.txt");
unlink("data/stor/start/$from_id.json");
}

//*****
if($text == "/start"){
add_mm($from_id,$ID_BOT);
file_put_contents("data/stor/start/l$from_id.txt", "");
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
🖨 اهلا بك في بوت الكودات واللينكات .
📑 اصبح البوت الان اسرع واسهل في الصنع .
🔘 البوت محدث بنجاح ويمكنك استخدامه .
📥 يمكنك صنع لينك خاص بك ايضا الان .

📣 قناة الاكواد الجاهزة : ".$mkchat."

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"قناة الكودات 🕵🏻‍♂ .",'url'=>"t.me/".$mkchat1]],
[['text'=>"شرح الاستخدام 🤷🏻‍♂.",'callback_data'=>"info"]],
[['text'=>"مشاركة البوت ♻️.",'switch_inline_query'=>"مشاركة البوت"]],
[['text'=>"➕ إنشاء إعلان",'callback_data'=>"mkstart"]],
[['text'=>"➕ تبديل الرابط",'callback_data'=>"reblinks"]]
]])
]);
}

if($data == "hom"){
file_put_contents("data/stor/start/l$from_id.txt", "link");
bot('editmessagetext',[
'chat_id'=>$chat_id, 
'text'=>"
🖨 اهلا بك في بوت الكودات واللينكات .
📑 اصبح البوت الان اسرع واسهل في الصنع .
🔘 البوت محدث بنجاح ويمكنك استخدامه .
📥 يمكنك صنع لينك خاص بك ايضا الان .

📣 قناة الاكواد الجاهزة : ".$mkchat."

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"قناة الكودات 🕵🏻‍♂ .",'url'=>"t.me/".$mkchat1]],
[['text'=>"شرح الاستخدام 🤷🏻‍♂.",'callback_data'=>"info"]],
[['text'=>"مشاركة البوت ♻️.",'switch_inline_query'=>"مشاركة البوت"]],
[['text'=>"➕ إنشاء إعلان",'callback_data'=>"mkstart"]],
[['text'=>"➕ تبديل الرابط",'callback_data'=>"reblinks"]]
]])
]);
}
if($data == "info"){
bot('editmessagetext',[
    'chat_id'=>$chat_id,
    'text'=>"كَيف تُرِيد شَرح البُوت ؟",
"message_id"=>$message_id,
"parse_mode"=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"شَرْح نَصِّ 📚 .",'callback_data'=>"info1"]],
[['text'=>"صِور🌃",'callback_data'=>"info"],
['text'=>"فِيدْيُو🎥",'callback_data'=>"p"]],
[['text'=>"القائمة الرئيسية🚪",'callback_data'=>"hom"]]
]])
    ]);
}
if($data == "info1"){
file_put_contents("data/stor/start/l$from_id.txt", "link");
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"اهلا عزيزي : لـ صنع كود او اعلان جاهز خاص ، اذهب الى قناة البوت [ ".$mkchat."] 

تصفح في القناة ، واختار كود مناسب لك ثم اضغط على زر [ اضغط هنا لصنع كود ] وقم بأرسال رابط قناتك ، رابط وليس يوزر ! وسيتم صنع اعلان لك بكل سهولة 💯 .
",
"message_id"=>$message_id,
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"قَنَاة الاكَواد 🕵🏻‍♂ .",'url'=>"t.me/".$mkchat1]],
[['text'=>"القائمة الرئيسية🚪",'callback_data'=>"hom"]]
]])
]);
}
if($data == "yes1" and $startmod == "modus"){
 $u = re_n1($from_id,"startstart");
 $text = re_n1($from_id,"link");
$getfile_id = re_nn($u,"file_id");
$getfull = re_nn($u,"caption");
$sens = re_nn($u,"typ");
$list = re_nn($u,"list");
$ss=str_replace("send","",$sens);

if($sens == "sendMessage"){
$co = file_get_contents("data/stor/start/countsend.txt");
$co1=$co+1;
 file_put_contents("data/stor/start/countsend.txt",$co1);
$co1=$u."_".$co1;
$gs2 = file_get_contents("data/stor/code/$u.php");
file_put_contents("data/stor/tg1/$co1.php",'<?php'."\n".'$link = "'.$text.'";'.$gs2.''."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "results"=>json_encode([[ "type"=>"article", "id"=>base64_encode(rand(5,555)), "title"=>"ارسال الكود 💌", "input_message_content"=>[ "message_text"=>"'.$getfile_id.'", "parse_mode"=>"MarkDown", "disable_web_page_preview"=>true], "reply_markup"=>[
"inline_keyboard"=>$listp ]]])]);'."\n");

 $link = re_n1($from_id,"link");
$gs2 = file_get_contents("data/stor/code/$u.php");
file_put_contents("data/stor/from/$u.php",'<?php $link ="'.$link.'" ;'."\n".' '.$gs2.' '."\n".'bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"'.$getfile_id.'",
"message_id"=>$message_id,
"parse_mode"=>'markdown',
"disable_web_page_preview"=>true,
"reply_markup"=>json_encode([ "inline_keyboard"=>$listp])]);');
include "data/stor/from/$u.php";
unlink("data/stor/from/$u.php");

}
else {
$co = file_get_contents("data/stor/start/countsend.txt");
$co1=$co+1;
 file_put_contents("data/stor/start/countsend.txt",$co1);
$co1=$u."_".$co1;

$gs2 = file_get_contents("data/stor/code/$u.php");
file_put_contents("data/stor/tg1/$co1.php", '<?php'."\n".'$link = "'.$text.'";'.$gs2.''."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "cache_time"=>"'.$message_id.'", "results"=>json_encode([[ "type"=>"'.$ss.'", "id"=>base64_encode(rand(5,555)), "'.$ss.'_file_id"=>"'.$getfile_id.'", "thumb_url"=>"'.$getfile_id.'","parse_mode"=>'markdown', "caption"=>"'.$getfull.'", "reply_markup"=>[ "inline_keyboard"=>$listp ]]])]);'."\n");

$link = re_n1($from_id,"link");
$gs2 = file_get_contents("data/stor/code/$u.php");
file_put_contents("data/stor/from/$u.php",'<?php $link ="'.$link.'" ;'."\n".' '.$gs2.' '."\n".'bot('.$sens.',[
"chat_id"=>$chat_id,
"$ss"=>"'.$getfile_id.'",
"caption"=>"'.$getfull.'",
"parse_mode"=>'markdown',
"reply_markup"=> json_encode([ "inline_keyboard"=>$listp])]);');
include "data/stor/from/$u.php";
unlink("data/stor/from/$u.php");
}
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"`@$usernamebot $co1`",
"parse_mode"=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مُشارَكَة الإِعلَان 📮 ",'switch_inline_query'=>"$co1"]],
[['text'=>"صَنَع إعلَان جَدِيد 🆕 ",'url'=>"t.me/".$mkchat1]]
]])
    ]);
}
if($data == "no1" and $startmod == "modus"){
 $u = re_n1($from_id,"startstart");
 $text = re_n1($from_id,"link");
$getfile_id = re_nn($u,"file_id");
$getfull = re_nn($u,"caption");
$sens = re_nn($u,"typ");
$list1 = re_nn($u,"list");
$ss=str_replace("send","",$sens);
$list = json_decode($list1,true);
if($sens == "sendMessage"){
$co = file_get_contents("data/stor/start/countsend.txt");
$co1=$co+1;
 file_put_contents("data/stor/start/countsend.txt",$co1);
$co1=$u."_".$co1;
file_put_contents("data/stor/tg1/$co1.php",'<?php'."\n".'$link = "'.$text.' ";'."\n".'bot("answerInlineQuery",[ "inline_query_id"=>$update->inline_query->id, "results"=>json_encode([[ "type"=>"article", "id"=>base64_encode(rand(5,555)), "title"=>"ارسال الكود 💌", "input_message_content"=>[ "message_text"=>"'.$getfile_id.'", "parse_mode"=>"MarkDown","disable_web_page_preview"=>true], ]])]);'."\n");


 $link = re_n1($from_id,"link");
file_put_contents("data/stor/from/$u.php",'<?php $link ="'.$link.'" ; '."\n".'bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"'.$getfile_id.'",
"message_id"=>$message_id,
"parse_mode"=>'markdown',
"disable_web_page_preview"=>true]);');
include "data/stor/from/$u.php";
unlink("data/stor/from/$u.php");
}
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"`@$usernamebot $co1`",
"parse_mode"=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"مُشارَكَة الإِعلَان 📮 ",'switch_inline_query'=>"$co1"]],
[['text'=>"صَنَع إعلَان جَدِيد 🆕 ",'url'=>"t.me/".$mkchat1]]
]])
    ]);
}
if($text and !$data and $startmod == "linkus"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text))
{
 $u = re_n1($from_id,"startstart");
$getfile_id = re_nn($u,"file_id");
add_1($from_id,"link",$text);
$sens = re_nn($u,"typ");
file_put_contents("data/stor/start/l$from_id.txt", "modus");

if($sens == "sendMessage"){
 $link = re_n1($from_id,"link");
file_put_contents("data/stor/from/$u.php",'<?php $getfile_id ="'.$getfile_id.'" ; ');
include "data/stor/from/$u.php";
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>" هَل تُرِيد عَرَض الْإِزَرار فِي الكُود الْخَاصّ فِيك ؟ ،
▪️الاعِلان : ".$getfile_id,
"parse_mode"=>'markdown',
"disable_web_page_preview"=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"لَا 🚫 .",'callback_data'=>"no1"],['text'=>"نَعم 💯 .",'callback_data'=>"yes1"]],
[['text'=>"إلْغَاء صَنَع الكُود 📑",'callback_data'=>"nomk"]]
]])
    ]);
}
else {
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"هَل تُرِيد عَرَض الْإِزَار فِي الكود الْخَاصّ فِيك ؟",
"parse_mode"=>'markdown',
"disable_web_page_preview"=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"لَا 🚫 .",'callback_data'=>"no1"],['text'=>"نَعم 💯 .",'callback_data'=>"yes1"]],
[['text'=>"إلْغَاء صَنَع الكُود 📑",'callback_data'=>"nomk"]]
]])
    ]);
}

}}
//-----
if($data == "reblinks"){
file_put_contents("data/stor/start/l$from_id.txt", "codrebles");
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"ارسل الان ايدي الكود
————————————",
"message_id"=>$message_id,
]);
}

if($text and !$data and $startmod == "codrebles"){
$start = explode('_', $text);
$u =$start[1];
add_1($from_id,"startstart",$u);
file_put_contents("data/stor/start/l$from_id.txt", "linkus");

  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"- أَرْسَل الْآن رَابِط قناتك 
- لانـه تَمّ تَحْدِيدٌ الكـود",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إلْغَاء صَنَع الكود 📑",'callback_data'=>"nomk"]]
]])
    ]);

}

$start = explode(' ', $text);
if (isset($start[0]) and isset($start[1]) and $start[0]=='/start' ) {
add_mm($from_id,$ID_BOT);
$u =$start[1];
add_1($from_id,"startstart",$u);
file_put_contents("data/stor/start/l$from_id.txt", "linkus");

  bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"- أَرْسَل الْآن رَابِط قناتك 
- لانـه تَمّ تَحْدِيدٌ الكـود",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"إلْغَاء صَنَع الكود 📑",'callback_data'=>"nomk"]]
]])
    ]);

}
//-----
if($data == "nomk"){
unlink("data/stor/start/l$from_id.txt");
bot("editmessagetext",[
"chat_id"=>$chat_id,
"text"=>"- تَمّ إلغَاء صَنَع الكَوّد ، لِطَلَب كَوّد جَدِيد أدخَل إلَى القَنَاة ، بَعدَهَا حَدّد طَلَبُك مِنْ جَدِيد 🆕 .",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"قَنَاة الاكَواد 🕵🏻‍♂ .",'url'=>"t.me/".$mkchat1]],
[['text'=>"القائمة الرئيسية🚪",'callback_data'=>"hom"]]
]])
]);
}


if($text == "➕ إنشاء إعلان" or $data == "mkstart"){
file_put_contents("data/stor/start/l$from_id.txt", "link");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔗 الآنـ أرسِل الرّابط الذي تريد إضافتُه فِي الإعلان
مِثال: `https://t.me/$us`",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true
]);
}

if($text and !$data and $startmod == "link"){
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text))
{
add_1($from_id,"link",$text);
file_put_contents("data/stor/start/l$from_id.txt", "code");
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"🔗 تمّ إختيارُ الرّابط:
".$text."
للرجوع أرسل: #رجوع",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true
,'reply_markup'=>json_encode([
             'keyboard'=>[
[['text'=>'🗑 حذف الإعلان'],['text'=>'⤴️ رجوع']],                 
             ],
             'resize_keyboard'=>true
         ])
]);
/*
$data = "mkin" ;
 $startmod = "mod";
*/
$countsend = file_get_contents("data/stor/start/countsend.txt");
$countsend1=$countsend+1;
 file_put_contents("data/stor/start/countsend.txt",$countsend1);

add_1($from_id,"count",$countsend1);
add_1($from_id,"code",$countsend1);
//****
bot('sendmessage',[
'chat_id'=>$chat_id, 
'text'=>"
ارسل الان اعلى الكود     
بـ امكانك استخدام جميع الوسائط مثلا 
(نص - بصمة - فيديو - صورة - صوت - متحركة)

رابط قناتك هو 
 $text
---------
لعمل نص ماركداون استبدل رابط قناتك بـ $text
مثلا 
[عبارات جميلة]($text)
",
'parse_mode'=>HTML,
'disable_web_page_preview'=>true
]);

}}

$lllll = "◻️ أرسلِ الأزرار التي تودّ إضافتها :
إفصل بين الأزرار أفقيًا بعلامة ( - )، وعموديًا بإضافة سطرٍ جديد.
* لا تكتب أي روابط.

في كل سطر 8 أزرار كحدٍ أقصى.
عدد الأسطر المتاحة: 4 فقط.

مِثال في الصّورة أعلاه
أمّا عدد الأسطر فيختلف بحسب نوعِ الإعلان، وطولّ النص في الإعلان، والصّورة، كلّما كان النصّ طويلًا، كان عدد الأسطر أقل.
أمّأ أسفل الصورة، فيمكن وضع 7 أسطر كحدٍ أقصى، إذا لم يكن هناكـ نص مع الصّورة.

";

$countsend1 = file_get_contents("data/stor/start/countsend.txt");

if($data == "gooo" and $startmod == "gooo1"){
file_put_contents("data/stor/start/l$from_id.txt", "gooo");
bot('editMessageReplyMarkup', [
'chat_id' => $chat_id,
'message_id'=>$message_id
]);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>HTML,
'disable_web_page_preview'=>true,
'text'=>$lllll
]);
}
if($data == "caption" and $startmod == "gooo1"){
file_put_contents("data/stor/start/l$from_id.txt", "g2");
bot('editMessageReplyMarkup', [
'chat_id' => $chat_id,
'message_id'=>$message_id
]);
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>HTML,
'disable_web_page_preview'=>true,
'text'=>"📝 أرسِل نصّ الإعلان، مع العلم أنه سيكون وصفًا أسفل الميديا  ويمكنك كتابة {فارغ} لكي يكون أسفل الصورة أزرار شفافة فقط
تنسيق المارك الداون مدعوم فقط آخر تحديث لتلقرام، يفضل عدم استخدامه حاليا"
]);
}
if($text and !$data and $startmod == "g2"){
add_3($countsend1,"caption",$text);
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");
$getfile_id = re_n3($countsend1,"file_id");
$getfull = re_n3($countsend1,"caption");
$sens = re_n3($countsend1,"typ");
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
'parse_mode'=>'html'
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"],
['text'=>"📝تعديل الوصف ",'callback_data'=>"caption"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
if(!$data and $startmod == "code"){
$sher ="https://t.me/$usernamebot?start=$countsend1";
file_put_contents("data/stor/tg/$countsend1.php", '<?php'."\n".'$list = json_encode(['."\n".'"inline_keyboard"=>['."\n".'[["text"=>"اضغط هنا لصنع كود 🔘", "url"=>"'.$sher.'"]]]]);');

if($text){
add_rd($countsend1,'no',$text,'sendMessage');
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");
//****
//****
bot('sendmessage',[
'chat_id'=>$chat_id, 
'parse_mode'=>HTML,
'disable_web_page_preview'=>true,
'text'=>"تم حفظ النصّ التالي:\n".$text,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);
}

if($update->message->photo){
$file_id = $update->message->photo[1]->file_id;
add_rd($countsend1,$caption,$file_id,'sendphoto');
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");
bot("sendphoto",[
"chat_id"=>$chat_id,
"photo"=>"$file_id",
'caption'=>"$caption",
'parse_mode'=>'html'
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"],
['text'=>"📝تعديل الوصف ",'callback_data'=>"caption"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
if($update->message->document ){
$file_id = $update->message->document->file_id;
add_rd($countsend1,$caption,$file_id,'senddocument');
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");
bot("senddocument",[
"chat_id"=>$chat_id,
"document"=>"$file_id",
'caption'=>"$caption",
'parse_mode'=>'html'
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"],
['text'=>"📝تعديل الوصف ",'callback_data'=>"caption"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
if($update->message->sticker ){
$file_id = $update->message->sticker->file_id;
add_rd($countsend1,$caption,$file_id,'sendsticker');
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");

bot("sendsticker",[
"chat_id"=>$chat_id,
"sticker"=>"$file_id",
'caption'=>"$caption",
'parse_mode'=>'html'
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"],
['text'=>"📝تعديل الوصف ",'callback_data'=>"caption"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
if($update->message->voice ){
$file_id = $update->message->voice->file_id;
add_rd($countsend1,$caption,$file_id,'sendvoice');
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");

bot("sendvoice",[
"chat_id"=>$chat_id,
"voice"=>"$file_id",
'caption'=>"$caption",
'parse_mode'=>'html'
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"],
['text'=>"📝تعديل الوصف ",'callback_data'=>"caption"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
if($update->message->audio ){
$file_id = $update->message->audio->file_id;
add_rd($countsend1,$caption,$file_id,'sendaudio');
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");
bot("sendaudio",[
"chat_id"=>$chat_id,
"audio"=>"$file_id",
'caption'=>"$caption",
'parse_mode'=>'html'
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"],
['text'=>"📝تعديل الوصف ",'callback_data'=>"caption"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
if($update->message->video ){
$file_id = $update->message->video->file_id;
add_rd($countsend1,$caption,$file_id,'sendvideo');
file_put_contents("data/stor/start/l$from_id.txt", "gooo1");

bot("sendvideo",[
"chat_id"=>$chat_id,
"video"=>"$file_id",
'caption'=>"$caption",
'parse_mode'=>'html'
]);
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اضافة ازرار",'callback_data'=>"gooo"],
['text'=>"📝تعديل الوصف ",'callback_data'=>"caption"]],
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
}
if($text != "/start" and !$data and $startmod == "gooo"){
$ex = explode("\n", $text);
//======
$link = re_n1($from_id,"link");
$getfile_id = re_n3($countsend1,"file_id");
$getfull = re_n3($countsend1,"caption");

file_put_contents("data/stor/tg/$countsend1.php", '<?php'."\n".'$list = json_encode(['."\n".'"inline_keyboard"=>['."\n");

file_put_contents("data/stor/tg/p$countsend1.php","\n".'$listp = ['."\n");

for($i=0;$i<count($ex);$i++){
$h = explode("\n", $text);
$u = explode("-", $h[$i]);
$n = count($u);
if($i!=0){
file_put_contents("data/stor/tg/$countsend1.php",',', FILE_APPEND);
file_put_contents("data/stor/tg/p$countsend1.php",',', FILE_APPEND);
}
file_put_contents("data/stor/tg/$countsend1.php", "\n".'[', FILE_APPEND);
file_put_contents("data/stor/tg/p$countsend1.php", "\n".'[', FILE_APPEND);
for($x=0;$x<$n;$x++){
if($x!=0){
file_put_contents("data/stor/tg/$countsend1.php",',', FILE_APPEND);
file_put_contents("data/stor/tg/p$countsend1.php",',', FILE_APPEND);
}
file_put_contents("data/stor/tg/$countsend1.php", "\n".'["text"=>"'.trim($u[$x]).'", "url"=>"$link"]', FILE_APPEND);
file_put_contents("data/stor/tg/p$countsend1.php", "\n".'["text"=>"'.trim($u[$x]).'", "url"=>"$link"]', FILE_APPEND);
}
file_put_contents("data/stor/tg/$countsend1.php",']', FILE_APPEND);
file_put_contents("data/stor/tg/p$countsend1.php",']', FILE_APPEND);
}
file_put_contents("data/stor/start/l$from_id.txt", "seve");

$sher ="https://t.me/$usernamebot?start=$countsend1";
file_put_contents("data/stor/tg/$countsend1.php", "\n".',[["text"=>"اضغط هنا لصنع كود 🔘", "url"=>"'.$sher.'"]]', FILE_APPEND);
file_put_contents("data/stor/tg/$countsend1.php", "\n".']]);', FILE_APPEND);
file_put_contents("data/stor/tg/p$countsend1.php", "\n".'];', FILE_APPEND);
//***
//***
include "data/stor/tg/$countsend1.php";
include "data/stor/tg/p$countsend1.php";
add_3($countsend1,"list",$list);

$sens = re_n3($countsend1,"typ");
$list5 = re_n3($countsend1,"list");
if($sens == "sendMessage"){
file_put_contents("data/stor/tg/$countsend1.php", "\n".'bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"'.$getfile_id.'",
"parse_mode"=>'markdown',
"disable_web_page_preview"=>true,
"reply_markup"=>$list5
]);', FILE_APPEND);

bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"$getfile_id",
"parse_mode"=>'markdown',
"disable_web_page_preview"=>true,
"reply_markup"=>$list5
]);

}
else {
$ss=str_replace("send","",$sens);
bot($sens,[
"chat_id"=>$chat_id,
"$ss"=>"$getfile_id",
'caption'=>"$getfull",
'parse_mode'=>'html',
"reply_markup"=>$list5
]);
}
bot("sendMessage",[
"chat_id"=>$chat_id,
"text"=>"✅ تم إنشاء الإعلان، هل تريد حفظه ؟
⛔️ أرسل #حذف لِحذف الإعلانـ، أرسل #رجوع للرجوع.",
'parse_mode'=>'markdown',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"💾 حفظ",'callback_data'=>"seve"]]
]])
]);	
}
?>

