<?php
$xml=simplexml_load_file("8.xml");
foreach($xml->item as $i)
    {
        echo "number::".$i->ino."<br>";
        echo "name::".$i->iname."<br>";
        echo "year::".$i->year."<br>";
        echo "price::".$i->price."<br><br>";
    }


?>