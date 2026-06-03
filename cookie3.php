<?php
session_start();
$a=$_POST["m1"];
$b=$_POST["m2"];
$c=$_POST["m3"];
$_SESSION["cust number"]=$a;
$_SESSION["cust name"]=$b;
$_SESSION["cust address"]=$c;

$eno=$_POST["e1"];
$ename=$_POST["e2"];
$addr=$_POST["e3"];

echo "<h1>Customer Info</h1>";
echo "<br>Number of customer::".$a;
echo "<br>Name of customer::".$b;
echo "<br>Address of customer::".$c;

echo "<br><h1>Employee Info</h1>";
echo "<br>Employee number::".$eno;
echo "<br>Employee name::".$ename;
echo "<br>Employee addresss::".$addr;
?>