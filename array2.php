<!-- string to array use explode-->

<?php
$initial='m,p,n,o,u';
$arr=explode(',',$initial);  //delimters
echo "<pre>";
print_r($arr);

echo current($arr);
echo next($arr);
echo end($arr);
?>

<!-- array to string use implode -->
   <!-- , //glue -->