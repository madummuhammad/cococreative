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
            <header class="masthead" style="background-image: url(<?php echo base_url('main/assets/assets/img/upload/website/') ?><?php echo $value['gambar'] ?>);">
                <div class="container">
                    <div class="masthead-subheading" ><?php echo $value['judul'] ?></div>
                    <div class="masthead-heading text-uppercase" id="carouselTagline"><?php echo $value['tagline'] ?></div>
                    <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
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
                </div>
            <?php endforeach ?>
        </div>
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
                        <img class="img-fluid" src="<?php echo base_url('main/assets/assets/img/upload/website/') ?><?php echo $value['gambar'] ?>" alt="">
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1">
                    <div class="p-lg-2">
                        <h2 class="font-weight-bold display-4 text-capitalize"><?php echo $value['judul'] ?></h2>
                        <p><?php echo $value['isi'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach ?>
</div>
</section>
<!-- End Of My Product -->
