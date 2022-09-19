<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1">
    <img class="img" src="public/img/img-02.jpg" alt="Banner" />
  </section>

  <!-- come back to edit later -->
  <div class="tab-demo"></div>

  <section data-section="2" class="section-padding" style="background-color:#f2f2f2">
    <div class="container">
      <div class="text-center">
        <h1 class="title">About Us</h1> 
        <p>บริษัท ซินเนอร์รี่ คอร์ปอเรชั่น (ประเทศไทย) จำกัด</p>  
        <p>เราเป็นบริษัทที่ปรึกษา</p>
        <p>“กลยุทธ์ด้านดิจิตัล สำหรับภาครัฐแบบครบวงจร”</p>
        <p>เรานำเสนอโซลูชั่นผ่านการให้คำปรึกษาด้านกลยุทธ์ทางดิจิทัลและเทคโนโลยี</p>
        <p>ที่ช่วยให้หน่วยงานหรือองค์กรได้ผลลัพธ์ที่ดีขึ้น เพื่อรับกับแนวทางการเปลี่ยนแปลงที่เกิดขึ้น</p>
      </div>
    </div>
  </section>

  <section data-section="3" class="section-padding" style="background-color:red;">
    <div class="container">
      <div class="text-center">
        <p>ประสบการณ์ มากกว่า 25 ปี</p> 
        <p>ความสำเร็จของลูกค้าของเรา ทั้งหน่วยงานภาครัฐและเอกชน มากกว่า 400 หน่วยงาน</p>  
        <p>รวมผลงานต่างๆ มากกว่า 500 โครงการ</p>
      </div>
      <div class="ss-box">
        <div class="grids jc-center">
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p>More Than</p>
                <p>300</p>
                <p>Clients</p>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p>More Than</p>
                <p>300</p>
                <p>Clients</p>
              </div>
            </div>
          </div>
          <div class="grid lg-1-3">
            <div class="ss-card-01">
              <div class="text-container">
                <p>More Than</p>
                <p>300</p>
                <p>Clients</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center mt-3">
        <p>เรามุ่งเน้นการส่งมอบผลลัพธ์งานที่มี คุณภาพเหนือความคาดหมาย</p>
        <p>ตรงตามกำหนด และ บรรลุผลการปฏิบัติงาน ให้กับลูกค้า</p>
      </div>
    </div>
  </section>

  <section data-section="4" class="section-padding" style="background-color:#f2f2f2">
    <div class="container">
      <div class="text-center">
        <p class="title">“มาตรฐาน มืออาชีพ”</p>
        <p class="desc sm-no-br">
          บริษัทของเราประกอบด้วยผู้ที่ชอบการทำงานร่วมกัน ไม่ว่าทีมของเราจะอยู่ที่ใด เพื่อให้เราสามารถส่งมอบงานที่มีคุณภาพ <br>
          เราพัฒนาทักษะด้านกำลังคนขับเคลื่อนการปรับปรุงการปฏิบัติงาน และใช้วิธีการทำงานแบบใหม่ เพื่อเป้าหมายเดียวกัน <br>
          คือการทำงานด้วย “มาตรฐานความ เป็นมืออาชีพ” หรือ Professional Standard จึงทำให้เราสามารถที่ <br>
          จะส่งมอบงานได้ตามคำมั่นสัญญา ด้วยคุณภาพและมาตรฐานที่เหนือความคาดหมาย
        </p>
      </div>
      <div class="ss-img horizontal no-hover mt-4">
        <div class="img-bg" style="background-image:url('public/img/content/01.jpg');"></div>
      </div>
    </div>
  </section>

  <section data-section="5" class="section-padding">
    <div class="container">
      <div class="text-center">
        <p class="title">Our Awards</p>
        <p class="desc sm-no-br">
        “Professional Standard” คือคำที่ทีมงานใช้ในการสื่อสารและยึดมั่นในการทำงานร่วมกัน ด้วยความมุ่งมั่นที่จะส่ง <br>
        มอบ “งานคุณภาพเหนือ ความคาดหมาย” และ “ตรงต่อเวลา” ให้กับลูกค้า ทำให้หลายปีที่ผ่านมา เราได้รับทั้งคำ <br>
        ชื่นชมและได้รับรางวัลต่าง ๆ มากมายเกี่ยวกับผลิตภัณฑ์ ผลงานและงานบริการที่บริษัทฯ ได้เป็นผู้พัฒนา และ ส่งมอบ
        </p>
      </div>
      <div class="grids no-gap mt-4">
        <?php for($i=0; $i<6; $i++){?>
          <div class="grid lg-1-3 mt-0">
          <div class="ss-card ss-card-02">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/img/content/0<?= ($i%6+2) ?>.jpg');"></div>
            </div>
          </div>  
        </div>   
        <?php }?>
      </div>
    </div>
  </section>
  
  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>