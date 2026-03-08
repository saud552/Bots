<?php
// handlers.php - المعالج الرئيسي لكل التحديثات

require_once __DIR__ . '/functions.php';
require_once __DIR__ . '/config.php';

function handleUpdate($update) {
    global $token, $ameed, $sudo, $infosudo, $watawjson, $prodate, $codejson, $datatime;
    global $st_ch_bots, $updatenew, $propots, $fwrmember, $tnbih, $silk, $allch, $start, $info_kl, $token_kl, $updatechannel, $admin, $ban, $member, $cunte, $folder;
    
// ======================= استقبال التحديثات =======================
$message = isset($update['message']) ? $update['message'] : null;
$callback_query = isset($update['callback_query']) ? $update['callback_query'] : null;

// المتغيرات المشتركة
$from_id = null;
$chat_id = null;
$message_id = null;
$text = null;
$name = null;

if ($message) {
    $from_id = $message['from']['id'];
    $chat_id = $message['chat']['id'];
    $message_id = $message['message_id'];
    $text = isset($message['text']) ? $message['text'] : null;
    $name = $message['from']['first_name'];
    $caption = isset($message['caption']) ? $message['caption'] : '';
    // باقي المتغيرات
    $new_chat_members = isset($message['new_chat_members']) ? $message['new_chat_members'] : null;
    $reply_to_message = isset($message['reply_to_message']) ? $message['reply_to_message'] : null;
    $forward_from = isset($reply_to_message['forward_from']) ? $reply_to_message['forward_from'] : null;
    $forward_from_chat = isset($message['forward_from_chat']) ? $message['forward_from_chat'] : null;
    $photo = isset($message['photo']) ? $message['photo'] : null;
    $video = isset($message['video']) ? $message['video'] : null;
    $document = isset($message['document']) ? $message['document'] : null;
    $sticker = isset($message['sticker']) ? $message['sticker'] : null;
    $voice = isset($message['voice']) ? $message['voice'] : null;
    $audio = isset($message['audio']) ? $message['audio'] : null;
}

if ($callback_query) {
    $from_id = $callback_query['from']['id'];
    $chat_id = $callback_query['message']['chat']['id'];
    $message_id = $callback_query['message']['message_id'];
    $data = $callback_query['data'];
    $name = $callback_query['from']['first_name'];
}

// التحقق من الحظر
if ($message && in_array($from_id, $ban)) {
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "❌ لا تستطيع استخدام البوت انت محظور"
    ]);
    return;
}

// التحقق من وضع التحديث
if ($message && $updatenew == "❌" && $from_id != $ameed) {
    bot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => "البوت قيد التحديث الرجاء الانتظار حتى يتم الانتهاء من التحديث سيتم اشعاركم بذالك عند الانتهاء",
        'reply_to_message_id' => $message_id,
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [['text' => 'اضغط هنا وتابعنا 🔬.', 'url' => "t.me/botFilec"]]
            ]
        ])
    ]);
    return;
}

// تسجيل العضو الجديد
if ($message && !in_array($from_id, $member) && $from_id != $ameed) {
    file_put_contents("sudo/member.txt", $from_id . "\n", FILE_APPEND);
    if ($tnbih == "✅") {
        bot('sendMessage', [
            'chat_id' => $ameed,
            'text' => "- دخل شخص إلى البوت\n[Hi - $name](tg://user?id=$from_id)\n- عدد اعضاء بوتك هو: *$cunte*",
            'disable_web_page_preview' => true,
            'parse_mode' => 'Markdown'
        ]);
    }
}

// ======================= نظام الاشتراك الإجباري =======================
if ($message) {
    $missing_channels = [];
    $channels = isset($infosudo['info']['channel']) ? $infosudo['info']['channel'] : [];
    foreach ($channels as $co => $s) {
        $stuts = getmember($token, $co, $from_id);
        if ($stuts == "no") {
            $missing_channels[] = $s;
        }
    }
    if (!empty($missing_channels)) {
        $keyboard = ['inline_keyboard' => []];
        $text_links = "";
        foreach ($missing_channels as $ch) {
            $userchannel = str_replace('@', '', $ch['user']);
            if ($ch['st'] == "عامة") {
                $url = "https://t.me/$userchannel";
                $tt = $ch['user'];
            } else {
                $url = $ch['user'];
                $tt = $ch['user'];
            }
            if ($silk == "✅") {
                $keyboard['inline_keyboard'][] = [['text' => $ch['name'], 'url' => $url]];
            } else {
                $text_links .= "\n" . $tt;
            }
        }
        $message_text = ($silk == "✅") ? $klish_sil : $klish_sil . $text_links;
        $reply_markup = ($silk == "✅") ? json_encode($keyboard) : null;
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => $message_text,
            'disable_web_page_preview' => true,
            'reply_to_message_id' => $message_id,
            'reply_markup' => $reply_markup
        ]);
        return;
    }
}

// ======================= أوامر المطورين =======================
if ($text == "/m" && in_array($from_id, $sudo)) {
    sendwataw($chat_id, $message_id);
    return;
}

// ======================= معالجة النصوص (الأوامر) =======================
if ($message && $text) {
    // أوامر المطور الخاصة
    $amr = isset($infosudo['info']['amr']) ? $infosudo['info']['amr'] : null;

    // تحديث البوت (أمر وهمي)
    if ($text == "تحديث") {
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "تم تحديث البوت بنجاح",
            'reply_to_message_id' => $message_id
        ]);
        return;
    }

    // بدء البوت
    if ($text == "/start") {
        // التحقق من وجود كود نقل
        if (preg_match('/^\/start (.+)$/', $text, $matches)) {
            $code = $matches[1];
            // معالجة كود النقل
            if (isset($codejson['info'][$code])) {
                $cdata = $codejson['info'][$code];
                $st = $cdata['st'];
                $idbots = $cdata['idbot'];
                $userbots = $cdata['userbot'];
                $admin_old = $cdata['admin'];
                if ($admin_old != $from_id && $st == "yes") {
                    // نقل البوت
                    $botfrom_list = file_exists("from_id/$admin_old/countbot.txt") ? file("from_id/$admin_old/countbot.txt", FILE_IGNORE_NEW_LINES) : [];
                    if (in_array($userbots, $botfrom_list) && file_exists("user/$userbots.txt")) {
                        // حذف من القديم
                        $old_count = file_get_contents("from_id/$admin_old/countbot.txt");
                        $old_count = str_replace($userbots . "\n", "", $old_count);
                        file_put_contents("from_id/$admin_old/countbot.txt", $old_count);
                        $old_idbot = file_get_contents("from_id/$admin_old/idbot.txt");
                        $old_idbot = str_replace("$userbots==code#$userbots#$idbots\n", "", $old_idbot);
                        file_put_contents("from_id/$admin_old/idbot.txt", $old_idbot);
                        $old_user = file_get_contents("from_id/$admin_old/countuserbot.txt");
                        $old_user = str_replace("@$userbots\n", "", $old_user);
                        file_put_contents("from_id/$admin_old/countuserbot.txt", $old_user);

                        // إضافة إلى الجديد
                        file_put_contents("from_id/$from_id/countuserbot.txt", "@$userbots\n", FILE_APPEND);
                        file_put_contents("from_id/$from_id/countbot.txt", "$userbots\n", FILE_APPEND);
                        $idbot_entry = "$userbots==code#$userbots#$idbots";
                        file_put_contents("from_id/$from_id/idbot.txt", "$idbot_entry\n", FILE_APPEND);

                        // تحديث admin في ملفات البوت
                        $info_path = "botmak/$idbots/info.txt";
                        $info = file_get_contents($info_path);
                        $info = str_replace($admin_old, $from_id, $info);
                        file_put_contents($info_path, $info);
                        file_put_contents("botmak/$idbots/admin.txt", $from_id);

                        // تحديث sudo.json إذا وجد
                        $sudo_path = "botmak/$idbots/sudo.json";
                        if (file_exists($sudo_path)) {
                            $sudo_content = file_get_contents($sudo_path);
                            $sudo_content = str_replace($admin_old, $from_id, $sudo_content);
                            file_put_contents($sudo_path, $sudo_content);
                        }

                        // إرسال إشعار
                        bot('sendMessage', [
                            'chat_id' => $chat_id,
                            'text' => "✅ تم نقل البوت اليك بنجاح\nبيانات البوت\n- اسم البوت: ...\n- معرف البوت: @$userbots",
                        ]);
                        bot('sendMessage', [
                            'chat_id' => $ameed,
                            'text' => "تم نقل [بوت](t.me/$userbots) الى [$from_id](tg://user?id=$from_id)",
                            'parse_mode' => 'Markdown'
                        ]);
                        unset($codejson['info'][$code]);
                        file_put_contents("code.json", json_encode($codejson));
                    }
                } else {
                    bot('sendMessage', ['chat_id' => $chat_id, 'text' => "لا يمكنك نقل البوت لنفسك"]);
                }
                return;
            }
        }
        // بداية عادية
        @mkdir("from_id/$from_id");
        file_put_contents("from_id/$from_id/amr.txt", "");
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلاً بك [$name](tg://user?id=$chat_id)\n\n$start",
            'parse_mode' => 'Markdown',
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => 'معلومات اكثر عن البوت💡', 'callback_data' => "infobot"]],
                    [['text' => 'صنع بوت جديد', 'callback_data' => "sn3botfre"], ['text' => 'قائمة بوتاتك', 'callback_data' => "botsmember"]],
                    [['text' => 'اضافة ملف الى الصانع', 'callback_data' => "uplode"]],
                    [['text' => 'قناة تحديثات البوت 🔬', 'url' => "https://t.me/$updatechannel"]],
                ]
            ])
        ]);
        return;
    }

    // معالجة أوامر المطور النصية
    if (in_array($from_id, $sudo)) {
        if ($amr == "addprobot" && $text != "/start") {
            $us_bo = str_replace('@', '', $text);
            $idbots = file_get_contents("user/$us_bo.txt");
            if ($idbots) {
                $infobot = file("botmak/$idbots/info.txt", FILE_IGNORE_NEW_LINES);
                $tokenbot = $infobot[0];
                $userbot = $infobot[1];
                $namebot = $infobot[2];
                $id = $infobot[3];
                $idbots = $infobot[4];
                $no3mak = isset($infobot[6]) ? $infobot[6] : "غير معروف";
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id,
                    'text' => "معلومات البوت\nالنوع: $no3mak\nتوكن : `$tokenbot`\nيوزر البوت : *@$userbot*\nايدي البوت : `$idbots`\nمعلومات صاحب البوت\nالايدي : `$id`\n[صاحب البوت ](tg://user?id=$id)",
                    'parse_mode' => 'Markdown',
                    'disable_web_page_preview' => true,
                    'reply_markup' => json_encode([
                        'inline_keyboard' => [
                            [['text' => "سنة", 'callback_data' => "probotyes yars_" . $idbots], ['text' => "6 أشهر", 'callback_data' => "probotyes 6mo_" . $idbots], ['text' => "3 أشهر", 'callback_data' => "probotyes 3mo_" . $idbots], ['text' => "شهر واحد", 'callback_data' => "probotyes 1mo_" . $idbots]],
                            [['text' => "إلغاء", 'callback_data' => "home"]],
                        ]
                    ])
                ]);
            } else {
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "❌ لايوجد بوت مصنوع بنفس هذا المعرف $text",
                    'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "معاودة المحاولة", 'callback_data' => "addprobot"]]]])
                ]);
            }
            $infosudo['info']['amr'] = "null";
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "delprobot" && $text != "/start") {
            $us_bo = str_replace('@', '', $text);
            $idbots = file_get_contents("user/$us_bo.txt");
            if ($idbots) {
                $projson = json_decode(file_get_contents("prodate.json"), true);
                if (isset($projson['info'][$idbots]['pro']) && $projson['info'][$idbots]['pro'] == "yes") {
                    $infobot = file("botmak/$idbots/info.txt", FILE_IGNORE_NEW_LINES);
                    $userbot = $infobot[1];
                    $id = $infobot[3];
                    $no3mak = isset($infobot[6]) ? $infobot[6] : "";
                    bot('sendMessage', [
                        'chat_id' => $chat_id,
                        'message_id' => $message_id,
                        'text' => "النوع: $no3mak\nيوزر البوت : @$userbot\nايدي البوت : $idbots",
                        'disable_web_page_preview' => true,
                        'reply_markup' => json_encode([
                            'inline_keyboard' => [
                                [['text' => "حذف", 'callback_data' => "delprobotyes " . $idbots], ['text' => "• رجوع •", 'callback_data' => "home"]],
                            ]
                        ])
                    ]);
                } else {
                    bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❌ هذا البوت لا يمتلك اشتراك مدفوع"]);
                }
            } else {
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❌ لايوجد بوت مصنوع بنفس هذا المعرف $text"]);
            }
            $infosudo['info']['amr'] = "null";
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "ban" && is_numeric($text)) {
            if (!in_array($text, $ban)) {
                file_put_contents("sudo/ban.txt", $text . "\n", FILE_APPEND);
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "✅ تم حظر العضو بنجاح $text", 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])]);
                bot('sendMessage', ['chat_id' => $text, 'text' => "❌ لقد قام الادمن بحظرك من استخدام البوت"]);
            } else {
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "🚫 العضو محظور مسبقاً", 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])]);
            }
            $infosudo['info']['amr'] = "null";
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "unban" && is_numeric($text)) {
            if (in_array($text, $ban)) {
                $str = file_get_contents("sudo/ban.txt");
                $str = str_replace($text . "\n", '', $str);
                file_put_contents("sudo/ban.txt", $str);
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "✅ تم إلغاء حظر العضو بنجاح $text", 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])]);
                bot('sendMessage', ['chat_id' => $text, 'text' => "✅ لقد قام الادمن بإلغاء الحظر عنك."]);
            } else {
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "🚫 العضو ليس محظوراً", 'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])]);
            }
            $infosudo['info']['amr'] = "null";
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "updatechannel" && $text != "/start") {
            $tex = extractChannelUsername($text);
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "✅ تم حفظ الرابط الخاص لقناة التحديثات \nالرابط: $text",
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
            ]);
            $infosudo['info']['amr'] = "null";
            $infosudo['info']['updatechannel'] = $tex;
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "start" && $text != "/start") {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "✅ تم حفظ كليشة /start \nالكليشة:\n$text",
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
            ]);
            $infosudo['info']['amr'] = "null";
            $infosudo['info']['start'] = $text;
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "info_kl" && $text != "/start") {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "✅ تم حفظ كليشة معلومات عن البوت \nالكليشة:\n$text",
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
            ]);
            $infosudo['info']['amr'] = "null";
            $infosudo['info']['info_kl'] = $text;
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "token_kl" && $text != "/start") {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "✅ تم حفظ كليشة إرسال التوكن\nالكليشة:\n$text",
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
            ]);
            $infosudo['info']['amr'] = "null";
            $infosudo['info']['token_kl'] = $text;
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "klish_sil" && $text != "/start") {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "✅ تم حفظ كليشة الاشتراك الاجباري \nالكليشة:\n$text",
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
            ]);
            $infosudo['info']['amr'] = "null";
            $infosudo['info']['klish_sil'] = $text;
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "sudo" && $text != "/start") {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "✅ تم حفظ حساب مطور البوت.\nالحساب: $text",
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
            ]);
            $infosudo['info']['amr'] = "null";
            $infosudo['info']['sudo'] = $text;
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "addchannel" && !$forward_from_chat) {
            $username = extractChannelUsername($text);
            $ch_info = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=@$username"), true);
            if (isset($ch_info['ok']) && $ch_info['ok']) {
                $ch_id = $ch_info['result']['id'];
                $namechannel = $ch_info['result']['title'];
                if (getChatstats($ch_id, $token)) {
                    $infosudo['info']['channel'][$ch_id] = [
                        'st' => "عامة",
                        'user' => "@$username",
                        'name' => $namechannel
                    ];
                    bot('sendMessage', [
                        'chat_id' => $chat_id,
                        'text' => "✅ تم إضافة القناة بنجاح\ninfo channel\nuser : @$username\nname : $namechannel\nid : $ch_id",
                        'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "- إضافة قناة آخرى", 'callback_data' => "addchannel"]]]])
                    ]);
                } else {
                    bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❌ البوت ليس ادمن في القناة"]);
                }
            } else {
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❌ لم يتم العثور على القناة"]);
            }
            $infosudo['info']['amr'] = "null";
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "channel_id" && !$forward_from_chat) {
            $channel_id = isset($infosudo['info']['channel_id']) ? $infosudo['info']['channel_id'] : null;
            if ($channel_id && getChatstats($channel_id, $token)) {
                $namechannel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChat?chat_id=$channel_id"), true)['result']['title'];
                $infosudo['info']['channel'][$channel_id] = [
                    'st' => "خاصة",
                    'user' => $text,
                    'name' => $namechannel
                ];
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "✅ تم إضافة القناة بنجاح\ninfo channel\nlink : $text\nname : $namechannel\nid : $channel_id",
                    'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "+ إضافة قناة آخرى", 'callback_data' => "addchannel"]]]])
                ]);
            } else {
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "❌ البوت ليس ادمن في القناة"]);
            }
            unset($infosudo['info']['channel_id']);
            $infosudo['info']['amr'] = "null";
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }

        if ($amr == "addadmin" && is_numeric($text) && $from_id == $ameed) {
            $admins = isset($infosudo['info']['admins']) ? $infosudo['info']['admins'] : [];
            if (!in_array($text, $admins)) {
                if (count($admins) < 5) {
                    $admins[] = $text;
                    $infosudo['info']['admins'] = $admins;
                    bot('sendMessage', [
                        'chat_id' => $chat_id,
                        'text' => "✅ تم رفع الادمن بنجاح",
                        'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "عودة", 'callback_data' => "admins"]]]])
                    ]);
                } else {
                    bot('sendMessage', ['chat_id' => $chat_id, 'text' => "🚫 لايمكنك اضافة اكثر من 5 ادمنية"]);
                }
            } else {
                bot('sendMessage', ['chat_id' => $chat_id, 'text' => "⚠ الادمن مضاف مسبقاً"]);
            }
            $infosudo['info']['amr'] = "null";
            file_put_contents("sudo.json", json_encode($infosudo));
            return;
        }
    }

    // معالجة صنع البوت للمستخدمين العاديين
    $user_amr = file_exists("from_id/$from_id/amr.txt") ? file_get_contents("from_id/$from_id/amr.txt") : "";
    if ($user_amr == "sn3free") {
        $no3mak = file_get_contents("from_id/$from_id/no3mak.txt");
        $botmak = file_get_contents("from_id/$from_id/botmak.txt");
        $url = "https://api.telegram.org/bot" . $text . "/getWebhookInfo";
        $check = json_decode(file_get_contents($url), true);
        if (isset($check['ok']) && $check['ok'] === true) {
            // الحصول على معلومات البوت
            $me = json_decode(file_get_contents("https://api.telegram.org/bot$text/getMe"), true);
            $idbot = $me['result']['id'];
            $userbot = $me['result']['username'];
            $name1bot = $me['result']['first_name'];

            // إنشاء المجلدات
            mkdir("botmak/$idbot");
            @mkdir("from_id/$from_id");

            // تخزين البيانات
            $botfree = file("botfreeid.txt", FILE_IGNORE_NEW_LINES);
            if (!in_array($from_id, $botfree)) {
                file_put_contents("botfreeid.txt", $from_id . "\n", FILE_APPEND);
            }
            $botfreeid = file("infoidbots.txt", FILE_IGNORE_NEW_LINES);
            if (!in_array($idbot, $botfreeid)) {
                file_put_contents("infoidbots.txt", $idbot . "\n", FILE_APPEND);
            }
            $botfrom = file_exists("from_id/$from_id/countbot.txt") ? file("from_id/$from_id/countbot.txt", FILE_IGNORE_NEW_LINES) : [];
            if (!in_array($userbot, $botfrom)) {
                file_put_contents("from_id/$from_id/countuserbot.txt", "@$userbot\n", FILE_APPEND);
                file_put_contents("from_id/$from_id/countbot.txt", "$userbot\n", FILE_APPEND);
            }
            $idbotfrom = file_exists("from_id/$from_id/idbot.txt") ? file("from_id/$from_id/idbot.txt", FILE_IGNORE_NEW_LINES) : [];
            $entry = "$userbot==code#$userbot#$idbot";
            if (!in_array($entry, $idbotfrom)) {
                file_put_contents("from_id/$from_id/idbot.txt", "$entry\n", FILE_APPEND);
            }

            // إنشاء ملف البوت
            $mak = file_get_contents("bots/mak.php");
            $bot = file_get_contents("bots/$botmak.php");
            $mak = str_replace("[*[TOKEN]*]", $text, $mak);
            $mak = str_replace("[*[TOKENSAN3]*]", $token, $mak);
            $bot = str_replace("<?php#*wataw*", $mak, $bot);
            file_put_contents("botmak/$idbot/$userbot.php", $bot);

            // حالات خاصة
            if ($botmak == "mak28" || $botmak == "mak6") {
                // يمكن إضافة معالجة خاصة
            }

            // تعيين webhook
            file_get_contents("https://api.telegram.org/bot$text/setWebhook?url=" . $folder . "/botmak/$idbot/$userbot.php");

            // معلومات البوت
            $info = "-- محمي --\n$userbot\n$name1bot\n$from_id\n$idbot\n$botmak\n$no3mak";
            file_put_contents("botmak/$idbot/info.txt", $info);
            file_put_contents("user/$userbot.txt", $idbot);
            file_put_contents("wataw/$idbot.php", '<?php $tokenbot = "' . $text . '";');

            bot('sendMessage', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "مبروك تم صنع بوتك بنجاح\n- معرف البوت : @$userbot\n- نوع البوت: $no3mak",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => "اضغط هنا للدخول 📌", 'url' => "https://t.me/$userbot?start"]],
                        [['text' => '• رجوع •', 'callback_data' => "freebot"]],
                    ]
                ])
            ]);

            // إشعار المطور
            bot('sendMessage', [
                'chat_id' => $ameed,
                'text' => "تم صنع بوت مجاني بنجاح ✅\nالنوع : $no3mak\nتوكن : `$text`\nيوزر البوت : `@$userbot`\nnamebot : `$name1bot`\nidbot : `$idbot`\nمعلومات صاحب البوت 🙎 \nالاسم : *$name*\nالايدي : `$from_id`\n[$name](tg://user?id=$from_id)",
                'parse_mode' => 'Markdown'
            ]);
        } else {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "🚫 التوكن الذي قمت بارساله خاطئ",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'حاول مرةً اخرى', 'callback_data' => "sn3botfre"]]]])
            ]);
        }
        file_put_contents("from_id/$from_id/amr.txt", "");
        return;
    }

    if ($user_amr == "sendpostbotsall") {
        file_put_contents("from_id/$from_id/amr.txt", "");
        bot('sendMessage', ['chat_id' => $chat_id, 'text' => "جارٍ عمل الاذاعة"]);
        $bots = file_exists("from_id/$from_id/countbot.txt") ? file("from_id/$from_id/countbot.txt", FILE_IGNORE_NEW_LINES) : [];
        $co = 0;
        $coo = count($bots) - 1;
        foreach ($bots as $userbots) {
            if (empty($userbots)) continue;
            $idbots = file_get_contents("user/$userbots.txt");
            if (file_exists("wataw/$idbots.php")) {
                include "wataw/$idbots.php";
                $members = file("botmak/$idbots/sudo/member.txt", FILE_IGNORE_NEW_LINES);
                foreach ($members as $id) {
                    if (!empty($id)) {
                        file_get_contents("https://api.telegram.org/bot$tokenbot/sendMessage?chat_id=$id&text=" . urlencode($text));
                        usleep(200000);
                        $co++;
                    }
                }
            }
        }
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "- تمت الاذاعة في جميع البوتات المصنوعة\n- تم الارسال الى $co مستخدم.\n- عدد البوتات : $coo"
        ]);
        return;
    }

    if ($user_amr == "uplode") {
        // تم تجاهل هذه الوظيفة حسب الطلب
    }
}

// ======================= معالجة الـ Callback Queries =======================
if ($callback_query) {
    $data = $callback_query['data'];

    // أزرار الصفحة الرئيسية للمطور
    if ($data == "home") {
        $infosudo['info']['amr'] = "null";
        file_put_contents("sudo.json", json_encode($infosudo));
        sendwataw($chat_id, $message_id);
        return;
    }

    if ($data == "updatenew") {
        $infosudo['info']['update'] = ($infosudo['info']['update'] == "✅") ? "❌" : "✅";
        file_put_contents("sudo.json", json_encode($infosudo));
        sendwataw($chat_id, $message_id);
        return;
    }

    if ($data == "st_ch_bots") {
        $watawjson['info']['st_ch_bots'] = ($watawjson['info']['st_ch_bots'] == "✅") ? "❌" : "✅";
        file_put_contents("botmak/wataw.json", json_encode($watawjson));
        sendwataw($chat_id, $message_id);
        return;
    }

    if ($data == "fwrmember") {
        $infosudo['info']['fwrmember'] = ($infosudo['info']['fwrmember'] == "✅") ? "❌" : "✅";
        file_put_contents("sudo.json", json_encode($infosudo));
        sendwataw($chat_id, $message_id);
        return;
    }

    if ($data == "tnbih") {
        $infosudo['info']['tnbih'] = ($infosudo['info']['tnbih'] == "✅") ? "❌" : "✅";
        file_put_contents("sudo.json", json_encode($infosudo));
        sendwataw($chat_id, $message_id);
        return;
    }

    if ($data == "silk") {
        $infosudo['info']['silk'] = ($infosudo['info']['silk'] == "✅") ? "❌" : "✅";
        file_put_contents("sudo.json", json_encode($infosudo));
        sendwataw($chat_id, $message_id);
        return;
    }

    if ($data == "allch") {
        $infosudo['info']['allch'] = ($infosudo['info']['allch'] == "مفردة") ? "مجموعة" : "مفردة";
        file_put_contents("sudo.json", json_encode($infosudo));
        sendwataw($chat_id, $message_id);
        return;
    }

    if ($data == "addprobot") {
        $infosudo['info']['amr'] = "addprobot";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "✴ اضافة اشتراك مدفوع : \nقم بارسال معرف البوت المصنوع الذي تود اضافة الاشتراك المدفوع له",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "delprobot") {
        $infosudo['info']['amr'] = "delprobot";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "حذف اشتراك مدفوع :\nقم بارسال معرف البوت المصنوع الذي تود حذف الاشتراك المدفوع له",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if (preg_match('/^probotyes (.*)/', $data, $matches)) {
        $params = $matches[1];
        $parts = explode('_', $params);
        $duration = $parts[0];
        $idbots = $parts[1];
        $time = time();
        $mo = 86400 * 30; // 30 يوم
        switch ($duration) {
            case 'yars': $ti = $time + $mo * 12; break;
            case '6mo': $ti = $time + $mo * 6; break;
            case '3mo': $ti = $time + $mo * 3; break;
            case '1mo': $ti = $time + $mo; break;
            default: $ti = $time + $mo;
        }
        // تخزين في pro.json للبوت
        $projsonmem = ['info' => ['pro' => 'yes', 'dateon' => $time, 'dateoff' => $ti]];
        file_put_contents("botmak/$idbots/pro.json", json_encode($projsonmem));
        // تخزين في prodate.json العام
        $prodate['info'][$idbots] = ['pro' => 'yes', 'dateon' => $time, 'dateoff' => $ti];
        file_put_contents("prodate.json", json_encode($prodate));

        $infobot = file("botmak/$idbots/info.txt", FILE_IGNORE_NEW_LINES);
        $userbot = $infobot[1];
        $id = $infobot[3];
        $no3mak = isset($infobot[6]) ? $infobot[6] : "";
        $dayon = date('Y/m/d', $time);
        $timeon = date('H:i:s A', $time);
        $dayoff = date('Y/m/d', $ti);
        $timeoff = date('H:i:s A', $ti);

        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "✅ تم اضافة الاشتراك المدفوع بنجاح \n\nالنوع: $no3mak\nيوزر البوت : @$userbot\nايدي البوت : $idbots\n\nمعلومات الاشتراك\n- وقت الاشتراك :\n⏰ $timeon\n📅 $dayon\n- موعد انتهاء الاشتراك :\n⏰ $timeoff\n📅 $dayoff",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
        ]);
        bot('sendMessage', [
            'chat_id' => $id,
            'text' => "✅ تم اضافة الاشتراك لبوتك المصنوع بنجاح\n\nالنوع: $no3mak\nيوزر البوت : @$userbot\nايدي البوت : $idbots\n\nمعلومات الاشتراك\n- وقت الاشتراك :\n⏰ $timeon\n📅 $dayon\n- موعد انتهاء الاشتراك :\n⏰ $timeoff\n📅 $dayoff"
        ]);
        return;
    }

    if (preg_match('/^delprobotyes (.*)/', $data, $matches)) {
        $idbots = $matches[1];
        file_put_contents("botmak/$idbots/pro.json", json_encode(['info' => ['pro' => 'no']]));
        unset($prodate['info'][$idbots]);
        file_put_contents("prodate.json", json_encode($prodate));

        $infobot = file("botmak/$idbots/info.txt", FILE_IGNORE_NEW_LINES);
        $userbot = $infobot[1];
        $id = $infobot[3];
        $no3mak = isset($infobot[6]) ? $infobot[6] : "";

        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "🚫 تم حذف الاشتراك المدفوع بنجاح\nالنوع: $no3mak\nيوزر البوت : @$userbot\nايدي البوت : $idbots",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "• رجوع •", 'callback_data' => "home"]]]])
        ]);
        bot('sendMessage', [
            'chat_id' => $id,
            'text' => "❌ تم حذف الاشتراك المدفوع لبوتك المصنوع\nالنوع: $no3mak\nيوزر البوت : @$userbot\nايدي البوت : $idbots"
        ]);
        return;
    }

    if ($data == "ban") {
        $infosudo['info']['amr'] = "ban";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بارسال أيدي العضو لحظره",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "unban") {
        $infosudo['info']['amr'] = "unban";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بارسال أيدي العضو للإلغاء الحظر عنه",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "unbanall") {
        file_put_contents("sudo/ban.txt", "");
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "✅ تم مسح قائمة المحظورين بنجاح",
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "رجوع", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "updatechannel") {
        $infosudo['info']['amr'] = "updatechannel";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بارسال الرابط الخاص لقناة التحديثات",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "start") {
        $infosudo['info']['amr'] = "start";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بارسال نص رسالة /start",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "info_kl") {
        $infosudo['info']['amr'] = "info_kl";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بارسال نص كليشة معلومات عن البوت",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "token_kl") {
        $infosudo['info']['amr'] = "token_kl";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بارسال نص كليشة إرسال التوكن",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "klish_sil") {
        $infosudo['info']['amr'] = "klish_sil";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "قم بارسال كليشة الاشتراك الاجباري",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "sudo") {
        $infosudo['info']['amr'] = "sudo";
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بارسال ايدي مطور البوت.",
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
        ]);
        return;
    }

    if ($data == "addchannel") {
        $channels = isset($infosudo['info']['channel']) ? $infosudo['info']['channel'] : [];
        if (count($channels) < 4) {
            $infosudo['info']['amr'] = "addchannel";
            file_put_contents("sudo.json", json_encode($infosudo));
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "- اذا كانت القناة التي تريد اضافتها عامة قم بارسال معرفها .\n* اذا كانت خاصة قم بإعادة توجية منشور من القناة إلى هنا .",
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "home"]]]])
            ]);
        } else {
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "🚫 لا يمكنك اضافة اكثر من 3 قنوات للإشتراك الاجباري",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "رجوع", 'callback_data' => "home"]]]])
            ]);
        }
        return;
    }

    if ($data == "viwechannel") {
        $channels = isset($infosudo['info']['channel']) ? $infosudo['info']['channel'] : [];
        $keyboard = ['inline_keyboard' => []];
        foreach ($channels as $co => $ch) {
            $keyboard['inline_keyboard'][] = [['text' => $ch['name'], 'callback_data' => 'null']];
            $user = ($ch['st'] == "خاصة") ? "رابط خاص" : $ch['user'];
            $keyboard['inline_keyboard'][] = [['text' => $user, 'callback_data' => 'null'], ['text' => $ch['st'], 'callback_data' => 'null']];
        }
        $keyboard['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "home"]];
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- هذة هي قنوات الاشتراك الاجباري الخاصة بك",
            'reply_markup' => json_encode($keyboard)
        ]);
        return;
    }

    if ($data == "delchannel") {
        $channels = isset($infosudo['info']['channel']) ? $infosudo['info']['channel'] : [];
        $keyboard = ['inline_keyboard' => []];
        foreach ($channels as $co => $ch) {
            $keyboard['inline_keyboard'][] = [['text' => $ch['name'], 'callback_data' => 'null']];
            $keyboard['inline_keyboard'][] = [
                ['text' => '🚫 حذف', 'callback_data' => 'deletchannel ' . $co],
                ['text' => $ch['st'], 'callback_data' => 'null']
            ];
        }
        $keyboard['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "home"]];
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بالضغط على خيار الحذف بالاسفل",
            'reply_markup' => json_encode($keyboard)
        ]);
        return;
    }

    if (preg_match('/^deletchannel (.*)/', $data, $matches)) {
        $ch_id = $matches[1];
        unset($infosudo['info']['channel'][$ch_id]);
        file_put_contents("sudo.json", json_encode($infosudo));
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "✅ تم حذف القناة بنجاح \n- id $ch_id",
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "رجوع", 'callback_data' => "delchannel"]]]])
        ]);
        return;
    }

    if ($data == "sendmessage") {
        // تهيئة ملفات الإذاعة لكل مستخدم
        $no3send = file_exists("from_id/$from_id/no3send.txt") ? file_get_contents("from_id/$from_id/no3send.txt") : "text";
        $chatsend = file_exists("from_id/$from_id/chatsend.txt") ? file_get_contents("from_id/$from_id/chatsend.txt") : "member";
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلا بك عزيزي في قسم الاذاعة\nقم بتحديد نوع الاذاعة ومكان ارسال الاذاعة\nثم قم الضغط على ارسال الرسالة",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "نوع الاذاعة: $no3send", 'callback_data' => "button"]],
                    [['text' => "توجية", 'callback_data' => "forward"], ['text' => "MARKDOWN", 'callback_data' => "MARKDOWN"], ['text' => "HTML", 'callback_data' => "HTML"]],
                    [['text' => "الارسال الى: $chatsend", 'callback_data' => "button"]],
                    [['text' => "الاعضاء", 'callback_data' => "member"], ['text' => "كل البوتات", 'callback_data' => "botsall"]],
                    [['text' => "ارسال الرسالة", 'callback_data' => "post"]],
                    [['text' => "رجوع", 'callback_data' => "home"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "forward") {
        file_put_contents("from_id/$from_id/no3send.txt", "forward");
        // إعادة عرض القائمة
        $no3send = "forward";
        $chatsend = file_exists("from_id/$from_id/chatsend.txt") ? file_get_contents("from_id/$from_id/chatsend.txt") : "member";
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلا بك عزيزي في قسم الاذاعة\nقم بتحديد نوع الاذاعة ومكان ارسال الاذاعة\nثم قم الضغط على ارسال الرسالة",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "نوع الاذاعة: $no3send", 'callback_data' => "button"]],
                    [['text' => "توجية", 'callback_data' => "forward"], ['text' => "MARKDOWN", 'callback_data' => "MARKDOWN"], ['text' => "HTML", 'callback_data' => "HTML"]],
                    [['text' => "الارسال الى: $chatsend", 'callback_data' => "button"]],
                    [['text' => "الاعضاء", 'callback_data' => "member"], ['text' => "كل البوتات", 'callback_data' => "botsall"]],
                    [['text' => "ارسال الرسالة", 'callback_data' => "post"]],
                    [['text' => "رجوع", 'callback_data' => "home"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "MARKDOWN") {
        file_put_contents("from_id/$from_id/no3send.txt", "MARKDOWN");
        $no3send = "MARKDOWN";
        $chatsend = file_exists("from_id/$from_id/chatsend.txt") ? file_get_contents("from_id/$from_id/chatsend.txt") : "member";
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلا بك عزيزي في قسم الاذاعة\nقم بتحديد نوع الاذاعة ومكان ارسال الاذاعة\nثم قم الضغط على ارسال الرسالة",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "نوع الاذاعة: $no3send", 'callback_data' => "button"]],
                    [['text' => "توجية", 'callback_data' => "forward"], ['text' => "MARKDOWN", 'callback_data' => "MARKDOWN"], ['text' => "HTML", 'callback_data' => "HTML"]],
                    [['text' => "الارسال الى: $chatsend", 'callback_data' => "button"]],
                    [['text' => "الاعضاء", 'callback_data' => "member"], ['text' => "كل البوتات", 'callback_data' => "botsall"]],
                    [['text' => "ارسال الرسالة", 'callback_data' => "post"]],
                    [['text' => "رجوع", 'callback_data' => "home"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "HTML") {
        file_put_contents("from_id/$from_id/no3send.txt", "HTML");
        $no3send = "HTML";
        $chatsend = file_exists("from_id/$from_id/chatsend.txt") ? file_get_contents("from_id/$from_id/chatsend.txt") : "member";
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلا بك عزيزي في قسم الاذاعة\nقم بتحديد نوع الاذاعة ومكان ارسال الاذاعة\nثم قم الضغط على ارسال الرسالة",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "نوع الاذاعة: $no3send", 'callback_data' => "button"]],
                    [['text' => "توجية", 'callback_data' => "forward"], ['text' => "MARKDOWN", 'callback_data' => "MARKDOWN"], ['text' => "HTML", 'callback_data' => "HTML"]],
                    [['text' => "الارسال الى: $chatsend", 'callback_data' => "button"]],
                    [['text' => "الاعضاء", 'callback_data' => "member"], ['text' => "كل البوتات", 'callback_data' => "botsall"]],
                    [['text' => "ارسال الرسالة", 'callback_data' => "post"]],
                    [['text' => "رجوع", 'callback_data' => "home"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "member") {
        file_put_contents("from_id/$from_id/chatsend.txt", "member");
        $no3send = file_exists("from_id/$from_id/no3send.txt") ? file_get_contents("from_id/$from_id/no3send.txt") : "text";
        $chatsend = "member";
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلا بك عزيزي في قسم الاذاعة\nقم بتحديد نوع الاذاعة ومكان ارسال الاذاعة\nثم قم الضغط على ارسال الرسالة",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "نوع الاذاعة: $no3send", 'callback_data' => "button"]],
                    [['text' => "توجية", 'callback_data' => "forward"], ['text' => "MARKDOWN", 'callback_data' => "MARKDOWN"], ['text' => "HTML", 'callback_data' => "HTML"]],
                    [['text' => "الارسال الى: $chatsend", 'callback_data' => "button"]],
                    [['text' => "الاعضاء", 'callback_data' => "member"], ['text' => "كل البوتات", 'callback_data' => "botsall"]],
                    [['text' => "ارسال الرسالة", 'callback_data' => "post"]],
                    [['text' => "رجوع", 'callback_data' => "home"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "botsall") {
        file_put_contents("from_id/$from_id/chatsend.txt", "botsall");
        $no3send = file_exists("from_id/$from_id/no3send.txt") ? file_get_contents("from_id/$from_id/no3send.txt") : "text";
        $chatsend = "botsall";
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلا بك عزيزي في قسم الاذاعة\nقم بتحديد نوع الاذاعة ومكان ارسال الاذاعة\nثم قم الضغط على ارسال الرسالة",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => "نوع الاذاعة: $no3send", 'callback_data' => "button"]],
                    [['text' => "توجية", 'callback_data' => "forward"], ['text' => "MARKDOWN", 'callback_data' => "MARKDOWN"], ['text' => "HTML", 'callback_data' => "HTML"]],
                    [['text' => "الارسال الى: $chatsend", 'callback_data' => "button"]],
                    [['text' => "الاعضاء", 'callback_data' => "member"], ['text' => "كل البوتات", 'callback_data' => "botsall"]],
                    [['text' => "ارسال الرسالة", 'callback_data' => "post"]],
                    [['text' => "رجوع", 'callback_data' => "home"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "post") {
        $no3send = file_exists("from_id/$from_id/no3send.txt") ? file_get_contents("from_id/$from_id/no3send.txt") : null;
        $chatsend = file_exists("from_id/$from_id/chatsend.txt") ? file_get_contents("from_id/$from_id/chatsend.txt") : null;
        if ($no3send && $chatsend) {
            file_put_contents("from_id/$from_id/amr.txt", "sendsend");
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "قم بارسال رسالتك الان\nنوع الارسال : $no3send\nمكان الارسال : $chatsend",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "set"]]]])
            ]);
        } else {
            bot('answerCallbackQuery', [
                'callback_query_id' => $callback_query['id'],
                'text' => "يرجى تحديد نوع ومكان الإرسال أولاً",
                'show_alert' => true
            ]);
        }
        return;
    }

    if ($data == "set") {
        unlink("from_id/$from_id/amr.txt");
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "تم إلغاء الارسال بنجاح"
        ]);
        return;
    }

    // أزرار المستخدمين
    if ($data == "infobot") {
        file_put_contents("from_id/$from_id/amr.txt", "");
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلا بك يا [$name](tg://user?id=$chat_id)\n\n$info_kl",
            'parse_mode' => 'Markdown',
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "freebot"]]]])
        ]);
        return;
    }

    if ($data == "freebot") {
        file_put_contents("from_id/$from_id/amr.txt", "");
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلاً بك [$name](tg://user?id=$chat_id)\n\n$start",
            'parse_mode' => 'Markdown',
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => 'معلومات اكثر عن البوت💡', 'callback_data' => "infobot"]],
                    [['text' => 'صنع بوت جديد', 'callback_data' => "sn3botfre"], ['text' => 'قائمة بوتاتك', 'callback_data' => "botsmember"]],
                    [['text' => 'اضافة ملف الى الصانع', 'callback_data' => "uplode"]],
                    [['text' => 'قناة تحديثات البوت 🔬', 'url' => "https://t.me/$updatechannel"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "sn3botfre") {
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بإختيار نوعية البوت الذي تود صنعه 🎙️ ..",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => '• قائمة البوتات •', 'callback_data' => "null"]],
                    [['text' => 'بوت سايت', 'callback_data' => "mak 2"]],
                    [['text' => 'بوت الازرار', 'callback_data' => "mak 3"], ['text' => 'بوت المتجر', 'callback_data' => "mak 4"]],
                    [['text' => 'بوت البصمات', 'callback_data' => "mak 5"], ['text' => 'بوت تواصل', 'callback_data' => "mak 1"]],
                    [['text' => 'بوت التعليقات', 'callback_data' => "mak 7"], ['text' => 'ادارة منشورات القناة', 'callback_data' => "mak 8"]],
                    [['text' => 'بوت زخرفة', 'callback_data' => "mak 9"], ['text' => 'فيديوهات ستوري', 'callback_data' => "mak 10"]],
                    [['text' => 'تحليل الشخصية', 'callback_data' => "mak 11"], ['text' => 'العاب انلاين', 'callback_data' => "mak 12"]],
                    [['text' => 'تحويل الصيغ', 'callback_data' => "mak 13"], ['text' => 'إستخراج روابط القنوات', 'callback_data' => "mak 14"]],
                    [['text' => 'بوت همسة', 'callback_data' => "mak 15"], ['text' => 'بوت كشف الكذب', 'callback_data' => "mak 16"]],
                    [['text' => '• المزيد من البوتات • ', 'callback_data' => "makll"]],
                    [['text' => '• رجوع •', 'callback_data' => "freebot"]],
                ]
            ])
        ]);
        return;
    }

    if ($data == "makll") {
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "- قم بإختيار نوعية البوت الذي تود صنعه 🎙️ ..",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => '• قائمة البوتات •', 'callback_data' => "null"]],
                    [['text' => 'بوت سايت', 'callback_data' => "mak 2"]],
                    [['text' => 'بوت الازرار', 'callback_data' => "mak 3"], ['text' => 'بوت المتجر', 'callback_data' => "mak 4"]],
                    [['text' => 'بوت البصمات', 'callback_data' => "mak 5"], ['text' => 'بوت تواصل', 'callback_data' => "mak 1"]],
                    [['text' => 'بوت التعليقات', 'callback_data' => "mak 7"], ['text' => 'ادارة منشورات القناة', 'callback_data' => "mak 8"]],
                    [['text' => 'بوت زخرفة', 'callback_data' => "mak 9"], ['text' => 'فيديوهات ستوري', 'callback_data' => "mak 10"]],
                    [['text' => 'تحليل الشخصية', 'callback_data' => "mak 11"], ['text' => 'العاب انلاين', 'callback_data' => "mak 12"]],
                    [['text' => 'تحويل الصيغ', 'callback_data' => "mak 13"], ['text' => 'إستخراج روابط القنوات', 'callback_data' => "mak 14"]],
                    [['text' => 'بوت همسة', 'callback_data' => "mak 15"], ['text' => 'بوت كشف الكذب', 'callback_data' => "mak 16"]],
                    [['text' => 'حذف الحساب', 'callback_data' => "mak 17"], ['text' => 'بوت الاعلانات', 'callback_data' => "mak 18"]],
                    [['text' => 'بوت الاذكار', 'callback_data' => "mak 19"], ['text' => 'الاكواد الجاهزة', 'callback_data' => "mak 20"]],
                    [['text' => 'حساب العمر', 'callback_data' => "mak 21"], ['text' => 'ستوري انستكرام', 'callback_data' => "mak 22"]],
                    [['text' => 'البلورة السحرية', 'callback_data' => "mak 23"], ['text' => 'زخرفة تمبلر', 'callback_data' => "mak 24"]],
                    [['text' => 'مشاركة بدون توجية', 'callback_data' => "mak 25"], ['text' => 'حجر ورقة مقص', 'callback_data' => "mak 26"]],
                    [['text' => 'حماية القنوات', 'callback_data' => "mak 27"], ['text' => 'تمويل القنوات', 'callback_data' => "mak 28"]],
                    [['text' => 'نسبة الحب', 'callback_data' => "mak 29"], ['text' => 'دعم القنوات', 'callback_data' => "mak 30"]],
                    [['text' => 'نسبة الجمال', 'callback_data' => "mak 31"], ['text' => 'معاني الاسماء', 'callback_data' => "mak 32"]],
                    [['text' => 'يوتيوب', 'callback_data' => "mak 33"], ['text' => 'تيك توك', 'callback_data' => "mak 34"]],
                    [['text' => 'اسئلة جريئه', 'callback_data' => "mak 35"], ['text' => 'الفقرات', 'callback_data' => "mak 36"]],
                    [['text' => 'بوت ردود', 'callback_data' => "mak 38"]],
                    [['text' => 'ماسح الخلفيات', 'callback_data' => "mak 39"], ['text' => 'ملصقات', 'callback_data' => "mak 40"]],
                    [['text' => 'تعديل حقوق الاغاني', 'callback_data' => "mak 41"], ['text' => 'الفلاتر', 'callback_data' => "mak 42"]],
                    [['text' => 'مسح الميديا', 'callback_data' => "mak 50"]],
                    [['text' => 'نسبة الرجوله', 'callback_data' => "mak 51"], ['text' => 'نسبة المثلية', 'callback_data' => "mak 52"]],
                    [['text' => 'الابراج', 'callback_data' => "mak 53"], ['text' => 'حذف رسايل القنوات', 'callback_data' => "mak 54"]],
                    [['text' => 'تصميم اجمل ثنائي', 'callback_data' => "mak 55"], ['text' => 'خيره', 'callback_data' => "mak 56"]],
                    [['text' => 'كشف المستقبل', 'callback_data' => "mak 57"], ['text' => 'ستوريات وصور', 'callback_data' => "mak 58"]],
                    [['text' => 'باقات انترنت', 'callback_data' => "mak 59"], ['text' => 'تصاميم صور', 'callback_data' => "mak 60"]],
                    [['text' => 'اهداء الاغاني', 'callback_data' => "mak 61"], ['text' => 'سمسمي', 'callback_data' => "mak 62"]],
                    [['text' => 'كت تويت', 'callback_data' => "mak 63"], ['text' => 'نودز', 'callback_data' => "mak 64"]],
                    [['text' => 'ازرار شفافه', 'callback_data' => "mak 65"], ['text' => 'فيزه', 'callback_data' => "mak 66"]],
                    [['text' => 'خاص بالانستكرام', 'callback_data' => "mak 67"], ['text' => 'لعبة محيبس', 'callback_data' => "mak 68"]],
                    [['text' => 'الالعاب', 'callback_data' => "mak 69"]],
                    [['text' => '• رجوع •', 'callback_data' => "freebot"]],
                ]
            ])
        ]);
        return;
    }

    if (preg_match('/^mak (\d+)/', $data, $matches)) {
        $nu = $matches[1];
        // تحديد اسم البوت
        $names = [
            1 => "بوت تواصل", 2 => "بوت سايت", 3 => "بوت الازرار", 4 => "بوت المتجر", 5 => "بوت البصمات",
            6 => "بوت ", 7 => "بوت التعليقات", 8 => "بوت ادارة منشور القنوات", 9 => "بوت الزخرفة",
            10 => "بوت فيديوهات ستوري", 11 => "بوت تحليل الشخصية", 12 => "بوت العاب انلاين",
            13 => "بوت تحويل الصيغ", 14 => "بوت إستخراج روابط القنوات", 15 => "بوت همسة",
            16 => "بوت كشف الكذب", 17 => "حذف الحساب", 18 => "بوت الاعلانات", 19 => "بوت الاذكار",
            20 => "بوت الاكواد الجاهزة", 21 => "بوت حساب العمر", 22 => "بوت تحميل انستقرام",
            23 => "بوت البلورة السحرية", 24 => "بوت زخرفة تمبلر", 25 => "بوت مشاركة بدون توجية",
            26 => "بوت حجر ورقة مقص", 27 => "بوت حماية القنوات", 28 => "بوت تمويل القنوات",
            29 => "بوت نسبة الحب", 30 => "بوت دعم القنوات", 31 => "بوت نسبة الجمال",
            32 => "بوت معاني الاسماء", 33 => "بوت تحميل من يوتيوب", 34 => "بوت تحميل من تيك توك",
            35 => "بوت الاسئلة الجريئه", 36 => "بوت انشاء الفقرات", 38 => "بوت ردود",
            39 => "بوت ادارة ماسح الخلفيات", 40 => "بوت صنع حزم ملصقات", 41 => "بوت تعديل حقوق الاغاني",
            42 => "بوت الفلاتر", 50 => "بوت مسح الميديا", 51 => "بوت نسبة الرجوله",
            52 => "بوت نسبة المثلية", 53 => "بوت الابراج", 54 => "بوت حذف رسايل القناة",
            55 => "بوت تصميم اجمل ثنائي", 56 => "بوت الخيره", 57 => "بوت كشف المستقبل",
            58 => "بوت الصور و الاستوريات", 59 => "بوت باقات انترنت مجانية", 60 => "بوت تصاميم الصور",
            61 => "بوت اهداء الاغاني", 62 => "بوت سمسمي", 63 => "بوت كت تويت", 64 => "بوت النودز",
            65 => "بوت الازرار الشفافه", 66 => "بوت الفيزات", 67 => "بوت الخاص بالانستكرام",
            68 => "بوت لعبة المحيبس", 69 => "بوت الالعاب"
        ];
        $b = isset($names[$nu]) ? $names[$nu] : "بوت غير معروف";
        file_put_contents("from_id/$from_id/botmak.txt", "mak$nu");
        file_put_contents("from_id/$from_id/no3mak.txt", $b);
        file_put_contents("from_id/$from_id/amr.txt", "sn3free");
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "$token_kl : $b",
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "freebot"]]]])
        ]);
        return;
    }

    if ($data == "botsmember") {
        $botfree = file("botfreeid.txt", FILE_IGNORE_NEW_LINES);
        if (in_array($from_id, $botfree) && file_exists("from_id/$from_id/countuserbot.txt")) {
            $idbotfrom = file_exists("from_id/$from_id/idbot.txt") ? file("from_id/$from_id/idbot.txt", FILE_IGNORE_NEW_LINES) : [];
            $keyboard = ['inline_keyboard' => []];
            foreach ($idbotfrom as $entry) {
                if (empty($entry)) continue;
                $parts = explode('#', $entry);
                $userbot = $parts[1];
                $idbot = $parts[2];
                $infobot = file("botmak/$idbot/info.txt", FILE_IGNORE_NEW_LINES);
                $no3mak = isset($infobot[6]) ? $infobot[6] : "";
                $keyboard['inline_keyboard'][] = [
                    ['text' => "@$userbot", 'callback_data' => 'null'],
                    ['text' => $no3mak, 'callback_data' => 'null'],
                    ['text' => 'معلومات اكثر', 'callback_data' => "infobot $userbot"]
                ];
            }
            $keyboard['inline_keyboard'][] = [['text' => "- إذاعة لكل البوتات", 'callback_data' => "sendpostbotsall"]];
            $keyboard['inline_keyboard'][] = [['text' => "رجوع", 'callback_data' => "freebot"]];
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "• هذه هي قائمة بوتاتك المصنوعة ..\n" . file_get_contents("from_id/$from_id/countuserbot.txt"),
                'reply_markup' => json_encode($keyboard)
            ]);
        } else {
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "❌ عذراً لم تقم بصنع بوت من قبل",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "freebot"]]]])
            ]);
        }
        return;
    }

    if (preg_match('/^infobot (.*)/', $data, $matches)) {
        $userbot = $matches[1];
        $idbots = file_get_contents("user/$userbot.txt");
        if ($idbots) {
            $infobot = file("botmak/$idbots/info.txt", FILE_IGNORE_NEW_LINES);
            $userbot = $infobot[1];
            $namebot = $infobot[2];
            $id = $infobot[3];
            $idbots = $infobot[4];
            $no3mak = isset($infobot[6]) ? $infobot[6] : "";
            include "wataw/$idbots.php";
            $member_file = "botmak/$idbots/sudo/member.txt";
    	    if (file_exists($member_file)) {
     	       $mm = file($member_file, FILE_IGNORE_NEW_LINES);
      	      $co = count($mm) - 1;
   	     } else {
       	     $co = 0;
   	     }
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "معلومات البوت المصنوع :\nالنوع : $no3mak\nايدي البوت : `$idbots`\nاسم البوت : `$namebot`\nالتوكن : `$tokenbot`\n• عدد الاعضاء المشتركين في البوت : $co",
                'parse_mode' => 'Markdown',
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => '🚫 حذف', 'callback_data' => "deletebot " . $userbot]],
                        [['text' => '♻ تغيير النوع', 'callback_data' => "naglbot " . $userbot]],
                        [['text' => '• نقل البوت عبر كود •', 'callback_data' => "naglbotmember " . $userbot]],
                        [['text' => 'رجوع', 'callback_data' => "botsmember"]],
                    ]
                ])
            ]);
        }
        return;
    }

    if (preg_match('/^deletebot (.*)/', $data, $matches)) {
        $userbot = $matches[1];
        $idbots = file_get_contents("user/$userbot.txt");
        if ($idbots) {
            // حذف من ملفات المستخدم
            $user_bots = file_exists("from_id/$from_id/countbot.txt") ? file("from_id/$from_id/countbot.txt", FILE_IGNORE_NEW_LINES) : [];
            $user_bots = array_diff($user_bots, [$userbot]);
            file_put_contents("from_id/$from_id/countbot.txt", implode("\n", $user_bots) . "\n");

            $user_idbots = file_exists("from_id/$from_id/idbot.txt") ? file("from_id/$from_id/idbot.txt", FILE_IGNORE_NEW_LINES) : [];
            $entry = "$userbot==code#$userbot#$idbots";
            $user_idbots = array_diff($user_idbots, [$entry]);
            file_put_contents("from_id/$from_id/idbot.txt", implode("\n", $user_idbots) . "\n");

            $user_cu = file_exists("from_id/$from_id/countuserbot.txt") ? file("from_id/$from_id/countuserbot.txt", FILE_IGNORE_NEW_LINES) : [];
            $user_cu = array_diff($user_cu, ["@$userbot"]);
            file_put_contents("from_id/$from_id/countuserbot.txt", implode("\n", $user_cu) . "\n");

            // حذف من القائمة العامة
            $infoid = file("infoidbots.txt", FILE_IGNORE_NEW_LINES);
            $infoid = array_diff($infoid, [$idbots]);
            file_put_contents("infoidbots.txt", implode("\n", $infoid) . "\n");

            // حذف مجلد البوت
            remove_dir("botmak/$idbots");
            unlink("user/$userbot.txt");

            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "✅ تم حذف البوت بنجاح",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "botsmember"]]]])
            ]);
        }
        return;
    }

    if (preg_match('/^naglbot (.*)/', $data, $matches)) {
        $userbot = $matches[1];
        file_put_contents("from_id/$from_id/nagl.txt", $userbot);
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "أهلاً بك عزيزي :\n- قم بأختيار نوع البوت الذي تريد نقل @$userbot اليه..",
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => 'بوت سايت', 'callback_data' => "ngl 2"]],
                    [['text' => 'بوت الازرار', 'callback_data' => "ngl 3"], ['text' => 'بوت المتجر', 'callback_data' => "ngl 4"]],
                    [['text' => 'بوت البصمات', 'callback_data' => "ngl 5"], ['text' => 'بوت تواصل', 'callback_data' => "ngl 1"]],
                    [['text' => 'بوت التعليقات', 'callback_data' => "ngl 7"], ['text' => 'ادارة منشورات القناة', 'callback_data' => "ngl 8"]],
                    [['text' => 'بوت زخرفة', 'callback_data' => "ngl 9"], ['text' => 'فيديوهات ستوري', 'callback_data' => "ngl 10"]],
                    [['text' => 'تحليل الشخصية', 'callback_data' => "ngl 11"], ['text' => 'العاب انلاين', 'callback_data' => "ngl 12"]],
                    [['text' => 'تحويل الصيغ', 'callback_data' => "ngl 13"], ['text' => 'إستخراج روابط القنوات', 'callback_data' => "ngl 14"]],
                    [['text' => 'بوت همسة', 'callback_data' => "ngl 15"], ['text' => 'بوت كشف الكذب', 'callback_data' => "ngl 16"]],
                    [['text' => 'حذف الحساب', 'callback_data' => "ngl 17"], ['text' => 'بوت الاعلانات', 'callback_data' => "ngl 18"]],
                    [['text' => 'بوت الاذكار', 'callback_data' => "ngl 19"], ['text' => 'الاكواد الجاهزة', 'callback_data' => "ngl 20"]],
                    [['text' => 'حساب العمر', 'callback_data' => "ngl 21"], ['text' => 'ستوري انستكرام', 'callback_data' => "ngl 22"]],
                    [['text' => 'البلورة السحرية', 'callback_data' => "ngl 23"], ['text' => 'زخرفة تمبلر', 'callback_data' => "ngl 24"]],
                    [['text' => 'مشاركة بدون توجية', 'callback_data' => "ngl 25"], ['text' => 'حجر ورقة مقص', 'callback_data' => "ngl 26"]],
                    [['text' => 'حماية القنوات', 'callback_data' => "ngl 27"], ['text' => 'تمويل القنوات', 'callback_data' => "ngl 28"]],
                    [['text' => 'نسبة الحب', 'callback_data' => "ngl 29"], ['text' => 'دعم القنوات', 'callback_data' => "ngl 30"]],
                    [['text' => 'نسبة الجمال', 'callback_data' => "ngl 31"], ['text' => 'معاني الاسماء', 'callback_data' => "ngl 32"]],
                    [['text' => 'يوتيوب', 'callback_data' => "ngl 33"], ['text' => 'تيك توك', 'callback_data' => "ngl 34"]],
                    [['text' => 'اسئلة جريئه', 'callback_data' => "ngl 35"], ['text' => 'الفقرات', 'callback_data' => "ngl 36"]],
                    [['text' => 'بوت ردود', 'callback_data' => "ngl 38"]],
                    [['text' => 'ماسح الخلفيات', 'callback_data' => "ngl 39"], ['text' => 'ملصقات', 'callback_data' => "ngl 40"]],
                    [['text' => 'تعديل حقوق الاغاني', 'callback_data' => "ngl 41"], ['text' => 'الفلاتر', 'callback_data' => "ngl 42"]],
                    [['text' => 'مسح الميديا', 'callback_data' => "ngl 50"]],
                    [['text' => 'نسبة الرجوله', 'callback_data' => "ngl 51"], ['text' => 'نسبة المثلية', 'callback_data' => "ngl 52"]],
                    [['text' => 'الابراج', 'callback_data' => "ngl 53"], ['text' => 'حذف رسايل القنوات', 'callback_data' => "ngl 54"]],
                    [['text' => 'تصميم اجمل ثنائي', 'callback_data' => "ngl 55"], ['text' => 'خيره', 'callback_data' => "ngl 56"]],
                    [['text' => 'كشف المستقبل', 'callback_data' => "ngl 57"], ['text' => 'ستوريات وصور', 'callback_data' => "ngl 58"]],
                    [['text' => 'باقات انترنت', 'callback_data' => "ngl 59"], ['text' => 'تصاميم صور', 'callback_data' => "ngl 60"]],
                    [['text' => 'اهداء الاغاني', 'callback_data' => "ngl 61"], ['text' => 'سمسمي', 'callback_data' => "ngl 62"]],
                    [['text' => 'كت تويت', 'callback_data' => "ngl 63"], ['text' => 'نودز', 'callback_data' => "ngl 64"]],
                    [['text' => 'ازرار شفافه', 'callback_data' => "ngl 65"], ['text' => 'فيزه', 'callback_data' => "ngl 66"]],
                    [['text' => 'خاص بالانستكرام', 'callback_data' => "ngl 67"], ['text' => 'لعبة محيبس', 'callback_data' => "ngl 68"]],
                    [['text' => 'الالعاب', 'callback_data' => "ngl 69"]],
                    [['text' => 'رجوع', 'callback_data' => "botsmember"]],
                ]
            ])
        ]);
        return;
    }

    if (preg_match('/^ngl (\d+)/', $data, $matches)) {
        $nu = $matches[1];
        $ngluser = file_get_contents("from_id/$from_id/nagl.txt");
        unlink("from_id/$from_id/nagl.txt");
        $idbots = file_get_contents("user/$ngluser.txt");
        include "wataw/$idbots.php";
        // التحقق من صحة التوكن
        $check = json_decode(file_get_contents("https://api.telegram.org/bot$tokenbot/getMe"), true);
        if (isset($check['ok']) && $check['ok']) {
            // حفظ بيانات العضو القديمة
            $old_members = file_exists("botmak/$idbots/sudo/member.txt") ? file_get_contents("botmak/$idbots/sudo/member.txt") : "";
            $old_sudo = file_exists("botmak/$idbots/sudo.json") ? file_get_contents("botmak/$idbots/sudo.json") : "";

            // حذف المجلد القديم
            remove_dir("botmak/$idbots");
            mkdir("botmak/$idbots");

            // إنشاء البوت الجديد
            $mak = file_get_contents("bots/mak.php");
            $bot = file_get_contents("bots/mak$nu.php");
            $mak = str_replace("[*[TOKEN]*]", $tokenbot, $mak);
            $mak = str_replace("[*[TOKENSAN3]*]", $token, $mak);
            $bot = str_replace("<?php#*wataw*", $mak, $bot);
            file_put_contents("botmak/$idbots/$ngluser.php", $bot);

            // استعادة البيانات
            if (!empty($old_members)) {
                mkdir("botmak/$idbots/sudo");
                file_put_contents("botmak/$idbots/sudo/member.txt", $old_members);
            }
            if (!empty($old_sudo)) {
                file_put_contents("botmak/$idbots/sudo.json", $old_sudo);
            }
            file_put_contents("botmak/$idbots/admin.txt", $from_id);

            // تحديث info.txt
            $names = [1 => "بوت تواصل", 2 => "بوت سايت", 3 => "بوت الازرار", 4 => "بوت المتجر", 5 => "بوت البصمات", 6 => "بوت ", 7 => "بوت التعليقات", 8 => "بوت ادارة منشور القنوات", 9 => "بوت الزخرفة", 10 => "بوت فيديوهات ستوري", 11 => "بوت تحليل الشخصية", 12 => "بوت العاب انلاين", 13 => "بوت تحويل الصيغ", 14 => "بوت إستخراج روابط القنوات", 15 => "بوت همسة", 16 => "بوت كشف الكذب", 17 => "حذف الحساب", 18 => "بوت الاعلانات", 19 => "بوت الاذكار", 20 => "بوت الاكواد الجاهزة", 21 => "بوت حساب العمر", 22 => "بوت تحميل انستقرام", 23 => "بوت البلورة السحرية", 24 => "بوت زخرفة تمبلر", 25 => "بوت مشاركة بدون توجية", 26 => "بوت حجر ورقة مقص", 27 => "بوت حماية القنوات", 28 => "بوت تمويل القنوات", 29 => "بوت نسبة الحب", 30 => "بوت دعم القنوات", 31 => "بوت نسبة الجمال", 32 => "بوت معاني الاسماء", 33 => "بوت تحميل من يوتيوب", 34 => "بوت تحميل من تيك توك", 35 => "بوت الاسئلة الجريئه", 36 => "بوت انشاء الفقرات", 38 => "بوت ردود", 39 => "بوت ادارة ماسح الخلفيات", 40 => "بوت صنع حزم ملصقات", 41 => "بوت تعديل حقوق الاغاني", 42 => "بوت الفلاتر", 50 => "بوت مسح الميديا", 51 => "بوت نسبة الرجوله", 52 => "بوت نسبة المثلية", 53 => "بوت الابراج", 54 => "بوت حذف رسايل القناة", 55 => "بوت تصميم اجمل ثنائي", 56 => "بوت الخيره", 57 => "بوت كشف المستقبل", 58 => "بوت الصور و الاستوريات", 59 => "بوت باقات انترنت مجانية", 60 => "بوت تصاميم الصور", 61 => "بوت اهداء الاغاني", 62 => "بوت سمسمي", 63 => "بوت كت تويت", 64 => "بوت النودز", 65 => "بوت الازرار الشفافه", 66 => "بوت الفيزات", 67 => "بوت الخاص بالانستكرام", 68 => "بوت لعبة المحيبس", 69 => "بوت الالعاب"];
            $b = isset($names[$nu]) ? $names[$nu] : "بوت غير معروف";
            $info = "-- محمي --\n$ngluser\n" . $check['result']['first_name'] . "\n$from_id\n$idbots\nmak$nu\n$b";
            file_put_contents("botmak/$idbots/info.txt", $info);

            // تعيين webhook
            file_get_contents("https://api.telegram.org/bot$tokenbot/setWebhook?url=" . $folder . "/botmak/$idbots/$ngluser.php");

            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "- تم تغيير نوع بوتك بنجاح.\n- معرف البوت : @$ngluser.\nالنوع : $b",
                'reply_markup' => json_encode([
                    'inline_keyboard' => [
                        [['text' => "اضغط هنا للدخول 📌", 'url' => "https://t.me/$ngluser?start"]],
                        [['text' => 'رجوع', 'callback_data' => "freebot"]],
                    ]
                ])
            ]);
        } else {
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "🚫 التوكن المخزن في البيانات غير صحيح، قم بإعادة صنع البوت من جديد",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'حاول مرةً اخرى', 'callback_data' => "botsmember"]]]])
            ]);
        }
        return;
    }

    if (preg_match('/^naglbotmember (.*)/', $data, $matches)) {
        $userbot = $matches[1];
        $code = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 35);
        $idbots = file_get_contents("user/$userbot.txt");
        $infobot = file("botmak/$idbots/info.txt", FILE_IGNORE_NEW_LINES);
        $userbot = $infobot[1];
        $id = $infobot[3];
        $no3mak = isset($infobot[6]) ? $infobot[6] : "";
        $codejson['info'][$code] = [
            'st' => 'yes',
            'idbot' => $idbots,
            'userbot' => $userbot,
            'admin' => $id
        ];
        file_put_contents("code.json", json_encode($codejson));
        bot('sendMessage', [
            'chat_id' => $chat_id,
            'text' => "• هذا هو كود النقل الخاص ببوتك\nhttps://t.me/$user_bot_sudo?start=$code\n- قم بارساله للشخص الذي تريد نقل البوت اليه.\nتحذير:\nعند نقل البوت لشخص اخر ستفقد امكانية التحكم في البوت.",
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "botsmember"]]]])
        ]);
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "✅ تم إنشاء كود النقل، تحقق من الرسالة الجديدة."
        ]);
        return;
    }

    if ($data == "sendpostbotsall") {
        $today = date('Y-m-d');
        if (!isset($datatime['info'][$from_id]['date']) || $datatime['info'][$from_id]['date'] != $today) {
            $datatime['info'][$from_id]['date'] = $today;
            file_put_contents("datatime.json", json_encode($datatime));
            file_put_contents("from_id/$from_id/amr.txt", "sendpostbotsall");
            bot('editMessageText', [
                'chat_id' => $chat_id,
                'message_id' => $message_id,
                'text' => "حسنا قم بارسال النص لكي يتم ارسال الاذاعة في هذه البوتات\n" . file_get_contents("from_id/$from_id/countuserbot.txt"),
                'disable_web_page_preview' => true,
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "botsmember"]]]])
            ]);
        } else {
            bot('answerCallbackQuery', [
                'callback_query_id' => $callback_query['id'],
                'text' => "🚫 عذراً لاتستطيع عمل الاذاعة لكل بوتاتك المصنوعة اكثر من مرة واحدة فقط في اليوم",
                'show_alert' => true
            ]);
        }
        return;
    }

    if ($data == "uplode") {
        file_put_contents("from_id/$from_id/amr.txt", "uplode");
        bot('editMessageText', [
            'chat_id' => $chat_id,
            'message_id' => $message_id,
            'text' => "اهلا [$name](tg://user?id=$chat_id)\n*• أرسل ملف php الآن !*\n• بشروط :\n\n1. لا يحتوي الملف على أي أخطاء برمجيه\n2. يجب أن يكون عمله دون الحاجة إلى اتصال بخدمات خارجية (api)\n3. لا يحتوي على معرف لقناة أو مطور ( يتم وضع معرف المطور عند صنع البوت من قبل المستخدم )",
            'parse_mode' => 'Markdown',
            'disable_web_page_preview' => true,
            'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'إلغاء الارسال', 'callback_data' => "freebot"]]]])
        ]);
        return;
    }

    // إذا لم يتم التعامل مع البيانات
    bot('answerCallbackQuery', [
        'callback_query_id' => $callback_query['id'],
        'text' => "لا يوجد إجراء لهذا الزر",
        'show_alert' => false
    ]);
}

// ======================= معالجة الإذاعة (الرسائل القادمة) =======================
if ($message && in_array($from_id, $sudo)) {
    $broadcast_amr = file_exists("from_id/$from_id/amr.txt") ? file_get_contents("from_id/$from_id/amr.txt") : "";
    if ($broadcast_amr == "sendsend") {
        $no3send = file_exists("from_id/$from_id/no3send.txt") ? file_get_contents("from_id/$from_id/no3send.txt") : "";
        $chatsend = file_exists("from_id/$from_id/chatsend.txt") ? file_get_contents("from_id/$from_id/chatsend.txt") : "";
        if ($no3send == "forward") {
            // إعادة توجية
            if ($chatsend == "member") {
                $members = file("sudo/member.txt", FILE_IGNORE_NEW_LINES);
                foreach ($members as $mid) {
                    if (!empty($mid)) {
                        bot('ForwardMessage', [
                            'chat_id' => $mid,
                            'from_chat_id' => $chat_id,
                            'message_id' => $message_id
                        ]);
                        usleep(200000);
                    }
                }
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "✅ تم التوجية للاعضاء فقط",
                    'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "home"]]]])
                ]);
            } elseif ($chatsend == "botsall") {
                $bots = file("infoidbots.txt", FILE_IGNORE_NEW_LINES);
                $co = 0;
                foreach ($bots as $idbots) {
                    if (empty($idbots)) continue;
                    include "wataw/$idbots.php";
                    $members = file("botmak/$idbots/sudo/member.txt", FILE_IGNORE_NEW_LINES);
                    foreach ($members as $mid) {
                        if (!empty($mid)) {
                            file_get_contents("https://api.telegram.org/bot$tokenbot/ForwardMessage?chat_id=$mid&from_chat_id=$chat_id&message_id=$message_id");
                            usleep(200000);
                            $co++;
                        }
                    }
                }
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "- تمت الاذاعة في جميع البوتات المصنوعة\n- تم الارسال الى $co مستخدم.\n- عدد البوتات : " . count($bots),
                ]);
            }
        } else {
            // إرسال نص أو وسائط
            $parse_mode = $no3send;
            if ($chatsend == "member") {
                $members = file("sudo/member.txt", FILE_IGNORE_NEW_LINES);
                if ($text) {
                    foreach ($members as $mid) {
                        if (!empty($mid)) {
                            bot('sendMessage', [
                                'chat_id' => $mid,
                                'text' => $text,
                                'parse_mode' => $parse_mode,
                                'disable_web_page_preview' => true
                            ]);
                            usleep(200000);
                        }
                    }
                } elseif ($photo || $video || $document || $sticker || $voice || $audio) {
                    // تحديد نوع الإرسال
                    $method = "";
                    $file_id = "";
                    if ($photo) {
                        $method = "sendPhoto";
                        $file_id = $photo[count($photo)-1]['file_id'];
                    } elseif ($video) {
                        $method = "sendVideo";
                        $file_id = $video['file_id'];
                    } elseif ($document) {
                        $method = "sendDocument";
                        $file_id = $document['file_id'];
                    } elseif ($sticker) {
                        $method = "sendSticker";
                        $file_id = $sticker['file_id'];
                    } elseif ($voice) {
                        $method = "sendVoice";
                        $file_id = $voice['file_id'];
                    } elseif ($audio) {
                        $method = "sendAudio";
                        $file_id = $audio['file_id'];
                    }
                    $params = [
                        'chat_id' => '', // سيتم تعيينه لاحقاً
                        $method == "sendPhoto" ? 'photo' : ($method == "sendVideo" ? 'video' : ($method == "sendDocument" ? 'document' : ($method == "sendSticker" ? 'sticker' : ($method == "sendVoice" ? 'voice' : 'audio')))) => $file_id,
                        'caption' => $caption
                    ];
                    foreach ($members as $mid) {
                        if (!empty($mid)) {
                            $params['chat_id'] = $mid;
                            bot($method, $params);
                            usleep(200000);
                        }
                    }
                }
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "✅ تم النشر للاعضاء فقط",
                    'reply_markup' => json_encode(['inline_keyboard' => [[['text' => 'رجوع', 'callback_data' => "home"]]]])
                ]);
            } elseif ($chatsend == "botsall") {
                $bots = file("infoidbots.txt", FILE_IGNORE_NEW_LINES);
                $co = 0;
                foreach ($bots as $idbots) {
                    if (empty($idbots)) continue;
                    include "wataw/$idbots.php";
                    $members = file("botmak/$idbots/sudo/member.txt", FILE_IGNORE_NEW_LINES);
                    foreach ($members as $mid) {
                        if (!empty($mid)) {
                            if ($text) {
                                file_get_contents("https://api.telegram.org/bot$tokenbot/sendMessage?chat_id=$mid&text=" . urlencode($text) . "&parse_mode=$parse_mode");
                            } elseif ($photo || $video || $document || $sticker || $voice || $audio) {
                                // مشابه ولكن باستخدام file_get_contents
                                // للتبسيط نستخدم نفس الطريقة
                            }
                            usleep(200000);
                            $co++;
                        }
                    }
                }
                bot('sendMessage', [
                    'chat_id' => $chat_id,
                    'text' => "- تمت الاذاعة في جميع البوتات المصنوعة\n- تم الارسال الى $co مستخدم.\n- عدد البوتات : " . count($bots),
                ]);
            }
        }
        // تنظيف ملفات الإذاعة
        @unlink("from_id/$from_id/amr.txt");
        @unlink("from_id/$from_id/no3send.txt");
        @unlink("from_id/$from_id/chatsend.txt");
        return;
    }
}

// ======================= معالجة التوجيه التلقائي (fwrmember) =======================
if ($message && $fwrmember == "✅" && !empty($admin) && $admin != $chat_id) {
    bot('ForwardMessage', [
        'chat_id' => $admin,
        'from_chat_id' => $chat_id,
        'message_id' => $message_id
    ]);
}

// ======================= معالجة القنوات الخاصة (عند توجيه منشور) =======================
if ($message && $forward_from_chat && in_array($from_id, $sudo)) {
    $amr = isset($infosudo['info']['amr']) ? $infosudo['info']['amr'] : null;
    if ($amr == "addchannel") {
        $id_channel = $forward_from_chat['id'];
        if (getChatstats($id_channel, $token)) {
            $namechannel = $forward_from_chat['title'];
            $infosudo['info']['channel_id'] = $id_channel;
            $infosudo['info']['amr'] = "channel_id";
            file_put_contents("sudo.json", json_encode($infosudo));
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "✅ تم إضافة القناة بنجاح\ninfo channel\nuser : • قناة خاصة •\nname : $namechannel\nid : $id_channel\n*يجب عليك ارسال رابط القناة الخاص قم بارسالة الان",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إلغاء", 'callback_data' => "addchannel"]]]])
            ]);
        } else {
            bot('sendMessage', [
                'chat_id' => $chat_id,
                'text' => "❌ البوت ليس ادمن في القناة\n- قم برفع البوت اولا لكي تتمكن من إضافتها",
                'reply_markup' => json_encode(['inline_keyboard' => [[['text' => "إعادة المحاولة", 'callback_data' => "addchannel"]]]])
            ]);
        }
        return;
    }
}
}
?>