
<div class="container-fluid">
	<!-- Page Heading -->
	<h1 class="h3 mb-2 text-gray-800"><?php echo $title ?> <?php echo $nama_jenis_produk['nama_jenis_produk'] ?></h1>
	<!-- DataTales Example -->
	<div class="card shadow mb-4">
		<div class="card-header py-3">
			<h6 class="m-0 font-weight-bold text-primary"><a href="<?php echo base_url('produk') ?>" class="btn btn-danger"><i class="fas fa-arrow-left"></i>Kembali</a></h6>
		</div>
		<div class="card-body">
			<button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahvariasiproduk">Tambah Variasi Produk <i class="fas fa-folder-plus"></i></button>
			<div class="table-responsive">
				<?php echo $this->session->flashdata('message') ?>
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>
							<th>Nama Produk</th>
							<th>Gambar</th>
							<th>Keterangan</th>
							<th>Waktu Upload</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Nama Produk</th>
							<th>Gambar</th>
							<th>Keterangan</th>
							<th>Waktu Upload</th>
							<th>Aksi</th>
						</tr>
					</tfoot>
					<tbody>
						<?php foreach ($variasi_produk as $row => $value): ?>
							<tr>
								<td><?php echo $value['isi_pilihan_ukuran'] ?></td>
								<td>
									<img class="gambar-tabel img-thumbnail" src="<?php echo base_url('assets/assets/img/upload/variasi_produk/')?><?php echo $value['gambar_variasi'] ?>" alt="">
								</td>
								<td>
									<p class="keterangan-produk-tabel"><?php echo $value['keterangan_variasi_produk'] ?></p>
								</td>
								<td><?php echo date('l, d F  Y',$value['waktu_upload'])  ?></td>
<!-- 								<td>
									<div class="btn-group">
										<a class="btn badge badge-primary" data-toggle="modal" data-target="#vp<?php echo $value['id_produk'] ?>">Edit</a>
										<div class="modal fade" id="vp<?php echo $value['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
											<div class="modal-dialog modal-dialog-centered" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" id="exampleModalLongTitle">Edit Produk</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">&times;</span>
														</button>
													</div>
													<form action="<?php echo base_url('produk/edit_variasi_produk') ?>" method="POST" enctype="multipart/form-data">
														<div class="modal-body">
															<div class="form-group">
																<input type="text" name="id_jenis_produk" value="<?php echo $value['id_jenis_produk'] ?>" hidden>
																<input type="text" name="id_produk" value="<?php echo $value['id_produk'] ?>" hidden>
																<label for="nama_produk">Nama Produk</label>
																<input type="text" class="form-control" id="nama_produk" placeholder="Masukan Nama Produk" name="nama_produk" value="<?php echo $value['nama_produk'] ?>">
															</div>
															<div class="form-group">
                                                                <label for="nama_produk">Gambar Lama</label>
                                                                <img src="<?php echo base_url('assets/assets/img/upload/variasi_produk/')?><?php echo $value['gambar_variasi'] ?>" class="gambar-tabel" alt="">
                                                            </div>
															<div class="form-group">
																<input type="text" name="gambar_lama" value="<?php echo $value['gambar_variasi'] ?>" hidden>
																<label for="gambar">Gambar</label>
																<input type="file" class="form-control" placeholder="Gambar" name="gambar">
															</div>
															<div class="form-group">
																<label for="exampleFormControlTextarea1">Keterangan</label>
																<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"><?php echo $value['keterangan'] ?></textarea>
															</div>
															<input type="text" value="<?php echo $this->uri->segment(3) ?>" name="id_jenis_produk" hidden>
														</div>
														<div class="modal-footer">
															<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
															<button type="submit" class="btn btn-primary">Edit</button>
														</div>
													</form>
												</div>
											</div>
										</div>
										<a class="btn badge badge-danger" data-toggle="modal" data-target="#hv<?php echo $value['id_produk']?>">Hapus</a>
										<div class="modal fade" id="hv<?php echo $value['id_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
											aria-hidden="true">
											<div class="modal-dialog" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title">Yakin mau menghapus <?php echo $value['nama_produk'] ?>?</h5>
														<button class="close" type="button" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>
													</div>
													<div class="modal-body">Pilih Hapus untuk menghapus.</div>
													<div class="modal-footer">
														<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
														<a class="btn btn-primary" href="<?php echo base_url('produk/hapus_variasi_produk/'.$this->uri->segment(3).'/'.$value['id_produk']) ?>">Hapus</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</td> -->
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content