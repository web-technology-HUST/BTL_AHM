<style>
    <?php include '../css/mainIndex2.css' ?>
</style>
<div class="main-index-2">
    <div class="container">
        <div class="product-title">
            <h2><a class="title-name" href="#">TRANG SỨC KIM CƯƠNG</a></h2>
            <a class="see-all" href="#">Xem tất cả ></a>
        </div>
        <div class="show-product">
            <div class="banner">
                <a href="#">
                    <img src="../img/banner.jpg" alt="banner">
                </a>
            </div>
            <div class="item-main-index-2 scroll">
                <ul>
                    <?php 
                        for ($i = 0; $i < 8; $i++) {
                            echo '<li>';
                            include '../html/productDetail.php';
                            echo '</li>';
                        }    
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>
