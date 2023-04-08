<?php 
session_start();
if (isset($_SESSION['nama'])) {
    session_destroy();
    header("location:login.php");
} else {
    header("location:login.php");
}
?>