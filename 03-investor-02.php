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

  <div class="tab-container">
    <div class="tabs tabs-01">
      <?php foreach($categories as $j=>$k){?>
        <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
          <p class="lg title color-white"><?= $k['title'] ?></p>
        </a>
      <?php }?>
    </div>
    <div class="tab-contents size-01" data-section="2" style="background-color:#f2f2f2">
      <?php foreach($categories as $j=>$k){?>
        <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
          <div class="container">
            <div class="data-container">
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
          <p class="h6 color-01 fw-600">
            เป้าหมายของเราคือการออกแบบและสร้างระบบที่ใช้ร่วมกันได้ ให้กับองค์กรเพื่อพัฒนา
            ขีดความสามารถและก้าวข้ามไปสู่โลกที่เปลี่ยนแปลงอย่างรวดเร็วได้
          </p>
          <p class="fw-400 mt-2">
            เพื่อที่จะขยายขีดความสามารถนี้ เรากำลังมองหานักลงทุนที่มีความเชี่ยวชาญ ในด้านต่างๆ ที่มีเป้าหมาย และ
            ทิศทางของธุรกิจไปในทางเดียวกัน เพื่อช่วยส่งเสริมซึ่งกันและกัน และบรรลุผลลัพธ์สิ่งที่เป็น ไปสู่สิ่งที่สามารถเป็นได้
          </p>
        </div>
      </div> 
      <div class="subblocks">
        <div class="subblock">
          <div class="img-bg" style="background-image:url('public/img/content/08.jpg');"></div>
        </div>
      </div> 
    </div>    
  </div>
 </section>

 <!-- come back to edit later -->
 <div class="tab-demo" style="background:#ec2c23; min-height:120px;"></div>

 <?php
    $categories = [
      [
        'title' => 'Jigsaw Office' 
      ], [
        'title' => 'Jigsaw ERP for Government'
      ]
    ]
  ?>

<div class="tab-container">
    <div class="tabs tabs-01">
      <?php foreach($categories as $j=>$k){?>
        <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
          <p class="lg title color-white"><?= $k['title'] ?></p>
        </a>
      <?php }?>
    </div>
    <div class="tab-contents section-01 size-02" data-section="2">
      <div class="img-bg" style="background-image:url('public/img/bg/05.jpg');"></div> 
      <?php foreach($categories as $j=>$k){?>
        <div class="tab-content style-02 <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
          <div class="container">
            <div class="text-center">
              <h1 class="h1 color-01 lh-sm fw-600"><?= $k['title'] ?></h1> 
              <p class="color-white md-no-br">
                ระบบ E-Office สำหรับภาครัฐ ด้วยแนวคิดการออกแบบระบบให้เป็น Single Database เชื่อมต่อกับระบบต่างๆ ผ่าน API <br>
                (Applicaiton Program Interface) เพื่อลดปัญหาความซ้ำซ้อนของข้อมูล และแก้ปัญหาที่ระบบต่างๆ ไม่สามารถทำงานร่วมกันได้ <br>
                พร้อมด้วยการออกแบบและพัฒนาในรูปแบบของ Microservices และ DevSecOps เพื่อรองรับการพัฒนาต่อเนื่องและ <br>
                การขยายระบบในอนาคต (อยู่ระหว่างการพัฒนา)
              </p>
            </div>
            <div class="ss-card-container jc-center">
      <?php for($i=0; $i<10; $i++){?>
      <div class="ss-card ss-card-04">
        <div class="icon">
          <em class="fa-solid fa-heart"></em>
        </div>
        <div class="text-container">
          <p class="title xs">Jigsaw E-Procurement</p>
        </div>
      </div>
      <?php }?>
    </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>

 <section data-section="4" class="section-01 size-03 section-padding">
  <!-- <div class="img-bg" style="background-image:url('public/img/bg/05.jpg');"></div>  -->
  <div class="container">
    <h3 class="text-center text-uppercase color-01 fw-600">jigsaw ERP for Government</h3>     
    <!-- <p class="text-center color-white md-no-br">
      ระบบ E-Office สำหรับภาครัฐ ด้วยแนวคิดการออกแบบระบบให้เป็น Single Database เชื่อมต่อกับระบบต่างๆ ผ่าน API <br>
      (Applicaiton Program Interface) เพื่อลดปัญหาความซ้ำซ้อนของข้อมูล และแก้ปัญหาที่ระบบต่างๆ ไม่สามารถทำงานร่วมกันได้ <br>
      พร้อมด้วยการออกแบบและพัฒนาในรูปแบบของ Microservices และ DevSecOps เพื่อรองรับการพัฒนาต่อเนื่องและ <br>
      การขยายระบบในอนาคต (อยู่ระหว่างการพัฒนา)
    </p>  -->
    <div class="ss-card-container jc-center">
      <?php for($i=0; $i<10; $i++){?>
      <div class="ss-card ss-card-04">
        <div class="icon">
          <em class="fa-solid fa-heart"></em>
        </div>
        <div class="text-container">
          <p class="title xs">Jigsaw E-Procurement</p>
        </div>
      </div>
      <?php }?>
    </div> 
  </div>    
 </section>

 <section data-section="5" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/06.jpg');"></div>
    <div class="container">
      <h3 class="text-center color-white text-uppercase mb-4 fw-600">
        แผนการลงทุน ร่วมทุน กับ ธุรกิจด้านอื่นๆ
      </h3>  
      <p class="text-center color-white md-no-br">
        ด้วยพื้นฐานด้านการเป็นนักพัฒนาระบบโปรแกรมต่างๆ และการบริหารจัดการด้านการตลาด การเป็นที่ปรึกษาของเรามากกว่า 25 ปี <br>
        เราเปิดกว้างเพื่อมองหา คู่ค้า ในธุรกิจด้านต่างๆ ที่สนใจนำเทคโนโลยี และองค์ความรู้ประสบการณ์ต่างๆ ของเรา 
      </p>
      <div class="ss-box xl mt-4">
        <div class="grids">
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <ul class="ss-list-01 style-02">
              <li>ด้านการศึกษา</li>
              <li>ด้านสุขภาพ</li>
              <li>ด้านการเกษตร</li>
              <li>ด้านการขนส่ง</li>
            </ul> 
          </div>   
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <ul class="ss-list-01 style-02">
              <li>ด้านอาหารและเครื่องดื่ม</li>
              <li>ด้านแฟชั่น  </li>
              <li>ด้านประกันชีวิต ประกันภาย</li>
              <li>ด้านการท่องเที่ยว</li>
            </ul> 
          </div>
          <div class="grid lg-1-3 md-50 sm-50 xs-100">
            <ul class="ss-list-01 style-02">
              <li>ด้านธุรกิจยานยนต์</li>
              <li>ด้านอสังหาริมทรัพย์</li>
              <li>ด้านการแพทย์</li>
              <li>ด้านตลาดกลาง (Market Place)</li>
            </ul> 
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