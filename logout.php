<?php 
if (isset($_SESSION['nama'])) {
    session_destroy();
    echo '<meta http-equiv="refresh" content="0; url=./?page=login" />';
} else {
    echo '<meta http-equiv="refresh" content="0; url=./?page=login" />';
}
