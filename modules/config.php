<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting(~E_DEPRECATED & ~E_NOTICE);
 // but I strongly suggest you to use PDO or MySQLi.
 
 define('DBHOST', 'localhost');
 define('DBUSER', 'stackdes_bnwt');
 define('DBPASS', '^3w]@QTw7t8s');
 define('DBNAME', 'stackdes_stackdesign');
 
 $conn = mysql_connect(DBHOST, DBUSER, DBPASS);
 $myDatabase = mysql_select_db(DBNAME);
 
if (!$conn) {
    die("Connection failed : " . mysql_error());
}
 
if (!$myDatabase) {
    die("Database Connection failed : " . mysql_error());
}
