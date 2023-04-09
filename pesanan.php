<div class="container">
    <?php
    if (isset($_GET['invoice'])) {

        $query = $koneksi->prepare("SELECT * FROM pesanan WHERE invoice = :invoice AND user_id = :user_id");
        $query->bindParam(":invoice", $_GET['invoice']);
        $query->bindParam(":user_id", $_SESSION['iduser']);
        $query->execute();
        $data = $query->fetch();
    ?>
        <div class="container">
            <div class="row card">
                <div class="col-12">
                    <h4 class="mt-3 text-center">
                        Order ID <span class="cl2"><?= $_GET['invoice'] ?></span>
                    </h4>
                </div>
            </div>
            <div class="row card">
                <div class="col-12">
                    <h4 class="text-center mt-2">
                        Informasi Pengiriman
                    </h4>
                    <hr>

                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <b>Waktu Pemesanan:</b><br />
                                <p class="badge badge-success"><?= date('d F Y', strtotime($data['tanggal'])); ?></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="text-black p-b-10">Nama Penerima</h5>
                                <p><?= $data['nama_pelanggan'] ?></p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="text-black p-b-10">Alamat Pengiriman</h5>
                                <p><?= $data['alamat_pelanggan'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row card">
                <div class="col-12 px-0">
                    <h4 class="text-center mt-2">
                        Produk Pesanan
                    </h4>

                    <?php
                    $query = $koneksi->prepare("SELECT *, motor.id AS ids FROM pesanan INNER JOIN motor ON motor.id = pesanan.motor_id INNER JOIN merk ON merk.id = motor.merk_id WHERE user_id = :user_id AND invoice = :invoice");
                    $query->bindParam(":user_id", $_SESSION['iduser']);
                    $query->bindParam(":invoice", $_GET['invoice']);
                    $query->execute();
                    foreach ($query as $data) {
                        $query2 = $koneksi->prepare("SELECT * FROM imgmotor WHERE motor_id = :motor_id Limit 1");
                        $query2->bindParam(":motor_id", $data['motor_id']);
                        $query2->execute();
                        $data2 = $query2->fetch();
                    ?>
                        <div class="col-12 px-1">
                            <div class="show-product">
                                <ul class="list-items mb-1">
                                    <li>
                                        <div class="col-12">
                                            <div class="row">
                                                <div class="card shadow-sm border-0">
                                                    <div class="card-body">
                                                        <figure class="product-image"><img src="admin/<?= $data2['img'] ?>" alt="produk" class=""></figure>
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <p class="text-dark mb-1 h6 d-block"><?= $data['merk'] ?> | <?= $data['nama_motor'] ?></p>
                                                    </p>
                                                    <h5 class="text-success font-weight-normal mb-0">Rp <?= number_format($data['harga'], 0, ',', '.'); ?> <span style="font-size:11px">x<?= $data['quantity'] ?></span></h5>
                                                    <h5 class="text-secondary">Total: Rp <?= number_format($data['harga']*$data['quantity'], 0, ',', '.');?></h5>
                                                    <small class="text-secondary">Deskripsi Singkat: <br><?= substr($data['deskripsi'], 0, 150) ?>..</small>

                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    <?php } ?>
                    <a href="?page=pesanan" class="my-2 mx-4  btn btn-primary btn-rounded">Back</a>
                </div>
            </div>
        </div>
    <?php } else { ?>
        <div class="card mb-4 shadow-sm text-center">
            <h4 class="mt-2">Status Pesanan</h4>
        </div>
        <div class="tab tab-riwayat">
            <!-- Konten -->
            <div class="tab-content">
                <!-- SELESAI -->
                <div class="tab-pane fade in active show" role="tabpanel" id="selesai">

                    <div class="col-12 px-0">
                        <?php
                        $query = $koneksi->prepare("SELECT *, motor.id AS ids FROM pesanan INNER JOIN motor ON motor.id = pesanan.motor_id INNER JOIN merk ON merk.id = motor.merk_id WHERE user_id = :user_id");
                        $query->bindParam(":user_id", $_SESSION['iduser']);
                        $query->execute();
                        foreach ($query as $data) {
                            $query2 = $koneksi->prepare("SELECT * FROM imgmotor WHERE motor_id = :motor_id Limit 1");
                            $query2->bindParam(":motor_id", $data['motor_id']);
                            $query2->execute();
                            $data2 = $query2->fetch();
                        ?>
                            <div class="col-12">
                                <div class="m-l-25 m-r--38 m-lr-0-xl">
                                    <ul class="list-items mb-1">
                                        <li>
                                            <div class="col-12">
                                                <div class="row">
                                                    <div class="card shadow-sm border-0">
                                                        <div class="card-body">
                                                            <figure class="product-image"><img src="admin/<?= $data2['img'] ?>" alt="produk" class=""></figure>
                                                        </div>
                                                    </div>
                                                    <div class="col">
                                                        <p class="text-dark mb-1 h6 d-block"><?= $data['merk'] ?> | <?= $data['nama_motor'] ?></p>
                                                        <p class="text-secondary small mb-2"> Payment ID <?= $data['invoice'] ?> </p>
                                                        <h5 class="text-success font-weight-normal mb-0">Rp <?= number_format($data['harga'], 0, ',', '.'); ?> <span style="font-size:11px">x<?= $data['quantity'] ?></span></h5>
                                                        <a href="?page=pesanan&invoice=<?= $data['invoice'] ?>" class="badge badge-danger text-white">Lihat Rincian Pesanan</a>

                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="row">
                                        <div class="col-md-7">
                                            <b>Diterima pada</b><br>
                                            <i class="badge"><?= date('d F Y', strtotime($data['tanggal'])); ?></i>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="row">
                                                <div class="col-6 txt-right">
                                                    <h5 class="mtext-102 text-black">Total Order</h5>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="mtext-102 text-black text-right">Rp <?= number_format($data['harga'] * $data['quantity'], 0, ',', '.'); ?></h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
</div>