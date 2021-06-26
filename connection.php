<!--This file helps connect to the database-->

<?php 

$dbhost = "localhost";
$dbuser = "root"; //database username- this is the default username on all new databases made in using localhost servers
$dbpass = ""; // the default password is NO password for local databases
$dbname = "logindb";  // database name

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
    die("Failed to connect to that sucker!"); //error message returned if there's connectioin failure to the database
}