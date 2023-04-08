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

                        <div class="col-md-6 text-end">
                            <?php if (!isset($_GET['id'])) { ?>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahData">
                                    Tambah Data
                                </button>
                            <?php } ?>
                            <!-- Modal -->
                            <div class="modal fade" id="tambahData" tabindex="-1" role="dialog" aria-labelledby="tambahDataLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="tambahDataLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-left">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="form-group row">
                                                    <label for="merk" class="col-4 col-form-label">Merk</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-address-card"></i>
                                                                </div>
                                                            </div>
                                                            <input id="merk" name="merk" type="text" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="img" class="col-4 col-form-label">Logo</label>
                                                    <div class="col-8">
                                                        <div class="input-group">
                                                            <input id="img" name="img" type="file" accept="image/*" required class="form-control">
                                                        </div>
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
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $sql = "select * from merk where id = :id";
                        $data = $koneksi->prepare($sql);
                        $data->bindParam(':id', $_GET['id']);
                        $data->execute();
                        $data = $data->fetch(PDO::FETCH_ASSOC);
                    ?>
                        <form method="POST" enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="merk" class="col-4 col-form-label">Merk</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="fa fa-address-card"></i>
                                            </div>
                                        </div>
                                        <input id="merk" name="merk" type="text" value="<?= $data['merk'] ?>" class="form-control" required>
                                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="img" class="col-4 col-form-label">Logo</label>
                                <div class="col-8">
                                    <div class="input-group">
                                        <input id="img" name="img" type="file" accept="image/*" class="form-control">
                                    </div>
                                </div><br>
                                <img src="<?= $data['img'] ?>" alt="" style="width: 100px;">
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
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                $no = 1;
                                $sql = "SELECT * FROM merk";
                                $data = $koneksi->prepare($sql);
                                $data->execute();
                                foreach ($data as $data) {
                                ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['merk'] ?></td>
                                        <td>
                                            <img src="<?= $data['img'] ?>" width="50px" alt="">
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="?page=<?= $page ?>&id=<?= $data['id'] ?>" class="btn btn-success btn-sm"><i class="fas fa-pen"></i></a>
                                                <form method="post">
                                                    <input type="hidden" name="iddel" value="<?= $data['id']; ?>">
                                                    <input type="hidden" name="img" value="<?= $data['img'] ?>">
                                                    <button type="submit" class="btn btn-danger btn-sm" onClick="return konfirmasiHapus('<?= $data['merk']; ?>')"><i class="fas fa-trash"></i></button>
                                                </form>
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
        if (hapusData($iddel, 'merk', $koneksi)) {
            unlink($_POST['img']);
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
        $merk = $_POST['merk'];
        $file = $_FILES['img'];

        $img = uploadImage($file);

        $query = "INSERT INTO merk (merk, img, slug) VALUES (:merk, :img,LOWER(REPLACE(merk, ' ', '-')))";
        $stmt = $koneksi->prepare($query);
        $stmt->bindParam(':merk', $merk);
        $stmt->bindParam(':img', $img);
        $stmt->execute();

        echo "<script>
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Data berhasil disimpan',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '?page=$page'; 
                });
            </script>";
    }

    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $merk = $_POST['merk'];
        $file = $_FILES['img'];
        if ($file['name'] == "") {
            $query = "UPDATE merk SET merk = :merk, slug = LOWER(REPLACE(merk, ' ', '-')) WHERE id = :id";
            $stmt = $koneksi->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':merk', $merk);
        } else {
            $data = $koneksi->prepare("SELECT * FROM merk WHERE id = :id");
            $data->bindParam(':id', $id);
            $data->execute();
            $data = $data->fetch();
            unlink($data['img']);
            $img = uploadImage($file);
            $query = "UPDATE merk SET merk = :merk, img = :img, slug = LOWER(REPLACE(merk, ' ', '-')) WHERE id = :id";
            $stmt = $koneksi->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':merk', $merk);
            $stmt->bindParam(':img', $img);
        }
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