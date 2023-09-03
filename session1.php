<?php

session_start();
$_SESSION['name'] = "MARYO";
$_SESSION['x'] = 66;

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

    <title>Session 1</title>
    <style>
        body {
            background-color: #f4f4f4;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: 10% auto !important;
        }

    </style>
</head>
<body>
    <div class="card p-4">
        <h5 class="card-title text-center">Session 1</h5>
        <p class="card-text">
            <strong>Name:</strong> <?php echo $_SESSION['name'] ?> <br>
            <strong>x:</strong> <?php echo $_SESSION['x']?>
        </p>
        <div class="container text-center py-2">
            <a href="session2.php" class="btn btn-success text-light">Session 2</a>
        </div>
    </div>
</body>
</html>
