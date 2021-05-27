<?php 
    require_once('db.php');

    class Paginate extends DBModel {
        // public $page;
        // public $totalPage;
        // public $products;

        public function setData( $page, $totalPage, $products) {
            $this->page = $page;
            $this->totalPage = $totalPage;
            $this->products = $products;  
        }

        public function paginate ($page = 1, $limit = 2) {
            $connect = $this->connect();
            $query      = "select * from products " . " limit " . ( ( $page - 1 ) * $limit ) . ", $limit";
            $result = $connect->query( $query );
            $prods = [];
            if ($result->num_rows > 0) {
                while ($product = mysqli_fetch_assoc($result)) {
                    $prods[] = $product;
                }
            }
            $rs  = $connect->query("select * from products");
            $totalP = ceil(($rs->num_rows)/$limit);

            $data = [];
            $data['page'] = $page;
            $data['totalPage'] = $totalP;
            $data['products'] = $prods;
            // return $data;

            $this->page = $page;
            $this->totalPage = $totalP;
            $this->products = $prods;
            
        }
       
    }

    $testPaginate = new Paginate();
    // var_dump($testPaginate->paginate(5));


    echo $testPaginate->page."<br>";
    echo $testPaginate->totalPage."<br>";
    print_r($testPaginate->products);



?>