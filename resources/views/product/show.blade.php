@extends('layouts.layout')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h1><strong>Name:</strong>{{$product->name}}</h1>
                        <h3><strong>Price: </strong>PHP {{ $product->price}}.00</h3>
                        <h3><strong>Stock: </strong>{{ $product->stock}}</h3>
                        <h3><strong>Description</strong></h3>
                        <p>{{ $product->description}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-center text-info">ACTION</h1>
                        <a href="{{ route('products.edit' , $product)}}" class="btn btn-outline-success btn-block">Edit</a>
                        <br>
                        <form action="{{ route('products.destroy' , $product) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger btn-block">Delete</button>
                        </form>
                        
                        <a href="{{ route('products.index')}}" class="btn btn-outline-primary btn-block">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection