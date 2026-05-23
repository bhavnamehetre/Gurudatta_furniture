<?php
$str=$_GET['name'];
$a=["apple","bhavna","banana","sharddha","mango"];
if($str!=" ")
    {
        echo "suggesion...!<br>";
    }
        foreach($a as $i)
            {
                if(strpos($i,$str)!==false)
                    {
                        echo $i."<br>";
                    }
            }
    
?>