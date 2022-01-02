<nav class="header__nav">
    <a class="header__logo logo" href="<?php echo home_url()?>">
        <img class="header__logo-small" src="<?php bloginfo("template_url")?>/assets/images/logo/logo-mobile.svg"
            alt="жк возрождение" />
        <img class="header__logo-big" src="<?php bloginfo("template_url")?>/assets/images/logo/logo.svg"
            alt="жк возрождение" />
    </a>


    <?php wp_nav_menu(
        array(
            'menu' => "desktop",
            'container' => '',
            'theme_location' => 'desktop',
            'items_wrap' => '<ul id="" class="header__list">%3$s</ul>',
        )
    )?>
    <div class="header__phone">
        <div class="header__connect">
            <span class="header__phone-number phone-number">+7 982 45-22-67</span>
            <span class="header__work-hours work-hours">Пн-Пт. с 8:00 до 19:00</span>
        </div>
        <a class="header__phone-link phone-link" href="tel:+798245-22-67"><img class="header__phone-img phone-img"
                src="<?php bloginfo("template_url")?>/assets/icons/phone.svg" alt="телефон" /></a>
    </div>
    <button class="header__menu-btn menu-btn oval-element--blue">
        <span class="menu-btn-text">Menu</span>
        <img class="menu-btn-icon" src="<?php bloginfo("template_url")?>/assets/icons/menu.svg"
            alt="иконка меню - открыть" />
        <img class="menu-btn-icon menu-toggled" src="<?php bloginfo("template_url")?>/assets/icons/menu-close.svg"
            alt="иконка меню - закрыть" />
    </button>
</nav>