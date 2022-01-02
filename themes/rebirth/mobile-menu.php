<div class="mobile-menu">
    <?php wp_nav_menu(
        array(
            'menu' => "mobile",
            'container' => '',
            'theme_location' => 'mobile',
            'items_wrap' => '<ul id="" class="mobile-menu__list">%3$s</ul>',
        )
    )?>
    <div class="mobile-menu__phone">
        <div class="mobile-menu__connect">
            <span class="mobile-menu__phone-number phone-number">+7 982 45-22-67</span>
            <span class="mobile-menu__work-hours work-hours">Пн-Пт. с 8:00 до 19:00</span>
        </div>
        <a class="mobile-menu__phone-link phone-link oval-element--blue" href="tel:+798245-22-67">
            <span class="mobile-menu__phone-text">Позвонить</span>
            <img class="mobile-menu__phone-img phone-img" src="<?php bloginfo("template_url")?>/assets/icons/phone.svg"
                alt="телефон" /></a>
    </div>
</div>