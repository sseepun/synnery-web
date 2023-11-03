
<?php include('data/submenu-web-mobile.php') ?>
<section class="section-01 pb-6">
  <div class="pattern style-50">
    <div class="wrapper" value=".5">
      <img src="public/img/patterns/07.png" alt="Hero">
    </div>
  </div>
  <div class="pattern style-51">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/08.png" alt="Hero">
    </div>
  </div>
  <div class="container">
    <div class="hex-container pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="0">
      <?php foreach($subWebMobile01 as $d) {?>
        <a class="hex-flip" href="erp-for-government.php">
          <div class="hex lg">
            <div class="hex lg bg">
              <div class="wrapper text-center color-white">
                <div class="icon">
                  <?= $d['icon'] ?>
                </div>
                <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                  <?= $d['title'] ?>
                </p>
              </div>
            </div>
            <div class="hex lg inner">
              <div class="wrapper text-center color-p">
                <div class="icon">
                  <?= $d['icon'] ?>
                </div>
                <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                  <?= $d['title'] ?>
                </p>
              </div>
            </div>
          </div>
        </a>
      <?php }?>

     
      <?php foreach($subWebMobile02 as $d ){?>
        <a class="hex-flip" href="erp-for-government.php">
          <div class="hex lg">
            <div class="hex lg bg">
              <div class="wrapper text-center color-white">
                <div class="icon">
                  <?= $d['icon'] ?>
                </div>
                <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                  <?= $d['title'] ?>
                </p>
              </div>
            </div>
            <div class="hex lg inner">
              <div class="wrapper text-center color-p">
                <div class="icon">
                  <?= $d['icon'] ?>
                </div>
                <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                  <?= $d['title'] ?>
                </p>
              </div>
            </div>
          </div>
        </a>
      <?php }?>

      <?php foreach($subWebMobile03 as $d ){?>
        <a class="hex-flip" href="erp-for-government.php">
          <div class="hex lg">
            <div class="hex lg bg">
              <div class="wrapper text-center color-white">
                <div class="icon">
                  <?= $d['icon'] ?>
                </div>
                <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                  <?= $d['title'] ?>
                </p>
              </div>
            </div>
            <div class="hex lg inner">
              <div class="wrapper text-center color-p">
                <div class="icon">
                  <?= $d['icon'] ?>
                </div>
                <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                  <?= $d['title'] ?>
                </p>
              </div>
            </div>
          </div>
        </a>
      <?php }?>
    </div>
  </div>
</section>