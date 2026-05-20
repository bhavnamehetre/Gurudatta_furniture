<?php
session_start();
if(isset($_SESSION["count"]))
    {
        $a=$_SESSION["count"]++;
    }
else
    {
        $a=$_SESSION["count"]=1;
    }
echo "position is:".$a;



?>