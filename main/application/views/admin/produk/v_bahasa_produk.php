	<div class="container-fluid">
		<?php if (empty($bahasa_produk['id_jenis_produk_eng'])): ?>
			<form action="<?php echo base_url('produk/p_bahasa_produk') ?>" method="POST" enctype="multipart/form-data">
				<?php else: ?>
					<form action="<?php echo base_url('produk/p_edit_bahasa_produk') ?>" method="POST" enctype="multipart/form-data">
					<?php endif ?>

					<h4 class="text-center">Bahasa Produk</h4>

					<div class="card shadow mb-4">
						<!-- Card Body -->

						<div class="card-body">
							<?php echo $this->session->flashdata('message') ?>
							<div class="form-group row">
								<label for="staticEmail" class="col-sm-2 col-form-label">Nama Produk</label>

								<div class="col-sm-10" id="edit_nama_produk">
									<input type="text"  class="form-control"  ame="nama_produk" placeholder="Masukan Nama Produk" autocomplete="offoff" value="<?php echo $edit_produk['nama_jenis_produk'] ?>" readonly>
									<input type="text" ame="id_jenis_produk" value="<?php echo $edit_produk['id_jenis_produk'] ?>" hidden>
									<label for="staticEmail" class="col-sm-6 col-form-label text-danger font-weight-bold">Bahasa Inggris Nama Produk :</label>

									<div class="col-sm-10" id="edit_nama_produk">
										<?php if (empty($bahasa_produk['id_jenis_produk_eng'])): ?>
											<input type="text"  class="form-control"  name="nama_produk" placeholder="Masukan Nama Produk" autocomplete="off" value="">
											<?php else: ?>
												<input type="text"  class="form-control"  name="nama_produk" placeholder="Masukan Nama Produk" autocomplete="off" value="<?php echo $bahasa_produk['nama_jenis_produk'] ?>">
											<?php endif ?>
											<input type="text" name="id_jenis_produk" value="<?php echo $edit_produk['id_jenis_produk'] ?>" hidden>
											<div class="invalid-feedback">
												Nama Produk Harus Di Isi
											</div>
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label for="inputPassword" class="col-sm-2 col-form-label" >Keterangan</label>

									<div class="col-sm-10" id="edit_keterangan_jenis_produk">
										<textarea class="form-control" ame="keterangan_jenis_produk"  rows="6" placeholder="Masukan Keterangan Produk" readonly=""><?php echo $edit_produk['keterangan'] ?></textarea>
										<label for="inputPassword" class="col-sm-6 col-form-label text-danger font-weight-bold">Bahasa Inggris Keterangan :</label>

										<div class="col-sm-10" id="edit_keterangan_jenis_produk">
											<?php if (empty($bahasa_produk['id_jenis_produk_eng'])): ?>
												<textarea class="form-control" name="keterangan_jenis_produk"  rows="6" placeholder="Masukan Keterangan Produk" ></textarea>
												<?php else: ?>
													<textarea class="form-control" name="keterangan_jenis_produk"  rows="6" placeholder="Masukan Keterangan Produk" ><?php echo $bahasa_produk['keterangan'] ?></textarea>
												<?php endif ?>
												<div class="invalid-feedback">
													Keterangan Harus Di Isi
												</div>
											</div>
										</div>
									</div>

									<div class="form-group row">
										<label for="inputPassword" class="col-sm-2 col-form-label">Foto Utama</label>

										<div class="col-sm-10" id="foto_utama">
											<img class="gambar-tabel" src="<?php echo base_url('assets/assets/img/upload/produk/')?><?php echo $edit_produk['gambar'] ?>" alt="" class="img-thumbnail">
							<!-- <div class="invalid-feedback">
								Foto Utama Harus Di Isi
							</div> -->
						</div>
					</div>
				</div>

			</div>

			<h4 class="text-center">Variasi</h4>

			<div class="card shadow mb-4">
				<!-- Card Body -->
				<div class="card-body">
					<div id="varisi">
						<div class="card shadow mb-4 formutamavariasi" id="formutamavariasi" >
							<div class="card-header bg-light py-3 d-flex flex-row align-items-center justify-content-between"><h6 class="m-0 font-weight-bold text-primary">Variasi </h6>
								<div class="dropdown no-arrow"><a class="" href="#" role="button" id="variasihapus" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-times text-gray-400"></i></a></div>
							</div>

							<div class="card-body">
								<div class="form-group row">
									<label for="staticEmail" class="col-sm-2 col-form-label"></label>
									<div class="col-sm-10">
										<div class="form-group row">
											<label for="staticEmail" class="col-sm-6 col-form-label">Nama Variasi</label>
											<div class="col-sm-10" id="nama_variasi">
												<input type="text" name="id_parameter_ukuran" value="<?php echo $edit_produk['id_parameter_ukuran'] ?>" hidden>
												<input type="text" ame="nama_parameter_ukuran"  class="form-control nama_variasi"  placeholder="Masukkan Nama Variasi, contoh: warna, dll." autocomplete="off" value="<?php echo $edit_produk['nama_parameter'] ?>" readonly>
												<label for="staticEmail" class="col-sm-6 col-form-label font-weight-bold text-danger">Bahasa Inggris Nama Variasi</label>
												<div class="col-sm-10" id="nama_variasi">
													<?php if (empty($bahasa_produk['id_jenis_produk_eng'])): ?>
														<input type="text" name="nama_parameter_ukuran"  class="form-control nama_variasi"  placeholder="Masukkan Nama Variasi, contoh: warna, dll." autocomplete="off" value="">
														<?php else: ?>
															<input type="text" name="nama_parameter_ukuran"  class="form-control nama_variasi"  placeholder="Masukkan Nama Variasi, contoh: warna, dll." autocomplete="off" value="<?php echo $bahasa_produk['nama_parameter'] ?>">
														<?php endif ?>
														<div class="invalid-feedback">
															Nama Variasi Harus Di Isi
														</div>
													</div>
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
											<label for="staticEmail" class="col-sm-2 col-form-label asd">Informasi Variasi</label>
											<div class="input-group mb-3 col-sm-10">
												<table class="table text-center table-bordered">
													<thead id="" class="thead-dark">
														<tr id="">
															<th id="th_nama_varias">Pilihan</th>
															<th id="th_nama_varias">Pilihan Bahasa Inggris</th>
															<th>Harga</th>
															<th>Keterangan Variasi Produk</th>
															<th>Keterangan Variasi Produk Bahasa Inggris</th>
															<th>Foto Variasi <br><small class="text-white">*Tidak di isi jika tidak mempunyai foto variasi</small></th>
														</tr>
													</thead>
													<tbody id="tbody_edit">
														<?php foreach ($this->M_Produk->ukuran($edit_produk['id_jenis_produk']) as $key => $value): ?>
															<tr id="tr_pilihan">

																<td id="td_pilihan"><input type="text" class="form-control" value="<?php echo $value['isi_pilihan_ukuran'] ?>" ame="pilihan_variasi[]" readonly><input type="text" name="id_pilihan_ukuran[]" value="<?php echo $value['id_pilihan_ukuran'] ?>" hidden></td>
																<td id="td_pilihan">
																	<?php if (empty($bahasa_produk['id_jenis_produk_eng'])): ?>
																		<input type="text" class="form-control" name="pilihan_variasi[]">
																		<?php else: ?>
																			<input type="text" class="form-control" value="<?php echo $this->M_Produk->bahasa_ukuran($value['id_pilihan_ukuran'])['isi_pilihan_ukuran'] ?>" name="pilihan_variasi[]">
																		<?php endif ?>
																		
																		<td>
																			<div class="input-group mb-3">
																				<div class="input-group-prepend">
																					<span class="input-group-text border-0" id="basic-addon1">Rp.</span>
																				</div>
																				<input type="text" class="harga form-control border-right-0 border-left-0 border-top-0" placeholder="Masukan Harga" aria-label="Username" aria-describedby="basic-addon1" ame="harga_variasi[]" autocomplete="off" value="<?php echo $value['harga'] ?>" readonly>
																				<div class="invalid-feedback">
																					Harga Variasi Harus Di Isi
																				</div> 
																			</div>

																		</td>
																		<td><textarea ame="keterangan_variasi_produk[]" id="" cols="30" rows="5" class="form-control" readonly><?php echo $value['keterangan_variasi_produk'] ?></textarea></td>
																		<td>
																			<?php if (empty($bahasa_produk['id_jenis_produk_eng'])): ?>
																				<textarea name="keterangan_variasi_produk[]" id="" cols="30" rows="5" class="form-control" ></textarea>
																				<?php else: ?>
																					<textarea name="keterangan_variasi_produk[]" id="" cols="30" rows="5" class="form-control" ><?php echo $this->M_Produk->bahasa_ukuran($value['id_pilihan_ukuran'])['keterangan_variasi_produk'] ?></textarea>
																				<?php endif ?>

																			</td>
																			<td>
																				<img class="gambar-tabel mb-2" src="<?php echo base_url('assets/assets/img/upload/variasi_produk/')?><?php echo $value['gambar_variasi'] ?>" alt="" class="img-thumbnail"></td>
																			</tr>
																		<?php endforeach ?>
																	</tbody>

																</table>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<nav class="navbar navbar-light bg-light justify-content-end fixed-bottom">
											<button type="submit" id="simpan" class="btn btn-primary btn-sm mr-3">Simpan</button>
											<a href="<?php echo base_url('produk') ?>" class="btn btn-secondary btn-sm">Batal</a>
										</nav>
									</form>
								</div>