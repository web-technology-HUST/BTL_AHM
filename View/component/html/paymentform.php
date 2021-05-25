<style>
    <?php
        include '../css/paymentform.css';
        // $payment = "7,030,000";
    ?>
</style>
<div class="payment-form">
    <form action="#">
        <div>Tổng tiền</div>
        <div class="clearfix">
            <p class="float-left">Thành tiền: </p>
            <?php echo '<p class="float-right">'.$payment.'đ</p>'; ?>
        </div>
        <div class="clearfix">
            <p class="float-left">Vận chuyển: </p>
            <p class="float-right">Miễn phí vận chuyển</p>
        </div>
        <input type="submit" value="TIẾN HÀNH ĐẶT HÀNG">
    </form>
</div>