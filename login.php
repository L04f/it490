<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$db = mysqli_connect("127.0.0.1","rbuser","RBuser123:D","accounts");

if(!$db)
{
    echo "error: unable to connect to mysql" . PHP_EQL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EQL;
    exit;
}

$user = $_POST["user"];
$password = $_POST["password"];

$result = mysqli_query($db, "SELECT user, password FROM accounts WHERE `user` = '".$user."' AND `password` = '".$password."'");

if(mysqli_num_rows($result) > 0)
    {
	echo "Login Success";
    }
    else
    {
    echo "Incorrect Login,";
    }
?>
