<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL);
define('DATABASE', 'pm487');
define('USERNAME', 'pm487');
define('PASSWORD', 'kKmilXOt');
define('CONNECTION', 'sql2.njit.edu');
class dbConn
{
    //variable to hold connection object.
       protected static $db;
   
      private function __construct() 
        {

           try 
             {
              
              self::$db = new PDO( 'mysql:host=' . CONNECTION .';dbname=' . DATABASE, USERNAME, PASSWORD );
              self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
             }

           catch (PDOException $e)
             {
              //error when connection is not established
              echo "Connection Error: " . $e->getMessage();
             }
        }
    
    
      public static function getConnection() 
        {
           //if there is no active connection, create a new connection
            if (!self::$db) 
            {
                //new connection.
                 new dbConn();
            }
        
          //returning new  connection.
          return self::$db;
        }
}
?>