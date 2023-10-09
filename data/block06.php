<?php
  $titles = [
    'JIGSAW<br>Intranet', 'JIGSAW<br>E-Saraban', 'JIGSAW<br>E-Document', 'JIGSAW<br>Project', 
    'JIGSAW<br>E-Learning', 'JIGSAW<br>Procurement','JIGSAW<br>Accounting', 'JIGSAW<br>Listening', 
    'JIGSAW<br>Vehicle', 'JIGSAW<br>Meeting Room'
  ];
?>
<section class="section-01 section-padding">
  <div class="pattern style-01">
    <div class="wrapper" value=".5">
      <img src="public/img/content/pattern-02.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-02">
    <div class="wrapper" value=".5">
      <img src="public/img/content/pattern-02.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-03">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-03.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-04">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-04.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-05">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-05.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-06">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-06.png" alt="Hero" />
    </div>
  </div>
  <div class="container">
    <div class="hex-container pos-relative" style="z-index:2;">
      <?php for($i=0; $i<10; $i++){?>
        <a class="hex-flip" href="erp-for-government.php">
          <div class="hex lg">
            <div class="hex lg bg">
              <div class="wrapper text-center color-white">
                <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                  <?php echo $titles[$i] ?>
                </p>
              </div>
            </div>
            <div class="hex lg inner">
              <div class="wrapper text-center color-p">
                <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 58 47">
                  <image xlink:href="data:img/png;base64,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" />
                </svg>
                  <!-- <img class="img" src="public/img/icon/1<?= ($i%10+0) ?>.png" alt="Banner" /> -->
                </div>
                <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                  <?php echo $titles[$i] ?>
                </p>
              </div>
            </div>
          </div>
        </a>
      <?php }?>

      <?php
        $titles = [
          'JIGSAW<br>Help Desk', 'JIGSAW<br>Chat Bot', 'JIGSAW<br>Portal', 'JIGSAW<br>Financial', 
          'JIGSAW<br>Asset', 'JIGSAW<br>Sales Force','JIGSAW<br>CRM', 'JIGSAW<br>HRM', 
          'JIGSAW<br>HRD', 'JIGSAW<br>Budgeting'
        ];
      ?>
      <?php for($i=0; $i<10; $i++){?>
        <a class="hex-flip" href="erp-for-government.php">
          <div class="hex lg">
            <div class="hex lg bg">
              <div class="wrapper text-center color-white">
                <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                  <?php echo $titles[$i] ?>
                </p>
              </div>
            </div>
            <div class="hex lg inner">
              <div class="wrapper text-center color-p">
                <div class="icon">
                  <img class="img" src="public/img/icon/2<?= ($i%12+0) ?>.png" alt="Banner" />
                </div>
                <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                  <?php echo $titles[$i] ?>
                </p>
              </div>
            </div>
          </div>
        </a>
      <?php }?>

      <?php
        $titles = [
          'JIGSAW<br>E-Form', 'JIGSAW<br>BI'
        ];
      ?>
      <?php for($i=0; $i<2; $i++){?>
        <a class="hex-flip" href="erp-for-government.php">
          <div class="hex lg">
            <div class="hex lg bg">
              <div class="wrapper text-center color-white">
                <p class="xs fw-400 lh-sm mt-1" style="font-size:14px;">
                  <?php echo $titles[$i] ?>
                </p>
              </div>
            </div>
            <div class="hex lg inner">
              <div class="wrapper text-center color-p">
                <div class="icon">
                  <img class="img" src="public/img/icon/3<?= ($i%2+0) ?>.png" alt="Banner" />
                </div>
                <p class="xs fw-400 lh-sm mt-2" style="font-size:14px;">
                  <?php echo $titles[$i] ?>
                </p>
              </div>
            </div>
          </div>
        </a>
      <?php }?>
    </div>
  </div>
</section>

<section class="section-01 section-padding">
  <div class="container">
    <h3 class="text-center color-p fw-600 lh-sm">
      Microservices Architechture
    </h3>
    <p class="sm text-center md-no-br fw-400 mt-2">
      ด้วยประสบการณ์ในการทำงานและแลกเปลี่ยนพูดคุย ถึงปัญหาเกี่ยวกับระบบเทคโนโลยีและสารสนเทศภาครัฐมานาน<br>
      ทำให้เราเข้าใจและมองเห็นปัญหาที่ถูกสะสมมายาวนาน ทำให้เราเข้าใจและสามารถออกแบบระบบใหม่<br>
      เพื่อแก้ไขปัญหาเก่าๆ และนำเทคโนโลยีใหม่ๆ เข้ามาใช้งาน 
    </p>
    <div class="ss-box xl mt-6" style="background:#2b2a2f; border-radius:1rem; padding:1.5rem;">
      <img class="img" src="public/img/content/05.png" alt="Image" />
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