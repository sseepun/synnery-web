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

  <section data-section="2" class="section-01 section-padding">
    <div class="container">
      <div class="text-center color-01">
        <p class="h3 color-black fw-600" data-aos="fade-up" data-aos-delay="0">
          Government
        </p>
        <p class="h1 lh-3xs text-shadow fw-600" data-aos="fade-up" data-aos-delay="150">
          Standard Website
        </p>
        <p class="h4 color-black fw-300" data-aos="fade-up" data-aos-delay="300">
          บริการ <span class="h3 color-black fw-500">ออกแบบและจัดทำเว็บไซต์</span> สำหรับภาครัฐโดยเฉพาะ <br>
          ด้วย <span class="h3 color-black lh-3xs fw-500">ประสบการณ์</span> ในการทำงานด้านนี้<br>
          <span class="h4 color-black fw-600">กว่า</span> <span class="h1 lg color-01 lh-2xs fw-600">25 ปี</span> 
        </p>
      </div>
      <div class="grids jc-center mt-4" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<3; $i++){?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-05 filter-01">
              <div class="ss-img vertical">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
              </div>
              <div class="text-container">
              <div class="title h5 color-01 lh-xs fw-500">
                ช่องทางการสื่อสาร
              </div>
              <div class="desc color-white fw-400">
                นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
                นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
              </div>
            </div>
            </a>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <section class="ss-header-title" data-aos="fade-up" data-aos-delay="150">
    <h4 class="color-white fw-100">
      ตัวอย่าง<span class="fw-500">ผลงาน</span>
    </h4>   
  </section>
  <section data-section="3">
    <!-- ยังเป็นรูปภาพอยู่นะครับ จะกลับมาแก้ไขให้ครับ -->
    <img class="img" src="public/img/bg/banner-01.jpg" alt="Banner" />
  </section>

  <section data-section="4" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block style-02">
          <div class="img-bg" style="background-image:url('public/img/content/16.jpg');"></div>
        </div> 
        <div class="subblocks">
          <div class="subblock padding">
            <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
            <div class="text-wrapper ss-text-wrapper md style-02">
              <h3 class="color-01 lh-2xs" data-aos="fade-up" data-aos-delay="0">
                <span class="fw-600">Tech & Tools</span> <span class="h4 lg color-black fw-400">ที่เราเลือกใช้</span>
              </h3>
              <div class="grids" data-aos="fade-up" data-aos-delay="150">
                <?php for($i=0; $i<20; $i++){?>
                  <div class="grid lg-20 md-20 sm-20 xs-1-3">
                    <div class="ss-card ss-card-14">
                      <div class="icon">
                        <img class="inactive" src="public/img/icon/tech-01.png" alt="Icon Inactive" />
                        <img class="active" src="public/img/icon/tech-01-active.png" alt="Icon Active" />
                      </div>
                      <div class="text-container">
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
    </div>
 </section>

  <section data-section="5" class="section-01 size-03 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/20.jpg');"></div> 
    <div class="container">
      <h4 class="lg text-center color-black fw-200" data-aos="fade-up" data-aos-delay="0" >
        พร้อมรองรับ<span class="color-01 fw-500">มาตรฐานต่างๆ</span>
      </h4>  
      <div class="ss-box xl" data-aos="fade-up" data-aos-delay="150">
        <div class="grids jc-center mt-4">
          <?php for($i=0; $i<7; $i++){?>
            <div class="grid lg-25">
              <a class="ss-card ss-card-17" href="#">
                <div class="text-heading">
                  <p class="h6 title color-01 fw-600">W3C</p>
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
      <div class="ss-box xxl mt-4">
        <div class="grids" data-aos="fade-up" data-aos-delay="300">
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <ul class="ss-list-01">
              <li class="fw-200">Enterprise ECommerce Solutions</li>
              <li class="fw-200">SEO Structure</li>
              <li class="fw-200">Site Audit</li>
              <li class="fw-200">QC</li>
              <li class="fw-200">UX/UI</li>
              <li class="fw-200">Full Back Office Management</li>
            </ul> 
          </div>   
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <ul class="ss-list-01">
              <li class="fw-200">All Web Browser Support</li>
              <li class="fw-200">All Device Support (Responsive)</li>
              <li class="fw-200">Html5 / W3C / UX / UI</li>
              <li class="fw-200">SEO (Search Engine Optimization)</li>
              <li class="fw-200">Performance Speed Test</li>
              <li class="fw-200">Security Testing (OWASP)</li>
            </ul> 
          </div>
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <ul class="ss-list-01">
              <li class="fw-200">SQL Injection</li>
              <li class="fw-200">XSS (Cross Site Scripting)</li>
              <li class="fw-200">File Disclosure</li>
              <li class="fw-200">Remote File Inclusion</li>
              <li class="fw-200">PHP/ASP Code Injection</li>
              <li class="fw-200">System</li>
            </ul> 
          </div> 
        </div>
      </div>
    </div>
  </section>

  <section data-section="7" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper ss-text-wrapper xxs">
            <div class="ss-card ss-card-15">
              <div class="image-container" data-aos="fade-up" data-aos-delay="0">
                <img src="public/img/content/02.png" alt="ITA Logo" />
              </div>
              <p class="lg color-black text-center fw-600 mt-2" data-aos="fade-up" data-aos-delay="150">
                การประเมินคุณธรรมและความโปร่งใสใน <br>
                การดำเนินงานของหน่วยงานภาครัฐ
              </p>
              <p class="text-center sm fw-500 mt-1" data-aos="fade-up" data-aos-delay="300">
                (Integrity and Transparency Assessment: ITA)
              </p>  
            </div>
          </div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/img/content/17.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <section data-section="8" class="section-06">
    <div class="grids no-gap">
      <div class="grid lg-50 mt-0">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<4; $i++){?>
            <div class="grid sm-50 mt-0">
              <a class="ss-card ss-card-12 height-full" href="#">
                <div class="ss-img height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/chart-0<?= ($i%3+1) ?>.jpg');"></div>
                </div>
                <div class="icon">
                  <em class="fa-solid fa-plus"></em>
                </div>
              </a> 
            </div>
          <?php }?>     
        </div>        
      </div>    
      <div class="grid lg-50 mt-0">
        <div class="block jc-start">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper ss-text-wrapper">
            <h4 class="lg color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
              แนวทางรักษา<br>ความปลอดภัย<span class="color-black fw-300">ของระบบ</span>
            </h4>
            <p class="xs lh-sm md-no-br" data-aos="fade-up" data-aos-delay="150">
              ซอฟต์แวร์ที่ใช้สำหรับตรวจสอบช่องโหวระบบ โดยซอฟต์แวร์ที่จัด <br>
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
      <h4 class="lg text-center color-white fw-100"data-aos="fade-up" data-aos-delay="0" >
        เครื่องมือในการ<span class="color-01 fw-500">ทดสอบตรวจสอบคุณภาพ</span>ของเว็บไซต์
      </h4>      
      <div class="grids mt-2" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<6; $i++){?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-03 height-full" href="#">
              <div class="ss-img height-full">
                <div class="img-bg" style="background-image:url('public/img/content/chart-0<?= ($i%3+1) ?>.jpg');"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>
        <?php }?>       
      </div>
    </div>
  </section>

 <section data-section="10" class="section-03">
  <div class="container">
    <div class="blocks">
      <div class="block">
        <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
        <div class="text-wrapper ss-text-wrapper xxs">
          <h4 class="lg lh-2xs fw-300" data-aos="fade-up" data-aos-delay="0">
            เครื่องมือในการวัด <br> 
            <span class="text-uppercase color-01 fw-600" data-aos-delay="150">Seo Score</span>
          </h4>
          <p class="lg lh-sm fw-500 mt-1" data-aos="fade-up" data-aos-delay="300">
            เพื่อให้เราสามารถสร้างและปรับแต่งบทความ<br>ให้เกิดประโยชน์จาก SEO
          </p>
          <p class="xs color-03" data-aos="fade-up" data-aos-delay="450">
            (Search Engine Optimization)
          </p>
        </div>
      </div> 
      <div class="subblocks">
        <div class="subblock">
          <div class="img-bg" style="background-image:url('public/img/content/18.jpg');"></div>
        </div>
      </div> 
    </div>    
  </div>
 </section>

 <section data-section="11" class="section-06">
    <div class="grids no-gap">
      <div class="grid lg-50 mt-0">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<4; $i++){?>
            <div class="grid sm-50 mt-0">
              <a class="ss-card ss-card-12 height-full" href="#">
                <div class="ss-img height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/chart-0<?= ($i%3+1) ?>.jpg');"></div>
                </div>
                <div class="icon">
                  <em class="fa-solid fa-plus"></em>
                </div>
              </a> 
            </div>
          <?php }?>     
        </div>        
      </div>    
      <div class="grid lg-50 mt-0">
        <div class="block jc-start">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper ss-text-wrapper">
            <h4 class="lg color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
              กระบวนการ<br>หรือขั้นตอนการทำงาน
            </h4>
            <p class="h4 lg lh-xs color-black sm-no-br fw-300 mt-1" data-aos="fade-up" data-aos-delay="150">
              ที่เป็นระบบจากทีมงาน<br>มืออาชีพ
            </p>
          </div>
        </div>   
      </div>     
    </div>                          
  </section>

  <section data-section="12" class="section-06">
    <div class="grids no-gap">
      <div class="grid lg-50 mt-0">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper ss-text-wrapper xxs">
            <h4 class="lg color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
              กระบวนการออกแบบ
            </h4>
            <p class="h4 lg lh-xs color-black sm-no-br fw-300 mt-1" data-aos="fade-up" data-aos-delay="150">
              ที่ลูกค้าสามารถทำงาน<br>
              ร่วมกับทีมพัฒนา<br>ออนไลน์
            </p>
          </div>
        </div>   
      </div>    
      <div class="grid lg-50 mt-0">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<4; $i++){?>
            <div class="grid sm-50 mt-0">
              <a class="ss-card ss-card-12 height-full" href="#">
                <div class="ss-img height-full">
                  <div class="img-bg" style="background-image:url('public/img/bg/1<?= ($i%1+3) ?>.jpg');"></div>
                </div>
                <div class="icon">
                  <em class="fa-solid fa-plus"></em>
                </div>
              </a> 
            </div>
          <?php }?>     
        </div>        
      </div>  
    </div>                          
  </section>

  <section data-section="13" class="section-01 size-02 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/17.jpg');"></div> 
    <div class="container">
      <div class="text-center">
        <h3 class="color-white text-center fw-500" data-aos="fade-up" data-aos-delay="0">
          ระบบ <span class="text-uppercase">Back Office</span>
        </h3> 
        <p class="lg color-white fw-200" data-aos="fade-up" data-aos-delay="150">
          สำหรับใช้ในการบริหารจัดการทั้งข้อมูลและโครงสร้างของเว็บไซต์ที่ผ่านมาตรฐาน
        </p>
      </div>
      <div class="ss-box xl mt-4" data-aos="fade-up" data-aos-delay="400">
        <div class="grids jc-center">
          <?php for($i=0; $i<20; $i++){?>
            <div class="grid lg-20 md-1-3 sm-50 xs-50">
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

  <section data-section="14" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper ss-text-wrapper xs">
            <h4 class="lg lh-2xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              พร้อม<span class="h3 color-01 fw-600">ข้อเสนอเพิ่มเติม</span>ต่างๆ<br>อีกมายมากอาทิเช่น 
            </h4>
            <ul class="ss-list-01 style-03 mt-2" data-aos="fade-up" data-aos-delay="150">
              <li class="color-black pb-2 fw-500">Free Hero Banner Design 1 Year</li>
              <li class="color-black pb-2 fw-500">SEO Maintenance</li>
              <li class="color-black pb-2 fw-500">Security Monthly Testing</li>
              <li class="color-black pb-2 fw-500">Web Performance Tunning</li>
              <li class="color-black pb-2 fw-500">AI Search by Elastic Search </li>
              <li class="color-black pb-2 fw-500">Jmeter load Test</li>
              <li class="color-black pb-2 fw-500">Chat Bot</li>
            </ul> 
          </div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/img/bg/18.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
 </section>

 <section class="ss-header-title" data-aos="fade-up" data-aos-delay="0">
    <h4 class="color-white fw-100">
      พร้อมดูแลการ<span class="fw-500">ฝึกอบรมแบบครบวงจร</span>
    </h4>   
  </section>

 <section data-section="15" class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/19.jpg');"></div> 
    <div class="container">
      <div class="video-button" data-aos="fade-up" data-aos-delay="150">
        <a id="video-container" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
          class="video-play-button" data-fancybox>
          <em class="fas fa-play"></em>
        </a>
        <p class="sm color-white text-center fw-300 mt-6 pt-2">Watch Video</p>  
      </div> 
       
    </div>        
  </section>

  <section data-section="16" class="section-01 size-01" >
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns d-flex jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section data-section="17" class="section-02 section-padding" style="background:#000000">
    <h4 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
      งานบริการอื่นๆ <span class="fw-100 color-white">ของเรา</span>
    </h4> 
    <div class="swiper-container mt-4" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<12; $i++){?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-03 filter-01" href="#">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
              </div>
              <div class="text-container">
                <div class="title color-white" href="#">
                  Unlimited Microsite for Government
                  Unlimited Microsite for Government
                  Unlimited Microsite for Government
                </div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a> 
          </div>
        <?php }?>
      </div>
    </div>        
  </section>
  
  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>