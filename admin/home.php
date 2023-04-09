<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <?php
                        $sql = $koneksi->prepare("SELECT COUNT(*) AS total FROM motor");
                        $sql->execute();
                        $data = $sql->fetch();
                        ?>
                        <div class="card-body">Total Kendaraan <br>(<?= $data['total'] ?>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?page=kendaraan">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-warning text-white mb-4">
                        <?php
                        $sql = $koneksi->prepare("SELECT COUNT(*) AS total FROM merk");
                        $sql->execute();
                        $data = $sql->fetch();
                        ?>
                        <div class="card-body">Total Merk <br>(<?= $data['total'] ?>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?page=merk">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <?php
                        $sql = $koneksi->prepare("SELECT SUM(quantity) AS total FROM pesanan");
                        $sql->execute();
                        $data = $sql->fetch();
                        ?>
                        <div class="card-body">Total Kendaraan Terjual <br>(<?= $data['total'] ?>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="?page=pesnan">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-danger text-white mb-4">
                        <?php
                        $sql = $koneksi->prepare("SELECT SUM(harga * quantity) AS total FROM pesanan INNER JOIN motor ON motor.id = pesanan.motor_id");
                        $sql->execute();
                        $data = $sql->fetch();
                        ?>
                        <div class="card-body">Total Pendapatan <br>(Rp. <?= number_format($data['total'], 0, ',', '.'); ?>)</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">View Details</a>
                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    10 Pesanan Terbaru
                </div>
                <div class="card-body">
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
                            $sql = "SELECT * FROM pesanan INNER JOIN motor ON pesanan.motor_id = motor.id ORDER BY tanggal DESC LIMIT 10";
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
                </div>
            </div>
        </div>
    </main>