<?php if (get_cookie('lang_is')=== 'en'): ?>
	<!-- Modal -->
	<?php foreach ($jenis_produk as $row => $value): ?>
		<div class="modal fade" id="<?php echo $value['id_jenis_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLongTitle"><?php echo $value['nama_jenis_produk'] ?></h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="container">
							<div class="row">
								<div class="card-group w-100">
									<div class="card">
										<img class="card-img-top" src="<?php echo base_url('assets/assets/img/upload/produk/');echo $value['gambar'] ?>" alt="">
									</div>
									<div class="card">
										<div class="card-body">
											<h4 id="harga"></h4>
											<p class="card-text text-primary" style="font-size: 20px;">
											</p>
											<p class="card-text">
												Choose Type
											</p>
											<form action="<?php echo base_url('Order') ?>" method="POST">
												<input type="text" class="form-control" value="Plant Support" name="product" readonly="" hidden>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<label class="input-group-text" for="inputGroupSelect01">Size</label>
													</div>
													<select class="custom-select" name="size" id="size">
														<option selected>Choose...</option>
														<?php 
														$ukuran=$this->M_Produk->ukuran($value['id_jenis_produk']);
														?>
														<?php foreach ($ukuran as $row => $ukuran): ?>
															<option value="<?php echo $ukuran['isi'] ?>"><?php echo $ukuran['isi'] ?><?php echo $ukuran['satuan'] ?></option>
														<?php endforeach ?>
													</select>
												</div>
												<div class="form-group w-25 mt-5">
													<label for="Jumlah">Quantity</label>
													<input type="number" name="qty" class="form-control" id="qty">
												</div>
												<button class="btn btn-outline-success w-100 btn-lg" type="submit" name="order-now">ORDER NOW</button>
												<button class="btn btn-primary w-100 btn-lg mt-2" name="add-chart">ADD TO CHART <i class="fas fa-shopping-cart"></i>+</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach ?>
<?php endif ?>

<!-- Button trigger modal -->
<!-- Modal -->
<?php foreach ($carousel as $row => $value): ?>
	<div class="modal fade" id="carousel<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-dark" id="exampleModalLabel">Ganti Carousel</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/edit_carousel') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img class="gambar-edit-carousel" src="<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>" alt="">
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<label for="exampleFormControlFile1">Masukan Gambar Baru</label>
									<input type="text" name="id" value="<?php echo $value['id'] ?>" hidden>
									<input type="text" name="gambar_lama" value="<?php echo $value['gambar'] ?>" hidden>
									<input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Judul</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="judul"><?php echo $value['judul'] ?></textarea>
										<label for="exampleFormControlTextarea1">Tagline</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Tagline" name="tagline"><?php echo $value['tagline'] ?></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End Of Edit -->

<!-- Tambah Carousel -->
<?php foreach ($carousel as $row => $value): ?>
	<div class="modal fade" id="tambahcarousel<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Carousel</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/tambah_carousel') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<label for="exampleFormControlFile1" class="text-center w-100">Masukan Gambar Baru</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
								<hr>
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<h5>Bahasa Indonesia</h5>
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Judul</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="judul"></textarea>
										<label for="exampleFormControlTextarea1">Tagline</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Tagline" name="tagline"></textarea>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<h5>Bahasa Inggris</h5>
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Title</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Judul" name="title"></textarea>
										<label for="exampleFormControlTextarea1">Tagline</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Tagline" name="tagline2"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End of tambah carousel -->

<!-- Tambah Trust -->
<?php foreach ($trust as $row => $value): ?>
	<div class="modal fade" id="tambahtrust<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Trust</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/tambah_trust') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<div class="form-group text-dark">
									<h5>Bahasa Indonesia</h5>
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Judul</label>
										<input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="judul">
										<label for="exampleFormControlTextarea1">Icon</label>
										<input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Icon" name="icon">
										<label for="exampleFormControlTextarea1">Isi</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Isi" name="isi"></textarea>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<h5>Bahasa Inggris</h5>
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Title</label>
										<input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Title" name="title">
										<label for="exampleFormControlTextarea1">Contents</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Contens" name="contents"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End of tambah trust -->

<!-- Edit  -->

<?php foreach ($trust as $row => $value): ?>
	<div class="modal fade" id="edittrust<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<?php if (get_cookie('lang_is')=='in'): ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Trust ( Indonesia )</h5>
					<?php else: ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Trust ( Bahasa Inggris )</h5>
					<?php endif ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/edit_trust') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<div class="form-group text-dark">
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Judul</label>
										<input type="text" name="id" value="<?php echo $value['id'] ?>" hidden>
										<input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="judul" value="<?php echo $value['judul'] ?>">
										<label for="exampleFormControlTextarea1">Icon</label>
										<input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="icon" value="<?php echo $value['icon'] ?>">
										<label for="exampleFormControlTextarea1">Isi</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Isi" name="isi"><?php echo $value['isi'] ?></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>

<!-- End of Trust -->


<!-- Edit Deskripsi Produk -->
<?php foreach ($desproduk as $row => $value): ?>
	<div class="modal fade" id="editdesproduk<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<?php if (get_cookie('lang_is')=='in'): ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Produk Kami ( Indonesia )</h5>
					<?php else: ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Our Produk (Bahasa Inggris)</h5>
					<?php endif ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/edit_desproduk') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img class="gambar-edit-carousel" src="<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>" alt="">
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<label for="exampleFormControlFile1">Masukan Gambar Baru</label>
									<input type="text" name="id" value="<?php echo $value['id'] ?>" hidden>
									<input type="text" name="gambar_lama" value="<?php echo $value['gambar'] ?>" hidden>
									<input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Judul</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="judul"><?php echo $value['judul'] ?></textarea>
										<label for="exampleFormControlTextarea1">Tagline</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Isi" name="isi"><?php echo $value['isi'] ?></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End of Edit Deskripsi Produk -->

<!-- Edit Top Image -->
<?php foreach ($top_img as $row => $value): ?>
	<div class="modal fade" id="edittopimage<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<?php if (get_cookie('lang_is')=='in'): ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Ini ( Indonesia )</h5>
					<?php else: ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Ini (Bahasa Inggris)</h5>
					<?php endif ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/edit_topimage') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img class="gambar-edit-carousel" src="<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>" alt="">
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<label for="exampleFormControlFile1">Masukan Gambar Baru</label>
									<input type="text" name="id" value="<?php echo $value['id'] ?>" hidden>
									<input type="text" name="gambar_lama" value="<?php echo $value['gambar'] ?>" hidden>
									<input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Judul</label>
										<input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="judul" value="<?php echo $value['judul'] ?>">
										<input type="text" name="page" value="<?php echo $this->uri->segment(2) ?>" hidden>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End Of Edit -->

<!-- Edit Top About -->
<?php foreach ($about as $row => $value): ?>
	<div class="modal fade" id="about<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<?php if (get_cookie('lang_is')=='in'): ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Profil Kami ( Indonesia )</h5>
					<?php else: ?>
						<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Our Profile (Bahasa Inggris)</h5>
					<?php endif ?>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/edit_about') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img class="gambar-edit-carousel" src="<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>" alt="">
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<label for="exampleFormControlFile1">Masukan Gambar Baru</label>
									<input type="text" name="id" value="<?php echo $value['id'] ?>" hidden>
									<input type="text" name="gambar_lama" value="<?php echo $value['gambar'] ?>" hidden>
									<input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Judul</label>
										<input class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="judul" value="<?php echo $value['judul'] ?>">
										<label for="exampleFormControlTextarea1">Isi</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Isi" name="isi"><?php echo $value['isi'] ?></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End Of Edit -->

<!-- Edit Link Video -->
<div class="modal fade" id="editlinkvideo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<?php if (get_cookie('lang_is')=='in'): ?>
					<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Link Video</h5>
				<?php else: ?>
					<h5 class="modal-title text-dark" id="exampleModalLabel">Edit Link Video</h5>
				<?php endif ?>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form method="POST" action="<?php echo base_url('website/edit_link_video') ?>" enctype="multipart/form-data">
				<div class="modal-body">
					<div class="row">
						<div class="col">
							<div class="form-group text-dark">
								<div class="form-group mt-2">
									<label for="exampleFormControlTextarea1">Masukan Link</label>
									<input class="form-control" placeholder="Masukan Link" name="link">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary" clicked>Save changes</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- End of Trust -->

<!-- Tambah Testimoni-->
<?php foreach ($testimonial as $row => $value): ?>
	<div class="modal fade" id="tambahtestimoni" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-xl" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-dark" id="exampleModalLabel">Tambah Testimoni</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/tambah_testimoni') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-12">
								<label for="exampleFormControlFile1" class="text-center w-100">Masukan Gambar Baru</label>
								<input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
								<hr>
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<h5>Bahasa Indonesia</h5>
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Isi Testimoni</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Masukan Judul" name="isitestimoni"></textarea>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<h5>Bahasa Inggris</h5>
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Testimonial</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Judul" name="isitestimonial"></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" clicked>Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End of tambah carousel -->

<!-- Modal Edit Testimonial -->
<?php foreach ($testimonial as $row => $value): ?>
	<div class="modal fade" id="edittestimoni<?php echo $value['id_testimoni'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title text-dark" id="exampleModalLabel">Ganti Carousel</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form method="POST" action="<?php echo base_url('website/edit_testimoni') ?>" enctype="multipart/form-data">
					<div class="modal-body">
						<div class="row">
							<div class="col">
								<img class="gambar-edit-carousel" src="<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>" alt="">
							</div>
							<div class="col">
								<div class="form-group text-dark">
									<label for="exampleFormControlFile1">Masukan Gambar Baru</label>
									<input type="text" name="id_testimoni" value="<?php echo $value['id_testimoni'] ?>" hidden>
									<input type="text" name="gambar_lama" value="<?php echo $value['gambar'] ?>" hidden>
									<input type="file" class="form-control-file" id="exampleFormControlFile1" name="gambar">
									<div class="form-group mt-2">
										<label for="exampleFormControlTextarea1">Isi</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="8" placeholder="Masukan Judul" name="isi"><?php echo $value['isi'] ?></textarea>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
						<button type="submit" class="btn btn-primary" clicked>Simpan Edit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php endforeach ?>
<!-- End Of Edit Testimonial -->