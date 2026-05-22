<?php
$str=<<<XML
<?xml version="1.0" encoding="ISO-88-59-1"?>
<bookinfo>
    <book>
        <bno>101</bno>
        <bname>bhavna</bname>
        <year>2023</year>
        <price>250</price>
</book>
</bookinfo>
XML;
$fname="s.xml";
$fp=fopen($fname,"w");
fwrite($fp,$str);
fclose($fp);
echo "created file:".$fname;
?>