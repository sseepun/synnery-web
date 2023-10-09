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

<section data-section="2" class="section-01 section-padding">
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
    <div class="grids pt-6 pos-relative" style="z-index:2;">
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
    <div class="social-blocks">
      <?php for($i=0; $i<5; $i++){?>
        <div class="social-block">
          <div class="ss-card ss-card-36">
            <div class="icon">
              <img class="inactive" src="public/img/icon/social-0<?= ($i%5+1) ?>.png" alt="Icon Inactive" />
              <img class="active" src="public/img/icon/active-social-0<?= ($i%5+1) ?>.png" alt="Icon Active" />
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>
</section>

<section class="section-01 section-padding">   
  <div class="container">
    <div class="text-center color-white pos-relative" style="z-index:2;">
      <h5 class="color-black fw-300 lh-xs">
        วาง <span class="h3 color-01 fw-600 lh-xs">Action Plan</span> และ 
        <span class="h3 color-01 fw-600 lh-xs">งบประมาณ</span>
      </h5>  
      <h5 class="color-black fw-300 lh-xs">
        รวมถึง <span class="h3 color-01 fw-600 lh-xs">Financial Plan</span> และ 
        <span class="h3 color-01 fw-600 lh-xs">Scenario Case</span> ต่างๆ
      </h5>
    </div>
    <div class="grids jc-center pt-3 pos-relative" style="z-index:2;">
      <div class="grid xl-80 sm-100">
        <img class="img" src="public/img/content/01.png" alt="Image" />
      </div>
    </div>
    <div class="btns pt-6 mt-2 jc-center animate-01" style="--delay:.9s;">
      <?php
        $btnBubble = [
          'href' => 'web-gov-standard.php',
          'title' => 'Explore More',
        ];
        include('component/btn-bubble.php');
      ?>
    </div>
  </div> 
</section>