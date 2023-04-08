<!doctype html>
<html lang="en" class="blue-theme">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
	<title>Adila ID reset password</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, viewport-fit=cover, user-scalable=no">
	<meta name="description" content="adila.id">
	<link rel="shortcut icon" href="admin/assets/img/favicon-20210912000035.png" type="image/x-icon" />

	<!-- Open Graph data -->
	<meta property="fb:app_id" content="655968634437471">
	<meta property="og:title" content="Adila ID reset password" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="produk/index.html" />
	<meta property="og:image" content="admin/uploads/index.html" />
	<meta property="og:description" content="Aplikasi toko online Adila ID reset password" />
	<meta property="og:site_name" content="Adila ID reset password" />

	<!-- Material design icons CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="admin/assets/img/favicon-20210912000035.png" />
	<meta name="google-site-verification" content="euCIiGMy1gz2DDkI46MsK_Sx6FVbU64akhDl_LBrRxc" />
	<meta name="description" content="Jasa digital marketing terpercaya | Jasa Pembuatan Aplikasi Terpercaya | Jual Beli Source Code" />
	<meta name="yandex-verification" content="0ef7681e68478029" />
	<meta name="author" content="adild.id">

	<!--  Social tags      -->
	<meta name="keywords" content="Aplikasi toko online Adila ID reset password">
	<meta name="description" content="Aplikasi toko online Adila ID reset password">
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Adila ID reset password">
	<meta itemprop="description" content="Aplikasi toko online Adila ID reset password">
	<meta itemprop="image" content="admin/assets/img/favicon-20210912000035.png">
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="product">
	<meta name="twitter:site" content="adila.id">
	<meta name="twitter:title" content="Adila ID reset password">
	<meta name="twitter:description" content="Aplikasi toko online Adila ID reset password">
	<meta name="twitter:creator" content="adila.id">
	<meta name="twitter:image" content="admin/assets/img/favicon-20210912000035.png">

	<link rel="stylesheet" href="assets/css/material-icons.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!-- Roboto fonts CSS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
	<!-- Bootstrap core CSS -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://unpkg.com/sweetalert%402.1.2/dist/sweetalert.min.js"></script><!-- Swiper CSS -->
	<link href="assets/css/swiper.min.css" rel="stylesheet">
	<!-- Chosen multiselect CSS -->
	<link href="assets/css/chosen.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/vendor/select2/select2.min.css">

	<!-- Custom styles for this template -->
	<link href="assets/css/style.css" rel="stylesheet">
	<link href="assets/fonts/fontawesome.all.min.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="assets/vendor/jquery/jquery-3.2.1.min.js"></script>

</head><!--<form id="form">
				<ul class="sign-left">
					<li>
						<p id="error" style="color:#cc0000;display:none;"><small>alamat email tidak ditemukan, mohon cek kembali.</small></p>
						<p id="sukses" style="color:#00cc00;display:none;"><small>berhasil menyetel ulang password, silahkan cek email anda untuk langkah selanjutnya.</small></p>
					</li>
					<li>
						<div class="inner-addon left-addon">
							<span class="fa fa-envelope"></span>
							<input type="text" name="email" class="form border border-grey" placeholder="Alamat Email" required />
						</div>
					</li>
					<li>
						<button type="submit" class="btn btn-green" id="submit">Setel ulang password</button>
					</li>
				</ul>
			</form>-->
<div class="row no-gutters vh-100 proh bg-template">
	<div class="col align-self-center px-3 text-center">
		<form id="form" class="form-signin shadow">
			Masukkan alamat email Anda untuk mengatur ulang password.
			<p id="error" style="color:#cc0000;"><small>alamat email tidak ditemukan, mohon cek kembali.</small></p>
			<p id="sukses" style="color:#00cc00;display:none;"><small>berhasil menyetel ulang password, silahkan cek email anda untuk langkah selanjutnya.</small></p>
			<div class="form-group float-label">
				<input class="form-control" type="email" name="email">
				<label for="email" class="form-control-label">Alamat Email</label>
			</div>
			<div id="prosesmail" style="display:none;">
				<h5 class="cl1"><i class="fa fa-circle-o-notch fa-spin"></i> Memproses...</h5>
			</div>
			<button id="submitmail" type="submit" class="btn btn-sm btn-default btn-rounded shadow">
				reset password
			</button>
		</form>
	</div>
</div>