<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">
<div align='center'>
<body bgcolor='skyblue'>
    <title><Todo Task Management</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

<link rel="stylesheet" type="text/css" href="styles.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
    </body>
    </div>
</head>

<body>
<body style="background-image:url(https://greatist.com/sites/default/files/To-Do-List-feature.jpg)">
<h1>
<?php

$config = Manage::config();
echo $config['site_name'];
?></h1>
<h3>All Todos</h3>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); ?>

<h3>Hello <?=$user_data->fname?></h3>

<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=create">Add Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<?php

if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data);
} else {
	echo 'Data not found';
}
?>

<script src="js/scripts.js"></script>
</body>
</html>