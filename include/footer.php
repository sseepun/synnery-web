
<?php if(isset($withFooterInfo) && $withFooterInfo){?>
  <section data-section="97" class="section-01 size-03">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>
  <section data-section="98" class="section-02 section-padding bg-black pb-0">
    <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
      งานบริการอื่นๆ <span class="fw-100 color-white">ของเรา</span>
    </h3> 
    <div class="swiper-container mt-6" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<12; $i++){?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-03" href="#">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
              </div>
              <div class="filter-02"></div>
              <div class="hover-filter-02"></div>
              <div class="text-container">
                <div class="title p sm fw-400 color-white" href="#">
                  Unlimited Microsite for Government
                  Unlimited Microsite for Government
                  Unlimited Microsite for Government
                </div>
              </div>
              <div class="icon">
                <em class="fa-solid fa-plus"></em>
              </div>
              <div class="line-1"></div><div class="line-2"></div>
            </a> 
          </div>
        <?php }?>
      </div>
    </div>        
  </section>
<?php }?>


<!-- Footer -->
<nav class="footer">
  <div class="pattern style-01">
    <div class="wrapper" value=".5">
      <img src="public/img/content/pattern-09.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-02">
    <div class="wrapper" value=".5">
      <img src="public/img/content/pattern-10.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-03">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-07.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-04">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-08.png" alt="Hero" />
    </div>
  </div>
  <div class="img-bg" style="background-image:url('public/img/bg/footer-02.jpg');"></div>
  <div class="container">
    <div class="top-wrapper">
      <a class="logo pos-relative" style="z-index:2;" href="#">
        <img src="public/img/logo-white.png" alt="Logo" />
      </a>
      <div class="address">
        <p class="sm fw-500">บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด</p>
        <p class="xs mt-1">1/1 ซอยรามคำแหง 12 แยก 2 แขวงหัวหมาก เขตบางกะปิ กทม. 10240</p>
        <p class="xs fw-500 mt-1">+662-318-4939, +668-6340-6895</p>
        <div class="mt-1">
          <a class="p xs a-line color-p fw-400" href="#">sales@jigsawoffice.com</a>
        </div>
      </div>
      <div class="footer-socials pos-relative" style="z-index:2;">
        <div class="hex-icon">
          <a class="hex hex-fb ml-0" href="#">
            <div class="wrapper"><em class="fa-brands fa-facebook-f"></em></div>
          </a>
          <a class="hex hex-fb hex-back ml-0" href="#">
            <div class="wrapper"><em class="fa-brands fa-facebook-f"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-ig" href="#">
            <div class="wrapper"><em class="fa-brands fa-instagram"></em></div>
          </a>
          <a class="hex hex-ig hex-back" href="#">
            <div class="wrapper"><em class="fa-brands fa-instagram"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-yt" href="#">
            <div class="wrapper"><em class="fa-brands fa-youtube"></em></div>
          </a>
          <a class="hex hex-yt hex-back" href="#">
            <div class="wrapper"><em class="fa-brands fa-youtube"></em></div>
          </a>
        </div>
        <div class="hex lg">
          <div class="wrapper">
            <img src="public/img/default/qr-code.jpg" alt="QR Code" />
          </div>
        </div>
        <div class="hex-icon">
          <a class="hex hex-pr" href="#">
            <div class="wrapper"><em class="fa-brands fa-pinterest-p"></em></div>
          </a>
          <a class="hex hex-pr hex-back" href="#">
            <div class="wrapper"><em class="fa-brands fa-pinterest-p"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-tw" href="#">
            <div class="wrapper"><em class="fa-brands fa-twitter"></em></div>
          </a>
          <a class="hex hex-tw hex-back" href="#">
            <div class="wrapper"><em class="fa-brands fa-twitter"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-ln" href="#">
            <div class="wrapper"><em class="fa-brands fa-linkedin-in"></em></div>
          </a>
          <a class="hex hex-ln hex-back" href="#">
            <div class="wrapper"><em class="fa-brands fa-linkedin-in"></em></div>
          </a>
        </div>
      </div>
    </div>
    <div class="bottom-wrapper">
      <p class="xs">ลิขสิทธิ์ 1998 - 2019 บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด</p>
      <p class="xs">เลขประจำตัวผู้เสียภาษี 0105542030547</p>
    </div>
  </div>
</nav>

<!-- Hex Filter -->
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="hex">
      <feGaussianBlur in="SourceGraphic" stdDeviation="2.5" result="blur" />    
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="hex" />
      <feComposite in="SourceGraphic" in2="hex" operator="atop"/>
    </filter>
  </defs>
</svg>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="hex-lg">
      <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />    
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="hex-lg" />
      <feComposite in="SourceGraphic" in2="hex-lg" operator="atop"/>
    </filter>
  </defs>
</svg>

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