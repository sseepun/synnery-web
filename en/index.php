<!DOCTYPE html>
<html lang="en">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
  <style>
    .tparrows {
      display: none;
    }
  </style>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php $topnavActive=1; include_once('include/topnav-en.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <!-- Start Top Graphic -->
  <section data-section="1" class="tg-rev-slider">
    <div id="rev_slider_1" class="rev_slider fullwidthabanner" data-version="5.4.1">
      <ul>
        <?php // for($i=0; $i<18; $i++){?>
          <li class="tp-revslider-slidesli" data-transition="random-premium" data-masterspeed="1000" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut">
            <?php /* if($i === 0){?>
              <img src="<?php echo DOMAIN ?>public/img/bg/banner-02.jpg" class="rev_slider_img" alt="">
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0','0','0','0']" data-y="['top']" data-voffset="['200','122','122','100']" data-fontsize="['88','70','50','70']" data-fontweight="500" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1500,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,80,90,25]">Website</div>
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['top']" data-voffset="[280','180','180','160']" data-fontsize="['88','70','50','36']" data-fontweight="200" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,80,90,25]">for</div>
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['top']" data-voffset="['280','180','180','160']" data-fontsize="['88','70','50','36']" data-fontweight="500" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[130,180,180,80]">Government</div>
              <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3000,"speed":1100,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['0','100','100','200']" data-voffset="['0','50','50','100']" data-width="['auto', '300', '200', '100']" data-height="['auto', '200', '200', '100']">
                <img src="<?php echo DOMAIN ?>public/img/hero/banner-01.png" alt="layer">
              </div>
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['top']" data-voffset="['350','230','230','200']" data-fontsize="['30','30','30','18']" data-fontweight="200" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,80,90,25]">ออกแบบและพัฒนาเว็บไซต์ ตามมาตรฐานเว็บไซต์ภาครัฐ และ ITA</div>
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['top']" data-voffset="['380','250','250','250']" data-fontsize="['30','30','30','30']" data-fontweight="200" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":2200,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":500,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,80,90,25]">
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
            <?php }elseif($i === 1){ */ ?>
              <img src="<?php echo DOMAIN ?>public/img/bg/banner-en-01.jpg" class="rev_slider_img" alt="">
            <?php // break; }?>
          </li>
        <?php // }?>
      </ul>
      <!-- <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
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
      </svg> -->
    </div>
  </section> 
  <!-- End Top Graphic -->

  <?php if(false){?>
    <section  data-section="1" class="banner-02">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php for($i=0; $i<18; $i++){?>
            <div class="swiper-slide">
              <div class="wrapper">
                <?php if($i === 0){?>
                  <div class="img-bg" style="background-image:url('<?php echo DOMAIN ?>public/img/bg/banner-02.jpg');"></div>
                  <div class="hero">
                    <div class="animate-02" style="--delay:.45s;">
                      <img src="<?php echo DOMAIN ?>public/img/hero/banner-01.png" alt="Hero" />
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
                  <div class="img-bg" style="background-image:url('<?php echo DOMAIN ?>public/img/bg/banner-0<?php echo ($i%7+3) ?>.jpg');"></div>
                <?php }?>
                <?php if($i > 7){?>
                  <div class="img-bg" style="background-image:url('<?php echo DOMAIN ?>public/img/bg/banner-1<?php echo ($i%10+0) ?>.jpg');"></div>
                <?php }?>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="arrows">
          <div class="arrow arrow-prev">
            <img src="<?php echo DOMAIN ?>public/img/icon/arrow-left.png" alt="Arrow" />
          </div>
          <div class="arrow-sep">
            <img src="<?php echo DOMAIN ?>public/img/icon/arrow-sep.png" alt="Arrow Sep" />
          </div>
          <div class="arrow arrow-next">
            <img src="<?php echo DOMAIN ?>public/img/icon/arrow-right.png" alt="Arrow" />
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
  <?php }?>

  <?php
    $titles = [
      [ 'title' => 'Digital Marketing<br>for Government', 'url' => 'services.php' ],
      [ 'title' => 'Website<br>for Government', 'url' => 'web-gov-standard.php' ],
      [ 'title' => 'Mini Site<br>for Government', 'url' => 'web-gov-minisite.php' ],
      [ 'title' => 'Enterprise WordPress<br>for Government', 'url' => 'enterprise-wordpress-solution.php' ],
      [ 'title' => 'Virtual World<br>Services', 'url' => 'virtual-world.php' ],
      [ 'title' => 'e-Office / ERP<br>for Government', 'url' => 'erp-for-government.php' ],
      [ 'title' => 'Enterprise<br>DevSecOps Solutions', 'url' => 'network-security-system.php' ],
    ];
  ?>
  <?php /*
  <!-- Start Old Full Services -->
  <section class="section-01 section-padding pt-4 pb-4">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="<?php echo DOMAIN ?>public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <div class="text-center" data-aos="fade-up" data-aos-delay="0">
        <h3 class="color-p font-popins fw-600 lh-xs">Full Services</h3>
        <p class="h1 font-popins color-black lh-2xs text-shadow fw-600">
          DIGITAL SOLUTIONS
        </p>
      </div>
      <p class="h5 color-black md-no-br fw-300 text-center mt-1" data-aos="fade-up" data-aos-delay="150">
        บริการด้านดิจิทัลแบบครบวงจร ตอบโจทย์ทุกความต้องการ
      </p>
    </div>
  </section>

  <div class="main-tabs-container" id="tab-header">
    <?php
      $mainTabs = [
        [
          'pageId' => 'web-design',
          'title' => 'Web Design<br>Standard Solution',
          'iconInactive' => DOMAIN.'public/img/icon/service-02.png',
          'iconActive' => DOMAIN.'public/img/icon/service-active-02.png'
        ], [
          'pageId' => 'full-service',
          'title' => 'Full Service<br>Digital Marketing',
          'iconInactive' => DOMAIN.'public/img/icon/service-01.png',
          'iconActive' => DOMAIN.'public/img/icon/service-active-01.png'
        ], [
          'pageId' => 'web-mobile-app',
          'title' => 'Web & Mobile App<br>Development',
          'iconInactive' => DOMAIN.'public/img/icon/service-07.png',
          'iconActive' => DOMAIN.'public/img/icon/service-active-07.png'
        ], [
          'pageId' => 'net-work',
          'title' => 'Network & Security<br>Service',
          'iconInactive' => DOMAIN.'public/img/icon/service-08.png',
          'iconActive' => DOMAIN.'public/img/icon/service-active-08.png'
        ], [
          'pageId' => 'ai-solution',
          'title' => 'Artificial Intelligence<br>Solution',
          'iconInactive' => DOMAIN.'public/img/icon/service-09.png',
          'iconActive' => DOMAIN.'public/img/icon/service-active-09.png'
        ],
      ]
    ?>
    <div class="tab-wrapper" data-aos="fade-up" data-aos-delay="150">
      <?php foreach($mainTabs as $j=>$d){?>
        <div class="tab-link <?php if($j==0)echo 'active'; ?>" data-maintab="<?php echo $d['pageId'] ?>" data-anchor="#tab-header">
          <div class="wrapper">
            <p class="text font-popins lh-sm"><?php echo $d['title'] ?></p>
          </div>
        </div>
        <div class="block-float right d-flex ai-end">
          <div class="grids no-gap">
            <?php
              $clients = [
                [
                  'bg' => DOMAIN.'public/img/content/33.jpg',
                  'icon' => DOMAIN.'public/img/clients/กระทรวงศึกษา.svg',
                  'title' => 'กระทรวงศึกษา',
                  'bgColor' => 'rgba(11,62,31,.7)',
                  'classer' => 'active',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => DOMAIN.'public/img/content/34.jpg',
                  'icon' => DOMAIN.'public/img/clients/กระทรวงพลังงาน.png',
                  'title' => 'กระทรวงพลังงาน',
                  'bgColor' => 'rgba(254,77,1,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => DOMAIN.'public/img/content/35.jpg',
                  'icon' => DOMAIN.'public/img/clients/industry.svg',
                  'title' => 'กระทรวงอุตสาหกรรม',
                  'bgColor' => 'rgba(136,0,156,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => DOMAIN.'public/img/content/36.jpg',
                  'icon' => DOMAIN.'public/img/clients/กรมธนารักษ์.svg',
                  'title' => 'กรมธนารักษ์',
                  'bgColor' => 'rgba(204,165,33,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => DOMAIN.'public/img/content/37.jpg',
                  'icon' => DOMAIN.'public/img/clients/กรมโยธาธิการและผังเมือง.svg',
                  'title' => 'กรมโยธาธิการและผังเมือง',
                  'bgColor' => 'rgba(52,14,21,.7)',
                  'link' => 'web-gov-standard.php',
                ], [
                  'bg' => DOMAIN.'public/img/content/38.jpg',
                  'icon' => DOMAIN.'public/img/clients/มหาวิทยาลัยเกษตรศาสตร์.png',
                  'title' => 'มหาวิทยาลัยเกษตร',
                  'bgColor' => 'rgba(177,187,27,.7)',
                  'link' => 'web-gov-standard.php',
                ],
              ];
            ?>
            <?php foreach($clients as $d){?>
              <div class="grid lg-1-3 md-50 sm-1-3 xs-50 mt-0">
                <div class="ss-card ss-card-37">
                  <a class="ss-img square" href="<?php echo $d['link'] ?>">
                    <div class="img-bg" style="background-image:url('<?php echo $d['bg'] ?>');"></div>
                      <div class="hover-container <?php echo $d['classer'] ?>" style="background:<?php echo $d['bgColor'] ?>;">
                      <div class="wrapper">
                        <div class="icon">
                          <img src="<?php echo $d['icon'] ?>" alt="Client" />
                        </div>
                        <p class="color-white text-center lh-sm mt-3">
                          <?php echo $d['title'] ?>
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
      <?php }?>
    </div>
    <div class="tab-contents">

      <div data-maintab="web-design" class="main-tab-content active">
        <?php
          $categories = [
            ['title' => 'Web Design'],
            ['title' => 'Unlimited Minisite'], 
            ['title' => 'Enterprise WordPress'],
          ];
        ?>
        <div class="sub-tab-container"  data-section="2">
          <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <p class="title"><?php echo $d['title'] ?></p>
              </div>
            <?php }?>
          </div>
          <div class="tab-contents">
            <?php foreach($categories as $i=>$d) {?>
              <div class="tab-content <?php echo $i==0? 'active': '' ?> <?php echo $i==1? 'swiper-block': '' ?>" data-tab="content_<?php echo $i ?>">
                <?php 
                  if($i === 0){include('data/block01.php');} 
                  else if($i === 1){include('data/block02.php');}
                  else if($i === 2) {include('data/block03.php');}
                ?> 
              </div>
            <?php }?>
          </div>
        </div>
      </div>

      <div data-maintab="full-service" class="main-tab-content">
        <?php
          $categories = [
            ['title' => 'Digital Marketing'],
            ['title' => 'Virtual Exhibition / Virtual Live Event'],
          ];
        ?>
        <div class="sub-tab-container">
          <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <p class="title"><?php echo $d['title'] ?></p>
              </div>
            <?php }?>
          </div>
          <div class="tab-contents">
            <?php foreach($categories as $i=>$d) {?>
              <div class="tab-content <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <?php 
                  if($i === 0){include('data/block04.php');} 
                  else if($i === 1){include('data/block05.php');}
                ?> 
              </div>
            <?php }?>
          </div>
        </div>
      </div>

      <div data-maintab="web-mobile-app" class="main-tab-content">
        <?php
          $categories = [
            ['title' => 'Web & Mobile Application Development'],
          ];
        ?>
        <div class="sub-tab-container">
          <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <p class="title"><?php echo $d['title'] ?></p>
              </div>
            <?php }?>
          </div>
          <div class="tab-contents">
            <?php foreach($categories as $i=>$d) {?>
              <div class="tab-content <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <?php if($i === 0){ include('data/block06.php'); } ?> 
              </div>
            <?php }?>
          </div>
        </div>
      </div>

      <div data-maintab="net-work" class="main-tab-content">
        <?php
          $categories = [
            ['title' => 'Network & Security'],
            ['title' => 'DevSecOps & Microservices'],
          ];
        ?>
        <div class="sub-tab-container">
          <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <p class="title"><?php echo $d['title'] ?></p>
              </div>
            <?php }?>
          </div>
          <div class="tab-contents">
            <?php foreach($categories as $i=>$d) {?>
              <div class="tab-content <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <?php 
                  if($i === 0){include('data/block07.php');} 
                  if($i === 1){include('data/block08.php');} 
                ?> 
              </div>
            <?php }?>
          </div>
        </div>
      </div>

      <div data-maintab="ai-solution" class="main-tab-content">
        <?php
          $categories = [
            ['title' => 'AI ChatGPT'],
            ['title' => 'OCR For Laws & Document'],
            ['title' => 'ChatGPT E-Office'],
          ]
        ?>
        <div class="sub-tab-container">
          <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <p class="title"><?php echo $d['title'] ?></p>
              </div>
            <?php }?>
          </div>
          <div class="tab-contents">
            <?php foreach($categories as $i=>$d) {?>
              <div class="tab-content <?php echo $i==0? 'active': '' ?>" data-tab="content_<?php echo $i ?>">
                <?php 
                  if($i === 0){include('data/block09.php');} 
                  if($i === 1){include('data/block10.php');} 
                  if($i === 2){include('data/block11.php');} 
                ?> 
              </div>
            <?php }?>
          </div>
        </div>
      </div>

    </div>
  </div>
  <!-- End Old Full Services -->
  */ ?>

  <!-- Start Full Services -->
  <section data-section="2" class="section-03 section-padding bg-black pt-0">
    <div class="pattern style-01" style="top: 2.5rem; left: -25rem;">
      <div class="wrapper" value=".5">
        <img src="<?php echo DOMAIN ?>public/img/content/pattern-18.png" alt="Hero" style="max-width: 48rem">
      </div>
    </div>
    <div class="pattern style-04 d-none">
      <div class="wrapper" value="-.5">
        <img src="<?php echo DOMAIN ?>public/img/content/pattern-20.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-05 d-none">
      <div class="wrapper" value=".5">
        <img src="<?php echo DOMAIN ?>public/img/content/pattern-21.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:3;">
      <h1 class="lg text-center fw-800 color-01 text-uppercase" data-aos="fade-up" data-aos-delay="0">
        Synerry <span class="color-white">thailand</span>
      </h1>
      <h3 class="text-center md-no-br fw-800 color-01 letter-spacing-7" data-aos="fade-up" data-aos-delay="150">
        Full Services Digital Solutions 
      </h3>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="300">
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
            <h4 class="color-white fw-700 lh-xs">CLIENTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">500</p>
            <h4 class="color-white fw-700 lh-xs">PROJECTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">25</p>
            <h4 class="color-white fw-700 lh-xs">YEARS</h4>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Full Services -->

  <!-- Start Our Services -->
  <?php
    $ourService = [
      [
        'pageId' => 'services',
        'title' => 'Digital Marketing<br>for Government',
        'iconInactive' => DOMAIN.'public/img/icon/service-01.png',
        'iconActive' => DOMAIN.'public/img/icon/service-active-01.png'
      ], 
      [
        'pageId' => 'web-gov-standard',
        'title' => 'Website<br>for Government',
        'iconInactive' => DOMAIN.'public/img/icon/service-02.png',
        'iconActive' => DOMAIN.'public/img/icon/service-active-02.png'
      ], 
      [
        'pageId' => 'web-gov-minisite',
        'title' => 'Mini Site<br>for Government',
        'iconInactive' => DOMAIN.'public/img/icon/service-03.png',
        'iconActive' => DOMAIN.'public/img/icon/service-active-03.png'
      ], 
      [
        'pageId' => 'enterprise-wordpress-solution',
        'title' => 'Enterprise WordPress<br>for Government',
        'iconInactive' => DOMAIN.'public/img/icon/service-04.png',
        'iconActive' => DOMAIN.'public/img/icon/service-active-04.png'
      ], 
      [
        'pageId' => 'virtual-world',
        'title' => 'Virtual World<br>Services',
        'iconInactive' => DOMAIN.'public/img/icon/service-05.png',
        'iconActive' => DOMAIN.'public/img/icon/service-active-05.png'
      ], 
      [
        'pageId' => 'erp-for-government',
        'title' => 'e-Office / ERP<br>for Government',
        'iconInactive' => DOMAIN.'public/img/icon/service-06.png',
        'iconActive' => DOMAIN.'public/img/icon/service-active-06.png'
      ], 
      [
        'pageId' => 'network-security-system',
        'title' => 'Enterprise<br>DevSecOps Solutions',
        'iconInactive' => DOMAIN.'public/img/icon/service-07.png',
        'iconActive' => DOMAIN.'public/img/icon/service-active-07.png'
      ], 
    ]
  ?>
  <section data-section="3" class="section-08 section-padding">
    <div class="pattern style-43">
      <div class="wrapper" value="-.5">
        <img src="<?php echo DOMAIN ?>public/img/pattern/pattern-99.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('<?php echo DOMAIN ?>public/img/bg/36-2.jpg');"></div>
    <div class="container" style="z-index: 1;">
      <h1 class="lg text-center fw-800 color-01 text-uppercase" data-aos="fade-up" data-aos-delay="0">
        Our Services
      </h1>
      <div class="ss-box xl mt-6" data-aos-delay="150">
        <div class="grids" style="padding-bottom: 5rem;">
          <?php 
            foreach($ourService as $index => $data) {
              ?>
              <div class="grid lg-25 md-50 sm-50 xs-100">
                <a class="ss-card ss-card-27" href="<?php echo DOMAIN.$data['pageId'] ?>.php">
                  <div class="wrapper">
                    <div class="icon mt-1">
                      <img class="inactive" src="<?php echo $data['iconInactive'] ?>" alt="Icon Inactive">
                      <img class="active" src="<?php echo $data['iconActive'] ?>" alt="Icon Active">
                    </div>
                    <div class="text-container mt-5">
                      <p class="title lh-sm md-no-br">
                        <?php echo $data['title'] ?>            
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
              <?php
            }
            ?>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Services -->

  <!-- Start Our Services -->
  <?php 
  $our_work = [
    [
      'title' => 'Asia-Pacific<br>Economic Cooperation<br>2022 Thailand',
      'description' => 'It is the Asia-Pacific Economic Cooperation Conference. It is scheduled to take place in Thailand throughout 2022, and the APEC Summit is scheduled to take place from 18–19 November, with attendees from 21 economic regions.',
      'image' => 'public/img/home/our-work-01.jpg',
      'url' => '',
      'color' => 'rgba(43,48,125,.7)',
      'logo' => 'public/img/clients/Asia-Pacific-Economic-Cooperation.svg',
    ],
    [
      'title' => 'Ministry of Education',
      'description' => 'It is a central government agency in the type of ministry of Thailand. Its duty is to promote education to people in a thorough and equitable manner. Create equality and educational opportunities encourage various agencies to participate in education.',
      'image' => 'public/img/home/our-work-02.jpg',
      'url' => 'https://www.moe.go.th/',
      'color' => 'rgba(11,62,31,.7)',
      'logo' => 'public/img/clients/กระทรวงศึกษา.svg',
    ],
    [
      'title' => 'Ministry of Industry',
      'description' => 'It is a central government agency in the type of ministry of Thailand. Has powers and duties regarding the promotion and development of the industry. Entrepreneurial development.',
      'image' => 'public/img/home/our-work-03.jpg',
      'url' => '',
      'color' => 'rgba(136,0,156,.7)',
      'logo' => 'public/img/clients/industry.svg',
    ],
    [
      'title' => 'Ministry of Energy',
      'description' => 'It is a central government agency in the type of ministry of Thailand. Its duty is to promote and supervise energy security for the country.',
      'image' => 'public/img/home/our-work-04.jpg',
      'url' => '',
      'color' => 'rgba(254,77,1,.7)',
      'logo' => 'public/img/clients/กระทรวงพลังงาน.png',
    ],
    [
      'title' => 'Ministry of Culture',
      'description' => 'It is a central government agency in the type of ministry of Thailand. Its duty is to take care of culture, language, religion, and traditions.',
      'image' => 'public/img/home/our-work-05.jpg',
      'url' => '',
      'color' => 'rgba(38,15,71,.7)',
      'logo' => 'public/img/clients/กระทรวงวัฒนธรรม.svg',
    ],
  ];
  ?>
  <section data-section="4" class="section-12 section-home-12">
    <div class="container">
      <?php
      foreach($our_work as $index => $data) {
        ?>
        <div class="blocks">
          <div class="ss-card block-float <?php echo (($index%2)==0?'right':'left') ?>">
            <a class="ss-img horizontal-01 no-hover" href="<?php echo $data['url'] ?>">
              <div class="img-bg" style="background-image:url('<?php echo DOMAIN.$data['image'] ?>');"></div>
              <div class="hover-container " style="background:<?php echo $data['color'] ?>;">
                <div class="wrapper">
                  <div class="icon">
                    <img src="<?php echo DOMAIN.$data['logo'] ?>" alt="Client">
                  </div>
                  <p class="color-white text-center lh-sm mt-3">
                    <?php echo $data['title'] ?>
                  </p>
                </div>
              </div>
            </a>
            <!-- <div class="card-line-3">
              <svg viewBox="0 0 100 100">
                <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
                <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
              </svg>
            </div> -->
          </div>
          <div class="block">
            <div class="text-container">
              <h3 class="fw-800 color-01" style="line-height: 1.2;">
                <?php echo $data['title'] ?>
              </h3>
              <p class="lg fw-400 sm-no-br mt-2 color-03">
                <?php echo $data['description'] ?>
              </p>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
      </div>
  </section>
  <!-- End Our Services -->

  <!-- Start Our Clients -->
  <section data-section="5" class="section-03 section-padding pt-0">

    <?php include_once('data/clients-home.php'); ?>
    <div class="container" data-aos="fade-up" data-aos-delay="0">
      <div class="isotope-toolbar" style="position:relative;">
        <div class="isotope-wrapper">
          <div class="isotope-toolbar-btn isotope-tab active" data-type="government" name="isotope-filter">
            <div class="wrapper">
              <div class="icon">
                <img class="mt-nagative icon-inactive" src="<?php echo DOMAIN ?>public/img/icon/tab-client-inactive.png">
                <img class="mt-nagative icon-active" src="<?php echo DOMAIN ?>public/img/icon/tab-client-active.png">
              </div>
              <span class="p title fw-400">รายชื่อลูกค้าภาครัฐ</span>
            </div>
          </div>
          <div class="isotope-toolbar-btn isotope-tab" data-type="corporation" name="isotope-filter">
            <div class="wrapper">
              <div class="icon">
                <img class="mt-nagative icon-inactive" src="<?php echo DOMAIN ?>public/img/icon/tab-client-02-inactive.png">
                <img class="mt-nagative icon-active" src="<?php echo DOMAIN ?>public/img/icon/tab-client-02-active.png">
              </div>
              <span class="p title fw-400">รายชื่อลูกค้าภาคเอกชน</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div data-aos="fade-up" data-aos-delay="450">
      <div class="clients isotope-box pos-relative" style="z-index:2;">
        <?php foreach($clients as $d){?>
          <div class="client isotope-item" data-type="<?php echo $d['type'] ?>">
            <div class="ss-card ss-card-26">
              <div class="hover-container" style="background:<?php echo $d['bgColor'] ?>;"></div>
              <div class="wrapper">
                <div class="image-container">
                  <img src="<?php echo $d['icon'] ?>" alt="Client" />
                </div>
                <div class="text-container mt-4">
                  <p class="xxs title lh-sm">
                    <?php echo $d['title']?>
                  </p>
                </div>
              </div>
              <div class="line-7"></div><div class="line-8"></div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>
  <!-- End Our Clients -->

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>