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
  

  <section data-section="1" class="section-01 flex-column ai-unset section-padding">
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

  <section data-section="7" class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns d-flex jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section data-section="8" class="section-02 section-padding" style="background:#000000">
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>         
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

  <script>
    $(document).ready(function($) {
      $('.count-number').counterUp({
          delay: 10,
          time: 2000
      });
    });
  </script>

</body>
</html>