<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" class="section-05 section-padding bg-05"> 
    <div class="pattern style-01">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-18.png" alt="Hero">
      </div>
    </div>
    <div class="container" style="z-index:2;">
      <h3 class="color-01 text-center text-shadow fw-600" data-aos="fade-up" data-aos-delay="0">
        Contact Us
      </h3> 
      <div class="grids jc-center">
        <div class="grid xl-60 lg-2-3 sm-100 mt-0">
          <p class="xs fw-400 mt-3" data-aos="fade-up" data-aos-delay="150">
            <span class="text-danger">*</span>จำเป็นต้องกรอก
          </p>
          <div class="mt-3" data-aos="fade-up" data-aos-delay="300">
            <form action="/" method="POST">
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
                            '5001,001 - 1,000,000', '1,000,001 - 1,500,000', '1,500,001 - 2,000,000',
                            '2,000,001 - 2,500,000', '2,500,001 - 3,000,000', '3,000,001 - 5,000,000',
                            'มากกว่า 5,000,000'
                          ] as $i=>$d){
                        ?>
                        <div class="grid md-1-3 sm-1-3 xs-50">
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
                            'Search from google', 'Facebook Ads.', 'ได้รับการแนะนำจากผู้อื่น',
                            'อื่นๆ'
                          ] as $i=>$d){
                        ?>
                        <div class="grid md-1-3 sm-1-3 xs-50">
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
                  <img class="img" src="public/img/misc/captcha.jpg" alt="CAPTCHA" />
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
    </div>
  </section>

  <section data-section="2" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/53.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
          <div class="text-container md">
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
  </section>

  <section data-section="3" class="pos-relative">
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.484526096977!2d100.60988371477923!3d13.749628990348898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e29f43cb5dd4c7%3A0x2be342a445fba318!2z4Lia4Lij4Li04Lip4Lix4LiXIOC4i-C4tOC4meC5gOC4meC4reC4o-C5jOC4o-C4teC5iCDguITguK3guKPguYzguJvguK3guYDguKPguIrguLHguYjguJkgKOC4m-C4o-C4sOC5gOC4l-C4qOC5hOC4l-C4oikg4LiI4Liz4LiB4Lix4LiU!5e0!3m2!1sth!2sth!4v1664535415650!5m2!1sth!2sth" 
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>      
    <div class="mt-3 pos-absolute" style="transform:translate(50%,-50%); top:50%; right:50%;">
      <img class="img" style="width:15rem; height:auto;" src="public/img/content/07.png" alt="LOGO" />
    </div>                   
  </section>
 
  <?php $withFooterInfo=true; $withFooterContact=false; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>