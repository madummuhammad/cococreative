      <div class="banner-section">
      	<div class="banner-carousel banner-carousel-2 mb-0 pb-4">
      		<?php foreach ($carousel as $row => $value): ?>
      			<div class="banner-carousel-item" style="background-image:url(<?php echo base_url('main/assets/assets/img/upload/website/') ?><?= $value['gambar'] ?>)">
      				<div class="container">
      					<div class="box-slider-content">
      						<div class="box-slider-text">
      							<h2 class="box-slide-title"><?= $value['judul'] ?></h2>
      							<h3 class="box-slide-sub-title"><?= $value['tagline'] ?></h3>
      							<p>
      								<a class="slider btn btn-primary btn-tell-me">Tell me more</a>
      							</p>
      						</div>
      					</div>
      				</div>
      			</div>
      		<?php endforeach ?>
      	</div>
      	<svg width="100%" height="207" viewBox="0 0 1440 207" fill="none" xmlns="http://www.w3.org/2000/svg">
      		<g filter="url(#filter0_i_204:2)">
      			<path d="M276 9.00002C118.5 -6.99998 65.1667 14.3334 0 25V206.5H1440V0C1354.83 42.3333 1284.5 120.282 963 132C743.5 140 433.5 25 276 9.00002Z" fill="white"/>
      		</g>
      		<defs>
      			<filter id="filter0_i_204:2" x="0" y="0" width="1440" height="214.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
      				<feFlood flood-opacity="0" result="BackgroundImageFix"/>
      				<feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape"/>
      				<feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
      				<feOffset dy="8"/>
      				<feGaussianBlur stdDeviation="7"/>
      				<feComposite in2="hardAlpha" operator="arithmetic" k2="-1" k3="1"/>
      				<feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
      				<feBlend mode="normal" in2="shape" result="effect1_innerShadow_204:2"/>
      			</filter>
      		</defs>
      	</svg>
      </div>
      <section id="ts-features" class="ts-features pb-2">
      	<div class="container">
            <div class="header-section d-flex justify-content-center">
               <img src="<?= base_url('assets/') ?>icon/line.svg">
               <?php if (get_cookie('lang_is')=='in'): ?>
                <p class="font-weight-bold text-center custom-text-black font-size-20px mx-4">Fitur</p>
            <?php else: ?>
                <p class="font-weight-bold text-center custom-text-black font-size-20px mx-4">Our Key Feature</p>
            <?php endif ?>
            <img src="<?= base_url('assets/') ?>icon/line.svg">
        </div>
            <div class="row d-flex justify-content-center">
               <?php foreach ($trust as $row => $value): ?>
                  <div class="col-lg-3 col-md-6 mb-5 mx-4 custom-box-shadow border-radius-16px pt-3 pb-3">
                     <div class="ts-service-box">
                        <div class="ts-service-image-wrapper custom-ts-service-image-wrapper text-center">
                           <div class="ts-service-box-img custom-ts-service-box-img text-center">
                              <img loading="lazy" class="icon-png" src="<?= base_url('assets/') ?>icon/<?= $value['icon'] ?>" alt="service-icon" />
                          </div>
                          <h4><?= $value['judul'] ?></h4>
                      </div>
                      <div class="d-flex">    
                       <div class="ts-service-info">
                          <p><?= $value['isi'] ?></p>
                      </div>
                  </div>
              </div><!-- Service1 end -->
          </div><!-- Col 1 end -->
      <?php endforeach ?>
  </div><!-- Content row end -->
</div><!-- Container end -->
</section><!-- Feature are end -->

<section id="product" class="product-area">
 <div class="container">
    <div class="header-section d-flex justify-content-center">
       <img src="<?= base_url('assets/') ?>icon/line.svg">
       <?php if (get_cookie('lang_is')=='in'): ?>
           <p class="font-weight-bold text-center custom-text-black mx-4 font-size-20px">Produk Kami</p>
       <?php else: ?>
        <p class="font-weight-bold text-center custom-text-black mx-4 font-size-20px">Our Product</p>
    <?php endif ?>
    <img src="<?= base_url('assets/') ?>icon/line.svg">
</div>
<div class="row d-flex justify-content-center custom-product-slick">
   <?php foreach ($jenis_produk as $row => $value): ?>
      <div class="col-lg-3 col-md-12 col-sm-12 mb-5 mx-4 pt-3 pb-3">
         <div class="ts-service-box">
            <div class="ts-service-image-wrapper custom-ts-service-image-wrapper text-center">
               <div class="ts-service-box-img custom-ts-service-box-img text-center">
                  <img class="img-fluid border-radius-16px custom-product-shadow" loading="lazy" src="<?php echo base_url('main/assets/assets/img/upload/produk/') ?><?php echo $value['gambar'] ?>" alt="service-icon" />
              </div>
              <h4><?= $value['nama_jenis_produk'] ?></h4>
          </div>
          <div class="d-flex flex-column">    
           <div class="ts-service-info custom-text-black">
              <p><?= $value['keterangan'] ?></p>
          </div>
          <div class="button-product d-flex justify-content-center">
              <?php if (get_cookie('lang_is')=='in'): ?>
                <a class="badge btn-success">Selengkapnya</a>
            <?php else: ?>
              <a class="badge btn-success">View More</a>
          <?php endif ?>
      </div>
  </div>
</div><!-- Service1 end -->
</div><!-- Col 1 end -->
<?php endforeach ?>
</div><!-- Content row end -->
<!--/ Content row end -->
</div>
<!--/ Container end -->
</section><!-- Facts end -->

<section id="about-us" class="about-us-area">
 <?php foreach ($about as $row => $value): ?>
    <div class="container">
       <div class="header-section d-flex justify-content-center">
          <img src="<?= base_url('assets/') ?>icon/line.svg" alt="">
          <?php if (get_cookie('lang_is')=='in'): ?>
              <p class="font-weight-bold text-center custom-text-black mx-4 font-size-20px">Tentang Kami</p>
          <?php else: ?>
            <p class="font-weight-bold text-center custom-text-black mx-4 font-size-20px">About Us</p>
        <?php endif ?>
        <img src="<?= base_url('assets/') ?>icon/line.svg" alt="">
    </div>
    <div class="row d-flex justify-content-center align-items-center custom-bg-primary p-5 border-radius-16px">
      <div class="col-lg-6 col-md-12 pt-3 pb-3">
         <img class="img-fluid border-radius-16px custom-product-shadow" loading="lazy" src="<?php echo base_url('main/assets/assets/img/upload/website/') ?><?php echo $value['gambar'] ?>" alt="service-icon" />
     </div>
     <div class="col-lg-6 col-md-12 pt-3 pb-3 text-justify">
         <?= $value['isi'] ?>
     </div>

 </div><!-- Content row end -->
 <!--/ Content row end -->
</div>
<!--/ Container end -->
<?php endforeach ?>
</section><!-- Facts end -->

      <!-- <section id="galery" class="galery-area">
      	<div class="container">
      		<div class="header-section d-flex justify-content-center">
      			<img src="icon/line.svg" alt="">
      			<p class="font-weight-bold text-center custom-text-black mx-4 font-size-20px">Galery</p>
      			<img src="icon/line.svg" alt="">
      		</div>
      		<div class="row d-flex justify-content-center border-radius-16px banner-carousel banner-carousel-2 px-5">
      			<div class="col-lg-12 col-md-12 pt-3 pb-3 d-flex justify-content-center">
      				<img class="img-fluid border-radius-16px custom-product-shadow" loading="lazy" src="images/projects/project1.jpg" alt="service-icon" />
      			</div>
      			<div class="col-lg-12 col-md-12 pt-3 pb-3 d-flex justify-content-center">
      				<img class="img-fluid border-radius-16px custom-product-shadow" loading="lazy" src="images/banner/banner1.png" alt="service-icon" />
      			</div>
      		</div>
      	</div>
      </section> -->