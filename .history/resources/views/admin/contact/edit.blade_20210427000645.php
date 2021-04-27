@extends('admin.main.main')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Изменить Контакты
                <small>приятные слова..</small>
            </h1>
        </section>

        <!-- Main content -->
        <section class="content">
            @include('admin.errors')
            <!-- Default box -->

            <form action="{{ route('contact.update', ['id' => $sl->id]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title">Обновляем контакты</h3>
                    </div>
                    <div class="box-body">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">email</label>
                                <textarea name="email" id="editor" cols="30" rows="10"
                                    class="form-control">{{ $sl->email }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Адресс</label>
                                <textarea name="address" id="editor" cols="30" rows="10"
                                    class="form-control">{{ $sl->address }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Телефоны</label>
                                <textarea name="phone" id="editor" cols="30" rows="10"
                                    class="form-control">{{ $sl->phone }}</textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1">карта</label>
                                <input type="hidden" name="map" id="editor" cols="30" rows="10"
                                    class="form-control" value="{{$sl->map}}">
                                <div id="map" style="height: 400px;"></div>
                                <script>
                                    var ckeditor1 = CKEDITOR.replace('editor1');

                                    var marker;

                                    function initMap() {
                                        var uluru = {
                                            lat: -25.363,
                                            lng: 131.044
                                        };
                                        var map = new google.maps.Map(document.getElementById('map'), {
                                            zoom: 14,
                                            center: uluru
                                        });
                                        var geocoder = new google.maps.Geocoder;
                                        geocoder.geocode({
                                            'address': 'Tashkent'
                                        }, function(results, status) {
                                            if (status === 'OK') {
                                                map.setCenter(results[0].geometry.location);
                                                marker = new google.maps.Marker({
                                                    map: map,
                                                    draggable: true,
                                                    position: results[0].geometry.location
                                                });
                                            } else {
                                                window.alert(
                                                    'Geocode was not successful for the following reason: ' +
                                                    status);
                                            }
                                            marker.addListener('dragend', function() {
                                                var latlng = marker.getPosition();
                                                var lat = latlng.lat();
                                                var lng = latlng.lng();
                                                var id = "{{$sl->id}}";

                                                jQuery('[name="map"]').attr('')


                                                jQuery.ajax({

                                                    //url: '<?>add_map',
                                                    type: 'POST',
                                                    data: {
                                                        lat: lat,
                                                        lng: lng,
                                                        id: id
                                                    },
                                                    success: function(res) {


                                                        console.log(id);
                                                    },
                                                    complete: function() {
                                                        $('#loader_map').fadeIn(1000).fadeOut(
                                                            1000);

                                                    }

                                                });

                                            });

                                        });



                                    }

                                </script>
                                <script async defer
                                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgJ3vc67_ZY5OD9lHJi3tvLqHdho3kEts&callback=initMap">
                                </script>
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
