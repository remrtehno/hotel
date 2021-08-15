@extends('admin.main.main')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Об отеле

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

<form action="{{ route('about.update', ['id'=>1] ) }}" method="post" enctype="multipart/form-data">
        @csrf


                    <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Описание</label>
                                <textarea name="content" id="editor" cols="30" rows="10" class="form-control" >{{ $sl->content }}</textarea>
                            </div>
                        </div>

                        <div class="box-footer">
                    <input type="hidden" name="_method" value="put">

                    <button class="btn btn-warning pull-right" type="submit">Сохранить</button>
                </div>
</form>


                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection