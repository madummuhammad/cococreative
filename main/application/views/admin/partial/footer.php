<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; <?php echo SITE_NAME ?> 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
      <button class="close" type="button" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
</div>
<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
<div class="modal-footer">
  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
  <a class="btn btn-primary" href="<?php echo base_url('Auth/logout') ?>">Logout</a>
</div>
</div>
</div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url('assets/assets2/') ?>vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('assets/assets2/') ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url('assets/assets2/') ?>vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="<?php echo base_url('assets/assets2/') ?>js/sb-admin-2.min.js"></script>
<script src="<?php echo base_url('assets/assets2/') ?>js/cococreative.js"></script>

<!-- Page level plugins -->
<script src="<?php echo base_url('assets/assets2/') ?>vendor/chart.js/Chart.min.js"></script>
<!-- Page level custom scripts -->

<script src="<?php echo base_url('assets/assets2/') ?>js/demo/chart-pie-demo.js"></script>
<script src="<?php echo base_url('assets/assets2/') ?>js/demo/chart-bar-demo.js"></script>
<script src="<?php echo base_url('assets/assets2/') ?>js/admin.js"></script>
<!-- Page level plugins -->
<script src="<?php echo base_url('assets/assets2/') ?>vendor/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/assets2/') ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
<!-- Page level custom scripts -->
<script src="<?php echo base_url('assets/assets2/') ?>js/demo/datatables-demo.js"></script>
<script>
    $('.satu').on('click',function(){
        const view_more=$(this).data('viewmore');
        const id_jenisproduk=$(this).data('idproduk');
        $.ajax({
            url:"<?php echo base_url('produk/ubah_view_more') ?>",
            type:"POST",
            data:{
                view_more:view_more,
                id_jenisproduk:id_jenisproduk
            },
            success:function(){
                document.location.href="<?php echo base_url('produk') ?>";
            }
        })
    })
    // Batas jquery


    $(function(){
    setInterval(isi, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
    function isi() {
        $.ajax({
            url: "<?php echo base_url('Pesan/tampilpesan/'.$this->uri->segment(3))?>",
            success: function(data) {
                $('.isi').html(data);
            },
        });
    }
// Batas jquery


$(function(){
    setInterval(pengirim_pesan, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
function pengirim_pesan() {
    $.ajax({
        url: "<?php echo base_url('pesan/tampil_pengirim_pesan/').$this->uri->segment(3)?>",
        success: function(data) {
            $('.pengirimpesan').html(data);
        },
    });
}
// Batas jquery

$(function(){
    setInterval(pusat_pesan, 1000);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
function pusat_pesan() {
    $.ajax({
        url: "<?php echo base_url('pesan/tampil_pusat_pesan')?>",
        success: function(data) {
            $('.pusat_pesan').html(data);
        },
    });
}

$(function(){
    setInterval(jml_pesan, 100);//fungsi yang dijalan setiap detik, 1000 = 1 detik
});
function jml_pesan() {
    $.ajax({
        url: "<?php echo base_url('pesan/jumlah_pesan')?>",
        success: function(data) {
            $('.jumlah_pesan').html(data);
        },
    });
}

$(document).ready(function(){
    load_data();
    function load_data(pesan,id_pengirim)
    {
      $(".isipesan").val('');
      $.ajax({
        method:"POST",
        url:"<?php echo base_url('Pesan/tampilpesan/').$this->uri->segment(3)?>",
        data: {
            pesan:pesan,
            id_pengirim:id_pengirim
        },
        success:function(hasil)
        {
            $('.isi').html(hasil);
        }
    });
  }
  $('.send').click(function(){
    var pesan = $(".isipesan").val();
    var id_pengirim = $(".idpengirim").val();
    load_data(pesan,id_pengirim);
});
  $('.isipesan').keypress(function(e) {
    if(e.which == 13) {
        var pesan = $(".isipesan").val();
        var id_pengirim = $(".idpengirim").val();
        load_data(pesan,id_pengirim);
    }
});
});



// Area Chart

// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

function number_format(number, decimals, dec_point, thousands_sep) {
  // *     example: number_format(1234.56, 2, ',', ' ');
  // *     return: '1 234,56'
  number = (number + '').replace(',', '').replace(' ', '');
  var n = !isFinite(+number) ? 0 : +number,
  prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
  sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
  dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
  s = '',
  toFixedFix = function(n, prec) {
      var k = Math.pow(10, prec);
      return '' + Math.round(n * k) / k;
  };
  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
  if (s[0].length > 3) {
    s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
}
if ((s[1] || '').length < prec) {
    s[1] = s[1] || '';
    s[1] += new Array(prec - s[1].length + 1).join('0');
}
return s.join(dec);
}

// Area Chart Example
var ctx = document.getElementById("myAreaChart");
var myLineChart = new Chart(ctx, {
  type: 'line',
  data: {
    labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    datasets: [{
      label: "Jumlah Pengunjung",
      lineTension: 0.3,
      backgroundColor: "rgba(78, 115, 223, 0.05)",
      borderColor: "rgba(78, 115, 223, 1)",
      pointRadius: 3,
      pointBackgroundColor: "rgba(78, 115, 223, 1)",
      pointBorderColor: "rgba(78, 115, 223, 1)",
      pointHoverRadius: 3,
      pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
      pointHoverBorderColor: "rgba(78, 115, 223, 1)",
      pointHitRadius: 10,
      pointBorderWidth: 2,
      data: [
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(1) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(2) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(3) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(4) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(5) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(6) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(7) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(8) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(9) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(10) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(11) ?>, 
      <?php echo $this->M_Pengunjung->pengunjung_perbulan(12) ?>
      ],
  }],
},
options: {
    maintainAspectRatio: false,
    layout: {
      padding: {
        left: 10,
        right: 25,
        top: 25,
        bottom: 0
    }
},
scales: {
  xAxes: [{
    time: {
      unit: 'date'
  },
  gridLines: {
      display: false,
      drawBorder: false
  },
  ticks: {
      maxTicksLimit: 12
  }
}],
yAxes: [{
    ticks: {
      maxTicksLimit: 5,
      padding: 10,
          // Include a dollar sign in the ticks
          callback: function(value, index, values) {
            return  number_format(value);
        }
    },
    gridLines: {
      color: "rgb(234, 236, 244)",
      zeroLineColor: "rgb(234, 236, 244)",
      drawBorder: false,
      borderDash: [2],
      zeroLineBorderDash: [2]
  }
}],
},
legend: {
  display: false
},
tooltips: {
  backgroundColor: "rgb(255,255,255)",
  bodyFontColor: "#858796",
  titleMarginBottom: 10,
  titleFontColor: '#6e707e',
  titleFontSize: 14,
  borderColor: '#dddfeb',
  borderWidth: 1,
  xPadding: 15,
  yPadding: 15,
  displayColors: false,
  intersect: false,
  mode: 'index',
  caretPadding: 10,
  callbacks: {
    label: function(tooltipItem, chart) {
      var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
      return datasetLabel + ': ' + number_format(tooltipItem.yLabel);
  }
}
}
}
});

</script>
</body>
</html>