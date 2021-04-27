

<style>
  .category-link-caption b {
    font-weight: 300;
    text-transform: uppercase;
display: block;
  }
  @media (min-width: 992px) {
    
  
  .category-link-caption {
    max-width: 64%;
  }

}
</style>
<section class="categories">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Категории товаров</h2>
            </div>
            <div class="col-md-12">
              <div class="row inner-row">
                @foreach($userwrap as $item)
                <div class="col-md-4 col-sm-6">
                  <div
                    class="category-link wow fadeInUp"
                    data-wow-duration="1s"
                  >
                    <a href="{{ route('category',['slug'=>$item->slug]) }}">
                      <picture>
                        <source srcset="{{ $item->getImage() }}" type="image/webp" />
                        <img src="{{ $item->getImage() }}" alt="" class="img-responsive" />
                      </picture>
                      <span class="category-link-caption">
                        {!! $item->title !!}
                      </span>
                      <!-- /.category-link-caption -->
                      <span class="arrow-link">
                        <i class="fas fa-arrow-circle-right"></i>
                      </span>
                      <!-- /.arrow-link -->
                    </a>
                  </div>
                  <!-- /.category-link -->
                </div>

                 @endforeach
              </div>
              <!-- /.row -->
            </div>
            <!-- /.col-md-9 -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>