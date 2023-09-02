<?php

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
    <style>
        .dashboard-container {
            margin: 20px;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .user-greeting {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .logout-btn {
            background-color: #ff4d4d;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .logout-btn:hover {
            background-color: #ff3333;
        }
    </style>
    <title>Document</title>
</head>
<body>
<div class="container dashboard-container">
    <div class="row">
        <div class="col-12 text-center">
            <h1 class="user-greeting">Welcome, <span id="user-name">John Doe</span>!</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <button class="btn btn-lg logout-btn" id="logout-btn">Logout</button>
        </div>
    </div>
</div>
</table>
</body>
</html>
