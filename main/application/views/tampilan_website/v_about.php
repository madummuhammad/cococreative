<!-- About our company -->
<section class="projects-section bg-light" id="projects">
	<div class="container">
		<?php foreach ($about as $row => $value): ?>
			<div class="row align-items-center no-gutters mb-lg-0 bg-warning">
				<div class="col-xl-7 col-lg-7 p-5">
					<img class="img-fluid mb-3 mb-lg-0 align-items-center" src="<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>" alt="" />
				</div>
				<div class="col-xl-5 col-lg-5">
					<div class="featured-text text-center text-lg-left p-4">
						<h4><?php echo $value['judul'] ?></h4>
						<p class="text-black-50 mb-0 text-justify keterngan-produk">
							<?php echo $value['isi'] ?>
						</p>
					</div>
					<div class="btn-group carousel-edit" role="group" aria-label="Basic example">
						<a type="button" class="btn btn-info" data-toggle="modal" data-target="#about<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></a>
					</div>
				</div>
			</div>
		<?php endforeach ?>
		<!-- 				<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
			<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/commit1.jpg') ?>" alt="" /></div>
			<div class="col-lg-6">
				<div class="bg-white text-center h-100 project">
					<div class="d-flex h-100">
						<div class="project-text w-100 my-auto text-center text-lg-left">
							<h4 class="text-dark">Our Strategy For Success</h4>
							<p class="mb-0 text-dark-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
							<hr class="d-none d-lg-block mb-0 ml-0" />
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row justify-content-center no-gutters">
			<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/commit1.jpg') ?>" alt="" /></div>
			<div class="col-lg-6 order-lg-first">
				<div class="bg-white text-center h-100 project">
					<div class="d-flex h-100">
						<div class="project-text w-100 my-auto text-center text-lg-right">
							<h4 class="text-dark">Our Commitment</h4>
							<p class="mb-0 text-dark-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos molestias minima, exercitationem necessitatibus id veritatis excepturi eum repellendus nemo dicta, facilis odio voluptates maxime aperiam. Repudiandae iure libero, sapiente at.</p>
							<hr class="d-none d-lg-block mb-0 mr-0" />
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</section>
<!-- End of Our Company -->
<!-- About our job -->
<!-- 		<section>
	<div class="container-fluid">
				<div class="row mb-3 align-items-center">
							<div class="about-text opacity-4 bg-dark">
										<div class="col text-center about-image">
													<p class="about-commit-text font-weight-bold">COCONUT PLANATION</p>
													<p class="about-commit-text2">We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.</p>
										</div>
							</div>
				</div>
	</div>
	<div class="container-fluid">
				<div class="row mb-3 align-items-center">
							<div class="about-text opacity-4 bg-dark">
										<div class="col text-center about-image">
													<p class="about-commit-text font-weight-bold">COCONUT PLANATION</p>
													<p class="about-commit-text2">We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.</p>
										</div>
							</div>
				</div>
	</div>
	<div class="container-fluid">
				<div class="row mb-3 align-items-center">
							<div class="about-text opacity-4 bg-dark">
										<div class="col text-center about-image">
													<p class="about-commit-text font-weight-bold">COCONUT PLANATION</p>
													<p class="about-commit-text2">We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.</p>
										</div>
							</div>
				</div>
	</div>
	<div class="container-fluid">
				<div class="row mb-3 align-items-center">
							<div class="about-text opacity-4 bg-dark">
										<div class="col text-center about-image">
													<p class="about-commit-text font-weight-bold">COCONUT PLANATION</p>
													<p class="about-commit-text2">We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.</p>
										</div>
							</div>
				</div>
	</div>
	<div class="container-fluid">
				<div class="row mb-3 align-items-center">
							<div class="about-text opacity-4 bg-dark">
										<div class="col text-center about-image">
													<p class="about-commit-text font-weight-bold">COCONUT PLANATION</p>
													<p class="about-commit-text2">We process more than 1,500 hectares of coconut plantations, spread across several islands in Eastern Indonesia.</p>
										</div>
							</div>
				</div>
	</div>
</section> -->
<!-- End Of About Our Job -->