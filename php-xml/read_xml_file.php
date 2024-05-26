<?php
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . " Category: " . $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title . "(" . $xml->book[1]->title['lang'] . ")";

echo "<br><br>";

foreach($xml->children() as $books) {
    echo $books->title . "(" . $books->title['lang'] . ")" . ", ";
    echo $books->author . ", ";
    echo $books->year . ", ";
    echo $books->price . "<br>";
}
?>