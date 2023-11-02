<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <section data-section="1" data-aos="fade-in" data-aos-delay="0">
    <img class="img" src="public/img/bg/97.jpg" alt="Banner" />
  </section>

  <section data-section="2" class="video-tabs-container ovf-hidden tab-container" data-aos="fade-up" data-aos-delay="150">
    <div class="grids no-gap">
      <div class="grid lg-20 md-30 sm-30 xs-100 mt-0">
        <div class="menu-container">
          <?php 
             $tabs = [
              ['title' => 'ALL'], 
              ['title' => 'Gaming'], 
              ['title' => 'News'], 
              ['title' => 'Music'], 
              ['title' => 'Playlist'],
              ['title' => 'Game Shows'],
            ]
          ?>
          <div class="tabs tabs-02">
            <?php foreach($tabs as $i=>$d){?>
              <div class="tab" data-tab="tab_<?= $i ?>">
                <div class="wrapper">
                  <p class="sm text"><?= $d['title'] ?></p>
                </div>
              </div>
              <?php if($i === 0) {?>
                <?php 
                  $submenu = [
                    ['title' => 'Music'],
                    ['title' => 'Music Video'],
                    ['title' => 'Lirycs'],
                    ['title' => 'PlayList'],
                  ]
                ?>
                <div class="submenu-dropdown">
                  <?php foreach($submenu as $j=> $d){?>
                    <div class="p sm menu <?php if($j==0)echo 'topic'; ?> <?php if($j==2)echo 'active'; ?>" data-tab="tab_<?= $j ?>">
                      <?= $d['title'] ?>
                    </div>
                  <?php } ?>
                </div>
              <?php } ?>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="grid lg-80 md-70 sm-70 xs-100 mt-0">
        <div class="tab-contents">
          <?php foreach($tabs as $i=>$d){?>
            <div class="tab-content" data-tab="tab_<?= $i ?>">
              <?php 
                if($i === 1){include('data/videos/gaming.php');} 
                if($i === 2){include('data/videos/news.php');} 
                if($i === 3){include('data/videos/gaming.php');} 
                if($i === 4){include('data/videos/news.php');} 
                if($i === 5){include('data/videos/gaming.php');} 
              ?>
            </div>
          <?php }?>
        </div>
        <div class="sub-contents">
          <?php foreach($submenu as $j=>$d){?>
            <div class="sub-content <?php if($j==2)echo 'active'; ?>" data-tab="tab_<?= $j ?>">
              <?php 
                if($j === 1){include('data/videos/music-video.php');} 
                if($j === 2){include('data/videos/lirycs.php');} 
                if($j === 3){include('data/videos/playlist.php');} 
              ?>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>