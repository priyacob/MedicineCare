<?php
header('Content-Type: application/json');

$products = [
    ["product_id" => "101", "image" => "image\pexels-quang-nguyen-vinh-222549-2166711.jpg", "name" => "Laptop", "category" => "Electronics", "price" => "1200", "stock" => "In Stock"],
    ["product_id" => "102", "image" => "image\pexels-quang-nguyen-vinh-222549-2166711.jpg", "name" => "Smartphone", "category" => "Electronics", "price" => "800", "stock" => "In Stock"],
    ["product_id" => "103", "image" => "image\pexels-quang-nguyen-vinh-222549-2166711.jpg", "name" => "Headphones", "category" => "Accessories", "price" => "150", "stock" => "Out of Stock"],
    ["product_id" => "104", "image" => "image\pexels-quang-nguyen-vinh-222549-2166711.jpg", "name" => "Watch", "category" => "Accessories", "price" => "250", "stock" => "In Stock"],
    ["product_id" => "105", "image" => "image\pexels-quang-nguyen-vinh-222549-2166711.jpg", "name" => "Shoes", "category" => "Fashion", "price" => "100", "stock" => "Out of Stock"],
    ["product_id" => "106", "image" => "image\pexels-quang-nguyen-vinh-222549-2166711.jpg", "name" => "Backpack", "category" => "Fashion", "price" => "75", "stock" => "In Stock"]
];

echo json_encode($products);
?>