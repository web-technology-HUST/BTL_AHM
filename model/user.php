<?php 
    require_once('db.php');

    class User extends DBModel {
        // Liet ke dnah sach tai khoan
        function index() {
            $connect = $this->connect();
            $result = $connect->query('select * from users'); 
            $users = array();
            if ($result->num_rows > 0) {
                while ($user = mysqli_fetch_assoc($result)) {
                    $users[] = $user;
                }
            }
            return $users;
        }
        // Them tai khoan moi
        function store($data) {
            $connect = $this->connect();
            $query = "insert into users (name, email, password, phone, gender, birthday, address, role, state) 
            VALUE ('".$data['name']."','"
                    .$data['email']."','"
                    .$data['password']."','"
                    .$data['phone']."','"
                    .$data['gender']."','"
                    .$data['birthday']."','"
                    .$data['address']."','"
                    .$data['role']."','"
                    .$data['state']."')";
            $result = $connect->query($query);
            if($result) {
                return "Tao tai khoan thanh cong";
            }
            else {
                return "Tao tai khoan that bai";
            }
        }
        // Xem chi tiet tai khoan
        function show($id) {
            $connect = $this->connect();
            $query = "select * from users where id = $id";
            $result = $connect->query($query);
            $user = mysqli_fetch_assoc($result);
            return $user;
        }
        // Chinh sua tai khoan
        function update($id, $data) {
            $connect = $this->connect();
            $query = "update users set ".
                        "name = '".$data['name']."',".
                        "email = '".$data['email']."',".
                        "password = '".$data['password']."',".
                        "phone = '".$data['phone']."',".
                        "gender = '".$data['gender']."',".
                        "birthday = '".$data['birthday']."',".
                        "address = '".$data['address']."',".
                        "role = '".$data['role']."',".
                        "state = '".$data['state']."' where id = $id";
            $result = $connect->query($query);
            if($result) {
                return "Chinh sua thong tin tai khoan thanh cong";
            }
            else {
                return "Chinh sua thong tin tai khoan that bai";
            }
        }
    }

    $testUser = new User();

    // index
    // print_r($testUser->index());

    // store
    $data = [
        'name' => 'Ngo Duc Minh Minh',
        'email' => 'ndminh@gmail.com',
        'password' => '123456',
        'phone' => '0394076666',
        'gender' => '1',
        'birthday' => '2000-1-1',
        'address' => 'HBT - Ha Noi',
        'role' => 1,
        'state' => 1,
    ];
    // print_r($testUser->store($data));

    // show
    // print_r($testUser->show(1));

    //update
    // print_r($testUser->update(7, $data));

?>