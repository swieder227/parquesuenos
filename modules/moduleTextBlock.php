<?php
function moduleTextBlock($contentTextBlock){
  ob_start(); 

    /*
      $contentTextBlock = [
        'text_editor': string of rich text
      ]
    */

  ?>

    <div class="casa-row casa-row--nopad parque-text-color--blue">
      <div class="casa-col--text casa-col--100p parque-ugc">
        <?php echo $contentTextBlock['text_editor']; ?>  
      </div>
    </div>  

  <?php
  return ob_get_clean();
} ?>