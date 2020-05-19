@extends('layouts.layout')

@section('content')
    @if(session()->has('notif'))

    <div class="alert alert-success  fade show" role="alert">
    <strong>Notification :</strong> {{ session('notif')}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
    @endif
    <div class="container">
        <h1 class="text-info  text-center">SIMPLE PRODUCT CRUD</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Products</div>
                    <div class="card-body">
                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-md-4 mt-2">
                                <div class="card">
                                    <div class="card-header"><strong>{{ $product->name}}</strong></div>
                                    <div class="card-body">
                                        <h4 >Price:<p>{{ $product->price}}</p></h4> 
                                        <h4 class="text-success">Stock:<p>{{ $product->stock}}</p></h4> 
                                        <h4 class="text-info">Description:</h4> 
                                        <p>{{ substr($product->description, 0, 50) }} {{strlen($product->description) > 50 ? "..." : ""}}
                                        </p>
                                        <a href="{{ route('products.show' , $product)}}" class="btn btn-primary ">Read more</a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center">
                    <div class="card-body">
                     <a href="{{ route('products.create')}}" class="btn btn-outline-success">Create New Product</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection 