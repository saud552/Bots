<?php#*wataw*

if($start=="non"){
$start="في بوت الالعاب والتحديات";}

function load_data($db_){
$file = file_get_contents($db_);
return json_decode($file, true);}
function save_data($db_, $data){
if ($data){
$contents = json_encode($data);
file_put_contents($db_, $contents);}}
function resolve_fwd_id($sender_name){
global $db;
$nofwdusers = load_data($db);
$id = "";
foreach ($nofwdusers as $fwdname => $fwdid){
if ($sender_name == $fwdname){
$id = $fwdid;
break;}}
return $id;}
function world($array,$type,$text=null,$iarr=0){
if($type == "Rand"){
function mb_str_split($str, $len){
$chars = preg_split('/(?<!^)(?!$)/u', $str );
$out = array();
foreach( array_chunk($chars, $len) as $a ){
$out[] = join("", $a);}
return $out;}
$random_keysn=array_rand($array,1);
$random_keys = $array[$random_keysn];
$shuffle_arr = mb_str_split($random_keys,1);
shuffle($shuffle_arr);
$out = "";
for ($i=0; $i < count($shuffle_arr); $i++) {
$out = $out." ".$shuffle_arr[$i];}
return json_encode(['text'=>$out,'iarr'=>$random_keysn]);
}else {
$random_keys = $array[$iarr];
if($random_keys == $text){
return true;
}else {
return false;}}}

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$text = $message->text;
$sudo = $admin;
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
$username = $update->message->from->username;
$from_id = $update->message->from->id;
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$chatid = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$user_id = $message->from->id;
$user = $message->from->username;
$name = $message->from->first_name;
$mid = $message->message_id;
$username = $message->from->username;
$document = $message->document;
$message = $update->message;
$chat_id = $message->chat->id;
$caption = $message->caption;
$file_id = $document->file_id;
$sticker = $message->sticker;
$sticer_id = $sticker->file_id;
$marcusuio_id =$marcusudio->file_id;
$from_id = $message->from->id;
$sajad = $update->callback_query->from->username;
$from_id = $message->from->id;
$chat_id = $message->chat->id;
$voice = $update->message->voice;
$document = $update->message->document;
$video = $update->message->video;
$photo = $update->message->photo;
$id = $message->from->id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$fn = $message->from->first_name;
$uss = $message->from->username;
$name = $update->message->from->first_name;
$get_welc = file_get_contents('setwelc.txt');
$ex_welc = explode("\n", $get_welc);
$mid = $message->message_id;
$welc = file_get_contents('welcome.txt');
$first_name = $message->from->first_name;

$arr = ['اسطنبول','نفط','موضف','مهندس','شركة','اعمال','ترتيب','قصيدة','قوافل','علماء','قران','مقعد','غطاء','استراليا','محمد','العراق','سفينة','محطه','سيارة','تفاعل','اجازه','نقود','طبيه','مارسيدس','باب','امير','حزين','اسمر','ذهبي','عسل','بابل','نهر','عملاق','عماره','كنتاكي','مهدي','ضفدع','خنزير','بغبغاء','كوثر','غرفة','كحبه','مناويج','فروخ','مشتهيه','ريحني','عيرك','كواد','شتهيت','خدرت','نيجني'];
$SK = array("مغامر 🤍","فضولي 🌿","شجاع ","محبوب 😻","كسول 😴","غيور 🤦‍♂️","منعزل 👩‍🦯","اجتماعي 🙋‍♂️","عصبي 😾","مسالم 💗","حنون 😽");
$sz = array_rand($SK, 1);
$sau = $SK[$sz];
$phot = "⏳ سوف يتم حذف الصوره خلال 5 ثواني فقط !!.";
$vid = "⏳ سوف يتم حذف الفيديو خلال 5 ثواني فقط !!.";
$mat = "⏳ سوف يتم حذف المتحركة خلال 5 ثواني فقط !!.";
###################

if($data == 'usus'){
bot('editMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"🌿 ارسل معرف الذي تريد تضعه في زر اللعب مع المطور بدون علامة ( @ )",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الغاء 🚫 .','callback_data'=>'Cancel']]
]])]);file_put_contents('setwelc.txt', $chat_id2);}
if($text and in_array($from_id, $ex_welc)){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"تم وضع المعرف بنجاح",
'reply_to_message_id'=>$message->message_id,]);
file_put_contents('welcome.txt', $text);
file_put_contents('setwelc.txt', '');}

#######

$users = explode("\n",file_get_contents("yyyyi.json"));
$name = $message->from->first_name;
$cq = $update->callback_query;
$data = $cq->data;
$name2 = $update->callback_query->from->first_name;
$message_id = $cq->message->message_id;
$band = explode("\n", $list);
$blook = count($band)-1;
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i:s');
$date = date('20y/m/d');

if($data == 'vr'){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'message_id'=>$message_id,
'text'=>'Create By @$welc ☑️
V : 3.3 🗓','show_alert'=>true]);}
############

if($chat_id == $admin){
if($chat_id == $sudo){
if($text == "/start" ){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"اهلا بك عزيزي المطور لتغير الحقرق اضغط،في الاسفل",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- تعديل معرف المطور.",'callback_data'=>"usus"]],
]])]);}}}
##########

if ($text == '/start') {
$name = $message->from->first_name;
$startp = file_get_contents('start.txt');
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i');
$date = date('20y/m/d');
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"اهلا ♥️..
$start

📆 $time|$date

$txtfree",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- لو خيروك جريئ.",'callback_data'=>"ffg"]],
[['text'=>"- اسئلة جريئه.",'callback_data'=>"1"],['text'=>"- تحديات.",'callback_data'=>"2"]],
[['text'=>'- من سيربح المليون','callback_data'=>"mle"]],
[['text'=>'- المحيبس','callback_data'=>'mhbs'],['text'=>'- حزورة بليره','callback_data'=>'hzo']],
[['text'=>"- ترتيب الكلمات.",'callback_data'=>"exit"]],
[['text'=>"- اختبار الشخصية",'callback_data'=>"!6!"],['text'=>"- اسئله عادية.",'callback_data'=>"5"]],
[['text'=>"ماهؤ تقييمك للبوت 🌟.",'callback_data'=>"تقيم"]],
[['text'=>"- اصدار البوت🔍.",'callback_data'=>"vr"]],
]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"📄 هذا دز ستارت للبوت
[📺  اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id)
",'parse_mode'=>"MarkDown",]);}
#############
$name = $message->from->first_name;
$username = $message->from->username;
if ($text == '/start' ) {
$json['msgs'][$text] = $chat_id;
file_put_contents("data.json", json_encode($json));
file_put_contents('startome.txt');
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"$welcstart",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- لو خيروك جريئ.",'callback_data'=>"ffg"]],
[['text'=>"- اسئلة جريئه.",'callback_data'=>"1"],['text'=>"- تحديات.",'callback_data'=>"2"]],
[['text'=>'- من سيربح المليون','callback_data'=>"mle"]],
[['text'=>'- المحيبس','callback_data'=>'mhbs'],['text'=>'- حزورة بليره','callback_data'=>'hzo']],
[['text'=>"- ترتيب الكلمات.",'callback_data'=>"exit"]],
[['text'=>"- اختبار الشخصية",'callback_data'=>"!6!"],['text'=>"- اسئله عادية.",'callback_data'=>"5"]],
[['text'=>"ماهؤ تقييمك للبوت 🌟.",'callback_data'=>"تقيم"]],
[['text'=>"- اصدار البوت🔍.",'callback_data'=>"vr"]],
]])]);}
#############
if ($data == "fm"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- تم الرجوع الى القائمة الرئيسية.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- لو خيروك جريئ.",'callback_data'=>"ffg"]],
[['text'=>"- اسئلة جريئه.",'callback_data'=>"1"],['text'=>"- تحديات.",'callback_data'=>"2"]],
[['text'=>'- من سيربح المليون','callback_data'=>"mle"]],
[['text'=>'- المحيبس','callback_data'=>'mhbs'],['text'=>'- حزورة بليره','callback_data'=>'hzo']],
[['text'=>"- ترتيب الكلمات.",'callback_data'=>"exit"]],
[['text'=>"- اختبار الشخصية",'callback_data'=>"!6!"],['text'=>"- اسئله عادية.",'callback_data'=>"5"]],
[['text'=>"ماهؤ تقييمك للبوت 🌟.",'callback_data'=>"تقيم"]],
[['text'=>"- اصدار البوت🔍.",'callback_data'=>"vr"]],
]])]);}
###################
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$callback_query = $update->callback_query;
$username = $callback_query->from->username;
$from_id = $callback_query->from->id;
if($data == "Rand"){
$world = json_decode(world($arr,"Rand"));
$textr = $world->text;
$iarr = $world->iarr;
$json = ['settings'=>$iarr,'text'=>$textr];
file_put_contents("data/$from_id.json",json_encode($json));
 bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"رتب الأحرف لتصبح كلمة : $textr",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"خروج 💔",'callback_data'=>"exit"],['text'=>"تغير 🔄",'callback_data'=>"Rand"]]]])]);}
if($data == "exit"){
$json = ['settings'=>""];
file_put_contents("data/$from_id.json",json_encode($json));
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"أهلاً بك في لعبة ترتيب الكلمات 📝\n✋🏻 اضغط على بدأ للعب اللعبة.\n-",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بدأ",'callback_data'=>"Rand"],]]])]);}}
$settings = json_decode(file_get_contents("data/$from_id.json"));
$settings = $settings->settings;
if($settings != "" and $text){
$check = world($arr,"Check",$text,$settings);
if($check){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"لقد فزت 🔥",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اللعب مرة اخرى",'callback_data'=>"Rand"],]]])]);
}else{
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"خطأ 👎🏻",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"خروج 💔",'callback_data'=>"exit"], ['text'=>"تغير 🔄",'callback_data'=>"Rand"]]]])]);}}
#############
if($data == "تقيم"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- عزيزي ماهو تقيمك للبوت ؟.\n-",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🌟",'callback_data'=>"🌟1"],['text'=>"🌟🌟",'callback_data'=>"🌟2"],['text'=>"🌟🌟🌟",'callback_data'=>"🌟3"]],
[['text'=>"🌟🌟🌟🌟",'callback_data'=>"🌟4"]],[['text'=>"🌟🌟🌟🌟🌟",'callback_data'=>"🌟5"]],
[['text'=>"📝 ارسل تعليقاتك وملاحطاتك.",'callback_data'=>"رأيك"]],]])]);}
if($data == "🌟1" ){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"نأسف جداً لسماع هذا الخبر ارسل لنا ملاحظتك بخصوص البوت",
'show_alert'=>true]);
bot('sendMessage',['chat_id'=>$sudo,
'message_id'=>$message_id,
'text'=>"هذا قيم البوت من 1 : @$sajad",]);}
if($data == "🌟2" ){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"نأسف جداً لسماع هذا الخبر ارسل لنا ملاحظتك بخصوص البوت",
'show_alert'=>true]);
bot('sendMessage',['chat_id'=>$sudo,
'message_id'=>$message_id,
'text'=>"هذا قيم البوت من 2 : @$sajad",]);}
if($data == "🌟3" ){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"نأسف جداً لسماع هذا الخبر ارسل لنا ملاحظتك بخصوص البوت",
'show_alert'=>true]);
bot('sendMessage',['chat_id'=>$sudo,
'message_id'=>$message_id,
'text'=>"هذا قيم البوت من 3 : @$sajad",]);}
if($data == "🌟4" ){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"سعيدون جداً لسماع هذا الخبر شكرا لك لتعاونك معناَ وسعداء لوجودك في بوتنا وخدمتنا.",
'show_alert'=>true]);
bot('sendMessage',['chat_id'=>$sudo,
'message_id'=>$message_id,
'text'=>"هذا قيم البوت من 4 : @$sajad",]);}
if($data == "🌟5" ){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"سعيدون جداً لسماع هذا الخبر شكرا لك لتعاونك معناَ وسعداء لوجودك في بوتنا وخدمتنا.",
'show_alert'=>true]);
bot('sendMessage',['chat_id'=>$sudo,
'message_id'=>$message_id,
'text'=>"هذا قيم البوت من 5 : @$sajad",]);}
############################
if ($data == "1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- آهلأ بك من جديد 🖤.
- يمكنك العب مع البوت او مع مطور البوت 🌐.
- عند العب مع البوت اضغط على زر العب مع البوت في الاسف 📺.
- عند العب مع مطور البوت اضغط على زر العب مع المطور في الاسف 👨🏼‍💻.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- اللعب مع البوت.",'callback_data'=>"##1"]],[['text'=>"- اللعب مع المطور.",'callback_data'=>"ameer"]],
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
###################
if ($data == "2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- آهلأ بك من جديد 🖤.
- يمكنك العب مع البوت او مع مطور البوت 🌐.
- عند العب مع البوت اضغط على زر العب مع البوت في الاسف 📺.
- عند العب مع مطور البوت اضغط على زر العب مع المطور في الاسف 👨🏼‍💻.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- اللعب مع البوت.",'callback_data'=>"#1#"]],[['text'=>"- اللعب مع المطور.",'callback_data'=>"ameer"]],
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
##############
if ($data == "5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- آهلأ بك من جديد 🖤.
- يمكنك العب مع البوت او مع مطور البوت 🌐.
- عند العب مع البوت اضغط على زر العب مع البوت في الاسف 📺.
- عند العب مع مطور البوت اضغط على زر العب مع المطور في الاسف 👨🏼‍💻.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- اللعب مع البوت.",'callback_data'=>"1#1"]],[['text'=>"- اللعب مع المطور.",'callback_data'=>"ameer"]],
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
###############
if ($data == "ffg"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- آهلأ بك من جديد 🖤.
- يمكنك العب مع البوت او مع مطور البوت 🌐.
- عند العب مع البوت اضغط على زر العب مع البوت في الاسف 📺.
- عند العب مع مطور البوت اضغط على زر العب مع المطور في الاسف 👨🏼‍💻.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- اللعب مع البوت.",'callback_data'=>"ffgff"]],[['text'=>"- اللعب مع المطور.",'callback_data'=>"ameer"]],
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
###############
if ($data == "ameer"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- أهلاً بك في قسم اللعب مع المطور .
- هذا هو حساب مطور البوت : @$welc
- ملاحظه عند العب مع المطور بدون مقدمات .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- المطور.",'url'=>"t.me/$welc"]],
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
###############
if($data == "خلصت"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- الى هنا وتنتهي الاسئلة الخاصه لـهذا القسم ✋🏻.
- يمكنك العب من جديد في نفس القسم او غيره .
- اتمنئ ان نلت اعجابك واستمتعت معي في العب شكرآ لك 🤝.

- ماهو رئيك في الاسئلة التي قدمتها لك وما هو رائيك بي وهل استحق الاعجاب ام لا ❕.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- اعجبني 👍🏻.",'callback_data'=>"like"],['text'=>"- لم يعجبني 👎🏻.",'callback_data'=>"dslike"]],
[['text'=>"📝 ارسل تعليقاتك وملاحطاتك.",'callback_data'=>"رأيك"]],
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
######################
if($data == "like"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"✨ شكراً , لأعطائك رأيك في البوت وشكرأ لثقتك بنا نتمنئ ان نكون جاهدين في اسعادك دائماً وابداَ.",
'show_alert'=>true]);
bot('sendMessage',['chat_id'=>$sudo,
'message_id'=>$message_id,
'text'=>"- هذا اعطاه رأيه في البوت واعجبه جداً. @$sajad",]);}

if($data == "dslike"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"- نأسف لسماع هذا , هل واجهت مشكلة في هذا البوت؟ اخبرنا رجاءً (باللغة العربية فقط):",
'show_alert'=>true]);
bot('sendMessage',['chat_id'=>$sudo,
'message_id'=>$message_id,
'text'=>"- هذا اعطاه رأيه في البوت ولم يعجبه اطلاقاً. @$sajad",]);}
if ($data == "رأيك"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"?? رأيك يهمنا !!!.
- يمكنك اقتراح تغييرات أو تحسينات على البوت، الإبلاغ عن أخطاء، أو إرسال تعليق إلى المطورين (باللغة العربية فقط).
- ارسل ملاحظتك او ابلاغك هنا: @$welc.",
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
###############
if ($data == "##1" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- آهلأ بك في قسم الاسئلة الجريئة 🔞.
- اختر القسم الذي تحب العب فيه وابدء بالعب.
- في الاسفل يوجد العديد من الاقسام وكل قسم فيه اسئلة عديده وخاصه فيه 🎬.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- اسئلة جريئة",'callback_data'=>"#1"],['text'=>"- اسئلة منحرفة",'callback_data'=>"#2"]],
[['text'=>"- اسئلة للمتزوجين",'callback_data'=>"#5"],['text'=>"- اسئلة للمطلقين",'callback_data'=>"#6"]],
[['text'=>"- كدها عاديه",'callback_data'=>"hmd"],['text'=>"- كدها جريئة",'callback_data'=>"ttty"]],
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
#############
if($data == "#1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- عزيزي اختر جنسك وابدء بالعب .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ولد.",'callback_data'=>"ولد"],['text'=>"- بنية.",'callback_data'=>"بنيه"]],]])]);}
if($data == "ولد"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"للعب اضغط في الاسفل",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ابدء العب.",'callback_data'=>"@1"]],]])]);}
#الاسئله#
if($data == "@1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحب زواج متعه لو عادي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"متعه",'callback_data'=>"!"],['text'=>"عادي",'callback_data'=>"!!"]],]])]);}
if($data == "!"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووفف مرتاح كواد 😹💔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@2"]],]])]);}
if($data == "!!"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي نته مكضيها ع نفس الفلم دغيره يمعود 🤦🏼‍♂️💔😹",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@2"]],]])]);}
if($data == "@2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحب القزمة لو الطويله",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"قزمة",'callback_data'=>"@"],['text'=>"طويله",'callback_data'=>"@@"]],]])]);}
if($data == "@"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي قزمو ومربربه تشبع نيج بيها بلشته وتدفيك",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@3"]],]])]);}
if($data == "@@"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ههه متفيدك تطويله بس تضوج تكتلك 😹💔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@3"]],]])]);}
if($data == "@3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"مخيل ع وحده من كرايبك",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>"$"],['text'=>"لا",'callback_data'=>"$$"]],]])]);}
if($data == "$"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ادري بيك متدبرها اكيد مانجتها لسه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@4"]],]])]);}
if($data == "$$"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسلك لان تتورط وياها وياها وتعال اتزوجهها 😹💔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@4"]],]])]);}
if($data == "@4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحب عشرينيه لو ثلاثينيه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"20",'callback_data'=>"%"],['text'=>"30",'callback_data'=>"%%"]],]])]);}
if($data == "%"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف عشرينه وبعدها جديده اويلي تنسيك الدنيا ومابيها",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@5"]],]])]);}
if($data == "%%"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ثلاثينيه ومربربه تخليك ترتاح فول بس تعبك 🤤😹🥺",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@5"]],]])]);}
if($data == "@5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"باعصلك بنيه بمكان عام",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>"&"],['text'=>"لا",'callback_data'=>"&&"]],]])]);}
if($data == "&"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كفو بس كون مانكتلت 😹😹😹🙂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@6"]],]])]);}
if($data == "&&"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شبيك تخاف شني جربها حلوه ولتخاف متحجي شي لان تستحي 😹😹☹️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@6"]],]])]);}
if($data == "@6"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحب وره لو لكدام",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدام",'callback_data'=>"*"],['text'=>"وره",'callback_data'=>"**"]],]])]);}
if($data == "*"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"معود شمفهمك انت شتحصل من لكدام روح روح عمي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@7"]],]])]);}
if($data == "**"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي الوره وتدحسه كله وتشك طيزها ترتاح فوول 😂🤤",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@7"]],]])]);}
if($data == "@7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحب العذراء لو المتزوجه لو المطلقه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"عذراء",'callback_data'=>"-"],['text'=>"متزوجه",'callback_data'=>"--"]],
[['text'=>"مطلقه",'callback_data'=>"---"]],]])]);}
if($data == "-"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شتسوي بيها ولك متفيد بس من وره",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@8"]],]])]);}
if($data == "--"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"معود اكعد راحه لا يلزمك زوجها 😹😹☹️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@8"]],]])]);}
if($data == "---"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي وتلكاها حاميه حت تتعب من كثر النيج وهي متشبع 😂😂💔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@8"]],]])]);}
if($data == "@8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"نايجلك وحده من كرايبك ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>"+"],['text'=>"لا",'callback_data'=>"++"]],]])]);}
if($data == "+"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عفيه بس خوما تورطت وياها 😹😹😹💔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@9"]],]])]);}
if($data == "++"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسلك للتتقرب لهيجي شي 🌝😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@9"]],]])]);}
if($data == "@9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تدور بنات لو حلوين ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بنات",'callback_data'=>"("],['text'=>"حلوين",'callback_data'=>"(("]],]])]);}
if($data == "("){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي عفيه صير رجال بالكت تتورط وي وحده وتزوجها 😂😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@10"]],]])]);}
if($data == "(("){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"باع انت شكد فارغ وبطران بس اكلك الله يهديك",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"@10"]],]])]);}
if($data == "@10"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"طالع وي حبيبتك ونايجها ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>")"],['text'=>"لا",'callback_data'=>"))"]],]])]);}
if($data == ")"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كفو بس ديربالك لتسويها مره لخ وتفتحها 😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}
if($data == "))"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كبر هسه باجر تعوفك وتدور غيرك 😂😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}
#######بنات#######
if($data == "بنيه"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"للعب اضغط في الاسفل",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ابدء االلعب.",'callback_data'=>"1b"]],]])]);}
#الاسئله#
if($data == "1b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحبين سحاق لو لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>"1@"],['text'=>"لا",'callback_data'=>"1@@"]],]])]);}
if($data == "1@"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"محلو معوده جربي وي المطور خلي يريحج 🤤♥️ @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"2b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين سحاق لو لا
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "1@@"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف اويلي تعاي اريحج عمري 🥺♥️ @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"2b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين سحاق لو لا
📑 الجواب : لا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "2b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحبين الحس لو الرضع ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"لحس",'callback_data'=>"لحس"],['text'=>"رضع",'callback_data'=>"رضع"]],]])]);}
if($data == "لحس"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اؤؤفف تتعااي خلي الحسلج كسج 😉🤤 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"3b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين الحس لو الرضع ؟
📑 الجواب : لحس
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "رضع"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووف وصدرج جبير اويلي تعاي ارضعه الج واعضضه 🤤🙊 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"3b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين الحس لو الرضع ؟
📑 الجواب : رضع
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "3b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الباسج يالون لابسته هسسه 🙈😉",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اسود",'callback_data'=>"اسود"],['text'=>"وردي",'callback_data'=>"وردي"]],
[['text'=>"غير لون",'callback_data'=>"غير"]],]])]);}
if($data == "اسود"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وفف يالاسود اموت عليةة 😍??@$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"4b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : الباسج يالون لابسته هسسه 🙈😉
📑 الجواب : اسود
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "وردي"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يابويةة كسج وردي ونوب لابسه وردي تعاي يمي تعاي الحسه وف @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"4b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : الباسج يالون لابسته هسسه 🙈😉
📑 الجواب : وردي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "غير"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هو نتي كمر كلشي يلوكلج وووفف اذا لزمتج 💕😉 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"4b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : الباسج يالون لابسته هسسه 🙈??
📑 الجواب : غيرهن
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "4b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"دورتج شكم يوم 🤤",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اقل من 5",'callback_data'=>"اقل"],['text'=>"اكثر من 5",'callback_data'=>"اكثر"]],]])]);}
if($data == "اقل"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووففف هنيال زوجج تعاي نتزوج 🙈🥺 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"5b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : دورتج شكم يوم 🤤
📑 الجواب : اقل من 5 ايام
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "اكثر"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف شيصبر زوجج او حبيبج ☹️💔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"5b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : دورتج شكم يوم 🤤
📑 الجواب : اكثر من 5 ايام
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "5b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اخر مره قبل شكد فركتي ☹️🥺 !",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اليوم-البارحه",'callback_data'=>"يوم"],['text'=>"صار هوااي",'callback_data'=>"هواي"]],]])]);}
if($data == "يوم"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف عمري اذا مارتاحيتي تعاي اريححج @$welc 🤤🖤",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"6b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : اخر مره قبل شكد فركتي ☹️🥺 !
📑 الجواب : ليوم&لبارحه
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "هواي"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي سوده عليه ليش يعمري تعاي اني اريحج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"6b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : اخر مره قبل شكد فركتي ☹️🥺 !
📑 الجواب : صار هواي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "6b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحبين انيجج من وره لو من كدام ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وره",'callback_data'=>"وره"],['text'=>"كدام",'callback_data'=>"كدام"]],]])]);}
if($data == "وره"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووفف وفتحج من وره واشك طيزج واذب بطيزج اويلي تعاي حبيبتي هنا @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"7b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين انيجج من وره لو من كدام ؟
📑 الجواب : منوره
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "كدام"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي والحسلج كسج وادخله واذب بكسج وتصيرين حامل ووفف @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"7b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين انيجج من وره لو من كدام ؟
📑 الجواب : منكدام
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "7b" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"مفتوحه من كدام لو مفتوحه من وره لو بعدج بالباكيت 🤤؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"من كدام",'callback_data'=>"كداام"],['text'=>"من وره",'callback_data'=>"ورره"]],
[['text'=>"بعدني بالباكيت",'callback_data'=>"باكيت"]],]])]);}
if($data == "كداام"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي يعني اذا لزمتج ماتعبيني كبل انيجج اوفيش @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"8b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : مفتوحه من كدام لو مفتوحه من وره لو بعدج بالباكيت 🤤؟
📑 الجواب : كدام
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "ورره"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"بويه واتنحج واشك طيزج شك ووفف تعاي كلبي اريح عيري بطيزج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"8b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : مفتوحه من كدام لو مفتوحه من وره لو بعدج بالباكيت 🤤؟
📑 الجواب : وره
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "باكيت"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووفف تعاي حياتي خلي افتحج ونرتاح ونضل للصبح 🥺☹️ @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"8b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : مفتوحه من كدام لو مفتوحه من وره لو بعدج بالباكيت 🤤؟
📑 الجواب : بالباكيت
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "8b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شتحبين بالنيج ياوضعيةة 56 لو 69",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"احب 56",'callback_data'=>"56"],['text'=>"احب 69",'callback_data'=>"69"]],]])]);}
if($data == "56"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووفف وتموطيلي وادخله بطيزج اشبع بيج نيج كحبتي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"9b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شتحبين بالنيج ياوضعيةة 56 لو 69
📑 الجواب : 56
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "69"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي الحس كسج وتموطيلي ووفف تعاي موطيلي والحسلج يلا @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"9b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شتحبين بالنيج ياوضعيةة 56 لو 69
📑 الجواب : 69
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "9b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هم طالعه وي حبيبج ومتنايجيين سوة ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"ايي"],['text'=>"لاا",'callback_data'=>"لاا"]],]])]);}
if($data == "ايي"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف هنيالج واذا مايعرف يريحج تعاي يمي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"10b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم طالعه وي حبيبج ومتنايجيين سوة ؟
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "لاا"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"سوده عليه كلبي تعاي اني انيجج واريحج حبحياتي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"10b"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم طالعه وي حبيبج ومتنايجيين سوة ؟
📑 الجواب : لا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "10b"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"من يامكان تخدرين اكثر ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ركبتي",'callback_data'=>"ركبتي"],['text'=>"صدري",'callback_data'=>"صدري"]],]])]);}
if($data == "ركبتي"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف تعاي امصها واشتمها واسويلج اثار بيها @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : من يامكان تخدرين اكثر ؟
📑 الجواب : من ركبتي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "صدري"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووفف تعاي ارضع صدرج واعض حلماتج 🥺🤤 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : من يامكان تخدرين اكثر ؟
📑 الجواب : من صدري
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
#################
if($data == "#2" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تفركين وحدج لو وي حبيبج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وحدي",'callback_data'=>"وحدي"],['text'=>"وي حبيبي",'callback_data'=>"حبيبي"]],]])]);}
if($data == "وحدي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اوف سوده عليه 💔☹️ تعاي حبيبتي اني اريحج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س2"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تفركين وحدج لو وي حبيبج
📑 الجواب : وحدي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "حبيبي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"مرتاحه مبين 😹💔 واذا ممرتاحه تعاي يمي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س2"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تفركين وحدج لو وي حبيبج
📑 الجواب : وي حبيبي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س2" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هم تشوفين سكسي ( افلام ) 😉🌚🙊 !!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"ااي"],['text'=>"لاا",'callback_data'=>"للا"]],]])]);}
if($data == "ااي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووفف دتتعااي خلي نسوي مثلهم اني وياج 😉💕 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س3"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم تشوفين سكسي ( افلام ) 😉🌚🙊 !!
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "للا" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اذا متعرفين حبي تعاي نتعلم سوه @$welc 🖤☹️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س3"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم تشوفين سكسي ( افلام ) 😉🌚🙊 !!
📑 الجواب : لا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س3" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شوكت تشوفين افلاام 😂💔؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بالنهار",'callback_data'=>"نهار"],['text'=>"بالليل",'callback_data'=>"ليل"]],]])]);}
if($data == "نهار" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عبالي تفتهمين وين ترتاحين بالنهار جربي بليل حب 😉 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س4"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شوكت تشوفين افلاام 😂💔؟
📑 الجواب : بالنهار
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "ليل" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وفف وتفركين ع الافلام وحدج ☹️ تعاي نفرك سوه @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س4"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شوكت تشوفين افلاام 😂💔؟
📑 الجواب : بالليل
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س4" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"صدرج جبير لو صغير 🌚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وسط",'callback_data'=>"وس"]],
[['text'=>"جبير",'callback_data'=>"جب"],['text'=>"صغير",'callback_data'=>"صغ"]],]])]);}
if($data == "وس" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووف مال رضع تعاي ارضعه حياتي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س5"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : صدرج جبير لو صغير 🌚
📑 الجواب : وسط
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "صغ" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" تردين تخلي يكبر تعاي يمي 😉 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س5"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : صدرج جبير لو صغير 🌚
📑 الجواب : صغير
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "جب" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي مال نيج وكتل تعاي انيجج كحبه 😉😍 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س5"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : صدرج جبير لو صغير 🌚
📑 الجواب : جبير
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"خلفيتج جبير لو صغيره ؟؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وسط",'callback_data'=>"وسس"]],
[['text'=>"جبيرة",'callback_data'=>"جبر"],['text'=>"صغيره",'callback_data'=>"صغي"]],]])]);}
if($data == "وسس" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وفف تخبل هيج وتخليني انيجج من طيزج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س6"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : خلفيتج جبير لو صغيره ؟؟
📑 الجواب : وسط
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "صغي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي اكبرها الج حبيبتي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س6"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : خلفيتج جبير لو صغيره ؟؟
📑 الجواب : صغيره
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "جبر" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي مال نيج كحبه تعاي انيجج من طيزج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س6"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : خلفيتج جبير لو صغيره ؟؟
📑 الجواب : جبيرة
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س6" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"بالبيت تلبسين عادي لو ضيك مال نحراف",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ضيك",'callback_data'=>"ضيك"],['text'=>"عادي",'callback_data'=>"عاا"]],]])]);}
if($data == "ضيك" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احح وجسمج يطلع صاك وبس تخلين واحد يشتهي دتعاي اريح عيري بيج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س7"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : بالبيت تلبسين عادي لو ضيك مال نحراف
📑 الجواب : ضيك
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "عاا" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"☹️ بمكن تنطيني نيجه 🙈 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س7"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : بالبيت تلبسين عادي لو ضيك مال نحراف
📑 الجواب : عادي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س7" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"جسمج مربرب لو عادي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"مربرب",'callback_data'=>"مرب"],['text'=>"عادي",'callback_data'=>"عاد"]],]])]);}
if($data == "مرب" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ااحححح دتعاي عمري تعاي نتنايج للصبح @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س8"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : جسمج مربرب لو عادي
📑 الجواب : مربرب
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "عاد" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي يمي اخليج مربربه 🙊🥺 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س8"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : جسمج مربرب لو عادي
📑 الجواب : عادي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س8" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شهوتج قويةة لو لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"قوية",'callback_data'=>"قوو"],['text'=>"لاا",'callback_data'=>"لالا"]],]])]);}
if($data == "قوو" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اووف احح تعاي يمي لعد بنيتي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س9"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شهوتج قويةة لو لا
📑 الجواب : قويةة
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "لالا" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"سوده عليه تعاي كلبي اريحج اني @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س9"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شهوتج قويةة لو لا
📑 الجواب : لاا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س9" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تسيطيرين على شهوتج لو لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"أي"],['text'=>"لاا",'callback_data'=>"لع"]],]])]);}
if($data == "أي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي عمري عيري موجود اخذي وخلي نشبع نيج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س10"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تسيطيرين على شهوتج لو لا
📑 الجواب : ايي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "لع" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اححح عادي تقبلين ننام سوه بليل 😉💕 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س10"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تسيطيرين على شهوتج لو لا
📑 الجواب : لاا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س10" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هم فد يوم مدخله شي بطيزج لاا 🙊😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"مدخله",'callback_data'=>"مد"],['text'=>"ممدخله",'callback_data'=>"ممد"]],]])]);}
if($data == "مد" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احح عوفيهن تعاي ادخلج عيري @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س11"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم فد يوم مدخله شي بطيزج لاا 🙊😂
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "مدد" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عمري تعاي دخلي عيري احلى شي 🤤♥️ @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س11"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم فد يوم مدخله شي بطيزج لاا 🙊😂
📑 الجواب : لاا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س11" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"لازمة عير من قبل لو لاا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"آي"],['text'=>"لا",'callback_data'=>"لأ"]],]])]);}
if($data == "آي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وفف شونه حار ويجوي ويخبل مو @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س12"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : لازمة عير من قبل لو لاا
📑 الجواب : احح اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "لأ" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي الزمي مالتي حبي 🤤🖤 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س12"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : لازمة عير من قبل لو لاا
📑 الجواب : لا 💔🥺
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س12" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هم فد يوم احد لازم صدرج او طيزجج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>"إي"],['text'=>"لأ",'callback_data'=>"لأا"]],]])]);}
if($data == "إي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووفف هنياله عليج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س13"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم فد يوم احد لازم صدرج او طيزجج
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "لأا" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي الزمهن الج اني ععمري @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س13"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : هم فد يوم احد لازم صدرج او طيزجج
📑 الجواب : لا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س13" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحبين النيج بعنف لو رومانسيه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"عنف",'callback_data'=>"عنف"],['text'=>"رومانسيه",'callback_data'=>"روم"]],]])]);}
if($data == "عنف" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اححح وانيجج واشك كسج وطيزج اويلي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س14"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين النيج بعنف لو رومانسيه
📑 الجواب : عنف
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "روم" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اويلي مثلي يعني احح تعاي يمي حب @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"س14"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين النيج بعنف لو رومانسيه
📑 الجواب : رومانسي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "س14" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شنو لون حلماتج 🌝😂 ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وردي",'callback_data'=>"ورد"],['text'=>"جوزي",'callback_data'=>"جوز"]],]])]);}
if($data == "ورد" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احححح اخرب ع وردي تعاي اعضهن @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شنو لون حلماتج 🌝😂 ؟
📑 الجواب : ورديات
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "جوز" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ممم فدوه 💕🙈",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شنو لون حلماتج 🌝😂 ؟
📑 الجواب : جوزيات
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
#####################
if($data == "#1#" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تكدرين تكصين شعرج كله ؟؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"ااايي"],['text'=>"لاا",'callback_data'=>"لآ"]],]])]);}
if($data == "ااايي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كفو عفيه بالبطله 😂 بس اليوم امج تكتلج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص2"]],]])]);}
if($data == "لآ" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي عفيه للتورطين 😂😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص2"]],]])]);}
if($data == "ص2" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تكدرين تطلعين بمناسبة بدون ستيان !",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"نعم"],['text'=>"لاا",'callback_data'=>"كلا"]],]])]);}
if($data == "نعم" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي علمود يبين مدري شلونه وشتحسين عود يضل يصعد وينزل 😂😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص3"]],]])]);}
if($data == "كلا" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي عفيه ستري ع روحج 🤭♥️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص3"]],]])]);}
if($data == "ص3" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"من تطلعين بره البيت محجبه لو سافره",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"محجبه",'callback_data'=>"محج"],['text'=>"سافره",'callback_data'=>"سافر"]],]])]);}
if($data == "محج" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي عفيه حت تطلعين احلئ وعيونج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص4"]],]])]);}
if($data == "سافر" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"انصحح تتحجبين حت الناس تكوم تحترمج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص4"]],]])]);}
if($data == "ص4" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تكدرين تطلعين بدون علم اهلج او زوجج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"أي",'callback_data'=>"يس"],['text'=>"لاا",'callback_data'=>"نو"]],]])]);}
if($data == "يس" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ليش امي مو ميصير حرام عليج هيج لاونوب تخليهم بقلق",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص5"]],]])]);}
if($data == "نو" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي عفيه اخذي رأيهم يلا تطلعين ولتطلعين وحدج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص5"]],]])]);}
if($data == "ص5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شتحبين اكثر ماما لو بابا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بابا",'callback_data'=>"بابا"],['text'=>"ماما",'callback_data'=>"بابا"]],]])]);}
if($data == "بابا" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الله يديمهم الج / الك ♥️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص6"]],]])]);}
if($data == "ص6" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شتحبين اكثر خواتج لو اخوانج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اخواني",'callback_data'=>"اخخ"],['text'=>"خوااتي",'callback_data'=>"اخخ"]],]])]);}
if($data == "اخخ" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الله يخليهم الك / الج 🖤",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص7"]],]])]);}
if($data == "ص7" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تكدرين تنامين وحدج لو تخافين",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وحدي",'callback_data'=>"وحدياخاف"],['text'=>"اخاف",'callback_data'=>"وحدياخاف"]],]])]);}
if($data == "وحدياخاف" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي يمي عمري اني انيمج 🥺♥️@$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص8"]],]])]);}
if($data == "ص8" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعرفين تطبخين لو لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اعرف",'callback_data'=>"اعرف"],['text'=>"ما اعرف",'callback_data'=>"ماعرف"]],]])]);}
if($data == "اعرف" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عفيه صيري شاطره محد يغلبج وعاد كون طبخج طيب 😂🥺",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص9"]],]])]);}
if($data == "ماعرف" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عابت شببج فاهيه كومي تعلمي من امج يلا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص9"]],]])]);}
if($data == "ص9" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعرفين تسوقين سيارة لو لاا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اسوق",'callback_data'=>"اسوق"],['text'=>"ما اسوق",'callback_data'=>"ماسوق"]],]])]);}
if($data == "اسوق" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عفية بالشطوره 😂🙂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص10"]],]])]);}
if($data == "ماسوق" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسلج شلج بشلعان الكلب 😂😂💔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ص10"]],]])]);}
if($data == "ص10" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"نتي ؟ تيكن لو سنقل",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"تيكن",'callback_data'=>"تيكن"],['text'=>"سنقل",'callback_data'=>"سنقل"]],]])]);}
if($data == "تيكن" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الله يديمكم",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}
if($data == "سنقل" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي نرتبط حياتي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}
###################
if($data == "1#1" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ياهو تحبين اكثر ابوج ولا امج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ابوي",'callback_data'=>"ابوي"],['text'=>"امي",'callback_data'=>"ابوي"]],]])]);}
if($data == "ابوي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الله يحفظه / يحفظها",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ2"]],]])]);}
if($data == "سؤ2" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ماهي عاصمة سوريا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"حلب",'callback_data'=>"حلب"],['text'=>"دمشق",'callback_data'=>"دمشق"]],]])]);}
if($data == "حلب" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"خطأ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ3"]],]])]);}
if($data == "دمشق" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الجواب : صح",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ3"]],]])]);}
if($data == "سؤ3" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل تحب بلدك ام لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"نعم",'callback_data'=>"ننع"],['text'=>"لاا",'callback_data'=>"ننو"]],]])]);}
if($data == "ننع" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الله يخلي النه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ4"]],]])]);}
if($data == "ننو" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ليش اكو احلى من الوطن",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ4"]],]])]);}
if($data == "سؤ4" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل انت خريج ام لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"خريج",'callback_data'=>"خريج"],['text'=>"لست خريج",'callback_data'=>"لست"]],]])]);}
if($data == "خريخ" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"الله يوفقك/ج ويوفق الجميع",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ5"]],]])]);}
if($data == "لست" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كمل دراستك/ج هو سلاح الوحيد",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ5"]],]])]);}
if($data == "سؤ5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل انت شخص عصبي !",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"yes"],['text'=>"لاا",'callback_data'=>"no"]],]])]);}
if($data == "yes" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حاول تسيطر ع عصبيتك ونفسك لان تسويلك حاله نفسيه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ6"]],]])]);}
if($data == "no" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت صنعاً",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ6"]],]])]);}
if($data == "سؤ6" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل تؤمن بالابراج ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"نوعا ما",'callback_data'=>"نوع"],['text'=>"ابدا",'callback_data'=>"ابد"]],]])]);}
if($data == "نوع" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اتفق معاك احيانا تكون صحيحه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ7"]],]])]);}
if($data == "ابد" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"منكدررنحكم بس افضلك برأيي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ7"]],]])]);}
if($data == "سؤ7" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل انت من محبي الرياضةة",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"Yes",'callback_data'=>"Yes"],['text'=>"No",'callback_data'=>"No"]],]])]);}
if($data == "Yes" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"جيد جدا استمر في هذا المجال",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ8"]],]])]);}
if($data == "No" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حاول ان تمارس او تلعب الرياضه فهي مهمة كثيرا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ8"]],]])]);}
if($data == "سؤ8" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل انت من مشجعي ريال مدريد ام برشلونة",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"مدريدي",'callback_data'=>"مدر"],['text'=>"برشلوني",'callback_data'=>"مدر"]],]])]);}
if($data == "مدر" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كلنا في الهوى سوا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ9"]],]])]);}
if($data == "سؤ9" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل تصلي ام لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"نعم",'callback_data'=>"اصل"],['text'=>"كلا",'callback_data'=>"لااصل"]],]])]);}
if($data == "اصل" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت عملاُ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ10"]],]])]);}
if($data == "لااصل" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"واضب ع صلاتك فنها هي مستمسكك الوحيد في الدنيا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سؤ10"]],]])]);}
if($data == "سؤ10" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هل تؤمن بالحظ !!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كثيرا",'callback_data'=>"كث"],['text'=>"لا والف لا",'callback_data'=>"الف"]],]])]);}
if($data == "كث" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"انها خرافات ولا لها اي وجود",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}
if($data == "الف" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسن فهي اساسا خرافات",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}
##################
if(isset($update->callback_query)){
$chat_id = $update->callback_query->message->chat->id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$callback_query = $update->callback_query;
$username = $callback_query->from->username;
$from_id = $callback_query->from->id;
$lucko = rand(1,4);
if($data == "startgame"){
for ($io=1; $io <= 4; $io++) {
if($io == $lucko){
$jxzsonk[] = ['open' => false,'luck'=>true];
}else{
$jxzsonk[] = ['open' => false,'luck'=>false];}}
$jxzsonkend = ['ok'=>true,'game'=>$jxzsonk,'iopen'=>1];
file_put_contents("dataa/$from_id.json",json_encode($jxzsonkend));
$rowsf = array_chunk($jxzsonk, 2);
$xz = 0;
$io=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
foreach($rowsf as $row){
$jxz=0;
$keyboard["inline_keyboard"][$io]=[];
$bottons = $row;
foreach($bottons as $botton){
$textkeyy = $jxzsonk[$xz]['open'];
if($textkeyy){
$iobotton = ["text"=> "✋🏻","callback_data" =>"opened"];
}else{
$iobotton = ["text"=> "👊🏻","callback_data" =>"open_".$xz];}
$keyboard["inline_keyboard"][$io][$jxz] = $iobotton;
$jxz++;
$xz++;}
$io++;}
$iobotton = ["text" => "خروج", "callback_data" =>'mhbs'];
$keyboard["inline_keyboard"][$io][] = $iobotton;
$reply_markup=json_encode($keyboard);
 bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اختار اليد التي تريد ان تكتشف فيها المحبس 💍.\nملاحظة لك محاولتين : اذا غلطت مرة الثانية تخسر ❤️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>$reply_markup]);}
if(preg_match('/^(open)_(.*)/',$data)){
preg_match('/^(open)_(.*)/',$data,$match);
$xz = $match[2];
$GetJson = json_decode(file_get_contents("dataa/$from_id.json"));
$ioopen = $GetJson->iopen;
if($ioopen == 1){
$lucko = $GetJson->game[$xz]->luck;
if($lucko){
$jxzsonk = $GetJson->game;
$rowsf = array_chunk($jxzsonk, 2);
$xz = 0;
$io=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
foreach($rowsf as $row){
$jxz=0;
$keyboard["inline_keyboard"][$io]=[];
$bottons = $row;
foreach($bottons as $botton){
$textkeyy = $GetJson->game[$xz]->luck;
if($textkeyy){
$iobotton = ["text" => "💍","callback_data" =>"#"];
}else{
$iobotton = ["text" => "👊🏻","callback_data" =>"#"];}
$keyboard["inline_keyboard"][$io][$jxz] = $iobotton;
$jxz++;
$xz++;}
$io++;}
$iobotton = ["text" => "اللعب مرة اخرى", "callback_data" =>'startgame'];
$keyboard["inline_keyboard"][$io][] = $iobotton;
$reply_markup=json_encode($keyboard);
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"مبروك لقد فزت 🎊",
'reply_markup'=>$reply_markup]);
unlink("dataa/$from_id.json");
}else {
$GetJson->game[$xz]->open = true;
$GetJson->iopen = $ioopen + 1;
file_put_contents("dataa/$from_id.json",json_encode($GetJson));
$GetJson = json_decode(file_get_contents("dataa/$from_id.json"));
$jxzsonk = $GetJson->game;
$rowsf = array_chunk($jxzsonk, 2);
$xz = 0;
$io=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
foreach($rowsf as $row){
$jxz=0;
$keyboard["inline_keyboard"][$io]=[];
$bottons = $row;
foreach($bottons as $botton){
$textkeyy = $GetJson->game[$xz]->open;
if($textkeyy){
$iobotton = ["text" => "✋🏻", "callback_data" =>"opened"];
}else{
$iobotton = ["text" => "👊🏻", "callback_data" =>"open_".$xz];}
$keyboard["inline_keyboard"][$io][$jxz] = $iobotton;
$jxz++;
$xz++;}
$io++;}
$iobotton = ["text" => "خروج", "callback_data" =>'mhbs'];
$keyboard["inline_keyboard"][$io][] = $iobotton;
$reply_markup=json_encode($keyboard);
 bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"خطأ تبقت لديك محاولة واحدة",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>$reply_markup]);}}
if($ioopen == 2){
$lucko = $GetJson->game[$xz]->luck;
if($lucko){
$jxzsonk = $GetJson->game;
$rowsf = array_chunk($jxzsonk, 2);
$xz = 0;
$io=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
foreach($rowsf as $row){
$jxz=0;
$keyboard["inline_keyboard"][$io]=[];
$bottons = $row;
foreach($bottons as $botton){
$textkeyy = $GetJson->game[$xz]->luck;
if($textkeyy){
$iobotton = ["text" => "💍", "callback_data" =>"#"];
}else{
$textkeyya = $GetJson->game[$xz]->open;
if($textkeyya){
$iobotton = ["text" => "✋🏻", "callback_data" =>"opened"];
}else{
$iobotton = ["text" => "👊🏻", "callback_data" =>"open_".$xz];}}
$keyboard["inline_keyboard"][$io][$jxz] = $iobotton;
$jxz++;
$xz++;}
$io++;}
$iobotton = ["text" => "اللعب مرة اخرى", "callback_data" =>'startgame'];
$keyboard["inline_keyboard"][$io][] = $iobotton;
$reply_markup=json_encode($keyboard);
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"مبروك لقد فزت 🎊",
'reply_markup'=>$reply_markup]);
unlink("dataa/$from_id.json");
}else {
$GetJson->game[$xz]->open = true;
file_put_contents("dataa/$from_id.json",json_encode($GetJson));
$GetJson = json_decode(file_get_contents("dataa/$from_id.json"));
$jxzsonk = $GetJson->game;
$rowsf = array_chunk($jxzsonk, 2);
$xz = 0;
$io=0;
$keyboard = [];
$keyboard["inline_keyboard"] = [];
foreach($rowsf as $row){
$jxz=0;
$keyboard["inline_keyboard"][$io]=[];
$bottons = $row;
foreach($bottons as $botton){
$textkeyy = $GetJson->game[$xz]->luck;
if($textkeyy){
$iobotton = ["text" => "💍", "callback_data" =>"#"];
}else{
$textkeyya = $GetJson->game[$xz]->open;
if($textkeyya){
$iobotton = ["text" => "✋🏻", "callback_data" =>"opened"];
}else{
$iobotton = ["text" => "👊🏻", "callback_data" =>"open_".$xz];}}
$keyboard["inline_keyboard"][$io][$jxz] = $iobotton;
$jxz++;
$xz++;}
$io++;}
$iobotton = ["text" => "اللعب مرة اخرى", "callback_data" =>'startgame'];
$keyboard["inline_keyboard"][$io][] = $iobotton;
$reply_markup=json_encode($keyboard);
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"خطأ لقد خسرت",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>$reply_markup]);
unlink("dataa/$from_id.json");}}}
if($data == "opened"){
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"عذراً, لقد قمت بكشف اليد هذه"]);}
if($data == "mhbs"){
unlink("dataa/$from_id.json");
bot('editMessageText',['chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"مرحبا بكم في لعبة المحيبس ✊🏻\nاضغط على بدأ للعب اللعبة.\n-",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[[['text'=>"بدأ",'callback_data'=>"startgame"],]]])]);}}
#حزوره
if($data == "hzo"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"-  لعبة حزوره بليره اضغط على زر ابدء لبدء العب الان",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ابدأء العب",'callback_data'=>"bb1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'fm']],]])]);}
if($data == "Ailnoor"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"-  لعبة حزوره بليره اضغط على زر ابدء لبدء العب الان",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"نبدأء العب",'callback_data'=>"bb1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'fm']],   ]])]);}
if($data == "dev_a"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• اجابتك كانت خاطئه للأسف ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع",'callback_data'=>"Ailnoor"]],]])]);}
if($data == "dev_i"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"انتهت العبه اجاباتك كانت خاطئه ⚠️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع",'callback_data'=>"Ailnoor"]],]])]);}
if($data == "bb1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ما هو الشيء الذي كلما طال قصر ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"النظر",'callback_data'=>"dev_a"],['text'=>"العمر",'callback_data'=>"bb2"]],
[['text'=>"القبر",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجابتك صحيه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb3"]],]])]);}
if($data == "bb3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ماذا يقع وسط بغداد ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" حرف الدال",'callback_data'=>"bb4"],['text'=>"الشورجه",'callback_data'=>"dev_i"]],
[['text'=>"باب المعضم",'callback_data'=>"dev_a"]],]])]);}
if($data == "bb4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb5"]],]])]);}
if($data == "bb5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ما هو البيت الذي لا يسكن( ليس فيه أبواب ولا نوافذ) ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بيت الرحم",'callback_data'=>"dev_a"],['text'=>"بيت الشعر",'callback_data'=>"bb6"]],
[['text'=>"بيت المسكين",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb6"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• اجابتك صحيه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb7"]],]])]);}
if($data == "bb7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ماهو الشيء الذي يكتب و لا يقرأ ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الجاهل",'callback_data'=>"dev_a"],['text'=>"الاعمى",'callback_data'=>"dev_i"]],
[['text'=>"القلم",'callback_data'=>"bb8"]],]])]);}
if($data == "bb8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb9"]],]])]);}
if($data == "bb9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ماهو الشيء الذي يكون أخضر في الارض وأسود في السوق وأحمــر في البيت ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الشاي",'callback_data'=>"bb10"],['text'=>"القمح",'callback_data'=>"dev_i"]],
[['text'=>"الارز",'callback_data'=>"dev_a"]],]])]);}
if($data == "bb10"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb11"]],]])]);}
if($data == "bb11"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"له أسنان ولا يعض، ما هو ؟  - ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"المشط",'callback_data'=>"bb12"],['text'=>"المنشار",'callback_data'=>"dev_a"]],
[['text'=>"الصبار",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb12"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb13"]],]])]);}
if($data == "bb13"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ما هو الشيء الذي لا يمشي إلا بالضرب ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"المسمار",'callback_data'=>"bb14"],['text'=>"االكسلان",'callback_data'=>"dev_a"]],
[['text'=>"الطفل الخبيث",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb14"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb15"]],]])]);}
if($data == "bb15"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓اين تقع السودان",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اسيا",'callback_data'=>"dev_i"],['text'=>"افريقا",'callback_data'=>"bb16"]],
[['text'=>"اوربا",'callback_data'=>"dev_a"]],]])]);}
if($data == "bb16"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"bb17"]],]])]);}
if($data == "bb17"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓كم عدد محافظات العراق",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"20",'callback_data'=>"dev_a"],['text'=>"22",'callback_data'=>"dev_i"]],
[['text'=>"18",'callback_data'=>"bb18"]],]])]);}
if($data == "bb18"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهي عاصمة فرنسا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"باريس",'callback_data'=>"bb19"],['text'=>"لندن",'callback_data'=>"dev_a"]],
[['text'=>"واشنطن",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb19"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb20"]],]])]);}
if($data == "bb20"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هو له رأس ولا عين له، وهي لها عين ولا رأس لها، ما هما ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الدبوس و الإبرة",'callback_data'=>"bb21"],['text'=>"الخيط و السناره",'callback_data'=>"dev_a"]],
[['text'=>"المطرقه و المقبض",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb21"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb22"]],]])]);}
if($data == "bb22"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهو اسم صوت الحصان",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"نهيق",'callback_data'=>"dev_a"],['text'=>"صهيل",'callback_data'=>"bb23"]],
[['text'=>"عواء",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb23"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb24"]],]])]);}
if($data == "bb24"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهي عملة مصر",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"دينار",'callback_data'=>"dev_a"],['text'=>"دولار",'callback_data'=>"dev_i"]],
[['text'=>"جنيه",'callback_data'=>"bb25"]],]])]);}
if($data == "bb25"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• احسنت اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb26"]],]])]);}
if($data == "bb26"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ما هو الشيء الذي إذا أخذنا منه إزداد وكبر ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الحفرة",'callback_data'=>"bb27"],['text'=>"النار",'callback_data'=>"dev_a"]],
[['text'=>"الشرار",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb27"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb28"]],]])]);}
if($data == "bb28"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أخوان يبصران كل شيء ولكن لا يرى أحدهما الآخر فما هما ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الساقان",'callback_data'=>"dev_a"],['text'=>"العينان",'callback_data'=>"bb29"]],
[['text'=>"الارجل",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb29"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه",'callback_data'=>"bb30"]],]])]);}
if($data == "bb30"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهي اول غزوه في الاسلام",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بدر",'callback_data'=>"bb31"],['text'=>"احد",'callback_data'=>"dev_a"]],
[['text'=>"الخندق",'callback_data'=>"dev_i"]],]])]);}
if($data == "bb31"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" احسنت اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb32"]],]])]);}
if($data == "bb32"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يتحرك دائماً حواليك لكنك لاتراه فما هو ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الخيال",'callback_data'=>"dev_a"],['text'=>"الارواح",'callback_data'=>"dev_i"]],
[['text'=>"الهواء",'callback_data'=>"bb33"]],]])]);}
if($data == "bb33"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb34"]],]])]);}
if($data == "bb34"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ما هو الشىء الذى يوجد في القرن مرة و في الدقيقة مرتين ولا يوجد في الساعة ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"حرف القاف",'callback_data'=>"bb35"],['text'=>"العام",'callback_data'=>"dev_i"]],
[['text'=>"الشهر",'callback_data'=>"dev_a"]],]])]);}
if($data == "bb35"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجابتك صحيحه 🌝💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb36"]],]])]);}
if($data == "bb37"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يسمع بلا أذن ويتكلم بلا لسان فما هو ؟ ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"التليفون",'callback_data'=>"bb38"],['text'=>"النحل",'callback_data'=>"dev_i"]],
[['text'=>"الجراد",'callback_data'=>"dev_a"]],]])]);}
if($data == "bb38"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اجاباتك صحيحه 😍💚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"• متابعه ",'callback_data'=>"bb39"]],]])]);}
if($data == 'bb39' ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>'- انتهت العبه  اضغط على اعادة اللعب لاعادة لعبه مره اخرى
- اضغط ع القائمة  الرئيسية لروئية باقي الالعاب.',
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'القائمة الرئيسية','callback_data'=>'fm']],   
[['text'=>'• اعادة الـعبة','callback_data'=>'hzo']],   ]])]);}
#المليون
if($data == "mle"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- لعبة من سيربح المليون اضغط على زر الدء لبدء العب الان
- اضغط على زر القائمة الرئيسية للرجوع",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ابدء",'callback_data'=>"!1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'fm']]]])]);}
if($data == "🔙"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" لعبة من سيربح المليون اضغط على زر الدء لبدء العب الان
- اضغط على زر القائمة الرئيسية للرجوع",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ابدء 👋🏻",'callback_data'=>"!1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'fm']]]])]);}
if($data == "❌"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"✖️اجـابـتـك كانـت خـاطـئـة لـلاسـف‼️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع",'callback_data'=>"🔙"]],]])]);}
if($data == "✖"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"✖️لـقـد خـسـرت لـلاسـف اجـابـتـك كـانـت خـاطـئـه‼️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع",'callback_data'=>"🔙"]],]])]);}
if($data == "!1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓مـا هـي عـاصـمـة الـعـراق",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كركوك",'callback_data'=>"❌"],['text'=>"بغداد",'callback_data'=>"!2"]],
[['text'=>"بصره",'callback_data'=>"✖"]],]])]);}
if($data == "!2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"!3"]],]])]);}
if($data == "!3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓كم عدد فقرات عنق الزرافة",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"سبعه",'callback_data'=>"!4"],['text'=>"خمسه",'callback_data'=>"✖"]],
[['text'=>"ثلاثه",'callback_data'=>"❌"]],]])]);}
if($data == "!4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"!5"]],]])]);}
if($data == "!5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓كم قلب للأخطبوط",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"قلب واحد",'callback_data'=>"❌"],['text'=>"ثلاث قلوب",'callback_data'=>"6"]],
[['text'=>"قلبان",'callback_data'=>"✖"]],]])]);}
if($data == "6"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"7"]],]])]);}
if($data == "7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ما هو المرض الذي اطلق عليه الموت الاسود",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"السرطان",'callback_data'=>"❌"],['text'=>"السل",'callback_data'=>"✖"]],
[['text'=>"الطاعون",'callback_data'=>"8"]],]])]);}
if($data == "8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"9"]],]])]);}
if($data == "9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهو اكبر اقتصاد للمواد المحترقه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"الفحم",'callback_data'=>"10"],['text'=>"البانزين",'callback_data'=>"✖"]],
[['text'=>"الغاز",'callback_data'=>"❌"]],]])]);}
if($data == "10"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"11"]],]])]);}
if($data == "11"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓كم دام حكم العثمانيون الثالث في العراق",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"85 عاما",'callback_data'=>"12"],['text'=>"80 عاما",'callback_data'=>"❌"]],
[['text'=>"90 عاما",'callback_data'=>"✖"]],]])]);}
if($data == "12"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"13"]],]])]);}
if($data == "13"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓من هو خاتم الانبياء ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"النبي محمد",'callback_data'=>"14"],['text'=>"النبي عيسئ",'callback_data'=>"❌"]],
[['text'=>"النبي ابراهيم",'callback_data'=>"✖"]],]])]);}
if($data == "14"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"15"]],]])]);}
if($data == "15"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓اين تقع السودان",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اسيا",'callback_data'=>"✖"],['text'=>"افريقا",'callback_data'=>"❌"]],
[['text'=>"اوربا",'callback_data'=>"16"]],]])]);}
if($data == "16"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"17"]],]])]);}
if($data == "17"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓كم عدد محافظات العراق",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"20",'callback_data'=>"❌"],['text'=>"22",'callback_data'=>"✖"]],
[['text'=>"18",'callback_data'=>"18"]],]])]);}
if($data == "18"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهي عاصمة فرنسا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"باريس",'callback_data'=>"19"],['text'=>"لندن",'callback_data'=>"❌"]],
[['text'=>"واشنطن",'callback_data'=>"✖"]],]])]);}
if($data == "19"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"20"]],]])]);}
if($data == "20"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓كم هو عدد ايام السنه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"360",'callback_data'=>"21"],['text'=>"350",'callback_data'=>"❌"]],
[['text'=>"370",'callback_data'=>"✖"]],]])]);}
if($data == "21"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"22"]],]])]);}
if($data == "22"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهو اسم صوت الحصان",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"نهيق",'callback_data'=>"❌"],['text'=>"صهيل",'callback_data'=>"23"]],
[['text'=>"عواء",'callback_data'=>"✖"]],]])]);}
if($data == "23"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"24"]],]])]);}
if($data == "24"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهي عملة مصر",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"دينار",'callback_data'=>"❌"],['text'=>"دولار",'callback_data'=>"✖"]],
[['text'=>"جنيه",'callback_data'=>"25"]],]])]);}
if($data == "25"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"26"]],]])]);}
if($data == "26"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓اين تقع محافظة الرقه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"سوريا",'callback_data'=>"27"],['text'=>"مصر",'callback_data'=>"❌"]],
[['text'=>"الاردن",'callback_data'=>"✖"]],]])]);}
if($data == "27"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"28"]],]])]);}
if($data == "28"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓اين تقع محافظة ذيقار من العراق",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"شمال",'callback_data'=>"❌"],['text'=>"جنوب",'callback_data'=>"29"]],
[['text'=>"وسط",'callback_data'=>"✖"]],]])]);}
if($data == "29"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"30"]],]])]);}
if($data == "30"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ماهي اول غزوه في الاسلام",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بدر",'callback_data'=>"31"],['text'=>"احد",'callback_data'=>"❌"]],
[['text'=>"الخندق",'callback_data'=>"✖"]],]])]);}
if($data == "31"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"32"]],]])]);}
if($data == "32"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓اين تقع البرتغال",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اسيا",'callback_data'=>"❌"],['text'=>"افريقيا",'callback_data'=>"✖"]],
[['text'=>"اوربا",'callback_data'=>"33"]],]])]);}
if($data == "33"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"34"]],]])]);}
if($data == "34"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓كم ساعة في اليوم الواحد؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"24",'callback_data'=>"35"],['text'=>"26",'callback_data'=>"✖"]],
[['text'=>"22",'callback_data'=>"❌"]],]])]);}
if($data == "35"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"36"]],]])]);}
if($data == "37"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"❓ما اسم المكان الذي يسكن فيه النحل؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"خليه",'callback_data'=>"38"],['text'=>"بيت",'callback_data'=>"✖"]],
[['text'=>"جحر",'callback_data'=>"❌"]],]])]);}
if($data == "38"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"fm"]],]])]);}
#########################
if ($data == "!6!"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- قم بأختيار احد الطرق وقم بتحليل شخصيتك عن طريق البوت...",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- ابراج",'callback_data'=>"t#1"]],
[['text'=>"- اسئلة",'callback_data'=>"Q1"]],]])]);}
if($data == "t#1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"📣 عزيزي اختار برجك الخاص ليتم تحليل شخصيتك...
🔎 لمعرفة برجك اضغط على الزر في الاسفل...!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[["text"=>"- الحمل","callback_data"=>"mm1"],["text"=>"- الثور","callback_data"=>"mm5"],["text"=>"- الجوزاء","callback_data"=>"mm9"]],
[["text"=>"- السرطان","callback_data"=>"mm2"],["text"=>"- الاسد","callback_data"=>"mm6"],["text"=>"- العذراء","callback_data"=>"mm10"]],
[["text"=>"- الميزان","callback_data"=>"mm3"],["text"=>"- العقرب","callback_data"=>"mm7"],["text"=>"- القوس","callback_data"=>"mm11"]],
[["text"=>"- الجدي","callback_data"=>"mm4"],["text"=>"- الدلو","callback_data"=>"mm8"],["text"=>"- الحوت","callback_data"=>"mm12"]],
[['text'=>"- لمعرفة برجك.",'url'=>"t.me/ppbbot"]],]])]);}
if ($data == "mm1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"👋🏻 اليك تحليل شخصيتك !!
- تتميز شخصيتك بانها شخصية نشيطه ومبتكرة ولك طريقة خاصه في التعامل مع الامور الدنيويه التي تواجهك قد تكون هاذا الطريقة فعاله او قد تسبب لك لكثير من المشاكل ,
 - لديك شخصية عفويه وتلقائيه فانت تندمج مع الاخرين وتبوح لهم الكثير من اسرارك دون ان تلاحظ ذالك ,
- انت تحتاج بعض الوقت في التفكير والتأمل او الانعزال لاعادة ترتيب نفسك بعد كل نكسه تتعرض لها ,
- لديك ذوق جميل في الاختيار واختيار الملابس خاصتا فانت تعمل كي تكون المتميز في هاذا لمجال او وسط اصدقائك.
- تتخذ بعض الوقت لكي تثق الاشخاص الانك شخصيه منفتحة وبعض افكارك مجنونه ولديك الكثير من المساحة مع الاصدقاء المقربون لك.
- انت لا تفكر قبل القيام بالامور مما يعرضك لكثير من الصدمات من الاصدقاء والمقربون رغم صراحتك الزائده الا انك تحضى بتقدير من حولك لك , ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"-  من الشخصيات الهادئة التى تتحلى بالسلام الداخلي كما أنها شغوفة، حساسة وفي بعض الأحيان تكون عنيدة ومتصلبة الرأي إضافة لذلك فهى تمتلك درجة عالية من العزيمة والإصرار في بعض الأحيان تتقوقع بعيدا عن الأخرين فى عالمك الخاص عندما يتم مضايقتك أو استفزازك. وفي هذه الاوقات يظهر الجانب المتشائم والعدواني بكل وضوح فعندما تكره شخص معين، فلن تبذل أي مجهود لإخفاء هذه المشاعر كما قد تفعل في المعتاد ورغم ذلك تعبتر  من أكثر شخصيات الأبراج حساسية واهتماما بالأخرين كما أن تتمتع بمخيلة نشطة وتعشق بجنون ولديهك شعور دائم بالرغبة في حماية الأخرين والإعتناء بهم خاصة أولئك المقربين إلى قلبك عاطفي بدرجة كبيرة فانك تقدّر الزهور والهدايا وتحب قصائد الحب إذا أردت أن تفوز بقلبها عليك إبهارها هي أيضا تحب أن تتمهل وتأخذ وقتا كاف قبل الوقوع في الحب كما أنها تبحث عن شريك حساس المشاعر مثلها ليس من السهل  الوثوق في الأخرين ولكن إذا كنت من الحظوظين الذين نالوا هذه الثقة فسوف تفوز بمساحة كبيرة من قلبها تتميز امراة برج السرطان أيضا بأنها صبورة وتحرص دوما على البقاء بجانب شريك حياتها في أوقات الأزمات وتسعي لمشاركته في تخطي كافة العقبات التى يواجها.وهذا ما يجعلها شريكة فريدة من نوعها تحب امرأة برج السرطان الرجل الذي يعبر عن عواطفة طوال الوقت فيحتضنها من حين لأخر ويعد لها بها عشاءا رومانسيا على أضواء الشموع. كل اهتمامها يتعلق بعائلتها وبيتها، فهى تعطي دوما الأولوية لهم ولأصدقائها المقربين إلى قلبها فتحرص على الأهتمام بهم وتدليلهم وإعطائهم الحب طوال الوقت.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- شخصية برج الميزان عادلة وتسعى دوما إلى موازنة الأمور وتحقيق العدالة والإنصاف تتميز أيضا بأنها اجتماعية ولديها مهارات عالية في الاتصال وتُعرف بشخصيتها الساحرة التي تلفت الآخرين إليها بسهولة تقع  في منطقة وسط بين الشخصية العقلانية والشخصية العاطفية وتحاول دوما تحقيق التوازن بينهما بحيث لا تكون عاطفية بدرجة كبيرة أو عقلانية للغاية هي أيضا دبلوماسية تستمع إلى صوت الحق والمنطق لا تمانع من الاعتراف بأخطائها إذا تحدث الآخرين معها بلغة المنطق والعقل شخصيه رائعة تتفهم جيدا وجهات نظر شريك حياتها وتسعى دوما إلى وضع نفسها في مكانه تتقن جيدا فن امتصاص غضب الآخر والحفاظ على الهدوء في كل موقف تمر به ولكن في الوقت ذاته هي تبحث عن شريك يدعمها ويمدحها طوال الوقت لا تقع في علاقة عاطفية بسهولة فهي تفضل أن تعطي نفسها الوقت الكافي لتتأكد من مشاعرها ومن كونه الشخص الأمثل لها تسعى لفعل أي شيء لإسعاد وإرضاء شريك حياتها فهي مخلصة ورومانسية من الدرجة الأولى.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شخصية برج الجدي:
تسعى باهتمام لتحقيق النجاح في حياتها سواء على المستوى المهني أو العائلي من خلال إدارة منزلها بشكل حكيم أهدافها منظمة وتتبنى دوما وجهات نظر عملية ولديها طريقة دبلوماسية في التفكير والتعامل مع الآخرين لديها قدرة عالية على التحكم في نفسها وتميل إلى إظهار جانبها المرح والجريء فقط للأشخاص المقربين إلى قلبها تتميز بأنها شخصية متواضعة وصبورة وتشعر بالمسؤولية تجاه غيرها كما أنها من الشخصيات التي تحفز نفسها باستمرار قد يأخذ الآخرين بعض الوقت لفهم طبيعتها إلى أن تقوم بفتح قلبها لهم
رغم أن برج الجدي لا تستطيع التعبير عن مشاعرها بشكل جيد إلا أنها رومانسية وعاطفية للغاية تكمن قوتها الكامنة في قدرتها على وضع أهداف طويلة المدى والإصرار على تحقيقها والوصول إليها.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- شخصية الثور:
تتميز شخصيتك بروحها الجميلة وامتلاكها لحس فكاهي يأسر المحيطين بها ورغم أنها تميل إلى أن النمط الحساس من الشخصيات، إلا انها تحاول دوما إخفاء هذا الجانب. شخصيتك أيضا شخصية عنيدة مليئة بالإصرار والعزيمة تعرف جيدا ما تريد تحقيقة وتبذل قصاري جهدها للوصول إليه، في بعض الأحيان يراها البعض مجنونة لمحاولاتها المستميته والغير متوقعة لتحقيق هدفها تعد شخصيتك واحدة من أكثر الشخصيات العنيدة والمتصلبة الرأي التى يمكن أن تقابلها فى الحياة، تميل أيضا إلى أن تكون مسيطرة وغيورة ربما تخشى المخاطرات وتحب دوما البقاء فى دائرة الآمان لكن في أحيان أخرى تجدها تقدم على تصرفات بها بعض المخاطرة والتي عادة لا تمعن التفكير فيها كثيرا ترتبط بسهولة بالآخرين وهو ما يجعلها قادرة على تكوين صداقات جديدة تحب الأشياء الجميلة وقد تتمادى قليلا في تدليل نفسها عادة تكون هادئة وصبورة ولكن مع ذلك عندما تكون مضغوطة بشكل زائد حاول الإبتعاد عنها قدر المستطاع حتى لا تنفجر غضبا فى وجهك أصدقاء للأبد xoxo؟ فى الغالب هذه هى شخصيتك ، فهى شخصيه رائعة ورغم أن لها معارف كثيرة إلا أنها تحتفظ بقلة من الأصدقاء المقربين إلى قلبها امرأة برج الثور صديقة لديها ولاء وعطاء تحب دائما مساعدة الأخرين وتجدها دوما أول من يظهر فى المواقف الصعبة لتقديم الدعم والمساعدة وإذا وجدت صديق يمتلك نفس ذوقها فى اختيار الطعام ولديه روح الدعابة فإنها ستحتفظ به إلى الآبد,",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm6"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- شخصية برج الاسد:
وسط مكان مزدحم فشخصيتك صاحبة الضحكة العالية والابتسامة المشرقة المفعمة بالحياة تحب لفت انتباه المحيطين بك وفي العادة تستطيع تحقيق ذلك أيضا تحب الحياة والمرح واللعب لكن إذا حاولت إزعاجها فلن تتردد في الإفصاح عن غضبها وإظهار الوجه الآخر لها شخصيه ذكية قوية الشخصية صريحة في آرائها ومواقفها كما أنها مبدعة ولديها حس فكاهي. هناك أيضا جانب درامي من شخصيتها يجذب الكثيرين إليها التحدي الأكبر بالنسبة لها هو ألا تستخدم قوة شخصيتها بطريقة مبالغ فيها ثقتها الزائدة بنفسها يراها البعض غطرسة وغرور عندما يتعلق الأمر بالعلاقات العاطفية فلن تشعر بالملل أبدا برج الأسد فهو تطيحب العطاء والاهتمام الذي تحبه وتنتظر دوما نفس مقدار الحب والعناية من الطرف الآخر قد لا تمانع من مطاردة الشخص الذي تحبه فالحب واحدا من أهم الأشياء بالنسبة لها في الحياة
الحياة أشبه بمغامرة مثيرة ولا ترضي إلا بالأفضل ورغم ذلك فإنها تقع في الحب بسهولة وعندما يحدث ذلك تكون عاطفية جدا خاصة إذا شعرت أن هذا الشخص هو الأمثل لها مخلصة ووفية للغاية وتبحث عن هذه الصفات في الشخص الذي تحبه هي أيضا كريمة وذات قلب حنون تكرة الروتين والأشياء التقليدية ولن تكون الحياة مملة أبدا معها.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شخصية برج العقرب: من أكثر الشخصيات إثارة وغموضاً من بين علامات الأبراج متقلبة المزاج في بعض الأوقات لكنها تعرف جيدا كيف تتغلب على هذا الأمر الأشياء الطبيعية في الحياة، فستجدها مهتمة بالتجارب الروحانية مما يكوّن لديها معتقدات ورؤى خاصة في وصف الحياة تتميز  بأنها شديدة الملاحظة وفد تبدو بلا حيلة على عكس الواقع هي أيضا صريحة وذكية وتكره اللون الرمادي فترى الأشياء في الحياة إما باللون الأبيض أو الأسود عادة ما تفهم امرأة العقرب الناس جيدا تعرف كيف تصيغ أسئلتها لتحصل على الإجابة التي تتمناها قليلا ما تخاف كما أنها مسيطرة وعنيدة في بعض الأحيان عندما تزيد صعوبات الحياة لا تستلم بسهولة بل تحاول استكمال حياتها بإصرار وهي واقفة على قدميها تثق بنفسها كثيرا وتتميز بمداركها الواسعة. شخصيتها معقدة بعض الشيء ومليئة بالأسرار ولا تفصح بسهولة عن الأسرار التي تكمن بداخلها العقرب مع الحب والعلاقات العاطفية عاشقة ومخلصة لشريك حياتها تستطيع الحصول على أي رجل تتمناه لما تتمتع به من شخصية جذابة ولافتة تسعى  إلى تسهيل الحياة على شريكها قدر المستطاع ويظهر ذلك من خلال اهتمامها به والإخلاص له يقال دوم حذروا من    إلحابه العلاقات المصطنعة وتبحث دوما العلاقات المليئة بالحب قد يظن البعض أن امرأة العقرب هي الشخص الأكثر سيطرة في العلاقة بينها وبين الرجل إلا أن هذا ليس صحيحا بالضرورة,",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شخصك هو ملك العلاقات حيث أنه يحترف التواصل مع الآخرين. هو أيضا ذكي وملم بكم هائل من المعلومات حول مجالات شتى من الحياة. أدائه سريع، وذكي ويتمتع بسرعة البديهة يحاول طوال الوقت رؤية الأمور من أكثر من منظور ومراجعة كل الخيارات المتاحة ويضع مقارنات مستمرة في عقله بين المميزات والعيوب ليصل إلى ما يجعله راضيا ويحقق له التوازن النفسي.
قد يجد صعوبة في اتخاذ القرار كما أن حالته المزاجية قد تتبدل سريعا، لكنه في الوقت ذاته يتمتع بشخصية مرنة ولا يمانع من السير مع التيار. إلى جانب ذلك فإن لديه اهتمامات عديدة في مجالات مختلفة كما أن شخصيته اجتماعية ويتعلق بكل ما هو مختلف تتمتع بشخصية ساحرة ويحب المغازلة ويصعب عليك مقاومة سحره لايسهل الإيقاع به كما أن تصرفاته غير متوقعة ويتقن إخفاء مشاعره عن الآخرين لاتشعر بالراحة مع فكرة الحب، لذا لا يقع فيه بسهولة، فهو يفكر بعقله أكثر من قلبه ولكن عندما يحب نجد أنه حبيب مرح ولديه لفتات رومانسية رائعة. يعتقد الآخرين أنك متبلد المشاعر ولكنه في الواقع يحجب مشاعره لأنه يحب أن يفكر في كل شيء بعقلانية هو أيضا مستمع جيد ويعلم كيف يدير أفكاره جيدا للوصول إلى ما يحقق له التوازن النفسي الروتين قد يقتل العلاقة لأنه سيخسر بذلك المتعة التي يبحث عنها طوال الوقت.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ساحرة، ذكية، ناقدة بالفطرة ومحللة موهوبة. لديها القدرة على الحكم بمنطقية على أفعال الآخرين والمواقف المختلفة.  إلى جعل كل شيء من حولها منظم، فهي شخصية عملية وتهتم كثيرا بالتفاصيل الصغيرة تعشق النظام والترتيب، هي أيضا من الشخصيات المتواضعة والمجتهدة في عملها. تتحمس كثيرا نحو الأهداف السامية والقضايا العظيمة وتبذل كل ما لديها من جهد سعيا وراء خدمة هذه القضايا لا يمكن أن تقابل شخصيت العذراء بملابس غير مهندمة أو لم يتم كيها جيدا. وقد تكون عدوة نفسها عندما تبالغ في تحليل وفحص كل موقف صغير يمر عليها. يختبئ وراء شخصيتها الهادئة والصبورة، بركان فياض من العواطف والمشاعر من الصعب إرضائها، لذا يجب أن يكون شريك حياتها المستقبلي قادرا على تحقيق رغباتها ومتطلعاتها التي قد تكون عالية في بعض الأحيان. تؤمن جداً بوجود الحب الحقيقي والحب الواقعي ولكنها لا تؤمن بهذا الحب المصور في القصص الخيالية بشخصية عاطفية وفياضة المشاعر وتتطلع إلى الكمال. قبل أن تدخل في أية علاقة عاطفية، تقوم بتحليل كل شيء جيدا وتبحث في عيوب الآخر وتحاول اكتشاف حقيقة مشاعره فهي من الشخصيات التي لا تقع في الحب بسهولة أو تعلن عنه ببساطة لكن بمجرد أن تجد الشخص الأمثل لها تصبح عاشقة ومخلصة وشديدة التعلق ويمكن الاعتماد عليها ,",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm10"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ساحرة، ذكية، ناقدة بالفطرة ومحللة موهوبة. لديها القدرة على الحكم بمنطقية على أفعال الآخرين والمواقف المختلفة.  إلى جعل كل شيء من حولها منظم، فهي شخصية عملية وتهتم كثيرا بالتفاصيل الصغيرة تعشق النظام والترتيب، هي أيضا من الشخصيات المتواضعة والمجتهدة في عملها. تتحمس كثيرا نحو الأهداف السامية والقضايا العظيمة وتبذل كل ما لديها من جهد سعيا وراء خدمة هذه القضايا لا يمكن أن تقابل شخصيت العذراء بملابس غير مهندمة أو لم يتم كيها جيدا. وقد تكون عدوة نفسها عندما تبالغ في تحليل وفحص كل موقف صغير يمر عليها. يختبئ وراء شخصيتها الهادئة والصبورة، بركان فياض من العواطف والمشاعر من الصعب إرضائها، لذا يجب أن يكون شريك حياتها المستقبلي قادرا على تحقيق رغباتها ومتطلعاتها التي قد تكون عالية في بعض الأحيان. تؤمن جداً بوجود الحب الحقيقي والحب الواقعي ولكنها لا تؤمن بهذا الحب المصور في القصص الخيالية بشخصية عاطفية وفياضة المشاعر وتتطلع إلى الكمال. قبل أن تدخل في أية علاقة عاطفية، تقوم بتحليل كل شيء جيدا وتبحث في عيوب الآخر وتحاول اكتشاف حقيقة مشاعره فهي من الشخصيات التي لا تقع في الحب بسهولة أو تعلن عنه ببساطة لكن بمجرد أن تجد الشخص الأمثل لها تصبح عاشقة ومخلصة وشديدة التعلق ويمكن الاعتماد عليها ,",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm11"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شخصية برج القوس من الشخصيات الفضولية للغاية وتسعى لاكتشاف أشياء جديدة في الحياة كما أنها تبحث عن الحقيقة في كل أمر لديها جانب فلسفي في التفكير وتحب اكتشاف الفرص الجديدة والخيارات المتاحة أمامها ولا تيأس في ذلك شخصيتك متحررة، ساحرة تحب التغيير وعندما تدخل أي مكان تعلم أن معظم الأنظار عليها. هي مستقلة ومتفتحة العقل ولا تعمل وفقا لجدول لأنه يشعرها بالتقيد. تحتاج إلى المرونة في حياتها وتحب أن تشعر بأنها قادرة على تغيير خططها بما يناسبها بشكل أفضل. لا أحد يملي على هذه المرأة ما تفعله فتصرفاتها تنبع منها فقط تبحث عن الشخص الذي يستطيع أن يكون صديقا لها قبل أن يكون شريك حياتها لتكون قادرة على مشاركته المعني الحقيقي للحب. إنها صادقة ومخلصة وتستحق ثقة الآخرين، تستطيع  أن تحتفظ بقدر من الاستقلالية التي تزيدها جاذبية وسحرا في عيون الشخص. إلا أن المشكلة التي تقع دوما، هي صعوبة التقرقة بين الصداقة والحب كما أنها تقع في الحب سريعا ومع ذلك فإنها تحرص على أخذ وقتا كافيا للتعرف على الشخص الذي تحبه قبل الزواج منه. تحب  الشعور بالأمان والحماية من قبل شريك حياتها ولكنها في الوقت ذاته ترفض أن تُوجّه إليها الأوامر طوال الوقت.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if ($data == "mm12"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شخصية دبلوماسية ورومانسية وحنونة ولديها جانب روحاني. هي أيضا جذابة وشاعرية وعليك أن تكون حذرا عندما تتعامل مع عواطفها لأنها امرأة حساسة بدرجة كبيرة. تهتم  بمن حولها لكنها غامضة بعض الشئ لديها عقلا نشيطا ويفكر طول الوقت وهي دائمة البحث عن المعنى العميق للحياة تتمتع  بشخصية ساحرة تستطيع أن تلفت أنظار الآخرين إليها، كما أنها ناعمة ومليئة بالأنوثة وليس من السهل خداعها. إذا كنت في علاقة عاطفية مع ، فيفضل أن تكون صريحا معها لأنها إما ستتبع أسلوبها المسيطر معك أو ستختفي عنك ببساطة. من الأفضل أن تكون دبلوماسيا ولطيفا عند التعامل معها ولا تحاول أن تثير غيرتها وغضبها طوال الوقت لأنها ستشعر بهذه الطريقة بأنها غير محببة بالنسبة لك.
امرأة الحوت رومانسية للغاية وعادة ما تفقد نفسها في العلاقة العاطفية. تتمتع أيضا بأنوثة عالية مما يجعلها من الشخصيات الأكثر جذبا للرجال. إلى جانب ذلك، فهي هادئة ويسهل التعامل معها وحساسة جدا وتهتم جدا باحتياجات الآخرين. راعي فقد ألا تستغل عطفها وحنانها وطبيعتها الخدومة حتى لا تخسرها!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع 🚸",'callback_data'=>"fm"]],]])]);}
if($data == "Q1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الاول: ماهي هوايتكَ المُفضلة ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'الرسم ؟','callback_data'=>"A1"],['text'=>'الخياطة ؟','callback_data'=>"A2"]],
[['text'=>'التصوير ؟','callback_data'=>"A3"],['text'=>'الطبخ ؟','callback_data'=>"A4"]],
[['text'=>'الرقص ؟','callback_data'=>"A5"]],]])]);}
if($data == "A1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنتَ شخص يُحب العزلة مع إنكَ لديكَ الكثير من الأصدقاء ، أنتَ شخص حنون وصادق في مشاعرِه ، رومانسي قي بعضِ الاحيان ، طبيعي لاتُحب التصنع .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],]])]);}
if($data == "A2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخص غير طموح تُضيع الكثير من وقتِك ، غالباً ماتفشل في علاقاتِك ، شخصيتُكَ قوية ، غير جاد في عِلاقات الحُب ، شخص قنوع بِما لديه .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],]])]);}
if($data == "A3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنتَ شخص رومانسي ، طموح جداً لاتبحث عن الحُب بل تبحث عن الوفاء ، نضراتُك دائماً مُرتبكة ، حساس ، أنتَ شخص يُحب النوم والأحلام ، لديكَ قلق عِندما تواجِه مَن تُحب .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],]])]);}
if($data == "A4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنتَ شخص مرح وخفيف الظل ، لاتؤمن بالحُب مِن النظرة الأولى ، شخصيتُكَ ضعيفة جداً ، مُتكبر ، اصدقائُكَ مُحددون و قليلون .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q2"]],]])]);}
if($data == "A5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنتَ شخص راقي تتميز بِصفات لا يتملكها كُل الناس ، جميل ، في اغلب الأوقات رومانسي ، حساس وتُحب الأناقة .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي ??.','callback_data'=>"Q2"]],]])]);}
if($data == "Q2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الثاني: ماهو لونكَ المُفصل ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'بنفسجي؟','callback_data'=>"B1"],['text'=>'برتقالي؟','callback_data'=>"B2"]],
[['text'=>'ازرق؟','callback_data'=>"B3"],['text'=>'احمر؟','callback_data'=>"B4"]],
[['text'=>'اصفر؟','callback_data'=>"B5"],['text'=>'اخضر؟','callback_data'=>"B6"]],]])]);}
if($data == "B1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"نت شخص بسيط ومبدع ، اجتماعي ، جدير بثقه الجميع ، تحب تكوين علاقات جديدة ، تمتلك روح الدعابه والحكمه في نفس الوقت .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],]])]);}
if($data == "B2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخص جذاب ، ودود ، نشيط ، عفوي ، تحب إسعاد الآخرين حتى لوكان ذلك ع حساب سعادتك الشخصية ، طيب القلب ، مخلص لعائلتك واصدقائك .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],]])]);}
if($data == "B3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخص عفوي ، جميل ، أنيق ، تحب أن تبذل كُل مافي وسعك لتثبت نفسك وللآخرين أنك الافضل على الإطلاق ، رومانسي ، شجاع .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],]])]);}
if($data == "B4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخص لبق ، لديك أخلاق عالية ، نشيط ، عاطفي ، إجتماعي ، احياناً غيور .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],]])]);}
if($data == "B5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخص قيادي ، لديك القدرة على فهم المشاكل وحلَّها ، تتمتع بشخصيه قوية ، هادئة وعقلانية ، تحفظ الاسرار .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],]])]);}
if($data == "B6"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخص حذر ، لاتثق بالآخرين بسهولة ولاتقع بالحب بسهولة ايضاً ، قادر على تحمُل المسؤولية ، ومُتقِن لِعملك .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q3"]],]])]);}
if($data == "Q3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الثالث: أختر رقم من الارقام التالية",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'1','callback_data'=>"C1"],['text'=>'5','callback_data'=>"C2"]],
[['text'=>'2','callback_data'=>"C3"],['text'=>'7','callback_data'=>"C4"]],
[['text'=>'4','callback_data'=>"C5"],['text'=>'8','callback_data'=>"C6"]],]])]);}
if($data == "C1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"مايميزك عن غيرك هو أنك تعتمد ع مبدأ كل شيء أو لاشيء في حياتك ، فأنت لا تختار الوسطية ولا ترضى بأنصاف الحلول ، أما مشاعر الحب لديك تنقلب بيرعة الى كره ونفور ، يعتبرك الآخرين سريع الغضب و مندفع ولا تتصرف بعقلانية .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],]])]);}
if($data == "C2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شخصيتك من اكثر إثارة للجدل ، فمحاولة حل الالغاز الأكثر تعقيدا أسهل من فهم شخصيتك ، السبب يرتبط بأنك مازلت تحاول اكتشاف ذاتك فكلما تكتشف مجموع من الخصال الخاصه بك تقوم يتغيير شخصيتك و تبدء ببناء شخصيه جديدة أما الآخرون فيعتقدون أنك من النوعيه المتحفظة الغريبة بعض الشيء .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],]])]);}
if($data == "C3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"نت عبارة عن كتاب مفتوح ، شخصيه اجتماعيه ومحبوبة ، مشكلتك الوحيدة في أنك تقع في الحب بسهولة ، والبعض يستخدم طيبه قلبك لأستغلالك وإلحاق الأذى بِك ، أنت تعيش وفق مبدأ المخاطرة والخسارة أفضل من عدم القيام بشيء ، تحاول اخفاء جانبك الحساس عن الآخرين لتحمي نفسك .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],]])]);}
if($data == "C4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"نت من الاشخاص الذين يخافون السباحة عكس التيار ، تملك نظره مميزة وفريدة تجاه العالم ، رغم قناعاتك واهتماماتك التي تبدو غريبه للآخرين ، المقابل أنت لاتكترث كثيراً لِما يظنون أو يفكرون ، أنت من النوعيه التي لاتسير بسكل أعمى خلف الحشود ، ولاتمتلك عقليه القطيع ، لاتخاف من رأي المجتمع .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],]])]);}
if($data == "C5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت تميل الى رؤيه المعاني العميقه المرتبطه بكل شيء في حياتك ، أنت بعيد كل البعد عن الأندفاع والعشوائيه وتفكر بكل خطوة تقوم بها بشكل عقلاني ومنطقي الآخرون يعتبرونك حل لمشاكلهم لذلك يلجأون إليك للحصول ع النصائح .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],]])]);}
if($data == "C6"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخص عقلاني وحكيم بغض النظر عن عمرك ، وكأنك تحمل خبرة سنوات طويلة جداً جعلتك تملك نظرة مميزة للعالم ، رغم كونك من الاشخاص الذين يتعلمون من اخطائهم ، لكنك تدرك أن حياتك لن تسير دائما كما تريد او تخطط لها .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q4"]],]])]);}
if($data == "Q4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الرابع : ماهو اكثر شي تحبه ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'القطط؟','callback_data'=>"D1"],['text'=>'الغيوم؟','callback_data'=>"D2"]],
[['text'=>'النحل؟','callback_data'=>"D3"],['text'=>'الشجر؟','callback_data'=>"D4"]],
[['text'=>'الورد؟','callback_data'=>"D5"]],]])]);}
if($data == "D1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخصية محبوبة جدا من قبل أصدقائك.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],]])]);}
if($data == "D2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تمتلك شخصية قوية وجادة ومحبة للنقاش ، لا تعرف الكسل ونشيط دائما في كل اعمالك .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],]])]);}
if($data == "D3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" أنت تمتلك شخصية مزاجية ومتعدلبة دائما لديك غرور وكبرياء قوي.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],]])]);}
if($data == "D4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>" أنت انسان حساس تنجرح من ابسط الامور .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],]])]);}
if($data == "D5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت  شخصية كريمة جدا لديك الكثير من الطيبة والحنية وانت مثال على الصبر وحب الخير لكل الناس .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"Q5"]],]])]);}
if($data == "Q5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الخامس: لو خيروك ترسم اشكال هندسية ماذا ستختار ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'مربع؟','callback_data'=>"E1"],['text'=>'مثلث؟','callback_data'=>"E2"]],
[['text'=>'دائرة؟','callback_data'=>"E3"],['text'=>'مستطيل؟','callback_data'=>"E4"]],]])]);}
if($data == "E1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت منطقي وعقلاني أكثر من كونه عاطفي ، لا يحب التأخر عن المواعيد المحددة ويلتزم بها ، يحب النظام ولا يميل للفوضى كثيرا ، يمتاز بقدرته على الإعداد والتخطيط ، يهتم بالتفاصيل ودقيق في مواعيده ووعوده ، يميل أحيانًا للعزلة بسبب ارتياحه لها ، شخصية تقدر ولا تتغير سريعا ،  وفي ومخلص ويحترمه الآخرون ، لا حب المجازفات والمخاطرات ، يميل لكل ما هو مضمون ، ومعروفة نتيجته مسبقا.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],]])]);}
if($data == "E2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"أنت شخصية قوية وحاسمة وواثق جدا من نفسه ، ذكي وله قدرة كبيرة على التركيز ، يأخذ القرارات الصحيحة والحاسمة ، جدي في تحقيق هدفه ، لا يحب التأخر عن مواعيده ويحرص على الوصول مبكرا ومنهم من يقاطع غيره أثناء الكلام ، ملتزم بالتميز والتفوق ، واضح ولا يحب  اللف والدوران والكذب ، يجيد التعامل مع الأزمات ، مخلص في واجباته وأعماله ، يصلح للقيادة وتولي زمام الأمور ، سريع الغضب ولا يعترف بأخطائه أحياناً .",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],]])]);}
if($data == "E3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يحب التعامل مع الناس بلطف ، ويحب التبسم في وجوههم ، يمدح الاخرين ويحفزهم خاصة إذا طلب رأيه ومساعدته في امرا ما ، لديه القدرة على إقناع الآخرين وإثبات رأيه ، يتمتع بخفة الدم وتقبله من قبل الآخرين وحب الناس لتواجده معهم ، رقيق المشاعر ومجامل ويحب الهدوء ويجد  راحته فيه ، يحب الإحتفاظ بالذكريات ، مشاعره حفيقية وليست مزيفة مثل: الإهتمام ، الإخلاص ، الولاء ، الثقة ، الدعم ، الرعاية.  تسيطر عليهم عاطفتهم أحيانًا مما يوقعهم في المشاكل ، كثير اللوم النفسي عند ارتكابابه لخطا ما خاصة اذا أثر على نفسية أحد.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],]])]);}
if($data == "E4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"غير مستقر في وقته الحالي ويمر بالكثير من التحولات النفسية ، متقلب المزاج وينسى كثيرة ولا تسير حياته بالشكل الذي يريده ، وهو في طريق تغيير حياته والبحث عن حياة أفضل ، هو ليس أقل من غيره ولكنه لم يجد نفسيه بعد ولا يعلم امكانياته وما هو قادر عليه  ليس لديه اهداف يسعى اليها في الفترة الحالية واهم ما يفترض به أن يفعله في هذا الوقت هو ايجاد نفسه الحقيقية اللتي تتناسب معه.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• السوال التالي 📧.','callback_data'=>"95"]],]])]);}
if($data == "95"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عذرا عزيزي تم الانتهاء من الاسأله سيتم اضافه العديد من الاسئله في القريب العاجل .
قم بمعرفه شخصيتك في كلمه ..",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• تحليل الان .🧾','callback_data'=>"F1"]],]])]);}
if($data == "F1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"• تم معرفه شخصيتك الان ..
• شخصيتك 📄👇🏻..
*( $sau )*
• قم بمشاركه البوت ..",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>'• البدايه 📨.','callback_data'=>"fm"]],]])]);}
#######################
if($data == "ffgff"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- لو خيروج تلبسين لباس وطلعين بشارع لو تلبسين لباس وتجين بحضني",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بحضنك 🥺💋",'callback_data'=>"ffy7"],['text'=>"بالشارع",'callback_data'=>"fy7"]],]])]);}
if($data == "ffy7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- اوف تجين بلباس بس تروحين بدونه @$welc 😉",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii77"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - لو خيروج تلبسين لباس وطلعين بشارع لو تلبسين لباس وتجين بحضني
📑 الجواب : بحضنك
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "fy7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- بشارع كلها شوفج وتتأذين بس يمي اداريج  @$welc 😉",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii77"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - لو خيروج تلبسين لباس وطلعين بشارع لو تلبسين لباس وتجين بحضني
📑 الجواب : بالشارع
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "ii77"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- عندج ستعداد تفركين كدام ابوج لو اجي افركلج وحدنه",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدام ابوي",'callback_data'=>"ff78"],['text'=>"تعال افركلي",'callback_data'=>"f78"]],]])]);}
if($data == "ff78"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- حتا تاكلين دك قنادر من الوالد 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii78"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - عندج ستعداد تفركين كدام ابوج لو اجي افركلج وحدنه
📑 الجواب : كدام ابوي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "f78"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- افركلج صبح وليل وماكو ستراحه @$welc 😉",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii78"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - عندج ستعداد تفركين كدام ابوج لو اجي افركلج وحدنه
📑 الجواب : تعال افركلي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "ii78"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- تلعبين بصدرج كدام ابوج لو اني العب بي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدام ابوي",'callback_data'=>"ff79"],['text'=>"العب بصدري انت",'callback_data'=>"f79"]],]])]);}
if($data == "ff79"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- حتا تاكلين دك قنادر من الوالد 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii79"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - تلعبين بصدرج كدام ابوج لو اني العب بي
📑 الجواب : كدام ابوي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "f79"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- العب بي وامصمص 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii79"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - تلعبين بصدرج كدام ابوج لو اني العب بي
📑 الجواب : تعال انت
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "ii79"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- تحطين اصبعج بلورا لو واحد يرضع بصدرج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"احطه بالوره",'callback_data'=>"ff710"],['text'=>"يرضع صدري ",'callback_data'=>"f710"]],]])]);}
if($data == "ff710"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- الله يساعدة اذا اصبعج طويل 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii744"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - تحطين اصبعج بلورا لو واحد يرضع بصدرج
📑 الجواب : احط اصبعي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "f710"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- ءوف لو يمج مو بس ارضع الحس 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii744"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - تحطين اصبعج بلورا لو واحد يرضع بصدرج
📑 الجواب : يرضع صدري
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "ii744"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- لو خيروج تاكلين باجه لو امص شفايفج 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكل باجه",'callback_data'=>"nn72"],['text'=>"مص شفايفي",'callback_data'=>"n72"]],]])]);}
if($data == "nn72"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- لو متماصصه وياي مو احسن 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"hh71"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - لو خيروج تاكلين باجه لو امص شفايفج 😹😔
📑 الجواب : اكل باچة
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "n72"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- اككل شفايفج ومص لسان وف",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"hh71"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - لو خيروج تاكلين باجه لو امص شفايفج 😹😔
📑 الجواب : مص شفايفي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "hh71"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- لو خيروج تنامين بغرفه كلها فار لو ادخل ايدي بستيانج😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"انام",'callback_data'=>"nn725"],['text'=>"دخل ايدك",'callback_data'=>"n725"]],]])]);}
if($data == "nn725"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- لو مدخل ايدي مو احسلج 😹😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - لو خيروج تنامين بغرفه كلها فار لو ادخل ايدي بستيانج😹😔
📑 الجواب : انام
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "n725"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- وف ادخل ايدي وراسي هم",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : - لو خيروج تنامين بغرفه كلها فار لو ادخل ايدي بستيانج😹😔
📑 الجواب : دخل ايدك
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
###################
if($data == "#5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ب ايام الخطوبة هم طلعتو سوه لو لا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>"طلعنه"],['text'=>"لاا",'callback_data'=>"مطلعنه"]],]])]);}
if($data == "طلعنه" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"بلعافية عليكم 🙈🥺😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو2"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : ب ايام الخطوبة هم طلعتو سوه لو لا
📑 الجواب : طلعنه
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "مطلعنه" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حرامات ليش جان تعرفتوا ع بعض اكثر 😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو2"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : ب ايام الخطوبة هم طلعتو سوه لو لا
📑 الجواب : لا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو2" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ليلة الدخلة حلوة جانت لو لاا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"ايي",'callback_data'=>"حلوة"],['text'=>"لاا",'callback_data'=>"محلوة"]],]])]);}
if($data == "حلوة" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ها بلعافيةة عليكم 😂🤤♥️",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو3"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : ليلة الدخلة حلوة جانت لو لاا
📑 الجواب : كلش حلوه
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "محلوة" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"خطيةةة لييشش",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو3"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : ليلة الدخلة حلوة جانت لو لاا
📑 الجواب : لا ابد
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو3" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شكم راس سويتو بليلة الدخلةة",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكثر من 5",'callback_data'=>"ا5"],['text'=>"اقل من 5",'callback_data'=>"اا5"]],]])]);}
if($data == "ا5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ادري شبيكم مشايفين 😒😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو4"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شكم راس سويتو بليلة الدخلةة
📑 الجواب : اكثر من 5 روس
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "اا5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"مممم زين مبين رتاحيتو",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو4"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شكم راس سويتو بليلة الدخلةة
📑 الجواب : اقل من 5
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو4" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شبعتي نيج لو بعدج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اي",'callback_data'=>"شبعت"],['text'=>"لاا",'callback_data'=>"بعدني"]],]])]);}
if($data == "شبعت" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عوااااافي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو5"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شبعتي نيج لو بعدج
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "بعدني" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تعاي كلبي اني اشبعج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو5"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شبعتي نيج لو بعدج
📑 الجواب : لا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"زوجج يعرف يريحج !!",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"يعرف",'callback_data'=>"يعرف"],['text'=>"ما يعرف",'callback_data'=>"ميعرف"]],]])]);}
if($data == "يعرف" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي بلعافية عليكم",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو6"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : زوجج يعرف يريحج !!
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "ميعرف" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"سودة عليه تعاي عمري اني اريحج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو6"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : زوجج يعرف يريحج !!
📑 الجواب : لاا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو6" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"زوجج هاملج لو مريحج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"مريحني",'callback_data'=>"مري"],['text'=>"هاملني",'callback_data'=>"هام"]],]])]);}
if($data == "مري" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"بلعافيه عليج لععد شبعي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو7"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : زوجج هاملج لو مريحج
📑 الجواب : مريحني
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "هام" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يا خطيةة تعاي يمي يروحي اني اهتم بيج واريحج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو7"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : زوجج هاملج لو مريحج
?? الجواب : هاملني
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو7" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"زوجج عنيف بالنيج لو رومانسي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"عنيف",'callback_data'=>"عني"],['text'=>"رومانسي",'callback_data'=>"روما"]],]])]);}
if($data == "عني" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ممم تعاي اني رومانسي اونسج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو8"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : زوجج عنيف بالنيج لو رومانسي
📑 الجواب : عنيف
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "روما" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"امم مبين مرتاحه واذا تحبين لعنيف تعاي يمي 🤤 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو8"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : زوجج عنيف بالنيج لو رومانسي
📑 الجواب : رومانسي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو8" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحبين لنيج العنيف لو رومانسي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"عنييف",'callback_data'=>"عنني"],['text'=>"رومانسي",'callback_data'=>"رووما"]],]])]);}
if($data == "عنني" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف يلعنيفة تعاي نتنايج سوه @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو9"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين لنيج العنيف لو رومانسي
📑 الجواب : عنف
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "رووما" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف اذوب تعاي كلبي نشبع سوه اني وياج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو9"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : تحبين لنيج العنيف لو رومانسي
📑 الجواب : رومانسي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو9" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"خاينة زوجج لو لاا",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"خاينته",'callback_data'=>"خاي"],['text'=>"لا مخاينته",'callback_data'=>"لا م"]],]])]);}
if($data == "خاي" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"مممم لعد تعاي يمي خلي نتونس سوة كلبي @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو10"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : خاينة زوجج لو لاا
📑 الجواب : اي
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "لا م" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ممم تحبين تجربين ونتونس اني وياج 😉🙊💗 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"سوؤو10"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
?? السؤال : خاينة زوجج لو لاا
📑 الجواب : لاا
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "سوؤو10" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"شكم مره تتنايجون بالاسبوع",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اكثر من 5",'callback_data'=>"اك5"],['text'=>"اقل من 5",'callback_data'=>"اق5"]],]])]);}
if($data == "اك5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ممم مبين مريحج كلش بلعافيةة",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شكم مره تتنايجون بالاسبوع
📑 الجواب : اكثر من 5 مرات
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
if($data == "اق5" ){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"سودة عليه اذا ممرتاحة حبي تعاي يمي اريحج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);
bot('sendMessage',['chat_id'=>$sudo,
'text'=>"
📄 السؤال : شكم مره تتنايجون بالاسبوع
📑 الجواب : اقل من 5 مرات
-
[📂 : اضغط هنا لعرض حساب الشخص.](tg://user?id=$chat_id2)
",'parse_mode'=>"MarkDown",]);}
###############
if($data == "ttty"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الاول : صوره الباسج ،🙊👙 ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدها",'callback_data'=>"ff7"],['text'=>"مو كدها",'callback_data'=>"f77f"]],]])]);}
if($data == "f77f"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حمبي اذا نتي موكدها 😹😔 روحي ألعبي بغير قسم 🌚😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
if($data == "ff7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اذا نتي كدها دزي صورة هنا واذا تستحين دزي هنا : @$welc
#ملاحطةة عدم حفظ اي صوره الج داخل البوت والبوت سري",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii7"]],]])]);}
if($data == "ii7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الثاني : صوره لـصدرج ،😻♥️ ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدها",'callback_data'=>"ff8"],['text'=>"مو كدها",'callback_data'=>"f77f"]],]])]);}
if($data == "ff8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اذا نتي كدها دزي صورة هنا واذا تستحين دزي هنا : @$welc
#ملاحطةة عدم حفظ اي صوره الج داخل البوت والبوت سري",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii8"]],]])]);}
if($data == "ii8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الثالث : صوره لـخلفيتج ، 🐣🍑 ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدها",'callback_data'=>"ff9"],['text'=>"مو كدها",'callback_data'=>"f77f"]],]])]);}
if($data == "ff9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اذا نتي كدها دزي صورة هنا واذا تستحين دزي هنا : @$welc
#ملاحطةة عدم حفظ اي صوره الج داخل البوت والبوت سري",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii9"]],]])]);}
if($data == "ii9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الرابع : صوره لـملابسج الداخليه ،👙✨ ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدها",'callback_data'=>"ff10"],['text'=>"مو كدها",'callback_data'=>"f77f"]],]])]);}
if($data == "ff10"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اذا نتي كدها دزي صورة هنا واذا تستحين دزي هنا : @$welc
#ملاحطةة عدم حفظ اي صوره الج داخل البوت والبوت سري",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ii44"]],]])]);}
if($data == "ii44"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال الخامس : صوره جريئه الج ،🤤👅 ؟.",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدها",'callback_data'=>"nn2"],['text'=>"مو كدها",'callback_data'=>"f77f"]],]])]);}
if($data == "nn2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اذا نتي كدها دزي صورة هنا واذا تستحين دزي هنا : @$welc
#ملاحطةة عدم حفظ اي صوره الج داخل البوت والبوت سري",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"hh1"]],]])]);}
if($data == "hh1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"السؤال السادس : تكتبين اسمي ع صدرج ✨👙🌚 ؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"كدها",'callback_data'=>"nn25"],['text'=>"مو كدها",'callback_data'=>"f77f"]],]])]);}
if($data == "nn25"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اذا نتي كدها دزي صورة هنا واذا تستحين دزي هنا : @$welc
#ملاحطةة عدم حفظ اي صوره الج داخل البوت والبوت سري",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
if($data == "n25"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حمبي اذا نتي موكدها 😹😔 روحي ألعبي بغير قسم 🌚😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- رجوع.",'callback_data'=>"fm"]],]])]);}
###############
if($data == "hmd"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يا ام الكمـل كدها 🌚 تغسلين شعرج بنفط لو تكمشين صرصر بأيدج !",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اغســل شعري بنفط😢",'callback_data'=>"nft"],['text'=>"اكمــش صرصر😏😹",'callback_data'=>"srsr"]],]])]);}
if($data == "nft"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يلا عيني غني وياي ام الكمل والصيـبان😹 ها ها ام الكمل والصيبان😹",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"tlale"]],]])]);}
if($data == "srsr"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"احم 🌚😹 هايمنو التكمـش صرصر متأكده هذا ويهج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"tlale"]],]])]);}
if($data == "tlale"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يابعد روح البوت والمطور كدها تطلعين بدون مكياج وكلنا العراق لو ترحين لأمج تكليلها اني مزوجه بالسر",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اطـلع بدون مڪياج 😝💛",'callback_data'=>"mkeag"],['text'=>"اڪل لامـي 🙀🙈",'callback_data'=>"amg1"]],]])]);}
if($data == "mkeag"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"والله جذابه وعلي جذابه والحسين جذابه انتي ويهج ليكول جبار وطلعين بدون مكياج نكطع واهس الشباب بالزواج",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale1"]],]])]);}
if($data == "amg1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كفو وخلج قويه حبحياتي ولتبجين من اول راجدي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale1"]],]])]);}
if($data == "telale1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كدها【تطلعين بدون ستيان👙 / تنطين حلك لـ  @$welc 🌚】",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اطلع بدون 👙",'callback_data'=>"stean"],['text'=>"انطي حلك",'callback_data'=>"abdd"]],]])]);}
if($data == "stean"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف وتعاي يم @$welc يريد يسولف وياج🌚😹",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale2"]],]])]);}
if($data == "abdd"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تموتين ع الاسمر وووف😹💋",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale2"]],]])]);}
if($data == "telale2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"【اڪثر وضعيه تحبيها بلنيج 😍😹】",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"عنيف",'callback_data'=>"asom"],['text'=>"براحه",'callback_data'=>"akarek"]],]])]);}
if($data == "asom"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ؤؤف يا ام العنيف 🙊 تعاي تعاي هنا يم مطوري يريحج 🔞😻 @$welc ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale3"]],]])]);}
if($data == "akarek"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ؤؤؤف يا ام الراحه تعاي تعاي اريحج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale3"]],]])]);}
if($data == "telale3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حبي【 شؤكت تفركين 🔞🌚😹 !",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"بـالنهار",'callback_data'=>"ares3"],['text'=>"بـالليل",'callback_data'=>"pares"]],]])]);}
if($data == "ares3"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"🔞شبيج مستعجله تفركين بلنهار 😹🌚 لهل درجه مشتهيه 😉 دتعال هنا لعد  خلي يريحج مطوري 😻🔞 ( @$welc )",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale7"]],]])]);}
if($data == "pares"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ؤؤف وهسه نتي اڪيد مشتهيه 😉🔞 حمبي هنا تعالي ركض خلي مطوري يريحج ( @$welc ) 🔞",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale7"]],]])]);}
if($data == "telale7"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كدها تزوجين مطور البوت 😻💛
لو اي شخص من التلي🙊💛",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"مطور البوت",'callback_data'=>"almtor"],['text'=>"اي شخص",'callback_data'=>"aeshs"]],]])]);}
if($data == "almtor"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هلكد تحبين المطور  بخت تعاي خاص 🤤 @$welc لو لواكه علمود يسويلج بوتات بلاش 🌚",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale8"]],]])]);}
if($data == "aeshs"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اي يلا ولي روحي دوريلج زاحف اخذي شبي المطور يجكجك 🌚 خوش ولد والله و هذا معرفه اذا غيرتي رايج @$welc ",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale8"]],]])]);}
if($data == "telale8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"لباسج وستيانج يالون 🔞😻😹",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وردي 💗👅",'callback_data'=>"nt1"],['text'=>"اسود 😋🙈",'callback_data'=>"akl1"]],]])]);}
if($data == "nt1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"والله شكلج ياام الوردي الوردي فدشي استمري حمبي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale9"]],]])]);}
if($data == "akl1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عفيه السباعيه هيج اريدج الاسود احلا من الوردي اجي لغرفتج وني البسج اذا تعبانه؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale9"]],]])]);}
if($data == "telale9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"- شوڪت اخر مره تنايجتي ؟🔞🙈",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"اليوم??",'callback_data'=>"hfaya"],['text'=>"صار هواي",'callback_data'=>"hafya"]],]])]);}
if($data == "hfaya"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ها ها الف عافيه لعد واذا بعدج مشتهيه لو مارتاحتي تعالي يم مطوري يريحج 😻🔞 ( @$welc )",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale10"]],]])]);}
if($data == "hafya"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ووف ليش هيج ليش خطيه محد يريحج 🔞🙈 شنوو تعالي روحي للمطور مالتي يريحج 🔞👄😉 (  @$welc  )",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"telale10"]],]])]);}
if($data == "telale10"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"لابسه لباس ابو الخيط 😂😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" ايي ??🙈 ",'callback_data'=>"ss1"],['text'=>" لااء 😹😋",'callback_data'=>"ss2"]],]])]);}
if($data == "ss1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اف اروح فدوه لابو الخيط اني 💋♥ تعالي يمي مطوري يحبج 😔😂 :- @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ff4"]],]])]);}
if($data == "ss2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"حياتي نتي اذا ملابسه ابو الخيط حياتج خساره تعالي للمطور مالتي يلبسج :- @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ff4"]],]])]);}
if($data == "ff4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"باعصه روحج فد يوم ؟ 😒😹",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" ايي 👩😍",'callback_data'=>"jjo1"],['text'=>" لااء ✋😔😂",'callback_data'=>"jjo2"]],]])]);}
if($data == "jjo1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ها حياتي نتي لازم دوده وتحبين  تبعصين روحج لو ماكو احد يريحج  تعالي تعالي مطوري موجود 🤭🤓😂  :- @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ameed"]],]])]);}
if($data == "jjo2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"عفيه عفيه سباعبه 💋♥️  تعالي ولج هنا مطوري يسويلج  ويدخله من وره ??😻🤭 ء @$welc وارتاححي 🤤😭",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ameed"]],]])]);}
if($data == "ameed"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"كم مره تفركين باليوم 🙈😉 ؟؟",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" مره وحده🙈",'callback_data'=>"hhh1"],['text'=>" ههواي 👙🙈",'callback_data'=>"hhh2"]],]])]);}
if($data == "hhh1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"خطيه هيج محرومه لعد  سوده عليه 😂🤤 دمشي روحي يم مطوري  لحلو يريحج هاج هذا معرفه 😍😂 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ff4g"]],]])]);}
if($data == "hhh2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وف ولج 🤤😻 نتي هيج رومانسيه  وتحبين النيييج 😭🤤😂😻 دمشي روحي امشي يم مطوري خلي يرحج اوف فديته 😌😂😂😔😍 *-* @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"ff4g"]],]])]);}
if($data == "ff4g"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"اوصفيلي جسمج 😐😂 حبيبتي",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"وف خيالي 😻🤭",'callback_data'=>"dds1"],['text'=>" شايل روحه فديتهه🤤😭😂",'callback_data'=>"dds2"]],]])]);}
if($data == "dds1"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"ها لزمتج 😍😂 تعالي هذا مطوري يريد يزوج حاته مثلج روحي تفقي ويا وتعالي اعتقدلكم 😹🙈😂👙 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"yyyy8"]],]])]);}
if($data == "dds2"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"جا يحضي وين جنتي دتعالي هذا مطوري دكتور 👙روحيله خلي ينطيج وصفه وسوي جسمج ححلو  @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"yyyy8"]],]])]);}
if($data == "yyyy8"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"هم مسويةه سحاقيات فديوم 😂😍",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" ايي 🤤😻🌝",'callback_data'=>"yyyy9"],['text'=>" لااء 😂😒",'callback_data'=>"yyyy10"]],]])]);}
if($data == "yyyy9"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"معوده بطرانه نتي كبر 😂😔 دمشي شوفي مطوري موجود خلي يرحج وفضيهها 😂💋😔 @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"snhde"]],]])]);}
if($data == "yyyy10"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"يي عفيه حبيبتي امشي يم مطوري لحلو خلي يشتغلج @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"snhde"]],]])]);}
if($data == "snhde"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"تحبين اسمر ؟ 💋😂",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>" ايي 🤤😻🌝",'callback_data'=>"vvff4"],['text'=>" لااء 😂😒",'callback_data'=>"vvff5"]],]])]);}
if($data == "vvff4"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"وووي ففدوه ??🌞😂دتعاي خلي نرتبط لعد   @$welc",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}
if($data == "vvff5"){
bot('EditMessageText',['chat_id'=>$chat_id2,
'message_id'=>$message_id2,
'text'=>"قحط ع اساس هوه ميت عليج جكمه ام الكمل متت 😂😂😂😂😂😩😔",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"- السؤال التالي.",'callback_data'=>"خلصت"]],]])]);}

if($text == "نيجني" or $text == "مشتهيه" or $text == "مشتهية" or $text == "خدرت" or $text == "خدرانه" or $text == "خدرانة" or $text == "ريحني" or $text == "شتهيت" ){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"تعالي خاص حياتي @ZZDDZ",
'reply_to_message_id'=>$message->message_id, ]);}

