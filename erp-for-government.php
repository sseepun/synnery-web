<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php $topnavActive=3; $dropdownActive=3; include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/bg/47.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding">
    <div class="container">
      <h1 class="text-center color-01 lh-3xs fw-600" data-aos="fade-up" data-aos-delay="0">
        ERP<span class="h3 color-black ml-1 mr-1 fw-300">or</span>E-Office
      </h1>
      <p class="h3 text-center lh-3xs" data-aos="fade-up" data-aos-delay="150">
        for <span class="fw-600">Government Solutions</span>
      </p>
      <p class="h4 color-01 text-center mt-5 fw-600" data-aos="fade-up" data-aos-delay="300">
        ถ้าปัญหาเหล่านี้คือสิ่งที่กำลังเกิดขึ้นในหน่วยงานของคุณ
      </p>
      <div class="ss-box xl mt-4" data-aos="fade-up" data-aos-delay="450">
        <div class="grids">
          <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
            <ul class="ss-list-01 style-04 size-02">
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">ระบบไม่รองรับเทคโนโลยีใหม่ๆ</p>
                <p class="sm color-black fw-400">
                  ไม่ว่าจะเป็นเรื่องของ Web Browser รุ่นใหม่ และหลากหลาย รวมถึงการทำงานบน Mobile/Tablet
                </p>
              </li>
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">Tech Tools ที่ใช้หยุดหรือเลิกการพัฒนา</p>
                <p class="sm color-black fw-400">
                  ด้วยการเปลี่ยนแปลงของ Tech Tools ใหม่ๆ ต่างๆ หลายระบบโปรแกรม หลายภาษาที่ไม่ได้ถูกพัฒนาต่อ 
                  และยังถูกทดแทนด้วย Tech Tools ที่ดีกว่า ใหม่กว่า และปลอดภัยกว่า
                </p>
              </li>
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">UX/UI ใช้งานยาก ไม่ตอบโจทย์ผู้ใช้</p>
                <p class="sm color-black fw-400">
                  เพราะผู้ใช้ไม่ต้องการคิดเยอะ และส่วนใหญ่มีประสบการณ์จากการใช้สื่อ Social Media ต่างๆ และไม่ชอบการอ่านคู่มือ
                </p>
              </li>
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">ยากต่อการขยายหรือปรับเปลี่ยนระบบ</p>
                <p class="sm color-black fw-400">
                  ทั้งการขยายด้าน Hardware และการปรับเปลี่ยน Software ที่ไม่ยืดหยุ่น ทำให้ระบบโปรแกรมไม่ตอบโจทย์ต่อผู้ใช้งาน และสร้างปัญหา
                </p>
              </li>
            </ul> 
          </div>   
          <div class="grid xl-50 lg-50 md-50 sm-50 xs-100">
            <ul class="ss-list-01 style-04 size-02">
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">การปรับแต่ง Fied Form, Workflow ทำได้ยาก</p>
                <p class="sm color-black fw-400">
                  จะสร้าง Field ใส่ Form ก็ยาก จะปรับเปลี่ยน Flow การทำงานให้เข้ากับหน้างานที่ต้องใช้จริงก็ยาก หรือทำไม่ได้ 
                </p>
              </li>
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">ทำงานร่วมกับระบบอื่นไม่ได้</p>
                <p class="sm color-black fw-400">
                  ไม่มี API (Application Protocol Interface) เพราะเป็นการพัฒนาแบบเก่า 
                  ทำให้กลายเป็นระบบปิด เชื่อมต่อกับระบบอื่นไม่ได้
                </p>
              </li>
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">ข้อมูลซ้ำซ้อน และเกิดข้อมูลขยะที่ไม่ได้ใช้เยอะมาก</p>
                <p class="sm color-black fw-400">
                  เพราะไม่มีการวางแผน หรือจัดระบบ ระเบียบของโครงสร้างฐานข้อมูล ต่างระบบต่างก็มีฐานข้อมูลของตัวเอง 
                  และเชื่อมต่อหรือทำงานร่วมกัน
                </p>
              </li>
              <li class="pb-2">
                <p class="color-black fw-600 mt-1">ระบบรายงานไม่มีความยืดหยุ่นในการดึงข้อมูล</p>
                <p class="sm color-black fw-400">
                  ความยืดหยุ่นในการดึงระบบรายงานต่างๆ ทำได้อย่างจำกัด
                </p>
              </li>
            </ul>
          </div> 
        </div>  
      </div> 
    </div>
  </section>

  
  <?php
    $titles = [
      'JIGSAW<br>Intranet', 'JIGSAW<br>E-Saraban', 'JIGSAW<br>E-Document', 'JIGSAW<br>Project', 
      'JIGSAW<br>E-Learning', 'JIGSAW<br>Procurement','JIGSAW<br>Accounting', 'JIGSAW<br>Listening', 
      'JIGSAW<br>Vehicle', 'JIGSAW<br>Meeting Room'
    ];
  ?>

  <section data-section="6" class="section-01 section-padding">
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
    <div class="img-bg" style="background-image:url('public/img/bg/62.jpg'); background-position:bottom center;"></div>
    <div class="container">
      <h3 class="text-center color-white fw-600" data-aos="fade-up" data-aos-delay="0">
        <span class="h4 fw-100">FULL SERVICES</span> E-OFFICE AUTOMATION <span class="h4 fw-100">DEVELOPMENT</span>
      </h3>
      <p class="text-center color-white fw-300" data-aos="fade-up" data-aos-delay="150">
        Focus on Value, Small Feature, No Manual, UX/UI Look like Social Networking, API
      </p>
      <div class="hex-container pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="300">
        <?php for($i=0; $i<10; $i++){?>
          <div class="hex-flip">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1"><?php echo $titles[$i] ?></p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/1<?= ($i%10+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2"><?php echo $titles[$i] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>

        <?php
          $titles = [
            'JIGSAW<br>Help Desk', 'JIGSAW<br>Chat Bot', 'JIGSAW<br>Portal', 'JIGSAW<br>Financial', 
            'JIGSAW<br>Asset', 'JIGSAW<br>Sales Force','JIGSAW<br>CRM', 'JIGSAW<br>HRM', 
            'JIGSAW<br>HRD', 'JIGSAW<br>Budgeting'
          ];
        ?>

        <?php for($i=0; $i<10; $i++){?>
          <div class="hex-flip">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1"><?php echo $titles[$i] ?></p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/2<?= ($i%12+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2"><?php echo $titles[$i] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>

        <?php
          $titles = [
            'JIGSAW<br>E-Form', 'JIGSAW<br>BI'
          ];
        ?>

        <?php for($i=0; $i<2; $i++){?>
          <div class="hex-flip">
            <div class="hex lg">
              <div class="hex lg bg">
                <div class="wrapper text-center color-white">
                  <p class="xs fw-400 lh-sm mt-1"><?php echo $titles[$i] ?></p>
                </div>
              </div>
              <div class="hex lg inner">
                <div class="wrapper text-center color-white">
                  <div class="icon">
                    <img class="img" src="public/img/icon/3<?= ($i%2+0) ?>.png" alt="Banner" />
                  </div>
                  <p class="xs fw-400 lh-sm mt-2"><?php echo $titles[$i] ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>   
    </div>
  </section>

  <section data-section="4" class="section-01 section-padding">
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
      <h3 class="text-center color-white fw-600 lh-sm" data-aos="fade-up" data-aos-delay="0">
        Jigsaw ERP <span class="h5 fw-200">for Government &</span> <br />
        Microservices Architechture
      </h3>
      <p class="text-center md-no-br color-white fw-200 mt-2" data-aos="fade-up" data-aos-delay="150">
        ด้วยประสบการณ์ในการทำงานและแลกเปลี่ยนพูดคุย ถึงปัญหาเกี่ยวกับระบบเทคโนโลยีและสารสนเทศภาครัฐมานาน 
        ทำให้เราเข้าใจและมองเห็นปัญหาที่ถูกสะสม<br>มายาวนาน ทำให้เราเข้าใจและสามารถออกแบบระบบใหม่ 
        เพื่อแก้ไขปัญหาเก่าๆ และนำเทคโนโลยีใหม่ๆ เข้ามาใช้งาน 
      </p>
      <div class="ss-box xl mt-6 pt-2" data-aos="fade-up" data-aos-delay="300">
        <img class="img" src="public/img/content/05.png" alt="Image" />
      </div>
    </div>
  </section>

  <section data-section="5" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/49.jpg');"></div>  
    <div class="container">
      <h4 class="lg color-white text-center fw-100 lh-sm" data-aos="fade-up" data-aos-delay="0">
        แล้วทำไมถึง
      </h4>
      <h4 class="lg text-center color-white fw-600 lh-sm" data-aos="fade-up" data-aos-delay="150">
        ต้องปรับ ต้องเปลี่ยน
      </h4>
      <h4 class="lg color-white text-center fw-100 lh-sm mt-5" data-aos="fade-up" data-aos-delay="300">
        เพราะ
      </h4>
      <h4 class="lg text-center color-white fw-600 lh-sm" data-aos="fade-up" data-aos-delay="450">
        โลกของเทคโนโลยี ที่ไม่เคยหยุดนิ่ง
      </h4>
    </div>
  </section>

  <section data-section="6" class="section-01 section-padding">
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
    <div class="img-bg" style="background-image:url('public/img/bg/66.jpg');"></div>  
    <div class="container" style="z-index:2;">
      <h3 class="text-center" data-aos="fade-up" data-aos-delay="0">
        THE TREND OF <span class="color-01 fw-600">DEVELOPMENT</span>
      </h3>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="150">
        <?php for($i=0; $i<3; $i++) {?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100 pt-6">
            <a class="ss-card ss-card-03" href="public/img/content/4<?= ($i%2+2) ?>.jpg" data-fancybox="gallery">
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('public/img/content/4<?= ($i%2+2) ?>.jpg');"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
            </a>
            <div class="text-center mt-3">
              <a class="p lg color-white h-color-p fw-600" href="#">
                BENCHMARKING
              </a>
            </div>
          </div>
        <?php }?>
      </div>

      <h3 class="text-center mt-6 pt-4" data-aos="fade-up" data-aos-delay="300">
        โครงสร้าง<span class="color-01 fw-600">กระบวนการพัฒนาซอฟแวร์</span>
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="450">
        <img class="img" src="public/img/content/44.jpg" alt="Image" />
      </div>
    </div>
  </section>

  <section data-section="7" class="section-01 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/52.jpg');"></div>
    <div class="container">
      <h4 class="text-center color-01 fw-500" data-aos="fade-up" data-aos-delay="0">
        เราให้ความสำคัญกับการออกแบบ
      </h4> 
      <h1 class="lg text-center lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="150">
        UX / UI
      </h1>   
      <p class="lg text-center color-white fw-100" data-aos="fade-up" data-aos-delay="300">
        เพราะเราคำนึงถึงผู้ใช้ และความง่ายในการใช้งาน<br>
        พร้อมประสิทธิภาพ ของระบบโปรแกรมต่างๆ
      </p>
      <p class="text-center color-white fw-100 mt-1" data-aos="fade-up" data-aos-delay="450">
        ที่เราออกแบบ เพราะระบบโปรแกรมที่ดี ไม่ได้มีแค่ความสวยงาม 
        แต่ต้องตอบสนองและเข้าใจพฤติกรรมของผู้ใช้งาน
      </p>
      <div class="ss-box sm">
        <div class="mt-6" data-aos="fade-up" data-aos-delay="450" data-aos="fade-up" data-aos-delay="600">
          <img class="img" src="public/img/content/06.png" alt="Image" />
        </div>  
      </div>
    </div>      
  </section>

  <section data-section="8" class="section-01 section-padding bg-05">
    <div class="pattern style-46">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-29.png" alt="Hero" />
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <h6 class="text-center color-black fw-400" data-aos="fade-up" data-aos-delay="0">
        ตัวอย่างกระบวนการทำงานในการออกแบบ
      </h6>    
      <h3 class="text-center text-uppercase color-01 fw-600 lh-sm" data-aos="fade-up" data-aos-delay="150">
        Web Base Application
      </h3>
      <div class="p-1 bg-white box-shadow ss-box xxl">
        <!-- <a class="ss-card" href="https://www.youtube.com/watch?v=lFa14nKS_pk" data-fancybox="">
          <div class="ss-img horizontal-03">
            <div class="img-bg" style="background-image:url('public/img/content/content-70.jpg');"></div>
          </div>
          <div class="hover-filter-01"></div>
          <div class="card-icon">
            <div class="icon">
              <img class="img" src="public/img/icon/play.png" alt="Banner">
            </div>
          </div>
          <div class="card-line-1"></div><div class="card-line-2"></div>
        </a> -->
        <iframe width="100%" height="650" src="https://www.youtube.com/embed/lFa14nKS_pk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div> 
  </section>

  <section data-section="9" class="section-01 section-padding">
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
    <div class="container" style="z-index:2;">
      <h4 class="lg text-center color-white fw-100" data-aos="fade-up" data-aos-delay="0">
        ระบบโปรแกรมสำหรับใช้ใน
      </h4>
      <h3 class="text-center lh-2xs color-white fw-600" data-aos="fade-up" data-aos-delay="150">
        การติดตามประเมินความคืบหน้าโครงการ
      </h3>
      <div class="grids mt-5">
        <div class="grid lg-50 md-50 sm-100">
          <div class="ss-card ss-card-35 box-shadow" data-aos="fade-up" data-aos-delay="300">
            <div class="ss-img horizontal-03 no-hover">
              <div class="img-bg" style="background-image:url('public/img/content/45.jpg');"></div>
            </div>   
          </div>
        </div>
        <div class="grid lg-50 md-50 sm-100">
          <div class="grids">
            <div class="grid md-40 mt-0">
              <div class="ss-card ss-card-35  height-full box-shadow" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-img horizontal-02 no-hover height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/56.jpg');"></div>
                </div>   
              </div>
            </div>
            <div class="grid md-60 mt-0">
              <div class="ss-card ss-card-35 box-shadow" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-img horizontal-02 no-hover">
                  <div class="img-bg" style="background-image:url('public/img/content/57.jpg');"></div>
                </div>   
              </div>
            </div>
            <div class="grid md-100 sm-100">
              <div class="ss-card ss-card-35 height-full box-shadow" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-img horizontal-05 no-hover height-full">
                  <div class="img-bg" style="background-image:url('public/img/content/46.jpg');"></div>
                </div>   
              </div>
              <a class="text-center d-block color-white fw-500 mt-2" href="#" data-aos="fade-up" data-aos-delay="300">
                Project Tracking by Asana
              </a>
            </div>
          </div>
        
        </div>
      </div>
    </div>      
  </section>

  <section data-section="10" class="section-08 section-padding">
    <div class="container">
      <h4 class="lg text-center color-black fw-300" data-aos="fade-up" data-aos-delay="0">
        ตัวอย่างงานด้าน
      </h4>
      <h4 class="lg text-center lh-xs" data-aos="fade-up" data-aos-delay="150">
        <span class="color-01 fw-600">การวางโครงสร้าง การออกแบบระบบ</span>โปรแกรมต่างๆ
      </h4>
      <div class="content-container mt-6">
        <div class="swiper-container style-02" data-aos="fade-up" data-aos-delay="300">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<4; $i++){?>
              <div class="swiper-slide ss-card-padding">
                <a class="ss-card ss-card-34 " href="#">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/img/content/content-73.jpg');"></div>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-plus"></em>
                  </div>
                </a>
                <p class="sm text-center color-01 text-uppercase fw-600 mt-2">
                    Use Case diagram
                  </p>
              </div>
            <?php }?>
          </div>
          <div class="arrows">
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-01.png" alt="Arrow" />
          </div>
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-02.png" alt="Arrow" />
          </div>
        </div>
      </div>
    </div>     
  </section>

  <section data-section="11" class="section-01 section-padding">
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
    <div class="container" style="z-index:2;">
      <h4 class="lg color-01 text-center" data-aos="fade-up" data-aos-delay="0">
        <span class="color-white fw-300">ตัวอย่าง</span>ระบบรายงานในรูปแบบของกราฟข้อมูล<span class="color-white fw-300">ต่างๆ</span>
      </h4>  
      <div class="ss-box xxl">
        <div class="ss-card ss-card-35 box-shadow mt-5" data-aos="fade-up" data-aos-delay="150">
          <div class="ss-img horizontal-2 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/content-74.jpg');"></div>
          </div>   
        </div>
      </div>
    </div>
  </section>

  <section data-section="12" class="section-01 section-padding">
    <div class="container">
      <h4 class="color-01 text-center text-uppercase fw-600" data-aos="fade-up" data-aos-delay="0">
        การวางโครงสร้าง Server
      </h4>
      <h4 class="lg lh-xs text-center text-uppercase fw-300" data-aos="fade-up" data-aos-delay="150">
        สำหรับพัฒนาในรูปแบบของ <span class="color-01 fw-600">DevOps</span>
      </h4>
      <div class="ss-box xxl mt-6 pt-1" data-aos="fade-up" data-aos-delay="300">
        <div class="ss-card" data-aos="fade-up">
          <div class="ss-img horizontal-2 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/47.jpg');"></div>
          </div>   
        </div>
      </div>
      <div class="mt-6 text-center ss-box xl" data-aos="fade-up" data-aos-delay="300">
        <p class="sm color-07 md-no-br">
          วางโครงสร้างการ Deploy แบบ DevSecOps เป็นการ Deploy แบบอัตโนมัติโดยใช้ Jenkins และแยกโครงสร้างของ Server ระหว่าง Development, Staging, Production อย่างชัดเจนเพื่อไม่ให้กระทบการทำงานระหว่างกัน รวมถึงมีการแจ้งเตือนทีมงานรับทราบเมื่อมีการอัพเดทใหม่เพื่อตรวจสอบงานอีกชั้นหนึ่ง
        </p>
      </div>
    </div>          
  </section>

  <section data-section="12" class="section-01 section-padding bg-05">
    <div class="container">
      <h4 class="lg color-01 text-center fw-600" data-aos="fade-up" data-aos-delay="0">
        Mobile Application Development
      </h4>
      <div class="p-1 bg-white box-shadow ss-box xxl">
        <a class="ss-card" href="https://www.youtube.com/watch?v=lFa14nKS_pk" data-fancybox="">
          <div class="ss-img horizontal-03">
            <div class="img-bg" style="background-image:url('public/img/content/content-71.jpg');"></div>
          </div>
          <div class="hover-filter-01"></div>
          <div class="card-icon">
            <div class="icon">
              <img class="img" src="public/img/icon/play.png" alt="Banner">
            </div>
          </div>
          <div class="card-line-1"></div><div class="card-line-2"></div>
        </a>
      </div>
      <div class="grids jc-center">
        <?php for($i=0; $i<5; $i++) {?>
          <div class="grid lg-20 md-50">
            <div class="ss-card mt-5" data-aos="fade-up" data-aos-delay="150">
              <img class="img" src="public/img/content/mobile-0<?= ($i%5+1) ?>.png" alt="Banner" />   
            </div>
          </div>
        <?php }?>
      </div>
    </div>          
  </section>

  <section data-section="13" class="section-08 section-padding">
    <div class="pattern style-01 size-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-03">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-03.png" alt="Hero" />
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
    <div class="img-bg" style="background-image:url('public/img/bg/65.jpg');"></div> 
    <div class="container">
      <h4 class="lg text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        <span class="color-white fw-200">ตัวอย่าง</span>หน้าจอระบบต่างๆ
      </h4>
      <div class="content-container mt-6" data-aos="fade-up" data-aos-delay="150">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="grids">
                    <div class="grid">
                      <div class="d-flex flex-column jc-center height-full">
                        <p class="h5 color-01 fw-600">EVENT CALENDAR</p>  
                        <p class="sm color-04 md-no-br">
                          ภาพหน้าจอ ที่จะให้กดเลื่อน ซ้าย ขวา ไปเรื่อยๆ 
                          โดยจะมีภาพและเชื่อระบบ<br>พร้อมคุณสมบัติพื้นฐานสัก 5-6 หัวข้อ 
                        </p>
                      </div>
                    </div>
                    <div class="grid">
                      <div class="ss-card ss-card-35">
                        <div class="ss-img no-hover">
                          <div class="img-bg" style="background-image:url('public/img/content/48.jpg');"></div>
                        </div>
                        <div class="icon box-shadow">
                          <em class="fa-solid fa-magnifying-glass"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="navigator">
            <div class="progress p color-white"></div>
            <div class="line"></div>
            <div class="dots"></div>
          </div>
        </div>
        <div class="arrows">
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-01.png" alt="Arrow" />
          </div>
          <div class="arrow btn-icon-next">
            <img src="public/img/icon/arrow-02.png" alt="Arrow" />
          </div>
        </div>
      </div>  
        </div>  
      </div>             
    </div>      
  </section>
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>