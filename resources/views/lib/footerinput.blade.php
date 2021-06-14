<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xl-4">
                <a href="/" class="footer-logo">
                    <img src="/img/ft-logo.png" alt="">
                </a>
                <div class="copyright">
                    © {{ date('Y') }} Royal Plaza. Все права защищены.
                    Политика конфиденциальности
                </div>
            </div>
            <div class="col-xl-3">
                <nav class="footer-nav">
                    <a href="{{ route('about') }}">Об отеле</a>
                    <a href="{{ route('hotels') }}">Номера</a>
                    <a href="{{ route('news') }}">Рестораны и бары</a>
                    <a href="{{ route('events') }}">Мероприятия</a>
                    <a href="{{ route('extra_services') }}">Спец предложения </a>
                    <a class="js-anchor" href="{{ route('dopuslugi') }}">Дополнительные услуги</a>
                    <a class="js-anchor" href="/contact">Контакты</a>
                </nav>
            </div>
            <div class="col-auto">
                @include("_some-parts.contact-info")

                <div>
                    <a class="btn-call" data-toggle="modal" data-target="#exampleModal" href="">Заказать звонок</a>
                </div>
                <div class="social">
                    @include('_some-parts.social')
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- Modal -->
<div class="modal fade" id="book" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="modal-body">
                    <form class="form" action="{{ route('email') }}" method="POST">
                        @csrf
                        <input type="hidden" class="input-hotel" name="hotel" name="hotel">
                        <input type="hidden" name="msg" value="Забронировать столик">
                        <input name="name" type="text" placeholder="Ваше имя">
                        <input name="tel" type="text" placeholder="Ваш номер">
                        <input name="time" style="position: static; opacity: 1; font-feature-settings: 'pnum' on, 'lnum' on;   z-index: 9;
                        position: relative;
                " type="datetime-local"  placeholder="Желаемые дата и время бронирования">
                        <br>
                        <p></p>
                        <br>
                        <div style="position: absolute;
                        top: 183px;
                        right: 29px;
                        mix-blend-mode: soft-light;
                        background: white;
                        width: 35px;
                        height: 35px;
                        min-width: 35px;
                        min-height: 35px;"></div>
                        <button class="orange-btn" type="submit">Забронировать</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="politics" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('inner-pages.politics')
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="user-cond" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @include('inner-pages.user-cond')
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" action="{{ route('email') }}" method="POST">
                    @csrf
                    <input name="name" type="text" placeholder="Ваше имя">
                    <input name="tel" type="text" placeholder="Ваш номер">
                    <br>
                    <p></p>
                    <br>
                    <button class="orange-btn" type="submit">Оставить заявку</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="wait-callback" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заказать звонок</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form" action="{{ route('email') }}" method="POST">
                    @csrf
                    <input name="name" type="text" placeholder="Ваше имя">
                    <input name="tel" type="text" placeholder="Ваш номер">
                    <br>
                    <textarea name="msg" placeholder="Сообщение"></textarea>
                    <p></p>
                    <br>
                    <button class="orange-btn" type="submit">Жду звонка</button>
                </form>
            </div>
        </div>
    </div>
</div>


@if (session()->has('message'))
    <div class="modal fade" onclick="this.remove()" style="display: block;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Успешно!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{ session()->get('message') }}
                </div>
            </div>
        </div>
    </div>

@endif
