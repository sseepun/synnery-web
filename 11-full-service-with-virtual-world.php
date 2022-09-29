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

  <section data-section="3" class="section-01">
    <div class="container">
      <div class="text-center">
        <h3 class="color-01 lh-2xs fw-600">
          Virtual Exhibition /<br> <span class="h4 lg color-black fw-600">Virtual Live Event</span>
        </h3>    
      </div>
    </div>        
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>         
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

</body>
</html>