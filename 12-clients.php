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
                <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
                <p class="h5 text-uppercase color-black fw-600">Clients</p>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p class="text-uppercase color-black fw-500">More Than</p>
                <p class="h1 lg lh-2xs color-01 counter fw-600">500</p>
                <p class="h5 text-uppercase color-black fw-600">Projects</p>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p class="text-uppercase color-black fw-500">More Than</p>
                <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
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

  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>