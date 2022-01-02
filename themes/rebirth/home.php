<?php
/*
Template Name: home
*/
?>

<?php get_header("hero") ?>
<main class="main">
    <div class="container">
        <section class="main__section main__benefits-section section-end">
            <h2 class="main__heading main__benefits-heading">
                Преимущества жизни в ЖК “Возрождение”
            </h2>
            <div class="main__grid">
                <?php get_template_part('benefit')?>
            </div>
        </section>
        <section class="main__section main__draft-section section-end">
            <h2 class="main__heading main__draft-heading">
                Планировка квартир
            </h2>
            <div class="main__draft">
                <div class="main__draft-show">
                    <picture>
                        <source srcset="<?php bloginfo("template_url")?>/assets/images/drafts/draft-2.webp"
                            type="image/webp">
                        <img class="main__draft-img  in-view"
                            src="<?php bloginfo("template_url")?>/assets/images/drafts/draft-2.png"
                            alt="планировка однокомнатной квартиры">
                    </picture>
                </div>
                <form class="form" action="">
                    <div class="main__draft-panel">
                        <div class="main__choices">
                            <input class="main__radio-btn" type="radio" name="комната" value="1 комната" id="1-комн"
                                checked>
                            <label class="main__radio-label oval-element" for="1-комн">1-комн.</label>
                            <input class="main__radio-btn" type="radio" name="комната" value="2 комнаты" id="2-комн">
                            <label class="main__radio-label oval-element" for="2-комн">2-комн.</label>
                        </div>
                        <?php the_field("flat-type")?>
                        <?php the_field("price1")?>
                        <button class="main__action-btn oval-element--blue">Подобрать квартиру</button>
                    </div>
            </div>
            </form>
        </section>
        <section class="main__section main__gallery-section section-end">
            <h2 class="main__heading main__gallery-heading">
                Галерея наших фото
            </h2>
            <div class="main__swiper swiper">
                <div class="main__swiper-wrapper swiper-wrapper">
                    <?php get_template_part('slide-gallery')?>
                </div>
                <div class="main__swiper-button swiper-button-prev"></div>
                <div class="main__swiper-button swiper-button-next"></div>
            </div>
        </section>
    </div>
    <h2 class="main__heading main__gallery-heading">
        Как купить?
    </h2>
    <section class="main__section main__how-to-section section-end">
        <div class="container">
            <div class="main__how-to">
                <?php get_template_part('how-to-item')?>
                <div class="main__how-to-item stretch-item">
                    <div class="main__consultation-content">
                        <p class="main__label main__question-label">Есть вопросы?</p>
                        <p class="main__question-text">Закажите бесплатную консультацию или звоните за номером:</p>
                        <?php the_field("phone")?>
                        <button class="main__consultation-btn oval-element--blue open-modal">Заказать
                            консультацию</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="main__section main__clients-section section-end">
        <h2 class="main__heading main__clients-heading">
            Отзывы наших клиентов
        </h2>
        <div class="main__clients-swiper">
            <div class="main__clients-wrapper swiper-wrapper">
                <?php get_template_part('client')?>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="main__section main__partners-section">
            <h2 class="main__heading main__partners-heading">
                Наши партнеры
            </h2>
            <div class="main__grid">
                <?php get_template_part('partner')?>
            </div>
        </section>
    </div>
</main>
<?php get_footer() ?>