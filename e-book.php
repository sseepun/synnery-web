<!DOCTYPE html>
<html lang="th">

<head>
    <?php include_once('include/header.php'); ?>
    <link rel="stylesheet" href="public/css/other/bootstrap/bootstrap.css" />
    <?php include_once('include/style.php'); ?>
</head>

<body class="loading">
    <?php include_once('component/page-loader.php'); ?>
    <?php $topnavActive = 0;
    include_once('include/topnav.php'); ?>
    <?php include_once('include/accessibility.php'); ?>

    <!-- Start Banner -->
    <section data-section="1" data-aos="fade-in" data-aos-delay="0">
        <img class="img" src="public/img/e-book/banner.jpg" alt="Banner" />
    </section>
    <!-- End Banner -->

    <!-- Start Content -->
    <?php include_once('data/ebook-tool.php'); ?>
    <section class="section-padding bg-sec pb-2" data-aos="fade-in" data-aos-delay="300" style="background-image: url('public/img/bg/100.png');">
        <div class="container">
            <?php
            // จำนวนข้อมูลทั้งหมด
            $countContent = count($content);
            $itemsPerPage = ceil(count($content) / 8);

            // หน้าที่ต้องการแสดง
            $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

            // คำนวณหน้าแรกและสิ้นสุดของข้อมูลสำหรับหน้านี้
            $start = ($page - 1) * $itemsPerPage;
            $end = $start + $itemsPerPage;

            // ดึงข้อมูลสำหรับหน้าปัจจุบัน
            $currentPageData = array_slice($content, $start, $itemsPerPage);
            $fade_time = 100;

            foreach ($currentPageData as $index => $data) {
                ?>
                <a href="" class="max-width-960 <?= ($index % 2 == 0)?'tool-odd':'tool-even' ?>">
                    <div class="row">
                        <div class="col-md-5 col-lg-4 tool-item-left">
                            <div class="img-box-radius" data-aos="fade-up" data-aos-delay="<?= $fade_time+100 ?>">
                                <img src="<?= $data['img'] ?>" alt="<?= $data['title'] ?>" />
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-8 d-flex align-content-center tool-item-right position-relative">
                            <p class="abs-bg-number" data-aos="fade-up" data-aos-delay="<?= $fade_time ?>"><?= sprintf("%02d", $start+$index+1) ?></p>
                            <p class="h3 lh-xs color-01 fw-600 fst-italic position-relative mb-3" data-aos="fade-up" data-aos-delay="<?= $fade_time+200 ?>"><?= $data['title'] ?></p>
                            <p class="position-relative tool-content mb-3" data-aos="fade-up" data-aos-delay="<?= $fade_time+300 ?>"><?= $data['content'] ?></p>
                            <p class="position-relative" data-aos="fade-up" data-aos-delay="<?= $fade_time+400 ?>">
                                <span class="color-01 fst-italic text-sm btn-circel" href="<?= $data['link'] ?>" target="_blank">
                                    <span class="pr-2"><i class="fa-solid fa-link"></i></span>
                                    <span><?= $data['link'] ?></span>
                                </span>
                            </p>
                        </div>
                    </div>
                </a>
                <?php
                $fade_time+=100;
            }

            ?>
        </div>
    </section>
    <div class="tool-bar-footer">
        <div class="btn-container m-auto mb-3">
            <div class="btns jc-center pt-3">
                <?php
                $btnBubble = [
                    'href' => 'public/file/Ebook.pdf',
                    'blank' => true,
                    'title' => 'ดาวน์โหลดไฟล์',
                    'classWrapper' => 'mr-2'
                ];
                include('component/btn-bubble.php');
                ?>
            </div>
        </div>
        <?php

        // สร้างลิงก์ไปยังหน้าอื่น
        $totalPages = ceil($countContent / $itemsPerPage);
        if(!empty($totalPages)) { // data-aos="fade-up" data-aos-delay="500"
            echo '<div class="paginations text-sm">';
                echo '<a class="item item-prev" href="?page=' . ((empty($page) || $page == 1)?1:$page-1) . '"><i class="fa-solid fa-arrow-left"></i></a>';
                for ($i = 1; $i <= $totalPages; $i++) {
                    echo '<a class="item ' . ($page == $i?'active':'') . '" href="?page=' . $i . '">' . sprintf("%02d", $i) . '</a>';
                }
                echo '<a class="item item-next" href="?page=' . (($page == $itemsPerPage)?$itemsPerPage:$page+1) . '"><i class="fa-solid fa-arrow-right"></i></a>';
            echo '</div>';
        }
        ?>
    </div>
    <!-- End Content -->

    <?php $withFooterInfo = true;
    include_once('include/footer.php'); ?>
    <?php include_once('include/script.php'); ?>
    <script>
        jQuery(document).ready(function($) {
            $(window).on('scroll',function(){
                stop = Math.round($(window).scrollTop());
                if (stop > 300) {
                    $('body .tool-bar-footer').addClass('fixed');
                } else {
                    $('body .tool-bar-footer').removeClass('fixed');
                }
                var elementToCheck = document.querySelector('.section-01.size-03');
                if (elementToCheck) {
                    // ดูพื้นที่สูงสุดของคลาส
                    var elementTop = elementToCheck.getBoundingClientRect().top;
                    
                    // หาความสูงที่คุณต้องการเมื่อ scroll ถึงคลาส (ยกตัวแปรค่าใดค่าหนึ่งที่เหมาะสม)
                    var triggerHeight = 100; // เปลี่ยนค่าตามที่คุณต้องการ

                    // ตรวจสอบเมื่อ scroll ถึงคลาส
                    if (elementTop - window.innerHeight < triggerHeight) {
                        // ทำงานที่คุณต้องการเมื่อ scroll ถึงคลาส
                        // ตัวอย่าง: เปลี่ยนสีพื้นหลัง
                        $('body .tool-bar-footer').removeClass('fixed');
                    }
                }
            });
        });
    </script>
</body>

</html>