@extends('layout.app')
@section('content')
  <div class="container-fluid pt-5">
        <div class="text-center mb-4">
            <h2 class="section-title px-5"><span class="px-2">Trendy Products</span></h2>
        </div>
        <div class="row px-xl-5 pb-3">
          @foreach($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-12 pb-1">
                  <div class="card product-item border-0 mb-4">
                      
                      <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                        @if($product['post_image']!='')  
                          <img class="img-fluid w-100" src="{{$product['post_image'] }}" alt="No image">
                          @else
                          <img class="img-fluid w-100" src="{{asset('images/no_image.png')}}" alt="No image">
                          @endif
                      </div>
                      
                      <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                          <h6 class="text-truncate mb-3">{{$product['name']}}</h6>
                      </div>

                  </div>
              </div>
            @endforeach
        </div>
    </div>
@endsection