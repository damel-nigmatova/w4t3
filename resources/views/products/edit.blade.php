@extends('products.layout')

@section('content')

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<form action="{{ route('products.update',$product->id) }}" method="POST" style="width: 600px; position: absolute; left: 30%; top: 5%;">
    @csrf
    @method('PUT')
    <h2 style="margin-left:-15px">Edit Product</h2>
     <div class="row">
        <div>
            <div class="form-group">
                <strong>Product name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $product->name }}">
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:100px" name="description">{{ $product->description }}</textarea>
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" class="form-control" name="price" placeholder="Price" value="{{ $product->price }}">
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" id="online" name="status" value="{{ $product->status }}">
            </div>
        </div>
        <div>
        <div class="form-group">
            <strong>Image:</strong>
            <input type="file" name="image" class="form-control" placeholder="image">
            <img src="/image/{{ $product->image }}" width="300px">
        </div>
        </div>
        <div>
            <div class="btns">
                <button type="submit" class="btn" style="background-color: #749937; color: white; padding: 10px 30px; font-size: 15px; border-radius: 5px; float: right;">Submit</button>
                <a class="btn" style="color: #749937; padding: 10px 30px; font-size: 15px; border-radius: 5px; border:1px solid #749937;" id="cancel" href="{{ route('products.index') }}"> Back</a>
            </div>
        </div>
    </div>

</form>
@endsection
