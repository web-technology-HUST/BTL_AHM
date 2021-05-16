<?php 

    class postView {

        public function getPost($posts) {        
            require_once('./template/post.php');          
        }

        public function addPost(){
            require_once('./template/form.php');
        }

        public function notifyPost($status){
            if($status) {
                echo 'thanh cong';
            }
            else{
                echo 'that bai';
            }
        }
    }
?>