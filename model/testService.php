<?php
    require_once('product.php');
    require_once('cart.php');
    require_once('image_product.php');
    


    // user xem thông tin giỏ hàng
    // $cart = new Cart();
    // $product_ids =  $cart->index(2);
    // var_dump($product_ids);
    // $cart = [];
    // foreach($product_ids as $value) {
    //     $temp = [];
    //     $findProduct = new Product();
    //     $product =  $findProduct->show($value['product_id']);
    //     $temp['name'] = $product['name'];
    //     $temp['description'] = $product['description'];
    //     $temp['material'] = $product['material'];
    //     $temp['price'] = $product['price'];
    //     $temp['amount'] = $value['amount'];
    //     // var_dump($product);
    //     $findImage = new Image_Product();
    //     $imgs = $findImage->index($value['product_id']);
    //     if (count($imgs) > 0) {
    //         $img = $imgs[0];
    //         $temp['imgs'] = $img['link'];
    //     }
    //     // var_dump($imgs);
    //     // var_dump($temp);
    //     $cart[] = $temp;
    // }
    // var_dump($cart);

    

    // Admin thêm sản phẩm
    
    function addProduct($data, $file) { 
        // luu thong tin sp 
        $addProduct = new Product();
        $addProduct->store($data);
        // print_r($addProduct->findNewproduct());
        $newProduct = $addProduct->findNewproduct();
        $product_id = $newProduct['id'];
        // var_dump($id);

        $addImageProduct = new Image_Product();
        $data_img = [
            'link' => $file["fileToUpload"]["name"],
            'state' => '1',
        ];
        $addImageProduct->store($product_id, $data_img, $file);
    }

    $data = [
        'category_id' => '1',
        'name' => 'Kim cuong xin vkl llldsfl',
        'description' => 'kim cuong xin nen d mo ta nhieu',
        'material' => 'kim cuong 100%',
        'price'  => 1999999,
        'amount' => 100,
        'state' => 1,
    ];

    addProduct($data, $_FILES);

   
?>