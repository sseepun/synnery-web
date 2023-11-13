<?php 
  $titles = [
    'Virtual Exhibition', 'Virtual Live Event', 'Virtual Tour', 'Virtual Showroom', 'Virtual Product 360',
    'Virtual Product 360', 'Metaverse', 'VR (Virtual Reality)', 'Mixed Reality'
  ]
?>
<section class="section-01 section-padding pt-0">
  <div class="pattern style-49">
    <div class="wrapper" value="-.5">
      <img src="<?php echo DOMAIN ?>public/img/patterns/09.png" alt="Hero">
    </div>
  </div>
  <div class="img-bg" style="background-image:url('<?php echo DOMAIN ?>public/img/bg/96.jpg');"></div>
  <div class="container">
  <div class="container" style="z-index:2;">
    <div class="ss-box xl">
      <div class="grids jc-center">
        <?php for($i=0; $i<9; $i++){?>
          <div class="grid lg-20 md-25 sm-1-3 xs-50">
            <div class="ss-card ss-card-16 style-02 mt-2">
              <div class="icon">
                <img class="Inactive" src="<?php echo DOMAIN ?>public/img/icon/full-service-0<?= ($i%9+1) ?>.png" alt="Icon Active" />
                <img class="active" src="<?php echo DOMAIN ?>public/img/icon/full-service-active-0<?= ($i%9+1) ?>.png" alt="Icon Inactive" />
              </div>
              <div class="text-container">
                <p class="xs title color-black fw-500 mt-2">
                  <?php echo $titles[$i] ?>
                </p>
              </div>
            </div>
          </div>
        <?php }?>

        <?php 
          $titles = [
            '3D Animation', 'Interactive Media', '360’ Video', 'Touchscreen','Simulator', 
            'Infographics', 'Info-Video', 'Cartoon', 'Animation', 'Games'
          ]
        ?>
        <?php for($i=0; $i<10; $i++){?>
          <div class="grid lg-20 md-25 sm-1-3 xs-50">
            <div class="ss-card ss-card-16 style-02 mt-2">
              <div class="icon">
                <img class="Inactive" src="<?php echo DOMAIN ?>public/img/icon/full-service-1<?= ($i%10+0) ?>.png" alt="Icon Active" />
                <img class="active" src="<?php echo DOMAIN ?>public/img/icon/full-service-active-1<?= ($i%10+0) ?>.png" alt="Icon Inactive" />
              </div>
              <div class="text-container">
                <p class="xs title color-black fw-500 mt-2">
                  <?php echo $titles[$i] ?> 
                </p>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>    
</section>