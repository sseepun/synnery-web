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
    <img class="img" src="public/img/bg/25.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/26.jpg');"></div>
    <div class="container">
      <div class="title-intro" data-aos="fade-up" data-aos-delay="0">
        <img class="img" src="public/img/icon/wordpress-logo.jpg" alt="LOGO" />
        <div class="text-wrapper color-01">
          <p class="h3 color-black fw-600 lh-sm">
            Enterprise
          </p>
          <h1 class="h1 lh-3xs text-shadow fw-600">
            Word Press
          </h1>
          <p class="h3 color-black fw-600 lh-sm">
            Solutions
          </p>
        </div>
      </div>
      <p class="color-03 text-center md-no-br fw-300 mt-3"  data-aos="fade-up" data-aos-delay="150">
        นอกจากการพัฒนาเว็บไซต์ โดยใช้ Tech และ Tools ใหม่ๆ แล้ว เรายังมีอีกหนึ่งบริการคือ พัฒนาเว็บไซต์ด้วย Word Press <br>
        ซึ่งเหมาะสำหรับกลุ่มลูกค้าที่ต้องการเว็บไซต์ เพื่อใช้ในการประชาสัมพันธ์ ข้อมูล ข่าวสารต่างๆ และเว็บไซต์ ไม่มีระบบใดๆ ที่ซับซ้อน <br>
        เพื่อช่วยให้เวลาในการพัฒนาไวมากยิ่งขึ้น และประหยัดงบประมาณในการพัฒนา 
      </p>
      <p class="h6 text-center color-black fw-600 mt-6" data-aos="fade-up" data-aos-delay="300">
        ข้อดีของ <span class="color-01">Word press</span>
      </p>
      <div class="ss-box xl" data-aos="fade-up" data-aos-delay="450">
        <div class="grids jc-center">
          <?php for($i=0; $i<4; $i++){?>
          <div class="grid lg-25">
            <div class="ss-card ss-card-10 mt-2">
              <div class="icon">
                <img class="inactive" src="public/img/icon/0<?= ($i%4+1) ?>.png" alt="Icon Inactive" />
                <img class="active" src="public/img/icon/icon-active-0<?= ($i%4+1) ?>.png" alt="Icon Active" />
              </div>
              <div class="text-container h-color-01">
                <p class="xs title color-black fw-400 mt-2">ง่าย และรวดเร็ว ในการพัฒนาเว็บไซต์เพื่อใช้งาน </p>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <section data-section="3">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container pt-4 pb-4">
        <h4 class="color-white text-center lh-sm fw-200">
          <span class="fw-600">ตัวอย่าง 12 Theme</span> ที่เราออกแบบและพัฒนาให้กับ <br> เว็บไซต์ของ
          <span class="fw-600">กระทรวงศึกษาธิการ</span> เพื่อรองรับการใช้งานกับ เว็บไซต์หลัก <br> และเว็บไซต์ย่อยๆ รวมกว่า 
          <span class="fw-600">120 เว็บไซต์ </span>ทั่วประเทศ 
        </h4>
      </div>
    </div>
  </section>

  <section data-section="4" class="section-08 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/27.jpg');"></div> 
    <div class="container">
      <div class="content-container" data-aos="fade-up" data-aos-delay="0">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="ss-card ss-card-35">
                    <div class="ss-img no-hover">
                      <div class="img-bg" style="background-image:url('public/img/content/21.jpg');"></div>
                    </div>
                    <div class="title-header">
                      <p class="xs color-02">THEME <span class="progress"></span></p>
                      <p class="xs color-04">มาตรฐานการศึกษาระดับโลก</p>
                    </div>
                    <div class="icon box-shadow">
                      <em class="fa-solid fa-magnifying-glass"></em>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="navigator">
            <div class="progress p color-white"></div>
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

  <section data-section="5" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/bg/28.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/22.jpg');"></div>
          <div class="text-container md">
            <h3 class="color-01 lh-2xs fw-600">
              ทำไมไม่ใช้ <span class="text-uppercase color-black fw-300">
              Plug-in ของ WorD Press</span> <span>ที่มีอยู่แล้ว</span>
            </h3>
            <p class="sm color-black fw-400 mt-3">
              Plug-in ของ Wordpress บางระบบจะมีอยู่แล้ว แต่จะมี function บางอย่างไม่รองรับการทำงาน 
              หรือยังไม่เข้ามาตรฐานของงานเว็บไซต์ภาครัฐ และอาจจะต้องติดตั้งมากกว่า 1 Plugin 
              เพื่อให้ทำงานได้ให้อีก Plugin ทำงานได้ครบตาม function เลยจะทำให้ระบบทำงานได้ช้า 
              โหลดนาน รวมถึงเรื่องของระบบรักษาความปลอดภัย เราจึงทำการออกแบบและพัฒนา Plug-in ของ Wordpress ใหม่ทั้งหมด เพื่อแก้ปัญหาดังกล่าว 
            </p> 
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="6" class="section-08 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/29.jpg');"></div> 
    <div class="container">
      <h3 class="text-center color-01 fw-600 lh-sm" data-aos="fade-up" data-aos-delay="0">
        Word Press Plug-In <span class="color-white fw-200">ที่บริษัทฯ พัฒนาขึ้นมาใหม่</span>
      </h3>
      <div class="content-container mt-6" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="grids">
                    <div class="grid">
                      <div class="d-flex flex-column jc-center height-full">
                        <p class="h5 color-01 fw-600">EVENT CALENDAR</p>  
                        <p class="sm color-04 md-no-br">
                          ภาพหน้าจอ ที่จะให้กดเลื่อน ซ้าย ขวา ไปเรื่อยๆ 
                          โดยจะมีภาพและเชื่อระบบ<br>พร้อมคุณสมบัติพื้นฐานสัก 5-6 หัวข้อ 
                        </p>
                      </div>
                    </div>
                    <div class="grid">
                      <div class="ss-card ss-card-35">
                        <div class="ss-img no-hover">
                          <div class="img-bg" style="background-image:url('public/img/content/48.jpg');"></div>
                        </div>
                        <div class="icon box-shadow">
                          <em class="fa-solid fa-magnifying-glass"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="navigator">
            <div class="progress p color-white"></div>
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

  <section data-section="7">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          <span class="fw-600">เสริมความปลอดภัย</span>เพิ่มเติม
        </h3>
      </div>
    </div>
  </section>

  <section data-section="8" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/22.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container md">
            <h4 class="lg color-01 fw-600 lh-2xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              การป้องกันความมั่นคง<br>ความปลอดภัย<span class="color-black fw-200">ของระบบเว็บไซต์</span>
            </h4>
            <div class="grids pt-4">
              <div class="grid lg-50 mt-0">
                <ul class="ss-list-01 style-03" data-aos="fade-up" data-aos-delay="150">
                  <li class="color-black fw-500 mt-3">Injection</li>
                  <li class="color-black fw-500 mt-3">Broken Authentication</li>
                  <li class="color-black fw-500 mt-3">Sensitive Data Exposure</li>
                  <li class="color-black fw-500 mt-3">XML External Entities (XXE)</li>
                  <li class="color-black fw-500 mt-3">Broken Access Control</li>
                </ul>
              </div>  
              <div class="grid lg-50 mt-0">
                <ul class="ss-list-01 style-03" data-aos="fade-up" data-aos-delay="150">
                  <li class="color-black fw-500 mt-3">Cross-Site Scripting XSS</li>
                  <li class="color-black fw-500 mt-3">Insecure Deserialization</li>
                  <li class="color-black fw-500 mt-3">Using Components with Known Vulnerabilities</li>
                  <li class="color-black fw-500 mt-3">Insufficient Logging & Monitoring</li>
                </ul>
              </div> 
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section data-section="9" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container md">
            <h4 class="lg color-black fw-200 lh-2xs md-no-br mt-6" data-aos="fade-up" data-aos-delay="0">
              ระบบป้องกันภัยคุกคาม<br>จากภายนอก <span class="color-01 text-uppercase fw-600">Cloudflare</span>
            </h4>
            <p class="color-black mt-6 fw-400" data-aos="fade-up" data-aos-delay="150">
              เพิ่มประสิทธิภาพ และ <span class="color-01 fw-500">ป้องกันภัยคุกคามจากภายนอก</span> 
              ด้วย Cloudflare ดังนี้
            </p>
            <ol class="pl-4 mt-1" data-aos="fade-up" data-aos-delay="150">
              <li class="color-black pb-2 fw-400">ป้องกันและบรรเทาการโจมดีแบบ DDoS และมีการแจ้งเตือนหากมีการโจมตี</li>
              <li class="color-black pb-2 fw-400"> 
                มีระบบ Web Application Firewall (WAF) ป้องกันการโจมตีเว็บไซต์ เช่น
                SQL injection, XSS javascript
              </li>
              <li class="color-black pb-2 fw-400">
                มีระบบ Global Content Delivery Network (CDN) ที่จัดเก็บเนื้อหาเว็บไซต์ที่  
                กระจายอยู่ทั่วโลก ทำให้เข้าถึงเนื้อหาได้อย่างรวดเร็ว
              </li>
              <li class="color-black pb-2 fw-400">
                เพิ่มความปลอดภัยในการรับส่งข้อมูลระหว่างผู้ใช้งานกับเครื่องแม่ข่ายด้วย 
                SSL certificate
              </li>
            </ol> 
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/23.jpg');"></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div data-section="8" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/content/55.jpg');"></div>
    <div class="container">
      <h3 class="text-uppercase text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Network Architechture
      </h3>          
      <h6 class="text-center lh-2xs color-black fw-400" data-aos="fade-up" data-aos-delay="150">
        สำหรับรองรับการทำงานของทุกเว็บไซต์ทั่วประเทศ
      </h6>
      <div class="ss-box xxl mt-5">
        <div class="ss-card ss-card-19" data-aos="fade-up" data-aos-delay="300">
          <img class="img" src="public/img/content/24.jpg" alt="Banner" />     
        </div>    
      </div>
    </div>             
  </div>

  <div data-section="9" class="section-01 section-padding bg-05">
   <div class="container">
      <p class="h6 text-uppercase text-center color-black fw-400" data-aos="fade-up" data-aos-delay="0">
        ตัวอย่างภาพการฝึกอบรมให้กับเจ้าหน้าที่ของกระทรวงศึกษาธิการจากทั่วประเทศ
      </p>          
      <h3 class="color-01 text-center text-uppercase color-black fw-600" data-aos="fade-up" data-aos-delay="150">
        Video งานอบรมของ MOE
      </h3>
      <div class="ss-box xxl mt-5" data-aos="fade-up" data-aos-delay="300">
        <div class="p-1 bg-white box-shadow">
          <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/img/content/5<?= ($i%1+4) ?>.jpg');"></div>
            </div>
            <div class="card-icon">
              <div class="icon">
                <img class="img" src="public/img/icon/play.png" alt="Banner" />
              </div>
            </div>
            <div class="card-line-1"></div><div class="card-line-2"></div>
          </a>
        </div>        
      </div>
   </div>             
  </div>

  <section data-section="10" class="section-08 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/56.jpg');"></div> 
    <div class="container">
      <h3 class="text-center color-white fw-600 lh-sm" data-aos="fade-up" data-aos-delay="0">
        รวมภาพบรรยากาศงานอบรม
      </h3>
      <div class="content-container mt-6 pt-4" data-aos="fade-up" data-aos-delay="150">
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
                              <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                            </div>
                            <div class="hover-filter-01"></div>
                            <div class="card-line-1"></div><div class="card-line-2"></div>
                          </a>
                        </div>
                      </div>
                      <div class="grid lg-1-6 xs-50 mt-0">
                        <div class="p-1 h-full">
                          <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                            <div class="ss-img">
                              <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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
                          <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                            <div class="ss-img">
                              <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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
                              <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
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
          <div class="navigator white">
            <div class="progress p color-white"></div>
            <div class="line"></div>
            <div class="dots"></div>
          </div>
        </div>
        <div class="arrows">
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-white-01.png" alt="Arrow" />
          </div>
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-white-02.png" alt="Arrow" />
          </div>
        </div>
      </div>
    </div>      
  </section>
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>