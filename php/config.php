<?php
/* Database credentials. */
define('DB_SERVER', '127.0.0.1:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
/*
$user = "root";
$pass = "";
 Attempt to connect to MySQL database
$dsn = "odbc:MySqlTest";
$link = new PDO($dsn, $user, $pass);*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
<?php
/* Database credentials.
define('DB_SERVER', '127.0.0.1:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'test');
*/
/*
$user = "root";
$pass = "";
*/
/* Attempt to connect to MySQL database
//$dsn = 'mysql:MySqlTest';
//$link = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);


// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_error());
}
*/
?>