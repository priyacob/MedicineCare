<?php
header('Content-Type: application/json');

$users = [
    ["user_id" => "1001", "name" => "Sribash sarkar", "email" => "alice@gmail.com", "password" => "dfgjnd@efe", "status" => "Active"],
    ["user_id" => "1002", "name" => "Rima Das", "email" => "bob@gmail.com", "password" => "User@edc", "status" => "Inactive"],
    ["user_id" => "1003", "name" => "Sayan banik", "email" => "charlie@gmail.com", "password" => "rfgvsdcx", "status" => "Active"],
    ["user_id" => "1004", "name" => "Priya Mirtra", "email" => "david@gmail.com", "password" => "fgggggg", "status" => "Blocked"],
    ["user_id" => "1005", "name" => "Rick Das", "email" => "emma@gmail.com", "password" => "fgggt", "status" => "Active"],
    ["user_id" => "1006", "name" => "Keya Das(dasi)", "email" => "frank@gmail.com", "password" => "4t5y565@werty", "status" => "Inactive"],    ["user_id" => "1001", "name" => "Sribash sarkar", "email" => "alice@gmail.com", "password" => "dfgjnd@efe", "status" => "Active"],
    ["user_id" => "1002", "name" => "Rima Das", "email" => "bob@gmail.com", "password" => "User@edc", "status" => "Inactive"],
    ["user_id" => "1003", "name" => "Sayan banik", "email" => "charlie@gmail.com", "password" => "rfgvsdcx", "status" => "Active"],
    ["user_id" => "1004", "name" => "Priya Mirtra", "email" => "david@gmail.com", "password" => "fgggggg", "status" => "Blocked"],
    ["user_id" => "1005", "name" => "Rick Das", "email" => "emma@gmail.com", "password" => "fgggt", "status" => "Active"],
    ["user_id" => "1006", "name" => "Keya Das(dasi)", "email" => "frank@gmail.com", "password" => "4t5y565@werty", "status" => "Inactive"],
];

echo json_encode($users);
?>

