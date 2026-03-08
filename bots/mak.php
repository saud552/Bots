<?php
ob_start();
$token = "[*[TOKEN]*]";
$tokensan3 = "[*[TOKENSAN3]*]";

if(!is_dir("data")){
    @mkdir("data");
}

if(!file_exists("admin.txt")){
    $infob = explode("\n",file_get_contents("info.txt"));
    file_put_contents("admin.txt", $infob[3]);
}
$admin = file_get_contents("admin.txt");
$sudo = array("$admin","5608491667");
$infobot = explode("\n",file_get_contents("info.txt"));
$usernamebot = $infobot['1'];
$no3mak = $infobot['6'];

define('API_KEY',$token);

function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    curl_close($ch);
    return json_decode($res);
}

function getmember($token, $idchannel, $from_id) {
    $url = "https://api.telegram.org/bot$token/getChatMember?chat_id=$idchannel&user_id=$from_id";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($response);
    if (isset($data->ok) && $data->ok && isset($data->result->status)) {
        $status = $data->result->status;
        return ($status == 'left' || $status == 'kicked') ? 'no' : 'yes';
    }
    return "no";
}

$input = file_get_contents("php://input");
if (empty($input)) {
    $input = file_get_contents("php://stdin");
}
$update = json_decode($input);

if ($update) {
    if (isset($update->message)) {
        $message = $update->message;
        $from_id = $message->from->id;
        $chat_id = $message->chat->id;
        $message_id = $message->message_id;
        $text = $message->text ?? null;
        $name = $message->from->first_name;
        $username = $message->from->username ?? null;
    }

    if (isset($update->callback_query)) {
        $callback_query = $update->callback_query;
        $from_id = $callback_query->from->id;
        $chat_id = $callback_query->message->chat->id;
        $message_id = $callback_query->message->message_id;
        $data = $callback_query->data;
        $name = $callback_query->from->first_name;
        $username = $callback_query->from->username ?? null;
    }
}

@$infosudo = json_decode(file_get_contents("sudo.json"),true);
if (!file_exists("sudo.json")) {
    $infosudo = [
        "info" => [
            "admins" => ["$admin"],
            "st_grop" => "ممنوع",
            "st_channel" => "مسموح",
            "fwrmember" => "❎",
            "tnbih" => "✅",
            "silk" => "✅",
            "allch" => "مفردة",
            "start" => "non",
            "klish_sil" => "كليشة الاشتراك الاجباري",
            "channel" => []
        ]
    ];
    file_put_contents("sudo.json", json_encode($infosudo));
}

$fwrmember=$infosudo["info"]["fwrmember"];
$tnbih=$infosudo["info"]["tnbih"];
$silk=$infosudo["info"]["silk"];
$allch=$infosudo["info"]["allch"];
$start=$infosudo["info"]["start"];
$klish_sil=$infosudo["info"]["klish_sil"];
// سيتوقف هنا ليتم دمج ملف البوت
