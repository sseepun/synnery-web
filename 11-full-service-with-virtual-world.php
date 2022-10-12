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
    <img class="img" src="public/img/content/39.jpg" alt="Banner" />
  </section>

  <?php 
    $titles = [
      'Virtual Exhibition', 'Virtual Live Event', 'Virtual Tour', 'Virtual Showroom', 'Virtual Product 360',
      'Virtual Product 360', 'Metaverse', 'VR (Virtual Reality)', 'Mixed Reality'
    ]
  ?>

  <section data-section="2" class="section-01 section-padding bg-05">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <div class="text-center">
        <h3 class="color-black fw-600" data-aos="fade-up" data-aos-delay="0">
          Full Services <span class="fw-300">with</span>
        </h3>
        <h1 class="color-01 lh-2xs text-shadow fw-600" data-aos="fade-up" data-aos-delay="150">
          Virtual World, AR-VR,<br>Animation,<br>Multimedia, Graphics
        </h1>
        <p class="color-black md-no-br fw-400 mt-3" data-aos="fade-up" data-aos-delay="300">
          บริการและบริหารโครงการด้านการสร้าง และออกแบบงาน Virtual Online ต่างๆ แบบครบวงจร ตั้งแต่เริ่มต้นคิด วางรูปแบบงาน 
          แนวทาง<br>การประชาสัมพันธ์ไปยังกลุ่มเป้าหมาย การจัดกิจกรรมประกอบต่างๆ เพื่อบรรลุวัตถุประสงค์และเป้าหมายของโครงการ  
        </p>
      </div>
      <div class="ss-box xl mt-6" data-aos="fade-up" data-aos-delay="450">
        <div class="grids jc-center">
          <?php for($i=0; $i<9; $i++){?>
            <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 style-02 mt-2">
                <div class="icon">
                  <img class="Inactive" src="public/img/icon/full-service-0<?= ($i%9+1) ?>.png" alt="Icon Active" />
                  <img class="active" src="public/img/icon/full-service-active-0<?= ($i%9+1) ?>.png" alt="Icon Inactive" />
                </div>
                <div class="text-container">
                  <p class="xs title color-black fw-500 mt-2">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php }?>

          <?php 
            $titles = [
              '3D Animation', 'Interactive Media', '360’ Video', 'Touchscreen','Simulator', 
              'Infographics', 'Info-Video', 'Cartoon', 'Animation', 'Games'
            ]
          ?>

          <?php for($i=0; $i<10; $i++){?>
            <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 style-02 mt-2">
                <div class="icon">
                  <img class="Inactive" src="public/img/icon/full-service-1<?= ($i%10+0) ?>.png" alt="Icon Active" />
                  <img class="active" src="public/img/icon/full-service-active-1<?= ($i%10+0) ?>.png" alt="Icon Inactive" />
                </div>
                <div class="text-container">
                  <p class="xs title color-black fw-500 mt-2">
                    <?php echo $titles[$i] ?> 
                  </p>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>    
  </section>

  <section data-section="3" class="section-08 section-padding">
    <div class="pattern style-04">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-29.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <div class="text-center">
        <h3 class="color-01 lh-3xs fw-600"  data-aos="fade-up" data-aos-delay="0">
          Virtual Exhibition /<br> <span class="h4 lg color-black fw-600">Virtual Live Event</span>
        </h3> 
        <p class="lg color-03 fw-500"  data-aos="fade-up" data-aos-delay="150">
          รวมภาพเบื้องหลังการทำงานของทีมงาน
        </p>   
      </div>
      <div class="content-container width-full mt-6 pt-4" data-aos="fade-up" data-aos-delay="150">
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
          <div class="navigator">
            <div class="progress p color-01 fw-500"></div>
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
   
      <div class="grids jc-center mt-6 pt-2" data-aos="fade-up" data-aos-delay="0">
        <?php for($i=0; $i<3; $i++){?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <div class="p-1 bg-white box-shadow">
              <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
                </div>
                <div class="card-icon">
                  <div class="icon">
                    <img class="img" src="public/img/icon/play.png" alt="Banner" />
                  </div>
                </div>
                <div class="card-line-1"></div><div class="card-line-2"></div>
              </a>
            </div>
            <a class="p text-center d-block mt-4 fw-500" href="#">
              เบิ้องหลังการถ่ายทำ Video Present ของพิธีกร
            </a>
          </div>
        <?php }?>
      </div>
    </div>        
  </section>

  <section data-section="4" class="section-01 section-padding bg-05">
    <div class="pattern style-33">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-19.png" alt="Hero">
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/68.jpg');"></div>
    <div class="container" style="z-index:2;">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        วิดีโอแนะนำ <span class="color-black fw-300">เพื่อใช้ในการประชาสัมพันธ์</span>
      </h3> 
      <div class="grids pt-2" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<2; $i++) {?>
          <div class="grid lg-50 md-50 sm-50 xs-100">
            <div class="p-1 bg-white box-shadow">
              <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
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
        <?php }?>
      </div>   
    </div>     
  </section>

  <section data-section="5" class="section-01 section-padding">
    <div class="pattern style-34">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-31.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-35">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-30.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <h3 class="text-center lh-sm color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        วีดีโอภาพรวมงานตัวเต็ม
      </h3>   
      <p class="h4 text-center lh-sm color-black fw-400" data-aos="fade-up" data-aos-delay="150">
        ความยาวของกิจกรรมทั้งหมด 2 ชั่วโมง 
      </p>
      <div class="p-1 bg-white box-shadow mt-6" data-fancybox data-aos="fade-up" data-aos-delay="300">
        <a 
          class="ss-card" data-fancybox 
          href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
        >
          <div class="ss-img horizontal-02">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
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
  </section>

  <section data-section="6">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          ตัวอย่าง<span class="fw-600">สื่อ</span> หรือ 
          <span class="fw-600">Content</span> รูปแบบต่างๆ
        </h3>
      </div>
    </div>
  </section>

  <section data-section="7" class="p-1">
    <div class="grids no-gap" data-aos="fade-up" data-aos-delay="300">
      <?php for($i=0; $i<6; $i++) {?>
        <div class="grid lg-1-3 style-02 mt-0">
          <div class="p-1">
            <a 
              class="ss-card" data-fancybox
              href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
            >
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
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
      <?php }?>
    </div>
  </section>

  <section data-section="8" class="section-01 section-padding bg-05">
    <div class="pattern style-07">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-35.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-08">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-36.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-09">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-33.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-10">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-34.png" alt="Hero">
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/69.jpg');"></div>
    <div class="container" style="z-index:2;">
      <h3 class="text-center color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
        Virtual Tour, Virtual Showroom,<br>Virtual Product 360
      </h3>
      <h5 class="text-center color-black mt-4 fw-500" data-aos="fade-up" data-aos-delay="150">
        Virtual of ASEN Cultural Center
      </h5>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="300">
        <div class="p-1 bg-white box-shadow">
          <a class="ss-card" href="#">
            <div class="ss-img horizontal-02 no-hover">
              <div class="img-bg" style="background-image:url('public/img/content/40.jpg');"></div>
            </div>
          </a>
        </div>
      </div>
    </div>   
  </section>

  <section data-section="8" class="section-11 section-padding">
    <div class="pattern style-01">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-03">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-03.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-04">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-05.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/46.jpg');"></div>
    <h3 class="text-center color-white fw-500 pos-relative" data-aos="fade-up" data-aos-delay="0">
      Virtual Walk Throught (Chatuchak)
    </h3> 
    <div class="grids no-gap mt-4 pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="150">
      <?php for($i=0; $i<4; $i++) {?>
        <div class="grid lg-25 style-03 mt-0">
          <div class="p-1 bg-white">
            <div class="ss-card">
              <div class="ss-img no-hover">
                <div class="img-bg" style="background-image:url('public/img/content/41.jpg');"></div>
              </div>
            </div>
          </div>
          <p class="xs color-white pos-relative text-center text-uppercase fw-500 mt-3">
            chatuchak2shop
          </p>
        </div>
      <?php }?>
    </div>  
  </section>

  <section data-section="9">
    <div class="p-1 bg-black">
      <div class="grids no-gap">

        <div class="grid lg-2-3 sm-100 mt-0">
          <div class="grids no-gap">
            <?php for($i=0; $i<3; $i++){?>
              <div class="grid sm-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
                <div class="p-1">
                  <a class="ss-card ss-card-03 style-03" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                    </div>
                    <div class="hover-filter-01"></div>
                    <div class="icon">
                      <em class="fa-solid fa-plus"></em>
                    </div>
                    <div class="line-1"></div><div class="line-2"></div>
                  </a>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="grid lg-1-3 sm-100 mt-0">
          <div class="grids no-gap">
            <div class="grid lg-100 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                  <div class="ss-img horizontal-03">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="card-icon">
                    <div class="icon">
                      <img class="img" src="public/img/icon/play.png" alt="Banner" />
                    </div>
                  </div>
                  <div class="card-line-1"></div><div class="card-line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <?php for($i=0; $i<2; $i++){?>
          <div class="grid lg-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
            <div class="p-1">
              <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img horizontal-03">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                </div>
                <div class="hover-filter-01"></div>
                <div class="card-icon">
                  <div class="icon">
                    <img class="img" src="public/img/icon/play.png" alt="Banner" />
                  </div>
                </div>
                <div class="card-line-1"></div><div class="card-line-2"></div>
              </a>
            </div>
          </div>
          <div class="grid lg-1-6 mt-0" data-aos="fade-up" data-aos-delay="0">
            <div class="p-1 h-full">
              <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                </div>
                <div class="hover-filter-01"></div>
                <div class="icon">
                  <em class="fa-solid fa-plus"></em>
                </div>
                <div class="line-1"></div><div class="line-2"></div>
              </a>
            </div>
          </div>
        <?php }?>

        <?php for($i=0; $i<3; $i++){?>
          <div class="grid md-1-3 <?= $i==2? 'sm-100': '' ?> mt-0" data-aos="fade-up" data-aos-delay="0">
            <div class="p-1">
              <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img horizontal-03">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
                </div>
                <div class="hover-filter-01"></div>
                <div class="card-icon">
                  <div class="icon">
                    <img class="img" src="public/img/icon/play.png" alt="Banner" />
                  </div>
                </div>
                <div class="card-line-1"></div><div class="card-line-2"></div>
              </a>
            </div>
          </div>
        <?php }?>

        <div class="grid lg-2-3 sm-100 mt-0">
          <div class="grids no-gap">
            <div class="grid sm-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card ss-card-03 style-03" href="public/img/content/unsplash-0<?= (0%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= (0%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid sm-2-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card ss-card-03 style-04" href="public/img/content/unsplash-0<?= (1%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= (1%6+3) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="grid lg-1-3 sm-100 mt-0">
          <div class="grids no-gap">
            <div class="grid lg-100 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                  <div class="ss-img horizontal-03">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="card-icon">
                    <div class="icon">
                      <img class="img" src="public/img/icon/play.png" alt="Banner" />
                    </div>
                  </div>
                  <div class="card-line-1"></div><div class="card-line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>