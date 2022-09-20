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

  <div class="tab-container" style="min-height:541px;">
    <div class="tabs tabs-01">
      <?php foreach($categories as $j=>$k){?>
        <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
          <p class="lg color-white"><?= $k['title'] ?></p>
        </a>
      <?php }?>
    </div>
    <div class="tab-contents" data-section="2" class="section-01" style="background-color:#f2f2f2">
      <?php foreach($categories as $j=>$k){?>
        <div class="tab-content style-02 <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
          <div class="container">
            <div class="section-01 flex-column jc-center text-center">
              <h1 class="h1 color-01 lh-sm fw-600"><?= $k['title'] ?></h1> 
              <p class="h6 color-01 fw-600">บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด</p>  
              <p class="h5 sm fw-400">เราเป็นบริษัทที่ปรึกษา</p>
              <p class="h2 color-01 fw-600">“กลยุทธ์ด้านดิจิตัล สำหรับภาครัฐแบบครบวงจร”</p>
              <p class="fw-400">เรานำเสนอโซลูชั่นผ่านการให้คำปรึกษาด้านกลยุทธ์ทางดิจิทัลและเทคโนโลยี</p>
              <p class="fw-400">ที่ช่วยให้หน่วยงานหรือองค์กรได้ผลลัพธ์ที่ดีขึ้น เพื่อรับกับแนวทางการเปลี่ยนแปลงที่เกิดขึ้น</p>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>

 <section data-section="3" class="section-03">
  <div class="container">
    <div class="blocks">
      <div class="block">
        <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
        <div class="text-wrapper ss-text-wrapper xxs">
          <p class="lg fw-400 sm-no-br mt-2">
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

  <section class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns d-flex jc-center">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section class="section-02 section-padding" style="background:#000000">
    <h4 class="text-center color-01 fw-600">งานบริการอื่นๆ 
      <span class="fw-100 color-white">ของเรา</span>
    </h4> 
      <div class="swiper-container mt-4">
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