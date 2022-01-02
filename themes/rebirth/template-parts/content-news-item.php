<div class="main__news-item">
    <img class="main__news-image" src="<?php the_field('image')?>" alt="" />
    <div class="main__news-meta">
        <img class="main__calendar-icon" src="<?php the_field('icon-date')?>" alt="календарь" />
        <?php the_field('news-date')?>
    </div>
    <div class="main__news-info">
        <?php the_field('news-title')?>
        <?php the_field('news-text')?>
        <a class="main__news-link" href="#">Читать полностью</a>
    </div>
</div>