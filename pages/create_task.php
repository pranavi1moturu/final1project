<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">
<link rel="stylesheet" type="text/css" href="styles.css">
   // <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h1>
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?>
</h1>
<div align="center">
<h1>Add Todos</h1>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h1>Hi <?=$user_data->fname?></h1>
								
<ul>
<a href="index.php?page=accounts&action=all">My Account</a>

<a href="index.php?page=tasks&action=all">All Todos</a>

<a href="index.php?page=accounts&action=logout">Logout</a>
</ul>

<form action="index.php?page=tasks&action=save" method="post">
	Title: <input type="text" name="title" id="title" required><br>
	Body: <textarea name="body" id="body" required></textarea><br>
	Is Done: <input type="checkbox" name="isdone" id="isdone" value="1"><br>
    <input type="submit" value="Submit form">
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</div>
</body>
</html>