<!DOCTYPE html>
<html>
<head>
	<title>Resaler Tas</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="assets/css/index.css">
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css">
  <style type="text/css">
    html, body {
      margin: 0;
      padding: 0;
    }

    * {
      box-sizing: border-box;
    }

    .slider {
        width: 80%;
        margin: 50px auto;
        display: flex;
        align-items: stretch;
    }

    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before{
      color: black;
    }
    .slick-next:before{
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: .5;
    }

    .slick-current {
      opacity: 1;
    }
  </style>
</head>
<body>

<div id="banner" style="background-image: url(img/<?php echo 'banner.jpg'; ?>);">
	<div class="tengah">
		<div class="navigation">
		<div class="logo">
			<img src="img/logo.png" class="img-logo">
		</div>
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="produk.php">Produk</a></li>
				<li><a href="tentang.php">Tentang</a></li>
				<li><a href="kontak.php">Kontak</a></li>
			</ul>
		</div>
		</div>
	</div>
	<div class="hapus"></div>

	<div class="tengah">
		<div class="isi">
			<h1>Menjual Tas dan Baju dari bahan berkualitas dan nyaman dipakai.</h1>
		</div>
		<a href="#" class="btn btn-banner">Selengkapnya</a>
	</div>
	<div class="hapus"></div>
</div>

<div id="barang">
	<div class="tengah">
		<h2>Produk Popular</h2>
		<h1>Apa produk yang sering pelanggan beli ?</h1>
	</div>
	<div class="hapus"></div>
	<section class="center slider">
    <div class="box">
      <div class="img">
        <img class="img-box" src="img/<?php echo "barang.jpg"; ?>">
      </div>
      <div class="text">
        <h1>Tas Kulit Buaya</h1>
        <p>Terbuat dari bahan kulit buaya asli. Model trendi, kulit berkualitas, dan nyaman dipakai.</p>
      </div>
      <div class="harga">
        <h3>Rp 250.000,-</h3>
      </div>
      <div class="tombol">
        <a href="index.php" class="btn btn-barangChart">Add Chart</a>
        <a href="#" class="btn-baca">Read More</a>
      </div>
    </div>

    <div class="box">
      <div class="img">
        <img class="img-box" src="img/<?php echo "barang.jpg"; ?>">
      </div>
      <div class="text">
        <h1>Tas Kulit Buaya</h1>
        <p>Terbuat dari bahan kulit buaya asli. Model trendi, kulit berkualitas, dan nyaman dipakai.</p>
      </div>
      <div class="harga">
        <h3>Rp 250.000,-</h3>
      </div>
      <div class="tombol">
        <a href="index.php" class="btn btn-barangChart">Add Chart</a>
        <a href="#" class="btn-baca">Read More</a>
      </div>
    </div>

    <div class="box">
      <div class="img">
        <img class="img-box" src="img/<?php echo "barang.jpg"; ?>">
      </div>
      <div class="text">
        <h1>Tas Kulit Buaya</h1>
        <p>Terbuat dari bahan kulit buaya asli. Model trendi, kulit berkualitas, dan nyaman dipakai.</p>
      </div>
      <div class="harga">
        <h3>Rp 250.000,-</h3>
      </div>
      <div class="tombol">
        <a href="index.php" class="btn btn-barangChart">Add Chart</a>
        <a href="#" class="btn-baca">Read More</a>
      </div>
    </div>

    <div class="box">
      <div class="img">
        <img class="img-box" src="img/<?php echo "barang.jpg"; ?>">
      </div>
      <div class="text">
        <h1>Tas Kulit Buaya</h1>
        <p>Terbuat dari bahan kulit buaya asli. Model trendi, kulit berkualitas, dan nyaman dipakai.</p>
      </div>
      <div class="harga">
        <h3>Rp 250.000,-</h3>
      </div>
      <div class="tombol">
        <a href="index.php" class="btn btn-barangChart">Add Chart</a>
        <a href="#" class="btn-baca">Read More</a>
      </div>
    </div>

    <div class="box">
      <div class="img">
        <img class="img-box" src="img/<?php echo "barang.jpg"; ?>">
      </div>
      <div class="text">
        <h1>Tas Kulit Buaya</h1>
        <p>Terbuat dari bahan kulit buaya asli. Model trendi, kulit berkualitas, dan nyaman dipakai.</p>
      </div>
      <div class="harga">
        <h3>Rp 250.000,-</h3>
      </div>
      <div class="tombol">
        <a href="index.php" class="btn btn-barangChart">Add Chart</a>
        <a href="#" class="btn-baca">Read More</a>
      </div>
    </div>
	</section>
</div>

<div id="keunggulan">
	<div class="tengah">
		<h1>Kenapa memilih Fashion Shop ?</h1>
		<div class="isi">
			<div class="box">
				<div class="img">
					<img src="assets/img/<?php echo 'keunggulan.png'; ?>" class="img-box">
				</div>
				<div class="text">
					<h3>Bahan Kulit Asli</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="box">
				<div class="img">
					<img src="assets/img/<?php echo 'keunggulan.png'; ?>" class="img-box">
				</div>
				<div class="text">
					<h3>Bahan Kulit Asli</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="box">
				<div class="img">
					<img src="assets/img/<?php echo 'keunggulan.png'; ?>" class="img-box">
				</div>
				<div class="text">
					<h3>Bahan Kulit Asli</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>

			<div class="box">
				<div class="img">
					<img src="assets/img/<?php echo 'keunggulan.png'; ?>" class="img-box">
				</div>
				<div class="text">
					<h3>Bahan Kulit Asli</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="hapus"></div>
</div>

<div id="kontak" style="background-image: url(img/<?php echo 'kontak.jpg'; ?>);">
	<h1>Anda butuh bantuan ?</h1>
	<h2>Kami siap melayani anda.</h2>
	<div class="isi">
		<div class="box">
			<div class="img">
				<img class="img-box" src="img/<?php echo 'telp.png'; ?>">
			</div>
			<div class="text">
				<p>0831-2692-3754</p>
			</div>
		</div>

		<div class="box">
			<div class="img">
				<img class="img-box" src="img/<?php echo 'email.png'; ?>">
			</div>
			<div class="text">
				<p>totorubianto14@gmail.com</p>
			</div>
		</div>
	</div>
</div>

<div id="bawah">
  <div class="tengah">
    <div class="isi">
    <div class="logo">
      <img src="img/logo-bawah.png" class="img-logo">
    </div>
    <div class="box">
      <div class="kategori">
        <h1>Kategori</h1>
        <a href="baju.php">Baju</a><br>
        <a href="tas.php">Tas</a><br>
      </div>

      <div class="ikuti">
        <h1>Ikuti Kami</h1>
        <div class="sosmed">
          <div class="sosmed-img">
            <img src="assets/img/fb.png" class="img-sosmed">
          </div>
          <div class="sosmed-text">
            <h2>Facebook Akun</h2>
          </div>
        </div>
      </div>

      <div class="kontak">
        <h1>Kontak Kami</h1>
        <div class="hubungi">
          <div class="kontak-img">
            <img src="assets/img/telp-bawah.png" class="img-kontak">
          </div>
          <div class="kontak-text">
            <h2>0831-2692-3754</h2>
          </div>
        </div>
      </div>
    </div>
    </div>
  </div>
  <div class="hapus"></div>
</div>

 <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
  <script src="assets/js/slick.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript">
    $(document).on('ready', function() {
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
    });
</script>

</body>
</html>