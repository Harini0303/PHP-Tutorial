<?php
$connection=mysqli_connect('localhost','root','','login');
if(!$connection){
    die(mysqli_error($connection));

}else{
    echo "connected";
}
?>