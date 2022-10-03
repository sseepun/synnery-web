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

  <!-- หน้านี้ผมยังเก็บไม่เสร็จนะครับ -->
  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/bg/25.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/26.jpg');"></div>
    <div class="container">
      <div class="text-center color-01">
        <p class="h3 color-black fw-600" data-aos="fade-up" data-aos-delay="0">
          Enterprise
        </p>
        <h1 class="h1 lh-3xs text-shadow fw-600" data-aos="fade-up" data-aos-delay="150">
          Word Press
        </h1>
        <p class="h3 color-black fw-600" data-aos="fade-up" data-aos-delay="300">
          Solutions
        </p>
        <p class="color-black color-06 md-no-br fw-300"  data-aos="fade-up" data-aos-delay="450">
          นอกจากการพัฒนาเว็บไซต์ โดยใช้ Tech และ Tools ใหม่ๆ แล้ว เรายังมีอีกหนึ่งบริการคือ พัฒนาเว็บไซต์ด้วย Word Press <br>
          ซึ่งเหมาะสำหรับกลุ่มลูกค้าที่ต้องการเว็บไซต์ เพื่อใช้ในการประชาสัมพันธ์ ข้อมูล ข่าวสารต่างๆ และเว็บไซต์ ไม่มีระบบใดๆ ที่ซับซ้อน <br>
          เพื่อช่วยให้เวลาในการพัฒนาไวมากยิ่งขึ้น และประหยัดงบประมาณในการพัฒนา 
        </p>
        <p class="h6 color-black fw-600 mt-2" data-aos="fade-up" data-aos-delay="600">
          ข้อดีของ <span class="color-01">Word press</span>
        </p>
        <div class="ss-box xl" data-aos="fade-up" data-aos-delay="750">
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
      <div class="swiper-container" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-wrapper">
          <?php for($i=0; $i<5; $i++){?>
            <div class="swiper-slide">
              <div class="ss-card">
                <div class="ss-img horizontal-2">
                  <div class="img-bg" style="background-image:url('public/img/content/2<?= ($i%1+1) ?>.jpg');"></div>
                </div>
              </div>  
            </div>
          <?php }?>
        </div>
        <div class="dots-container">
          <div class="dots"></div>
          <div class="line"></div>
          <div class="dots-style-02"></div>
        </div>
        <div class="arrow-container">
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
      <h4 class="lg text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Word Press Plug-In <span class="color-white fw-200">ที่บริษัทฯ พัฒนาขึ้นมาใหม่</span>
      </h4>
      <div class="swiper-container mt-5" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-wrapper">
          <?php for($i=0; $i<5; $i++){?>
            <div class="swiper-slide ">
              <div class="grids">
                <div class="grid lg-50">
                  <div class="d-flex flex-column jc-center height-full">
                    <p class="h5 text-uppercase color-01 fw-600">Event Calendar</p>  
                    <p class="sm color-04 md-no-br">
                      ภาพหน้าจอ ที่จะให้กดเลื่อน ซ้าย ขวา ไปเรื่อยๆ 
                      โดยจะมีภาพและเชื่อระบบ<br>พร้อมคุณสมบัติพื้นฐานสัก 5-6 หัวข้อ 
                    </p>
                  </div>
                </div>
                <div class="grid lg-50">
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
          <?php }?>
        </div>
        <div class="dots-container">
          <div class="dots"></div>
          <div class="line"></div>
          <div class="dots-style-02"></div>
        </div>
        <!-- <div class="arrow-container">
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-01.png" alt="Arrow" />
          </div>
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-02.png" alt="Arrow" />
          </div>
        </div> -->
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
        <h5 class="text-uppercase text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
          Network Architechture
        </h5>          
        <p class="text-center color-black fw-400" data-aos="fade-up" data-aos-delay="150">
          สำหรับรองรับการทำงานของทุกเว็บไซต์ทั่วประเทศ
        </p>
        <div class="ss-box xxl mt-5">
          <div class="ss-card ss-card-19" data-aos="fade-up" data-aos-delay="300">
            <img class="img" src="public/img/content/24.jpg" alt="Banner" />     
          </div>    
        </div>
    </div>             
  </div>

  <div data-section="9" class="section-01 section-padding bg-05">
   <div class="container">
      <p class="lg text-uppercase text-center color-black fw-400" data-aos="fade-up" data-aos-delay="0">
        ตัวอย่างภาพการฝึกอบรมให้กับเจ้าหน้าที่ของกระทรวงศึกษาธิการจากทั่วประเทศ
      </p>          
      <h6 class="color-01 text-center text-uppercase color-black fw-600" data-aos="fade-up" data-aos-delay="150">
        Video งานอบรมของ MOE
      </h6>
      <div class="ss-box xxl mt-5" data-aos="fade-up" data-aos-delay="300">
        <div class="ss-card ss-card-18">
          <div class="ss-img horizontal-2">
            <div class="img-bg" style="background-image:url('public/img/content/5<?= ($i%1+4) ?>.jpg');"></div>
          </div>
          <div div class="ss-card-inner"></div>
          <div class="icon-container">
            <div class="icon">
              <img class="img" src="public/img/icon/play.png" alt="Banner" />
            </div>
          </div>
        </div>         
      </div>
   </div>             
  </div>

  <section data-section="7" class="section-09 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/56.jpg');"></div>
    <div class="container">
      <h4 class="lg text-center color-white xs-no-br lh-xs fw-600" data-aos="fade-up" data-aos-delay="0">
        รวมภาพบรรยากาศงานอบรม
      </h4>
      <div class="swiper-container mt-4" data-aos="fade-up" data-aos-delay="300">
        <div class="swiper-wrapper">
        <?php for($i=0; $i<12; $i++){?>
          <div class="swiper-slide">
          
            <div class="ss-card-container ss-card-padding">
              <div class="ss-card ss-card-20">
                <div class="ss-img ">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-01.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-23">
                <div class="ss-img height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-02.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-20">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-03.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-20">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-04.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-20">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-04.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-23">
                <div class="ss-img height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-05.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-23">
                <div class="ss-img height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-06.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-21">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-07.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-22">
                <div class="ss-img height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-08.jpg');"></div>
                </div>
              </div>
              <div class="ss-card ss-card-21">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-09.jpg');"></div>
                </div>
              </div>
            </div>
         
          </div>
          <?php }?>
        </div>
        <div class="dots" data-aos="fade-up" data-aos-delay="450"></div>
        <div class="arrow-container">
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