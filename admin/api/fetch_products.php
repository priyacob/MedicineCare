<?php
header('Content-Type: application/json');

$products = [
    ["id" => 1, "name" => "Paracetamol", "description" => "Pain reliever", "category" => "Painkillers", "price" => 5, "image" => "paracetamol.png"],
    ["id" => 2, "name" => "Amoxicillin", "description" => "Antibiotic", "category" => "Antibiotics", "price" => 10, "image" => "amoxicillin.png"],
    ["id" => 3, "name" => "Vitamin C", "description" => "Boosts immunity", "category" => "Vitamins", "price" => 7, "image" => "vitamin_c.png"],
    ["id" => 4, "name" => "Ibuprofen", "description" => "Pain reliever", "category" => "Painkillers", "price" => 8, "image" => "ibuprofen.png"]
];

echo json_encode($products);
?>

