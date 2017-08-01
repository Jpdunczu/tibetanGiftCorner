<?php


/*
require_once('util/main.php');
require_once('model/product_db.php');
*/



/*
// Set the featured product IDs in an array
$product_ids = array();
// Get an array of featured products from the database
$products = array();
foreach ($product_ids as $product_id) {
    $product = get_product($product_id);
    $products[] = $product;   // add product to array
}
*/

$temp_array = array_fill(0,6,"/tibetanGiftCorner/images/Untitled.png");
include('views/landing.php');

?>