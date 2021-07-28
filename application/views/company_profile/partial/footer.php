<?php if (get_cookie('lang_is')=== 'en'): ?>
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="text-white">
                        <?php echo SITE_NAME ?>
                    </h4>
                    <p class="text-muted text-white">
                        <?php echo $this->M_Website->tampil_footer_deskripsi()['isi_eng'] ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-white">
                        BUSSINESS WITH US
                    </h4>
                    <div class="d-flex flex-column">
                    <!--                             <a href="#" class="text-link">
                    Contact Us </a> -->
                    <?php foreach ($this->M_Website->tampil_logo_bisnis_footer() as $row => $value): ?>
                        <a href="<?php echo $value['link'] ?>"><img class="icon-e-commerce" src="<?php echo base_url('main/assets/assets/img/logos/')?><?php echo $value['gambar'] ?>"></a>
                    <?php endforeach ?>
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
                        <?php echo $this->M_Website->tampil_footer_deskripsi()['isi'] ?>
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-white">
                        BISNIS DENGAN KAMI
                    </h4>
                    <div class="d-flex flex-column">
                    <!--                             <a href="#" class="text-link">
                    Contact Us </a> -->
                    <?php foreach ($this->M_Website->tampil_logo_bisnis_footer() as $row => $value): ?>
                        <a href="<?php echo $value['link'] ?>"><img class="icon-e-commerce" src="<?php echo base_url('main/assets/assets/img/logos/')?><?php echo $value['gambar'] ?>"></a>
                    <?php endforeach ?>
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
<!-- Whatsapp Icon -->
<div class="container-fluid">
    <div class="whatsapp-icon">
        <a href="https://wa.me/send?phone=6285290076364&text=Hallo%20Admin%20Cococreative%0ASaya%20ingin%20bertanya%20tentang%20produk%20anda%20."><i class="fab fa-whatsapp-square text-success"></i></a>
    </div>
</div>
<div class="row">
    <button class="btn btn-warning shadow-lg btn-lg pesan" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="pesan" data-idpembeli="<?php echo $this->session->userdata('id_pembeli'); ?>">
        <i class="far fa-comment-alt" style="font-size: 30px;"></i>
    </button>
</div>
<div class="collapse pesan" id="collapseExample">
    <div class="row">
        <div class="col-lg-3 col-sm-12 chat-main">
            <div class="row">
                <div class="col-md-12 chat-header rounded-top p-2">
                    <div class="row">
                        <div class="col-md-2 image">
                            <img src="http://nicesnippets.com/demo/man01.png" class="rounded">
                        </div>
                        <div class="col-md-7 user-detail pt-2">
                            <h6 class="pt-1">Admin</h6>
                            <i class="fa fa-circle active ml-1" aria-hidden="true"></i>
                        </div>
                        <div class="col-md-3 options text-right pt-2">
                            <a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <i class="fa fa-ellipsis-h mr-1 hide-chat-box"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12  chat-content p-0 bg-white border border-top-0" id="">
                    <?php if ($this->session->userdata('no_hp')): ?>
                        <div class="isi">
                        </div>
                    <?php else: ?>
                     <ul class="pl-3 pr-3 pt-1 mb-1" id="scroll">
                        <div class="card border-1 rounded-lg mt-5 shadow-lg">
                            <div class="card-body">
                                <form action="<?php echo base_url('pesan/login') ?>" method="POST">
                                    <div class="form-group">
                                        <label class="small mb-1 text-dark" for="email">No Hp / Whatsapp</label>
                                        <input class="form-control py-4 isi_nomor" id="no_hp" type="text" placeholder="Masukan No Hape" name="nohp" autofocus>
                                        <input type="text" name="url" value="<?php echo $this->uri->segment(1) ?>" hidden>
                                        <small class="text-danger">
                                            <?php echo form_error('email'); ?></small>
                                        </div>
                                        <div class="form-group d-flex align-items-center justify-content-around mt-4 mb-0">
                                            <button class="btn btn-primary w-100 login" type="submit" name="submit">Mulai Mengirim Pesan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </ul>   
                    <?php endif ?>

                    <p class="text-center mb-2 sender font-italic">
                    </p>
                    <div class="msg-box p-2">
                        <div class="row">
                            <div class="col-md-9">
                                <input type="text" name="pesan" autocomplete="off" class="form-control isipesan" placeholder="message ...">
                            </div>
                            <div class="col-md-3 pl-0">
                                <button class="btn btn-success send">Send</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
<script>
    $('.satu').on('click',function(){
    </script>
    <script>


        $(document).ready(function(){
            load_data();
            function load_data(pesan)
            {
                $(".isipesan").val('');
                $.ajax({
                    method:"POST",
                    url:"<?php echo base_url('Pesan/tampil_pesan')?>",
                    data: {pesan:pesan},
                    success:function(hasil)
                    {
                        $('.isi').html(hasil);
                    }
                });
            }

            $('.send').click(function(){
                var pesan = $(".isipesan").val();
                load_data(pesan);
            });
            $('.isipesan').keypress(function(e) {
                if(e.which == 13) {
                    var pesan = $(".isipesan").val();
                    load_data(pesan);
                }
            });
        });


        $(function(){
setInterval(isi, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
        function isi() {
            $.ajax({
                url: '<?php echo base_url('pesan/tampil_pesan')?>',
                success: function(data) {
                    $('.isi').html(data);
                },
            });
        }

    </script>
</body>
</html>