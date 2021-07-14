<?php
date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
?>
<?php foreach ($pengirim as $row => $value): ?>
<a class="dropdown-item d-flex align-items-center" href="<?php echo base_url('pesan/index/'.$value['id_pengirim']) ?>">
	<div class="dropdown-list-image mr-3">
		<img class="rounded-circle" src="<?php echo base_url('assets/assets/img/upload/profil') ?>/default.png"
		alt="">
		<div class="status-indicator bg-success"></div>
	</div>
	<div class="font-weight-bold">
		<div class="text-truncate"><?php echo $value['isi_pesan'] ?></div>
		<div class="small text-gray-500"><?php echo $value['no_hp'] ?> · <?php echo date('H:i. D, d F Y',$value['time']) ?></div>
	</div>
</a>
<?php endforeach ?>