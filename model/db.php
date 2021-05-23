<?php 

class DBModel {
    public function connect(){
        // connect to database

        $host_name = '127.0.0.1';
        // $user = 'abu';
        // $pwd = 'yUM75]KOEGU6!Ia-';
        // $database = 'ahm1505';
        $database = 'ahm';
        $user = 'root';
        $pwd = '';
        $conn = mysqli_connect($host_name, $user, $pwd, $database);
        mysqli_set_charset($conn, 'utf8');

        if (mysqli_connect_errno()) {
            echo 'Connect error: ' . mysqli_connect_error();
        }
        return $conn;
    }
}
