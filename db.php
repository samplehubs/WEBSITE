<?php
$connection = mysqli_connect('localhost','root','','loginapp');

if($connection){
    echo "We are connected";
}else{
    die("Database Connection Failed");
}
?>