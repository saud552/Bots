<?php
// polling.php
require_once 'handlers.php';

$last_update_id = 0;
while (true) {
    $updates = bot('getUpdates', ['offset' => $last_update_id + 1, 'timeout' => 30]);
    if ($updates && isset($updates['result'])) {
        foreach ($updates['result'] as $update) {
            handleUpdate($update);
            $last_update_id = $update['update_id'];
        }
    }
    sleep(1);
}
?>