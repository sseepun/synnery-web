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

  <section data-section="1" class="section-03 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/35.jpg');"></div>  
    <div class="container">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Our Clients
      </h3>
      <p class="text-center md-no-br" data-aos="fade-up" data-aos-delay="150">
        ประสบการณ์มากกว่า 25 ปี ผลงานกับลูกค้าทั้งภาครัฐและเอกชนขนาดใหญ่กว่า 300 ราย มากกว่า 500 โครงการ
      </p>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="300">
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
            <h4 class="color-black fw-700 lh-xs">CLIENTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">500</p>
            <h4 class="color-black fw-700 lh-xs">PROJECTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
            <h4 class="color-black fw-700 lh-xs">YEARS</h4>
          </div>
        </div>
      </div>
    </div>
    <div class="clients" data-aos="fade-up" data-aos-delay="450">
      <?php for($i=0; $i<24; $i++){?>
        <div class="client">
          <div class="ss-card ss-card-26">
            <div class="wrapper">
              <div class="image-container">
                <img src="public/img/clients/client-02.png" alt="Client" />
              </div>
              <div class="text-container mt-4">
                <p class="xs title">กระทรวงพลังงาน</p>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </section>

  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>