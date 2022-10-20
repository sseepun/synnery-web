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
    <img class="img" src="public/img/bg/07.jpg" alt="Banner" />
  </section>

  <?php 
    $titles = ["วิเคราะห์", "ช่องทางการสือสาร", "สร้าง Content", "เพิ่มประสิทธิภาพ"]
  ?>

  <section data-section="2" class="section-01 section-padding">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero" />
      </div>
    </div>
    <div class="container">
      <div class="text-center color-01 pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="0">
        <p class="h2 lh-2xs fw-600">Full Services</p>
        <h1 class="fw-600 lh-xs text-shadow">Digital Marketing</h1>
      </div>
      <div class="grids pt-6 pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<4; $i++){?>
          <div class="grid xl-25 lg-25 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-05">
              <div class="ss-img vertical-01">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-1<?= ($i%4+6) ?>.jpg');"></div>
              </div>
              <div class="filter-02"></div>
              <div class="hover-filter-01"></div>
              <div class="text-container">
                <div class="title h5 color-01 lh-xs fw-500">
                  <?php echo $titles[$i] ?>
                </div>
                <div class="desc p sm color-white fw-400">
                  นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
                  นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
                </div>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
            </a>
          </div>
        <?php }?>
      </div>
      <div class="social-blocks" data-aos="fade-up" data-aos-delay="0">
        <?php for($i=0; $i<5; $i++){?>
          <div class="social-block">
            <div class="ss-card ss-card-36">
              <div class="icon">
                <img class="inactive" src="public/img/icon/social-0<?= ($i%5+1) ?>.png" alt="Icon Inactive" />
                <img class="active" src="public/img/icon/active-social-0<?= ($i%5+1) ?>.png" alt="Icon Active" />
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-01 section-padding size-03">
    <div class="img-bg" style="background-image:url('public/img/bg/08.jpg');"></div>     
    <div class="container">
      <div class="text-center color-white" data-aos="fade-up" data-aos-delay="0">
        <h5 class="fw-200">
          เพราะหน่วยงานภาครัฐในปัจจุบัน <br>
          <span class="fw-400">ไม่ได้เน้นแค่การทำงานเชิงรับ</span>
        </h5>  
      </div>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <div class="ss-card ss-card-06">
          <img class="img" src="public/img/content/chess.png" alt="Chess" />
        </div>
      </div>
      <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="300">
        <h5 class="xs-no-br color-white fw-200">
          แต่จะต้องทำ<span class="h3 fw-400">เชิงรุก</span>และ<span class="h3 fw-400">วางกลยุทธ์</span>ด้านการตลาด 
          <br> ผ่านสื่อทั้งออนไลน์และออฟไลน์
        </h5>  
      </div>  
    </div> 
  </section>

  <section data-section="4" class="section-01 section-padding">
    <div class="pattern style-33">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-19.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-34">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-20.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-35">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-21.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/09.jpg');"></div>     
    <div class="container">
      <div class="text-center color-white pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="0">
        <h5 class="color-black fw-300 lh-xs">
          วาง <span class="h3 color-01 fw-600 lh-xs">Action Plan</span> และ 
          <span class="h3 color-01 fw-600 lh-xs">งบประมาณ</span>
        </h5>  
        <h5 class="color-black fw-300 lh-xs">
          รวมถึง <span class="h3 color-01 fw-600 lh-xs">Financial Plan</span> และ 
          <span class="h3 color-01 fw-600 lh-xs">Scenario Case</span> ต่างๆ
        </h5>
      </div>
      <div class="grids jc-center pt-3 pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="150">
        <div class="grid xl-80 sm-100">
          <img class="img" src="public/img/content/01.png" alt="Image" />
        </div>
      </div>
    </div> 
  </section>

  <section data-section="5" class="section-01 section-padding">
    <div class="pattern style-01">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-03">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-03.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-04">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-04.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-05">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-05.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-06">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-06.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/62.jpg');"></div>
    <div class="container">
      <h3 class="text-center color-white fw-600" data-aos="fade-up" data-aos-delay="0">
        Digital Business Analysis Services
      </h3>  
      <p class="text-center color-white md-no-br mt-3" data-aos="fade-up" data-aos-delay="150">
        บริการศึกษา ค้นคว้า สำรวจ ข้อมูล เพื่อนำมาวิเคราะห์ ประกอบการวางแผน มองหาจุดแข็ง จุดอ่อน จุดขาย ทั้งของธุรกิจเอง<br>
        และของคู่แข่งทั้งทางตรง และทางอ้อม ตั้งแต่ต้นจนจบของแผน Digital Business 
      </p>
      <div class="ss-box xl mt-6 pt-2">
        <div class="grids jc-center" data-aos="fade-up" data-aos-delay="300">
          <div class="grid xl-45 sm-50 xs-100 mt-0">
            <ul class="ss-list-01">
              <li class="mt-3">Financial Analysis</li>
              <li class="mt-3">Target Analysis & Customer Journey</li>
              <li class="mt-3">STP Analysis and Setup</li>
              <li class="mt-3">Problem Analysis</li>
              <li class="mt-3">Pain Point Analysis</li>
              <li class="mt-3">Benchmark & Referral</li>
              <li class="mt-3">Customer Voice Analysis</li>
            </ul> 
          </div>   
          <div class="grid xl-45 sm-50 xs-100 mt-0">
            <ul class="ss-list-01">
              <li class="mt-3">4P,7P, 7C, 5Force, SWOT Analysis</li>
              <li class="mt-3">Value-Added & Marketing Funnel</li>
              <li class="mt-3">CRM & Sales Force Planning & Implementation</li>
              <li class="mt-3">KPI (Key Performance indicators)</li>
              <li class="mt-3">BEP (Break Even Point)</li>
              <li class="mt-3">ROI (Return on Investment)</li>
            </ul>
          </div> 
        </div>  
      </div>   
    </div>
  </section>

  <?php 
    $titles = [
      'วางแผนกลยุทธ์และแนวทางการดำเนินการสื่อสารประชาสัมพันธ์ ทั้ง ออนไลน์​และออฟไลน์ ผ่านสื่อต่างๆ',
      'สร้างเนื้อหาในรูปแบบต่างๆ เพื่อให้เหมาะกับช่องทางการสื่อสารที่เลือก',
      'กำหนดกลุ่มเป้าหมาย และสื่อเป้าหมาย พร้อมตัวชี้วัดโครงการ',
      'วางแผนการใช้สื่อและเครื่องมือด้านการตลาดทั้งออนไลน์ ออฟไลน์ ของทั้งโครงการ',
      'สร้าง Community ระหว่างกลุ่มเป้าหมาย เพื่อให้เกิดสังคมออนไลน์เฉพาะกลุ่ม (Social Private Network)',
      'พัฒนาเครื่องมือด้านการตลาดต่างๆ ระบบ Web Application, Mobile Application ต่างๆ'
    ]
  ?>

  <section data-section="6" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/15.jpg');"></div>
          </div>
        </div> 
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container md" data-aos="fade-up" data-aos-delay="0">
            <?php for($i=0; $i<=5; $i++){?>
              <div class="ss-card ss-card-07">
                <div class="number-container">
                  <p class="h4"><?php echo $i+1  ?></p>
                </div>
                <div class="text-container">
                  <p class="title">
                    <?php echo $titles[$i] ?> 
                  </p>
                </div>
              </div>
            <?php }?>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <section data-section="7" class="section-01 section-padding">
    <div class="pattern style-41">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-28.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-42">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-23.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-43">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-25.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-44">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-24.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-45">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-26.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/11.jpg');"></div>  
    <div class="container">
      <h3 class="text-center color-white fw-600" data-aos="fade-up" data-aos-delay="0">
        Content Marketing <span class="color-01">Strategy</span>
      </h3>
      <div class="ss-box xxl pt-6 pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="150">
        <div class="gallery-grids jc-center" >
          <?php for($i=0; $i<22; $i++){?>
            <div class="grid lg-1-6 md-20 sm-1-3 xs-50">
              <div class="ss-card ss-card-08">
                <div class="icon">
                  <em class="fa-solid fa-heart"></em>
                </div>
                <div class="text-container">
                  <p class="title xs fw-500 text-center">
                    Animation & Multimedia
                  </p>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
    </div>  
  </section>

  <section data-section="8">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          ตัวอย่าง<span class="fw-600">สื่อ</span> หรือ 
          <span class="fw-600">Content</span> รูปแบบต่างๆ
        </h3>
      </div>
    </div>

    <div class="p-1">
      <div class="grids no-gap">
        <?php for($i=0; $i<15; $i++){?>
          <div class="grid md-1-3 <?= $i==14? 'sm-100': '' ?> mt-0" data-aos="fade-up" data-aos-delay="0">
            <div class="p-1">
              <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img horizontal-03">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
                </div>
                <div class="hover-filter-01"></div>
                <div class="card-icon">
                  <div class="icon">
                    <img class="img" src="public/img/icon/play.png" alt="Banner" />
                  </div>
                </div>
                <div class="card-line-1"></div><div class="card-line-2"></div>
              </a>
            </div>
          </div>
        <?php }?>
      </div>
    </div>

    <div class="p-1 bg-black">
      <div class="grids no-gap">
        <div class="grid lg-2-3 sm-100 mt-0">
          <div class="grids no-gap">
            <?php for($i=0; $i<3; $i++){?>
              <div class="grid sm-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
                <div class="p-1">
                  <a class="ss-card ss-card-03 style-03" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                    </div>
                    <div class="hover-filter-01"></div>
                    <div class="icon">
                      <em class="fa-solid fa-plus"></em>
                    </div>
                    <div class="line-1"></div><div class="line-2"></div>
                  </a>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="grid lg-1-3 sm-100 mt-0">
          <div class="grids no-gap">
            <div class="grid lg-100 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                  <div class="ss-img horizontal-03">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="card-icon">
                    <div class="icon">
                      <img class="img" src="public/img/icon/play.png" alt="Banner" />
                    </div>
                  </div>
                  <div class="card-line-1"></div><div class="card-line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <?php for($i=0; $i<2; $i++){?>
          <div class="grid lg-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
            <div class="p-1">
              <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img horizontal-03">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                </div>
                <div class="hover-filter-01"></div>
                <div class="card-icon">
                  <div class="icon">
                    <img class="img" src="public/img/icon/play.png" alt="Banner" />
                  </div>
                </div>
                <div class="card-line-1"></div><div class="card-line-2"></div>
              </a>
            </div>
          </div>
          <div class="grid lg-1-6 mt-0" data-aos="fade-up" data-aos-delay="0">
            <div class="p-1 h-full">
              <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                </div>
                <div class="hover-filter-01"></div>
                <div class="icon">
                  <em class="fa-solid fa-plus"></em>
                </div>
                <div class="line-1"></div><div class="line-2"></div>
              </a>
            </div>
          </div>
        <?php }?>

        <?php for($i=0; $i<3; $i++){?>
          <div class="grid md-1-3 <?= $i==2? 'sm-100': '' ?> mt-0" data-aos="fade-up" data-aos-delay="0">
            <div class="p-1">
              <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                <div class="ss-img horizontal-03">
                  <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
                </div>
                <div class="hover-filter-01"></div>
                <div class="card-icon">
                  <div class="icon">
                    <img class="img" src="public/img/icon/play.png" alt="Banner" />
                  </div>
                </div>
                <div class="card-line-1"></div><div class="card-line-2"></div>
              </a>
            </div>
          </div>
        <?php }?>

        <div class="grid lg-2-3 sm-100 mt-0">
          <div class="grids no-gap">
            <div class="grid sm-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card ss-card-03 style-03" href="public/img/content/unsplash-0<?= (0%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= (0%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid sm-2-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card ss-card-03 style-04" href="public/img/content/unsplash-0<?= (1%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= (1%6+3) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="grid lg-1-3 sm-100 mt-0">
          <div class="grids no-gap">
            <div class="grid lg-100 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1">
                <a class="ss-card" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" data-fancybox>
                  <div class="ss-img horizontal-03">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+2) ?>.jpg');"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="card-icon">
                    <div class="icon">
                      <img class="img" src="public/img/icon/play.png" alt="Banner" />
                    </div>
                  </div>
                  <div class="card-line-1"></div><div class="card-line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
            <div class="grid lg-50 md-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
              <div class="p-1 h-full">
                <a class="ss-card ss-card-03 style-02" href="public/img/content/unsplash-0<?= ($i%6+3) ?>.jpg" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg')"></div>
                  </div>
                  <div class="hover-filter-01"></div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                  <div class="line-1"></div><div class="line-2"></div>
                </a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section data-section="9" class="section-01 section-padding">
    <div class="pattern style-26">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-27">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-28">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-03.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-29">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-04.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-30">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-05.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-31">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-06.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/12.jpg');"></div> 
    <div class="container">
      <div class="text-center" data-aos="fade-up" data-aos-delay="0">
        <h4 class="lg color-01 text-center fw-600">
          Channel & Media Planning
        </h4> 
        <p class="color-white fw-200">
          เพราะสื่อทุกสื่อมี Brand Character และกลุ่มเป้าหมายของตัวเอง ดังนั้นการวางแผนใช้สื่อ 
          ว่าจะใช้ช่องทางไหน ใช้แบบไหน ใช้ เลือกยังไง จึงต้องอาศัย
        </p>
      </div>
      <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="150">
        <p class="h2 color-01 lh-xs fw-600">
          Professional
        </p>
        <p class="lg color-white fw-300">
          ที่จะคอยคิด วางแผน และช่วยดูแล
        </p>
      </div>
      <div class="ss-box xl mt-6" data-aos="fade-up" data-aos-delay="300">
        <div class="grids jc-center">
          <?php for($i=0; $i<10; $i++){?>
            <div class="grid lg-20 md-20 sm-1-3 xs-50 pt-3">
              <a class="ss-card ss-card-10" href="#">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/media-01.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/media-01-active.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title mt-2">Google AdWords</p>
                </div>
              </a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>    
  </section>

  <section data-section="10" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="text-container md">
            <h3 class="color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
              Maintenance <br> Management
            </h3>
            <div data-aos="fade-up" data-aos-delay="150">
              <div class="ss-card ss-card-11 mt-6">
                <div class="text-container color-02">
                  <a class="title text-uppercase fw-600" href="#">Monitoring</a>
                  <p class="desc fw-400">
                    ด้วยเครื่องมือด้าน Digital Business / Digital Marketing
                  </p>
                </div>
              </div>
              <div class="ss-card ss-card-11 mt-4">
                <div class="text-container color-02">
                  <a class="title text-uppercase fw-600" href="#">Optimization</a>
                  <p class="desc fw-400">
                    ทั้งการปรับแต่งโดยผู้เชี่ยวชาญ ที่มีประสบการณ์ และเทคโนโลยี AI
                    (Artificial Intelligence) ที่จะทำให้การปรับแต่ง มีประสิทธิภาพ ประสิทธิผล
                  </p>
                </div>
              </div>
              <div class="ss-card ss-card-11 mt-4">
                <div class="text-container color-02">
                  <a class="title text-uppercase fw-600" href="#">Suggestion</a>
                  <p class="desc fw-400">
                    คำแนะนำ จากผู้เชี่ยวชาญ นักการตลาด นักกลยุทธ์ ที่จะคอยให้ความช่วย
                    เหลือตลอดโครงการ
                  </p>
                </div>
              </div>
              <div class="ss-card ss-card-11 mt-4">
                <div class="text-container color-02">
                  <a class="title text-uppercase fw-600" href="#">Reporting</a>
                  <p class="desc fw-400">
                    รายงานทั้งแบบ PDF, Graph และการเข้ามาดูระบบ Monitoring ด้วยตัวคุณเอง ไร้การปรับแต่ง Report ใดๆ
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/bg/13.jpg');"></div>
          </div>
        </div>
      </div>    
    </div>
  </section>

  <section data-section="11" class="section-05 mh section-padding" style="background-image:url('public/img/bg/14.jpg');">
    <div class="container">
      <div class="text-center">
        <div data-aos="fade-up" data-aos-delay="0">
          <h1 class="color-01 fw-600 lh-3xs">KPI</h1>
          <h4 class="color-01 fw-500 lh-sm">(Key Performance Indicator)</h4>
        </div>
        <div data-aos="fade-up" data-aos-delay="150">
          <p class="color-white xs-no-br fw-100 mt-3">
            หลากหลายตัวเลือกในการวัดผล ความคุ้มค่าของการลงทุนด้าน <br>
            Digital Business / Digital Marketing ที่ไม่เน้นแค่จำนวนคนดู (View), หรือจำนวน Like
          </p>
          <h5 class="color-01 fw-500 mt-3">
            แต่เรามุ่งเน้นไปที่ Value ที่แท้จริงของทุกโครงการ
          </h5>
        </div>
      </div> 
      <div class="grids pt-6" data-aos="fade-up" data-aos-delay="300">
        <div class="grid mt-0">
          <ul class="ss-list-01 style-02">
            <li class="fw-200 mt-3">	
              Impression จำนวนการแสดงผล ที่ปรากฏใน Feed หรือ Time line ของ
              ผู้ใช้วัดผลตามช่วง สัปดาห์ เดือน ไตรมาส หรือเปรียบเทียบก่อนหน้า
            </li>
            <li class="fw-200 mt-3">	
              Audience Growth Rate หรืออัตราการเติบโตของ
              กลุ่มเป้าหมายตามช่วงเวลาที่วางไว้
            </li>
            <li class="fw-200 mt-3">	
              Post Reach จำนวนคนที่เห็น Post ของเราตั้งแต่เริ่มเผยแพร่ออกไป
            </li>
            <li class="fw-200 mt-3">	
              Applause Rate การเปรียบเทียบ คนที่กดไลค์ เทียบกับผู้ติดตามทั้งหมด
              ว่า มีสัดส่วนเป็นเท่าไหร่ เติบโตยังไง ตามช่วงเวลา
            </li>
            <li class="fw-200 mt-3">	
              Conversion Rate เป็น % สำหรับใช้วัดจำนวนคนที่ลงมือทำบางสิ่งบาง
              อย่างตามที่เราวางไว้ (Take Action)
            </li>
            <li class="fw-200 mt-3">	
              Cost Per Click (CPP) ตัวเลขสัดส่วนที่จะบอกว่าเราใช้เงินไปเท่าไหร่ต่อการ
              คลิ๊กหนึ่งครั้ง จากโฆษณาของเรา
            </li>
            <li class="fw-200 mt-3">	
              Cost Per Thousand Impressions (CPM) คือจำนวนเงินที่เราจ่ายไป
              สำหรับการที่จะทำให้คน 1000 คนเห็น Ads. ของเรา ยอดรวมของใบเสนอ
              ราคา จาก Campaign หรือ ช่วงระยะเวลา
            </li>
            <li class="fw-200 mt-3">	
              กำไร (Profit) ที่ได้จากสื่อต่างๆ หรือจาก Campaign
            </li>
          </ul> 
        </div>   
        <div class="grid mt-0">
          <ul class="ss-list-01 style-02">
            <li class="fw-200 mt-3">	
              การแสดงผล (Impression)Amplification Rate เป็น % เปรียบเทียบเนื้อหา
              ว่าเรื่องไหนมีการแชร์ กันมากที่สุด
            </li>
            <li class="fw-200 mt-3">	
              Virality Rate เป็น % การเปรียบเทียบจำนวนคนที่แชร์โพสต์ เทียบกับ
              จำนวนการแสดงผล (Impression)
            </li>
            <li class="fw-200 mt-3">	
              Social Media Conversion Rate คือตัวเลขสัดส่วนที่จะบอกว่า %ลฃ
              Conversion Rate ทั้งหมดจาก Social Media ของเราเป็นเท่าไหร่
            </li>
            <li class="fw-200 mt-3">	
              จำนวนสมาชิก (Member Profile) ที่เพิ่มขึ้นจาก Campaign หรือตาม
              ช่วงเวลา
            </li>
            <li class="fw-200 mt-3">	
              Bounce Rate หรือ สัดส่วนของคนที่เข้ามาที่เว็บไซต์หรือ Landing Page
              แล้วไม่ได้ทำอะไรต่อ
            </li>
            <li class="fw-200 mt-3">	
              จำนวนผู้เช้าชม เว็บไซต์ หรือ Campaign ทั้งจาก Online ต่างๆ 
              และ Social Media
            </li>
            <li class="fw-200 mt-3">	
              จำนวนการติดต่อ หรือขอใบเสนอราคา
            </li>
            <li class="fw-200 mt-3">	
              Bounce Rate หรือ สัดส่วนของคนที่เข้ามาที่เว็บไซต์หรือ Landing Page
              แล้วไม่ได้ทำอะไรต่อ
            </li>
          </ul>
        </div> 
      </div>
    </div>
  </section>

  <section data-section="12" class="section-06 section-padding pb-3 mb-3 bg-p">
    <div class="container">
      <h3 class="color-white text-center fw-100" data-aos="fade-up" data-aos-delay="0">
        ตัวอย่าง<span class="fw-500">ผลงาน</span>บางส่วนของเรา
      </h4>
    </div>     
    <div class="swiper-container mt-4" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<12; $i++){?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-03" href="#">
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%3+7) ?>.jpg');"></div>
              </div>
              <div class="hover-filter-01"></div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
            </a> 
          </div>
        <?php }?>
      </div>
    </div>   
  </section>

  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>