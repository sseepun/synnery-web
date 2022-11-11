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
        <div class="container">

          <?php
            $options = [
              [
                'bg' => 'public/img/content/menu-service-01.jpg',
                'title' => 'Government Standard Website',
                'href' => 'web-gov-standard.php',
              ], [
                'bg' => 'public/img/content/menu-service-02.jpg',
                'title' => 'Unlimited Microsite for Government',
                'href' => 'web-gov-minisite.php',
              ], [
                'bg' => 'public/img/content/menu-service-03.jpg',
                'title' => 'Enterprise Wordpress Solutions',
                'href' => 'enterprise-wordpress-solution.php',
              ],[
                'bg' => 'public/img/content/menu-service-08.jpg',
                'title' => 'E-Office / ERP for Government',
                'href' => 'erp-for-government.php',
              ], 
              [
                'bg' => 'public/img/content/menu-service-05.jpg',
                'title' => 'Full Services Digital Marketing',
                'href' => 'services.php',
              ],[
                'bg' => 'public/img/content/menu-service-04.jpg',
                'title' => 'Network Architecture/ DevSecOps',
                'href' => 'network-security-system.php',
              ],[
                'bg' => 'public/img/content/menu-service-06.jpg',
                'title' => 'AR,VR/3D Virtual Tour, Metaverse',
                'href' => 'virtual-world.php',
              ],[
                'bg' => 'public/img/content/menu-service-07.jpg',
                'title' => 'Live & Virtual Exhibition',
                'href' => 'virtual-world.php',
              ],
            ]
          ?>
          <div class="dropdown-wrapper" data-dropdown="2">
            <div class="d-grid-container <?php if(isset($dropdownActive))echo 'has-active'; ?>">
              <div class="d-grids jc-start pos-relative" style="z-index:2;">
                <?php foreach($options as $i=>$d){ if($i < 4){?>
                  <div class="d-grid <?php if(isset($dropdownActive) && $dropdownActive==$i)echo 'active' ?>">
                    <a href="<?= $d['href'] ?>" class="ss-card">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
                      </div>
                      <div class="line-5"></div><div class="line-6"></div>
                    </a>
                    <div class="text-container">
                      <p class="xxs lh-sm fw-400 mt-3">
                        <?= $d['title'] ?>
                      </p>
                    </div>
                  </div>
                <?php }}?>
              </div>
              <div class="d-grids mt-2">
                <?php foreach($options as $i=>$d){ if($i >= 4){?>
                  <div class="d-grid <?php if(isset($dropdownActive) && $dropdownActive==$i)echo 'active' ?>">
                    <a href="<?= $d['href'] ?>" class="ss-card">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
                      </div>
                      <div class="line-5"></div><div class="line-6"></div>
                    </a>
                    <div class="text-container">
                      <p class="xxs lh-sm fw-400 mt-3">
                        <?= $d['title'] ?>
                      </p>
                    </div>
                  </div>
                <?php }}?>
              </div>
            </div>
            <div class="line-1"></div>
            <div class="line-2"></div>
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
              <a href="services.php">Our Services</a>
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
