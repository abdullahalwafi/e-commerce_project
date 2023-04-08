<?php
session_start();
require_once('koneksi.php');
require_once('model.php');
if ($_SESSION['nama'] == "") {
    header("location:../login.php");
}
if ($_SESSION['role'] != 'admin') {
    header("location:../?page=home");
}
include_once('layouts/header.php');
if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
    include_once($page . '.php');
} else {
    include_once 'home.php';
}

include_once('layouts/footer.php');
