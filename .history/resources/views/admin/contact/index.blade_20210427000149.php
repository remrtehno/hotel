@extends('admin.main.main')

@section('content')


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



                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>

                            <th>Email</th>
                            <th>Адрес</th>
                            <th>Телефон</th>



                            <th>Действия</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($about as $item)
                            <tr>
                                <td>{!! $item->email !!}  </td>
                                <td>{!! $item->address !!}  </td>
                                <td>{!! $item->phone !!} </td>




                                <td><a href="{{ route('contact.edit',['id'=>$item->id]) }}" class="fa fa-pencil" style="float: left;"></a>


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



<script>
var ckeditor1 = CKEDITOR.replace( 'editor1' );

var marker;
      function initMap() {
        var uluru = {lat: -25.363, lng: 131.044};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
       var geocoder = new google.maps.Geocoder;
        geocoder.geocode({'address': 'Tashkent'}, function(results, status) {
          if (status === 'OK') {
            map.setCenter(results[0].geometry.location);
          marker =  new google.maps.Marker({
              map: map,
			  draggable: true,
              position: results[0].geometry.location
            });
          } else {
            window.alert('Geocode was not successful for the following reason: ' +
                status);
          } 
		  marker.addListener('dragend', function() {
		 var latlng = marker.getPosition();
         var lat = latlng.lat();
         var lng = latlng.lng();
		 var id = "<?=1?>";
		 
      jQuery.ajax({
		  
		  //url: '<?>add_map',
		  type: 'POST',
		 data: {lat: lat, lng: lng,id: id},
		 success: function(res){
				
		
			console.log(id);	
		 },
		 	complete: function(){
					$('#loader_map').fadeIn(1000).fadeOut(1000);
					
					}
		  
		  });
			 
		 });
		
        });
		
		
		
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDgJ3vc67_ZY5OD9lHJi3tvLqHdho3kEts&callback=initMap">
    </script>

@endsection