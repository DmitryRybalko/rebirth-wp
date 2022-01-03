<div class="main__project">
    <img class="main__news-image" src="<?php the_field('project-image')?>" alt="" />
    <div class="main__project-info">
        <?php the_field('project-title')?>
        <div class="main__project-item">
            <span class="main__project-span"><img class="main__project-icon"
                    src="<?php bloginfo("template_directory") ?>/assets/icons/building--blue.svg" alt="иконка здания" />
                <?php the_field('number-of-houses')?></span>
            <?php the_field('number-to-sell')?>
        </div>
        <div class="main__project-item">
            <span class="main__project-span"><img class="main__project-icon"
                    src="<?php bloginfo("template_directory") ?>/assets/icons/calendar--blue.svg"
                    alt="иконка календаря" />
                <?php the_field('lit')?></span>
            <?php the_field('date')?>
        </div>
        <button class="main__project-choice">
            Выбрать квартиру
            <img class="main__project-btn-icon" src="<?php bloginfo("template_directory") ?>/assets/icons/building.svg"
                alt="иконка здания" />
        </button>
    </div>
</div>