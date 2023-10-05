<section class="section-10 section-padding">
    <div class="pattern style-01">
      <div class="wrapper" value="-.5">
        <img src="public/img/content/pattern-31.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-02">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-30.png" alt="Hero">
      </div>
    </div>
    <div class="pattern style-03">
      <div class="wrapper" value=".5">
        <img src="public/img/content/pattern-19.png" alt="Hero">
      </div>
    </div>
    <div class="img-bg" style="background-image:url('public/img/bg/70.jpg'); background-position:top center;"></div>
    <div class="container" style="z-index:2;">
      <div class="text-center">
        <h3 class="lh-2xs color-01 fw-600">
          Mini Site for <span class="color-black">Government</span>
        </h3>
        <p class="color-03 fw-400 mt-2 lg-no-br">
          สร้างเว็บไซต์ย่อย ๆ ได้อย่างไม่จำกัด เหมาะสำหรับหน่วยงานหลัก ที่มีหน่วยงานย่อย ๆ ภายใต้การกำกับดูแล <br>
          ต้องการให้เว็บของเว็บไซต์หลัก เว็บไซต์ย่อยมีรูปแบบไปในแนวทาง Design เดียวกัน
        </p>
      </div>
      <div class="swiper-container">
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
    </div>
  </section>