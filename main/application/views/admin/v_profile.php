<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?php echo $title  ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?php echo $this->session->tempdata('message'); ?>
        </div>
    </div>
    <form action="<?php echo base_url('admin/ganti_profil') ?>" method="POST" enctype="multipart/form-data">
        <div class="card mb-3" style="max-width: 600px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="<?php echo base_url('assets/assets/img/upload/profil') ?>/<?php echo $user['gambar'] ?>" class="card-img" >
                    <hr>
                    <label for="" class="text-center w-100 text-dark font-weight-bold">Ganti Foto Profil</label>
                    
                    <input type="file" class="form-control" name="gambar">
                    <br>
                    <button class="btn btn-success w-100" type="submit">Ganti</button>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <input type="text" name="id_admin" value="<?php echo $user['id_admin'] ?>" hidden>
                        <input type="text" class="form-control" value="<?php echo $user['nama'] ?>" name="nama_profil">
                        <h5 class="card-title"></h5>
                        <p class="card-text"><?php echo $user['email'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->