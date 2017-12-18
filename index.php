
<?php
//error messages on
ini_set('display_errors', 'On');
error_reporting(E_ALL);



include_once "autoload.php";

//database information
include_once "database.php";


$response = http\processRequest::createResponse();
?>
