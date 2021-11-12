
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 as">Data Produk</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
            <button class="btn btn-square btn-outline-primary" data-toggle="modal" data-target="#tambah_tim"><i class="fas fa-plus-square" ></i></button>
            <!-- The Modal -->
            <div class="modal fade" id="tambah_tim">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body">
                            <form action="<?= base_url('tim/tambah') ?>" method="POST" enctype="multipart/form-data">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tim</h5>
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                  <!-- Nav tabs -->
                                  <ul class="nav nav-tabs mb-4">
                                      <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#home">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#menu1">Media Sosial</a>
                                    </li>

                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content">
                                  <div class="tab-pane container active" id="home">
                                      <div class="form-group">
                                        <label for="text">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" id="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Jabatan</label>
                                        <input type="text" class="form-control" name="jabatan" placeholder="Masukan Jabatan" id="text" <?php if ($is_leader==0): ?>
                                        value="<?= 'Leader' ?>"
                                        <?= 'readonly' ?>
                                        <?php endif ?>>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Keterangan</label>
                                        <textarea type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" id="text"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Foto</label>
                                        <input type="file" class="form-control" name="gambar" placeholder="Masukan Nama" id="text">
                                    </div>
                                </div>
                                <div class="tab-pane container fade" id="menu1">

                                    <div class="form-group">
                                        <label for="text">Facebook</label>
                                        <input type="text" class="form-control" name="facebook" placeholder="Masukan Link Facebook" id="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Instagram</label>
                                        <input type="text" class="form-control" name="instagram" placeholder="Masukan Link Instagram" id="text">
                                    </div>
                                    <div class="form-group">
                                        <label for="text">Linkedin</label>
                                        <input type="text" class="form-control" name="linkedin" placeholder="Masukan Link Linkedin" id="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <?php echo $this->session->flashdata('message') ?>
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Linkedin</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th>Nama</th>
                    <th>Gambar</th>
                    <th>Jabatan</th>
                    <th>Keterangan</th>
                    <th>Facebook</th>
                    <th>Instagram</th>
                    <th>Linkedin</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
            <tbody>
                <?php foreach ($tim as $row => $value): ?>
                    <tr>
                        <td><?php echo $value['nama'] ?></td>
                        <td><img class="gambar-tabel" src="<?php echo base_url('assets/assets/img/upload/teams/')?><?php echo $value['gambar'] ?>" alt="" class="img-thumbnail"></td>
                        <td><?= $value['jabatan'] ?> </td>
                        <td><?= $value['keterangan'] ?> </td>
                        <td><?= $value['facebook'] ?></td>
                        <td><?= $value['instagram'] ?></td>
                        <td><?= $value['linkedin'] ?></td>
                        <td>
                            <div class="btn-group">
                                <a class="btn badge badge-primary" data-toggle="modal" data-target="#edit_tim<?= $value['id'] ?>">Edit</a>
                                <div class="modal fade" id="edit_tim<?= $value['id'] ?>">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <form action="<?= base_url('tim/edit') ?>" method="POST" enctype="multipart/form-data">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Tambah Tim</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                  <!-- Nav tabs -->
                                                  <ul class="nav nav-tabs mb-4">
                                                      <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#general<?= $value['id'] ?>">General</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#medsos<?= $value['id'] ?>">Media Sosial</a>
                                                    </li>

                                                </ul>

                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                  <div class="tab-pane container active" id="general<?= $value['id'] ?>">
                                                      <div class="form-group">
                                                        <label for="text">Nama</label>
                                                        <input type="text" name="id" value="<?= $value['id'] ?>" hidden>
                                                        <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" id="text" value="<?= $value['nama'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="text">Jabatan</label>
                                                        <input type="text" class="form-control" name="jabatan" placeholder="Masukan Jabatan" id="text" <?php if ($value['is_leader']==1): ?>
                                                        value="<?= $value['jabatan'] ?>"
                                                        <?= 'readonly' ?>
                                                        <?php endif ?>>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="text">Keterangan</label>
                                                        <textarea type="text" class="form-control" name="keterangan" placeholder="Masukan Keterangan" id="text"><?= $value['keterangan'] ?></textarea>
                                                    </div>
                                                    <div class="form-group">
                                                        <img src="<?php echo base_url('assets/assets/img/upload/teams/')?><?php echo $value['gambar'] ?>" alt="" class="img-thumbnail gambar-tabel">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="text">Foto</label>
                                                        <input type="file" class="form-control" name="gambar" placeholder="Masukan Nama" id="text">
                                                    </div>
                                                </div>
                                                <div class="tab-pane container fade" id="medsos<?= $value['id'] ?>">

                                                    <div class="form-group">
                                                        <label for="text">Facebook</label>
                                                        <input type="text" class="form-control" name="facebook" placeholder="Masukan Link Facebook" id="text" value="<?= $value['facebook'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="text">Instagram</label>
                                                        <input type="text" class="form-control" name="instagram" placeholder="Masukan Link Instagram" id="text" value="<?= $value['instagram'] ?>">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="text">Linkedin</label>
                                                        <input type="text" class="form-control" name="linkedin" placeholder="Masukan Link Linkedin" id="text" value="<?= $value['instagram'] ?>">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                            <button class="btn btn-primary" type="submit">Kirim</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <a class="btn badge badge-danger" data-toggle="modal" data-target="#tim<?php echo $value['id']?>">Hapus</a>
                        <div class="modal fade" id="tim<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Yakin mau menghapus <?php echo $value['nama'] ?>?</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">Pilih Hapus untuk menghapus.</div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <a class="btn btn-primary" href="<?php echo base_url('tim/hapus/'.$value['id']) ?>">Hapus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
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