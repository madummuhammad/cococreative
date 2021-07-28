<div class="container-fluid">
	<form action="<?php echo base_url('berita/p_tambah_berita') ?>" method="POST" enctype="multipart/form-data">
		<h4 class="text-center">Tulis Berita</h4>

		<div class="card shadow mb-4">
			<!-- Card Body -->

			<div class="card-body">

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Judul Berita</label>

					<div class="col-sm-10" id="nama_produk">
						<input type="text"  class="form-control"  name="judul_berita" placeholder="Masukan Judul Berita" autocomplete="off">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Foto</label>

					<div class="col-sm-10" id="foto_utama">
						<input type="file"  class="form-control" id="" name="gambar" placeholder="Masukan Gambar" autocomplete="off" >
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Headline</label>

					<div class="col-sm-10">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" name="headline" class="custom-control-input" id="customCheck1" value="1" autocomplete="off">
							<label class="custom-control-label" for="customCheck1">Jadikan Headline?</label>
						</div>
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Isi Berita</label>
					<div class="col-sm-10" id="keterangan_jenis_produk">
						<textarea class="ckeditor" id="ckeditor" name="isi_berita"></textarea>
					</div>
				</div>

			</div>
			<nav class="navbar navbar-light bg-light justify-content-end ">
				<button type="submit" id="simpan" class="btn btn-primary btn-sm mr-3">Simpan</button>
			</nav>
		</div>

	</form>
</div>