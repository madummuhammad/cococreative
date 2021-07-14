<?php
date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
?>
<?php foreach ($pengirim_pesan as $row => $value): ?>
<div class="card m-2 <?php if ($value['id']==$this->uri->segment(3)): ?>
	<?php echo 'bg-secondary' ?>
<?php endif ?>">
	<a href="<?php echo base_url('pesan/index/'.$value['id']) ?>" class="pengirim nav-link <?php if ($value['id']==$this->uri->segment(3)): ?>
		<?php echo 'text-dark' ?>
	<?php endif ?>">
		<div class="row">
			<div class="col-5">
				<img src="<?php echo base_url('assets/assets/img/upload/profil') ?>/default.png" alt="..." class="img-thumbnail">
			</div>
			<div class="col-7">
				<p><?php echo $value['no_hp'] ?></p>
				<!-- 											<small>asdfa asdfas</small> -->
			</div>
			<hr>
		</div>
	</a>
</div>
<hr>
<?php endforeach ?>