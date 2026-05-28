<?php
$doc=new DOMDocument("1.0","UTF-8");
$doc->formatOutput=TRUE;
$book=$doc->createElement("bookinfo");
$doc->appendChild($book);
$cs=$doc->createElement("book");
$book->appendChild($cs);
$name=$doc->createElement("bno",101);
$cs->appendChild($name);
$name=$doc->createElement("bname","java");
$cs->appendChild($name);
$cs=$doc->createElement("book");
$book->appendChild($cs);
$name=$doc->createElement("bno",102);
$cs->appendChild($name);
$name=$doc->createElement("bname","php");
$cs->appendChild($name);
$doc->save("bhavna.xml");
echo "file is created..........!";





?>