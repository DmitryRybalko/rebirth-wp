<?php
$args = array(
  'category_name'    => "project",
  'status' => 'publish',
  'numberposts' => -1,
  'order' => 'ASC',
);

$loop = new WP_Query( $args );

while ($loop->have_posts()) : $loop->the_post();
get_template_part('template-parts/content', 'project-item');
?>
<?php 
endwhile;
wp_reset_postdata();
?>