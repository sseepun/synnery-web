<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php $topnavActive=1; include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" class="banner-02">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<18; $i++){?>
          <div class="swiper-slide">
            <div class="wrapper">
              <?php if($i === 0){?>
                <div class="img-bg" style="background-image:url('public/img/bg/banner-02.jpg');"></div>
                <div class="hero">
                  <div class="animate-02" style="--delay:.45s;">
                    <img src="public/img/hero/banner-01.png" alt="Hero" />
                  </div>
                </div>
                <div class="container">
                  <div class="text-container">
                    <h1 class="lg fw-500 color-white lh-3xs animate-01" style="--delay:.45s;">
                      Website
                    </h1>
                    <h1 class="fw-500 color-white lh-2xs animate-01" style="--delay:.6s;">
                      <span class="fw-200">for</span> Government
                    </h1>
                    <h6 class="color-white animate-01" style="--delay:.75s;">
                      ออกแบบและพัฒนาเว็บไซต์ ตามมาตรฐานเว็บไซต์ภาครัฐ และ ITA
                    </h6>
                    <div class="btns pt-6 animate-01" style="--delay:.9s;">
                      <?php
                        $btnBubble = [
                          'href' => 'web-gov-standard.php',
                          'title' => 'Explore More',
                        ];
                        include('component/btn-bubble.php');
                      ?>
                    </div>
                  </div>
                </div>
              <?php }?>
              <?php if($i > 0){?>
                <div class="img-bg" style="background-image:url('public/img/bg/banner-0<?= ($i%7+3) ?>.jpg');"></div>
              <?php }?>
              <?php if($i > 7){?>
                <div class="img-bg" style="background-image:url('public/img/bg/banner-1<?= ($i%10+0) ?>.jpg');"></div>
              <?php }?>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="arrows">
        <div class="arrow arrow-prev">
          <img src="public/img/icon/arrow-left.png" alt="Arrow" />
        </div>
        <div class="arrow-sep">
          <img src="public/img/icon/arrow-sep.png" alt="Arrow Sep" />
        </div>
        <div class="arrow arrow-next">
          <img src="public/img/icon/arrow-right.png" alt="Arrow" />
        </div>
      </div>
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#ffffff" />
      </g>
      </svg>
    </div>
  </section>

  <?php
    $titles = [
      [ 'title' => 'Digital Marketing<br>for Government', 'url' => 'services.php' ],
      [ 'title' => 'Website<br>for Government', 'url' => 'web-gov-standard.php' ],
      [ 'title' => 'Mini Site<br>for Government', 'url' => 'web-gov-minisite.php' ],
      [ 'title' => 'Enterprise WordPress<br>for Government', 'url' => 'enterprise-wordpress-solution.php' ],
      [ 'title' => 'Virtual World<br>Services', 'url' => 'virtual-world.php' ],
      [ 'title' => 'e-Office / ERP<br>for Government', 'url' => 'erp-for-government.php' ],
      [ 'title' => 'Enterprise<br>DevSecOps Solutions', 'url' => 'network-security-system.php' ],
    ]
  ?>
  <section data-section="2" class="section-01 section-padding">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/36.jpg');"></div> 
    <div class="container" style="z-index:2;">
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
        วาง KPI และแผนประชาสัมพันธ์ผ่านช่องทางต่าง ๆ แบบ 360 องศา ตามโจทย์ หรือ KPI 
      </p>
      <div class="ss-box xl mt-6" data-aos="fade-up" data-aos-delay="300">
        <div class="grids">
          <?php foreach($titles as $i=>$d){?>
            <div class="grid lg-25 md-50 sm-50 xs-100">
              <a class="ss-card ss-card-27" href="<?= $d['url'] ?>">
                <div class="wrapper">
                  <div class="icon mt-1">
                    <img class="inactive" src="public/img/icon/service-0<?= ($i%7+1) ?>.png" alt="Icon Inactive" />
                    <img class="active" src="public/img/icon/service-active-0<?= ($i%7+1) ?>.png" alt="Icon Active" />
                  </div>
                  <div class="text-container mt-5">
                    <p class="title lh-sm md-no-br">
                      <?= $d['title'] ?>
                    </p>
                    <div class="card-more p xs mt-2">
                      Read more
                      <div class="arrow-icon">
                        <em class="fa-solid fa-arrow-right"></em>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="line-3"></div><div class="line-4"></div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <?php if(false){?>
    <section data-section="3" class="section-01 size-02">
      <video autoplay muted loop class="video-preview">
        <source src="public/video/02.mp4" type="video/mp4">
      </video>
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
  <?php }?>

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
              พร้อมระบบรักษาความปลอดภัย<br>และโครงสร้างเครื่องมือที่ทันสมัย ใช้งานง่าย
            </p>
            <div class="btns pt-4" data-aos="fade-up" data-aos-delay="300">
              <?php
                $btnBubble = [
                  'href' => 'web-gov-standard.php',
                  'title' => 'Explore More',
                ];
                include('component/btn-bubble.php');
              ?>
            </div>
          </div>
        </div>
        <div class="block-float right d-flex ai-end">
          <div class="grids no-gap">
            <?php
              $clients = [
                [
                  'bg' => 'public/img/content/33.jpg',
                  'icon' => 'public/img/clients/กระทรวงศึกษา.svg',
                  'title' => 'กระทรวงศึกษา',
                  'bgColor' => 'rgba(11,62,31,.7)',
                  'classer' => 'active',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => 'public/img/content/34.jpg',
                  'icon' => 'public/img/clients/กระทรวงพลังงาน.png',
                  'title' => 'กระทรวงพลังงาน',
                  'bgColor' => 'rgba(254,77,1,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => 'public/img/content/35.jpg',
                  'icon' => 'public/img/clients/industry.svg',
                  'title' => 'กระทรวงอุตสาหกรรม',
                  'bgColor' => 'rgba(136,0,156,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => 'public/img/content/36.jpg',
                  'icon' => 'public/img/clients/กรมธนารักษ์.svg',
                  'title' => 'กรมธนารักษณ์',
                  'bgColor' => 'rgba(204,165,33,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => 'public/img/content/37.jpg',
                  'icon' => 'public/img/clients/กรมโยธาธิการและผังเมือง.svg',
                  'title' => 'กรมโยธาธิการและผังเมือง',
                  'bgColor' => 'rgba(52,14,21,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => 'public/img/content/38.jpg',
                  'icon' => 'public/img/clients/มหาวิทยาลัยเกษตรศาสตร์.png',
                  'title' => 'มหาวิทยาลัยเกษตร',
                  'bgColor' => 'rgba(177,187,27,.7)',
                  'link' => 'web-gov-standard.php',
                ],
              ];
            ?>
            <?php foreach($clients as $d){?>
              <div class="grid lg-1-3 md-50 sm-1-3 xs-50 mt-0">
                <div class="ss-card ss-card-37">
                  <a class="ss-img square" href="<?= $d['link'] ?>">
                    <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
                      <div class="hover-container <?= $d['classer'] ?>" style="background:<?= $d['bgColor'] ?>;">
                      <div class="wrapper">
                        <div class="icon">
                          <img src="<?= $d['icon'] ?>" alt="Client" />
                        </div>
                        <p class="color-white text-center lh-sm mt-3">
                          <?= $d['title'] ?>
                        </p>
                      </div>
                    </div>
                  </a>
                  <div class="card-line-3">
                    <svg viewBox="0 0 100 100">
                      <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
                      <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
                    </svg>
                  </div>
                </div>
              </div>
            <?php }?>     
          </div>
        </div>
      </div>
    </div>
    <div class="grids no-gap">
      <?php
        $clients = [
          [
            'bg' => 'public/img/content/60.jpg',
            'icon' => 'public/img/clients/กรมอนามัย.svg',
            'title' => 'กรมอนามัย',
            'bgColor' => 'rgba(0,108,63,.7)',
            'link' => 'web-gov-standard.php',
          ], [
            'bg' => 'public/img/content/61.jpg',
            'icon' => 'public/img/clients/Asia-Pacific-Economic-Cooperation.svg',
            'title' => 'ความร่วมมือทางเศรษฐกิจ<br>ในเอเชียแปซิฟิก (เอเปค)',
            'bgColor' => 'rgba(43,48,125,.7)',
            'link' => 'web-gov-standard.php',
          ], [
            'bg' => 'public/img/content/62.jpg',
            'icon' => 'public/img/clients/กระทรวงวัฒนธรรม.svg',
            'title' => 'ศูนย์วัฒนธรรมอาเซียน<br>Asean Cultural Center',
            'bgColor' => 'rgba(38,15,71,.7)',
            'link' => 'web-gov-standard.php',
          ], [
            'bg' => 'public/img/content/63.jpg',
            'icon' => 'public/img/clients/กรมการขนส่งทางบก.svg',
            'title' => 'กรมการขนส่งทางบก',
            'bgColor' => 'rgba(102,66,132,.7)',
            'link' => 'web-gov-standard.php',
          ], [
            'bg' => 'public/img/content/64.jpg',
            'icon' => 'public/img/clients/สำนักงานคณะกรรมการกำกับกิจการพลังงาน.png',
            'title' => 'สำนักงานคณะกรรมการ<br>กำกับกิจการพลังงาน',
            'bgColor' => 'rgba(243,119,54,.7)',
            'link' => 'web-gov-standard.php',
          ], [
            'bg' => 'public/img/content/65.jpg',
            'icon' => 'public/img/clients/GSSD.png',
            'title' => 'GSSD Expo Thailand',
            'bgColor' => 'rgba(214,46,26,.7)',
            'link' => 'web-gov-standard.php',
          ], 
        ];
      ?>
      <?php foreach($clients as $d){?>
        <div class="grid lg-1-6 md-25 sm-1-3 xs-50 mt-0">
          <div class="ss-card">
            <a class="ss-img square" href="<?= $d['link'] ?>">
              <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
              <div class="hover-container" style="background:<?= $d['bgColor'] ?>;">
                <div class="wrapper">
                  <div class="icon">
                    <img src="<?= $d['icon'] ?>" alt="Client" />
                  </div>
                  <p class="color-white text-center lh-sm mt-3">
                    <?= $d['title'] ?>
                  </p>
                </div>
              </div>
            </a>
            <div class="card-line-3">
              <svg viewBox="0 0 100 100">
                <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
                <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
              </svg>
            </div>
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
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-03">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-03.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-04">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-04.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-05">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-05.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-06">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-06.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/62.jpg'); background-position:bottom center;"></div>
    <div class="container">
      <h3 class="text-center color-white fw-600" data-aos="fade-up" data-aos-delay="0">
        E-Office / ERP <span class="fw-300">for</span> Government
      </h3>
      <p class="text-center color-white fw-300" data-aos="fade-up" data-aos-delay="150">
        ออกแบบและพัฒนาระบบ E-Office Automation สำหรับระบบงานภาครัฐ 
        ด้วยแนวคิดการออกแบบและวางระบบแบบ Microservices และรองรับการทำงาน <br>
        ร่วมกับระบบอื่น ๆ ได้อย่างง่ายผ่าน API และทำงานบนโครงสร้างของระบบเครือข่ายแบบ DevSecOps
      </p>
      <div class="hex-container pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="300">
        <?php for($i=0; $i<10; $i++){?>
          <a class="hex-flip" href="erp-for-government.php">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/1<?= ($i%10+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          </a>
        <?php }?>

        <?php
          $titles = [
            'JIGSAW<br>Help Desk', 'JIGSAW<br>Chat Bot', 'JIGSAW<br>Portal', 'JIGSAW<br>Financial', 
            'JIGSAW<br>Asset', 'JIGSAW<br>Sales Force','JIGSAW<br>CRM', 'JIGSAW<br>HRM', 
            'JIGSAW<br>HRD', 'JIGSAW<br>Budgeting'
          ];
        ?>
        <?php for($i=0; $i<10; $i++){?>
          <a class="hex-flip" href="erp-for-government.php">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/2<?= ($i%12+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          </a>
        <?php }?>

        <?php
          $titles = [
            'JIGSAW<br>E-Form', 'JIGSAW<br>BI'
          ];
        ?>
        <?php for($i=0; $i<2; $i++){?>
          <a class="hex-flip" href="erp-for-government.php">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/3<?= ($i%2+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          </a>
        <?php }?>
      </div>
    </div>
  </section>

  <section data-section="7" class="section-10 section-padding">
    <div class="pattern style-01">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-31.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-30.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-03">
      <div class="wrapper" value=".5" style="transform: translateX(18.7px) translateY(-18.5px);">
        <img src="public/img/content/pattern-19.png" alt="Hero">
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/70.jpg'); background-position:top center;"></div>
    <div class="container" style="z-index:2;">
      <div class="text-center">
        <h3 class="lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
          Mini Site for <span class="color-black">Government</span>
        </h3>
        <p class="color-03 fw-400 mt-2 lg-no-br" data-aos="fade-up" data-aos-delay="150">
          สร้างเว็บไซต์ย่อย ๆ ได้อย่างไม่จำกัด เหมาะสำหรับหน่วยงานหลัก ที่มีหน่วยงานย่อย ๆ ภายใต้การกำกับดูแล <br>
          ต้องการให้เว็บของเว็บไซต์หลัก เว็บไซต์ย่อยมีรูปแบบไปในแนวทาง Design เดียวกัน
        </p>
      </div>
      <div class="swiper-container" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-wrapper">
          <?php for($i=0; $i<9; $i++){?>
            <div class="swiper-slide">
              <div class="ss-card ss-card-29 box-shadow c-pointer">
                <div class="ss-img no-hover vertical-02">
                  <div 
                    class="img-bg" data-href="web-gov-minisite.php" 
                    style="background-image:url('public/img/content/minisite-gov-0<?= ($i%9+1) ?>.jpg');" 
                  ></div>
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

  <?php 
    $titles02 = [
      [
        'title' => '3D Virtual Tour /<br>Metaverse',
        'url' => 'https://www.youtube.com/watch?v=hzH1coqP4f8',
        'bg' => 'public/img/content/v-service-01.jpg',
        'type' => 'vdo',
      ],[
        'title' => 'Virtual Tour',
        'url' => 'https://www.google.com/maps/embed?pb=!4v1668062000834!6m8!1m7!1sF%3A-iY78iz90Y3E%2FWXpJPdV4P3I%2FAAAAAAAAJjs%2FJnv-_ONZ1QY_q9icKLwSxiQ45QKxvYe4wCLIBGAYYCw!2m2!1d13.79986519248794!2d100.5508173868882!3f31.77!4f0.5600000000000023!5f0.4000000000000002',
        // 'url' => 'https://www.youtube.com/watch?v=-kaiHqu5Al4',
        'bg' => 'public/img/content/v-service-02.jpg',
        'type' => 'iframe',
      ],[
        'title' => 'Live & Virtual<br>Exhibition',
        'url' => 'https://youtu.be/QXjjqG6xCUU',
        'bg' => 'public/img/content/v-service-03.jpg',
        'type' => 'vdo',
      ]
    ]
  ?>

  <section data-section="9" class="section-01 section-padding">
    <div class="pattern style-07">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-01.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-08">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-11.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-09">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-12.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-10">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-13.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/37.jpg'); background-position:bottom center;"></div>
    <div class="container pt-6 pb-6">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Virtual World <span class="color-white">Services</sapn>
      </h3>
      <div class="grids jc-center pos-relative mt-4" style="z-index:2;" data-aos="fade-up" data-aos-delay="150">
        <?php foreach($titles02 as $d){?>
          <div class="grid lg-1-3">
            <div class="ss-card ss-card-31 box-shadow">
              <div class="ss-img vertical-01">
                <div class="img-bg" style="background-image:url('<?= $d['bg']?>');"></div>
              </div>
              <div class="filter-01"></div>
              <div class="hover-filter-01"></div>
              <div div class="card-line-1"></div>
              <div div class="card-line-2"></div>
              <div class="icon-container">
                <div class="video-button">
                  <a 
                    class="video-play-button" data-fancybox 
                    <?= $d['type']=='iframe'?'data-type="iframe" data-src="'.$d['url'].'" href="javascript:;"':'href="'.$d['url'].'"' ?>
                  >
                    <em class="fas fa-play"></em>
                  </a>
                </div>
              </div>
              <div class="text-container">
                <h5 class="title color-white lh-2xs fw-600">
                  <?= $d['title']?>
                </h5>
                <p class="sm desc color-white ss-text-wrapper xxxs">
                  ออกแบบและพัฒนาระบบ Virtual แบบ 360 องศา พร้อมระบบ Walk Throught รวมถึงการเชื่อมต่อวีดีโอ 
                  เพื่อนำเสนอสถานที่สินค้า หรือบริการต่าง ๆ ในรูปแบบของภาพนิ่งแบบ 360 องศา ออกแบบและพัฒนาระบบ 
                  Virtual แบบ 360 องศา พร้อมระบบ Walk Throught รวมถึงการเชื่อมต่อวีดีโอ เพื่อนำเสนอสถานที่ สินค้า 
                  หรือบริการต่าง ๆ ในรูปแบบของภาพนิ่งแบบ 360 องศา
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
    <div class="pattern style-11">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-14.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-12">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-15.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-13">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-16.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/63.jpg'); background-position:top center;"></div>  
    <div class="container">
      <div class="pos-relative" style="z-index:2;">
        <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
          Enterprise DevSecOps <span class="color-black">Solutions</span>
        </h3>
        <p class="text-center md-no-br" data-aos="fade-up" data-aos-delay="150">
          บริการออกแบบ ติดตั้งระบบ เครื่อข่ายคอมพิวเตอร์ขนาดใหญ่ พร้อมทีมงานผู้เชี่ยวชาญด้านการ 
          ติดตั้งและบริหารจัดการงานด้าน DevSecOps <br>
          เพื่อสร้างระบบเครือข่ายที่มีความเสถียรและสามารถ Auto Scale ได้ง่าย
        </p>  
      </div>
      <div class="ss-box xl mt-6 pt-4 pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="300">
        <!-- <a href="https://www.youtube.com/watch?v=5La64n-_pe4" data-fancybox>
          <img class="img" src="public/img/content/04.png" alt="Banner" />
        </a> -->
        <video width="100%" height="auto" autoplay muted playsinline loop>
          <source src="public/video/DevSecOps.mp4" type="video/mp4">
        </video>
      </div>
    </div>
  </section>

  <?php include_once('include/tech-stack.php'); ?>

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
                  <div class="ss-card ss-card-10 style-02">
                    <div class="icon">
                     <?php echo $svgs[$i] ?>
                    </div>
                    <div class="text-container mt-1">
                      <p class="xxs title text-center color-black fw-600">
                        <?php echo $titles[$i] ?>
                      </p>
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

  <section data-section="13" class="section-03 section-padding bg-05">
    <div class="pattern style-01">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
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
            <p class="h1 lg lh-2xs color-01 counter fw-600">25</p>
            <h4 class="color-black fw-700 lh-xs">YEARS</h4>
          </div>
        </div>
      </div>
    </div>

    <?php include_once('data/clients-home.php'); ?>
    <div class="clients pos-relative" style="z-index:2;">
      <?php foreach($clients as $d){?>
        <div class="client">
          <div class="ss-card ss-card-26">
            <div class="hover-container" style="background:<?= $d['bgColor'] ?>;"></div>
            <div class="wrapper" data-aos="fade-up" data-aos-delay="150">
              <div class="image-container" <?= empty($d['style'])?'':$d['style'] ?>>
                <img src="<?= $d['icon'] ?>" alt="Client" />
              </div>
              <div class="text-container mt-4">
                <p class="xxs title lh-sm">
                  <?= $d['title']?>
                </p>
              </div>
            </div>
            <div class="line-7"></div><div class="line-8"></div>
          </div>
        </div>
      <?php }?>
    </div>
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    document.addEventListener("mousemove", parallax);
    function parallax(event) {
      this.querySelectorAll(".pattern .wrapper").forEach((shift) => {
        const position = shift.getAttribute("value");
        const x = (window.innerWidth - event.pageX * position) / 90;
        const y = (window.innerHeight - event.pageY * position) / 90;
        shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
      });
    }
  </script>
</body>
</html>