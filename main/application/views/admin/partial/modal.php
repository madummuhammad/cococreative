<!-- Modal Tambah Produk -->
<div class="modal fade" id="tambahproduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('produk/tambahproduk') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="id_produk">ID Produk</label>
            <input type="text" class="form-control" id="id_produk" placeholder="Masukn ID Barang" name="id_produk">
          </div>
          <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" placeholder="Masukan Nama Produk" name="nama_produk">
          </div>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar" name="gambar">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="1" name="variasi">
            <label class="form-check-label" for="variai-input">
              Punya Variasi?
            </label>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Variasi Produk -->
<div class="modal fade" id="tambahvariasiproduk" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('produk/tambah_variasi_produk') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="nama_produk">Nama Produk</label>
            <input type="text" class="form-control" id="nama_produk" placeholder="Masukan Nama Produk" name="nama_produk">
          </div>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar" name="gambar">
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Keterangan</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="keterangan"></textarea>
          </div>
          <input type="text" value="<?php echo $this->uri->segment(3) ?>" name="id_jenis_produk" hidden>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- Modal Tambah User -->
<div class="modal fade" id="tambahuser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Tambah User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url('admin/tambah_user') ?>" method="POST" enctype="multipart/form-data">
        <div class="modal-body">
          <div class="form-group">
            <label for="id_produk">Nama User</label>
            <input type="text" class="form-control" id="id_produk" placeholder="Masukan Nama User" name="nama_user">
            <small class="text-danger">*Nama Harus Di Isi</small>
          </div>
          <div class="form-group">
            <label for="nama_produk">Email</label>
            <input type="text" class="form-control" id="nama_produk" placeholder="Masukan Email User" name="email">
            <small class="text-danger">*Email Harus Di Isi</small>
          </div>
          <div class="form-group">
            <label for="gambar">Gambar</label>
            <input type="file" class="form-control" placeholder="Gambar" name="gambar">
          </div>
          <?php foreach ($role_access as $row => $value): ?>
            <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" id="<?php echo $value['id'] ?>" name="role_access" class="custom-control-input" value="<?php echo $value['id'] ?>">
              <label class="custom-control-label" for="<?php echo $value['id'] ?>"><?php echo $value['nama_role'] ?></label>

            </div>
          <?php endforeach ?>
          <br>
          <small class="text-danger">*Harus memilih hak akses</small>
          <hr>
          <div class="form-group">
            <label for="gambar" class="text-dark font-wight-bold">Keterangan :</label>
            <p class="text-danger font-wight-bold">Password user adalah huruf kecil nama user dan tanpa spasi</p>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>