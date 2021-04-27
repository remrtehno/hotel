<footer class="footer-noborder">
    <div class="container">
        <!-- BEGIN FOOTERBAR-->
        <section class="footerbar">
            <div class="footerbar__row">
                <div class="footerbar__logo">
                    <a href="">
                        <img src="img/logo.jpg" alt="">
                        <p> Симуляционные центры «под ключ»</p>
                    </a>

                </div>

                <div class="footerbar__menu">
                    <ul>
                        <li><a href="produkciya.html">Продукция</a></li>
                        <li><a href="navyki.html">Навыки</a></li>
                        <li><a href="specialnosti.html">Специальности</a></li>
                        <li><a href="o-kompanii.html">О компании</a></li>
                        <li><a href="novosti.html">Новости</a></li>
                        <li><a href="kontakty.html">Контакты</a></li>
                    </ul>

                </div>
                <div class="footerbar__contacts">
                    <p>{{  }}</p>
                    <p>Работаем по будням с 9:00 до 17:00</p>
                    <a href="mailto:info@urobotics.uz">info@urobotics.uz</a>

                </div>
            </div>
        </section>
        <!-- END FOOTERBAR -->
        <!-- BEGIN BOTTOM-->
        <div class="bottom">
            <div class="bottom__row">
                <div class="bottom__copyright">
                    <span>© 2009—2021, ООО «U-Robotics»</span>
                    <br>
                    <span>Предложение не является публичной офертой. Производитель оставляет за собой право вносить
                        изменения в конструкцию без предварительного уведомления.</span>
                </div>
                <div class="bottom__privacy">
                    <a href="politika-konfidencialnosti.html">Политика конфиденциальности</a>
                </div>
            </div>
        </div>
        <!-- END BOTTOM -->
    </div>
</footer>
<!-- BEGIN MODAL-->
<div class="modal  js-modal" id="js-request">
    <p class="modal__title">Обратная связь</p>
    <!-- BEGIN FORM -->
    <form class="form" action="" enctype="multipart/form-data">
        <div class="FLresult form__group"></div>
        <div class="form__group">
            <input type="text" name="ФИО" placeholder="ФИО" required="">
        </div>
        <div class="form__group">
            <input class="phone" type="tel" placeholder="Телефон" name="Телефон" required="">
        </div>
        <div class="form__group">
            <input type="email" name="Почта" placeholder="Эл. почта" required="">
        </div>
        <div class="form__group">
            <input type="text" name="Город и место работы" placeholder="Город и место работы">
        </div>
        <div class="form__group">
            <input type="text" name="Тема сообщения" placeholder="Тема">
        </div>
        <div class="form__group">
            <textarea name="Текст сообщения" placeholder="Текст"></textarea>
        </div>
        <div class="form__file">
            <label>
                <input type="file" name="attachment">
                <span>
                    <svg>
                        <use xlink:href="img/sprite.svg#file"></use>
                    </svg>
                    Прикрепить файл
                </span>
            </label>
            <input type="text" id="filename" class="filename" disabled="">
            <button class="file-remove">
                <svg>
                    <use xlink:href="img/sprite.svg#close"></use>
                </svg>
            </button>
        </div>
        <div class="form__checkbox">
            <input type="checkbox" name="agree" id="agree" checked="" required="">
            <label for="agree">
                <span>Нажимая кнопку «Отправить», я соглашаюсь на <a
                        href="soglashenie-ob-obrabotke-personalnyh-dannyh.html">обработку персональных данных</a></span>
                <svg>
                    <use xlink:href="img/sprite.svg#check"></use>
                </svg>
            </label>
        </div>
        <input type="hidden" name="formid" value="basic" data-fl-name="Форма">
        <button class="form__submit FLajax" type="submit" data-fl-theme="Сообщение с сайта U-robotics"><span>Отправить
                сообщение</span></button>
    </form>
    <!-- END FORM -->
    <a href="#" class="modal__close  js-modal-close">✖</a>
</div>
<!-- END MODAL -->
