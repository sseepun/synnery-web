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
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==3)echo 'active'; ?>" data-dropdown="2">
              <a href="services.php">
                Our Services <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
              </a>
            </div>
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==4)echo 'active'; ?>">
              <a href="clients.php">Our Clients</a>
            </div>
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==5)echo 'active'; ?>">
              <a href="career.php">Career</a>
            </div>
            <div class="menu <?php if(isset($topnavActive) && $topnavActive==6)echo 'active'; ?>">
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
    
    <div class="topnav-dropdown">
      <div class="scroll-wrapper">
        <div>
          <?php
            $subMenu = [
              [
                'title' => 'STANDARD WEBSITE',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'FULL DIGITAL SERVICE',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'FULL DIGITAL MARKETING',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'E-OFFICE DEVELOPMENT',
                'desc' => 'FOR GOVERNMENT'
              ],[
                'title' => 'NETWORK & SECURITY',
                'desc' => 'FOR GOVERNMENT'
              ],
            ]
          ?>
          <div class="dropdown-wrapper" data-dropdown="2">
            <div class="submenu-blocks">
              <div class="submenu-block block-left">
                <?php foreach($subMenu as $i=>$d) {?>
                  <div class="submenu <?= $i == 0? 'active': '' ?>" data-tab="tab_<?= $i ?>">
                    <a class="title submenu-main p xs lh-sm" href="#">
                      <?= $d['title'] ?><p class="desc p lh-sm"><?= $d['desc'] ?></p>
                    </a>
                  </div>
                <?php }?>
              </div>
              <div class="submenu-block block-right">
                <?php foreach($subMenu as $i=>$d) {?>
                  <div class="menu-content <?= $i==0? 'active': '' ?> "  data-tab="tab_<?= $i ?>">
                    <?php if($i == 0) {?>
                      <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                      <div style="position:relative; z-index:5;">
                          <div class="grids">
                            <div class="grid lg-1-3">
                              <a href="#" class="card-submenu">
                                <div class="wrapper">
                                  <div class="icon">
                                    <img src="public/img/icon/topnav-menu-01.png" alt="ICON">
                                  </div>
                                  <div class="text">
                                    <p class="title">
                                      Government<br> 
                                      Standard Website
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="grid lg-1-3">
                              <a href="#" class="card-submenu">
                                <div class="wrapper">
                                  <div class="icon">
                                    <img src="public/img/icon/topnav-menu-02.png" alt="ICON">
                                  </div>
                                  <div class="text">
                                    <p class="title">
                                      Unlimited Microsite<br>
                                      for Government
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </div>
                            <div class="grid lg-1-3">
                              <a href="#" class="card-submenu">
                                <div class="wrapper">
                                  <div class="icon">
                                    <img src="public/img/icon/topnav-menu-03.png" alt="ICON">
                                  </div>
                                  <div class="text">
                                    <p class="title">
                                    Enterprise Wordpress<br>
                                    Solutions
                                    </p>
                                  </div>
                                </div>
                              </a>
                            </div>
                          </div>
                      </div> 
                    <?php }?> 
                    <?php if($i == 1) {?>
                      <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                      <div style="position:relative; z-index:5;">
                        <div class="grids">
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-04.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    Full Services Digital<br>Marketing
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-02.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    AR, VR/3D Virtual Tour,<br>Metaverse
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-03.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    Live & Virtual<br>Exhibition
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div> 
                    <?php }?> 
                    <?php if($i == 2) {?>
                      <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                      <div style="position:relative; z-index:5;">
                        <div class="grids">
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-04.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    jigsaw Web Engine
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-02.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    Jigsaw Meeting Room
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-03.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                   jigsaw Vehicle
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-04.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    jigsaw HRM
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-02.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    Jigsaw Help Desk
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-03.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    E-Learning
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-04.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    E-Saraban /<br>E-Signature
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-02.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    E-Document
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-03.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    E-Budgeting
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-04.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    E-Form
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-02.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    Intranet & KM
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-03.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    PDPA
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div> 
                    <?php }?> 
                    <?php if($i == 3) {?>
                      <p class="color-p fw-500"><?= $d['title'] ?> <?= $d['desc'] ?></p> 
                      <div style="position:relative; z-index:5;">
                        <div class="grids">
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-04.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    Full Services Digital<br>Marketing
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-02.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    AR, VR/3D Virtual Tour,<br>Metaverse
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-03.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    Live & Virtual<br>Exhibition
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      </div> 
                    <?php }?>
                    <?php if($i == 4) {?>
                      <p class="color-p fw-500"><?= $d['title'] ?></p> 
                      <div style="position:relative; z-index:5;">
                        <div class="grids">
                          <div class="grid lg-1-3">
                            <a href="#" class="card-submenu">
                              <div class="wrapper">
                                <div class="icon">
                                  <img src="public/img/icon/topnav-menu-04.png" alt="ICON">
                                </div>
                                <div class="text">
                                  <p class="title">
                                    DevSecOps
                                  </p>
                                </div>
                              </div>
                            </a>
                          </div>
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
              <a href="javascript:">Our Services</a>
              <div class="submenu-container">
                <div class="submenu">
                  <a href="web-gov-standard.php">
                    Government Standard Website
                  </a>
                </div>
                <div class="submenu">
                  <a href="web-gov-minisite.php">
                    Unlimited Microsite for Government
                  </a>
                </div>
                <div class="submenu">
                  <a href="enterprise-wordpress-solution.php">
                    Enterprise Wordpress Solutions
                  </a>
                </div>
                <div class="submenu">
                  <a href="erp-for-government.php">
                    E-Office / ERP for Government
                  </a>
                </div>
                <div class="submenu">
                  <a href="services.php">
                    Full Services Digital Marketing
                  </a>
                </div>
                <div class="submenu">
                  <a href="network-security-system.php">
                    Network Architecture/ DevSecOps
                  </a>
                </div>
                <div class="submenu">
                  <a href="virtual-world.php">
                    AR,VR/3D Virtual Tour, Metaverse
                  </a>
                </div>
                <div class="submenu">
                  <a href="virtual-world.php">
                    Live & Virtual Exhibition
                  </a>
                </div>
              </div>
            </div>
            <div class="menu">
              <a href="career.php">Our Works</a>
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
