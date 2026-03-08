<?php#*wataw*



function sendmessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>"MarkDown"]);} 
 function sendphoto($chat_id, $photo, $caption){
 bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>$photo,
'caption'=>$caption,]);}
function sendsticker($chat_id,$sticker_id,$caption){
bot('sendsticker',[
'chat_id'=>$ChatId,
'sticker'=>$sticker_id,
'caption'=>$caption]);}
// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$textmsg = $message->text;
$sudo = $admin;
$chatid = $update->callback_query->message->chat->id;
$user_id = $message->from->id;
$user = $message->from->username;
$chat_id2 = $update->callback_query->message->chat->id;
$message_id2 = $update->callback_query->message->message_id;
$message_id = $update->callback_query->message->message_id;
$data = $update->callback_query->data;
$name = $message->from->first_name;
$from_id = $message->from->id;
$mid = $message->message_id;

if($text == '/start' ){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"
- أهلاً بك في بوت الالعاب الجديد 👋🏻
- البوت يحتوي على مجموعه من الالعاب
- لـ استخدام البوت يجب عليك
- اختيار نوع العبه ثم الضغط ع زر ابدا
- اختر العبه الان وابدء بالعب

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- من سيربح المليون','callback_data'=>"mle"],['text'=>'- لو خيروك','callback_data'=>'lo']],
[['text'=>"- لعبة الحوت الازرق",'callback_data'=>'hot']],
[['text'=>'- المحيبس','callback_data'=>'mhb'],['text'=>'- حزورة بليره','callback_data'=>'hzo']],
]])]);}

if($data=="mhb"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"
- لعبة المحيبس 👊🏼
- اضغط على زر ابدء لبدء العبه الان
- اضغط على زر القائمة الرئيسية للرجوع الى القائمه الاولئ
-",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- ابدء 👋🏻",'callback_data'=>"ii1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],]])]);}

if($data=="og"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"
- لعبة المحيبس 👊🏼
- اضغط على زر ابدء لبدء العبه الان
- اضغط على زر القائمة الرئيسية للرجوع الى القائمه الاولئ
-",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- ابدء 👋🏻",'callback_data'=>"ii1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],]])]);}

if($data=="no"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"- يرجع بأسم الشرقية . .",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- رجوع",'callback_data'=>"og"]],]])]);}
if($data=="n1"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"- يرجع بأسم الشرقية . .",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- رجوع",'callback_data'=>"og"]],]])]);}

if($data=="ii1"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحـيحه !",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"ii2"]],
[['text'=>"👊",'callback_data'=>"n1"]],]])]);}
if($data=="ii2"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"العب وخوش تلعب 👋🏻 !",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii3"]],]])]);}
if($data=="ii3"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحـيحه !",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"ii4"]],
[['text'=>"👊",'callback_data'=>"n1"]],
[['text'=>"👊",'callback_data'=>"no"]],]])]);}

if($data=="ii4"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"العب وخوش تلعب 💍",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii5"]],]])]);}
if($data=="ii5"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحـيحه !",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"ii6"]],
[['text'=>"👊",'callback_data'=>"n1"]],]])]);}
if($data=="ii6"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"العب وخوش تلعب 👋🏻 !",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii7"]],]])]);}
if($data=="ii7"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"اختر العضمه الصحـيحه ! ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"n1"]],
[['text'=>"👊",'callback_data'=>"ii8"]],]])]);}

if($data=="ii8"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"العب وخوش تلعب 👋🏻 !",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii9"]],]])]);}
if($data=="ii9"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text' =>"اختر العضمه الصحـيحه ! ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"👊",'callback_data'=>"ii10"]],
[['text'=>"👊",'callback_data'=>"no"]],
[['text'=>"👊",'callback_data'=>"n1"]],]])]);}
if($data=="ii10"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,'message_id'=>$message_id2,
'text'=>"العب وخوش تلعب 👋🏻 !",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"تلعب",'callback_data'=>"ii11"]],]])]);}

if($data == 'lo' ){
bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
- لعبة لو خيروك . . .
- اضغط ع زر ابدء لبدء العبه الان
- اضغط ع زر القائمة الرئيسية للرجوع
-
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- ابدء الان",'callback_data'=>'hmd1']],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],]])]);}

if($data == 'hmd1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
- أهلاَ  عزيزي ✨
- اختر جنسك لبدء اللعب ..
-',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'بــنت🙆','callback_data'=>'bnt']],
        [['text'=>'ولــد','callback_data'=>"wla"]],
]])]);}

if($data == 'wla' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'عزيــزي🌝⚡

لو خيــروك【تعــض روحك/تضرب دغلــه بالكاع😂】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'تعــض روحك😂','callback_data'=>'s1']],
        [['text'=>'تضــرب دغله😝😂','callback_data'=>'s2']],
      ]
    ])
  ]);
}

if($data == 's1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#ههههه😂 روح عــض روحــك يبا😂',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي📌','callback_data'=>'g1']],
      ]
    ])
  ]);
}
if($data == 's2' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'يارب كــون تطيح وتتكسر😂😕',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🎐','callback_data'=>'g1']],
      ]
    ])
  ]);
}

if($data == 'g1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لــو خيــروك👿

【تطلــع بالشارع مــصلخ/تاكل بصل بالريــوك😂】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'تطــلع مصلخ😂😒','callback_data'=>'r1']],
        [['text'=>'تاكــل بصل😝😂','callback_data'=>'r2']],
      ]
    ])
  ]);
}
if($data == 'r1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هيــج وكون بنات بالشــارع😂🌚

وتصيــر مضحكــه يالخايس يالمعفــن☺😂',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💡','callback_data'=>'g22']],
      ]
    ])
  ]);
}
if($data == 'r2' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ع اســاس انته ريحتك حلوه😂
وتاكــل بصل من الصبح😂روح حمبي روح👿',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي📤','callback_data'=>'g22']],
      ]
    ])
  ]);
}

if($data == 'g22' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لو خيــروك💭

【تاكــل مركــة كرفس🌴/تاكــل شوربة عكاريك🐸】

ه────────────────',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'مركــة كرفس😋😹','callback_data'=>'sel']],
        [['text'=>'شوربــة عكاريك😹','callback_data'=>'sel1']],
      ]
    ])
  ]);
}
if($data == 'sel' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ترهــ ماكــو مركة كرنفــس😴😹

عقــل المزنبــر🌝😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'sec']],
        
      ]
    ])
  ]);
}
if($data == 'sel1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'مو ؏ اســاس انته باليابــان😹🌚

اكعــد عمي لتزوع عليــنه🌝📛',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي📮','callback_data'=>'sec']],   
      ]
    ])
  ]);
}
if($data == 'sec' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ياحبيــصي💥

لو خيــروك【تكســر شمعه براسك😮😹/تاكل ذيــل جريدي🌝😢】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اكســر شمعه👿','callback_data'=>'shma']],
        [['text'=>'اكــل ذيل جريدي😝😹','callback_data'=>'grede']],
      ]
    ])
  ]);
}

if($data == 'shma' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اي وابــوك يبتلي بخياطاتــك😴😹

اكعــد عمي اكــعد منو جابــرك🌝',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🚶','callback_data'=>'t']],   
      ]
    ])
  ]);
}
if($data == 'grede' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ربــي😊
دعــوة مطلــكه حامــل😴😹

كــون يطكك طاعون وساحون ودولمه ماعــون🌚😹
كول (اي) كلــت اي ربــي كون يطكــه زهايمر وبطنه سهــال وينســه مكان الحمام😒😂
ياكــل جريدي🌚😹غير عمك ياباني واني ما ادري 😕😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'tn']],
      ]
    ])
  ]);
}
if($data == 'tn' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لو خيــروك😳😹

【تطلع بالشارع تصيح انــي حامل🎅/لو تنكع شعرك ماي وطحين😮😂】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اطــلع بالشارع واصــيح😏','callback_data'=>'shard']],
        [['text'=>'انكع شــعري مي وطحيــن😨','callback_data'=>'then']],
      ]
    ])
  ]);
}
if($data == 'shard' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'مبــروك😹
يتربــى بعزك🌚😹شكــد عليك بيا شهــر😨😂',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🚶','callback_data'=>'sec45']],
      ]
    ])
  ]);
}
if($data == 'then' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اي وحــط شوي ملح🌚⚡

وانطــي لامك تخبــزه🌝😹

كون صخونــه مال حصــونه🌚😂',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🌟','callback_data'=>'sec45']],     
      ]
    ])
  ]);
}
if($data == 'sec45' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لــو خيــروك🙊🙀

【تزوج عبــده😹ونادره/لو حاتــه وعايــزه😹🌚】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'عبــده ونادره🌝','callback_data'=>'abda']],
        [['text'=>'حلــوه وعيــزه🌚','callback_data'=>'hloa']],
      ]
    ])
  ]);
}

if($data == 'abda' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'و الله عرفــتك😸👐

حتخــتار العبــده الصنــف مالتك+مطية كراب🙀😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي▶','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'hloa' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ليــش عينــي وشبيهه العبده ماختاريتهه😏

ع اســاس ابوك روسي وامك باكســتانيه🌚
لو ليــن وصخه مثلــك😔😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي✅','callback_data'=>'srag']],
      ]
    ])
  ]);
}
if($data == 'srag' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لــو خيــروك🌚

【تشيــل جسمك شيره🌚💥/تزيــن اكــرع😮】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اشيل جســمي شيره🙊','callback_data'=>'gsme']],
        [['text'=>'ازيــن كــرعه😸','callback_data'=>'kraa']],
      ]
    ])
  ]);
}

if($data == 'gsme' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ءوووف😍😹

وتعــالي وره 12 نســولف🙀😗',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي😹','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'kraa' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#ههههههههههههه

وتطــلع جنــك خص... شارده🌚😹
💥💃💃💃💃💥',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'كمــل يبه😂','callback_data'=>'gg12']],
      ]
    ])
  ]);
}
if($data == 'gg12' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'حمبقلبــي😎💥

لو خيــروك【تروح لبيت جيرانكم تكلهم احب بتكم💃😹/
لــو تروح للصيــدليه تكله وين اخلي التحميــله🙊😹】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اروح لجيــرانه🙀','callback_data'=>'gerana']],
        [['text'=>'اروح لأبــو الصيدليــه😹','callback_data'=>'sedlea']],
      ]
    ])
  ]);
}
if($data == 'gerana' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'وحضــرك 50 مليــون فصل😹

واتحمــل فد 100 ع بابــكم 🌚😹
واستعــد للزواج منــهه💃😹هيج وتطلــع جكمه😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🙈','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}
if($data == 'sedlea' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'نهنهنه😹🌚

وخــلك كفــو وتحمل الجلاليــغ😹🌝💃

💃💃',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💫','callback_data'=>'ggg1']],
      ]
    ])
  ]);
}

if($data == 'ggg1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ممم لو خيــروك😾

【تاكــل حنطه🌾/تطك جلب بالشارع جلاغ💃😹】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'تاكــل حنطــه🌾','callback_data'=>'hnta']],
        [['text'=>'تضرب الجلــب🐶','callback_data'=>'glp']],
      ]
    ])
  ]);
}
if($data == 'hnta' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ايباااخ😏

روح الزاجــل 🐦البداخلــك مسيطره عليك😸
بيــك خير اضرب الجلــب💃💥😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🔓','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'glp' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اي وتضــل ثابت لو اركض اخوي عامــر😹💃

لتحمــه بــس😹ها اركض اركض دوس🏃🏃🏃',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💛','callback_data'=>'g88']],
      ]
    ])
  ]);
}
if($data == 'g88' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'يامحفــوض الســلامه😂والبكــه

لو خيــروك📌【تضــرط ببطل وتشم ريحته/تبــوس صخله بحلــكها😴😂】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اضرط واشمــهه😂','callback_data'=>'lo0']],
        [['text'=>'ابوس صخــله😢','callback_data'=>'loo0']],
      ]
    ])
  ]);
}
if($data == 'lo0' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'يالخــايس يالمعفــن😸😹

شنــي هالعقليــه الذبانيــه العندك😮😹

تخلــيك تشم ريحــة ضراطك الحمبقازيــه👽😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'gefara']],
        
      ]
    ])
  ]);
}
if($data == 'loo0' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ماوصيــك اخــذلك حلك مرتــب😹

#هههههههههههههه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💎','callback_data'=>'ali']],
        
      ]
    ])
  ]);
}
if($data == 'bnt' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'💥💥💥💥💥💥

يا امــﮧ الكمــﮧل😹/لو خيــروج🌚💃

【تغسلين شعــرج بنفط🙊🙀/تكمشــين صرصر بأيدج😹】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اغســل شعري بنفط😢','callback_data'=>'nft']],
        [['text'=>'اكمــش صرصر😏😹','callback_data'=>'srsr']],
      ]
    ])
  ]);
}

    if($data == 'nft' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'يــلا عيــني💃💃

غنــي وياي🔇🔇
ام الكمل والصيــبان😹💃💃ها ها ام الكمــل والصيــبان😹💃💃',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💛','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'srsr' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'احــم🌚😹

هايــمنو التكمــش صرصر🌚😹
متأكده🌚😹 هاذ ويهج😹💃',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💖','callback_data'=>'tlale']],
      ]
    ])
  ]);
}
if($data == 'tlale' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'يابعــد روح البــوت والمطور😹

لــو خيروك🙀

【تطلعين بــدون مكياج وكلنا العراق😹/

ترحــين لأمج تكليلــهه اني مزوجه بالسر🙊😹】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'تطلعــين بدون مكياج😝💛','callback_data'=>'mkeag']],
        [['text'=>'تكــلين لامج🙀','callback_data'=>'amg1']],
      ]
    ])
  ]);
}
if($data == 'mkeag' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'والله جــذابه😹

وعــلي جذابه😹 والحسين جذابه😹
المصنهــره 😹المزنعــره😴😹
انــتي ويهج ليكول مطــور البوت😏😹
وطلعين بدون مكياج😹💃💃
نكطــع واهس الشباب بالــزواج😹💃💃🌚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💫🙊','callback_data'=>'telale1']],
      ]
    ])
  ]);
}
if($data == 'amg1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'كــفو🌚💪

وخــلج قويــه حبحياتي😼
ولتبجــين من اول راجــدي😹😹😹😹
💃💃💃💃💃💃',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'telale1']],
      ]
    ])
  ]);
}

if($data == 'telale1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لــو خيــروج🌚😹

【تطــلعيــن بــدون 👙/🌚😹/تنطــين حلك لعبــد🌚😹】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اطلع بــدون 👙','callback_data'=>'stean']],
        [['text'=>'انطــي حلك لعبــد🌚','callback_data'=>'abdd']],
      ]
    ])
  ]);
}
if($data == 'stean' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'وف🙊😹

وتعــاي يم المطــور😹💃
يريــد يسولف وياج🌚😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي😒','callback_data'=>'telale2']],
      ]
    ])
  ]);
}

if($data == 'abdd' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'جذاااااااااااااااااااابه🌚😹

هايــه $name 😹😹

جذابه هو انتن تدورن حاتيــن🌚😹النوب تنطين حلــك لعبد🌚',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي😸','callback_data'=>'telale2']],
      ]
    ])
  ]);
}
if($data == 'telale2' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'كمشــتج سميــره😹

تعــاي تعاي 😹 لو خيــروج🌚👇

【تصــومين سنه😢/تاكــلين شوربــة عكاريك😍😹】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اصــوم سنه😢','callback_data'=>'asom']],
        [['text'=>'اكــل شوربة عكاريــك😢😹','callback_data'=>'akarek']],
      ]
    ])
  ]);
}

if($data == 'asom' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'جنــي سمعت وحده تكــول اصوم🌚😨

سميــره لجذبيــن😒😹
وماعــون الباميــه منو ياكــله👿😹يوميه
اهووو هم كالت اني برنسيس ما اكــل🌚😹
هم بجت 😒😹يلا يلا صومي بس لتبجين😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🙊','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'akarek' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'والكيــاته🌚😹

والمامــا ما اكول هاي الءكله😹

هج هاذ ماعون شوربــة عكاريــك|🐸|',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🐸','callback_data'=>'telale3']],
      ]
    ])
  ]);
}
if($data == 'telale3' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'سميــره😹

لو خيــروج🌚😹

【عريــس🙊💑/باريــس🗼】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'عريــس🙊💥','callback_data'=>'ares3']],
        [['text'=>'باريــس🗼','callback_data'=>'pares']],
      ]
    ])
  ]);
}
if($data == 'ares3' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'عفــيه الحبــابه🌚💃😹

بــس العريس علمــود الستــر😏💛
لــو بس تــردن تعرسن جمبك لالا😹💃🚶',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🙊','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'pares' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'مشيطلعيبرا🌚😹

بنــت الدبــل كفه😒😹

اكــو احلى من الستــر😒💥لو انتن تحبــن الدياحــه💃😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🎄','callback_data'=>'telale7']],
      ]
    ])
  ]);
}
if($data == 'telale7' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لــو خيــروج🌚💥

【تزوجــين مطــور البــوت😻💛

لــو اي شخــص من التــلي🙊💛】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'مطــور البــوت💜💍','callback_data'=>'almtor']],
        [['text'=>'اي شخــص🙉✨','callback_data'=>'aeshs']],
      ]
    ])
  ]);
}
if($data == 'almtor' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'هلكــد تحبين مطوري🙊💛😹

لــو لواكه علمــود يســويلج بوتات🌚😹💥',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي🔏','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'aeshs' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اي يلــا ولــي😒💥😹

روحــي دوريــلج زاحف اخــذي😏😹

شبي المطــور يجكجك🌚😹خــوش ولد وميســاني😻',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💎','callback_data'=>'telale8']],
      ]
    ])
  ]);
}
if($data == 'telale8' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لــو خيــروج👽

【نت ماكــو ٣ ايام🐸✨】

【اكــل ماكو ٣ ايــام🐸💛】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'نــت ماكــو📡','callback_data'=>'nt1']],
        [['text'=>'اكــل ماكــو🍕','callback_data'=>'akl1']],
      ]
    ])
  ]);
}

if($data == 'nt1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'والله شكــلج🌚💛😹

احــاول اصــدكج🌚🎐😹
مدا اكــدر اتوقعج ٣ ايام بــدون حبيبج 😝😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💥','callback_data'=>'telale9']],
      ]
    ])
  ]);
}

if($data == 'akl1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'عفــيه السبــاعيه😻💛💥

هيــج اريــدج😻🙊💥

نعلــبو النــت😝😹بس من تبجين ع حبيــبج😹
ابجي بغرفتــج لاشبعيــن كتل🌚😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💄','callback_data'=>'telale9']],
      ]
    ])
  ]);
}
if($data == 'telale9' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لــووووو خيــروووج🙉

【تلبســين حفايــة ولد وترحين للمنتــزه💥😹】

【تمشــين حافيــه لمــدة سنه😹💥】',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'البس حفــاية ولد😸💛💥','callback_data'=>'hfaya']],
        [['text'=>'امشــي حافيــه🐸💎','callback_data'=>'hafya']],
      ]
    ])
  ]);
}
if($data == 'hfaya' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'نهنهنه😹💃💃💃💃

💎وتصــيرين مضحكه بالمنتــزه💎😹

😹💥يالخايــسه يالمعفــنه💥😹',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💠','callback_data'=>'snde']],
      ]
    ])
  ]);
}
if($data == 'hafya' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ربــي🌚👐

كــون الكــاع كلهه كزاز😼

وماتشــرفي بس تــدوسين علي😍😹

ربــي كون يطــب برجلــك بسمار 
طوله عشرطعش متــر💥😹💛',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'التــالي💥💛','callback_data'=>'snde']],
      ]
    ])
  ]);
} 
if($data == 'snde' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ تاڪل رڪـي ٱ۾ بطـيخ😋',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'بطـيخ🍈','callback_data'=>'alii']],
        [['text'=>'رڪـي🍉','callback_data'=>'alii']],
      ]
    ])
  ]);
}
if($data == 'alii' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ تضرب فقـير ٱ۾ تاڪل طحين😢',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'اڪل طحين😣','callback_data'=>'ali1']],
        [['text'=>'اضرب فقـير😟','callback_data'=>'ali1']],
      ]
    ])
  ]);
}
if($data == 'ali1' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ تطلع حافي بالشارع ٱ۾ تبوس رجل امڪہ🙂',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>' ابوس رجل امي👩🏻‍💼','callback_data'=>'ali2']],
        [['text'=>'طلع حافي بالشارع😆','callback_data'=>'ali2']],
      ]
    ])
  ]);
}
if($data == 'ali2' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ تزوج بنت خالڪہ ٱ۾ بنت عمڪہ 😻',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'   بنت عمك🙊','callback_data'=>'ali3']],
        [['text'=>'بنت خالك🙈','callback_data'=>'ali3']],
      ]
    ])
  ]);
}

if($data == 'ali3' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ تاڪل صرصر ٱ۾ تعوف حبيبتك😁',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'   تعوف حبيبتك💔','callback_data'=>'ali4']],
        [['text'=>'تاڪل صرصر🦗','callback_data'=>'ali4']],
      ]
    ])
  ]);
}

if($data == 'ali4' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ بـدون موبايل ٱ۾ تـصوم يوم😂',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'بـدون موبايل🤳🏻','callback_data'=>'ali5']],
        [['text'=>' تـصوم يوم👳🏻‍♀','callback_data'=>'ali5']],
      ]
    ])
  ]);
}
if($data == 'ali5' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ حـبـبتڪہ ٱ۾ ٱخـتڪہ😉',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'ٱخـتڪہ💁🏻‍♀','callback_data'=>'ali6']],
        [['text'=>'حـبـبتڪہ👰🏻','callback_data'=>'ali6']],
      ]
    ])
  ]);
}
if($data == 'ali6' ){
  bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>' لـﯠ خـيروڪہ ٱمـڪہ ٱ۾ ٱبـﯠڪہ😱',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
        [['text'=>'  ٱبـﯠڪہ 👨🏻‍💼','callback_data'=>'ali7']],
        [['text'=>'مـڪہ 👩🏻‍💼','callback_data'=>'ali7']],
      ]
    ])
  ]);
}
if($data == 'ali7' ){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
- انتهت العبه
- اضغط على اعادة اللعب لاعادة لعبه مره اخرى
- اضغط ع القائمة  الرئيسية لروئية باقي الالعاب.
-',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],   
[['text'=>'• اعادة الـعبة','callback_data'=>'zzzj']]    
]    
])
]);
}
# الحوت
if($data == "hot"){
 bot('EditMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text' =>"
- لعبة الحوت الازرق ،
- اضغط على زر ابدء لبدء العبه الان
- اضغط على زر القائمة الرئيسيه للرجوع
-",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- دخول",'callback_data'=>"a"],['text'=>"- قرائة الشروط",'callback_data'=>"b"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],
]])]);}

if($data == "b"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
- عزيري $name 👋🏻
- هذا البوت لايمثل اي تهديد .
- هذه اللعبه للمزحه فقط لااكثر .
- العبها الان وبكل امان .
-",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- رجوع','callback_data'=>'r']]    
]])]);}

if($data == "r"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text' =>"• مرحبا بك في بوت لعبة الحوت الازرق",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- دخول",'callback_data'=>"a"],['text'=>"- قرائة الشروط",'callback_data'=>"b"]]
]])]);}

if($data == "a"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'المس انفگ بأستخدام الابهام الايمن',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'c']]    
]    
])
]);
}
if($data == "c"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- صفق بيدگ مرتين وقول انا قوي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'d']]    
]    
])
]);
}

if($data == "d"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارفع ساقك اليسرى عن طريق يدك اليسرى واقفز 3 مرات بساقك اليمنى',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'e']]    
]    
])
]);
}
if($data == "e"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- تذگر لاتؤذي نفسگ ولاتضر بأشخاص اخرين',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'f']]    
]    
])
]);
}
if($data == "f"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارفع يدگ مع بعد الى الاعلى  وشغل الموسيقى المفضله لديگ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'g']]    
]    
])
]);
}
if($data == "g"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اسئل صديقك ماهوه طعامگ المفضل',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'i']]    
]    
])
]);
}
if($data == "i"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- تذكر لاتكون وقحا للاشخاص الذين يعانون من لون البشرة المختلفه انها العنصرية وبطريقة سيئه للغاية',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'j']]    
]    
])
]);
}
if($data == "j"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اسئل احد من عائلتگ هل يحتاج الي مساعدة',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'k']]    
]    
])
]);
}
if($data == "k"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'انهض على الساعة 6:00',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'l']]    
]    
])
]);
}
if($data == "l"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اذهب تمشي 1 ميل',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'n']]    
]    
])
]);
}
if($data == "n"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'شاهد فلم كوميدي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'o']]    
]    
])
]);
}

if($data == "o"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'عندما تستيقظ لاتتحرك من السرسر لمدة 5 دقائق',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'p']]    
]    
])
]);
}
if($data == "p"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ضع يدك علي رأسك وانزل 30 مراة',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'q']]    
]    
])
]);
}
if($data == "q"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#تذكير
تشويه الذات سيئة عند الحاق الضرر لنفسك قد تلحق الضرر للاخرين',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'s']]    
]    
])
]);
}
if($data == "s"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'افتح حبة بصل بدون ان تبگي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'u']]    
]    
])
]);
}
if($data == "u"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'تناول جوز',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'v']]    
]    
])
]);
}

if($data == "v"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اذهب على دراجه واذا لم تملك دراجه اذهب على شيء ٱڅڑ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'w']]    
]    
])
]);
}
if($data == "w"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#تذگير
العنف ليس ابدا هوه الاجابه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'y']]    
]    
])
]);
}
if($data == "y"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'اكتب منشور في الفيسبوك تقول فِيَھ ه̷̷َـَْـُذآ يوم جديد',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'z']]    
]    
])
]);
}
if($data == "z"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'رسم بالطباشير الملون على قطعه گبيرة من الورق',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a1']]    
]    
])
]);
}
if($data == "a1"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارسم مياه🌊،وشمس☀️وجزيرة🏝',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a2']]    
]    
])
]);
}
if($data == "a2"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- قم باعطاء الرسم لشخص قريب من عائلتك وقول ڵـهٍ تقومون بتطبيق الحوت الازرق🐬',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a3']]    
]    
])
]);
}

if($data == "a3"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- الًيَوُمًِ لايعني شيء اسوء',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a4']]    
]    
])
]);
}
if($data == "a4"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- جرب مص الليمون دون ان تسحب وجهك',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a5']]    
]    
])
]);
}
if($data == "a5"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- قل لـ 15 شخص ان الًيَوُمًِ جميل قبل الـ14:00 مساء',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a6']]    
]    
])
]);
}
if($data == "a6"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- الًيَوُمًِ استراحه لايوجد تحدي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a7']]    
]    
])
]);
}
if($data == "a7"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- افعل شيء جيد!',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a8']]    
]    
])
]);
}
if($data == "a8"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'#تذكير
مساعدة ٱڅڑ دون فائدة ه̷̷َـَْـُذآ امر جيد',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a9']]    
]    
])
]);
}
if($data == "a9"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'ارسل لـ3 اشخاص للعب تحدي الحوت الازرق',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a0']] ,
[['text'=>'• ارسال🐬','switch_inline_query'=>'']]
]    
])
]);
}
if($data == "a10"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اسئل والديگ اذا كان هناك قمامة لكي ترميها',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a11']]    
]    
])
]);
}

if($data == "a11"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- توازن وقف على قدم واحده لمدة 20 ثانيه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a12']]    
]    
])
]);
}
if($data == "a12"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- خذ طعام من الثلاجه وقل لعائلتك انا قوي',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'13']]    
]    
])
]);
}
if($data == "a13"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اشرب عصير البرتقال',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a14']]    
]    
])
]);
}
if($data == "a14"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- حذاري لاتخبر اي احد كيف تبدو',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a15']]    
]    
])
]);
}
if($data == "a15"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ضع قطعتين من الخبز في فمك وقل انا ارنب',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a16']]    
]    
])
]);
}

if($data == "a16"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اغسل اسنانك لمدة 5 دقائق',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a17']]    
]    
])
]);
}
if($data == "a17"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- استحم مرتين!!',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a18']]    
]    
])
]);
}
if($data == "a18"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- ارتداء التقاشير في المنزل كل يوم',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'19']]    
]    
])
]);
}
if($data == "a19"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- تناول ملعقة كبيرة من السلطه التي تحبها',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a20']]    
]    
])
]);
}
if($data == "a20"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- شاهد رسوم الكارتون',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a21']]    
]    
])
]);
}
if($data == "a21"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'استيقظ الساعه الــ8:00 صباحا',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a22']]    
]    
])
]);
}
if($data == "a22"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- اكل الحبوب مع الحليب في الافطار',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a23']]    
]    
])
]);
}
if($data == "a23"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- استمع الى الموسيقه المفضله لديك لمدة سَـآعــهْْ',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a24']]    
]    
])
]);
}
if($data == "a24"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- جعل عمامه من المنشفه وارتداء حجاب لمدة 30 دقيقه',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a25']]    
]    
])
]);
}
if($data == "a25"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'لاتخبر شيئا لوالديك',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- تابع','callback_data'=>'a26']]    
]    
])
]);
}

if($data == "a26"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'- هل انته مستعد لگي تصبح حوت ازرق🐬',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'نعم','callback_data'=>'a27']]    
]    
])
]);
}
if($data == "a27"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'• قم برسم حوت ازرق على يدگ
• استخدم اله حادة في الرسم
• بعدها قم بقتل نفسگ بأستخدام احد الطرق
- عن طريق اله حادة🔪
- عن طريق القفز من مبنى عالي🏯
- عن طريق خنق نفسگ🌚
#للمزحه_فقط',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'التالي','callback_data'=>'ddd']],   
]    
])
]);
}
if($data == 'ddd' ){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'•
- انتهت العبه
- اضغط على اعادة اللعب لاعادة لعبه مره اخرى
- اضغط ع القائمة  الرئيسية لروئية باقي الالعاب.
-',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],   
[['text'=>'• اعادة الـعبة','callback_data'=>'hot']],
]    
])
]);
}
$chat_id = $update->callback_query->message->chat->id;
#حزوره
if($data == "hzo"){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
-  لعبة حزوره بليره
- اضغط على زر ابدء لبدء العب الان
- اضغط على زر ااقائمة الرئيسية للرجوع
-",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- ابدأء العب",'callback_data'=>"bb1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],   
]
])
]);
}
if($data=="Ailnoor"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
-  لعبة حزوره بليره
- اضغط على زر ابدء لبدء العب الان
- اضغط على زر ااقائمة الرئيسية للرجوع
-",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"نبدأء العب",'callback_data'=>"bb1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],   
]
])
]);
}

if($data=="dev_a"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اجابتك كانت خاطئه للأسف ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"- رجوع",'callback_data'=>"Ailnoor"]
],
[
['text'=>"$namech",'url'=>"t.me/$ch"]
],
]
])
]);
}
if($data=="dev_i"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"انتهت العبه اجاباتك كانت خاطئه ⚠️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"- رجوع",'callback_data'=>"Ailnoor"]
],
[
['text'=>"$namech",'url'=>"t.me/$ch"]
],
]
])
]);
}

if($data=="bb1"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشيء الذي كلما طال قصر ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"النظر",'callback_data'=>"dev_a"]
],
[
['text'=>"العمر",'callback_data'=>"bb2"]
],
[
['text'=>"القبر",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb2"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb3"]
],
]
])
]);
}
if($data=="bb3"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماذا يقع وسط بغداد ؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>" حرف الدال",'callback_data'=>"bb4"]
],
[
['text'=>"الشورجه",'callback_data'=>"dev_i"]
],
[
['text'=>"باب المعضم",'callback_data'=>"dev_a"]
],
]
])
]);
}
if($data=="bb4"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb5"]
],
]
])
]);
}
if($data=="bb5"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو البيت الذي لا يسكن( ليس فيه أبواب ولا نوافذ) ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"بيت الرحم",'callback_data'=>"dev_a"]
],
[
['text'=>"بيت الشعر",'callback_data'=>"bb6"]
],
[
['text'=>"بيت المسكين",'callback_data'=>"dev_i"]
],
]
])
]);
}

if($data=="bb6"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اجابتك صحيه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb7"]
],
]
])
]);
}
if($data=="bb7"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماهو الشيء الذي يكتب و لا يقرأ ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الجاهل",'callback_data'=>"dev_a"]
],
[
['text'=>"الاعمى",'callback_data'=>"dev_i"]
],
[
['text'=>"القلم",'callback_data'=>"bb8"]
],
]
])
]);
}
if($data=="bb8"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb9"]
],
]
])
]);
}

if($data=="bb9"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ماهو الشيء الذي يكون أخضر في الارض وأسود في السوق وأحمــر في البيت ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الشاي",'callback_data'=>"bb10"]
],
[
['text'=>"القمح",'callback_data'=>"dev_i"]
],
[
['text'=>"الارز",'callback_data'=>"dev_a"]
],
]
])
]);
}
if($data=="bb10"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb11"]
],
]
])
]);
}
if($data=="bb11"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"له أسنان ولا يعض، ما هو ؟  - ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المشط",'callback_data'=>"bb12"]
],
[
['text'=>"المنشار",'callback_data'=>"dev_a"]
],
[
['text'=>"الصبار",'callback_data'=>"dev_i"]
],
]
])
]);
}

if($data=="bb12"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb13"]
],
]
])
]);
}
if($data=="bb13"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشيء الذي لا يمشي إلا بالضرب ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"المسمار",'callback_data'=>"bb14"]
],
[
['text'=>"االكسلان",'callback_data'=>"dev_a"]
],
[
['text'=>"الطفل الخبيث",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb14"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb15"]
],
]
])
]);
}
if($data=="bb15"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع السودان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اسيا",'callback_data'=>"dev_i"]
],
[
['text'=>"افريقا",'callback_data'=>"dev_a"]
],
[
['text'=>"اوربا",'callback_data'=>"bb16"]
],
]
])
]);
}
if($data=="bb16"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"bb17"]
],
]
])
]);
}
if($data=="bb17"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم عدد محافظات العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"20",'callback_data'=>"dev_a"]
],
[
['text'=>"22",'callback_data'=>"dev_i"]
],
[
['text'=>"18",'callback_data'=>"bb18"]
],
]
])
]);
}

if($data=="bb18"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عاصمة فرنسا",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"باريس",'callback_data'=>"bb19"]
],
[
['text'=>"لندن",'callback_data'=>"dev_a"]
],
[
['text'=>"واشنطن",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb19"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb20"]
],
]
])
]);
}
if($data=="bb20"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"هو له رأس ولا عين له، وهي لها عين ولا رأس لها، ما هما ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الدبوس و الإبرة",'callback_data'=>"bb21"]
],
[
['text'=>"الخيط و السناره",'callback_data'=>"dev_a"]
],
[
['text'=>"المطرقه و المقبض",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb21"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb22"]
],
]
])
]);
}

if($data=="bb22"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهو اسم صوت الحصان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"نهيق",'callback_data'=>"dev_a"]
],
[
['text'=>"صهيل",'callback_data'=>"bb23"]
],
[
['text'=>"عواء",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb23"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb24"]
],
]
])
]);
}
if($data=="bb24"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عملة مصر",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"دينار",'callback_data'=>"dev_a"]
],
[
['text'=>"دولار",'callback_data'=>"dev_i"]
],
[
['text'=>"جنيه",'callback_data'=>"bb25"]
],
]
])
]);
}
if($data=="bb25"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"• احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb26"]
],
]
])
]);
}
if($data=="bb26"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشيء الذي إذا أخذنا منه إزداد وكبر ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الحفرة",'callback_data'=>"bb27"]
],
[
['text'=>"النار",'callback_data'=>"dev_a"]
],
[
['text'=>"الشرار",'callback_data'=>"dev_i"]
],
]
])
]);
}
if($data=="bb27"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه",'callback_data'=>"bb28"]
],
]
])
]);
}
if($data=="bb28"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"أخوان يبصران كل شيء ولكن لا يرى أحدهما الآخر فما هما ؟ 
",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الساقان",'callback_data'=>"dev_a"]
],
[
['text'=>"العينان",'callback_data'=>"bb29"]
],
[
['text'=>"الارجل",'callback_data'=>"dev_i"]
],
]
])
]);
}

if($data=="bb29"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb30"]
],
]
])
]);
}
if($data=="bb30"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي اول غزوه في الاسلام",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"بدر",'callback_data'=>"bb31"]
],
[
['text'=>"احد",'callback_data'=>"dev_a"]
],
[
['text'=>"الخندق",'callback_data'=>"dev_i"]
],
]
])
]);
}

if($data=="bb31"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>" احسنت اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb32"]
],
]
])
]);
}
if($data=="bb32"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"يتحرك دائماً حواليك لكنك لاتراه فما هو ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الخيال",'callback_data'=>"dev_a"]
],
[
['text'=>"الارواح",'callback_data'=>"dev_i"]
],
[
['text'=>"الهواء",'callback_data'=>"bb33"]
],
]
])
]);
}
if($data=="bb33"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb34"]
],
]
])
]);
}
if($data=="bb34"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"ما هو الشىء الذى يوجد في القرن مرة و في الدقيقة مرتين ولا يوجد في الساعة ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"حرف القاف",'callback_data'=>"bb35"]
],
[
['text'=>"العام",'callback_data'=>"dev_i"]
],
[
['text'=>"الشهر",'callback_data'=>"dev_a"]
],
]
])
]);
}

if($data=="bb35"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجابتك صحيحه 🌝💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb36"]
],
]
])
]);
}
if($data=="bb37"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"يسمع بلا أذن ويتكلم بلا لسان فما هو ؟ ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"التليفون",'callback_data'=>"bb38"]
],
[
['text'=>"النحل",'callback_data'=>"dev_i"]
],
[
['text'=>"الجراد",'callback_data'=>"dev_a"]
],
]
])
]);
}
if($data=="bb38"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"اجاباتك صحيحه 😍💚",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"• متابعه ",'callback_data'=>"bb39"]
],
]
])
]);
}
if($data == 'bb39' ){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>'
- انتهت العبه
- اضغط على اعادة اللعب لاعادة لعبه مره اخرى
- اضغط ع القائمة  الرئيسية لروئية باقي الالعاب.
-',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']],   
[['text'=>'• اعادة الـعبة 🚡','callback_data'=>'hzo']],   
]    
])
]);
}
#المليون
if($data=="mle"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- لعبة من سيربح المليون
- اضغط على زر الدء لبدء العب الان
- اضغط على زر القائمة الرئيسية للرجوع
-
",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"• ابدء",'callback_data'=>"1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']]
]
])
]);
}

if($data=="🔙"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"
- لعبة من سيربح المليون
- اضغط على زر الدء لبدء العب الان
- اضغط على زر القائمة الرئيسية للرجوع
-",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- ابدء 👋🏻",'callback_data'=>"1"]],
[['text'=>'القائمة الرئيسية','callback_data'=>'ffffm']]
]
])
]);
}
if($data=="❌"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✖️┊اجـابـتـك كانـت خـاطـئـة لـلاسـف‼️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"- رجوع",'callback_data'=>"🔙"]
],
]
])
]);
}
if($data=="✖"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"✖️┊لـقـد خـسـرت لـلاسـف اجـابـتـك كـانـت خـاطـئـه‼️",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"- رجوع",'callback_data'=>"🔙"]
],
]
])
]);
}

if($data=="1"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊مـا هـي عـاصـمـة الـعـراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"كركوك",'callback_data'=>"❌"]
],
[
['text'=>"بغداد",'callback_data'=>"2"]
],
[
['text'=>"بصره",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="2"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"3"]
],
]
])
]);
}
if($data=="3"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم عدد فقرات عنق الزرافة",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"سبعه",'callback_data'=>"4"]
],
[
['text'=>"خمسه",'callback_data'=>"✖"]
],
[
['text'=>"ثلاثه",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="4"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"5"]
],
]
])
]);
}
if($data=="5"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم قلب للأخطبوط",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"قلب واحد",'callback_data'=>"❌"]
],
[
['text'=>"ثلاث قلوب",'callback_data'=>"6"]
],
[
['text'=>"قلبان",'callback_data'=>"✖"]
],
]
])
]);
}

if($data=="6"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"7"]
],
]
])
]);
}
if($data=="7"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ما هو المرض الذي اطلق عليه الموت الاسود",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الصرطان",'callback_data'=>"❌"]
],
[
['text'=>"السل",'callback_data'=>"✖"]
],
[
['text'=>"الطاعون",'callback_data'=>"8"]
],
]
])
]);
}
if($data=="8"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"9"]
],
]
])
]);
}
if($data=="9"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهو اكبر اقتصاد للمواد المحترقه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"الفحم",'callback_data'=>"10"]
],
[
['text'=>"البانزين",'callback_data'=>"✖"]
],
[
['text'=>"الغاز",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="10"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"11"]
],
]
])
]);
}

if($data=="11"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم دام حكم العثمانيون الثالث في العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"85 عاما",'callback_data'=>"12"]
],
[
['text'=>"80 عاما",'callback_data'=>"❌"]
],
[
['text'=>"90 عاما",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="12"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"13"]
],
]
])
]);
}
if($data=="13"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊من هو خاتم الانبياء ",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"النبي محمد",'callback_data'=>"14"]
],
[
['text'=>"النبي عيسئ",'callback_data'=>"❌"]
],
[
['text'=>"النبي ابراهيم",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="14"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"15"]
],
]
])
]);
}
if($data=="15"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع السودان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اسيا",'callback_data'=>"✖"]
],
[
['text'=>"افريقا",'callback_data'=>"❌"]
],
[
['text'=>"اوربا",'callback_data'=>"16"]
],
]
])
]);
}

if($data=="16"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"17"]
],
]
])
]);
}
if($data=="17"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم عدد محافظات العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"20",'callback_data'=>"❌"]
],
[
['text'=>"22",'callback_data'=>"✖"]
],
[
['text'=>"18",'callback_data'=>"18"]
],
]
])
]);
}
if($data=="18"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عاصمة فرنسا",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"باريس",'callback_data'=>"19"]
],
[
['text'=>"لندن",'callback_data'=>"❌"]
],
[
['text'=>"واشنطن",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="19"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"20"]
],
]
])
]);
}
if($data=="20"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم هو عدد ايام السنه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"360",'callback_data'=>"21"]
],
[
['text'=>"350",'callback_data'=>"❌"]
],
[
['text'=>"370",'callback_data'=>"✖"]
],
]
])
]);
}

if($data=="21"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"22"]
],
]
])
]);
}
if($data=="22"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهو اسم صوت الحصان",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"نهيق",'callback_data'=>"❌"]
],
[
['text'=>"صهيل",'callback_data'=>"23"]
],
[
['text'=>"عواء",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="23"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"24"]
],
]
])
]);
}
if($data=="24"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي عملة مصر",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"دينار",'callback_data'=>"❌"]
],
[
['text'=>"دولار",'callback_data'=>"✖"]
],
[
['text'=>"جنيه",'callback_data'=>"25"]
],
]
])
]);
}
if($data=="25"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"26"]
],
]
])
]);
}

if($data=="26"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع محافظة الرقه",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"سوريا",'callback_data'=>"27"]
],
[
['text'=>"مصر",'callback_data'=>"❌"]
],
[
['text'=>"الاردن",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="27"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"28"]
],
]
])
]);
}
if($data=="28"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع محافظة ذيقار من العراق",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"شمال",'callback_data'=>"❌"]
],
[
['text'=>"جنوب",'callback_data'=>"29"]
],
[
['text'=>"وسط",'callback_data'=>"✖"]
],
]
])
]);
}
if($data=="29"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"30"]
],
]
])
]);
}
if($data=="30"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ماهي اول غزوه في الاسلام",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"بدر",'callback_data'=>"31"]
],
[
['text'=>"احد",'callback_data'=>"❌"]
],
[
['text'=>"الخندق",'callback_data'=>"✖"]
],
]
])
]);
}

if($data=="31"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"32"]
],
]
])
]);
}
if($data=="32"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊اين تقع البرتغال",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اسيا",'callback_data'=>"❌"]
],
[
['text'=>"افريقيا",'callback_data'=>"✖"]
],
[
['text'=>"اوربا",'callback_data'=>"33"]
],
]
])
]);
}
if($data=="33"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"34"]
],
]
])
]);
}
if($data=="34"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊كم ساعة في اليوم الواحد؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"24",'callback_data'=>"35"]
],
[
['text'=>"26",'callback_data'=>"✖"]
],
[
['text'=>"22",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="35"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"اكمل",'callback_data'=>"36"]
],
]
])
]);
}
if($data=="37"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"❓┊ما اسم المكان الذي يسكن فيه النحل؟",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[
['text'=>"خليه",'callback_data'=>"38"]
],
[
['text'=>"بيت",'callback_data'=>"✖"]
],
[
['text'=>"جحر",'callback_data'=>"❌"]
],
]
])
]);
}
if($data=="38"){
bot('editMessageText',[
'chat_id'=>$chat_id,
'message_id'=>$message_id,
'text'=>"احسنت اجابتك صحيحه 👋🏻💘",
'parse_mode'=>'MARKDOWN',
'disable_web_page_preview'=>'true',
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"اكمل",'callback_data'=>"ffffm"]],
]])]);}

if($data == 'ffffm' ){
bot('editMessageText',[
'chat_id'=>$chat_id2,
'message_id'=>$message_id,
'text'=>"
- أهلاً بك في بوت الالعاب الجديد 👋🏻
- البوت يحتوي على مجموعه من الالعاب
- لـ استخدام البوت يجب عليك
- اختيار نوع العبه ثم الضغط ع زر ابدا
- اختر العبه الان وابدء بالعب

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>'- من سيربح المليون','callback_data'=>"mle"],['text'=>'- لو خيروك','callback_data'=>'lo']],
[['text'=>"- لعبة الحوت الازرق",'callback_data'=>'hot']],
[['text'=>'- المحيبس','callback_data'=>'mhb'],['text'=>'- حزورة بليره','callback_data'=>'hzo']],
]])]);}

