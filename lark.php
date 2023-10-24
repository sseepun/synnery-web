<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>


  <?php 
    $banner = [
      ['imgBg' => 'public/img/lark/banner/01.jpg'],
      ['imgBg' => 'public/img/lark/banner/02.jpg'],
      ['imgBg' => 'public/img/lark/banner/03.jpg'],
      ['imgBg' => 'public/img/lark/banner/04.jpg'],
    ]
  ?>
  <section data-section="1" class="banner-04">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php foreach($banner as $d) {?>
          <div class="swiper-slide">
          <div class="wrapper">
            <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section class="section-padding section-18">
    <div class="img-bg" style="background-image:url('public/img/lark/bg/01.png');"></div>
    <div class="container">
      <div class="title-header" data-aos="fade-up" data-aos-delay="0">
        <div class="logo">
          <img src="public/img/lark/logo/lark-logo.png" alt="Lark Logo">
        </div>
        <h2 class="fw-700 ml-2">Lark <span class="h3 color-p fw-500">คืออะไร</span></h2>
        <div class="question-mark">
          <img src="public/img/lark/icon/question-mark.png" alt="Lark Logo">
        </div>
      </div>
      <p class="lg text-center color-p fw-800" data-aos="fade-up" data-aos-delay="150">
        ALL IN ONE E-OFFICE APPLICATION 
        <span class="color-black fw-400 sm-no-br">
          แพลตฟอร์มที่รวมโปรแกรมสำหรับคนทำงาน<br>
          มากกว่า <span class="color-p fw-800">20 โปรแกรม</span>
          <span class="color-black fw-400">มาไว้ในหน้าจอเดียว</span>
        </span>
      </p>
      <div class="ss-box md mt-6">
      <div class="grids">
        <div class="grid lg-50 md-50 sm-50 mt-0" data-aos="fade-up" data-aos-delay="300">
          <div class="block-left">
          <p class="color-black fw-400 sm-no-br">
            สัมผัสประสบการณ์ใหม่ของการทำงานในยุคดิจิตัล<br>
            ด้วย <span class="fw-800">Lark</span> 
            <span class="color-p fw-800 sm-no-br">All in One E-Office<br>Applications</span>
            <span class="sm-no-br">แพลตฟอร์มที่รวมทุกอย่างของ<br>การทำงานไว้ในหน้าจอเดียว</span>
          </p>
          <div class="tiktok-content mt-4">
            <div class="wrapper">
              <div class="icon">
                <img src="public/img/lark/icon/tiktok.png" alt="TikTok Icon">
              </div>
              <div class="text">
                <p class="xs sm-no-br">บริหารโดย <span class="fw-700">Bydance</span> 
                เจ้าของเดียวกัน<br>กับ <span class="fw-700">TikTok</span><p>
              </div>
            </div>
          </div>
          <div class="feature-container">
            <div class="grids jc-center">
              <div class="grid lg-1-3 md-1-3 sm-50 xs-1-3 mt-0">
                <div class="feature-item">
                  <p class="number font-gilroy">39%</p>
                  <p class="xxxs text text-center">
                    meeting time shortened
                  </p>
                </div>
              </div>
              <div class="grid lg-1-3 md-1-3 sm-50 xs-1-3  mt-0">
                <div class="feature-item">
                  <p class="number font-gilroy">70%</p>
                  <p class="xxxs text text-center">
                    cast saved
                  </p>
                </div>
              </div>
              <div class="grid lg-1-3 md-1-3 sm-50 xs-1-3 mt-0">
                <div class="feature-item">
                  <p class="number font-gilroy">10%</p>
                  <p class="xxxs text text-center">
                    operational efficiency
                  </p>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
        <div class="grid lg-50 md-50 sm-50 mt-0 mt-xs" data-aos="fade-up" data-aos-delay="450">
          <div class="img-container">
            <div class="ss-card ss-card-42 no-border">
              <img class="img" src="public/img/lark/content/01.jpg" alt="Image">
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>      
  </section>

  <section class="section-padding">
    <div class="container">
      <h2 class="fw-700 text-center lh-sm" data-aos="fade-up" data-aos-delay="0">
        Lark <span class="color-p">Together</span>
      </h2>
      <p class="h3 text-center color-p fw-500 lh-sm" data-aos="fade-up" data-aos-delay="150">
        แอปเดียวจบ!! <span class="color-black">ครบทุกการทำงาน</span>
      </p>
      <div class="ss-box xl size-02">
        <div class="grids">
          <div class="grid lg-100 md-100 sm-100" data-aos="fade-up" data-aos-delay="300">
            <div class="ss-card ss-card-45">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ss-img h-full">
                    <div class="img-bg" style="background-image:url('public/img/lark/content/02.jpg');"></div>
                  </div>
                </div>
                <div class="text-container">
                  <h4 class="color-p fw-700 lh-sm">WORKING TOGETHER</h4>
                  <div class="grids">
                    <div class="grid lg-1-3 md-1-3 xs-50 mt-0">
                      <p class="fw-700">FOR EVERYONE</p>
                      <ul class="ss-list-02">
                        <li>Messenger</li>
                        <li>Meeting</li>
                        <li>Meeting Room</li>
                        <li>Calendar</li>
                        <li>Email</li>
                        <li>Workspace</li>
                        <li>Approval</li>
                        <li>Reminder</li>
                      </ul>
                    </div>
                    <div class="grid lg-1-3 md-1-3 xs-50 mt-0">
                      <p class="fw-700">FOR HR</p>
                      <ul class="ss-list-02">
                        <li>Attendance</li>
                        <li>OKR</li>
                        <li>Leave</li>
                        <li>Overtime</li>
                        <li>Out of office</li>
                        <li>Business Trip Request</li>
                      </ul>
                    </div>
                    <div class="grid lg-1-3 md-1-3 mt-0 mt-sm">
                      <p class="fw-700">FOR ACCOUNTING</p>
                      <ul class="ss-list-02">
                        <li>Seal Request</li>
                        <li>Reimbursement</li>
                        <li>Purchase</li>
                        <li>Payment Request</li>
                        <li>Direct Deposit Request</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="450">
            <div class="ss-card ss-card-46">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ss-img h-full">
                    <div class="img-bg" style="background-image:url('public/img/lark/content/03.jpg');"></div>
                  </div>
                </div>
                <div class="text-container">
                  <h4 class="color-p title fw-700 lh-xs">CHATTING TOGETHER</h4>
                  <ul class="ss-list-02">
                    <li>Messenger</li>
                    <li>Meeting</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="600">
            <div class="ss-card ss-card-46">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ss-img h-full">
                    <div class="img-bg" style="background-image:url('public/img/lark/content/04.jpg');"></div>
                  </div>
                </div>
                <div class="text-container">
                  <h4 class="color-p title fw-700 lh-xs">SHARING TOGETHER</h4>
                  <ul class="ss-list-02">
                    <li>Contacts</li>
                    <li>Moment</li>
                    <li>Wiki</li>
                    <li>Lingo</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>      
  </section>

  <section class="section-padding section-19">
    <div class="img-bg" style="background-image:url('public/img/lark/bg/02.jpg');"></div>
    <div class="container" style="z-index:3;">
      <p class="h3 fw-700 text-center lh-xs color-p" data-aos="fade-up" data-aos-delay="0">
        ALL THE APPS YOU NEED.
      </p>
      <h2 class="lg fw-700 font-popins text-center lh-2xs" data-aos="fade-up" data-aos-delay="150">
        In one Lark.
      </h2>
      <div class="ss-box xl size-02 mt-2">
        <div class="grids">
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="300">
            <div class="img-container right">
              <div class="ss-card ss-card-47">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/img/lark/content/05.jpg');"></div>
                </div>
                <div class="icon-inner">
                  <img src="public/img/lark/icon/chat.png" alt="Chat Icon">
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="300">
            <div class="text-container left">
              <h4 class="color-p font-gilroy fw-700">Messenger</h4>
              <p class="fw-400 sm-no-br">
                แชทสำหรับการทำงาน คือ เครื่องมือสื่อสารที่ออกแบบมาเพื่อการทำงานโดยเฉพาะ 
                ช่วยให้พนักงานในองค์กรสามารถสื่อสารกันได้<br>อย่างรวดเร็วและมีประสิทธิภาพ 
                แชทสำหรับการทำงานมักมี<br>คุณสมบัติดังต่อไปนี้
              </p>
              <ul class="ss-list-03 style-03 mt-3">
                <li>สามารถสร้างห้องแชทสำหรับแต่ละแผนกหรือทีม</li>
                <li>เชิญบุคคลภายนอกองค์กรเข้ามาในห้องแชทได้</li>
                <li>สามารถทำงานร่วมกัน เช่น การแชร์ไฟล์ การวิดีโอคอล การแชร์หน้าจอ</li>
                <li>สามารถจัดการงาน เช่น การมอบหมายงาน การติดตามงาน</li>
              </ul>
              <p class="color-p fw-500 mt-2">
                มากกว่า! <span class="color-black">
                แชทธรรมดาทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
              </p>
              <ul class="ss-list-04 mt-3">
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  Video Call และกด Record
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  Pin, Flag ข้อความสำคัญ
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  ตั้งประกาศกลุ่ม ดูได้ว่าใครอ่าน หรือยังไม่อ่าน
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  เชื่อมดูปฏิทินและนัดหมาย
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  สร้าง Task มอบหมายงานและติดตาม
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  สร้าง Threads & Topics
                </li>
              </ul>
            </div>
          </div>
        </div>  
        <div class="grids mt-adaptive reverse">
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="450">
            <div class="text-container right">
              <h4 class="color-p font-gilroy fw-700">Meeting</h4>
              <p class="fw-400">
                ประชุมออนไลน์ คือ เครื่องมือการประชุมออนไลน์ที่คุ้มค่าและตอบโจทย์ทุกความต้องการ 
                เหมาะสำหรับองค์กรทุกขนาดที่ต้องการยกระดับประสิทธิภาพการประชุมและการทำงานแบบดิจิทัล 
                รองรับอุปกรณ์ทุกแพลตฟอร์ม รองรับการแชร์หน้าจอและไฟล์ ช่วยให้การประชุมมีประสิทธิภาพมากขึ้น 
                ประหยัดค่าใช้จ่าย ทำงานร่วมกันได้อย่างราบรื่น
              </p>
              <p class="color-p fw-500 mt-2">
                มากกว่า! <span class="color-black">
                การประชุมทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
              </p>
              <ul class="ss-list-04 mt-3">
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  คุมเวลาในการประชุม ด้วยตัวเวลา นับถอยหลัง
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  บันทึกการประชุม
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  แสดง Subtitle และแปลภาษา
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  เชื่อมระบบ Doc ดึงเข้ามาทำงาน  ร่วมกันในที่ประชุม
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  ถอดเสียงในการประชุมเป็นข้อความ
                </li>
              </ul>
            </div>
          </div>
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="450">
            <div class="img-container left">
              <div class="ss-card ss-card-47">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/img/lark/content/06.jpg');"></div>
                </div>
                <div class="icon-inner left">
                  <img src="public/img/lark/icon/video.png" alt="Video Icon">
                </div>
              </div>
            </div>
          </div>
        </div> 
        <div class="grids mt-adaptive">
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="600">
            <div class="img-container right">
              <div class="ss-card ss-card-47">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/img/lark/content/07.jpg');"></div>
                </div>
                <div class="icon-inner">
                  <img src="public/img/lark/icon/document.png" alt="Document Icon">
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="600">
            <div class="text-container left">
              <h4 class="color-p font-gilroy fw-700">Docs</h4>
              <p class="fw-400">
                Lark Docs เป็นเครื่องมือสร้างเอกสารออนไลน์ที่ครบครัน 
                ช่วยให้ผู้ใช้สามารถสร้างและทำงานร่วมกันในเอกสารได้อย่างมีประสิทธิภาพ 
                ตอบโจทย์ทั้งการทำงานคนเดียวและทำงานเป็นทีม ข้อมูลเอกสารยังถูกจัดเก็บอย่างปลอดภัยอีกด้วย 
                เพิ่มประสิทธิภาพในทำเอกสารได้รวดเร็ว<br>และสะดวกยิ่งขึ้น ส่งเสริมการทำงานร่วมกัน 
              </p>
              <p class="color-p fw-500 mt-2">
                มากกว่า! <span class="color-black">
                แอปจัดการเอกสารทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
              </p>
              <ul class="ss-list-04 mt-3">
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  จัดเก็บไฟล์ส่วนตัว
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  สร้างเอกสารใช้งานร่วมกันแอปอื่นๆ
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  สร้างเอกสารใช้งานร่วมกันแอปอื่นๆ
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  ป้องกันการ Capture หรือ Download ด้วยลายน้ำ
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  การติดตาม การแก้ไขเอกสาร
                </li>
              </ul>
            </div>
          </div>
        </div> 
        <div class="grids mt-adaptive reverse">
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="750">
            <div class="text-container right">
              <h4 class="color-p font-gilroy fw-700">Moments</h4>
              <p class="fw-400">
                Lark Moment เป็นฟีเจอร์ใหม่ล่าสุดของ Lark ที่ช่วยให้พนักงานสามารถแบ่งปันเรื่องราว 
                ข่าวสาร หรือเหตุการณ์ต่างๆ ที่เกิดขึ้นในองค์กรได้อย่างรวดเร็วและง่ายดาย ในรูปแบบของโพสต์สั้นๆ 
                พร้อมรูปภาพหรือวิดีโอประกอบ สามารถติดตามข่าวสารและกิจกรรมต่างๆ ที่เกิดขึ้นในองค์กรได้อย่างรวดเร็ว 
                แบ่งปันความรู้และประสบการณ์กับผู้อื่น
              </p>
              <p class="color-p fw-500 mt-2">
                มากกว่า! <span class="color-black">
                ระบบอินทราเน็ตทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
              </p>
              <ul class="ss-list-04 mt-3">
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  Social network ภายในองค์กร
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  เพิ่มกลุ่มและสิทธิการเข้าถึง
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  โปรโมท แจ้งข่าวในครั้งเดียว
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  กรองคำหยาบ
                </li>
                <li>
                  <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                  สร้าง Official Account
                </li>
              </ul>
            </div>
          </div>
          <div class="grid lg-50 md-50 sm-100" data-aos="fade-up" data-aos-delay="750">
            <div class="img-container left">
              <div class="ss-card ss-card-47">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/img/lark/content/08.jpg');"></div>
                </div>
                <div class="icon-inner left">
                  <img src="public/img/lark/icon/web.png" alt="Web Icon">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="grids mt-adaptive">
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="0">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon">
                  <img src="public/img/lark/icon/mail.png" alt="Mail Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">Mail</h4>
                  <p class="fw-400">
                    Lark Mail เป็นฟีเจอร์อีเมลของ Lark ที่ช่วยให้ผู้ใช้สามารถส่ง
                    และรับอีเมลได้ภายในองค์กร ฟีเจอร์นี้รองรับคุณสมบัติพื้นฐานของอีเมล 
                    เช่น การตอบกลับ การตอบกลับทั้งหมด การแนบไฟล์ การกรองอีเมล เป็นต้น
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบอีเมลทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ใช้งานง่ายและสะดวก ออกแบบมาสำหรับการใช้งานบนอุปกรณ์เคลื่อนที่ 
                      ช่วยให้ผู้ใช้สามารถเข้าถึงและจัดการอีเมลได้อย่างง่ายดาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ปลอดภัยและเชื่อถือได้ รองรับการเข้ารหัส SSL/TLS ช่วยให้ข้อมูลอีเมลของผู้ใช้ได้รับการปกป้อง
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ทำงานร่วมกับแอป Lark อื่น ๆ ได้อย่างราบรื่น ช่วยให้ผู้ใช้สามารถทำงานร่วมกันได้อย่างมีประสิทธิภาพ
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon">
                  <img src="public/img/lark/icon/wiki.png" alt="Wiki Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">Wiki</h4>
                  <p class="fw-400">
                    Lark Wiki เป็นฟีเจอร์ Wiki ของ Lark ที่ช่วยให้ผู้ใช้สามารถสร้างและจัดการฐานความรู้ภายในองค์กรได้ 
                    ฟีเจอร์นี้ช่วยให้ผู้ใช้สามารถบันทึกข้อมูลและเอกสารต่างๆ ได้อย่างเป็นระเบียบและเข้าถึงได้ง่าย
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบฐานความรู้ทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      เป็นแหล่งข้อมูลผลิตภัณฑ์หรือบริการ
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      เป็นคู่มือการใช้งาน
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      เป็นแหล่งข้อมูลนโยบายและระเบียบปฏิบัติภายในองค์กร
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="300">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon sm">
                  <img src="public/img/lark/icon/Approval.png" alt="Wiki Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">Approval</h4>
                  <p class="fw-400">
                    Lark Approval เป็นฟีเจอร์การอนุมัติของ Lark ที่ช่วยให้ผู้ใช้สามารถอนุมัติหรือปฏิเสธคำขอต่างๆ 
                    ได้ ฟีเจอร์นี้ช่วยให้ผู้ใช้สามารถควบคุมการเข้าถึงและจัดการข้อมูลและทรัพยากรต่างๆ ได้อย่างมีประสิทธิภาพ
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบอนุมัติทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      สามารถสร้างกระบวนการอนุมัติได้อย่างรวดเร็วและง่ายดาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      กำหนดผู้อนุมัติได้
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      กำหนดเงื่อนไขการอนุมัติได้
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ติดตามสถานะการอนุมัติได้
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="450">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon md">
                  <img src="public/img/lark/icon/task.png" alt="Task Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">Task</h4>
                  <p class="fw-400">
                    Lark Task เป็นฟีเจอร์การจัดการงานของ Lark ที่ช่วยให้ผู้ใช้สามารถติดตามและจัดการงานต่างๆ 
                    ได้ ฟีเจอร์นี้ช่วยให้ผู้ใช้สามารถสร้างงานใหม่ กำหนดเวลางาน มอบหมายงาน และติดตามความคืบหน้าของงาน
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบจ่ายงานทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      สามารถสร้างงานใหม่ได้อย่างรวดเร็วและง่ายดาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      กำหนดเวลางานและกำหนดส่งงาน
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      มอบหมายงานให้กับผู้อื่น
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ติดตามความคืบหน้าของงาน
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      แสดงรายการงานตามสถานะ
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ค้นหางานตามชื่อหรือคำอธิบาย
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="600">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon">
                  <img src="public/img/lark/icon/okr.png" alt="OKR Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">OKR</h4>
                  <p class="fw-400">
                    Lark OKR เป็นฟีเจอร์การจัดการเป้าหมายของ Lark ที่ช่วยให้ผู้ใช้สามารถกำหนดและติดตามเป้าหมายขององค์กรได้ 
                    ฟีเจอร์นี้ช่วยให้ผู้ใช้สามารถกำหนดเป้าหมาย กำหนดตัวชี้วัดความสำเร็จ และติดตามความคืบหน้าของเป้าหมาย
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบการหนดเป้าหมายของพนักงานแบบทั่ว</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      กำหนดเป้าหมายที่ชัดเจนและวัดผลได้
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      กำหนดตัวชี้วัดความสำเร็จที่สามารถวัดได้
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ติดตามความคืบหน้าของเป้าหมาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      รายงานความคืบหน้าของเป้าหมาย
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="750">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon">
                  <img src="public/img/lark/icon/form.png" alt="Form Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">Form</h4>
                  <p class="fw-400">
                    Lark Form เป็นฟีเจอร์การสร้างแบบฟอร์มของ Lark 
                    ที่ช่วยให้ผู้ใช้สามารถสร้างแบบฟอร์มออนไลน์ได้อย่างรวดเร็วและง่ายดาย 
                    ฟีเจอร์นี้ช่วยให้ผู้ใช้สามารถรวบรวมข้อมูลและความคิดเห็นจากผู้อื่นได้อย่างมีประสิทธิภาพ
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบแบบสอบถามแบบทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      สร้างแบบฟอร์มใหม่ได้อย่างรวดเร็วและง่ายดาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      เพิ่มคำถามและตัวเลือกได้หลากหลาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      กำหนดการเข้าถึงแบบฟอร์มได้
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="900">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon">
                  <img src="public/img/lark/icon/Annoucement.png" alt="Annoucement Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">Annoucement</h4>
                  <p class="md fw-400">
                    Lark Annoucement เป็นฟีเจอร์การแจ้งข่าวของ Lark ที่ช่วยให้ผู้ใช้สามารถ
                    แจ้งข่าวและประกาศต่างๆ ให้กับผู้ใช้ทุกคนในองค์กรได้ ฟีเจอร์นี้ช่วยให้ผู้ใช้สามารถ
                    แจ้งข่าวและประกาศต่างๆ ได้อย่างมีประสิทธิภาพและทั่วถึง
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบประกาศทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      สร้างประกาศใหม่ได้อย่างรวดเร็วและง่ายดาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      กำหนดผู้รับประกาศได้
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      ตรวจสอบได้ว่ามีใครเห็นและกดรับทราบ
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50" data-aos="fade-up" data-aos-delay="1050">
            <div class="ss-card ss-card-48">
              <div class="wrapper">
                <div class="icon md">
                  <img src="public/img/lark/icon/minutes.png" alt="Annoucement Icon">
                </div>
                <div class="text-container">
                  <h4 class="color-p font-gilroy fw-700">Minutes</h4>
                  <p class="fw-400">
                    Lark Minutes เป็นฟีเจอร์บันทึกการประชุมของ Lark ที่ช่วยให้ผู้ใช้สามารถบันทึก
                    การประชุมได้อย่างรวดเร็วและง่ายดาย ฟีเจอร์นี้ช่วยให้ผู้ใช้สามารถบันทึกการประชุม
                    ได้อย่างครบถ้วนและมีประสิทธิภาพ
                  </p>
                  <p class="color-p fw-500 mt-2">
                    มากกว่า! <span class="color-black">
                    ระบบบันทึกการประชุมทั่วไป</span> <span class="color-black fw-400">ไม่ว่าจะเป็น</span>
                  </p>
                  <ul class="ss-list-04 mt-3">
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      บันทึกการประชุมได้อย่างรวดเร็วและง่ายดาย
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      สร้างบันทึกการประชุมได้อัตโนมัติ
                    </li>
                    <li>
                      <div class="icon"><em class="fa-solid fa-caret-right"></em></div>
                      แชร์บันทึกการประชุมได้
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php 
    $content = [
      [
        'logo' => 'public/img/lark/logo/zapier.png',
        'title' => 'Zapier Connector',
        'alt' => 'Zapier'
      ],[
        'logo' => 'public/img/lark/logo/sentry.png',
        'title' => 'Sentry Connector',
        'alt' => 'Sentry'
      ],[
        'logo' => 'public/img/lark/logo/app-follow.png',
        'title' => 'AppFollow Connector',
        'alt' => 'AppFollow'
      ],[
        'logo' => 'public/img/lark/logo/dropbox.png',
        'title' => 'Dropbox Connector',
        'alt' => 'Dropbox'
      ],[
        'logo' => 'public/img/lark/logo/cal.png',
        'title' => 'Cal.com Connector',
        'alt' => 'Cal.com'
      ],[
        'logo' => 'public/img/lark/logo/Grafana.png',
        'title' => 'Grafana Connector',
        'alt' => 'Grafana'
      ],[
        'logo' => 'public/img/lark/logo/zoom.png',
        'title' => 'Zoom Connector',
        'alt' => 'Zoom'
      ],[
        'logo' => 'public/img/lark/logo/splunk.png',
        'title' => 'Splunk Connector',
        'alt' => 'Splunk'
      ],[
        'logo' => 'public/img/lark/logo/asana.png',
        'title' => 'Asana Connector',
        'alt' => 'Asana'
      ],[
        'logo' => 'public/img/lark/logo/trello.png',
        'title' => 'Trello Connector',
        'alt' => 'Trello'
      ],[
        'logo' => 'public/img/lark/logo/linear.png',
        'title' => 'Linear Connector',
        'alt' => 'Linear'
      ],
    ]
  ?>
  <section class="section-padding section-19">
    <div class="img-bg" style="background-image:url('public/img/lark/bg/03.jpg');"></div>
    <div class="container">
      <h2 class="lg fw-600 font-popins text-center lh-2xs color-white" data-aos="fade-up" data-aos-delay="0">
        Lark Connector
      </h2>
      <div class="ss-box xl size-02 mt-4" data-aos="fade-up" data-aos-delay="150">
        <div class="gallery-grids">
          <?php foreach($content as $d) {?>
            <div class="grid lg-25 md-1-3 sm-1-3 xs-50">
              <a href="#" class="ss-card ss-card-49">
                <div class="wrapper">
                  <div class="logo">
                    <img src="<?= $d['logo'] ?>" alt="<?= $d['alt'] ?>">
                  </div>
                  <p class="xxs title">
                    <?= $d['title'] ?>
                  </p>
                </div>
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>      
  </section>

  <section class="section-padding section-20">
    <div class="img-bg" style="background-image:url('public/img/lark/bg/04.jpg');"></div>
    <div class="container">
      <h2 class="lg fw-600 text-center lh-2xs" data-aos="fade-up" data-aos-delay="0">
        Global. Trusted.
      </h2>      
      <h6 class="text-center color-p fw-400" data-aos="fade-up" data-aos-delay="150">
        บริษัทฯ ระดับโลกยังใช้ แล้วบริษัทคุณล่ะ!! ทีมคุณล่ะ?
      </h6>
      <div class="ss-box xl size-02 mt-4" data-aos="fade-up" data-aos-delay="300">
        <div class="grids">
          <div class="grid lg-1-3" data-aos="fade-up" data-aos-delay="0">
            <div class="ss-card ss-card-50">
              <div class="header bg-11">
                <p class="text-center title color-white font-gilroy fw-600">
                  AUTOMOTIVE
                </p>
              </div>
              <div class="body">
                <div class="gallery-grids">
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo">
                      <img src="public/img/lark/logo/nio.png" alt="NIO">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo">
                      <img src="public/img/lark/logo/geely.png" alt="GEELY AUTO">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo">
                      <img src="public/img/lark/logo/horizon-robotics.png" alt="Horizon Robotics">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo md">
                      <img src="public/img/lark/logo/lotus.png" alt="Lotus">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/niu.png" alt="niu">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo">
                      <img src="public/img/lark/logo/pateo.png" alt="Pateo">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/nav-info.png" alt="Pateo">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/jac-motors.png" alt="Pateo">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
          <div class="grid lg-1-3" data-aos="fade-up" data-aos-delay="0">
            <div class="ss-card ss-card-50">
              <div class="header bg-12">
                <p class="text-center title color-white font-gilroy fw-600">
                  ELECTRONICS
                </p>
              </div>
              <div class="body">
                <div class="gallery-grids">
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/anker.png" alt="ANKER">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo">
                      <img src="public/img/lark/logo/mi.png" alt="MI">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/coolpad.png" alt="Coolpad">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/haier.png" alt="Haier">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/transsion.png" alt="TRANSSION">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo lg">
                      <img src="public/img/lark/logo/insta360.png" alt="Insta360">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/mobvoi.png" alt="mobvoi">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xxs">
                      <img src="public/img/lark/logo/narwal.png" alt="NARWAL">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>  
          <div class="grid lg-1-3" data-aos="fade-up" data-aos-delay="0">
            <div class="ss-card ss-card-50">
              <div class="header bg-13">
                <p class="text-center title color-white font-gilroy fw-600">
                  MANUFACTURING
                </p>
              </div>
              <div class="body">
                <div class="gallery-grids">
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/sany.png" alt="SANY">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo xs size-02">
                      <img src="public/img/lark/logo/hiper.png" alt="HIPER">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo lg size-02">
                      <img src="public/img/lark/logo/challenge.png" alt="CHALLENGE">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/aac.png" alt="AAC">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs size-02">
                      <img src="public/img/lark/logo/zowee.png" alt="ZOWEE">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/fj-dynamics.png" alt="FJDynamics">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50 op-0">
                    <div class="logo"></div>
                  </div>
                  <div class="grid sm-50 xs-50 op-0">
                    <div class="logo"></div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="grid lg-1-3" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-card ss-card-50">
              <div class="header bg-14">
                <p class="text-center title color-white font-gilroy fw-600">
                  CONSUMER GOODS
                </p>
              </div>
              <div class="body">
                <div class="gallery-grids">
                  <div class="grid lg-100 sm-100 xs-100 mt-0">
                    <div class="logo">
                      <img src="public/img/lark/logo/pop-mart.png" alt="POP MART">
                    </div>
                  </div>
                  <div class="grid lg-100 sm-100 xs-100 mt-0">
                    <div class="logo xs size-02">
                      <img src="public/img/lark/logo/chi-forest.png" alt="CHI FOREST">
                    </div>
                  </div>
                  <div class="grid lg-100 sm-100 xs-100">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/robosen.png" alt="robosen">
                    </div>
                  </div>
                  <div class="grid lg-100 sm-100 xs-100">
                    <div class="logo lg">
                      <img src="public/img/lark/logo/babycare.png" alt="Baby care">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-card ss-card-50">
              <div class="header bg-15">
                <p class="text-center title color-white font-gilroy fw-600">
                  INTERNET/SOFTWARE
                </p>
              </div>
              <div class="body">
                <div class="gallery-grids">
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo">
                      <img src="public/img/lark/logo/aws.png" alt="AWS">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo">
                      <img src="public/img/lark/logo/lilith.png" alt="LILITH">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/nrea.png" alt="nrea">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/keep.png" alt="Keep">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo md">
                      <img src="public/img/lark/logo/moonton.png" alt="moonton">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo">
                      <img src="public/img/lark/logo/top-games.png" alt="Top Games">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/ping-cap.png" alt="PingCap">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/trax.png" alt="trax">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-card ss-card-50">
              <div class="header bg-16">
                <p class="text-center title color-white font-gilroy fw-600">
                  OTHERS
                </p>
              </div>
              <div class="body">
                <div class="gallery-grids">
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/wework.png" alt="wework">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50 mt-0">
                    <div class="logo">
                      <img src="public/img/lark/logo/deutsche.png" alt="DEUTSCHE HOSPITALITY">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xxs size-02">
                      <img src="public/img/lark/logo/robert-half.png" alt="Robert Half">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo lg size-02">
                      <img src="public/img/lark/logo/aeon-mall.png" alt="AEON MALL">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs size-02">
                      <img src="public/img/lark/logo/jt-express.png" alt="J&T Express">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xs">
                      <img src="public/img/lark/logo/dh-gate.png" alt="DHgate.com">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo xxs size-02" >
                      <img src="public/img/lark/logo/dentsu.png" alt="dentsu">
                    </div>
                  </div>
                  <div class="grid sm-50 xs-50">
                    <div class="logo sm">
                      <img src="public/img/lark/logo/flash-express.png" alt="Flash Express">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>    
      </div>
    </div>        
  </section>

  <section class="section-padding section-21">
    <div class="container">
      <h3 class="lg fw-600 text-center lh-2xs" data-aos="fade-up" data-aos-delay="0">
        Robust data security and compliance
      </h3>
      <div class="ss-box xl size-02 mt-4" data-aos="fade-up" data-aos-delay="150">
        <div class="data-container">
          <p class="lg text-center fw-800">DATA CENTERS</p>
          <div class="grids jc-center">
            <div class="grid lg-1-3 sm-50">
              <div class="ss-card ss-card-51">
                <div class="wrapper">
                  <div class="logo">
                    <img src="public/img/lark/logo/aws.png" alt="AWS">
                  </div>
                  <div class="text-container">
                    <p class="title">US East (N. Virginia)</p>
                    <p class="desc">Amazon Web Services</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-1-3 sm-50">
              <div class="ss-card ss-card-51">
                <div class="wrapper">
                  <div class="logo">
                    <img src="public/img/lark/logo/aws.png" alt="AWS">
                  </div>
                  <div class="text-container">
                    <p class="title">US East (N. Virginia)</p>
                    <p class="desc">Amazon Web Services</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-1-3 sm-50">
              <div class="ss-card ss-card-51">
                <div class="wrapper">
                  <div class="logo">
                    <img src="public/img/lark/logo/aws.png" alt="AWS">
                  </div>
                  <div class="text-container">
                    <p class="title">US East (N. Virginia)</p>
                    <p class="desc">Amazon Web Services</p>
                  </div>
                </div>
              </div>
            </div>
          </div>  
          <?php 
            $content02 = [
              [
                'logo' => 'public/img/lark/logo/aws-powered.png',
                'title' => 'Amazon Web Services',
                'alt' => 'aws',
                'classer' => ''
              ],[
                'logo' => 'public/img/lark/logo/soc.png',
                'title' => 'ISO/IEC',
                'alt' => 'ISO/IEC',
                'classer' => ''
              ],[
                'logo' => 'public/img/lark/logo/iso.png',
                'title' => 'SOC 2/3',
                'alt' => 'SOC 2/3',
                'classer' => ''
              ],[
                'logo' => 'public/img/lark/logo/assured.png',
                'title' => 'Data Protection Trustmark',
                'alt' => 'Data',
                'classer' => 'lg'
              ],[
                'logo' => 'public/img/lark/logo/apec-singapore.png',
                'title' => 'APEC Cross Border<br>Privacy Rules System',
                'alt' => 'APEC',
                'classer' => 'lg'
              ],[
                'logo' => 'public/img/lark/logo/apec-privacy.png',
                'title' => 'APEC Privacy Recognition<br>for Processors System',
                'alt' => 'APEC Privacy',
                'classer' => 'lg'
              ]
            ]
          ?>
          <div class="grids">
            <?php foreach($content02 as $d) {?>
              <div class="grid lg-1-3 md-1-3 sm-50 xs-100">
                <a href="#" class="ss-card ss-card-52">
                  <div class="wrapper">
                    <div class="logo <?= $d['classer'] ?>">
                      <img src="<?= $d['logo'] ?>" alt="<?= $d['alt'] ?>">
                    </div>
                    <p class="xxs title">
                      <?= $d['title'] ?>
                    </p>
                  </div>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>    
      </div>
    </div>
  </section>

  <section class="section-padding section-22">
    <div class="img-bg" style="background-image:url('public/img/lark/bg/05.jpg');"></div>
    <div class="container">
      <div class="title-header" data-aos="fade-up" data-aos-delay="0">
        <p class="h3 color-p fw-500 mr-2">ทำไมต้องใช้</p>
        <div class="logo">
          <img src="public/img/lark/logo/lark-logo.png" alt="Lark Logo">
        </div>
        <h2 class="fw-700 ml-2">
          Lark <span class="h3 color-p fw-500">จาก</span> <span class="h2 fw-700">Synnery</span>
        </h2>
      </div>
      <div class="ss-box xl size-02 mt-4" data-aos="fade-up" data-aos-delay="150">
        <div class="grids">
          <div class="grid lg-50">
            <div class="img-container right">
              <div class="ss-card ss-card-47">
                <div class="ss-img square">
                  <div class="img-bg" style="background-image:url('public/img/lark/content/01.png');"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid lg-50">
            <div class="text-container left">
              <ul class="ss-list-03 style-03">
                <li>
                  <span class="color-p fw-600">ฟรี!!</span>
                  <span class="fw-700">ช่วย Setup & Config</span> ปรับแต่งบางโปรแกรมให้เข้าระบบการทำงานเฉพาะทาง
                </li>
                <li>
                  <span class="color-p fw-600">ฟรี!!</span>
                  คอร์สเรียนให้ สอนการใช้งานแบบละเอียด
                </li>
                <li>
                  <span class="color-p fw-600">ฟรี!!</span>
                  ให้คำปรึกษา แนะนำ ตอบปัญหาด้านการใช้งาน
                </li>
                <li>
                  <span class="color-p fw-600">ฟรี!!</span>
                  มีแนะนำ <span class="fw-700">Trick & Tips</span> และ Solutions ต่างๆ 
                </li>
                <li>
                  <span class="color-p fw-600">ฟรี!!</span>
                  ได้รับสิทธิ์เข้า <span class="fw-700">Private Group</span> เฉพาะ <span class="fw-700">Lark Family</span>
                  เช่น <span class="fw-700">Business, Accounting, Marketing, Sales, HR, Support, Investment, Stock</span> และอื่นๆ 
                </li>
              </ul>
            </div>
          </div>
        </div>     
      </div>
    </div>
  </section>

  <section class="section-padding section-23">
    <div class="container">
      <h5 class="text-center fw-400">ติดตามข้อมูลข่าวสารอื่นๆ ได้ที่ Lark Community</h5>
      <div class="socials">
        <div class="wrapper">
          <a href="#" class="link">
            <em class="fa-brands fa-facebook-f"></em>
          </a>
          <a href="#" class="link">
            <em class="fa-brands fa-instagram"></em>
          </a>
          <a href="#" class="link">
            <em class="fa-brands fa-youtube"></em>
          </a>
          <a href="#" class="link">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
              <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/>
            </svg>
          </a>
          <a href="#" class="link">
            <em class="fa-brands fa-tiktok"></em>
          </a>
        </div>
      </div>
    </div>         
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>