<!-- Masthead -->
<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <?php foreach ($carousel as $row => $value): ?>
      <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $row ?>" class="<?php if ($row==0): ?>
      <?php echo 'active' ?>
      <?php endif ?>"></li>
    <?php endforeach ?>
  </ol>
  <div class="carousel-inner">
    <?php foreach ($carousel as $row => $value): ?>
      <div class="carousel-item <?php if ($row==0): ?>
      <?php echo 'active' ?>
      <?php endif ?>">
      <header class="masthead" style="background-image: url(<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>);">
        <div class="container">
          <div class="masthead-subheading" ><?php echo $value['judul'] ?></div>
          <div class="masthead-heading text-uppercase" id="carouselTagline"><?php echo $value['tagline'] ?></div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
        </div>
        <div class="btn-group carousel-edit" role="group" aria-label="Basic example">
          <!-- Hapus -->
          <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapuscarousel<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></a>
          <div class="modal fade text-dark" id="hapuscarousel<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                  <a class="btn btn-primary" href="<?php echo base_url('website/hapus_carousel/'.$value['id']) ?>">Hapus</a>
                </div>
              </div>
            </div>
          </div>
          <!-- End Of Hapus -->

          <!-- Edit -->
          <a type="button" class="btn btn-info" data-toggle="modal" data-target="#carousel<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></a>

        </div>
      </header>
    </div>
  <?php endforeach ?>
</div>
<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="sr-only">Next</span>
</a>
</div>
<div class="container">
  <!-- Tambah -->
  <a type="button" class="btn btn-primary mt-3 w-100" data-toggle="modal" data-target="#tambahcarousel<?php echo $value['id'] ?>">Tambah Carousel <i class="fas fa-plus"></i></a>
  <!-- End Of Tambah -->
</div>
<!-- End Of Masthead -->
<!-- Trust -->
<section class="page-section" id="">
  <div class="container">
    <div class="row text-center">
      <?php foreach ($trust as $row => $value): ?>
        <div class="col-md-4">
          <span class="fa-stack fa-3x trust-icon">
            <i class="fas fa-circle fa-stack-2x circle-icon"></i>
            <i class="<?php echo $value['icon'] ?>"></i>
          </span>
          <h4 class="my-3"><?php echo $value['judul'] ?></h4>
          <p class="text-muted text-justify"><?php echo $value['isi'] ?></p>
          <div class="btn-group carousel-edit" role="group" aria-label="Basic example">
            <!-- Hapus -->
            <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapustrust<?php echo $value['id'] ?>"><i class="fas fa-trash"></i></a>
            <div class="modal fade text-dark" id="hapustrust<?php echo $value['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                    <a class="btn btn-primary" href="<?php echo base_url('website/hapus_trust/'.$value['id']) ?>">Hapus</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Of Hapus -->

            <!-- Edit -->
            <a type="button" class="btn btn-info" data-toggle="modal" data-target="#edittrust<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></a>
            <!-- End of edit -->


          </div>
        </div>
      <?php endforeach ?>
    </div>
    <!-- Tambah -->
    <a type="button" class="btn btn-primary w-100 mt-2" data-toggle="modal" data-target="#tambahtrust<?php echo $value['id'] ?>"><i class="fas fa-plus"></i></a>
    <!-- End Of Tambah -->
  </div>

</section>
<!-- End Of Trust -->

<!-- My Product -->
<section class="page-section">
  <div class="container-fluid">
    <?php foreach ($desproduk as $row => $value): ?>
      <div class="row align-items-center">
        <div class="col-lg-6 order-lg-2">
          <div class="p-lg-2">
            <img class="img-fluid" src="<?php echo base_url('assets/assets/img/upload/website/'.$value['gambar']) ?>" alt="">
          </div>
        </div>
        <div class="col-lg-6 order-lg-1">
          <div class="p-lg-2">
            <h2 class="font-weight-bold display-4 text-capitalize"><?php echo $value['judul'] ?></h2>
            <p><?php echo $value['isi'] ?></p>
          </div>
          <div class="btn-group carousel-edit" role="group" aria-label="Basic example">

            <!-- Edit -->
            <a type="button" class="btn btn-info" data-toggle="modal" data-target="#editdesproduk<?php echo $value['id'] ?>"><i class="fas fa-edit"></i></a>
            <!-- End of edit -->
          </div>
        </div>
      </div>
    <?php endforeach ?>
  </div>
</section>
<!-- End Of My Product -->

<section class="page-section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12">
        <h1 class="text-center">OUR VIDEO</h1>
      </div>
      <div class="col-sm-12">
        <div class="mx-auto text-center m-5">
          <object class="col-lg-7 col-sm-12" height="430" data="http://www.youtube.com/v/<?php echo $this->M_Website->tampil_link()['link'] ?>" type="application/x-shockwave-flash">
            <param name="src" value="http://www.youtube.com/v/<?php echo $this->M_Website->tampil_link()['link'] ?>" />
          </object>
          <div class="btn-group" role="group" aria-label="Basic example">
            <!-- Edit -->
            <a type="button" class="btn btn-info" data-toggle="modal" data-target="#editlinkvideo"><i class="fas fa-edit"></i></a>
            <!-- End of edit -->
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="projects-section testimonial-bg" id="projects">
  <div class="container-fluid">
    <div class="container-fluid">
      <div class="row justify-content-center no-gutters mt-2">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <?php foreach ($testimonial as $row => $value): ?>
              <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $row ?>" class="<?php if ($row==0): ?>
              <?php echo 'active' ?>
              <?php endif ?>"></li>
            <?php endforeach ?>
          </ol>
          <div class="carousel-inner">
            <?php foreach ($testimonial as $row => $value): ?>
              <div class="carousel-item <?php if ($row==0): ?>
              <?php echo 'active' ?>
              <?php endif ?>">
              <div class="row justify-content-center no-gutters m-5 p-5">
                <div class="col-lg-7">
                  <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                      <div class="project-text w-100 my-auto text-center">
                        <p class="mb-0 text-dark-50 text-center"><span class="display-4 font-weight-bold"><img class="img-fluid d-block w-100" src="<?php echo base_url('assets/assets/img/upload/website/') ?><?php echo $value['gambar'] ?>"></span></p>

                      </div>
                    </div>
                  </div>

                </div>
                <div class="col-lg-5 order-lg-first">
                  <div class="bg-white text-center h-100 project">
                    <div class="d-flex h-100">
                      <div class="project-text w-100 my-auto text-center">
                        <h4 class="text-dark">TESTIMONIAL</h4>
                        <hr class="w-100">
                        <p class="mb-0 text-dark-50 text-center"><span class="display-4 font-weight-bold">"</span><?php echo $value['isi'] ?></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btn-group carousel-edit" role="group" aria-label="Basic example">
                <!-- Hapus -->
                <a type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapustestimoni<?php echo $value['id_testimoni'] ?>"><i class="fas fa-trash"></i></a>
                <div class="modal fade text-dark" id="hapustestimoni<?php echo $value['id_testimoni'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"><span class="text-danger">Yakin mau menghapus:  </span><?php echo $value['isi'] ?>?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">Pilih Tombol "Hapus" untuk menghapus.</div>
                      <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?php echo base_url('website/hapus_testimoni/'.$value['id_testimoni']) ?>">Hapus</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End Of Hapus -->

                <!-- Edit -->
                <a type="button" class="btn btn-info" data-toggle="modal" data-target="#edittestimoni<?php echo $value['id_testimoni'] ?>"><i class="fas fa-edit"></i></a>

              </div>
            </div>
          <?php endforeach ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!--                </div> -->
    </div>
  </div>

</div>
<div class="container">
  <!-- Tambah -->
  <a type="button" class="btn btn-primary mt-3 w-100" data-toggle="modal" data-target="#tambahtestimoni">Tambah Testimoni <i class="fas fa-plus"></i></a>
  <!-- End Of Tambah -->
</div>
</section>

<!-- Our Doing -->
<!--         <div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/assets/img/commit1.jpg') ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
          <p class="text-primary">Inverstor Relation</p>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/assets/img/commit2.jpg') ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
          <p class="text-primary">Corporate Social Responsibility</p>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur! Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 mb-4">
      <div class="card h-100">
        <a href="#"><img class="card-img-top" src="<?php echo base_url('assets/assets/img/commit3.jpg') ?>" alt=""></a>
        <div class="card-body">
          <h4 class="card-title">
          <p class="text-primary">Visit Universal Coco Indonesia</p>
          </h4>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- End Of Our Doing