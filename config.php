<?php
// config.php - التهيئة والمتغيرات العامة

$token = "2002025793:AAE3eE3Li7zpAb2YLNCSk3SOW-9K3VgGX8o";
$user_bot_sudo = "Maikeyhmsabot";
define("API_KEY", $token);

$ameed = 985612253; // غيّره إلى معرف المطور الحقيقي
$sudo = array($ameed, 987654321);
$folder = "https://26531f88ec935fc4-104-236-39-35.serveousercontent.com/rido";

// إنشاء المجلدات والملفات
@mkdir("sudo");
@mkdir("data");
@mkdir("botmak");
@mkdir("user");
@mkdir("from_id");
@mkdir("wataw");

if (!file_exists("botmak/wataw.json")) {
    $watawjson = ["info" => ["st_ch_bots" => "❌", "user_bot" => $user_bot_sudo]];
    file_put_contents("botmak/wataw.json", json_encode($watawjson));
}
if (!file_exists("sudo.json")) {
    $infosudo = [
        "info" => [
            "update" => "✅",
            "propots" => "مجانية",
            "fwrmember" => "❌",
            "tnbih" => "✅",
            "silk" => "✅",
            "allch" => "مفردة",
            "klish_sil" => "كليشة الاشتراك الاجباري",
            "admins" => [],
            "channel" => []
        ]
    ];
    file_put_contents("sudo.json", json_encode($infosudo));
}
if (!file_exists("prodate.json")) file_put_contents("prodate.json", json_encode([]));
if (!file_exists("code.json")) file_put_contents("code.json", json_encode([]));
if (!file_exists("datatime.json")) file_put_contents("datatime.json", json_encode([]));
if (!file_exists("sudo/member.txt")) file_put_contents("sudo/member.txt", "");
if (!file_exists("sudo/ban.txt")) file_put_contents("sudo/ban.txt", "");
if (!file_exists("infoidbots.txt")) file_put_contents("infoidbots.txt", "");
if (!file_exists("botfreeid.txt")) file_put_contents("botfreeid.txt", "");
if (!file_exists("admin.txt")) file_put_contents("admin.txt", $ameed);

// قراءة الملفات
$watawjson = json_decode(file_get_contents("botmak/wataw.json"), true);
$infosudo = json_decode(file_get_contents("sudo.json"), true);
$prodate = json_decode(file_get_contents("prodate.json"), true);
$codejson = json_decode(file_get_contents("code.json"), true);
$datatime = json_decode(file_get_contents("datatime.json"), true);

// استخراج المتغيرات
$st_ch_bots = isset($watawjson['info']['st_ch_bots']) ? $watawjson['info']['st_ch_bots'] : "❌";
$updatenew = isset($infosudo['info']['update']) ? $infosudo['info']['update'] : "✅";
$propots = isset($infosudo['info']['propots']) ? $infosudo['info']['propots'] : "مجانية";
$fwrmember = isset($infosudo['info']['fwrmember']) ? $infosudo['info']['fwrmember'] : "❌";
$tnbih = isset($infosudo['info']['tnbih']) ? $infosudo['info']['tnbih'] : "✅";
$silk = isset($infosudo['info']['silk']) ? $infosudo['info']['silk'] : "✅";
$allch = isset($infosudo['info']['allch']) ? $infosudo['info']['allch'] : "مفردة";
$start = isset($infosudo['info']['start']) ? $infosudo['info']['start'] : "لم يتم تعيين كليشة /start من قبل المدير";
$info_kl = isset($infosudo['info']['info_kl']) ? $infosudo['info']['info_kl'] : "لم يتم تعيين الكليشة من قبل المدير";
$token_kl = isset($infosudo['info']['token_kl']) ? $infosudo['info']['token_kl'] : "\n- لإنشاء بوت قم بإرسال التوكن من بوت : \n( @botfather ).\nالان قم بارسال التوكن الخاص بك لصنع:\n";
$updatechannel = isset($infosudo['info']['updatechannel']) ? $infosudo['info']['updatechannel'] : "";
$admin = file_get_contents("admin.txt");
$ban = file("sudo/ban.txt", FILE_IGNORE_NEW_LINES);
$member = file("sudo/member.txt", FILE_IGNORE_NEW_LINES);
$cunte = count($member) - 1;
?>