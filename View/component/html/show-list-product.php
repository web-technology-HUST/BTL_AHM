<style>
    <?php 
        include '../css/show-list-product.css'
    ?>
</style>
<script src="https://kit.fontawesome.com/2ce63962ec.js" crossorigin="anonymous"></script>
<div class="show-list-product">
    <div class="container">
        <div class="product-title">
            <h2 class="mediaChange"><a class="title-name" href="#">TRANG SỨC KIM CƯƠNG</a></h2>
            <div class="arrange">
                <span><b class="mediaChange">SẮP XẾP THEO</b></span>
                <div class="dropdown">
                    <span id="dropdown-selected" style="display: inline-block;" class="mediaChange">Tất cả sản phẩm</span>
                    <i style="color:rgb(243, 82, 82)" class="fas fa-caret-down"></i>
                    <div class="dropdown-content">
                        <a class="dropdown-content-a mediaChange" onclick="selectContent(this)">Tất cả sản phẩm</a>
                        <a class="dropdown-content-a mediaChange" onclick="selectContent(this)">Sản phẩm mới nhất</a>
                        <a class="dropdown-content-a mediaChange" onclick="selectContent(this)">Từ giá thấp đến cao</a>
                        <a class="dropdown-content-a mediaChange" onclick="selectContent(this)">Từ giá cao đến thấp</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="show-products">
            <?php 
                for ($i = 0; $i < 12; $i++) {
                    include '../html/productDetail.php';
                }
            ?>
            
        </div>
    </div>
</div>
<script>
    function selectContent(x) {
        document.getElementById("dropdown-selected").innerHTML = x.innerText;
    }
</script>