<?php
	require_once'template/header.php';
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Pesanan</title>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/template.css">
	<link rel="stylesheet" type="text/css" href="assets/css/pesanan.css">

</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#home" aria-controller="home" role="tab" data-toggle="tab">Home</a></li>
				<li role="presentation"><a href="#forum" aria-controller="forum" role="tab" data-toggle="tab">Keranjang</a></li>
			</ul>

			<div class="tab-content">
				<div role="tabpanel" class="tab-pane active tab-pesanan" id="home">
					<table>
						<tr>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Nomer Pesanan</th>
							<th>Status</th>
						</tr>
						<tr>
							<td>Tas Kulit Buaya</td>
							<td>Rp 5000000,-</td>
							<td>123456abcd</td>
							<td>Diterima</td>
						</tr>
						<tr>
							<td>Tas Kulit Buaya</td>
							<td>Rp 5000000,-</td>
							<td>123456abcd</td>
							<td>Diterima</td>
						</tr>
						<tr>
							<td>Tas Kulit Buaya</td>
							<td>Rp 5000000,-</td>
							<td>123456abcd</td>
							<td>Diterima</td>
						</tr>
						<tr>
							<td>Tas Kulit Buaya</td>
							<td>Rp 5000000,-</td>
							<td>123456abcd</td>
							<td>Diterima</td>
						</tr>
					</table>
				</div>
				<div role="tabpanel" class="tab-pane tab-pesanan" id="forum">
					<form action="" method="post">
					<table>
						<tr>
							<th>Pilih</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Nomer Pesanan</th>
							<th>Total Harga</th>
						</tr>
						<tr>
							<td><input type="checkbox" name="kode" value="123456abc"></td>
							<td>Tas Kulit Buaya</td>
							<td>Rp 5000000,-</td>
							<td>2</td>
							<td>123456abcd</td>
							<td>Rp 10000000,-</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="kode" value="123456abc"></td>
							<td>Tas Kulit Buaya</td>
							<td>Rp 5000000,-</td>
							<td>2</td>
							<td>123456abcd</td>
							<td>Rp 10000000,-</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="kode" value="123456abc"></td>
							<td>Tas Kulit Buaya</td>
							<td>Rp 5000000,-</td>
							<td>2</td>
							<td>123456abcd</td>
							<td>Rp 10000000,-</td>
						</tr>
					</table>
					<div class="row">
						<div class="col-md-8"></div>
						<div class="col-md-4 harga">
							<h1>Total Biaya</h1>
							<h2>Rp 30000000,-</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-10"></div>
						<div class="col-md-2">
							<button type="submit" class="btn btn-success btn-beli">Bayar</button>
						</div>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.js"></script>

<?php
	require_once'template/footer.php';
?>
</body>
</html>