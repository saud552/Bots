<?php
// webhook.php - للاستقبال عبر HTTP
require_once 'handlers.php';

$update = json_decode(file_get_contents("php://input"), true);
if ($update) {
    handleUpdate($update);
}
?>