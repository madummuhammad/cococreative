	<!-- partial -->
	<div class="flash-news-banner">
		<div class="container">
			<div class="d-lg-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center">
					<span class="badge badge-dark mr-3">Berita Terbaru</span>
					<p class="mb-0">
						Lorem Ipsum has been the industry's standard dummy text ever
						since the 1500s.
					</p>
				</div>
				<div class="d-flex">
					<span class="mr-3 text-danger">Sekarang, <?php echo date('l d M Y') ?></span>
				</div>
			</div>
		</div>
	</div>

	<div class="content-wrapper bg-white">
		<div class="container pt-5">
			<div class="row pt-5 mt-5" data-aos="fade-up">
				<div class="col-xl-8 stretch-card grid-margin">
					<div class="banner-content">
						<h1 class="mb-2 text-dark text-justify text-uppercase">
							<?php echo $berita_sorotan['judul'] ?>
						</h1>
						<div class="fs-12">
							<span class="mr-2">Photo </span>10 Minutes ago
						</div>
					</div>
				</div>
			</div>
			<div class="row" data-aos="fade-up">
				<div class="col-xl-8 stretch-card grid-margin">

					<div class="position-relative bg-dark">
						<img src="<?php echo base_url('main')?>/assets/assets/img/upload/berita/<?php echo $berita_sorotan['gambar'] ?>" alt="banner" class="img-fluid"
						/>
						<!-- 1450 x 820 minimal -->
					</div>

				</div>
				<div class="col-xl-4 stretch-card grid-margin">
					<div class="card bg-dark text-white">
						<div class="card-body">
							<h2>Berita Terbaru</h2>
							<?php foreach ($berita_terbaru as $row => $value): ?>
								<div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
									<div class="pr-3">
										<h5><?php echo $value['judul'] ?></h5>
										<div class="fs-12">
											<span class="mr-2">Photo </span>10 Minutes ago
										</div>
									</div>
									<div class="rotate-img">
										<img
										src="<?php echo base_url('main')?>/assets/assets/img/upload/berita/<?php echo $value['gambar'] ?>"
										alt="thumb"
										class="img-fluid img-lg"
										/>
									</div>
								</div>
							<?php endforeach ?>
						</div>
					</div>
				</div>
			</div>
			<div class="row" data-aos="fade-up">
<!-- 	<div class="col-lg-3 stretch-card grid-margin">
		<div class="card">
			<div class="card-body">
				<h2>Category</h2>
				<ul class="vertical-menu">
					<li><a href="#">Politics</a></li>
					<li><a href="#">International</a></li>
					<li><a href="#">Finance</a></li>
					<li><a href="#">Health care</a></li>
					<li><a href="#">Technology</a></li>
					<li><a href="#">Jobs</a></li>
					<li><a href="#">Media</a></li>
					<li><a href="#">Administration</a></li>
					<li><a href="#">Sports</a></li>
					<li><a href="#">Game</a></li>
					<li><a href="#">Art</a></li>
					<li><a href="#">Kids</a></li>
				</ul>
			</div>
		</div>
	</div> -->
	<div class="col-lg-8 stretch-card grid-margin">
		<div class="card">
			<div class="card-body">
					<div class="row">
						<div class="col-sm-12  grid-margin">
							<p class="mb-0">
								<?php echo $isi_berita['isi'] ?>
							</p>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
<!-- <div class="row" data-aos="fade-up">
	<div class="col-sm-12 grid-margin">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-lg-8">
						<div class="card-title">
							Video
						</div>
						<div class="row">
							<div class="col-sm-6 grid-margin">
								<div class="position-relative">
									<div class="rotate-img">
										<img
										src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_7.jpg"
										alt="thumb"
										class="img-fluid"
										/>
									</div>
									<div class="badge-positioned w-90">
										<div
										class="d-flex justify-content-between align-items-center"
										>
										<span
										class="badge badge-danger font-weight-bold"
										>Lifestyle</span
										>
										<div class="video-icon">
											<i class="mdi mdi-play"></i>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-sm-6 grid-margin">
							<div class="position-relative">
								<div class="rotate-img">
									<img
									src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_8.jpg"
									alt="thumb"
									class="img-fluid"
									/>
								</div>
								<div class="badge-positioned w-90">
									<div
									class="d-flex justify-content-between align-items-center"
									>
									<span
									class="badge badge-danger font-weight-bold"
									>National News</span
									>
									<div class="video-icon">
										<i class="mdi mdi-play"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 grid-margin">
						<div class="position-relative">
							<div class="rotate-img">
								<img
								src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_9.jpg"
								alt="thumb"
								class="img-fluid"
								/>
							</div>
							<div class="badge-positioned w-90">
								<div
								class="d-flex justify-content-between align-items-center"
								>
								<span
								class="badge badge-danger font-weight-bold"
								>Lifestyle</span
								>
								<div class="video-icon">
									<i class="mdi mdi-play"></i>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-sm-6 grid-margin">
					<div class="position-relative">
						<div class="rotate-img">
							<img
							src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_10.jpg"
							alt="thumb"
							class="img-fluid"
							/>
						</div>
						<div class="badge-positioned w-90">
							<div
							class="d-flex justify-content-between align-items-center"
							>
							<span
							class="badge badge-danger font-weight-bold"
							>National News</span
							>
							<div class="video-icon">
								<i class="mdi mdi-play"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4">
		<div
		class="d-flex justify-content-between align-items-center"
		>
		<div class="card-title">
			Latest Video
		</div>
		<p class="mb-3">See all</p>
	</div>
	<div
	class="d-flex justify-content-between align-items-center border-bottom pb-2"
	>
	<div class="div-w-80 mr-3">
		<div class="rotate-img">
			<img
			src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_11.jpg"
			alt="thumb"
			class="img-fluid"
			/>
		</div>
	</div>
	<h3 class="font-weight-600 mb-0">
		Apple Introduces Apple Watch
	</h3>
</div>
<div
class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_12.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600 mb-0">
	SEO Strategy & Google Search
</h3>
</div>
<div
class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_13.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600 mb-0">
	Cycling benefit & disadvantag
</h3>
</div>
<div
class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_14.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600">
	The Major Health Benefits of
</h3>
</div>
<div
class="d-flex justify-content-between align-items-center pt-3"
>
<div class="div-w-80 mr-3">
	<div class="rotate-img">
		<img
		src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_15.jpg"
		alt="thumb"
		class="img-fluid"
		/>
	</div>
</div>
<h3 class="font-weight-600 mb-0">
	Powerful Moments of Peace
</h3>
</div>
</div>
</div>
</div>
</div>
</div>
</div> -->
<!-- <div class="row" data-aos="fade-up">
	<div class="col-sm-12">
		<div class="card">
			<div class="card-body">
				<div class="row">
					<div class="col-xl-6">
						<div class="card-title">
							Sport light
						</div>
						<div class="row">
							<div class="col-xl-6 col-lg-8 col-sm-6">
								<div class="rotate-img">
									<img
									src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_16.jpg"
									alt="thumb"
									class="img-fluid"
									/>
								</div>
								<h2 class="mt-3 text-primary mb-2">
									Newsrooms exercise..
								</h2>
								<p class="fs-13 mb-1 text-muted">
									<span class="mr-2">Photo </span>10 Minutes ago
								</p>
								<p class="my-3 fs-15">
									Lorem Ipsum has been the industry's standard dummy
									text ever since the 1500s, when an unknown printer
									took
								</p>
								<a href="#" class="font-weight-600 fs-16 text-dark"
								>Read more</a
								>
							</div>
							<div class="col-xl-6 col-lg-4 col-sm-6">
								<div class="border-bottom pb-3 mb-3">
									<h3 class="font-weight-600 mb-0">
										Social distancing is ..
									</h3>
									<p class="fs-13 text-muted mb-0">
										<span class="mr-2">Photo </span>10 Minutes ago
									</p>
									<p class="mb-0">
										Lorem Ipsum has been the industry's
									</p>
								</div>
								<div class="border-bottom pb-3 mb-3">
									<h3 class="font-weight-600 mb-0">
										Panic buying is forcing..
									</h3>
									<p class="fs-13 text-muted mb-0">
										<span class="mr-2">Photo </span>10 Minutes ago
									</p>
									<p class="mb-0">
										Lorem Ipsum has been the industry's
									</p>
								</div>
								<div class="border-bottom pb-3 mb-3">
									<h3 class="font-weight-600 mb-0">
										Businesses ask hundreds..
									</h3>
									<p class="fs-13 text-muted mb-0">
										<span class="mr-2">Photo </span>10 Minutes ago
									</p>
									<p class="mb-0">
										Lorem Ipsum has been the industry's
									</p>
								</div>
								<div>
									<h3 class="font-weight-600 mb-0">
										Tesla's California factory..
									</h3>
									<p class="fs-13 text-muted mb-0">
										<span class="mr-2">Photo </span>10 Minutes ago
									</p>
									<p class="mb-0">
										Lorem Ipsum has been the industry's
									</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="row">
							<div class="col-sm-6">
								<div class="card-title">
									Sport light
								</div>
								<div class="border-bottom pb-3">
									<div class="rotate-img">
										<img
										src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_17.jpg"
										alt="thumb"
										class="img-fluid"
										/>
									</div>
									<p class="fs-16 font-weight-600 mb-0 mt-3">
										Kaine: Trump Jr. may have
									</p>
									<p class="fs-13 text-muted mb-0">
										<span class="mr-2">Photo </span>10 Minutes ago
									</p>
								</div>
								<div class="pt-3 pb-3">
									<div class="rotate-img">
										<img
										src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_18.jpg"
										alt="thumb"
										class="img-fluid"
										/>
									</div>
									<p class="fs-16 font-weight-600 mb-0 mt-3">
										Kaine: Trump Jr. may have
									</p>
									<p class="fs-13 text-muted mb-0">
										<span class="mr-2">Photo </span>10 Minutes ago
									</p>
								</div>
							</div>
							<div class="col-sm-6">
								<div class="card-title">
									Celebrity news
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="border-bottom pb-3">
											<div class="row">
												<div class="col-sm-5 pr-2">
													<div class="rotate-img">
														<img
														src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_19.jpg"
														alt="thumb"
														class="img-fluid w-100"
														/>
													</div>
												</div>
												<div class="col-sm-7 pl-2">
													<p class="fs-16 font-weight-600 mb-0">
														Online shopping ..
													</p>
													<p class="fs-13 text-muted mb-0">
														<span class="mr-2">Photo </span>10
														Minutes ago
													</p>
													<p class="mb-0 fs-13">
														Lorem Ipsum has been
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="border-bottom pb-3 pt-3">
											<div class="row">
												<div class="col-sm-5 pr-2">
													<div class="rotate-img">
														<img
														src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_20.jpg"
														alt="thumb"
														class="img-fluid w-100"
														/>
													</div>
												</div>
												<div class="col-sm-7 pl-2">
													<p class="fs-16 font-weight-600 mb-0">
														Online shopping ..
													</p>
													<p class="fs-13 text-muted mb-0">
														<span class="mr-2">Photo </span>10
														Minutes ago
													</p>
													<p class="mb-0 fs-13">
														Lorem Ipsum has been
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="border-bottom pb-3 pt-3">
											<div class="row">
												<div class="col-sm-5 pr-2">
													<div class="rotate-img">
														<img
														src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_21.jpg"
														alt="thumb"
														class="img-fluid w-100"
														/>
													</div>
												</div>
												<div class="col-sm-7 pl-2">
													<p class="fs-16 font-weight-600 mb-0">
														Online shopping ..
													</p>
													<p class="fs-13 text-muted mb-0">
														<span class="mr-2">Photo </span>10
														Minutes ago
													</p>
													<p class="mb-0 fs-13">
														Lorem Ipsum has been
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="pt-3">
											<div class="row">
												<div class="col-sm-5 pr-2">
													<div class="rotate-img">
														<img
														src="<?php echo base_url('assets')?>/assets_berita/images/dashboard/home_22.jpg"
														alt="thumb"
														class="img-fluid w-100"
														/>
													</div>
												</div>
												<div class="col-sm-7 pl-2">
													<p class="fs-16 font-weight-600 mb-0">
														Online shopping ..
													</p>
													<p class="fs-13 text-muted mb-0">
														<span class="mr-2">Photo </span>10
														Minutes ago
													</p>
													<p class="mb-0 fs-13">
														Lorem Ipsum has been
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div> -->
</div>
</div>
<!-- main-panel ends -->
<!-- container-scroller ends -->

<!-- partial:partials/_footer.html -->
<footer>
	<div class="footer-top bg-warning">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<h4 class="text-white">
						<?php echo SITE_NAME ?>
					</h4>
					<p class="text-white">
						<?php echo $this->M_Website->tampil_footer_deskripsi()['isi_eng'] ?>
					</p>
				</div>
				<div class="col-lg-6">
					<h4 class="text-white">
						BUSSINESS WITH US
					</h4>
					<div class="d-flex flex-column">
                    <!--                             <a href="#" class="text-link">
                    Contact Us </a> -->
                    <?php foreach ($this->M_Website->tampil_logo_bisnis_footer() as $row => $value): ?>
                    	<a href="<?php echo $value['link'] ?>"><img class="icon-e-commerce" src="<?php echo base_url('main/assets/assets/img/logos/')?><?php echo $value['gambar'] ?>"></a>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer-bottom bg-warning">
	<div class="container">
		<div class="row d-flex justify-content-between">
			<div class="col-lg-4 text-lg-left text-white">Copyright © <?php echo SITE_NAME ?> <?php echo date('Y') ?></div>
			<div class="col-lg-4 d-flex justify-content-between">
				<a class="btn btn-light btn-social mx-2" href="https://web.facebook.com/coc0creative"><i class="fab fa-facebook-f"></i></a>
				<a class="btn btn-light btn-social mx-2" href="https://www.linkedin.com/in/firman-yusuf-989a9a203/"><i class="fab fa-linkedin-in"></i></a>
				<a class="btn btn-light btn-social mx-2" href="https://www.instagram.com/cococreative_/"><i class="fab fa-instagram"></i></a>
				<a class="btn btn-light btn-social mx-2" href=""><i class="fas fa-envelope"></i></a>
			</div>
			<div class="col-lg-4 text-lg-right">
				<a class="mr-3 text-white" href="#!">Privacy Policy</a>
				<a href="#!" class="text-white">Terms of Use</a>
			</div>
		</div>
	</div>
</div>
</footer>
<!-- partial -->
</div>
</div>
