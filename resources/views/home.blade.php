@extends('layout.app')
@section('content')

<div class="latest-products">
  <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
            </div>
          </div>

          @foreach($products as $product)
            <div class="col-md-4">
              <div class="product-item">
                <a href="#"><img src={{$product['post_image']}} alt=""></a>
                <div class="down-content">
                  <a href="#"><h4>{{$product['name']}}</h4></a>
                  <ul class="stars">
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                    <li><i class="fa fa-star"></i></li>
                  </ul>
                  <span>Reviews (24)</span>
                </div>
              </div>
            </div>
          @endforeach


        </div>
      </div>
    </div>

@endsection