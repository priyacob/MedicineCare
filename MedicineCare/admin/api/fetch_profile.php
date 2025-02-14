<?php
header('Content-Type: application/json');

$profile = [
    "name" => "Ismail Hossain",
    "email" => "ismail@gmail.com",
    "role" => "Seller Account",
    "image" => "image\s boss.jpg"
];

echo json_encode($profile);
?>
