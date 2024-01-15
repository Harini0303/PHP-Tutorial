<!-- declaring variables -->

<?php
  $firstName="legends";
  $firstName="weak boys"; //assignament by value

  echo $firstName;
  echo "<br>";

  $lastName=&$firstName;  //assignment by reference
  echo $lastName;
  echo "<br>";

  $lastName="Strong boys";
  echo $firstName;
  echo "<br>";

  echo isset($lastName);  //variable is assigned a value
  echo "<br>";

  echo empty($Name);  //check variable is not defined
  ?>