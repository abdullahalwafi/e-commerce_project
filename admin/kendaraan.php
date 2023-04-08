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
                        <?php if (!isset($_GET['id'])) { ?>
                            <div class="col-md-6 text-end">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahData">
                                    Tambah Data
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="tambahDataLabel">Tambah Data</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-left">
                                                <form method="POST" enctype="multipart/form-data">
                                                    <div class="form-group row">
                                                        <label for="nama_motor" class="col-4 col-form-label">Nama motor</label>
                                                        <div class="col-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-address-card"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="nama_motor" name="nama_motor" type="text" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="merk_id" class="col-4 col-form-label">Merk Motor</label>
                                                        <div class="col-8">
                                                            <select id="merk_id" name="merk_id" class="custom-select" required>
                                                                <?php
                                                                $sql = "SELECT * FROM merk";
                                                                $data = $koneksi->prepare($sql);
                                                                $data->execute();
                                                                foreach ($data as $data) {
                                                                ?>
                                                                    <option value="<?= $data['id'] ?>"><?= $data['merk'] ?></option>
                                                                <?php }
                                                                ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="cc" class="col-4 col-form-label">CC motor</label>
                                                        <div class="col-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-address-card"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="cc" name="cc" type="number" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="harga" class="col-4 col-form-label">HARGA motor</label>
                                                        <div class="col-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-address-card"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="harga" name="harga" type="number" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="stok" class="col-4 col-form-label">STOK motor</label>
                                                        <div class="col-8">
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text">
                                                                        <i class="fa fa-address-card"></i>
                                                                    </div>
                                                                </div>
                                                                <input id="stok" name="stok" type="number" class="form-control" required="required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="img" class="col-4 col-form-label">Logo</label>
                                                        <div class="col-8">
                                                            <div class="input-group">
                                                                <input id="img" name="img[]" type="file" accept="image/*" required="required" class="form-control" multiple>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="deskripsi" class="col-12 col-form-label">Deskripsi</label>
                                                        <div class="col-12">
                                                            <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control"></textarea>
                                                        </div>
                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <input type="submit" class="btn btn-primary" name="simpan" value="Save changes">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $sql = "SELECT * FROM motor WHERE id = :id";
                        $data = $koneksi->prepare($sql);
                        $data->bindParam(':id', $_GET['id']);
                        $data->execute();
                        $data = $data->fetch(PDO::FETCH_ASSOC);
                    ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="nama_motor" class="col-4 col-form-label">Nama motor</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input id="nama_motor" name="nama_motor" type="text" class="form-control" required="required" value="<?= $data['nama_motor'] ?>">
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="merk_id" class="col-4 col-form-label">Merk Motor</label>
                                <div class="col-8">
                                    <select id="merk_id" name="merk_id" class="custom-select" required>
                                        <?php
                                        $merk_id = $data['merk_id'];
                                        $sql2 = "SELECT * FROM merk WHERE id = :id";
                                        $data2 = $koneksi->prepare($sql2);
                                        $data2->bindParam(':id', $merk_id);
                                        $data2->execute();
                                        $data2 = $data2->fetch(PDO::FETCH_ASSOC);
                                        echo "<option value='$data2[id]'>$data2[merk]</option>";
                                        $sql3 = "SELECT * FROM merk";
                                        $data3 = $koneksi->prepare($sql3);
                                        $data3->execute();
                                        foreach ($data3 as $data3) {
                                        ?>
                                            <option value="<?= $data3['id'] ?>"><?= $data3['merk'] ?></option>
                                        <?php }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="cc" class="col-4 col-form-label">CC motor</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input id="cc" name="cc" type="number" class="form-control" required="required" value="<?= $data['cc'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="harga" class="col-4 col-form-label">HARGA motor</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input id="harga" name="harga" type="number" class="form-control" required="required" value="<?= $data['harga'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="stok" class="col-4 col-form-label">STOK motor</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input id="stok" name="stok" type="number" class="form-control" required="required" value="<?= $data['stok'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="deskripsi" class="col-12 col-form-label">Deskripsi</label>
                                <div class="col-12">
                                    <textarea id="deskripsi" name="deskripsi" cols="40" rows="5" class="form-control" value="<?= $data['deskripsi'] ?>"><?= $data['deskripsi'] ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Gambar</label>
                                <small><i>(gambar tidak bisa di ganti/hapus)</i></small>
                                <div class="d-flex">
                                    <?php
                                    $query2 = "SELECT * FROM imgmotor WHERE motor_id = :motor_id";
                                    $data2 = $koneksi->prepare($query2);
                                    $data2->bindParam(':motor_id', $_GET['id']);
                                    $data2->execute();
                                    foreach ($data2 as $data2) {
                                    ?>
                                        <img src="<?= $data2['img'] ?>" style="width: 100px;">
                                    <?php } ?>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" name="update" value="Save changes">
                        </form>
                    <?php
                    } else {
                    ?>
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>CC</th>
                                    <th>harga</th>
                                    <th>Merk</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>CC</th>
                                    <th>harga</th>
                                    <th>Merk</th>
                                    <th>Stok</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = "SELECT motor.*, merk.merk FROM motor INNER JOIN merk ON motor.merk_id = merk.id";
                                $data = $koneksi->prepare($sql);
                                $data->execute();
                                foreach ($data as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['nama_motor'] ?></td>
                                        <td><?= $data['cc'] ?></td>
                                        <td><?= number_format($data['harga']) ?></td>
                                        <td><?= $data['merk'] ?></td>
                                        <td><?= $data['stok'] ?></td>
                                        <td>
                                            <div class="d-flex">
                                                <!-- Button trigger modal -->
                                                <a href="?page=<?= $page ?>&id=<?= $data['id'] ?>" class="btn btn-success btn-sm">
                                                    <i class="fas fa-pen"></i>
                                                </a>
                                                <form method="post">
                                                    <input type="hidden" name="iddel" value="<?= $data['id']; ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" onClick="return konfirmasiHapus('<?= $data['merk']; ?>')"><i class="fas fa-trash"></i></button>
                                                </form>
                                                <a href="../?page=produk&slug=<?= $data['slug'] ?>" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    </main>
    <?php
    if (isset($_POST['iddel'])) {
        $iddel = $_POST['iddel'];
        //  hapus imgmotor
        $query = "SELECT img FROM imgmotor WHERE motor_id = $iddel";
        $data = $koneksi->query($query);
        $data = $data->fetchAll(PDO::FETCH_COLUMN);
        foreach ($data as $img) {
            unlink($img);
        }
        hapusData($iddel, 'imgmotor', $koneksi);
        if (hapusData($iddel, 'motor', $koneksi)) {
            echo "<script>
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Data berhasil dihapus',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '?page=$page'; 
                });
            </script>";
        } else {
            echo "<script>
                Swal.fire({
                    title: 'Error!',
                    text: 'Data gagal dihapus',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            </script>";
        }
    }
    if (isset($_POST['simpan'])) {
        //tentukan id sebelumnya
        $sql = "SELECT id FROM motor ORDER BY id DESC LIMIT 1";
        $data = $koneksi->prepare($sql);
        $data->execute();
        $id = $data->fetch(PDO::FETCH_ASSOC);
        if ($id == null) {
            $id = 1;
        } else {
            $id = $id['id'] + 1;
        }
        $nama_motor = $_POST['nama_motor'];
        $merk_id = $_POST['merk_id'];
        $cc = $_POST['cc'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $file = $_FILES['img'];
        $deskripsi = $_POST['deskripsi'];


        // Membuat query INSERT
        $query = "INSERT INTO motor (id, nama_motor,slug, merk_id, cc, harga, stok, deskripsi)
              VALUES (:id, :nama_motor,LOWER(REPLACE(nama_motor, ' ', '-')), :merk_id, :cc, :harga, :stok, :deskripsi)";

        // Menyiapkan statement
        $stmt = $koneksi->prepare($query);

        // Binding parameter
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama_motor', $nama_motor);
        $stmt->bindParam(':merk_id', $merk_id);
        $stmt->bindParam(':cc', $cc);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->execute();
        $img = uploadImageMulti($file);
        $file = $_FILES['img'];

        $query = "INSERT INTO imgmotor (img, motor_id) VALUES (:img, :motor_id)";
        $stmt = $koneksi->prepare($query);
        foreach ($img as $key => $value) {
            $stmt->bindParam(':img', $value);
            $stmt->bindParam(':motor_id', $id);
            $stmt->execute();
        }
        echo "<script>
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Data berhasil ditambah',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '?page=$page'; 
                });
            </script>";
    }
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $nama_motor = $_POST['nama_motor'];
        $merk_id = $_POST['merk_id'];
        $cc = $_POST['cc'];
        $harga = $_POST['harga'];
        $stok = $_POST['stok'];
        $file = $_FILES['img'];
        $deskripsi = $_POST['deskripsi'];

        // Membuat query INSERT
        $query = "UPDATE motor SET nama_motor= :nama_motor, slug = LOWER(REPLACE(nama_motor, ' ', '-')), merk_id= :merk_id, cc= :cc, harga= :harga, stok= :stok, deskripsi= :deskripsi WHERE id= :id";
        $stmt = $koneksi->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':nama_motor', $nama_motor);
        $stmt->bindParam(':merk_id', $merk_id);
        $stmt->bindParam(':cc', $cc);
        $stmt->bindParam(':harga', $harga);
        $stmt->bindParam(':stok', $stok);
        $stmt->bindParam(':deskripsi', $deskripsi);
        $stmt->execute();

        echo "<script>
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Data berhasil diedit',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '?page=$page'; 
                });
            </script>";
    }
    ?>
    <script src="https://cdn.ckeditor.com/4.21.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('deskripsi');
    </script>