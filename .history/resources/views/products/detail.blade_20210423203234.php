@extends("main.main")

@section('content')

    <br>
    <br>

    <div class="container">
        <div class="product-container">

            @include('products.sidebar')


            <div class="product__info">
                <div class="product__row">
                    <div class="product__info-left">
                        <div class="product__section" id="section668">
                            <h3 class="product__desc-title">{{ $product->title }}</h3>

                            {!! str_limit($product->anonce,350) !!}
                        </div>

                            <div class="product__txt ">
                                <p>Беспроводное управление позволит использовать робот-симулятор Афина как в учебной
                                    аудитории, так и за ее пределами. Модель физиологии Афины разработана с учетом
                                    особенностей женского организма. За счет улучшенной модели
                                    дыхательной системы Афина может автоматически реагировать на механическую вентиляцию
                                    легких, триггер аппарата ИВЛ и демонстрировать повышенный пик давления на вдохе. В
                                    программу также встроены метрики проведения
                                    СЛР, которые позволят оценить правильность и эффективность реанимационных
                                    мероприятий.<img class="" src="img/athenabeautyprint.jpeg" alt="" width="2429"
                                        height="1317"></p>
                                <p>&nbsp;</p>
                                <p></p>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                        <div class="product__section" id="section123">
                            <h3 class="product__desc-title">Функциональные особенности</h3>
                            <div class="product__txt product__txt--two">
                                <h4>Дыхательная система:</h4>
                                <ul>
                                    <li>Спонтанное дыхание</li>
                                    <li>Артикуляция шеи</li>
                                    <li>Артикулируемая нижняя челюсть</li>
                                    <li>Односторонние и двусторонние экскурсии грудной клетки, синхронизированные с
                                        вентиляцией (спонтанной и механической)</li>
                                    <li>Анатомически верные верхние дыхательные пути</li>
                                    <li>Ларингоскопия и оральная интубация (ларингеальные маски, ЭТТ, орофарингеальные
                                        воздуховоды)
                                    </li>
                                    <li>Вентиляция дыхательным мешком</li>
                                    <li>Симметричная и асимметричная вентиляция легких</li>
                                    <li>Механическая вентиляция и различные режимы вентиляции (CMV, SIMV)</li>
                                    <li>Эффективность вентиляции отражается в концентрациях альвеолярных и артериальных
                                        газов
                                    </li>
                                </ul>
                                <h4>Сердечно-сосудистая система:</h4>
                                <ul>
                                    <li>Билатеральный пульс на сонных, лучевых, радиальных и артериях стоп синхронизирован с
                                        сердечным циклом</li>
                                    <li>Измерение АД билатерально путем аускультации и пальпации</li>
                                    <li>Кардиостимуляция и дефибрилляция</li>
                                    <li>ЭКГ по 12 отведениям</li>
                                    <li>Использование реального ЭКГ монитора</li>
                                    <li>В/в инъекции билатерально</li>
                                </ul>
                                <h4>СЛР:</h4>
                                <ul>
                                    <li>Детектор правильности положения рук</li>
                                    <li>Анализ СЛР</li>
                                </ul>
                                <h4>Нервная система:</h4>
                                <ul>
                                    <li>Реакция зрачков на свет</li>
                                    <li>Моргание и закрывание век</li>
                                    <li>Судороги ассоциированы с учащенным морганием и сотрясанием рук</li>
                                </ul>
                                <h4>Выделительная система:</h4>
                                <ul>
                                    <li>Катетеризация мочевого пузыря</li>
                                    <li>Выделение мочи</li>
                                </ul>
                                <h4>Звуки:</h4>
                                <ul>
                                    <li>Записанные звуки и речь, использование собственных звуков по беспроводному микрофону
                                    </li>
                                    <li>Звуки сердца, кишечника и дыхания (спереди и сзади) управляются независимо (тип и
                                        громкость)</li>
                                    <li>Звуки дыхания (свистящее и затрудненное) слышны</li>
                                </ul>
                            </div>
                        </div>
                        <div class="product__section" id="section124">
                            <h3 class="product__desc-title">Базовые клинические сценарии</h3>
                            <div class="product__txt ">
                                <ol>
                                    <li>Обострение хронической сердечной недостаточности</li>
                                    <li>Острый респираторный дистресс-синдром</li>
                                    <li>Поражение мозга с тромболитической терапией</li>
                                    <li>Сепсис с гипотонией</li>
                                    <li>Автомобильная авария и гиповолемический шок</li>
                                </ol>
                                <h4>&nbsp;</h4>
                            </div>
                        </div>
                        <div class="product__section" id="section1631">
                            <h3 class="product__desc-title">Дополнительная информация</h3>
                            <div class="product__txt ">
                                <p><a href="assets/files/roboty-simulyatory/afina/afina.pdf">Презентация "Афина,
                                        робот-симулятор женщины VI класса реалистичности"</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
