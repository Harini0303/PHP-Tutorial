<?php
if(isset($_GET['submit'])){
    $email = $_GET['email'];
    $password = $_GET['password'];
    echo $email,$password;

}
?>

<a href="recieve.php?id=4">Id</a>

<form action="get.php?id=40" method="get">
    
<input type="text" name="email" placeholder="enter your email" autocomplete="off">
<br>
<br>
<input type="text" name="password" placeholder="enter your password" autocomplete="off">
<br>
<br>
<input type="submit" name="submit">