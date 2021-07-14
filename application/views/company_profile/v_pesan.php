<?php
date_default_timezone_set('Asia/Jakarta');//Menyesuaikan waktu dengan tempat kita tinggal
?>
<ul class="pl-3 pr-3 pt-1 mb-1" id="scroll">
  <?php foreach ($pesan as $row): ?>
    <?php if ($row['pengirim']==2): ?>
     <li class="p-2 mb-1 rounded w-75 bg-secondary text-white">     
      
        <span class="float-right time text-white"><?php echo date('H:i',$row['time']) ?></span>
        <p class="m-0"><?php echo $row['isi_pesan']; ?></p>
    </li>
    <?php else: ?>
        <li class="p-2 mb-1 rounded bg-success text-white w-75 ml-auto">
            <span class="float-right time text-white">
                <?php echo date('H:i',$row['time']) ?>
                <?php if ($row['new']==0): ?>
                    <i class="fas fa-check-double text-primary"></i>
                    <?php else: ?>
                        <i class="fas fa-check-double text-secondary"></i>
                    <?php endif ?>
                    
                </span>
                <p class="m-0"><?php echo $row['isi_pesan'] ?></p>
            </li>      
        <?php endif ?>                   
    <?php endforeach ?>
</ul> 
<script type="text/javascript">
   $('#scroll').scrollTop($('#scroll')[0].scrollHeight);
</script>