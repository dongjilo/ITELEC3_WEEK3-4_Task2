<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
    <title>Login</title>
    <style>
        body {
            background-color: #f2f2f2;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body >
    <div class="card p-4"  style="margin: 13% auto !important; max-width: 400px">
        <h2 class="h2 text-center p-3">login</h2>
        <form action="operations/checklogin.php" method="post">

            <div class="form-floating mb-3">
                <input type="text" name="txtUsername" class="form-control" id="floatingInput" placeholder="Username">
                <label for="floatingInput">Username</label>
            </div>

            <div class="form-floating">
                <input type="password" name="txtPassword" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="container text-center"><button type="submit" class="btn btn-primary my-2">Submit</button></div>
            <?php

            session_start();
            if (isset($_SESSION['error'])){
                echo "<br>";
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert"><button class="btn-close" data-bs-dismiss="alert"></button>' .
                      $_SESSION['error'] . '</div>';
            }

            ?>
        </form>
    </div>
</body>
</html>
