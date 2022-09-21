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
      <div class="grids">
        <div class="grid xl-20">
          <div class="ss-card ss-card-06">
            <div class="icon">

            </div>
          </div>
        </div>  
      </div>
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

  <section data-section="3" class="section-01 section-padding size-03">
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

 <section data-section="6" class="section-01 section-padding size-03">
    <div class="img-bg" style="background-image:url('public/img/bg/11.jpg'); background-position:top;"></div>  
    <div class="container">
      <h4 class="text-center color-white fw-600" data-aos="fade-up" data-aos-delay="0">
        Content Marketing <span class="color-01">Strategy</span>
      </h4> 
      <div class="ss-card-container jc-center">
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

  <section>
    <div class="grids no-gap">
      <?php for($i=0; $i<6; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0">
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
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

      <?php for($i=0; $i<7; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0">
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
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 sm-100 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

      <div class="grid lg-60 mt-0">
        <div class="grids no-gap height-full">
          <?php for($i=0; $i<3; $i++){?>
            <div class="grid lg-1-3 sm-100 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img  height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

      <div class="grid lg-40 md-100 sm-100 mt-0">
        <div class="grids no-gap">
          <div class="grid lg-100 sm-100 style-02 mt-0">
            <a class="ss-card ss-card-03 filter-01" href="#">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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
          <?php for($i=0; $i<2; $i++){?>
            <div class="grid lg-50 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

      <?php for($i=0; $i<2; $i++){?>
        <div class="grid lg-50 mt-0">
          <div class="grids no-gap">
            <div class="grid lg-70 md-50 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img horizontal-2 height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-03.jpg')"></div>
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
            <div class="grid lg-30 md-50 style-02 mt-0">
              <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img square height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-06.jpg')"></div>
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
          </div>
        </div>
      <?php }?>

      <?php for($i=0; $i<3; $i++){?>
        <div class="grid lg-1-3 style-02 mt-0">
          <a class="ss-card ss-card-03 filter-01" href="#">
          <div class="ss-img horizontal-2">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

      <div class="grid lg-20 style-02 mt-0">
        <a class="ss-card ss-card-03 height-full filter-01" href="#">
          <div class="ss-img horizontal-2 height-full">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-01.jpg')"></div>
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

      <div class="grid lg-50 style-02 mt-0">
        <a class="ss-card ss-card-03 height-full filter-01" href="#">
          <div class="ss-img height-full">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

      <div class="grid lg-30 mt-0">
        <div class="grids no-gap">
          <div class="grid lg-100 md-100 sm-100 style-02 mt-0">
            <a class="ss-card ss-card-03 filter-01" href="#">
              <div class="ss-img horizontal-2">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

          <div class="grid lg-50 style-02 mt-0">
            <a class="ss-card ss-card-03 height-full filter-01" href="#">
              <div class="ss-img horizontal-2 height-full">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

          <div class="grid lg-50 style-02 mt-0">
            <a class="ss-card ss-card-03 filter-01" href="#">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
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

  <section  data-section="4" class="section-02 section-padding" style="background:#000000">
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