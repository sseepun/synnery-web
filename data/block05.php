<?php 
  $titles = [
    'Virtual Exhibition', 'Virtual Live Event', 'Virtual Tour', 'Virtual Showroom', 'Virtual Product 360',
    'Virtual Product 360', 'Metaverse', 'VR (Virtual Reality)', 'Mixed Reality'
  ]
?>
<section class="section-01 section-padding bg-05">
  <div class="pattern style-32">
    <div class="wrapper" value=".5">
      <img src="public/img/content/pattern-18.png" alt="Hero">
    </div>
  </div>
  <div class="container" style="z-index:2;">
    <div class="ss-box xl mt-6">
      <div class="grids jc-center">
        <?php for($i=0; $i<9; $i++){?>
          <div class="grid lg-20 md-25 sm-1-3 xs-50">
            <div class="ss-card ss-card-16 style-02 mt-2">
              <div class="icon">
                <img class="Inactive" src="public/img/icon/full-service-0<?= ($i%9+1) ?>.png" alt="Icon Active" />
                <img class="active" src="public/img/icon/full-service-active-0<?= ($i%9+1) ?>.png" alt="Icon Inactive" />
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
                <img class="Inactive" src="public/img/icon/full-service-1<?= ($i%10+0) ?>.png" alt="Icon Active" />
                <img class="active" src="public/img/icon/full-service-active-1<?= ($i%10+0) ?>.png" alt="Icon Inactive" />
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

<section data-section="3" class="section-08 section-padding">
  <div class="pattern style-04">
    <div class="wrapper" value=".5">
      <img src="public/img/content/pattern-29.png" alt="Hero">
    </div>
  </div>
  <div class="container" style="z-index:2;">
    <div class="text-center">
      <h3 class="color-01 lh-3xs fw-600">
        Virtual Exhibition /<span class="h4 lg color-black fw-600">Virtual Live Event</span>
      </h3> 
      <p class="lg color-03 fw-500">
        รวมภาพเบื้องหลังการทำงานของทีมงาน
      </p>   
    </div>
    <div class="content-container width-full mt-6 pt-4">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php for($j=0; $j<12; $j++){?>
            <div class="swiper-slide">
              <div class="wrapper">
                <div class="grids no-gap">
                  <?php for($i=0; $i<2; $i++){?>
                    <div class="grid lg-1-3 xs-50 mt-0">
                      <div class="p-1">
                        <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                          <div class="ss-img horizontal-03">
                            <div class="img-bg" style="background-image:url('public/img/content/content-2<?= ($i%6+0) ?>.jpg');"></div>
                          </div>
                          <div class="hover-filter-01"></div>
                          <div class="card-line-1"></div><div class="card-line-2"></div>
                        </a>
                      </div>
                    </div>
                    <div class="grid lg-1-6 xs-50 mt-0">
                      <div class="p-1 h-full">
                        <a class="ss-card ss-card-03 style-02" href="public/img/content/content-2<?= ($i%6+2) ?>.jpg" data-fancybox="gallery">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/img/content/content-2<?= ($i%6+2) ?>.jpg')"></div>
                          </div>
                          <div class="hover-filter-01"></div>
                          <div class="line-1"></div><div class="line-2"></div>
                        </a>
                      </div>
                    </div>
                  <?php }?>
                  <?php for($i=0; $i<2; $i++){?>
                    <div class="grid lg-1-6 xs-50 mt-0">
                      <div class="p-1 h-full">
                        <a class="ss-card ss-card-03 style-02" href="public/img/content/content-2<?= ($i%6+4) ?>.jpg" data-fancybox="gallery">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/img/content/content-2<?= ($i%6+4) ?>.jpg')"></div>
                          </div>
                          <div class="hover-filter-01"></div>
                          <div class="line-1"></div><div class="line-2"></div>
                        </a>
                      </div>
                    </div>
                  <?php }?>
                  <?php for($i=0; $i<2; $i++){?>
                    <div class="grid lg-1-3 xs-50 mt-0">
                      <div class="p-1">
                        <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                          <div class="ss-img horizontal-03">
                            <div class="img-bg" style="background-image:url('public/img/content/content-2<?= ($i%6+6) ?>.jpg');"></div>
                          </div>
                          <div class="hover-filter-01"></div>
                          <div class="card-line-1"></div><div class="card-line-2"></div>
                        </a>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="navigator">
          <div class="progress p color-01 fw-500"></div>
          <div class="line"></div>
          <div class="dots"></div>
        </div>
      </div>
      <div class="arrows">
        <div class="arrow btn-icon-next">
          <img src="public/img/icon/arrow-01.png" alt="Arrow" />
        </div>
        <div class="arrow btn-icon-next">
          <img src="public/img/icon/arrow-02.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </div>        
</section>