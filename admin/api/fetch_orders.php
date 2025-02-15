<?php
header('Content-Type: application/json');

$orders = [
    ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "email" => "wade@gmail.com", "price" => "523", "status" => "Pending"],
    ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "email" => "jennyw@gmail.com", "price" => "732", "status" => "Delivered"],
    ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "email" => "kristine@gmail.com", "price" => "325", "status" => "Pending"],
    ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "email" => "kathryn@gmail.com", "price" => "652", "status" => "Delivered"],
    ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "email" => "albert@gmail.com", "price" => "854", "status" => "Pending"],
    ["order_no" => "245477", "date" => "25/07/2020", "customer_name" => "Ronald Richards", "email" => "richards@gmail.com", "price" => "578", "status" => "Delivered"],
    ["order_no" => "245476", "date" => "16/07/2020", "customer_name" => "Floyd Miles", "email" => "floyd@gmail.com", "price" => "385", "status" => "Canceled"],
    ["order_no" => "245482", "date" => "05/09/2020", "customer_name" => "Wade Warren", "email" => "wade@gmail.com", "price" => "523", "status" => "Pending"],
    ["order_no" => "245481", "date" => "28/08/2020", "customer_name" => "Jenny Wilson", "email" => "jennyw@gmail.com", "price" => "732", "status" => "Delivered"],
    ["order_no" => "245480", "date" => "17/08/2020", "customer_name" => "Kristin Watson", "email" => "kristine@gmail.com", "price" => "325", "status" => "Pending"],
    ["order_no" => "245479", "date" => "09/08/2020", "customer_name" => "Kathryn Murphy", "email" => "kathryn@gmail.com", "price" => "652", "status" => "Delivered"],
    ["order_no" => "245478", "date" => "02/08/2020", "customer_name" => "Albert Flores", "email" => "albert@gmail.com", "price" => "854", "status" => "Pending"],
    ["order_no" => "245477", "date" => "25/07/2020", "customer_name" => "Ronald Richards", "email" => "richards@gmail.com", "price" => "578", "status" => "Delivered"],
    ["order_no" => "245476", "date" => "16/07/2020", "customer_name" => "Floyd Miles", "email" => "floyd@gmail.com", "price" => "385", "status" => "Canceled"]
];

echo json_encode($orders);
?>
