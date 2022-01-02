<?php get_header() ?>
<main class="main">
    <div class="container">
        <?php 
    if(have_posts()) {
        while(have_posts()) {
            the_post();
            get_template_part('template-parts/page', 'documents');
        }
    }
?>
    </div>
</main>
<?php get_footer() ?>