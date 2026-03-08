<?php#*wataw*

if($start =="non"){
$start="
- 𝒚𝒐𝒘 𝒃𝒓𝒐 🤪🧡 : $name
- 𝒃𝒐𝒕 𝒉𝒂𝒔 𝒎𝒐𝒓𝒆 𝒕𝒉𝒆𝒏 6 𝒇𝒐𝒏𝒕𝒔 
- 𝒔𝒆𝒏𝒅 𝒚𝒐𝒖𝒓 𝒕𝒆𝒙𝒕 𝒂𝒏𝒅 𝒕𝒓𝒚 𝒊𝒕 :)
- 𝒕𝒉𝒆 𝒔𝒕𝒂𝒇𝒇 𝒂𝒅𝒅𝒊𝒏𝒈 𝒍𝒆𝒕𝒕𝒆𝒓𝒔 𝒆𝒗𝒆𝒓𝒚𝒅𝒂𝒚
- 𝒆𝒏𝒋𝒐𝒚 𓈬
- - - - - - - - -
- 𝑨𝑹𝑨𝑩𝑰𝑪 𝑳𝑨𝑵𝑮
- 𝑬𝑵𝑮𝑳𝑰𝑺𝑯 𝑳𝑨𝑵𝑮
- 𝑻𝑬𝑳𝑬𝑮𝑹𝑨𝑴 𝑩𝑰𝑶
- 𝑰𝑵𝑺𝑻𝑨𝑮𝑹𝑨𝑴 𝑩𝑰𝑶
- 𝑪𝑯𝑨𝑵𝑵𝑬𝑳𝑺 𝑩𝑰𝑶 ";}

// $update= json_decode(file_get_contents('php://input')); (Already handled in mak.php)
$message  =$update->message;
$text =$message->text;
$chat_id  =$message->chat->id;
$name =$message->from->first_name;
$user =$message->from->username;
$message_id =$update->message->message_id;
$from_id =$update->message->from->id;
$a = strtolower($text);
$message =$update->message;
$chat_id =$message->chat->id;
$text =$message->text;
$chat_id2 =$update->callback_query->message->chat->id;
$message_id =$update->callback_query->message->message_id;
$data =$update->callback_query->data;
$from_id =$message->from->id;
$id = isset($update->callback_query) ?$update->callback_query->from->id :$update->message->from->id;
$mem = explode("\n",file_get_contents('mem'));
$name =$message->from->first_name;
$cq =$update->callback_query;
$data =$cq->data;
$message_id =$cq->message->message_id;
$mod = file_get_contents("$from_id.json");
$telegram = file_get_contents("$from_id.exe");
date_default_timezone_set('Asia/Baghdad');
$time = date('h:i:s');
$date = date('20y/m/d');
if($message){
if(!in_array($from_id,$mem)){
file_put_contents('mem',$from_id."\n",FILE_APPEND);}}
$mem = explode("\n",file_get_contents('mem'));

if($text == "/start" ){
bot('sendMessage',['chat_id'=>$chat_id,
'text'=>"$start

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>'true',
]);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"𝑺𝒆𝒍𝒆𝒄𝒕 𝒘𝒉𝒊𝒄𝒉 𝒚𝒐𝒖 𝒘𝒂𝒏𝒕.!

$txtfree",
'parse_mode'=>"html",
'disable_web_page_preview'=>'true',
'reply_to_message_id'=>$msid,
'reply_markup'=>json_encode([
'resize_keyboard'=>true,
'keyboard'=>[
[["text"=>"بايوات انستا ま"],["text"=>"بايوات تلي ☽"],["text"=>"بايوات قنوات ❈"]],
[["text"=>""],["text"=>"𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼"]],
[["text"=>"الرموز ☬"]],
]])]);}

if($_GET['s']){
$text ='sssasa';
echo$count = count($text);}
if(!file_exists("$from_id.json")){
if($text !== "بايوات انستا ま" and $text !== "بايوات تلي ☽" and $text !== "بايوات قنوات ❈" and $text !== "" and $text !== "𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼" and $text !== "الرموز ☬" and $text !== "/start"){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text' => "
 - 𝒚𝒐𝒘 𝒃𝒓𝒐 🤪🧡 : $name
- عليك تحديد الامر الذي تريده من الازرار في الاسفل اولا
- بعدها يمكنك الزخرفة
",
'parse_mode' => "MarkDown",
'parse_mode' => "html",
'reply_markup' => json_encode([
'inline_keyboard' =>[
[['text'=>"اضغط هنا",'url'=>"t.me/yyyyi"]],
]])]);}}

if($mod == "eng"){
if ($chat_id != "$admin"){
if($text !='/start' and $text !='الرموز ☬' and $text !== "بايوات انستا ま" and $text !== "بايوات تلي ☽" and $text !== "بايوات قنوات ❈" and $text !== "" and $text !== "𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼" and $text !== "الرموز ☬" and $text !== "/start"){
$items = ['༗','༉','༈','༊','༒','༕','༖','༑','࿅','࿄','࿃','࿂','࿋','࿌','࿐','࿑','࿗','၍','᪥','᪣','⸙','ꫝ','','𖠲','𖠱','𖠰','𖠪','𖠴','𖠿','𖡣','𖡟','𖢺','𖢹','𖢾','𖢿','𖣏','𖣎','𖣍','𖣒','𖣐','𖤊','𖤓','𖤍','𖤇','𖤓','𖤛','𖤥','𖤞','𖤬','𖤴','𖤳','𖤸','𖤽','𖤾','𖤿','𖥇','𖥆','𖥄','𖥂','𖥒','𖥔','𖥕','𖥖','𖥓','𖥤','𖥢','𖥵','𖦋','𓅾','𓆀','𓀋','𓀺','𓀜','𓀃','𓀨','𓃏','𓈬','𓉫','𓊴','𓋌','𓋽','𓋼','𓋷','𓉙','𓎉','𓌴','𓈠'];
$_smile = array_rand($items,1);
$smile =$items[$_smile];
$count = count($text); 
$k = str_replace('a','𝓪',$k); 
$k = str_replace('b','𝓫',$k); 
$k = str_replace('c','𝓬',$k); 
$k = str_replace('d','𝓭',$k); 
$k = str_replace('e','𝓮',$k); 
$k = str_replace('f','𝓯',$k); 
$k = str_replace('g','𝓰',$k); 
$k = str_replace('h','𝓱',$k); 
$k = str_replace('i','𝓲',$k); 
$k = str_replace('j','𝓳',$k); 
$k = str_replace('k','𝓴',$k); 
$k = str_replace('l','𝓵',$k); 
$k = str_replace('m','𝓶',$k); 
$k = str_replace('n','𝓷',$k); 
$k = str_replace('o','𝓸',$k); 
$k = str_replace('p','𝓹',$k); 
$k = str_replace('q','𝓺',$k); 
$k = str_replace('r','𝓻',$k); 
$k = str_replace('s','𝓼',$k); 
$k = str_replace('t','𝓽',$k); 
$k = str_replace('u','𝓾',$k); 
$k = str_replace('v','𝓿',$k); 
$k = str_replace('w','𝔀',$k); 
$k = str_replace('x','𝔁',$k); 
$k = str_replace('y','𝔂',$k); 
$k = str_replace('z','𝔃',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','𝒂',$k);
$k = str_replace('b','𝒃',$k);
$k = str_replace('c','𝒄',$k);
$k = str_replace('d','𝒅',$k);
$k = str_replace('e','𝒆',$k);
$k = str_replace('f','𝒇',$k);
$k = str_replace('g','𝒈',$k);
$k = str_replace('h','𝒉',$k);
$k = str_replace('i','𝒊',$k);
$k = str_replace('j','𝒋',$k);
$k = str_replace('k','𝒌',$k);
$k = str_replace('l','𝒍',$k);
$k = str_replace('m','𝒎',$k);
$k = str_replace('n','𝒏',$k);
$k = str_replace('o','𝒐',$k);
$k = str_replace('p','𝒑',$k);
$k = str_replace('q','𝒒',$k);
$k = str_replace('r','𝒓',$k);
$k = str_replace('s','𝒔',$k);
$k = str_replace('t','𝒕',$k);
$k = str_replace('u','𝒖',$k);
$k = str_replace('v','𝒗',$k);
$k = str_replace('w','𝒘',$k);
$k = str_replace('x','𝒙',$k);
$k = str_replace('y','𝒚',$k);
$k = str_replace('z','𝒛',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','𝓪',$k);
$k = str_replace('b','𝓫',$k);
$k = str_replace('c','𝓬',$k);
$k = str_replace('d','𝓭',$k);
$k = str_replace('e','𝓮',$k);
$k = str_replace('f','𝓯',$k);
$k = str_replace('g','𝓰',$k);
$k = str_replace('h','𝓱',$k);
$k = str_replace('i','𝓲',$k);
$k = str_replace('j','𝓳',$k);
$k = str_replace('k','𝓴',$k);
$k = str_replace('l','𝓵',$k);
$k = str_replace('m','𝓶',$k);
$k = str_replace('n','𝓷',$k);
$k = str_replace('o','𝓸',$k);
$k = str_replace('p','𝓹',$k);
$k = str_replace('q','𝓺',$k);
$k = str_replace('r','𝓻',$k);
$k = str_replace('s','𝓼',$k);
$k = str_replace('t','𝓽',$k);
$k = str_replace('u','𝔂',$k);
$k = str_replace('v','𝓿',$k);
$k = str_replace('w','𝔀',$k);
$k = str_replace('x','𝔁',$k);
$k = str_replace('y','𝓾',$k);
$k = str_replace('z','𝔃',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','ᴬ',$k);
$k = str_replace('b','ᴮ',$k);
$k = str_replace('c','ᶜ',$k);
$k = str_replace('d','ᴰ',$k);
$k = str_replace('e','ᴱ',$k);
$k = str_replace('f','ᶠ',$k);
$k = str_replace('g','ᴳ',$k);
$k = str_replace('h','ᴴ',$k);
$k = str_replace('i','ᴵ',$k);
$k = str_replace('j','ᴶ',$k);
$k = str_replace('k','ᴷ',$k);
$k = str_replace('l','ᴸ',$k);
$k = str_replace('m','ᴹ',$k);
$k = str_replace('n','ᴺ',$k);
$k = str_replace('o','ᴼ',$k);
$k = str_replace('p','ᴾ',$k);
$k = str_replace('q','ᵟ',$k);
$k = str_replace('r','ᴿ',$k);
$k = str_replace('s','ˢ',$k);
$k = str_replace('t','ᵀ',$k);
$k = str_replace('u','ᵿ',$k);
$k = str_replace('v','ᵛ',$k);
$k = str_replace('w','ᵂ',$k);
$k = str_replace('x','ˣ',$k);
$k = str_replace('y','ᵞ',$k);
$k = str_replace('z','ᶻ',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','ᗩ',$k);
$k = str_replace('b','ᗷ',$k);
$k = str_replace('c','ᑕ',$k);
$k = str_replace('d','ᗪ',$k);
$k = str_replace('e','E',$k);
$k = str_replace('f','f',$k);
$k = str_replace('g','G',$k);
$k = str_replace('h','ᕼ',$k);
$k = str_replace('i','I',$k);
$k = str_replace('j','ᒍ',$k);
$k = str_replace('k','K',$k);
$k = str_replace('l','ᒪ',$k);
$k = str_replace('m','ᗰ',$k);
$k = str_replace('n','ᑎ',$k);
$k = str_replace('o','O',$k);
$k = str_replace('p','ᑭ',$k);
$k = str_replace('q','ᑫ',$k);
$k = str_replace('r','ᖇ',$k);
$k = str_replace('s','ᔕ',$k);
$k = str_replace('t','T',$k);
$k = str_replace('u','ᑌ',$k);
$k = str_replace('v','ᐯ',$k);
$k = str_replace('w','ᗯ',$k);
$k = str_replace('x','᙭',$k);
$k = str_replace('y','Y',$k);
$k = str_replace('z','ᘔ',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','ᴬ',$k);
$k = str_replace('b','ᴮ',$k);
$k = str_replace('c','ᶜ',$k);
$k = str_replace('d','ᴰ',$k);
$k = str_replace('e','ᴱ',$k);
$k = str_replace('f','ᶠ',$k);
$k = str_replace('g','ᴳ',$k);
$k = str_replace('h','ᴴ',$k);
$k = str_replace('i','ᴵ',$k);
$k = str_replace('j','ᴶ',$k);
$k = str_replace('k','ᴷ',$k);
$k = str_replace('l','ᴸ',$k);
$k = str_replace('m','ᴹ',$k);
$k = str_replace('n','ᴺ',$k);
$k = str_replace('o','ᴼ',$k);
$k = str_replace('p','ᴾ',$k);
$k = str_replace('q','ᵠ',$k);
$k = str_replace('r','ᴿ',$k);
$k = str_replace('s','ˁ',$k);
$k = str_replace('t','ᵀ',$k);
$k = str_replace('u','ᵁ',$k);
$k = str_replace('v','ᵛ',$k);
$k = str_replace('w','ᵂ',$k);
$k = str_replace('x','ˣ',$k);
$k = str_replace('y','ʸ',$k);
$k = str_replace('z','ᶻ',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','𝔸',$k);
$k = str_replace('b','𝔹',$k);
$k = str_replace('c','ℂ',$k);
$k = str_replace('d','𝔻',$k);
$k = str_replace('e','𝔼',$k);
$k = str_replace('f','𝔽',$k);
$k = str_replace('g','𝔾',$k);
$k = str_replace('h','ℍ',$k);
$k = str_replace('i','𝕀',$k);
$k = str_replace('j','𝔾',$k);
$k = str_replace('k','𝕂',$k);
$k = str_replace('l','𝕃',$k);
$k = str_replace('m','𝕄',$k);
$k = str_replace('n','ℕ',$k);
$k = str_replace('o','𝕆',$k);
$k = str_replace('p','ℙ',$k);
$k = str_replace('q','ℚ',$k);
$k = str_replace('r','ℝ',$k);
$k = str_replace('s','𝕊',$k);
$k = str_replace('t','𝕋',$k);
$k = str_replace('u','𝕌',$k);
$k = str_replace('v','𝕍',$k);
$k = str_replace('w','𝕎',$k);
$k = str_replace('x','𝕏',$k);
$k = str_replace('y','𝕐',$k);
$k = str_replace('z','ℤ',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','ᴀ',$k);
$k = str_replace('b','ʙ',$k);
$k = str_replace('c','ᴄ',$k);
$k = str_replace('d','ᴅ',$k);
$k = str_replace('e','ᴇ',$k);
$k = str_replace('f','ғ',$k);
$k = str_replace('g','ɢ',$k);
$k = str_replace('h','ʜ',$k);
$k = str_replace('i','ɪ',$k);
$k = str_replace('j','ᴊ',$k);
$k = str_replace('k','ᴋ',$k);
$k = str_replace('l','ʟ',$k);
$k = str_replace('m','ᴍ',$k);
$k = str_replace('n','ɴ',$k);
$k = str_replace('o','ᴏ',$k);
$k = str_replace('p','ᴘ',$k);
$k = str_replace('q','ǫ',$k);
$k = str_replace('r','ʀ',$k);
$k = str_replace('s','ѕ',$k);
$k = str_replace('t','ᴛ',$k);
$k = str_replace('u','ụ',$k);
$k = str_replace('v','ᴠ',$k);
$k = str_replace('w','ᴡ',$k);
$k = str_replace('x','х',$k);
$k = str_replace('y','ʏ',$k);
$k = str_replace('z','ᴢ',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','𝐀',$k); 
$k = str_replace('b','𝐁',$k); 
$k = str_replace('c','𝐂',$k); 
$k = str_replace('d','𝐃',$k); 
$k = str_replace('e','𝐄',$k); 
$k = str_replace('f','𝐅',$k); 
$k = str_replace('g','𝐆',$k); 
$k = str_replace('h','𝐇',$k); 
$k = str_replace('i','𝐈',$k); 
$k = str_replace('j','𝐉',$k); 
$k = str_replace('k','𝐊',$k); 
$k = str_replace('l','𝐋',$k); 
$k = str_replace('m','𝐌',$k); 
$k = str_replace('n','𝐍',$k); 
$k = str_replace('o','𝐎',$k); 
$k = str_replace('p','𝐏',$k); 
$k = str_replace('q','𝐐',$k); 
$k = str_replace('r','𝐑',$k); 
$k = str_replace('s','𝐒',$k); 
$k = str_replace('t','𝐓',$k); 
$k = str_replace('u','𝐔',$k); 
$k = str_replace('v','𝐕',$k); 
$k = str_replace('w','𝐖',$k); 
$k = str_replace('x','𝐗',$k); 
$k = str_replace('y','𝐘',$k); 
$k = str_replace('z','𝐙',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]); 
$k =$text;
$k = str_replace('a','𝖆',$k); 
$k = str_replace('b','𝖇',$k); 
$k = str_replace('c','𝖈',$k); 
$k = str_replace('d','𝖉',$k); 
$k = str_replace('e','𝖊',$k); 
$k = str_replace('f','𝖋',$k); 
$k = str_replace('g','𝖌',$k); 
$k = str_replace('h','𝖍',$k); 
$k = str_replace('i','𝖎',$k); 
$k = str_replace('j','𝖏',$k); 
$k = str_replace('k','𝖐',$k); 
$k = str_replace('l','𝖑',$k); 
$k = str_replace('m','𝖒',$k); 
$k = str_replace('n','𝖓',$k); 
$k = str_replace('o','𝖔',$k); 
$k = str_replace('p','𝖕',$k); 
$k = str_replace('q','𝖖',$k); 
$k = str_replace('r','𝖗',$k); 
$k = str_replace('s','𝖘',$k); 
$k = str_replace('t','𝖙',$k); 
$k = str_replace('u','𝖚',$k); 
$k = str_replace('v','𝖛',$k); 
$k = str_replace('w','𝖜',$k); 
$k = str_replace('x','𝖝',$k); 
$k = str_replace('y','𝖞',$k); 
$k = str_replace('z','𝖟',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]); 
$k =$text;
$k = str_replace('a','𝙰',$k); 
$k = str_replace('b','𝙱',$k); 
$k = str_replace('c','𝙲',$k); 
$k = str_replace('d','𝙳',$k); 
$k = str_replace('e','𝙴',$k); 
$k = str_replace('f','𝙵',$k); 
$k = str_replace('g','𝙶',$k);
$k = str_replace('h','𝙷',$k); 
$k = str_replace('i','𝙸',$k); 
$k = str_replace('j','𝙹',$k); 
$k = str_replace('k','𝙺',$k); 
$k = str_replace('l','𝙻',$k); 
$k = str_replace('m','𝙼',$k); 
$k = str_replace('n','𝙽',$k); 
$k = str_replace('o','𝙾',$k); 
$k = str_replace('p','𝙿',$k); 
$k = str_replace('q','𝚀',$k); 
$k = str_replace('r','𝚁',$k); 
$k = str_replace('s','𝚂',$k); 
$k = str_replace('t','𝚃',$k); 
$k = str_replace('u','𝚄',$k); 
$k = str_replace('v','𝚅',$k); 
$k = str_replace('w','𝚆',$k); 
$k = str_replace('x','𝚇',$k); 
$k = str_replace('y','𝚈',$k); 
$k = str_replace('z','𝚉',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('A','𝑨',$k);
$k = str_replace('a','𝒂',$k);
$k = str_replace('b','𝒃',$k); 
$k = str_replace('B','𝑩',$k); 
$k = str_replace('c','𝒄',$k); 
$k = str_replace('C','𝑪',$k); 
$k = str_replace('d','𝒅',$k); 
$k = str_replace('D','𝑫',$k); 
$k = str_replace('e','𝒆',$k); 
$k = str_replace('E','𝑬',$k); 
$k = str_replace('f','𝒇',$k); 
$k = str_replace('F','𝑭',$k); 
$k = str_replace('g','𝒈',$k); 
$k = str_replace('G','𝑮',$k); 
$k = str_replace('h','𝒉',$k); 
$k = str_replace('H','𝑯',$k); 
$k = str_replace('i','𝒊',$k); 
$k = str_replace('I','𝑰',$k); 
$k = str_replace('j','𝒋',$k); 
$k = str_replace('J','𝑱',$k); 
$k = str_replace('k','𝒌',$k); 
$k = str_replace('K','𝑲',$k); 
$k = str_replace('l','𝒍',$k); 
$k = str_replace('L','𝑳',$k); 
$k = str_replace('m','𝒎',$k); 
$k = str_replace('M','𝑴',$k); 
$k = str_replace('n','𝒏',$k); 
$k = str_replace('N','𝑵',$k); 
$k = str_replace('o','𝒐',$k); 
$k = str_replace('O','𝑶',$k); 
$k = str_replace('p','𝒑',$k); 
$k = str_replace('P','𝑷',$k); 
$k = str_replace('q','𝒒',$k); 
$k = str_replace('Q','𝑸',$k); 
$k = str_replace('r','𝒓',$k); 
$k = str_replace('R','𝑹',$k); 
$k = str_replace('s','𝒔',$k); 
$k = str_replace('S','𝑺',$k); 
$k = str_replace('t','𝒕',$k); 
$k = str_replace('T','𝑻',$k); 
$k = str_replace('u','𝒖',$k); 
$k = str_replace('U','𝑼',$k); 
$k = str_replace('v','𝒗',$k); 
$k = str_replace('V','𝑽',$k);
$k = str_replace('w','𝒘',$k); 
$k = str_replace('W','𝑾',$k); 
$k = str_replace('x','𝒙',$k); 
$k = str_replace('X','𝑿',$k); 
$k = str_replace('y','𝒚',$k); 
$k = str_replace('Y','𝒀',$k);
$k = str_replace('z','𝒛',$k);
$k = str_replace('Z','𝒁',$k);;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('A','𝗔',$text);
$k = str_replace('a','𝗮',$k);
$k = str_replace('b','𝗕',$k); 
$k = str_replace('B','𝗯',$k); 
$k = str_replace('c','𝗖',$k); 
$k = str_replace('C','𝗰',$k); 
$k = str_replace('d','𝗗',$k); 
$k = str_replace('D','𝗱',$k); 
$k = str_replace('e','𝗘',$k); 
$k = str_replace('E','𝗲',$k); 
$k = str_replace('f','𝗙',$k); 
$k = str_replace('F','𝗳',$k); 
$k = str_replace('g','𝗚',$k); 
$k = str_replace('G','𝗴',$k); 
$k = str_replace('h','𝗛',$k); 
$k = str_replace('H','𝗵',$k); 
$k = str_replace('i','𝗜',$k); 
$k = str_replace('I','𝗶',$k); 
$k = str_replace('j','𝗝',$k); 
$k = str_replace('J','𝗷',$k); 
$k = str_replace('k','𝗞',$k); 
$k = str_replace('K','𝗸',$k); 
$k = str_replace('l','𝗟',$k); 
$k = str_replace('L','𝗹',$k); 
$k = str_replace('m','𝗺',$k); 
$k = str_replace('M','𝗺',$k); 
$k = str_replace('n','𝗡',$k); 
$k = str_replace('N','𝗻',$k); 
$k = str_replace('o','𝗢',$k); 
$k = str_replace('O','𝗼',$k); 
$k = str_replace('p','𝗣',$k); 
$k = str_replace('P','𝗽',$k); 
$k = str_replace('q','𝗤',$k); 
$k = str_replace('Q','𝗾',$k); 
$k = str_replace('r','𝗥',$k); 
$k = str_replace('R','𝗿',$k); 
$k = str_replace('s','𝗦',$k); 
$k = str_replace('S','𝘀',$k); 
$k = str_replace('t','𝗧',$k); 
$k = str_replace('T','𝘁',$k); 
$k = str_replace('u','𝗨',$k); 
$k = str_replace('U','𝘂',$k); 
$k = str_replace('v','𝗩',$k); 
$k = str_replace('V','𝘃',$k);
$k = str_replace('w','𝗪',$k); 
$k = str_replace('W','𝘄',$k); 
$k = str_replace('x','𝗫',$k); 
$k = str_replace('X','𝘅',$k);
$k = str_replace('y','𝗬',$k); 
$k = str_replace('Y','𝘆',$k);
$k = str_replace('z','𝗭',$k);
$k = str_replace('Z','𝘇',$k);;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('a','ᗩ',$text); 
$k = str_replace('b','ᗷ',$k); 
$k = str_replace('c','ᑕ',$k); 
$k = str_replace('d','ᗪ',$k); 
$k = str_replace('e','E',$k); 
$k = str_replace('f','ᖴ',$k); 
$k = str_replace('g','G',$k); 
$k = str_replace('h','ᕼ',$k); 
$k = str_replace('i','I',$k); 
$k = str_replace('j','ᒍ',$k); 
$k = str_replace('k','K',$k); 
$k = str_replace('l','ᒪ',$k); 
$k = str_replace('m','ᗰ',$k); 
$k = str_replace('n','ᑎ',$k); 
$k = str_replace('o','O',$k); 
$k = str_replace('p','ᑭ',$k); 
$k = str_replace('q','ᑫ',$k); 
$k = str_replace('r','ᖇ',$k); 
$k = str_replace('s','ᔕ',$k); 
$k = str_replace('t','T',$k); 
$k = str_replace('u','ᑌ',$k); 
$k = str_replace('v','ᐯ',$k); 
$k = str_replace('w','ᗯ',$k); 
$k = str_replace('x','᙭',$k); 
$k = str_replace('y','Y',$k); 
$k = str_replace('z','ᘔ',$k);
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
$k =$text;
$k = str_replace('A','ᴀ',$k);
$k = str_replace('a','ᴬ',$k);
$k = str_replace('b','ᴮ',$k); 
$k = str_replace('B','ʙ',$k); 
$k = str_replace('c','ᶜ',$k); 
$k = str_replace('C','ᴄ',$k); 
$k = str_replace('d','ᴰ',$k); 
$k = str_replace('D','ᴅ',$k); 
$k = str_replace('e','ᴱ',$k); 
$k = str_replace('E','ᴇ',$k); 
$k = str_replace('f','ᶠ',$k); 
$k = str_replace('F','ғ',$k); 
$k = str_replace('g','ᴳ',$k); 
$k = str_replace('G','ɢ',$k); 
$k = str_replace('h','ᴴ',$k); 
$k = str_replace('H','ʜ',$k); 
$k = str_replace('i','ᴵ',$k); 
$k = str_replace('I','ɪ',$k); 
$k = str_replace('j','ᴶ',$k); 
$k = str_replace('J','ᴊ',$k); 
$k = str_replace('k','ᴷ',$k); 
$k = str_replace('K','ᴋ',$k); 
$k = str_replace('l','ᴸ',$k); 
$k = str_replace('L','ʟ',$k); 
$k = str_replace('m','ᴹ',$k); 
$k = str_replace('M','ᴍ',$k); 
$k = str_replace('n','ᴺ',$k); 
$k = str_replace('N','ɴ',$k); 
$k = str_replace('o','ᴼ',$k); 
$k = str_replace('O','ᴏ',$k); 
$k = str_replace('p','ᴾ',$k); 
$k = str_replace('P','ᴘ',$k); 
$k = str_replace('q','ᵟ',$k); 
$k = str_replace('Q','ǫ',$k); 
$k = str_replace('r','ᴿ',$k); 
$k = str_replace('R','ʀ',$k); 
$k = str_replace('s','ˢ',$k); 
$k = str_replace('S','s',$k); 
$k = str_replace('t','ᵀ',$k); 
$k = str_replace('T','ᵀ',$k); 
$k = str_replace('u','ᵁ',$k); 
$k = str_replace('U','ᴜ',$k); 
$k = str_replace('v','ᵛ',$k); 
$k = str_replace('V','ᴠ',$k);
$k = str_replace('w','ᵂ',$k); 
$k = str_replace('W','ᴡ',$k); 
$k = str_replace('x','ˣ',$k); 
$k = str_replace('X','x',$k); 
$k = str_replace('y','ᵞ',$k); 
$k = str_replace('Y','ʏ',$k);
$k = str_replace('z','ᶻ',$k);
$k = str_replace('Z','ᴢ',$k);;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$k." ".$smile
]);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"🔰┇يمكنك روأيه الرموز ايضأ ",
]);}}}

if($text == "الرموز ☬"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"𓅄 𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 
‏𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 
‏ ☤ 𓅾 𓅿 𓆀 𓆁 𓆂
‏𓀀 𓀁 𓀂 𓀃 𓀄 𓀅 𓀆 𓀇 𓀈 𓀉 𓀊 𓀋 𓀌 𓀍 𓀎 𓀏 𓀐 𓀑 𓀒 𓀓 𓀔 𓀕 𓀖 𓀗 𓀘 𓀙 𓀚 𓀛 𓀜 𓀝 𓀞 𓀟 𓀠 𓀡 𓀢 𓀣 𓀤 𓀥 𓀦 𓀧 𓀨 𓀩 𓀪 𓀫 𓀬 𓀭 𓀮 𓀯 𓀰 𓀱 𓀲 𓀳 𓀴 𓀵 𓀶 𓀷 𓀸 𓀹 𓀺 𓀻 𓀼 𓀽 𓀾 𓀿 𓁀 𓁁 𓁂 𓁃 𓁄 𓁅 𓁆 𓁇 𓁈 𓁉 𓁊 𓁋 𓁌 𓁍 𓁎 𓁏 𓁐 𓁑 𓁒 𓁓 𓁔 𓁕 𓁖 𓁗 𓁘 𓁙 𓁚 𓁛 𓁜 𓁝 𓁞 𓁟 𓁠 𓁡 𓁢 𓁣 𓁤 𓁥 𓁦 𓁧 𓁨 𓁩 𓁪 𓁫 𓁬 𓁭 𓁮 𓁯 𓁰 𓁱 𓁲 𓁳 𓁴 𓁵 𓁶 𓁷 𓁸 𓁹 𓁺 𓁻 𓁼 𓁽 𓁾 𓁿 𓂀𓂅 𓂆 𓂇 𓂈 𓂉 𓂊 𓂋 𓂌 𓂍 𓂎 𓂏 𓂐 𓂑 𓂒 𓂓 𓂔 𓂕 𓂖 𓂗 𓂘 𓂙 𓂚 𓂛 𓂜 𓂝 𓂞 𓂟 𓂠 𓂡 𓂢 𓂣 𓂤 𓂥 𓂦 𓂧 𓂨 𓂩 𓂪 𓂫 𓂬 𓂭 𓂮 𓂯 𓂰 𓂱 𓂲 𓂳 𓂴 𓂵 𓂶 𓂷 𓂸 𓂹 𓂺 𓂻 𓂼 𓂽 𓂾 𓂿 𓃀 𓃁 𓃂 𓃃 𓃅 𓃆 𓃇 𓃈 𓃉 𓃊 𓃋 𓃌 𓃍 𓃎 𓃏 𓃐 𓃑 𓃒 𓃓 𓃔 𓃕 𓃖 𓃗 𓃘 𓃙 𓃚 𓃛 𓃜 𓃝 𓃞 𓃟 𓃠 𓃡 𓃢 𓃣 𓃤 𓃥 𓃦 𓃧 𓃨 𓃩 𓃪 𓃫 𓃬 𓃭 𓃮 𓃯 𓃰 𓃱 𓃲 𓃳 𓃴 𓃵 𓃶 𓃷 𓃸 𓃹 𓃺 𓃻 𓃼 𓃽 𓃾 𓃿 𓄀 𓄁 𓄂 𓄃 𓄄 𓄅 𓄆 𓄇 𓄈 𓄉 𓄊 𓄋 𓄌 𓄍 𓄎 𓄏 𓄐 𓄑 𓄒 𓄓 𓄔 𓄕 𓄖 𓄙 𓄚 𓄛 𓄜 𓄝 𓄞 𓄟 𓄠 𓄡 𓄢 𓄣 𓄤 𓄥 𓄦 𓄧 𓄨 𓄩 𓄪 𓄫 𓄬 𓄭 𓄮 𓄯 𓄰 𓄱 𓄲 𓄳 𓄴 𓄵 𓄶 𓄷 𓄸 𓄹 𓄺𓄼 𓄽 𓄾 𓄿 𓅀 𓅁 𓅂 𓅃 𓅄 𓅅 𓅆 𓅇 𓅈 𓅉 𓅊 𓅋 𓅌 𓅍 𓅎 𓅏 𓅐 𓅑 𓅒 𓅓 𓅔 𓅕 𓅖 𓅗 𓅘 𓅙 𓅚 𓅛 𓅜 𓅝 𓅞 𓅟 𓅠 𓅡 𓅢 𓅣 𓅤 𓅥 𓅦 𓅧 𓅨 𓅩 𓅪 𓅫 𓅬 𓅭 𓅮 𓅯 𓅰 𓅱 𓅲 𓅳 𓅴 𓅵 𓅶 𓅷 𓅸 𓅹 𓅺 𓅻 𓅼 𓅽 𓅾 𓅿 𓆀 𓆁 𓆂 𓆃 𓆄 𓆅 𓆆 𓆇 𓆈 𓆉 𓆊 𓆋 𓆌 𓆍 𓆎 𓆐 𓆑 𓆒 𓆓 𓆔 𓆕 𓆖 𓆗 𓆘 𓆙 𓆚 𓆛 𓆜 𓆝 𓆞 𓆟 𓆠 𓆡 𓆢 𓆣 𓆤 𓆥 𓆦 𓆧 𓆨 𓆩𓆪 𓆫 𓆬 𓆭 𓆮 𓆯 𓆰 𓆱 𓆲 𓆳 𓆴 𓆵 𓆶 𓆷 𓆸 𓆹 𓆺 𓆻 𓆼 𓆽 𓆾 𓆿 𓇀 𓇁 𓇂 𓇃 𓇄 𓇅 𓇆 𓇇 𓇈 𓇉 𓇊 𓇋 𓇌 𓇍 𓇎 𓇏 𓇐 𓇑 𓇒 𓇓 𓇔 𓇕 𓇖 𓇗 𓇘 𓇙 𓇚 𓇛 𓇜 𓇝 𓇞 𓇟 𓇠 𓇡 𓇢 𓇣 𓇤 𓇥 𓇦 𓇧 𓇨 𓇩 𓇪 𓇫 𓇬 𓇭 𓇮 𓇯 𓇰 𓇱 𓇲 𓇳 𓇴 𓇵 𓇶 𓇷 𓇸 𓇹 𓇺 𓇻 𓇼 𓇾 𓇿 𓈀 𓈁 𓈂 𓈃 𓈄 𓈅 𓈆 𓈇 𓈈 𓈉 𓈊 𓈋 𓈌 𓈍 𓈎 𓈏 𓈐 𓈑 𓈒 𓈓 𓈔 𓈕 𓈖 𓈗 𓈘 𓈙 𓈚 𓈛 𓈜 𓈝 𓈞 𓈟 𓈠 𓈡 𓈢 𓈣 𓈤  𓈥 𓈦 𓈧 𓈨 𓈩 𓈪 𓈫 𓈬 𓈭 𓈮 𓈯 𓈰 𓈱 𓈲 𓈳 𓈴 𓈵 𓈶 𓈷 𓈸 𓈹 𓈺 𓈻 𓈼 𓈽 𓈾 𓈿 𓉀 𓉁 𓉂 𓉃 𓉄 𓉅 𓉆 𓉇 𓉈 𓉉 𓉊 𓉋 𓉌 𓉍 𓉎 𓉏 𓉐 𓉑 𓉒 𓉓 𓉔 𓉕 𓉖 𓉗 𓉘 𓉙 𓉚 𓉛 𓉜 𓉝 𓉞 𓉟 𓉠 𓉡 𓉢 𓉣 𓉤 𓉥 𓉦 𓉧 𓉨 𓉩 𓉪 𓉫 𓉬 𓉭 𓉮 𓉯 𓉰 𓉱 𓉲 𓉳 𓉴 𓉵 𓉶 𓉷 𓉸 𓉹 𓉺 𓉻 𓉼 𓉽 𓉾 𓉿 𓊀 𓊁 𓊂 𓊃 𓊄 𓊅 𓊈 𓊉 𓊊 𓊋 𓊌 𓊍 𓊎 𓊏 𓊐 𓊑 𓊒 𓊓 𓊔 𓊕 𓊖 𓊗 𓊘 𓊙 𓊚 𓊛 𓊜 𓊝 𓊞 𓊟 𓊠 𓊡 𓊢 𓊣 𓊤 𓊥 𓊦 𓊧 𓊨 𓊩 𓊪 𓊫 𓊬 𓊭 𓊮 𓊯 𓊰 𓊱 𓊲 𓊳 𓊴 𓊵 𓊶 𓊷 𓊸 𓊹 𓊺 𓊻 𓊼 𓊽 𓊾 𓊿 𓋀 𓋁 𓋂 𓋃 𓋄 𓋅 𓋆 𓋇 𓋈 𓋉 𓋊 𓋋 𓋌 𓋍 𓋎 𓋏 𓋐 𓋑 𓋒 𓋓 𓋔 𓋕 𓋖 𓋗 𓋘 𓋙 𓋚 𓋛 𓋜 𓋝 𓋞 𓋟 𓋠 𓋡 𓋢 𓋣 𓋤 𓋥 𓋦 𓋧 𓋨 𓋩 𓋪 𓋫 𓋬 𓋭 𓋮 𓋯 𓋰 𓋱 𓋲 𓋳 𓋴 𓋵 𓋶 𓋷 𓋸 𓋹 𓋺 𓋻 𓋼 𓋽 𓋾 𓋿 𓌀 𓌁 𓌂 𓌃 𓌄 𓌅 𓌆 𓌇 𓌈 𓌉 𓌊 𓌋 𓌌 𓌍 𓌎 𓌏 𓌐 𓌑 𓌒 𓌓 𓌔 𓌕 𓌖 𓌗 𓌘 𓌙 𓌚 𓌛 𓌜 𓌝 𓌞 𓌟 𓌠 𓌡 𓌢 𓌣 𓌤 𓌥 𓌦 𓌧 𓌨 𓌩 𓌪 𓌫 𓌬 𓌭 𓌮 𓌯 𓌰 𓌱 𓌲 𓌳 𓌴 𓌵 𓌶 𓌷 𓌸 𓌹 𓌺 𓌻 𓌼 𓌽 𓌾 𓌿 𓍀 𓍁 𓍂 𓍃 𓍄 𓍅 𓍆 𓍇 𓍈 𓍉 𓍊 𓍋 𓍌 𓍍 𓍎 𓍏 𓍐 𓍑 𓍒 𓍓 𓍔 𓍕 𓍖 𓍗 𓍘 𓍙 𓍚 𓍛 𓍜 𓍝 𓍞 𓍟 𓍠 𓍡 𓍢 𓍣 𓍤 𓍥 𓍦 𓍧 𓍨 𓍩 𓍪 𓍫 𓍬 𓍭 𓍮 𓍯 𓍰 𓍱 𓍲 𓍳 𓍴 𓍵 𓍶 𓍷 𓍸 𓍹 𓍺 𓍻 𓍼 𓍽 𓍾 𓍿 𓎀 𓎁 𓎂 𓎃 𓎄 𓎅 𓎆 𓎇 𓎈 𓎉 𓎊 𓎋 𓎌 𓎍 𓎎 𓎏 𓎐 𓎑 𓎒 𓎓 𓎔 𓎕 𓎖 𓎗 𓎘 𓎙 𓎚 𓎛 𓎜 𓎝 𓎞 𓎟 𓎠 𓎡 𓏋 𓏌 𓏍 𓏎 𓏏 𓏐 𓏑 𓏒 𓏓 
‏ 𓏕 𓏖 𓏗 𓏘 𓏙 𓏚 𓏛 𓏜 𓏝 𓏞 𓏟 𓏠 𓏡 𓏢 𓏣 𓏤 𓏥 𓏦 𓏧 𓏨 𓏩 𓏪 𓏫 𓏬 𓏭 𓏮 𓏯 𓏰 𓏱 𓏲 𓏳 𓏴 𓏶 𓏷 𓏸 𓏹 𓏺 𓏻 𓏼 𓏽 𓏾 𓏿 𓐀 𓐁 𓐂 𓐃 𓐄 𓐅 𓐆",
]);}

if($text == "𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- حسنا قم بأرسال اسمك بلغة الانكليزية فقط !",
]);
file_put_contents("$from_id.json", "eng");}

if($text == "بايوات انستا ま"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- حسنا قم بأرسال اقتباس وسيتم تحويله بايو يمكنك استخدام الاحرف العربيه والانكليزيه والرموز !",]);
file_put_contents("$from_id.json", "bio");}
$bio = array("❥•َ⚡️͢ֆ⸽
 ⠀
 
 ‏ＢΔ S R A ┆17 Y.O ↴
﴿ ‏ ‏$text 💛ء","⠀
 ⠀
 ⠀
 
 
 
 ⠀  I R A Q ┆19 Y.O ↴
 ﴿$text ️. 💛۽
 ⠀
 ⠀
 ⠀",
 
 "⠀ ⠀⠀⠀ ⠀⠀⠀ 
 ⠀⠀
 ⠀⠀⠀⠀⠀⠀
 ⠀⠀⠀ ⠀⠀
 ⠀ ⠀⠀⠀⠀- ᗩGE : 17 Y.O
$text ً.  💛 
 ⠀ ⠀⠀⠀ ⠀⠀⠀ 
 ⠀⠀
 ⠀⠀⠀⠀",
 
 "‎‏⠀
 ‎‏⠀
 ‏⠀
 
 ⠀⠀
 ⠀
 ⠀
 ⠀
$text . 🥀  
 ⠀⠀⠀⠀- Unfollow Block ♚ֆ 〞 
 ⠀
 ⠀
 ⠀‎
 ‏⠀⠀⠀
 ‎‏⠀",
 
 "‎‏⠀
 ‎‏⠀
 ‏⠀
 
 ⠀⠀
 
 ⠀
 ⠀
 ‏‏‏$text 🖤ء
 ⠀⠀⠀⠀⠀✗ ᗩGE┊19 ✿‏ֆ
  ⠀
 ⠀
 ⠀‎
 ‏⠀⠀⠀
 ‎‏⠀",
 
 "⠀⠀
 
 
 ⠀⠀
$text 🥀 🚬 
 ⠀  ⠀ғollow мe , ғollow вacĸ⠀⠀
 ⠀⠀⠀⠀⠀⠀┄༻☹️༺┄⠀
 ⠀⠀⠀⠀⠀ㅤ⠀‏ ‏⠀⠀",
 
 "‎‏⠀
 ‎‏⠀
 ‏⠀
 
 ⠀⠀
 
 ⠀
 ⠀
 - ‏$text ☻. 
 ⠀⠀⠀⠀⠀- 🇮🇶|| 19 Y.O ❞
  ⠀
 ⠀
 ⠀‎
 ‏⠀⠀⠀
 ‎‏⠀",
 
 "⠀
 ⠀
 ⠀
 
 
 
 ⠀‏ＢΔ S R A ┆17 Y.O ↴
 🖤.$text
 ⠀
 ⠀
 ⠀",
 
 "‎‏⠀
 ‎‏⠀
 ‏⠀
 
 ⠀⠀
 
 ⠀
 ⠀⠀⠀⠀⠀⠀✗ IR‏ΔQ ˛⁽💛₎⇣
 ﴿ ‏‏$text . 🖤‏ء
 ⠀
 ⠀
 ⠀‎
 ‏⠀⠀⠀
 ‎‏⠀",
 
 "‎‏⠀
 ‎‏⠀
 ‏⠀
 
 ⠀⠀
 
 ⠀
  ﴿‏ ‏$text🤦🏽‍♀️ً ٰ. 
 ⠀⠀⠀⠀⠀⠀  𖤍 BASRA - iQ ‏
 ⠀‎
 ⠀‎
 ⠀
 ⠀‎
 ",
 
 "‎‏⠀
 ‎‏⠀
 ‏⠀
 
 ⠀⠀
 
 ⠀
 ⠀
 ‏‏‏$text 🖤ء
 ⠀⠀⠀⠀⠀✗ ᗩGE┊19 ✿‏ֆ
  ⠀
 ⠀
 ⠀‎
 ‏⠀⠀⠀
 ‎‏⠀",
 
 "⠀
 ⠀
 ⠀
 ⠀
 ⠀⠀⠀⠀⠀⠀⠀⠀ ֆ ⁽ ♥ ⁾↵
                
 
  ⠀          ‹ 🇮🇶 ³¹³ BAGHDAD ›⠀⠀
$text! 🤷🏽‍♀️
 ⠀
 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀
 ⠀
 ⠀",
 
 "⠀⠀
 ‏⠀
 ‏⠀
 ‏⠀
 ⠀
 ⠀⠀⠀⠀⠀
 ⠀  ⠀⠀  
 ⠀⠀⠀⠀•┆BΔGHDΔD 🇮🇶 ‏ֆ 
 ‏$text 🖤‏.
 ⠀⠀⠀⠀⠀⠀⠀
 ‏⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀
 ⠀
 ⠀
 
 
 
 ⠀⠀⠀⠀⠀⠀IRΔQ┆19 Y.O ↴
 ⠀
 ﴿$text 💚.
 ⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀
 ⠀
 ⠀
 
 
 
 ⠀  Baghdad ┆15 Y.O ↴
﴿ ‏$text 🖤.
 ⠀
 ⠀
 ⠀",
 
 "⠀
 ⠀
 ⠀ 
 
 ⠀
 ⠀
 
  ‏$text  🖤»
  ⠀⠀ ⠀- Bagdad 19Y.O♚ֆ 
 ⠀
 
 ⠀ ⠀
 ⠀ ⠀",
 
 "⠀
 ⠀
 ⠀
 ⠀
 ⠀⠀⠀  ⠀⠀➝ IR‏ΔQ ˛⁽ 💙 ₎⇣
 ⠀⠀⠀⠀
 ‏$text 💔.
 ⠀
 ⠀⠀⠀⠀
 ⠀
 ⠀",
 
 "⠀
 ‏⠀
 
 
 ⠀
 ⠀ 
 ⠀⠀⠀⠀⠀❥⁽ AGE┊9 ♚ )
 ⠀
 ﴿$text ❤️.
 
 ⠀
 
 
 ⠀",
 
 "⠀
 ⠀
 ⠀
 ⠀
 ⠀⠀⠀⠀♛ | ؁ ➝🇮🇶
 ﴿ •$text 🖤 ֆء
 ⠀♛ | OFFICIAL ACCOANT
 ⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀ 
 ⠀                  ⠀      ↓ ❛
 ⠀
 ⠀    ⠀              ﴾⠀ ⠀ 
 ⠀       ♩❥$text ﴿⠀ ⠀ 
 ⠀       welcome to my profile 
 ⠀ 
 ⠀
 ⠀⠀⠀",
 
 "⠀⠀
 
 
 ⠀⠀‏“🥀$text “
 ⠀  ғollow мe , ғollow вacĸ⠀⠀
 ⠀⠀⠀⠀⠀┄༻☹️༺┄⠀
 ⠀⠀⠀⠀⠀ㅤ⠀
 ‏
 ",
 
 "⠀
 ⠀
 ⠀
 ⠀
 ⠀⠀⠀⠀⠀⠀♛ | ؁ ➝🇮🇶‏
 ♥️$text ♯
 ⠀⠀⠀♛ | OFFICIAL ACCOANT
 ⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀ㅤ
 ㅤ 
 ⠀⠀ ㅤ 
 
 
 ⠀ ⠀⠀ ㅤ ㅤ ⠀ㅤ ㅤ ؁ ➝🇮🇶
$text
 ⠀ㅤ ✿ωєℓ¢σм тσσмуρяσfιℓє✿
 
 ‏⠀⠀⠀
 ⠀
 ㅤ ㅤ 
 ⠀⠀⠀⠀⠀",
 
 "
 ⠀
 ⠀
 ⠀⠀⠀ ⠀ ⠀⠀⠀⠀⠀⠀⠀↴⠀
 ⠀⠀❞ᗷᗩS3RAY 🇮🇶|| 21 Y.O ❞
$text
 ‏﴿ 🌞💧 ﴾
 
 ⠀ ⠀⠀ 
 ⠀⠀",
 
 "⠀
 ⠀
 
 ⠀⠀
 ⠀
 ⠀⠀⠀⠀⠀⠀  ⠀┄༻💠༺┄⠀  
  ﴿$text ❤️ء  ﴾ 
 ⠀‏⠀ ⠀ᎳᎬᏞᏟᎾm TO ṃʏ ƿяȏғıʟ
 ⠀⠀⠀⠀⠀⠀⠀┄༻💠༺┄
 ⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀‏⠀
 
 ⠀‏⠀⠀⠀⠀⠀ ⠀❥ ⁞ ؁  ֆء
 ‏﴿$text  ..؟⠀
 ⠀ ⠀⠀⠀‏⠀ᴡᴇʟᴄᴏᴍ ᴛᴏ ᴍʏ ᴘʀᴏғɪʟ⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀
 ⠀⠀
 ⠀⠀
 ⠀⠀ ⠀ ⠀⠀ ⠀⠀◂◂⠀⠀⠀▮▮⠀⠀⠀▸▸
 ⠀ ⠀⠀ ⠀ ⠀  |◂ ▬▬▬▬●▬▬ ◂|
 ⠀ ⠀⠀ ⠀➰$text ➰ 
  ⠀ ❈⁽ From : IRΔQ➢ＢΔＧḤＤΔＤ ❉
 ⠀",
 
 "⠀
 ⠀
 ⠀
 ⠀
 ⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀⠀❶❽ Ꭹ.Ꭷ
 ⠀⠀⠀⠀⠀⠀⠀❖┊ᖴᖇOᗰ ᗷᗩᔕᖇᗩ
 ‏⠀$text ✘✋🏻 ⠀⠀⠀
 ⠀⠀⠀⠀↬ ❈⁽ шεᴌcσмε тσ мч вяσғ ❁
 ⠀
 ⠀
 ⠀
 ⠀",
 
 "‏⠀
 ‏⠀
 ‏⠀
 ‏⠀
 ⠀⠀⠀⠀⠀ ❈ ⁽💛 ✿ ₎❈↴
 ‏⠀
 
 ﴿$text ❤️
 ‏⠀‏ ⠀ᎳᎬᏞᏟᎾm TO ṃʏ ƿяȏғıʟ⠀
 ⠀⠀⠀⠀
 ‏⠀
 ‏⠀
 ‏⠀
 ⠀",
 
 "⠀⠀
 
 
 ⠀⠀
$text 😴🎷
  ғollow мe , ғollow вacĸ⠀⠀
 ⠀⠀⠀⠀┄༻☹️༺┄⠀
 ⠀⠀⠀⠀⠀ㅤ⠀
 ‏
 ‏ ‏⠀⠀ 
 
⠀⠀⠀⠀⠀ ⠀⠀⠀⠀⠀⠀",
 
 "⠀ ⠀ ⠀
 ⠀ ⠀ ⠀
 
 ‏⠀⠀ ⠀
 ⠀  ⠀❆ＩＱ › ＢΔＧḤＤΔＤ ❉‏⠀
 ‏‏⠀($text ֆ ☺️!)
※•┈•ʚ♚ɞ•┈‏​•※
 ⠀ ⠀ ⠀
 ⠀ ⠀ ⠀
 ⠀ ⠀ ⠀
 ⠀ ⠀ ⠀",
 
 "‏⠀
 ‏⠀
 ‏⠀
 ‏⠀
 ‏⠀
 ⠀⠀⠀⠀⠀⠀ ✿┊Y.O:19  ֆ 
$text 💔ء﴾
 ‏⠀⠀‏⠀⠀⠀┈┉━❀🚶🏻❀━┅┄⠀
 ‏⠀
 ‏⠀
 ",
 "⠀
 ⠀
 ⠀
 ⠀
 ⠀⠀⠀  ⠀⠀➝ IR‏ΔQ ˛⁽ 💙 ₎⇣
 ⠀⠀⠀⠀
$text 💚۽
 ⠀
 ⠀⠀⠀⠀
 ⠀
 ⠀",
 
 "⠀
 
 ⠀
 ⠀
 ⠀⠀⠀⠀⠀⠀⠀⠀⠀ ⠀♛؁17♛
 ⠀⠀⠀⠀⠀﴾ IQ ﴿ ��🇶  ❥ᗷᗩᔕᖇᗩ⠀
 “$text 🏃
 ⠀⠀
 ⠀
 ⠀
 ⠀",
 
 "‏⠀
 ‏⠀
 ‏⠀
 ‏⠀
 ‏⠀
 ⠀⠀⠀⠀⠀⠀ ✿┊Y.O:19  ֆ 
 ⠀  ⠀❆ＩＱ › ＢΔＧḤＤΔＤ ❉‏⠀
$text ؟❤️﴾
 ‏⠀⠀‏⠀⠀⠀┈┉━❀🚶🏻❀━┉┄⠀
 ‏⠀
 ‏⠀
 ",
 "⠀
 ⠀
 ⠀
 ⠀
 ⠀⠀⠀ ⠀⠀➝ IR‏ΔQ ˛⁽ ♥ ₎⇣  
 ⠀⠀⠀⠀
 ⠀⠀$text ⁽✺⃕₎ 
 ↬  ❈⁽ шεʟcσмε тσ мч вяσғ ❁
 ‏⠀⠀⠀⠀┄༻💗༺┄⠀
 ⠀⠀⠀⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀
 ⠀
 
 ⠀
 ⠀
 ⠀⠀⠀⠀⠀⠀⠀◂◄⠀⠀▮▮⠀⠀▸►
 ⠀⠀⠀◂⠀━━━━❊━━━━⠀▸
$text ء.

 ⠀
 ⠀
 ⠀
 ⠀",
 
 "⠀ ⠀⠀⠀ ⠀⠀⠀ 
 ⠀⠀
 ⠀⠀⠀⠀⠀⠀
 ⠀⠀⠀ ⠀⠀
 ⠀ ⠀⠀⠀⠀- ᗩGE : 17 Y.O
 
$text
 ؛❤
 ‏
 ⠀ ⠀⠀⠀ ⠀⠀⠀ 
 ⠀⠀",
 
 "‎‏ㅤ
 ‎‏⠀⠀⠀‏ㅤ⠀⠀⠀
 ‎‏ㅤ
 ⠀‏
 ‎‏ㅤ⠀⠀ ⠀ ⠀ ➝ Y.O:18 ֆ 💭  
 
$text 🌸₎
 ‎‏ㅤ
 ‎‏ㅤ
 ‎‏ㅤ⠀⠀⠀",);
$bior = array_rand($bio, 1);
 if($mod == "bio"){
if ($chat_id != "$admin"){
if($text !='/start' and $text !='الرموز ☬' and $text !== "بايوات انستا ま" and $text !== "بايوات تلي ☽" and $text !== "بايوات قنوات ❈" and $text !== "" and $text !== "𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼" and $text !== "الرموز ☬" and $text !== "/start"){
if($text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"$bio[$bior]",
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"",'url'=>"t.me/yyyyi"]],
]])]);}}}}

if($text == "بايوات تلي ☽"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- حسنا قم بأرسال اقتباس وسيتم تحويله نبذة يمكنك استخدام الاحرف العربيه والانكليزيه والرموز !",]);
file_put_contents("$from_id.json", "tele");}
if($mod == "tele"){
if(!file_exists("$from_id.exe")){
if ($chat_id != "$admin"){
if($text !='/start' and $text !='الرموز ☬' and $text !== "بايوات انستا ま" and $text !== "بايوات تلي ☽" and $text !== "بايوات قنوات ❈" and $text !== "" and $text !== "𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼" and $text !== "الرموز ☬" and $text !== "/start"){
$k =$text;
$k = str_replace('A','𝑨',$k);
$k = str_replace('a','𝒂',$k);
$k = str_replace('b','𝒃',$k); 
$k = str_replace('B','𝑩',$k); 
$k = str_replace('c','𝒄',$k); 
$k = str_replace('C','𝑪',$k); 
$k = str_replace('d','𝒅',$k); 
$k = str_replace('D','𝑫',$k); 
$k = str_replace('e','𝒆',$k); 
$k = str_replace('E','𝑬',$k); 
$k = str_replace('f','𝒇',$k); 
$k = str_replace('F','𝑭',$k); 
$k = str_replace('g','𝒈',$k); 
$k = str_replace('G','𝑮',$k); 
$k = str_replace('h','𝒉',$k); 
$k = str_replace('H','𝑯',$k); 
$k = str_replace('i','𝒊',$k); 
$k = str_replace('I','𝑰',$k); 
$k = str_replace('j','𝒋',$k); 
$k = str_replace('J','𝑱',$k); 
$k = str_replace('k','𝒌',$k); 
$k = str_replace('K','𝑲',$k); 
$k = str_replace('l','𝒍',$k); 
$k = str_replace('L','𝑳',$k); 
$k = str_replace('m','𝒎',$k); 
$k = str_replace('M','𝑴',$k); 
$k = str_replace('n','𝒏',$k); 
$k = str_replace('N','𝑵',$k); 
$k = str_replace('o','𝒐',$k); 
$k = str_replace('O','𝑶',$k); 
$k = str_replace('p','𝒑',$k); 
$k = str_replace('P','𝑷',$k); 
$k = str_replace('q','𝒒',$k); 
$k = str_replace('Q','𝑸',$k); 
$k = str_replace('r','𝒓',$k); 
$k = str_replace('R','𝑹',$k); 
$k = str_replace('s','𝒔',$k); 
$k = str_replace('S','𝑺',$k); 
$k = str_replace('t','𝒕',$k); 
$k = str_replace('T','𝑻',$k); 
$k = str_replace('u','𝒖',$k); 
$k = str_replace('U','𝑼',$k); 
$k = str_replace('v','𝒗',$k); 
$k = str_replace('V','𝑽',$k);
$k = str_replace('w','𝒘',$k); 
$k = str_replace('W','𝑾',$k); 
$k = str_replace('x','𝒙',$k); 
$k = str_replace('X','𝑿',$k); 
$k = str_replace('y','𝒚',$k); 
$k = str_replace('Y','𝒀',$k);
$k = str_replace('z','𝒛',$k);
$k = str_replace('Z','𝒁',$k);;
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"",]);
file_put_contents("$from_id.exe",$k);
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- حسنا قم بأرسال بوت التواصل الخاص بك او قناتك او اي يوزر خاص بك !",
]);}}}}

if(file_exists("$from_id.exe")){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"-$telegram ( ~$text ) #!M ABaD GuY† ☊ThEgOd!",
]);unlink("$from_id.exe");}}

$channels = array("
╔•𝑾𝑬𝑳𝑪𝑶𝑴𝑬 𓀃†•╗. 
┄─━━◉━━─┄
ᴅᴏ ɴᴏᴛ ɪᴍᴘᴇʀѕᴏɴᴀᴛᴇ ᴘᴇʀѕᴏɴᴀʟᴛʏ ʙᴜᴛ ᴍᴀᴋᴇ ᴘᴇʀѕᴏɴᴀʟ ᴛᴏɪᴍᴘᴇʀѕᴏɴᴀᴛᴇ ʏᴏᴜ ∞ 
 ⠀⠀

†𝑪𝒐𝒏𝒏𝒆𝒄𝒕 𝒖𝒔 ،-
__________________
 𖤐ᴍᴀɴɢᴇʀ ➤ $text","- 𝗹 𝗡𝗲𝗲𝗱 𝘀𝗼𝗺𝗲𝗼𝗻𝗲 𝘁𝗼 𝗛𝗼𝗹𝗱 𝗠𝘆 𝗔𝗿𝗺𝘁 𝘀𝗮𝘃𝗲𝘀 𝗠𝗲 
 𝗳𝗿𝗼𝗺 𝗺𝘆 𝗱𝗲𝗽𝗿𝗲𝘀𝘀𝗶𝗼𝗻 𝗳𝗿𝗼𝗺 𝗣𝗮𝗹𝗻 𝗹 𝗳𝗲𝗲𝗹 𝗮𝗹𝗹 𝘁𝗵𝗲 𝘁𝗶𝗺𝗲

 †𝑪𝒐𝒏𝒏𝒆𝒄𝒕 𝒖𝒔 ،-
__________________
 𖤐ᴍᴀɴɢᴇʀ ➤ $text","
 غرفـة مليئـه برائحـة السـجائر ورأس يضاجـعه الصـداع جسـد مهشـم وروح محتـرقه هكـذا  اقضـي اغـلب اوقاتـي ،

 †𝑪𝒐𝒏𝒏𝒆𝒄𝒕 𝒖𝒔 ،-
__________________
 𖤐ᴍᴀɴɢᴇʀ ➤$text","
 F𝙰𝙼𝙸𝙻𝚈 𝙸𝚂 𝙲𝙾𝙽𝚂𝙸𝙳𝙴𝚁𝙴𝙳 𝙰 𝙶𝚁𝙴𝙰𝚃 𝙲𝚁𝙸𝙼𝙴 𝚈𝙾𝚄𝙽𝙶 𝙼𝙰𝙽 𝙱𝙴𝙲𝙰𝚄𝚂𝙴 𝙸𝚃 𝙸𝙼𝙿𝙴𝙳𝙴𝚂 𝙷𝙸𝚂 𝙳𝚁𝙴𝙰𝙼𝚂 𝙰𝙽𝙳 𝙼𝙰𝙺𝙴 𝙷𝙸𝙼 𝙼𝙴𝙽𝚃𝙰𝙻𝙻𝚈

 †𝑪𝒐𝒏𝒏𝒆𝒄𝒕 𝒖𝒔 ،-
__________________
 𖤐ᴍᴀɴɢᴇʀ ➤ $text");
$chan = array_rand($channels,1);
if($text == "بايوات قنوات ❈"){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- حسنا قم بأرسال يوزر منشئ القناة فقط !
#في كل مره ترسل اليوزر ستحصل على بايو مختلف",
]);
file_put_contents("$from_id.json", "channel");}
if($mod == "channel"){
if ($chat_id != "$admin"){
if($text !='/start' and $text !='الرموز ☬' and $text !== "بايوات انستا ま" and $text !== "بايوات تلي ☽" and $text !== "بايوات قنوات ❈" and $text !== "" and $text !== "𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼" and $text !== "الرموز ☬" and $text !== "/start"){
if(preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"$channels[$chan]",]);}}}}

if($mod == "channel"){
if ($chat_id != "$admin"){
if($text !='/start' and $text !='الرموز ☬' and $text !== "بايوات انستا ま" and $text !== "بايوات تلي ☽" and $text !== "بايوات قنوات ❈" and $text !== "" and $text !== "𝒆𝒏𝒈𝒍𝒊𝒔𝒉 ☼" and $text !== "الرموز ☬" and $text !== "/start"){
if(!preg_match('/^(.*)@|@(.*)|(.*)@(.*)|(.*)#(.*)|#(.*)|(.*)#/',$text)){
bot('sendMessage', [
'chat_id'=>$chat_id,
'text'=>"- عذرا عزيزي قم بأرسال يوزر فقط كمثال @yyyyi",]);}}}}

