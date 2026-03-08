<?php#*wataw*

if($start=="non"){
$start="♥️ اهـلا بـك عزيزي .";}

// $update = json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message = $update->message;
$text = $message->text;
$first_name = $message->from->first_name;
$chat_id = $message->chat->id;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$message_id = $update->callback_query->message->message_id;

if($text == '/start' ){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"$start

$txtfree",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"html",
'disable_web_page_preview'=>true,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"ابدا",'callback_data'=>"ffffm"]],
]])]);}

if ($data == "zzzzu"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
 'text'=>"
♥️ اهـلا بـك عزيزي .
📖 فـي بـوت الكشف
———————————",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>$mode,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"🖤 ابدا",'callback_data'=>"ffffm"]],
]])]);}

if ($data == "ffffm"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"ا
اخـتر اول حـرف من اسـمك
  ليتم الكشف عـن ماتريد
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"أ",'callback_data'=>"1"],
['text'=>"ب",'callback_data'=>"2"]],
[['text'=>"ت",'callback_data'=>"3"],
['text'=>"ث",'callback_data'=>"4"]],
[['text'=>"ج",'callback_data'=>"5"],
['text'=>"ح",'callback_data'=>"6"]],
[['text'=>"خ",'callback_data'=>"7"],
['text'=>"د",'callback_data'=>"8"]],
[['text'=>"ذ",'callback_data'=>"9"],
['text'=>"ر",'callback_data'=>"10"]],
[['text'=>"ز",'callback_data'=>"11"],
['text'=>"س",'callback_data'=>"12"]],
[['text'=>"ش",'callback_data'=>"13"],
['text'=>"ص",'callback_data'=>"14"]],
[['text'=>"ض",'callback_data'=>"15"],
['text'=>"ط",'callback_data'=>"16"]],
[['text'=>"ظ",'callback_data'=>"17"],
['text'=>"ع",'callback_data'=>"18"]],
[['text'=>"غ",'callback_data'=>"19"],
['text'=>"ف",'callback_data'=>"20"]],
[['text'=>"ق",'callback_data'=>"21"],
['text'=>"ك",'callback_data'=>"22"]],
[['text'=>"ل",'callback_data'=>"23"],
['text'=>"م",'callback_data'=>"24"]],
[['text'=>"ن",'callback_data'=>"25"],
['text'=>"ه",'callback_data'=>"26"]],
[['text'=>"و",'callback_data'=>"27"],
['text'=>"ي",'callback_data'=>"28"]],
]])]);}

if ($data == "1"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من اسمك إلى أنك لست بالدرجة الأولى رومنسياً، ولكنك عملي إلى حد بعيد. ما تخطط له هو ما تناله ولكنك غير صبور. وكذلك فإنك لا تطير فرحاً بأي شخص يحاول أن يكون لطيف معك ويتودد إليك.
بالنسبة إلي شخصيتك فإنك رزين الطبع ، جذاب ، مهذب ، متفتح . وحتى تستمر في علاقاتك، فأنت تحتاج إلى الحب وتحتاج بشدة إلي الإحساس بأنك مقدر من الطرف الأخر.
إختياراتك جيدة جداً ولا يؤدي إلا للمشاكل ولكنك بالرغم من كونك قنوع فأنك أناني.",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "2"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من إسمك إلى انك تتمتع بشخصية رومانسية . تحب أن تتلقي الهدايا من الحبيب كتعبير عن حبه لك. كذلك فإنك تريد أن تكون مدللاً ولكنك أيضاً تعرف كيف تدلل حبيبك. صبور جدا حتى تحقق ماتتمناه . تستطيع التحكم في مشاعرك وأحاسيسك ورغاباتك. تحتاج إلى أحاسيس وخبرات جديدة دائماً.
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "3"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من إسمك إلى انك إجتماعي وأنه من المهم لديك أن يتغلغل في حياتك علاقة عاطفية. تنظر إلى حبيبك بأكثر من نظرة فهو الحبيب والرفيق والصديق.
يشير الحرف الأول من اسمك إلى أنك أيضاً حساس جداَ تحتاج إلى شخص يحبك أو بالأحرى يعشقك ، وإذا لم يحدث ذلك فأن لديك من الصبر ما يكفي حتى تحقق ذلك.",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "4"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من أسمك إلى أنك مندفع المشاعر ، ففي اللحظة التي تضع شخصاً ما في مخيلتك ليكون حبيبك فإنك لا تتخلي عن هذه الرغبة بسهولة.
وعلى الرغم من ذلك، فإنك محب للآخرين مهتم بمشاكلهم. فلو وجدت أن شخصاً في أزمة، فإن ذلك يضايقك فتحاول جاهداَ حل هذه المشكلة أو الأزمة . فأنت عطوف ، مخلص ، وحساس في علاقاتك العاطفية ، ولكن أحياناً يتحول الحب لديك إلي حب إمتلاك وغيرة .
طبعك حاد جداً ، موهوب وتتميز بروح المداعبة. حين يحاول الآخرون التقرب منك، فإنهم لايستطيعون مقاومة ما يرونه بداخلك. ولكنك تغير من الآخرين وتفقد أعصابك.
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "5"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من إسمك إلى أن إحتياجك الأساسي هو أن تتحدث ويُستمع إليك ، فإذا الشخص الذي تواعده ليس بمستمع جيداً فلن تستطيع التواصل معه. فأنت تحتاج إلي صديق و رفيق أكثر منه حبيب.
التحدي مهم جداً لك. ولكن إذا سلمت فؤادك لشخص، ما فإنك مخلص إلي أبعد الحدود. تهوي القراءة خاصةً قبل النوم.
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "6"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من إسمك إلى أنك مثالي وعاطفي ، تختار محبوبك بعناية تبحث عن أفضل شريك لحياتك يمكن أن تتعرف عليه. فحين تتعهده بحبك له فإنك مخلص جداً ، فأنت حساس وعاطفي ولكن بغير إعلان.
وحين يصل الأمر إلى العلن، فأنت إستعراضي ، مسرف ، ومع ذلك شهم ، شجاع ، أنيق . فأنت خلفت للرومانسية. وأكثر ما تفضل مشاهدته هي المشاهد الرومانسية التراجيدية . تتمتع بصفة الكرم في حبك.",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "7"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من إسمك إلى أنه من الصعب إرضاءك تبحث عن الكمال داخل نفسك وداخل حبيبك. تستجيب إلي حبيب يعادلك في الفكر والعقلانية إن لم يكن يفوقك وفي نفس الوقت يعزز من ثقتك بنفسك.
إنك حساس وتعرف كيف تصل إلى ذروة الأحساس والإثارة لأنك بطبعك مدقق وموسوس. نشيط للغاية ولا تحس بالإرهاق ولا بالتعب أبداً . بالنسبة لك واجباتك ومسئولياتك تحتل المكانة الأولي في حياتك فبل أي شيء آخر. ولهذا فقد يكون من الصعب عليك التقرب عاطفياً ممن حولك.",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "8"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من إسمك إلى أنك تحتاج إلى شخص يزيد إستمتاعك بالحياة و باللهو وفي كل شيء تبحث عنه. من صفاتك الكرم مع الحبيب الذي إلتزمت بوعدك له. فأنت محب ، حنون ، رقيق ، وقوي. مواهبك تعد في الواقع إستثمار لشريك حياتك .
تميل إلى الحرص في كل تصرفاتك وكذلك حذر في علاقاتك حيث تؤمن بأنك لابد وأن تحافظ علي نفسك . وتتميز بأنك حبيب حساس وصبور. فأنت تتحمل وتصبر إلى أن يصبح كل شيء وفق هواك ورغبتك. تجاهد في أن تصل إلى الكمال ، صعب إرضائك ، وقوي في إعتناق مبادئك ومعتقداتك.
لا تتأثر بمن حولك ، فلديك خلفياتك الخاصة بك. يعتمد عليك الآخرين دائماً للوقوف بجانبهم في الأزمات. أنت إنسان حالم شغوف بالحياة.
",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "9"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يرمز الحرف الأول من اسمك إلى أنك تحتاج بشدة إلى أن تحب وتُحب وأن يقدر حبك من الطرف الأخر. تتمتع بالرفاهية والأحساس.
تهوي التطلع والبحث. تبحث عن الحبيب الذي يعرف كيف يسعدك حسياً ومادياً ومعنوياً. مملول بطبعك تهوي التغيير وخوض التجارب الجديدة من حين لآخر.
علاقاتك الرسمية لا تطيل في الغالب حيث أنك نوعاً ما غير ملتزم وذلك لأنك تضل غالباً طريقك. لا يعد الأخلاص من سماتك الواضحة إلا أنك مخلص. تهوي الأحاسيس المادية بشكل شره.",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "10"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"أنت تعرف تمام ماذا تريد لكن للأسف أحلامك لا تتحقق الا بعد وقت طويل ولكنك لاتيأس وانت جدآ جذاب وعاطفي ",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "11"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"متسلط لكنك لطيف وأحيانا قاسي ورومنسي لابعد الحدود وفيك شويت عناد جذاب وتدافع من اجل الحق مهما كلف الامر وتحب التغير في روتين حياتك وتحب بصدق",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "12"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"حساس غامض تخفي مشاعرك وعواطفك ولاتعبر عنها أمام أحد",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "13"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"أنت حاد الطبع مسيطر ولكنك تتميز بالسحر والجاذبية والعقلانية",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "14"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"أنت متردد تتصرف بكبرياء تحب المغامرة وسريعا ماتشعر بالحزن وتحب من قلب",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "15"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"يمكن الاعتماد عليك تحمي من تحب بطريقة فعالة",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "16"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"أنت غريب الاطوار مزاجي قد تغرق أحيانا بالحزن",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "17"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"مستقيم تتصرف باقتناع تدافع عن.حقوقك ولاتنتظر شيئا بالمقابل",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "18"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"طموح أفكارك علمية لطيف بشوش لكن سرعان ماتغضب وتصبح شرس  يحب ولايستغنى عن حبيبه وجميل جدآ. وانيق للغايه وگل البشر لٱ تقدر العيش بدونه وگل الناس تحبه وتموت فيه",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "19"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"فضولي وفضوليتك هذه نتيجة نحو الأمور العلمية وعيبك الوحيد افتقادك للدفء أحيانا",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "20"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"تصرفك وأطباعك رائعة وتجذب الآخرين وفي العمل ماهر ومتقن ابتسامتك هي سبب في حب الاخرين لك قد تكون مجروح بعض الشي لكن انت تحب بأخلاص وطيبتك الزائده هي التي تدمر العلاقات لاتؤمن ان احد يستحق انحنائك له",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "21"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"أنت صاحب حظ جيد تنجح في جميع المجالات وتحصل على النتائج الايجابية",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "22"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"فعال لكن قاسي الطباع تدافع عن حقوقك بقوة في العمل تتميز بحسن التدبير😘😍",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "23"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"حبك للسفر والتنقل يؤثر في طبعك أنت بارع في كسب قلوب الاخرين محبوب قلبك طيب تنظر للأمور بإيجابية ولكن عيبك انك تخطط لاشياء تفرقك ببعض الاشخاص ",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "24"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"قلبك كبير وصدرك رحب وإذا أحببت تحب بصدق ناجح في حياتك لا تتراجع بأصعب المواقف",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "25"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"تحاول تتحلى بروح القيادة وانت شخص انقيادي ورائع و محبوب ومبدع وحرفكري حرف من الحروف الهجائية الكل يتمنون يكون حرفهم هو النون ، حتى حرف النون ذكر بالقرآن الكريم 
ن والقلم و ما يسطرون، 
فديت انا هذا الحرف هو مرح وإجتماعي جدآ وقلبه كبير وطيب وشخص مسامح وانيق وكل الصفات تجتمع فيه👍",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "26"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"قيادي واقعي ثابت الخطوات اجتماعي بارع كما انك تلفت الانظار",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "27"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"غالبا ماتساورك الشكوك أنت أهل الثقة لاتسمح ولا تتحمل ارتكاب الاخطاء",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

if ($data == "28"){
bot('editmessagetext',[
'chat_id'=>$chatid,
'message_id'=>$message_id,
'text'=>"أنت انسان غامض في بعض الاحيان ولكنك مخلص في حبك
😎",
'reply_to_message_id'=>$message->message_id,
'parse_mode'=>"MarkDown",
'reply_markup' => json_encode([
'inline_keyboard' => [
[['text'=>"رجـوع",'callback_data'=>"zzzzu"]],
]])]);}

