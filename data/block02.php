<section class="section-10 section-padding pt-0">
  <div class="pattern style-04">
    <div class="wrapper" value=".5">
      <img src="public/img/patterns/05.png" alt="Hero">
    </div>
  </div>
  <div class="pattern style-05">
    <div class="wrapper" value=".5">
      <img src="public/img/patterns/06.png" alt="Hero">
    </div>
  </div>
  <div class="pattern style-06">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/05.png" alt="Hero">
    </div>
  </div>
  <div class="img-bg" style="background-image:url('public/img/bg/95.jpg'); background-position:top center;"></div>
  <div class="container" style="z-index:2;">
    <div class="text-center">
      <h3 class="lh-2xs color-01 fw-600" data-aos="fade-up" data-aos-delay="0">
        Unlimited Minisite
      </h3>
      <p class="fw-400 mt-2 lg-no-br" data-aos="fade-up" data-aos-delay="150">
        สร้างเว็บไซต์ย่อย ๆ ได้อย่างไม่จำกัด เหมาะสำหรับหน่วยงานหลัก ที่มีหน่วยงานย่อย ๆ ภายใต้การกำกับดูแล <br>
        ต้องการให้เว็บของเว็บไซต์หลัก เว็บไซต์ย่อยมีรูปแบบไปในแนวทาง Design เดียวกัน
      </p>
    </div>
    <div class="swiper-container" data-aos="fade-up" data-aos-delay="300">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<9; $i++){?>
          <div class="swiper-slide">
            <div class="ss-card ss-card-29 box-shadow c-pointer">
              <div class="ss-img no-hover vertical-02">
                <div 
                  class="img-bg" data-href="web-gov-minisite.php" 
                  style="background-image:url('public/img/content/minisite-gov-0<?= ($i%9+1) ?>.jpg');" 
                ></div>
              </div>
            </div> 
          </div>
        <?php }?>
      </div>
      <div class="navigator">
        <div class="arrow-left btn-icon-next">
          <img src="public/img/icon/arrow-01.png" alt="Arrow" />
        </div>
        <div class="dots"></div>
        <div class="arrow-right btn-icon-next">
          <img src="public/img/icon/arrow-02.png" alt="Arrow" />
        </div>
      </div>
    </div>
    <div class="btns pt-6 jc-center animate-01" style="--delay:.9s;" data-aos="fade-up" data-aos-delay="0">
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