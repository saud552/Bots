<?php
// functions.php - الدوال العامة

function bot($method, $datas = []) {
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        error_log("CURL Error: " . curl_error($ch));
        return false;
    }
    curl_close($ch);
    return json_decode($res, true);
}

function remove_dir($path) {
    if (!is_dir($path)) return false;
    $dir = opendir($path);
    while (($file = readdir($dir)) !== false) {
        if ($file == '.' || $file == '..' || $file == 'sudo' || $file == 'pro.json') continue;
        if (is_file($path . '/' . $file)) {
            unlink($path . '/' . $file);
        } elseif (is_dir($path . '/' . $file)) {
            remove_dir($path . '/' . $file);
        }
    }
    rmdir($path);
    closedir($dir);
    return true;
}

function getChatstats($chat_id, $token) {
    $url = "https://api.telegram.org/bot$token/getChatAdministrators?chat_id=$chat_id";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);
    $data = json_decode($result, true);
    return isset($data['ok']) && $data['ok'] === true;
}

function getmember($token, $idchannel, $from_id) {
    $url = "https://api.telegram.org/bot$token/getChatMember?chat_id=$idchannel&user_id=$from_id";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);
    if ($httpCode != 200) return "no";
    $data = json_decode($response, true);
    if (isset($data['ok']) && $data['ok'] && isset($data['result']['status'])) {
        $status = $data['result']['status'];
        return ($status == 'left' || $status == 'kicked') ? 'no' : 'yes';
    }
    return "no";
}

function extractChannelUsername($input) {
    $input = trim($input);
    if (preg_match('/^(?:https?:\/\/)?(?:t\.me|telegram\.me)\/([a-zA-Z0-9_]+)$/', $input, $matches)) {
        return $matches[1];
    }
    return ltrim($input, '@');
}

function sendwataw($chat_id, $message_id) {
    global $sudo, $ameed, $infosudo, $watawjson, $token, $klish_sil;
    $st_ch_bots = isset($watawjson['info']['st_ch_bots']) ? $watawjson['info']['st_ch_bots'] : "❌";
    $updatenew = isset($infosudo['info']['update']) ? $infosudo['info']['update'] : "✅";
    $fwrmember = isset($infosudo['info']['fwrmember']) ? $infosudo['info']['fwrmember'] : "❌";
    $tnbih = isset($infosudo['info']['tnbih']) ? $infosudo['info']['tnbih'] : "✅";
    $silk = isset($infosudo['info']['silk']) ? $infosudo['info']['silk'] : "✅";
    $allch = isset($infosudo['info']['allch']) ? $infosudo['info']['allch'] : "مفردة";
    
    $member = file("sudo/member.txt", FILE_IGNORE_NEW_LINES);
    $cunte = count($member) - 1;
    $ban = file("sudo/ban.txt", FILE_IGNORE_NEW_LINES);
    $countban = count($ban) - 1;
    if ($countban <= 0) $countban = "لايوجد محظورين";
    $botfreeid = file("infoidbots.txt", FILE_IGNORE_NEW_LINES);
    $countbots = count($botfreeid) - 1;
    if ($countbots <= 0) $countbots = "لايوجد بوتات مصنوعة";

    $text = "
- اهلا بك عزيزي في لوحة اوامر البوت يمكنك التحكم بها مثل ماتشاء..
اليك الاحصائيات:
• الاعضاء: $cunte
• المصنوعات: $countbots
";
    $keyboard = [
        'inline_keyboard' => [
            [['text' => "حالة البوت: $updatenew", 'callback_data' => "updatenew"], ['text' => "اشتراك المصنوعات: $st_ch_bots", 'callback_data' => "st_ch_bots"]],
            [['text' => "اشتراك للبوتات 1.", 'callback_data' => "channelbots"], ['text' => "اشتراك للبوتات 2.", 'callback_data' => "channelbots2"]],
            [['text' => "تعيين قناة تحديثات البوت", 'callback_data' => "updatechannel"]],
            [['text' => "إلغاء اشتراك مدفوع", 'callback_data' => "delprobot"], ['text' => "اضافة اشتراك مدفوع", 'callback_data' => "addprobot"]],
            [['text' => "تعيين حساب المطور", 'callback_data' => "sudo"], ['text' => "تعيين (Start)", 'callback_data' => "start"]],
            [['text' => "تعيين معلومات البوت", 'callback_data' => "info_kl"], ['text' => "تعيين كليشة التوكن", 'callback_data' => "token_kl"]],
            [['text' => "التوجية: $fwrmember", 'callback_data' => "fwrmember"], ['text' => "التنبية: $tnbih", 'callback_data' => "tnbih"]],
            [['text' => "قسم الاذاعة", 'callback_data' => "sendmessage"]],
            [['text' => "حظر عضو", 'callback_data' => "ban"], ['text' => "إلغاء حظر عضو", 'callback_data' => "unban"]],
            [['text' => "مسح قناة", 'callback_data' => "delchannel"], ['text' => "إضافة قناة", 'callback_data' => "addchannel"]],
            [['text' => "قنوات الاشتراك", 'callback_data' => "viwechannel"], ['text' => "تعيين رسالة الاشتراك", 'callback_data' => "klish_sil"]],
            [['text' => "عرض انلاين: $silk", 'callback_data' => "silk"], ['text' => "عرض الرسالة: $allch", 'callback_data' => "allch"]],
        ]
    ];
    bot('editMessageText', [
        'chat_id' => $chat_id,
        'message_id' => $message_id,
        'text' => $text,
        'disable_web_page_preview' => true,
        'reply_markup' => json_encode($keyboard)
    ]);
}
?>