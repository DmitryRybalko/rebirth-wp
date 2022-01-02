<div class="main__accordion">
    <div class="main__accordion-item">
        <?php the_post_thumbnail(array(), array(
                                'class' => "main__accordion-bg"
                        ));?>
        <img class="main__accordion-icon" src="<?php the_field('icon-benefit')?>" alt="">
        <p class="main__accordion-label main__label"><?php the_title(); ?></p>
        <button class="main__accordion-toggle">
            <img class="main__accordion-toggle-icon" src="<?php the_field('icon-toggle')?>"
                alt="стрелка, обозначающая открыто или скрыто описание">
        </button>
        <?php the_field("text-benefit-pc")?>
    </div>
    <div class="main__accordion-content">
        <?php the_field("text-benefit-mobile")?>
    </div>
</div>