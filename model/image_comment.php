<?php
    require_once('db.php');

    class Image_Comment extends DBModel {
        const PATH_STORE = '../upload/img_comment/';
        const PATH_RETURN = '..upload/img_comment';

        function index($comment_id) {
            $connect = $this->connect();
            $result = $connect->query("select * from image_comment where product_id = $comment_id"); 
            $imgs = array();
            if ($result->num_rows > 0) {
                while ($img = mysqli_fetch_assoc($result)) {
                    $img['link'] = self::PATH_RETURN.$img['link'];
                    $imgs[] = $img;
                }
            }
            return $imgs;
        }

        function store($comment_id, $data, $file_img) {
            move_uploaded_file($file_img, self::PATH_STORE.$data['link']);
            $connect = $this->connect();
            $query = "insert into image_comment (comment_id, link) value('".
                        $comment_id."','".
                        $data['link']."')";
            $result = $connect->query($query);
            if($result) {
                return "Them anh thanh cong";
            }
            else {
                return "Them anh that bai";
            }
        }

        function destroy($id) {
            $connect = $this->connect();
            $result = $connect->query("delete from image_comment where id = $id");
            if($result) {
                return "Xoa anh thanh cong";
            }
            else {
                return "Xoa anh that bai";
            }
        }
    }
?>