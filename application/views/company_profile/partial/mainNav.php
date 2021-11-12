    <div class="body-inner">
      <div id="top-bar" class="top-bar">
        <div class="container">
          <div class="row">
          </div>
        </div>
      </div>
      <!-- Header start -->
      <header id="header" class="header-two">
        <div class="site-navigation">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg navbar-light p-0">

                  <div class="logo custom_logo">
                    <a class="d-flex justify-content-between align-items-center" href="">
                      <img loading="lazy" class="rounded-circle" src="<?= base_url('assets/') ?>images/logo.png" alt="Constra">
                      <h4 class="pl-2">Cococreative Indonesia</h4>
                    </a>
                  </div><!-- logo end -->

                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>

                  <div id="navbar-collapse" class="collapse navbar-collapse">
                    <?php if(get_cookie('lang_is') === 'in'){ ?>
                      <ul class="nav navbar-nav ml-auto align-items-center">
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="body">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#ts-features">Fitur</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#product">Produk</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#about-us">Tentang Kami</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#galery">Galeri</a></li>
                        <li class="nav-item"><a href="<?= base_url('teams') ?>" class="nav-link btn-navbar">Tim</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#footer">Kontak</a></li>
                        <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="icon/translete_icon.svg" alt="">ID <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('lang_setter/set_to/indonesia');?>">ID</a></li>
                            <li><a href="<?php echo site_url('lang_setter/set_to/english');?>">ENG</a></li>
                          </ul>
                        </li>
                      </ul>
                    <?php } else { ?>
                      <ul class="nav navbar-nav ml-auto align-items-center">
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="body">Home</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#ts-features">Feature</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#product">Product</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#about-us">About</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#galery">Galery</a></li>
                        <li class="nav-item"><a href="<?= base_url('teams') ?>" class="nav-link btn-navbar">Teams</a></li>
                        <li class="nav-item"><a class="nav-link btn-navbar" data-target="#footer">Contact</a></li>
                        <li class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><img src="icon/translete_icon.svg" alt="">ENG <i class="fa fa-angle-down"></i></a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="<?php echo site_url('lang_setter/set_to/indonesia');?>">ID</a></li>
                            <li><a href="<?php echo site_url('lang_setter/set_to/english');?>">ENG</a></li>
                          </ul>
                        </li>
                      </ul>
                    <?php } ?>
                  </div>
                </nav>
              </div>
              <!--/ Col end -->
            </div>
            <!--/ Row end -->
          </div>
          <!--/ Container end -->

        </div>
        <!--/ Navigation end -->
      </header>
      <!--/ Header end -->