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
                        <th>Judul Berita</th>
                        <th>Gambar</th>
                        <th>Isi Berita</th>
                        <th>Waktu Upload</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Judul Berita</th>
                        <th>Gambar</th>
                        <th>Isi Berita</th>
                        <th>Waktu Upload</th>
                        <th>Aksi</th>
                    </tr>
                </tfoot>
                <tbody>
                    <?php foreach ($berita as $row => $value): ?>
                        <tr>
                            <td><?php echo $value['judul'] ?></td>
                            <td><img class="gambar-tabel" src="<?php echo base_url('assets/assets/img/upload/berita/')?><?php echo $value['gambar'] ?>" alt="" class="img-thumbnail"></td>
                            <td>
                                <a href="" data-toggle="modal" data-target="#berita<?php echo $value['id_news'] ?>">Lihat Isi Berita</a>
                                <div class="modal fade" id="berita<?php echo $value['id_news'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title"><?php echo $value['judul'] ?></h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="modal-keterangan"><?php echo $value['isi'] ?> </p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td><?php echo date('l, d F  Y',$value['time'])  ?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn badge badge-primary" href="<?php echo base_url('berita/edit_berita/').$value['id_news'] ?>">Edit</a>
                                    <a class="btn badge badge-danger" data-toggle="modal" data-target="#hapusberita<?php echo $value['id_news']?>">Hapus</a>
                                    <div class="modal fade" id="hapusberita<?php echo $value['id_news'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Yakin mau menghapus <?php echo $value['judul'] ?>?</h5>
                                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">Pilih Hapus untuk menghapus.</div>
                                                <div class="modal-footer">
                                                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                                    <a class="btn btn-primary" href="<?php echo base_url('berita/hapus_berita/'.$value['id_news']) ?>">Hapus</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<!--                                     <a class="btn badge badge-primary" href="<?php echo base_url('berita/bahasa_berita/').$value['id_news'] ?>">Atur Bahasa</a> -->
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