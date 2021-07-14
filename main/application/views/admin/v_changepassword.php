                <!-- Begin Page Content -->
                <div class="container-fluid">

                  <!-- Page Heading -->
                  <h1 class="h3 mb-4 text-gray-800"><?php echo $title  ?></h1>
                  <div class="row">
                    <div class="col-lg-6">
                      <?php echo $this->session->flashdata('message'); ?> 
                    </div>
                  </div>
                  <div class="card mb-3" style="max-width: 600px;">
                    <div class="row g-0">
                      <div class="col-md-6">
                        <img src="<?php echo base_url('assets/assets/img/upload/profil') ?>/<?php echo $user['gambar'] ?>" class="card-img" >
                      </div>

                      <div class="col-md-6">
                        <div class="card-body">
                          <form action="<?php echo base_url('admin/pgantipassword') ?>" method="POST">
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Password Saat Ini</label>
                              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Pasword Saat Ini" name="passwordlama">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Password yang Baru</label>
                              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Pasword Baru" name="password1">
                            </div>
                            <div class="form-group">
                              <label for="exampleFormControlInput1">Konfirmasi Password</label>
                              <input type="password" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Konfirmasi Password" name="password2">
                            </div>
                            <button class="btn btn-warning">Konfirmasi</button>
                          </form>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
                <!-- /.container-fluid -->

              </div>
            <!-- End of Main Content -->