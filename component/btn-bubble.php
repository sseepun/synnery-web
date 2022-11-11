
<?php if(isset($btnBubble)){?>
  <div class="btn-bubble__container c-pointer 
    <?php if(isset($btnBubble['classWrapper']))echo $btnBubble['classWrapper']; ?>" 
  >
    <?php if(isset($btnBubble['type'])){?>
      <button type="<?= $btnBubble['type'] ?>"
        class="button btn-bubble <?php if(isset($btnBubble['class']))echo $btnBubble['class']; ?>" 
      >
        <?= $btnBubble['title'] ?>
      </button>
    <?php }else{?>
      <a 
        href="<?= $btnBubble['href'] ?>" 
        class="button btn-bubble <?php if(isset($btnBubble['class']))echo $btnBubble['class']; ?>" 
        <?php if(isset($btnBubble['target'])){?>data-target="<?= $btnBubble['target'] ?>"<?php }?>
      >
        <?= $btnBubble['title'] ?>
      </a>
    <?php }?>
    <span class="btn-bubble__effect-container c-pointer">
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