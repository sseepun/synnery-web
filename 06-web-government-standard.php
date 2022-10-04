<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/img-01.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/24.jpg');"></div>
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
        <?php for($i=0; $i<3; $i++){?>
          <div class="grid xl-25 lg-25 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-05">
              <div class="ss-img vertical-01">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
              </div>
              <div class="filter-02"></div>
              <div class="hover-filter-01"></div>
              <div class="text-container">
                <div class="title h5 color-01 lh-xs fw-500">
                  ช่องทางการสื่อสาร
                </div>
                <div class="desc p sm color-white fw-400">
                  นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
                  นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
                </div>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
            </a>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <!-- Section 13 ใช้ 2 ที่ (หน้า 06 และ 07) ผมแก้ยังไม่เสร็จนะครับ class น่าจะทับกัน -->
  <section data-section="3" class="section-13">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          ตัวอย่าง<span class="fw-600">ผลงาน</span>
        </h3>
      </div>
    </div>
    <div class="swiper-container style-02">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<9; $i++) {?>
          <div class="swiper-slide">
            <div class="wrapper">
              <div class="img-bg" style="background-image:url('public/img/bg/57.jpg');"></div>
              <div class="content-style-02">
                <div class="grids">
                  <div class="grid lg-60 md-100 sm-100">
                    <div class="image-container">
                      <img class="img device-screen-01" src="public/img/content/screen.png" alt="Device" />
                    </div>
                  </div>
                  <div class="grid lg-40 md-100 sm-100">
                    <div class="text-container style-02">
                      <img class="img logo" src="public/img/content/logo-06.png" alt="LOGO" />
                      <h2 class="color-white text-uppercase lh-2xs fw-200 mt-6">
                        Ministry of<br><span class="fw-600">Education</span>
                      </h2>
                      <p class="h4 color-white fw-600">
                        กระทรวงศีกษาธิการ
                      </p>
                      <div class="btns pt-4">
                        <a class="btn btn-action btn-color-03" href="#">
                          <div class="icon-container">
                            <span class="p fw-300">เว็บไซต์กระทรวง</span>
                            <em class="ml-2 fa-solid fa-play"></em>
                          </div>
                        </a>
                      </div>
                      <div class="btns pt-4">
                        <a class="btn btn-action btn-color-03 style-02" href="#">
                          <div class="icon-container">
                            <span class="p fw-300">เว็บไซต์สำนักงานปลัด</span>
                            <em class="ml-2 fa-solid fa-play"></em>
                          </div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="navigator">
        <div class="dots">
          <div class="wrapper"></div>
        </div>
        <div class="arrows">
          <div class="wrapper">
            <div class="icon btn-icon-next">
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
      </div>
    </div>
  </section>

  <section data-section="5" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/20.jpg');"></div> 
    <div class="container">
      <h3 class="text-center color-black fw-200" data-aos="fade-up" data-aos-delay="0" >
        พร้อมรองรับ<span class="color-01 fw-600">มาตรฐานต่างๆ</span>
      </h3>  
      <div class="ss-box xxl" data-aos="fade-up" data-aos-delay="150">
        <div class="grids jc-center">
          <?php for($i=0; $i<7; $i++){?>
            <div class="grid lg-25 md-1-3 pt-3">
              <a class="ss-card ss-card-17" href="#">
                <div class="icon-text">
                  <p class="h5 title fw-600">W3C</p>
                </div>
                <div class="text-container mt-3">
                  <p class="text-center color-01 lh-sm fw-600">
                    World Wide Web <br> Consortium
                  </p>
                  <p class="xs text-center color-black fw-600 mt-1">
                    มาตรฐานเว็บไซต์ของหน่วยงานภาครัฐ <br> ให้เป็นไปในทิศทางเดียวกัน
                  </p>
                </div>
              </a>
            </div>
          <?php }?>
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
            <ul class="ss-list-01">
              <li class="fw-200 mt-3">Enterprise ECommerce Solutions</li>
              <li class="fw-200 mt-3">SEO Structure</li>
              <li class="fw-200 mt-3">Site Audit</li>
              <li class="fw-200 mt-3">QC</li>
              <li class="fw-200 mt-3">UX/UI</li>
              <li class="fw-200 mt-3">Full Back Office Management</li>
            </ul> 
          </div>   
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01">
              <li class="fw-200 mt-3">All Web Browser Support</li>
              <li class="fw-200 mt-3">All Device Support (Responsive)</li>
              <li class="fw-200 mt-3">Html5 / W3C / UX / UI</li>
              <li class="fw-200 mt-3">SEO (Search Engine Optimization)</li>
              <li class="fw-200 mt-3">Performance Speed Test</li>
              <li class="fw-200 mt-3">Security Testing (OWASP)</li>
            </ul> 
          </div>
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01">
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
        <div class="block-float left d-flex ai-center">
          <div class="grids no-gap">
            <?php for($i=0; $i<4; $i++){?>
              <div class="grid sm-50 xs-50 mt-0">
                <div class="ss-img horizontal-04">
                  <div class="img-bg" style="background-image:url('public/img/content/chart-0<?= ($i%3+1) ?>.jpg');"></div>
                </div>
              </div>
            <?php }?> 
          </div>
        </div>
        <div class="block">
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

  <section data-section="9" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/16.jpg');"></div> 
    <div class="container">
      <h3 class="lg text-center color-white fw-100" data-aos="fade-up" data-aos-delay="0" >
        เครื่องมือในการ<span class="color-01 fw-500">ทดสอบตรวจสอบคุณภาพ</span>ของเว็บไซต์
      </h3>      
      <div class="grids" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<6; $i++){?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100 pt-6">
            <a class="ss-card ss-card-03" href="#">
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/img/content/chart-0<?= ($i%3+1) ?>.jpg');"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
            </a>
            <div class="text-center mt-3">
              <a class="p lg color-white h-color-p fw-600" href="#">
                BENCHMARKING
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
        <div class="block-float left d-flex ai-center">
          <div class="grids no-gap">
            <?php for($i=0; $i<4; $i++){?>
              <div class="grid sm-50 xs-50 mt-0">
                <div class="ss-img horizontal-04">
                  <div class="img-bg" style="background-image:url('public/img/content/chart-0<?= ($i%3+1) ?>.jpg');"></div>
                </div>
              </div>
            <?php }?> 
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
  
  <section data-section="12" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block">
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
        <div class="block-float right d-flex ai-center">
          <div class="grids no-gap">
            <div class="grid sm-100 mt-0">
              <a class="ss-card ss-card-03" href="#">
                <div class="ss-img horizontal-01">
                  <div class="img-bg" style="background-image:url('public/img/content/chart-01.jpg');"></div>
                </div>
                <div class="icon">
                  <em class="fa-solid fa-plus"></em>
                </div>
                <div class="line-1"></div><div class="line-2"></div>
              </a>
            </div>
            <?php for($i=0; $i<3; $i++){?>
              <div class="grid sm-1-3 mt-0">
                <a class="ss-card ss-card-03" href="#">
                  <div class="ss-img horizontal-01">
                    <div class="img-bg" style="background-image:url('public/img/content/chart-01.jpg');"></div>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            <?php }?> 
          </div>
        </div>
      </div>    
    </div>
  </section>

  <section data-section="13" class="section-01 section-padding">
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
      <div class="ss-box xl mt-6" data-aos="fade-up" data-aos-delay="400">
        <div class="grids jc-center">
          <?php for($i=0; $i<20; $i++){?>
            <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 mt-2">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/bell.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/bell-active.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title color-white mt-2">
                    ระบบจัดการหน้าพิเศษ <br> (Intro page for Festival) 
                  </p>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>    
  </section>

  <section data-section="14" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container md">
            <h4 class="lg lh-xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              พร้อม<span class="h3 color-01 fw-600 lh-xs">ข้อเสนอเพิ่มเติม</span>ต่างๆ<br>อีกมายมากอาทิเช่น 
            </h4>
            <ul class="ss-list-01 style-03 mt-5" data-aos="fade-up" data-aos-delay="150">
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

  <section data-section="16" class="section-01 size-02">
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
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>