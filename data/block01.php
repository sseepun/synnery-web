<div class="section-12">
  <div class="container">
    <div class="blocks mh-0">
      <div class="block">
        <div class="img-bg" style="background-image:url('public/img/bg/04.jpg');"></div>
        <div class="text-container">
          <h3 class="lh-2xs color-01 fw-600">
            Website <br> 
            <span class="color-black fw-300">for</span> 
            <span class="color-black fw-600">Government</span>
          </h3>
          <p class="color-03 fw-400 mt-2" data-aos="fade-up" data-aos-delay="150">
            บริการออกแบบและพัฒนาเว็บไซต์ภาครัฐ ตามมาตรฐานเว็บไซต์ภาครัฐ และ ITA 
            พร้อมระบบรักษาความปลอดภัย<br>และโครงสร้างเครื่องมือที่ทันสมัย ใช้งานง่าย
          </p>
          <div class="btns pt-4" data-aos="fade-up" data-aos-delay="300">
            <?php
              $btnBubble = [
                'href' => 'web-gov-standard.php',
                'title' => 'Explore More',
              ];
              include('component/btn-bubble.php');
            ?>
          </div>
        </div>
      </div>
      <div class="block-float right d-flex ai-end">
        <div class="grids no-gap">
          <?php
            $clients = [
              [
                'bg' => 'public/img/content/33.jpg',
                'icon' => 'public/img/clients/กระทรวงศึกษา.svg',
                'title' => 'กระทรวงศึกษา',
                'bgColor' => 'rgba(11,62,31,.7)',
                'classer' => 'active',
                'link' => 'web-gov-standard.php',
              ], [
                'bg' => 'public/img/content/34.jpg',
                'icon' => 'public/img/clients/กระทรวงพลังงาน.png',
                'title' => 'กระทรวงพลังงาน',
                'bgColor' => 'rgba(254,77,1,.7)',
                'link' => 'web-gov-standard.php',
              ], [
                'bg' => 'public/img/content/35.jpg',
                'icon' => 'public/img/clients/industry.svg',
                'title' => 'กระทรวงอุตสาหกรรม',
                'bgColor' => 'rgba(136,0,156,.7)',
                'link' => 'web-gov-standard.php',
              ], [
                'bg' => 'public/img/content/36.jpg',
                'icon' => 'public/img/clients/กรมธนารักษ์.svg',
                'title' => 'กรมธนารักษณ์',
                'bgColor' => 'rgba(204,165,33,.7)',
                'link' => 'web-gov-standard.php',
              ], [
                'bg' => 'public/img/content/37.jpg',
                'icon' => 'public/img/clients/กรมโยธาธิการและผังเมือง.svg',
                'title' => 'กรมโยธาธิการและผังเมือง',
                'bgColor' => 'rgba(52,14,21,.7)',
                'link' => 'web-gov-standard.php',
              ], [
                'bg' => 'public/img/content/38.jpg',
                'icon' => 'public/img/clients/มหาวิทยาลัยเกษตรศาสตร์.png',
                'title' => 'มหาวิทยาลัยเกษตร',
                'bgColor' => 'rgba(177,187,27,.7)',
                'link' => 'web-gov-standard.php',
              ],
            ];
          ?>
          <?php foreach($clients as $d){?>
            <div class="grid lg-1-3 md-50 sm-1-3 xs-50 mt-0">
              <div class="ss-card ss-card-37">
                <a class="ss-img square" href="<?= $d['link'] ?>">
                  <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
                    <div class="hover-container <?= $d['classer'] ?>" style="background:<?= $d['bgColor'] ?>;">
                    <div class="wrapper">
                      <div class="icon">
                        <img src="<?= $d['icon'] ?>" alt="Client" />
                      </div>
                      <p class="color-white text-center lh-sm mt-3">
                        <?= $d['title'] ?>
                      </p>
                    </div>
                  </div>
                </a>
                <div class="card-line-3">
                  <svg viewBox="0 0 100 100">
                    <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
                    <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
                  </svg>
                </div>
              </div>
            </div>
          <?php }?>     
        </div>
      </div>
    </div>
  </div>
  <div class="grids no-gap">
    <?php
      $clients = [
        [
          'bg' => 'public/img/content/60.jpg',
          'icon' => 'public/img/clients/กรมอนามัย.svg',
          'title' => 'กรมอนามัย',
          'bgColor' => 'rgba(0,108,63,.7)',
          'link' => 'web-gov-standard.php',
        ], [
          'bg' => 'public/img/content/61.jpg',
          'icon' => 'public/img/clients/Asia-Pacific-Economic-Cooperation.svg',
          'title' => 'ความร่วมมือทางเศรษฐกิจ<br>ในเอเชียแปซิฟิก (เอเปค)',
          'bgColor' => 'rgba(43,48,125,.7)',
          'link' => 'web-gov-standard.php',
        ], [
          'bg' => 'public/img/content/62.jpg',
          'icon' => 'public/img/clients/กระทรวงวัฒนธรรม.svg',
          'title' => 'ศูนย์วัฒนธรรมอาเซียน<br>Asean Cultural Center',
          'bgColor' => 'rgba(38,15,71,.7)',
          'link' => 'web-gov-standard.php',
        ], [
          'bg' => 'public/img/content/63.jpg',
          'icon' => 'public/img/clients/กรมการขนส่งทางบก.svg',
          'title' => 'กรมการขนส่งทางบก',
          'bgColor' => 'rgba(102,66,132,.7)',
          'link' => 'web-gov-standard.php',
        ], [
          'bg' => 'public/img/content/64.jpg',
          'icon' => 'public/img/clients/สำนักงานคณะกรรมการกำกับกิจการพลังงาน.png',
          'title' => 'สำนักงานคณะกรรมการ<br>กำกับกิจการพลังงาน',
          'bgColor' => 'rgba(243,119,54,.7)',
          'link' => 'web-gov-standard.php',
        ], [
          'bg' => 'public/img/content/65.jpg',
          'icon' => 'public/img/clients/GSSD.png',
          'title' => 'GSSD Expo Thailand',
          'bgColor' => 'rgba(214,46,26,.7)',
          'link' => 'web-gov-standard.php',
        ], 
      ];
    ?>
    <?php foreach($clients as $d){?>
      <div class="grid lg-1-6 md-25 sm-1-3 xs-50 mt-0">
        <div class="ss-card">
          <a class="ss-img square" href="<?= $d['link'] ?>">
            <div class="img-bg" style="background-image:url('<?= $d['bg'] ?>');"></div>
            <div class="hover-container" style="background:<?= $d['bgColor'] ?>;">
              <div class="wrapper">
                <div class="icon">
                  <img src="<?= $d['icon'] ?>" alt="Client" />
                </div>
                <p class="color-white text-center lh-sm mt-3">
                  <?= $d['title'] ?>
                </p>
              </div>
            </div>
          </a>
          <div class="card-line-3">
            <svg viewBox="0 0 100 100">
              <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
              <polyline points="99.5,.5 99.5,99.5 .5,99.5 .5,.5 99.5,.5" />
            </svg>
          </div>
        </div>
      </div>
    <?php }?>
  </div>
</div>

