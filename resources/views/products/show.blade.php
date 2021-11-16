@extends('products.layout')

@section('content')

<h2 style="margin-left:-15px">Add New Product</h2>
     <div class="row">
        <div>
            <div class="form-group">
                <strong>Product name:</strong>
                {{ $product->name }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Description:</strong>
                {{ $product->description }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Price:</strong>
                {{ $product->price }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Status:</strong>
                {{ $product->status }}
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Image:</strong>
                <img src="/image/{{ $product->image }}" width="500px">
            </div>
        </div>
    </div>
@endsection
