<style>
    <?php
        include '../css/productInCart.css';
        $amount = 2;
        $price = "7,030,000";
        $splitPrice = explode(",", $price);
        $allPrice = (int)implode("", $splitPrice)*$amount;
        $allPriceString = (string) $allPrice;
        $count = 0;
        for ($i = strlen($allPrice) - 1; $i != 0 ; $i--) {
            $count++;
            if ($count % 3 == 0) {
                $allPriceString = substr_replace((string)$allPriceString, ",", $i, 0);
            }
        }
    ?>
</style>
<div class="product-in-cart">
    <div class="item-in-cart clearfix">
        <img src="../img/nhan-nu-1019182r4634vc2870-1-dXBsb2FkcHJvZHVjdG5oYW4tbnU=-small.jpg" alt="image">
        <div class="info-item-in-cart">
            <h2>NHẪN CITRINE GJR614</h2>
            <div>MSP : GJR614</div>
            <div class="price">
                <div><b>Số lượng: </b><?php echo '<p class="red">'.$amount.'</p>'; ?></div>
                <div><b>Giá tiền: </b><?php echo '<p class="red">'.$price.'đ</p>'; ?></div>
                <div><b>Thành tiền: </b><?php echo '<p class="red">'.$allPriceString.'đ</p>'; ?></div>
            </div>
            <div class="delete-product"><a href="#">Xóa</a></div>
        </div>
    </div>
</div>