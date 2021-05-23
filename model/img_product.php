<?php
    require_once('db.php');

    class Img_Product extends DBModel {
        const PATH_STORE = '../upload/img_product/';
        const PATH_RETURN = '..upload/img_product';

        // liet ke danh sach anh cua san pham
        function index($product_id) {
            $connect = $this->connect();
            $result = $connect->query("select * from image_product where product_id = $product_id"); 
            $imgs = array();
            if ($result->num_rows > 0) {
                while ($img = mysqli_fetch_assoc($result)) {
                    $img['link'] = self::PATH_RETURN.$img['link'];
                    $imgs[] = $img;
                }
            }
            return $imgs;
        }
        // Them anh cho san pham
        function store($product_id, $data, $file_img) {
            move_uploaded_file($file_img, self::PATH_STORE.$data['link']);
            $connect = $this->connect();
            $query = "insert into image_product (product_id, link, state) value('".
                        $product_id."','".
                        $data['link']."','". 
                        $data['state']."')";
            $result = $connect->query($query);
            if($result) {
                return "Them anh thanh cong";
            }
            else {
                return "Them anh that bai";
            }
        }
        // Xoa anh
        function destroy($id) {
            $connect = $this->connect();
            $result = $connect->query("delete from image_product where id = $id");
            if($result) {
                return "Xoa anh thanh cong";
            }
            else {
                return "Xoa anh that bai";
            }
        }


    }


    $testImg_Product = new Img_Product();
    // test index
    // print_r($testImg_Product->index(2));
    // $data = [
    //     'link' => 'xyz.jpg',
    //     'state' => '1',
    // ];
    // test store
    // print_r($testImg_Product->store(2, $data));

    //test delete
    // print_r($testImg_Product->destroy(2));

?>