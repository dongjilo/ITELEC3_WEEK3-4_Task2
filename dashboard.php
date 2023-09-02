<?php
session_start();
$username = '';
if (empty($_SESSION['txtUsername'])){
    header('Location: login.php');
} else {
    $username = $_SESSION['txtUsername'];
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="<KEY>" crossorigin="anonymous"></script>
    <title>Dashboard</title>
</head>
<body>
    <div class="container">
        <h1 class="h1">Dashboard</h1>
        <p>Welcome to dashboard</p>
        <p>Hello <?php echo $_SESSION['txtUsername'] ?></p>
        <a href="operations/logout.php" class="btn btn-danger">Logout</a>
    </div>
</body>
</html>
