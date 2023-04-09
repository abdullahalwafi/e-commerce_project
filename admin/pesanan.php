<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h2 class="mt-4"><?= strtoupper($page) ?></h2>
            <div class="card mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <i class="fas fa-table me-1"></i>
                            Data <?= $page ?>
                        </div>
                        <?php if (isset($_GET['invoice'])) { ?>
                            <div class="col-md-6 text-end">
                                <a href="?page=pesanan" class="btn btn-primary btn-sm btn-rounded">Back</a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-body">
                    <?php if (!isset($_GET['invoice'])) { ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Motor</th>
                                    <th>Harga</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Alamat</th>
                                    <th>Motor</th>
                                    <th>Harga</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = "SELECT * FROM pesanan INNER JOIN motor ON pesanan.motor_id = motor.id";
                                $data = $koneksi->prepare($sql);
                                $data->execute();
                                foreach ($data as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= date('d F Y', strtotime($data['tanggal'])); ?></td>
                                        <td><?= $data['nama_pelanggan'] ?></td>
                                        <td><?= $data['alamat_pelanggan'] ?></td>
                                        <td><?= $data['nama_motor'] ?></td>
                                        <td><?= number_format($data['harga'], 0, ',', '.'); ?></td>
                                        <td><?= $data['quantity'] ?></td>
                                        <td><?= number_format($data['harga'] * $data['quantity'], 0, ',', '.'); ?></td>
                                        <td><a href="?page=pesanan&invoice=<?= $data['invoice'] ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } else {
                        $query = $koneksi->prepare("SELECT * FROM pesanan WHERE invoice = :invoice");
                        $query->bindParam(":invoice", $_GET['invoice']);
                        $query->execute();
                        $data = $query->fetch(); ?>
                        <div class="row">
                            <div class="col-12">
                                <h4 class="mt-3 text-center">
                                    Order ID <span class="cl2"><?= $_GET['invoice'] ?></span>
                                </h4>
                            </div>
                        </div>
                        <div class="row">
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

                        <div class="row">
                            <div class="col-12 px-0">
                                <hr>
                                <h4 class="text-center mt-2">
                                    Produk Pesanan
                                </h4>
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Quantity</th>
                                            <th>Total</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $query = $koneksi->prepare("SELECT *, motor.id AS ids FROM pesanan INNER JOIN motor ON motor.id = pesanan.motor_id INNER JOIN merk ON merk.id = motor.merk_id WHERE invoice = :invoice");
                                        $query->bindParam(":invoice", $_GET['invoice']);
                                        $query->execute();
                                        foreach ($query as $data) {
                                        ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data['nama_motor'] ?></td>
                                                <td><?= number_format($data['harga'], 0, ',', '.'); ?></td>
                                                <td><?= $data['quantity'] ?></td>
                                                <td><?= number_format($data['harga'] * $data['quantity'], 0, ',', '.'); ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </main>