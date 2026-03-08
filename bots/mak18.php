
<?php#*wataw*
#الاعلانات


$json = json_decode(file_get_contents("data/data.json"),true);
if (!file_exists("data/data.json")) {

	$json["info"]["st"]="معطل";
		$json["info"]["channel"]="لايوجد";
	file_put_contents("data/data.json", json_encode($json));
}
$st=	$json["info"]["st"];
$channelpost=	$json["info"]["channel"];
if($text=="/start" and  in_array($from_id,$sudo)){

				bot('sendmessage',[
					'chat_id'=>$chat_id,
					'text'=>"• مرحبا بك عزيزي الادمن في بوت الاعلانات الخاص بك  

- يمكنك تفعيل او تعطيل استقبال الاعلانات ,
- يمكنك تفعيل البوت في مجموعه وستقبال الاعلانات فيها انت والاعضاء الموجودين : ارسال تفعيل في المجموعه او في الخاص اذا اردت تعطيلها

- قناة النشر : $channelpost
",		
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- استقبال الاعلانات : $st ",'callback_data'=>"a3lanat"]],
[['text'=>"- ضبط قناة النشر  ",'callback_data'=>"channelpost"]],
 ]])

							]);
								$json["info"]["amr"]="non";
	file_put_contents("data/data.json", json_encode($json));

							
			}
function sendwataw3($chat_id,$message_id){
$json = json_decode(file_get_contents("data/data.json"),true);
$st=	$json["info"]["st"];
$channelpost=	$json["info"]["channel"];

bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"• مرحبا بك عزيزي الادمن في بوت الاعلانات الخاص بك  

- يمكنك تفعيل او تعطيل استقبال الاعلانات ,
- يمكنك تفعيل البوت في مجموعه وستقبال الاعلانات فيها انت والاعضاء الموجودين : ارسال تفعيل في المجموعه او في الخاص اذا اردت تعطيلها

- قناة النشر : $channelpost
",
'parse_mode'=>'markdown',
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"- استقبال الاعلانات : $st ",'callback_data'=>"a3lanat"]],
[['text'=>"- ضبط قناة النشر  ",'callback_data'=>"channelpost"]],
 ]])
							]);
			}
			
if($data == "a3lanat" and  in_array($from_id,$sudo)){
$json = json_decode(file_get_contents("data/data.json"),true);
$st=	$json["info"]["st"];
if($st=="مفعل"){
$json["info"]["st"]="معطل";
}
if($st=="معطل"){
$json["info"]["st"]="مفعل";
}
file_put_contents("data/data.json", json_encode($json));
sendwataw3($chat_id,$message_id);
}
if($data == "channelpost" and  in_array($from_id,$sudo)){
bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"قم بارسال معرف القناة فقط ",
"message_id"=>$message_id,
							]);
	$json["info"]["amr"]="yes";
	file_put_contents("data/data.json", json_encode($json));

}
if($text  and $text !="/start" and $json["info"]["amr"]=="yes" and in_array($from_id,$sudo) and !$message->forward_from_chat ){

$ch_id = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->id;
$idchan=$ch_id;
if($ch_id != null){

  $checkadmin = getChatstats($text,$token);
  if($checkadmin == true){
$namechannel = json_decode(file_get_contents("http://api.telegram.org/bot$token/getChat?chat_id=$text"))->result->title;
$json["info"]["channel"]="$text";

bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
✅ تم إضافة القناة بنجاح عزيزي الادمن 
info channel 
user : $text 
name : $namechannel
id : $ch_id
 ",

]);
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"❌ البوت ليس ادمن في القناة 
- قم برفع البوت اولا لكي تتمكن من إضافتها 
 ",
]);

}
}else{
bot('sendMessage',[
'chat_id'=>$chat_id, 
'text'=>"
❌ لم تتم إضافة القناة لا توجد قناة تمتلك هذا المعرف 
$text ",
]);
}
$json["info"]["amr"]="null";
file_put_contents("data/data.json", json_encode($json));
}







if($text=="/start" and  !in_array($from_id,$sudo)){

				bot('sendmessage',[
					'chat_id'=>$chat_id,
					'text'=>"• مرحبا ارسال اعلانك .


.
$txtfree",
'parse_mode'=>HTML,


							]);
			}
			
			
	$forward = $update->message->forward_from;
		$forwardd = $update->message->forward_from_chat;
	if($photo){
$sens="sendphoto";
$file_id = $update->message->photo[1]->file_id;
}
if($document){
$sens="senddocument";
$file_id = $update->message->document->file_id;
}
if($video){
$sens="sendvideo";
$file_id = $update->message->video->file_id;
}

if($audio){
$sens="sendaudio";
$file_id = $update->message->audio->file_id;
}

if($voice){
$sens="sendvoice";
$file_id = $update->message->voice->file_id;
}

if($sticker){
$sens="sendsticker";
$file_id = $update->message->sticker->file_id;
}
if($message and $text !="/start" && $text !="/sudo" and !$data and $type=="private" and  !in_array($from_id,$sudo) ){
if($forward or $forwardd){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تم ارسال اعلانك الى الادمن قم بانتظار الموافقة او الرفظ 
"
,'reply_to_message_id'=>$message_id,

]);

$rand=rand(1111111111,9999999999);


$json["info"]["$rand"]['send']="forward";
$json["info"]["$rand"]['method']="ForwardMessage";
$json["info"]["$rand"]['from_chat_id']="$chat_id";
$json["info"]["$rand"]['message_id']=$message->message_id;
$json["info"]["$rand"]['id']="$from_id";
$json["info"]["$rand"]['re']="$message_id";
file_put_contents("data/data.json", json_encode($json));




$get=bot('ForwardMessage',[
"chat_id"=>$admin,
"from_chat_id"=>$chat_id,
"message_id"=>"$message_id",
]);
$msg = $get->result->message_id;









bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"• اعلان جديد !

- المرسل : $name ($from_id)

- يمكنك الموافقه او الرفض  ❕",
'reply_to_message_id'=>$msg,
'disable_web_page_preview'=>true,

'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"قبول  ",'callback_data'=>"yesa3 $rand"],
['text'=>"رفض   ",'callback_data'=>"noa3 $rand"]],

 ]])
]);

}
}
	
if($message and $text !="/start" && $text !="/sudo" and !$data and $type=="private" and  !in_array($from_id,$sudo) ){
if(!$forward and !$forwardd){
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"✅ تم ارسال اعلانك الى الادمن قم بانتظار الموافقة او الرفظ 
"
,'reply_to_message_id'=>$message_id,

]);

if($text){

$rand=rand(1111111111,9999999999);


$json["info"]["$rand"]['send']="forward";
$json["info"]["$rand"]['method']="ForwardMessage";
$json["info"]["$rand"]['from_chat_id']="$chat_id";
$json["info"]["$rand"]['message_id']=$message->message_id;
$json["info"]["$rand"]['id']="$from_id";
file_put_contents("data/data.json", json_encode($json));


$json["info"]["$rand"]['send']="text";
$json["info"]["$rand"]['text']="$text";
$json["info"]["$rand"]['id']="$from_id";
$json["info"]["$rand"]['re']="$message_id";
file_put_contents("data/data.json", json_encode($json));




$get=bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"$text",
'disable_web_page_preview'=>true,

]);
$msg = $get->result->message_id;







}else{
$json["info"]["$rand"]['send']="media";
$json["info"]["$rand"]['method']="$sens";
$json["info"]["$rand"]['file_id']="$file_id";
$json["info"]["$rand"]['caption']=$caption;
$json["info"]["$rand"]['id']="$from_id";
$json["info"]["$rand"]['re']="$message_id";
file_put_contents("data/data.json", json_encode($json));

$ss=str_replace("send","",$sens);
$get=bot($sens,[
"chat_id"=>$admin,
"$ss"=>"$file_id",
'caption'=>"$caption",

]);

$msg = $get->result->message_id;



}
bot('sendMessage', [
'chat_id'=>$admin,
'text'=>"• اعلان جديد !

- المرسل : $name ($from_id)

- يمكنك الموافقه او الرفض  ❕",
'reply_to_message_id'=>$msg,
'disable_web_page_preview'=>true,

'reply_markup'=>json_encode([
'inline_keyboard'=>[
[['text'=>"قبول  ",'callback_data'=>"yesa3 $rand"],
['text'=>"رفض   ",'callback_data'=>"noa3 $rand"]],

 ]])
]);


}
}


if(preg_match('/^(yesa3) (.*)/s', $data)){
$rand = str_replace('yesa3 ',"",$data);
$json = json_decode(file_get_contents("data/data.json"),true);
$send=$json["info"]["$rand"]['send'];
$re=$json["info"]["$rand"]['re'];
$id=$json["info"]["$rand"]['re'];
$ch=$json["info"]["channel"];

if($send=="forward"){
$c=$json["info"]["$rand"]['from_chat_id'];

$m=$json["info"]["$rand"]['message_id'];
bot('ForwardMessage',[
"chat_id"=>$ch,
"from_chat_id"=>$c,
"message_id"=>"$m",
]);
}



if($send=="text"){
$txt=$json["info"]["$rand"]['text'];
bot('sendmessage',[
"chat_id"=>$ch,
"text"=>"$txt",
]);
}

if($send=="media"){
$sens=$json["info"]["$rand"]['method'];
$file_id=$json["info"]["$rand"]['file_id'];
$caption=$json["info"]["$rand"]['caption'];
$ss=str_replace("send","",$sens);
$get=bot($sens,[
"chat_id"=>$ch,
"$ss"=>"$file_id",
'caption'=>"$caption",
]);
}


bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>"تم نشر الاعلان بنجاح ✅
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
]);
unset($json["info"]["$rand"]);
file_put_contents("data/data.json", json_encode($json));

bot('sendMessage', [
'chat_id'=>$id,
'text'=>"تمت الموافقة على اعلانك وتم النشر ",
'reply_to_message_id'=>$re,
'disable_web_page_preview'=>true,


]);

}
if(preg_match('/^(noa3) (.*)/s', $data)){
$rand = str_replace('noa3 ',"",$data);
$json = json_decode(file_get_contents("data/data.json"),true);
$send=$json["info"]["$rand"]['send'];
$re=$json["info"]["$rand"]['re'];
$id=$json["info"]["$rand"]['re'];
$ch=$json["info"]["channel"];


bot('EditMessageText',[
'chat_id'=>$chat_id, 
'text'=>" تم رفض الاعلان ✅
",
'disable_web_page_preview'=>true,
"message_id"=>$message_id,
]);
unset($json["info"]["$rand"]);
file_put_contents("data/data.json", json_encode($json));

bot('sendMessage', [
'chat_id'=>$id,
'text'=>"🚫 تم رفض اعلانك ",
'reply_to_message_id'=>$re,
'disable_web_page_preview'=>true,


]);

}




