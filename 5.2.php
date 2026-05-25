<?php
session_start();
$eno=$_SESSION["eno"];
$ename=$_SESSION["ename"];
$eaddr=$_SESSION["eaddr"];

$basic=$_POST["e4"];
$da=$_POST["e5"];
$hra=$_POST["e6"];

echo "<h3>Employee Details</h3>";
echo "Employee no:".$eno."<br>";
echo "Employee name:".$ename."<br>";
echo "Employee address:".$eaddr."<br>";
echo "BASIC:".$basic."<br>";
echo "DA:".$da."<br>";
echo "HRA:".$hra."<br>";
echo "Total is:".$da*$hra."<br>";


?>