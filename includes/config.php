<?php
// Définir le chemin de base dynamiquement
$base_url = 'http://' . $_SERVER['HTTP_HOST'] . str_replace(basename($_SERVER['SCRIPT_NAME']), '', $_SERVER['SCRIPT_NAME']);
define('BASE_URL', $base_url);

$categories = [
    "Bulbes" => [
        "3 bulbes de bégonias", 
        "10 bulbes de dahlias", 
        "50 glaïeuls"
    ],
    "Plantes à massif" => [
        "Lot de 3 marguerites", 
        "Pour un bouquet de 6 pensées", 
        "Mélange varié de 10 plantes à massif"
    ],
    "Rosiers" => [
        "1 pied spécial grandes fleurs", 
        "Une variété sélectionnée pour son parfum", 
        "Rosier arbuste"
    ]
];

$products = [
    // Bulbes
    "3 bulbes de bégonias" => ["price" => 5.00, "stock" => 125, "image" => "bulbes_begonia.jpg"],
    "10 bulbes de dahlias" => ["price" => 12.00, "stock" => 100, "image" => "bulbes_dahlia.jpg"],
    "50 glaïeuls" => ["price" => 9.00, "stock" => 98, "image" => "bulbes_glaieul.jpg"],
    
    // Plantes à massif
    "Lot de 3 marguerites" => ["price" => 5.00, "stock" => 52, "image" => "massif_marguerite.jpg"],
    "Pour un bouquet de 6 pensées" => ["price" => 6.00, "stock" => 45, "image" => "massif_pensee.jpg"],
    "Mélange varié de 10 plantes à massif" => ["price" => 15.00, "stock" => 21, "image" => "massif_melange.jpg"],
    
    // Rosiers
    "1 pied spécial grandes fleurs" => ["price" => 20.00, "stock" => 35, "image" => "rosiers_gdefleur.jpg"],
    "Une variété sélectionnée pour son parfum" => ["price" => 9.00, "stock" => 78, "image" => "rosiers_parfum.jpg"],
    "Rosier arbuste" => ["price" => 8.00, "stock" => 29, "image" => "rosiers_arbuste.jpg"]
];

session_start();
$loggedIn = $_SESSION['logged_in'] ?? false;
$cartItems = $_SESSION['cart_items'] ?? 0;
?>