<?php
session_start();

if(isset($_SESSION['username'])){
    header('Location:login.php#create');
}
else{
    header('Location:enroll.php#enrollform');
}
?>