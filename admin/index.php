<?php
session_start();
require_once('koneksi.php');
require_once('model.php');
if ($_SESSION['nama'] == "") {
    header("location:../?page=login");
} else {
    if ($_SESSION['role'] != 'admin') {
        header("location:../?page=home");
    }
}
include_once('layouts/header.php');
if (isset($_REQUEST['page'])) {
    $page = $_REQUEST['page'];
    include_once($page . '.php');
} else {
    echo '<meta http-equiv="refresh" content="0; url=?page=home" />';
}

include_once('layouts/footer.php');
