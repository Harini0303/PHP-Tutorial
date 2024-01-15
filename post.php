<?php
print_r($_POST);
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    echo $email,$password;

}
?>

<!-- <a href="recieve.php?id=4">Id</a> -->

<form action="post.php" method="post">
    
<input type="text" name="email" placeholder="enter your email" autocomplete="off">
<br>
<br>
<input type="text" name="password" placeholder="enter your password" autocomplete="off">
<br>
<br>
<input type="submit" name="submit">