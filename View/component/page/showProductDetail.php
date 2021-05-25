<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <style>
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
    </style>
    <div>
        <?php 
            include '../html/header.php';
            include '../html/showAllProductDetail.php';
            include '../html/mainFooter.php';
        ?>
    </div>
</body>
</html>