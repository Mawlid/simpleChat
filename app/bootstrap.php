<?php

use Pusher\Pusher;

require_once '../vendor/autoload.php';
try {
    $db = new PDO('mysql:host=localhost;dbname=chat', 'root', '');
}catch (PDOException $e){
    print 'Connection failed: ' . $e->getMessage();
}
$app_id = 'XXXX';
$app_key = 'XXXX';
$app_secret = 'XXXX';
$app_cluster = 'eu';
$pusher = new Pusher( $app_key, $app_secret, $app_id, array('cluster' => $app_cluster) );
