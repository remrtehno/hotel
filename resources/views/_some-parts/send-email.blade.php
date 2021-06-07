<h2 class="title-section send-email">
    Остались вопросы? Напишите нам
</h2>
<p class="title-description">Мы свяжемся с вами в ближайшее время</p>
<br>
<form class="form" action="/send-email" method="POST">
    @csrf
    <div class="row">
        <div class="col-md-6">
            <input name="name" type="text" placeholder="Ваше имя">
        </div>
        <div class="col-md-6">
            <input name="tel" type="tel" placeholder="Телефон или эл. почта">
        </div>
    </div>



    <textarea name="msg" placeholder="Сообщение"></textarea>
    <p></p>
    <br>
    <div class="d-xl-flex">
        <button class="orange-btn" type="submit">Отправить</button>
        <div class="politics">Нажимая кнопку «Отправить» я подтверждаю, что ознакомился полностью согласен с
            <span data-toggle="modal" data-target="#politics">Политикой конфиденциальности</span>
            и
            <span data-toggle="modal" data-target="#user-cond">
                Согласием на обработку персональных данных</span>
        </div>
    </div>

</form>
