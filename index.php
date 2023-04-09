<?php
session_start();
require_once('admin/koneksi.php');
require_once('admin/model.php');
include_once('layouts/header.php');
if ($_REQUEST['page'] != 'login' and $_REQUEST['page'] != 'daftar' and $_REQUEST['page'] != 'reset') {
	include_once('layouts/menu.php');
}
if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
	if ($page == 'keranjang' or $page == 'pesanan') {
		if (!isset($_SESSION['nama'])) {
			echo '<meta http-equiv="refresh" content="0; url=?page=login" />';
		}
	}
	include_once($page . '.php');
} else {
	echo '<meta http-equiv="refresh" content="0; url=?page=home" />';
}

if ($page != 'login' and $page != 'daftar' and $page != 'reset') {
	include_once('layouts/footer.php');
}
if (isset($_POST['cart'])) {
	AddCart($_POST['id'], $_POST['qty']);
	echo '<meta http-equiv="refresh" content="0; url=?page=keranjang" />';
}
