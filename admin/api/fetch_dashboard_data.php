<?php
header('Content-Type: application/json');

$data = [
    "total_orders" => 750,
    "total_revenue" => 125000,
    "pending_orders" => 120,
    "canceled_orders" => 35,
    "recent_orders" => [
        ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "price" => "523", "status" => "Pending"],
        ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "price" => "732", "status" => "Delivered"],
        ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "price" => "325", "status" => "Pending"],
        ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "price" => "652", "status" => "Delivered"],
        ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "price" => "854", "status" => "Canceled"],        ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "price" => "523", "status" => "Pending"],
        ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "price" => "732", "status" => "Delivered"],
        ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "price" => "325", "status" => "Pending"],
        ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "price" => "652", "status" => "Delivered"],
        ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "price" => "854", "status" => "Canceled"],        ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "price" => "523", "status" => "Pending"],
        ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "price" => "732", "status" => "Delivered"],
        ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "price" => "325", "status" => "Pending"],
        ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "price" => "652", "status" => "Delivered"],
        ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "price" => "854", "status" => "Canceled"],        ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "price" => "523", "status" => "Pending"],
        ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "price" => "732", "status" => "Delivered"],
        ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "price" => "325", "status" => "Pending"],
        ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "price" => "652", "status" => "Delivered"],
        ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "price" => "854", "status" => "Canceled"],        ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "price" => "523", "status" => "Pending"],
        ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "price" => "732", "status" => "Delivered"],
        ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "price" => "325", "status" => "Pending"],
        ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "price" => "652", "status" => "Delivered"],
        ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "price" => "854", "status" => "Canceled"],        ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "price" => "523", "status" => "Pending"],
        ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "price" => "732", "status" => "Delivered"],
        ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "price" => "325", "status" => "Pending"],
        ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "price" => "652", "status" => "Delivered"],
        ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "price" => "854", "status" => "Canceled"],
    ]
];

echo json_encode($data);
?>
