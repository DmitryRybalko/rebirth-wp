<div class="main__client-slide swiper-slide">
    <div class="main__client">
        <img class="main__client-photo" src="<?php the_field('client-photo')?>" alt="фото">
        <div class="main__client-meta">
            <?php the_field("client-name")?>
            <a class="main__client-link" href="<?php the_field("client-link")?>"
                target="_blank"><?php the_field("client-link-text")?></a>
        </div>
    </div>
    <?php the_field("client-review")?>
</div>