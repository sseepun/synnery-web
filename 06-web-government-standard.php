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
      <div class="grids mt-4" data-aos="fade-up" data-aos-delay="150">
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

  <section class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns d-flex jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section class="section-02 section-padding" style="background:#000000">
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