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
</head>
<body>
    <div class="card p-5"  style="margin: 13% auto !important; max-width: 400px">
        <h2 class="h2 text-center">login</h2>
        <form action="operations/checklogin.php" method="post">

            <div class="form-group py-2">
                <label for="exampleInputUsername">Username</label>
                <input type="text" name="txtUsername" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp" placeholder="Enter username">
            </div>
            <div class="form-group py-2">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="txtPassword" class="form-control" id="exampleInputPassword1" placeholder="Password">
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
