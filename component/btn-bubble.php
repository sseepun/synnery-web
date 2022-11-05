
<?php if(isset($btnBubble)){?>
  <div class="btn-bubble__container">
    <a 
      href="<?= $btnBubble['href'] ?>" 
      class="button btn-bubble <?php if(isset($btnBubble['class']))echo $btnBubble['class']; ?>" 
    >
      <?= $btnBubble['title'] ?>
    </a>
    <span class="btn-bubble__effect-container">
      <span class="circle top-left"></span>
      <span class="circle top-left"></span>
      <span class="circle top-left"></span>
      <span class="button effect-button"></span>
      <span class="circle bottom-right"></span>
      <span class="circle bottom-right"></span>
      <span class="circle bottom-right"></span>
    </span>
  </div>
<?php }?>