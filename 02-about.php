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
            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
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
              <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                <div class="text-center">
                  <h1 class="h1 color-01 lh-xs fw-600 text-shadow"><?= $k['title'] ?></h1> 
                  <p class="h5 text-center color-01 fw-600 text-shadow mt-1">
                    บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
                  </p>
                  <p class="h5 sm fw-400 mt-2">
                    เราเป็นบริษัทที่ปรึกษา
                  </p>
                  <p class="h2 text-center lh-xs color-01 fw-600">
                    “กลยุทธ์ด้านดิจิตัล สำหรับภาครัฐแบบครบวงจร”
                  </p>
                  <p class="text-center sm-no-br fw-400 mt-2">
                    เรานำเสนอโซลูชั่นผ่านการให้คำปรึกษาด้านกลยุทธ์ทางดิจิทัลและเทคโนโลยี <br>
                    ที่ช่วยให้หน่วยงานหรือองค์กรได้ผลลัพธ์ที่ดีขึ้น เพื่อรับกับแนวทางการเปลี่ยนแปลงที่เกิดขึ้น
                  </p>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section 
    data-section="3" class="section-05 section-padding mh" 
    style="background-image:url('public/img/bg/03.jpg');" 
  >
    <div class="container">
      <div class="text-center color-white" data-aos="fade-up" data-aos-delay="0">
        <p class="lg">
          <span class="fw-500 mr-1">ประสบการณ์</span>มากกว่า
          <span class="fw-500">25 ปี</span>
        </p> 
        <p class="lg">
          ความสำเร็จของ<span class="fw-500">ลูกค้าของเรา</span>
          ทั้งหน่วยงานภาครัฐและเอกชน มากกว่า <span class="fw-500">400 หน่วยงาน</span>
        </p>  
        <p class="lg">
          รวม<span class="fw-500">ผลงาน</span>ต่างๆ มากกว่า <span class="fw-500">500 โครงการ</span>
        </p>
      </div>
      <div class="grids jc-center pt-5" data-aos="fade-up" data-aos-delay="300">
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
            <p class="h1 lg lh-2xs color-white counter fw-600">300</p>
            <h4 class="color-black fw-700 lh-xs">YEARS</h4>
          </div>
        </div>
      </div>
      <div class="text-center color-white mt-5" data-aos="fade-up" data-aos-delay="300">
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
        <h3 class="color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
          “มาตรฐาน มืออาชีพ”
        </h3>
        <p class="sm-no-br color-black fw-400 mt-1" data-aos="fade-up" data-aos-delay="150">
          บริษัทของเราประกอบด้วยผู้ที่ชอบการทำงานร่วมกัน ไม่ว่าทีมของเราจะอยู่ที่ใด เพื่อให้เราสามารถส่งมอบงานที่มีคุณภาพ <br>
          เราพัฒนาทักษะด้านกำลังคนขับเคลื่อนการปรับปรุงการปฏิบัติงาน และใช้วิธีการทำงานแบบใหม่ เพื่อเป้าหมายเดียวกัน <br>
          คือการทำงานด้วย <span class="fw-600">“มาตรฐานความ เป็นมืออาชีพ”</span> หรือ 
          <span class="fw-600">Professional Standard</span> จึงทำให้เราสามารถที่ <br>
          จะส่งมอบงานได้ตามคำมั่นสัญญา ด้วย<span class="fw-600">คุณภาพและมาตรฐานที่เหนือความคาดหมาย</span>
        </p>
      </div>
      <div class="mt-6 pt-2" data-aos="fade-up" data-aos-delay="300">
        <div class="ss-img horizontal-02 no-hover">
          <div class="img-bg" style="background-image:url('public/img/content/01.jpg');"></div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="5" class="section-padding">
    <div class="container">
      <div class="text-center">
        <h3 class="color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
          OUR AWARDS
        </h3>
        <p class="sm-no-br color-black fw-400 mt-1" data-aos="fade-up" data-aos-delay="150">
          <span class="fw-600">“Professional Standard”</span> คือคำที่ทีมงานใช้ในการสื่อสารและยึดมั่นในการทำงานร่วมกัน 
          ด้วยความมุ่งมั่นที่จะส่งมอบ <br> <span class="fw-600">“งานคุณภาพเหนือ ความคาดหมาย”</span> และ 
          <span class="fw-600">“ตรงต่อเวลา”</span> ให้กับลูกค้า ทำให้หลายปีที่ผ่านมา เราได้รับทั้งคำ <br> ชื่นชมและได้รับรางวัลต่าง ๆ 
          มากมายเกี่ยวกับผลิตภัณฑ์ ผลงานและงานบริการที่บริษัทฯ ได้เป็นผู้พัฒนา และ ส่งมอบงานคุณภาพให้กับลูกค้า
        </p>
      </div>
      <div class="grids no-gap pt-6" data-aos="fade-up" data-aos-delay="300">
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

  <section data-section="6" class="section-05 section-padding" style="background-image:url('public/img/bg/01.jpg');">
    <div class="container">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        WHY US
      </h3>
      <div class="grids jc-center pt-6" data-aos="fade-up" data-aos-delay="150">
        <div class="grid xl-40 lg-50 md-50 sm-100 mt-0">
          <ul class="ss-list-01 style-02">
            <li>	
              มากกว่าการ “รับจ้าง” คือเรา “ทำงาน” เราช่วยลูกค้าคิด วางแผน วิเคราะห์   
              เสมือนงานและเงินนั้นเป็นของทีมงานเราเอง 
            </li>
            <li>	
              เราไม่ได้แค่ทำตามที่ลูกค้าต้องการ หรือสั่งให้ทำ แต่เราจะให้ความรู้ ให้คำ
              ปรึกษาแนะนำ เพื่อพัฒนางานให้บรรลุเป้าหมายร่วมกัน 
            </li>
            <li>	
              “Professional Standard” คือมาตรฐานในการทำงานร่วมกันของทีมงาน
              เราและลูกค้าทุกราย 
            </li>
            <li>	
              เราทำงาน ด้วยการกลับ รับประกัน KPI, ROI ที่ตกลงร่วมกันกับลูกค้า
            </li>
          </ul> 
        </div>   
        <div class="grid xl-40 lg-50 md-50 sm-100 mt-0">
          <ul class="ss-list-01 style-02">
            <li>	
              เรามีเครื่องมือ และระบบโปรแกรม สำหรับใช้ในการบริหารจัดการ ระบบการ
              ทำงานทุกจุด เพื่อคุณภาพและมาตรฐานระดับสากล
            </li>
            <li>	
              เราใส่ใจในการคัดเลือกและพัฒนา ทีมงานของเราอย่างต่อเนื่องและปลูกฝัง
              ความเป็นมืออาชีพในการทำงาน
            </li>
            <li>	
              เรามีประสบการณ์ในการทำงาน Digital Business มานานกว่า 25 ปี
              การันตีด้วยผลงานและลูกค้ากว่า 500 โครงการ 
            </li>
            <li>	
              ทีมงานแบบจัดเต็ม ทุก Flow การทำงานตั้งแต่ต้นจนส่งมอบงาน  
            </li>
          </ul>
        </div> 
      </div>
    </div>
  </section>

  <section data-section="7" class="section-01 size-03">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section data-section="8" class="section-02 section-padding bg-black pb-0">
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