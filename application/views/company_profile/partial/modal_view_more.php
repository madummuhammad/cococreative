<?php foreach ($view_more as $row => $value): ?>
<div class="modal fade" id="vm<?php echo $value['id_pilihan_ukuran'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLongTitle"><?php echo $value['isi_pilihan_ukuran'] ?></h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="container">
					<div class="row">
						<div class="card-group w-100">
							<div class="card">
								<img class="card-img-top" src="<?php echo base_url('main') ?>/assets/assets/img/upload/variasi_produk/<?php echo $value['gambar_variasi'] ?>" alt="">
							</div>
							<div class="card">
								<div class="card-body">
									<p class="text-dark">Keterangan :</p>
									<p class="mb-0 text-muted text-justify keterangan-produk"><?php echo $value['keterangan_variasi_produk'] ?></p>
<!-- 									<h4 id="harga"></h4>
									<p class="card-text text-primary" style="font-size: 20px;">
									</p>
									<p class="card-text">
										Type
									</p> -->
									<form action="<?php echo base_url('Order') ?>" method="POST">
										<input type="text" class="form-control" value="Plant Support" name="product" readonly="" hidden>
<!-- 										<div class="input-group mb-3">
											<div class="input-group-prepend">
												<label class="input-group-text" for="inputGroupSelect01">Size</label>
											</div>
											<select class="custom-select" name="size" id="size">
												<option value="<?php echo $value['nama_produk'] ?>"><?php echo $value['nama_produk'] ?></option>
											</select>
										</div> -->
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