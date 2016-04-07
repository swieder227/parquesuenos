<?php
/**
 * Template Name: Parque Template Page
 *
 * @package parque
 */

get_header(); ?>

  <div id="primary" class="content-area">
    
    <!-- <div class="page-topimg page-topimg--active"></div> -->

    <main id="main" class="site-main" role="main">

    <?php
    /*
    ** Slides
    */
    $row_count = 0;

    if( have_rows('body_content') ): 
      while ( have_rows('body_content') ) : the_row();

        /*
        ** Text Block
        */ 
        if( get_row_layout() == 'text_block' ):
          require_once('modules/moduleTextBlock.php');
          $contentTextBlock = [
            'text_editor' => get_sub_field('text_editor')
          ];
          echo moduleTextBlock($contentTextBlock);

        /*
        ** Image + Text Row
        */
        elseif( get_row_layout() == 'image_text_row' ):
          $row_count += 1;
          require_once('modules/moduleImageTextRow.php');
          $contentRow = [
            'row_image' => get_sub_field('row_image'),
            'row_title' => get_sub_field('row_title', false, false),
            'row_body_text' => get_sub_field('row_body_text'),
            'row_index' => $row_count
          ];
          echo moduleImageTextRow($contentRow);

        endif;

        echo '<div class="border-wave"></div>';

      endwhile;
    endif;

    ?>
      
    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
