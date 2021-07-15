@extends('master')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="">Filter</a>
                </div>
        
                <div class="col-md-12">
                    <h3>Trending Products</h3>
                    <div class="tranding-wrapper">
                        
                        @foreach($products as $product)
                            <div class="col-md-12">
                                <div class="card" style="width: 30%;">
                                    <a href="{{ route('product.show' , $product->id) }}">
                                        <img class="card-img-top" src="{{ $product->gallery }}" alt="Card image cap">
                                    </a>
                                    <div class="card-body">
                                      <h5 class="card-title">{{ $product->name }}</h5>
                                      <p class="card-text">{{ $product->description }}</p>
                                      <a href="{{ route('product.show' , $product->id) }}" class="btn btn-primary">View</a>
                                    </div>
                                  </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection
