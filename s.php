<?php
$name=$_GET["name"];
$a=array("Rohan","Bhavna","dhoni");
if($name=="")
    {
        echo "stranger tell me your name";
    }
else if(in_array($name,$a))
    {
        echo "hello master"  .$name;
    }
else
    {
        echo $name."  i don't know how you are??";
    }
?>