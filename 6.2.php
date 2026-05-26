<?php
$eno=$_COOKIE["eno"];
$ename=$_COOKIE["ename"];
$eaddr=$_COOKIE["eaddr"];

$basic=$_POST["b4"];
$da=$_POST["b5"];
$hra=$_POST["b6"];

echo "<h2>Employee Details:</h2>";
echo "Employee no:".$eno."<br>";
echo "Employee name:".$ename."<br>";
echo "Employee address:".$eaddr."<br>";
echo "Employee basic:".$basic."<br>";
echo "Employee da:".$da."<br>";
echo "Employee hra:".$hra."<br>";
echo "Employee total:".$da*$hra."<br>";




?>