<?php
require_once '../helpers/func.php';
require_once '../app/bootstrap.php';



$messages = $db->query("
    SELECT name, message
    FROM messages
    ORDER BY created_at ASC LIMIT 100
");

header("Content-Type: application/json");

echo json_encode(
    $messages->fetchAll(PDO::FETCH_OBJ)
);
