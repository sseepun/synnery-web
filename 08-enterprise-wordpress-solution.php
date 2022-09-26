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
                  <img class="inactive" src="public/img/icon/01.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/01-active.png" alt="Icon Active" />
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

  <section class="ss-header-title" data-aos="fade-up" data-aos-delay="150">
    <div class="container">
      <h4 class="color-white text-center lh-sm fw-100">
        <span class="fw-600">ตัวอย่าง 12 Theme</span> ที่เราออกแบบและพัฒนาให้กับ <br> เว็บไซต์ของ
        <span class="fw-600">กระทรวงศึกษาธิการ</span> เพื่อรองรับการใช้งานกับ เว็บไซต์หลัก <br> และเว็บไซต์ย่อยๆ รวมกว่า 
        <span class="fw-600">120 เว็บไซต์ </span>ทั่วประเทศ 
      </h4>         
    </div>  
  </section>

  <section data-section="3" class="section-08 section-padding">
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

  <section data-section="4" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block style-02">
          <div class="img-bg" style="background-image:url('public/img/bg/28.jpg');"></div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/img/bg/22.jpg');"></div>
            <div class="text-wrapper ss-text-wrapper md style-02">
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
    </div>
 </section>

 <section data-section="5" class="section-08 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/29.jpg');"></div> 
    <div class="container">
      <h4 class="lg text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0" >
        Word Press Plug-In <span class="color-white fw-200">ที่บริษัทฯ พัฒนาขึ้นมาใหม่</span>
      </h4>
      <div class="grids mt-2">
        <div class="grid lg-50">
          <div class="d-flex flex-column jc-center height-full">
            <p class="h5 text-uppercase color-01 fw-600">Event Calendar</p>  
            <p class="sm color-04">
              ภาพหน้าจอ ที่จะให้กดเลื่อน ซ้าย ขวา ไปเรื่อยๆ 
              โดยจะมีภาพและเชื่อระบบ พร้อม <br> คุณสมบัติพื้นฐานสัก 5-6 หัวข้อ 
            </p>
          </div>
        </div>    
        <div class="grid lg-50">
          <div class="swiper-container" data-aos="fade-up" data-aos-delay="150">
            <div class="swiper-wrapper">
              <?php for($i=0; $i<5; $i++){?>
                <div class="swiper-slide p-0">
                  <div class="ss-card">
                    <div class="ss-img horizontal-2 no-hover">
                      <div class="img-bg" style="background-image:url('public/img/content/0<?= ($i%1+3) ?>.png');"></div>
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

  <section class="ss-header-title" data-aos="fade-up" data-aos-delay="0">
    <h4 class="color-white fw-100">
     <span class="fw-500">เสริมความปลอดภัย</span>เพิ่มเติม
    </h4>   
  </section>

  <section data-section="6" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/content/22.jpg');"></div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
            <div class="text-wrapper ss-text-wrapper xs">
              <h4 class="lg lh-2xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
                พร้อม<span class="h3 color-01 fw-600">ข้อเสนอเพิ่มเติม</span>ต่างๆ<br>อีกมายมากอาทิเช่น 
              </h4>
              <div class="grids">
                <div class="grid lg-50">
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
                <div class="grid lg-50">
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
            </div>
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
            <div class="img-bg" style="background-image:url('public/img/content/23.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
 </section>

 <div data-section="8" class="section-01 section-padding">
  <div class="img-bg" style="background-image:url('public/img/bg/09.jpg');"></div>
   <div class="container">
      <h5 class="text-uppercase text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Network Architechture
      </h5>          
      <p class="text-center color-black fw-400" data-aos="fade-up" data-aos-delay="150">
        สำหรับรองรับการทำงานของทุกเว็บไซต์ทั่วประเทศ
      </p>
      <div class="ss-card ss-card-19" data-aos="fade-up" data-aos-delay="300">
        <img class="img" src="public/img/content/24.jpg" alt="Banner" />     
      </div>
   </div>             
 </div>

 <div data-section="9" class="section-01 section-padding bg-05">
   <div class="container">
      <h5 class="text-uppercase text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Network Architechture
      </h5>          
      <p class="text-center color-black fw-400" data-aos="fade-up" data-aos-delay="150">
        สำหรับรองรับการทำงานของทุกเว็บไซต์ทั่วประเทศ
      </p>
      <div class="ss-box xl">
      <div class="ss-card ss-card-18">
        <div class="ss-img horizontal-2">
          <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
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