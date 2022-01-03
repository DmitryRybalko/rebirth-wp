<?php
/*
Template Name: projects page
*/
?>
<?php get_header() ?>
<main class="main">
    <div class="container">
        <?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part('template-parts/page', 'project');
        }
    }
?>
    </div>
</main>
<?php get_footer() ?>