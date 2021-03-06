@extends('layouts.app')

@section('title')
    Edit Product
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Edit Product</h2>
                </div>

            </div>
        </div>
        <div class="row featured__filter">

            <form method="post" action="/products/{{$product->id}}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Name">Name</label>
                    <input class="form-control {{ $errors->has('name') ? 'border-danger' : '' }}" id="Name" type="text" name="name" value="{{$product->name}}" >
                    <p class="alert-danger"> {{  $errors->first('name') }}</p>
                </div>
                <div class="form-group">
                    <label for="Price">Price</label>
                    <input class="form-control {{ $errors->has('price') ? 'border-danger' : '' }}" id="Price" type="number" step=".05" name="price" value="{{$product->price}}" required>
                    <p class="alert-danger"> {{  $errors->first('price') }}</p>
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <textarea class="form-control {{ $errors->has('description') ? 'border-danger' : '' }}" id="Description" name="description" cols="30" rows="10" required>{{$product->description}}</textarea>
                    <p class="alert-danger"> {{  $errors->first('description') }}</p>
                </div>
                <button class="btn btn-primary" type="submit">Submit</button>
            </form>

        </div>
    </div>
@endsection