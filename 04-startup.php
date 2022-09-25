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
      <div class="bg-01">
        <div class="tabs tabs-01">
          <?php foreach($categories as $j=>$k){?>
            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <p class="lg title color-white"><?= $k['title'] ?></p>
            </a>
          <?php }?>
        </div>
      </div>
      <div class="tab-contents size-01" style="background-color:#f2f2f2">
        <?php foreach($categories as $j=>$k){?>
          <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
            <div class="container">
              <div class="data-container">
                <h1 class="h1 color-01 lh-sm fw-600" data-aos="fade-up" data-aos-delay="0">
                  <?= $k['title'] ?>
                </h1> 
                <p class="h6 color-01 fw-600" data-aos="fade-up" data-aos-delay="150">
                  บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
                </p>  
                <p class="h5 sm fw-400" data-aos="fade-up" data-aos-delay="150">
                  เราเป็นบริษัทที่ปรึกษา
                </p>
                <p class="h2 color-01 fw-600" data-aos="fade-up" data-aos-delay="300">
                  “กลยุทธ์ด้านดิจิตัล สำหรับภาครัฐแบบครบวงจร”
                </p>
                <p class="fw-400" data-aos="fade-up" data-aos-delay="300">
                  เรานำเสนอโซลูชั่นผ่านการให้คำปรึกษาด้านกลยุทธ์ทางดิจิทัลและเทคโนโลยี
                </p>
                <p class="fw-400" data-aos="fade-up" data-aos-delay="300">
                  ที่ช่วยให้หน่วยงานหรือองค์กรได้ผลลัพธ์ที่ดีขึ้น เพื่อรับกับแนวทางการเปลี่ยนแปลงที่เกิดขึ้น
                </p>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

 <section data-section="3" class="section-03">
  <div class="container">
    <div class="blocks">
      <div class="block">
        <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
        <div class="text-wrapper ss-text-wrapper xxs">
          <p class="lg fw-400 sm-no-br mt-2" data-aos="fade-up" data-aos-delay="0">
            โดยเราจะมีทีมงาน และผู้เชี่ยวชาญ <br>
            ที่จะคอยให้ <span class="h5 color-01 sm-no-br fw-600">คำแนะนำคำปรึกษา <br> และดำเนินการต่างๆ ร่วมกัน</span><br>
            ถ้าใครคิดว่ามี<span class="h5 color-01 fw-600">ไอเดียดีๆ</span> <br> หากต้องการเพิ่มโอกาส และเล็งเห็นสิ่งที่ <br> บริษัทฯ 
            ให้การสนับสนุน <br> สามารถ<span class="h5 color-01 fw-600">ติดต่อเราได้เลย</span>
          </p>
        </div>
      </div> 
      <div class="subblocks">
        <div class="subblock">
          <div class="img-bg" style="background-image:url('public/img/content/09.jpg');"></div>
        </div>
      </div> 
    </div>    
  </div>
 </section>

  <section data-section="4" class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns d-flex jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section data-section="5" class="section-02 section-padding" style="background:#000000">
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