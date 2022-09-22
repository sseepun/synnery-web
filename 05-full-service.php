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
    <img class="img" src="public/img/bg/07.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="container">
      <div class="text-center color-01" data-aos="fade-up" data-aos-delay="0">
        <p class="h2 lh-3xs fw-600">Full Services</p>
        <h1 class="fw-600">Digital Marketing</h1>
      </div>
      <div class="grids" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<4; $i++){?>
          <div class="grid xl-25 lg-25 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-05 filter-01">
              <div class="ss-img vertical">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
              </div>
              <div class="text-container">
              <div class="title h5 color-01 lh-xs fw-500">
                ช่องทางการสื่อสาร
              </div>
              <div class="desc color-white fw-400">
                นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
                นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
              </div>
            </div>
            </a>
          </div>
        <?php }?>
      </div>
      <!-- come back to edit later -->
      <div class="grids">
        <div class="grid xl-20">
          <div class="ss-card ss-card-06">
            <div class="icon">

            </div>
          </div>
        </div>  
      </div>
      <!---------------------------->
    </div>
  </section>

  <section data-section="2" class="section-01 section-padding size-03">
    <div class="img-bg" style="background-image:url('public/img/bg/08.jpg');"></div>     
    <div class="container">
      <div class="text-center color-white" data-aos="fade-up" data-aos-delay="0">
        <h5 class="fw-200">
          เพราะหน่วยงานภาครัฐในปัจจุบัน <br>
          <span class="fw-400">ไม่ได้เน้นแค่การทำงานเชิงรับ</span>
        </h5>  
      </div> 
      <div class="ss-card ss-card-06 mt-2" data-aos="fade-up" data-aos-delay="150">
        <img class="img" src="public/img/content/chess.png" alt="Chess" />
      </div> 
      <div class="text-center color-white" data-aos="fade-up" data-aos-delay="300">
        <h5 class="xs-no-br fw-200">
          แต่จะต้องทำ<span class="h3 fw-400">เชิงรุก</span>และ<span class="h3 fw-400">วางกลยุทธ์</span>ด้านการตลาด 
          <br> ผ่านสื่อทั้งออนไลน์และออฟไลน์
        </h5>  
      </div>  
    </div> 
  </section>

  <section data-section="3" class="section-01 section-padding size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/09.jpg');"></div>     
    <div class="container">
      <div class="text-center color-white" data-aos="fade-up" data-aos-delay="0">
        <h5 class="color-black fw-300">
          วาง<span class="h3 color-01 fw-600"> Action Plan</span> และ 
          <span class="h3 color-01 fw-600">งบประมาณ</span>
        </h5>  
        <h5 class="color-black fw-300">
          รวมถึง <span class="h3 color-01 fw-600">Financial Plan</span> และ 
          <span class="h3 color-01 fw-600">Scenario Case</span> ต่างๆ
        </h5>
      </div>   
      <img class="img mt-4" data-aos="fade-up" data-aos-delay="150" src="public/img/content/01.png" alt="Image" />
    </div> 
  </section>

  <section data-section="4" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/10.jpg');"></div>
    <div class="container">
      <h3 class="text-center color-white mb-3 fw-600" data-aos="fade-up" data-aos-delay="0">
        Digital Business Analysis Services
      </h3>  
      <p class="text-center color-white md-no-br" data-aos="fade-up" data-aos-delay="0">
        บริการศึกษา ค้นคว้า สำรวจ ข้อมูล เพื่อนำมาวิเคราะห์ ประกอบการวางแผน มองหาจุดแข็ง จุดอ่อน จุดขาย ทั้งของธุรกิจเอง<br>
        และของคู่แข่งทั้งทางตรง และทางอ้อม ตั้งแต่ต้นจนจบของแผน Digital Business 
      </p>
      <div class="ss-box xl mt-4">
        <div class="grids" data-aos="fade-up" data-aos-delay="150">
          <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
            <ul class="ss-list-01">
              <li>Financial Analysis</li>
              <li>Target Analysis & Customer Journey</li>
              <li>STP Analysis and Setup</li>
              <li>Problem Analysis</li>
              <li>Pain Point Analysis</li>
              <li>Benchmark & Referral</li>
              <li>Customer Voice Analysis</li>
            </ul> 
          </div>   
          <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
            <ul class="ss-list-01">
              <li>4P,7P, 7C, 5Force, SWOT Analysis</li>
              <li>Value-Added & Marketing Funnel</li>
              <li>CRM & Sales Force Planning & Implementation</li>
              <li>KPI (Key Performance indicators)</li>
              <li>BEP (Break Even Point)</li>
              <li>ROI (Return on Investment)</li>
            </ul>
          </div> 
        </div>  
      </div>   
    </div>
  </section>

  <section data-section="5" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block style-02">
          <div class="img-bg" style="background-image:url('public/img/content/15.jpg');"></div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
            <div class="text-wrapper ss-text-wrapper md">
              <?php for($number=1; $number<=6; $number++){?>
                <div class="ss-card ss-card-07" data-aos="fade-up" data-aos-delay="0">
                  <div class="number-container">
                    <p class="h4"><?php echo $number ?></p>
                  </div>
                  <div class="text-container">
                    <p class="title">
                      วางแผนกลยุทธ์และแนวทางการดำเนินการสื่อสารประชาสัมพันธ์ ทั้ง ออนไลน์​และออฟไลน์ ผ่านสื่อต่างๆ 
                    </p>
                  </div>
                </div>
              <?php }?>
          </div>
          </div>
        </div> 
      </div>    
    </div>
 </section>

 <section data-section="6" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/11.jpg');"></div>  
    <div class="container">
      <h4 class="text-center color-white mt-6 pt-3 fw-600" data-aos="fade-up" data-aos-delay="0">
        Content Marketing <span class="color-01">Strategy</span>
      </h4> 
      <div class="ss-card-container jc-center" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<22; $i++){?>
          <div class="ss-card ss-card-08">
            <div class="wrapper">
              <div class="icon">
                <em class="fa-solid fa-heart"></em>
              </div>
              <div class="text-container">
                <p class="title xs">Animation & Multimedia</p>
              </div>
            </div>
          </div>  
        <?php }?>
      </div>        
    </div>  
  </section>

  <section data-section="7" class="section-04">
    <div class="grids no-gap">
      <?php for($i=0; $i<6; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0" data-aos="fade-up" data-aos-delay="0">
          <a class="ss-card ss-card-09" href="#">
            <div class="ss-img horizontal-2 no-hover">
               <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
               <div class="hover-container op-100">
                  <div class="icon">
                    <img src="public/img/icon/play.png" alt="Hover Icon" />
                  </div>
                </div>
            </div>
          </a>
        </div>
      <?php }?> 

      <div class="grid lg-1-3 mt-0">
        <div class="grids no-gap height-full" data-aos="fade-up" data-aos-delay="0">
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="#">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <?php for($i=0; $i<7; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0" data-aos="fade-up" data-aos-delay="150">
          <a class="ss-card ss-card-09" href="#">
            <div class="ss-img horizontal-2 no-hover">
               <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
               <div class="hover-container op-100">
                  <div class="icon">
                    <img src="public/img/icon/play.png" alt="Hover Icon" />
                  </div>
                </div>
            </div>
          </a>
        </div>
      <?php }?>

      <div class="grid lg-1-3 mt-0" data-aos="fade-up" data-aos-delay="150">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 sm-100 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="#">
              <div class="ss-img height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <div class="grid lg-60 mt-0 bg-black" data-aos="fade-up" data-aos-delay="150">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<3; $i++){?>
            <div class="grid lg-1-3 sm-100 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="#">
              <div class="ss-img height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <div class="grid lg-40 md-100 sm-100 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <div class="grids no-gap">
          <div class="grid lg-100 sm-100 style-02 mt-0">
            <a class="ss-card ss-card-03" href="#">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
              <a class="ss-card ss-card-03 height-full" href="#">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>

      <?php for($i=0; $i<2; $i++){?>
        <div class="grid lg-50 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
          <div class="grids no-gap">
            <div class="grid lg-70 md-50 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full" href="#">
              <div class="ss-img horizontal-2 height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-03.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
            <div class="grid lg-30 md-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
              <a class="ss-card ss-card-03 height-full" href="#">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-06.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              </a>
            </div>
          </div>
        </div>
      <?php }?>

      <?php for($i=0; $i<3; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
          <a class="ss-card ss-card-03" href="#">
          <div class="ss-img horizontal-2">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
          </div>
          <div class="icon">
            <em class="fa-solid fa-plus"></em>
          </div>
          </a>
        </div>
      <?php }?>

      <div class="grid lg-20 style-02 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <a class="ss-card ss-card-03 height-full" href="#">
          <div class="ss-img horizontal-2 height-full">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-01.jpg')"></div>
          </div>
          <div class="icon">
            <em class="fa-solid fa-plus"></em>
          </div>
        </a>
      </div>

      <div class="grid lg-50 style-02 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <a class="ss-card ss-card-03 height-full" href="#">
          <div class="ss-img height-full">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
          </div>
          <div class="icon">
            <em class="fa-solid fa-plus"></em>
          </div>
        </a>
      </div>

      <div class="grid lg-30 mt-0 bg-black" data-aos="fade-up" data-aos-delay="300">
        <div class="grids no-gap">
          <div class="grid lg-100 md-100 sm-100 style-02 mt-0">
            <a class="ss-card ss-card-03 filter-01" href="#">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>

          <div class="grid lg-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
            <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img horizontal-2 height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>

          <div class="grid lg-50 style-02 mt-0" data-aos="fade-up" data-aos-delay="300">
            <a class="ss-card ss-card-03 filter-01" href="#">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="8" class="section-01 size-02 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/12.jpg');"></div> 
    <div class="container">
      <div class="text-center">
        <h4 class="color-01 text-center lh-sm fw-500" data-aos="fade-up" data-aos-delay="0">
          Channel & Media Planning
        </h4> 
        <p class="color-white fw-200" data-aos="fade-up" data-aos-delay="150">
          เพราะสื่อทุกสื่อมี Brand Character และกลุ่มเป้าหมายของตัวเอง ดังนั้นการวางแผนใช้สื่อ 
          ว่าจะใช้ช่องทางไหน ใช้แบบไหน ใช้ เลือกยังไง จึงต้องอาศัย
        </p>
        <p class="h2 color-01 lh-3xs fw-500 mt-3" data-aos="fade-up" data-aos-delay="300">
          Professional
        </p>
        <p class="lg color-white fw-300" data-aos="fade-up" data-aos-delay="350">
          ที่จะคอยคิด วางแผน และช่วยดูแล
        </p>
      </div>
      <div class="ss-box xl mt-4" data-aos="fade-up" data-aos-delay="400">
        <div class="grids jc-center">
          <?php for($i=0; $i<10; $i++){?>
            <div class="grid lg-20 md-1-3 sm-50 xs-50">
              <div class="ss-card ss-card-10 mt-2">
                <div class="icon">
                  <!-- ไอคอนต้องเปลี่ยนเป็นรูปภาพ จะกลับมาแก้ไขให้ในภายหลังครับ -->
                  <em class="fa-solid fa-heart"></em>
                </div>
                <div class="text-container">
                  <p class="xs title color-white mt-2">Google AdWords</p>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>    
  </section>

  <section data-section="5" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-wrapper ss-text-wrapper md style-02">
            <h3 class="color-01 lh-2xs fw-500" data-aos="fade-up" data-aos-delay="0">
              Maintenance <br> Management
            </h3>
            <div class="ss-card ss-card-11 mt-4" data-aos="fade-up" data-aos-delay="150">
              <div class="text-container color-02">
                <a class="title text-uppercase fw-600" href="#">Monitoring</a>
                <p class="desc fw-400">
                  ด้วยเครื่องมือด้าน Digital Business / Digital Marketing
                </p>
              </div>
            </div>
            <div class="ss-card ss-card-11 mt-4" data-aos="fade-up" data-aos-delay="300">
              <div class="text-container color-02">
                <a class="title text-uppercase fw-600" href="#">Optimization</a>
                <p class="desc fw-400">
                  ทั้งการปรับแต่งโดยผู้เชี่ยวชาญ ที่มีประสบการณ์ และเทคโนโลยี AI
                  (Artificial Intelligence) ที่จะทำให้การปรับแต่ง มีประสิทธิภาพ ประสิทธิผล
                </p>
              </div>
            </div>
            <div class="ss-card ss-card-11 mt-4" data-aos="fade-up" data-aos-delay="450">
              <div class="text-container color-02">
                <a class="title text-uppercase fw-600" href="#">Suggestion</a>
                <p class="desc fw-400">
                  คำแนะนำ จากผู้เชี่ยวชาญ นักการตลาด นักกลยุทธ์ ที่จะคอยให้ความช่วย
                  เหลือตลอดโครงการ
                </p>
              </div>
            </div>
            <div class="ss-card ss-card-11 mt-4" data-aos="fade-up" data-aos-delay="600">
              <div class="text-container color-02">
                <a class="title text-uppercase fw-600" href="#">Reporting</a>
                <p class="desc fw-400">
                  รายงานทั้งแบบ PDF, Graph และการเข้ามาดูระบบ Monitoring ด้วยตัวคุณเอง ไร้การปรับแต่ง Report ใดๆ
                </p>
              </div>
            </div>
          </div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
            <div class="img-bg" style="background-image:url('public/img/bg/13.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
 </section>

 <section data-section="6" class="section-05 section-padding size-02" style="background-image:url('public/img/bg/14.jpg');">
  <div class="container">
    <div class="text-center">
      <h3 class="color-01 text-uppercase fw-600" data-aos="fade-up" data-aos-delay="0">KPI</h3>    
      <p class="h4 color-01 fw-400" data-aos="fade-up" data-aos-delay="150">
        (Key Performance Indicator)
      </p>  
      <p class="color-white xs-no-br fw-100" data-aos="fade-up" data-aos-delay="300">
        หลากหลายตัวเลือกในการวัดผล ความคุ้มค่าของการลงทุนด้าน <br>
        Digital Business / Digital Marketing ที่ไม่เน้นแค่จำนวนคนดู (View), หรือจำนวน Like
      </p>
      <p class="h6 color-01 fw-400 mt-2" data-aos="fade-up" data-aos-delay="350">
        แต่เรามุ่งเน้นไปที่ Value ที่แท้จริงของทุกโครงการ
      </p>
    </div> 
    <div class="grids" data-aos="fade-up" data-aos-delay="500">
      <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
        <ul class="ss-list-01 style-02">
          <li class="fw-200">	
            Impression จำนวนการแสดงผล ที่ปรากฏใน Feed หรือ Time line ของ
            ผู้ใช้วัดผลตามช่วง สัปดาห์ เดือน ไตรมาส หรือเปรียบเทียบก่อนหน้า
          </li>
          <li class="fw-200">	
            Audience Growth Rate หรืออัตราการเติบโตของ
            กลุ่มเป้าหมายตามช่วงเวลาที่วางไว้
          </li>
          <li class="fw-200">	
            Post Reach จำนวนคนที่เห็น Post ของเราตั้งแต่เริ่มเผยแพร่ออกไป
          </li>
          <li class="fw-200">	
            Applause Rate การเปรียบเทียบ คนที่กดไลค์ เทียบกับผู้ติดตามทั้งหมด
            ว่า มีสัดส่วนเป็นเท่าไหร่ เติบโตยังไง ตามช่วงเวลา
          </li>
          <li class="fw-200">	
            Conversion Rate เป็น % สำหรับใช้วัดจำนวนคนที่ลงมือทำบางสิ่งบาง
            อย่างตามที่เราวางไว้ (Take Action)
          </li>
          <li class="fw-200">	
            Cost Per Click (CPP) ตัวเลขสัดส่วนที่จะบอกว่าเราใช้เงินไปเท่าไหร่ต่อการ
            คลิ๊กหนึ่งครั้ง จากโฆษณาของเรา
          </li>
          <li class="fw-200">	
            Cost Per Thousand Impressions (CPM) คือจำนวนเงินที่เราจ่ายไป
            สำหรับการที่จะทำให้คน 1000 คนเห็น Ads. ของเรา ยอดรวมของใบเสนอ
            ราคา จาก Campaign หรือ ช่วงระยะเวลา
          </li>
          <li class="fw-200">	
            กำไร (Profit) ที่ได้จากสื่อต่างๆ หรือจาก Campaign
          </li>
        </ul> 
      </div>   
      <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
        <ul class="ss-list-01 style-02">
          <li class="fw-200">	
            การแสดงผล (Impression)Amplification Rate เป็น % เปรียบเทียบเนื้อหา
            ว่าเรื่องไหนมีการแชร์ กันมากที่สุด
          </li>
          <li class="fw-200">	
            Virality Rate เป็น % การเปรียบเทียบจำนวนคนที่แชร์โพสต์ เทียบกับ
            จำนวนการแสดงผล (Impression)
          </li>
          <li class="fw-200">	
            Social Media Conversion Rate คือตัวเลขสัดส่วนที่จะบอกว่า %ลฃ
            Conversion Rate ทั้งหมดจาก Social Media ของเราเป็นเท่าไหร่
          </li>
          <li class="fw-200">	
            จำนวนสมาชิก (Member Profile) ที่เพิ่มขึ้นจาก Campaign หรือตาม
            ช่วงเวลา
          </li>
          <li class="fw-200">	
            Bounce Rate หรือ สัดส่วนของคนที่เข้ามาที่เว็บไซต์หรือ Landing Page
            แล้วไม่ได้ทำอะไรต่อ
          </li>
          <li class="fw-200">	
            จำนวนผู้เช้าชม เว็บไซต์ หรือ Campaign ทั้งจาก Online ต่างๆ 
            และ Social Media
          </li>
          <li class="fw-200">	
            จำนวนการติดต่อ หรือขอใบเสนอราคา
          </li>
          <li class="fw-200">	
            Bounce Rate หรือ สัดส่วนของคนที่เข้ามาที่เว็บไซต์หรือ Landing Page
            แล้วไม่ได้ทำอะไรต่อ
          </li>
        </ul>
      </div> 
    </div>
  </div>
  </section>

  <section data-section="7" class="section-06 section-padding bg-01">
      <h4 class="lg color-white text-center fw-100" data-aos="fade-up" data-aos-delay="0">
      ตัวอย่าง<span class="fw-400">ผลงาน</span>บางส่วนของเรา
      </h4>     
      <div class="swiper-container mt-4" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<12; $i++){?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-12 filter-01" href="#">
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+7) ?>.jpg');"></div>
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

  <section class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns d-flex jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section data-section="4" class="section-02 section-padding" style="background:#000000">
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