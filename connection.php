<?php
$connection=mysqli_connect('localhost','root','','technical_event_kpriet');
if(!$connection){
    die(mysqli_error($connection));

}else{
    echo "connected";
}
?>