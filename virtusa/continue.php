<?php
session_start();

if(!$_SESSION['accno'])
{
    header('location:SignIn.php');
}else{
    echo "welcome".$_SESSION['accno'];
}
?>