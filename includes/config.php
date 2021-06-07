<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("Europe/Prague");

try {
    $con = new PDO("mysql:dbname=dhMQdOJ2uO;host=remotemysql.com;port=3306", "dhMQdOJ2uO", "HCgGx3WCrh");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>