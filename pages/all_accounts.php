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
<body style="background-image:url(https://greatist.com/sites/default/files/To-Do-List-feature.jpg)">
<h1>
<?php
//this how to print some data;
$config = Manage::config();
echo $config['site_name'];
?>
<body bgcolor='grey'>
</h1>
<h2>My Account</h2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h1>Hi <?=$user_data->fname?></h1>
								
<ul>
<li><a href="index.php?page=tasks&action=all">Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<?php
//this is how you print something
print utility\htmlTable::genarateTableFromMultiArray($data);
?>

<script src="js/scripts.js"></script>
</body>
</html>