<!DOCTYPE html>
<html lang="th">

<head>
    <?php include_once('include/header.php'); ?>
    <?php include_once('include/style.php'); ?>
</head>

<body class="loading">
    <?php include_once('component/page-loader.php'); ?>
    <?php $topnavActive=5; include_once('include/topnav.php'); ?>
    <?php include_once('include/accessibility.php'); ?>

    <section data-section="1" data-aos="fade-in" data-aos-delay="0">
        <img class="img" src="public/img/bg/30.jpg" alt="Banner" />
    </section>

    <section data-section="2" class="section-01 section-padding">
        <div class="pattern style-32">
            <div class="wrapper" value=".5">
                <img src="public/img/content/pattern-18.png" alt="Hero">
            </div>
        </div>
        <div class="container">
            <div class="ss-box xl">
                <div class="text-center color-01">
                    <div data-aos="fade-up" data-aos-delay="0">
                        <h1 class="lh-2xs text-center text-shadow fw-600">
                            Career
                        </h1>
                        <p class="h6 text-center color-01 fw-600 mt-1">
                            บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด
                        </p>
                    </div>
                    <div data-aos="fade-up" data-aos-delay="150">
                        <p class="h5 color-black fw-400">
                            เราเป็นบริษัทที่ปรึกษา
                        </p>
                        <p class="h3 fw-600">
                            “กลยุทธ์ด้านดิจิทัล สำหรับภาครัฐแบบครบวงจร”
                        </p>
                    </div>
                    <p class="color-black fw-400" data-aos="fade-up" data-aos-delay="300">
                        เรานำเสนอโซลูชั่นผ่านการให้คำปรึกษาด้านกลยุทธ์ทางดิจิทัลและเทคโนโลยี<br>
                        ที่ช่วยให้หน่วยงานหรือองค์กรได้ผลลัพธ์ที่ดีขึ้น เพื่อรับกับแนวทางการเปลี่ยนแปลงที่เกิดขึ้น
                    </p>
                </div>
                <div class="grids jc-center mt-6 pt-2" data-aos="fade-up" data-aos-delay="450">
                    <?php
            foreach([
              [
                'title' => 'ถ้ามาเป็น Dev ที่นี่จะเจออะไร',
                'href' => 'https://www.youtube.com/watch?v=h3Vq9LjJ2tk',
                'image' => 'public/img/content/content-18.jpg'
              ], [
                'title' => 'ถ้ามาเป็น Dev ที่นี่จะเจออะไร',
                'href' => 'https://youtu.be/SMrzLWs-_0w',
                'image' => 'public/img/content/content-19.jpg'
              ], [
                'title' => 'ถ้ามาเป็น Dev ที่นี่จะเจออะไร',
                'href' => 'https://www.youtube.com/watch?v=bPrrbIakklY',
                'image' => 'public/img/content/content-18.jpg'
              ]
            ] as $d){
          ?>
                    <div class="grid lg-1-3 sm-50 xs-100">
                        <div class="p-1 bg-white box-shadow">
                            <a class="ss-card" href="<?= $d['href'] ?>" data-fancybox>
                                <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                                </div>
                                <div class="card-icon">
                                    <div class="icon">
                                        <img class="img" src="public/img/icon/play.png" alt="Banner" />
                                    </div>
                                </div>
                                <div class="card-line-1"></div>
                                <div class="card-line-2"></div>
                            </a>
                        </div>
                        <a class="p text-center d-block mt-4 fw-500" href="#">
                            <?= $d['title'] ?>
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <section data-section="3" class="section-05 section-padding" style="background-image:url('public/img/bg/01.jpg');">
        <div class="container">
            <h3 class="text-center color-01 text-uppercase mb-4 fw-600" data-aos="fade-up" data-aos-delay="0">
                สวัสดิการเบื้องต้น
            </h3>
            <div class="ss-box xxl">
                <div class="grids" data-aos="fade-up" data-aos-delay="150">
                    <div class="grid mt-0">
                        <ul class="ss-list-01 style-02">
                            <li class="mt-4">
                                ปรับเงินเดือนหลังผ่าน Probation และพิจารณาปรับตามผลงาน <br>
                                ผลประกอบการทุกๆ 6 เดือน
                            </li>
                            <li class="mt-4">ทำงานจันทร์- ศุกร์ 9:00-18:00, เวลาพัก 11:45-13:00, 15:00-15:15</li>
                            <li class="mt-4">Party ทุกศุกร์สุดท้ายของเดือน ตั้งแต่บ่าย 3 โมง ยาวๆ ไป</li>
                            <li class="mt-4">สวัสดิการสังสรรค์รื่นเริงภายในหน่วยงานต่างๆ</li>
                            <li class="mt-4">เงินสนับสนุนกิจกรรมสันทนาการ</li>
                            <li class="mt-4">ท่องเที่ยวประจำปีตามผลประกอบการ (ต่างจังหวัดหรือต่างประเทศ)</li>
                            <li class="mt-4">ผ่าน Probation แล้วพิจารณาปรับเงินทุกๆ 6 เดือน</li>
                            <li class="mt-4">พิจารณาปรับเงินเดือน ระหว่างหรือหลังผ่าน Probation</li>
                            <li class="mt-4">มี Incentive จากทุกโครงการ แบ่งให้ทุกตำแหน่ง</li>
                            <li class="mt-4">OT สำหรับการทำงานนอกเวลา</li>
                            <li class="mt-4">อยากทำงานนอก รับงานบริษัทไปทำเป็นงานนอกได้</li>
                        </ul>
                    </div>
                    <div class="grid mt-0">
                        <ul class="ss-list-01 style-02">
                            <li class="mt-4">โบนัสตามผลประกอบการ</li>
                            <li class="mt-4">ค่าโทรศัพท์มือถือสำหรับพนักงานที่ต้องใช้ติดต่องาน</li>
                            <li class="mt-4">มีค่าเดินทาง สำหรับการเดินทางเพื่อทำงานหรือพบลูกค้า</li>
                            <li class="mt-4">มีค่าเสื่อมคอมฯ เพิ่มให้ กรณีเอาคอมฯ ตัวเองมาทำงาน</li>
                            <li class="mt-4">เงินช่วยเหลือฌาปณกิจ</li>
                            <li class="mt-4">ของขวัญสมรส</li>
                            <li class="mt-4">เค้กวันเกิด</li>
                            <li class="mt-4">เงินช่วยเหลืองานบวช</li>
                            <li class="mt-4">เงินช่วยเหลือกรณีคลอดบุตร</li>
                            <li class="mt-4">วันลาพิเศษเพื่อร่วมงานฌาปนกิจบุคคลในครอบครัว</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    include_once('career/career-2566.php');

    $categories = [
      [
        'title' => 'All' 
      ], [
        'title' => 'Full Time '
      ], [
        'title' => 'Outsource'
      ], [
        'title' => 'Partners'
      ], [
        'title' => 'Trainee'
      ]
    ];
    // print_r($arrPostion);
  ?>
    <section data-section="4" class="section-01 section-padding bg-01" id="job-position">
        <div class="container">
            <h3 class="color-white text-center fw-600" data-aos="fade-up" data-aos-delay="0">
                ตำแหน่งที่เปิดรับสมัคร
            </h3>
            <div class="tab-container">
                <!-- <div class="tabs tabs-01 style-02" data-aos="fade-up" data-aos-delay="150">
          <?php foreach($categories as $j=>$k){?>
            <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
              <p class="h6 title color-white"><?= $k['title'] ?></p>
            </a>
          <?php }?>
        </div> -->
                <div class="tab-contents mt-5" data-aos="fade-up" data-aos-delay="300">
                    <?php foreach($categories as $j=>$k){?>
                    <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                        <div class="scroll-x-wrapper" data-simplebar>
                            <div class="ss-box xxl">
                                <?php foreach($arrPostion as $index => $data){?>
                                <div class="ss-card ss-card-24 mt-2 bg-06 job-toggle" id="job-<?= $index+1 ?>">
                                    <div class="wrapper">
                                        <div class="main-block">
                                            <a class="h6 color-black fw-400 c-pointer btn-job-slide"
                                                data-idx="#job-<?= $index+1 ?>">
                                                <em class="fa-regular fa-circle-user color-01 mr-1"></em>
                                                <?= (empty($data['postion'])?'':$data['postion'].' ').(empty($data['subpostion'])?'':$data['subpostion']) ?>
                                            </a>
                                        </div>
                                        <div class="sub-block-01">
                                            <p class="color-black fw-400">
                                                <?= empty($data['vacancies'])?'ไม่มีตำแหน่ง':$data['vacancies'].' ตำแหน่ง' ?>
                                            </p>
                                        </div>
                                        <div class="sub-block-02">
                                            <p class="color-black fw-400">
                                                <span class="color-03 mr-2">ประสบการณ์</span>
                                                <span><?= empty($data['experience'])?'0 ปีขึ้นไป':$data['experience'] ?></span>
                                            </p>
                                        </div>
                                        <div class="sub-block-03">
                                            <a class="color-white btn-block c-pointer btn-job-slide"
                                                data-idx="#job-<?= $index+1 ?>">
                                                รายละเอียด
                                            </a>
                                        </div>
                                    </div>
                                    <div class="grids toggle-career-section" style="display: none;">
                                        <div class="grid">
                                            <p class="text-uppercase fw-600">Job Description</p>
                                            <?= empty($data['jobdesc'])?'':$data['jobdesc'] ?>
                                        </div>
                                        <div class="grid">
                                            <p class="text-uppercase fw-600">Job Specification</p>
                                            <?= empty($data['jobspec'])?'':$data['jobspec'] ?>
                                        </div>
                                        <div class="btn-container m-auto mb-3">
                                            <div class="btn-customs jc-center pt-3">
                                                <?php
                              $btnBubble = [
                                'href' => 'https://lin.ee/ECVfCZs',
                                'blank' => true,
                                'title' => 'สมัคร',
                                'classWrapper' => 'mr-2'
                              ];
                              include('component/btn-bubble.php');
                            ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <section data-section="6" id="job" class="section-05 section-career section-padding"
        style="background-image:url('public/img/bg/32.jpg');">
        <div class="container">
            <div class="ss-box xxl">
                <h3 class="text-center color-01 lh-sm fw-600 aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="0">
                    Culture ของที่นี่
                </h3>
                <ul class="ss-list-01 style-03 mt-2 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                    <li class="color-black fw-400 mt-4">
                        เป็น Home Office หลังใหญ่ เป็นทีมเล็กๆ ที่ทำงานใหญ่ๆ เป็นทีมที่รวมคนเก่งๆ และ Partner เจ๋งๆ
                        ให้มาทำงานใหญ่ๆ ร่วมกัน
                    </li>
                    <li class="color-black fw-400 mt-4">
                        ทำงานใหญ่ มูลค่าสูง คุณภาพก็ต้องสูงตาม แต่นอกงาน เล่น เฮฮา กวนๆ กันได้ เพราะเราอยากให้ทีม
                        "ทำงานอย่างมีความสุข สนุกกับงานที่ทำ"
                    </li>
                    <li class="color-black fw-400 mt-4">
                        ทำงานกันเป็นระบบ เป็นทีม ผ่าน Software ต่างๆ เช่น Asana, Discord, Figma และอื่นๆ
                    </li>
                    <li class="color-black fw-400 mt-4">
                        งานที่นี่ งานใหญ่ งานเยอะ งานเร่ง เน้นงานคุณภาพสูง เหมาะกับคนชอบท้าทายความสามารถตัวเอง
                    </li>
                    <li class="color-black fw-400 mt-4">
                        ทำงานในลักษณะ Team Work รวมถึง Multi-Tasking ในบางจังหวะ คือหนึ่งคนอาจจะต้องทำหลากหลายหน้าที่
                        เรียกว่า "ช่วงงานเข้า"
                    </li>
                </ul>
            </div>
            <?php /*
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php foreach ($arrPostion as $index => $data){?>
            <div class="swiper-slide">
                <h3 class="text-center color-01 lh-sm fw-600" data-aos="fade-up" data-aos-delay="0">
                    <?= empty($data['postion'])?'':$data['postion'].' ' ?>
                    <span class="h4 color-black fw-400">
                        <?= empty($data['subpostion'])?'':$data['subpostion'] ?>
                    </span>
                </h3>
                <p class="h5 text-center color-black fw-400" data-aos="fade-up" data-aos-delay="150">
                    <em class="fa-regular fa-circle-user color-01 mr-1"></em>
                    <?= empty($data['vacancies'])?'ไม่มีตำแหน่ง':$data['vacancies'].' ตำแหน่ง' ?>
                </p>
                <div class="ss-box xxl mt-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="grids">
                        <div class="grid pt-2">
                            <p class="text-uppercase fw-600">Job Description</p>
                            <?= empty($data['jobdesc'])?'':$data['jobdesc'] ?>
                        </div>
                        <div class="grid pt-2">
                            <p class="text-uppercase fw-600">Job Specification</p>
                            <?= empty($data['jobspec'])?'':$data['jobspec'] ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>

        <div data-aos="fade-up" data-aos-delay="0">
            <div class="pt-5">
                <div class="btn-container">
                    <div class="btn-customs jc-center pt-3">
                        <?php
                  $btnBubble = [
                    'href' => 'https://lin.ee/ECVfCZs',
                    'blank' => true,
                    'title' => 'สมัคร',
                    'classWrapper' => 'mr-2'
                  ];
                  include('component/btn-bubble.php');
                ?>
                        <?php
                  $btnBubble = [
                    'href' => '#job-position',
                    'title' => 'ดูตำแหน่งอื่นๆ',
                    'classWrapper' => 'bubble-gray'
                  ];
                  include('component/btn-bubble.php');
                ?>
                    </div>
                </div>
            </div>
            <div class="navigator white">
                <div class="progress p"></div>
                <div class="line"></div>
                <div class="dots"></div>
            </div>
        </div>
        </div>
        <div class="arrows">
            <div class="arrow btn-icon-prev">
                <img src="public/img/icon/arrow-white-01.png" alt="Arrow" />
            </div>
            <div class="arrow btn-icon-next">
                <img src="public/img/icon/arrow-white-02.png" alt="Arrow" />
            </div>
        </div>
        */ ?>
        </div>
    </section>

    <?php
    $categories = [
      [
        'title' => 'Our Work' 
      ], [
        'title' => 'Life Style'
      ], [
        'title' => 'Outing'
      ]
    ]
  ?>

    <?php
    $videos = [
      [
        'videoname' => 'https://www.youtube.com/watch?v=F8aNO0JfzVg&index=2'
      ],
      [
        'videoname' => 'https://www.youtube.com/watch?v=F8aNO0JfzVg&index=2'
      ],
      [
        'videoname' => 'https://www.youtube.com/watch?v=F8aNO0JfzVg&index=2'
      ],
      [
        'videoname' => 'https://www.youtube.com/watch?v=F8aNO0JfzVg&index=2'
      ],
      [
        'videoname' => 'https://www.youtube.com/watch?v=F8aNO0JfzVg&index=2'
      ],
      [
        'videoname' => 'hhttps://www.youtube.com/watch?v=F8aNO0JfzVg&index=2'
      ],
    //   [
    //     'videoname' => 'https://www.youtube.com/embed/p0ym2c1LCDo'
    //   ],
    //   [
    //     'videoname' => 'https://www.youtube.com/embed/Crh2ct4nWFs'
    //   ],
    ]
    ?>

    <section data-section="7" class="section-08 section-padding">
        <div class="pattern style-07">
            <div class="wrapper" value="-.5">
                <img src="public/img/content/pattern-38.png" alt="Hero" />
            </div>
        </div>
        <div class="pattern style-08">
            <div class="wrapper" value="-.5">
                <img src="public/img/content/pattern-37.png" alt="Hero" />
            </div>
        </div>
        <div class="pattern style-09">
            <div class="wrapper" value="-.5">
                <img src="public/img/content/pattern-39.png" alt="Hero" />
            </div>
        </div>
        <div class="img-bg" style="background-image:url('public/img/bg/33.jpg');"></div>
        <div class="container" style="z-index:2">
            <h3 class="text-center color-white xs-no-br lh-xs fw-600" data-aos="fade-up" data-aos-delay="0">
                มาสมัครและทำงานร่วมกันกับทีมเรา <br> ทีมเล็ก ๆ ที่ทำงานใหญ่ ๆ
            </h3>
            <div class="tab-container mt-2">
                <div class="tabs tabs-01" data-aos="fade-up" data-aos-delay="150">
                    <?php foreach($categories as $j=>$k){?>
                    <a class="tab <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>" href="#">
                        <p class="h6 title color-white"><?= $k['title'] ?></p>
                    </a>
                    <?php }?>
                </div>
                <div class="tab-contents mt-4" data-aos="fade-up" data-aos-delay="150">
                    <?php foreach($categories as $j=>$k){?>

                    <?php if($j==1) { ?>
                    <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                        <div class="content-container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php for($j=0; $j<=0; $j++){?>
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">

                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/FtGi8fWXPpY"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-01.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/Z7rXbGQuY8E"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-02.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/uSyA-PosH9k"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-03.png');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/EFxSWiSqBFg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-04.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/BH2-1gq5BHA"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-05.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/F8aNO0JfzVg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-06.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">

                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/FtGi8fWXPpY"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-07.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/Z7rXbGQuY8E"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/img-video/video-08.png');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>
                                </div>
                                <div class="navigator white">
                                    <div class="progress p color-white"></div>
                                    <div class="line"></div>
                                    <div class="dots"></div>
                                </div>
                            </div>
                            <div class="arrows">
                                <div class="arrow btn-icon-next">
                                    <img src="public/img/icon/arrow-white-01.png" alt="Arrow" />
                                </div>
                                <div class="arrow btn-icon-next">
                                    <img src="public/img/icon/arrow-white-02.png" alt="Arrow" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if($j==0) { ?>
                    <div class="tab-content <?php if($j==0)echo 'active'; ?>" data-tab="<?= $j ?>">
                        <div class="content-container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php for($j=0; $j<1; $j++){?>
                                    <!-- start slide 1 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/8xNJKA8IzPc"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-01.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-02.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-02.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-03.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-03.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/N8zX2GU6QeQ"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-04.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-05.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-05.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card" href="https://youtu.be/ADjBR0PJhOQ"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-06.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/content/content-07.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-07.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-08.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-08.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide 1 -->

                                    <!-- start slide 2 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/content/content-09.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-09.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-10.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-10.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-11.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-11.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/content/content-12.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-12.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-13.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-13.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/content/content-14.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-14.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/content/content-15.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-15.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-16.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-16.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide 2 -->

                                    <!-- start slide 3 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/content/content-17.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-17.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-18.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-18.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/content/content-19.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/content/content-19.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide 3 -->
                                    <?php }?>
                                </div>
                                <div class="navigator white">
                                    <div class="progress p color-white"></div>
                                    <div class="line"></div>
                                    <div class="dots"></div>
                                </div>
                            </div>
                            <div class="arrows">
                                <div class="arrow btn-icon-next">
                                    <img src="public/img/icon/arrow-white-01.png" alt="Arrow" />
                                </div>
                                <div class="arrow btn-icon-next">
                                    <img src="public/img/icon/arrow-white-02.png" alt="Arrow" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    <?php if($j==2) { ?>
                    <div class="tab-content " data-tab="<?= $j ?>">
                        <div class="content-container">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php for($j=0; $j<1; $j++){?>
                                    <!-- start slide 1 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-01.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-01.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-02.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-02.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-03.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-03.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-04.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-04.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-05.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-05.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-06.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-06.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-07.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-07.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-08.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-08.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>



                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide 1 -->

                                    <!-- start slide 2 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-09.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-09.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-10.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-10.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-11.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-11.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-12.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-12.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-13.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-13.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-14.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-14.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-15.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-15.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-16.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-16.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide 2 -->

                                    <!-- start slide 3 -->
                                    <div class="swiper-slide">
                                        <div class="wrapper">
                                            <div class="grids no-gap">
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-17.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-17.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-18.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-18.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-19.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-19.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-20.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-20.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-21.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-21.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-22.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-22.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-3 xs-50 mt-0">
                                                    <div class="p-1">
                                                        <a class="ss-card"
                                                            href="public/img/content-work/outing/outing-23.jpg"
                                                            data-fancybox>
                                                            <div class="ss-img horizontal-03">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-23.jpg');">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="card-line-1"></div>
                                                            <div class="card-line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="grid lg-1-6 xs-50 mt-0">
                                                    <div class="p-1 h-full">
                                                        <a class="ss-card ss-card-03 style-02"
                                                            href="public/img/content-work/outing/outing-24.jpg"
                                                            data-fancybox="gallery">
                                                            <div class="ss-img">
                                                                <div class="img-bg"
                                                                    style="background-image:url('public/img/content-work/outing/outing-24.jpg')">
                                                                </div>
                                                            </div>
                                                            <div class="hover-filter-01"></div>
                                                            <div class="line-1"></div>
                                                            <div class="line-2"></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end slide 3 -->
                                    <?php }?>
                                </div>
                                <div class="navigator white">
                                    <div class="progress p color-white"></div>
                                    <div class="line"></div>
                                    <div class="dots"></div>
                                </div>
                            </div>
                            <div class="arrows">
                                <div class="arrow btn-icon-next">
                                    <img src="public/img/icon/arrow-white-01.png" alt="Arrow" />
                                </div>
                                <div class="arrow btn-icon-next">
                                    <img src="public/img/icon/arrow-white-02.png" alt="Arrow" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    <?php }?>
                </div>
            </div>
        </div>
    </section>

    <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
</body>

</html>