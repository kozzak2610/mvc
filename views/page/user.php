<?php
require_once __DIR__ . './../../app/config/config.php';
use Medoo\Medoo;
use config\config;
$data = $database->select('account', [
    'user_name',
    'user_email'
]);

echo json_encode($data);

