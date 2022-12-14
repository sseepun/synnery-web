<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/bg/23.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding bg-05">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <div class="ss-box xl">
        <div class="text-center color-01">
          <h1 class="lh-2xs text-center text-shadow fw-600" data-aos="fade-up" data-aos-delay="0">
            Our Culture & Life Style
          </h1>
          <p class="h5 color-black lh-sm fw-400 xs-no-br mt-3" data-aos="fade-up" data-aos-delay="150">
            เพราะเราไม่ได้มองแค่ชีวิตการทำงาน แต่เราเสริมสร้างและเน้นพัฒนาคน <br>
            เพื่อพัฒนาคุณภาพองค์กร และคุณภาพการใช้ชีวิตของทีมงาน
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php
    $categories = [
      [
        'title' => 'About Us' 
      ], [
        'title' => 'For Investor'
      ], [
        'title' => 'For Startup'
      ]
    ]
  ?>
  <section data-section="3" class="section-07">
    <div class="tab-container">
      <div class="bg-01" data-aos="fade-in" data-aos-delay="150">
        <div class="tabs tabs-01">
          <?php foreach($categories as $j=>$k){?>
            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <h6 class="title color-white"><?= $k['title'] ?></h6>
            </a>
          <?php }?>
        </div>
      </div>
      <div class="tab-contents section-padding" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($categories as $j=>$k){?>
          <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
            <div class="container">
              <div class="content-container" data-aos="fade-up" data-aos-delay="0">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php for($i=0; $i<5; $i++){?>
                      <div class="swiper-slide">
                        <div class="wrapper">
                          <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                            <div class="ss-img horizontal-03">
                              <div class="img-bg" style="background-image:url('public/img/content/unsplash-1<?= ($i%2+4) ?>.jpg');"></div>
                            </div>
                            <div class="hover-filter-01"></div>
                            <div class="card-icon">
                              <div class="icon">
                                <img class="img" src="public/img/icon/play.png" alt="Banner" />
                              </div>
                            </div>
                            <div class="card-line-1"></div><div class="card-line-2"></div>
                          </a>
                          <a class="text-center d-block fw-400 mt-2">
                            video อบรม กระทรวงศึกษาธิการ
                          </a>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                  <div class="dots"></div>
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
          </div>
        <?php }?>
      </div>
    </div>   
  </section>

  <section data-section="2" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/20.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/60.jpg');"></div>
          <div class="text-container md">
            <h3 class="color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
              สนใจสมัครงานกับเรา
            </h3>
            <p class="lg color-black fw-500 mt-1" data-aos="fade-up" data-aos-delay="150">
              ดูตำแหน่งที่เปิดรับได้เลย
            </p>  
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>