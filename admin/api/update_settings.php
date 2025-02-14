<?php
header('Content-Type: application/json');

$data = json_decode(file_get_contents("php://input"), true);

if ($data["password"] !== $data["confirmPassword"]) {
    echo json_encode(["message" => "Passwords do not match."]);
    exit;
}

// Here, you can update the database with new settings.
// For now, let's just return a success message.

echo json_encode(["message" => "Settings updated successfully."]);
?>
