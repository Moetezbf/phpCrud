<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link rel="stylesheet" href="../assets/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />
</head>

<body>

    <div class="container">
        <div class="text-center">
            <img src="../assets/imgs/logo.png" id="logoimg" alt=" Logo" />
        </div>
        <div class="tab-content">
            <div id="login" class="tab-pane active">
                <form action="index.html" class="form-signin">
                    <input type="text" placeholder="login" class="form-control" />
                    <input type="password" placeholder="password" class="form-control" />
                    <button class="btn text-muted text-center btn-primary" type="submit">LOGIN</button>
                </form>
            </div>

            <div id="signup" class="tab-pane">
                <form action="index.html" class="form-signin">
                    <input type="text" placeholder="nom" class="form-control" />
                    <input type="text" placeholder="username" class="form-control" />
                    <input type="email" placeholder="E-mail" class="form-control" />
                    <input type="password" placeholder="password" class="form-control" />
                    <button class="btn text-muted text-center btn-success" type="submit">INSCRIPTION</button>
                </form>
            </div>
        </div>
        <div class="text-center">
            <ul class="list-inline">
                <li><a class="text-muted" href="#login" data-toggle="tab">Login</a> |</li>
                <li><a class="text-muted" href="#signup" data-toggle="tab">Pas de compte</a></li>
            </ul>
        </div>


    </div>

    <script src="../assets/js/jquery-2.0.3.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/login.js"></script>
</body>

</html>