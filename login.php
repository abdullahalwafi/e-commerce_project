<?php
if (isset($_SESSION['nama'])) {
	if ($_SESSION['role'] != 'admin') {
		$role = "?page=home";
	} else {
		$role = $_SESSION['role'];
	}
	header("location:$role");
} ?>
<div class="container">
	<div class="row no-gutters vh-100 proh bg-template">
		<div class="col align-self-center px-3 text-center" id="load">
			<h2 class="text-white "><span class="font-weight-light">Log</span>In</h2>
			<form method="post" class="form-signin shadow">
				<div class="form-group float-label">
					<input type="email" name="email" class="form-control" required autofocus>
					<label for="inputEmail" class="form-control-label">Alamat Email</label>
				</div>

				<div class="form-group float-label">
					<input type="password" name="password" class="form-control" required>
					<label for="inputPassword" class="form-control-label">Password</label>
				</div>

				<div class="form-group my-4 text-left">
					<div class="custom-control custom-checkbox">
						<input type="checkbox" name="remember" class="custom-control-input" id="checkbox6">
						<label class="custom-control-label" for="checkbox6">Ingat Saya</label>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<input type="submit" class="btn btn-sm btn-default btn-rounded shadow mb-2" value="Log in" name="login" style="width: 100%;">
					</div>
					<div class="col-12">
						<p class="text-center m-t-15">Belum punya akun? <a href="?page=daftar">Daftar</a></p>
					</div>
				</div>
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
		$email = $_POST['email'];
		$password = $_POST['password'];

		$stmt = $koneksi->prepare("SELECT * FROM user WHERE email = ? and status = 'aktif'");
		$stmt->execute([$email]);
		$user = $stmt->fetch(PDO::FETCH_ASSOC);

		if ($user && password_verify($password, $user['password'])) {
			$_SESSION['nama'] = $user['nama'];
			$_SESSION['iduser'] = $user['id'];
			$_SESSION['email'] = $user['email'];
			$_SESSION['role'] = $user['role'];
			if ($user['role'] != 'admin') {
				$role = "./?page=home";
			} else {
				$role = $user['role'];
			}
			echo "<script> Swal.fire({ title: 'Success!', text: 'Anda berhasil login!', icon: 'success', confirmButtonText: 'oke' }).then(() => { setTimeout(() => { window.location.href = '$role'; }, 100); }); </script>";
			exit;
		} else {
	?>
			<script>
				Swal.fire({
					title: 'Error!',
					icon: 'error',
					confirmButtonText: 'oke',
					html: "<span class='text-center'>Data yang anda masukan salah atau akun ada belum terverifikasi</span><br><table class='table table-bordered'><tr><td>email</td><td>password</td></tr><tr><td>admin@admin.com</td><td>admin123</td></tr></table>"
				});
			</script>
	<?php
		}
	}
	?>
	</body>


	</html>