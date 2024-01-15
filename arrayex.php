<!-- convert string "example.pdf" into array, the delimiter is "." . Echo out the last element in the array. -->

<?php
$string = "example.pdf";
$array = explode(".", $string);

// Print the last element of the array
echo end($array);
?>

<!--  -->

