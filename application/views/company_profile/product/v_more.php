<!-- Masthead-->
<header class="masthead" style="background-image: url(http://localhost/admin_cococreative/assets/assets/img/upload/produk/<?php echo $this->M_Produk->tampil_top_img_view_more()['gambar'] ?>)">
	<div class="container">
		<h1 class="text-uppercase"><?php echo $this->M_Produk->tampil_top_img_view_more()['nama_jenis_produk'] ?></h1>
	</div>
</header>
<!-- End Of Masthead -->
<section class="page-section" id="">
	<div class="container">
		<div class="row text-center">
			<?php foreach ($view_more as $row => $value): ?>
			<div class="col-md-6 mt-2">
				<img class="img-fluid" src="http://localhost/admin_cococreative/assets/assets/img/upload/variasi_produk/<?php echo $value['gambar_variasi'] ?>" alt="" />
				<h4 class="my-3"><?php echo $value['isi_pilihan_ukuran'] ?></h4>
				<p class="mb-0 text-muted text-justify keterangan-produk"><?php echo $value['keterangan_variasi_produk'] ?></p>
				<button class="btn btn-primary mt-3 btn-lg m-2" data-target="#vm<?php echo $value['id_pilihan_ukuran'] ?>" data-toggle="modal">ADD TO CHART <i class="fas fa-shopping-cart"></i></button>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</section>
<!--
14000
15000
16000
11000
8000
10000
5000
8000
10000
10000
23000
25000
10000
10000
7000
1000
10000
10000
15000
7000
-->