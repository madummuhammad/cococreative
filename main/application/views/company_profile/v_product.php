<?php if (get_cookie('lang_is')=== 'en'): ?>
<!-- Masthead-->
<header class="masthead" style="background-image: url(<?php echo base_url('assets/assets/img/header1.jpg') ?>);">
	<div class="container">
		<h1 class="text-uppercase">ABOUT PRODUCT</h1>
	</div>
</header>
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
<!-- Contact-->
<?php else: ?>
<!-- Masthead-->
<header class="masthead" style="background-image: url(<?php echo base_url('assets/assets/img/header1.jpg') ?>);">
	<div class="container">
		<h1 class="text-uppercase">TENTANG PRODUK</h1>
	</div>
</header>
<!-- End Of Masthead -->
<!-- About our company -->
<section class="projects-section" id="projects">
	<div class="container-fluid">
		<div class="container-fluid">
			<div class="row justify-content-center no-gutters mb-5 mb-lg-0">
				<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/turus/turus1.png') ?>" alt="" /></div>
				<div class="col-lg-6">
					<div class="bg-white text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-left">
								<h4 class="text-dark">Turus atau Penyangga Tanaman</h4>
								<p class="mb-0 text-dark-50 text-justify">Deskripsi Produk</p>
								<p class="mb-0 text-dark-50 text-justify">
									TURUS adalah tiang atau tonggak untuk tempat merambat tanaman yang menjalar. Terbuat
									dari sabut kelapa yang direndam B4, dibungkus dengan kawat ram painting anti karat, dan di
								support oleh pipa paralon</p><br>
								<p class="mb-0 text-dark-50 text-justify">Ukuran Turus :</p>
								<p class="mb-0 text-dark-50 text-justify">Diameter turus = +- 3.5 cm</p>
								<p class="mb-0 text-dark-50 text-justify">Panjang turus adalah panjang keseluruhan dari turus <br>
								Panjang Paralon adalah 15-20cm</p><br>
								<p class="mb-0 text-dark-50 text-justify">Manfaat Turus :<br>
									Menjadikan tanaman tumbuh tegak lurus ke atas <br>
									Menyuburkan tanaman karena pada tiap ruas pohon rambat dapat keluar akar dan masuk ke dalam <br>
									ijuk,sehingga pada saat penyiraman ijuk mampu menahan air dan menjaga kelembaban pd tanaman <br>
								Menghemat tempat untuk menanam tanaman yang menjalar</p>
								<button type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#plantsupport">TAMBAH KE KERANJANG <i class="fas fa-shopping-cart" clicked></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center no-gutters mt-2">
				<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/pot-sabut-kelapa/pot-sabut-kelapa-variasi-b1.jpg') ?>" alt="" /></div>
				<div class="col-lg-6 order-lg-first">
					<div class="bg-white text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-right">
								<h4 class="text-dark">Coco Pot</h4>
								<p class="mb-0 text-dark-50 text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos molestias minima, exercitationem necessitatibus id veritatis excepturi eum repellendus nemo dicta, facilis odio voluptates maxime aperiam. Repudiandae iure libero, sapiente at.</p>
								<a href="<?php echo base_url('product/cocopot') ?>" class="btn btn-primary mt-4">VIEW MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center no-gutters mb-5 mb-lg-0 mt-2">
				<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/fiber/fiber1.jpg') ?>" alt="" /></div>
				<div class="col-lg-6">
					<div class="bg-white text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-left">
								<h4 class="text-dark">Coco Fiber</h4>
								<p class="mb-0 text-dark-50 text-justify">Coco fiber adalah serat dari limbah sabut kelapa yang digiling menggunakan mesin sehingga
									menciptakan fiber (serat – serat halus). Coco fiber yang kami produksi sudah mengandung zero zat
									tanin. Memiliki sifat tidak mudah busuk dan rusak <br>
									Spesifikasi : <br>
									- Kelembaban : Up to 15% <br>
									- Kekotoran : 7 to 9% <br>
									- Panjang Fiber : 5cm to 25cm <br>
									Manfaat : <br>
									- Sebagai hiasan tanaman dan pot tanaman <br>
									- Media tanaman Anggrek dan tanaman lainnya <br>
									- Kandungan 18% kalium sebagai pengganti pupuk KCL <br>
								- Sebagai pembuatan jaring ikan, tali sabut , tikar sabut</p>
								<a href="<?php echo base_url('product/cocofiber') ?>" class="btn btn-primary mt-4">VIEW MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center no-gutters mt-2">
				<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/cocopeat/cocopeat.jpg') ?>" alt="" /></div>
				<div class="col-lg-6 order-lg-first">
					<div class="bg-white text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-right">
								<h4 class="text-dark">Coco Peat</h4>
								<p class="mb-0 text-dark-50 text-justify">Cocopeat adalah serbuk halus dari sabut kelapa yang dihancurkan, biasanya digunakan
									sebagai media tanam. Oleh karena itu, paling mudah ditemukan di negara-negara tropis dan
									kepulauan, seperti Indonesia. Banyak manfaat yang bisa didapat dengan menggunakannya.
									Baik untuk digunakan bersama tanah, atau berdiri sendiri. <br>
									Spesifikasi : <br>
									- Zero Zat Tanin <br>
									- 100% Murni <br>
									- Grade A <br>
									Manfaat : <br>
									- Sebagai media tanam pengganti tanah <br>
									- Sebagai media pembenihan bibit <br>
								- Sebagai Campuran Pupuk Tanaman</p>
								<a href="<?php echo base_url('product/cocopeat') ?>" class="btn btn-primary mt-4">VIEW MORE</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row justify-content-center no-gutters mb-5 mb-lg-0 mt-2">
				<div class="col-lg-6"><img class="img-fluid" src="<?php echo base_url('assets/assets/img/coconut-rope/coconutrope.jpg') ?>" alt="" /></div>
				<div class="col-lg-6">
					<div class="bg-white text-center h-100 project">
						<div class="d-flex h-100">
							<div class="project-text w-100 my-auto text-center text-lg-left">
								<h4 class="text-dark">Tali Sabut Kelapa</h4>
								<p class="mb-0 text-dark-50 text-justify">Tali sabut kelapa adalah tali yang terbuat dari pintalan serat sabut kelapa. Memiliki sifat fisik tidak
								mudah pecah, tidak mudah meleleh, dan berguna untuk mengikat barang yang licin.</p><br>
								<p class="mb-0 text-dark-50 text-justify">Ukuran :
								Diameter 5mm – 9mm</p>
								<br>
								<p class="mb-0 text-dark-50 text-justify">Manfaat :<br>
									Untuk kebutuhan dekorasi dan hiasan <br>
									Untuk mengikat tanaman yang menjalar <br>
								Untuk kebutuhan pertanian dan perkebunan</p>
								<a type="button" class="btn btn-primary mt-4" data-toggle="modal" data-target="#coconutrope">TAMBAH KE KERANJANG <i class="fas fa-shopping-cart"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
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
	<!-- Contact-->
	<?php endif ?>