<?php
$connection = new mysqli ('localhost','root', '', 'crud operation');

if ($connection){
    
    // echo ("connection successfull !");
}
 else {
    die (mysqli_error($connection));
 }
?>