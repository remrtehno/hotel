@extends('admin.main.main')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Специальные предложения

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

                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="form-group">
                        <a href="{{ route('suggestions.create') }}" class="btn btn-success">Добавить</a>
                    </div>


                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Текст</th>


                                <th>Картинка</th>
                                <th>Действия</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->title }}</td>
                                    <td>{!! $item->anonce !!} </td>



                                    <td>
                                        <img src="{{ $item->getImage() }}" alt="" width="100">
                                    </td>
                                    <td><a href="{{ route('suggestions.edit', ['id' => $item->id]) }}"
                                            class="fa fa-pencil" style="float: left;"></a>

                                        <form action="{{ route('suggestions.destroy', ['id' => $item->id]) }}"
                                            method="post">
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
