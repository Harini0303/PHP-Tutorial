<?php
$students=['hhh','aaa','bbb'];
array_push($students,'mmm','nnn');
echo "<pre>";
print_r($students);
array_unshift($students,'aaa','bbb');
print_r($students);

array_pop($students);
print_r($students);
array_shift($students);
print_r($students);

var_dump(in_array('mmm',$students));
var_dump(array_search('aaa',$students));

sort($students);
print_r($students);
rsort($students);
print_r($students);