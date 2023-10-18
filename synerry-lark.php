<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php $topnavActive=0; include_once('include/topnav.php'); ?>
  <?php include_once('include/accessibility.php'); ?>

  <?php 
//   $gradient = 'linear-gradient(1deg, rgba(2,0,36,1) 0%, rgba(203,227,255,1) 0%, rgba(255,255,255,1) 100%)';
  $gradient = 'linear-gradient(1deg, rgba(2,0,36,1) 0%, rgb(156 156 156) 0%, rgba(255,255,255,1) 100%)';
  ?>

  <?php /* <section data-section="1" data-aos="fade-in" data-aos-delay="0" style="background:<?= $gradient ?>;">
    <div class="container text-center">
        <!-- <img src="public/img/bg/404-lark.png" alt="404-lark" style="max-width: 950px; margin: auto;"> -->
        <img src="public/img/bg/404-sys.png" alt="404-sys" style="max-width: 750px; margin: auto;filter: hue-rotate(18deg) drop-shadow(-1px 3px 0px rgba(0,0,0,0.6));">
    </div>
  </section> */ ?>
  <section data-section="1" data-aos="fade-in" data-aos-delay="0" >
    <img src="public/img/lark/lark.jpg" alt="lark" />
  </section>
  
  <?php $withFooterInfo=true; include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>