<?php
header('Content-Type: application/json');

$settings = [
    "username" => "Ismail Hossain",
    "email" => "ismail@example.com",
    "notifications" => "enabled",
    "theme" => "light"
];

echo json_encode($settings);
?>
