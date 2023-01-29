<?php
$dbhost = "localhos";
$dbuser = "root";
$dbpass = "";
$dbname = "login_sample_db";

if (!$con = mysqli_connection($dbhost,$dbuser,$dbpass,$dbname))
{
    die("FAILED TO CONNECT!");
} 