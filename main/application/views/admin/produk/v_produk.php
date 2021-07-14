<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800 as">Data Produk</h1>
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <?php echo $this->session->flashdata('message') ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Punya Variasi Gambar?</th>
                            <th>Waktu Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Produk</th>
                            <th>Gambar</th>
                            <th>Keterangan</th>
                            <th>Punya Variasi Gambar?</th>
                            <th>Waktu Upload</th>
                            <th>Aksi</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($jenis_produk as $row => $value): ?>
                            <tr>
                                <td><?php echo $value['nama_jenis_produk'] ?></td>
                                <td><img class="gambar-tabel" src="<?php echo base_url('assets/assets/img/upload/produk/')?><?php echo $value['gambar'] ?>" alt="" class="img-thumbnail"></td>
                                <td>
                                    <a href="" data-toggle="modal" data-target="#k<?php echo $value['id_jenis_produk'] ?>"><p class="keterangan-produk-tabel"><?php echo $value['keterangan'] ?></p></a>
                                    <div class="modal fade" id="k<?php echo $value['id_jenis_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title"><?php echo $value['nama_jenis_produk'] ?></h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <p class="modal-keterangan"><?php echo $value['keterangan'] ?> </p>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="form-group">
                                        <div class="form-check">


                                            <a class="satu centang <?php if ($value['view_more?']==0): ?>
                                            <?php echo 'text-secondary' ?>
                                            <?php endif ?> " href="" data-viewmore="<?php echo $value['view_more?'] ?>" data-idproduk="<?php echo $value['id_jenis_produk'] ?>"><i class="fas fa-check-circle"></i></a>


                                            <?php if ($value['view_more?']==1): ?>
                                                <a href="<?php echo base_url('produk/variasi_produk/') ?><?php echo $value['id_jenis_produk'] ?>"><i class="fas fa-eye"></i>Lihat</a>
                                            <?php endif ?>
                                        </div>

                                    </div>
                                </td>
                                <td><?php echo date('l, d F  Y',$value['waktu_upload'])  ?></td>
                                <td>
                                    <div class="btn-group">
                                        <a class="btn badge badge-primary" href="<?php echo base_url('produk/edit_produk/').$value['id_jenis_produk'] ?>">Edit</a>
                                        <a class="btn badge badge-danger" data-toggle="modal" data-target="#p<?php echo $value['id_jenis_produk']?>">Hapus</a>
                                        <div class="modal fade" id="p<?php echo $value['id_jenis_produk'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                            aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Yakin mau menghapus <?php echo $value['nama_jenis_produk'] ?>?</h5>
                                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">Pilih Hapus untuk menghapus.</div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                        <a class="btn btn-primary" href="<?php echo base_url('produk/hapus_produk/'.$value['id_jenis_produk']) ?>">Hapus</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="btn badge badge-primary" href="<?php echo base_url('produk/bahasa_produk/').$value['id_jenis_produk'] ?>">Atur Bahasa</a>
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