<section class="section-01 section-padding pt-0">
  <div class="pattern style-53">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/08.png" alt="Pattern">
    </div>
  </div>
  <div class="pattern style-54">
    <div class="wrapper" value="-.5">
      <img src="public/img/patterns/10.png" alt="Pattern">
    </div>
  </div>
  <div class="img-bg" style="background-image:url('public/img/bg/63.jpg'); background-position:top center;"></div>  
  <div class="container">
    <div class="ss-box xl pos-relative" style="z-index:2;" data-aos="fade-up" data-aos-delay="0">
      <video width="100%" height="auto" autoplay muted playsinline loop>
        <source src="public/video/DevSecOps.mp4" type="video/mp4">
      </video>
    </div>
    <div class="btns pt-6 mt-2 jc-center animate-01" style="--delay:.9s;" data-aos="fade-up" data-aos-delay="0">
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