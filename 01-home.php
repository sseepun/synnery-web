<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1">
    <img class="img" src="public/img/img-01.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 size-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/36.jpg');"></div> 
    <div class="container">
      <div class="text-center" data-aos="fade-up" data-aos-delay="0">
        <h3 class="color-01 fw-600">
          Full Services
        </h3>
        <h1 class="color-01 lh-2xs text-shadow fw-600">
          Digital Solutions
        </h1>
        <h3>
          for <span class="color-black fw-600">Government</span>
        </h3>
      </div>
      <p class="color-03 md-no-br fw-400 text-center" data-aos="fade-up" data-aos-delay="150">
        บริการงานด้านการตลาดแบบครบวงจร ตั้งแต่ รับโจทย์ วาง Concept สร้าง Content วางกลยุทธ์ กำหนดกลุ่มเป้าหมาย <br>
        วาง KPI และแผนประชาสัมพันธ์ผ่านช่องทางต่างๆ แบบ 360 องศา ตามโจทย์ หรือ KPI 
      </p>
      <div class="ss-box xl mt-6" data-aos="fade-up" data-aos-delay="300">
        <div class="grids">
          <?php for($i=0; $i<7; $i++){?>
            <div class="grid lg-25 md-50 sm-50 xs-100">
              <a class="ss-card ss-card-27" href="#">
                <div class="overlay"></div>
                <div class="wrapper">
                  <div class="icon mt-1">
                    <img class="inactive" src="public/img/icon/0<?= ($i%1+5) ?>.png" alt="Icon Inactive" />
                    <img class="active" src="public/img/icon/icon-active-0<?= ($i%1+5) ?>.png" alt="Icon Active" />
                  </div>
                  <div class="text-container mt-5">
                    <p class="title lh-sm">
                      Digital Marketing for <br> Government
                    </p>
                    <div class="card-more p xs mt-2">
                      Read more
                      <div class="arrow-icon">
                        <em class="fa-solid fa-arrow-right"></em>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-01 size-02">
    <div class="img-bg" style="background-image:url('public/img/bg/19.jpg');"></div> 
    <div class="container">
      <div class="video-button mt-6" data-aos="fade-up" data-aos-delay="150">
        <a id="video-container" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
          class="video-play-button" data-fancybox>
          <em class="fas fa-play"></em>
        </a>
        <p class="sm color-white text-center fw-300 mt-6 pt-4">Watch Video</p>  
      </div> 
    </div>        
  </section>

  <section data-section="4" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/32.jpg');"></div>
          </div>
        </div> 
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container">
            <h3 class="lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
              Digital Marketing <br> 
              <span class="color-black fw-300">for</span> 
              <span class="color-black fw-600">Government</span>
            </h3>
            <p class="color-03 fw-400 mt-2" data-aos="fade-up" data-aos-delay="150">
              บริการครบวงจรด้าน Digital Marketing ตั้งแต่ รับเป้าหมาย
              คิด Concept, Campaign จนถึงตัวชี้วัดโครงการ
            </p>
            <div class="btns pt-4" data-aos="fade-up" data-aos-delay="300">
              <a class="btn btn-action round btn-color-01" href="#">
                <span class="p xs fw-500">Explore More</span>
              </a>
            </div>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <section data-section="5" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container">
            <h3 class="lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
              Website <br> 
              <span class="color-black fw-300">for</span> 
              <span class="color-black fw-600">Government</span>
            </h3>
            <p class="color-03 fw-400 mt-2" data-aos="fade-up" data-aos-delay="150">
              บริการออกแบบและพัฒนาเว็บไซต์ภาครัฐ ตามมาตรฐานเว็บไซต์ภาครัฐ และ ITA 
              พร้อมระบบรักษาความปลอดภัย และโครงสร้าง และเครื่องมือที่ทันสมัย ใช้งานง่าย
            </p>
            <div class="btns pt-4" data-aos="fade-up" data-aos-delay="300">
              <a class="btn btn-action round btn-color-01" href="#">
                <span class="p xs fw-500">Explore More</span>
              </a>
            </div>
          </div>
        </div>
        <div class="block-float right d-flex ai-end">
          <div class="grids no-gap">
            <?php for($i=0; $i<6; $i++){?>
              <div class="grid lg-1-3 md-50 sm-1-3 xs-50 mt-0">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/img/content/3<?= ($i%6+3) ?>.jpg');"></div>
                </div>
              </div>
            <?php }?>     
          </div>
        </div>
      </div>
    </div>
    <div class="grids no-gap">
      <?php for($i=0; $i<6; $i++){?>
        <div class="grid lg-1-6 md-25 sm-1-3 xs-50 mt-0">
          <div class="ss-img square">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
          </div>
        </div>
      <?php }?>
    </div>
  </section>

  
  <?php
    $titles = [
      'JIGSAW<br>Intranet', 'JIGSAW<br>E-Saraban', 'JIGSAW<br>E-Document', 'JIGSAW<br>Project', 
      'JIGSAW<br>E-Learning', 'JIGSAW<br>Procurement','JIGSAW<br>Accounting', 'JIGSAW<br>Listening', 
      'JIGSAW<br>Vehicle', 'JIGSAW<br>Meeting Room'

    ];
  ?>

  <section data-section="6" class="section-01 section-padding">
    <div class="pattern style-01">
      <div class="wrapper">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-02">
      <div class="wrapper">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/61.jpg'); background-position:bottom center;"></div>
    <div class="container">
      <h3 class="text-center color-white fw-600" data-aos="fade-up" data-aos-delay="0">
        E-Office / ERP <span class="fw-300">for</span> Government
      </h3>
      <p class="text-center color-white fw-300" data-aos="fade-up" data-aos-delay="150">
        ออกแบบและพัฒนาระบบ E-Office Automation สำหรับระบบงานภาครัฐ 
        ด้วยแนวคิดการออกแบบและวางระบบแบบ Microservices และรองรับการทำงาน <br>
        ร่วมกับระบบอื่นๆ ได้อย่างง่ายผ่าน API และทำงานบนโครงสร้างของระบบเครือข่ายแบบ DevSecOps
      </p>
      <div class="hex-container pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="300">
        <?php for($i=0; $i<10; $i++){?>
          <div class="hex-flip">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1"><?php echo $titles[$i] ?></p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/1<?= ($i%10+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2"><?php echo $titles[$i] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>

        <?php
          $titles = [
            'JIGSAW<br>Help Desk', 'JIGSAW<br>Chat Bot', 'JIGSAW<br>Portal', 'JIGSAW<br>Financial', 
            'JIGSAW<br>Asset', 'JIGSAW<br>Sales Force','JIGSAW<br>CRM', 'JIGSAW<br>HRM', 
            'JIGSAW<br>HRD', 'JIGSAW<br>Budgeting'

          ];
        ?>

        <?php for($i=0; $i<10; $i++){?>
          <div class="hex-flip">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1"><?php echo $titles[$i] ?></p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/2<?= ($i%12+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2"><?php echo $titles[$i] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>

        <?php
          $titles = [
            'JIGSAW<br>E-Form', 'JIGSAW<br>BI'
          ];
        ?>

        <?php for($i=0; $i<2; $i++){?>
          <div class="hex-flip">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1"><?php echo $titles[$i] ?></p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/3<?= ($i%2+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2"><?php echo $titles[$i] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>   
    </div>
  </section>

  <section data-section="7" class="section-10 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/58.jpg'); background-position:top center;"></div>
    <div class="container">
      <div class="text-center">
        <h3 class="lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
          Mini Site for <span class="color-black">Government</span>
        </h3>
        <p class="color-03 fw-400 mt-2 md-no-br" data-aos="fade-up" data-aos-delay="150">
          สร้างเว็บไซต์ย่อยๆ ได้อย่างไม่จำกัด เหมาะสำหรับหน่วยงานหลัก ที่มีหน่วยงานย่อยๆ ภายใต้การกำกับดูแล <br>
          ต้องการให้เว็บของเว็บไซต์หลัก เว็บไซต์ย่อยมีรูปแบบไปในแนวทาง Design เดียวกัน
        </p>
      </div>
      <div class="swiper-container mt-6 pt-2" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-wrapper">
          <?php for($i=0; $i<5; $i++){?>
            <div class="swiper-slide">
              <div class="ss-card ss-card-29 box-shadow">
                <div class="ss-img vertical-01">
                  <div class="img-bg" style="background-image:url('public/img/content/web-showcase-0<?= ($i%7+1) ?>.jpg');"></div>
                </div>
              </div> 
            </div>
          <?php }?>
        </div>
        <div class="navigator">
          <div class="arrow-left btn-icon-next">
            <img src="public/img/icon/arrow-01.png" alt="Arrow" />
          </div>
          <div class="dots"></div>
          <div class="arrow-right btn-icon-next">
            <img src="public/img/icon/arrow-02.png" alt="Arrow" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="9" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/37.jpg'); background-position:bottom center;"></div>
    <div class="container pt-6 pb-6">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Virtual World <span class="color-white">Services</sapn>
      </h3>
      <div class="grids jc-center mt-4" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<3; $i++){?>
          <div class="grid lg-1-3">
            <div class="ss-card ss-card-31 box-shadow">
              <div class="ss-img vertical-01">
                <div class="img-bg" style="background-image:url('public/img/content/v-service-0<?= ($i%2+1) ?>.jpg');"></div>
              </div>
              <div class="filter-01"></div>
              <div class="hover-filter-01"></div>
              <div div class="card-line-1"></div>
              <div div class="card-line-2"></div>
              <div class="icon-container">
                <div class="video-button">
                  <a id="video-container" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
                    class="video-play-button" data-fancybox>
                    <em class="fas fa-play"></em>
                  </a>
                </div>
              </div>
              <div class="text-container">
                <h5 class="title color-white lh-2xs fw-600">
                  3D Virtual Tour /<br>Metaverse
                </h5>
                <p class="sm desc color-white ss-text-wrapper xxxs">
                  ออกแบบและพัฒนาระบบ Virtual แบบ 360 องศา พร้อมระบบ Walk Throught รวมถึงการเชื่อมต่อวีดีโอ 
                  เพื่อนำเสนอสถานที่ สินค้า หรือบริการต่าง ๆ ในรูปแบบของภาพนิ่งแบบ 360 องศา ๆ ออกแบบและพัฒนาระบบ 
                  Virtual แบบ 360 องศา พร้อมระบบ Walk Throught รวมถึงการเชื่อมต่อวีดีโอ เพื่อนำเสนอสถานที่ สินค้า 
                  หรือบริการต่าง ๆ ในรูปแบบของภาพนิ่งแบบ 360 องศา ๆ
                </p>
                <a class="card-more p sm fw-700" href="#">
                  Read More
                  <div class="arrow-icon">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                </a>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <section data-section="10" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/40.jpg'); background-position:top center;"></div>  
    <div class="container">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Enterprise DevSecOps <span class="color-black">Solutions</span>
      </h3>
      <p class="text-center md-no-br" data-aos="fade-up" data-aos-delay="150">
        บริการออกแบบ ติดตั้งระบบ เครื่อข่ายคอมพิวเตอร์ขนาดใหญ่ พร้อมทีมงานผู้เชี่ยวชายด้านการ 
        ติดตั้งและบริหารจัดการงานด้าน DevSecOps <br>
        เพื่อสร้างระบบเครือข่ายที่มีความเสถียรและสามารถ Auto Scale ได้ง่ายง่าย
      </p>
      <div class="ss-box xl mt-6 pt-4" data-aos="fade-up" data-aos-delay="300">
        <img class="img" src="public/img/content/04.png" alt="Banner" />
      </div>
    </div>
  </section>

  <section data-section="11" class="section-12 bg-06">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/16.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="text-container md">
            <h3 class="lh-2xs color-01 fw-600 lh-sm" data-aos="fade-up" data-aos-delay="0">
              Tech & Tools 
              <span class="h4 lg color-black fw-400">ที่เราเลือกใช้</span>
            </h3>
            <div class="gallery-grids jc-center" data-aos="fade-up" data-aos-delay="150">
              <?php for($i=0; $i<20; $i++){?>
                <div class="grid xl-20 lg-25 md-1-3 sm-20 xs-1-3 pt-3">
                  <div class="ss-card ss-card-14">
                    <div class="icon">
                      <img class="inactive" src="public/img/icon/tech-1<?= ($i%10+0) ?>.png" alt="Icon Inactive" />
                      <img class="active" src="public/img/icon/active-tech-1<?= ($i%10+0) ?>.png" alt="Icon Active" />
                    </div>
                    <div class="text-container mt-1">
                      <p class="xs title text-center color-black fw-600">MySQL</p>
                    </div>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="13" class="section-03 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/35.jpg');"></div>  
    <div class="container">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Our Clients
      </h3>
      <p class="text-center md-no-br" data-aos="fade-up" data-aos-delay="150">
        ประสบการณ์มากกว่า 24 ปี ผลงานกับลูกค้าทั้งภาครัฐและเอกชนขนาดใหญ่กว่า 300 ราย มากกว่า 500 โครงการ
      </p>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="300">
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
            <h4 class="color-black fw-700 lh-xs">CLIENTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">500</p>
            <h4 class="color-black fw-700 lh-xs">PROJECTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
            <h4 class="color-black fw-700 lh-xs">YEARS</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="clients" data-aos="fade-up" data-aos-delay="450">
      <?php for($i=0; $i<24; $i++){?>
        <div class="client">
          <div class="ss-card ss-card-26">
            <div class="wrapper">
              <div class="image-container">
                <img src="public/img/clients/client-02.png" alt="Client" />
              </div>
              <div class="text-container mt-4">
                <p class="xs title">กระทรวงพลังงาน</p>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    TweenMax.set('.pattern.style-01', {y:-7});
    var tlanimation = new TimelineMax({repeat:-1, yoyo:true});
    tlanimation.to('.pattern.style-01', 3, {y:7});

    TweenMax.set('.pattern.style-02', {y:7});
    var tlanimation = new TimelineMax({repeat:-1, yoyo:true});
    tlanimation.to('.pattern.style-02', 3, {y:-7});
  </script>
</body>
</html>