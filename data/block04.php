<?php 
  $contents = [
    [
      'title' => 'วิเคราะห์',
      'desc' => 'วิเคราะห์ เป้าหมาย, ปัญหา, กลุ่มเป้าหมาย เพื่อวางแผนกลยุทธ์',
      'bg' => 'public/img/content/content-36.jpg'
    ],[
      'title' => 'ช่องทางการสือสาร',
      'desc' => 'กำหนดสื่อ และ ช่องทางที่<br>จะใช้ในการสื่อสาร',
      'bg' => 'public/img/content/content-37.jpg'
    ],[
      'title' => 'สร้าง Content',
      'desc' => 'สร้าง Content ให้โดดเด่น<br>น่าสนใจ และ สื่อสาร',
      'bg' => 'public/img/content/content-38.jpg'
    ],[
      'title' => 'เพิ่มประสิทธิภาพ',
      'desc' => 'นำข้อมูลมาวิเคราะห์ ปรับแต่ง  เพื่อเพิ่มประสิทธิภาพ ให้ได้ตามเป้าหมาย',
      'bg' => 'public/img/content/content-39.jpg'
    ]
  ]
?>

<section data-section="2" class="section-01 section-padding pt-0 pb-5">
  <div class="pattern style-47">
    <div class="wrapper" value=".5">
      <img src="public/img/patterns/07.png" alt="Hero">
    </div>
  </div>
  <div class="pattern style-48">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/08.png" alt="Hero">
    </div>
  </div>
  <div class="container">
    <div class="grids pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="0">
      <?php foreach($contents as $d){?>
        <div class="grid xl-25 lg-25 md-50 sm-50 xs-100">
          <a class="ss-card ss-card-05">
            <div class="ss-img vertical-01">
              <div class="img-bg" style="background-image:url('<?= $d['bg']?>');"></div>
            </div>
            <div class="filter-02"></div>
            <div class="hover-filter-01"></div>
            <div class="text-container">
              <div class="title h5 color-01 lh-xs fw-500">
                <?= $d['title']?>
              </div>
              <div class="desc p sm color-white fw-400">
                <?= $d['desc'] ?>
              </div>
            </div>
            <div class="line-1"></div><div class="line-2"></div>
          </a>
        </div>
      <?php }?>
    </div>
    <div class="social-blocks" data-aos="fade-up" data-aos-delay="150">
      <div class="social-block">
        <div class="ss-card ss-card-36">
          <div class="icon">
            <img class="inactive" src="public/img/icon/social-01.png" alt="Icon Inactive" />
            <img class="active" src="public/img/icon/active-social-01.png" alt="Icon Active" />
          </div>
        </div>
      </div>
      <div class="social-block">
        <div class="ss-card ss-card-36">
          <div class="icon">
            <img class="inactive" src="public/img/icon/social-02.png" alt="Icon Inactive" />
            <img class="active" src="public/img/icon/active-social-02.png" alt="Icon Active" />
          </div>
        </div>
      </div>
      <div class="social-block">
        <div class="ss-card ss-card-36">
          <div class="icon tw">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
            </svg>
          </div>
        </div>
      </div>
      <div class="social-block">
        <div class="ss-card ss-card-36">
          <div class="icon">
            <img class="inactive" src="public/img/icon/social-04.png" alt="Icon Inactive" />
            <img class="active" src="public/img/icon/active-social-04.png" alt="Icon Active" />
          </div>
        </div>
      </div>
      <div class="social-block">
        <div class="ss-card ss-card-36">
          <div class="icon">
            <img class="inactive" src="public/img/icon/social-05.png" alt="Icon Inactive" />
            <img class="active" src="public/img/icon/active-social-05.png" alt="Icon Active" />
          </div>
        </div>
      </div>
    </div>
  </div>
</section>