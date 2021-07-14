<!-- Masthead-->
<header class="masthead" style="background-image: url(<?php echo base_url('assets/assets/img/pot-sabut-kelapa/pot-sabut-kelapa-variasi-b1.jpg') ?>);">
	<div class="container">
		<h1 class="text-uppercase">Coco Pot</h1>
	</div>
</header>
<!-- End Of Masthead -->
<section class="page-section" id="">
	<div class="container">
		<div class="row text-center">
			<?php foreach ($view_more as $row => $value): ?>
			<div class="col-md-6 mt-2">
				<img class="img-fluid" src="<?php echo base_url('assets/assets/img/pot-sabut-kelapa/pot-sabut-kelapa-variasi-b1.jpg') ?>" alt="" />
				<h4 class="my-3"><?php echo $value['nama_produk'] ?></h4>
				<p class="mb-0 text-muted text-justify keterangan-produk"><?php echo $value['keterangan'] ?></p>
				<button class="btn btn-primary mt-3 btn-lg m-2" data-target="#p<?php echo $row ?>" data-toggle="modal">ADD TO CHART <i class="fas fa-shopping-cart"></i></button>
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