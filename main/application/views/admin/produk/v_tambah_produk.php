<div class="container-fluid">
	<form action="<?php echo base_url('produk/tambahproduk') ?>" method="POST" enctype="multipart/form-data">
		<h4 class="text-center">Informasi Produk</h4>

		<div class="card shadow mb-4">
			<!-- Card Body -->

			<div class="card-body">

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Nama Produk</label>

					<div class="col-sm-10" id="nama_produk">
						<input type="text"  class="form-control"  name="nama_produk" placeholder="Masukan Nama Produk" autocomplete="offoff">
						<div class="invalid-feedback">
							Nama Produk Harus Di Isi
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Keterangan</label>

					<div class="col-sm-10" id="keterangan_jenis_produk">
						<textarea class="form-control" name="keterangan_jenis_produk"  rows="6" placeholder="Masukan Keterangan Produk"></textarea>
						<div class="invalid-feedback">
							Keterangan Harus Di Isi
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Foto Utama</label>

					<div class="col-sm-10" id="foto_utama">
						<input type="file"  class="form-control" id="" name="foto_utama" placeholder="Masukan Nama Produk" autocomplete="off" >
						<div class="invalid-feedback">
							Foto Utama Harus Di Isi
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Foto Variasi</label>

					<div class="col-sm-10">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="view_more" class="custom-control-input" id="customCheck1" value="1" autocomplete="off">
							<label class="custom-control-label" for="customCheck1">Tampilkan Foto Variasi Di Website?</label>
						</div>
					</div>
				</div>


			</div>

		</div>

		<h4 class="text-center">Variasi</h4>

		<div class="card shadow mb-4">
			<!-- Card Body -->

			<div class="card-body">
				<div id="variasi">
					<div class="card shadow mb-4 formutamavariasi" id="formutamavariasi" >
						<div class="card-header bg-light py-3 d-flex flex-row align-items-center justify-content-between"><h6 class="m-0 font-weight-bold text-primary">Variasi </h6>
							<div class="dropdown no-arrow"><a class="" href="#" role="button" id="variasihapus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-times text-gray-400"></i></a></div>
						</div>

						<div class="card-body">
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label"></label>
								<div class="col-sm-10">
									<div class="form-group row">
										<label for="staticEmail" class="col-sm-2 col-form-label">Nama Variasi</label>
										<div class="col-sm-10" id="nama_variasi">
											<input type="text" name="nama_variasi"  class="form-control nama_variasi"  placeholder="Masukkan Nama Variasi, contoh: warna, dll." autocomplete="off">
											<div class="invalid-feedback">
												Nama Variasi Harus Di Isi
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label for="staticEmail" class="col-sm-2 col-form-label">Pilihan</label>
										<div class="col-sm-10" id="inputpilihanvariasi0">
											<div class="input-group mb-3">
												<input type="text" name="pilihan_variasi[]" class="form-control pilihan_variasi show" placeholder="Masukkan Pilihan Variasi, contoh: Merah, dll" aria-label="Recipients username" aria-describedby="basic-addon2" autocomplete="off">
												<div class="input-group-append">
													<button class="btn btn-outline-secondary variasipilihan" type="button"><i class="far fa-trash-alt"></i></button>
												</div>
												<div class="invalid-feedback">
													Pilihan Variasi Harus Di Isi
												</div> 
											</div>
										</div>
										<label for="staticEmail" id="label_tambah_pilihan" class="col-sm-2 col-form-label"></label>
										<div class="col-sm-10">
											<button class="btn btn-outline-primary w-100" type="button" id="tambahpilihan"><i class="fas fa-plus-circle"></i> Tambah Pilihan</button>
										</div>
									</div>
								</div>
							</div>
							<p class="nomor" style="display:none">asdf</p></div>
						</div>
						<div class="card shadow mb-4" id="informasi_harga_variasi">
							<!-- Card Body -->
							<div class="card-body">
								<div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label asd">Informasi Harga</label>

									<div class="input-group mb-3 col-sm-10">
										<input type="text" class="form-control" id="input_harga_semua" placeholder="Masukan Harga Untuk Semua" aria-label="Recipient's username" aria-describedby="basic-addon2" autocomplete="off">

										<div class="input-group-append">
											<button class="btn btn-outline-secondary" id="tombol_harga" type="button">Terapkan Ke Semua</button>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label asd">Informasi Variasi</label>
									<div class="input-group mb-3 col-sm-10">
										<table class="table text-center table-bordered">
											<thead id="" class="thead-dark">
												<tr id="">
													<th id="th_nama_variasi">Nama Variasi</th>
													<th>Harga</th>
													<th>Keterangan Variasi Produk</th>
													<th>Foto Variasi <br><small class="text-danger">*Tidak di isi jika tidak mempunyai foto variasi</small></th>
												</tr>
											</thead>
											<tbody id="tbody">
												<tr id="tr_pilihan0">
													<td id="td_pilihan0">Pilihan</td>
													<td><div class="input-group mb-3">
														<div class="input-group-prepend">
															<span class="input-group-text border-0" id="basic-addon1">Rp.</span>
														</div>
														<input type="text" class="harga form-control border-right-0 border-left-0 border-top-0" placeholder="Masukan Harga" aria-label="Username" aria-describedby="basic-addon1" name="harga_variasi[]" autocomplete="off">
														<div class="invalid-feedback">
															Harga Variasi Harus Di Isi
														</div> 
													</div>
													
												</td>
												<td><textarea name="keterangan_variasi_produk[]" id="" cols="30" rows="5" class="form-control"></textarea></td>
												<td><input type="file" class="form-control-file" name="gambar_variasi[]" autocomplete="off"></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-light bg-light justify-content-end fixed-bottom">
				<button type="button" id="simpan" class="btn btn-primary btn-sm mr-3">Simpan</button>
				<button type="button" class="btn btn-secondary btn-sm">Batal</button>
			</nav>
		</form>
	</div>