<?php
 $file=fopen("b.php","r");
 $line=fgets($file);
 while($line!=null)
{
 
        $data=explode(",",$line);
        echo "<table border='1' cellspacing='2' cellpadding='2'>";
        echo "<tr>";
        echo "<th>number</th>";
        echo "<th>name</th>";
        echo "<th>pin no</th>";
        echo "<th>address</th>";
        echo "</tr>";
        
}

?>