<?php
    require_once('product.php');
    require_once('cart.php');
    require_once('image_product.php');

    $cart = new Cart();
    $product_ids =  $cart->index(2);
    // var_dump($product_ids);
    $cart = [];
    foreach($product_ids as $value) {
        $temp = [];
        $findProduct = new Product();
        $product =  $findProduct->show($value['product_id']);
        $temp['name'] = $product['name'];
        $temp['description'] = $product['description'];
        $temp['material'] = $product['material'];
        $temp['price'] = $product['price'];
        $temp['amount'] = $value['amount'];
        // var_dump($product);
        $findImage = new Image_Product();
        $imgs = $findImage->index($value['product_id']);
        if (count($imgs) > 0) {
            $img = $imgs[0];
            $temp['imgs'] = $img['link'];
        }
        // var_dump($imgs);
        // var_dump($temp);
        $cart[] = $temp;
    }
    var_dump($cart);
?>