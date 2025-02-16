<?php
header('Content-Type: application/json');

$notifications = [
    ["id" => 1, "title" => "New Order Received", "message" => "You have a new order from John Doe.", "date" => "2025-02-14", "is_read" => false],
    ["id" => 2, "title" => "Payment Successful", "message" => "Your last transaction was successful.", "date" => "2025-02-13", "is_read" => true],
    ["id" => 3, "title" => "New Product Review", "message" => "A customer left a review on Product X.", "date" => "2025-02-12", "is_read" => false],
    ["id" => 4, "title" => "System Update", "message" => "A new system update is available.", "date" => "2025-02-10", "is_read" => true],
];

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    foreach ($notifications as &$notif) {
        if ($notif['id'] == $id) {
            $notif['is_read'] = true;
        }
    }
    echo json_encode(["success" => true]);
} elseif (isset($_GET['mark_all'])) {
    foreach ($notifications as &$notif) {
        $notif['is_read'] = true;
    }
    echo json_encode(["success" => true]);
} else {
    echo json_encode($notifications);
}
?>
