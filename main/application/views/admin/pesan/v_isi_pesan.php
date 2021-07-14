<?php
date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
?>
<div class="card-header bg-dark">
  <div class="col image m-auto d-flex">
    <!--     <img src="http://nicesnippets.com/demo/man01.png" class="rounded"> -->
    <?php if (!$this->uri->segment(3)): ?>
      <?php else: ?>
    <h6 class="pt-1 text-white mt-auto mb-auto pl-1"><?php echo $pengirim_pesan['no_hp'] ?></h6>
    <?php endif ?>
    <i class="fa fa-circle ml-1 text-success mt-auto mb-auto" aria-hidden="true"></i>
  </div>
</div>
<ul class="pl-3 pr-3 pt-1 mb-1" id="scroll">
  <?php if (!$this->uri->segment(3)): ?>
    <ul class="pl-3 pr-3 pt-1 mb-1" id="scroll">
      <h1 class="display-3 text-center">Tidak ada pesan dipilih</h1>
    </ul>
    <?php else: ?>

      <?php foreach ($isi_pesan as $row => $value): ?>
        <?php if ($value['pengirim']==1): ?>
          <li class="p-2 mb-1 rounded w-75 bg-secondary text-white">
            <span class="float-right time"><?php echo date('H:i') ?>
              <div class="btn-group dropup">
                <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="sr-only">Toggle Dropdown</span>
                </button>
                <div class="dropdown-menu">
                  <a href="" class="dropdown-item hapuspesan" data-idpesan="">Hapus</a>
                </div>
              </div>
            </span>
            <p class="m-0"><?php echo $value['isi_pesan'] ?></p>
          </li>
          <?php else: ?>
            <li class="p-2 mb-1 rounded bg-info text-white w-75 ml-auto">
              <span class="float-right time text-white"><?php echo date('H:i') ?>
                <i class="fas fa-check-double text-primary"></i>
                <div class="btn-group dropup">
                  <button type="button" class="btn dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="sr-only">Toggle Dropdown</span>
                  </button>
                  <div class="dropdown-menu">
                    <a href="" class="dropdown-item hapuspesan" data-idpesan="">Hapus</a>
                  </div>
                </div>
              </span>
              <p class="m-0"><?php echo $value['isi_pesan'] ?></p>
            </li>
          <?php endif ?>
        <?php endforeach ?>
      <?php endif ?>
    </ul>
<script type="text/javascript">
$('#scroll').scrollTop($('#scroll')[0].scrollHeight);
// $('.hapuspesan').on('click',function(){
// const idpesan=$(this).data('idpesan');
// $.ajax({
// url:"<?php echo base_url('Pesan/hapuspesan') ?>",
// type:"POST",
// data:{
// idpesan:idpesan
// },
// success:function(){
// document.location.href="<?php echo base_url('Pesan/index/'.$this->uri->segment(3)) ?>";
// }
// })
// });
</script>