  		<section id="main-container" class="main-container pb-4 mt-5">
  			<div class="container">
  				<div class="row text-center">
  					<div class="col-lg-12">
  						<h3 class="section-sub-title">Our Teams</h3>
  					</div>
  				</div>
  				<!--/ Title row end -->

  				<div class="row justify-content-center">
  					<?php foreach ($tim as $row => $value): ?>
  						<?php if ($value['is_leader']==1): ?>
  							<div class="col-lg-3 col-sm-6 mb-5">
  								<div class="ts-team-wrapper">
  									<div class="team-img-wrapper">
  										<img loading="lazy" src="<?php echo base_url('main/assets/assets/img/upload/teams/')?><?php echo $value['gambar'] ?>" class="img-fluid" alt="team-img">
  									</div>
  									<div class="ts-team-content-classic">
  										<h3 class="ts-name"><?= $value['nama'] ?></h3>
  										<p class="ts-designation"><?= $value['jabatan'] ?></p>
  										<p class="ts-description"><?= $value['keterangan'] ?></p>
  										<div class="team-social-icons">
  											<a target="_blank" href="<?= $value['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
  											<a target="_blank" href="<?= $value['instagram'] ?>"><i class="fab fa-instagram"></i></a>
  											<a target="_blank" href="<?= $value['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
  										</div>
  										<!--/ social-icons-->
  									</div>
  								</div>
  								<!--/ Team wrapper 1 end -->

  							</div><!-- Col end -->
  						<?php endif ?>
  					<?php endforeach ?>

  				</div><!-- Content row 1 end -->

  				<div class="row">
  					<?php foreach ($tim as $row => $value): ?>
  						<?php if ($value['is_leader'] == 0): ?>
  							<div class="col-lg-3 col-md-4 col-sm-6 mb-5">
  								<div class="ts-team-wrapper">
  									<div class="team-img-wrapper">
  										<img loading="lazy" src="<?php echo base_url('main/assets/assets/img/upload/teams/')?><?php echo $value['gambar'] ?>" class="img-fluid" alt="team-img">
  									</div>
  									<div class="ts-team-content-classic">
  										<h3 class="ts-name"><?= $value['nama'] ?></h3>
  										<p class="ts-designation"><?= $value['jabatan'] ?></p>
  										<p class="ts-description"><?= $value['keterangan'] ?></p>
  										<div class="team-social-icons">
  											<a target="_blank" href="<?= $value['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
  											<a target="_blank" href="<?= $value['instagram'] ?>"><i class="fab fa-instagram"></i></a>
  											<a target="_blank" href="<?= $value['linkedin'] ?>"><i class="fab fa-linkedin"></i></a>
  										</div>
  										<!--/ social-icons-->
  									</div>
  								</div>
  								<!--/ Team wrapper 3 end -->
  							</div><!-- Col end -->
  						<?php endif ?>
  					<?php endforeach ?>
  				</div><!-- Content row end -->

  			</div><!-- Container end -->
  		</section><!-- Main container end -->