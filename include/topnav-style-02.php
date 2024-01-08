<!-- Topnav -->
<nav class="topnav-style-02">
  <div class="wrapper">
    <div class="container">
      <div class="logo-wrapper">
        <a class="logo" href="index.php">
          <img src="public/img/logo-part.png" alt="Logo" />
          <img class="part part-01" src="public/img/logo-part-01.png" alt="Logo Part" />
          <img class="part part-02" src="public/img/logo-part-02.png" alt="Logo Part" />
          <img class="part part-03" src="public/img/logo-part-02.png" alt="Logo Part" />
        </a>
      </div>
      <div class="inner-wrapper">
        <div class="top-panel hide-tablet">
          <?php if(false){?>
            <div class="option">
              <a href="#">SITE MAP</a>
            </div>
            <div class="option-sep">\</div>
            <div class="option">
              <a href="#">CAREER</a>
            </div>
            <div class="option-sep">\</div>
          <?php }?>
          <div class="option op-0 pe-none">
            <a href="#">
              ENGLISH
            </a>
            <div class="dropdown">
              <div class="item">
                <a href="#">THAI</a>
              </div>
            </div>
          </div>
        </div>
        <div class="bottom-panel">
          <div class="menu-container hide-tablet">
            <?php 
              $menu = [
                [
                  'title' => 'Home',
                  'href' => 'index.php'
                ],[
                  'title' => 'Services',
                  'href' => 'javascript:void(0)'
                ],[
                  'title' => 'Products',
                  'href' => 'javascript:void(0)'
                ],[
                  'title' => 'Success stories',
                  'href' => 'javascript:void(0)'
                ],[
                  'title' => 'Company',
                  'href' => 'javascript:void(0)'
                ],[
                  'title' => 'Client',
                  'href' => '#'
                ]
              ]
            ?>

            <?php foreach($menu as $i=>$d) {?>
              <div class="menu <?= $i == 1 || $i == 2 || $i == 3 || $i == 4? 'sub-menu': ''?>
                <?php if(isset($topnavActive) && $topnavActive==$i+1) echo 'active'; ?>" 
                <?php if($i == 1 || $i == 2 || $i == 3){ ?>
                  data-dropdown="<?php echo $i ?>"
                 <?php }?>
                >
                <a href="<?= $d['href'] ?>">
                  <?= $d['title'] ?> 
                  <?php if($i == 1 || $i == 2 || $i == 3 || $i == 4){ ?>
                    <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
                  <?php } ?>
                </a>
                <?php if($i == 4){ ?>
                  <?php
                    $dropDownMenu = [
                      [
                        'icon' => 'public/img/menu-clients/apec.png',
                        'title' => 'About Us',
                        'href' => '#'
                      ],[
                        'icon' => 'public/img/menu-clients/oic.png',
                        'title' => 'For Investor',
                        'href' => '#'
                      ],[
                        'icon' => 'public/img/menu-clients/oic.png',
                        'title' => 'For Startup',
                        'href' => '#'
                      ],[
                        'icon' => 'public/img/menu-clients/oic.png',
                        'title' => 'For Startup',
                        'href' => '#'
                      ],[
                        'icon' => 'public/img/menu-clients/oic.png',
                        'title' => 'Become a Partner',
                        'href' => '#'
                      ],
                    ]
                  ?>
                  <div class="dropdown-container">
                    <div class="dropdown-menu">
                      <div class="wrapper">
                        <div class="icon">

                        </div>
                        <div class="text">

                        </div>
                      </div>
                    </div>
                  </div>
                <?php } ?>
              </div>
            <?php } ?>
             <div class="btns">
              <div class="btn-bubble__container">
                <a href="contact.php" class="button btn-bubble toggle-contact" data-contact="1">
                  Contact Us
                </a>
                <span class="btn-bubble__effect-container">
                  <span class="circle top-left"></span>
                  <span class="circle top-left"></span>
                  <span class="circle top-left"></span>
                  <span class="button effect-button"></span>
                  <span class="circle bottom-right"></span>
                  <span class="circle bottom-right"></span>
                  <span class="circle bottom-right"></span>
                </span>
              </div>
             </div>
          </div>
          
          <div class="option-menu d-none">
            <div class="global-search-toggle">
              <img src="public/img/icon/search.png" alt="Icon" />
            </div>
          </div>
          <div class="option-menu show-tablet">
            <div class="sidenav-toggle">
              <div class="hamburger">
                <div></div><div></div><div></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="topnav-dropdown" id="topnav-menu">
      <div class="scroll-wrapper">
        <div>
          <div class="dropdown-wrapper" data-dropdown="1">
            <div class="container">
              <?php include('data/topnav-style-02/menu/services/full-digital.php'); ?>
              <div class="submenu-blocks menu-container">
                <div class="submenu-block">
                  <p class="fw-600">Full Digital Marketing</p>
                  <?php foreach($fullDigital as $d) {?>
                    <a href="#" class="submenu-block-list style-01">
                    <div class="wrapper">
                      <div class="icon"><?= $d['icon'] ?></div>
                      <div class="text">
                        <p class="title"><?= $d['title'] ?></p>
                        <p class="desc"><?= $d['desc'] ?></p>
                      </div>
                    </div>
                  </a>
                  <?php } ?>
                </div>
                <?php include('data/topnav-style-02/menu/services/corporate-website.php'); ?>
                <div class="submenu-block">
                  <p class="fw-600">Corporate Websites</p>
                  <?php foreach($corporRate as $d) {?>
                    <a href="#" class="submenu-block-list style-02">
                      <div class="wrapper">
                        <div class="icon"><?= $d['icon'] ?></div>
                        <div class="text">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                    </a>
                  <?php } ?>
                </div>
                <?php include('data/topnav-style-02/menu/services/e-office.php'); ?>
                <div class="submenu-block">
                  <p class="fw-600">E-Office for Government</p>
                  <?php foreach($eOffice as $d) {?>
                    <a href="#" class="submenu-block-list style-03">
                      <div class="wrapper">
                        <div class="icon"><?= $d['icon'] ?></div>
                        <div class="text">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                    </a>
                  <?php } ?>
                </div>
                <?php include('data/topnav-style-02/menu/services/other.php'); ?>
                <div class="submenu-block">
                  <p class="fw-600">Other</p>
                  <?php foreach($other as $d) {?>
                    <a href="#" class="submenu-block-list style-04">
                      <div class="wrapper">
                        <div class="icon"><?= $d['icon'] ?></div>
                        <div class="text">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                    </a>
                  <?php } ?>
                </div>
              </div> 
            </div>   
          </div>

          <!-- Products -->
          <div class="dropdown-wrapper products" data-dropdown="2">
            <div class="container">
            <div class="submenu-blocks menu-container">
              <?php include('data/topnav-style-02/menu/products/lark.php'); ?>
              <div class="submenu-block">
                <?php foreach($larkMenu as $d) {?>
                  <p class="fw-600"><?= $d['title'] ?></p>
                  <a href="#" class="ss-card ss-card-56">
                    <div class="ss-img square-02">
                      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    </div>
                  </a>
                <?php } ?>
              </div>  
              <?php include('data/topnav-style-02/menu/products/asana.php'); ?>
              <div class="submenu-block">
                <?php foreach($asanaMenu as $d) {?>
                  <p class="fw-600"><?= $d['title'] ?></p>
                  <a href="#" class="ss-card ss-card-56">
                    <div class="ss-img square-02">
                      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    </div>
                  </a>
                <?php } ?>
              </div> 
              <?php include('data/topnav-style-02/menu/products/device42.php'); ?>
              <div class="submenu-block">
                <?php foreach($device42Menu as $d) {?>
                  <p class="fw-600"><?= $d['title'] ?></p>
                  <a href="#" class="ss-card ss-card-56">
                    <div class="ss-img square-02">
                      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    </div>
                  </a>
                <?php } ?>
              </div> 
              <?php include('data/topnav-style-02/menu/products/displ.php'); ?>
              <div class="submenu-block">
                <?php foreach($displMenu as $d) {?>
                  <p class="fw-600"><?= $d['title'] ?></p>
                  <a href="#" class="ss-card ss-card-56">
                    <div class="ss-img square-02">
                      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    </div>
                  </a>
                <?php } ?>
              </div>  
              <?php include('data/topnav-style-02/menu/products/learning.php'); ?>
              <div class="submenu-block">
                <?php foreach($learningMenu as $d) {?>
                  <p class="fw-600"><?= $d['title'] ?></p>
                  <a href="#" class="ss-card ss-card-56">
                    <div class="ss-img square-02">
                      <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                    </div>
                  </a>
                <?php } ?>
              </div> 
            </div>
            </div>
          </div>

          <!-- Success stories -->
          <div class="dropdown-wrapper success-stories" data-dropdown="3">
            <div class="container">
            <div class="submenu-blocks menu-container">
              <?php include('data/topnav-style-02/menu/success-stories/digital-marketing.php'); ?>
              <div class="submenu-block left">
                <p class="fw-600">Digital Marketing</p>
                <?php foreach($digitalMarketing as $d) {?>
                  <a href="#" class="submenu-block-list">
                    <div class="wrapper">
                      <div class="icon"><?= $d['icon'] ?></div>
                      <div class="text">
                        <p class="title"><?= $d['title'] ?></p>
                      </div>
                    </div>
                  </a>
                <?php } ?>
                <?php include('data/topnav-style-02/menu/success-stories/e-office.php'); ?>
               <p class="fw-600 mt-6">E-Office for Government</p>
                <?php foreach($eOffice as $d) {?>
                  <a href="#" class="submenu-block-list">
                    <div class="wrapper">
                      <div class="icon"><?= $d['icon'] ?></div>
                      <div class="text">
                        <p class="title"><?= $d['title'] ?></p>
                      </div>
                    </div>
                  </a>
                <?php } ?>
              </div>  
              <?php include('data/topnav-style-02/menu/success-stories/corporate-website.php'); ?>
              <div class="submenu-block right">
                <p class="fw-600">Corporate Website</p>
                <div class="grids">
                  <?php foreach($corporateWebsite as $d) {?>
                    <div class="grid lg-1-3 mt-0">
                      <a href="#" class="submenu-block-list">
                        <div class="wrapper">
                          <div class="icon"><?= $d['icon'] ?></div>
                          <div class="text">
                            <p class="title"><?= $d['title'] ?></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  <?php } ?>
                </div>
                <?php include('data/topnav-style-02/menu/success-stories/web-mobile.php'); ?>
                <p class="fw-600 mt-6">Web & Mobile Application</p>
                <div class="grids">
                  <?php foreach($webMobile as $d) {?>
                    <div class="grid lg-1-3 mt-0">
                      <a href="#" class="submenu-block-list">
                        <div class="wrapper">
                          <div class="icon"><?= $d['icon'] ?></div>
                          <div class="text">
                            <p class="title"><?= $d['title'] ?></p>
                          </div>
                        </div>
                      </a>
                    </div>
                  <?php } ?>
                </div>
              </div> 
            </div>
            </div>
          </div>

          <!-- Dropdown Footer -->
          <div class="topnav-dropdown-footer">
            <div class="container">
              <div class="grids">
                <div class="grid lg-60 mt-0">
                  <div class="contacts">
                    <div class="contact-item">
                      <div class="icon">
                        <em class="fa-solid fa-phone"></em>
                      </div>
                      <div class="text">
                        <p class="title">Call</p>      
                        <a href="tel:0623184939" class="desc">+662-318-4939</a><span>,</span> 
                        <a href="tel:06863406895" class="desc">+668-6340-6895</a>
                      </div>
                    </div>
                    <div class="contact-item">
                      <div class="icon">
                        <em class="fa-regular fa-envelope"></em>
                      </div>
                      <div class="text">
                        <p class="title">eMail</p>      
                        <a href="mailto:sales@synerry.com" class="desc">sales@synerry.com</a>
                      </div>
                    </div>
                    <div class="contact-item">
                      <div class="icon line">
                        <em class="fa-brands fa-line"></em>
                      </div>
                      <div class="text">
                        <p class="title">Line OA</p>      
                        <a href="https://page.line.me/flw2270k" class="desc">@synerry</a>
                      </div>
                    </div>
                  </div>            
                </div>      
                <div class="grid lg-40 mt-0">
                  <div class="socials">
                    <div class="social-wrapper">
                      <a href="#" class="social fb">
                        <em class="fa-brands fa-facebook-f"></em>
                      </a>
                      <a href="#" class="social ig">
                        <em class="fa-brands fa-instagram"></em>
                      </a>
                      <a href="#" class="social yt">
                        <em class="fa-brands fa-youtube"></em>
                      </a>
                      <a href="#" class="social tw">
                        <em class="fa-brands fa-twitter"></em>
                      </a>
                      <a href="#" class="social pt">
                        <em class="fa-brands fa-pinterest-p"></em>
                      </a>
                      <a href="#" class="social ln">
                        <em class="fa-brands fa-linkedin-in"></em>
                      </a>
                    </div>
                  </div>
                </div>        
              </div>                
            </div>                  
          </div> 
        </div>
      </div>
      
      </div>
    <div class="dropdown-filter"></div>
  </div>
</nav>
<div class="topnav-spacer"></div>


<!-- Sidenav -->
<nav class="sidenav">
  <div class="wrapper">
    <div class="inner-wrapper">
      <div class="container pos-relative h-full">
        <?php if(false){?>
          <div class="btn-close sidenav-toggle">
            <div class="hamburger">
              <div></div><div></div><div></div>
            </div>
          </div>
        <?php }?>
        <div class="scroll-wrapper">
          <div class="menu-container">
            <div class="menu">
              <a href="index.php">Home</a>
            </div>
            <div class="menu" data-dropdown="1">
              <a href="about.php">About us</a>
            </div>
            <div class="menu" data-dropdown="2">
              <a href="javascript:void(0)">Our Services</a>
              <div class="submenu-container">
                <?php foreach($subMenuServices as $i=>$d) {?>
                  <div class="submenu has-children <?= $i == 0? 'active': '' ?>" data-tab="tab_<?= $i ?>">
                    <a class="title submenu-main p xs lh-sm" href="#">
                      <?= $d['title'] ?><p class="desc lh-sm"><?= $d['desc'] ?></p>
                    </a>
                    
                    <!-- WEB DESIGN -->
                    <?php if($i == 0) {?>
                      <?php include('data/menu/web-design.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($webDesign as $d) {?>
                          <div class="submenu">
                            <a class="title lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- DIGITAL MARKETING -->
                    <?php if($i == 1) {?>
                      <?php include('data/menu/digital-marketing.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($digitalMarketing as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- WEB & MOBILE -->
                    <?php if($i == 2) {?>
                      <?php include('data/menu/web-mobile.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($webMobile as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                     <!-- NETWORK & SECURITY -->
                    <?php if($i == 3) {?>
                      <?php include('data/menu/network-security.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($networkSecurity as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- ARTIFICIAL INTELLIGENCE -->
                    <?php if($i == 4) {?>
                      <?php include('data/menu/artificial-intelligence.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($artificialIntelligence as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- LARK -->
                    <?php if($i == 5) {?>
                      <?php include('data/menu/lark.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($lark as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="menu">
              <a href="javascript:void(0)">Our Works</a>
              <div class="submenu-container">
                <?php foreach($subMenuOurWorks as $i=>$d) {?>
                  <div class="submenu has-children <?= $i == 0? 'active': '' ?>" data-tab="tab_<?= $i ?>">
                    <a class="title submenu-main p xs lh-sm" href="#">
                      <?= $d['title'] ?><p class="desc lh-sm"><?= $d['desc'] ?></p>
                    </a>
                    
                    <!-- PROUND TO PRESENT -->
                    <?php if($i == 0) {?>
                      <?php include('data/menu/pround-present.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($proundPresent as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- SHOWCASE WEB GOVERNMENT -->
                    <?php if($i == 1) {?>
                      <?php include('data/menu/showcase-web.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($showWeb as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- SHOWCASE MKT -->
                    <?php if($i == 2) {?>
                      <?php include('data/menu/showcase-mkt.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($showMKT as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- E-OFFICE -->
                    <?php if($i == 3) {?>
                      <?php include('data/menu/e-office.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($eOffice as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>
                  </div>
                <?php }?>
              </div>
            </div>
            <div class="menu">
              <a href="clients.php">Our Clients</a>
            </div>
            <div class="menu">
              <a href="contact.php">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>


<!-- Global Search Container -->
<div class="global-search-container use-gsap">
  <div class="wrapper">
    <div class="container pos-relative">
      <div class="btn-close">
        <div class="hamburger active global-search-toggle">
          <div></div><div></div><div></div>
        </div>
      </div>
      <form action="./" method="GET">
        <div class="input-container">
          <input type="text" name="keywords" placeholder="ค้นหา..." required>
          <button type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
<div class="global-search-filter global-search-toggle"></div>
