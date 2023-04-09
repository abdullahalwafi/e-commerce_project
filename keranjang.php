 <div class="container">
     <!-- Shoping Cart -->
     <div class="row">

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
                                         <div class="col-auto align-self-center">
                                             <form method="POST">
                                                 <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                                 <button type="submit" name="hapuscart" class="btn btn-sm btn-link p-0 float-right"><i class="material-icons">remove_circle</i></button>
                                             </form>
                                             <?php
                                                if (isset($_POST['hapuscart'])) {
                                                    unset($_SESSION['cart'][$_POST['id']]);
                                                    echo '<meta http-equiv="refresh" content="0; url=?page=keranjang" />';
                                                }
                                                ?>
                                         </div>
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
                                     </div>
                                 </li>
                             <?php } ?>
                     </ul>
                 </div>
             </div>
         </div>
         <div class="col-md-12 m-r-auto m-l-auto">
             <form method="POST">
                 <h4>Detail Pengiriman</h4>
                 <div class="row">
                     <div class="col-12 px-0">
                         <ul class="list-group list-group-flush mb-1">
                             <li class="list-group-item">
                                 <div class="col">
                                     <div class="row">
                                         <div class="col-12 col-md-6">
                                             <div class="form-group float-label">
                                                 <input class="form-control" type="text" name="alamat_pelanggan" required>
                                                 <label class="form-control-label" for="alamat_pelanggan">Alamat Lengkap</label>
                                             </div>
                                         </div>
                                         <div class="col-12 col-md-6">
                                             <div class="form-group float-label">
                                                 <input class="form-control" type="text" name="nama" required>
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
     </div>
     <div class="full card mb-4 border-0 shadow-sm border-top-dashed">
         <div class="voucher text-center">
             <p class="text-secondary my-1">Total Bayar</p>
             <h3 class="mb-0">
                 <p>Rp <span id="totalbayar"><?= number_format($total, 0, ',', '.'); ?></p>
             </h3>
         </div>

         <div class="text-center mb-3">
             <?php if (isset($_SESSION['cart'])) { ?>
                 <input type="submit" name="submit" class="btn btn-lg btn-default shadow btn-rounded" value="Pesan Sekarang">
             <?php } ?>
             <a href="?page=produk" class="btn btn-lg btn-default shadow btn-rounded"><span>belanja</span></a>
         </div>

     </div>
     </form>
 </div>
 <?php } ?>

 <?php
    if (isset($_POST['submit'])) {
        // save database
        try {
            $nama_pelanggan = $_POST['nama'];
            $alamat_pelanggan = $_POST['alamat_pelanggan'];
            $user_id = $_SESSION['iduser'];
            $invoice = generateNumber(10);
            $tanggal = date('Y-m-d');
            foreach ($_SESSION['cart'] as $key => $value) {
                $motor_id = $value['id'];
                $quantity = $value['qty'];
                $query = $koneksi->prepare("INSERT INTO pesanan (user_id, invoice, nama_pelanggan, alamat_pelanggan, motor_id, quantity, tanggal) VALUES (:user_id, :invoice, :nama_pelanggan, :alamat_pelanggan, :motor_id, :quantity, :tanggal)");
                $query->bindParam(":user_id", $user_id);
                $query->bindParam(":invoice", $invoice);
                $query->bindParam(":nama_pelanggan", $nama_pelanggan);
                $query->bindParam(":alamat_pelanggan", $alamat_pelanggan);
                $query->bindParam(":motor_id", $motor_id);
                $query->bindParam(":quantity", $quantity);
                $query->bindParam(":tanggal", $tanggal);
                $query->execute();
                $query2 = $koneksi->prepare("UPDATE motor SET stok = stok - :quantity WHERE id = :id");
                $query2->bindParam(":id", $motor_id);
                $query2->bindParam(":quantity", $quantity);
                $query2->execute();
            }
            unset($_SESSION['cart']);
            echo "<script>
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Pesanan berhasil di proses',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '?page=pesanan'; 
                });</script>";
        } catch (PDOException $e) {
            // Tampilkan pesan error dalam popup jika terjadi kesalahan
            echo "<script>
                Swal.fire({
                    title: 'error!',
                    text: '" . $e->getMessage() . "',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });</script>";
        }
    }
    ?>