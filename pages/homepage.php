<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
<div align='center'>

    <title><div align='center'><h1><b>Todo Task Management</b></h1></div></title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">
<img src="b1.jpg"/> 
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </div>
</head>
<body>
<body style="background-image:url(https://turbinehq.com/wp-content/uploads/2016/06/The-perfect-to-do-list.jpg)">
<h1>
<?php

$config = Manage::config();
echo $config['site_name'];
?></h1>
<div align='center'>

<h2>Login</h2>

<form action="index.php?page=accounts&action=login" method="POST">
    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="example@gmail.com" name="email" required>

        <label><b>Password</b></label>
        <input type="password" pattern=".{8,}"   required title="6 characters minimum">
        <input type="Password" placeholder="Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
</body>
                      
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

<script src="js/scripts.js"></script>
</div>
</body>
</html>