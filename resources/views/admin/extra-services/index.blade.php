@extends("admin.main.main")

@section('content')

    <div class="content-wrapper">


        <!-- Main content -->
        <section class="content">

            <? /*
                 <h3>Дополнительные услуги</h3>
                <!-- Default box -->
                <div class="box">
                    <?php
                    // configuration
                    $url = 'http://example.com/backend/editor.php';
                    $file = resource_path('views') . '/extra-services/content.blade.php';

                    // read the textfile
                    $text = file_get_contents($file);
                    ?>
                    <!-- HTML form -->
                    <form action="{{ route('save_file') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="file-to-save" value="{{ $file }}">
                        <textarea name="text"><?php echo htmlspecialchars($text); ?></textarea>
                        <input type="submit" />
                        <input type="reset" />
                    </form>
                </div>
                <!-- /.box --> 

                */ ?>

                <h3>Политика конфидициальности</h3>
                <!-- Default box -->
                <div class="box">
                    <?php
                    // configuration
                    $url = 'http://example.com/backend/editor.php';
                    $file = resource_path('views') . '/inner-pages/politics.blade.php';

                    // read the textfile
                    $text = file_get_contents($file);
                    ?>
                    <!-- HTML form -->
                    <form action="{{ route('save_file') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="file-to-save" value="{{ $file }}">
                        <textarea name="text"><?php echo htmlspecialchars($text); ?></textarea>
                        <input type="submit" />
                        <input type="reset" />
                    </form>
                </div>
                <!-- /.box -->

                <h3>Пользовательское соглашение</h3>
                <!-- Default box -->
                <div class="box">
                    <?php
                    // configuration
                    $url = 'http://example.com/backend/editor.php';
                    $file = resource_path('views') . '/inner-pages/user-cond.blade.php';

                    // read the textfile
                    $text = file_get_contents($file);
                    ?>
                    <!-- HTML form -->
                    <form action="{{ route('save_file') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="file-to-save" value="{{ $file }}">
                        <textarea name="text"><?php echo htmlspecialchars($text); ?></textarea>
                        <input type="submit" />
                        <input type="reset" />
                    </form>
                </div>
                <!-- /.box -->

                <h3>Страница спасибо</h3>
                <!-- Default box -->
                <div class="box">
                    <?php
                    // configuration
                    $url = 'http://example.com/backend/editor.php';
                    $file = resource_path('views') . '/thanks/content.blade.php';

                    // read the textfile
                    $text = file_get_contents($file);
                    ?>
                    <!-- HTML form -->
                    <form action="{{ route('save_file') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="file-to-save" value="{{ $file }}">
                        <textarea name="text"><?php echo htmlspecialchars($text); ?></textarea>
                        <input type="submit" />
                        <input type="reset" />
                    </form>
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
@endsection
