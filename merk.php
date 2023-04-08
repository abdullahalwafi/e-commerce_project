<?php
if (isset($_GET['slug'])) {
    $qeury = $koneksi->prepare("SELECT * FROM merk WHERE slug = :slug");
    $qeury->bindParam(":slug", $_GET['slug']);
    $qeury->execute();
    $data = $qeury->fetch();
    $id = $data['id'];
?>
    <div class="container">
        <h6 class="subtitle">Semua Produk <?= $_GET['slug'] ?></h6>
        <div class="row">
            <?php
            $qeury = $koneksi->prepare("SELECT motor.*, merk.merk FROM motor INNER JOIN merk ON merk.id = motor.merk_id WHERE merk_id = '$id' ORDER BY motor.id DESC");
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
                                    Rp. <?= number_format($data['harga'], 0, ',', '.'); ?></div>
                            </h5>
                            <p class="text-secondary small text-mute mb-0">Deskripsi : </p>
                            <small class="text-secondary small text-mute mb-0"><?= substr($data['deskripsi'], 0, 50) ?></small>

                        </div>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
<?php
} ?>