@extends("main.main")



@section('content')


<main>      <div class="banner">        <div class="overlay">          <h1 align="center">Акции</h1>        </div>      </div>      <section>       
 <div class="container">
      @foreach($items as $item)

      {!! $item->content !!}

    @endforeach
 </div>        <!-- /.container -->      </section>    </main>





@endsection

