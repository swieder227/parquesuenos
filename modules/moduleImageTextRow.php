<?php
function moduleImageTextRow($contentRow){
  ob_start(); 

    /*
      $contentRow = [
        'row_image': url to an img
        'row_title': string of text for header
        'row_body_text': string of text for body
        'row_index': incrementing counter of rows on page
        'button_boolean': true/false should show a button/anchor?
        'button_url': the anchor's href
        'button_text': the anchor's text
      ]
    */

    $class_bg = ''; 
    $class_text = '';

    // Decide which to left/right align
    if($contentRow['row_index'] % 2 == 0){
      $class_bg = 'casa-col--right';
    } else {
      $class_text = 'casa-col--right';
    }

    // Apply a color to the background
    switch($contentRow['row_index'] % 3){
      case 0:
        $class_text = $class_text.' casa-col--orange-light casa-col--scratch-orange-light';
        break;
      case 1:
        $class_text = $class_text.' casa-col--blue-dark casa-col--scratch-blue';
        break;
      case 2:
        $class_text = $class_text.' casa-col--orange-dark casa-col--scratch-orange-dark';
        break;
    }

  ?>

    <div class="casa-row parque-text-color--white clear">
      <div class="casa-col--bg casa-col--50p <?php echo $class_bg ?>" style="background-image:url(<?php echo $contentRow['row_image'] ?>)"></div>
      <div class="casa-col--text casa-col--50p casa-col--minh20 <?php echo $class_text ?>">
        <h1 class="parque-h1 parque-ugc parque-ugc--detect-fonts"><?php echo $contentRow['row_title']?></h1>
        <p class="parque-body"><?php echo $contentRow['row_body_text']?></p>
        <?php if($contentRow['button_boolean']): ?>
          <div class="alignright parque-body font-uppercase learnmore-link"><a href="<?php echo $contentRow['button_url'] ?>">See Activities</a></div>
        <?php endif ?>
      </div>
    </div>  

  <?php
  return ob_get_clean();
} ?>