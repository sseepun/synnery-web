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
    <img class="img" src="public/img/bg/23.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/24.jpg');"></div> 
    <div class="container">
      <div class="ss-box xl">
        <div class="text-center color-01">
          <h1 class="lh-2xs text-center text-shadow fw-600" data-aos="fade-up" data-aos-delay="0">
            Our Culture & Life Style
          </h1>
          <p class="h5 color-black fw-400 xs-no-br mt-3" data-aos="fade-up" data-aos-delay="150">
            เพราะเราไม่ได้มองแค่ชีวิตการทำงาน แต่เราเสริมสร้างและเน้นพัฒนาคน <br>
            เพื่อพัฒนาคุณภาพองค์กร และคุณภาพการใช้ชีวิตของทีมงาน
          </p>
        </div>
      </div>
    </div>
  </section>

  <?php
    $categories = [
      [
        'title' => 'About Us' 
      ], [
        'title' => 'For Investor'
      ], [
        'title' => 'For Startup'
      ]
    ]
  ?>

  <section data-section="2" class="section-07">
    <div class="tab-container">
      <div class="bg-01">
        <div class="tabs tabs-01">
          <?php foreach($categories as $j=>$k){?>
            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <p class="lg title color-white"><?= $k['title'] ?></p>
            </a>
          <?php }?>
        </div>
      </div>
      <div class="tab-contents section-padding" data-section="2">
        <?php foreach($categories as $j=>$k){?>
          <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
            <div class="container">
              <div class="swiper-container" data-aos="fade-up" data-aos-delay="150">
                <div class="swiper-wrapper">
                  <?php for($i=0; $i<12; $i++){?>
                    <div class="swiper-slide">
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
                      <div class="mt-2">
                        <p class="lg text-center color-black fw-400">VIDEO อบรม กระทรวงศึกษาธิการ</p>
                      </div> 
                    </div>
                  <?php }?>
                </div>
                <div class="dots"></div>
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
          </div>
        <?php }?>
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

  <section>
    <div class="grids">
      <div class="grid lg-1-3">
          
    </div>
  </section>
  
  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>