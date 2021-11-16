@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <h1 style="margin-top: 50px;">Natural Alchemy Products</h1>
            <div class="pull-right">
                <a class="btn" href="{{ route('products.create') }}"><i class="far fa-plus-square" style="color: #749937;font-size:30px;"></i></a>
                <a class="btn" href="https://damelnigmatova.com/w4t3/projectW4T3/index.php"><i class="fas fa-laptop-house" style="color: #749937;font-size:30px;"></i></a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered" style="margin-bottom:100px;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Status</th>
            <th>Image</th>
            <th width="150px">Action</th>
        </tr>
        @foreach ($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->status }}</td>
            <td><img src="/image/{{ $product->image }}" width="100px"></td>
            <td>
                <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                    <a href="{{ route('products.edit',$product->id) }}" class="btn"><i class="fas fa-pen" style="color: #749937; margin-right: 20px;"></i></a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn"><i class="fas fa-trash-alt" style="color: #749937;;"></i></button>

                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection
