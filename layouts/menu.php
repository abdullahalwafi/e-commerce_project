<div class="sidebar">
    <div class="text-center">
        <h3 class="mb-1 mt-5">Selamat Datang</h3>
        <?php if (isset($_SESSION['nama'])) {
            echo '<h5 class="mb-1">' . $_SESSION['nama'] . '</h5>';
        } else {
            echo '<h5 class="mb-1">Silahkan login</h5>';
        } ?>
    </div>
    <br>
    <div class="row mx-0">
        <div class="col">
            <h5 class="subtitle text-uppercase"><span>Menu</span></h5>
            <div class="list-group main-menu">
                <a href="?page=home" class="list-group-item list-group-item-action active">Dashboard<i class="material-icons float-right">chevron_right</i></a>
                <?php if (isset($_SESSION['nama'])) {
                    echo '<a href="?page=pesanan" class="list-group-item list-group-item-action active">Pesanan<i class="material-icons float-right">chevron_right</i></a>';
                } else {
                    echo '<a href="?page=login" class="list-group-item list-group-item-action active">Pesanan<i class="material-icons float-right">chevron_right</i></a>>';
                } ?>
                <p data-toggle="modal" data-target="#colorscheme" class="list-group-item list-group-item-action active">Setting Warna<i class="material-icons float-right">chevron_right</i></p>
                <a href="?page=login" class="list-group-item list-group-item-action mt-4 active">Login<i class="material-icons float-right">chevron_right</i></a>
            </div>
        </div>
    </div>
</div>

<div class="wrapper">
    <div class="header">
        <div class="row no-gutters">
            <div class="col-auto">
                <button class="btn  btn-link text-dark menu-btn"><i class="material-icons">sort</i></span></button>
            </div>

            <div class="col text-center"><img src="admin/assets/img/logo-20211112170407.png" alt="" class="header-logo"></div>
            <div class="col-auto d-none d-sm-block">
                <a href="javascript:void(0)" onclick="$('#modalpilihpesan').modal()" class="btn btn-link text-dark"><i class="fa fa-comments"></i></a>
            </div>

            <div class="col-auto d-none d-sm-block">
                <a href="?page=home" class="btn  btn-link text-dark"><i class="material-icons">home</i></a>
            </div>
            <div class="col-auto d-none d-sm-block">
                <p data-toggle="modal" data-target="#modalMoreCategory" class="btn btn-link text-dark"><i class="material-icons">view_module</i></p>
            </div>
            <div class="col-auto d-none d-sm-block">
                <a href="?page=produk" class="btn btn-link text-dark"><i class="material-icons">local_mall</i></a>
            </div>
            <div class="col-auto d-none d-sm-block">

                <?php
                if (isset($_SESSION['nama'])) { ?>
                    <a href="?page=keranjang" class="btn  btn-link text-dark">
                    <?php
                } else {
                    echo '<a href="?page=keranjang" class="btn  btn-link text-dark">';
                }
                    ?>
                    <i class="material-icons">shopping_cart</i>
                    <p class="cart_counter_top"><?php if (isset($_SESSION['cart'])) {
                                                    echo count($_SESSION['cart']);
                                                } else {
                                                    echo 0;
                                                } ?></p>
                    </a>
            </div>
            <div class="col-auto d-none d-sm-block">
                <?php if (isset($_SESSION['nama'])) { ?>
                    <a href="logout.php" class="btn  btn-link text-dark"><i class="material-icons">login</i></a>

                <?php } else { ?>
                    <a href="?page=login" class="btn  btn-link text-dark"><i class="material-icons">login</i></a>
                <?php } ?>
            </div>
        </div>
    </div>