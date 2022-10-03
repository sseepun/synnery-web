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

  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/bg/30.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/24.jpg');"></div> 
    <div class="container">
      <div class="ss-box xl">
        <div class="text-center color-01">
          <h1 class="lh-2xs text-center text-shadow fw-600" data-aos="fade-up" data-aos-delay="0">
            Career
          </h1>
          <p class="h6 text-center color-01 fw-600 mt-1" data-aos="fade-up" data-aos-delay="150">
            บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
          </p>
          <p class="h5 color-black fw-400" data-aos="fade-up" data-aos-delay="300">
            เราเป็นบริษัทที่ปรึกษา
          </p>
          <p class="h3 fw-600" data-aos="fade-up" data-aos-delay="450">
            “กลยุทธ์ด้านดิจิตัล สำหรับภาครัฐแบบครบวงจร”
          </p>
          <p class="color-black fw-400" data-aos="fade-up" data-aos-delay="600">
            เรานำเสนอโซลูชั่นผ่านการให้คำปรึกษาด้านกลยุทธ์ทางดิจิทัลและเทคโนโลยี<br>
            ที่ช่วยให้หน่วยงานหรือองค์กรได้ผลลัพธ์ที่ดีขึ้น เพื่อรับกับแนวทางการเปลี่ยนแปลงที่เกิดขึ้น
          </p>
        </div>
        <div class="grids jc-center mt-5" data-aos="fade-up" data-aos-delay="450">
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 md-50 sm-50 xs-100">
              <a class="ss-card ss-card-33 box-shadow" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+1) ?>.jpg');"></div>
                </div>
                <div div class="ss-card-inner"></div>
                <div class="icon-container">
                  <div class="icon">
                    <img class="img" src="public/img/icon/play.png" alt="Banner" />
                  </div>
                </div>
              </a>
              <a class="p sm text-center d-block mt-3 fw-500" href="#">
                ถ้ามาเป็น Dev ที่นี่จะเจออะไร 
              </a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-05 section-padding" style="background-image:url('public/img/bg/01.jpg');">
    <div class="container">
      <h3 class="text-center color-01 text-uppercase mb-4 fw-600" data-aos="fade-up" data-aos-delay="0">
        สวัสดิการเบื้องต้น
      </h3>  
      <div class="ss-box xxl">
        <div class="grids" data-aos="fade-up" data-aos-delay="150">
          <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
            <ul class="ss-list-01 style-02">
              <li>	
                ปรับเงินเดือนหลังผ่าน Probation และพิจารณาปรับตามผลงาน <br>
                ผลประกอบการทุกๆ 6 เดือน 
              </li>
              <li>ทำงาน จ.-ศ. 9:00-18:00</li>
              <li>มี OT สำหรับการทำงานนอกเวลา</li>
              <li>มีค่าเดินทาง ค่าเสื่อมคอมพิวเตอร์</li>
            </ul> 
          </div>   
          <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
            <ul class="ss-list-01 style-02">
              <li>นำผลกำไรมาแบ่งเป็น Bonus ให้พนักงานรายไตรมาส</li>
              <li>MAC Book Pro สำหรับพนักงานที่ไม่มี Computer</li>
              <li>Party ทุกศุกร์สุดท้ายของสิ้นเดือน ตั้งแต่บ่าย 3 โมงเย็น</li>
            </ul>
          </div> 
        </div>
      </div>
    </div>
  </section>

  <?php
    $categories = [
      [
        'title' => 'All' 
      ], [
        'title' => 'Full Time '
      ], [
        'title' => 'Outsource'
      ], [
        'title' => 'Partners'
      ], [
        'title' => 'Trainee'
      ]
    ]
  ?>

  <section data-section="4" class="section-01 section-padding bg-01">
    <div class="container">
      <h3 class="color-white text-center fw-600" data-aos="fade-up" data-aos-delay="0">
        ตำแหน่งที่เปิดรับสมัคร
      </h3>
      <div class="tab-container">
        <div class="tabs tabs-01" data-aos="fade-up" data-aos-delay="150">
          <?php foreach($categories as $j=>$k){?>
            <a class="tab width-20 <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <p class="h6 title color-white"><?= $k['title'] ?></p>
            </a>
          <?php }?>
        </div>
        <div class="tab-contents">
          <?php foreach($categories as $j=>$k){?>
            <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
              <div class="scroll-x-wrapper" data-simplebar>
                <div class="ss-box xxl" data-aos="fade-up" data-aos-delay="300">
                  <?php for($i=0; $i<8; $i++){?>
                    <div class="ss-card ss-card-24 mt-2">
                      <div class="wrapper">
                        <div class="main-block">
                          <a class="h6 color-black fw-400" href="#">
                            <em class="fa-regular fa-circle-user color-01 mr-1"></em>
                            AE / Sales Executive
                          </a>
                        </div>
                        <div class="sub-block-01">
                          <p class="color-black fw-400">1 ตำแหน่ง</p>
                        </div>
                        <div class="sub-block-02">
                          <p class="color-black fw-400"><span class="color-03 mr-2">ประสบการณ์</span> 2 ปีขึ้นไป</p>
                        </div>
                        <div class="sub-block-03">
                          <a class="color-white" href="#">รายละเอียด</a>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <section data-section="5" class="section-05 section-padding" style="background-image:url('public/img/bg/31.jpg');">
    <div class="container">
      <h3 class="text-center color-01 lh-sm fw-600" data-aos="fade-up" data-aos-delay="0">
        AE <span class="h4 color-black fw-400">(Account Executive)</span>
      </h3>  
      <p class="h5 text-center color-black fw-400" data-aos="fade-up" data-aos-delay="150">
        <em class="fa-regular fa-circle-user color-01 mr-1"></em> 2 ตำแหน่ง
      </p>
      <div class="ss-box xxl mt-4">
        <div class="grids" data-aos="fade-up" data-aos-delay="300">
          <div class="grid lg-50 md-50 sm-50 xs-100">
            <p class="text-uppercase fw-600">Job Description</p>
            <ul class="ss-list-01 style-03 mt-2">
              <li class="sm color-black pb-2 fw-400">
                วางแผนและกลยุทธ์การขาย ร่วมกับทีมงาน พร้อมนำเสนอแผน ติดตาม ตรวจสอบเป้า
                งานขายแต่ละไตรมาส รับผิดชอบยอดขายให้เป็นไปตาม Target และหาแนวทางปรับปรุง
                ยอดขาย และดูแลยอดขาย ให้เป็นไปตามเป้าหมาย
              </li>
              <li class="sm color-black pb-2 fw-400">
                ดูแล รักษา สร้างสัมพันธ์ ลูกค้ารายใหญ่ เข้านำเสนอข้อมูลเกี่ยวกับสินค้าและงานบริการ 
                ของบริษัท กับผู้บริหาร และผู้ที่เกี่ยวข้อง เดือนละไม่น้อยกว่า 10 ราย
              </li>
              <li class="sm color-black pb-2 fw-400">
                ติดต่อหาลูกค้าใหม่ นัดประชุม ติดตามงาน นำเสนองานบริการและสินค้าของบริษัท
                ลูกค้าเป้าหมายส่วนใหญ่ เป็นหน่วยงานราชการ บริษัทชั้นนำในกลุ่มตลาดหลักทรัพย์ และ   
                Top Brand ชั้นนำขนาดใหญ่ และลูกค้าส่วนใหญ่เป็น IT Manager, HR Manager, PR 
                Manager, Marketing Manager, CEO, CTO, MD
              </li>
              <li class="sm color-black pb-2 fw-400">
                จัดทำใบเสนอราคา และเอกสารต่างๆ ที่เกี่ยวข้องกับการเสนอโครงการต่างๆ ได้ เช่น
                Proposal, Presentation ได้ด้วยตัวเอง (บริษัทฯ มีตัวอย่าง และ Template ให้)
              </li>
              <li class="sm color-black pb-2 fw-400">
                ช่วยเหลือทีมงาน ประสานงาน ทำงานกันเป็นทีม เน้นส่งมอบ value และผลงานที่เหนือ
                ความคาดหมายให้กับลูกค้า ติดต่อประสานงานกับ Partner / Outsource / PM และอื่นๆ
              </li>
              <li class="sm color-black pb-2 fw-400">
                ร่วมประชุมกับ PM และทีมงาน ระหว่างการพัฒนาระบบงานเพื่อส่งมอบ
              </li>
              <li class="sm color-black fw-400">
                แจกแจงรายละเอียดของงานที่ขายมาให้กับทีม Production และ Project Manager
              </li>
            </ul> 
          </div>   
          <div class="grid lg-50 md-50 sm-50 xs-100">
            <p class="text-uppercase fw-600">Job Specification</p>
            <ul class="ss-list-01 style-03 mt-2">
              <li class="sm color-black pb-2 fw-400">
                ปริญญาตรี ไม่จำกัดเพศ อายุ 25 - 35 ปี
              </li>
              <li class="sm color-black pb-2 fw-400">
                ประสบการณ์ในการทำงานด้าน AE, Sales, หรือที่เกี่ยวข้อง ไม่น้อยกว่า 2 ปี ขึ้นไป
              </li>
              <li class="sm color-black pb-2 fw-400">
                สามารถ Present งานได้ทั้งภาษาไทย และอังกฤษ
              </li>
              <li class="sm color-black pb-2 fw-400">
                มีรถยนต์เพื่อใช้ในการเดินทาง และคอมพิวเตอร์โน้ตบุ๊คสำหรับทำงานของตัวเอง
              </li>
              <li class="sm color-black pb-2 fw-400">
                ถ้ามีประสบการณ์ในการทำงานด้านไอที หรือ Software Application ให้กับภาครัฐจะพิจารณาเป็นพิเศษ
              </li>
              <li class="sm color-black pb-2 fw-400">
                มีค่าเดินทาง ค่าโทรศัพท์ ค่า Notebook ค่า Commission และ Project Incentive และ
                มีระบบโครงสร้างเงินเดือน ที่ปรับตามผลงานก่อนหน้า เป็นแบบขั้นบันได
              </li>
              <li class="sm color-black pb-2 fw-400">
                สามารถทำงานเป็นทีม ร่วมกับตำแหน่งอื่นๆ ได้ดี
              </li>
              <li class="sm color-black pb-2 fw-400">
                มีความตรงต่อเวลา รับผิดชอบในงานที่ได้รับมอบหมายเป็นอย่างดี
              </li>
            </ul> 
          </div>
        </div>
        <div class="btn-container" data-aos="fade-up" data-aos-delay="450">
          <div class="ss-box xs">
            <div class="btn-customs" data-aos="fade-up" data-aos-delay="600">
              <div class="btn-custom">
                <button type="submit" class="btn btn-action btn-color-01 style-02 fw-300">
                  <p class="sm">สมัคร</p>
                </button>
              </div>
              <div class="btn-custom">
                <button type="submit" class="btn btn-action btn-color-02 style-02 fw-300">
                  <p class="sm">ดูตำแหน่งอื่นๆ</p>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="6" class="section-05 section-padding" style="background-image:url('public/img/bg/32.jpg');">
    <div class="container">
      <h3 class="text-center color-01 lh-sm fw-600" data-aos="fade-up" data-aos-delay="0">
        PM <span class="h4 color-black fw-400">(Project Management)</span>
      </h3>  
      <p class="h5 text-center color-black fw-400" data-aos="fade-up" data-aos-delay="150">
        <em class="fa-regular fa-circle-user color-01 mr-1"></em> 1 ตำแหน่ง
      </p>
      <div class="ss-box xxl mt-4">
        <div class="grids" data-aos="fade-up" data-aos-delay="300">
          <div class="grid lg-50 md-50 sm-50 xs-100">
            <p class="text-uppercase fw-600">Job Description</p>
            <ul class="ss-list-01 style-03 mt-2">
              <li class="sm color-black pb-2 fw-400">
                บริหารจัดการโครงการงาน Digital Business/Marketing/Applications มูลค่า
                โครงการส่วนใหญ่เริ่มต้นที่ 1 ล้านบาท
              </li>
              <li class="sm color-black pb-2 fw-400">
                บริหารจัดการ ประสานงาน ทั้งกับลูกค้า คู่ค้า และ พนักงาน ทีมงานทั้งภายใน ภายนอก
                ในการส่งมอบโครงการต่างๆ
              </li>
              <li class="sm color-black pb-2 fw-400">
                วางแผน ติดตาม บริหาร ควบคุม ตรวจสอบ ประสานงาน แก้ไขปัญหา ให้งานสำเร็จตาม
                แผนและเป้าหมายที่วางไว้
              </li>
              <li class="sm color-black pb-2 fw-400">
                ควบคุมคุณภาพของงานให้เป็นไปตามความ Requirement และข้อกำหนดของงาน (TOR)
              </li>
              <li class="sm color-black pb-2 fw-400">
                นำเสนอและอัพเดท แผนโครงการและรายละเอียด ทุกขั้นตอนการทำงาน ให้กับลูกค้าและ
                ทีมงาน เพื่อปิดงานตามเป้าหมาย
              </li>
              <li class="sm color-black pb-2 fw-400">
                รับ Requirement และแจกแจงรายละเอียดของความต้องการจากลูกค้ามา สรุปให้ทีม
                งาน Production
              </li>
              <li class="sm color-black fw-400">
                รับผิดชอบ และบริหารงานด้านเอกสาร ทั้งงานแข่ง งานประมูล และงานส่งมอบร่วมกับ
                ทีมงาน ฝ่ายต่างๆ
              </li>
              <li class="sm color-black fw-400">
                ดูแลและบริหารโครงการต่างๆ พร้อมๆ กันหลากหลายโครงการมากพอสมควร
              </li>
            </ul> 
          </div>   
          <div class="grid lg-50 md-50 sm-50 xs-100">
            <p class="text-uppercase fw-600">Job Specification</p>
            <ul class="ss-list-01 style-03 mt-2">
              <li class="sm color-black pb-2 fw-400">
                ปริญญาตรี ไม่จำกัดเพศ อายุ 25 - 35 ปี
              </li>
              <li class="sm color-black pb-2 fw-400">
                ประสบการณ์ในการทำงานด้านนี้ หรือที่เกี่ยวข้อง ไม่น้อยกว่า 2 ปี ขึ้นไป หรือมีผลงาน
                ในการบริหารไม่ต่ำกว่า 3 โครงการ
              </li>
              <li class="sm color-black pb-2 fw-400">
                สามารถ Present งานได้ทั้งภาษาไทย และอังกฤษ
              </li>
              <li class="sm color-black pb-2 fw-400">
                มีรถยนต์เพื่อใช้ในการเดินทาง และคอมพิวเตอร์โน้ตบุ๊คสำหรับทำงานของตัวเอง
              </li>
              <li class="sm color-black pb-2 fw-400">
                ถ้ามีประสบการณ์ในการทำงานด้านไอที หรือ Software Application ให้กับภาครัฐจะพิจารณาเป็นพิเศษ
              </li>
              <li class="sm color-black pb-2 fw-400">
                มีค่าเดินทาง ค่าโทรศัพท์ ค่า Notebook ค่า Commission และ Project Incentive และ
                มีระบบโครงสร้างเงินเดือน ที่ปรับตามผลงานก่อนหน้า เป็นแบบขั้นบันได
              </li>
              <li class="sm color-black pb-2 fw-400">
                สามารถทำงานเป็นทีม ร่วมกับตำแหน่งอื่นๆ ได้ดี
              </li>
              <li class="sm color-black pb-2 fw-400">
                มีความตรงต่อเวลา รับผิดชอบในงานที่ได้รับมอบหมายเป็นอย่างดี
              </li>
              <li class="sm color-black pb-2 fw-400">
                มีความยืดหยุ่นในการทำงาน สามารถปรับเปลี่ยนงานให้เข้ากับสถานการณ์ได้
              </li>
            </ul> 
          </div>
        </div>
        <div class="btn-container" data-aos="fade-up" data-aos-delay="450">
          <div class="ss-box xs">
            <div class="btn-customs" data-aos="fade-up" data-aos-delay="600">
              <div class="btn-custom">
                <button type="submit" class="btn btn-action btn-color-01 style-02 fw-300">
                  <p class="sm">สมัคร</p>
                </button>
              </div>
              <div class="btn-custom">
                <button type="submit" class="btn btn-action btn-color-02 style-02 fw-300">
                  <p class="sm">ดูตำแหน่งอื่นๆ</p>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php
    $categories = [
      [
        'title' => 'Mini party' 
      ], [
        'title' => 'Activity'
      ], [
        'title' => 'Life Style'
      ]
    ]
  ?>

  <section data-section="7" class="section-08 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/33.jpg');"></div>
    <div class="container">
      <h3 class="text-center color-white xs-no-br lh-xs fw-600" data-aos="fade-up" data-aos-delay="0">
        มาสมัครและทำงานร่วมกันกับทีมเรา <br> ทีมเล็กๆ ที่ทำงานใหญ่ๆ 
      </h3>
      <div class="tab-container">
        <div class="tabs tabs-01" data-aos="fade-up" data-aos-delay="150">
          <?php foreach($categories as $j=>$k){?>
            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <p class="h6 title color-white"><?= $k['title'] ?></p>
            </a>
          <?php }?>
        </div>
        <div class="tab-contents">
          <?php foreach($categories as $j=>$k){?>
            <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
              <div class="content-container mt-6 pt-4" data-aos="fade-up" data-aos-delay="150">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php for($j=0; $j<12; $j++){?>
                      <div class="swiper-slide">
                        <div class="wrapper">
                          <div class="grids no-gap">
                            <?php for($i=0; $i<2; $i++){?>
                              <div class="grid lg-1-3 xs-50 mt-0">
                                <div class="p-1">
                                  <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                                    <div class="ss-img horizontal-03">
                                      <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                                    </div>
                                    <div class="hover-filter-01"></div>
                                    <div class="card-line-1"></div><div class="card-line-2"></div>
                                  </a>
                                </div>
                              </div>
                              <div class="grid lg-1-6 xs-50 mt-0">
                                <div class="p-1 h-full">
                                  <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                                    <div class="ss-img">
                                      <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                                    </div>
                                    <div class="hover-filter-01"></div>
                                    <div class="line-1"></div><div class="line-2"></div>
                                  </a>
                                </div>
                              </div>
                            <?php }?>
                            <?php for($i=0; $i<2; $i++){?>
                              <div class="grid lg-1-6 xs-50 mt-0">
                                <div class="p-1 h-full">
                                  <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                                    <div class="ss-img">
                                      <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                                    </div>
                                    <div class="hover-filter-01"></div>
                                    <div class="line-1"></div><div class="line-2"></div>
                                  </a>
                                </div>
                              </div>
                            <?php }?>
                            <?php for($i=0; $i<2; $i++){?>
                              <div class="grid lg-1-3 xs-50 mt-0">
                                <div class="p-1">
                                  <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                                    <div class="ss-img horizontal-03">
                                      <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                                    </div>
                                    <div class="hover-filter-01"></div>
                                    <div class="card-line-1"></div><div class="card-line-2"></div>
                                  </a>
                                </div>
                              </div>
                            <?php }?>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                  <div class="navigator white">
                    <div class="progress p color-white"></div>
                    <div class="line"></div>
                    <div class="dots"></div>
                  </div>
                </div>
                <div class="arrows">
                  <div class="arrow btn-icon-next">
                    <img src="public/img/icon/arrow-white-01.png" alt="Arrow" />
                  </div>
                  <div class="arrow btn-icon-next">
                    <img src="public/img/icon/arrow-white-02.png" alt="Arrow" />
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>