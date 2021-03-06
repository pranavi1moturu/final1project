<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">
<link rel="stylesheet" type="text/css" href="styles.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<body style="background-image:url(https://blog.trello.com/hubfs/to_do_list_feature.png?t=1513132646028)">
<h1>
<?php

$config = Manage::config();
echo $config['site_name'];
?>
</h1>
<h2>Register</h2>

<form action="index.php?page=accounts&action=register" method="post">
<h1> TODO TASK REGISTRATION </h1>
    First name: <input type="text" name="fname" placeholder="first name"required><br>
    Last name: <input type="text" name="lname"placeholder="lastname" required><br>
    Email or username: <input type="email" name="email" placeholder="username"required><br>
    Phone: <input type="tel" name="phone"placeholder="phone no" required><br>
    Birthday: <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br>
    Gender: <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br>
    Password: <input type="password" name="password" required><br>
   
   
    <input type="submit" value="Submit form">
</form>

<script src="js/scripts.js"></script>
</body>
</html>
