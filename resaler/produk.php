<?php
	require_once'template/header.php';
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Produk</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link rel="stylesheet" type="text/css" href="assets/css/produk.css">
</head>
<body>

<div id="halamanProduk">
<div class="container">
	<div class="row harga">
		<div class="col-md-6 img-barang">
			<img src="img/barang.jpg" style="height: 400px;">
		</div>
		<div class="col-md-6">
			<h1>Tas Kulit</h1>
			<h2>Tas Kulit berkualitas, bahan kulit buaya.</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>

			<div class="row harga">
				<div class="col-md-6">
					<div class="row harga">
						<div class="col-md-3">
							<h3>Harga</h3>
						</div>
						<div class="col-md-9">
							<h4>Rp <?php echo "450000"; ?>,-</h4>
						</div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="row harga">
						<div class="col-md-4">
							<h3>Jumlah:</h3>
						</div>
						<div class="col-md-8 harga">
							<form>
								<input type="text" name="jumlah" size="10" class="form-jumlah">
							
						</div>
					</div>
				</div>
			</div>

			<button class="btn btn-primary btn-tambahKeranjang" type="submit">Tambah ke keranjang</button>
				</form>

		</div>
	</div>
</div>
</div>

<div id="spesifikasiBarang">
	<div class="container">
		<h1>Spesifikasi Lengkap</h1>
		<div class="line-spesifikasiBarang"></div>
		<div class="table-spesifikasiBarang">
		<table>
			<tr>
				<th>Bahan</th>
				<td>:</td>
				<td><?php echo "Kulit Buaya"; ?></td>
				<th>Warna</th>
				<td>:</td>
				<td><?php echo "Hitam"; ?></td>
				<th>Jenis Model</th>
				<td>:</td>
				<td><?php echo "Cewe"; ?></td>
			</tr>
			<tr>
				<th>Berat</th>
				<td>:</td>
				<td><?php echo "0,5 Kg"; ?></td>
				<th>Garansi</th>
				<td>:</td>
				<td><?php echo "1 bulan"; ?></td>
			</tr>
		</table>
		</div>
		<div class="row img-barang">
			<div class="col-md-8 img-spesifikasi img-barang">
				<img src="img/barang.jpg" style="height: 400px;" class="img-border">
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row harga row-marginTop">
			<div class="col-md-4 img-barang">
				<img src="img/barang.jpg" style="height: 200px;" class="img-border">
			</div>
			<div class="col-md-8">
				<h2>Bahan Berlkualitas</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<div class="row harga row-marginTop">
			<div class="col-md-8">
				<h2>Bahan Berlkualitas</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			<div class="col-md-4 img-barang">
				<img src="img/barang.jpg" style="height: 200px;" class="img-border">
			</div>
		</div>
	
		<div class="row harga row-marginTop">
			<div class="col-md-4 img-barang">
				<img src="img/barang.jpg" style="height: 200px;" class="img-border">
			</div>
			<div class="col-md-8">
				<h2>Bahan Berlkualitas</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>
	</div>

	<div class="container" style="margin-top: 100px;">
		<div class="row harga mini-content">
			<div class="col-md-2">
				<img src="assets/img/keunggulan.png" style="height: 50px;">
			</div>
			<div class="col-md-10">
				<h2>Respon Cepat</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>
		</div>
		<div class="line-keunggulan"></div>

		<div class="row harga mini-content">
			<div class="col-md-2">
				<img src="assets/img/keunggulan.png" style="height: 50px;">
			</div>
			<div class="col-md-10">
				<h2>Respon Cepat</h2>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			</div>
		</div>
		<div class="line-keunggulan"></div>
	</div>
</div>

<?php
	require_once'template/kontak.php';
?>

<?php
	require_once'template/footer.php';
?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

</body>
</html>