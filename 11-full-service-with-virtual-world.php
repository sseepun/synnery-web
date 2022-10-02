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
    <div class="img-bg" style="background-image:url('public/img/bg/41.jpg');"></div> 
    <div class="container">
      <div class="text-center">
        <p class="h3 color-black fw-600" data-aos="fade-up" data-aos-delay="0">
          Full Services <span class="fw-300">with</span>
        </p>
        <h1 class="color-01 lh-2xs text-shadow fw-600" data-aos="fade-up" data-aos-delay="150">
          Virtual World, AR-VR,<br>Animation,<br>Multimedia, Graphics
        </h1>
        <p class="sm color-black md-no-br fw-500 mt-3" data-aos="fade-up" data-aos-delay="300">
          บริการและบริหารโครงการด้านการสร้าง และออกแบบงาน Virtual Online ต่างๆ แบบครบวงจร ตั้งแต่เริ่มต้นคิด วางรูปแบบงาน 
          แนวทาง<br>การประชาสัมพันธ์ไปยังกลุ่มเป้าหมาย การจัดกิจกรรมประกอบต่างๆ เพื่อบรรลุวัตถุประสงค์และเป้าหมายของโครงการ  
        </p>
      </div>
      <div class="ss-box xl" data-aos="fade-up" data-aos-delay="450">
        <div class="ss-card-container jc-center mt-4">
          <?php for($i=0; $i<19; $i++){?>
            <a class="ss-card ss-card-32 mt-3" href="#">
              <div class="wrapper">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/0<?= ($i%1+6) ?>.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/icon-active-0<?= ($i%1+6) ?>.png" alt="Icon Active" />
                </div>
                <div class="text-container mt-2">
                  <p class="title xs color-black">Virtual Exhibition</p>
                </div>
              </div>
            </a>
          <?php }?>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-09 style-02 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/42.jpg');"></div> 
    <div class="container">
      <div class="text-center">
        <h3 class="color-01 lh-2xs fw-600"  data-aos="fade-up" data-aos-delay="0">
          Virtual Exhibition /<br> <span class="h4 lg color-black fw-600">Virtual Live Event</span>
        </h3> 
        <p class="color-03 fw-500"  data-aos="fade-up" data-aos-delay="150">
          รวมภาพเบื้องหลังการทำงานของทีมงาน
        </p>   
      </div>
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
            <img src="public/img/icon/arrow-01.png" alt="Arrow" />
          </div>
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-02.png" alt="Arrow" />
          </div>
        </div>
      </div>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="450">
        <?php for($i=0; $i<3; $i++){?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-33 box-shadow" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
              </div>
              <div div class="ss-card-inner"></div>
              <div class="icon-container">
                <div class="icon">
                  <img class="img" src="public/img/icon/play.png" alt="Banner" />
                </div>
              </div>
            </a>
            <a class="p sm text-center d-block mt-3 fw-500" href="#">
              เบิ้องหลังการถ่ายทำ Video Present ของพิธีกร
            </a>
          </div>
        <?php }?>
      </div>
    </div>        
  </section>

  <section data-section="4" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/43.jpg');"></div> 
    <div class="container">
      <h4 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        วิดีโอแนะนำ <span class="color-black fw-300">เพื่อใช้ในการประชาสัมพันธ์</span>
      </h4> 
      <div class="grids" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<2; $i++) {?>
          <div class="grid lg-50 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-33 box-shadow" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
              </div>
              <div div class="ss-card-inner"></div>
              <div class="icon-container">
                <div class="icon">
                  <img class="img" src="public/img/icon/play.png" alt="Banner" />
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>   
    </div>     
  </section>

  <section data-section="5" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/44.jpg');"></div>
    <div class="container">
      <h4 class="text-center lh-sm color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        วีดีโอภาพรวมงานตัวเต็ม
      </h4>   
      <p class="h6 text-center color-black fw-400" data-aos="fade-up" data-aos-delay="150">
        ความยาวของกิจกรรมทั้งหมด 2 ชั่วโมง 
      </p>
      <a class="ss-card ss-card-33 box-shadow mt-4" 
        href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
        data-fancybox data-aos="fade-up" data-aos-delay="300">
        <div class="ss-img horizontal-2">
          <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
        </div>
        <div div class="ss-card-inner"></div>
        <div class="icon-container">
          <div class="icon">
            <img class="img" src="public/img/icon/play.png" alt="Banner" />
          </div>
        </div>
      </a>
    </div>      
  </section>

  <section data-section="7">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          ตัวอย่าง<span class="fw-600">สื่อ</span> หรือ 
          <span class="fw-600">Content</span> รูปแบบ
        </h3>
      </div>
    </div>
  </section>

  <section>
    <div class="grids no-gap">
      <?php for($i=0; $i<6; $i++) {?>
        <div class="grid lg-1-3 style-02 mt-0">
          <a class="ss-card ss-card-33" 
            href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
            data-fancybox data-aos="fade-up" data-aos-delay="300">
            <div class="ss-img horizontal-2">
              <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
            </div>
            <div div class="ss-card-inner"></div>
            <div class="icon-container">
              <div class="icon">
                <img class="img" src="public/img/icon/play.png" alt="Banner" />
              </div>
            </div>
          </a>
      </div>
      <?php }?>
    </div>
  </section>

  <!-- ยังคงเป็นรูปอยู่ -->
  <section data-section="7" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/45.jpg');"></div>
    <div class="container">
      <h4 class="lg text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Virtual Tour, Virtual Showroom,<br>Virtual Product 360
      </h4>
      <p class="text-center color-black fw-500" data-aos="fade-up" data-aos-delay="150">
        Virtual of ASEN Cultural Center
      </p>
      <a class="ss-card box-shadow mt-5" data-aos="fade-up" data-aos-delay="300">
        <div class="ss-img horizontal no-hover">
          <div class="img-bg" style="background-image:url('public/img/content/40.jpg');"></div>
        </div>
      </a>
    </div>   
  </section>

  <!-- ยังคงเป็นรูปอยู่ -->
  <section data-section="8" class="section-11 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/46.jpg');"></div>
    <h4 class="text-center color-white fw-500 pos-relative" data-aos="fade-up" data-aos-delay="0">
      Virtual Walk Throught (Chatuchak)
    </h4> 
    <div class="grids no-gap mt-4" data-aos="fade-up" data-aos-delay="150">
      <?php for($i=0; $i<4; $i++) {?>
        <div class="grid lg-25 style-03 mt-0">
          <div class="ss-card">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/img/content/41.jpg');"></div>
            </div>
            <p class="xs color-white pos-relative text-center text-uppercase fw-500 mt-3">
              chatuchak2shop
            </p>
          </div>
        </div>
      <?php }?>
    </div>  
  </section>

  <section data-section="9" class="section-04">
    <div class="grids no-gap">
      <div class="grid lg-1-3 mt-0 ">
        <div class="grids no-gap height-full" data-aos="fade-up" data-aos-delay="0">
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 bg-black style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <?php for($i=0; $i<7; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0 bg-black" data-aos="fade-up" data-aos-delay="150">
          <a class="ss-card ss-card-18" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
            <div class="ss-img horizontal-2">
              <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
            </div>
            <div div class="ss-card-inner"></div>
            <div class="icon-container">
              <div class="icon">
                <img class="img" src="public/img/icon/play.png" alt="Banner" />
              </div>
            </div>
          </a> 
        </div>
      <?php }?>

      <div class="grid lg-1-3 mt-0 bg-black" data-aos="fade-up" data-aos-delay="150">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 sm-100 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <div class="grid lg-60 mt-0 bg-black" data-aos="fade-up" data-aos-delay="150">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<3; $i++){?>
            <div class="grid lg-1-3 sm-100 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <div class="grid lg-40 md-100 sm-100 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <div class="grids no-gap">
          <div class="grid lg-100 sm-100 style-02 mt-0">
            <a class="ss-card ss-card-03" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
              <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <?php for($i=0; $i<2; $i++){?>
        <div class="grid lg-50 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
          <div class="grids no-gap">
            <div class="grid lg-70 md-50 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-03.jpg" data-fancybox="gallery">
              <div class="ss-img horizontal-2 height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-03.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
            <div class="grid lg-30 md-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
              <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-06.jpg" data-fancybox="gallery">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-06.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          </div>
        </div>
      <?php }?>

      <?php for($i=0; $i<3; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
          <a class="ss-card ss-card-03" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
          <div class="ss-img horizontal-2">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
          </div>
          <div class="icon">
            <em class="fa-solid fa-plus"></em>
          </div>
          </a>
        </div>
      <?php }?>

      <div class="grid lg-20 style-02 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-01.jpg" data-fancybox="gallery">
          <div class="ss-img horizontal-2 height-full">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-01.jpg')"></div>
          </div>
          <div class="icon">
            <em class="fa-solid fa-plus"></em>
          </div>
        </a>
      </div>

      <div class="grid lg-50 style-02 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <a class="ss-card ss-card-03 height-full" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
          <div class="ss-img height-full">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
          </div>
          <div class="icon">
            <em class="fa-solid fa-plus"></em>
          </div>
        </a>
      </div>

      <div class="grid lg-30 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <div class="grids no-gap">
          <div class="grid lg-100 md-100 sm-100 style-02 mt-0">
            <a class="ss-card ss-card-03 filter-01" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>

          <div class="grid lg-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
            <a class="ss-card ss-card-03 height-full filter-01" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img horizontal-2 height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>

          <div class="grid lg-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
            <a class="ss-card ss-card-03 filter-01" href="public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>