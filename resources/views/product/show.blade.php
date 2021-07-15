@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <img class="single-page-img" src="{{ $product->gallery }}" alt="">
        </div>

        <div class="col-sm-6">
            <a href="/">Back</a>
            <div class="mt-5">
                <h3>{{ $product->name }}</h3>
                <h4>Price : {{ $product->price }}</h4>
                <h5>Description : {{ $product->description }}</h5>
                <h5>Category : {{ $product->category }}</h5>
            </div>

            <br> <br>

            <form action="{{ route('add-to-cart',$product) }}" method="post">
                @csrf
                <input type="hidden" value="{{ $product->id }}" name="product_id">
                <button class="btn btn-success">Add to Cart</button>
            </form>
            <br><br>
            
            <button class="btn btn-primary">Buy Now</button>
        </div>

    </div>
</div>
@endsection