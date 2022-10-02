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
      <div class="section-01 section-padding" data-aos="fade-in" data-aos-delay="300">
        <div class="img-bg" style="background-image:url('public/img/bg/24.jpg');"></div> 
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

  <section data-section="4" class="section-01 size-03">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section data-section="5" class="section-02 section-padding bg-black pb-0">
    <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
      งานบริการอื่นๆ <span class="fw-100 color-white">ของเรา</span>
    </h3> 
    <div class="swiper-container mt-6" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<12; $i++){?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-03" href="#">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
              </div>
              <div class="filter-02"></div>
              <div class="hover-filter-02"></div>
              <div class="text-container">
                <div class="title p sm fw-400 color-white" href="#">
                  Unlimited Microsite for Government
                  Unlimited Microsite for Government
                  Unlimited Microsite for Government
                </div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
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