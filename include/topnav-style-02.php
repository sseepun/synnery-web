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
              <div class="menu <?= $i == 1 || $i == 2 || $i == 3? 'sub-menu': ''?> <?=  $i == 4 ? 'company': ''?> <?=  $i == 0 || $i == 5 ? 'not-sub': ''?>
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
                  <?php include('data/topnav-style-02/menu/company/company.php'); ?>
                  <div class="dropdown-container">
                    <?php foreach($companyMenu as $d) {?>
                      <a href="#" class="dropdown-menu">
                        <div class="wrapper">
                          <div class="icon">
                           <?= $d['icon'] ?>
                          </div>
                          <div class="text">
                            <p class="title"><?= $d['title'] ?></p>
                          </div>
                        </div>
                      </a>
                    <?php } ?>
                  </div>
                <?php } ?>
              </div>
            <?php } ?>
             <div class="btns" style="z-index:95;">
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
    
    <div class="topnav-dropdown">
      <div class="scroll-wrapper">
        <div>
          <div class="dropdown-wrapper services" data-dropdownlist="1">
            <div class="container">
              <?php include('data/topnav-style-02/menu/services/full-digital.php'); ?>
              <div class="submenu-blocks menu-container">
                <div class="submenu-block">
                  <p class="fw-600">Full Digital Marketing</p>
                  <?php foreach($fullDigital as $d) {?>
                    <a href="<?= $d['link'] ?>" class="submenu-block-list style-01">
                      <div class="wrapper">
                        <div class="icon"><?= $d['icon'] ?></div>
                        <div class="text">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                      <div class="bg-color"></div>
                    </a>
                  <?php } ?>
                </div>
                <?php include('data/topnav-style-02/menu/services/corporate-website.php'); ?>
                <div class="submenu-block">
                  <p class="fw-600">Corporate Websites</p>
                  <?php foreach($corporRate as $d) {?>
                    <a href="<?= $d['link'] ?>" class="submenu-block-list style-02">
                      <div class="wrapper">
                        <div class="icon"><?= $d['icon'] ?></div>
                        <div class="text">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                      <div class="bg-color"></div>
                    </a>
                  <?php } ?>
                </div>
                <?php include('data/topnav-style-02/menu/services/e-office.php'); ?>
                <div class="submenu-block">
                  <p class="fw-600">E-Office for Government</p>
                  <?php foreach($eOfficeService as $d) {?>
                    <a href="<?= $d['link'] ?>" class="submenu-block-list style-03">
                      <div class="wrapper">
                        <div class="icon"><?= $d['icon'] ?></div>
                        <div class="text">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                      <div class="bg-color"></div>
                    </a>
                  <?php } ?>
                </div>
                <?php include('data/topnav-style-02/menu/services/other.php'); ?>
                <div class="submenu-block">
                  <p class="fw-600">Other</p>
                  <?php foreach($other as $d) {?>
                    <a href="<?= $d['link'] ?>" class="submenu-block-list style-04">
                      <div class="wrapper">
                        <div class="icon"><?= $d['icon'] ?></div>
                        <div class="text">
                          <p class="title"><?= $d['title'] ?></p>
                          <p class="desc"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                      <div class="bg-color"></div>
                    </a>
                  <?php } ?>
                </div>
              </div> 
            </div> 
            <!-- Dropdown Footer -->
            <?php include('include/topnav-dropdown-footer.php'); ?>   
          </div>

          <!-- Products -->
          <div class="dropdown-wrapper products" data-dropdownlist="2">
            <div class="container">
              <div class="submenu-blocks menu-container">
                <?php include('data/topnav-style-02/menu/products/lark.php'); ?>
                <div class="submenu-block">
                  <?php foreach($larkMenu as $d) {?>
                    <p class="fw-600"><?= $d['title'] ?></p>
                    <a href="<?= $d['link'] ?>" class="ss-card ss-card-56">
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
                    <a href="<?= $d['link'] ?>" class="ss-card ss-card-56">
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
                    <a href="<?= $d['link'] ?>" class="ss-card ss-card-56">
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
                    <a href="<?= $d['link'] ?>" class="ss-card ss-card-56">
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
                    <a href="<?= $d['link'] ?>" class="ss-card ss-card-56">
                      <div class="ss-img square-02">
                        <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
                      </div>
                    </a>
                  <?php } ?>
                </div> 
              </div>
            </div>
            <!-- Dropdown Footer -->
            <?php include('include/topnav-dropdown-footer.php'); ?>
          </div>

          <!-- Success stories -->
          <div class="dropdown-wrapper success-stories" data-dropdownlist="3">
            <div class="container">
              <div class="submenu-blocks menu-container">
                <?php include('data/topnav-style-02/menu/success-stories/digital-marketing.php'); ?>
                <div class="submenu-block left">
                  <p class="fw-600">Digital Marketing</p>
                  <?php foreach($digitalMarketing as $d) {?>
                    <a href="<?= $d['link'] ?>" class="submenu-block-list">
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
                    <a href="<?= $d['link'] ?>" class="submenu-block-list">
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
                        <a href="<?= $d['link'] ?>" class="submenu-block-list">
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
                        <a href="<?= $d['link'] ?>" class="submenu-block-list">
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
            <!-- Dropdown Footer -->
            <?php include('include/topnav-dropdown-footer.php'); ?>
          </div>
        </div>
      </div>
      </div>
    <div class="dropdown-filter"></div>
  </div>
</nav>
<div class="topnav-spacer"></div>


<!-- Sidenav -->
<nav class="sidenav style-02">
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
            <div class="menu">
              <?php include('data/topnav-style-02/menu/services/categories.php'); ?>
              <a href="javascript:void(0)">Services</a>
              <div class="submenu-container">
                <?php foreach($categories as $i=>$d) {?>
                  <div class="submenu has-children <?= $i == 0? 'active': '' ?>" data-tab="tab_<?= $i ?>">
                    <a class="title submenu-main p xs lh-sm" href="javascript:void(0)">
                      <?= $d['title'] ?>
                    </a>
                    
                    <!-- Full Digital Marketing -->
                    <?php if($i == 0) {?>
                      <div class="submenu-blocks">
                        <?php foreach($fullDigital as $d) {?>
                          <div class="submenu">
                            <a class="title lg-no-br" href="<?= $d['link'] ?>">
                              <?= $d['title'] ?><p class="desc lh-sm"><?= $d['desc'] ?></p>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- Corporate Websites -->
                    <?php if($i == 1) {?>
                      <div class="submenu-blocks">
                        <?php foreach($corporRate as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['link'] ?>">
                              <?= $d['title'] ?><p class="desc lh-sm"><?= $d['desc'] ?></p>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- E-Office for Government -->
                    <?php if($i == 2) {?>
                      <div class="submenu-blocks">
                        <?php foreach($eOfficeService as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['link'] ?>">
                              <?= $d['title'] ?><p class="desc lh-sm"><?= $d['desc'] ?></p>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                     <!-- Other -->
                    <?php if($i == 3) {?>
                      <div class="submenu-blocks">
                        <?php foreach($other as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['link'] ?>">
                              <?= $d['title'] ?><p class="desc lh-sm"><?= $d['desc'] ?></p>
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
              <?php include('data/topnav-style-02/menu/products/categories.php'); ?>
              <a href="javascript:void(0)">Products</a>
              <div class="submenu-container">
                <div class="submenu ">
                  <div class="submenu-blocks">
                    <?php foreach($productCategories as $d) {?>
                      <div class="submenu">
                        <a class="lg-no-br" href="javascript:void(0)">
                          <?= $d['title'] ?>
                        </a>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="menu">
              <?php include('data/topnav-style-02/menu/success-stories/categories.php'); ?>
              <a href="javascript:void(0)">Success stories</a>
              <div class="submenu-container">
                <?php foreach($successCategories as $i=>$d) {?>
                  <div class="submenu has-children <?= $i == 0? 'active': '' ?>" data-tab="tab_<?= $i ?>">
                    <a class="title submenu-main p xs lh-sm" href="<?= $d['link'] ?>">
                      <?= $d['title'] ?>
                    </a>
                    
                    <!-- Full Digital Marketing -->
                    <?php if($i == 0) {?>
                      <div class="submenu-blocks">
                        <?php foreach($digitalMarketing as $d) {?>
                          <div class="submenu">
                            <a class="title lg-no-br" href="<?= $d['link'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- Corporate Websites -->
                    <?php if($i == 1) {?>
                      <div class="submenu-blocks">
                        <?php foreach($corporateWebsite as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['link'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- E-Office for Government -->
                    <?php if($i == 2) {?>
                      <div class="submenu-blocks">
                        <?php foreach($eOffice as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['link'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                     <!-- Web & Mobile Application -->
                    <?php if($i == 3) {?>
                      <div class="submenu-blocks">
                        <?php foreach($webMobile as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['link'] ?>">
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
              <?php include('data/topnav-style-02/menu/products/categories.php'); ?>
              <a href="javascript:void(0)">Company</a>
              <div class="submenu-container">
                <div class="submenu ">
                  <div class="submenu-blocks">
                    <?php foreach($companyMenu as $d) {?>
                      <div class="submenu">
                        <a class="lg-no-br" href="<?= $d['href'] ?>">
                          <?= $d['title'] ?>
                        </a>
                      </div>
                    <?php } ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="menu">
              <a href="contact.php">Contact Us</a>
            </div>
          </div>
          <nav class="sidenav-footer">
            <div class="sidenav-contacts">
              <div class="sidenav-contact">
                <div class="icon">
                  <em class="fa-solid fa-phone"></em>
                </div>
                <div class="text">
                  <p class="title">Call</p>
                  <a href="tel:0623184939" class="desc">+662-318-4939</a><span>,</span> 
                  <a href="tel:06863406895" class="desc">+668-6340-6895</a>
                </div>
              </div>
              <div class="sidenav-contact">
                <div class="icon">
                  <em class="fa-regular fa-envelope"></em>
                </div>
                <div class="text">
                  <p class="title">eMail</p>      
                  <a href="mailto:sales@synerry.com" class="desc">sales@synerry.com</a>
                </div>
              </div>
              <div class="sidenav-contact">
                <div class="icon">
                  <em class="fa-brands fa-line"></em>
                </div>
                <div class="text">
                  <p class="title">Line OA</p>      
                  <a href="https://page.line.me/flw2270k" class="desc">@synerry</a>
                </div>
              </div>
            </div>
            <div class="sidenav-socials">
              <a href="#" class="social">
                <em class="fa-brands fa-facebook-f"></em>
              </a>
              <a href="#" class="social">
                <em class="fa-brands fa-instagram"></em>
              </a>
              <a href="#" class="social">
                <em class="fa-brands fa-youtube"></em>
              </a>
              <a href="#" class="social">
                <em class="fa-brands fa-twitter"></em>
              </a>
              <a href="#" class="social">
                <em class="fa-brands fa-pinterest-p"></em>
              </a>
              <a href="#" class="social">
                <em class="fa-brands fa-linkedin-in"></em>
              </a>
            </div>
          </nav>
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
