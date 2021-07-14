<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 as">Data User</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <button class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahuser">Tambah User <i class="fas fa-user-plus"></i></button>
            <div class="table-responsive">
                <?php echo $this->session->tempdata('message') ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Gambar</th>
                            <th>Aksess</th>
                            <th>Waktu Update</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Gambar</th>
                        <th>Aksess</th>
                        <th>Waktu Update</th>
                        <th>Aksi</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($user_admin as $row => $value): ?>
                        <tr>
                            <td><?php echo $value['nama'] ?> </td>
                            <td><?php echo $value['email'] ?> </td>
                            <td><img class="gambar-tabel" src="<?php echo base_url('assets/assets/img/upload/profil/')?><?php echo $value['gambar'] ?>" alt="" class="img-thumbnail"></td>
                            <td>
                                <?php if ($user['id_role_access']==1): ?>
                                <a href="" data-toggle="modal" data-target="#access<?php echo $value['id_admin'] ?>"><?php echo $value['nama_role'] ?></a>
                                <?php else: ?>
                                    <?php echo $value['nama_role'] ?>
                                <?php endif ?>
                                
                                <!-- Button trigger modal -->
                                <!-- Modal -->
                                <form action="<?php echo base_url('admin/ganti_access') ?>" method="POST">
                                    <div class="modal" id="access<?php echo $value['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLongTitle">User Access</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="text" name="id_admin" value="<?php echo $value['id_admin'] ?>" hidden>
                                                        <input type="checkbox" class="custom-control-input" id="label<?php echo $value['id_admin'] ?>" value="<?php if ($value['id_role_access']==1): ?>
                                                        <?php echo 2 ?>
                                                        <?php else: ?>
                                                        <?php echo 1 ?>
                                                        <?php endif ?>" name="role_access">
                                                        <label class="custom-control-label" for="label<?php echo $value['id_admin'] ?>">Ganti Menjadi <?php if ($value['id_role_access']==1): ?>
                                                            <?php echo 'Admin' ?>
                                                            <?php else: ?>
                                                            <?php echo 'Super Admin' ?>
                                                        <?php endif ?></label>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                            <td><?php echo date('l, d F  Y',$value['time'])  ?></td>
                            <td>
                                <a href="" class="badge badge-primary" data-toggle="modal" data-target="#u<?php echo $value['id_admin'] ?>">Edit</a>
                                <div class="modal fade" id="u<?php echo $value['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit User</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="<?php echo base_url('admin/edit_user') ?>" method="POST" enctype="multipart/form-data">
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="id_produk">Nama User</label>
                                                            <input type="text" class="form-control" id="id_produk" placeholder="Masukan Nama User" name="nama_user" value="<?php echo $value['nama'] ?>">
                                                            <input type="text" name="id_user" value="<?php echo $value['id_admin'] ?>" hidden>
                                                            <small class="text-danger">*Nama Harus Di Isi</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_produk">Email</label>
                                                            <input type="text" class="form-control" id="nama_produk" placeholder="Masukan Email User" name="email" value="<?php echo $value['email'] ?>" readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nama_produk">Gambar Lama</label>
                                                            <br>
                                                            <img src="<?php echo base_url('assets/assets/img/upload/profil/')?><?php echo $value['gambar'] ?>" class="gambar-tabel" alt="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gambar">Gambar Baru</label>
                                                            <input type="file" class="form-control" placeholder="Gambar" name="gambar">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="gambar" class="font-weight-bold">Hak Akses Sekarang adalah <span class="text-danger"><?php echo $value['nama_role'] ?></span></label>
                                                        </div>
                                                        <input type="text" name="role_access" value="<?php echo $value['id_role_access'] ?>" hidden>
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
                                </div>
                                <a href="" class="badge badge-danger" data-toggle="modal" data-target="#ud<?php echo $value['id_admin'] ?>">Delete</a>
                                <div class="modal fade" id="ud<?php echo $value['id_admin'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                                <a class="btn btn-primary" href="<?php echo base_url('admin/hapus_user/'.$value['id_admin']) ?>">Hapus</a>
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
<!-- End of Main Content -->