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
                <?php
global $post;
$myposts = get_posts([ 
	'category_name'    => "benefit",
    'status' => 'publish',
    'numberposts' => -1,
    'order' => 'ASC',
]);
if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
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
                <?php 
	}
} 
wp_reset_postdata(); 
?>
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
                        <p class="main__draft-text">Однокомнатные квартиры от 23 м&#178;</p>
                        <span class="main__price">от 5 400 000 ₽</span>
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
                    <?php
global $post;

$myposts = get_posts([ 
	'category_name'    => "	slide-gallery",
    'status' => 'publish',
    'numberposts' => -1,
    'order' => 'ASC',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
                    <div class="main__swiper-slide swiper-slide">
                        <?php the_post_thumbnail(array(), array(
                'class' => "main__gallery-slide swiper-lazy"
                ));?>
                        <div class="swiper-lazy-preloader"></div>
                    </div>
                    <?php 
	}
} 
wp_reset_postdata(); 
?>
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
                <?php
global $post;

$myposts = get_posts([ 
    'category_name'    => "how-to-buy-item",
    'status' => 'publish',
    'numberposts' => -1,
    'order' => 'ASC',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
                <div class="main__how-to-item">
                    <div class="main__icon-container oval-element--blue">
                        <img class="main__icon" src="<?php the_field('icon')?>" alt="">
                    </div>
                    <div class="main__content">
                        <?php the_field("label")?>
                        <?php the_field("text")?>
                    </div>
                </div>
                <?php 
	}
}
wp_reset_postdata(); 
?>
                <div class="main__how-to-item stretch-item">
                    <div class="main__consultation-content">
                        <p class="main__label main__question-label">Есть вопросы?</p>
                        <p class="main__question-text">Закажите бесплатную консультацию или звоните за номером:</p>
                        <p class="main__phone-number">+7 982 45-22-67</p>
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
                <?php
global $post;

$myposts = get_posts([ 
    'category_name'    => "client-slide",
    'status' => 'publish',
    'numberposts' => -1,
    'order' => 'ASC',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
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
                <?php 
	}
} 
wp_reset_postdata(); 
?>
            </div>
        </div>
    </section>
    <div class="container">
        <section class="main__section main__partners-section">
            <h2 class="main__heading main__partners-heading">
                Наши партнеры
            </h2>
            <div class="main__grid">

                <?php
global $post;

$myposts = get_posts([ 
    'category_name'    => "partner",
    'status' => 'publish',
    'numberposts' => -1,
    'order' => 'ASC',
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
                <div class="main__partner">
                    <?php the_post_thumbnail(array(), array(
                'class' => "main__partner-logo"
                ));?>
                </div>
                <?php 
	}
}

wp_reset_postdata(); 
?>
            </div>
        </section>
    </div>
</main>
<?php get_footer() ?>