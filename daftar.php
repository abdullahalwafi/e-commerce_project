<div class="container">
    <div class="row no-gutters vh-100 proh bg-template">
        <div class="col align-self-center px-3 text-center" id="load">
            <h2 class="text-white "><span class="font-weight-light"><?php if (isset($_GET['verify'])) {
                                                                        echo "Verifikasi";
                                                                    } else { ?> Sign</span>Up <?php } ?></h2>
            <form method="post" class="form-signin shadow">
                <?php if (isset($_GET['verify'])) {
                    $id = $_GET['verify'];

                    // Buat query untuk mencari OTP dalam database
                    $query = $koneksi->prepare("SELECT * FROM otp WHERE id = :id");
                    $query->bindParam(":id", $id);
                    $query->execute();

                    // Ambil jumlah baris hasil query
                    $jumlahBaris = $query->rowCount();

                    if ($jumlahBaris > 0) {

                ?>
                        <div class=" form-group float-label">
                            <input class="form-control" type="number" id="otp" name="otp" required>
                            <label for="otp" class="form-control-label">OTP</label>
                            <input type="hidden" name="verify" value="<?= $_GET['verify'] ?>">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <button style="width: 100%;" id="submit" type="submit" class="btn btn-default shadow btn-rounded">
                                    Verify
                                </button>
                            </div>
                        </div>
                    <?php } else { ?>
                        <script>
                            Swal.fire({
                                title: 'errror!',
                                text: 'data tidak ditemukan',
                                icon: 'error',
                                confirmButtonText: 'OK'
                            }).then(() => {
                                window.location.href = '?page=login';
                            });
                        </script>
                    <?php } ?>
                <?php } else {  ?>
                    <div class=" form-group float-label">
                        <input class="form-control" type="text" id="nama" name="nama" required>
                        <label for="nama" class="form-control-label">Nama</label>
                    </div>
                    <div class="form-group float-label">
                        <input class="form-control" type="number" name="nohp" required>
                        <label for="nohp" class="form-control-label">No Whatsapp <small><i>(untuk verifikasi)</i></small></label>
                    </div>
                    <div class="form-group float-label">
                        <input class="form-control" type="email" id="email" name="email" required>
                        <label for="Email" class="form-control-label">Alamat Email</label>
                    </div>
                    <div class="form-group float-label">
                        <input class="form-control" type="password" name="password" required>
                        <label for="pass" class="form-control-label">password</label>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button style="width: 100%;" id="submit" type="submit" class="btn btn-default shadow btn-rounded">
                                DAFTAR
                            </button>
                            <p class="text-center m-t-15">Sudah punya akun? <a href="?page=login">Login</a></p>
                        </div>
                    </div>
                <?php } ?>
            </form>
        </div>
    </div>
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- cookie js -->
    <script src="assets/js/jquery.cookie.js"></script>

    <!-- swiper js -->
    <script src="assets/js/swiper.min.js"></script>

    <!-- template custom js -->
    <script src="https://kit.fontawesome.com/2baad1d54e.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <!-- chosen multiselect js -->
    <script src="assets/js/chosen.jquery.min.js"></script>
    <!-- page level script -->
    <script type="text/javascript" src="assets/vendor/select2/select2.min.js"></script>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['verify'])) {
            try {
                $query = $koneksi->prepare("SELECT * FROM otp WHERE otp = :otp and id = :id");
                $query->bindParam(":id", $_POST['verify']);
                $query->bindParam(":otp", $_POST['otp']);
                $query->execute();
                $data = $query->fetch();
                $query2 = $koneksi->prepare("UPDATE user SET status= 'aktif' WHERE id = :id");
                $query2->bindParam(":id", $data['user_id']);
                $query2->execute();
                $query3 = $koneksi->prepare("DELETE FROM otp WHERE otp = :otp and id = :id");
                $query3->bindParam(":id", $_POST['verify']);
                $query3->bindParam(":otp", $_POST['otp']);
                $query3->execute();
                echo "<script>
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Anda Berhasil verifikasi silahkan login',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '?page=login'; 
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
        } else {
            // cek id sebelumnya
            $query = $koneksi->prepare("SELECT * FROM user ORDER BY id DESC LIMIT 1");
            $query->execute();
            $data = $query->fetch();
            $id = $data['id'] + 1;
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $nama = $_POST['nama'];
            $nohp = $_POST['nohp'];

            $query = $koneksi->prepare("INSERT INTO user (id, nama, nohp, email, password, role,status ) VALUES (:id, :nama, :nohp, :email, :password, 'user', 'off')");
            $query->bindParam(':id', $id);
            $query->bindParam(':nama', $nama);
            $query->bindParam(':nohp', $nohp);
            $query->bindParam(':email', $email);
            $query->bindParam(':password', $password);
            $query->execute();

            // send otp
            $idotp = rand(1, 10000);
            

            $otp = generateNumber(6);
            $query = $koneksi->prepare("INSERT INTO otp (id, otp, user_id) VALUES (:id, :otp, :user_id)");
            $query->bindParam(':id', $idotp);
            $query->bindParam(':otp', $otp);
            $query->bindParam(':user_id', $id);
            $query->execute();
            require_once('otp.php');
            echo "<script>
                Swal.fire({
                    title: 'Sukses!',
                    text: 'Anda Berhasil Daftar silahkan verifikasi via whatsapp',
                    icon: 'success',
                    confirmButtonText: 'OK'
                }).then(() => {
                    window.location.href = '?page=daftar&verify=$idotp'; 
                });
            </script>";
        }
    }
    ?>
    </body>


    </html>