<div class="container mt-5">
    <div class="full swiper-container swiper-banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <a href="#">
                    <div class="swiper-zoom-container"><img src="assets/images/promo1.png" alt="promo"></div>
                </a>
            </div>
            <div class="swiper-slide">
                <a href="#">
                    <div class="swiper-zoom-container"><img src="assets/images/promo2.jpeg" alt="promo"></div>
                </a>
            </div>

            <div class="swiper-slide">
                <a href="#">
                    <div class="swiper-zoom-container"><img src="assets/images/promo3.jpeg" alt="promo"></div>
                </a>
            </div>

        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="d-none d-sm-block swiper-button-next"></div>
        <div class="d-none d-sm-block swiper-button-prev"></div>
    </div>
</div>

<div class="container">
    <h6 class="subtitle">Merk</h6>
    <div class="row">
        <!-- Swiper -->
        <div class="swiper-container small-slide">
            <div class="swiper-wrapper">
                <?php
                $qeury = $koneksi->prepare("SELECT * FROM merk");
                $qeury->execute();
                foreach ($qeury as $data) {
                ?>
                    <div class="swiper-slide">
                        <div class="card shadow-sm border-0">
                            <div class="card-body">
                                <div class="row no-gutters h-100">
                                    <a href="?page=kategori&slug=<?= $data['slug'] ?>"><img src="admin/<?= $data['img'] ?>" alt="<?= $data['merk'] ?>" class="small-slide-right"></a>
                                    <div class="col-8">
                                        <button class="btn btn-sm btn-link p-0"><i class="material-icons md-18">favorite_outline</i></button>
                                        <a href="?page=kategori&slug=<?= $data['slug'] ?>" class="text-dark mb-1 mt-2 h6 d-block"><?= $data['merk'] ?> </a>
                                        <p class="text-secondary small">Merk Kendaraan</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<div class="container bg-primary text-white my-3">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mt-5">
                <h1 class="text-uppercase mb-3">Belanja makin mudah..</h1>
                <p class="mb-3">Download aplikasinya sekarang klik disamping ini..</p><br>
            </div>
            <div class="col-md-5">
                <a href="Adila-ID.apk" target="_blank"><img src="assets/images/playstore.png" alt="googleplay download" class="mw-100"></a>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h6 class="subtitle">Terbaru <a href="?page=produk" class="float-right small">Lihat Semua</a></h6>
    <div class="row">
        <?php
        $qeury = $koneksi->prepare("SELECT motor.*, merk.merk FROM motor INNER JOIN merk ON merk.id = motor.merk_id ORDER BY id DESC LIMIT 12");
        $qeury->execute();
        foreach ($qeury as $data) {
            $id = $data['id'];
            $qeury2 = $koneksi->prepare("SELECT * FROM imgmotor WHERE motor_id = '$id' LIMIT 1");
            $qeury2->execute();
            $data2 = $qeury2->fetch();
        ?>
            <div class="col-6 col-md-4 col-lg-3 col-xl-2">
                <div class="card cardproduk shadow-sm border-0 mb-4">
                    <div class="produklist">
                        <span class="badge badge-warning pl-1 pr-1">5</span>
                        <i class="stars" data-rating="5" data-num-stars="5"></i>

                        <figure class="product-image"><a href="?page=produk&slug=<?= $data['slug'] ?>"><img src="admin/<?= $data2['img'] ?>" alt="<?= $data['merk'] ?> | <?= $data['nama_motor'] ?>" class=""></a></figure>
                        <a href="?page=produk&slug=<?= $data['slug'] ?>" class="text-dark mb-1 mt-2 h6 tulisan-card"><?= $data['merk'] ?> | <?= $data['nama_motor'] ?></a>
                        <h5 class="text-success font-weight-normal mb-0">
                            <div class="newPrice">
                                Rp. <?= number_format($data['harga']); ?></div>
                        </h5>
                        <p class="text-secondary small text-mute mb-0">Deskripsi : </p>
                        <small class="text-secondary small text-mute mb-0"><?= substr($data['deskripsi'], 0, 50) ?></small>

                    </div>
                </div>
            </div>
        <?php } ?>

    </div>
</div>