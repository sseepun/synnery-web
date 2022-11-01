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
            <a class="tab <?php if($j==1)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
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
              <div class="tab-content <?php if($j==1)echo 'active'; ?>" data-tab="<?= $j ?>">
                <div class="text-center">
                  <h1 class="h1 color-01 lh-xs fw-600 text-shadow"><?= $k['title'] ?></h1> 
                  <p class="h5 text-center color-01 fw-600 text-shadow mt-1">
                    บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
                  </p>
                  <p class="h3 text-center lh-xs color-01 fw-600 mt-3">
                    ดำเนินการมาแล้วมากกว่า 25 ปี
                  </p>
                  <p class="text-center sm-no-br fw-400 mt-2">
                    เราทำงานร่วมกับลูกค้าเพื่อนำเสนอการเปลี่ยนแปลงทางเทคโนโลยี และช่วยส่งมอบการเปลี่ยนแปลงด้านเทคโนโลยี <br />
                    สำหรับลูกค้าของเรา โดยมุ่งเน้นไปที่ การปรับปรุงพัฒนาแพลตฟอร์ม ความสามารถที่จำเป็นต่อความคล่องตัว <br />
                    และสร้างสรรค์สิ่งใหม่ ๆ เพื่อเพิ่มประสิทธิภาพการดำเนินการให้กับลูกค้า
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
            <h6 class="color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
              เป้าหมายของเราคือการออกแบบและสร้างระบบที่ใช้ร่วมกันได้ ให้กับองค์กรเพื่อพัฒนา
              ขีดความสามารถและก้าวข้ามไปสู่โลกที่เปลี่ยนแปลงอย่างรวดเร็วได้
            </h6>
            <p class="color-black fw-400 mt-2" data-aos="fade-up" data-aos-delay="150">
              เพื่อที่จะขยายขีดความสามารถนี้ เรากำลังมองหานักลงทุนที่มีความเชี่ยวชาญในด้านต่าง ๆ 
              ที่มีเป้าหมายและทิศทางของธุรกิจไปในทางเดียวกัน เพื่อช่วยส่งเสริมซึ่งกันและกัน 
              และบรรลุผลลัพธ์สิ่งที่เป็นไปสู่สิ่งที่สามารถเป็นได้
            </p>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/08.jpg');"></div>
          </div>
        </div>
      </div>    
    </div>
  </section>

  <?php
    $categories = [
      [
        'title' => 'Jigsaw Office' 
      ], [
        'title' => 'Jigsaw ERP for Government'
      ]
    ]
  ?>
  <section data-section="4" data-aos="fade-in" data-aos-delay="0">
    <div class="tab-container">
      <div class="bg-01 pt-6 pb-4">
        <div class="tabs tabs-01 style-02">
          <div class="w-full text-center">
            <h4 class="lg color-white fw-600">แผนการพัฒนาสินค้าและบริการ</h4>
          </div>
          <?php foreach($categories as $j=>$k){?>
            <a class="tab width-50 <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <h5 class="title color-white"><?= $k['title'] ?></h5>
            </a>
          <?php }?>
        </div>
      </div>
      <div class="section-01 section-padding" data-aos="fade-in" data-aos-delay="300">
        <div class="pattern style-14">
          <div class="wrapper" value=".5">
            <img src="public/img/content/pattern-02.png" alt="Hero" />
          </div>
        </div>
        <div class="pattern style-15">
          <div class="wrapper" value=".5">
            <img src="public/img/content/pattern-02.png" alt="Hero" />
          </div>
        </div>
        <div class="pattern style-16">
          <div class="wrapper" value="-.5">
            <img src="public/img/content/pattern-03.png" alt="Hero" />
          </div>
        </div>
        <div class="pattern style-17">
          <div class="wrapper" value="-.5">
            <img src="public/img/content/pattern-05.png" alt="Hero" />
          </div>
        </div>
        <div class="pattern style-18">
          <div class="wrapper" value="-.5">
            <img src="public/img/content/pattern-04.png" alt="Hero" />
          </div>
        </div>
        <div class="pattern style-19">
          <div class="wrapper" value="-.5">
            <img src="public/img/content/pattern-06.png" alt="Hero" />
          </div>
        </div>
        <div class="img-bg" style="background-image:url('public/img/bg/05.jpg'); background-position:top center;"></div> 
        <div class="container">
          <div class="tab-contents">
            <?php foreach($categories as $j=>$k){?>
              <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                <div class="text-center">
                  <h2 class="lg color-01 lh-sm fw-600 text-uppercase">
                    <?= $k['title'] ?>
                  </h2> 
                  <p class="color-white md-no-br mt-2">
                    ระบบ E-Office สำหรับภาครัฐ ด้วยแนวคิดการออกแบบระบบให้เป็น Single Database เชื่อมต่อกับระบบต่างๆ ผ่าน API <br>
                    (Applicaiton Program Interface) เพื่อลดปัญหาความซ้ำซ้อนของข้อมูล และแก้ปัญหาที่ระบบต่าง ๆ ไม่สามารถทำงานร่วมกันได้ <br>
                    พร้อมด้วยการออกแบบและพัฒนาในรูปแบบของ Microservices และ DevSecOps เพื่อรองรับการพัฒนาต่อเนื่องและ <br>
                    การขยายระบบในอนาคต (อยู่ระหว่างการพัฒนา)
                  </p>
                </div>
                <div class="gallery-grids pt-2 pos-relative" style="z-index:2;">
                  <?php
                    $titles = [
                        'Jigsaw Intranet', 'Jigsaw Budgeting', 'Jigsaw E-Saraban', 'Jigsaw E-Document', 'Jigsaw Project ',
                        'Jigsaw E-Learning', 'Jigsaw Vehicle', 'Jigsaw Meeting Room', 'Jigsaw Help Desk', 'Jigsaw Chat Bot'
                      ]
                  ?>
                  <?php for($i=0; $i<9; $i++){?>
                    <div class="grid lg-1-6 md-20 sm-1-3 xs-50 pt-6">
                      <div class="ss-card ss-card-04 mt-2">
                        <div class="icon">
                          <img class="inactive" src="public/img/icon/investor-0<?= ($i%9+1) ?>.png" alt="Icon Inactive" />
                          <img class="active" src="public/img/icon/investor-active-0<?= ($i%9+1) ?>.png" alt="Icon Active" />
                        </div>
                        <div class="text-container">
                          <p class="xs title color-white fw-400 mt-2">
                            <?php echo $titles[$i] ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                  <?php
                    $titles = [
                      'Jigsaw Chat Bot', 'Jigsaw E-Procurement', 'Jigsaw Accounting', 'Jigsaw Financial', 
                      'Jigsaw Asset', 'Jigsaw E-Form', 'เชื่อมต่อระบบ Big Data', 'เชื่อมต่อกับระบบบ AI'
                      ]
                  ?>
                  <?php for($i=0; $i<8; $i++){?>
                    <div class="grid lg-1-6 md-20 sm-1-3 xs-50 pt-6">
                      <div class="ss-card ss-card-04 mt-2">
                        <div class="icon">
                          <img class="inactive" src="public/img/icon/investor-1<?= ($i%8+0) ?>.png" alt="Icon Inactive" />
                          <img class="active" src="public/img/icon/investor-active-1<?= ($i%8+0) ?>.png" alt="Icon Active" />
                        </div>
                        <div class="text-container">
                          <p class="xs title color-white fw-400 mt-2">
                            <?php echo $titles[$i] ?>
                          </p>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            <?php }?> -->
          </div>
        </div>
      </div>
    </div>  
  </section>
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>