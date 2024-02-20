<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading" style="overflow:unset!important;">
  <?php //include_once('component/page-loader.php'); ?>
  <?php $topnavActive=1; include_once('include/topnav-style-02.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" class="tg-rev-slider ovf-hidden" style="z-index:2;">
    <div id="rev_slider_1" class="rev_slider fullwidthabanner"  data-version="5.4.1">
      <ul>
        <?php for($i=0; $i<18; $i++){?>
          <li class="tp-revslider-slidesli" data-transition="random-premium" data-masterspeed="1000" data-easein="Power3.easeInOut" data-easeout="Power3.easeInOut">
            <?php if($i === 0){?>
              <img src="public/img/bg/banner-02.jpg" class="rev_slider_img" alt="">
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0','0','0','0']" data-y="['top']" data-voffset="['200','122','122','100']" data-fontsize="['88','70','50','70']" data-fontweight="500" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1500,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,80,90,25]">Website</div>
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['top']" data-voffset="[280','180','180','160']" data-fontsize="['88','70','50','36']" data-fontweight="200" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[0,80,90,25]">for</div>
              <div class="tp-caption ws_nowrap" data-x="['left']" data-hoffset="['0']" data-y="['top']" data-voffset="['280','180','180','160']" data-fontsize="['88','70','50','36']" data-fontweight="500" data-lineheight="['30']" data-letterspacing="1.4" data-width="['500','500','100%', '100%']" data-height="['auto']" data-whitesapce="normal" data-color="['#fff']" data-type="text" data-responsive_offset="off" data-frames='[{"delay":1800,"speed":300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-textAlign="['left']" data-paddingtop="[0,0,0,0]" data-paddingright="[0,0,0,25]" data-paddingbottom="[0,0,0,0]" data-paddingleft="[130,180,180,80]">Government</div>
              <div class="tp-caption tp-resizeme anLayer" data-frames='[{"delay":3000,"speed":1100,"frame":"0","from":"y:bottom;","to":"o:1;","ease":"power3.inOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"power3.inOut"}]' data-type="image" data-x="right" data-y="bottom" data-hoffset="['0','100','100','200']" data-voffset="['0','50','50','100']" data-width="['auto', '300', '200', '100']" data-height="['auto', '200', '200', '100']">
                <img src="public/img/hero/banner-01.png" alt="layer">
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
            <?php }elseif($i === 1){?>
              <img src="public/img/bg/banner-09.jpg" class="rev_slider_img" alt="">
            <?php break; }?>
          </li>
        <?php }?>
      </ul>
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

  <?php if(false){?>
    <section  data-section="1" class="banner-02">
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
  <?php }?>

  <section class="section-40">
    <div class="grids no-gap">
      <div class="grid xl-20 lg-20 md-25 sm-100 mt-0">
        <?php include('data/full-digital-marketing/tab-links.php'); ?>
        <div class="tab-container">
          <div class="tab-wrapper">
            <?php foreach($tabLinks as $i=>$d) {?>
                <div class="tab-link <?= $i == 0 ? 'active': ''?> 
                  <?= isset($d['subLink']) && $d['subLink']? 'sub-link': ''?>  
                  <?= isset($d['headerMenu']) && $d['headerMenu']? 'header-menu': ''?>" data-anchor="<?= $d['href'] ?>">
                  <div class="wrapper">
                    <div class="dot-line">
                      <div class="dot"></div>
                      <div class="line"></div>
                    </div>
                    <a class="text" href="<?= $d['href'] ?>">
                      <p class="title" ><?= $d['title'] ?></p>
                    </a>
                  </div>
                </div>
            <?php } ?>
          </div>
        </div>
      </div>
      <div class="grid xl-80 lg-80 md-75 sm-100 mt-0 ovf-hidden">
        <!-- Full Services -->
        <div id="fullServices" class="section-content" data-aos="fade-in">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>FULL SERVICES Online to Offline Integrated Solution</p>
            </div>  
            <div class="body">
              <img class="img" src="public/img/bg/103.jpg" alt="Background Image" />
              <div class="text-container">
                <p class="desc">
                  บริการด้านการออกแบบสื่อดิจิทัลแบบครบวงจร ตอบโจทย์
                  ทุกความต้องการ ตั้งแต่การวิเคราะห์กลุ่มเป้าหมาย วางแผนกลยุทธ กำหนดสื่อช่องทางการสื่อสาร 
                  ออกแบบสื่อมีเดียที่สื่อสารง่ายและโดดเด่น รวมถึงการนำเข้ารายงานมาวิเคราะห์เพื่อประสิทธิภาพและให้ได้ตามเป้าหมายที่ตั้งไว้
                </p>  
              </div>
            </div>
          </div>
        </div>  
        <!-- Big Idea -->
        <div id="bigIdea" class="section-content swiper" data-aos="fade-in">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Big Idea</p>
            </div>  
            <div class="body">
              <?php include_once('data/full-digital-marketing/big-idea.php'); ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($bigIdea as $d) {?>
                    <div class="swiper-slide">
                      <div class="ss-img no-hover">
                        <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                      </div>
                      <div class="text-container">
                        <p class="title"><?= $d['title'] ?></p>
                        <p class="desc"><?= $d['desc'] ?></p>  
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- Design -->
        <div id="design" class="section-content swiper" data-aos="fade-in">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Design</p>
            </div>  
            <div class="body">
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="title">Poster/Banner/Info Graphics/Leaflet, Brochure</p>
                        <p class="desc">
                          เรามีทีมงาน Graphics Designer ระดับตัว Top หลายคนให้คุณเลือก ไม่ว่าจะแนวสวยงาม 
                          แนว Creative แนวล้ำๆ หรือแนวสนุกสนาน ตามความต้องการบน Corporate Identity (CI) ที่กำหนดไว้ 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/105.jpg');"></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="title">Poster/Banner/Info Graphics/Leaflet, Brochure</p>
                        <p class="desc">
                          เรามีทีมงาน Graphics Designer ระดับตัว Top หลายคนให้คุณเลือก ไม่ว่าจะแนวสวยงาม 
                          แนว Creative แนวล้ำๆ หรือแนวสนุกสนาน ตามความต้องการบน Corporate Identity (CI) ที่กำหนดไว้ 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/120.jpg');"></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="title">Poster/Banner/Info Graphics/Leaflet, Brochure</p>
                        <p class="desc">
                          เรามีทีมงาน Graphics Designer ระดับตัว Top หลายคนให้คุณเลือก ไม่ว่าจะแนวสวยงาม 
                          แนว Creative แนวล้ำๆ หรือแนวสนุกสนาน ตามความต้องการบน Corporate Identity (CI) ที่กำหนดไว้ 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/121.jpg');"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>   
        <!-- Content -->
        <div id="content" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Content</p>
            </div>  
            <div class="body">
              <?php include_once('data/full-digital-marketing/content.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($content as $d) {?>
                    <div class="swiper-slide">
                      <div class="wrapper">
                        <div class="text-container not-polygon">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>  
                        </div>
                        <div class="ss-img no-hover horizontal-09">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- Web & Mobile -->
        <div id="webMobile" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Web/Mobile</p>
            </div>  
            <div class="body">
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="title">Poster/Banner/Info Graphics/Leaflet, Brochure</p>
                        <p class="desc">
                          เรามีทีมงาน Graphics Designer ระดับตัว Top หลายคนให้คุณเลือก ไม่ว่าจะแนวสวยงาม 
                          แนว Creative แนวล้ำๆ หรือแนวสนุกสนาน ตามความต้องการบน Corporate Identity (CI) ที่กำหนดไว้ 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/123.jpg');"></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="desc">
                          ออกแบบและพัฒนาเว็บไซต์ เว็บแอปพลิเคชัน โมบายแอปพลิเคชั่น 
                          ขนาดใหญ่สำหรับหน่วยงานหรือองค์กรขนาดใหญ่ที่ต้องการสร้างภาพลักษณ์ 
                          ผ่านเว็บไซต์หรือต้องการพัฒนาระบบ  เว็บแอปพลิเคชัน โมบายแอปพลิเคชั่น 
                          ที่แตกต่าง อย่างโดดเด่นกว่าคู่แข่ง 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/109.jpg');"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- Influencer -->
        <div id="influencer" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Influencer</p>
            </div>  
            <div class="body">
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="desc">
                          เรามีเครื่องมือในการติดตาม ตรวจสอบควานิยม Influencer ระดับโลก ที่จะทำให้สามารถเลือก 
                          Influencer, Actor, Celebrity, MC และอื่นๆ ได้ตรงจุด และตอบโจทย์ กิจกรรมด้านการตลาด 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/110.jpg');"></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="desc">
                          เรามีเครื่องมือในการติดตาม ตรวจสอบควานิยม Influencer ระดับโลก ที่จะทำให้สามารถเลือก 
                          Influencer, Actor, Celebrity, MC และอื่นๆ ได้ตรงจุด และตอบโจทย์ กิจกรรมด้านการตลาด 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/124.jpg');"></div>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="desc">
                          เรามีเครื่องมือในการติดตาม ตรวจสอบควานิยม Influencer ระดับโลก ที่จะทำให้สามารถเลือก 
                          Influencer, Actor, Celebrity, MC และอื่นๆ ได้ตรงจุด และตอบโจทย์ กิจกรรมด้านการตลาด 
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/125.jpg');"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- Social Network -->
        <div id="socialNetwork" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Social Network</p>
            </div>  
            <div class="body">
              <?php include_once('data/full-digital-marketing/social-network.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($socialNetwork as $d) {?>
                    <div class="swiper-slide">
                      <div class="wrapper">
                        <div class="text-container not-polygon">
                          <p class="desc"><?= $d['desc'] ?></p>  
                        </div>
                        <div class="ss-img no-hover horizontal-09">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- MarTech (AI) -->      
        <div id="marTech" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>MarTech (AI)</p>
            </div>  
            <div class="body">
              <?php include_once('data/full-digital-marketing/mar-tech.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($marTech as $d) {?>
                    <div class="swiper-slide">
                      <div class="ss-img no-hover">
                        <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                      </div>
                      <div class="text-container">
                        <p class="title"><?= $d['title'] ?></p>
                        <p class="desc"><?= $d['desc'] ?></p>  
                      </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
         <!-- Out of Home -->
         <div id="outOfhome" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Out Of Home</p>
            </div>  
            <div class="body">
              <?php include_once('data/full-digital-marketing/out-of-home.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($outOfHome as $d) {?>
                    <div class="swiper-slide">
                      <div class="wrapper">
                        <div class="text-container not-polygon">
                          <p class="desc"><?= $d['desc'] ?></p>  
                        </div>
                        <div class="ss-img no-hover horizontal-09">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
         <!-- TV/Radio -->
         <div id="tvRadio" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>TV/Radio</p>
            </div>  
            <div class="body">
              <?php include_once('data/full-digital-marketing/tv-radio.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($tvRadio as $d) {?>
                    <div class="swiper-slide">
                      <div class="wrapper">
                        <div class="text-container not-polygon">
                          <p class="desc"><?= $d['desc'] ?></p>  
                        </div>
                        <div class="ss-img no-hover horizontal-09">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
         <!-- PR Marketing -->
         <div id="prMarketing" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>PR Marketing</p>
            </div>  
            <div class="body">
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="desc">
                          เราสร้าง Content เขียนข่าว และนำไปโฆษราประชาสัมพันธ์ 
                          ยังชื่อชั้นนำต่างๆ ทั้งออนไลน์ และออฟไลน์
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/115.jpg');"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- Online to Offline Integrated Activity -->
        <div id="onlineOffine" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Online to Offline Integrated Activity</p>
            </div>  
            <div class="body">
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="text-container not-polygon">
                        <p class="desc">
                          กรณีที่ลูกค้าต้องการสร้างการรับรู้ และการมีส่วนร่วม เพื่อสร้างการจดจำ 
                          หรือการตอกย้ำ เรามีทีมงานที่จะคอยคิด Marketing Campaign และกิจกรรมต่าๆง 
                          ทั้ง Online / Offline ดูแลทุกอย่างเช่น รางวัล การนำเทคโนโลยีมาช่วยเสริมเช่น 
                          AR,VR, QR หรือ Interactive Midea ต่างๆ
                        </p>  
                      </div>
                      <div class="ss-img no-hover horizontal-09">
                        <div class="img-bg" style="background-image:url('public/img/bg/116.jpg');"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- Showcase - PR BKK -->
        <div id="prBkk" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Showcase</p>
            </div> 
            <div class="sub-header">
                <p>PR BKK</p>
            </div> 
            <div class="body">
              <?php include_once('data/full-digital-marketing/pr-bkk.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($prBKK as $d) {?>
                    <div class="swiper-slide">
                      <div class="wrapper">
                        <div class="text-container bg-white">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>  
                        </div>
                        <div class="ss-img no-hover horizontal-09">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- Showcase - GSSD -->
        <div id="gssd" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Showcase</p>
            </div>  
            <div class="sub-header">
              <p>GSSD</p>
            </div>
            <div class="body">
              <?php include_once('data/full-digital-marketing/gssd.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($gssd as $d) { ?>
                    <div class="swiper-slide">
                      <div class="wrapper">
                        <div class="text-container bg-white">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>  
                        </div>
                        <div class="ss-img no-hover horizontal-09">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                  
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
        <!-- Showcase - SAT APP -->
        <div id="satApp" class="section-content swiper">
          <div class="wrapper">
            <div class="header">
              <div class="img-bg" style="background-image:url('public/img/bg/102.jpg');"></div>
              <p>Showcase</p>
            </div> 
            <div class="sub-header">
              <p>SAT APP</p>
            </div> 
            <div class="body">
              <?php include_once('data/full-digital-marketing/sat-app.php') ?>
              <div class="swiper-container-01">
                <div class="swiper-wrapper">
                  <?php foreach($satApp as $d) {?>
                    <div class="swiper-slide">
                      <div class="wrapper">
                        <div class="text-container bg-white">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>  
                        </div>
                        <div class="ss-img no-hover horizontal-09">
                          <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                        </div>
                      </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
              <div class="arrows">
                <div class="wrapper">
                  <div class="arrow arrow-prev">
                    <em class="fa-solid fa-chevron-left"></em>
                  </div>
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-chevron-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>          
  </section>

  <?php $withFooterInfo=true; include_once('include/footer-style-02.php'); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/EasePack.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/ScrollTrigger.min.js"></script>
  <?php include_once('include/script.php'); ?>

</body>
</html>