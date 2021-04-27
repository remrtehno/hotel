@extends("main.main")

@section('content')

<div class="container">
    <div class="product-container">
        <aside class="sidebar">
            <!-- BEGIN FILTER -->
            <form class="filter" action="">
                <!-- Sort Fields -->
                <input type="hidden" name="sortby" value="menuindex">
                <input type="hidden" name="sortdir" value="ASC">
                <!-- Sort End -->


                <div class="filter__section">
                    <p class="filter__title">Категории</p>

                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="33" value="33" id="check33">
                        <label for="check33">
                            <span>Радиология (УЗИ, рентген)</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="spec[]" data-filter-spec="32" value="32" id="check32">
                        <label for="check32">
                            <span>Педиатрия и неонатология</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="31" value="31" id="check31">
                        <label for="check31">
                            <span>Оториноларингология (ЛОР)</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="30" value="30" id="check30">
                        <label for="check30">
                            <span>Нейрохирургия</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="29" value="29" id="check29">
                        <label for="check29">
                            <span>Офтальмология</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="spec[]" data-filter-spec="28" value="28" id="check28">
                        <label for="check28">
                            <span>Терапия, кардиология</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="spec[]" data-filter-spec="27" value="27" id="check27">
                        <label for="check27">
                            <span>Акушерство и гинекология</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="spec[]" data-filter-spec="26" value="26" id="check26">
                        <label for="check26">
                            <span>Анестезиология-реаниматология</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="40" value="40" id="check40">
                        <label for="check40">
                            <span>Эндоскопия</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="39" value="39" id="check39">
                        <label for="check39">
                            <span>Хирургия и лапароскопия</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="38" value="38" id="check38">
                        <label for="check38">
                            <span>Урология и эндоурология</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="37" value="37" id="check37">
                        <label for="check37">
                            <span>Травматология и ортопедия</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="36" value="36" id="check36">
                        <label for="check36">
                            <span>Стоматология</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="spec[]" data-filter-spec="35" value="35" id="check35">
                        <label for="check35">
                            <span>Скорая помощь, военная медицина, МЧС</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="spec[]" data-filter-spec="34" value="34" id="check34">
                        <label for="check34">
                            <span>Сестринское дело</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="spec[]" data-filter-spec="25" value="25" id="check25">
                        <label for="check25">
                            <span>Ангиография</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>

                </div>
                <div class="filter__section">

                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="23" value="23" id="check23">
                        <label for="check23">
                            <span>Уход за детьми</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="22" value="22" id="check22">
                        <label for="check22">
                            <span>Уход за больными</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="21" value="21" id="check21">
                        <label for="check21">
                            <span>Спасение жизни, СЛР</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="20" value="20" id="check20">
                        <label for="check20">
                            <span>Роды</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="19" value="19" id="check19">
                        <label for="check19">
                            <span>Клиническое мышление</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox " style="display: none;">
                        <input type="checkbox" name="navik[]" data-filter-skill="18" value="18" id="check18">
                        <label for="check18">
                            <span>Инструментальная диагностика</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="17" value="17" id="check17">
                        <label for="check17">
                            <span>Инъекции и пункции</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="16" value="16" id="check16">
                        <label for="check16">
                            <span>Интубация, вентиляция</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox filter__hidden" style="display: none;">
                        <input type="checkbox" name="navik[]" data-filter-skill="24" value="24" id="check24">
                        <label for="check24">
                            <span>Хирургический шов</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>
                    <div class="form__checkbox">
                        <input type="checkbox" name="navik[]" data-filter-skill="15" value="15" id="check15">
                        <label for="check15">
                            <span>Объективные исследования</span>
                            <svg>
                                <use xlink:href="img/sprite.svg#check"></use>
                            </svg>
                        </label>
                    </div>

                </div>

            </form>
            <!-- END FILTER -->
        </aside>
        <div class="product__info">
            <div class="product__row">
                <div class="product__info-left">
                    <div class="product__section" id="section668">
                        <h3 class="product__desc-title">Афина</h3>
                        <div class="product__txt ">
                            <p>Беспроводное управление позволит использовать робот-симулятор Афина как в учебной аудитории, так и за ее пределами. Модель физиологии Афины разработана с учетом особенностей женского организма. За счет улучшенной модели
                                дыхательной системы Афина может автоматически реагировать на механическую вентиляцию легких, триггер аппарата ИВЛ и демонстрировать повышенный пик давления на вдохе. В программу также встроены метрики проведения
                                СЛР, которые позволят оценить правильность и эффективность реанимационных мероприятий.<img class="" src="img/athenabeautyprint.jpeg" alt="" width="2429" height="1317"></p>
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
                                <li>Односторонние и двусторонние экскурсии грудной клетки, синхронизированные с вентиляцией (спонтанной и механической)</li>
                                <li>Анатомически верные верхние дыхательные пути</li>
                                <li>Ларингоскопия и оральная интубация (ларингеальные маски, ЭТТ, орофарингеальные воздуховоды)
                                </li>
                                <li>Вентиляция дыхательным мешком</li>
                                <li>Симметричная и асимметричная вентиляция легких</li>
                                <li>Механическая вентиляция и различные режимы вентиляции (CMV, SIMV)</li>
                                <li>Эффективность вентиляции отражается в концентрациях альвеолярных и артериальных газов
                                </li>
                            </ul>
                            <h4>Сердечно-сосудистая система:</h4>
                            <ul>
                                <li>Билатеральный пульс на сонных, лучевых, радиальных и артериях стоп синхронизирован с сердечным циклом</li>
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
                                <li>Звуки сердца, кишечника и дыхания (спереди и сзади) управляются независимо (тип и громкость)</li>
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

                <div class="product__info-right">
                    <div class="product__images">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@include('products.sidebar')





<div class="modal-container ajax-product">
    <div class="modal-body">
        <div class="row">
            <div class="col-md-6">
                <img
                    src="{{ $product->getImage('home') }}"
                    class="img-responsive ajax-product-image"
                    alt=""
                />
            </div>
            <!-- /.col-md-6 -->
            <div class="col-md-6">
                <h4 class="modal-title">{{ $product->title }}</h4>
                <div>
                    {!! str_limit($product->anonce,350) !!}
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div>
</div>









@endsection