<?php

include "Controller/productcontroller.php";

use Controller\ProductController;

$productController = new ProductController;

echo $productController->getAllProduct();