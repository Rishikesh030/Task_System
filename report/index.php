<?php
namespace Phppot;

include './class/Product.php';

$product = new Product();
$productResult = $product->getAllProduct();

if (isset($_POST["export"])) {
    $product->exportProductDatabase($productResult);
}

include "./view/product-list.php";
?>