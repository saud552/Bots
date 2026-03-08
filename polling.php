<?php
require_once __DIR__ . '/handlers.php';
ini_set('display_errors', 1);
error_reporting(E_ALL);
echo "--- Main Bot Monitoring Started ---\n";
bot('deleteWebhook');
$last_update_id = 0;
while (true) {
    $updates = bot('getUpdates', ['offset' => $last_update_id + 1, 'timeout' => 30]);
    if ($updates && isset($updates['result'])) {
        foreach ($updates['result'] as $update) {
            $last_update_id = $update['update_id'];
            echo sprintf("[%s] Main Bot Update: %s\n", date('H:i:s'), json_encode($update));
            handleUpdate($update);
        }
    }
    usleep(500000);
}
