<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php $topnavActive=1; include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" class="banner-02">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<18; $i++){?>
          <div class="swiper-slide">
            <div class="wrapper">
              <?php if($i === 0){?>
                <div class="img-bg" style="background-image:url('public/img/bg/banner-02.jpg');"></div>
                <div class="hero">
                  <div class="animate-02" style="--delay:.45s;">
                    <img src="public/img/hero/banner-01.png" alt="Hero" />
                  </div>
                </div>
                <div class="container">
                  <div class="text-container">
                    <h1 class="lg fw-500 color-white lh-3xs animate-01" style="--delay:.45s;">
                      Website
                    </h1>
                    <h1 class="fw-500 color-white lh-2xs animate-01" style="--delay:.6s;">
                      <span class="fw-200">for</span> Government
                    </h1>
                    <h6 class="color-white animate-01" style="--delay:.75s;">
                      ออกแบบและพัฒนาเว็บไซต์ ตามมาตรฐานเว็บไซต์ภาครัฐ และ ITA
                    </h6>
                    <div class="btns pt-6 animate-01" style="--delay:.9s;">
                      <?php
                        $btnBubble = [
                          'href' => 'web-gov-standard.php',
                          'title' => 'Explore More',
                        ];
                        include('component/btn-bubble.php');
                      ?>
                    </div>
                  </div>
                </div>
              <?php }?>
              <?php if($i > 0){?>
                <div class="img-bg" style="background-image:url('public/img/bg/banner-0<?= ($i%7+3) ?>.jpg');"></div>
              <?php }?>
              <?php if($i > 7){?>
                <div class="img-bg" style="background-image:url('public/img/bg/banner-1<?= ($i%10+0) ?>.jpg');"></div>
              <?php }?>
            </div>
          </div>
        <?php }?>
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
      <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
      <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
      </defs>
      <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#ffffff" />
      </g>
      </svg>
    </div>
  </section>

  <?php
    $titles = [
      [ 'title' => 'Digital Marketing<br>for Government', 'url' => 'services.php' ],
      [ 'title' => 'Website<br>for Government', 'url' => 'web-gov-standard.php' ],
      [ 'title' => 'Mini Site<br>for Government', 'url' => 'web-gov-minisite.php' ],
      [ 'title' => 'Enterprise WordPress<br>for Government', 'url' => 'enterprise-wordpress-solution.php' ],
      [ 'title' => 'Virtual World<br>Services', 'url' => 'virtual-world.php' ],
      [ 'title' => 'e-Office / ERP<br>for Government', 'url' => 'erp-for-government.php' ],
      [ 'title' => 'Enterprise<br>DevSecOps Solutions', 'url' => 'network-security-system.php' ],
    ]
  ?>
  <section data-section="2" class="section-01 section-padding">
    <div class="pattern style-32">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <div class="text-center" data-aos="fade-up" data-aos-delay="0">
        <p class="h3 color-01 fw-600">
          Full Services
        </p>
        <h1 class="color-black lh-2xs text-shadow fw-600">
          DIGITAL SOLUTIONS
        </h1>
      </div>
      <p class="h6 color-black md-no-br fw-400 text-center" data-aos="fade-up" data-aos-delay="150">
        บริการด้านดิจิทัลแบบครบวงจร ตอบโจทย์ทุกความต้องการ
      </p>
    </div>
  </section>

  <div class="main-tabs-container">
    <?php
      $mainTabs = [
        [
          'pageId' => 'webDesign',
          'title' => 'Web Design',
          'iconInactive' => 'public/img/icon/service-02.png',
          'iconActive' => 'public/img/icon/service-active-02.png'
        ],[
          'pageId' => 'fullService',
          'title' => 'Full Service Digital Marketing',
          'iconInactive' => 'public/img/icon/service-01.png',
          'iconActive' => 'public/img/icon/service-active-01.png'
        ],[
          'pageId' => 'webMobileApp',
          'title' => 'Web & Mobile Application Development',
          'iconInactive' => 'public/img/icon/service-07.png',
          'iconActive' => 'public/img/icon/service-active-07.png'
        ],[
          'pageId' => 'netWork',
          'title' => 'Network & Security',
          'iconInactive' => 'public/img/icon/service-08.png',
          'iconActive' => 'public/img/icon/service-active-08.png'
        ],[
          'pageId' => 'aiSolution',
          'title' => 'AI Solution',
          'iconInactive' => 'public/img/icon/service-09.png',
          'iconActive' => 'public/img/icon/service-active-09.png'
        ],
      ]
    ?>
    <div class="tab-wrapper">
      <?php foreach($mainTabs as $j=>$d) {?>
        <div class="tab-link <?php if($j==0)echo 'active'; ?>" id="defaultOpen" onclick="openPage('<?= $d['pageId'] ?>')" data-tab="tab_<?= $j ?>">
          <div class="wrapper">
            <div class="icon">
              <img src="<?= $d['iconInactive'] ?>" alt="Icon Inactive">
              <img class="active" src="<?= $d['iconActive'] ?>" alt="Icon Active">
            </div>
            <p class="text"><?= $d['title'] ?></p>
          </div>
        </div>
      <?php } ?>
    </div>

    <!-- Web Design -->
    <div id="webDesign" class="main-tab-content">
      <?php
        $categories = [
          ['title' => 'Web Design'],
          ['title' => 'Unlimited Minisite'], 
          ['title' => 'Enterprise WordPress']
        ]
      ?>
      <div class="sub-tab-container">
        <div class="tabs tabs-02">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <p class="title"><?= $d['title'] ?></p>
            </div>
          <?php }?>
        </div>
        <div class="tab-contents">
          <?php foreach($categories as $i=>$d) {?>
            <div class="tab-content <?= $i==0? 'active': '' ?> <?= $i==1? 'swiper-block': '' ?>" data-tab="content_<?= $i ?>">
              <?php 
                if($i === 0){include('data/block01.php');} 
                else if($i === 1){include('data/block02.php');}
                else if($i === 2) {include('data/block03.php');}
              ?> 
            </div>
          <?php }?>
        </div>
      </div>
    </div>

    <!-- Full Service Digital Marketing -->
    <div id="fullService" class="main-tab-content">
      <?php
        $categories = [
          ['title' => 'Digital Marketing'],
          ['title' => 'Virtual World']
        ]
      ?>
      <div class="sub-tab-container">
        <div class="tabs tabs-02">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <p class="title"><?= $d['title'] ?></p>
            </div>
          <?php }?>
        </div>
        <div class="tab-contents">
          <?php foreach($categories as $i=>$d) {?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <?php 
                if($i === 0){include('data/block04.php');} 
                else if($i === 1){include('data/block05.php');}
              ?> 
            </div>
          <?php }?>
        </div>
      </div>
    </div>

    <!-- Web & Mobile Application Development -->
    <div id="webMobileApp" class="main-tab-content">
      <?php
        $categories = [
          ['title' => 'Web & Mobile Application Development'],
        ]
      ?>
      <div class="sub-tab-container">
        <div class="tabs tabs-02">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <p class="title"><?= $d['title'] ?></p>
            </div>
          <?php }?>
        </div>
        <div class="tab-contents">
          <?php foreach($categories as $i=>$d) {?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <?php 
                if($i === 0){include('data/block06.php');} 
              ?> 
            </div>
          <?php }?>
        </div>
      </div>
    </div>

    <!-- Network & Security -->
    <div id="netWork" class="main-tab-content">
      <?php
        $categories = [
          ['title' => 'Network & Security'],
          ['title' => 'DevSecOps'],
        ]
      ?>
      <div class="sub-tab-container">
        <div class="tabs tabs-02">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <p class="title"><?= $d['title'] ?></p>
            </div>
          <?php }?>
        </div>
        <div class="tab-contents">
          <?php foreach($categories as $i=>$d) {?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <?php 
                if($i === 0){include('data/block07.php');} 
                if($i === 1){include('data/block08.php');} 
              ?> 
            </div>
          <?php }?>
        </div>
      </div>
    </div>

    <!-- AI Solutin -->
    <div id="aiSolution" class="main-tab-content">
      <?php
        $categories = [
          ['title' => 'AI ChatGPT'],
          ['title' => 'OCR For Laws & Document'],
          ['title' => 'ChatGPT E-Office'],
        ]
      ?>
      <div class="sub-tab-container">
        <div class="tabs tabs-02">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <p class="title"><?= $d['title'] ?></p>
            </div>
          <?php }?>
        </div>
        <div class="tab-contents">
          <?php foreach($categories as $i=>$d) {?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <?php 
                if($i === 0){include('data/block09.php');} 
                if($i === 1){include('data/block10.php');} 
                if($i === 2){include('data/block11.php');} 
              ?> 
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>

  <section data-section="13" class="section-03 section-padding bg-05 pb-0">
    <div class="pattern style-01">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Our Clients
      </h3>
      <p class="text-center md-no-br" data-aos="fade-up" data-aos-delay="150">
        ประสบการณ์มากกว่า 24 ปี ผลงานกับลูกค้าทั้งภาครัฐและเอกชนขนาดใหญ่กว่า 300 ราย มากกว่า 500 โครงการ
      </p>
      <div class="grids jc-center" data-aos="fade-up" data-aos-delay="300">
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">300</p>
            <h4 class="color-black fw-700 lh-xs">CLIENTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">500</p>
            <h4 class="color-black fw-700 lh-xs">PROJECTS</h4>
          </div>
        </div>
        <div class="grid xl-20 lg-25 md-1-3 xs-50 pt-4">
          <div class="text-center">
            <h6 class="color-03 fw-500">MORE THAN</h6>
            <p class="h1 lg lh-2xs color-01 counter fw-600">25</p>
            <h4 class="color-black fw-700 lh-xs">YEARS</h4>
          </div>
        </div>
      </div>
    </div>

    <?php include_once('data/clients-home.php'); ?>
    <div class="clients pos-relative" style="z-index:2;">
      <?php foreach($clients as $d){?>
        <div class="client">
          <div class="ss-card ss-card-26">
            <div class="hover-container" style="background:<?= $d['bgColor'] ?>;"></div>
            <div class="wrapper" data-aos="fade-up" data-aos-delay="150">
              <div class="image-container">
                <img src="<?= $d['icon'] ?>" alt="Client" />
              </div>
              <div class="text-container mt-4">
                <p class="xxs title lh-sm">
                  <?= $d['title']?>
                </p>
              </div>
            </div>
            <div class="line-7"></div><div class="line-8"></div>
          </div>
        </div>
      <?php }?>
    </div>
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    document.addEventListener("mousemove", parallax);
    function parallax(event) {
      this.querySelectorAll(".pattern .wrapper").forEach((shift) => {
        const position = shift.getAttribute("value");
        const x = (window.innerWidth - event.pageX * position) / 90;
        const y = (window.innerHeight - event.pageY * position) / 90;
        shift.style.transform = `translateX(${x}px) translateY(${y}px)`;
      });
    }
  </script>

  <script>
    function openPage(pageName) {
      var i, mainTabContent, tabLink;
      mainTabContent = document.getElementsByClassName("main-tab-content");
      tabLink = document.getElementsByClassName("tab-link");
      for (i = 0; i < mainTabContent.length; i++) {
        mainTabContent[i].classList.remove('active');
        mainTabContent[i].style.display = "none";
      }
      document.getElementById(pageName).style.display = "block";
      setTimeout(function() {
        document.getElementById(pageName).classList.add('active');
      }, 400);
    }
    document.getElementById("defaultOpen").click();
  </script>
</body>
</html>