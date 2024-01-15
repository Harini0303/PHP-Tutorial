<?php
$error=[];
if(isset($_POST['submit'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if(empty($email)){
        $error[]="email required";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
       $error[]="invalid email";
    }

    if(empty($password)){
        $error[]="password required";
    }
    elseif(strlen($password < 5)){
        $error[]="password is not too strong";
    }

    if(empty($error)){
        echo $email,$password;
    }
}  
?>

<small style="color:red">
   <?php
   foreach($error as $err){
    echo $err."<br>";
   }
   ?>
   
</small>   


<form action="validation.php" method="post">
    <input type="text" name="email" placeholder="enter your email" autocomplete="on"> <br> <br>
    <input type="text" name="password" placeholder="enter your password" autocomplete="on"> <br> <br>
    <input type="submit" name="submit">
</form>