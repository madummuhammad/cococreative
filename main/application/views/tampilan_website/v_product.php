
<!-- Masthead-->
<!-- End Of Masthead -->
<!-- About our company -->
<section class="projects-section" id="projects">
	<div class="container-fluid">
		<?php foreach ($jenis_produk as $row => $value): ?>
		<?php if ($row % 2 == 0): ?>
		<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
			<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/upload/produk/');echo $value['gambar'] ?>" alt="" /></div>
			<div class="col-lg-6">
				<div class="bg-white text-center h-100 project">
					<div class="d-flex h-100">
						<div class="project-text w-100 my-auto text-center text-lg-left">
							<h4 class="text-dark"><?php echo $value['nama_jenis_produk'] ?></h4>
							<p class="mb-0 text-dark-50 text-justify keterangan-produk"><?php echo $value['keterangan'] ?></p>
							<?php if ($value['view_more?']==1): ?>
							<a href="<?php echo base_url('product/view_more/');echo $value['id_jenis_produk'] ?>" class="btn btn-primary mt-4">VIEW MORE</a>
							<?php else: ?>
							<button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#<?php echo $value['id_jenis_produk'] ?>">ADD TO CHART <i class="fas fa-shopping-cart"></i></button>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php else: ?>
		<div class="row justify-content-center no-gutters mt-2">
			<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/upload/produk/');echo $value['gambar'] ?>" alt="" /></div>
			<div class="col-lg-6 order-lg-first">
				<div class="bg-white text-center h-100 project">
					<div class="d-flex h-100">
						<div class="project-text w-100 my-auto text-center text-lg-right">
							<h4 class="text-dark"><?php echo $value['nama_jenis_produk'] ?></h4>
							<p class="mb-0 text-dark-50 text-justify keterangan-produk"><?php echo $value['keterangan'] ?></p>
							<?php if ($value['view_more?']==1): ?>
							<a href="<?php echo base_url('product/view_more/');echo $value['id_jenis_produk'] ?>" class="btn btn-primary mt-4">VIEW MORE</a>
							<?php else: ?>
							<button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#plantsupport">ADD TO CHART <i class="fas fa-shopping-cart" clicked></i></button>
							<?php endif ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif ?>
		<?php endforeach ?>
	</div>
</section>