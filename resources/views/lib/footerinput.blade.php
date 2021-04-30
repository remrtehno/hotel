<footer class="footer-noborder">
    <div class="container">
        <!-- BEGIN FOOTERBAR-->
        <section class="footerbar">
            <div class="footerbar__row">
                <div class="footerbar__logo">
                    <a href="">
                        <img src="/img/logo.jpg" alt="">
                        <p> Симуляционные центры «под ключ»</p>
                    </a>

                </div>

                <div class="footerbar__menu">
                    <ul>
                        <li><a href="{{ route('products') }}">Продукция</a></li>
                        <li><a href="#skill" class="js-anchor">Навыки</a></li>
                        <li><a href="{{ route('about') }}">О компании</a></li>
                        <li><a href="{{ route('news') }}">Новости</a></li>
                        <li><a href="{{ route('contact') }}">Контакты</a></li>
                    </ul>

                </div>
                <div class="footerbar__contacts">
                    {!! $contact_info['phone'] !!}
                    <p>Работаем по будням с 9:00 до 17:00</p>
                    {!! $contact_info['email'] !!}

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
            <textarea name="Текст сообщения" placeholder="Текст"></textarea>
        </div>


        <input type="hidden" name="formid" value="basic" data-fl-name="Форма">
        <button class="form__submit FLajax  js-modal-close" type="submit"
            data-fl-theme="Сообщение с сайта U-robotics"><span>Отправить
                сообщение</span></button>
    </form>
    <!-- END FORM -->
    <a href="#" class="modal__close  js-modal-close">✖</a>
</div>
<!-- END MODAL -->
