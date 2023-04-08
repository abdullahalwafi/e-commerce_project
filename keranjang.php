 <div class="container">
     <!-- Shoping Cart -->
     <form class="bg0 p-t-75 p-b-85" id="cekout">
         <div class="row">

             <div class="col-md-12 m-r-auto m-l-auto">
                 <h4>Detail Pengiriman</h4>
                 <div class="row">
                     <div class="col-12 px-0">
                         <ul class="list-group list-group-flush mb-1">
                             <li class="list-group-item">
                                 <div class="col">
                                     <div class="row">
                                         <div class="col-12 col-md-6">
                                             <div class="form-group float-label">
                                                 <input class="form-control" type="text" name="alamat_pelanggan">
                                                 <label class="form-control-label" for="alamat_pelanggan">Alamat Lengkap</label>
                                             </div>
                                         </div>
                                         <div class="col-12 col-md-6">
                                             <div class="form-group float-label">
                                                 <input class="form-control" type="text" name="nama">
                                                 <label for="nama" class="form-control-label">Nama Penerima</label>
                                                 <small class="form-text text-danger pl-1"></small>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-md-12 m-r-auto m-l-auto">
                 <h4>Detail Pesanan</h4>
                 <div class="row">
                     <div class="col-12 px-0">
                         <ul class="list-group list-group-flush mb-1">
                             <?php
                                // echo "<pre>";
                                // print_r($_SESSION['cart']);
                                // echo "</pre>";
                                // echo count($_SESSION['cart']);
                                // unset($_SESSION['cart']);
                                ?>
                             <?php
                                if (isset($_SESSION['cart'])) {
                                    $total = 0;
                                    foreach ($_SESSION['cart'] as $key => $value) {
                                        $sql = $koneksi->prepare("SELECT motor.*, merk.merk, merk.slug AS slugs FROM motor INNER JOIN merk ON merk.id = motor.merk_id WHERE motor.id = :id");
                                        $sql->bindParam(":id", $value['id']);
                                        $sql->execute();
                                        $data = $sql->fetch();
                                        $total += $data['harga'] * $value['qty'];

                                        $sql2 = $koneksi->prepare("SELECT * FROM imgmotor WHERE motor_id = :id LIMIT 1");
                                        $sql2->bindParam(":id", $value['id']);
                                        $sql2->execute();
                                        $data2 = $sql2->fetch();
                                ?>
                                     <li class="list-group-item">
                                         <div class="row">
                                             <div class="col-2 align-self-center">
                                                 <figure class="product-image h-auto"><img src="admin/<?= $data2['img'] ?>" alt="<?= $data['nama_motor'] ?>" class=" vm"></figure>
                                             </div>
                                             <div class="col px-0">
                                                 <p class="text-dark mb-1 h6 d-block"><?= $data['merk'] ?> | <?= $data['nama_motor'] ?></p>
                                                 <p class="text-secondary small text-mute mb-0">Harga: Rp <?= number_format($data['harga'], 0, ',', '.'); ?></p>
                                                 <p class="text-secondary small text-mute mb-0">Jumlah: <?= $value['qty'] ?></p>
                                                 <p class="text-secondary small text-mute mb-0">Stok: <?= $data['stok'] ?></p>
                                                 <h5 class="text-success font-weight-normal mb-0">Rp <?= number_format($data['harga'] * $value['qty'], 0, ',', '.'); ?></h5>
                                             </div>
                                             <div class="col align-self-center" style="text-align: right;">
                                                 <form method="POST">
                                                     <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                     <button type="submit" name="hapuscart" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                                 </form>
                                                 <?php
                                                    if (isset($_POST['hapuscart'])) {
                                                        unset($_SESSION['cart'][$_POST['id']]);
                                                        echo '<meta http-equiv="refresh" content="0; url=?page=keranjang" />';
                                                    }
                                                    ?>
                                             </div>
                                         </div>
                                     </li>
                                 <?php } ?>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
         <div class="full card mb-4 border-0 shadow-sm border-top-dashed">
             <div class="voucher text-center">
                 <p class="text-secondary my-1">Total Bayar</p>
                 <h3 class="mb-0">
                     <p>Rp <span id="totalbayar"><?= number_format($total, 0, ',', '.'); ?></p>
                 </h3>
             </div>

             <div class="text-center mb-3">
                 <a href="https://adila.id/shop" class="btn btn-lg btn-default shadow btn-rounded"><i class="material-icons">arrow_back</i><span>belanja</span></a>
                 <a href="https://adila.id/home/pembayaran" class="btn btn-lg btn-default shadow btn-rounded"><span>bayar</span><i class="material-icons">arrow_forward</i></a>
             </div>
         </div>
     </form>
 </div>
 <?php } ?>