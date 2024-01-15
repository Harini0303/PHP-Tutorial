<?php

    //1.scalar
$title="III A";
$publisher="XYZ";
$year=2023;
$price=10.10;
$isGood=true;
echo $title."<br>";
echo $publisher."<br>";
echo $year."<br>";
echo $price."<br>";
echo $isGood."<br>";

      //2.compounds

$characters=['xxxx','yyyy','zzzz'];
//echo $characters;
//objects
//iterable
//callable

      //3.specials
$nothing=NULL; //NULL
echo $nothing."<br>";
//resource
echo gettype($nothing)."<br>";  //to get datatype
echo var_dump($year);  //more information about variable

?>