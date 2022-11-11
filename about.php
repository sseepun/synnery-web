<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php $topnavActive=2; include_once('include/topnav.php'); ?>
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
  <div class="tab-container ovf-hidden" id="tab-header" data-section="2">
    <div class="bg-01" data-aos="fade-in" data-aos-delay="150">
      <div class="tabs tabs-01">
        <?php foreach($categories as $j=>$k){?>
          <a 
            class="tab <?php if($j==0)echo 'active'; ?>" 
            data-tab="<?= $j ?>" data-anchor="#tab-header" href="#" 
          >
            <h6 class="title color-white"><?= $k['title'] ?></h6>
          </a>
        <?php }?>
      </div>
    </div>

    <section class="section-01 section-padding bg-05" data-aos="fade-in" data-aos-delay="300">
      <div class="pattern style-32">
        <div class="wrapper" value=".5">
          <img src="public/img/content/pattern-18.png" alt="Hero">
        </div>
      </div>
      <div class="container">
        <div class="tab-contents">
          <div class="tab-content active" data-tab="0">
            <div class="text-center">
              <h1 class="h1 color-01 lh-xs fw-600 text-shadow">About Us</h1> 
              <p class="h5 text-center color-01 fw-600 text-shadow mt-1">
                บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
              </p>
              <p class="h5 sm fw-400 mt-2">
                เราเป็นบริษัทที่ปรึกษา
              </p>
              <p class="h2 text-center lh-xs color-01 fw-600">
                “กลยุทธ์ด้านดิจิทัล สำหรับภาครัฐแบบครบวงจร”
              </p>
              <p class="text-center sm-no-br fw-400 mt-2">
                เรานำเสนอโซลูชั่นผ่านการให้คำปรึกษาด้านกลยุทธ์ทางดิจิทัลและเทคโนโลยี <br>
                ที่ช่วยให้หน่วยงานหรือองค์กรได้ผลลัพธ์ที่ดีขึ้น เพื่อรับกับแนวทางการเปลี่ยนแปลงที่เกิดขึ้น
              </p>
            </div>
          </div>
          <div class="tab-content" data-tab="1">
            <div class="text-center">
              <h1 class="h1 color-01 lh-xs fw-600 text-shadow">For Investor</h1> 
              <p class="h5 text-center color-01 fw-600 text-shadow mt-1">
                บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
              </p>
              <p class="h3 text-center lh-xs color-01 fw-600 mt-3">
                ดำเนินการมาแล้วมากกว่า 25 ปี
              </p>
              <p class="text-center sm-no-br fw-400 mt-2">
                เราทำงานร่วมกับลูกค้าเพื่อนำเสนอการเปลี่ยนแปลงทางเทคโนโลยี และช่วยส่งมอบการเปลี่ยนแปลงด้านเทคโนโลยี <br />
                สำหรับลูกค้าของเรา โดยมุ่งเน้นไปที่ การปรับปรุงพัฒนาแพลตฟอร์ม ความสามารถที่จำเป็นต่อความคล่องตัว <br />
                และสร้างสรรค์สิ่งใหม่ๆ เพื่อเพิ่มประสิทธิภาพการดำเนินการให้กับลูกค้า
              </p>
            </div>
          </div>
          <div class="tab-content" data-tab="2">
            <div class="text-center">
              <h1 class="h1 color-01 lh-xs fw-600 text-shadow">For Startup</h1> 
              <p class="h5 text-center color-01 fw-600 text-shadow mt-2">
                สำหรับผู้ที่มีไอเดีย มีแนวคิด ที่อยากจะสร้างธุรกิจของตนเอง 
              </p>
              <p class="text-center sm-no-br fw-400 mt-2">
                แต่อาจขาดความพร้อมด้านเงินทุน และประสบการณ์ สามารถนำเสนอแนวคิด 
                เพื่อร่วมกันพัฒนาความฝันร่วมกับเรา 
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    

    <div class="tab-contents" data-aos="fade-up" data-aos-delay="300">

      <!-- About Us -->
      <div class="tab-content active" data-tab="0">
        <section data-section="3" class="section-05 section-padding mh">
          <div class="img-bg" style="background-image:url('public/img/bg/03.jpg');"></div>
          <div class="container">
            <div class="text-center color-white">
              <p class="lg">
                <span class="fw-500 mr-1">ประสบการณ์</span>มากกว่า
                <span class="fw-500">25 ปี</span>
              </p> 
              <p class="lg">
                ความสำเร็จของ<span class="fw-500">ลูกค้าของเรา</span>
                ทั้งหน่วยงานภาครัฐและเอกชน มากกว่า <span class="fw-500">400 หน่วยงาน</span>
              </p>  
              <p class="lg">
                รวม<span class="fw-500">ผลงาน</span>ต่าง ๆ มากกว่า <span class="fw-500">500 โครงการ</span>
              </p>
            </div>
            <div class="grids jc-center pt-5">
              <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
                <div class="text-center">
                  <h6 class="color-white fw-500">MORE THAN</h6>
                  <p class="h1 lg lh-2xs color-white counter fw-600">300</p>
                  <h4 class="color-black fw-700 lh-xs">CLIENTS</h4>
                </div>
              </div>
              <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
                <div class="text-center">
                  <h6 class="color-white fw-500">MORE THAN</h6>
                  <p class="h1 lg lh-2xs color-white counter fw-600">500</p>
                  <h4 class="color-black fw-700 lh-xs">PROJECTS</h4>
                </div>
              </div>
              <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
                <div class="text-center">
                  <h6 class="color-white fw-500">MORE THAN</h6>
                  <p class="h1 lg lh-2xs color-white counter fw-600">25</p>
                  <h4 class="color-black fw-700 lh-xs">YEARS</h4>
                </div>
              </div>
            </div>
            <div class="text-center color-white mt-5">
              <p class="lg">
                เรามุ่งเน้นการส่งมอบผลลัพธ์งานที่มี 
                <span class="fw-500">คุณภาพเหนือความคาดหมาย</span>
              </p>
              <p class="lg">
                <span class="fw-500">ตรงตามกำหนด</span> และ 
                <span class="fw-500">บรรลุผลการปฏิบัติงาน</span> ให้กับลูกค้า
              </p>
            </div>
          </div>
        </section>
        <section data-section="4" class="section-padding bg-05">
          <div class="container">
            <div class="text-center">
              <h3 class="color-01 fw-600">
                “มาตรฐาน มืออาชีพ”
              </h3>
              <p class="sm-no-br color-black fw-400 mt-1">
                บริษัทของเราประกอบด้วยผู้ที่ชอบการทำงานร่วมกัน ไม่ว่าทีมของเราจะอยู่ที่ใด เพื่อให้เราสามารถส่งมอบงานที่มีคุณภาพ <br>
                เราพัฒนาทักษะด้านกำลังคนขับเคลื่อนการปรับปรุงการปฏิบัติงาน และใช้วิธีการทำงานแบบใหม่ เพื่อเป้าหมายเดียวกัน <br>
                คือการทำงานด้วย <span class="fw-600">“มาตรฐานความเป็นมืออาชีพ”</span> หรือ 
                <span class="fw-600">Professional Standard</span> จึงทำให้เราสามารถ<br>
                ส่งมอบงานได้ตามคำมั่นสัญญา ด้วย<span class="fw-600">คุณภาพและมาตรฐานที่เหนือความคาดหมาย</span>
              </p>
            </div>
            <div class="mt-6 pt-2">
              <div class="ss-img horizontal-02 no-hover">
                <div class="img-bg" style="background-image:url('public/img/content/01.jpg');"></div>
              </div>
            </div>
          </div>
        </section>
        <section data-section="5" class="section-padding">
          <div class="container">
            <div class="text-center">
              <h3 class="color-01 fw-600">
                OUR AWARDS
              </h3>
              <p class="sm-no-br color-black fw-400 mt-1">
                <span class="fw-600">“Professional Standard”</span> คือคำที่ทีมงานใช้ในการสื่อสารและยึดมั่นในการทำงานร่วมกัน 
                ด้วยความมุ่งมั่นที่จะส่งมอบ <br> <span class="fw-600">“งานคุณภาพเหนือความคาดหมาย”</span> และ 
                <span class="fw-600">“ตรงต่อเวลา”</span> ให้กับลูกค้า ทำให้หลายปีที่ผ่านมา เราได้รับทั้งคำชื่นชมและได้รับรางวัลต่าง ๆ 
                มากมายเกี่ยวกับผลิตภัณฑ์ ผลงานและงานบริการที่บริษัทฯ ได้เป็นผู้พัฒนา และส่งมอบงานคุณภาพให้กับลูกค้า
              </p>
            </div>
            <div class="grids no-gap pt-6">
              <?php for($i=0; $i<6; $i++){?>
                <div class="grid lg-1-3 xs-50 mt-0">
                <div class="ss-card ss-card-02">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/0<?= ($i%6+2) ?>.jpg');"></div>
                  </div>
                </div>  
              </div>   
              <?php }?>
            </div>
          </div>
        </section>
        <section data-section="6" class="section-05 section-padding">
          <div class="img-bg" style="background-image:url('public/img/bg/01.jpg');"></div>
          <div class="container">
            <h3 class="text-center color-01 fw-600">
              WHY US
            </h3>
            <div class="grids jc-center pt-6">
              <div class="grid xl-40 lg-50 md-50 sm-100 mt-0">
                <ul class="ss-list-01 style-02">
                  <li>	
                    มากกว่าการ “รับจ้าง” คือเรา “ทำงาน” เราช่วยลูกค้าคิด วางแผน วิเคราะห์   
                    <br>เสมือนงานและเงินนั้นเป็นของทีมงานเราเอง 
                  </li>
                  <li>	
                    เราไม่ได้แค่ทำตามที่ลูกค้าต้องการหรือสั่งให้ทำ แต่เราให้ทั้งความรู้ คำปรึกษา
                    แนะนำ เพื่อพัฒนางานให้บรรลุเป้าหมายร่วมกัน
                  </li>
                  <li>	
                    “Professional Standard” คือมาตรฐานในการทำงานร่วมกันของทีมงาน
                    เราและลูกค้าทุกราย 
                  </li>
                  <li>	
                    เราทำงานด้วยการรับประกัน KPI, ROI ที่ตกลงร่วมกันกับลูกค้า
                  </li>
                </ul> 
              </div>   
              <div class="grid xl-40 lg-50 md-50 sm-100 mt-0">
                <ul class="ss-list-01 style-02">
                  <li>	
                    เรามีเครื่องมือและระบบโปรแกรม สำหรับใช้ในการบริการจัดการระบบการทำงาน 
                    เพื่อคุณภาพและมาตรฐานระดับสากล
                  </li>
                  <li>	
                    เราใส่ใจในการคัดเลือกและพัฒนาทีมงานของเราอย่างต่อเนื่อง และปลูกฝังความเป็น
                    มืออาชีพในการทำงาน
                  </li>
                  <li>	
                    เรามีประสบการณ์ในการทำงาน Digital Business มานานกว่า 25 ปี
                    การันตีด้วย<br>ผลงานและลูกค้ากว่า 500 โครงการ 
                  </li>
                  <li>	
                    ทีมงานแบบจัดเต็ม ทุก Flow การทำงานตั้งแต่ต้นจนส่งมอบงาน  
                  </li>
                </ul>
              </div> 
            </div>
          </div>
        </section>
      </div>

      <!-- For Investor -->
      <div class="tab-content" data-tab="1">
        <section data-section="3" class="section-12">
          <div class="container">
            <div class="blocks">
              <div class="block">
                <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
                <div class="text-container">
                  <h6 class="color-01 fw-600">
                    เป้าหมายของเราคือการออกแบบและสร้างระบบที่ใช้ร่วมกันได้ ให้กับองค์กรเพื่อพัฒนา
                    ขีดความสามารถและก้าวข้ามไปสู่โลกที่เปลี่ยนแปลงอย่างรวดเร็วได้
                  </h6>
                  <p class="color-black fw-400 mt-2">
                    เพื่อที่จะขยายขีดความสามารถนี้ เรากำลังมองหานักลงทุนที่มีความเชี่ยวชาญในด้านต่างๆ 
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
        <section data-section="4">
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
            <div class="section-01 section-padding">
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
                          (Applicaiton Program Interface) เพื่อลดปัญหาความซ้ำซ้อนของข้อมูล และแก้ปัญหาที่ระบบต่างๆ ไม่สามารถทำงานร่วมกันได้ <br>
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
                  <?php }?>
                </div>
              </div>
            </div>
          </div>  
        </section>
      </div>

      <!-- For Startup -->
      <div class="tab-content" data-tab="2">
        <section data-section="3" class="section-12">
          <div class="container">
            <div class="blocks">
              <div class="block">
                <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
                <div class="text-container">
                  <p class="lg fw-400 sm-no-br mt-2">
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

        <section data-section="5" class="section-05 section-padding">
          <div class="img-bg" style="background-image:url('public/img/bg/06.jpg');"></div>
          <div class="container">
            <h3 class="text-center color-white fw-600" data-aos="fade-up" data-aos-delay="0">
              แผนการลงทุน ร่วมทุน กับ ธุรกิจด้านอื่น ๆ
            </h3>
            <p class="text-center color-white md-no-br mt-4" data-aos="fade-up" data-aos-delay="150">
              ด้วยพื้นฐานด้านการเป็นนักพัฒนาระบบโปรแกรมต่าง ๆ และการบริหารจัดการด้านการตลาด การเป็นที่ปรึกษาของเรามากกว่า 25 ปี <br>
              เราเปิดกว้างเพื่อมองหา คู่ค้า ในธุรกิจด้านต่าง ๆ ที่สนใจนำเทคโนโลยี และองค์ความรู้ประสบการณ์ต่าง ๆ ของเรา 
            </p>
            <div class="ss-box xl mt-4">
              <div class="grids" data-aos="fade-up" data-aos-delay="300">
                <div class="grid lg-1-3 md-50 sm-50 xs-100 mt-0">
                  <ul class="ss-list-01">
                    <li>ด้านการศึกษา</li>
                    <li>ด้านสุขภาพ</li>
                    <li>ด้านการเกษตร</li>
                    <li>ด้านการขนส่ง</li>
                  </ul> 
                </div>   
                <div class="grid lg-1-3 md-50 sm-50 xs-100 mt-0">
                  <ul class="ss-list-01">
                    <li>ด้านอาหารและเครื่องดื่ม</li>
                    <li>ด้านแฟชั่น  </li>
                    <li>ด้านประกันชีวิต ประกันภัย</li>
                    <li>ด้านการท่องเที่ยว</li>
                  </ul> 
                </div>
                <div class="grid lg-1-3 md-50 sm-50 xs-100 mt-0">
                  <ul class="ss-list-01">
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
      </div>

    </div>
  </div>
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>