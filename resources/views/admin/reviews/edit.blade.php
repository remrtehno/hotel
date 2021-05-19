@extends('admin.main.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить Статью
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('admin.errors')
            <!-- Default box -->

            <form action="{{ route('reviews.update', ['id' => $sl->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем Статью</h3>
                    </div>


                    <div class="box-body">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Название</label>
                                <input value="{{ $sl->title }}" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="" name="title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">оценка</label>
                                <input value="{{ $sl->stars }}" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="" name="stars">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputFile">Картинка</label>
                                <input value="{{ $sl->img }}" type="file" id="exampleInputFile" name="img">

                                <p class="help-block">jpeg,png,jpeg</p>
                                <p class="help-block">размер 360x216</p>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Мета-ключевые слова, через запятую</label>
                                <input value="{{ $sl->meta_key }}" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="" name="meta_key">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Мета-описание</label>
                                <input value="{{ $sl->meta_desc }}" type="text" class="form-control" id="exampleInputEmail1"
                                    placeholder="" name="meta_desc">
                            </div>

                        </div>


                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="description" id="editor" cols="30" rows="10"
                                    class="form-control">{{ $sl->description }}</textarea>
                            </div>
                        </div>




                    </div>


                </div>






                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="hidden" name="_method" value="put">
                    <button class="btn btn-default">Назад</button>
                    <button class="btn btn-warning pull-right" type="submit">Изменить</button>
                </div>
                <!-- /.box-footer-->
    </div>
    </form>
    <!-- /.box -->

    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection
