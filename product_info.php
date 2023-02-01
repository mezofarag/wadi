<?php
$product = $_GET["product"];
$products = array(
    "Product A" => array("crop" => "Wheat", "active_ingredient" => "Ingredient 1", "diseases" => "Disease 1"),
    "Product B" => array("crop" => "Rice", "active_ingredient" => "Ingredient 2", "diseases" => "Disease 2"),
    "Product C" => array("crop" => "Maize", "active_ingredient" => "Ingredient 3", "diseases" => "Disease 3"),
    "Product D" => array("crop" => "Barley", "active_ingredient" => "Ingredient 4", "diseases" => "Disease 4"),
    "Product E" => array("crop" => "Soybean", "active_ingredient" => "Ingredient 5", "diseases" => "Disease 5")
);

if(!array_key_exists($product, $products)) {
    echo "Product not found";
    exit();
}

$product_info = $products[$product];
$crop = $product_info["crop"];
$active_ingredient = $product_info["active_ingredient"];
$diseases = $product_info["diseases"];
?>

<h1><?php echo $product; ?></h1>
<p>Crop: <?php echo $crop; ?></p>
<p>Active Ingredient: <?php echo $active_ingredient; ?></p>
<p>Diseases: <?php echo $diseases; ?></p>
