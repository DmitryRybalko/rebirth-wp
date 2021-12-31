<footer class="footer">
    <div class="footer__row">
        <div class="container">
            <div class="footer__top">
                <a class="footer__logo" href='<?php echo home_url("/index.php")?>'>
                    <img class="footer__logo-small"
                        src="<?php bloginfo("template_directory") ?>/assets/images/logo/footer-mobile-logo.svg"
                        alt="ЖК Возрождение">
                    <img class="footer__logo-big"
                        src="<?php bloginfo("template_directory") ?>/assets/images/logo/footer-logo.svg"
                        alt="ЖК Возрождение">
                </a>
                <div class="footer__top-item">
                    <p class="footer__info footer__ask">Остались вопросы?</p>
                    <p class="footer__text">Закажите бесплатную консультацию</p>
                </div>
                <button class="footer__action-btn oval-element open-modal">Заказать консультацию</button>
            </div>
        </div>
    </div>
    <div class="footer__row">
        <div class="container">
            <div class="footer__main">
                <div class="footer__grid">
                    <div class="footer__col">
                        <span class="footer__label footer__item">Телефон:</span>
                        <a class="footer__info footer__item" href="tel:+7982452267">+7 982 45-22-67</a>
                    </div>
                    <div class="footer__col">
                        <span class="footer__label footer__item">Ел. почта:</span>
                        <a class="footer__info footer__item"
                            href="mailto:vozrojdenie@yandex.ru">vozrojdenie@yandex.ru</a>
                    </div>
                    <div class="footer__col">
                        <span class="footer__label footer__item">Адрес офиса:</span>
                        <p class="footer__info footer__item">Ярославская обл. Ярославль, Почтовая улица 12/2</p>
                    </div>
                    <div class="footer__col">
                        <span class="footer__label footer__item">Адрес обекта:</span>
                        <p class="footer__info footer__item">Ярославская обл. Ярославль, рядом с ул. Бабича 10/22</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__row">
        <div class="container">
            <div class="footer__bottom">
                <div class="footer__bottom-item footer__bottom-item1">
                    <a class="footer__link footer__link-text" href="#">Политика конфиденциальности</a>
                    <a class="footer__link footer__link-text"
                        href='<?php echo site_url("/rebirth/documents/")?>'>Документы</a>
                </div>
                <div class="footer__bottom-item">
                    <ul class="footer__socials">
                        <li class="footer__social-item">
                            <a class="footer__social-link" href="https://vk.com/" target="_blank">
                                <img class="footer__social-icon"
                                    src="<?php bloginfo("template_directory") ?>/assets/icons/vk.svg" alt="вконтакте">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a class="footer__social-link" href="https://web.telegram.org/" target="_blank">
                                <img class="footer__social-icon"
                                    src="<?php bloginfo("template_directory") ?>/assets/icons/telegram.svg"
                                    alt="телеграм">
                            </a>
                        </li>
                        <li class="footer__social-item">
                            <a class="footer__social-link" href="https://www.instagram.com/" target="_blank">
                                <img class="footer__social-icon"
                                    src="<?php bloginfo("template_directory") ?>/assets/icons/instagram.svg"
                                    alt="инстаграм">
                            </a>
                        </li>
                    </ul>
                    <button class="footer__btn-scroll">
                        <img class="footer__btn-icon"
                            src="<?php bloginfo("template_directory") ?>/assets/icons/arrow-top.svg"
                            alt="стрелка вверх">
                    </button>
                </div>
            </div>
        </div>
    </div>
</footer>
<div class="modal">
    <div class="modal__inner">
        <h2 class="modal__heading">Бесплатная консультация</h2>
        <p class="modal__text">Оставьте заявку и наши специалисты свяжутся с Вами в ближайшее время</p>
        <form class="modal__form" action="" method="post">
            <label class="modal__label" for="name">Ваше имя *</label>
            <input class="modal__input" type="text" id="name" name="name" placeholder="Имя" required>
            <label class="modal__label" for="number">Ваш номер телефона *</label>
            <input class="modal__input" type="tel" id="number" name="number" placeholder="+_ (___) ___ __ __" required>
            <button class="modal__btn" type="submit" value="Submit">Отправить</button>
        </form>
        <button class="modal__close-btn">Закрыть</button>
    </div>
</div>

<?php wp_footer(); ?>
</body>

</html>