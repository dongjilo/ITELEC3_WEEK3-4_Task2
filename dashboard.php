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
    <style>
        body {
            background-color: #f4f4f4;
        }

        .container {
            margin-top: 5% !important;
        }

        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .anim {
            transition: fadeIn 500ms ease-in;
        }

        @keyframes fadeIn {
            from {
                transform: translateY(100%);
                opacity: 0;
            }
            to {
                transform: translateY(0px);
                opacity: 1;
            }
        }


    </style>
</head>
<body>

<div class="container">
    <div class="card anim">
        <div class="card-header text-light bg-success rounded-top">
            <h2 class="h2">Dashboard</h2>
        </div>

        <div class="card-body px-5">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button class="btn-close" data-bs-dismiss="alert"></button>You have successfully logged in to your account.
            </div>
            <h3 class="mb-4">Welcome to the dashboard.</h3>
            <p class="mb-4">Hello, <strong><?php echo $_SESSION['txtUsername'] ?></strong>.</p>
            <a href="operations/logout.php" class="btn btn-danger mb-4">Logout</a>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fz7b6df5g6z9f9GvT8Z8FzFdr6RHJ9DU3j5F5LpxP6o4z5H8XDIH/CdKPJZfUo2x5" crossorigin="anonymous"></script>
</body>
</body>
</html>
