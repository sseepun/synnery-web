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


  <?php 
    $banner = [
      ['imgBg' => 'public/img/lark/banner/01.jpg'],
      ['imgBg' => 'public/img/lark/banner/02.jpg'],
      ['imgBg' => 'public/img/lark/banner/03.jpg'],
      ['imgBg' => 'public/img/lark/banner/04.jpg'],
    ]
  ?>
  <section data-section="1" class="banner-04">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php foreach($banner as $d) {?>
          <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="section-padding section-18">
    <div class="img-bg" style="background-image:url('public/img/lark/bg/01.png');"></div>
    <div class="container">
      <div class="title-header" data-aos="fade-up" data-aos-delay="0">
        <div class="logo">
          <img src="public/img/lark/logo/lark-logo.png" alt="Lark Logo">
        </div>
        <h2 class="fw-700 ml-2">Lark <span class="h3 color-p fw-500">คืออะไร</span></h2>
        <div class="question-mark">
          <img src="public/img/lark/icon/question-mark.png" alt="Lark Logo">
        </div>
      </div>
      <p class="lg text-center color-p fw-800" data-aos="fade-up" data-aos-delay="150">
        ALL IN ONE E-OFFICE APPLICATION 
        <span class="color-black fw-400 sm-no-br">
          แพลตฟอร์มที่รวมโปรแกรมสำหรับคนทำงาน<br>
          มากกว่า <span class="color-p fw-800">20 โปรแกรม</span>
          <span class="color-black fw-400">มาไว้ในหน้าจอเดียว</span>
        </span>
      </p>
      <div class="ss-box lg mt-6">
      <div class="grids">
        <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="300">
          <p class="color-black fw-400">
            สัมผัสประสบการณ์ใหม่ของการทำงานในยุคดิจิตัล<br>
            ด้วย <span class="fw-800">Lark</span> 
            <span class="color-p fw-800">All in One E-Office<br>Applications</span>
            <span>แพลตฟอร์มที่รวมทุกอย่างของ<br>การทำงานไว้ในหน้าจอเดียว</span>
          </p>
          <div class="tiktok-content mt-4">
            <div class="wrapper">
              <div class="icon">
                <img src="public/img/lark/icon/tiktok.png" alt="TikTok Icon">
              </div>
              <div class="text">
                <p class="xs">บริหารโดย <span class="fw-700">Bydance</span> 
                เจ้าของเดียวกัน<br>กับ <span class="fw-700">TikTok</span><p>
              </div>
            </div>
          </div>
          <div class="feature-container">
            <div class="feature-item">
              <p class="number">39%</p>
              <p class="xxs text text-center">
                meeting time shortened
              </p>
            </div>
            <div class="feature-item">
              <p class="number">70%</p>
              <p class="xxs text text-center">
                cast saved
              </p>
            </div>
            <div class="feature-item">
              <p class="number">10%</p>
              <p class="xxs text text-center">
                operational efficiency
              </p>
            </div>
          </div>
        </div>
        <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="450">
          <div class="ss-card ss-card-42 no-border">
            <img class="img" src="public/img/lark/content/01.jpg" alt="Image">
          </div>
        </div>
      </div>
      </div>
    </div>      
  </section>

  <section class="section-padding">
    <div class="container">
      <h2 class="fw-700 text-center">Lark <span class="color-p">Together</span></h2>
      <p class="text-center">แอปเดียวจบ!! ครบทุกการทำงาน</p>
    </div>      
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>