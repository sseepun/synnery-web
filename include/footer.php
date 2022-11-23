
<?php if(isset($withFooterInfo) && $withFooterInfo){?>
  <?php if(!isset($withFooterContact) || $withFooterContact){?>
    <section data-section="97" class="section-01 size-03">
      <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
      <div class="container">
        <div class="btns jc-center" data-aos="fade-up" data-aos-delay="0">
          <div class="btn-bubble__container">
            <a href="#" class="button btn-bubble toggle-contact" data-contact="1">
              สอบถามรายละเอียดเพิ่มเติม
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
    </section>
    <section class="section-05 section-padding toggle-contact-section" data-contact="1" style="display:none;"> 
      <div class="pattern style-01" style="z-index:2;">
        <div class="wrapper" value=".5">
          <img src="public/img/content/pattern-18.png" alt="Hero">
        </div>
      </div>
      <div class="container" style="z-index:1;">
        <h3 class="color-01 text-center text-shadow fw-600">
          Contact Us
        </h3>
        <?php if(false){?>
          <div class="grids jc-center">
            <div class="grid xl-60 lg-2-3 sm-100 mt-0">
              <div class="mt-3" data-aos="fade-up" data-aos-delay="300">
                <form action="/" method="POST">
                  <p class="xs fw-400 mt-3" data-aos="fade-up" data-aos-delay="150">
                    <span class="text-danger">*</span> จำเป็นต้องกรอก
                  </p>
                  <div class="grids">
                    <div class="grid sm-50 mt-3">
                      <div class="form-group">
                        <label class="p sm fw-500">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                        <input type="text" name="name" required title="General Text Input" />
                      </div>
                    </div>
                    <div class="grid sm-50 mt-3">
                      <div class="form-group">
                        <label class="p sm fw-500">บริษัท/องค์กร</label>
                        <input type="text" name="name" required title="General Text Input" />
                      </div>
                    </div>
                    <div class="grid sm-50 mt-3">
                      <div class="form-group">
                        <label class="p sm fw-500">อีเมล <span class="text-danger">*</span></label>
                        <input type="email" name="email" required title="General Text Input" />
                      </div>
                    </div>
                    <div class="grid sm-50 mt-3">
                      <div class="form-group">
                        <label class="p sm fw-500">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                        <input type="text" name="phone" required title="General Text Input" />
                      </div>
                    </div>
                    <div class="grid sm-50 mt-3">
                      <div class="form-group">
                        <label class="p sm fw-500">ต้องการติดต่อเรื่อง <span class="text-danger">*</span></label>
                        <input type="text" name="subject" required title="General Text Input" />
                      </div>
                    </div>
                    <div class="grid sm-50 mt-3">
                      <div class="form-group">
                        <label class="p sm fw-500">โทรศัพท์องค์กร/ที่ทำงาน <span class="text-danger">*</span></label>
                        <input type="text" name="phone" required title="General Text Input" />
                      </div>
                    </div>
                    <div class="grid sm-100">
                      <div class="form-group">
                        <label class="p sm fw-500">งบประมาณ (บาท) <span class="text-danger">*</span></label>
                        <fieldset>
                          <div class="gallery-grids">
                            <?php
                              foreach([
                                '500,000 - 1,000,000', '1,000,001 - 1,500,000', '1,500,001 - 2,000,000',
                                '2,000,001 - 2,500,000', '2,500,001 - 3,000,000', '3,000,001 - 5,000,000',
                                'มากกว่า 5,000,000'
                              ] as $i=>$d){
                            ?>
                            <div class="grid md-1-3 sm-1-3 xs-100">
                              <div class="checkbox-set">
                                <input type="radio" name="radio" id="radio_<?= $i ?>" <?php if($i==0)echo 'checked'; ?> />
                                <label for="radio_<?= $i ?>" class="p sm fw-400">
                                  <span><?= $d ?></span>
                                </label>
                              </div>
                            </div>
                            <?php }?>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-3">
                      <div class="form-group">
                        <label class="p sm fw-500">ต้องการติดต่อเรื่อง <span class="text-danger">*</span></label>
                        <textarea name="message" rows="5" required title="General Textarea"></textarea>
                      </div>
                    </div>
                    <div class="grid sm-100">
                      <div class="form-group">
                        <label class="p sm fw-500">คุณรู้จักเราได้อย่างไร <span class="text-danger">*</span></label>
                        <fieldset>
                          <div class="gallery-grids">
                            <?php
                              foreach([
                                'Search from btn-bubble-patterngle', 'Facebook Ads.', 'ได้รับการแนะนำจากผู้อื่น',
                                'อื่นๆ'
                              ] as $i=>$d){
                            ?>
                            <div class="grid md-1-3 sm-1-3 xs-100">
                              <div class="checkbox-set">
                                <input type="radio" name="radio" id="radio_<?= $i ?>" <?php if($i==0)echo 'checked'; ?> />
                                <label for="radio_<?= $i ?>" class="p sm fw-400">
                                  <span><?= $d ?></span>
                                </label>
                              </div>
                            </div>
                            <?php }?>
                          </div>
                        </fieldset>
                      </div>
                    </div>
                    <div class="captcha-container mt-6">
                      <div class="g-recaptcha" data-sitekey="your_site_key"></div>
                    </div>
                  </div>
                  <div class="btn-container">
                    <div class="ss-box xs">
                      <div class="btn-customs">
                        <div class="btn-custom">
                          <button type="submit" class="btn btn-action btn-color-01 style-02">
                            <p class="fw-400">ตกลง</p>
                          </button>
                        </div>
                        <div class="btn-custom">
                          <button type="submit" class="btn btn-action btn-color-02 style-02">
                            <p class="fw-400">ยกเลิก</p>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        <?php }else{?>
          <div data-aos="fade-up" data-aos-delay="150">
            <iframe 
              style="position:relative; width:100%; height:1470px; border:0; overflow:hidden; z-index:1;" 
              src="https://form.asana.com/?k=oniAq4i-fs1lCMY8wWWOBw&d=688901825130647&embed=true" 
            ></iframe>
          </div>
        <?php }?>
      </div>
    </section>
  <?php }?>

  <?php 
    $services = [
      [
        'title' => 'Unlimited Microsite for Government',
        'bg' => 'public/img/content/menu-service-02.jpg',
        'url' => 'web-gov-minisite.php'
      ],[
        'title' => 'Enterprise Wordpress<br>Solutions',
        'bg' => 'public/img/content/menu-service-03.jpg',
        'url' => 'enterprise-wordpress-solution.php'
      ],[
        'title' => 'NetWork Architecture/<br>DevSecOps',
        'bg' => 'public/img/content/menu-service-04.jpg',
        'url' => 'network-security-system.php'
      ],[
        'title' => 'Full Services Digital<br>Marketing',
        'bg' => 'public/img/content/menu-service-05.jpg',
        'url' => 'services.php'
      ],[
        'title' => 'AR, VR/3D Virtual Tour<br>Metaverse',
        'bg' => 'public/img/content/menu-service-06.jpg',
        'url' => 'virtual-world.php'
      ],[
        'title' => 'E-office/ ERP for<br>Government',
        'bg' => 'public/img/content/menu-service-08.jpg',
        'url' => 'erp-for-government.php'
      ]
    ]
  ?>
  <section data-section="98" class="section-02 section-padding bg-black pb-0">
    <h3 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
      งานบริการอื่นๆ <span class="fw-100 color-white">ของเรา</span>
    </h3> 
    <div class="swiper-container mt-6" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php foreach($services as $d){?>
          <div class="swiper-slide">
            <a class="ss-card ss-card-03" href="<?= $d['url']?>">
              <div class="ss-img square">
                <div class="img-bg" style="background-image:url('<?= $d['bg']?>');"></div>
              </div>
              <div class="filter-02"></div>
              <div class="hover-filter-02"></div>
              <div class="text-container">
                <div class="title p sm fw-400 color-white" href="#">
                  <?= $d['title']?>
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
      <div class="logo-wrapper">
        <a class="logo" href="index.php">
          <img src="public/img/logo-white-part.png" alt="Logo" />
          <img class="part part-01" src="public/img/logo-white-part-01.png" alt="Logo Part" />
          <img class="part part-02" src="public/img/logo-part-02.png" alt="Logo Part" />
          <img class="part part-03" src="public/img/logo-part-02.png" alt="Logo Part" />
        </a>
      </div>
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
          <a class="hex hex-fb ml-0" href="https://www.facebook.com/Synerry/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-facebook-f"></em></div>
          </a>
          <a class="hex hex-fb hex-back ml-0" href="https://www.facebook.com/Synerry/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-facebook-f"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-ig" href="https://www.instagram.com/lifeatsynerry/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-instagram"></em></div>
          </a>
          <a class="hex hex-ig hex-back" href="https://www.instagram.com/lifeatsynerry/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-instagram"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-yt" href="https://www.youtube.com/channel/UCJMXUE5qQiTcWwicqpHmPLg" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-youtube"></em></div>
          </a>
          <a class="hex hex-yt hex-back" href="https://www.youtube.com/channel/UCJMXUE5qQiTcWwicqpHmPLg" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-youtube"></em></div>
          </a>
        </div>
        <div class="hex lg">
          <div class="wrapper">
            <img src="public/img/default/qr-code.jpg" alt="QR Code" />
          </div>
        </div>
        <div class="hex-icon">
          <a class="hex hex-pr" href="https://www.pinterest.com/synerrylife/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-pinterest-p"></em></div>
          </a>
          <a class="hex hex-pr hex-back" href="https://www.pinterest.com/synerrylife/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-pinterest-p"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-tw" href="https://twitter.com/SynerryC" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-twitter"></em></div>
          </a>
          <a class="hex hex-tw hex-back" href="https://twitter.com/SynerryC" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-twitter"></em></div>
          </a>
        </div>
        <div class="hex-icon">
          <a class="hex hex-ln" href="https://www.linkedin.com/in/synerry-corporation-thailand-co-ltd/" target="_blank">
            <div class="wrapper"><em class="fa-brands fa-linkedin-in"></em></div>
          </a>
          <a class="hex hex-ln hex-back" href="https://www.linkedin.com/in/synerry-corporation-thailand-co-ltd/" target="_blank">
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
<svg style="visibility:hidden; position:absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="hex">
      <feGaussianBlur in="SourceGraphic" stdDeviation="2.5" result="blur" />    
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="hex" />
      <feComposite in="SourceGraphic" in2="hex" operator="atop"/>
    </filter>
  </defs>
</svg>
<svg style="visibility:hidden; position:absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
  <defs>
    <filter id="hex-lg">
      <feGaussianBlur in="SourceGraphic" stdDeviation="5" result="blur" />    
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="hex-lg" />
      <feComposite in="SourceGraphic" in2="hex-lg" operator="atop"/>
    </filter>
  </defs>
</svg>

<!-- Button Bubble -->
<svg style="visibility:hidden; position:absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" class="btn-bubble-pattern">
  <defs>
    <filter id="btn-bubble-pattern">
      <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
      <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="btn-bubble-pattern" />
      <feComposite in="SourceGraphic" in2="btn-bubble-pattern"/>
    </filter>
  </defs>
</svg>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NZGTD78"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
