<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="" name="description" />
        <meta content="MENCHARI Abdelaziz" name="author" />
        <title>admin</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="./assets/css/fonts/css/font-awesome.css" />
        <link rel="stylesheet" type="text/css" href="./assets/css/main.css" />
    </head>

    <body class="padTop53 ">
        <div id="wrap">
            <div id="top">
                <?php require_once './elements/header.php'; ?>
            </div>
            <?php require_once './elements/side.php'; ?>
            <div id="content">
                <div class="inner" style="min-height:1200px;">
                    <?php
                        require_once "./routing/routes.php";
                        if(isset($page)){
                            require_once ($page != "") ? $page : "pages/list.php";
                        } else {
                            if($uri == "/login"){
                                //var_dump($_SERVER);die();
                                header("Location: ./pages/login.php");
                            } else {
                                header("Location: /errors/404.php");
                            }
                        }
                        
                        /*echo "<pre>", var_dump($_SERVER), "</pre>";*/
                    ?>
                </div>
            </div>
        </div>

        <script src="./assets/js/jquery-2.0.3.min.js"></script>
        <script src="./assets/js/bootstrap.min.js"></script>
    </body>

</html>