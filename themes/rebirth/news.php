<?php
/*
Template Name: news page
*/
?>
<?php get_header() ?>
<main class="main">
    <div class="container">
        <?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part('template-parts/page', 'news');
        }
    }
?>
    </div>
</main>
<?php get_footer() ?>