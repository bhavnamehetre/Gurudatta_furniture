<?php
session_start();

$cname=$_SESSION["cname"];
$caddr=$_SESSION["caddr"];
$cmob=$_SESSION["cmob"];

$pname=$_POST["c4"];
$pqua=$_POST["c5"];
$prate=$_POST["c6"];

echo "<h1>customer details:</h2>";
echo "customer name:".$cname."<br>";
echo "customer address:".$caddr."<br>";
echo "customer contact:".$cmob."<br>";

echo "<h2>product details:</h2>";
echo "product name:".$pname."<br>";
echo "product quantity:".$pqua."<br>";
echo "product rate:".$prate."<br>";
echo "Final Bill:".$pqua*$prate;

?>