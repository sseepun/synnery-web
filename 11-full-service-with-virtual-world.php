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
    <img class="img" src="public/img/content/39.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/36.jpg');"></div> 
    <div class="container">
      <div class="text-center">
        <p class="h3 color-black fw-600" data-aos="fade-up" data-aos-delay="0">
          Full Services <span class="fw-300">with</span>
        </p>
        <h1 class="color-01 lh-2xs text-shadow fw-600" data-aos="fade-up" data-aos-delay="150">
          Virtual World, AR-VR,<br>Animation,<br>Multimedia, Graphics
        </h1>
        <p class="sm color-black md-no-br fw-500 mt-3" data-aos="fade-up" data-aos-delay="450">
          บริการและบริหารโครงการด้านการสร้าง และออกแบบงาน Virtual Online ต่างๆ แบบครบวงจร ตั้งแต่เริ่มต้นคิด วางรูปแบบงาน 
          แนวทาง<br>การประชาสัมพันธ์ไปยังกลุ่มเป้าหมาย การจัดกิจกรรมประกอบต่างๆ เพื่อบรรลุวัตถุประสงค์และเป้าหมายของโครงการ  
        </p>
      </div>
      <div class="ss-box xl" data-aos="fade-up" data-aos-delay="150">
        <div class="ss-card-container">
          <?php for($i=0; $i<7; $i++){?>
            <div class="ss-card ss-card-32">
              <div class="wrapper">
                <div class="icon">
                  
                </div>
                <div class="text-container">

                </div>
              </div>
            </div>
          <?php }?>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/19.jpg');"></div> 
    <div class="container">
      <div class="video-button mt-6" data-aos="fade-up" data-aos-delay="150">
        <a id="video-container" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
          class="video-play-button" data-fancybox>
          <em class="fas fa-play"></em>
        </a>
        <p class="sm color-white text-center fw-300 mt-6 pt-2">Watch Video</p>  
      </div> 
    </div>        
  </section>

  <section data-section="4" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block style-02">
          <div class="img-bg" style="background-image:url('public/img/content/32.jpg');"></div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
            <div class="text-wrapper">
              <h4 class="lg lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
                Digital Marketing <br> <span class="color-black fw-300">for</span> <span class="color-black fw-600">Government</span>
              </h4>
              <p class="sm color-02 fw-400 mt-1" data-aos="fade-up" data-aos-delay="150">
                บริการครบวงจรด้าน Digital Marketing ตั้งแต่ รับเป้าหมาย <br>
                คิด Concept, Campaign จนถึงตัวชี้วัดโครงการ
              </p>
              <div class="btns mt-3" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-action style-01 btn-color-01" href="#">
                  Explore More
                </a>
              </div>
            </div>
          </div>
        </div> 
      </div>    
    </div>
 </section>

 <section data-section="5" class="section-06">
    <div class="grids no-gap">
      <div class="grid lg-50 mt-0">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper">
              <h4 class="lg lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
                Website <br> <span class="color-black fw-300">for</span> <span class="color-black fw-600">Government</span>
              </h4>
              <p class="sm color-02 fw-400 mt-1" data-aos="fade-up" data-aos-delay="150">
                เปลี่ยนเว็บไซต์ภาครัฐให้มีมาตรฐานเดียวกัน การันตีด้วยผลงาน <br>
                มากกว่า 500 โปรเจค “ที่เดียว ทันใด ทั่วไทย ทุกเวลา ทั่วถึง <br>
                เท่าเทียม และธรรมาภิบาล”
              </p>
              <div class="btns mt-3" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-action style-01 btn-color-01" href="#">
                  Explore More
                </a>
              </div>
            </div>
        </div>   
      </div>    
      <div class="grid lg-50 mt-0">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<6; $i++){?>
            <div class="grid sm-1-3 mt-0">
              <a class="ss-card ss-card-29 height-full" href="#">
                <div class="ss-img square height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/3<?= ($i%6+3) ?>.jpg');"></div>
                </div>
              </a> 
            </div>
          <?php }?>     
        </div>        
      </div>  
    </div>                          
  </section>

 <section data-section="6">
   <div class="ss-card-container">
    <?php for($i=0; $i<6; $i++){?>
      <div class="ss-card ss-card-28">
        <div class="ss-img square">
          <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
        </div>
      </div>
    <?php }?>
   </div>       
 </section>

 <section data-section="6" class="section-01">
    <div class="img-bg" style="background-image:url('public/img/bg/39.jpg');"></div>
    <div class="container">
      <h3 class="text-center color-white fw-500" data-aos="fade-up" data-aos-delay="0">
        E-Office / ERP for Government
      </h3>
      <p class="sm text-center color-white fw-300" data-aos="fade-up" data-aos-delay="150">
        ออกแบบและพัฒนาระบบ E-Office Automation สำหรับระบบงานภาครัฐ 
        ด้วยแนวคิดการออกแบบและวางระบบแบบ Microservices และรองรับการทำงาน <br>
        ร่วมกับระบบอื่นๆ ได้อย่างง่ายผ่าน API และทำงานบนโครงสร้างของระบบเครือข่ายแบบ DevSecOps
      </p>
      <div class="ss-card-container mt-5">
        <?php for($i=0; $i<7; $i++){?>
          <div class="ss-card ss-card-30">
            <div class="wrapper"></div>
          </div>
        <?php }?>
      </div>   
    </div>
 </section>

 <section data-section="8" class="section-10 section-padding">
  <div class="img-bg" style="background-image:url('public/img/bg/38.jpg');"></div>
  <div class="container">
    <h4 class="lg text-center color-01 fw-600">
      Mini Site for <span class="color-black">Government</span>
    </h4>
    <p class="sm text-center color-03 fw-400">
      สร้างเว็บไซต์ย่อยๆ ได้อย่างไม่จำกัด เหมาะสำหรับหน่วยงานหลัก ที่มีหน่วยงานย่อยๆ ภายใต้การกำกับดูแล <br>
      ต้องการให้เว็บของเว็บไซต์หลัก เว็บไซต์ย่อยมีรูปแบบไปในแนวทาง Design เดียวกัน
    </p>
    <div class="swiper-container mt-6" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<5; $i++){?>
          <div class="swiper-slide">
            <div class="ss-card ss-card-29">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/screen-0<?= ($i%1+3) ?>.png');"></div>
              </div>
            </div> 
          </div>
        <?php }?>
      </div>
      <div class="dots"></div>
      <!-- 
        <div class="arrow-container">
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-01.png" alt="Arrow" />
          </div>
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-02.png" alt="Arrow" />
          </div>
        </div> -->
    </div>
  </div>
 </section>

 <section data-section="9" class="section-03">
    <div class="container">
      <div class="blocks reverse">
        <div class="block style-02">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper">
              <h4 class="lg lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
                Website<br><span class="color-black fw-300">for</span> <span class="color-black fw-600">Government</span>
              </h4>
              <p class="sm color-02 fw-400 mt-1" data-aos="fade-up" data-aos-delay="150">
                เปลี่ยนเว็บไซต์ภาครัฐให้มีมาตรฐานเดียวกัน การันตีด้วยผลงาน<br>
                มากกว่า 500 โปรเจค “ที่เดียว ทันใด ทั่วไทย ทุกเวลา ทั่วถึง<br>
                เท่าเทียม และธรรมาภิบาล”
              </p>
              <div class="btns mt-3" data-aos="fade-up" data-aos-delay="300">
                <a class="btn btn-action style-01 btn-color-01" href="#">
                  Explore More
                </a>
              </div>
            </div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/img/content/31.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
 </section>

 <section data-section="10" class="section-01 section-padding">
  <div class="img-bg" style="background-image:url('public/img/bg/37.jpg');"></div>
  <div class="container">
    <h4 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
      Virtual World <span class="color-white">Services</sapn>
    </h4>
    <div class="grids jc-center" data-aos="fade-up" data-aos-delay="150">
      <?php for($i=0; $i<3; $i++){?>
        <div class="grid lg-1-3">
          <div class="ss-card ss-card-31 filter-01 box-shadow">
            <div class="ss-img vertical">
              <div class="img-bg" style="background-image:url('public/img/content/v-service-0<?= ($i%1+1) ?>.jpg');"></div>
            </div>
            <div div class="ss-card-inner"></div>
            <div class="icon-container">
              <div class="video-button mt-6" data-aos="fade-up" data-aos-delay="150">
                <a id="video-container" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
                  class="video-play-button" data-fancybox>
                  <em class="fas fa-play"></em>
                </a>
              </div>
            </div>
            <div class="text-wrapper">
              <h5 class="title color-white lh-2xs fw-600">
                3D Virtual Tour /<br>Metaverse
              </h5>
              <p class="sm desc color-white ss-text-wrapper xxxs">
                ออกแบบและพัฒนาระบบ Virtual แบบ 360 องศา พร้อมระบบ Walk Throught รวมถึงการเชื่อมต่อวีดีโอ 
                เพื่อนำเสนอสถานที่ สินค้า หรือบริการต่าง ๆ ในรูปแบบของภาพนิ่งแบบ 360 องศา ๆ ออกแบบและพัฒนาระบบ 
                Virtual แบบ 360 องศา พร้อมระบบ Walk Throught รวมถึงการเชื่อมต่อวีดีโอ เพื่อนำเสนอสถานที่ สินค้า 
                หรือบริการต่าง ๆ ในรูปแบบของภาพนิ่งแบบ 360 องศา ๆ
              </p>
              <a class="card-more p xs mt-2" href="#">
                Read more
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

 <section data-section="11" class="section-01 section-padding">
  <div class="img-bg" style="background-image:url('public/img/bg/40.jpg');"></div>  
  <div class="container">
    <h4 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
      Enterprise DevSecOps <span class="color-black">Solutions</span>
    </h4>
    <p class="text-center" data-aos="fade-up" data-aos-delay="150">
      บริการออกแบบ ติดตั้งระบบ เครื่อข่ายคอมพิวเตอร์ขนาดใหญ่ พร้อมทีมงานผู้เชี่ยวชายด้านการ ติดตั้ง และบริหารจัดการงานด้าน DevSecOps <br>
      เพื่อสร้างระบบเครือข่ายที่มีความเสถียรและสามารถ Auto Scale ได้ง่ายง่าย
    </p>
    <div class="ss-box xl mt-6" data-aos="fade-up" data-aos-delay="300">
      <img class="img" src="public/img/content/04.png" alt="Banner" />
    </div>
  </div>
 </section>

 <section data-section="12" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block style-02">
          <div class="img-bg" style="background-image:url('public/img/content/16.jpg');"></div>
        </div> 
        <div class="subblocks">
          <div class="subblock padding">
            <div class="img-bg" style="background-image:url('public/img/bg/22.jpg');"></div>
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

 <section data-section="13" class="section-01 flex-column ai-unset section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/35.jpg');"></div>  
    <div class="container">
      <h3 class="color-01 text-center text-shadow fw-600">Our Clients</h3>
      <p class="sm text-center color-03">
        ประสบการณ์มากกว่า 24 ปี ผลงานกับลูกค้าทั้งภาครัฐและเอกชนขนาดใหญ่กว่า 300 ราย มากกว่า 500 โครงการ
      </p> 
      <div class="ss-box mt-5" data-aos="fade-up" data-aos-delay="150">
        <div class="grids jc-center">
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p class="text-uppercase color-black fw-500">More Than</p>
                <p class="h1 lg lh-2xs color-01 count-number fw-600">300</p>
                <p class="h5 text-uppercase color-black fw-600">Clients</p>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p class="text-uppercase color-black fw-500">More Than</p>
                <p class="h1 lg lh-2xs color-01 count-number fw-600">500</p>
                <p class="h5 text-uppercase color-black fw-600">Projects</p>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p class="text-uppercase color-black fw-500">More Than</p>
                <p class="h1 lg lh-2xs color-01 count-number fw-600">300</p>
                <p class="h5 text-uppercase color-black fw-600">Years</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="ss-card-container mt-6" href="#">
      <?php for($i=0; $i<24; $i++){?>
        <div class="ss-card ss-card-26">
          <div class="wrapper">
            <div class="image-container">
              <img src="public/img/clients/client-02.png" alt="Client" />
            </div>
            <div class="text-container mt-5">
              <p class="xs title">กระทรวงพลังงาน</p>
            </div>
        </div>
      </div>
      <?php }?>
    </a>
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>         
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

</body>
</html>