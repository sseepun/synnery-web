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

  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/img-02.jpg" alt="Banner" />
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
  <section data-section="2">
    <div class="tab-container">
      <div class="bg-01" data-aos="fade-in" data-aos-delay="150">
        <div class="tabs tabs-01">
          <?php foreach($categories as $j=>$k){?>
            <a class="tab <?php if($j==2)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <h6 class="title color-white"><?= $k['title'] ?></h6>
            </a>
          <?php }?>
        </div>
      </div>
      <div class="section-01 section-padding bg-05" data-aos="fade-in" data-aos-delay="300">
        <div class="pattern style-32">
          <div class="wrapper" value=".5">
            <img src="public/img/content/pattern-18.png" alt="Hero">
          </div>
        </div>
        <div class="container">
          <div class="tab-contents">
            <?php foreach($categories as $j=>$k){?>
              <div class="tab-content <?php if($j==2)echo 'active'; ?>" data-tab="<?= $j ?>">
                <div class="text-center">
                  <h1 class="h1 color-01 lh-xs fw-600 text-shadow"><?= $k['title'] ?></h1> 
                  <p class="h5 text-center color-01 fw-600 text-shadow mt-2">
                    สำหรับผู้ที่มีไอเดีย มีแนวคิด ที่อยากจะสร้างธุรกิจของตนเอง 
                  </p>
                  <p class="text-center sm-no-br fw-400 mt-2">
                    แต่อาจขาดความพร้อมด้านเงินทุน และประสบการณ์ สามารถนำเสนอแนวคิด 
                    เพื่อร่วมกันพัฒนาความฝันร่วมกับเรา 
                  </p>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container">
            <p class="lg fw-400 sm-no-br mt-2" data-aos="fade-up" data-aos-delay="0">
              โดยเราจะมีทีมงาน และผู้เชี่ยวชาญ <br />
              ที่จะคอยให้ 
              <span class="h4 color-01 sm-no-br fw-600 lh-sm">
                คำแนะนำคำปรึกษา <br /> และดำเนินการต่างๆ ร่วมกัน
              </span><br />
              ถ้าใครคิดว่า<span class="h4 color-01 fw-600 lh-sm">มีไอเดียดีๆ</span> <br /> 
              หากต้องการเพิ่มโอกาส และเล็งเห็นสิ่งที่ <br/> 
              บริษัทฯ ให้การสนับสนุน <br /> 
              สามารถ<span class="h4 color-01 fw-600 lh-sm">ติดต่อเราได้เลย</span>
            </p>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/09.jpg');"></div>
          </div>
        </div>
      </div>    
    </div>
  </section>
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>