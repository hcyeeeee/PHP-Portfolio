<?php include_once "base.php";
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resume</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.1/css/all.min.css"
        integrity="sha512-9my9Mb2+0YO+I4PUCSwUYO7sEK21Y0STBAiFEYoWtd2VzLEZZ4QARDrZ30hdM1GlioHJ8o8cWQiy8IAb1hy/Hg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/jquery.js"></script>
    <script src="./js/js.js"></script>

</head>

<body>

    <div class="container">
        <div class="d-flex justify-content-center">
            <a class="navbar-brand" href="./index.php"><img src="./img/logo.jpg" width="250" height="150" alt=""></a>
        </div>
    </div>
    <!-- nav -->
    <div class="container">
        <nav class='bg-black py-3 px-2 d-flex justify-content-between mb-4'>
            <div>
                <a class='px-2 text-light' href="?do=about">基本資料管理</a>
                <a class='px-2 text-light' href="?do=experience">經驗管理</a>
                <a class='px-2 text-light' href="?do=work">作品管理</a>
                <a class='px-2 text-light' href="?do=contact">留言管理</a>
                <a class='px-2 text-light' href="?do=bottom">頁尾版權</a>
            </div>

            <div>
                <a class='px-2 text-light' href="./index.php">登出</a>
            </div>
        </nav>

        <!-- nav -->
    </div>


    <div>

        <?php $do=$_GET["do"]??'about';
         $file='back/'.$do.".php";
         if(file_exists($file)){
         include $file;
       }?>
    </div>


 
<div class="fixed-bottom">
<?php include_once "./front/footer.php"?>

    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <!-- tabs js -->



</body>

</html>