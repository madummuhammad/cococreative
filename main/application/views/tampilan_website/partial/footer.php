<?php if (get_cookie('lang_is')=== 'en'): ?>
<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-white">
                <?php echo SITE_NAME ?>
                </h4>
                <p class="text-muted text-white">
                    Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Error libero, nihil. Perferendis quam quibusdam velit. Veritatis aut dolorem est culpa praesentium, ea pariatur aliquam unde odio molestias iusto asperiores quam.
                </p>
            </div>
            <div class="col-lg-6">
                <h4 class="text-white">
                BUSSINESS WITH US
                </h4>
                <div class="d-flex flex-column">
                    <!--                             <a href="#" class="text-link">
                    Contact Us </a> -->
                    <a href="https://www.tokopedia.com/cococreative"><img class="icon-e-commerce" src="<?php echo base_url('assets/assets/img/logos/logo_tokopedia.svg') ?>"></a>
                    <a href="https://shopee.co.id/firmanyusuf13"><img class="icon-e-commerce" src="<?php echo base_url('assets/assets/img/logos/logo_shopee.svg') ?>"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
<section class="page-section" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h4 class="text-white">
                <?php echo SITE_NAME ?>
                </h4>
                <p class="text-muted text-white">
                    Lorem ipsum dolor, sit amet consectetur adipisicing, elit. Error libero, nihil. Perferendis quam quibusdam velit. Veritatis aut dolorem est culpa praesentium, ea pariatur aliquam unde odio molestias iusto asperiores quam.
                </p>
            </div>
            <div class="col-lg-6">
                <h4 class="text-white">
                BISNIS DENGAN KAMI
                </h4>
                <div class="d-flex flex-column">
                    <!--                             <a href="#" class="text-link">
                    Contact Us </a> -->
                    <a href="https://www.tokopedia.com/cococreative"><img class="icon-e-commerce" src="<?php echo base_url('assets/assets/img/logos/logo_tokopedia.svg') ?>"></a>
                    <a href="https://shopee.co.id/firmanyusuf13"><img class="icon-e-commerce" src="<?php echo base_url('assets/assets/img/logos/logo_shopee.svg') ?>"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif ?>
<!-- End Of Contact -->
<!-- Footer-->
<!-- Footer-->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center py-3">
            <div class="col-lg-4 text-lg-left text-dark">Copyright © <?php echo SITE_NAME ?> 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <!--                         <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a> -->
                <a class="btn btn-dark btn-social mx-2" href="https://web.facebook.com/coc0creative"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.linkedin.com/in/firman-yusuf-989a9a203/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="https://www.instagram.com/cococreative_/"><i class="fab fa-instagram"></i></a>
                <a class="btn btn-dark btn-social mx-2" href=""><i class="fas fa-envelope"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>
<!-- End Of Footer -->
<div class="container-fluid">
    <div class="scroll-icon">
        <i class="fas fa-arrow-up" id="tombolScrollTop" onclick="scrolltotop()"></i>
    </div>
</div>

<div class="container-fluid">
    <div class="tombol-kembali">
        <a href="<?php echo base_url() ?>"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<!-- Whatsapp Icon -->
<div class="container-fluid">
    <div class="whatsapp-icon">
        <a href="https://wa.me/send?phone=6281391077838&text=Hallo%20Admin%20Cococreative%0ASaya%20ingin%20bertanya%20tentang%20produk%20anda%20."><i class="fab fa-whatsapp-square text-success"></i></a>
    </div>
</div>
<!-- End Of Whatsapp Icon -->
<!-- Contact form JS-->
<script src="<?php echo base_url('assets/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="<?php echo base_url('assets/')?>assets/mail/jqBootstrapValidation.js"></script>
<script src="<?php echo base_url('assets/')?>assets/mail/contact_me.js"></script>
<!-- Core theme JS-->
<script src="<?php echo base_url('assets/')?>js/scripts.js"></script>
</body>
</html>