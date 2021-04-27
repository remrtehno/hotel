@extends('admin.main.main')

@section('content')

<br>
<br>
<div class="container">
    <div class="page-title">
        <h1>Уникальные продукты для отработки навыков сердечно-сосудистой хирургии теперь в нашей линейке</h1>
    </div>
    <div class="article">

        <div class="article__img"><img src="img/foto1-1160x393-aa4.png" alt="Уникальные продукты для отработки навыков сердечно-сосудистой хирургии теперь в нашей линейке"></div>
        <div class="article__wrap">
            <time class="article__time" datetime="">02&nbsp;апреля&nbsp;2021</time>
            <h1 class="article__title">Уникальные продукты для отработки навыков сердечно-сосудистой хирургии теперь в нашей линейке</h1>
            <div class="article__txt">
                <p>Главные проблемы и направления современной хирургии прямо и непосредственно связаны с хирургией сосудов</p>
                <section>
                    <p>Компания Виртумед пополнила свой ассортимент широким спектром фантомов и муляжей, на которых вы легко отработаете навыки кардиохирургии без риска для пациента.</p>
                    <p>Максимально реалистичный тренинг шунтирования, открытых операций на сердце предложен на</p>
                    <p><span style="text-decoration: underline;"><strong><a href="fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-dlya-provedeniya-vmeshatelstv-na-otkrytom-serdce.html">Фантоме для проведения вмешательств на открытом сердце</a></strong></span><b>, </b>а
                        также на</p>
                    <p><strong><span style="text-decoration: underline;"><a href="fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-grudnoj-kletki-dlya-otrabotki-navykov-kardiohirurgii.html">Фантоме грудной клетки для отработки навыков кардиохирургии</a></span>&nbsp;</strong></p>
                    <p>Вы отработаете:</p>
                    <ul>
                        <li>Коронарное шунтирование, проксимальные и дистальные анастомозы</li>
                        <li>Имплантацию аортального клапана</li>
                        <li>Аортальную канюляцию</li>
                        <li>Сквозной анастомоз на мелких сосудах</li>
                        <li>Процедуры на митральном клапане</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p><b>На <span style="text-decoration: underline;"><a href="fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-dlya-otrabotki-navykov-provedeniya-ekmo-i-perfuzii.html">Фантоме для отработки навыков проведения ЭКМО и перфузии</a> </span></b>вы
                        изучите:
                    </p>
                    <ul>
                        <li>Интубацию</li>
                        <li>ИВЛ</li>
                        <li>Канюляцию правого предсердия аорты и прошивание</li>
                        <li>Заполнение перфузионного контура</li>
                        <li>Мониторинг давления на внутриартериальном катетере</li>
                        <li>Антеградную кардиоплегию</li>
                        <li>Аортокоронарное шунтирование</li>
                        <li>Вено-Артериальную (ВА) ЭКМО и</li>
                        <li>Вено-Венозную (ВВ) ЭКМО</li>
                    </ul>
                    <p><b>&nbsp;</b></p>
                    <p>Мы подготовили для вас большой ассортимент современных <span style="text-decoration: underline;"><strong><a href="fantomy-simulyatory/fantomy-dlya-serdechno-sosudistoj-hirurgii/fantom-grudnoj-kletki-dlya-otrabotki-navykov-kardiohirurgii.html">муляжей сердца</a></strong></span>                                для фантомов кардиохирургии с отличными характеристиками<b>:</b></p>
                    <ul>
                        <li>натуральная величина со всеми анатомическими ориентирами, окрашенными в соответствующие цвета</li>
                        <li>детализированный внешний вид</li>
                        <li>по тактильным ощущениям напоминает реальное сердце</li>
                    </ul>
                    <p>&nbsp;</p>
                    <p>Мы обеспечим вас полным спектром расходных материалов.</p>
                    <p>Задавайте любые вопросы по новым продуктам, мы всегда рады помочь!</p>
                    <p>Виртумед – учить и вдохновлять!</p>
                </section>

            </div>
        </div>
    </div>
</div>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Blank page
                <small>it all starts here</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Examples</a></li>
                <li class="active">Blank page</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">

            <!-- Default box -->
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Листинг сущности</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{ route('news.create') }}" class="btn btn-success">Добавить</a>
                    </div>


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Анонс</th>

                                <th>Картинка</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($news as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! $item->anonce !!} </td>


                                    <td>
                                        <img src="{{ $item->getImage() }}" alt="" width="100">
                                    </td>
                                    <td><a href="{{ route('news.edit', ['id' => $item->id]) }}" class="fa fa-pencil"
                                            style="float: left;"></a>

                                        <form action="{{ route('news.destroy', ['id' => $item->id]) }}" method="post">
                                            @csrf

                                            <input type="hidden" name="_method" value="delete">
                                            <button onclick="return confirm('are you sure?')" type="submit" class="delete"
                                                style="float: left;border: 0;background: none; color: #0d6aad">
                                                <i class="fa fa-remove"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>

                            @endforeach

                            </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection
