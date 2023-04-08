<div class="sidebar">
    <div class="text-center">
        <h5 class="mb-1 mt-5">Silahkan login</h5>
    </div>
    <br>
    <div class="row mx-0">
        <div class="col">
            <div class="card mb-3 border-0 shadow-sm bg-template-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <p class="text-secondary small mb-0">Saldo</p>
                            <h6 class="text-dark my-0">Rp 0,-</h6>
                        </div>
                        <div class="col-auto">
                            <a href="home/signin.html"><button class="btn btn-default button-rounded-36 shadow"><i class="material-icons">add</i></button></a>
                        </div>
                    </div>
                </div>
            </div>
            <h5 class="subtitle text-uppercase"><span>Menu</span></h5>
            <div class="list-group main-menu">
                <a href="home/signin.html" class="list-group-item list-group-item-action active">Dashboard<i class="material-icons float-right">chevron_right</i></a>
                <a href="home/signin.html" class="list-group-item list-group-item-action active">Pesanan<i class="material-icons float-right">chevron_right</i></a>
                <a href="home/signin.html" class="list-group-item list-group-item-action active">Pesanan Digital<i class="material-icons float-right">chevron_right</i></a>
                <a href="home/signin.html" class="list-group-item list-group-item-action active">Pesanan Jasa<i class="material-icons float-right">chevron_right</i></a>
                <p data-toggle="modal" data-target="#colorscheme" class="list-group-item list-group-item-action active">Setting Warna<i class="material-icons float-right">chevron_right</i></p>
                <a href="home/signin.html" class="list-group-item list-group-item-action mt-4 active">Login<i class="material-icons float-right">chevron_right</i></a>
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
                <a href="?page=keranjang" class="btn  btn-link text-dark"><i class="material-icons">shopping_cart</i>
                    <p class="cart_counter_top"><?php if(isset($_SESSION['cart'])){echo count($_SESSION['cart']);}else{echo 0;} ?></p>
                </a>
            </div>
            <div class="col-auto d-none d-sm-block">
                <?php if (isset($_SESSION['nama'])) { ?>
                    <a href="logout.php" class="btn  btn-link text-dark"><i class="material-icons">login</i></a>

                <?php } else { ?>
                    <a href="login.php" class="btn  btn-link text-dark"><i class="material-icons">login</i></a>
                <?php } ?>
            </div>
        </div>
    </div>