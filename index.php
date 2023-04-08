<?php
session_start();
require_once('admin/koneksi.php');

include_once('layouts/header.php');
include_once('layouts/menu.php');
if (isset($_REQUEST['page'])) {
	$page = $_REQUEST['page'];
	include_once($page . '.php');
} else {
	echo '<meta http-equiv="refresh" content="0; url=?page=home" />';
}

include_once('layouts/footer.php');
