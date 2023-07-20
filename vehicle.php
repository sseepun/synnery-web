<!DOCTYPE html>
<html lang="th">

<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>

<body class="loading">
  <!--?php include_once('component/page-loader.php'); ?-->
  <?php $topnavActive = 1;
  include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" data-aos="fade-in" data-aos-delay="0" class="aos-init aos-animate">
    <img class="img" src="public/img/bg/vehicle-banner.jpg" alt="Banner">
  </section>

  <section data-section="2" class="section-12">
    <div class="container">
      <div class="blocks">
        <div class="block-float left">
          <div class="ss-img horizontal-01 no-hover">
            <div class="img-bg" style="background-image:url('public/img/content/vehicle-content-01.jpg');"></div>
          </div>
        </div>
        <div class="block">
          <div class="text-container md">
            <h3 class="color-01 lh-xs fw-600">
              คุณสมบัติในภาพรวมเบื้องต้น
            </h3>
            <ul class="ss-list-01 style-03 color-black">
              <li class="xs fw-300 mt-3">เพิ่ม แก้ไข ลบ รายการรถยนต์ที่ต้องการนำเข้ามาใช้ในระบบได้ไม่จำกัด</li>
              <li class="xs fw-300 mt-3">แสดงผลข้อมูลการของคนจอง เวลาที่จองในรูปแบบปฏิทิน ทั้งแบบรายวัน รายเดือนและแบบ List</li>
              <li class="xs fw-300 mt-3">รองรับการค้นหารถตามประเภท ตามเลขทะเบียน ตามคนขับ เลือกแบบไปอย่างเดียว หรือ เลือกไปกลับ</li>
              <li class="xs fw-300 mt-3">แสดงสถานะรถว่างหรือซ่อม พร้อมบันทึกประวัติซ่อม กำหนดระยะเวลาซ่อม กำหนดวันไป วันกลับ จำนวนคนที่จะไป</li>
              <li class="xs fw-300 mt-3">ผู้โดยสามารถ Vote หรือ Review ให้กับพนักงานขับรถได้</li>
              <li class="xs fw-300 mt-3">มีระบบสถิติ การใช้รถ ประวัติพนักงานขับรถ</li>
              <li class="xs fw-300 mt-3">เลือกใช้แบบ มีระบบอนุมัติการจอง หรือไม่มีการอนุมัติ ได้ตามต้องการ</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-14 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/39.jpg');"></div>
    <div class="background pattern aos-init aos-animate" data-aos="fade-down" data-aos-delay="250" style="background-image: url(./public/img/web-engine/s-03/pattern--1.png);"></div>
    <div class="container">
      <div class="ss-box xl aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <h4 class="title-center lg color-white fw-600 text-uppercase aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
          ตัวอย่างระบบหน้าจอรวมในรูปแบบปฏิทิน
        </h4>
        <div class="card-photo-03 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
          <img class="img" src="public/img/content/vehicle-screen-01.png" style="--delay:.45s;" alt="">
        </div>
      </div>
    </div>
  </section>

  <section data-section="4" class="section-14 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/vehicle-bg-section4.jpg');"></div>
    <div class="container">
      <div class="ss-box xxl aos-init mtb-2 ptb-4 aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="grids no-gap reverse">
          <div class="grid lg-50 w100">
            <div class="card-photo-01 fixed" style="transform: translateX(-4rem) translateY(0rem);">
              <img class="img" src="public/img/content/vehicle-screen-02.png" style="--delay: .45s;" alt="">
            </div>
          </div>

          <div class="grid lg-50 w100 va-center">
            <h4 class="title-center left color-07 lh-2xs aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">ตัวอย่างระบบหน้าจอ
              <br>
              <span class="h4 color-08 lh-xs fw-600">การค้นหารถตามเงื่อนไขที่ต้องการ<span>
                </span></span>
            </h4>
          </div>
        </div>
      </div>
      <div class="ss-box xxl aos-init mtb-2 ptb-4 aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="grids">
          <div class="grid lg-50 w100 va-center">
            <h4 class="title-center left color-07 lh-2xs aos-init" data-aos="fade-up" data-aos-delay="0">ตัวอย่างระบบหน้าจอ
              <br>
              <span class="h4 color-08 lh-xs fw-600">รายการรถทั้งหมดในระบบรองรับ<br>
                การเลือกดูตามเงื่อนไขต่างๆ ได้ง่ายๆ<span>
                </span></span>
            </h4>
          </div>
          <div class="grid lg-50 w100">
            <div class="card-photo-01 fixed" style="transform: translateX(-4rem) translateY(0rem);">
              <img class="img" src="public/img/content/vehicle-screen-03.png" style="--delay: .45s;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="5" class="section-14 section-padding">
    <div class="img-bg" style="background-image:url('public/img/bg/vehicle-bg-section5.jpg');"></div>
    <div class="container">
      <div class="ss-box xxl aos-init mtb-2 ptb-4 aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="grids no-gap reverse">
          <div class="grid lg-50 w100 mt-0">
            <div class="card-photo-02 fixed" style="transform: translateX(4rem) translateY(0rem);">
              <img class="img" src="public/img/content/vehicle-screen-04.png" style="--delay: .45s;" alt="">
            </div>
          </div>

          <div class="grid lg-50 w100 mt-0 va-center">
            <h4 class="title-center left color-07 lh-2xs aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">ตัวอย่างระบบหน้าจอ
              <br>
              <span class="h4 color-08 lh-xs fw-600">รถและพนักงานขับรถ<span>
                </span></span>
            </h4>
          </div>
        </div>
      </div>
      <div class="ss-box xxl aos-init mtb-2 ptb-4 aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="grids no-gap">
          <div class="grid lg-50 w100 mt-0 va-center">
            <h4 class="title-center left color-07 lh-2xs aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">ตัวอย่างระบบหน้าจอ
              <br>
              <span class="h4 color-08 lh-xs fw-600">พนักงานขับรถและ<br>
                รายละเอียดรถ<span>
                </span></span>
            </h4>
          </div>
          <div class="grid lg-50 w100 mt-0">
            <div class="card-photo-02 fixed" style="transform: translateX(-4rem) translateY(0rem);">
              <img class="img" src="public/img/content/vehicle-screen-05.png" style="--delay: .45s;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section data-section="6" class="section-14 section-padding">
  <div class="img-bg" style="background-image:url('public/img/bg/meeting-room-bg-section6.jpg');"></div>
  <div class="container">
      <div class="ss-box xxl aos-init mtb-2 ptb-4 aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="grids no-gap reverse">
          <div class="grid lg-50 w100 mt-0">
            <div class="card-photo-01 fixed" style="transform: translateX(-4rem) translateY(0rem);">
              <img class="img" src="public/img/content/vehicle-screen-02.png" style="--delay: .45s;" alt="">
            </div>
          </div>

          <div class="grid lg-50 w100 mt-0 va-center">
            <h4 class="title-center left color-white lh-2xs aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">ตัวอย่างระบบหน้าจอ
              <br>
              <span class="h4 color-08 lh-xs fw-600">แสดงปัญหารถ หรือการแจ้งเรื่อง<br>
ร้องเรียนต่างๆ พร้อมระบบรายงาน<span>
            </span></span></h4>
          </div>
        </div>
      </div>
      <div class="ss-box xxl aos-init mtb-2 ptb-4 aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="grids no-gap">
          <div class="grid lg-50 w100 mt-0 va-center">
            <h4 class="title-center left color-white lh-2xs aos-init" data-aos="fade-up" data-aos-delay="0">ตัวอย่างระบบหน้าจอ
              <br>
              <span class="h4 color-08 lh-xs fw-600">ระบบรายงานต่างๆ ของระบบจองรถ<span>
            </h4>
          </div>
          <div class="grid lg-50 w100 mt-0">
            <div class="card-photo-01 fixed" style="transform: translateX(-4rem) translateY(0rem);">
              <img class="img" src="public/img/content/vehicle-screen-03.png" style="--delay: .45s;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php $withFooterInfo = true;
  include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>

</html>