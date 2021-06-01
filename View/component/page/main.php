<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
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
</head>
<body>
    <div class="main-container" id="main">
        <?php 
            include '../html/header.php';
            include '../html/slideshow.php';
            include '../html/mainIndex1.php';
            include '../html/mainIndex2.php';
            include '../html/mainFooter.php';
        ?>
    </div>
</body>
</html>