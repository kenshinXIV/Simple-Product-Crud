@extends('layouts.layout')

@section('content')
    <div class="container justify-content-center ">
        <div class="row">
            <div class="col-md-12 ">
                <div class="card">
                    <div class="card-body">
                        <h1 class="text-success text-center">Create New Products</h1>
                        <form action="{{ route('products.store')}}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="productName">Product Name</label>
                                <input type="text" name="name" class="form-control" id="productName"
                                value="{{old('name')}}" aria-describedby="productName" placeholder="Enter Product Name">
                                @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="productStock">Product Stock</label>
                                <input type="number" name="stock" class="form-control" id="productStock"
                                value="{{old('stock')}}"  aria-describedby="productStock" placeholder="Enter Product Stock">
                                @error('stock')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="productPrice">Product Price</label>
                                <input type="number" name="price" class="form-control" id="productPrice" 
                                value="{{old('price')}}" aria-describedby="productPrice" placeholder="Enter Product Price">
                                @error('price')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="productDescription">Product Description</label>
                                <textarea name="description" class="form-control" id="productDescription"  rows="5" 
                                value="{{old('description')}}" aria-describedby="productDescription" placeholder="Enter Product Description"></textarea>
                             
                                @error('description')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                            </div>
                          <button type="submit" class="btn btn-Success btn-block">Submit</button>
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>


@endsection