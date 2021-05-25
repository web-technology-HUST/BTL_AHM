<?php 
    require_once('db.php');
    class loginModel extends DBModel{
        function checkLogin($email, $password) {
            $connect = $this->connect();
            $query = "select * from users where email = '$email'";
            $result = $connect->query($query);
            if ($result->num_rows > 0) {
                $user = mysqli_fetch_assoc($result);
                if($user['password'] == $password) {
                    return "Dang nhap thanh cong";
                }
                else {
                    return "Sai mat khau";
                }
            }
            else {
                return "Sai dia chi email";
            }
        }
    }
    $testLogin = new loginModel();
    print_r($testLogin->checkLogin('minhnd@gmail.coml', '123456'));
?>



