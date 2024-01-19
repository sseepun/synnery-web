<!-- Topnav -->
<nav class="topnav">
  <div class="wrapper">
    <div class="container">
      <div class="logo-wrapper">
        <a class="logo" href="index.php">
          <img src="<?php echo DOMAIN ?>public/img/logo-part.png" alt="Logo" />
          <img class="part part-01" src="<?php echo DOMAIN ?>public/img/logo-part-01.png" alt="Logo Part" />
          <img class="part part-02" src="<?php echo DOMAIN ?>public/img/logo-part-02.png" alt="Logo Part" />
          <img class="part part-03" src="<?php echo DOMAIN ?>public/img/logo-part-02.png" alt="Logo Part" />
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
                  'title' => 'About us',
                  'href' => 'about.php'
                ],[
                  'title' => 'Our Services',
                  'href' => 'javascript:void(0)'
                ],[
                  'title' => 'Our Works',
                  'href' => 'javascript:void(0)'
                ],[
                  'title' => 'Our Clients',
                  'href' => 'clients.php'
                ],[
                  'title' => 'Career',
                  'href' => 'career.php'
                ],[
                  'title' => 'Contact',
                  'href' => 'contact.php'
                ],
              ]
            ?>

            <?php foreach($menu as $i=>$d) {?>
              <div class="menu <?= $i == 2 || $i == 3? 'sub-menu': ''?>
                <?php if(isset($topnavActive) && $topnavActive==$i+1) echo 'active'; ?> 
                <?php if($i == 3) { echo 'd-none'; } ?>
                " 
                <?php if($i == 2 || $i == 3){ ?>
                  data-dropdown="<?php echo $i ?>"
                 <?php }?>
                >
                <a href="<?= $d['href'] ?>">
                  <?= $d['title'] ?> 
                  <?php if($i == 2 || $i == 3){ ?>
                    <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
                  <?php } ?>
                </a>
              </div>
            <?php } ?>
          </div>
          
          <div class="option-menu d-none">
            <div class="global-search-toggle">
              <img src="<?php echo DOMAIN ?>public/img/icon/search.png" alt="Icon" />
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
                'title' => 'WEB DESIGN',
                'desc' => 'STANDARD SOLUTION'
              ],[
                'title' => 'DIGITAL MARKETING',
                'desc' => 'FULL SERVICE'
              ],[
                'title' => 'WEB & MOBILE',
                'desc' => 'APPLICATION DEVELOPMENT'
              ],[
                'title' => 'NETWORK & SECURITY',
                'desc' => 'SERVICE'
              ],[
                'title' => 'ARTIFICIAL INTELLIGENCE',
                'desc' => 'SOLUTION'
              ],[
                'title' => 'LARK',
                'desc' => ''
              ]
            ]
          ?>
          <?php 
             $subMenuOurWorks = [
              [
                'title' => 'PROUND TO PRESENT',
                'desc' => ''
              ],/*[
                'title' => 'SHOWCASE WEB GOVERNMENT',
                'desc' => ''
              ],[
                'title' => 'SHOWCASE MKT',
                'desc' => ''
              ],[
                'title' => 'E-OFFICE',
                'desc' => ''
              ],*/
            ]
          ?>
          <div class="dropdown-wrapper" data-dropdown="2">
            <div class="submenu-blocks menu-container">
              <div class="submenu-block block-left">
                <?php foreach($subMenuServices as $i=>$d) {?>
                  <div class="submenu has-children <?= $i == 0? 'active': '' ?> <?= ($i == 2 || $i == 4 || $i == 3) ? 'd-none':'' ?>" data-tab="tab_<?= $i ?>">
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

                    <!-- WEB DESIGN -->
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
                                    <?= $d['icon'] ?>
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

                    <!-- DIGITAL MARKETING -->
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
                                  <?= $d['icon'] ?>
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
                    
                    <!-- WEB & MOBILE -->
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
                                  <?= $d['icon'] ?>
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
                    <?php } ?> 

                    <!-- NETWORK & SECURITY -->
                    <?php if($i == 3) {?>
                      <?php include('data/menu/network-security.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($networkSecurity as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <?= $d['icon'] ?>
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

                    <!-- ARTIFICIAL INTELLIGENCE -->
                    <?php if($i == 4) {?>
                      <?php include('data/menu/artificial-intelligence.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($artificialIntelligence as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <?= $d['icon'] ?>
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

                    <!-- LARK -->
                    <?php if($i == 5) {?>
                      <?php include('data/menu/lark.php') ?>
                      <div class="block-content">
                        <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                        <div class="grids">
                          <?php foreach($lark as $d) {?>
                            <div class="grid lg-1-3">
                            <a href="<?= $d['href'] ?>" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <?= $d['icon'] ?>
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
                                <div class="icon <?= $d['classer'] ?>">
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
                                <div class="icon <?= $d['classer'] ?>">
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
              <div class="line-1"></div>
              <div class="line-2"></div>
              <div class="line-3"></div>
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
