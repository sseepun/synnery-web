<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php $topnavActive=3; $dropdownActive=1; include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/img-03.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="section-01 section-padding bg-05">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero" />
      </div>
    </div>
    <div class="container">
      <div class="ss-box xl pos-relative" style="z-index:2;">
        <div class="text-center color-01">
          <h3 class="color-black fw-600 lh-2xs" data-aos="fade-up" data-aos-delay="0">
            Unlimited
          </h3>
          <p class="h1 lh-2xs text-center text-shadow fw-600" data-aos="fade-up" data-aos-delay="150">
            Government Microsite
          </p>
          <p class="lg color-03 fw-400 xs-no-br mt-2" data-aos="fade-up" data-aos-delay="300">
            เครื่องมือในการสร้างเว็บไซต์ย่อย สำหรับหน่วยงานหลัก <br>
            ที่ต้องการสร้างเว็บไซต์ย่อยๆ ภายใต้หน่วยงานหลักเดียวกัน เหมาะกับ 
          </p>
          <h4 class="lg fw-600 mt-4" data-aos="fade-up" data-aos-delay="450">
            สำนักงานปลัดกระทรวง<span class="color-black fw-300">ทุกกระทรวง</span>
          </h4>
          <div class="border-top-2 bcolor-01 mt-1 mb-2" data-aos="fade-up" data-aos-delay="600"></div>
          <h4 class="lg color-01 xs-no-br fw-600" data-aos="fade-up" data-aos-delay="750">
            กรมต่างๆ <span class="color-black fw-300">หรือ</span> หน่วยงานที่มีหน่วยงานย่อยๆ<br>
            <span class="color-black fw-300">ที่ต้องกำกับดูแล</span>
          </h4>
        </div>
      </div>
    </div>
  </section>
  
  <section data-section="3" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container md">
            <h3 class="lh-2xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              ประโยชน์ของ<br>
              <span class="h3 text-uppercase lh-2xs color-01 fw-600">Government<br>Microsite</span>
            </h3>
            <ul class="ss-list-01 style-04 mt-3" data-aos="fade-up" data-aos-delay="150">
              <li class="color-black fw-400 mt-3">รองรับการสร้างเว็บไซต์ย่อยๆ ของหน่วยงานภายใต้สังกัด โดยไม่จำกัดจำนวน</li>
              <li class="color-black fw-400 mt-3">มี Template หลากหลายให้เลือกใช้</li>
              <li class="color-black fw-400 mt-3">ประหยัดงบประมาณด้านการการทำเว็บไซต์ให้แต่ละหน่วยงาน </li>
              <li class="color-black fw-400 mt-3">ปรับให้รองรับมาตรฐานต่างๆ จากส่วนกลางได้ง่าย</li>
              <li class="color-black fw-400 mt-3">เชื่อมโยงข้อมูลเว็บไซต์ของแต่ละหน่วยงาน เข้าหาส่วนกลาง หรือ แชร์ข้อมูลระหว่างเว็บไซต์</li>
              <li class="color-black fw-400 mt-3">ง่ายต่อการดูแลรักษา และการออกแบบระบบเครือข่ายแบบ DevSecOps จากส่วนกลาง</li>
              <li class="color-black fw-400 mt-3">ภาพลักษณ์องค์กร ของทุกเว็บไซต์ย่อย ไปในทิศทางเดียวกันได้ง่าย</li>
            </ul> 
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/19.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <?php include_once('include/tech-stack.php'); ?>
  <section data-section="11" class="section-12 bg-06">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/16.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="text-container md">
            <h3 class="lh-2xs color-01 fw-600 lh-sm" data-aos="fade-up" data-aos-delay="0">
              Tech & Tools 
              <span class="h4 lg color-black fw-400">ที่เราเลือกใช้</span>
            </h3>
            <div class="gallery-grids jc-center" data-aos="fade-up" data-aos-delay="150">
              <?php for($i=0; $i<20; $i++){?>
                <div class="grid xl-20 lg-25 md-1-3 sm-20 xs-1-3 pt-3">
                  <div class="ss-card ss-card-10 style-02">
                    <div class="icon">
                      <?php echo $svgs[$i] ?>
                    </div>
                    <div class="text-container mt-1">
                      <p class="xxs title text-center color-black fw-600">
                        <?php echo $titles[$i] ?>
                      </p>
                    </div>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="5" class="section-13" id="webShowcase">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          ตัวอย่าง<span class="fw-600">ผลงานด้าน Government Microsites</span>
        </h3>
      </div>
    </div>
    <div class="swiper-container style-02">
      <div class="swiper-wrapper">

        <!-- EDUCATION -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/57.jpg');"></div>
            <div class="content style-02">
              <div class="img-container">
                <img class="img animate-02" src="public/img/content/screen-09.png" style="--delay:.45s;" alt="Device" />
                <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-17.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Ministry of<br><span class="fw-600">Education</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กระทรวงศีกษาธิการ
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">120</span> เว็บไซต์</p>
                    </div>
                  </div>
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-01 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-06.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-05.png" alt="Device" />
                  </div>
                  <div class="showcase-02 padding-left animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-07.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-08.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ENERGY -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/75.jpg');"></div>
            <div class="content style-02">
              <div class="img-container d-unset">
                <div class="title-wrapper pl-0">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-01.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Ministry of<br><span class="fw-600">Energy</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กระทรวงพลังงาน
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">76</span> เว็บไซต์</p>
                    </div>
                  </div>
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-29.png" alt="Device" />
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-02 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-32.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-33.png" alt="Device" />
                  </div>
                  <div class="showcase-01 animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-30.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-31.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- INDUSTRY -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/76.jpg');"></div>
            <div class="content style-02">
              <div class="img-container">
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-34.png" alt="Device" />
                <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-02.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Ministry of<br><span class="fw-600">industry</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กระทรวงอุตสาหกรรม
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">87</span> เว็บไซต์</p>
                    </div>
                  </div>
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-01 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-35.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-36.png" alt="Device" />
                  </div>
                  <div class="showcase-02 padding-left animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-37.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-38.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
     
        <!-- DEPARTMENT -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/77.jpg');"></div>
            <div class="content style-02">
              <div class="img-container d-unset">
                <div class="title-wrapper pl-0">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-03.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-600">
                        THE TREASURY<br><span class="fw-200">Department</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กรมธนารักษ์
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">78</span> เว็บไซต์</p>
                    </div>
                  </div>
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-39.png" alt="Device" />
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-02 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-42.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-43.png" alt="Device" />
                  </div>
                  <div class="showcase-01 animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-40.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-41.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Public Works and Town & Country -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/79.jpg');"></div>
            <div class="content style-02">
              <div class="img-container">
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-44.png" alt="Device" />
                <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-04.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Department of<br>
                        <span class="fw-600">
                          Public Works and  <br> Town & Country
                        </span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กรมโยธาธิการและผังเมือง
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">107</span> เว็บไซต์</p>
                    </div>
                  </div>
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-01 padding-left animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-45.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-46.png" alt="Device" />
                  </div>
                  <div class="showcase-02 padding-left animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-47.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-48.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- HEALTH -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/78.jpg');"></div>
            <div class="content style-02">
              <div class="img-container d-unset">
                <div class="title-wrapper pl-0">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-05.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        DEPARTMENT OF<br><span class="fw-600">HEALTH</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กรมอนามัย
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">40</span> เว็บไซต์</p>
                    </div>
                  </div>
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-49.png" alt="Device" />
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-02 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-52.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-53.png" alt="Device" />
                  </div>
                  <div class="showcase-01 animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-50.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-51.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- INDUSTRIAL ESTATE -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/87.jpg');"></div>
            <div class="content style-02">
              <div class="img-container">
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-54.png" alt="Device" />
                <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-12.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        INDUSTRIAL ESTATE<br><span class="fw-600">AUTHORITY OF<br>THAILAND</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        การนิคมอุตสาหกรรมแห่งประเทศไทย
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">25</span> เว็บไซต์</p>
                    </div>
                  </div>
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-01 padding-left animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-55.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-56.png" alt="Device" />
                  </div>
                  <div class="showcase-02 padding-left animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-57.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-58.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Electricity -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/91.jpg');"></div>
            <div class="content style-02">
              <div class="img-container d-unset">
                <div class="title-wrapper pl-0">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-16.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h4 class="lg color-white text-uppercase lh-2xs fw-200">
                        The Metropolitan<br>
                        <span class="fw-600">Electricity<br>Authority</span>
                      </h4>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        การไฟฟ้านครหลวง
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย 
                      <span class="h3 lh-2xs fw-600">11</span> เว็บไซต์</p>
                    </div>
                  </div>
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-59.png" alt="Device" />
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-02 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-62.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-63.png" alt="Device" />
                  </div>
                  <div class="showcase-01 animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-60.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-61.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>      

        <!-- INDUSTRIAL ESTATE -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/93.jpg');"></div>
            <div class="content style-02">
              <div class="img-container">
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-64.png" alt="Device" />
                <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-19.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Department of<br><span class="fw-600">Airports</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กรมท่าอากาศยาน
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">28</span> เว็บไซต์</p>
                    </div>
                  </div>
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-01 padding-left animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-65.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-66.png" alt="Device" />
                  </div>
                  <div class="showcase-02 padding-left animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-67.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-68.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- EDUCATION -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/57.jpg');"></div>
            <div class="content style-02">
              <div class="img-container">
                <img class="img animate-02" src="public/img/content/screen-09.png" style="--delay:.45s;" alt="Device" />
                <div class="title-wrapper">
                    <div class="logo animate-01" style="--delay:.45s;">
                      <img src="public/img/logo/logo-17.png" alt="LOGO" />
                    </div>
                    <div class="text animate-01" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Ministry of<br><span class="fw-600">Education</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กระทรวงศีกษาธิการ
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">120</span> เว็บไซต์</p>
                    </div>
                  </div>
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-01 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-06.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-05.png" alt="Device" />
                  </div>
                  <div class="showcase-02 padding-left animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-07.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-08.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- ENERGY -->
        <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('public/img/bg/75.jpg');"></div>
            <div class="content style-02">
              <div class="img-container d-unset">
                <div class="title-wrapper pl-0">
                    <div class="logo animate-03" style="--delay:.45s;">
                      <img src="public/img/logo/logo-01.png" alt="LOGO" />
                    </div>
                    <div class="text animate-03" style="--delay:.6s;">
                      <h3 class="color-white text-uppercase lh-2xs fw-200">
                        Ministry of<br><span class="fw-600">Energy</span>
                      </h3>
                      <p class="h4 color-white fw-500 lh-xs mt-2">
                        กระทรวงพลังงาน
                      </p>
                      <p class="lg color-white fw-200">จำนวนเว็บไซต์ย่อย <span class="h3 lh-2xs fw-600">76</span> เว็บไซต์</p>
                    </div>
                  </div>
                <img class="img animate-02" style="--delay:.45s;" src="public/img/content/screen-29.png" alt="Device" />
              </div>
              <div class="showcase-container">
                <div class="wrapper">
                  <div class="showcase-02 animate-03" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-32.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-33.png" alt="Device" />
                  </div>
                  <div class="showcase-01 animate-01" style="--delay:.75s;">
                    <img class="img" src="public/img/content/screen-30.png" alt="Device" />
                    <img class="img" src="public/img/content/screen-31.png" alt="Device" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="navigator">
        <div class="dots">
          <div class="dots-wrapper">
            <div class="out-wrapper">
              <div class="wrapper" style="--slide:1;"></div>
            </div>
          </div>
        </div>
        <div class="arrows">
          <div class="wrapper">
            <div class="icon btn-icon-prev">
              <img class="img" src="public/img/icon/arrow-03.png" alt="Arrow" />
            </div>
            <div class="icon">
              <img class="img" src="public/img/icon/line.png" alt="Arrow" />
            </div>
            <div class="icon btn-icon-next">
              <img class="img" src="public/img/icon/arrow-04.png" alt="Arrow" />
            </div>
          </div>
        </div>
        <div class="btn-slide-more">
          <div class="wrapper">
            <p id="text" class="text color-white">ปิด</p>
            <p id="text02" class="text-02">ขยาย / ย่อ</p>
            <div id="arrows" class="icon">
              <img class="img" src="public/img/icon/arrow-05.png" alt="Arrow" />
            </div>      
          </div>
        </div>
      </div>
    </div>
 </section>

  <section data-section="6" class="section-01 section-padding">
    <div class="pattern style-46">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-29.png" alt="Hero" />
      </div>
    </div>
    <div class="container">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0" >
        บริการ<span class="color-black fw-300">ของเรา</span>
      </h3> 
      <div class="grids jc-center pt-4 pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="450">
        <div class="grid xl-25 lg-1-3 md-50 sm-50 xs-100">
          <a class="ss-card ss-card-05">
            <div class="ss-img vertical-01">
              <div class="img-bg" style="background-image:url('public/img/content/content-52.jpg');"></div>
            </div>
            <div class="filter-02"></div>
            <div class="hover-filter-01"></div>
            <div class="text-container">
              <div class="title h5 color-01 lh-xs fw-500">
                วิเคราะห์
              </div>
              <div class="desc p sm color-white fw-400">
                นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
                นำข้อมูลมาวิเคราะห์ ปรับแต่ง เพื่อเพิ่มประสิทธิภาพให้ได้ตามเป้าหมาย
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </a>
        </div>

        <div class="grid xl-25 lg-1-3 md-50 sm-50 xs-100">
          <a class="ss-card ss-card-05">
            <div class="ss-img vertical-01">
              <div class="img-bg" style="background-image:url('public/img/content/content-47.jpg');"></div>
            </div>
            <div class="filter-02"></div>
            <div class="hover-filter-01"></div>
            <div class="text-container">
              <div class="title p  color-white lh-xs fw-200">
                กำหนดภาพลักษณ์ของ <span class="h5 color-01 fw-600">"BRAND"</span>
              </div>
              <ul class="ss-list-01 style-02">
                <li class="mt-1">Brand Personality</li>
                <li class="mt-1">Brand Personality</li>
                <li class="mt-1">Brand Personality</li>
                <li class="mt-1">Brand Personality</li>
              </ul>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </a>
        </div>
        <div class="grid xl-25 lg-1-3 md-50 sm-50 xs-100">
          <a class="ss-card ss-card-05">
            <div class="ss-img vertical-01">
              <div class="img-bg" style="background-image:url('public/img/content/content-48.jpg');"></div>
            </div>
            <div class="filter-02"></div>
            <div class="hover-filter-01"></div>
            <div class="text-container">
              <ul class="ss-list-01 style-02">
                <li class="mt-1">SEO Structure</li>
                <li class="mt-1">Search by AI</li>
                <li class="mt-1">Speed Page Test</li>
                <li class="mt-1">All Browser Support</li>
                <li class="mt-1">High Security (OWASP)</li>
              </ul>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php
    $standards = [
      [
        'topic' => 'ITA', 
        'title' => 'Integrity and Transparency<br>Assessment',
        'desc' => 'การประเมิน คุณธรรม และ ความโปร่งใสในการดำเนินงานของหน่วยงานภาครัฐ'
      ],[
        'topic' => 'Government<br>website<br>standard<br>v.2', 
        'title' => 'มาตรฐานเว็บไซต์ภาครัฐ<br>เวอร์ชัน 2.0',
        'desc' => 'มาตรฐานเว็บไซต์ของหน่วยงานภาครัฐ<br>ให้เป็นไปในทิศทางเดียวกัน'
      ],[
        'topic' => 'W3C',
        'title' => 'World Wide Web<br>Consortium',
        'desc' => 'หน่วยงานสากลที่การกำหนดมาตรฐานให้กับ<br>ภาษา / ที่ใช้ในการพัฒนาเว็บไซต์'
      ],[
        'topic' => 'WAI',
        'title' => 'Web Accessibility<br>Initiative',
        'desc' => 'การออกแบบและจัดทำเว็บไซต์ให้<br>สามารถเข้าถึงและใช้ประโยชน์ได้'
      ],[
        'topic' => 'WCAG 2.0',
        'title' => 'Web Content Accessibility<br>Guidelines',
        'desc' => 'ข้อกำหนดการพัฒนาและออกแบบเว็บไซต์ที่ทุกคนเข้าถึงได้ มีมาตรฐานและเท่าเทียมกัน'
      ],[
        'topic' => 'TWCAG<br>2010',
        'title' => 'Thai Web Content<br>Accessibility Guideline 2010',
        'desc' => 'แนวทางการพัฒนาเว็บไซต์ที่รองรับผู้ใช้ทุกกลุ่ม / ไม่ว่าจะเป็นผู้พิการหรือบุคคลทั่วไป'
      ],[
        'topic' => 'OWASP<br>TOP10',
        'title' => 'OWASP Top Ten Web<br>Application Security Risk',
        'desc' => 'โครงการหนึ่งของ OWASP ที่จัดอันดับ 10<br>ความเสี่ยงทางด้านความปลอดภัย'
      ], 
    ];
  ?>

  <section data-section="7" class="section-01 section-padding">
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
    <div class="container" style="z-index:2;">
      <h3 class="text-center color-black fw-200" data-aos="fade-up" data-aos-delay="0" >
        พร้อมรองรับ<span class="color-01 fw-600">มาตรฐานต่างๆ</span>
      </h3>  
      <div class="ss-box xxl" data-aos="fade-up" data-aos-delay="150">
        <div class="grids jc-center">
          <?php foreach($standards as $d){?>
            <div class="grid lg-25 md-1-3 pt-3">
              <a class="ss-card ss-card-17" href="#">
                <div class="icon-text">
                  <p class="h6 title lh-2xs text-center fw-600">
                    <?= $d['topic'] ?>
                  </p>
                </div>
                <div class="text-container mt-3">
                  <p class="text-center color-01 lh-sm fw-600">
                    <?= $d['title'] ?>
                  </p>
                  <p class="xs text-center color-black fw-600 mt-1">
                    <?= $d['desc'] ?>
                  </p>
                </div>
              </a>
            </div>
          <?php }?>
        </div>  
      </div>
    </div>
  </section>

  <section data-section="8" class="section-05 section-padding" style="background-image:url('public/img/bg/15.jpg');">
    <div class="container">
      <h3 class="text-center color-white text-uppercase lh-sm fw-500" data-aos="fade-up" data-aos-delay="0">
        มาตรฐานเว็บไซต์ภาครัฐ เวอร์ชัน 2.0
      </h3>  
      <p class="h5 text-center color-white fw-200" data-aos="fade-up" data-aos-delay="150">
        Government Website Standard Version 2.0 
      </p>
      <div class="ss-box xxl mt-6 pt-2" data-aos="fade-up" data-aos-delay="300">
        <div class="grids">
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01">
              <li class="fw-200 mt-3">Enterprise ECommerce Solutions</li>
              <li class="fw-200 mt-3">SEO Structure</li>
              <li class="fw-200 mt-3">Site Audit</li>
              <li class="fw-200 mt-3">QC</li>
              <li class="fw-200 mt-3">UX/UI</li>
              <li class="fw-200 mt-3">Full Back Office Management</li>
            </ul> 
          </div>   
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01">
              <li class="fw-200 mt-3">All Web Browser Support</li>
              <li class="fw-200 mt-3">All Device Support (Responsive)</li>
              <li class="fw-200 mt-3">Html5 / W3C / UX / UI</li>
              <li class="fw-200 mt-3">SEO (Search Engine Optimization)</li>
              <li class="fw-200 mt-3">Performance Speed Test</li>
              <li class="fw-200 mt-3">Security Testing (OWASP)</li>
            </ul> 
          </div>
          <div class="grid lg-1-3 mt-0">
            <ul class="ss-list-01">
              <li class="fw-200 mt-3">SQL Injection</li>
              <li class="fw-200 mt-3">XSS (Cross Site Scripting)</li>
              <li class="fw-200 mt-3">File Disclosure</li>
              <li class="fw-200 mt-3">Remote File Inclusion</li>
              <li class="fw-200 mt-3">PHP/ASP Code Injection</li>
              <li class="fw-200 mt-3">System</li>
            </ul> 
          </div> 
        </div>
      </div>
    </div>
  </section>

  <section data-section="9" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="text-container">
            <div data-aos="fade-up" data-aos-delay="0">
              <img 
                class="img" src="public/img/content/02.png" alt="ITA Logo" 
                style="max-width:15rem; margin:0 auto;" 
              />
            </div>
            <p class="lg text-center lh-sm fw-600 mt-4" data-aos="fade-up" data-aos-delay="150">
              การประเมินคุณธรรมและความโปร่งใสใน <br>
              การดำเนินงานของหน่วยงานภาครัฐ
            </p>
            <p class="text-center fw-500 mt-1" data-aos="fade-up" data-aos-delay="300">
              (Integrity and Transparency Assessment: ITA)
            </p>  
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/17.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>
  <section data-section="10" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block-float left">
          <div class="content-container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php for($i=0; $i<5; $i++){?>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="ss-card ss-card-03">
                        <div class="ss-img no-hover horizontal-01">
                          <div class="img-bg" style="background-image:url('public/img/content/content-7<?= ($i%3+5) ?>.jpg');"></div>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-plus"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="arrows">
              <div class="arrow arrow-prev">
                <img src="public/img/icon/arrow-left.png" alt="Arrow" />
              </div>
              <div class="arrow-sep">
                <img src="public/img/icon/arrow-sep.png" alt="Arrow Sep" />
              </div>
              <div class="arrow arrow-next">
                <img src="public/img/icon/arrow-right.png" alt="Arrow" />
              </div>
            </div>
          </div>
        </div>
        <div class="block">
          <div class="pattern style-07">
            <div class="wrapper">
              <img src="public/img/content/pattern-46.png" alt="Hero" />
            </div>
          </div>
          <div class="text-container md">
            <h3 class="lg color-01 lh-xs fw-600 md-no-br" data-aos="fade-up" data-aos-delay="0">
              แนวทางรักษา<br>ความปลอดภัย<span class="color-black fw-300">ของระบบ</span>
            </h3>
            <p class="lh-sm md-no-br mt-2" data-aos="fade-up" data-aos-delay="150">
              ซอฟต์แวร์ที่ใช้สำหรับตรวจสอบช่องโหวระบบ โดยซอฟต์แวร์ที่จัด <br />
              หามาต้องรองรับมาตรฐาน OWASP เช่น ACUNETIX เป็นต้น
            </p> 
          </div>
        </div>
      </div>    
    </div>
  </section>

  <?php
    $tools = [
      ['bg' => 'public/img/quality/benchmarking.png', 'title' => 'BENCHMARKING'], 
      ['bg' => 'public/img/quality/performance.png', 'title' => 'PERFORMANCE & ERROR CHECKING'], 
      ['bg' => 'public/img/content/content-42.jpg', 'title' => 'SPEED PAGE'], 
      ['bg' => 'public/img/content/content-43.jpg', 'title' => 'RESPONSIVE TESTING'], 
      ['bg' => 'public/img/quality/seo.png', 'title' => 'SEO SCORING'], 
      ['bg' => 'public/img/quality/wcag22.jpeg', 'title' => 'WCAG22'], 
    ];
  ?>
  <section data-section="11" class="section-01 section-padding">
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
      <h3 class="lg text-center color-white fw-100" data-aos="fade-up" data-aos-delay="0" >
        เครื่องมือในการ<span class="color-01 fw-500">ทดสอบตรวจสอบคุณภาพ</span>ของเว็บไซต์
      </h3>      
      <div class="grids pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="150">
        <?php foreach($tools as $d){?>
          <div class="grid lg-1-3 md-50 sm-50 xs-100 pt-6">
            <a class="ss-card ss-card-03" href="#">
              <div class="ss-img">
                <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
            </a>
            <div class="text-center mt-3">
              <a class="p lg color-white h-color-p fw-600" href="#">
                <?= $d['title'] ?>
              </a>
            </div>
          </div>
        <?php }?>       
      </div>
    </div>
  </section>

  <section data-section="12" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="text-container">
            <h3 class="lh-2xs fw-300" data-aos="fade-up" data-aos-delay="0">
              เครื่องมือในการวัด <br> 
              <span class="text-uppercase color-01 fw-600" data-aos-delay="150">Seo Score</span>
            </h3>
            <p class="lg lh-sm fw-500 mt-2" data-aos="fade-up" data-aos-delay="300">
              เพื่อให้เราสามารถสร้างและปรับแต่งบทความ<br>ให้เกิดประโยชน์จาก SEO
            </p>
            <p class="fw-300" data-aos="fade-up" data-aos-delay="450">
              (Search Engine Optimization)
            </p>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/18.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>
  <section data-section="13" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block-float left">
          <div class="content-container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php for($i=0; $i<5; $i++){?>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="ss-card ss-card-03">
                        <div class="ss-img no-hover horizontal-04">
                          <div class="img-bg" style="background-image:url('public/img/content/content-8<?= ($i%3+0) ?>.jpg');"></div>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-plus"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="arrows">
              <div class="arrow arrow-prev">
                <img src="public/img/icon/arrow-left.png" alt="Arrow" />
              </div>
              <div class="arrow-sep">
                <img src="public/img/icon/arrow-sep.png" alt="Arrow Sep" />
              </div>
              <div class="arrow arrow-next">
                <img src="public/img/icon/arrow-right.png" alt="Arrow" />
              </div>
            </div>
          </div> 
        </div>
        <div class="block">
          <div class="text-container md">
            <h4 class="lg color-01 lh-xs fw-600" data-aos="fade-up" data-aos-delay="0">
              กระบวนการ<br>หรือขั้นตอนการทำงาน
            </h4>
            <h4 class="h4 color-black lh-xs sm-no-br fw-300 mt-1" data-aos="fade-up" data-aos-delay="150">
              ที่เป็นระบบจากทีมงาน<br>มืออาชีพ
            </h4>
          </div>
        </div>
      </div>    
    </div>
  </section>
  <section data-section="14" class="section-12">
    <div class="container">
      <div class="blocks mh-0">
        <div class="block">
          <div class="pattern style-07">
            <div class="wrapper">
              <img src="public/img/content/pattern-46.png" alt="Hero" />
            </div>
          </div>
          <div class="text-container md">
            <h4 class="lg color-01 lh-2xs fw-600" data-aos="fade-up" data-aos-delay="0">
              กระบวนการออกแบบ
            </h4>
            <h4 class="lg lh-xs color-black sm-no-br fw-300 mt-1" data-aos="fade-up" data-aos-delay="150">
              ที่ลูกค้าสามารถทำงาน<br>
              ร่วมกับทีมพัฒนา<br>ออนไลน์
            </h4>
          </div>
        </div>
        <div class="block-float right">
          <div class="content-container">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <?php for($i=0; $i<5; $i++){?>
                  <div class="swiper-slide">
                    <div class="wrapper">
                      <div class="ss-img no-hover horizontal-04">
                        <div class="img-bg" style="background-image:url('public/img/content/content-8<?= ($i%4+3) ?>.jpg');"></div>
                      </div>
                    </div>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="arrows">
              <div class="arrow arrow-prev">
                <img src="public/img/icon/arrow-left.png" alt="Arrow" />
              </div>
              <div class="arrow-sep">
                <img src="public/img/icon/arrow-sep.png" alt="Arrow Sep" />
              </div>
              <div class="arrow arrow-next">
                <img src="public/img/icon/arrow-right.png" alt="Arrow" />
              </div>
            </div>
          </div> 
        </div>
      </div>    
    </div>
  </section>

  <?php 
    $titles = [
      'ระบบริหารจัดการรายการเนื้อหา เว็บไซต์ (Content Management System)',
      'ระบบจัดการผู้ดูแลระบบ (Administrator WEB Master Policy) ',
      'ระบบบริหารจัดการเมนู<br>(Sub Menu level 2-3 management)',
      'ระบบดึงและกระจายข่าว<br>(RSS Feed)พร้อมระบบจัดการข้อมูล',
      'ระบบถาม-ตอบ (FAQ)<br>ระบบ Vote', 'ระบบเว็บบอร์ด (Web board)',
      'Social Media Management', 'E-Newsletter<br>(Mailing List)',
      'ระบบจัดการแบนเนอร์ (Banner Management)'
    ]
  ?>
  <section data-section="13" class="section-01 section-padding">
    <div class="pattern style-20">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-21">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-03.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-22">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-02.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-23">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-04.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-24">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-06.png" alt="Hero" />
      </div>
    </div>
    <div class="pattern style-25">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-05.png" alt="Hero" />
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/17.jpg');"></div> 
    <div class="container">
      <div class="text-center">
        <h3 class="color-white text-center lh-sm fw-500" data-aos="fade-up" data-aos-delay="0">
          ระบบ <span class="text-uppercase">Back Office</span>
        </h3>
        <p class="h6 color-white fw-200" data-aos="fade-up" data-aos-delay="150">
          สำหรับใช้ในการบริหารจัดการทั้งข้อมูลและโครงสร้างของเว็บไซต์ที่ผ่านมาตรฐาน
        </p>
      </div>
      <div class="ss-box xl pos-relative mt-6" style="z-index:2;" data-aos="fade-up" data-aos-delay="400">
        <div class="grids jc-center">
          <?php for($i=0; $i<9; $i++){?>
            <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 mt-2">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/back-office-0<?= ($i%9+1) ?>.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/back-office-active-0<?= ($i%9+1) ?>.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title text-center color-white mt-2">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php }?>
      
          <?php 
            $titles = [
              'ระบบจัดการข้อมูล Download', 'ระบบจัดการภาพกราฟิกด้านบน (Special Top Graphic & Banner Management)',
              'ระบบบริหารจัดการสมาชิก (Member Management System)', 'ระบบค้นหาข้อมูล<br>(Basic Search + Advanced Search',
              'ระบบปฏิทินกิจกรรม (Calendar Activities)', 'ระบบจดหมายข่าว<br>(E-Newsletter)','ระบบจัดการหน้าพิเศษ<br>
               (Intro page for Festival)', 'ระบบจัดการข้อมูลเว็บลิงก์ (Web Link)','ระบบ Auto Dynamic<br>Site Map',
               'ระบบติดต่อสอบถาม<br>(Contact Us)'
            ]
          ?>

          <?php for($i=0; $i<10; $i++){?>
            <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 mt-2">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/back-office-1<?= ($i%10+0) ?>.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/back-office-active-1<?= ($i%10+0) ?>.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title color-white mt-2">
                    <?php echo $titles[$i] ?>
                  </p>
                </div>
              </div>
            </div>
          <?php }?>

          <div class="grid lg-20 md-25 sm-1-3 xs-50">
              <div class="ss-card ss-card-16 mt-2">
                <div class="icon">
                  <img class="inactive" src="public/img/icon/back-office-20.png" alt="Icon Inactive" />
                  <img class="active" src="public/img/icon/back-office-active-20.png" alt="Icon Active" />
                </div>
                <div class="text-container">
                  <p class="xs title color-white mt-2">
                    ระบบคลังภาพ <br> (Photo Gallery)  
                  </p>
                </div>
              </div>
            </div>
        </div>
      </div>
    </div>    
  </section>

  <section data-section="16" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container md">
            <h4 class="lg lh-xs md-no-br fw-300" data-aos="fade-up" data-aos-delay="0">
              พร้อม<span class="h3 color-01 fw-600 lh-xs">ข้อเสนอเพิ่มเติม</span>ต่างๆ<br>อีกมายมากอาทิเช่น 
            </h4>
            <ul class="ss-list-01 style-03 mt-5" data-aos="fade-up" data-aos-delay="150">
              <li class="color-black fw-400 mt-2">Free Hero Banner Design 1 Year</li>
              <li class="color-black fw-400 mt-2">SEO Maintenance</li>
              <li class="color-black fw-400 mt-2">Security Monthly Testing</li>
              <li class="color-black fw-400 mt-2">Web Performance Tunning</li>
              <li class="color-black fw-400 mt-2">AI Search by Elastic Search </li>
              <li class="color-black fw-400 mt-2">Jmeter load Test</li>
              <li class="color-black fw-400 mt-2">Chat Bot</li>
            </ul>
          </div>
        </div>
        <div class="block-float right">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/bg/18.jpg');"></div>
          </div>
        </div> 
      </div>    
    </div>
  </section>

  <section data-section="17">
    <div class="bg-p pt-6 pb-6" data-aos="fade-in" data-aos-delay="0">
      <div class="container">
        <h3 class="text-center fw-200 color-white pt-6 pb-6">
          พร้อมดูแลการ<span class="fw-600">ฝึกอบรมแบบครบวงจร</span>
        </h3>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-01 size-02">
    <video autoplay muted loop class="video-preview">
      <source src="public/video/02.mp4" type="video/mp4">
    </video>
    <div class="container">
      <div class="video-button mt-6" data-aos="fade-up" data-aos-delay="150">
        <a id="video-container" href="https://www.youtube.com/watch?v=47VeaTCMcOM&list=PLPYe34B8ZMr6qMxH9YN8woSfe5f47jcv4&index=2" 
          class="video-play-button" data-fancybox>
          <em class="fas fa-play"></em>
        </a>
        <p class="sm color-white text-center fw-300 mt-6 pt-4">Watch Video</p>  
      </div> 
    </div>        
  </section>
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>