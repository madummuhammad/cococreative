<!-- Masthead-->
<?php foreach ($top_img as $row => $value): ?>
	<header class="masthead" style="background-image: url(<?php echo base_url('main/assets/assets/img/upload/website/') ?><?php echo $value['gambar'] ?>);">
		<div class="container">
			<h1 class="text-uppercase"><?php echo $value['judul'] ?></h1>
			<div class="btn-group top-image-edit" role="group" aria-label="Basic example">
			</div>
		</div>
	</header>
<?php endforeach ?>
<!-- End Of Masthead -->