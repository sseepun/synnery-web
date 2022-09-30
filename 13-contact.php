<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>
  

  <section data-section="1" class="section-05 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/21.jpg');"></div>  
    <div class="container">
      <h3 class="color-01 text-center text-shadow fw-600" data-aos="fade-up" data-aos-delay="0">Contact Us</h3> 
      <div class="grids jc-center">
        <div class="grid xl-60 lg-2-3 sm-100 mt-0">
          <p class="xs mt-3" data-aos="fade-up" data-aos-delay="150">
              <span class="text-danger">*</span>จำเป็นต้องกรอก
          </p>
          <div class="mt-3" data-aos="fade-up" data-aos-delay="300">
            <form action="/" method="POST">
              <div class="grids">
                <div class="grid sm-50 mt-3">
                  <div class="form-group">
                    <label class="p sm">ชื่อ-นามสกุล <span class="text-danger">*</span></label>
                    <input type="text" name="name" required title="General Text Input" />
                  </div>
                </div>
                <div class="grid sm-50 mt-3">
                  <div class="form-group">
                    <label class="p sm">บริษัท/องค์กร</label>
                    <input type="text" name="name" required title="General Text Input" />
                  </div>
                </div>
                <div class="grid sm-50 mt-3">
                  <div class="form-group">
                    <label class="p sm">อีเมล <span class="text-danger">*</span></label>
                    <input type="email" name="email" required title="General Text Input" />
                  </div>
                </div>
                <div class="grid sm-50 mt-3">
                  <div class="form-group">
                    <label class="p sm">หมายเลขโทรศัพท์ <span class="text-danger">*</span></label>
                    <input type="text" name="phone" required title="General Text Input" />
                  </div>
                </div>
                <div class="grid sm-50 mt-3">
                  <div class="form-group">
                    <label class="p sm">ต้องการติดต่อเรื่อง <span class="text-danger">*</span></label>
                    <input type="text" name="subject" required title="General Text Input" />
                  </div>
                </div>
                <div class="grid sm-50 mt-3">
                  <div class="form-group">
                    <label class="p sm">โทรศัพท์องค์กร/ที่ทำงาน <span class="text-danger">*</span></label>
                    <input type="text" name="phone" required title="General Text Input" />
                  </div>
                </div>
                <div class="grid sm-100">
                  <div class="form-group">
                    <label class="p sm ">งบประมาณ (บาท) <span class="text-danger">*</span></label>
                    <fieldset>
                      <div class="gallery-grids">
                        <?php
                          foreach([
                            '5001,001 - 1,000,000', '1,000,001 - 1,500,000', '1,500,001 - 2,000,000',
                            '2,000,001 - 2,500,000', '2,500,001 - 3,000,000', '3,000,001 - 5,000,000',
                            'มากกว่า 5,000,000'
                          ] as $i=>$d){
                        ?>
                        <div class="grid md-1-3 sm-1-3 xs-50">
                          <div class="checkbox-set">
                            <input type="radio" name="radio" id="radio_<?= $i ?>" <?php if($i==0)echo 'checked'; ?> />
                            <label for="radio_<?= $i ?>" class="p sm">
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
                    <label class="p sm color-gray">ข้อความ <span class="text-danger">*</span></label>
                    <textarea name="message" rows="5" required title="General Textarea"></textarea>
                  </div>
                </div>
                <div class="grid sm-100">
                  <div class="form-group">
                    <label class="p sm ">คุณรู้จักเราได้อย่างไร <span class="text-danger">*</span></label>
                    <fieldset>
                      <div class="gallery-grids">
                        <?php
                          foreach([
                            'Search from google', 'Facebook Ads.', 'ได้รับการแนะนำจากผู้อื่น',
                            'อื่นๆ'
                          ] as $i=>$d){
                        ?>
                        <div class="grid md-1-3 sm-1-3 xs-50">
                          <div class="checkbox-set">
                            <input type="radio" name="radio" id="radio_<?= $i ?>" <?php if($i==0)echo 'checked'; ?> />
                            <label for="radio_<?= $i ?>" class="p sm">
                              <span><?= $d ?></span>
                            </label>
                          </div>
                        </div>
                        <?php }?>
                      </div>
                    </fieldset>
                  </div>
                </div>
                <div class="captcha-container mt-3">
                  <img class="img" src="public/img/misc/captcha.jpg" alt="CAPTCHA" />
                </div>
              </div>
               <div class="btn-container" data-aos="fade-up" data-aos-delay="450">
                <div class="ss-box xs">
                  <div class="btn-customs" data-aos="fade-up" data-aos-delay="600">
                    <div class="btn-custom">
                      <button type="submit" class="btn btn-action btn-color-01 style-02 fw-300">
                        <p class="sm">สมัคร</p>
                      </button>
                    </div>
                    <div class="btn-custom">
                      <button type="submit" class="btn btn-action btn-color-02 style-02 fw-300">
                        <p class="sm">ดูตำแหน่งอื่นๆ</p>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        </div>
    </div>
  </section>

  <section data-section="2" class="section-03">
    <div class="container">
      <div class="blocks">
        <div class="block style-02">
          <div class="img-bg" style="background-image:url('public/img/content/53.jpg');"></div>
        </div> 
        <div class="subblocks">
          <div class="subblock">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
            <div class="text-wrapper">
              <h3 class="lh-2xs text-uppercase color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
                ติดต่อเรา
              </h3>
              <p class="h6 color-black fw-600 mt-3" data-aos="fade-up" data-aos-delay="150">
                บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
              </p> 
              <p class="lg fw-400" data-aos="fade-up" data-aos-delay="300">
                1/1 ซอยรามคำแหง 12 แยก 2 แขวงหัวหมาก<br>
                เขตบางกะปิ กทม. 10240
              </p>
              <p class="lg fw-600" data-aos="fade-up" data-aos-delay="450">
                +662-318-4939, +668-6340-6895
              </p>
              <a class="p lg color-01 border-bottom-2 bcolor-01 fw-600" href="#" data-aos="fade-up" data-aos-delay="950">
                sales@jigsawoffice.com
              </a>
            </div>
          </div>
        </div> 
      </div>    
    </div>
 </section>

 <section data-section="3" class="pos-relative">
    <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.484526096977!2d100.60988371477923!3d13.749628990348898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f43cb5dd4c7%3A0x2be342a445fba318!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4i-C4tOC4meC5gOC4meC4reC4o-C5jOC4o-C4teC5iCDguITguK3guKPguYzguJvguK3guYDguKPguIrguLHguYjguJkgKOC4m-C4o-C4sOC5gOC4l-C4qOC5hOC4l-C4oikg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1664535415650!5m2!1sth!2sth" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>      
    <div class="mt-3 pos-absolute d-flex jc-center ai-center" style="top:0; left:0; right:0; bottom:0;">
      <img class="img" style="width:15rem; height:auto;" src="public/img/content/07.png" alt="LOGO" />
    </div>                   
 </section>
 
  <section data-section="7" class="section-01 size-01">
    <div class="img-bg" style="background-image:url('public/img/bg/02.jpg');"></div>  
    <div class="container">
      <div class="btns d-flex jc-center" data-aos="fade-up" data-aos-delay="0">
        <a class="btn btn-action style-01 btn-color-01" href="#">
          สอบถามรายละเอียดเพิ่มเติม
        </a>
      </div>    
    </div>  
  </section>

  <section data-section="8" class="section-02 section-padding" style="background:#000000">
    <h4 class="text-center color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
      งานบริการอื่นๆ <span class="fw-100 color-white">ของเรา</span>
    </h4> 
    <div class="swiper-container mt-4" data-aos="fade-up" data-aos-delay="150">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<12; $i++){?>
          <div class="swiper-slide">
          <a class="ss-card ss-card-03 filter-01" href="#">
          <div class="ss-img square">
            <div class="img-bg" style="background-image:url('public/img/content/unsplash-0<?= ($i%6+1) ?>.jpg');"></div>
          </div>
          <div class="text-container">
            <div class="title color-white" href="#">
              Unlimited Microsite for Government
              Unlimited Microsite for Government
              Unlimited Microsite for Government
            </div>
          </div>
          <div class="icon">
            <em class="fa-solid fa-plus"></em>
          </div>
        </a> 
          </div>
        <?php }?>
      </div>
    </div>        
  </section>
  
  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>