<?php
include_once "base.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hcy portfolio</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css"
        integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>



</head>



<body>
    <div class="container">
        <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="./index.php"><img src="./img/logo.jpg" width="230" height="130" alt=""></a>
        </div>
    </div>

    <div class="container">
        <?php include_once "./front/nav2.php"?>


        <?php 
        $do=$_GET["do"]??'index';
        $file='front/'.$do.".php";
        if(file_exists($file)){
        include $file; 
         }?>

        <div class="fixed-bottom">
            <?php include_once "./front/footer.php"?>

        </div>

</body>

</html>