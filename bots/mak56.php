<?php#*wataw*

if($start=="non"){
$start="
♥️ اهـلا بـك عزيزي .
📖 فـي بـوت اخذ خيره من القرآن .
🌐 يمڪنك اختيار احد الارقام وانتظر .
🔖 البـوت معمول بنية صافيه .
📋 اي خيرته مضبوطه 100% .
";}

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$text = $message->text;
$first_name = $message->from->first_name;
$chat_id = $message->chat->id;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;

if($text == '/start' ){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🖤 أخـذ خـيـرة .",'callback_data'=>"1g"]],
[['text'=>"♥️ ڪيفية أخـذ خـيـرة .",'callback_data'=>"2"]],
]])]);}

if ($data == "1"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
 'text'=>"$start

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🖤 أخـذ خـيـرة .",'callback_data'=>"1g"]],
[['text'=>"♥️ ڪيفية أخـذ خـيـرة .",'callback_data'=>"2"]],
]])]);}

if ($data == "2"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
 'text'=>"
- الفاتحة 1 مرة 💜.
- القدر 3 مرات 🖤.
- الصلاة على النبي 3 مرات
- أنـــوي ♥️
- واختارو رقم من ( 1 لـ 60 ) 💙.
————————————
$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_to_message_id'=>$message->message_id,
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "1g"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اختارو رقم من ( 1 لـ 60 ) 💙.",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode(['inline_keyboard' => [
[['text'=>"1",'callback_data'=>"f1"],['text'=>"2",'callback_data'=>"f2"]],
[['text'=>"3",'callback_data'=>"f3"],['text'=>"4",'callback_data'=>"f4"]],
[['text'=>"5",'callback_data'=>"f5"],['text'=>"6",'callback_data'=>"f6"]],
[['text'=>"7",'callback_data'=>"f7"],['text'=>"8",'callback_data'=>"f8"]],
[['text'=>"9",'callback_data'=>"f9"],['text'=>"10",'callback_data'=>"f10"]],
[['text'=>"11",'callback_data'=>"f11"],['text'=>"12",'callback_data'=>"f12"]],
[['text'=>"13",'callback_data'=>"f13"],['text'=>"14",'callback_data'=>"f14"]],
[['text'=>"15",'callback_data'=>"f15"],['text'=>"16",'callback_data'=>"f16"]],
[['text'=>"17",'callback_data'=>"f17"],['text'=>"18",'callback_data'=>"f18"]],
[['text'=>"19",'callback_data'=>"f19"],['text'=>"20",'callback_data'=>"f20"]],
[['text'=>"21",'callback_data'=>"f21"],['text'=>"22",'callback_data'=>"f22"]],
[['text'=>"23",'callback_data'=>"f23"],['text'=>"24",'callback_data'=>"f24"]],
[['text'=>"25",'callback_data'=>"f25"],['text'=>"26",'callback_data'=>"f26"]],
[['text'=>"27",'callback_data'=>"f27"],['text'=>"28",'callback_data'=>"f28"]],
[['text'=>"29",'callback_data'=>"f29"],['text'=>"30",'callback_data'=>"f30"]],
[['text'=>"31",'callback_data'=>"f31"],['text'=>"32",'callback_data'=>"f32"]],
[['text'=>"33",'callback_data'=>"f33"],['text'=>"34",'callback_data'=>"f34"]],
[['text'=>"35",'callback_data'=>"f35"],['text'=>"36",'callback_data'=>"f36"]],
[['text'=>"37",'callback_data'=>"f37"],['text'=>"38",'callback_data'=>"f38"]],
[['text'=>"39",'callback_data'=>"f39"],['text'=>"40",'callback_data'=>"f40"]],
[['text'=>"41",'callback_data'=>"f41"],['text'=>"42",'callback_data'=>"f42"]],
[['text'=>"43",'callback_data'=>"f43"],['text'=>"44",'callback_data'=>"f44"]],
[['text'=>"45",'callback_data'=>"f45"],['text'=>"46",'callback_data'=>"f46"]],
[['text'=>"47",'callback_data'=>"f47"],['text'=>"48",'callback_data'=>"f48"]],
[['text'=>"49",'callback_data'=>"f49"],['text'=>"50",'callback_data'=>"f50"]],
[['text'=>"51",'callback_data'=>"f51"],['text'=>"52",'callback_data'=>"f52"]],
[['text'=>"53",'callback_data'=>"f53"],['text'=>"54",'callback_data'=>"f54"]],
[['text'=>"55",'callback_data'=>"f55"],['text'=>"56",'callback_data'=>"f56"]],
[['text'=>"57",'callback_data'=>"f57"],['text'=>"58",'callback_data'=>"f58"]],
[['text'=>"59",'callback_data'=>"f59"],['text'=>"60",'callback_data'=>"f60"]],
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f1"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندك رزق أو قسمة أو سفرة أو فلوس راح توصلك وأهتم بالمقابيل لان يحبك وأهتم بنفسك عندك فرحة قريبة ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f2"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"دائما حزين ومهموم انت راح يفرج همك وراح ترتاح واكفلك الامام علي (عليه السلام) أهتم باهلك️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f3"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"كو عندج نذر وفي وعندج قسمة حلوة بس اول شيء رح ياخذون رايج يلة يتقدمون والشخص تجارته حلوة ورح تنسعدين ان شاء الله ، الله دائما ينقذج من شغلات متتوقعين انو تخلصين لان انتي نظيفة وع نياتج .️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f4"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"منتظره شي راح يجيج بس احذري تكولين للناس لأن انتي كول ما تكولين شغله لأحد تخرب قللي ثقتج بالناس واكو شخص بحياتج لا تنطي أكبر من حجمه ترا كولش شايف نفسه عليج انتي ناخيه العباس ومراح يردج وراح تحلمين حلم حلو بشغله انتي مشغول بالج عليه بس خففي من العصبيه.️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f5"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"لاتفقد الأمل بالله حلمك راح يتحقق راح تجيك أيام حلوة ولاتحجي سرك لأحد لان اكو ناس تكرهك .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f6"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"انت اكوو عندك شخص يحبك اهواي بس اكو ناس دتخرب عليك عندك مشكلة بس راح تنحل بفضل صبرك ودعائك️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f7"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"لاتمشي بهذا الطريق بي خطر عليك انتضر واكفلك الامام الكاظم (عليه السلام) انت طالبة بشغلة وراح تصير بس اكو ناس ابتعد عنهم ناس قريبين عليك .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f8"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندك شي خايف منه وتفكر بي هواي انت نخيت ابو فاظل (عليه السلام) وابو فاظل راح يخلصها الك عندك عدو احذر منه راح يااذيك .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f9"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندج ندم على شغله ودائمن تحجين بلخسارة لتخافين ولا تضوجين
ان شاء الله فترة وتعدي عندج مكان تردين ترحين اله ومحتارة روحى بي خير الج.
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f10"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"واكفلج موسى ابن جعفر ونادبته على شغله وعندج نصيب قريب وفرحه من اقرب الناس الج ودائمن لتثقين بلمقابيل بسهوله واحفظي سرج وظالمينج لمنج وبيج.
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f11"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندج بعد 12 يوم او 10 ايام بشارة تفرحج اعمال متعبتج شغله غيرة من النساء وقسمتج دائمن متعرقله تفكرين اهواية تعبانه انطي مجال لنفسج لان تعبين صحتج
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f12"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"أنت شخص طيب وتنحب بس حظ ماعندك ، عندك شغلة طالبها من أم البنين وقريبا راح تتحقق وراح تفرح .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f13"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندج بشارة من موسى ابن جعفر وعندج فرحه عن قريب نذر ناذرته ومموفيته خبر راح يجيج يفرحج دائمن متعوبه من اقرب الناس الج .",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f14"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندج موظوع بي سؤال وجواب وعندج شك ابالج وممرتاحه فراق صاير بينج وبين ناس وان شاء الله اكو رجوع قريب ودائمن محتارة بابسط الامور.️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f15"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"فتح قريب ان شاء الله وعندج نصيب واكفلج امير المؤمنين دخيله وصلي ركعتين قضاة حاجة دير بالج من ناس قريبين عليج يمشون وياج بغير نيه.",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f16"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندج خبر هذا الاسبوع يفرحج اشعلي شموع لمريم العذراء وعندج نصر من اهل البيت واكو شغله متعبتج وضايع حقج بيهة راح يصير بيان من اهل البيت ان شاء الله.️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f17"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اكو زعل وصلح وبشاره خير حلوة بعد ماجنت بشده اكو تفائل و امور للاحسن وخبر حلو وقريب وقضاء حاجه. ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f18"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"خوف وقلق وتردد اكو رزق قريب اكو سفر اكو خطوبه او رجوع ويه شخص واحذر المقربين بسبب الحقد️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f19"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"ايام حلوة جايتج رغم الدموع قبل ايام اكو بشاره خير من شريفه ع ناخيتها انتي اكو خبر زواج . ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f20"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"_اكو بشاره خير اكو قلق عندك هم بس وراها تغير حال الك صاير شي وياك ضايج منه لتقلق الشي التريدة يصير اكو احد مريض او انت مريض راح تتحسن حالته واكو بشاره من النبي محمد ص .️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f21"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اكو عندج قضاء حاجه هلايام تصير الج اكو ظلم عليج شكد مامهمومه انتي الج ايام جايتج حلوة وفرج قريب️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f22"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اكو زعل وصلح وبشاره خير حلوة بعد ماجنت بشده اكو تفائل و امور للاحسن وخبر حلو وقريب وقضاء حاجه . ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f23"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"الشي النويت عليه يتاخر يله يصير اكو دموع نفسيتك تعبانه بس الج فرج هاي الايام شي حيفرحك وممتوقعه يصير كلش حتفرح بي ان شاء الله. ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f24"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"_عندك ندم ع شي وتحس نفسك ضعيف وتجي ساعات تأيس من كلشي الك بشاره ناخي الزهراء بشارتك منها .",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f25"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اشوفج طالبه حاجه من ام البنين ع اكو عندج منها بشاره ورزق فلوس حتوصلج هلفتره واكو شي ناوية عليه يصير بس شوي صبر️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f26"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اشوف عليك نفس وعيون صايره عندك عكوسات بحياتك ولتريدة يصير عكسه بس اصبر الك فرج. ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f27"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"_تعب وقلق وتفكير بس الج فرحه بحياتج كلش قريبه واكو حدث بحياتج راح يغيرج للاحسن والج اتصال من شخص يفرحج️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f28"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"الج بشاره قريبه من الامام العباس ع اكو شي بالج راح يصير بس صبر شويه. ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f29"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"
_اشوف حزن بكلبك تدعي هوايه الك دعوة مستجابه والك رجوع شخص هاي الفتره واكو عندك زواج قريب اكو بشاره خير هاي الايام .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f30"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"_اكو عندك تغير حال اكو فرج الك انت مهموم وابشارتك من الامام الكاظم ع قريبة ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f31"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"_عندج تسير بامر خايفة منه واكو توفيق بشغلة بسبب دعاء امج اشخاص يستهزؤن بيج بس من يشوفون تتوفقين كل فترة ينصدمون بس يضهرولج المحبة وهمة فرحانين بس العكس شغلات تشوفيهه وتخافين تحجين لتترددين عن شيء وخاصة اذا حق كولي ولتخافين 
والي تفكرين بي يصير باذن اللّهہ .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f32"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"الثقه الزايده شي ماينراد ابدا احذر منها اكو كلام او نفاق او احد يريد يوكعك بمشكله انتبه ،اكو مريض جنتوا شايلين همه راح يتحسن قريبا واكو كذب صاير ،رزقك محدود رغم انو انت شخص منفوس وعليك حسد.
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f33"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"انت طيب وتصدك بكل شي لذلك دايما توكع بلمشاكل ،الصراحه الزايده مو بكل الاوقات ،اكو خلاف وجدل انت عندك واحد احذر منه لان بي ندم بعدين ،اكو خبر حلو واكو بيع وشراء️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f34"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"ايمانك كولش قوي بس اكو حرام رح يصير وانت راح تعرف بي وتسكت عنه ،عندك عزه نفس ويحسبولك حساب انت حضك حلو بس محسود ومنفوس ،اكو علاقه جديده لو شخص انتهت علاقتك بي بس راح يرجع وتصالحون ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f35"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اكو زواج او تحضير لعرس قريب ،انت مستبد وعنيد بس دايما انت الي تخسر من وره عنادك ،لازم توازن بين الامور ،اكو شخص يعارضك دايما لمصلحتك وانت شخص عصبي بس اكو فرج قريب وفرحه️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f36"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"سوء تفاهم وانت الي غلطان اعترف بغلطك لان انت شخص صريح عندك نذر راح توفي وعندك رزق حلو رغم انو انت شخص منفوس .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f37"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"ابشاره من ام البنين ع نذر وراح توفون بي أن شاء الله اكو قسمه حلوه للمتزوجين والي ممتزوج اكو خبر تعيين او رزق قريب لكن انتبهوا لصحه احد مقرب لكم.
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f38"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"مغثوث ومضايق واتحس نفسك مهموم اكو تصرف غلط عندك وعاطفيه زايده ولكل يستغل طيبه قلبك وانت هواي تدعي واكو شخص زعلان عليك راح يبرللك والصلح راح يكون قريب شايل هم ماده بس الفرج قريب️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f39"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"رزق قريب او تعيين احذروا من الاصدقاء اكو موضوع صار قبل فتره راح ينفتح هسه بي اوراق او نقله من مكان لمكان واكو زواج .

️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f40"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"صاحب سمعه طيبه ،عندة ندم هواي ويحس نفسه ضعيف وتجي ساعات ييأس من كولشي رغم هو عنده بشاره قريبه تجي عن طريق اتصال️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f41"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"زعل وصلح وبشاره حلوه بعد ماكنت بشده اكو تفاؤل وامور للاحسن وخبر حلو قريب بس رزقك محدود .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f42"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"خوف وقلق وتردد رغم اكو رزق قريب وطريق حلو وسفر وزياره او خطوبه او رجوع شخص زعلان عن قريب احذر من احد لمقربين بسبب غيرته .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f43"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"ايام حلوه وتغيير للاحسن رغم الدموع والعصبيه الي كانت عندك بلفتره الماضيه وقراراتك كانت مو بمحلها واكو وعود كذب واكو شمات مقربين بس عندك نصر لان ع نيتك وقلبك طيب اكو خبر حلو وللبنات اكو خبر حمل لو تسمعون بحامل .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f44"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اكو صبر وراه فرج الشغله الي نويتي عليها خليه بيد ربج ولاتفكرين بيه وربج يقدم الي بي صالح وعندج شغله تخص شخصين قريبين عليج وعندج رزق قريب ان شاء الله رددي امانه موسى ابن جعفر عندج مراد من باب الحوائج .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f45"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"مخنوكه ومهمومه لكن بعد فتره ترتاحين
اكو شخص قاسي قلبه لاجادليه عوفيه
توكلي على الله وعندج شغله موزينه عوفيه متفيدج واكو ناس ضالميج رددي حسبي الله ونعم الوكيل .

️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f46"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"️️الشغله الي نويتي عليها مقضيه وقريبه بس اكو مكان لاتروحيله موزين شغله سحر وشعوذه ويجوز تعرفين ناس تروح لهيح مكانات لازم تمنعيهم رددي يارب السموات والارض .

",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f47"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اكو كذب وتحذير وناس مقدميلج نصيحه التزمي بيه رددي كهيعص
عندج خطوبه قريبه بالاشهر الجايه زينه وصالحه الج هواي تحبين الخير وعندج اعمال صالحه


️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f48"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"واكعه بمشكله ربج ينجيج منها ويطلعج واكو شخص صعب لازم ينهدي ويترك المعاصي محتاره بين امرين لكن اثنين بيهن صالح وخير الحاجه الي نويتي عليها مقضيه بعد فتره ان شاء الله رددي يانور ياالله .
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f49"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"الحاجه الي نويتي عليها مابيها خير
اكو ناس ديكذبون عليج وعليج سحر وتعبانه هواي رددي ياغفور يارحيم .
",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f50"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"نويت ع عمل سوف ينجز بحكمه واتقان عليك بلزك والصبر والحكمه مع اعدائك.               ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f51"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"كتم سر قريبا ستبوح بقوه عاطفيتك غالبه عليك ع قراراتك مخلص في عملك تنال كل ماتتمنى.                        


10ــ عزيزي لاتقلق سوف تحصل علا ماتريد ذاته يوم.                       
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f52"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"حقيقة تظهر لك رزقك منفوس يتملكون عليك بالسوء ستنال قريبآ مرتبه عاليه.                                        ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f53"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"اخبار حلووه وبشاره قريبه ورزق رغم قليل هذاي الفتره يجيج/ك عندك شخص راح ينفذ وعده الج /ك اكوو فرح قريب️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f54"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"انـته انسان قوي ومتفائل انسان طموح راح تسمع خبر يفرحك عن قريب لاتئيس انـته انسان ناجح بحياتك ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f55"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"انـته تحس روحك تعبان ومئيس من رحمة الـله بالعكس حياتك طبعيه خليك متفائل عــًْ͜ـہزيـٰٚـِْہزي لاتغلق سوفه تتحقق امنياتك عن قريب.    ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f56"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"تـعبان ومريض تائمن وتفكر اهوايي وتجي ساعات تحس انوو كـلشي واكف والوقت مايتحرك اكوو تحسن بحياتك ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f57"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"مازالت الهموم على قلبك عندك شخص رفيع المستوه اطلب مساعدته راح ينجيك.                               

7ــ واقف وسط اعداء ابشر بالنصر وهلاك كل من ضلمك.                            
️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f58"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندك ابشاره من الامام العباس انته  دائمن تدعي بالامام اكوو الك زواج اوو خطوبه اوو مولود عندك رزق انـته شخص مئمن جدا ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f59"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"انـته انسان هادئ جدآ وتحب الخير الاخرين عندك نجاح من دراسه عندك مريض راح يتحسن ️️",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

if ($data == "f60"){
bot('editmessagetext',['chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"عندك ابشاره من الامام العباس انته  دائمن تدعي بالامام اكوو الك زواج اوو خطوبه اوو مولود عندك رزق انـته شخص مئمن جدا ",
'parse_mode'=>"MarkDown",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"📋 القائمة الرئيسية .",'callback_data'=>"1"]],
]])]);}

