<!-- Topnav -->
<nav class="topnav">
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
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==1)echo 'active'; ?>">
              <a href="index.php">Home</a>
            </div>
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==2)echo 'active'; ?>">
              <a href="about.php">About us</a>
            </div>
            <div class="menu sub-menu <?php if(isset($topnavActive) && $topnavActive==3)echo 'active'; ?>" data-dropdown="2">
              <a href="services.php">
                Our Services <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
              </a>
            </div>
            <div class="menu sub-menu <?php if(isset($topnavActive) && $topnavActive==4)echo 'active'; ?>" data-dropdown="3">
              <a href="services.php">
                Our Works <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
              </a>
            </div>
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==5)echo 'active'; ?>">
              <a href="clients.php">Our Clients</a>
            </div>
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==6)echo 'active'; ?>">
              <a href="career.php">Career</a>
            </div>
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==7)echo 'active'; ?>">
              <a href="contact.php">Contact</a>
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
          <?php
            $subMenuServices = [
              [
                'title' => 'ENTERPRISE WEB DESIGN SOLUTIONS',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'FULL DIGITAL MARKETING SOLUTION',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'ENTERPRISE WEBBASE+MOBILE APPLICATION DEVELOPMENT SERVICES',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'LARK SUITE APPLICATION',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'INTRANET/SOCIAL PRIVATE NETWORK E-LEARNING + KM',
                'desc' => ''
              ]
            ]
          ?>
          <?php 
             $subMenuOurWorks = [
              [
                'title' => 'PROUND TO PRESENT',
                'desc' => ''
              ],[
                'title' => 'SHOWCASE WEB GOVERNMENT',
                'desc' => ''
              ],[
                'title' => 'SHOWCASE MKT',
                'desc' => ''
              ],[
                'title' => 'E-OFFICE',
                'desc' => ''
              ],
            ]
          ?>
          <div class="dropdown-wrapper" data-dropdown="2">
            <div class="submenu-blocks menu-container">
              <div class="submenu-block block-left">
                <?php foreach($subMenuServices as $i=>$d) {?>
                  <div class="submenu has-children <?= $i == 0? 'active': '' ?>" data-tab="tab_<?= $i ?>">
                    <div class="wrapper">
                      <a class="title d-block submenu-main p xs lh-sm" href="#">
                        <?= $d['title'] ?>
                      </a>
                      <p class="desc sm lh-sm"><?= $d['desc'] ?></p>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="submenu-block block-right">
                <?php foreach($subMenuServices as $i=>$d) {?>
                  <div class="menu-content <?= $i==0? 'active': '' ?> "  data-tab="tab_<?= $i ?>">

                    <!-- ENTERPRISE WEB DESIGN SOLUTIONS -->
                    <?php if($i == 0) {?>
                      <?php include('data/menu/web-design.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($webDesign as $d) {?>
                            <div class="grid lg-1-3">
                              <a href="<?= $d['href'] ?>" class="card-submenu">
                                <div class="wrapper">
                                  <div class="icon">
                                    <img src="<?= $d['icon'] ?>" alt="ICON">
                                  </div>
                                  <div class="text">
                                    <p class="title">
                                      <?= $d['title'] ?>
                                    </p>
                                  </div>
                                </div>
                              </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div>
                    <?php }?> 

                    <!-- FULL DIGITAL MARKETING SOLUTION -->
                    <?php if($i == 1) {?>
                      <?php include('data/menu/digital-marketing.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($digitalMarketing as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div> 
                    <?php }?> 
                    
                    <!-- ENTERPRISE WEBBASE+MOBILE APPLICATION DEVELOPMENT SERVICES -->
                    <?php if($i == 2) {?>
                      <?php include('data/menu/web-mobile.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($webMobile as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div> 
                    <?php }?> 

                    <!-- LARK SUITE APPLICATION -->
                    <?php if($i == 3) {?>
                      <?php include('data/menu/lake-suite.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($lakeSuite as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div>  
                    <?php }?>

                    <!-- INTRANET/SOCIAL PRIVATE NETWORK E-LEARNING + KM -->
                    <?php if($i == 4) {?>
                      <?php include('data/menu/intranet-social.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($intranetSocial as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div> 
                    <?php }?>
                  </div>
                <?php }?>
              </div>
            </div>
              <div class="line-1"></div>
              <div class="line-2"></div>
              <div class="line-3"></div>
            </div>

            <div class="dropdown-wrapper" data-dropdown="3">
            <div class="submenu-blocks menu-container">
              <div class="submenu-block block-left">
                <?php foreach($subMenuOurWorks as $i=>$d) {?>
                  <div class="submenu has-children <?= $i == 0? 'active': '' ?>" data-tab="tab_<?= $i ?>">
                    <div class="wrapper">
                      <a class="title d-block submenu-main p xs lh-sm" href="#">
                        <?= $d['title'] ?>
                      </a>
                      <p class="desc sm lh-sm"><?= $d['desc'] ?></p>
                    </div>
                  </div>
                <?php }?>
              </div>
              <div class="submenu-block block-right">
                <?php foreach($subMenuOurWorks as $i=>$d) {?>
                  <div class="menu-content <?= $i==0? 'active': '' ?> "  data-tab="tab_<?= $i ?>">                

                    <!-- PROUND TO PRESENT -->
                    <?php if($i == 0) {?>
                      <?php include('data/menu/pround-present.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($proundPresent as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div> 
                    <?php }?>

                    <!-- SHOWCASE WEB GOVERNMENT -->
                    <?php if($i == 1) {?>
                      <?php include('data/menu/showcase-web.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($showWeb as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div> 
                    <?php }?>

                    <!-- SHOWCASE MKT -->
                    <?php if($i == 2) {?>
                      <?php include('data/menu/showcase-mkt.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($showMKT as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div> 
                    <?php }?>

                    <!-- E-OFFICE -->
                    <?php if($i == 3) {?>
                      <?php include('data/menu/e-office.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($eOffice as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="<?= $d['icon'] ?>" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    <?= $d['title'] ?>
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <?php } ?>
                        </div>
                      </div> 
                    <?php }?>
                  </div>
                <?php }?>
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
                    
                    <!-- ENTERPRISE WEB DESIGN SOLUTIONS -->
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

                    <!-- FULL DIGITAL MARKETING SOLUTION -->
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

                    <!-- ENTERPRISE WEBBASE+MOBILE APPLICATION DEVELOPMENT SERVICES -->
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

                    <!-- LARK SUITE APPLICATION -->
                    <?php if($i == 3) {?>
                      <?php include('data/menu/lake-suite.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($lakeSuite as $d) {?>
                          <div class="submenu">
                            <a class="lg-no-br" href="<?= $d['href'] ?>">
                              <?= $d['title'] ?>
                            </a>
                          </div>
                        <?php } ?>
                      </div>
                    <?php }?>

                    <!-- INTRANET/SOCIAL PRIVATE NETWORK E-LEARNING + KM -->
                    <?php if($i == 4) {?>
                      <?php include('data/menu/intranet-social.php') ?>
                      <div class="submenu-blocks">
                        <?php foreach($intranetSocial as $d) {?>
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
              <a href="contact.php">Contact</a>
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
