<?php

namespace BelajarPHPMVC\Controller;

class ProductController{
    function category(string $productId, string $categoryId){
        echo "PRODUCT : $productId, CTAGEORY : $categoryId";
    }
}
