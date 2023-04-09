<?php 
session_start();
if (isset($_SESSION['nama'])) {
    session_destroy();
    header("location:./?page=login");
} else {
    header("location:./?page=login");
}
