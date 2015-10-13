<?php
  $type = 'permanente';
  $args=array(
    'post_type' => $type,
    'post_status' => 'publish');

  $my_query = null;
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
    $i = 0;
    while ($my_query->have_posts()) : $my_query->the_post(); $i++;?>

    <?php if ($i == 1) {
      echo '<div class="item active">';
    } else if($i % 2 != 0) {
      echo '<div class="item">';
    } ?>
        <?php the_post_thumbnail(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
      <?php if ($i % 2 == 0 or $my_query->found_posts == $i) {
          echo '</div>';
        }else if($i % 2 != 0) {
          echo '<br>';
        }?>
      <?php
    endwhile;
  }
  wp_reset_query();  // Restore global post data stomped by the_post().
 ?>
