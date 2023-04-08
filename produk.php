<?php
if (isset($_GET['slug'])) {
    $qeury = $koneksi->prepare("SELECT motor.*, merk.merk, merk.slug AS slugs FROM motor INNER JOIN merk ON merk.id = motor.merk_id WHERE motor.slug = :slug");
    $qeury->bindParam(":slug", $_GET['slug']);
    $qeury->execute();
    $data = $qeury->fetch();
?>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mr-4">
                <!-- Swiper -->
                <div data-pagination='{"el": ".swiper-pagination"}' data-zoom='{"enabled": true}' data-navigation='{"nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev"}' class="swiper-container product-details full bg-white mb-2">
                    <div class="swiper-wrapper">
                        <?php
                        $qeury2 = $koneksi->prepare("SELECT * FROM imgmotor WHERE motor_id = :motor_id");
                        $qeury2->bindParam(":motor_id", $data['id']);
                        $qeury2->execute();
                        foreach ($qeury2 as $data2) {
                        ?>
                            <div class="swiper-slide">
                                <div class="swiper-zoom-container"><img src="admin/<?= $data2['img'] ?>" alt="<?= $data['merk'] ?> | <?= $data['nama_motor'] ?> "></div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-pagination"></div>
                </div>

                <div class="bg-white full py-3 pl-3 pr-3 mb-2">

                    <a href="javascript:void(0)" class=" float-right btn btn-sm btn-default btn-rounded ml-2" data-toggle="modal" data-target="#share"><i class="material-icons mb-18 mr-2">share</i>Bagikan</a>

                    <h3 class="text-success font-weight-normal mt-2">
                        Rp <?= number_format($data['harga'], 0, ',', '.'); ?></h3>

                    <p class="text-secondary my-3 small">
                        <i class="stars" data-rating="5" data-num-stars="5"></i>
                    </p>

                    <a href="" title="<?= $data['merk'] ?> | <?= $data['nama_motor'] ?> " id="js-name-detail" class="text-dark mb-1 mt-2 h6 d-block"><?= $data['merk'] ?> | <?= $data['nama_motor'] ?> </a>
                    <p class="text-secondary small mb-2">
                        <?= $data['merk'] ?> | stok: <?= $data['stok'] ?> | Terjual: 250
                    </p>
                </div>
                <div class="bg-white full py-3 pl-3 pr-3 mb-2">
                    <h5>Info Produk</h5>
                    <div class="text-secondary small mb-2">
                        <table>
                            <tr>
                                <td class="tabel-info-produk">Produk</td>
                                <td> Tersedia
                                </td>
                            </tr>
                            <tr>
                                <td>Merk</td>
                                <td><a href="?page=merk&slug=<?= $data['slugs'] ?>"> <?= $data['merk'] ?> </a></td>
                            </tr>

                            <tr>
                                <td>CC</td>
                                <td><?= $data['cc'] ?></td>
                            </tr>
                            <tr>
                                <td>Stok</td>
                                <td><?= $data['stok'] ?> produk</td>
                            </tr>

                            <tr>
                                <td></td>

                                <td></td>
                            </tr>

                        </table>
                    </div>
                    <div class="row">
                        <div class="mr-3">
                            <button data-toggle="modal" data-target="#cart" type="button" class="btn btn-lg btn-default shadow btn-rounded flash"><i class="material-icons">shopping_cart</i> + keranjang </button>
                        </div>
                        <div class="mr-3">
                            <a href="https://wa.me/+6285162615128/?text=Halo,%20saya%20ingin%20membeli%20produk%20*<?= $data['merk'] ?> | <?= $data['nama_motor'] ?> *%20apakah%20masih%20tersedia?" target="_blank"> <button class="btn btn-lg btn-success shadow btn-rounded"><i class="fa fa-whatsapp"></i> chat WA</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">

                <div class="bg-white full py-3 pl-3 pr-3 mb-2">
                    <h5>Diskripsi</h5>
                    <div>
                        <?= $data['deskripsi'] ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="tab-content" id="nav-tabContent">
            <div class="text-center">
                <button class="btn btn-sm btn-default btn-rounded mt-3">produk terkait</button>
            </div>
            <div class="row mt-3">
                <!-- Swiper -->
                <?php
                $qeury3 = $koneksi->prepare("SELECT motor.*, merk.merk FROM motor INNER JOIN merk ON merk.id = motor.merk_id  WHERE merk_id = :merk_id LIMIT 6");
                $qeury3->bindParam(":merk_id", $data['merk_id']);
                $qeury3->execute();
                foreach ($qeury3 as $data3) {
                    $qeury4 = $koneksi->prepare("SELECT * FROM imgmotor WHERE motor_id = :motor_id");
                    $qeury4->bindParam(":motor_id", $data3['id']);
                    $qeury4->execute();
                    $data4 = $qeury4->fetch();

                ?>
                    <div class="swiper-slide col-6 col-md-4 col-lg-3 col-xl-2">
                        <div class="card cardproduk shadow-sm border-0 mb-4">
                            <div class="produklist">
                                <span class="badge badge-warning bdg-1">0</span>
                                <i class="stars" data-rating="0" data-num-stars="5"></i>
                                <figure class="product-image"><a href="?page=produk&slug=<?= $data3['slug'] ?>"><img src="admin/<?= $data4['img'] ?>" alt="<?= $data3['merk'] ?> | <?= $data3['nama_motor'] ?>"></a></figure>
                                <div class="badge badge-danger float-right mt-1"></div>
                                <a href="?page=produk&slug=<?= $data3['slug'] ?>" class="text-dark mb-1 mt-2 h6 tulisan-card"><?= $data3['merk'] ?> | <?= $data3['nama_motor'] ?></a>
                                <h5 class="text-success font-weight-normal mb-0">
                                    <div class="newPrice">
                                        Rp. <?= number_format($data3['harga'], 0, ',', '.'); ?>
                                    </div>
                                </h5>
                                <p class="text-secondary small text-mute mb-0">Deskripsi : </p>
                                <small class="text-secondary small text-mute mb-0"><?= substr($data['deskripsi'], 0, 50) ?></small>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php
} else { ?>
    <div class="container">
        <h6 class="subtitle">Semua Produk</h6>
        <div class="row">
            <?php
            $qeury = $koneksi->prepare("SELECT motor.*, merk.merk FROM motor INNER JOIN merk ON merk.id = motor.merk_id");
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
                                    Rp. <?= number_format($data['harga'], 0, ',', '.');?></div>
                            </h5>
                            <p class="text-secondary small text-mute mb-0">Deskripsi : </p>
                            <small class="text-secondary small text-mute mb-0"><?= substr($data['deskripsi'], 0, 50) ?></small>

                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
<?php } ?>