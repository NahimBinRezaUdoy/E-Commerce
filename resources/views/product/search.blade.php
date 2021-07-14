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
                            <a href="{{ route('product.show', $product->id)}}">
                                <div class="tranding-item">
                                    <img class="tranding-image" src="{{ $product->gallery }}" alt="">
                                    <div class="">
                                        <h5>{{ $product->name }}</h5>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

@endsection
