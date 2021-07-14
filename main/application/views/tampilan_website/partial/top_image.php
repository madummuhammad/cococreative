<!-- Masthead-->
<?php foreach ($top_img as $row => $value): ?>
	<header class="masthead" style="background-image: url(<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>);">
		<div class="container">
			<h1 class="text-uppercase"><?php echo $value['judul'] ?></h1>
			<div class="btn-group top-image-edit" role="group" aria-label="Basic example">
				<!-- Edit -->
				<a type="button" class="btn btn-info" data-toggle="modal" data-target="#edittopimage<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></a>
				<!-- End of edit -->
			</div>
		</div>
	</header>
<?php endforeach ?>
<!-- End Of Masthead -->