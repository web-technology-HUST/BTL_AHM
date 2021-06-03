<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        <?php 
            include '../css/showProduct1.css'
        ?>
    </style>
</head>
<body>
<div class="show-product-1">
    <div class="show-product-1-container">
        <?php
            include '../html/header.php'
        ?>
        <img src="../img/ngoc-trai-1920x703-copy1.jpg" alt="banner" width="100%">
        <divc id="demo">
            <?php
                include '../html/show-list-product.php';
            ?>
        </div>
        <?php
            include '../html/pagination.php';
            include '../html/mainFooter.php';
        ?>
    </div>
</div>
</body>
</html>
