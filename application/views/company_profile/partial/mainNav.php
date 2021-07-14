<?php if(get_cookie('lang_is') === 'in'){ ?>
    <!-- Navigasi Indoensia-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-band js-scroll-trigger" href="#page-top"><img class="rounded-circle nav-brand" src="
                <?php echo base_url('assets/assets/img/brand.png') ?>" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='home'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('home') ?>">Beranda</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='about'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('about') ?>">Tentang</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='news'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('testimonial') ?>">Testimoni</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='product'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('produk') ?>">Produk</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdwn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Bahasa <span><img src="https://img.icons8.com/color/16/000000/indonesia.png"/></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <?php if(get_cookie('lang_is') === 'en'){ ?>
                                    <a class="dropdown-item font-weight-bold" href="<?php echo site_url('lang_setter/set_to/indonesia');?>">Indonesia<span><img src="https://img.icons8.com/color/16/000000/indonesia.png"/></span></a>
                                <?php }else{ ?>
                                    <a class="dropdown-item font-weight-bold" href="<?php echo site_url('lang_setter/set_to/english');?>">English<span><img src="https://img.icons8.com/emoji/16/000000/united-kingdom-emoji.png"/></span></a>
                                <?php } ?>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <h4 class="text-center pl-5 pr-5 text-muted">Kamu belum memilih produk!</h4>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdwn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <?php if ($this->session->userdata('dataorder')): ?>
                                    <span class="badge badge-pill badge-danger"><?php echo $this->M_Order->sumChart() ?></span>
                                <?php endif ?>
                            </a>
                            <?php if ($this->session->userdata('dataorder')): ?>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <span class="text-capitalize text-muted"><a class="" href="<?php echo base_url('order/session') ?>">Batalkan semua?</a></span>
                                    <hr class="dropdown-divider">
                                    <span class="text-capitalize text-muted">Pesananmu</span>
                                    <?php foreach ($this->session->userdata('dataorder') as $row): ?>
                                        <a class="dropdown-item nav-link text-info" href="">
                                            <?php echo $row['product'] ?>
                                            <?php echo 'Rp.'.$row['size'] ?>
                                        </a>
                                    <?php endforeach ?>
                                    <hr class="dropdown-divider">
                                    <?php foreach ($this->session->userdata('dataorder') as $row => $value): ?>
                                        <a href="https://wa.me/send?phone=6281391077838&text=Hallo%20Admin%20Cococreative%0ASaya%20ingin%20membeli%20produk%20berikut:
                                        <?php foreach ($this->session->userdata('dataorder') as $row =>$value){ ?>
                                            %0ANama%20Produk:%20<?php echo $value['product'] ?>
                                            %0ATotal%0APembelian:%20<?php echo 'Rp.'.$value['size'] ?>
                                            %0AQty:%20<?php echo $value['qty'] ?>
                                        <?php } ?>
                                        %0ATerimakasih"
                                        class="nav-link text-info text-center">
                                    <?php endforeach ?>
                                    Order semua lewat Whatsapp?
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="dropdown-menu dropdown-menu-right">
                                <h4 class="text-center pl-5 pr-5 text-muted">Kamu belum memilih produk!</h4>
                            </div>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Akhir Navigasi -->
<?php }else{ ?>
    <!-- Navigation English-->
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
        <div class="container">
            <a class="navbar-band js-scroll-trigger" href="#page-top"><img class="rounded-circle nav-brand" src="
                <?php echo base_url('assets/assets/img/brand.png') ?>" alt="" /></a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='home'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('home') ?>">Home</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='about'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('about') ?>">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='testimonial'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('testimonial') ?>">Testimonial</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger <?php if ($this->uri->segment(1)=='produk'): ?>
                        <?php echo 'active' ?>
                        <?php endif ?>" href="<?php echo base_url('produk') ?>">Product</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdwn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Language <span><img src="https://img.icons8.com/emoji/16/000000/united-kingdom-emoji.png"/></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <?php if(get_cookie('lang_is') === 'in'){ ?>
                                    <a class="dropdown-item font-weight-bold" href="<?php echo site_url('lang_setter/set_to/english');?>">English<span><img src="https://img.icons8.com/emoji/16/000000/united-kingdom-emoji.png"/></span></a>
                                <?php }else{ ?>
                                    <a class="dropdown-item font-weight-bold" href="<?php echo site_url('lang_setter/set_to/indonesia');?>">Indonesia<span><img src="https://img.icons8.com/color/16/000000/indonesia.png"/></span></a>
                                <?php } ?>
                            </div>
                            <div class="dropdown-menu dropdown-menu-right">
                                <h4 class="text-center pl-5 pr-5 text-muted">You haven't selected a product</h4>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="" id="navbarDropdwn" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-shopping-cart"></i>
                                <?php if ($this->session->userdata('dataorder')): ?>
                                    <span class="badge badge-pill badge-danger"><?php echo $this->M_Order->sumChart() ?></span>
                                <?php endif ?>
                            </a>
                            <?php if ($this->session->userdata('dataorder')): ?>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <span class="text-capitalize text-muted"><a class="" href="<?php echo base_url('order/session') ?>">Calcel All?</a></span>
                                    <hr class="dropdown-divider">
                                    <span class="text-capitalize text-muted">Your Order</span>
                                    <?php foreach ($this->session->userdata('dataorder') as $row): ?>
                                        <a class="dropdown-item nav-link text-info" href="">
                                            <?php echo $row['product'] ?>
                                            <?php echo $row['size'] ?>
                                        </a>
                                    <?php endforeach ?>
                                    <hr class="dropdown-divider">
                                    <?php foreach ($this->session->userdata('dataorder') as $row => $value): ?>
                                        <a href="https://wa.me/send?phone=6281391077838&text=Hallo%20Admin%20Cococreative%0ASaya%20ingin%20membeli%20produk%20berikut:
                                        <?php foreach ($this->session->userdata('dataorder') as $row =>$value){ ?>
                                            %0ANama%20Produk:%20<?php echo $value['product'] ?>
                                            %0AType:%20<?php echo $value['size'] ?>
                                            %0AQty:%20<?php echo $value['qty'] ?>
                                        <?php } ?>
                                        %0ATerimakasih"
                                        class="nav-link text-info text-center">
                                    <?php endforeach ?>
                                    Order All Via Whatsapp
                                </a>
                            </div>
                        <?php else: ?>
                            <div class="dropdown-menu dropdown-menu-right">
                                <h4 class="text-center pl-5 pr-5 text-muted">You haven't selected a product</h4>
                            </div>
                        <?php endif ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Of Navigation -->

    <?php } ?>