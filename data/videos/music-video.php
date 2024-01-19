<div class="content">
  <div class="title-header">
    <h6 class="color-p title fw-400">Music Video</h6>
    <span class="p sm fw-400">VIDEO อบรมกระทรวงการศึกษา</span>
  </div>
  <a class="ss-card mt-1" href="https://www.youtube.com/watch?v=h3Vq9LjJ2tk" data-fancybox>
    <div class="ss-img">
      <div class="img-bg" style="background-image:url('public/img/content/108.jpg');"></div>
      <div class="card-icon">
        <div class="icon">
          <img class="img" src="public/img/icon/play.png" alt="Banner" />
        </div>
      </div>
      <div class="card-line-1"></div>
      <div class="card-line-2"></div>
    </div>
    <p class="fw-400 mt-1">VIDEO อบรมกระทรวงศึกษา</p>
  </a>

  <?php 
    $musicContent = [
      [
        'href' => 'https://www.youtube.com/watch?v=h3Vq9LjJ2tk',
        'title' => "WORKSHOP P'MIND FINAL",
        'imgBg' => "public/img/content/108.jpg"
      ],[
        'href' => 'https://www.youtube.com/watch?v=h3Vq9LjJ2tk',
        'title' => 'ทำบุญประจำออฟฟิศประจำปี 2565',
        'imgBg' => "public/img/content/108.jpg"
      ],[
        'href' => 'https://www.youtube.com/watch?v=h3Vq9LjJ2tk',
        'title' => 'หมูทะจะเยียวยาทุกอย่าง',
        'imgBg' => "public/img/content/108.jpg"
      ],
    ]
  ?>
  <div class="section-padding">
    <p class="lg color-p fw-500">วิดีโอที่เกี่ยวข้อง</p>
    <div class="grids">
      <?php foreach($musicContent as $d) {?>
        <div class="grid lg-1-3">
        <a class="ss-card" href="<?= $d['href'] ?>" data-fancybox>
          <div class="ss-img">
            <div class="img-bg" style="background-image:url('<?= $d['imgBg'] ?>');"></div>
            <div class="card-icon">
              <div class="icon xs">
                <img class="img" src="public/img/icon/play.png" alt="Banner" />
              </div>
            </div>
            <div class="card-line-1"></div>
            <div class="card-line-2"></div>
          </div>
          <p class="xs fw-400 mt-1"><?= $d['title'] ?></p>
        </a>
      </div>
      <?php } ?>
    </div>
  </div>
</div>