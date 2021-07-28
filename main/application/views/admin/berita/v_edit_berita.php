<div class="container-fluid">
	<form action="<?php echo base_url('berita/p_edit_berita') ?>" method="POST" enctype="multipart/form-data">
		<h4 class="text-center">Edit Berita</h4>

		<div class="card shadow mb-4">
			<!-- Card Body -->

			<div class="card-body">

				<div class="form-group row">
					<label for="staticEmail" class="col-sm-2 col-form-label">Judul Berita</label>

					<div class="col-sm-10" id="nama_produk">
						<input type="text"  class="form-control"  name="judul_berita" placeholder="Masukan Judul Berita" autocomplete="off" value="<?php echo $berita['judul'] ?>">
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Foto Baru</label>

					<div class="col-sm-10" id="foto_utama">
						<input type="text" name="gambar_lama" value="<?php echo $berita['gambar'] ?>" hidden>
						<input type="text" name="id_news" value="<?php echo $berita['id_news'] ?>" hidden>
						<input type="file"  class="form-control" id="" name="gambar" placeholder="Masukan Gambar" autocomplete="off" >
					</div>
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Foto Lama</label>
					<img class="gambar-tabel" src="<?php echo base_url('assets/assets/img/upload/berita/')?><?php echo $berita['gambar'] ?>" alt="" class="img-thumbnail">
				</div>

				<div class="form-group row">
					<label for="inputPassword" class="col-sm-2 col-form-label">Isi Berita</label>
					<div class="col-sm-10" id="keterangan_jenis_produk">
						<textarea class="ckeditor" id="ckeditor" name="isi_berita"><?php echo $berita['isi'] ?></textarea>
					</div>
				</div>

			</div>
			<nav class="navbar navbar-light bg-light justify-content-end ">
				<button type="submit" id="simpan" class="btn btn-primary btn-sm mr-3">Simpan Perubahan</button>
			</nav>
		</div>

	</form>
</div>