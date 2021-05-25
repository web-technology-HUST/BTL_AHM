<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Giỏ hàng</title>
    <style>
        <?php
            include '../css/mainIndex1.css';
        ?>
        *:focus {
            outline: none;
        }

        * {
            box-sizing: border-box;
            font-size: 16px;
            font-family: sans-serif, Verdana, arial;
        }

        body {
            width: 100%;
            margin: 0 auto;
            padding-top: 20px;
        }

        ::-webkit-scrollbar {
            width: 5px;
            height: 5px;
        }

        ::-webkit-scrollbar-thumb {
            background: rgb(243, 82, 82);
        }
        .cartLeft {
            float: left;
            width: 70%;
        }

        .cartRight {
            float: right;
            width: 30%
        }

        .container {
            width: 90%;
            margin: auto;
            margin-top: 20px;
            margin-bottom: 30px
        }
    </style>
</head>
<body>
    <div class="cart">
        <?php
            include '../html/header.php'
        ?>
        <div class="container clearfix">
            <div class="cartLeft clearfix">
                <div class="product-title">
                    <h2><a class="title-name" href="#">GIỎ HÀNG</a></h2>
                </div>
                <?php
                    $payment = 0;
                    for ($j = 0; $j < 3; $j++) {
                        include '../html/productInCart.php';
                        $payment += $allPrice;
                    }
                ?>
            </div>
            <div class="cartRight">
                <?php
                    $count = 0;
                    for ($i = strlen($payment) - 1; $i != 0 ; $i--) {
                        $count++;
                        if ($count % 3 == 0) {
                            $payment = substr_replace((string)$payment, ",", $i, 0);
                        }
                    }
                    include '../html/paymentform.php';
                ?>
            </div>
        </div>
        <?php
            include '../html/mainFooter.php';
        ?>
    </div>
</body>
</html>