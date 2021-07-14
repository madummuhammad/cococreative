<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <?php 
    $i=count($breadcrumb);
    $terakhir=$i-1;
     ?>
    <?php foreach ($breadcrumb as $row => $value): ?>
      <li class="breadcrumb-item <?php if ($row==$terakhir): ?>
        <?php echo 'active' ?>
      <?php endif ?>"><a <?php if ($row !=$terakhir): ?>
        <?php echo 'href="'.base_url($this->uri->segment($row)).'"' ?>
      <?php endif ?>><?php echo $value ?></a></li>
    <?php endforeach ?>
  </ol>
</nav>