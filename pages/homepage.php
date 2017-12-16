<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
<div align='center'>
    <title><h2>Todo Task Management</h2></title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </div>
</head>
<body>

<h1>
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?></h1>
<div align='center'>
<body bgcolor='pink'>
<h2>Login</h2>

<form action="index.php?page=accounts&action=login" method="POST">
    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="example@gmail.com" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
</body>
</div>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

<script src="js/scripts.js"></script>
</body>
</html>