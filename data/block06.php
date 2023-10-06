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
  <div class="img-bg" style="background-image:url('public/img/bg/62.jpg'); background-position:bottom center;"></div>
  <div class="container">
    <div class="pos-relative" style="z-index:2;">
      <p class="h4 lg color-p text-center fw-600">Full Services</p>
      <h2 class="color-black text-center mt-1 lh-2xs fw-700">
        E-OFFICE AUTOMATION<br>DEVELOPMENT
      </h2>
      <p class="text-center fw-400 md-no-br">
        หลายโครงการที่เราดูแลแบบครบวงจร ตั้งแต่รับฟังปัญหา วิเคราะห์ ศึกษา 
        และนำเสนอแผนการพัฒนา ปรับเปลี่ยนตั้งแต่ระบบโครงสร้าง<br>
        พื้นฐานด้านไอที เรามีทีมงาน ทีมผู้เชี่ยวชาญ ทั้งคู่ค้า ที่มีความชำนาญ 
        ในการนำเทคโนโลยีใหม่ๆ เข้ามาช่วยแก้ไขปัญหา<br>
        พร้อมกับรองรับวางแผนการพัฒนา การขยาย  ต่อยอดในอนาคต 
      </p>  
    </div>
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
              <div class="wrapper text-center color-white">
                <div class="icon">
                  <img class="img" src="public/img/icon/1<?= ($i%10+0) ?>.png" alt="Banner" />
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
              <div class="wrapper text-center color-white">
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
              <div class="wrapper text-center color-white">
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
  <div class="pattern style-42">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-23.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-43">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-25.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-44">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-24.png" alt="Hero" />
    </div>
  </div>
  <div class="pattern style-45">
    <div class="wrapper" value="-.5">
      <img src="public/img/content/pattern-26.png" alt="Hero" />
    </div>
  </div>
  <div class="img-bg" style="background-image:url('public/img/bg/11.jpg');"></div>  
  <div class="container">
    <h3 class="text-center color-white fw-600 lh-sm">
      Jigsaw ERP <span class="h5 fw-200">for Government &</span> <br />
      Microservices Architechture
    </h3>
    <p class="text-center md-no-br color-white fw-200 mt-2">
      ด้วยประสบการณ์ในการทำงานและแลกเปลี่ยนพูดคุย ถึงปัญหาเกี่ยวกับระบบเทคโนโลยีและสารสนเทศภาครัฐมานาน 
      ทำให้เราเข้าใจและมองเห็นปัญหาที่ถูกสะสม<br>มายาวนาน ทำให้เราเข้าใจและสามารถออกแบบระบบใหม่ 
      เพื่อแก้ไขปัญหาเก่าๆ และนำเทคโนโลยีใหม่ๆ เข้ามาใช้งาน 
    </p>
    <div class="ss-box xl mt-6 pt-2">
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