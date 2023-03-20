<?php

$db_server_name="localhost";
$db_user_name="root";
$db_password="root";
$db_database_name="employee";

// ## MySQLi Object-Oriented ##  - Create Connection//
/*$mysqli=@new mysqli($db_server_name,$db_user_name,$db_password,$db_database_name);*/

// ## MySQLi Procedural ## //
$_conn=mysqli_connect($db_server_name,$db_user_name,$db_password,$db_database_name);

// Check connection.
if($_conn){
    echo "Connection Successfully";
}else{
    die("Connection Error:" .mysqli_connect_error());
}


