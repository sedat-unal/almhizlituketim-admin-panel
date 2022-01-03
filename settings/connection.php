<?php
$host = "localhost";
$db = "alm";
$user = "root";
$password = "";

try {
    $connectDb = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $connectDb->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e)
{
    echo "connection failed. here is fail code : " . $e->getMessage();
}