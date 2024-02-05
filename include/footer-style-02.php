
<?php if(isset($withFooterInfo) && $withFooterInfo){?>
  <?php if(!isset($withFooterContact) || $withFooterContact){?>
    <section data-section="97" class="section-01 size-04">
      <div class="img-bg" style="background-image:url('public/img/bg/100.jpg');"></div>  
      <div class="container">
        <div class="ss-title">
          <div class="wrapper">
            <h4 class="text-center color-white" data-aos="fade-up" data-aos-delay="0">สอบถามรายละเอียดเพิ่มเติม</h4>
            <div class="btns jc-center" data-aos="fade-up" data-aos-delay="0">
              <div class="btn-bubble__container">
                <a href="#" class="button btn-bubble toggle-contact" data-contact="1">
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
              style="position:relative; width:100%; height:60rem; border:0; overflow:hidden; z-index:1;" 
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
<?php }?>


<!-- Footer -->
<nav class="footer-style-02">
  <div class="pattern style-01">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/34.png" alt="Pattern" />
    </div>
  </div>
  <div class="pattern style-02">
    <div class="wrapper" value=".5">
      <img src="public/img/patterns/31.png" alt="Pattern" />
    </div>
  </div>
  <div class="pattern style-03">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/32.png" alt="Pattern" />
    </div>
  </div>
  <div class="pattern style-04">
    <div class="wrapper" value=".5">
      <img src="public/img/patterns/33.png" alt="Pattern" />
    </div>
  </div>
  <div class="pattern style-05">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/35.png" alt="Pattern" />
    </div>
  </div>
  <div class="pattern style-06">
    <div class="wrapper" value=".5">
      <img src="public/img/patterns/36.png" alt="Pattern" />
    </div>
  </div>
  <div class="img-bg" style="background-image:url('public/img/bg/footer-style-02.jpg');"></div>
  <div class="container" style="z-index:3;">
    <div class="grids mt-6">
      <div class="grid xl-1-3 lg-1-3 md-100 sm-100">
        <div class="top-wrapper">
          <div>
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
              <a class="p xs a-line color-p fw-400" href="#">sales@synerry.com</a>
            </div>
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
                <div class="wrapper">
                  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                  </svg>
                </div>
              </a>
              <a class="hex hex-tw hex-back" href="https://twitter.com/SynerryC" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                  <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
                </svg>
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
      </div>
      <div class="grid xl-1-3 lg-1-3 md-50 sm-100">
        <div class="grids">
          <div class="grid sm-50 mt-0">
            <p class="title">SYNERRY</p>
            <ul class="ss-list style-05">
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Home</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">About Us</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">For Investor</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">For Startup</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Become a Partner</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Activities</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Career</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Clients</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Contact Us</a>
              </li>
            </ul>
          </div>
          <div class="grid sm-50 mt-0">
            <p class="title">SERVICES</p>
            <ul class="ss-list style-05">
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Full Digital Marketing</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Digital & Graphic Design</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Corporate Website</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Microsite for Gov</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">E-Saraban</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">E-Meeting</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">E-Learning</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Web & Mobile Application</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Network & Security</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="grid xl-1-3 lg-1-3 md-50 sm-100">
        <div class="grids">
          <div class="grid sm-50 mt-0">
            <p class="title">PRODUCTS</p>
            <ul class="ss-list style-05">
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Lark</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Asana</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Device42</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">DISPL</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">LearningHub</a>
              </li>
            </ul>
          </div>
          <div class="grid sm-50 mt-0">
            <p class="title">SUCCESS STORIES</p>
            <ul class="ss-list style-05">
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">Global South-South Development Expo 2022</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">สำนักงานประชาสัมพันธ์ สำนักปลัดกรุงเทพมหานคร</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">การกีฬาแห่งประเทศไทย</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">กระทรวงอุตสาหกรรม</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">กระทรวงศึกษาธิการ</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">กระทรวงวัฒนธรรม</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">กระทรวงพลังงาน</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">สำนักงานคณะกรรมการการเลือกตั้ง</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">กรมอนามัย</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">APEC 2022 Thailand</a>
              </li>
              <li>
                <div class="icon">
                  <?php include('public/img/icon/svg/chevron-right.php'); ?>
                </div>
                <a href="#">สำนักงานเศรษฐกิจการเกษตร</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  
    <div class="bottom-wrapper">
      <p class="xs">ลิขสิทธิ์ 1998 - <?= date('Y') ?> บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด</p>
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















