<?php foreach ($jenis_produk as $row => $value): ?>
	<div class="modal fade" id="<?php echo $value['id_jenis_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title title" id="title" data-id="<?php echo $value['id_jenis_produk'] ?>"><?php echo $value['nama_jenis_produk'] ?></h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="container">
						<div class="row">
							<div class="card-group w-100">
								<div class="card">
									<img class="card-img-top" src="<?php echo base_url('assets/assets/img/turus/turus3.jpg') ?>" alt="">
								</div>
								<div class="card">
									<div class="card-body">
										<h5 class="display-2">
										</h5>
										<p class="card-text text-dark harga" id="harga" style="font-size: 20px;">
											
										</p>
										<?php if (get_cookie('lang_is')=='in'): ?>
											<p class="card-text">
												Pilih Tipe
											</p>
											<?php else: ?>
												<p class="card-text">
													Choose Type
												</p>
											<?php endif ?>

											<form action="<?php echo base_url('Order') ?>" method="POST">
												<input type="text" class="form-control" value="<?php echo $value['nama_jenis_produk'] ?>" name="product" readonly="" hidden>
												<div class="input-group mb-3">
													<div class="input-group-prepend">
														<?php foreach ($this->M_Produk->tampil_parameter_ukuran($value['id_jenis_produk']) as $key => $value): ?>
															<label class="input-group-text" for="inputGroupSelect01"><?php echo $value['nama_parameter'] ?></label>
														<?php endforeach ?>

													</div>
													<select class="custom-select size" id="size" name="size">
														<?php if (get_cookie('lang_is')=='in'): ?>
															<option selected>Pilih...</option>
															<?php else: ?>
																<option selected>Choose...</option>
															<?php endif ?>

															<?php foreach ($this->M_Produk->ukuran($value['id_jenis_produk']) as $row => $value): ?>
																<option value="<?php echo $value['harga'] ?>"><?php echo $value['isi_pilihan_ukuran'] ?></option>
															<?php endforeach ?>

														</select>
													</div>
													<div class="form-group w-25 mt-5">
														<?php if (get_cookie('lang_is')=='in'): ?>
															<label for="Jumlah">Jumlah</label>
															<?php else: ?>
																<label for="Jumlah">Qty</label>
															<?php endif ?>

															<input type="number" name="qty" class="form-control qty" id="qty">
														</div>
														<?php if (get_cookie('lang_is')=='in'): ?>
															<button class="btn btn-outline-success w-100 btn-lg" type="submit" name="order-now">PESAN SEKARANG</button>
															<button class="btn btn-primary w-100 btn-lg mt-2" name="add-chart">TAMBAH KE KERANJANG <i class="fas fa-shopping-cart"></i>+</button>
															<?php else: ?>
																<button class="btn btn-outline-success w-100 btn-lg" type="submit" name="order-now">ORDER NOW</button>
																<button class="btn btn-primary w-100 btn-lg mt-2" name="add-chart">ADD TO CHART <i class="fas fa-shopping-cart"></i>+</button>
															<?php endif ?>

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