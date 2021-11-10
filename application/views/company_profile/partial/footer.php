<footer id="footer" class="footer bg-overlay">
  <div class="footer-main">
    <div class="container">
      <h3 class="text-white text-center">Let Get in Touch</h3>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-6 col-md-6 footer-widget footer-about">
          <div class="footer-top mb-4">
            <!-- <img loading="lazy" class="footer-logo" src="images/footer-logo.png" alt="Constra"> -->
            <h4 class="text-white">CV. Coco Creative</h4>
            <?php if (get_cookie('lang_is')=== 'en'): ?>
              <p><?php echo $this->M_Website->tampil_footer_deskripsi()['isi_eng'] ?></p>
            <?php else: ?>
              <p><?php echo $this->M_Website->tampil_footer_deskripsi()['isi'] ?></p>
            <?php endif ?>
            <div class="footer-divider mt-2"></div>
          </div>
          <div class="footer-bottom">
            <?php if (get_cookie('lang_is')=='in'): ?>
              <h4 class="text-white">Kontak Kami</h4>
            <?php else: ?>
              <h4 class="text-white">Contact Us</h4>
            <?php endif ?>
            <p>Email: admin@cococreative-indonesia.com</p>
            <p>Phone: +62-852-9007-6364</p>
            <P>Address: Cilacap, Jawa Tengah, Indonesia</P>
          </div>
        </div><!-- Col end -->
        <div class="col-lg-6 col-md-6 footer-widget footer-about">
          <div class="footer-top mb-4">
            <!-- <img loading="lazy" class="footer-logo" src="images/footer-logo.png" alt="Constra"> -->
            <?php if (get_cookie('lang_is')=='in'): ?>
              <h4 class="text-white">Bisnis Dengan Kami</h4>
            <?php else: ?>
              <h4 class="text-white">Bussines With Us</h4>
            <?php endif ?>
            <div class="d-flex flex-column">
              <?php foreach ($this->M_Website->tampil_logo_bisnis_footer() as $row => $value): ?>
                <a href="<?php echo $value['link'] ?>" target="_blank"><img class="icon-e-commerce" src="<?php echo base_url('main/assets/assets/img/logos/')?><?php echo $value['gambar'] ?>"></a>
              <?php endforeach ?>
              <div class="footer-divider mt-2"></div>
            </div>
          </div>
          <div class="footer-bottom">
            <?php if (get_cookie('lang_is')=='in'): ?>
              <h4 class="text-white">Ikuti Kami</h4>
            <?php else: ?>
              <h4 class="text-white">Follow Us</h4>
            <?php endif ?>
            <div class="footer-social">
              <ul>
                <li><a href="https://web.facebook.com/cococreative.id" aria-label="Facebook" target="_blank"><i
                  class="fab fa-facebook-f font-size-20px"></i></a></li>
                  <li><a href="https://www.instagram.com/cococreative.id/" aria-label="Instagram" target="_blank"><i
                    class="fab fa-instagram"></i></a></li>
                    <li><a href="" aria-label="Github" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                  </ul>
                </div><!-- Footer social end -->
              </div>
            </div><!-- Col end -->
          </div><!-- Row end -->
        </div><!-- Container end -->
      </div><!-- Footer main end -->

      <div class="copyright">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-12">
              <div class="copyright-info text-center">
                <span>Copyright &copy; <script>
                  document.write(new Date().getFullYear())
                </script> Developed by <a href="https://Cococreative-indonesia.com">IT Cococreative</a></span>
              </div>
            </div>

   <!--          <div class="col-md-12">
              <div class="copyright-info text-center">
                <span>Distributed by <a href="https://themewagon.com/">Themewagon</a></span>
              </div>
            </div> -->

<!--             <div class="col-md-12">
              <div class="footer-menu text-center">
                <ul class="list-unstyled mb-0">
                  <li><a href="about.html">About</a></li>
                  <li><a href="team.html">Our people</a></li>
                  <li><a href="faq.html">Faq</a></li>
                  <li><a href="news-left-sidebar.html">Blog</a></li>
                  <li><a href="pricing.html">Pricing</a></li>
                </ul>
              </div>
            </div> -->
          </div><!-- Row end -->

          <div id="whatsapp" class="">
            <a target="_blank" href="https://api.whatsapp.com/send?phone=6285290076364&text=Hallo%20Admin%20Cococreative%0ASaya%20ingin%20bertanya%20tentang%20produk%20anda%20." class="font-size-40px">
              <i class="fab fa-whatsapp"></i>
            </a>
          </div>

          <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
              <i class="fa fa-angle-double-up"></i>
            </button>
          </div>

        </div><!-- Container end -->
      </div><!-- Copyright end -->
    </footer><!-- Footer end -->


  <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="<?= base_url('assets/') ?>plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="<?= base_url('assets/') ?>plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="<?= base_url('assets/') ?>plugins/slick/slick.min.js"></script>
    <script src="<?= base_url('assets/') ?>plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="<?= base_url('assets/') ?>plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="<?= base_url('assets/') ?>plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="<?= base_url('assets/') ?>plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="<?= base_url('assets/') ?>js/script.js"></script>
    <script src="<?= base_url('assets/') ?>js/slick-init.js"></script>

  </div><!-- Body inner end -->
</body>

</html>