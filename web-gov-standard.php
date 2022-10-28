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

  <section data-section="1" class="banner-02">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<5; $i++){?>
          <div class="swiper-slide">
            <div class="wrapper">
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
                    <a class="btn btn-action round btn-color-01" href="#">
                      <span class="p xs fw-500">Explore More</span>
                    </a>
                  </div>
                </div>
              </div>
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
    </div>
  </section>

  <section data-section="2" class="section-01 section-padding bg-05">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero" />
      </div>
    </div>
    <div class="container">
      <div class="text-center color-01">
        <h3 class="color-black fw-600" data-aos="fade-up" data-aos-delay="0">
          Government
        </h3>
        <p class="h1 lh-3xs text-shadow fw-600" data-aos="fade-up" data-aos-delay="150">
          Standard Website
        </p>
        <p class="h4 color-black fw-300 lh-sm mt-4" data-aos="fade-up" data-aos-delay="300">
          บริการ <span class="h3 color-black fw-500 lh-xs">ออกแบบและจัดทำเว็บไซต์</span> 
          สำหรับภาครัฐโดยเฉพาะ <br />
          ด้วย <span class="h3 color-black fw-500 lh-xs">ประสบการณ์</span> 
          ในการทำงานด้านนี้ <br />
          <span class="h4 color-black fw-600 lh-xs">กว่า</span> 
          <span class="h1 lg color-01 fw-600 lh-xs">25 ปี</span> 
        </p>
      </div>
      <div class="grids jc-center pt-4" data-aos="fade-up" data-aos-delay="450">
        <div class="grid xl-25 lg-1-3 md-50 sm-50 xs-100">
          <a class="ss-card ss-card-05 bradius-round-02">
            <div class="ss-img vertical-01">
              <div class="img-bg" style="background-image:url('public/img/content/content-52.jpg');"></div>
            </div>
            <div class="filter-03"></div>
            <div class="hover-filter-01"></div>
            <div class="text-container">
              <div class="title h5 color-white lh-xs fw-500">
                วิเคราะห์
              </div>
              <div class="desc p sm color-white fw-400">
                วิสัยทัศน์, พันธกิจ, หน้าที่, ปัญหา และ ความต้องการของกลุ่มเป้า
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </a>
        </div>

        <div class="grid xl-25 lg-1-3 md-50 sm-50 xs-100">
          <a class="ss-card ss-card-05 bradius-round-02">
            <div class="ss-img vertical-01">
              <div class="img-bg" style="background-image:url('public/img/content/content-47.jpg');"></div>
            </div>
            <div class="filter-03"></div>
            <div class="hover-filter-01"></div>
            <div class="text-container">
              <div class="title p  color-white lh-xs fw-400">
                กำหนดภาพลักษณ์ของ <span class="h5 color-white fw-600">"Brand"</span>
              </div>
              <ul class="ss-list-01 style-05">
                <li class="mt-1">Brand Personality</li>
                <li class="mt-1">Brand Perception</li>
                <li class="mt-1">Brand Image</li>
                <li class="mt-1">Brand Value</li>
              </ul>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </a>
        </div>
        <div class="grid xl-25 lg-1-3 md-50 sm-50 xs-100">
          <a class="ss-card ss-card-05 bradius-round-02">
            <div class="ss-img vertical-01">
              <div class="img-bg" style="background-image:url('public/img/content/content-48.jpg');"></div>
            </div>
            <div class="filter-03"></div>
            <div class="hover-filter-01"></div>
            <div class="text-container">
              <ul class="ss-list-01 style-05">
                <li class="mt-1">SEO Structure</li>
                <li class="mt-1">Search by AI</li>
                <li class="mt-1">Speed Page Test</li>
                <li class="mt-1">All Browser Support</li>
                <li class="mt-1">High Security (OWASP)</li>
              </ul>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </a>
        </div>
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
                      <p class="xs title text-center color-black fw-600">
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

  <section data-section="3" class="section-13">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          ตัวอย่าง<span class="fw-600">ผลงาน</span>
        </h3>
      </div>
    </div>
    <div class="swiper-container">
      <div class="swiper-wrapper">        
     
        <!-- EDUCATION -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/57.jpg');"></div>
            <div class="content style-01">
              <div class="img-container animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen.png" alt="Device" />
              </div>
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-17.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-200">
                        Ministry of<br><span class="fw-600">Education</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        กระทรวงศีกษาธิการ
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์กระทรวง</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                    <a class="btn btn-action btn-color-03 style-02" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์สำนักงานปลัด</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ENERGY -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/75.jpg');"></div>
            <div class="content style-03">
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-01.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-3xs fw-200">
                        Ministry of <span class="fw-600">ENERGY</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        กระทรวงพลังงาน
                      </p>
                      <div class="btns">
                        <a class="btn btn-action btn-color-03" href="#">
                          <div class="icon-container color-01">
                            <span class="p color-white fw-300">เว็บไซต์กระทรวง</span>
                            <em class="ml-2 fa-solid fa-play"></em>
                          </div>
                        </a>
                        <a class="btn btn-action btn-color-03 style-02" href="#">
                          <div class="icon-container color-01">
                            <span class="p color-white fw-300">เว็บไซต์สำนักงานปลัด</span>
                            <em class="ml-2 fa-solid fa-play"></em>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="img-container animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-10.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>

        <!-- INDUSTRY -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/76.jpg');"></div>
            <div class="content style-04">
              <div class="img-container animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-11.png" alt="Device" />
              </div>
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-02.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-200">
                        Ministry of<br><span class="fw-600">INDUSTRY</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        กระทรวงอุตสาหกรรม
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์กระทรวง</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                    <a class="btn btn-action btn-color-03 style-02" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์สำนักงานปลัด</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     
        <!-- DEPARTMENT -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/77.jpg');"></div>
            <div class="content style-05">
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-03.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        <span class="fw-600">The Treasury</span><br>Department
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        กรมธนารักษ์
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-03" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์กรม</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="img-container animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-12.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>

        <!-- Public Works and Town & Country -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/79.jpg');"></div>
            <div class="content style-06">
              <div class="img-container d-flex ai-center animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-14.png" alt="Device" />
              </div>
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-04.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Department of<br><span class="fw-600">Public Works and <br> Town & Country<br>Planning</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        กรมโยธาธิการและผังเมือง
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์กรม</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- HEALTH -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/78.jpg');"></div>
            <div class="content style-05">
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-05.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-200">
                        Department<br>of <span class="fw-600">HEALTH</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        กรมอนามัย
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-03" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์กรม</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="img-container size-02 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-15.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>

         <!-- LAND TRANSPORT -->
         <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/80.jpg');"></div>
            <div class="content style-06">
              <div class="img-container size-02 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-16.png" alt="Device" />
              </div>
              <div class="text-container style-02">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-06.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Department of<br><span class="fw-600">Land Transport</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        กรมการขนส่งทางบก
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์กรม</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ASEAN -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/81.jpg');"></div>
            <div class="content style-05">
              <div class="text-container style-02">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-07.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        <span class="fw-600">ASEAN</span><br>Cultural Center 
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        ศูนย์วัฒนธรรมอาเซียน
                      </p>
                    </div>
                  </div>
                  <div class="btns mw-unset animate-03" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์หลัก</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="img-container size-03 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-17.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>  
        
         <!-- KASETSART -->
         <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/82.jpg');"></div>
            <div class="content style-06">
              <div class="img-container size-03 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-18.png" alt="Device" />
              </div>
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-08.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        <span class="fw-600">Kasetsart</span><br>University
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        มหาวิทยาลัยเกษตรศาสตร์
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์มหาวิทยาลัย</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <!-- ERC -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/83.jpg');"></div>
            <div class="content style-03">
             <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-18.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                      <span class="fw-600">ENERGY </span>Regulatory Commission 
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        คณะกรรมการกำกับกิจการพลังงาน
                      </p>
                      <div class="btns">
                        <a class="btn btn-action btn-color-03" href="#">
                          <div class="icon-container color-01">
                            <span class="p color-white fw-300">เว็บไซต์สำนักงาน</span>
                            <em class="ml-2 fa-solid fa-play"></em>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="img-container size-03 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-19.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>
       
        <!-- National Education Standards and Quality Assessment -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/76.jpg');"></div>
            <div class="content style-04">
              <div class="img-container size-02 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-20.png" alt="Device" />
              </div>
              <div class="text-container style-02">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-200">
                        Office for<br>
                        <span class="md-no-br fw-600">
                        National Education<br>Standards and<br>Quality Assessment
                        </span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        สำนักงานรับรองมาตรฐานและ<br>ประเมินคุณภาพ การศึกษา
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์สำนักงาน</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     
          <!-- Global South-South Development -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/84.jpg');"></div>
            <div class="content style-05">
              <div class="text-container style-02 d-flex ai-center">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-09.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-600">
                        Global<br>South-South<br>Development
                      </h3>
                    </div>
                  </div>
                  <div class="btns animate-03" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์หลัก</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="img-container size-04 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-21.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>         

        <!-- Thai Health Promotion Foundation -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/85.jpg');"></div>
            <div class="content style-06">
              <div class="img-container size-05 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-22.png" alt="Device" />
              </div>
              <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-10.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Office of<span class="fw-600">
                        Thai<br>Health Promotion<br>Foundation
                        </span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        สำนักงานกองทุนสนับสนุน<br>การสร้างเสริมสุขภาพ (สสส.)
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์สำนักงาน</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            
         <!-- Insurance Commission -->
         <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/86.jpg');"></div>
            <div class="content style-03">
             <div class="text-container">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-11.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-3xs fw-200">
                        Office of <span class="fw-600">Insurance Commission</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        สำนักงานคณะกรรมการกำกับและส่งเสริม<br>การประกอบธุรกิจประกันภัย (คปภ.)
                      </p>
                      <div class="btns">
                        <a class="btn btn-action btn-color-03" href="#">
                          <div class="icon-container color-01">
                            <span class="p color-white fw-300">เว็บไซต์สำนักงาน</span>
                            <em class="ml-2 fa-solid fa-play"></em>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="img-container size-02 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-23.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>
                 
        <!-- INDUSTRY -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/87.jpg');"></div>
            <div class="content style-04">
              <div class="img-container animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-24.png" alt="Device" />
              </div>
              <div class="text-container style-03">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-12.png" alt="LOGO" />
                    </div>
                    <div class="text style-02 animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-200">
                        INDUSTRIAL ESTATE<br><span class="fw-600">AUTHORITY OF THAILAND</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        การนิคมอุตสาหกรรมแห่งประเทศไทย
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์องค์กร</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>        

        <!-- APEC -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/88.jpg');"></div>
            <div class="content style-05">
              <div class="text-container style-02 d-flex ai-center">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-13.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-200">
                        <span class="fw-600">APEC</span> 2020
                      </h3>
                      <p class="h4 color-white fw-500 lh-2xs mt-2">
                        ความร่วมมือทางเศรษฐกิจ<br>ในเอเชียแปซิฟิก (เอเปค)
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-03" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์หลัก</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="img-container size-04 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-25.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>        
    
         <!-- Eastern Economic Corridor -->
         <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/89.jpg');"></div>
            <div class="content style-06">
              <div class="img-container size-04 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-demo.png" alt="Device" />
              </div>
              <div class="text-container style-03">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-14.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Eastern<br>Economic<br>Corridor
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        สำนักงานคณะกรรมการ<br>นโยบายเขตพัฒนาพิเศษ<br>ภาคตะวันออก <span class="fw-200">(สกพอ.)</span>
                      </p>
                    </div>
                  </div>
                  <div class="btns animate-01" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์สำนักงาน</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 

        <!-- Electricity -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/91.jpg');"></div>
            <div class="content style-05">
              <div class="text-container style-02 d-flex ai-center">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-16.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        The Metropolitan
                      </h3>
                      <p class="h3 color-white text-uppercase fw-500 lh-2xs mt-2">
                        Electricity<br>Authority
                      </p>
                      <p class="h5 color-white fw-600">
                        การไฟฟ้านครหลวง
                      </p>
                    </div>
                  </div>
                  <div class="btns mw-unset animate-03" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์หลัก</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="img-container size-05 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-28.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>       

        <!-- SMEs Promotion -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/90.jpg');"></div>
            <div class="content style-05">
              <div class="text-container style-02 d-flex ai-center">
                <div class="wrapper">
                  <div class="title-wrapper">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-15.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-xs fw-200">
                        The Office of
                      </h3>
                      <p class="h3 color-white fw-500 lh-2xs mt-2">
                        SMES PROMOTION
                      </p>
                      <p class="h4 color-white">
                        สำนักงานส่งเสริมวิสาหกิจ ขนาดกลางและขนาดย่อม
                      </p>
                    </div>
                  </div>
                  <div class="btns mw-unset animate-03" style="--delay:.75s;">
                    <a class="btn btn-action btn-color-03" href="#">
                      <div class="icon-container color-01">
                        <span class="p color-white fw-300">เว็บไซต์หลัก</span>
                        <em class="ml-2 fa-solid fa-play"></em>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div class="img-container size-06 animate-02" style="--delay:.45s;">
                <img class="img" src="public/img/content/screen-27.png" alt="Device" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="navigator">
        <div class="dots">
          <div class="dots-wrapper">
            <div class="out-wrapper">
              <div class="wrapper" style="--slide:1;"></div>
            </div>
          </div>
        </div>
        <div class="arrows">
          <div class="wrapper">
            <div class="icon btn-icon-prev">
              <img class="img" src="public/img/icon/arrow-03.png" alt="Arrow" />
            </div>
            <div class="icon">
              <img class="img" src="public/img/icon/line.png" alt="Arrow" />
            </div>
            <div class="icon btn-icon-next">
              <img class="img" src="public/img/icon/arrow-04.png" alt="Arrow" />
            </div>
          </div>
        </div>
        <div class="btn-slide-more"></div>
      </div>
    </div>
  </section>

  <?php
    $standards = [
      [
        'topic' => 'W3C', 
        'title' => 'การออกแบบเว็บไซต์ให้ตรงตาม<br>ข้อกำหนดขององค์กร<br>มาตรฐานเวิลด์ ไวด์ เว็บ',
        'desc' => '(World Wide Web Consortium:W3C) สำหรับ Hypertext Markup Language<br>(HTML) อย่างน้อย HTML 4.01'
      ],[
        'topic' => 'WAI', 
        'title' => 'การออกแบบและจัดทำให้เว็บไซต์<br>เข้าถึงและใช้ประโยชน์ได้',
        'desc' => '(Web Accessibility Initiative : WAI)'
      ],[
        'topic' => 'WCAG 2.0',
        'title' => 'การออกแบบเว็บไซต์ให้ตรงตามข้อกำหนดเนื้อหาเว็บ สามารถเข้าถึงและใช้ประโยชน์ได้ รุ่น 2.0',
        'desc' => '(Web Content Accessibility Guidelines 2.0 : WCAG 2.0) ในเกณฑ์ความสำเร็จระดับเอ (A) และรองรับกับแนวทางของ Thai Web Content Accessibility Guidelines 2010 (TWCAG 2010)'
      ],
    ];
  ?>
  
  <section data-section="5" class="section-01 section-padding">
    <div class="pattern style-33">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-19.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-34 size-02">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-20.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-35 size-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-21.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/09.jpg');"></div> 
    <div class="container" style="z-index:2;">
      <h3 class="text-center color-black fw-200" data-aos="fade-up" data-aos-delay="0">
        พร้อมรองรับ<span class="color-01 fw-600">มาตรฐานต่างๆ</span>
      </h3>  
      <div class="ss-box xxl" data-aos="fade-up" data-aos-delay="150">
        <div class="grids jc-center">
          <?php foreach($standards as $d){?>
            <div class="grid lg-25 md-1-3 pt-3">
              <a class="ss-card ss-card-17" href="#">
                <div class="icon-text">
                  <p class="h6 title lh-2xs text-center fw-600">
                    <?= $d['topic'] ?>
                  </p>
                </div>
                <div class="text-container mt-3">
                  <p class="text-center color-01 lh-sm fw-600">
                    <?= $d['title'] ?>
                  </p>
                  <p class="xs text-center color-black fw-600 mt-1">
                    <?= $d['desc'] ?>
                  </p>
                </div>
              </a>
            </div>
          <?php }?>
          <div class="grid lg-25 md-1-3 pt-3">
              <a class="ss-card ss-card-17" href="#">
                <div class="icon-text">
                  <p class="h6 title lh-2xs text-center fw-600">
                    Government<br>website<br>standard<br>v.2
                  </p>
                </div>
                <ul class="ss-list-01 pl-5 style-05">
                  <li class="color-black fw-400">การตั้งชื่อเว็บไซต์ภาครัฐ</li>
                  <li class="color-black fw-400 mt-1">คุณลักษณะที่ควรมี</li>
                  <li class="color-black fw-400 mt-1">การมีส่วนร่วมของประชาชน</li>
                  <li class="color-black fw-400 mt-1">ความมั่นคงปลอดภัยสำหรับเว็บไซต์</li>
                  <li class="color-black fw-400 mt-1">ข้อมูลพื้นฐานเกี่ยวกับหน่วยงาน</li>
                  <li class="color-black fw-400 mt-1">การให้บริการของหน่วยงาน</li>
                  <li class="color-black fw-400 mt-1">ข้อมูลเปิดภาครัฐ</li>
                  <li class="color-black fw-400 mt-1">การประกาศนโยบาย</li>
                </ul>
              </a>
            </div>
        </div>  
      </div>
    </div>
  </section>

  <section data-section="6" class="section-05 section-padding" style="background-image:url('public/img/bg/15.jpg');">
    <div class="container">
      <h3 class="text-center color-white text-uppercase lh-sm fw-500" data-aos="fade-up" data-aos-delay="0">
        มาตรฐานเว็บไซต์ภาครัฐ เวอร์ชัน 2.0
      </h3>  
      <p class="h5 text-center color-white fw-200" data-aos="fade-up" data-aos-delay="150">
        Government Website Standard Version 2.0 
      </p>
      <div class="ss-box xxl mt-6 pt-2" data-aos="fade-up" data-aos-delay="300">
        <div class="grids">
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01 style-06">
              <li class="fw-200 mt-3">Enterprise ECommerce Solutions</li>
              <li class="fw-200 mt-3">SEO Structure</li>
              <li class="fw-200 mt-3">Site Audit</li>
              <li class="fw-200 mt-3">QC</li>
              <li class="fw-200 mt-3">UX/UI</li>
              <li class="fw-200 mt-3">Full Back Office Management</li>
            </ul> 
          </div>   
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01 style-06">
              <li class="fw-200 mt-3">All Web Browser Support</li>
              <li class="fw-200 mt-3">All Device Support (Responsive)</li>
              <li class="fw-200 mt-3">Html5 / W3C / UX / UI</li>
              <li class="fw-200 mt-3">SEO (Search Engine Optimization)</li>
              <li class="fw-200 mt-3">Performance Speed Test</li>
              <li class="fw-200 mt-3">Security Testing (OWASP)</li>
            </ul> 
          </div>
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01 style-06">
              <li class="fw-200 mt-3">SQL Injection</li>
              <li class="fw-200 mt-3">XSS (Cross Site Scripting)</li>
              <li class="fw-200 mt-3">File Disclosure</li>
              <li class="fw-200 mt-3">Remote File Inclusion</li>
              <li class="fw-200 mt-3">PHP/ASP Code Injection</li>
              <li class="fw-200 mt-3">System</li>
            </ul> 
          </div> 
        </div>
      </div>
    </div>
  </section>
  
  <section data-section="7" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="text-container">
            <div data-aos="fade-up" data-aos-delay="0">
              <img 
                class="img" src="public/img/content/02.png" alt="ITA Logo" 
                style="max-width:15rem; margin:0 auto;" 
              />
            </div>
            <p class="lg text-center lh-sm fw-600 mt-4" data-aos="fade-up" data-aos-delay="150">
              การประเมินคุณธรรมและความโปร่งใสใน <br>
              การดำเนินงานของหน่วยงานภาครัฐ
            </p>
            <p class="text-center fw-500 mt-1" data-aos="fade-up" data-aos-delay="300">
              (Integrity and Transparency Assessment: ITA)
            </p>  
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/17.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <section data-section="8" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block-float left">
          <div class="content-container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php for($i=0; $i<5; $i++){?>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="ss-card ss-card-03">
                        <div class="ss-img no-hover horizontal-01">
                          <div class="img-bg" style="background-image:url('public/img/content/content-7<?= ($i%3+5) ?>.jpg');"></div>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-plus"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
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
          </div>
        </div>
        <div class="block">
         <div class="pattern style-07">
            <div class="wrapper">
              <img src="public/img/content/pattern-46.png" alt="Hero" />
            </div>
          </div>
          <div class="text-container md">
            <h3 class="lg color-01 lh-xs fw-600 md-no-br" data-aos="fade-up" data-aos-delay="0">
              แนวทางรักษา<br>ความปลอดภัย<span class="color-black fw-300">ของระบบ</span>
            </h3>
            <p class="lh-sm md-no-br mt-2" data-aos="fade-up" data-aos-delay="150">
              ซอฟต์แวร์ที่ใช้สำหรับตรวจสอบช่องโหวระบบ โดยซอฟต์แวร์ที่จัด <br />
              หามาต้องรองรับมาตรฐาน OWASP เช่น ACUNETIX เป็นต้น
            </p> 
          </div>
        </div>
      </div>    
    </div>
  </section>

  <?php
    $tools = [
      ['bg' => 'public/img/content/content-40.jpg', 'title' => 'BENCHMARKING'], 
      ['bg' => 'public/img/content/content-41.jpg', 'title' => 'PERFORMANCE & ERROR CHECKING'], 
      ['bg' => 'public/img/content/content-42.jpg', 'title' => 'SPEED PAGE'], 
      ['bg' => 'public/img/content/content-43.jpg', 'title' => 'RESPONSIVE TESTING'], 
      ['bg' => 'public/img/content/content-44.jpg', 'title' => 'SEO SCORING'], 
      ['bg' => 'public/img/content/content-45.jpg', 'title' => 'SEO SCORING'], 
    ];
  ?>
  <section data-section="9" class="section-01 section-padding">
    <div class="pattern style-41">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-28.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-42">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-23.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-43">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-25.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-44">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-24.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/37.jpg');"></div> 
    <div class="container">
      <h3 class="lg text-center color-white fw-100" data-aos="fade-up" data-aos-delay="0" >
        เครื่องมือในการ<span class="color-white fw-500">ทดสอบตรวจสอบคุณภาพ</span>ของเว็บไซต์
      </h3>      
      <div class="grids pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="150">
        <?php foreach($tools as $d){?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100 pt-6">
            <a class="ss-card ss-card-03 bradius-round-02" href="#">
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
            </a>
            <div class="mt-3">
              <a class="p lg color-white h-color-p fw-600" href="#">
                <?= $d['title'] ?>
              </a>
            </div>
          </div>
        <?php }?>       
      </div>
    </div>
  </section>
  
  <section data-section="10" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="text-container">
            <h3 class="lh-2xs fw-300" data-aos="fade-up" data-aos-delay="0">
              เครื่องมือในการวัด <br> 
              <span class="text-uppercase color-01 fw-600" data-aos-delay="150">Seo Score</span>
            </h3>
            <p class="lg lh-sm fw-500 mt-2" data-aos="fade-up" data-aos-delay="300">
              เพื่อให้เราสามารถสร้างและปรับแต่งบทความ<br>ให้เกิดประโยชน์จาก SEO
            </p>
            <p class="fw-300" data-aos="fade-up" data-aos-delay="450">
              (Search Engine Optimization)
            </p>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/18.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>
  <section data-section="11" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block-float left">
          <div class="content-container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php for($i=0; $i<5; $i++){?>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="ss-card ss-card-03">
                        <div class="ss-img no-hover horizontal-04">
                          <div class="img-bg" style="background-image:url('public/img/content/content-8<?= ($i%3+0) ?>.jpg');"></div>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-plus"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
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
          </div>
        </div>
        <div class="block">
          <div class="text-container md">
            <h4 class="lg color-01 lh-xs fw-600" data-aos="fade-up" data-aos-delay="0">
              กระบวนการ<br>หรือขั้นตอนการทำงาน
            </h4>
            <h4 class="h4 color-black lh-xs sm-no-br fw-300 mt-1" data-aos="fade-up" data-aos-delay="150">
              ที่เป็นระบบจากทีมงาน<br>มืออาชีพ
            </h4>
          </div>
        </div>
      </div>    
    </div>
  </section>
  
  <section data-section="14" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block">
          <div class="pattern style-07">
            <div class="wrapper">
              <img src="public/img/content/pattern-46.png" alt="Hero" />
            </div>
          </div>
          <div class="text-container md">
            <h4 class="lg color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
              กระบวนการออกแบบ
            </h4>
            <h4 class="lg lh-xs color-black sm-no-br fw-300 mt-1" data-aos="fade-up" data-aos-delay="150">
              ที่ลูกค้าสามารถทำงาน<br>
              ร่วมกับทีมพัฒนา<br>ออนไลน์
            </h4>
          </div>
        </div>
        <div class="block-float right">
          <div class="content-container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php for($i=0; $i<5; $i++){?>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="ss-img no-hover horizontal-04">
                        <div class="img-bg" style="background-image:url('public/img/content/content-8<?= ($i%4+3) ?>.jpg');"></div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
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
          </div> 
        </div>
      </div>    
    </div>
  </section>

  <?php 
    $titles = [
      'ระบบริหารจัดการรายการเนื้อหา เว็บไซต์ (Content Management System)', 'ระบบจัดการผู้ดูแลระบบ (Administrator WEB Master Policy) ',
      'ระบบบริหารจัดการเมนู<br>(Sub Menu level 2-3 management)', 'ระบบดึงและกระจายข่าว<br>(RSS Feed)พร้อมระบบจัดการข้อมูล',
      'ระบบถาม-ตอบ (FAQ)<br>ระบบ Vote', 'ระบบเว็บบอร์ด (Web board)', 'Social Media Management', 'E-Newsletter<br>(Mailing List)',
      ' ระบบจัดการแบนเนอร์ (Banner Management)'
    ]
  ?>

  <section data-section="13" class="section-01 section-padding">
    <div class="pattern style-20">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-21">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-03.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-22 size-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-23">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-04.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-24">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-06.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-25">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-05.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/17.jpg');"></div> 
    <div class="container">
      <div class="text-center">
        <h3 class="color-white text-center lh-sm fw-500" data-aos="fade-up" data-aos-delay="0">
          ระบบ <span class="text-uppercase">Back Office</span>
        </h3> 
        <p class="h6 color-white fw-200" data-aos="fade-up" data-aos-delay="150">
          สำหรับใช้ในการบริหารจัดการทั้งข้อมูลและโครงสร้างของเว็บไซต์ที่ผ่านมาตรฐาน
        </p>
      </div>
      <div class="ss-box xl pos-relative mt-6" style="z-index:2;" data-aos="fade-up" data-aos-delay="400">
        <div class="grids jc-center">
          <?php for($i=0; $i<9; $i++){?>
            <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 mt-2">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/back-office-dark-0<?= ($i%9+1) ?>.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/back-office-active-0<?= ($i%9+1) ?>.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title text-center color-white mt-2">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php }?>
      
          <?php 
            $titles = [
              'ระบบจัดการข้อมูล Download', 'ระบบจัดการภาพกราฟิกด้านบน (Special Top Graphic & Banner Management)',
              'ระบบบริหารจัดการสมาชิก (Member Management System)', 'ระบบค้นหาข้อมูล<br>(Basic Search + Advanced Search',
              'ระบบปฏิทินกิจกรรม (Calendar Activities)', 'ระบบจดหมายข่าว<br>(E-Newsletter)','ระบบจัดการหน้าพิเศษ<br>
               (Intro page for Festival)', 'ระบบจัดการข้อมูลเว็บลิงก์ (Web Link)','ระบบ Auto Dynamic<br>Site Map',
               'ระบบติดต่อสอบถาม<br>(Contact Us)'
            ]
          ?>

          <?php for($i=0; $i<10; $i++){?>
            <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 mt-2">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/back-office-dark-1<?= ($i%10+0) ?>.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/back-office-active-1<?= ($i%10+0) ?>.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title color-white mt-2">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php }?>

          <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 mt-2">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/back-office-dark-20.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/back-office-active-20.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title color-white mt-2">
                    ระบบคลังภาพ <br> (Photo Gallery)  
                  </p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>    
  </section>

  <section data-section="14" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="pattern style-01">
            <div class="wrapper">
              <img src="public/img/content/pattern-40.png" alt="Hero" />
            </div>
          </div>
          <div class="pattern style-02">
            <div class="wrapper">
              <img src="public/img/content/pattern-41.png" alt="Hero">
            </div>
          </div>
          <div class="img-bg" style="background-image:url('public/img/bg/71.jpg');"></div>
          <div class="text-container md pos-relative" style="z-index:2;">
            <h4 class="lg lh-xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              รองรับการทำงานผ่าน<br><span class="color-01 fw-600">MOBILE/TABLET</span><br>
              <span class="color-01">(Responsive)</span>
            </h4>
            <ul class="ss-list-01 style-05 mt-5" data-aos="fade-up" data-aos-delay="150">
              <li class="color-black fw-400 mt-2">Mobile Applications Development</li>
              <li class="color-black fw-400 mt-2">Mobile Games Development</li>
              <li class="color-black fw-400 mt-2">AR, QR, VR Technology Development</li>
              <li class="color-black fw-400 mt-2">Augmented reality delivers real-world results</li>
              <li class="color-black fw-400 mt-2">FULLY TURNKEY VR & AR SOLUTIONS</li>
              <li class="color-black fw-400 mt-2">Virtual 360 องศา ทั้งแบบ Panorama และ Google Street View</li>
            </ul>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-21.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <section data-section="4" class="section-12">
    <div class="container">
      <div class="blocks flex-column-reverse">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/bg/72.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="pattern style-03">
            <div class="wrapper">
              <img src="public/img/content/pattern-42.png" alt="Hero" />
            </div>
          </div>
          <div class="pattern style-04">
            <div class="wrapper">
              <img src="public/img/content/pattern-43.png" alt="Hero" />
            </div>
          </div>
          <div class="img-bg" style="background-image:url('public/img/bg/73.jpg');"></div>
          <div class="text-container md">
            <h4 class="lg lh-xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              เชื่อมหรือแจ้งเตือนเข้า<br><span class="color-01 fw-600">LINE NOTIFICATION</span><br>ได้ตามต้องการ
            </h4> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="14" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="pattern style-05">
            <div class="wrapper">
              <img src="public/img/content/pattern-45.png" alt="Hero" />
            </div>
          </div>
          <div class="pattern style-06">
            <div class="wrapper">
              <img src="public/img/content/pattern-44.png" alt="Hero" />
            </div>
          </div>
          <div class="img-bg" style="background-image:url('public/img/bg/74.jpg');"></div>
          <div class="text-container md">
            <h4 class="lg lh-xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              พร้อม<span class="h3 color-01 fw-600 lh-xs">ข้อเสนอเพิ่มเติม</span><br>ต่างๆอีกมายมากอาทิเช่น 
            </h4>
            <ul class="ss-list-01 style-05 mt-5" data-aos="fade-up" data-aos-delay="150">
              <li class="color-black fw-400 mt-2">Free Hero Banner Design 1 Year</li>
              <li class="color-black fw-400 mt-2">SEO Maintenance</li>
              <li class="color-black fw-400 mt-2">Security Monthly Testing</li>
              <li class="color-black fw-400 mt-2">Web Performance Tunning</li>
              <li class="color-black fw-400 mt-2">AI Search by Elastic Search </li>
              <li class="color-black fw-400 mt-2">Jmeter load Test</li>
              <li class="color-black fw-400 mt-2">Chat Bot</li>
            </ul>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/bg/18.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <section data-section="15">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          พร้อมดูแลการ<span class="fw-600">ฝึกอบรมแบบครบวงจร</span>
        </h3>
      </div>
    </div>
  </section>

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
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>