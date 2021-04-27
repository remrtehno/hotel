@extends("main.main")



@section('content')


<main>      <div class="banner">        <div class="overlay">          <h1 align="center">О нас</h1>        </div>      </div>      <section>       
 <div class="container">
      @foreach($about as $item)

      {!! $item->content !!}

    @endforeach
 </div>        <!-- /.container -->      </section>    </main>





@endsection

