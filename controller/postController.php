<?php 

    class postController {

        public function getPost() {
            
            require_once('./model/postModel.php');
            $postModel = new postModel();
            $post = $postModel->getPost();
            
            require_once('./view/postView.php');
            $postView = new postView();
            $postView->getPost($post);
        }

        public function addPost() {
            require_once('./view/postView.php');
            $addPost = new postView();
            $addPost->addPost();
        }

        public function doAddPost() {
            $name = $_POST['Name'];

            // vadidate
            $postData = array(
                'name'      => $name,
            );

            require_once('./model/postModel.php');
            $addPost = new postModel();
            $status = $addPost->doAddPost($postData);
            
            require_once('./view/postView.php');
            $notifyPost = new postView();
            $notifyPostt->notifyPost();
        }
    }
?>