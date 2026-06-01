<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        enter your choice:<input type="text" name="arr"><br>
        1.split array<br>
        2.sort array<br>
        3.merge array<br>
        4.intersection of two array<br>
        5.unoin of two array<br>
        6.difference of two array<br>
        7.filter<br>
        <input type="submit" value="submit"><br>
</form>
</body>
</html>
<?php

$a=$_POST["arr"];
$b=array(1,5,7,8,7,8,8,9);
$c=array(7,8,9,7,8,9,4,5,6);
switch($a)
{
    case 1:$array=array_chunk($b,5);
    print_r($array);
    break;

    case 2:$array=asort($b);
    print_r($b);
    break;

    case 3:$array=array_merge($b,$c);
    print_r($array);
    break;

    case 4:$array=array_intersect($b,$c);
    print_r($array);
    break;

    case 5:$array=$b+$c;
    print_r($array);
    break;

    case 6:$array=array_diff($b,$c);
    print_r($array);
    break;

    case 7:$odd=array_filter($b,fn($n)=>$n%2);
    print_r($odd);
    break;
}
?>