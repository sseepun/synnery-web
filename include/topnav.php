<!-- Topnav -->
<nav class="topnav">
  <div class="wrapper">
    <div class="container">
      <div class="logo-wrapper">
        <a class="logo" href="/">
          <img src="public/img/logo.png" alt="Logo" />
        </a>
      </div>
      <div class="inner-wrapper">
        <div class="top-panel hide-tablet">
          <div class="option">
            <a href="#">SITE MAP</a>
          </div>
          <div class="option-sep">\</div>
          <div class="option">
            <a href="#">CAREER</a>
          </div>
          <div class="option-sep">\</div>
          <div class="option">
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
            <div class="menu">
              <a href="#">Home</a>
            </div>
            <div class="menu" data-dropdown="1">
              <a href="#">About us</a>
            </div>
            <div class="menu" data-dropdown="2">
              <a href="#">Our Services</a>
            </div>
            <div class="menu">
              <a href="#">Our Works</a>
            </div>
            <div class="menu">
              <a href="#">Our Clients</a>
            </div>
            <div class="menu">
              <a href="#">Contact</a>
            </div>
          </div>
          <div class="option-menu">
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

          <div class="dropdown-wrapper" data-dropdown="1">
            <div class="d-grids">
              <?php for($i=0; $i<12; $i++){?>
                <div class="d-grid">
                  <a href="#" class="ss-card">
                    <div class="ss-img no-hover">
                      <div class="img-bg" style="background-image:url('public/img/content/topnav-01.jpg');"></div>
                    </div>
                    <div class="text-container">
                      <p class="sm fw-400 mt-3">
                        Web Design / Development
                      </p>
                    </div>
                  </a>
                </div>
              <?php }?>
            </div>
          </div>
          
          <div class="dropdown-wrapper" data-dropdown="2">
            <div class="d-grids">
              <?php for($i=0; $i<12; $i++){?>
                <div class="d-grid">
                  <a href="#" class="ss-card">
                    <div class="ss-img no-hover">
                      <div class="img-bg" style="background-image:url('public/img/content/topnav-01.jpg');"></div>
                    </div>
                    <div class="text-container">
                      <p class="sm fw-400 mt-3">
                        Web Design / Development
                      </p>
                    </div>
                  </a>
                </div>
              <?php }?>
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
    
  </div>
</nav>


<!-- Global Search Container -->
<div class="global-search-container use-gsap">
  <div class="wrapper">
    <div class="hamburger active global-search-toggle">
      <div></div><div></div><div></div>
    </div>
    <div class="container">
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
