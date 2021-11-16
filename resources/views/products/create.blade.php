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

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" style="width: 600px; position: absolute; left: 30%; top: 5%;">
    @csrf
    <h2 style="margin-left:-15px; ">Add New Product</h2>
     <div class="row">
        <div>
            <div class="form-group">
                <strong>Product name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control" style="height:100px" name="description" placeholder="Description"></textarea>
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" class="form-control" name="price" placeholder="Price">
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Status:</strong>
                <input type="radio" id="online" name="status" value="0" style="margin-left: 100px;" checked>
                <label for="online">online</label>
                <input type="radio" id="offline" name="status" value="1" style="margin-left: 100px;">
                <label for="on=ffline">offline</label><br>
            </div>
        </div>
        <div>
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div>
            <div class="btns" style="float:right;">
                <button type="submit" style="background-color: #749937; color: white;padding: 10px 30px; font-size: 15px;" class="btn">Submit</button>
                <a class="btn" id="cancel" href="{{ route('products.index') }}" style=" border:1px solid #749937; padding: 10px 30px; font-size: 15px; color: #749937"> Back</a>
            </div>
        </div>
    </div>

</form>
@endsection
